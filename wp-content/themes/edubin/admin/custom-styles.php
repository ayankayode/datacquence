<?php

if (!function_exists('edubin_customizer_theme_style')):
    function edubin_customizer_theme_style()
{

        $defaults = edubin_generate_defaults();

        $primary_color               = get_theme_mod('primary_color', $defaults['primary_color']);
        $secondary_color             = get_theme_mod('secondary_color', $defaults['secondary_color']);
        $tertiary_color              = get_theme_mod('tertiary_color', $defaults['tertiary_color']);
        $link_color                  = get_theme_mod('link_color', $defaults['link_color']);
        $link_hover_color            = get_theme_mod('link_hover_color', $defaults['link_hover_color']);
        $btn_color                   = get_theme_mod('btn_color', $defaults['btn_color']);
        $btn_hover_color             = get_theme_mod('btn_hover_color', $defaults['btn_hover_color']);
        $menu_text_color             = get_theme_mod('menu_text_color', $defaults['menu_text_color']);
        $menu_hover_color            = get_theme_mod('menu_hover_color', $defaults['menu_hover_color']);
        $sub_menu_text_color         = get_theme_mod('sub_menu_text_color', $defaults['sub_menu_text_color']);
        $sub_menu_arrow_color        = get_theme_mod('sub_menu_arrow_color', $defaults['sub_menu_arrow_color']);
        $sub_menu_border_color       = get_theme_mod('sub_menu_border_color', $defaults['sub_menu_border_color']);
        $sub_menu_bg_color           = get_theme_mod('sub_menu_bg_color', $defaults['sub_menu_bg_color']);
        $mobile_menu_icon_color      = get_theme_mod('mobile_menu_icon_color', $defaults['mobile_menu_icon_color']);
        $preloader_show              = get_theme_mod('preloader_show', $defaults['preloader_show']);
        $preloader_image_url         = get_theme_mod('preloader_image_url', $defaults['preloader_image_url']);
        $preloader_color_primary     = get_theme_mod('preloader_color_primary', $defaults['preloader_color_primary']);
        $preloader_color_secondary   = get_theme_mod('preloader_color_secondary', $defaults['preloader_color_secondary']);
        $preloader_bg_color          = get_theme_mod('preloader_bg_color', $defaults['preloader_bg_color']);
        $bakc_to_top_icon_color      = get_theme_mod('bakc_to_top_icon_color', $defaults['bakc_to_top_icon_color']);
        $bakc_to_top_bg_color        = get_theme_mod('bakc_to_top_bg_color', $defaults['bakc_to_top_bg_color']);
        $header_banner_overlay_color = get_theme_mod('header_banner_overlay_color', $defaults['header_banner_overlay_color']);
        $btn_text_color              = get_theme_mod('btn_text_color', $defaults['btn_text_color']);
        $btn_text_hover_color        = get_theme_mod('btn_text_hover_color', $defaults['btn_text_hover_color']);
        $search_popup_bg_color       = get_theme_mod('search_popup_bg_color', $defaults['search_popup_bg_color']);
        $placeholder_color           = get_theme_mod('placeholder_color', $defaults['placeholder_color']);

        $logo_size                                 = get_theme_mod('logo_size', $defaults['logo_size']);
        $mobile_logo                               = get_theme_mod('mobile_logo', $defaults['mobile_logo']);
        $mobile_logo_size                          = get_theme_mod('mobile_logo_size', $defaults['mobile_logo_size']);
        $mobile_logo_screen_width                  = get_theme_mod('mobile_logo_screen_width', $defaults['mobile_logo_screen_width']);
        $menu_position                             = get_theme_mod('menu_position', $defaults['menu_position']);
        $top_massage_area_width                    = get_theme_mod('top_massage_area_width', $defaults['top_massage_area_width']);
        $course_title_show                         = get_theme_mod('course_title_show', $defaults['course_title_show']);
        $sub_menu_right_align                      = get_theme_mod('sub_menu_right_align', $defaults['sub_menu_right_align']);
        $sub_menu_width                            = get_theme_mod('sub_menu_width', $defaults['sub_menu_width']);
        $tbe_archive_word_hide                     = get_theme_mod('tbe_archive_word_hide', $defaults['tbe_archive_word_hide']);
        $show_copyright_menu                       = get_theme_mod('show_copyright_menu', $defaults['show_copyright_menu']);
        $header_page_title_align                   = get_theme_mod('header_page_title_align', $defaults['header_page_title_align']);
        $page_header_height                        = get_theme_mod('page_header_height', $defaults['page_header_height']);
        $page_header_height_small_screen           = get_theme_mod('page_header_height_small_screen', $defaults['page_header_height_small_screen']);
        $page_header_height_small_screen_width     = get_theme_mod('page_header_height_small_screen_width', $defaults['page_header_height_small_screen_width']);
        $header_title_font_size                    = get_theme_mod('header_title_font_size', $defaults['header_title_font_size']);
        $header_title_font_size_small_device       = get_theme_mod('header_title_font_size_small_device', $defaults['header_title_font_size_small_device']);
        $header_title_font_size_small_device_width = get_theme_mod('header_title_font_size_small_device_width', $defaults['header_title_font_size_small_device_width']);
        ?>

                  <style type="text/css">

                    <?php if ($preloader_image_url && $preloader_show == true): ?>
                      .edubin_image_preloader {
                        background: url(<?php echo esc_url($preloader_image_url); ?>) center no-repeat <?php echo esc_attr($preloader_bg_color); ?>;
                      }
                    <?php endif;?>

      <?php if ($menu_position): ?>
        /* Menu area top padding */
        .main-navigation, .header-right-icon {
          padding-top: <?php echo esc_attr($menu_position . 'px'); ?>;
        }
      <?php endif;?>

      <?php if ($sub_menu_width): ?>
        /* Menu area top padding */
        .main-navigation ul ul a {
          width: <?php echo esc_attr($sub_menu_width . 'px'); ?>;
        }
      <?php endif;?>

      <?php if ($top_massage_area_width): ?>
        /* Top marque message are width */
        .header-top .contact-info li.massage .top-marquee {
          width: <?php echo esc_attr($top_massage_area_width . 'px'); ?>;
        }
        @media (min-width: 992px) and (max-width: 1199.98px) {
          .header-top .contact-info li.massage .top-marquee {
            width: 250px;
          }
        }
      <?php endif;?>

      <?php if ($logo_size): ?>
        /* For logo only */
        body.home.title-tagline-hidden.has-header-image .custom-logo-link img,
        body.home.title-tagline-hidden.has-header-video .custom-logo-link img,
        .header-wrapper .header-menu .site-branding img,
        .site-branding img.custom-logo {
          max-width: <?php echo esc_attr($logo_size . 'px'); ?>;
        }
      <?php endif;?>

      @media (max-width: <?php echo esc_attr($mobile_logo_screen_width . 'px'); ?>) {

       <?php if ($mobile_logo): ?>
        .header-sections .custom-logo-link img{
          display: none;
        }
      <?php endif;?>

      .header-sections .mobile-logo-active.edubin-mobile-logo {
        display: block;
      }
      .header-sections .edubin-mobile-logo {
        display: block;
      }
      .header-sections .edubin-mobile-logo img{
        max-width: <?php echo esc_attr($mobile_logo_size . 'px'); ?>;
      }

    }

    <?php if (get_theme_mod('home_menu_acive_color') == false): ?>
      <?php if (get_theme_mod('home_menu_acive_color') == false && get_theme_mod('menu_text_color')): ?>
      .main-navigation li.menu-item-home.current-menu-item.current-menu-parent>a{
        color: <?php echo esc_attr($menu_text_color); ?>;
      }
      <?php elseif (get_theme_mod('home_menu_acive_color') == false): ?>
       .main-navigation li.menu-item-home.current-menu-item.current-menu-parent>a{
        color: #07294d;
      }
    <?php endif;?>

  <?php endif;?>
  <?php if ($sub_menu_right_align): ?>
    .main-navigation ul>li ul li:hover>ul {
      left: 100%;
      right: auto;
    }
  <?php endif;?>
/*  Header title align*/
  <?php if ($header_page_title_align): ?>
    .is-header-top-main .page-header{
      text-align: <?php echo esc_attr($header_page_title_align); ?>;
    }
  <?php endif;?>
  /*  Header title height*/
  <?php if ($page_header_height): ?>
    .page-header{
      min-height: <?php echo esc_attr($page_header_height . 'px'); ?>;
    }
  <?php endif;?>
  /*  Header title height small device*/
     @media (max-width: <?php echo esc_attr($page_header_height_small_screen_width . 'px'); ?>) {

       <?php if ($page_header_height_small_screen): ?>
        .page-header{
          min-height: <?php echo esc_attr($page_header_height_small_screen . 'px'); ?>;
        }
      <?php endif;?>
      }
  /* Header title font size*/
  <?php if ($header_title_font_size): ?>
    .page-header .page-title {
        font-size: <?php echo esc_attr($header_title_font_size . 'px'); ?>;
    }
  <?php endif;?>

  /* Header title font size for mobile device */
  @media (max-width: <?php echo esc_attr($header_title_font_size_small_device_width . 'px'); ?>) {
    <?php if ($header_title_font_size_small_device): ?>
      .page-header .page-title {
          font-size: <?php echo esc_attr($header_title_font_size_small_device . 'px'); ?>;
      }
    <?php endif;?>
  }
  /*Core*/
  .site-title, .site-title a{
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  h1, h2, h3, h4, h5, h6{
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .edubin-entry-footer .cat-links, .edubin-entry-footer .tags-links{
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .widget .widget-title{
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  button, input[type="button"], input[type="submit"]{
    border: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
  }
  .learnpress .price-button button:hover,
  .learnpress .price-button input[type="button"]:hover,
  .learnpress input[type="submit"]:hover{
    background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
  button, input[type="button"],
  input[type="submit"]{
    color:<?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
  }
  button:hover, button:focus, input[type="button"]:hover,
  input[type="button"]:focus, input[type="submit"]:hover,
  input[type="submit"]:focus{
    background-color:<?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  }
  button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="submit"]:hover, input[type="submit"]:focus{
   color:<?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
 }

 .edubin-main-btn a{
   color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
 }
 .edubin-main-btn:hover {
  border-color:<?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  background-color:<?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;

}
.edubin-main-btn:hover a{
 color:<?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
.edubin-main-btn{
 background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .colors-light .pagination .nav-links .page-numbers.current{
   background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
 }
<?php endif?>
<?php if (get_theme_mod('primary_color')): ?>
  .colors-light .pagination .nav-links a:hover{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
 }
<?php endif?>
.colors-light .pagination .nav-links .page-numbers.current:hover{
 background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.back-to-top{
 background: <?php echo esc_attr(get_theme_mod('bakc_to_top_bg_color')); ?>;
}
.back-to-top{
 color: <?php echo esc_attr(get_theme_mod('bakc_to_top_icon_color')); ?>;
}
.back-to-top > i{
  color: <?php echo esc_attr(get_theme_mod('bakc_to_top_icon_color')); ?>;
}
.preloader .color-1{
 background-color: <?php echo esc_attr(get_theme_mod('preloader_color_primary')); ?> !important;
}
.preloader .rubix-cube .layer{
  background-color: <?php echo esc_attr(get_theme_mod('preloader_color_secondary')); ?>;
}
.preloader{
  background-color: <?php echo esc_attr(get_theme_mod('preloader_bg_color')); ?>;
}
#preloader_two {
  background-color: <?php echo esc_attr(get_theme_mod('preloader_bg_color')); ?>;
}

#preloader_two .preloader_two span {
  background-color: <?php echo esc_attr(get_theme_mod('preloader_color_primary')); ?>;
}
::-webkit-input-placeholder {
  color: <?php echo esc_attr(get_theme_mod('placeholder_color')); ?>;
}
:-moz-placeholder {
  color: <?php echo esc_attr(get_theme_mod('placeholder_color')); ?>;
}
::-moz-placeholder {
  color: <?php echo esc_attr(get_theme_mod('placeholder_color')); ?>;
}
:-ms-input-placeholder {
  color: <?php echo esc_attr(get_theme_mod('placeholder_color')); ?>;
}
.edubin-social a.edubin-social-icon{
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .site-footer .widget .edubin-social a:hover{
   color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   background: transparent;
   border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
<?php endif;?>
<?php if (get_theme_mod('primary_color')): ?>
  .header-right-icon ul li a span{
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    color: #fff;
  }
<?php endif;?>
.header-right-icon ul li a{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}

/*Blog*/
.post .entry-meta li{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.post .entry-title a:hover, .post .entry-title a:focus, .post .entry-title a:active{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.navigation .nav-links .nav-title:hover{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
ul.entry-meta li i{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
#comments .logged-in-as>a:last-child{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.edubin_recent_post .edubin_recent_post_title a:hover{
 color: <?php echo esc_attr(get_theme_mod('link_hover_color')); ?>;
}
.page-links .post-page-numbers.current, .nav-links .page-numbers.current{
 background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
 border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.page-links a:hover, .nav-links a:hover{
 border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.page-links a, .nav-links a{
 background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
 border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
/*Sidebar*/
.widget .widget-title:before{
 background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.edubin_recent_post .edubin_recent_post_title a{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
table#wp-calendar td#today{
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}

/*Core*/

.rubix-cube .layer{
 background-color:<?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.page-header:before{
 background-color:<?php echo esc_attr(get_theme_mod('header_banner_overlay_color')); ?>;
}
.edubin-search-box{
 background-color:<?php echo esc_attr(get_theme_mod('search_popup_bg_color')); ?>70;
}
.edubin-search-box .edubin-search-form input{
 color:<?php echo esc_attr(get_theme_mod('search_popup_bg_color')); ?>;
 border-color:<?php echo esc_attr(get_theme_mod('search_popup_bg_color')); ?>;
}
.edubin-search-box .edubin-search-form input[type="text"]:focus{
 border-color:<?php echo esc_attr(get_theme_mod('search_popup_bg_color')); ?>;
}
.edubin-search-box .edubin-search-form button{
 color:<?php echo esc_attr(get_theme_mod('search_popup_bg_color')); ?>;
}
.error-404 .error-404-heading{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.error-404 a{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.error-404 a:hover{
  color: <?php echo esc_attr(get_theme_mod('link_hover_color')); ?>;
}
/*blog*/

.entry-title a{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.edubin-entry-footer .cat-tags-links a:hover{
 border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
 background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.comment-reply-link{
 color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.comment-author-link{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>
}
a.comment-reply-link:hover{
 color: <?php echo esc_attr(get_theme_mod('link_hover_color')); ?>;
}
.comments-area .comment-meta b.fn{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
article.post.sticky{
 border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
body a{
 color: <?php echo esc_attr(get_theme_mod('link_color')); ?>;
}
body a:hover, body a:active{
  color: <?php echo esc_attr(get_theme_mod('link_hover_color')); ?>
}
.widget a{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, textarea:focus{
  border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.widget .tagcloud a:hover, .widget .tagcloud a:focus, .widget.widget_tag_cloud a:hover, .widget.widget_tag_cloud a:focus, .wp_widget_tag_cloud a:hover, .wp_widget_tag_cloud a:focus{
 background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .widget .tagcloud a:hover{
    color: #fff;
  }
<?php endif;?>
.widget .tag-cloud-link{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}

/*menu*/
.header-menu .mobile-menu-icon i{
  color: <?php echo esc_attr(get_theme_mod('mobile_menu_icon_color')); ?>;
}
.header-menu span.zmm-dropdown-toggle{
  color: <?php echo esc_attr(get_theme_mod('mobile_menu_icon_color')); ?>;
}
.main-navigation a{
 color: <?php echo esc_attr(get_theme_mod('menu_text_color')); ?>;
}
.mobile-menu>ul li a{
 color: <?php echo esc_attr(get_theme_mod('menu_text_color')); ?>;
}
.menu-effect-2 .main-navigation .current-menu-item.menu-item-home>a{
  color: <?php echo esc_attr(get_theme_mod('menu_text_color')); ?>;
}
.menu-effect-2 .main-navigation ul ul{
  border-top-color: <?php echo esc_attr(get_theme_mod('sub_menu_border_color')); ?>;
}
.menu-effect-2 .main-navigation li.current-menu-ancestor>a{
  color: <?php echo esc_attr(get_theme_mod('menu_hover_color')); ?>;
}
.menu-effect-2 .main-navigation li.current-menu-item>a{
 color: <?php echo esc_attr(get_theme_mod('menu_hover_color')); ?>;
}
.menu-effect-2 .main-navigation li ul .current-menu-item a{
 color: <?php echo esc_attr(get_theme_mod('menu_hover_color')); ?>;
}
.menu-effect-2 .main-navigation a:hover{
 color: <?php echo esc_attr(get_theme_mod('menu_hover_color')); ?>;
}
.menu-effect-2 .main-navigation ul ul a{
  color: <?php echo esc_attr(get_theme_mod('sub_menu_text_color')); ?>;
}
.menu-effect-2 .main-navigation ul ul a:hover{
 color: <?php echo esc_attr(get_theme_mod('sub_menu_text_color')); ?>;
}
.main-navigation ul ul{
 background: <?php echo esc_attr(get_theme_mod('sub_menu_bg_color')); ?>;
}
.menu-effect-2 .main-navigation ul ul{
 background: <?php echo esc_attr(get_theme_mod('sub_menu_bg_color')); ?>;
}
.main-navigation li.current-menu-ancestor>a{
 color: <?php echo esc_attr(get_theme_mod('menu_hover_color')); ?>;
}
.main-navigation ul ul a::before{
 background: <?php echo esc_attr(get_theme_mod('sub_menu_arrow_color')); ?>;
}
.main-navigation ul ul a:hover{
 color: <?php echo esc_attr(get_theme_mod('menu_hover_color')); ?>;
}


<?php if (class_exists('WPForms')): //  exists for wpfroms ?>
  div.wpforms-container-full .wpforms-form input[type=submit], div.wpforms-container-full .wpforms-form button[type=submit], div.wpforms-container-full .wpforms-form .wpforms-page-button{
    border: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
  }
  div.wpforms-container-full .wpforms-form input[type=date]:focus, div.wpforms-container-full .wpforms-form input[type=datetime]:focus, div.wpforms-container-full .wpforms-form input[type=datetime-local]:focus, div.wpforms-container-full .wpforms-form input[type=email]:focus, div.wpforms-container-full .wpforms-form input[type=month]:focus, div.wpforms-container-full .wpforms-form input[type=number]:focus, div.wpforms-container-full .wpforms-form input[type=password]:focus, div.wpforms-container-full .wpforms-form input[type=range]:focus, div.wpforms-container-full .wpforms-form input[type=search]:focus, div.wpforms-container-full .wpforms-form input[type=tel]:focus, div.wpforms-container-full .wpforms-form input[type=text]:focus, div.wpforms-container-full .wpforms-form input[type=time]:focus, div.wpforms-container-full .wpforms-form input[type=url]:focus, div.wpforms-container-full .wpforms-form input[type=week]:focus, div.wpforms-container-full .wpforms-form select:focus, div.wpforms-container-full .wpforms-form textarea:focus{
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  }
  div.wpforms-container-full .wpforms-form input:focus, div.wpforms-container-full .wpforms-form textarea:focus, div.wpforms-container-full .wpforms-form select:focus{
    border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  }
  div.wpforms-container-full .wpforms-form input[type=submit]:hover, div.wpforms-container-full .wpforms-form button[type=submit]:hover, div.wpforms-container-full .wpforms-form .wpforms-page-button:hover{
    border: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
 }
 div.wpforms-container-full .wpforms-form input[type=submit], div.wpforms-container-full .wpforms-form button[type=submit], div.wpforms-container-full .wpforms-form .wpforms-page-button{
  color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
}
<?php endif;?>

/*Header top*/
.header-top ul li{
  color: <?php echo esc_attr(get_theme_mod('header_top_text_color')); ?>;
}
.header-top ul li a{
  color: <?php echo esc_attr(get_theme_mod('header_top_text_color')); ?>;
}
.header-top{
  background-color: <?php echo esc_attr(get_theme_mod('header_top_bg_color')); ?>;
}
.header-top ul li a:hover{
  color: <?php echo esc_attr(get_theme_mod('header_top_link_color')); ?>;
}
.header-top .header-right .login-register ul li a{
  color: <?php echo esc_attr(get_theme_mod('header_top_link_color')); ?>;
}


/*Footer*/
<?php if ($show_copyright_menu == true): ?>
  .text-right.text-ml-left {
    display: block;
  }
<?php endif;?>


.site-footer .footer-top{
  background-color: <?php echo esc_attr(get_theme_mod('footer_bg_color')); ?>;
}
.site-footer .widget ul li a{
  color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .widget a{
  color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .widget p{
  color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .widget .widget-title{
  color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .edubin-quickinfo{
  color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .widget ul li{
  color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .widget_rss .rss-date, .site-footer .widget_rss li cite{
  color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .widget_calendar th, .site-footer .widget_calendar td{
 color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .calendar_wrap table#wp-calendar caption{
 color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .calendar_wrap table#wp-calendar caption{
 color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer tr{
  border-color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .calendar_wrap table#wp-calendar{
  border-color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .calendar_wrap table#wp-calendar caption{
 border-color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer thead th{
 border-color: <?php echo esc_attr(get_theme_mod('footer_text_color')); ?>;
}
.site-footer .widget.widget_nav_menu ul li a:hover{
  color: <?php echo esc_attr(get_theme_mod('footer_link_color')); ?>;
}
.site-footer .widget a:hover{
 color: <?php echo esc_attr(get_theme_mod('footer_link_color')); ?>;
}
.site-footer .widget ul.menu li:before{
  color: <?php echo esc_attr(get_theme_mod('footer_link_color')); ?>;
}
.colors-light .widget .tag-cloud-link{
 background-color: <?php echo esc_attr(get_theme_mod('footer_btn_submit_color')); ?>;
}
.site-footer button,
.site-footer input[type="button"],
.site-footer input[type="submit"]{
  background-color: <?php echo esc_attr(get_theme_mod('footer_btn_submit_color')); ?>;
}

/*Copyright*/
.site-footer .site-info a{
  color: <?php echo esc_attr(get_theme_mod('copyright_text_color')); ?>;
}
.site-footer .site-info p{
  color: <?php echo esc_attr(get_theme_mod('copyright_text_color')); ?>;
}
.site-footer .footer-bottom{
  background-color: <?php echo esc_attr(get_theme_mod('copyright_bg_color')); ?>;
}
.site-footer .site-info a:hover{
  color: <?php echo esc_attr(get_theme_mod('copyright_link_color')); ?>;
}

<?php if (class_exists('WooCommerce')): //  exists for wpfroms ?>
    /*Woocommerce*/
    .woocommerce .woocommerce-error .button,
    .woocommerce .woocommerce-info .button,
    .woocommerce .woocommerce-message .button {
      border: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
    }
    .woocommerce .woocommerce-error .button:hover,
    .woocommerce .woocommerce-info .button:hover,
    .woocommerce .woocommerce-message .button:hover {
      border: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
    }
    .woocommerce #respond input#submit,
    .woocommerce input.button{
      border: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
    }
    .woocommerce #respond input#submit:hover,
    .woocommerce input.button:hover{
      border: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
    }
    .woocommerce-cart .wc-proceed-to-checkout{
      border: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
    }
    .woocommerce-cart .wc-proceed-to-checkout:hover{
      border: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
    }
    .woocommerce-cart .wc-proceed-to-checkout:hover a.checkout-button{
      color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
    }
    .woocommerce a.shipping-calculator-button{
      color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
    }
    .woocommerce a.showcoupon{
     color: <?php echo esc_attr(get_theme_mod('link_color')); ?>;
    }
    <?php if (get_theme_mod('primary_color')): ?>
    .woocommerce span.onsale{
      color: #fff;
      background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    }
    <?php endif;?>
.woocommerce a.added_to_cart.wc-forward{
 background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.woocommerce a.add_to_cart_button{
 color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .woocommerce a.add_to_cart_button:hover {
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    color:#fff;
  }
<?php endif;?>
<?php if (get_theme_mod('primary_color')): ?>
.woocommerce a.edubin-cart-link{
  border: 1px solid <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  color: #fff;
}
<?php endif;?>
<?php if (get_theme_mod('primary_color')): ?>
  .woocommerce a.edubin-cart-link:hover{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
   border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
 }
<?php endif;?>
<?php if (get_theme_mod('secondary_color') || get_theme_mod('primary_color')): ?>
  .woocommerce ul.products li.product .overlay{
     background-color: rgba(0,0,0,.3);
  }
<?php endif;?>
<?php if (get_theme_mod('primary_color')): ?>
.woocommerce .edubin-cart-button-list>a.button {
  border: 1px solid <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  color: #fff;
}
<?php endif;?>
.woocommerce .edubin-cart-button-list>a.button:hover {
  border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
}
<?php if (get_theme_mod('primary_color')): ?>
.woocommerce a.button.added:after, .woocommerce button.button.added:after{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
}
<?php endif;?>
<?php if (get_theme_mod('primary_color')): ?>
.woocommerce #respond input#submit.loading:after, .woocommerce a.button.loading:after, .woocommerce button.button.loading:after, .woocommerce input.button.loading:after {
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
}
<?php endif;?>
.woocommerce h2.woocommerce-loop-product__title:hover{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.woocommerce h2.woocommerce-loop-product__title{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li a{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:before{
  background: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}

.woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover{
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.woocommerce-cart table.cart td a, .woocommerce-cart table.cart th a {
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
a.button.wc-backward {
    background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  }
a.button.wc-backward:hover {
    background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
<?php endif; //End WooCommerce ?>

<?php if (class_exists('Tribe__Events__Main')): // The events calender ?>

        <?php if ($tbe_archive_word_hide): ?>
          /* hide event archive word */
          .page-header .page-title span.firstWord {
            display: none;
          }
        <?php endif;?>

  .tribe-events-event-cost span{
    background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .tribe-events-event-cost span{
    border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .events-address ul li .single-address .icon i{
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .tribe-events-list-event-title a.tribe-event-url{
   color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
 }
 .tribe_events-template-default .edubin-event-register-from #rtec button:hover{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
 }
 <?php if (get_theme_mod('primary_color')): ?>
 .tribe_events-template-default .edubin-event-register-from #rtec span.rtec-already-registered-reveal a{
  color: #fff;
}
<?php endif;?>
#tribe-events .tribe-events-button, #tribe-events .tribe-events-button:hover, #tribe_events_filters_wrapper input[type=submit], .tribe-events-button, .tribe-events-button.tribe-active:hover, .tribe-events-button.tribe-inactive, .tribe-events-button:hover, .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-], .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-] > a{
 background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
.events-coundwon .count-down-time .single-count .number{
 color: #fff;
}
<?php endif;?>
#tribe-events .tribe-events-button, .tribe-events-button{
 color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
#tribe-events .tribe-events-button:hover, #tribe-events .tribe-events-button:hover:hover, #tribe_events_filters_wrapper input[type=submit]:hover, .tribe-events-button:hover, .tribe-events-button.tribe-active:hover:hover, .tribe-events-button.tribe-inactive:hover, .tribe-events-button:hover:hover, .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-]:hover, .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-] > a:hover{
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tribe-events-event-cost span{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
#tribe-events-content a:hover, .tribe-events-adv-list-widget .tribe-events-widget-link a:hover, .tribe-events-adv-list-widget .tribe-events-widget-link a:hover:hover, .tribe-events-back a:hover, .tribe-events-back a:hover:hover, .tribe-events-event-meta a:hover, .tribe-events-list-widget .tribe-events-widget-link a:hover, .tribe-events-list-widget .tribe-events-widget-link a:hover:hover, ul.tribe-events-sub-nav a:hover, ul.tribe-events-sub-nav a:hover:hover{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
#tribe-events td.tribe-events-present div[id*="tribe-events-daynum-"], #tribe-events td.tribe-events-present div[id*="tribe-events-daynum-"] > a{
 background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
.tribe_events-template-default .edubin-event-register-from #rtec .rtec-register-button{
 background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
 color: #fff;
 border: 2px solid;
}
<?php endif;?>

.events-right [data-overlay]::before{
  background: linear-gradient(190deg,<?php echo esc_attr(get_theme_mod('primary_color')) ?> 50%,transparent 100%);
}
.events-coundwon.events-coundwon-2:before{
  background: linear-gradient(190deg,<?php echo esc_attr(get_theme_mod('primary_color')) ?> 20%,transparent 100%);
}
<?php if (get_theme_mod('primary_color')): ?>
.events-left span{
  color: #fff;
}
<?php endif;?>
.tribe-events-calendar thead th{
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"], .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"] > a{
 background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tribe-events-calendar div[id*="tribe-events-daynum-"], .tribe-events-calendar div[id*="tribe-events-daynum-"] a{
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.events-address ul li .single-address .cont h6{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tribe-events .tribe-events-calendar-list__event-date-tag-datetime{
  background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .post-type-archive-tribe_events span.tribe-events-c-small-cta__price{
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    color: #fff;
  }
<?php endif;?>
.tribe-common--breakpoint-medium.tribe-common .tribe-common-b2 i{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tribe-common a, .tribe-common a:active, .tribe-common a:focus, .tribe-common a:hover, .tribe-common a:visited{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tribe-common--breakpoint-medium.tribe-common .tribe-common-b2{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tribe-common--breakpoint-medium.tribe-common .tribe-common-h6--min-medium{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tribe-common--breakpoint-full.tribe-events .tribe-events-c-top-bar__datepicker-desktop{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tribe-common--breakpoint-full.tribe-events .tribe-events-c-top-bar__datepicker-desktop{
 color: <?php echo esc_attr(get_theme_mod('link_hover_color')); ?>;
}
.tribe-events .datepicker .datepicker-switch{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tribe_events-template-default .tribe-events-notices{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tribe-events .datepicker .day.active, .tribe-events .datepicker .day.active.focused, .tribe-events .datepicker .day.active:focus, .tribe-events .datepicker .day.active:hover, .tribe-events .datepicker .month.active, .tribe-events .datepicker .month.active.focused, .tribe-events .datepicker .month.active:focus, .tribe-events .datepicker .month.active:hover, .tribe-events .datepicker .year.active, .tribe-events .datepicker .year.active.focused, .tribe-events .datepicker .year.active:focus, .tribe-events .datepicker .year.active:hover{
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tribe-common .tribe-common-anchor-thin:active, .tribe-common .tribe-common-anchor-thin:focus, .tribe-common .tribe-common-anchor-thin:hover{
  color: <?php echo esc_attr(get_theme_mod('link_hover_color')); ?>;
}

.tribe-common--breakpoint-medium.tribe-events .tribe-events-c-ical__link{
 background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
 border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
 color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}
.tribe-common--breakpoint-medium.tribe-events .tribe-events-c-ical__link:hover{
  background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
.tribe-common .tribe-common-c-btn, .tribe-common a.tribe-common-c-btn{
  background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}
.tribe-common .tribe-common-c-btn:focus, .tribe-common .tribe-common-c-btn:hover, .tribe-common a.tribe-common-c-btn:focus, .tribe-common a.tribe-common-c-btn:hover{
  background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
.single-tribe_events a.tribe-events-gcal, .single-tribe_events a.tribe-events-ical{
 background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
 border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
 color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}
.single-tribe_events a.tribe-events-gcal:hover, .single-tribe_events a.tribe-events-ical:hover{
  background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
.tribe-events .datepicker .datepicker-switch:active{
  color: <?php echo esc_attr(get_theme_mod('link_hover_color')); ?>;
}
<?php endif;?>

<?php if (class_exists('LearnPress')): // LeanPress ?>
      .edubin-single-course-1 .course-content .course-title a{
        color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
      }
      .edubin-single-course-1 .course-bottom .admin ul li i{
       color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
     }
     <?php if (get_theme_mod('primary_color')): ?>
      .edubin-single-course-1 .thum .edubin-course-price-1 span{
        background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
        color: #fff;
      }
<?php endif;?>
.edubin-single-course-1 .course-content ul li>i{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}

.edubin-single-course-1 .course-content ul li> a:hover{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.edubin-single-course-1 .course-content .course-title a:hover{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .edubin-single-course-1 .thum .edubin-course-price-2 span{
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    color: #fff;
  }
<?php endif;?>
<?php if (get_theme_mod('primary_color')): ?>
  .edubin-single-course-1 .thum .edubin-course-price-3 span{
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    color: #fff;
  }
<?php endif;?>
<?php if (get_theme_mod('primary_color')): ?>
  .edubin-single-course-2>.thum .edubin-course-price-4 span{
   background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
 }
<?php endif;?>
.learnpress .learn-press-message.success a{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .learnpress .lp-label.label-enrolled, .learnpress .lp-label.label-started{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
 }
<?php endif;?>
.learnpress .lp-label{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.edubin-single-course-1 .course-content .course-title a:hover{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.learnpress .course-features ul li i{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.learnpress.course-item-popup #course-item-content-header{
 background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
<?php if (get_theme_mod('primary_color') || get_theme_mod('secondary_color') ): ?>
.learnpress.course-item-popup #course-item-content-header .form-button.lp-button-back button{
    border-color: #fff;
    background: transparent;
    color: #fff;
}
.learnpress.course-item-popup #course-item-content-header .form-button.lp-button-back button:hover{
    background: #fff;
    border-color: #fff;
    color:<?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php endif;?>
.learnpress .course-item-nav .prev a:hover, .learnpress .course-item-nav .next a:hover{
 color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.edubin-related-course .single-maylike .cont ul li{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.edubin-related-course .single-maylike .cont h4:hover{
 color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .learnpress .course-curriculum ul.curriculum-sections .section-content .course-item .course-item-meta .count-questions{
    background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    color: #fff;
  }
<?php endif;?>
.learnpress .course-curriculum ul.curriculum-sections .section-content .course-item.item-locked .course-item-status:before{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.learnpress .course-features .price-button span{
 color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.learnpress .course-curriculum ul.curriculum-sections .section-content .course-item.item-preview .course-item-status{
 background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.learnpress li.course-nav.active{
 background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.learnpress .course-curriculum ul.curriculum-sections .section-content .course-item .course-item-meta .duration{
 background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.learnpress ul.learn-press-nav-tabs .course-nav a{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.courses-top-search .nav .nav-item a.active{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.edubin-related-course .single-maylike .image::before{
  background: linear-gradient(0deg, <?php echo esc_attr(get_theme_mod('secondary_color')); ?> 0%, transparent 100%);
}
.learnpress .lp-single-course .widget-title:before{
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.learnpress .lp-single-course .widget-title{
 color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.learnpress .course-author>a{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
.learnpress #learn-press-profile-nav .tabs>li.active>a{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
}
<?php endif;?>
.learnpress #learn-press-profile-nav .tabs>li:hover:not(.active)>a {
    background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
.learnpress #profile-content-instructor ul.learn-press-courses .course span.price{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
   color: #fff;
}
<?php endif;?>
.learnpress #profile-content-instructor ul.learn-press-courses .course a:hover .course-title{
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
ul.learn-press-courses .course .course-info .course-instructor a{
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.learnpress #learn-press-profile-nav .tabs>li:hover:not(.active) ul{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
.learnpress #learn-press-profile-nav .tabs>li:hover:not(.active) ul a:hover{
  color: #fff;
}
<?php endif;?>
.learnpress #learn-press-profile-nav .tabs>li a{
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.course-curriculum ul.curriculum-sections .section-content .course-item .section-item-link{
   color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.course-curriculum ul.curriculum-sections .section-content .course-item .section-item-link:hover{
   color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.learnpress .lp-list-table thead tr th{
   background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php endif; //End learnpress ?>

<?php if (class_exists('SFWD_LMS')): // LearnDash ?>
.edubin-single-course-1.ld-course .course-bottom .see-more-btn a{
  background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}

.edubin-single-course-1.ld-course .course-bottom .see-more-btn:hover a{
  background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
  .learndash-wrapper .ld-item-list .ld-item-list-item.ld-is-next, .learndash-wrapper .wpProQuiz_content .wpProQuiz_questionListItem label:focus-within {
    border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .learndash-wrapper .ld-breadcrumbs a,
  .learndash-wrapper .ld-lesson-item.ld-is-current-lesson .ld-lesson-item-preview-heading,
  .learndash-wrapper .ld-lesson-item.ld-is-current-lesson .ld-lesson-title,
  .learndash-wrapper .ld-primary-color-hover:hover,
  .learndash-wrapper .ld-primary-color,
  .learndash-wrapper .ld-primary-color-hover:hover,
  .learndash-wrapper .ld-primary-color,
  .learndash-wrapper .ld-tabs .ld-tabs-navigation .ld-tab.ld-active,
  .learndash-wrapper .ld-button.ld-button-transparent,
  .learndash-wrapper .ld-button.ld-button-reverse,
  .learndash-wrapper .ld-icon-certificate,
  .learndash-wrapper .ld-login-modal .ld-login-modal-login .ld-modal-heading,
  #wpProQuiz_user_content a,
  .learndash-wrapper .ld-item-list .ld-item-list-item a.ld-item-name:hover {
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  }

  .learndash-wrapper .ld-primary-background,
  .learndash-wrapper .ld-tabs .ld-tabs-navigation .ld-tab.ld-active:after {
    background: <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  }

  .learndash-wrapper .ld-course-navigation .ld-lesson-item.ld-is-current-lesson .ld-status-incomplete {
    border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  }
  .learndash-wrapper .ld-loading::before {
    border-top:3px solid <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  }

  .learndash-wrapper .wpProQuiz_reviewDiv .wpProQuiz_reviewQuestion li.wpProQuiz_reviewQuestionTarget,
  .learndash-wrapper .ld-button:hover:not(.learndash-link-previous-incomplete):not(.ld-button-transparent),
  #learndash-tooltips .ld-tooltip:after,
  #learndash-tooltips .ld-tooltip,
  .learndash-wrapper .ld-primary-background,
  .learndash-wrapper .btn-join,
  .learndash-wrapper #btn-join,
  .learndash-wrapper .ld-button:not(.ld-js-register-account):not(.learndash-link-previous-incomplete):not(.ld-button-transparent),
  .learndash-wrapper .ld-expand-button,
  .learndash-wrapper .wpProQuiz_content .wpProQuiz_button,
  .learndash-wrapper .wpProQuiz_content .wpProQuiz_button2,
  .learndash-wrapper .wpProQuiz_content a#quiz_continue_link,
  .learndash-wrapper .ld-focus .ld-focus-sidebar .ld-course-navigation-heading,
  .learndash-wrapper .ld-focus .ld-focus-sidebar .ld-focus-sidebar-trigger,
  .learndash-wrapper .ld-focus-comments .form-submit #submit,
  .learndash-wrapper .ld-login-modal input[type='submit'],
  .learndash-wrapper .ld-login-modal .ld-login-modal-register,
  .learndash-wrapper .wpProQuiz_content .wpProQuiz_certificate a.btn-blue,
  .learndash-wrapper .ld-focus .ld-focus-header .ld-user-menu .ld-user-menu-items a,
  #wpProQuiz_user_content table.wp-list-table thead th,
  #wpProQuiz_overlay_close,
  .learndash-wrapper .ld-expand-button.ld-button-alternate .ld-icon {
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  }
  .learndash-wrapper .ld-focus .ld-focus-header .ld-user-menu .ld-user-menu-items:before {
    border-bottom-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  }
  .learndash-wrapper .ld-button.ld-button-transparent:hover {
    background: transparent !important;
  }
  .learndash-wrapper .ld-focus .ld-focus-header .sfwd-mark-complete .learndash_mark_complete_button,
  .learndash-wrapper .ld-focus .ld-focus-header #sfwd-mark-complete #learndash_mark_complete_button,
  .learndash-wrapper .ld-button.ld-button-transparent,
  .learndash-wrapper .ld-button.ld-button-alternate,
  .learndash-wrapper .ld-expand-button.ld-button-alternate {
    background-color:transparent !important;
  }
  .learndash-wrapper .ld-focus-header .ld-user-menu .ld-user-menu-items a,
  .learndash-wrapper .ld-button.ld-button-reverse:hover,
  .learndash-wrapper .ld-alert-success .ld-alert-icon.ld-icon-certificate,
  .learndash-wrapper .ld-alert-warning .ld-button:not(.learndash-link-previous-incomplete),
  .learndash-wrapper .ld-primary-background.ld-status {
    color:white !important;
  }
  .learndash-wrapper .ld-status.ld-status-unlocked {
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>20!important;
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?> !important;
  }
  .edubin-related-course.ld-related-course .widget-title:before{
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .edubin-related-course .single-maylike .cont h4:hover{
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .edubin-related-course .single-maylike .cont ul li{
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  <?php if (get_theme_mod('primary_color')): ?>
    .edubin-single-course-1 .thum .edubin-course-price-1 span{
      background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
      color: #fff;
    }
  <?php endif;?>
  .edubin-single-course-1 .course-content ul li>i{
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }

  .edubin-single-course-1 .course-content ul li> a:hover{
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .edubin-single-course-1 .course-content .course-title a:hover{
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  <?php if (get_theme_mod('primary_color')): ?>
    .edubin-single-course-1 .thum .edubin-course-price-2 span{
      background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
      color: #fff;
    }
  <?php endif;?>
  <?php if (get_theme_mod('primary_color')): ?>
    .edubin-single-course-1 .thum .edubin-course-price-3 span{
      background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
      color: #fff;
    }
  <?php endif;?>
  <?php if (get_theme_mod('primary_color')): ?>
    .edubin-single-course-2>.thum .edubin-course-price-4 span{
     background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
     color: #fff;
   }
 <?php endif;?>
 .edubin-single-course-2.ld-course .course-meta ul li a:hover{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')) {?>
  .edubin-single-course-2.ld-course .see-more-btn a{
    color: #fff;
  }
  .edubin-single-course-2.ld-course .course-meta ul li{
    color: #fff;
  }
  .edubin-single-course-2.ld-course .course-meta ul li a{
    color: #fff;
  }
<?php }?>
.learndash-wrapper #quiz_continue_link,
.learndash-wrapper .ld-secondary-background,
.learndash-wrapper .learndash_mark_complete_button,
.learndash-wrapper #learndash_mark_complete_button,
.learndash-wrapper .ld-status-complete,
.learndash-wrapper .ld-alert-success .ld-button,
.learndash-wrapper .ld-alert-success .ld-alert-icon {
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?> !important;
}

.learndash-wrapper .ld-secondary-color-hover:hover,
.learndash-wrapper .ld-secondary-color,
.learndash-wrapper .ld-focus .ld-focus-header .sfwd-mark-complete .learndash_mark_complete_button,
.learndash-wrapper .ld-focus .ld-focus-header #sfwd-mark-complete #learndash_mark_complete_button,
.learndash-wrapper .ld-focus .ld-focus-header .sfwd-mark-complete:after {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?> !important;
}

.learndash-wrapper .ld-secondary-in-progress-icon {
  border-left-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?> !important;
  border-top-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?> !important;
}

.learndash-wrapper .ld-alert-success {
  border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?> !important;
  background-color: transparent !important;
}
.edubin-related-course .single-maylike .image::before{
  background: linear-gradient(0deg, <?php echo esc_attr(get_theme_mod('secondary_color')); ?> 0%, transparent 100%);
}

.edubin-related-course.ld-related-course .widget-title{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>
}
.widget.edubin-ld-widget span.learndash-profile-course-title a{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.edubin-single-course-1 .course-content .course-title a{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.learndash-wrapper .learndash_mark_complete_button, .learndash-wrapper #learndash_mark_complete_button{
    border: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}
.learndash-wrapper .sfwd-mark-complete::after, .learndash-wrapper #sfwd-mark-complete::after{
   color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}
.checkout.learnpress.learnpress-page .learnpress>a{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.learndash-wrapper .ld-status-waiting {
    background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}
<?php if (get_theme_mod('primary_color')) : ?>
.learndash-wrapper .ld-course-status.ld-course-status-not-enrolled .ld-status{
   color: #fff !important;
}
<?php endif;?>
.learndash-wrapper .ld-login-modal .login-submit>input[type='submit']:hover{
    background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?> !important;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
<?php endif;?> /*// End learndash*/

<?php if (function_exists('tutor')): // Tutor ?>

    <?php if ($course_title_show == false): ?>
      .tutor-course-header-h1{
        display: none;
      }
    <?php endif;?>

  .tutor-price-preview-box .price {
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .tutor-course-header-h1 {
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .tutor-segment-title, .tutor-single-course-segment .tutor-segment-title {
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .tutor-course-topics-contents .tutor-course-title h4 {
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .tutor-course-lesson h5 a:hover {
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .tutor-full-width-course-top h4, .tutor-full-width-course-top h5, .tutor-full-width-course-top h6 {
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .tutor-custom-list-style li:before {
    color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .tutor-option-field textarea:focus, .tutor-option-field input:not([type="submit"]):focus, .tutor-form-group textarea:focus, .tutor-form-group input:not([type="submit"]):focus {
    border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  }
  .single_add_to_cart_button, a.tutor-button, .tutor-button, a.tutor-btn, .tutor-btn {
    background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  }
  a.tutor-button:hover, .tutor-button:hover, a.tutor-btn:hover, .tutor-btn:hover {
    background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
  .tutor-lead-info-btn-group .tutor-course-compelte-form-wrap button {
    background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  }
  .tutor-button.tutor-success {
    background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
  }
  .tutor-button.tutor-success:hover {
    background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
  .tutor-lead-info-btn-group .tutor-button.tutor-success {
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  }
  .tutor-lead-info-btn-group .tutor-button.tutor-success:hover {
    background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
  .tutor-lead-info-btn-group .tutor-course-compelte-form-wrap button:hover {
    background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
  .tutor-course-enrolled-review-wrap .write-course-review-link-btn {
    background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  }
  .tutor-course-enrolled-review-wrap .write-course-review-link-btn:hover {
    background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
  #tutor-lesson-sidebar-qa-tab-content .tutor-add-question-wrap button.tutor_ask_question_btn {
    background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  }
  #tutor-lesson-sidebar-qa-tab-content .tutor-add-question-wrap button.tutor_ask_question_btn:hover {
    background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
  .tutor-button.tutor-danger {
    background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  }
  .tutor-button.tutor-danger:hover {
    background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
    color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  }
  .tutor-progress-bar .tutor-progress-filled {
    background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  }
  .tutor-progress-bar .tutor-progress-filled:after {
    border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  }
  .tutor-course-tags a {
    color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  }
  <?php if (get_theme_mod('primary_color')): ?>
    .tutor-course-tags a:hover {
      color: #fff;
      border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
      background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    }
  <?php endif;?>
  .tutor-single-course-segment .course-benefits-title {
    color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  }
  .tutor-single-course-segment .course-benefits-title:before {
    background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .tutor-single-course-sidebar .tutor-single-course-segment .tutor-segment-title {
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .tutor-single-course-sidebar .tutor-single-course-segment .tutor-segment-title:before {
    background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  }
  .tutor-wrap nav.course-enrolled-nav ul li.active a {
    background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  }
  .tutor-wrap nav.course-enrolled-nav ul {
    background: #edf0f2;
  }
  .tutor-wrap nav.course-enrolled-nav ul li a {
    color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  }
  .tutor-announcement-title-wrap h3 {
    color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  }
  .tutor-single-course-meta ul li{
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .tutor-single-course-meta ul li a{
    color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
  }
  .single-instructor-wrap .instructor-name h3 a{
   color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
 }
 .tutor-single-course-rating .tutor-single-rating-count{
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tutor-single-course-meta ul li.tutor-social-share button {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-single-course-meta ul li a:hover {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-single-course-meta ul li.tutor-social-share button:hover {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-single-course-meta.tutor-lead-meta ul li a {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-single-course-meta.tutor-lead-meta ul li a:hover {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-single-page-top-bar {
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-single-page-top-bar .tutor-single-lesson-segment button.course-complete-button:hover {
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
  background: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
}
.tutor-tabs-btn-group a i {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-topics-in-single-lesson .tutor-topics-title h3 {
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tutor-topics-in-single-lesson .tutor-single-lesson-items a>i.tutor-icon-doubt {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-tabs-btn-group a {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-tabs-btn-group a:hover, .tutor-tabs-btn-group a:active {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
#tutor-lesson-sidebar-qa-tab-content .tutor-add-question-wrap h3 {
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tutor-next-previous-pagination-wrap a {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-lesson-sidebar-hide-bar {
  background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-topics-in-single-lesson .tutor-topics-title button{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.edubin-tutor-col-8 .woocommerce-message a.button.wc-forward {
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.edubin-tutor-col-8 .woocommerce-message a.button.wc-forward:hover {
  background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-price-preview-box .tutor-course-purchase-box button {
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
.tutor-price-preview-box .tutor-course-purchase-box button:hover {
  background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  color: #fff;
}
<?php endif;?>
.tutor-course-enrolled-wrap p i, .tutor-course-enrolled-wrap p span {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
/*== Archive page*/
.tutor-course-loop-title h2 a {
  color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
}
.tutor-course-loop-title h2 a:hover {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-course-loop-price{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-course-loop-price>.price .tutor-loop-cart-btn-wrap a::before {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-course-loop-header-meta .tutor-course-wishlist a {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-course-loop-header-meta .tutor-course-wishlist:hover {
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-loop-author>div a{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-loop-author>div a:hover {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-course-loop-level {
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-course-loop-price>.price .tutor-loop-cart-btn-wrap a:hover {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-pagination a, .tutor-pagination span, .tutor-pagination-wrap a, .tutor-pagination-wrap span {
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
  .tutor-pagination-wrap span.page-numbers.current {
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    color: #fff;
  }
<?php endif;?>
<?php if (get_theme_mod('primary_color')): ?>
  .tutor-pagination-wrap a:hover, .tutor-pagination a:hover {
    background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
    color: #fff;
  }
<?php endif;?>
.tutor-login-form-wrap input[type="password"]:focus, .tutor-login-form-wrap input[type="text"]:focus {
  border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-login-form-wrap input[type="submit"] {
  background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
}
.tutor-login-form-wrap input[type="submit"]:hover {
  background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
.tutor-form-group.tutor-reg-form-btn-wrap .tutor-button {
  background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
}
.tutor-form-group.tutor-reg-form-btn-wrap .tutor-button:hover {
  background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
/*== dashboard */
.tutor-dashboard-permalinks li.active a {
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
<?php endif;?>
.tutor-dashboard-permalinks li a:hover{
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
<?php if (get_theme_mod('primary_color')): ?>
.tutor-dashboard-permalinks li.active a:hover{
  color: #fff;
}
<?php if (get_theme_mod('secondary_color')): ?>
  .tutor-dashboard-permalinks li.tutor-dashboard-menu-index.active a:hover{
    color: #fff;
  }
<?php endif;?>
.tutor-dashboard-content-inner .tutor-course-metadata li span{
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-dashboard-content>h3 {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-dashboard-permalinks a {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-dashboard-permalinks a:hover:before {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-dashboard-permalinks a:before {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
a.tutor-button.bordered-button, .tutor-button.bordered-button, a.tutor-btn.bordered-btn, .tutor-btn.bordered-btn {
  border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}
a.tutor-button.bordered-button:hover, .tutor-button.bordered-button:hover, a.tutor-btn.bordered-btn:hover, .tutor-btn.bordered-btn:hover {
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
#tutor-ask-question-form .tutor-form-group .tutor-button.tutor-success{
  border-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  background-color: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
}
#tutor-ask-question-form .tutor-form-group .tutor-button.tutor-success:hover{
  border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
}
.tutor-dashboard-info-cards .tutor-dashboard-info-card p {
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-dashboard-inline-links ul li a:hover, .tutor-dashboard-inline-links ul li.active a {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  border-bottom-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-dashboard-inline-links ul li a {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-dashboard-content-inner h3 a {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-mycourse-content h3 a:hover {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-dashboard-review-title a {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-mycourse-edit i, .tutor-mycourse-delete i {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-modal-button-group button.tutor-danger {
  background: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-modal-button-group button.tutor-danger:hover {
  background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-modal-button-group button:hover {
  background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
button.tm-close.tutor-icon-line-cross:hover {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.tutor-mycourse-edit:hover, .tutor-mycourse-delete:hover {
  color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
}
.tutor-dashboard-item-group>h4 {
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.report-top-sub-menu a.active {
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
  border-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.date-range-input button {
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
a.tutor-profile-photo-upload-btn, button.tutor-profile-photo-upload-btn {
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
a.tutor-profile-photo-upload-btn:hover, button.tutor-profile-photo-upload-btn:hover {
  background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
  color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
.label-course-publish {
  background-color: <?php echo esc_attr(get_theme_mod('secondary_color')); ?>;
}
<?php endif;?> /*// End Tutor*/

 <?php  if (class_exists('Video_Conferencing_With_Zoom') ) : ?>
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-tile{
        background-color: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-timer .dpn-zvc-timer-cell{
       background: <?php echo esc_attr(get_theme_mod('primary_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn-join-link{
      border: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn-join-link:hover{
      border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn-start-link{
      border: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      background: <?php echo esc_attr(get_theme_mod('btn_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn-start-link:hover{
      border-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      background-color: <?php echo esc_attr(get_theme_mod('btn_hover_color')); ?>;
      color: <?php echo esc_attr(get_theme_mod('btn_text_hover_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-content .dpn-zvc-sidebar-content-list>span>strong{
        color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .deepn-zvc-single-description h3{
      color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
     }
     .dpn-zvc-display-or-hide-localtimezone-notice>strong{
      color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-state > a.vczapi-meeting-state-change{
      color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
     }
     .edubin-meeting-single-title a{
       color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
     }
     .edubin-meeting-single-content .vczapi-list-zoom-meetings--item__details__meta .meta>strong{
       color: <?php echo esc_attr(get_theme_mod('tertiary_color')); ?>;
     }
<?php endif; ?>


</style>


<?php }

add_action('wp_head', 'edubin_customizer_theme_style');

endif;