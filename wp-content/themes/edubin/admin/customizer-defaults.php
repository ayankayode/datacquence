<?php
/**
 * Set our Customizer default options
 */
if (!function_exists('edubin_generate_defaults')) {
    function edubin_generate_defaults()
    {
        $customizer_defaults = array(

            // Global
            'logo_size'                                 => '180',
            'sticky_logo'                               => '',
            'mobile_logo'                               => '',
            'mobile_logo_size'                          => '50',
            'mobile_logo_screen_width'                  => '480',
            'menu_position'                             => '0',
            'preloader_show'                            => 1,
            'preloader_styles'                          => 'preloader_1',
            'preloader_image_url'                       => '',
            'breadcrumb_show'                           => 1,
            'back_to_top_show'                          => 1,
            'rtl_enable'                                => 0,

            'header_top_show'                           => 0,
            'top_email'                                 => '',
            'top_phone'                                 => '',
            'top_massage'                               => '',
            'top_massage_area_width'                    => '300',
            'top_massage_animation_show'                => 1,
            'login_reg_show'                            => 1,
            'custom_logout_link'                        => '',
            'custom_login_link'                         => '',
            'custom_register_link'                      => '',
            'header_top_text_color'                     => '',
            'header_top_link_color'                     => '',
            'header_top_bg_color'                       => '',
            'profile_show'                              => 1,
            'custom_profile_page_link'                  => get_edit_user_link(),

            'header_variations'                         => 'header_v2',
            'sticky_header_enable'                      => 1,
            'top_search_enable'                         => 1,
            'top_cart_enable'                           => 0,
            'sub_menu_right_align'                      => 1,
            'sub_menu_width'                            => '225',
            'home_menu_acive_color'                     => 0,
            'header_page_title_align'                   => 'left',
            'page_header_height'                        => '',
            'page_header_height_small_screen'           => '',
            'page_header_height_small_screen_width'     => '480',
            'header_title_font_size'                    => '',
            'header_title_font_size_small_device'       => '',
            'header_title_font_size_small_device_width' => '480',

            'social_newtab'                             => 0,
            'social_urls'                               => '',
            'social_alignment'                          => 'alignright',
            'social_url_icons'                          => '',
            'search_menu_icon'                          => 0,

            // General
            'primary_color'                             => '',
            'secondary_color'                           => '',
            'tertiary_color'                            => '',
            'link_color'                                => '',
            'link_hover_color'                          => '',
            'btn_color'                                 => '',
            'btn_hover_color'                           => '',
            'btn_text_color'                            => '',
            'btn_text_hover_color'                      => '',
            'menu_text_color'                           => '',
            'menu_hover_color'                          => '',
            'sub_menu_text_color'                       => '',
            'sub_menu_arrow_color'                      => '',
            'sub_menu_border_color'                     => '',
            'sub_menu_bg_color'                         => '',
            'mobile_menu_icon_color'                    => '',
            'preloader_color_primary'                   => '',
            'preloader_color_secondary'                 => '',
            'preloader_bg_color'                        => '',
            'bakc_to_top_icon_color'                    => '',
            'bakc_to_top_bg_color'                      => '',
            'header_banner_overlay_color'               => '',
            'search_popup_bg_color'                     => '',
            'placeholder_color'                         => '',

            'body_fonts'                                => '',
            'headings_fonts'                            => '',
            'menu_font'                                 => '',

            // Typography
            'edubin_body_text_font'                     => json_encode(
                array(
                    'font'          => 'Roboto',
                    'regularweight' => 'regular',
                    'italicweight'  => 'italic',
                    'boldweight'    => '700',
                    'category'      => 'sans-serif',
                )
            ),
            'edubin_heading_font'                       => json_encode(
                array(
                    'font'          => 'Montserrat',
                    'regularweight' => 'regular',
                    'italicweight'  => 'italic',
                    'boldweight'    => '700',
                    'category'      => 'sans-serif',
                )
            ),

            'edubin_menu_text_font'                     => json_encode(
                array(
                    'font'          => 'Roboto',
                    'regularweight' => 'regular',
                    'italicweight'  => 'italic',
                    'boldweight'    => '700',
                    'category'      => 'sans-serif',
                )
            ),

            'edubin_sub_menu_text_font'                 => json_encode(
                array(
                    'font'          => 'Roboto',
                    'regularweight' => 'regular',
                    'italicweight'  => 'italic',
                    'boldweight'    => '700',
                    'category'      => 'sans-serif',
                )
            ),

            //Blog
            'blog_sidebar'                              => 'alignright',
            'blog_author_show'                          => 1,
            'blog_date_show'                            => 1,
            'blog_category_show'                        => 0,
            'blog_comment_show'                         => 1,
            'blog_view_show'                            => 0,
            'page_header_show'                          => 1,

            'blog_single_sidebar'                       => 'alignright',
            'blog_single_author_show'                   => 1,
            'blog_single_date_show'                     => 1,
            'blog_single_category_show'                 => 0,
            'blog_single_comment_show'                  => 1,
            'blog_single_view_show'                     => 0,

            // The Event Calendar
            'tbe_price'                                 => 1,
            'tbe_archive_meta'                          => 1,
            'tbe_archive_word_hide'                     => 0,
            'edubin_tribe_events_layout'                => 'layout_1',
            'tbe_event_countdown'                       => 1,
            'tbe_event_maps'                            => 1,
            'tbe_start_time'                            => 1,
            'tbe_end_time'                              => 1,
            'tbe_website'                               => 1,
            'tbe_phone'                                 => 1,
            'tbe_email'                                 => 1,
            'tbe_organizer_ids'                         => 1,
            'tbe_location'                              => 1,
            'tbe_content_before_massage'                => 1,
            'tbe_content_after_massage'                 => 1,

            // WooCommerce
            'edubin_wc_sidebar'                         => 'sidebarnone',

            // Event
            'event_list_style'                          => 1,

            // 404
            'error_404_img'                             => '',
            'error_404_heading'                         => '404 ERROR!',
            'error_404_text'                            => "Oops! The page you are looking for does not exist.",
            'error_404_link_text'                       => "Go home",

            // Learnpress
            'lp_header_top'                             => false,
            'lp_course_archive_style'                   => '1',
            'lp_course_archive_clm'                     => '4',
            'lp_price_show'                             => true,
            'lp_review_on_off'                          => true,
            'lp_instructor_img_on_off'                  => true,
            'lp_instructor_name_on_off'                 => true,
            'lp_enroll_on_off'                          => true,
            'lp_comment_show'                           => false,

            'lp_instructor_single'                      => true,
            'lp_cat_single'                             => false,
            'lp_review_single'                          => true,
            'lp_course_feature_title'                   => '',
            'lp_course_feature_quizzes_show'            => true,
            'lp_course_feature_duration_show'           => true,
            'lp_course_feature_max_students_show'       => true,
            'lp_course_feature_enroll_show'             => true,
            'lp_course_feature_retake_count_show'       => true,
            'lp_course_feature_skill_level_show'        => true,
            'lp_course_feature_language_show'           => true,
            'lp_course_feature_assessments_show'        => true,
            'lp_course_feature_quizzes'                 => '',
            'lp_course_feature_duration'                => '',
            'lp_course_feature_max_tudents'             => '',
            'lp_course_feature_enroll'                  => '',
            'lp_course_feature_retake_count'            => '',
            'lp_course_feature_skill_level'             => '',
            'lp_course_feature_language'                => '',
            'lp_course_feature_assessments'             => '',
            'lp_course_buy_now_btn'                     => '',
            'lp_course_enroll_btn'                     => '',

            // Larndash
            'ld_course_archive_style'                   => '1',
            'ld_course_archive_clm'                     => '4',
            'ld_related_course_views'                   => true,
            'ld_related_course_price'                   => true,
            'ld_price_show'                             => true,
            'ld_views_show'                             => true,
            'ld_comment_show'                           => false,
            'see_more_btn'                              => true,

            'ld_sidebar_single_show'                    => false,
            'ld_related_course_show'                    => false,
            'ld_related_course_heading'                 => '',

            // Tutor
            'top_course_filter'                         => false,
            'course_title_show'                         => true,
            // Zoom Meeting
            'edubin_zm_archive_hotted'                  => true,
            'edubin_zm_archive_start_date'              => true,
            'edubin_zm_archive_time_zone'               => true,
            'edubin_zm_excerpt'                         => false,

            'zoom_meeting_single_title_show'            => true,

            // Footer
            'footer_text_color'                         => '',
            'footer_link_color'                         => '',
            'footer_btn_submit_color'                   => '',
            'footer_bg_color'                           => '',
            'footer_widget_area_column'                 => '3_3_3_3',
            //Copyright
            'copyright_show'                            => true,
            'copyright_text'                            => '&copy; 2020 <a href="' . esc_url('https://thepixelcurve.com') . '">ThePixelcurve</a>. All rights reserved.',
            'copyright_text_color'                      => '',
            'copyright_link_color'                      => '',
            'copyright_bg_color'                        => '',
            'show_copyright_menu'                       => false,

        );

        return apply_filters('edubin_customizer_defaults', $customizer_defaults);
    }
}
