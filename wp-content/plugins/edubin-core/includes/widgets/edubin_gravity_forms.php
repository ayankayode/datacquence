<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Gravity_Forms extends Widget_Base {

    public function get_name() {
        return 'edubin-gravityforms-addons';
    }
    
    public function get_title() {
        return __( 'Gravity Forms', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-mail';
    }

    public function get_categories() {
        return [ 'edubin-core' ];
    }

    public function edubin_gravity_forms_options() {
        if ( class_exists( 'GFCommon' ) ) {
            $contact_forms = \RGFormsModel::get_forms( null, 'title' );
            $form_options = ['0' => esc_html__( 'Select Form', 'edubin-core' )];
            if ( ! empty( $contact_forms ) && ! is_wp_error( $contact_forms ) ) {
                foreach ( $contact_forms as $form ) {   
                    $form_options[ $form->id ] = $form->title;
                }
            }
        } else {
            $form_options = ['0' => esc_html__( 'Form Not Found!', 'edubin-core' ) ];
        }

        return $form_options;
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'gravityforms_content',
            [
                'label' => __( 'Gravity Forms', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'gravity_form',
                [
                    'label'   => esc_html__( 'Select Form', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => '0',
                    'options' => $this->edubin_gravity_forms_options(),
                ]
            );

            $this->add_control(
                'show_title',
                [
                    'label'        => __( 'Show Title', 'edubin-core' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'default'      => 'no',
                    'label_on'     => __( 'Show', 'edubin-core' ),
                    'label_off'    => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                ]
            );
            
            $this->add_control(
                'show_description',
                [
                    'label'        => __( 'Show Description', 'edubin-core' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'default'      => 'no',
                    'label_on'     => __( 'Show', 'edubin-core' ),
                    'label_off'    => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                ]
            );
            
            $this->add_control(
                'form_ajax',
                [
                    'label'        => __( 'From Ajax', 'edubin-core' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'default'      => 'no',
                    'label_on'     => __( 'Yes', 'edubin-core' ),
                    'label_off'    => __( 'No', 'edubin-core' ),
                    'return_value' => 'yes',
                ]
            );
            
        $this->end_controls_section();


        // Title Style tab section
        $this->start_controls_section(
            'gravityforms_title_style',
            [
                'label' => __( 'Title', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=> [
                    'show_title'=>'yes',
                ],
            ]
        );

            $this->add_control(
                'gravityforms_title_text_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gform_heading .gform_title'   => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'gravityforms_title_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .gform_wrapper .gform_heading .gform_title',
                ]
            );

        $this->end_controls_section();

        // Description Style tab section
        $this->start_controls_section(
            'gravityforms_description_style',
            [
                'label' => __( 'Description', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=> [
                    'show_description'=>'yes',
                ],
            ]
        );

            $this->add_control(
                'gravityforms_description_text_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gform_heading .gform_description'   => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'gravityforms_description_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .gform_wrapper .gform_heading .gform_description',
                ]
            );

        $this->end_controls_section();

        // Lavel Style tab section
        $this->start_controls_section(
            'gravityforms_label_style',
            [
                'label' => __( 'Label', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'gravityforms_label_background',
                [
                    'label'     => __( 'Background', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gfield label'   => 'background-color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'gravityforms_label_text_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gfield label'   => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'gravityforms_label_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .gform_wrapper .gfield label',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'gravityforms_label_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .gform_wrapper .gfield label',
                ]
            );

            $this->add_responsive_control(
                'gravityforms_label_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gfield label' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'gravityforms_label_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gfield label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'gravityforms_label_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gfield label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );
            
        $this->end_controls_section();

        // Style Input tab section
        $this->start_controls_section(
            'gravityforms_input_style_section',
            [
                'label' => __( 'Input', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'gravityforms_input_background_color',
                [
                    'label' => __( 'Background Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => Scheme_Color::get_type(),
                        'value' => Scheme_Color::COLOR_1,
                    ],
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gfield input[type="text"], {{WRAPPER}} .gform_wrapper .gfield textarea, {{WRAPPER}} .gform_wrapper .gfield select' => 'background-color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_control(
                'gravityforms_input_color',
                [
                    'label' => __( 'Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => Scheme_Color::get_type(),
                        'value' => Scheme_Color::COLOR_1,
                    ],
                    'default' => '',
                    'selectors'         => [
                        '{{WRAPPER}} .gform_wrapper .gfield input[type="text"], {{WRAPPER}} .gform_wrapper .gfield textarea, {{WRAPPER}} .gform_wrapper .gfield select' => 'color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'gravityforms_input_typography',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_4,
                    'selector' => '{{WRAPPER}} .gform_wrapper .gfield input[type="text"], {{WRAPPER}} .gform_wrapper .gfield textarea, {{WRAPPER}} .gform_wrapper .gfield select',
                ]
            );

            $this->add_responsive_control(
                'gravityforms_input_height',
                [
                    'label'             => __( 'Height', 'edubin-core' ),
                    'type'              => Controls_Manager::SLIDER,
                    'range'             => [
                        'px' => [
                            'min'   => 0,
                            'max'   => 100,
                            'step'  => 1,
                        ],
                    ],
                    'size_units'        => [ 'px', 'em', '%' ],
                    'selectors'         => [
                        '{{WRAPPER}} .gform_wrapper .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'height: {{SIZE}}{{UNIT}}',
                    ],
                ]
            );

            $this->add_responsive_control(
                'gravityforms_input_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), 
                     {{WRAPPER}} .gform_wrapper .gfield textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'gravityforms_input_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gfield' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'gravityforms_input_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .gform_wrapper .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), 
                     {{WRAPPER}} .gform_wrapper .gfield textarea',
                ]
            );

            $this->add_responsive_control(
                'gravityforms_input_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .gform_wrapper .gfield input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), 
                     {{WRAPPER}} .gform_wrapper .gfield textarea' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

        $this->end_controls_section(); // Form input style

        // Input submit button style tab start
        $this->start_controls_section(
            'gravityforms_inputsubmit_style',
            [
                'label'     => __( 'Button', 'edubin-core' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs('gravityforms_submit_style_tabs');

                // Button Normal tab start
                $this->start_controls_tab(
                    'gravityforms_submit_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );

                    $this->add_control(
                        'gravityforms_input_submit_height',
                        [
                            'label' => __( 'Height', 'edubin-core' ),
                            'type'  => Controls_Manager::SLIDER,
                            'range' => [
                                'px' => [
                                    'max' => 200,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'gravityforms_input_submit_typography',
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]',
                        ]
                    );

                    $this->add_control(
                        'gravityforms_input_submit_text_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]'  => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_control(
                        'gravityforms_input_submit_background_color',
                        [
                            'label'     => __( 'Background Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]'  => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_responsive_control(
                        'gravityforms_input_submit_padding',
                        [
                            'label' => __( 'Padding', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'gravityforms_input_submit_margin',
                        [
                            'label' => __( 'Margin', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' =>'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'gravityforms_input_submit_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]',
                        ]
                    );

                    $this->add_responsive_control(
                        'gravityforms_input_submit_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'gravityforms_input_submit_box_shadow',
                            'label' => __( 'Box Shadow', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]',
                        ]
                    );

                $this->end_controls_tab(); // Button Normal tab end

                // Button Hover tab start
                $this->start_controls_tab(
                    'gravityforms_submit_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );

                    $this->add_control(
                        'gravityforms_input_submithover_text_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]:hover'  => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_control(
                        'gravityforms_input_submithover_background_color',
                        [
                            'label'     => __( 'Background Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]:hover'  => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'gravityforms_input_submithover_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .gform_wrapper .gform_footer input[type="submit"]:hover',
                        ]
                    );

                $this->end_controls_tab(); // Button Hover tab end

            $this->end_controls_tabs();

        $this->end_controls_section(); // Input submit button style tab end

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();

       $form_attributes = [
            'id' => $settings['gravity_form'],
            'ajax' => ( $settings['form_ajax'] == 'yes' ) ? 'true' : 'false',
            'title' => ( $settings['show_title'] == 'yes' ) ? 'true' : 'false',
            'description' => ( $settings['show_description'] == 'yes' ) ? 'true' : 'false',
        ];

        $this->add_render_attribute( 'shortcode', $form_attributes );
        
        echo do_shortcode( sprintf( '[gravityform %s]', $this->get_render_attribute_string( 'shortcode' ) ) );

    }

}