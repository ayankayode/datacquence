<?php 
    $post_id = edubin_get_id();

    if(function_exists('edubinGetPostViews')){ edubinSetPostViews(get_the_ID()); }

    // Customizer option
    $defaults = edubin_generate_defaults();
    $ld_sidebar_single_show = get_theme_mod( 'ld_sidebar_single_show', $defaults['ld_sidebar_single_show']); 
    $ld_related_course_show = get_theme_mod( 'ld_related_course_show', $defaults['ld_related_course_show']); 
?>
    <div id="courses-single" class="pt-90 pb-120 gray-bg edubin-learndash">
        <div class="container">
            <div class="row">
            <?php while ( have_posts() ) : the_post();
                    global $post; $post_id = $post->ID;
                    $course_id = $post_id;
                    $user_id   = get_current_user_id();
                    $current_id = $post->ID;

                    $enable_video = get_post_meta( $post->ID, '_learndash_course_grid_enable_video_preview', true );
                    $embed_code   = get_post_meta( $post->ID, '_learndash_course_grid_video_embed_code', true );
                    $button_text  = get_post_meta( $post->ID, '_learndash_course_grid_custom_button_text', true );

                    // Retrive oembed HTML if URL provided
                    if ( preg_match( '/^http/', $embed_code ) ) {
                        $embed_code = wp_oembed_get( $embed_code, array( 'height' => 600, 'width' => 400 ) );
                    }

                    $button_text = isset( $button_text ) && ! empty( $button_text ) ? $button_text : esc_html__( 'See more', 'edubin' );

                    $button_text = apply_filters( 'learndash_course_grid_custom_button_text', $button_text, $post_id );

                    $options = get_option('sfwd_cpt_options');
                    $currency = null;

                    if ( ! is_null( $options ) ) {
                        if ( isset($options['modules'] ) && isset( $options['modules']['sfwd-courses_options'] ) && isset( $options['modules']['sfwd-courses_options']['sfwd-courses_paypal_currency'] ) )
                        $currency = $options['modules']['sfwd-courses_options']['sfwd-courses_paypal_currency'];
                    }

                    if( is_null( $currency ) )
                        $currency = 'USD';

                    $course_options = get_post_meta($post_id, "_sfwd-courses", true);
                    $price = $course_options && isset($course_options['sfwd-courses_course_price']) ? $course_options['sfwd-courses_course_price'] : esc_html__( 'Free', 'edubin' );

                    $has_access   = sfwd_lms_has_access( $course_id, $user_id );
                    $is_completed = learndash_course_completed( $user_id, $course_id );

                    if( $price == '' )
                        $price .= esc_html__( 'Free', 'edubin' );

                    if ( is_numeric( $price ) ) {
                        if ( $currency == "USD" )
                            $price = '$' . $price;
                        else
                            $price .= ' ' . $currency;
                    }

                    $class       = '';
                    $ribbon_text = '';

                    if ( $has_access && ! $is_completed ) {
                        $class = 'ld_course_grid_price ribbon-enrolled';
                        $ribbon_text = esc_html__( 'Enrolled', 'edubin' );
                    } elseif ( $has_access && $is_completed ) {
                        $class = 'ld_course_grid_price';
                        $ribbon_text = esc_html__( 'Completed', 'edubin' );
                    } else {
                        $class = ! empty( $course_options['sfwd-courses_course_price'] ) ? 'ld_course_grid_price price_' . $currency : 'ld_course_grid_price free';
                        $ribbon_text = $price;
                    }

            ?>

                <div class="col-lg-<?php echo esc_attr($ld_sidebar_single_show) ? '8 ': '12' ;?>">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail( 'full' ); ?>
                            </div>
                        <?php endif; ?>
                        <div class="post-wrapper">
                            <div class="entry-content">
                                <?php
                                /* translators: %s: Name of current post */
                                the_content( sprintf(
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'edubin' ),
                                    get_the_title()
                                ) );

                                wp_link_pages( array(
                                    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'edubin' ),
                                    'after'       => '</div>',
                                    'link_before' => '<span class="page-number">',
                                    'link_after'  => '</span>',
                                ) );
                                ?>
                            </div><!-- .entry-content -->

                            <?php
                                if ( is_single() ) {
                                    edubin_entry_footer();
                                }
                            ?>

                        </div>
                    </article>

                </div>
            <?php endwhile; // End of the loop. ?>
            
            <?php if ($ld_sidebar_single_show) : ?>
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>

                    <?php if($ld_related_course_show && 'sfwd-courses' == get_post_type()) : ?>
                       <?php if(function_exists('edubin_Learndash_related_courses')){
                                edubin_Learndash_related_courses();
                        }; ?>
                      <?php endif ?>

                </div>
            <?php endif ?>

            </div> <!-- row -->

        </div> <!-- container -->
    </div>
