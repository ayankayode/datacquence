<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Notify extends Widget_Base {

    public function get_name() {
        return 'edubin-notify-addons';
    }
    
    public function get_title() {
        return __( 'Notify', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-alert';
    }

    public function get_categories() {
        return [ 'edubin-core' ];
    }

    public function get_script_depends() {
        return [
            'edubin-notify',
            'edubin-widgets-scripts',
        ];
    }

    protected function _register_controls() {

        // Notification Button
        $this->start_controls_section(
            'notify_button',
            [
                'label' => __( 'Button', 'edubin-core' ),
            ]
        );
            
            $this->add_control(
                'notification_button_txt',
                [
                    'label' => __( 'Button Text', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'default' => __( 'Show Info', 'edubin-core' ),
                ]
            );

        $this->end_controls_section();


        // Notification Content
        $this->start_controls_section(
            'notify_content',
            [
                'label' => __( 'Notification Content', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'notification_content',
                [
                    'label' => __( 'Notification Message', 'edubin-core' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'default' => __( '<strong>Welcome,</strong>to Notification.', 'edubin-core' ),
                ]
            );

        $this->end_controls_section();

        // Notification Option
        $this->start_controls_section(
            'notification_option',
            [
                'label' => __( 'Notification Option', 'edubin-core' ),
            ]
        );
            $this->add_control(
                'notification_element_container',
                [
                    'label'   => __( 'Element Container', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'self',
                    'options' => [
                        'body'   => __( 'Body', 'edubin-core' ),
                        'self'   => __( 'Self', 'edubin-core' ),
                    ],
                ]
            );

            $this->add_control(
                'notification_position',
                [
                    'label'   => __( 'Notification Position', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'topcenter',
                    'options' => [
                        'topleft'           => __( 'Top Left', 'edubin-core' ),
                        'topcenter'         => __( 'Top Center', 'edubin-core' ),
                        'topright'          => __( 'Top Right', 'edubin-core' ),
                        'bottomleft'        => __( 'Bottom Left', 'edubin-core' ),
                        'bottomcenter'      => __( 'Bottom Center', 'edubin-core' ),
                        'bottomright'       => __( 'Bottom Right', 'edubin-core' ),
                        'topfullwidth'      => __( 'Top Fullwidth', 'edubin-core' ),
                        'bottomfullwidth'   => __( 'Bottom Fullwidth', 'edubin-core' ),
                    ],
                ]
            );

            $this->add_control(
                'notification_type',
                [
                    'label'   => __( 'Notification Type', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'info',
                    'options' => [
                        'info'   => __( 'Info', 'edubin-core' ),
                        'danger'   => __( 'Danger', 'edubin-core' ),
                        'success'   => __( 'Success', 'edubin-core' ),
                        'warning'   => __( 'Warning', 'edubin-core' ),
                    ],
                ]
            );

            $this->add_control(
                'notification_enter_animation',
                [
                    'label'   => __( 'Show Animation', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'fadeInUp',
                    'options' => [
                        'none'           => __('None','edubin-core'),
                        'bounceOut'      => __('bounceOut','edubin-core'),
                        'bounceOutDown'  => __('bounceOutDown','edubin-core'),
                        'bounceOutLeft'  => __('bounceOutLeft','edubin-core'),
                        'bounceOutRight' => __('bounceOutRight','edubin-core'),
                        'bounceOutUp'    => __('bounceOutUp','edubin-core'),
                        'fadeIn'         => __('fadeIn','edubin-core'),
                        'fadeInDown'     => __('fadeInDown','edubin-core'),
                        'fadeInDownBig'  => __('fadeInDownBig','edubin-core'),
                        'fadeInLeft'     => __('fadeInLeft','edubin-core'),
                        'fadeInLeftBig'  => __('fadeInLeftBig','edubin-core'),
                        'fadeInRight'    => __('fadeInRight','edubin-core'),
                        'fadeInRightBig' => __('fadeInRightBig','edubin-core'),
                        'fadeOutRight'   => __('fadeOutRight','edubin-core'),
                        'fadeOutLeft'    => __('fadeOutLeft','edubin-core'),
                        'fadeInUp'       => __('fadeInUp','edubin-core'),
                        'fadeOutUp'      => __('fadeOutUp','edubin-core'),
                        'fadeOutDown'    => __('fadeOutDown','edubin-core'),
                        'fadeInUpBig'    => __('fadeInUpBig','edubin-core'),
                        'bounceIn'       => __('bounceIn','edubin-core'),
                        'bounceInDown'   => __('bounceInDown','edubin-core'),
                        'bounceInLeft'   => __('bounceInLeft','edubin-core'),
                        'bounceInRight'  => __('bounceInRight','edubin-core'),
                        'bounceInUp'     => __('bounceInUp','edubin-core'),
                    ],
                ]
            );

            $this->add_control(
                'notification_exit_animation',
                [
                    'label'   => __( 'Exit Animation', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'fadeOutDown',
                    'options' => [
                        'none'           => __('None','edubin-core'),
                        'bounceOut'      => __('bounceOut','edubin-core'),
                        'bounceOutDown'  => __('bounceOutDown','edubin-core'),
                        'bounceOutLeft'  => __('bounceOutLeft','edubin-core'),
                        'bounceOutRight' => __('bounceOutRight','edubin-core'),
                        'bounceOutUp'    => __('bounceOutUp','edubin-core'),
                        'fadeIn'         => __('fadeIn','edubin-core'),
                        'fadeInDown'     => __('fadeInDown','edubin-core'),
                        'fadeInDownBig'  => __('fadeInDownBig','edubin-core'),
                        'fadeInLeft'     => __('fadeInLeft','edubin-core'),
                        'fadeInLeftBig'  => __('fadeInLeftBig','edubin-core'),
                        'fadeInRight'    => __('fadeInRight','edubin-core'),
                        'fadeInRightBig' => __('fadeInRightBig','edubin-core'),
                        'fadeOutRight'   => __('fadeOutRight','edubin-core'),
                        'fadeOutLeft'    => __('fadeOutLeft','edubin-core'),
                        'fadeInUp'       => __('fadeInUp','edubin-core'),
                        'fadeOutUp'      => __('fadeOutUp','edubin-core'),
                        'fadeOutDown'    => __('fadeOutDown','edubin-core'),
                        'fadeInUpBig'    => __('fadeInUpBig','edubin-core'),
                        'bounceIn'       => __('bounceIn','edubin-core'),
                        'bounceInDown'   => __('bounceInDown','edubin-core'),
                        'bounceInLeft'   => __('bounceInLeft','edubin-core'),
                        'bounceInRight'  => __('bounceInRight','edubin-core'),
                        'bounceInUp'     => __('bounceInUp','edubin-core'),
                    ],
                ]
            );

            $this->add_control(
                'notification_offset',
                [
                    'label' => __('Offset', 'edubin-core'),
                    'type' => Controls_Manager::NUMBER,
                    'default' => 80,
                ]
            );

            $this->add_control(
                'notification_delay',
                [
                    'label' => __('Delay', 'edubin-core'),
                    'type' => Controls_Manager::NUMBER,
                    'default' => 5000,
                ]
            );

            $this->add_control(
                'notification_width',
                [
                    'label'   => __( 'Bootstrap Column Width', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'auto',
                    'options' => [
                        'auto'   => __( 'Auto', 'edubin-core' ),
                        'col-md-12'  => __( 'col-md-12', 'edubin-core' ),
                        'col-md-11'  => __( 'col-md-11', 'edubin-core' ),
                        'col-md-10'  => __( 'col-md-10', 'edubin-core' ),
                        'col-md-9'   => __( 'col-md-9', 'edubin-core' ),
                        'col-md-8'   => __( 'col-md-8', 'edubin-core' ),
                        'col-md-7'   => __( 'col-md-7', 'edubin-core' ),
                        'col-md-6'   => __( 'col-md-6', 'edubin-core' ),
                        'col-md-5'   => __( 'col-md-5', 'edubin-core' ),
                        'col-md-4'   => __( 'col-md-4', 'edubin-core' ),
                        'col-md-3'   => __( 'col-md-3', 'edubin-core' ),
                        'col-md-2'   => __( 'col-md-2', 'edubin-core' ),
                        'col-md-1'   => __( 'col-md-1', 'edubin-core' ),
                    ],
                ]
            );

            $this->add_control(
                'notification_icon',
                [
                    'label' => __('Icon', 'edubin-core'),
                    'type' => Controls_Manager::ICON,
                    'default' => 'fa fa-info-circle',
                ]
            );

        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'notify_style_section',
            [
                'label' => __( 'Style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            
            $this->add_responsive_control(
                'buttonalign',
                [
                    'label' => __( 'Alignment', 'woomentor' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => __( 'Left', 'woomentor' ),
                            'icon' => 'fa fa-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'woomentor' ),
                            'icon' => 'fa fa-align-center',
                        ],
                        'right' => [
                            'title' => __( 'Right', 'woomentor' ),
                            'icon' => 'fa fa-align-right',
                        ],
                        'justify' => [
                            'title' => __( 'Justified', 'woomentor' ),
                            'icon' => 'fa fa-align-justify',
                        ],
                    ],
                    'default' => 'center',
                    'selectors' => [
                        '{{WRAPPER}} .edubin_notify_area' => 'text-align: {{VALUE}};',
                    ],
                ]
            );

        $this->end_controls_section();

        // Style Button tab section
        $this->start_controls_section(
            'notify_button_style',
            [
                'label' => __( 'Button', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            
            $this->start_controls_tabs('notify_button_style_tabs');
                
                // Button Normal Style
                $this->start_controls_tab(
                    'button_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );
                    $this->add_control(
                        'button_color',
                        [
                            'label' => __( 'Color', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'scheme' => [
                                'type' => Scheme_Color::get_type(),
                                'value' => Scheme_Color::COLOR_1,
                            ],
                            'default' =>'#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} button.edubin-notify-button' => 'color: {{VALUE}}',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'button_typography',
                            'label' => __( 'Typography', 'edubin-core' ),
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} button.edubin-notify-button',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'button_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} button.edubin-notify-button',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} button.edubin-notify-button' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'button_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} button.edubin-notify-button',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'box_shadow',
                            'label' => __( 'Box Shadow', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} button.edubin-notify-button',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_padding',
                        [
                            'label' => __( 'Padding', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} button.edubin-notify-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'button_margin',
                        [
                            'label' => __( 'Margin', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} button.edubin-notify-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                $this->end_controls_tab(); // Normal Button style end

                // Button Hover Style
                $this->start_controls_tab(
                    'button_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );
                    $this->add_control(
                        'button_hover_color',
                        [
                            'label' => __( 'Color', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'scheme' => [
                                'type' => Scheme_Color::get_type(),
                                'value' => Scheme_Color::COLOR_1,
                            ],
                            'default' =>'#ffffff',
                            'selectors' => [
                                '{{WRAPPER}} button.edubin-notify-button:hover' => 'color: {{VALUE}}',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'button_hover_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} button.edubin-notify-button:hover',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'button_hover_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} button.edubin-notify-button:hover',
                        ]
                    );

                $this->end_controls_tab(); // Hover Button style end

            $this->end_controls_tabs();

        $this->end_controls_section();

        // Style Content tab section
        $this->start_controls_section(
            'notify_notifycontent_style',
            [
                'label' => __( 'Notify Content', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs('notify_content_style_tabs');
                
                // Notify Content Normal Style
                $this->start_controls_tab(
                    'notify_content_style_tab',
                    [
                        'label' => __( 'Content', 'edubin-core' ),
                    ]
                );
                    $this->add_control(
                        'notify_content_color',
                        [
                            'label' => __( 'Color', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'scheme' => [
                                'type' => Scheme_Color::get_type(),
                                'value' => Scheme_Color::COLOR_1,
                            ],
                            'default' =>'#ffffff',
                            'selectors' => [
                                '.edubin-alert-wrap-{{ID}}.alert strong' => 'color: {{VALUE}} !important',
                                '.edubin-alert-wrap-{{ID}}.alert' => 'color: {{VALUE}} !important',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'notify_content_typography',
                            'label' => __( 'Typography', 'edubin-core' ),
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '.edubin-alert-wrap-{{ID}}.alert',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'notify_content_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '.edubin-alert-wrap-{{ID}}.alert',
                        ]
                    );

                    $this->add_responsive_control(
                        'notify_content_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '.edubin-alert-wrap-{{ID}}.alert' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'notify_content_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '.edubin-alert-wrap-{{ID}}.alert',
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'notify_content_padding',
                        [
                            'label' => __( 'Padding', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '.edubin-alert-wrap-{{ID}}.alert' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'notify_content_align',
                        [
                            'label' => __( 'Alignment', 'woomentor' ),
                            'type' => Controls_Manager::CHOOSE,
                            'options' => [
                                'left' => [
                                    'title' => __( 'Left', 'woomentor' ),
                                    'icon' => 'fa fa-align-left',
                                ],
                                'center' => [
                                    'title' => __( 'Center', 'woomentor' ),
                                    'icon' => 'fa fa-align-center',
                                ],
                                'right' => [
                                    'title' => __( 'Right', 'woomentor' ),
                                    'icon' => 'fa fa-align-right',
                                ],
                                'justify' => [
                                    'title' => __( 'Justified', 'woomentor' ),
                                    'icon' => 'fa fa-align-justify',
                                ],
                            ],
                            'default' => 'center',
                            'selectors' => [
                                '.edubin-alert-wrap-{{ID}}.alert' => 'text-align: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();
                
                // Notify Content Normal Style
                $this->start_controls_tab(
                    'close_button_style_tab',
                    [
                        'label' => __( 'Close Button', 'edubin-core' ),
                    ]
                );
                    $this->add_control(
                        'close_button_color',
                        [
                            'label' => __( 'Color', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'scheme' => [
                                'type' => Scheme_Color::get_type(),
                                'value' => Scheme_Color::COLOR_1,
                            ],
                            'default' =>'#ffffff',
                            'selectors' => [
                                '.edubin-alert-wrap-{{ID}}.alert span.edubin-close' => 'color: {{VALUE}} !important',
                            ],
                        ]
                    );

                $this->end_controls_tab();

            $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();

        $id = $this->get_id();
        $notify_options = array();
        $notify_options['notify_btn_class'] = '.show-info-'.$id;
        $notify_options['notify_class'] = '.edubin-notify-alert-'.$id;
        $notify_options['type'] = $settings['notification_type'];
        $notify_options['notifymessage'] = $settings['notification_content'];
        $notify_options['offset'] = absint( $settings['notification_offset'] );
        $notify_options['delay'] = absint( $settings['notification_delay'] );
        $notify_options['enter'] = $settings['notification_enter_animation'];
        $notify_options['exit'] = $settings['notification_exit_animation'];
        $notify_options['width'] = $settings['notification_width'];
        $notify_options['icon'] = $settings['notification_icon'];
        $notify_options['wrapid'] = $id;

        if( $settings['notification_element_container'] == 'body' ){
            $notify_options['notify_class'] = 'body';
        }

        if( $settings['notification_position'] == 'topleft' ){
            $notify_options['from'] = 'top';
            $notify_options['align'] = 'left';
        }elseif( $settings['notification_position'] == 'topright' ){
            $notify_options['from'] = 'top';
            $notify_options['align'] = 'right';
        }elseif( $settings['notification_position'] == 'bottomleft' ){
            $notify_options['from'] = 'bottom';
            $notify_options['align'] = 'left';
        }elseif( $settings['notification_position'] == 'bottomright' ){
            $notify_options['from'] = 'bottom';
            $notify_options['align'] = 'right';
        }elseif( $settings['notification_position'] == 'bottomcenter' ){
            $notify_options['from'] = 'bottom';
            $notify_options['align'] = 'center';
        }else{
            $notify_options['from'] = 'top';
            $notify_options['align'] = 'center';
        }

        $this->add_render_attribute( 'notify_attr', 'class', 'edubin_notify_area' );
        $this->add_render_attribute( 'notify_attr', 'data-notifyopt', wp_json_encode( $notify_options ) );

        ?>
            <div <?php echo $this->get_render_attribute_string('notify_attr'); ?> >

                <div class="edubin-notify-alert-<?php echo $id;?>">
                    <button class="edubin-notify-button show-info-<?php echo $id;?>"><?php echo esc_html__( $settings['notification_button_txt'],'edubin-core' );?></button>
                </div>

            </div>

        <?php

    }

}

