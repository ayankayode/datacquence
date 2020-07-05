<?php
/**
 * The template for displaying the footer
 * @package Edubin
 * Version: 1.0.0
 */
    $defaults = edubin_generate_defaults();
    $copyright_show = get_theme_mod( 'copyright_show', $defaults['copyright_show']);
    $back_to_top_show = get_theme_mod( 'back_to_top_show', $defaults['back_to_top_show']); 
    $footer_widget_area_column = get_theme_mod( 'footer_widget_area_column', $defaults['footer_widget_area_column']); 
?>
        </div><!-- #content -->
        		<footer id="colophon" class="site-footer">
        			<?php 
                        if ( is_active_sidebar( 'footer-1' ) ||
                             is_active_sidebar( 'footer-2' ) ||
                             is_active_sidebar( 'footer-3' ) ||
                             is_active_sidebar( 'footer-4' ) ) :
                             if ($footer_widget_area_column == '12') :
                                get_template_part( 'template-parts/footer/widgets-1' );
                            elseif($footer_widget_area_column == '6_6') :
                                get_template_part( 'template-parts/footer/widgets-2' );
                            elseif($footer_widget_area_column == '4_4_4') :
                                get_template_part( 'template-parts/footer/widgets-3' );
                            elseif($footer_widget_area_column == '3_3_3_3') :
                                get_template_part( 'template-parts/footer/widgets-4' );
                            elseif($footer_widget_area_column == '3_6_3') :
                                get_template_part( 'template-parts/footer/widgets-5' );
                            elseif($footer_widget_area_column == '4_3_2_3') :
                                get_template_part( 'template-parts/footer/widgets-6' );
                             endif; 
                        endif; 
                    ?>
                <?php if ($copyright_show) : ?>
                    <div class="footer-bottom">
                        <div class="container">
                        	<div class="row footer-wrap">
                            <?php if ( is_active_sidebar( 'copyright' ) ) : ?>
                                <div class="<?php if(has_nav_menu( 'footer_menu' )):  echo 'col-md-6'; else: echo 'col-md-12 text-center'; endif;?>">
                                    <?php dynamic_sidebar( 'copyright' ); ?>
                                </div>
                            <?php else : ?>
                                <div class="<?php if(has_nav_menu( 'footer_menu' )):  echo 'col-md-6'; else: echo 'col-md-12 text-center'; endif;?>">
                                    <?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
                                </div>
                            <?php endif; ?>

                             <?php if ( is_active_sidebar( 'copyright_2' ) ) : ?>
                                <div class="col-md-6 text-ml-left">
                                    <?php dynamic_sidebar( 'copyright_2' ); ?>
                                </div>
                            <?php else : ?>
                                <?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
                                    <div class="col-md-6 text-right text-ml-left">
            
                                            <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'edubin' ); ?>">
                                                <?php
                                                    wp_nav_menu( array(
                                                        'theme_location' => 'footer_menu',
                                                        'container_class'     => '',
                                                        'depth'          => 1,
                                                    ) );
                                                ?>
                                            </nav>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        	</div>
                        </div>
                    </div>
                <?php endif; ?>
        		</footer><!-- #colophon -->
            </div><!-- #page -->

            <?php if($back_to_top_show == '1') : ?>
            <a href="#page" class="back-to-top" id="back-to-top">
                <i class="fa fa-chevron-up" aria-hidden="true"></i>
            </a>
            <?php endif; ?>

        <?php wp_footer(); ?>
    </body>
</html>
