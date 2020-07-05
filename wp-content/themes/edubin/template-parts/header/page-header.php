<?php
    $post_id = edubin_get_id();
    $prefix = '_edubin_';
    $defaults = edubin_generate_defaults();
    $page_header_enable = get_post_meta($post_id, $prefix . 'page_header_enable', true);
    $page_header_img = get_post_meta($post_id, $prefix . 'header_img', true);
    $breadcrumb_show = get_theme_mod( 'breadcrumb_show', $defaults['breadcrumb_show']); 
    $header_variations = get_theme_mod( 'header_variations', $defaults['header_variations'] );
?>

    <?php if(function_exists( 'is_woocommerce' ) && is_woocommerce()){ ?>

        <h2 class="page-title"><?php woocommerce_page_title(); ?></h2>

       <?php } elseif(function_exists( 'tribe_events' ) && tribe_is_month() && is_archive()){ ?>

        <h2 class="page-title"><?php esc_html_e( 'Events Calendar', 'edubin'); ?></h2>

       <?php } elseif(function_exists( 'tribe_events' ) && is_single() && is_singular( 'tribe_events' )){ ?>

        <h2 class="page-title"><?php single_post_title(); ?></h2>

    <?php } elseif(is_page() || is_single()){ ?>

        <h2 class="page-title"><?php echo esc_html( get_the_title() ); ?></h2>

    <?php } elseif( is_search() ){ ?>

        <h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'edubin' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

    <?php }elseif( is_404() ){ ?>

        <h2 class="page-title"><?php esc_html_e( 'Page Not Found: 404', 'edubin'); ?></h2>

    <?php }elseif( is_home() ){ ?>

        <h2 class="page-title"><?php single_post_title(); ?></h2>
        
    <?php } 

    else {
        if(is_archive()) {
            the_archive_title( '<h2 class="page-title">', '</h2>' ); 
        }
        ?>

        <?php if ( is_single() ) { ?>
            <h2 class="page-title"><?php single_post_title(); ?></h2>
        <?php  }
        
    }
    ?>
    <?php if($breadcrumb_show == '1'): ?>
        <div class="header-breadcrumb">
            <?php edubin_breadcrumb_trail(); ?>
        </div>
    <?php endif; ?>



