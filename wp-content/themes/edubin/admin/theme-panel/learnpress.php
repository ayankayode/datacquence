<?php 
// Archive page
    $wp_customize->add_section( 'learnpress_archive_page_section',
        array(
            'title' => esc_html__( 'Archive Page', 'edubin' ),
            'panel' => 'learnpress_panel'
        )
    );

    // Style
    $wp_customize->add_setting( 'lp_course_archive_style',
        array(
            'default' => $this->defaults['lp_course_archive_style'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_radio_sanitization'
        )
    );
    $wp_customize->add_control( 'lp_course_archive_style',
        array(
            'label' => esc_html__( 'Courses Style', 'edubin' ),
            'section' => 'learnpress_archive_page_section',
            'type' => 'select',
            'choices' => array(
                '1' => esc_html__( 'Style 1', 'edubin' ),
                '2' => esc_html__( 'Style 2', 'edubin' ),
                '3' => esc_html__( 'Style 3', 'edubin' ),
                '4' => esc_html__( 'Style 4', 'edubin' )
            )
        )
    );

    // Column
    $wp_customize->add_setting( 'lp_course_archive_clm',
        array(
            'default' => $this->defaults['lp_course_archive_clm'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_radio_sanitization'
        )
    );
    $wp_customize->add_control( 'lp_course_archive_clm',
        array(
            'label' => esc_html__( 'Courses Column', 'edubin' ),
            'section' => 'learnpress_archive_page_section',
            'type' => 'select',
            'choices' => array(
                '6' => esc_html__( 'Column 2', 'edubin' ),
                '4' => esc_html__( 'Column 3', 'edubin' ),
                '3' => esc_html__( 'Column 4', 'edubin' ),
            )
        )
    );

    // LP top bar
    $wp_customize->add_setting( 'lp_header_top',
        array(
            'default' => $this->defaults['lp_header_top'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_header_top',
        array(
            'label' => esc_html__( 'Top Bar', 'edubin' ),
            'section' => 'learnpress_archive_page_section'
        )
    ) );        
    // Price
    $wp_customize->add_setting( 'lp_price_show',
        array(
            'default' => $this->defaults['lp_price_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_price_show',
        array(
            'label' => esc_html__( 'Price', 'edubin' ),
            'section' => 'learnpress_archive_page_section'
        )
    ) );        
    // Review
    $wp_customize->add_setting( 'lp_review_on_off',
        array(
            'default' => $this->defaults['lp_review_on_off'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_review_on_off',
        array(
            'label' => esc_html__( 'Review', 'edubin' ),
            'section' => 'learnpress_archive_page_section'
        )
    ) );    
    // Instructor image
    $wp_customize->add_setting( 'lp_instructor_img_on_off',
        array(
            'default' => $this->defaults['lp_instructor_img_on_off'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_instructor_img_on_off',
        array(
            'label' => esc_html__( 'Instructor Image', 'edubin' ),
            'section' => 'learnpress_archive_page_section'
        )
    ) );    
    // Instructor name
    $wp_customize->add_setting( 'lp_instructor_name_on_off',
        array(
            'default' => $this->defaults['lp_instructor_name_on_off'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_instructor_name_on_off',
        array(
            'label' => esc_html__( 'Instructor Name', 'edubin' ),
            'section' => 'learnpress_archive_page_section'
        )
    ) );
    // Enroll
    $wp_customize->add_setting( 'lp_enroll_on_off',
        array(
            'default' => $this->defaults['lp_enroll_on_off'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_enroll_on_off',
        array(
            'label' => esc_html__( 'Enroll', 'edubin' ),
            'section' => 'learnpress_archive_page_section'
        )
    ) );

    // Comment
    $wp_customize->add_setting( 'lp_comment_show',
        array(
            'default' => $this->defaults['lp_comment_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_comment_show',
        array(
            'label' => esc_html__( 'Comments', 'edubin' ),
            'section' => 'learnpress_archive_page_section'
        )
    ) );

    // LearnPress single page
    $wp_customize->add_section( 'learnpress_single_page_section',
        array(
            'title' => esc_html__( 'Single Page', 'edubin' ),
            'panel' => 'learnpress_panel'
        )
    );

    // Instructor
    $wp_customize->add_setting( 'lp_instructor_single',
        array(
            'default' => $this->defaults['lp_instructor_single'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_instructor_single',
        array(
            'label' => esc_html__( 'Instructor', 'edubin' ),
            'section' => 'learnpress_single_page_section'
        )
    ) );

    // Category
    $wp_customize->add_setting( 'lp_cat_single',
        array(
            'default' => $this->defaults['lp_cat_single'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_cat_single',
        array(
            'label' => esc_html__( 'Category', 'edubin' ),
            'section' => 'learnpress_single_page_section'
        )
    ) );    
    // Review
    $wp_customize->add_setting( 'lp_review_single',
        array(
            'default' => $this->defaults['lp_review_single'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );

    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_review_single',
        array(
            'label' => esc_html__( 'Review', 'edubin' ),
            'section' => 'learnpress_single_page_section'
        )
    ) );
   // Custom buy now btn
    $wp_customize->add_setting( 'lp_course_buy_now_btn',
        array(
            'default' => $this->defaults['lp_course_buy_now_btn'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_buy_now_btn',
        array(
            'label' => esc_html__( 'Buy Now - Custom Button', 'edubin' ),
            'type' => 'text',
            'section' => 'learnpress_single_page_section'
        )
    );
   // custom enroll btb
    $wp_customize->add_setting( 'lp_course_enroll_btn',
        array(
            'default' => $this->defaults['lp_course_enroll_btn'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_enroll_btn',
        array(
            'label' => esc_html__( 'Enroll - Custom Button', 'edubin' ),
            'type' => 'text',
            'section' => 'learnpress_single_page_section'
        )
    );
  // Learnpress Course information
   $wp_customize->add_section( 'course_features_section',
        array(
            'title' => esc_html__( 'Course Features', 'edubin' ),
            'panel' => 'learnpress_panel'
        )
    );
   // Course features title
    $wp_customize->add_setting( 'lp_course_feature_title',
        array(
            'default' => $this->defaults['lp_course_feature_title'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_title',
        array(
            'label' => esc_html__( 'Custom Course Features Title', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );

   // Course quizzes
    $wp_customize->add_setting( 'lp_course_feature_quizzes_show',
        array(
            'default' => $this->defaults['lp_course_feature_quizzes_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_course_feature_quizzes_show',
        array(
            'label' => esc_html__( 'Quizzes', 'edubin' ),
            'section' => 'course_features_section'
        )
    ) ); 

    $wp_customize->add_setting( 'lp_course_feature_quizzes',
        array(
            'default' => $this->defaults['lp_course_feature_quizzes'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_quizzes',
        array(
            'label' => esc_html__( 'Custom Level', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );
   // Course duration
    $wp_customize->add_setting( 'lp_course_feature_duration_show',
        array(
            'default' => $this->defaults['lp_course_feature_duration_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_course_feature_duration_show',
        array(
            'label' => esc_html__( 'Duration', 'edubin' ),
            'section' => 'course_features_section'
        )
    ) ); 
    $wp_customize->add_setting( 'lp_course_feature_duration',
        array(
            'default' => $this->defaults['lp_course_feature_duration'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_duration',
        array(
            'label' => esc_html__( 'Custom Level', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );
   // Course max student
    $wp_customize->add_setting( 'lp_course_feature_max_students_show',
        array(
            'default' => $this->defaults['lp_course_feature_max_students_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_course_feature_max_students_show',
        array(
            'label' => esc_html__( 'Max Students', 'edubin' ),
            'section' => 'course_features_section'
        )
    ) ); 
    $wp_customize->add_setting( 'lp_course_feature_max_tudents',
        array(
            'default' => $this->defaults['lp_course_feature_max_tudents'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_max_tudents',
        array(
            'label' => esc_html__( 'Custom Level', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );
   // Course enroll
    $wp_customize->add_setting( 'lp_course_feature_enroll_show',
        array(
            'default' => $this->defaults['lp_course_feature_enroll_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_course_feature_enroll_show',
        array(
            'label' => esc_html__( 'Enrolled', 'edubin' ),
            'section' => 'course_features_section'
        )
    ) ); 
    $wp_customize->add_setting( 'lp_course_feature_enroll',
        array(
            'default' => $this->defaults['lp_course_feature_enroll'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_enroll',
        array(
            'label' => esc_html__( 'Custom Level', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );
   // Course retake count
    $wp_customize->add_setting( 'lp_course_feature_retake_count_show',
        array(
            'default' => $this->defaults['lp_course_feature_retake_count_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_course_feature_retake_count_show',
        array(
            'label' => esc_html__( 'Re-take', 'edubin' ),
            'section' => 'course_features_section'
        )
    ) ); 
    $wp_customize->add_setting( 'lp_course_feature_retake_count',
        array(
            'default' => $this->defaults['lp_course_feature_retake_count'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_retake_count',
        array(
            'label' => esc_html__( 'Custom Level', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );
   // Course Skill Level
    $wp_customize->add_setting( 'lp_course_feature_skill_level_show',
        array(
            'default' => $this->defaults['lp_course_feature_skill_level_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_course_feature_skill_level_show',
        array(
            'label' => esc_html__( 'Skill Level', 'edubin' ),
            'section' => 'course_features_section'
        )
    ) ); 
    $wp_customize->add_setting( 'lp_course_feature_skill_level',
        array(
            'default' => $this->defaults['lp_course_feature_skill_level'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_skill_level',
        array(
            'label' => esc_html__( 'Custom Level', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );
   // Course Language
    $wp_customize->add_setting( 'lp_course_feature_language_show',
        array(
            'default' => $this->defaults['lp_course_feature_language_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_course_feature_language_show',
        array(
            'label' => esc_html__( 'Language', 'edubin' ),
            'section' => 'course_features_section'
        )
    ) ); 
    $wp_customize->add_setting( 'lp_course_feature_language',
        array(
            'default' => $this->defaults['lp_course_feature_language'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_language',
        array(
            'label' => esc_html__( 'Custom Level', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );
   // Course Assessments
    $wp_customize->add_setting( 'lp_course_feature_assessments_show',
        array(
            'default' => $this->defaults['lp_course_feature_assessments_show'],
            'transport' => 'refresh',
            'sanitize_callback' => 'edubin_switch_sanitization'
        )
    );
    $wp_customize->add_control( new Edubin_Toggle_Switch_Custom_control( $wp_customize, 'lp_course_feature_assessments_show',
        array(
            'label' => esc_html__( 'Assessments', 'edubin' ),
            'section' => 'course_features_section'
        )
    ) ); 
    $wp_customize->add_setting( 'lp_course_feature_assessments',
        array(
            'default' => $this->defaults['lp_course_feature_assessments'],
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control( 'lp_course_feature_assessments',
        array(
            'label' => esc_html__( 'Custom Level', 'edubin' ),
            'type' => 'text',
            'section' => 'course_features_section'
        )
    );