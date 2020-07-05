<?php
// Archive page
$wp_customize->add_section('tutor_archive_page_section',
    array(
        'title' => esc_html__('Archive Page', 'edubin'),
        'panel' => 'tutor_panel',
    )
);

// Top filter bar
$wp_customize->add_setting('top_course_filter',
    array(
        'default'           => $this->defaults['top_course_filter'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'top_course_filter',
    array(
        'label'   => esc_html__('Course Filter Bar', 'edubin'),
        'section' => 'tutor_archive_page_section',
    )
));


// Tutor single page
$wp_customize->add_section('tutor_single_page_section',
    array(
        'title' => esc_html__('Single Page', 'edubin'),
        'panel' => 'tutor_panel',
    )
);

// Double course title
$wp_customize->add_setting('course_title_show',
    array(
        'default'           => $this->defaults['course_title_show'],
        'transport'         => 'refresh',
        'sanitize_callback' => 'edubin_switch_sanitization',
    )
);
$wp_customize->add_control(new Edubin_Toggle_Switch_Custom_control($wp_customize, 'course_title_show',
    array(
        'label'   => esc_html__('Double Course Title', 'edubin'),
        'section' => 'tutor_single_page_section',
    )
));
