<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_User_Login_Form extends Widget_Base {

    public function get_name() {
        return 'edubin-userlogin-form-addons';
    }
    
    public function get_title() {
        return __( 'User Login Form', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-lock-user';
    }
    public function get_categories() {
        return [ 'edubin-core' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'user_login_form_content',
            [
                'label' => __( 'Login Form', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'edubin_loginform_style',
                [
                    'label' => __( 'Style', 'edubin-core' ),
                    'type' => Controls_Manager::SELECT,
                    'default' => '1',
                    'options' => [
                        '1'   => __( 'Style One', 'edubin-core' ),
                        '2'   => __( 'Style Two', 'edubin-core' ),
                        '3'   => __( 'Style Three', 'edubin-core' ),
                        '4'   => __( 'Style Four', 'edubin-core' ),
                        '5'   => __( 'Style Five', 'edubin-core' ),
                        '6'   => __( 'Style Six', 'edubin-core' ),
                        '7'   => __( 'Style Seven', 'edubin-core' ),
                    ],
                ]
            );

            $this->add_control(
                'edubin_form_show_label',
                [
                    'label' => esc_html__( 'Label', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'default' => 'yes',
                    'label_off' => esc_html__( 'Hide', 'edubin-core' ),
                    'label_on' => esc_html__( 'Show', 'edubin-core' ),
                ]
            );

            $this->add_control(
                'edubin_form_show_customlabel',
                [
                    'label' => esc_html__( 'Custom label', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'default' => 'no',
                    'label_off' => esc_html__( 'Hide', 'edubin-core' ),
                    'label_on' => esc_html__( 'Show', 'edubin-core' ),
                    'condition' =>[
                        'edubin_form_show_label' => 'yes',
                    ]
                ]
            );

            $this->add_control(
                'edubin_user_label',
                    [
                    'label'     => esc_html__( 'Username Label', 'edubin-core' ),
                    'type'      => Controls_Manager::TEXT,
                    'default'   => esc_html__( 'Username or Email', 'edubin-core' ),
                    'condition' => [
                        'edubin_form_show_label'   => 'yes',
                        'edubin_form_show_customlabel' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'edubin_user_placeholder',
                [
                    'label'     => esc_html__( 'Username Placeholder', 'edubin-core' ),
                    'type'      => Controls_Manager::TEXT,
                    'default'   => esc_html__( 'Username or Email', 'edubin-core' ),
                    'condition' => [
                        'edubin_form_show_label'   => 'yes',
                        'edubin_form_show_customlabel' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'edubin_password_label',
                [
                    'label'     => esc_html__( 'Password Label', 'edubin-core' ),
                    'type'      => Controls_Manager::TEXT,
                    'default'   => esc_html__( 'Password', 'edubin-core' ),
                    'condition' => [
                        'edubin_form_show_label'   => 'yes',
                        'edubin_form_show_customlabel' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'edubin_password_placeholder',
                [
                    'label'     => __( 'Password Placeholder', 'edubin-core' ),
                    'type'      => Controls_Manager::TEXT,
                    'default'   => __( 'Password', 'edubin-core' ),
                    'condition' => [
                        'edubin_form_show_label'   => 'yes',
                        'edubin_form_show_customlabel' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'redirect_page',
                [
                    'label' => __( 'Redirect page after Login', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'default' => 'no',
                    'label_off' => __( 'No', 'edubin-core' ),
                    'label_on' => __( 'Yes', 'edubin-core' ),
                ]
            );

            $this->add_control(
                'redirect_page_url',
                [
                    'type'          => Controls_Manager::URL,
                    'show_label'    => false,
                    'show_external' => false,
                    'separator'     => false,
                    'placeholder'   => 'http://your-link.com/',
                    'condition'     => [
                        'redirect_page' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'lost_password',
                [
                    'label'     => esc_html__( 'Lost your password?', 'edubin-core' ),
                    'type'      => Controls_Manager::SWITCHER,
                    'default'   => 'yes',
                    'label_off' => esc_html__( 'Hide', 'edubin-core' ),
                    'label_on'  => esc_html__( 'Show', 'edubin-core' ),
                ]
            );

            $this->add_control(
                'remember_me',
                [
                    'label'     => esc_html__( 'Remember Me', 'edubin-core' ),
                    'type'      => Controls_Manager::SWITCHER,
                    'default'   => 'yes',
                    'label_off' => esc_html__( 'Hide', 'edubin-core' ),
                    'label_on'  => esc_html__( 'Show', 'edubin-core' ),
                ]
            );

            if ( get_option( 'users_can_register' ) ) {
                $this->add_control(
                    'register_link',
                    [
                        'label'     => esc_html__( 'Register', 'edubin-core' ),
                        'type'      => Controls_Manager::SWITCHER,
                        'default'   => 'no',
                        'label_off' => esc_html__( 'Hide', 'edubin-core' ),
                        'label_on'  => esc_html__( 'Show', 'edubin-core' ),
                    ]
                );

                $this->add_control(
                    'register_link_text',
                    [
                        'label' => __( 'Register Link Text', 'edubin-core' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Register', 'edubin-core' ),
                        'condition'     => [
                            'register_link' => 'yes',
                        ],
                    ]
                );
            }

            $this->add_control(
                'login_button_heading',
                [
                    'label' => __( 'Login Button', 'edubin-core' ),
                    'type' => Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'login_button_text',
                [
                    'label' => __( 'Button Text', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Login', 'edubin-core' ),
                ]
            );

            
        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'edubin_login_form_style_section',
            [
                'label' => __( 'Style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            
            $this->add_responsive_control(
                'login_form_style_align',
                [
                    'label' => __( 'Alignment', 'edubin-core' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => __( 'Left', 'edubin-core' ),
                            'icon' => 'fa fa-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'edubin-core' ),
                            'icon' => 'fa fa-align-center',
                        ],
                        'right' => [
                            'title' => __( 'Right', 'edubin-core' ),
                            'icon' => 'fa fa-align-right',
                        ],
                        'justify' => [
                            'title' => __( 'Justified', 'edubin-core' ),
                            'icon' => 'fa fa-align-justify',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper' => 'text-align: {{VALUE}};',
                    ],
                    'default' => 'left',
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'login_form_section_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'login_form_section_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'login_form_section_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-login-form-wrapper',
                ]
            );

            $this->add_group_control(
                Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'login_form_section_box_shadow',
                    'label' => __( 'Box Shadow', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-login-form-wrapper',
                ]
            );

        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'login_form_style_input',
            [
                'label' => __( 'Input', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            
            $this->add_control(
                'login_form_input_text_color',
                [
                    'label'     => __( 'Text Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper input'   => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'login_form_input_placeholder_color',
                [
                    'label'     => __( 'Placeholder Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper input[type*="text"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-login-form-wrapper input[type*="text"]::-moz-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-login-form-wrapper input[type*="text"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                         '{{WRAPPER}} .edubin-login-form-wrapper input[type*="password"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-login-form-wrapper input[type*="password"]::-moz-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-login-form-wrapper input[type*="password"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                         '{{WRAPPER}} .edubin-login-form-wrapper input[type*="email"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-login-form-wrapper input[type*="email"]::-moz-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-login-form-wrapper input[type*="email"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'login_form_input_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-login-form-wrapper input',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'login_form_input_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-login-form-wrapper input',
                ]
            );

            $this->add_responsive_control(
                'login_form_input_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper input' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'login_form_input_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'login_form_input_height',
                [
                    'label' => __( 'Height', 'edubin-core' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 50,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper input' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'login_form_input_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-login-form-wrapper input',
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'login_form_input_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper input' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

        $this->end_controls_section();

        // Submit Button
        $this->start_controls_section(
            'login_form_style_submit_button',
            [
                'label' => __( 'Submit Button', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            // Button Tabs Start
            $this->start_controls_tabs('login_form_style_submit_tabs');

                // Start Normal Submit button tab
                $this->start_controls_tab(
                    'login_form_style_submit_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );
                    
                    $this->add_control(
                        'login_form_submitbutton_text_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]'   => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'login_form_submitbutton_typography',
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'login_form_submitbutton_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]',
                        ]
                    );

                    $this->add_responsive_control(
                        'login_form_submitbutton_margin',
                        [
                            'label' => __( 'Margin', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'login_form_submitbutton_padding',
                        [
                            'label' => __( 'Padding', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    $this->add_control(
                        'login_form_submitbutton_height',
                        [
                            'label' => __( 'Height', 'edubin-core' ),
                            'type' => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 1000,
                                    'step' => 1,
                                ],
                                '%' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'default' => [
                                'unit' => 'px',
                                'size' => 50,
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                            'separator' =>'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'login_form_submitbutton_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]',
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'login_form_submitbutton_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Normal submit Button tab end

                // Start Hover Submit button tab
                $this->start_controls_tab(
                    'login_form_style_submit_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );
                    
                    $this->add_control(
                        'login_form_submitbutton_hover_text_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]:hover'   => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'login_form_submitbutton_hover_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]:hover',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'login_form_submitbutton_hover_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]:hover',
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'login_form_submitbutton_hover_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-login-form-wrapper input[type="submit"]:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Hover Submit Button tab End

            $this->end_controls_tabs(); // Button Tabs End

        $this->end_controls_section();

        // Label Style Start
        $this->start_controls_section(
            'login_form_style_label',
            [
                'label' => __( 'Label', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'login_form_label_text_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper label'   => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-login-form-wrapper .login_register_text'   => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'login_form_label_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-login-form-wrapper label,{{WRAPPER}} .edubin-login-form-wrapper .login_register_text',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'login_form_label_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-login-form-wrapper label',
                ]
            );

            $this->add_responsive_control(
                'login_form_label_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'login_form_label_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'login_form_label_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-login-form-wrapper label',
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'login_form_label_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper label' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'login_form_label_align',
                [
                    'label' => __( 'Alignment', 'edubin-core' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => __( 'Left', 'edubin-core' ),
                            'icon' => 'fa fa-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'edubin-core' ),
                            'icon' => 'fa fa-align-center',
                        ],
                        'right' => [
                            'title' => __( 'Right', 'edubin-core' ),
                            'icon' => 'fa fa-align-right',
                        ],
                        'justify' => [
                            'title' => __( 'Justified', 'edubin-core' ),
                            'icon' => 'fa fa-align-justify',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-login-form-wrapper label' => 'text-align: {{VALUE}};',
                    ],
                    'default' => 'left',
                    'separator' =>'before',
                ]
            );

        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();
        $current_url = remove_query_arg( 'fake_arg' );
        $id = $this->get_id();

        if ( $settings['redirect_page'] == 'yes' && ! empty( $settings['redirect_page_url']['url'] ) ) {
            $redirect_url = $settings['redirect_page_url']['url'];
        } else {
            $redirect_url = $current_url;
        }

        $this->add_render_attribute( 'loginform_area_attr', 'class', 'edubin-login-form-wrapper' );
        $this->add_render_attribute( 'loginform_area_attr', 'class', 'edubin-login-form-style-'.$settings['edubin_loginform_style'] );

        // Label Value
        $user_label = isset( $settings['edubin_user_label'] ) ? $settings['edubin_user_label'] : __('Username','edubin-core');
        $user_placeholder = isset( $settings['edubin_user_placeholder'] ) ? $settings['edubin_user_placeholder'] : __('Username','edubin-core');
        $pass_label = isset( $settings['edubin_password_label'] ) ? $settings['edubin_password_label'] : __('Password','edubin-core');
        $pass_placeholder = isset( $settings['edubin_password_placeholder'] ) ? $settings['edubin_password_placeholder'] : __('Password','edubin-core');
       
        ?>
            <div <?php echo $this->get_render_attribute_string( 'loginform_area_attr' ); ?> >

                <div id="edubin_message_<?php echo esc_attr__( $id, 'edubin-core' ); ?>" class="edubin_message">&nbsp;</div>

                <?php
                    if ( is_user_logged_in() && !Plugin::instance()->editor->is_edit_mode() ) {
                        $current_user = wp_get_current_user();
                        echo '<div class="edubin-user-login">' .
                            sprintf( __( 'You are Logged in as %1$s (<a href="%2$s">Logout</a>)', 'edubin-core' ), $current_user->display_name, wp_logout_url( $current_url ) ) .
                            '</div>';
                        return;
                    }
                ?>

                <form id="edubin_login_form_<?php echo esc_attr__( $id, 'edubin-core' ); ?>" action="formloginaction" method="post">

                    <div class="row">

                        <div class="col-lg-12">
                            <?php
                                if( $settings['edubin_form_show_label'] == 'yes'){
                                    echo sprintf('<label for="%1$s">%1$s</label>', $user_label );
                                }
                            ?>
                            <input 
                                type="text"  
                                id="login_username<?php echo esc_attr( $id ); ?>" 
                                name="login_username" 
                                placeholder="<?php echo esc_attr__( $user_placeholder,'edubin-core' );?>">
                        </div>

                        <div class="col-lg-12">
                            <?php
                                if( $settings['edubin_form_show_label'] == 'yes'){
                                    echo sprintf('<label for="%1$s">%1$s</label>', $pass_label );
                                }
                            ?>
                            <input 
                                type="password" 
                                id="login_password<?php echo esc_attr( $id ); ?>" 
                                name="login_password" 
                                placeholder="<?php echo esc_attr__( $pass_placeholder,'edubin-core' );?>">
                        </div>

                        <div class="col-lg-12">
                            <div class="log-remember">
                                <?php if( $settings['remember_me'] == 'yes' ): ?>
                                    <label class="lable-content"><?php esc_html_e('Remember Me','edubin-core'); ?>
                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever">
                                        <span class="checkmark"></span>
                                    </label>
                                <?php endif; if( $settings['lost_password'] == 'yes' ): ?>
                                    <a href="<?php echo wp_lostpassword_url( $current_url ); ?>" class="fright"><?php esc_html_e('Forgot Password?','edubin-core'); ?></a>
                                <?php endif;?>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input 
                                type="submit" 
                                id="login_form_submit_<?php echo esc_attr__( $id, 'edubin-core'); ?>" 
                                name="login_form_submit<?php echo $id; ?>" 
                                value="<?php if( !empty( $settings['login_button_text'] ) ){ echo esc_attr__( $settings['login_button_text'], 'edubin-core'); } else { esc_html_e( 'Login', 'edubin-core' ); } ?>">

                            <?php if( get_option( 'users_can_register' ) && $settings['register_link'] == 'yes' ): ?>
                                <a href="<?php echo wp_registration_url(); ?>" class="login_register_text">
                                    <?php if( !empty( $settings['register_link_text'] ) ){ echo esc_attr__( $settings['register_link_text'], 'edubin-core'); } else { esc_html_e( 'Register', 'edubin-core' ); } ?>
                                </a>
                            <?php endif;?>
                        </div>

                    </div>

                    <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>

                </form>

            </div>

        <?php

        $this->edubin_login_check( $redirect_url, $id );

    }

    public function edubin_login_check( $redirect_url, $id ) {

        ?>

        <script type="text/javascript">

            jQuery(document).ready(function($) {
                "use strict";

                var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
                var loadingmessage = '<?php echo esc_html__('Please wait...','edubin-core'); ?>';
                var login_form_id = 'form#edubin_login_form_<?php echo esc_attr( $id ); ?>';
                var login_button_id = '#login_form_submit_<?php echo esc_attr( $id ); ?>';

                $( login_button_id ).on('click', function(){

                    $('#edubin_message_<?php echo esc_attr( $id ); ?>').html('<span class="edubin_lodding_msg">'+ loadingmessage +'</span>').fadeIn();

                    $.ajax({  
                        type: 'POST',
                        dataType: 'json',  
                        url:  ajaxurl,  
                        data: { 
                            'action': 'edubin_ajax_login',
                            'username': $( login_form_id + ' #login_username<?php echo esc_attr( $id ); ?>').val(), 
                            'password': $( login_form_id + ' #login_password<?php echo esc_attr( $id ); ?>').val(), 
                            'security': $( login_form_id + ' #security').val()
                        },
                        success: function(msg){
                            if ( msg.loggeauth == true ){
                                $('#edubin_message_<?php echo esc_attr( $id ); ?>').html('<div class="edubin_success_msg alert alert-success">'+ msg.message +'</div>').fadeIn();
                                document.location.href = '<?php echo esc_url( $redirect_url ); ?>';
                            }else{
                                $('#edubin_message_<?php echo esc_attr( $id ); ?>').html('<div class="edubin_invalid_msg alert alert-danger">'+ msg.message +'</div>').fadeIn();
                            }
                        }  
                    });

                    return false;
                  
                });

            });

        </script>

        <?php

    }
    
}

