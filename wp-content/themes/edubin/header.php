<?php
/**
 * Theme header 
 * @subpackage Edubin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="//gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php
  $post_id = edubin_get_id();
  $prefix = '_edubin_';
  $defaults = edubin_generate_defaults();

  $page_bg_color = get_post_meta($post_id, $prefix . 'page_bg_color', true);
  $header_top_show = get_theme_mod('header_top_show', $defaults['header_top_show']);
  $header_variations = get_theme_mod('header_variations', $defaults['header_variations'] );
  $sticky_header_enable = get_theme_mod('sticky_header_enable', $defaults['sticky_header_enable']);
  $preloader_show = get_theme_mod('preloader_show', $defaults['preloader_show']); 
  $preloader_styles = get_theme_mod('preloader_styles', $defaults['preloader_styles']); 
//  $page_header_show = get_theme_mod('page_header_show', $defaults['page_header_show']); 

  // CMB2
  $page_header_enable = get_post_meta($post_id, $prefix . 'page_header_enable', true);
  $page_header_img = get_post_meta($post_id, $prefix . 'header_img', true);
  $page_header_img = get_post_meta($post_id, $prefix . 'header_img', true);

  wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php if(!empty($page_bg_color)): ?>style="background-color: <?php echo esc_attr($page_bg_color); ?>"<?php endif; ?>>
 <?php
     // Preloader
  if( $preloader_styles == 'image_preloader' && $preloader_show == true): ?>

    <div class="edubin_image_preloader"></div>

  <?php elseif( $preloader_styles == 'preloader_1' && $preloader_show == true): ?>
    <div class="preloader">
      <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
      </div>
    </div>
  <?php elseif( $preloader_styles == 'preloader_2' && $preloader_show == true): ?>
     <div id="preloader_two">
        <div class="preloader_two">
            <span></span>
            <span></span>
        </div>
    </div>
  <?php endif; ?>

  <div id="page" class="site <?php if($sticky_header_enable == '0'): echo esc_attr( 'is-header-sticky-main'); endif; ?> <?php if($header_top_show == '1'): echo esc_attr( 'is-header-top-main'); endif; ?>">
    <header id="header" class="header-sections <?php if($sticky_header_enable == '1'): echo esc_attr( 'is-header-sticky'); endif; ?>">

    <?php if ($header_top_show == '1'): ?>
         <div class="header-top">
              <div class="container">
                  <?php get_template_part( 'template-parts/header/header', 'top' ); ?>
             </div>
         </div>
    <?php endif; ?>

      <div class="container">
        <?php 
              if( $header_variations == 'header_v1') :
                get_template_part( 'template-parts/header/header', 'v1' );
              elseif( $header_variations == 'header_v2') :
                get_template_part( 'template-parts/header/header', 'v2' ); 
              else : 
                get_template_part( 'template-parts/header/header', 'v2' );
             endif; 
         ?>
     </div>
   </header> 


     <?php if(!is_front_page() && $page_header_enable == 'enable'):  ?>
        <section class="page-header" style="background-image: url('<?php if ($page_header_img): ?><?php echo esc_url($page_header_img); ?><?php else : ?><?php echo esc_url( get_header_image() ); ?><?php endif ?>');">
          <div class="container">
           <?php get_template_part( 'template-parts/header/page-header' ); ?>
         </div>
       </section>
     <?php elseif($page_header_enable == !'enable'):  ?>
        <section class="page-header" style="background-image: url('<?php if ($page_header_img): ?><?php echo esc_url($page_header_img); ?><?php else : ?><?php echo esc_url( get_header_image() ); ?><?php endif ?>');">
          <div class="container">
           <?php get_template_part( 'template-parts/header/page-header' ); ?>
         </div>
       </section>
   <?php endif;?>


 <div id="content" class="site-content <?php if($page_header_enable == 'disable'): echo esc_attr( 'page-header-disable' ); endif; ?> ">