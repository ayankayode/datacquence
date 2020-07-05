<?php
/**
 * Template part for displaying posts
 * @package Edubin
 * Version: 1.0.0
 */

    // Customizer option
    $defaults = edubin_generate_defaults();
    $ld_course_archive_style = get_theme_mod( 'ld_course_archive_style', $defaults['ld_course_archive_style']); 
    $ld_course_archive_clm = get_theme_mod( 'ld_course_archive_clm', $defaults['ld_course_archive_clm'] ); 

    $ld_price_show = get_theme_mod( 'ld_price_show', $defaults['ld_price_show']);
    $ld_views_show = get_theme_mod( 'ld_views_show', $defaults['ld_views_show']);
    $ld_comment_show = get_theme_mod( 'ld_comment_show', $defaults['ld_comment_show']); 
    $see_more_btn = get_theme_mod( 'see_more_btn', $defaults['see_more_btn']); 

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

<div class="col-lg-<?php echo esc_attr($ld_course_archive_clm); ?> col-sm-6">
    <?php if ($ld_course_archive_style == '1' || $ld_course_archive_style == '2' || $ld_course_archive_style == '3') : ?>
        <div class="edubin-single-course-1 mb-30 ld-course">
            <div class="thum">
                <?php if ( has_post_thumbnail() ):?>
                    <div class="image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail();?>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if($ld_price_show == '1') : ?>
                    <div class="edubin-course-price-<?php echo esc_html($ld_course_archive_style); ?>">
                        <?php if ( $price) : ?>
                            <?php if ($ld_course_archive_style == '2' || $ld_course_archive_style == '3') : ?>
                               <span><?php echo esc_html($price); ?></span>
                               <?php else : ?>
                                <span><?php $price = str_replace('.00', '', $price); echo esc_html($price); ?></span>
                            <?php endif; ?> 

                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="course-content">

             <?php
                the_title( sprintf( '<h2 class="course-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
             ?>

             <?php if($ld_views_show == '1' || $ld_comment_show == '1' || $see_more_btn == '1') : ?>  
                <div class="course-bottom">
                    <div class="course-meta">
                        <ul>
                            <?php if($ld_views_show == '1') : ?>  
                                <?php if(function_exists('edubinGetPostViews')){ ?>
                                    <li><i class="glyph-icon flaticon-binoculars-1"></i> <?php echo esc_attr(edubinGetPostViews(get_the_ID())); ?></li>
                                <?php } ?>
                            <?php endif; ?>
                            <?php if($ld_comment_show == '1') : ?>  
                                <li><i class="glyph-icon flaticon-chat"></i><a href="<?php get_comments_link();?>"> <?php echo esc_attr(get_comments_number()); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php if($see_more_btn == '1') : ?>  
                        <div class="see-more-btn">
                            <a href="<?php the_permalink(); ?>"><?php echo esc_html($button_text) ; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div> 
    <?php elseif ($ld_course_archive_style == '4') : ?>
        <div class="edubin-single-course-2 ld-course">
            <div class="thum">
                <?php if ( has_post_thumbnail() ):?>
                    <div class="image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail();?>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if($ld_price_show == '1') : ?>
                    <div class="edubin-course-price-<?php echo esc_html($ld_course_archive_style); ?>">
                        <?php if ( $price) : ?>
                            <?php if ($ld_price_show == '2' || $ld_price_show == '3') : ?>
                               <span><?php echo esc_html($price); ?></span>
                               <?php else : ?>
                                <span><?php $price = str_replace('.00', '', $price); echo esc_html($price); ?></span>
                            <?php endif; ?> 
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if($ld_views_show == '1' || $ld_comment_show == '1' || $see_more_btn == '1') : ?>  
                    <div class="course-meta-area">
                        <?php if($see_more_btn == '1') : ?>  
                            <div class="see-more-btn">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html($button_text) ; ?></a>
                            </div>
                        <?php endif; ?>

                        <div class="course-meta">
                            <ul>
                                <?php if($ld_views_show == '1') : ?>
                                    <?php if(function_exists('edubinGetPostViews')){ ?>
                                        <li><i class="glyph-icon flaticon-binoculars-1"></i> <?php echo esc_attr(edubinGetPostViews(get_the_ID())); ?></li>
                                    <?php } ?>
                                <?php endif; ?>
                                <?php if($ld_comment_show == '1') : ?>  
                                    <li><i class="glyph-icon flaticon-chat"></i><a href="<?php get_comments_link();?>"> <?php echo esc_attr(get_comments_number()); ?></a></li>
                                <?php endif; ?>
                                
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="content">
                <?php
                the_title( sprintf( '<h2 class="course-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                ?>
            </div>
        </div> 
    <?php endif; ?>
</div>
