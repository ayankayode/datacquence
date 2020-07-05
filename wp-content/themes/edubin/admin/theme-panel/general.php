<?php

// Secondary logo
$wp_customize->add_setting('sticky_logo', array(
  'capability'        => 'edit_theme_options',
  'sanitize_callback' => 'esc_url_raw',
  'transport'         => 'refresh',
  'default'           => $this->defaults['sticky_logo'],
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sticky_logo', array(
  'label'       => esc_html__('Secondary Logo (Optional)', 'edubin'),
  'description' => esc_html__('Secondary logo only for transparent header.', 'edubin'),
  'section'     => 'title_tagline',
  'settings'    => 'sticky_logo',
  'priority'    => 9,
)));

// Logo size
$wp_customize->add_setting( 'logo_size',
    array(
        'default' => $this->defaults['logo_size'],
        'transport' => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer'

    )
);
$wp_customize->add_control( new Edubin_Slider_Custom_Control( $wp_customize, 'logo_size',
    array(
        'label' => esc_html__( 'Logo Size', 'edubin' ),
        'section' => 'title_tagline', 
        'priority'       => 9,
        'input_attrs' => array(
            'min' => 10, 
            'max' => 400, 
            'step' => 1, 
        ),
    )
) );

// Mobile logo
$wp_customize->add_setting('mobile_logo', array(
  'capability'        => 'edit_theme_options',
  'sanitize_callback' => 'esc_url_raw',
  'transport'         => 'refresh',
  'default'           => $this->defaults['mobile_logo'],
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mobile_logo', array(
  'label'       => esc_html__('Mobile Logo (Optional)', 'edubin'),
  'description' => esc_html__('Mobile logo only for small device.', 'edubin'),
  'section'     => 'title_tagline',
  'settings'    => 'mobile_logo',
  'priority'    => 9,
)));

// Mobile Logo size
$wp_customize->add_setting( 'mobile_logo_size',
    array(
        'default' => 50,
        'transport' => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer'

    )
);
$wp_customize->add_control( new Edubin_Slider_Custom_Control( $wp_customize, 'mobile_logo_size',
    array(
        'label' => esc_html__( 'Mobile Logo Size', 'edubin' ),
        'section' => 'title_tagline', 
        'priority'       => 9,
        'input_attrs' => array(
            'min' => 50, 
            'max' => 300, 
            'step' => 1, 
        ),
    )
) );

// Mobile logo device width
$wp_customize->add_setting( 'mobile_logo_screen_width',
    array(
        'default' => 480,
        'transport' => 'refresh',
        'sanitize_callback' => 'edubin_sanitize_integer'

    )
);
$wp_customize->add_control( new Edubin_Slider_Custom_Control( $wp_customize, 'mobile_logo_screen_width',
    array(
        'label' => esc_html__( 'Mobile Logo Screen Width', 'edubin' ),
        'section' => 'title_tagline', 
        'priority'       => 9,
        'input_attrs' => array(
            'min' => 480, 
            'max' => 992, 
            'step' => 1, 
        ),
    )
) );

// Preloader
$wp_customize->add_section('preloader_section',
    array(
        'title' => esc_html__('Preloader', 'edubin'),
        'panel' => 'general_panel',
        'priority'   => 50,
    )
);
$wp_customize->add_setting('preloader_show',
    array(
        'default'           => $this->defaults['preloader_show'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'preloader_show',
    array(
        'label'   => esc_html__('Preloader', 'edubin'),
        'section' => 'preloader_section',
    )
));
// Preloader styles
$wp_customize->add_setting( 'preloader_styles',
    array(
        'default' => $this->defaults['preloader_styles'],
        'transport' => 'refresh',
        'sanitize_callback' => 'edubin_radio_sanitization'
    )
);
$wp_customize->add_control( 'preloader_styles',
    array(
        'label' => esc_html__( 'Preloader Type', 'edubin' ),
        'section' => 'preloader_section',
        'type' => 'select',
        'choices' => array(
            'image_preloader' => esc_html__( 'Logo Preloader', 'edubin' ),
            'preloader_1' => esc_html__( 'Style 1', 'edubin' ),
            'preloader_2' => esc_html__( 'Style 2', 'edubin' ),
        )
    )
);
// Logo Preloader
$wp_customize->add_setting('preloader_image_url', array(
  'capability'        => 'edit_theme_options',
  'sanitize_callback' => 'esc_url_raw',
  'transport'         => 'refresh',
  'default'           => $this->defaults['preloader_image_url'],
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'preloader_image_url', array(
  'label'       => esc_html__('Preloader Image', 'edubin'),
  'description' => esc_html__('It will be work only if you select preloader type "Logo Preloader"', 'edubin'),
  'section'     => 'preloader_section',
  'settings'    => 'preloader_image_url',
  'priority'    => 100,
)));

// Back to Top;
$wp_customize->add_section('back_to_top_section',
    array(
        'title' => esc_html__('Back to Top', 'edubin'),
        'panel' => 'general_panel',
        'priority'   => 50,
    )
);
$wp_customize->add_setting('back_to_top_show',
    array(
        'default'           => $this->defaults['back_to_top_show'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'back_to_top_show',
    array(
        'label'   => esc_html__('Back to Top', 'edubin'),
        'section' => 'back_to_top_section',
    )
));


// Breadcrumb
$wp_customize->add_section('breadcrumb_section',
    array(
        'title' => esc_html__('Breadcrumb', 'edubin'),
        'panel' => 'general_panel',
        'priority'   => 50,
    )
);

$wp_customize->add_setting('breadcrumb_show',
    array(
        'default'           => $this->defaults['breadcrumb_show'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'breadcrumb_show',
    array(
        'label'   => esc_html__('Breadcrumb', 'edubin'),
        'section' => 'breadcrumb_section',
    )
));

// 404 page
$wp_customize->add_setting('error_404_img', array(
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
    'default'           => $this->defaults['error_404_img'],
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'error_404_img', array(
    'label'    => esc_html__('404 Image', 'edubin'),
    'section'  => 'error_404',
    'settings' => 'error_404_img',
    'priority' => 9,
)));

$wp_customize->add_setting( 'error_404_heading',
    array(
        'default' => $this->defaults['error_404_heading'],
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
);

$wp_customize->add_control( 'error_404_heading',
    array(
        'label' => esc_html__( '404 Title', 'edubin' ),
        'type' => 'text',
        'section' => 'error_404'
    )
);
$wp_customize->add_setting( 'error_404_text',
    array(
        'default' => $this->defaults['error_404_text'],
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
);

$wp_customize->add_control( 'error_404_text',
    array(
        'label' => esc_html__( '404 Text', 'edubin' ),
        'type' => 'textarea',
        'section' => 'error_404'
    )
);
$wp_customize->add_setting( 'error_404_link_text',
    array(
        'default' => $this->defaults['error_404_link_text'],
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
);

$wp_customize->add_control( 'error_404_link_text',
    array(
        'label' => esc_html__( 'Go Home Text', 'edubin' ),
        'type' => 'text',
        'section' => 'error_404'
    )
);
// RTL 
$wp_customize->add_section('rtl_section',
    array(
        'title' => esc_html__('RTL', 'edubin'),
        'panel' => 'general_panel',
        'priority'   => 80,
    )
);

$wp_customize->add_setting('rtl_enable',
    array(
        'default'           => $this->defaults['rtl_enable'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'rtl_enable',
    array(
        'label'   => esc_html__('RTL', 'edubin'),
        'section' => 'rtl_section',
    )
));


