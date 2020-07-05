<?php

// Woocommerce section sidebar.
$wp_customize->add_section('edubin_wc_section_sidebar',
    array(
        'title' => esc_html__('Sidebar', 'edubin'),
        'panel' => 'woocommerce',
    )
);
$wp_customize->add_setting('edubin_wc_sidebar',
    array(
        'default'           => $this->defaults['edubin_wc_sidebar'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_radio_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Image_Radio_Button_Custom_Control($wp_customize, 'edubin_wc_sidebar',
    array(
        'label'       => esc_html__('Sidebar', 'edubin'),
        'description' => esc_html__('Select your sidebar position', 'edubin'),
        'section'     => 'edubin_wc_section_sidebar',
        'choices'     => array(
            'sidebarleft'  => array(
                'image' => trailingslashit(get_template_directory_uri()) . 'admin/assets/images/sidebar-left.png',
                'name'  => esc_html__('Left Sidebar', 'edubin'),
            ),
            'sidebarnone'  => array(
                'image' => trailingslashit(get_template_directory_uri()) . 'admin/assets/images/sidebar-none.png',
                'name'  => esc_html__('No Sidebar', 'edubin'),
            ),
            'sidebarright' => array(
                'image' => trailingslashit(get_template_directory_uri()) . 'admin/assets/images/sidebar-right.png',
                'name'  => esc_html__('Right Sidebar', 'edubin'),
            ),
        ),
    )
));
