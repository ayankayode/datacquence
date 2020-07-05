    <?php
/**
 * The template for displaying woocommerce
 * @package Edubin
 * Version: 1.0.0
 */

get_header();

$defaults          = edubin_generate_defaults();
$edubin_wc_sidebar = get_theme_mod('edubin_wc_sidebar', $defaults['edubin_wc_sidebar']);
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">

                <?php if ( is_active_sidebar( 'woocommerce_shop_page_top_sidebar' ) && is_shop()) : ?>
                    <div class="shop-top-widget-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="secondary" class="widget-area shop-top-widget">
                                    <?php dynamic_sidebar( 'woocommerce_shop_page_top_sidebar' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            
                <?php if ( is_active_sidebar( 'woocommerce_product_page_top_sidebar' ) && is_product()) : ?>
                    <div class="shop-top-widget-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="secondary" class="widget-area shop-top-widget">
                                    <?php dynamic_sidebar( 'woocommerce_product_page_top_sidebar' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            <div class="row">
                <?php if ('sidebarleft' == $edubin_wc_sidebar): ?>
                    <div class="col-md-4">
                        <?php get_sidebar();?>
                    </div>
                <?php endif;?>

                <?php if ('sidebarnone' == $edubin_wc_sidebar): ?>
                    <div class="col-md-12">
                        <?php else: ?>
                            <div class="<?php if(is_active_sidebar( 'sidebar-1' )):  echo 'col-md-8 content-wrapper'; else: echo 'col-md-12 content-wrapper'; endif;?>">
                            <?php endif;?>

                            <?php woocommerce_content();?>

                        </div>
                        <?php if ('sidebarright' == $edubin_wc_sidebar): ?>
                            <div class="col-md-4">
                                <?php get_sidebar();?>
                            </div>

                            <?php elseif ('sidebarnone' == $edubin_wc_sidebar): ?>

                            <?php else: ?>
                                <div class="col-md-4">
                                    <?php get_sidebar();?>
                                </div>
                            <?php endif;?>
                    </div><!-- .row -->
            </div>
        </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();