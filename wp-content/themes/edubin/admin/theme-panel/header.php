<?php // Header top section
$wp_customize->add_section('header_top_section',
    array(
        'title' => esc_html__('Header Top', 'edubin'),
        'panel' => 'header_naviation_panel',
    )
);

// Header section
$wp_customize->add_section('main_header_section',
    array(
        'title' => esc_html__('Main Header', 'edubin'),
        'panel' => 'header_naviation_panel',
    )
);

/**
 * Add our Social Icons Section
 */
$wp_customize->add_section('social_icons_section',
    array(
        'title'       => esc_html__('Social Icons', 'edubin'),
        'description' => esc_html__('Drag and drop the URLs to rearrange their order.', 'edubin'),
        'panel'       => 'header_naviation_panel',
    )
);

/**
 * Add our Contact Section
 */
$wp_customize->add_section('contact_section',
    array(
        'title'       => esc_html__('Contact', 'edubin'),
        'description' => esc_html__('Add your phone number to the site header bar.', 'edubin'),
        'panel'       => 'header_naviation_panel',
    )
);

/**
 * Add our Search Section
 */
$wp_customize->add_section('search_section',
    array(
        'title'       => esc_html__('Search', 'edubin'),
        'description' => esc_html__('Add a search icon to your primary navigation menu.', 'edubin'),
        'panel'       => 'header_naviation_panel',
    )
);

// Header top show/hide
$wp_customize->add_setting('header_top_show',
    array(
        'default'           => $this->defaults['header_top_show'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'header_top_show',
    array(
        'label'   => esc_html__('Enable', 'edubin'),
        'section' => 'header_top_section',
    )
));

// Top email
$wp_customize->add_setting('top_email',
    array(
        'default'           => $this->defaults['top_email'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    )
);
$wp_customize->add_control('top_email',
    array(
        'label'   => esc_html__('Email', 'edubin'),
        'type'    => 'text',
        'section' => 'header_top_section',
    )
);
// Top phone
$wp_customize->add_setting('top_phone',
    array(
        'default'           => $this->defaults['top_phone'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    )
);

$wp_customize->add_control('top_phone',
    array(
        'label'   => esc_html__('Phone', 'edubin'),
        'type'    => 'text',
        'section' => 'header_top_section',
    )
);
// Top massage
$wp_customize->add_setting('top_massage',
    array(
        'default'           => $this->defaults['top_massage'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    )
);

$wp_customize->add_control('top_massage',
    array(
        'label'   => esc_html__('Top Massage', 'edubin'),
        'type'    => 'textarea',
        'section' => 'header_top_section',
    )
);
// Top massage animation
$wp_customize->add_setting('top_massage_animation_show',
    array(
        'default'           => $this->defaults['top_massage_animation_show'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'top_massage_animation_show',
    array(
        'label'   => esc_html__('Top Massage Animation', 'edubin'),
        'section' => 'header_top_section',
    )
));
// Menu area top padding
$wp_customize->add_setting('top_massage_area_width',
    array(
        'default'           => $this->defaults['top_massage_area_width'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'top_massage_area_width',
    array(
        'label'       => esc_html__('Top Massage Width', 'edubin'),
        'description' => esc_html__('Top massage area width', 'edubin'),
        'section'     => 'header_top_section',
        'priority'    => 10,
        'input_attrs' => array(
            'min'  => 80,
            'max'  => 450,
            'step' => 1,
        ),
    )
));

// Login/Register show/hide
$wp_customize->add_setting('login_reg_show',
    array(
        'default'           => $this->defaults['login_reg_show'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'login_reg_show',
    array(
        'label'   => esc_html__('Login/Register', 'edubin'),
        'section' => 'header_top_section',
    )
));
// Custom login link
$wp_customize->add_setting('custom_login_link',
    array(
        'default'           => $this->defaults['custom_login_link'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control('custom_login_link',
    array(
        'label'   => esc_html__('Custom Login Link', 'edubin'),
        'section' => 'header_top_section',
        'type'    => 'url',
    )
);
// Custom register link
$wp_customize->add_setting('custom_register_link',
    array(
        'default'           => $this->defaults['custom_register_link'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control('custom_register_link',
    array(
        'label'   => esc_html__('Custom Register Link', 'edubin'),
        'section' => 'header_top_section',
        'type'    => 'url',
    )
);
// Custom logout link
$wp_customize->add_setting('custom_logout_link',
    array(
        'default'           => $this->defaults['custom_logout_link'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control('custom_logout_link',
    array(
        'label'   => esc_html__('Custom Logout Page Link', 'edubin'),
        'section' => 'header_top_section',
        'type'    => 'url',
    )
);
// LMS profile show/hide
$wp_customize->add_setting('profile_show',
    array(
        'default'           => $this->defaults['profile_show'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'profile_show',
    array(
        'label'   => esc_html__('Profile', 'edubin'),
        'section' => 'header_top_section',
    )
));
// Profile link
$wp_customize->add_setting('custom_profile_page_link',
    array(
        'default'           => $this->defaults['custom_profile_page_link'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control('custom_profile_page_link',
    array(
        'label'   => esc_html__('Custom Profile Page Link', 'edubin'),
        'section' => 'header_top_section',
        'type'    => 'url',
    )
);

// Header variations
$wp_customize->add_setting('header_variations',
    array(
        'default'           => $this->defaults['header_variations'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_radio_sanitization',
    )
);
$wp_customize->add_control('header_variations',
    array(
        'label'   => esc_html__('Header Variations', 'edubin'),
        'section' => 'main_header_section',
        'type'    => 'select',
        'choices' => array(
            'header_v1' => esc_html__('Style 1', 'edubin'),
            'header_v2' => esc_html__('Style 2', 'edubin'),
        ),
    )
);

// Sticky header enable
$wp_customize->add_setting('sticky_header_enable',
    array(
        'default'           => $this->defaults['sticky_header_enable'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'sticky_header_enable',
    array(
        'label'   => esc_html__('Sticky Header', 'edubin'),
        'section' => 'main_header_section',
    )
));
// Menu area top padding
$wp_customize->add_setting('menu_position',
    array(
        'default'           => $this->defaults['menu_position'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'menu_position',
    array(
        'label'       => esc_html__('Content Space', 'edubin'),
        'description' => esc_html__('Top padding for menu area', 'edubin'),
        'section'     => 'main_header_section',
        'priority'    => 10,
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 40,
            'step' => 1,
        ),
    )
));
// Menu area top padding
$wp_customize->add_setting('sub_menu_width',
    array(
        'default'           => $this->defaults['sub_menu_width'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'sub_menu_width',
    array(
        'label'       => esc_html__('Submenu Width', 'edubin'),
        'section'     => 'main_header_section',
        'priority'    => 10,
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 400,
            'step' => 1,
        ),
    )
));
// Sub Menu Right Align
$wp_customize->add_setting('sub_menu_right_align',
    array(
        'default'           => $this->defaults['sub_menu_right_align'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'sub_menu_right_align',
    array(
        'label'   => esc_html__('Sub Menu Right Align', 'edubin'),
        'section' => 'main_header_section',
    )
));
// Menu active color
$wp_customize->add_setting('home_menu_acive_color',
    array(
        'default'           => $this->defaults['home_menu_acive_color'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'home_menu_acive_color',
    array(
        'label'   => esc_html__('Home Menu Active Color', 'edubin'),
        'section' => 'main_header_section',
    )
));
// Top search icon
$wp_customize->add_setting('top_search_enable',
    array(
        'default'           => $this->defaults['top_search_enable'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'top_search_enable',
    array(
        'label'   => esc_html__('Search', 'edubin'),
        'section' => 'main_header_section',
    )
));

// Top search icon
$wp_customize->add_setting('top_cart_enable',
    array(
        'default'           => $this->defaults['top_cart_enable'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'top_cart_enable',
    array(
        'label'   => esc_html__('Shop Cart', 'edubin'),
        'section' => 'main_header_section',
    )
));
// Page header for global
// $wp_customize->add_setting('page_header_show',
//     array(
//         'default'           => $this->defaults['page_header_show'],
//         'transport'         => 'refresh',
//         'sanitize_callback' => 'edubin_switch_sanitization',
//     )
// );
// $wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'page_header_show',
//     array(
//         'label'   => esc_html__('Page Header', 'edubin'),
//         'section' => 'header_image',
//          'priority' => 9,
//     )
// ));
// Header page title align
$wp_customize->add_setting('header_page_title_align',
    array(
        'default'           => $this->defaults['header_page_title_align'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_text_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Text_Radio_Button_Custom_Control($wp_customize, 'header_page_title_align',
    array(
        'label'    => __('Header Page Title Align'),
        'section'  => 'header_image',
        'priority' => 9,
        'choices'  => array(
            'left'   => __('Left'),
            'center' => __('Centered'),
            'right'  => __('Right'),
        ),
    )
));
// Title font site
$wp_customize->add_setting('header_title_font_size',
    array(
        'default'           => $this->defaults['header_title_font_size'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'header_title_font_size',
    array(
        'label'       => esc_html__('Header Title Size', 'edubin'),
        'description' => esc_html__('Page title font size', 'edubin'),
        'section'     => 'header_image',
        'priority'    => 9,
        'input_attrs' => array(
            'min'  => 35,
            'max'  => 70,
            'step' => 1,
        ),
    )
));
// Small device title font size
$wp_customize->add_setting('header_title_font_size_small_device',
    array(
        'default'           => $this->defaults['header_title_font_size_small_device'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'header_title_font_size_small_device',
    array(
        'label'       => esc_html__('Header Title Size Small Device', 'edubin'),
        'description' => esc_html__('Page title font size for small device', 'edubin'),
        'section'     => 'header_image',
        'priority'    => 9,
        'input_attrs' => array(
            'min'  => 20,
            'max'  => 50,
            'step' => 1,
        ),
    )
));
// Page title font site for small screen
$wp_customize->add_setting('header_title_font_size_small_device_width',
    array(
        'default'           => 480,
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'header_title_font_size_small_device_width',
    array(
        'label'       => esc_html__('Page Title Font Size Small Screen Width', 'edubin'),
        'section'     => 'header_image',
        'priority'    => 9,
        'input_attrs' => array(
            'min'  => 480,
            'max'  => 992,
            'step' => 1,
        ),
    )
));

// Page header height
$wp_customize->add_setting('page_header_height',
    array(
        'default'           => $this->defaults['page_header_height'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'page_header_height',
    array(
        'label'       => esc_html__('Page Header Height', 'edubin'),
        'section'     => 'header_image',
        'priority'    => 9,
        'input_attrs' => array(
            'min'  => 150,
            'max'  => 350,
            'step' => 1,
        ),
    )
));
// Mobile screen page height
$wp_customize->add_setting('page_header_height_small_screen',
    array(
        'default'           => $this->defaults['page_header_height_small_screen'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'page_header_height_small_screen',
    array(
        'label'       => esc_html__('Page Header Hight Mobile Screen', 'edubin'),
        'description' => esc_html__('Page Header Hight Mobile Screen only for small device.', 'edubin'),
        'section'     => 'header_image',
        'priority'    => 9,
        'input_attrs' => array(
            'min'  => 150,
            'max'  => 350,
            'step' => 1,
        ),
    )
));
// Page height small device width
$wp_customize->add_setting('page_header_height_small_screen_width',
    array(
        'default'           => 480,
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer',

    )
);
$wp_customize->add_control(new Edubin_Slider_Custom_Control($wp_customize, 'page_header_height_small_screen_width',
    array(
        'label'       => esc_html__('Header Hight Small Screen Width', 'edubin'),
        'section'     => 'header_image',
        'priority'    => 9,
        'input_attrs' => array(
            'min'  => 480,
            'max'  => 992,
            'step' => 1,
        ),
    )
));
