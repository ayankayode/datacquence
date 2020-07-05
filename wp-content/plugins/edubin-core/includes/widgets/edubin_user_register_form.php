<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_User_Register_Form extends Widget_Base {

    public function get_name() {
        return 'edubin-userregister-form-addons';
    }
    
    public function get_title() {
        return __( 'User Register Form', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-lock-user';
    }
    public function get_categories() {
        return [ 'edubin-core' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'user_register_form_content',
            [
                'label' => __( 'Register Form', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'register_form_style',
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
                    ],
                ]
            );

            $this->add_control(
                'show_firstname',
                [
                    'label' => __( 'Show First Name', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                    'separator'=>'before',
                ]
            );

            $this->add_control(
                'show_lastname',
                [
                    'label' => __( 'Show Last Name', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                ]
            );

            $this->add_control(
                'show_nickname',
                [
                    'label' => __( 'Nick Name', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                ]
            );

            $this->add_control(
                'show_website',
                [
                    'label' => __( 'Website', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                ]
            );

            $this->add_control(
                'show_bio',
                [
                    'label' => __( 'Biographical Info', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                ]
            );

            $this->add_control(
                'show_label',
                [
                    'label' => __( 'Show label', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'show_custom_label',
                [
                    'label' => __( 'Custom label', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                    'separator' => 'before',
                    'condition'=>[
                        'show_label'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'username_label',
                [
                    'label' => __( 'Username Label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Username', 'edubin-core' ),
                    'placeholder' => __( 'Username', 'edubin-core' ),
                    'condition'=>[
                        'show_label'=>'yes',
                        'show_custom_label'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'password_label',
                [
                    'label' => __( 'Password Label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Password', 'edubin-core' ),
                    'placeholder' => __( 'Password', 'edubin-core' ),
                    'condition'=>[
                        'show_label'=>'yes',
                        'show_custom_label'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'email_label',
                [
                    'label' => __( 'Mail Label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Mail', 'edubin-core' ),
                    'placeholder' => __( 'Mail', 'edubin-core' ),
                    'condition'=>[
                        'show_label'=>'yes',
                        'show_custom_label'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'firstname_label',
                [
                    'label' => __( 'First Name Label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'First Name', 'edubin-core' ),
                    'placeholder' => __( 'First Name', 'edubin-core' ),
                    'condition'=>[
                        'show_label'=>'yes',
                        'show_custom_label'=>'yes',
                        'show_firstname'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'lastname_label',
                [
                    'label' => __( 'Last Name Label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'First Name', 'edubin-core' ),
                    'placeholder' => __( 'First Name', 'edubin-core' ),
                    'condition'=>[
                        'show_label'=>'yes',
                        'show_custom_label'=>'yes',
                        'show_lastname'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'nickname_label',
                [
                    'label' => __( 'Nick Name Label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Nick Name', 'edubin-core' ),
                    'placeholder' => __( 'Nick Name', 'edubin-core' ),
                    'condition'=>[
                        'show_label'=>'yes',
                        'show_custom_label'=>'yes',
                        'show_nickname'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'website_label',
                [
                    'label' => __( 'Website Label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Website', 'edubin-core' ),
                    'placeholder' => __( 'Website', 'edubin-core' ),
                    'condition'=>[
                        'show_label'=>'yes',
                        'show_custom_label'=>'yes',
                        'show_website'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'bio_label',
                [
                    'label' => __( 'Biographical Info Label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Biographical', 'edubin-core' ),
                    'placeholder' => __( 'Biographical', 'edubin-core' ),
                    'condition'=>[
                        'show_label'=>'yes',
                        'show_custom_label'=>'yes',
                        'show_bio'=>'yes',
                    ]
                ]
            );


            $this->add_control(
                'show_custom_placeholder',
                [
                    'label' => __( 'Custom Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'username_placeholder_label',
                [
                    'label' => __( 'Username Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Username', 'edubin-core' ),
                    'placeholder' => __( 'Username', 'edubin-core' ),
                    'condition'=>[
                        'show_custom_placeholder'=>'yes',
                    ],
                ]
            );

            $this->add_control(
                'password_placeholder_label',
                [
                    'label' => __( 'Password Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Password', 'edubin-core' ),
                    'placeholder' => __( 'Password', 'edubin-core' ),
                    'condition'=>[
                        'show_custom_placeholder'=>'yes',
                    ],
                ]
            );

            $this->add_control(
                'email_placeholder_label',
                [
                    'label' => __( 'Mail Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Mail', 'edubin-core' ),
                    'placeholder' => __( 'Mail', 'edubin-core' ),
                    'condition'=>[
                        'show_custom_placeholder'=>'yes',
                    ],
                ]
            );

            $this->add_control(
                'firstname_placeholder_label',
                [
                    'label' => __( 'First Name Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'First Name', 'edubin-core' ),
                    'placeholder' => __( 'First Name', 'edubin-core' ),
                    'condition'=>[
                        'show_custom_placeholder'=>'yes',
                        'show_firstname'=>'yes',
                    ],
                ]
            );

            $this->add_control(
                'lastname_placeholder_label',
                [
                    'label' => __( 'Last Name Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Last Name', 'edubin-core' ),
                    'placeholder' => __( 'Last Name', 'edubin-core' ),
                    'condition'=>[
                        'show_custom_placeholder'=>'yes',
                        'show_lastname'=>'yes',
                    ],
                ]
            );

            $this->add_control(
                'nickname_placeholder_label',
                [
                    'label' => __( 'Nick Name Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Nick Name', 'edubin-core' ),
                    'placeholder' => __( 'Nick Name', 'edubin-core' ),
                    'condition'=>[
                        'show_custom_placeholder'=>'yes',
                        'show_nickname'=>'yes',
                    ],
                ]
            );

            $this->add_control(
                'website_placeholder_label',
                [
                    'label' => __( 'Website Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Website', 'edubin-core' ),
                    'placeholder' => __( 'Website', 'edubin-core' ),
                    'condition'=>[
                        'show_custom_placeholder'=>'yes',
                        'show_website'=>'yes',
                    ],
                ]
            );

            $this->add_control(
                'bio_placeholder_label',
                [
                    'label' => __( 'Biographical Placeholder', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Bio', 'edubin-core' ),
                    'placeholder' => __( 'Bio', 'edubin-core' ),
                    'condition'=>[
                        'show_custom_placeholder'=>'yes',
                        'show_bio'=>'yes',
                    ],
                ]
            );

            $this->add_control(
                'submit_button_label',
                [
                    'label' => __( 'Submit Button label', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'REGISTER', 'edubin-core' ),
                    'placeholder' => __( 'REGISTER', 'edubin-core' ),
                    'separator' =>'before',
                ]
            );

        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'register_form_style_section',
            [
                'label' => __( 'Style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_responsive_control(
                'register_form_style_align',
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
                        '{{WRAPPER}} .edubin-register-wrapper' => 'text-align: {{VALUE}};',
                    ],
                    'default' => 'center',
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'register_form_section_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'register_form_section_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'register_form_style_input',
            [
                'label' => __( 'Input', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            
            $this->add_control(
                'register_form_input_text_color',
                [
                    'label'     => __( 'Text Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper input'   => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'register_form_input_placeholder_color',
                [
                    'label'     => __( 'Placeholder Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper input[type*="text"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-register-wrapper input[type*="text"]::-moz-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-register-wrapper input[type*="text"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                         '{{WRAPPER}} .edubin-register-wrapper input[type*="password"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-register-wrapper input[type*="password"]::-moz-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-register-wrapper input[type*="password"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                         '{{WRAPPER}} .edubin-register-wrapper input[type*="email"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-register-wrapper input[type*="email"]::-moz-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-register-wrapper input[type*="email"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'register_form_input_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper input',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'register_input_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper input',
                ]
            );

            $this->add_responsive_control(
                'register_input_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper input' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'register_input_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'register_input_height',
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
                        '{{WRAPPER}} .edubin-register-wrapper input' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'register_input_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper input',
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'register_input_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper input' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

        $this->end_controls_section();

        // Style tab Textarea section
        $this->start_controls_section(
            'register_form_style_textarea',
            [
                'label' => __( 'Textarea', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' =>[
                    'show_bio' =>'yes',
                ]
            ]
        );
            
            $this->add_control(
                'register_form_textarea_text_color',
                [
                    'label'     => __( 'Text Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper textarea'   => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'register_form_textarea_placeholder_color',
                [
                    'label'     => __( 'Placeholder Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper textarea::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-register-wrapper textarea::-moz-placeholder'  => 'color: {{VALUE}};',
                        '{{WRAPPER}} .edubin-register-wrapper textarea:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'register_form_textarea_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper textarea',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'register_textarea_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper textarea',
                ]
            );

            $this->add_responsive_control(
                'register_textarea_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper textarea' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'register_textarea_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'register_textarea_height',
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
                        'size' => 100,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper textarea' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'register_textarea_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper textarea',
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'register_textarea_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper textarea' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

        $this->end_controls_section();

        // Submit Button
        $this->start_controls_section(
            'register_form_style_submit_button',
            [
                'label' => __( 'Submit Button', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            // Button Tabs Start
            $this->start_controls_tabs('register_form_style_submit_tabs');

                // Start Normal Submit button tab
                $this->start_controls_tab(
                    'register_form_style_submit_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );
                    
                    $this->add_control(
                        'register_form_submitbutton_text_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]'   => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'register_form_submitbutton_typography',
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'register_form_submitbutton_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]',
                        ]
                    );

                    $this->add_responsive_control(
                        'register_form_submitbutton_margin',
                        [
                            'label' => __( 'Margin', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'register_form_submitbutton_padding',
                        [
                            'label' => __( 'Padding', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    $this->add_control(
                        'register_form_submitbutton_height',
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
                                '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                            'separator' =>'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'register_form_submitbutton_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]',
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'register_form_submitbutton_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Normal submit Button tab end

                // Start Hover Submit button tab
                $this->start_controls_tab(
                    'register_form_style_submit_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );
                    
                    $this->add_control(
                        'register_form_submitbutton_hover_text_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]:hover'   => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'register_form_submitbutton_hover_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]:hover',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'register_form_submitbutton_hover_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]:hover',
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'register_form_submitbutton_hover_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-register-wrapper input[type="submit"]:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Hover Submit Button tab End

            $this->end_controls_tabs(); // Button Tabs End

        $this->end_controls_section();

        // Label Style Start
        $this->start_controls_section(
            'register_form_style_label',
            [
                'label' => __( 'Label', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'show_label'=>'yes',
                ]
            ]
        );

            $this->add_control(
                'register_form_label_text_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper label'   => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'register_form_label_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper label',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'register_form_label_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper label',
                ]
            );

            $this->add_responsive_control(
                'register_form_label_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'register_form_label_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'register_form_label_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-register-wrapper label',
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'register_form_label_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-register-wrapper label' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'register_form_label_align',
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
                        '{{WRAPPER}} .edubin-register-wrapper label' => 'text-align: {{VALUE}};',
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

        $this->add_render_attribute( 'register_area_attr', 'class', 'edubin-register-wrapper' );
        $this->add_render_attribute( 'register_area_attr', 'class', 'edubin-register-style-'.$settings['register_form_style'] );
       
        ?>
            <?php
                if ( is_user_logged_in() && ! Plugin::instance()->editor->is_edit_mode() ) {
                    $current_user = wp_get_current_user();
                    echo '<div class="edubin-user-login">' .
                        sprintf( __( 'You are Logged in as %1$s (<a href="%2$s">Logout</a>)', 'edubin-core' ), $current_user->display_name, wp_logout_url( $current_url ) ) .
                        '</div>';
                    return;
                }
            ?>

            <?php

                $this->add_render_attribute(
                    'username_input_attr', [
                        'name'  => 'reg_name',
                        'id'    => 'reg_name'.$id,
                        'type'  => 'text',
                        'value' => isset( $_REQUEST['reg_name'] ) ? $_REQUEST['reg_name'] : null,
                        'placeholder' => isset( $settings['username_placeholder_label'] ) ? $settings['username_placeholder_label'] : 'Username',
                    ]
                );

                $this->add_render_attribute(
                    'password_input_attr', [
                        'name'  => 'reg_password',
                        'id'    => 'reg_password'.$id,
                        'type'  => 'password',
                        'value' => isset( $_REQUEST['reg_password'] ) ? $_REQUEST['reg_password'] : null,
                        'placeholder' => isset( $settings['password_placeholder_label'] ) ? $settings['password_placeholder_label'] : 'Password',
                    ]
                );

                $this->add_render_attribute(
                    'email_input_attr', [
                        'name'  => 'reg_email',
                        'id'    => 'reg_email'.$id,
                        'type'  => 'email',
                        'value' => isset( $_REQUEST['reg_email'] ) ? $_REQUEST['reg_email'] : null,
                        'placeholder' => isset( $settings['email_placeholder_label'] ) ? $settings['email_placeholder_label'] : 'Email',
                    ]
                );

                $this->add_render_attribute(
                    'fname_input_attr', [
                        'name'  => 'reg_fname',
                        'id'    => 'reg_fname'.$id,
                        'type'  => 'text',
                        'value' => isset( $_REQUEST['reg_fname'] ) ? $_REQUEST['reg_fname'] : null,
                        'placeholder' => isset( $settings['firstname_placeholder_label'] ) ? $settings['firstname_placeholder_label'] : 'First Name',
                    ]
                );

                $this->add_render_attribute(
                    'lname_input_attr', [
                        'name'  => 'reg_lname',
                        'id'    => 'reg_lname'.$id,
                        'type'  => 'text',
                        'value' => isset( $_REQUEST['reg_lname'] ) ? $_REQUEST['reg_lname'] : null,
                        'placeholder' => isset( $settings['lastname_placeholder_label'] ) ? $settings['lastname_placeholder_label'] : 'Last Name',
                    ]
                );

                $this->add_render_attribute(
                    'nickname_input_attr', [
                        'name'  => 'reg_nickname',
                        'id'    => 'reg_nickname'.$id,
                        'type'  => 'text',
                        'value' => isset( $_REQUEST['reg_nickname'] ) ? $_REQUEST['reg_nickname'] : null,
                        'placeholder' => isset( $settings['nickname_placeholder_label'] ) ? $settings['nickname_placeholder_label'] : 'Nick Name',
                    ]
                );

                $this->add_render_attribute(
                    'website_input_attr', [
                        'name'  => 'reg_website',
                        'id'    => 'reg_website'.$id,
                        'type'  => 'text',
                        'value' => isset( $_REQUEST['reg_website'] ) ? $_REQUEST['reg_website'] : null,
                        'placeholder' => isset( $settings['website_placeholder_label'] ) ? $settings['website_placeholder_label'] : 'Website',
                    ]
                );

                $this->add_render_attribute(
                    'submit_input_attr', [
                        'name'  => 'reg_submit'.$id,
                        'id'    => 'reg_submit'.$id,
                        'type'  => 'submit',
                        'value' => isset( $settings['submit_button_label'] ) ? $settings['submit_button_label'] : 'REGISTER',
                    ]
                );
            ?>

            <div <?php echo $this->get_render_attribute_string( 'register_area_attr' ); ?>>
                <?php
                    if ( isset( $_REQUEST['reg_submit'.$id] ) ) {

                        $get_username = isset( $_REQUEST['reg_name'] ) ? $_REQUEST['reg_name'] : NULL;
                        $get_password = isset( $_REQUEST['reg_password'] ) ? $_REQUEST['reg_password'] : NULL;
                        $get_email = isset( $_REQUEST['reg_email'] ) ? $_REQUEST['reg_email'] : NULL;
                        $get_website = isset( $_REQUEST['reg_website'] ) ? $_REQUEST['reg_website'] : NULL;
                        $get_first_name = isset( $_REQUEST['reg_fname'] ) ? $_REQUEST['reg_fname'] : NULL;
                        $get_last_name = isset( $_REQUEST['reg_lname'] ) ? $_REQUEST['reg_lname'] : NULL; 
                        $get_nickname = isset( $_REQUEST['reg_nickname'] ) ? $_REQUEST['reg_nickname'] : NULL;
                        $get_bio = isset( $_REQUEST['reg_bio'] ) ? $_REQUEST['reg_bio'] : NULL;

                        if ( is_wp_error( $this->edubin_validation( $get_username, $get_password, $get_email, $get_website, $get_first_name, $get_last_name, $get_nickname, $get_bio ) ) ) {
                            echo '<div class="alert alert-danger">';
                                echo esc_html__( $this->edubin_validation( $get_username, $get_password, $get_email, $get_website, $get_first_name, $get_last_name, $get_nickname, $get_bio )->get_error_message(),'edubin-core' );
                            echo '</div>';
                        }
                        else {
                            $this->edubin_registration( $get_username, $get_password, $get_email, $get_website, $get_first_name, $get_last_name, $get_nickname, $get_bio );
                        }
                    }
                ?>
                <div class="edubin-register-form">
                    <form method="post" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>">

                        <?php if( $settings['register_form_style'] == 2 ): ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){
                                            echo sprintf('<label>%1$s</label>',isset( $settings['username_label'] ) ? $settings['username_label'] : 'Username' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'username_input_attr' ).' />';
                                    ?>
                                </div>

                                <div class="col-lg-6">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['password_label'] ) ? $settings['password_label'] : 'Password' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'password_input_attr' ).' />';
                                    ?>
                                </div>

                                <div class="col-lg-12">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['email_label'] ) ? $settings['email_label'] : 'Email' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'email_input_attr' ).' />';
                                    ?>
                                </div>

                                <!-- Editional Fiedls -->
                                <?php
                                    if( $settings['show_firstname'] == 'yes' ){
                                        echo '<div class="col-lg-12">';
                                            if( $settings['show_label'] == 'yes' ){ 
                                                echo sprintf('<label>%1$s</label>',isset( $settings['firstname_label'] ) ? $settings['firstname_label'] : 'First Name' );
                                            }
                                            echo '<input '.$this->get_render_attribute_string( 'fname_input_attr' ).' />';
                                        echo '</div>';
                                    }
                                    if( $settings['show_lastname'] == 'yes' ){
                                        echo '<div class="col-lg-12">';
                                            if( $settings['show_label'] == 'yes' ){ 
                                                echo sprintf('<label>%1$s</label>',isset( $settings['lastname_label'] ) ? $settings['lastname_label'] : 'Last Name' );
                                            }
                                            echo '<input '.$this->get_render_attribute_string( 'lname_input_attr' ).' />';
                                        echo '</div>';
                                    }

                                    if( $settings['show_nickname'] == 'yes' ){
                                        echo '<div class="col-lg-12">';
                                            if( $settings['show_label'] == 'yes' ){ 
                                                echo sprintf('<label>%1$s</label>',isset( $settings['nickname_label'] ) ? $settings['nickname_label'] : 'Nick Name' );
                                            }
                                            echo '<input '.$this->get_render_attribute_string( 'nickname_input_attr' ).' />';
                                        echo '</div>';
                                    }

                                    if( $settings['show_website'] == 'yes' ){
                                        echo '<div class="col-lg-12">';
                                            if( $settings['show_label'] == 'yes' ){ 
                                                echo sprintf('<label>%1$s</label>',isset( $settings['website_label'] ) ? $settings['website_label'] : 'Website' );
                                            }
                                            echo '<input '.$this->get_render_attribute_string( 'website_input_attr' ).' />';
                                        echo '</div>';
                                    }

                                    if( $settings['show_bio'] == 'yes' ){
                                        echo '<div class="col-lg-12">';
                                            if( $settings['show_label'] == 'yes' ){ 
                                                echo sprintf('<label>%1$s</label>', isset( $settings['bio_label'] ) ? $settings['bio_label'] : 'Biographical Info' );
                                            }
                                            echo sprintf( '<textarea name="reg_bio" placeholder="%1$s">%2$s</textarea>', ( isset( $settings['bio_placeholder_label'] ) ? $settings['bio_placeholder_label'] : 'Biographical Info'), ( isset( $_REQUEST['reg_bio'] ) ? $_REQUEST['reg_bio'] : NULL ) );
                                        echo '</div>';
                                    }
                                ?>
                                <div class="col-lg-12">
                                    <input <?php echo $this->get_render_attribute_string( 'submit_input_attr' ); ?> />
                                </div>
                            </div>
                        <?php elseif( $settings['register_form_style'] == 3 ): ?>

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="input_box">
                                        <?php
                                            if( $settings['show_label'] == 'yes' ){
                                                echo sprintf('<label>%1$s</label>',isset( $settings['username_label'] ) ? $settings['username_label'] : 'Username' );
                                            }
                                            echo '<i class="glyph-icon flaticon-profile"></i><input '.$this->get_render_attribute_string( 'username_input_attr' ).' />';
                                        ?>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input_box">
                                        <?php
                                            if( $settings['show_label'] == 'yes' ){ 
                                                echo sprintf('<label>%1$s</label>',isset( $settings['password_label'] ) ? $settings['password_label'] : 'Password' );
                                            }
                                            echo '<i class="fa fa-lock"></i><input '.$this->get_render_attribute_string( 'password_input_attr' ).' />';
                                        ?>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input_box">
                                        <?php
                                            if( $settings['show_label'] == 'yes' ){ 
                                                echo sprintf('<label>%1$s</label>',isset( $settings['email_label'] ) ? $settings['email_label'] : 'Email' );
                                            }
                                            echo '<i class="fa fa-envelope"></i><input '.$this->get_render_attribute_string( 'email_input_attr' ).' />';
                                        ?>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <input <?php echo $this->get_render_attribute_string( 'submit_input_attr' ); ?> />
                                </div>

                                <div class="col-lg-12">
                                    <div class="separator">
                                        <span><?php echo esc_html__( 'or you can','edubin-core' );?></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="login">
                                        <a href="<?php echo esc_url( wp_login_url() ); ?>"><?php echo esc_html__( 'LOGIN','edubin-core' );?></a>
                                    </div>
                                </div>

                            </div>

                        <?php elseif( $settings['register_form_style'] == 4 ): ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){
                                            echo sprintf('<label>%1$s</label>',isset( $settings['username_label'] ) ? $settings['username_label'] : 'Username' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'username_input_attr' ).' />';
                                    ?>
                                </div>
                                <div class="col-lg-12">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['password_label'] ) ? $settings['password_label'] : 'Password' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'password_input_attr' ).' />';
                                    ?>
                                </div>
                                <div class="col-lg-12">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['email_label'] ) ? $settings['email_label'] : 'Email' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'email_input_attr' ).' />';
                                    ?>
                                </div>
                                <div class="col-lg-12">
                                    <?php
                                        if( $settings['show_nickname'] == 'yes' ){
                                            if( $settings['show_label'] == 'yes' ){ 
                                                echo sprintf('<label>%1$s</label>',isset( $settings['nickname_label'] ) ? $settings['nickname_label'] : 'Nick Name' );
                                            }
                                            echo '<input '.$this->get_render_attribute_string( 'nickname_input_attr' ).' />';
                                        }
                                    ?>
                                </div>
                                <div class="col-lg-12">
                                    <input <?php echo $this->get_render_attribute_string( 'submit_input_attr' ); ?> />
                                </div>
                            </div>

                        <?php elseif( $settings['register_form_style'] == 5 ): ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){
                                            echo sprintf('<label>%1$s</label>',isset( $settings['username_label'] ) ? $settings['username_label'] : 'Username' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'username_input_attr' ).' />';
                                    ?>
                                </div>

                                <div class="col-lg-12">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['password_label'] ) ? $settings['password_label'] : 'Password' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'password_input_attr' ).' />';
                                    ?>
                                </div>

                                <div class="col-lg-12">
                                    <?php
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['email_label'] ) ? $settings['email_label'] : 'Email' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'email_input_attr' ).' />';
                                    ?>
                                </div>

                                <div class="col-lg-12">
                                    <input <?php echo $this->get_render_attribute_string( 'submit_input_attr' ); ?> />
                                </div>
                            </div>

                        <?php else:?>
                            <div class="edubin-fields">
                                <?php
                                    // Default Field
                                    if( $settings['show_label'] == 'yes' ){
                                        echo sprintf('<label>%1$s</label>',isset( $settings['username_label'] ) ? $settings['username_label'] : 'Username' );
                                    }
                                    echo '<input '.$this->get_render_attribute_string( 'username_input_attr' ).' />';

                                    if( $settings['show_label'] == 'yes' ){ 
                                        echo sprintf('<label>%1$s</label>',isset( $settings['password_label'] ) ? $settings['password_label'] : 'Password' );
                                    }
                                    echo '<input '.$this->get_render_attribute_string( 'password_input_attr' ).' />';

                                    if( $settings['show_label'] == 'yes' ){ 
                                        echo sprintf('<label>%1$s</label>',isset( $settings['email_label'] ) ? $settings['email_label'] : 'Email' );
                                    }
                                    echo '<input '.$this->get_render_attribute_string( 'email_input_attr' ).' />';

                                    // Additionnal Field
                                    if( $settings['show_firstname'] == 'yes' ){
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['firstname_label'] ) ? $settings['firstname_label'] : 'First Name' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'fname_input_attr' ).' />';
                                    }
                                    if( $settings['show_lastname'] == 'yes' ){
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['lastname_label'] ) ? $settings['lastname_label'] : 'Last Name' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'lname_input_attr' ).' />';
                                    }
                                    if( $settings['show_nickname'] == 'yes' ){
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['nickname_label'] ) ? $settings['nickname_label'] : 'Nick Name' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'nickname_input_attr' ).' />';
                                    }
                                    if( $settings['show_website'] == 'yes' ){
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>',isset( $settings['website_label'] ) ? $settings['website_label'] : 'Website' );
                                        }
                                        echo '<input '.$this->get_render_attribute_string( 'website_input_attr' ).' />';
                                    }
                                    if( $settings['show_bio'] == 'yes' ){
                                        if( $settings['show_label'] == 'yes' ){ 
                                            echo sprintf('<label>%1$s</label>', isset( $settings['bio_label'] ) ? $settings['bio_label'] : 'Biographical Info' );
                                        }
                                        echo sprintf( '<textarea name="reg_bio" placeholder="%1$s">%2$s</textarea>', ( isset( $settings['bio_placeholder_label'] ) ? $settings['bio_placeholder_label'] : 'Biographical Info'), ( isset( $_REQUEST['reg_bio'] ) ? $_REQUEST['reg_bio'] : NULL ) );
                                    }

                                ?>
                                <input <?php echo $this->get_render_attribute_string( 'submit_input_attr' ); ?> />
                            </div>
                        <?php endif;?>
                    </form>
                </div>
            </div>

        <?php

    }

    public function edubin_registration( $username = NUll, $password = NULL, $email = NULL, $website = NULL, $first_name = NULL, $last_name = NULL, $nickname = NULL, $bio = NULL )
    {
     
        $userdata = array(
            'user_login' => esc_attr($username),
            'user_pass' => esc_attr($password),
            'user_email' => esc_attr($email),
            'user_url' => esc_attr($website),
            'first_name' => esc_attr($first_name),
            'last_name' => esc_attr($last_name),
            'nickname' => esc_attr($nickname),
            'description' => esc_attr($bio),
        );
        
        $register_user = wp_insert_user( $userdata );
        if ( !is_wp_error( $register_user ) ) {
            echo '<div class="alert alert-success">';
                echo esc_html__('Successfully Registration complete.','edubin-core');
            echo '</div>';
        } else {
            echo '<div class="alert alert-danger">';
                echo esc_html__( $register_user->get_error_message(),'edubin-core' );
            echo '</div>';
        }
    }

    // Form validation
    public function edubin_validation( $username = NUll, $password = NULL, $email = NULL, $website = NULL, $first_name = NULL, $last_name = NULL, $nickname = NULL, $bio = NULL ){

        if( !empty( $username ) ){

            if ( 4 > strlen( $username ) ) {
                return new \WP_Error( 'username_length', 'Username too short. At least 4 characters is required' );
            }
            if ( username_exists( $username ) ){
                return new \WP_Error('user_name', 'Sorry, that username already exists!');
            }
            if ( ! validate_username( $username ) ) {
                return new \WP_Error( 'username_invalid', 'Sorry, the username you entered is not valid' );
            }

        }

        if( !empty($password) ){

            if ( 5 > strlen( $password ) ) {
                return new \WP_Error( 'password', 'Password length must be greater than 5' );
            }

        }

        if( !empty( $email ) ){
            
            if ( !is_email( $email ) ) {
                return new \WP_Error( 'email_invalid', 'Email is not valid' );
            }

            if ( email_exists( $email ) ) {
                return new \WP_Error( 'email', 'Email Already in use' );
            }
        }

        if ( ! empty( $website ) ) {
            if ( ! filter_var( $website, FILTER_VALIDATE_URL ) ) {
                return new \WP_Error( 'website', 'Website is not a valid URL' );
            }
        }

    }

}

