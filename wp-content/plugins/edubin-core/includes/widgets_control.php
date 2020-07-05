<?php

if (!defined('ABSPATH')) {
    exit;
}
// Exit if accessed directly.

class Edubin_Widgets_Control{

    public function __construct(){
        $this->edubin_widgets_control();
    }

    // Control Widgets
    public function edubin_widgets_control(){

        $widgets_manager = \Elementor\Plugin::instance()->widgets_manager;

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_slider.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Edubin_Slider());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/slider_pro.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Slider_Pro());

        if (class_exists('LearnPress')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/lp_courses_carousel.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_LP_Course_Carousel());

            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/lp_search.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_LP_Search());

            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/course_category.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Course_Category());
        }
        if (function_exists('tutor')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/tutor_courses_carousel.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Tutor_Course_Carousel());

            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/tutor_search.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Tutor_Search());
        }

        if (class_exists('SFWD_LMS')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/ld_courses_carousel.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_LD_Course_Carousel());

            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/ld_search.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_LD_Search());
        }
        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/course_category_custom.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Course_Category_Custom());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/course_instractor.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Course_Instractor());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/section_1.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Section_1());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/teachers.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Teachers());

        if (class_exists('Tribe__Events__Main')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/events.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Events());
        }
        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_cuctom_event.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Custom_Event());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_testimonial.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Testimonial());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/latest_post.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Latest_Post());
        if (class_exists('WooCommerce')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/woo_product.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Woo_Product());
        }
        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/countdown.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Countdown());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/video_popup.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Video_PopUp());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_pricing_table.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Pricing_Table());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_user_login_form.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_User_Login_Form());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_user_register_form.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_User_Register_Form());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/image_carousel.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Icon_Category());

        require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_section_title.php';
        $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Section_Title());

        // Third party plugins Addons
        if (is_plugin_active('mailchimp-for-wp/mailchimp-for-wp.php')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_mailchimp_for_wp.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Mailchimp_Wp());
        }

        if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_contact_form_seven.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Contact_Form_Seven());
        }

        if (is_plugin_active('caldera-forms/caldera-core.php')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_caldera_forms.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Caldera_Form());
        }

        if (is_plugin_active('revslider/revslider.php')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_revolution_slider.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Revolution_Slider());
        }

        // if (is_plugin_active('bbpress/bbpress.php')) {
        //     require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_bbpress.php';
        //     $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Bbpress());
        // }

        if (is_plugin_active('gravityforms/gravityforms.php')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_gravity_forms.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Gravity_Forms());
        }

        // if (is_plugin_active('tablepress/tablepress.php')) {
        //     require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_tablepress.php';
        //     $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Tablepress());
        // }

        if (is_plugin_active('LayerSlider/layerslider.php')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_layer_slider.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Layer_Slider());
        }

        if (is_plugin_active('wpforms-lite/wpforms.php')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/wpforms.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_WPforms());
        }

        if (is_plugin_active('ninja-forms/ninja-forms.php')) {
            require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_ninja_forms.php';
            $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Ninja_Form());
        }

        // if (is_plugin_active('buddypress/bp-loader.php')) {
        //     require_once EDUBIN_ADDONS_PL_PATH . 'includes/widgets/edubin_buddy_press.php';
        //     $widgets_manager->register_widget_type(new \Elementor\Edubin_Elementor_Widget_Buddy_Press());
        // }
    }

}
new Edubin_Widgets_Control();
