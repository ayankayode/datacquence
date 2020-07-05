<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Caldera_Form extends Widget_Base {

    public function get_name() {
        return 'edubin-calderaform-addons';
    }
    
    public function get_title() {
        return __( 'Caldera Form', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-mail';
    }
    public function get_categories() {
        return [ 'edubin-core' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'calderaform_content',
            [
                'label' => __( 'Caldera Form', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'caldera_form_list',
                [
                    'label'   => __( 'Select Form', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => '0',
                    'options' => edubin_caldera_forms_options(),
                ]
            );
            
        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'calderaform_style_section',
            [
                'label' => __( 'Label', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_control(
                'label_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .caldera_forms_form label.control-label' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name'     => 'label_typography',
                    'label'    => __( 'Typography', 'edubin-core' ),
                    'scheme'   => Scheme_Typography::TYPOGRAPHY_4,
                    'selector' => '{{WRAPPER}} .caldera_forms_form label.control-label',
                ]
            );

        $this->end_controls_section();

        // Input Field Style
        $this->start_controls_section(
            'calderaform_input_style_section',
            [
                'label' => __( 'Input', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'input_text_color',
                [
                    'label'     => __( 'Text Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .caldera_forms_form input.form-control'    => 'color: {{VALUE}};',
                        '{{WRAPPER}} .caldera_forms_form select.form-control'   => 'color: {{VALUE}};',
                        '{{WRAPPER}} .caldera_forms_form textarea.form-control' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'input_placeholder_color',
                [
                    'label'     => __( 'Placeholder Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .caldera_forms_form input.form-control::placeholder'    => 'color: {{VALUE}};',
                        '{{WRAPPER}} .caldera_forms_form select.form-control::placeholder'   => 'color: {{VALUE}};',
                        '{{WRAPPER}} .caldera_forms_form textarea.form-control::placeholder' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'input_text_background',
                [
                    'label'     => __( 'Background Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .caldera_forms_form input.form-control'    => 'background-color: {{VALUE}};',
                        '{{WRAPPER}} .caldera_forms_form select.form-control'   => 'background-color: {{VALUE}};',
                        '{{WRAPPER}} .caldera_forms_form textarea.form-control' => 'background-color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'input_padding',
                [
                    'label'      => __( 'Padding', 'edubin-core' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors'  => [
                        '{{WRAPPER}} .caldera_forms_form input.form-control, 
                         {{WRAPPER}} .caldera_forms_form textarea.form-control, 
                         {{WRAPPER}} .caldera_forms_form select.form-control' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; height: auto;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'input_space',
                [
                    'label'   => __( 'Input Space', 'edubin-core' ),
                    'type'    => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 15,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .caldera_forms_form .row:not(.last_row) .form-group' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(), [
                    'name'        => 'input_border',
                    'label'       => __( 'Border', 'edubin-core' ),
                    'placeholder' => '1px',
                    'default'     => '1px',
                    'selector'    => '{{WRAPPER}} .caldera_forms_form input.form-control, {{WRAPPER}} .caldera_forms_form textarea.form-control, {{WRAPPER}} .caldera_forms_form select.form-control',
                    
                ]
            );

            $this->add_control(
                'input_border_radius',
                [
                    'label'      => __( 'Border Radius', 'edubin-core' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors'  => [
                        '{{WRAPPER}} .caldera_forms_form input.form-control'    => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .caldera_forms_form textarea.form-control' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .caldera_forms_form select.form-control'   => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );

        $this->end_controls_section();

        // Submit Button
        $this->start_controls_section(
            'form_style_submit_button',
            [
                'label' => __( 'Submit Button', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs( 'tabs_button_style' );

                // Button Normal
                $this->start_controls_tab(
                    'form_tab_button_normal',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );

                    $this->add_control(
                        'button_text_color',
                        [
                            'label'     => __( 'Text Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_control(
                        'background_color',
                        [
                            'label'     => __( 'Background Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn' => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name'        => 'border',
                            'label'       => __( 'Border', 'edubin-core' ),
                            'placeholder' => '1px',
                            'default'     => '1px',
                            'selector'    => '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn',
                            'separator'   => 'before',
                        ]
                    );

                    $this->add_control(
                        'border_radius',
                        [
                            'label'      => __( 'Border Radius', 'edubin-core' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%' ],
                            'selectors'  => [
                                '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => 'button_box_shadow',
                            'selector' => '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn',
                        ]
                    );

                    $this->add_control(
                        'button_padding',
                        [
                            'label'      => __( 'Padding', 'edubin-core' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', 'em', '%' ],
                            'separator'  => 'before',
                            'selectors'  => [
                                '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn, {{WRAPPER}} .caldera_forms_form .cf-page-btn-next[type*="button"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name'      => 'button_typography',
                            'label'     => __( 'Typography', 'edubin-core' ),
                            'scheme'    => Scheme_Typography::TYPOGRAPHY_4,
                            'selector'  => '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn',
                            'separator' => 'before',
                        ]
                    );

                $this->end_controls_tab();

                // Button Hover
                $this->start_controls_tab(
                    'tab_button_hover',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );

                    $this->add_control(
                        'hover_color',
                        [
                            'label'     => __( 'Text Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_control(
                        'button_background_hover_color',
                        [
                            'label'     => __( 'Background Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn:hover' => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_control(
                        'button_hover_border_color',
                        [
                            'label'     => __( 'Border Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'condition' => [
                                'border_border!' => '',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .caldera_forms_form input[type="submit"].btn:hover' => 'border-color: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

            $this->end_controls_tabs();

        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();
        $calderaform_attributes = [
            'id' => $settings['caldera_form_list'],
        ];
        $this->add_render_attribute( 'shortcode', $calderaform_attributes );

        if ( !$settings['caldera_form_list'] ) {
            echo '<div class="edubin-notices"><p>'.__('Please select a Contact Form From Setting!', 'edubin-core').'</p></div>';
        }else{
            echo do_shortcode( sprintf( '[caldera_form %s]', $this->get_render_attribute_string( 'shortcode' ) ) );
        }
        

    }

}

