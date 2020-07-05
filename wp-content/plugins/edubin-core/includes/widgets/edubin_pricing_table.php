<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Pricing_Table extends Widget_Base {

    public function get_name() {
        return 'edubin-pricing-table-addons';
    }
    
    public function get_title() {
        return __( 'Pricing Table', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-price-table';
    }
    public function get_categories() {
        return [ 'edubin-core' ];
    }

    protected function _register_controls() {

         // Layout Fields tab start
        $this->start_controls_section(
            'edubin_pricing_layout',
            [
                'label' => __( 'Layout', 'edubin-core' ),
            ]
        );
            $this->add_control(
                'edubin_pricing_style',
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

        $this->end_controls_section(); // Layout Fields tab end

        // Header Fields tab start
        $this->start_controls_section(
            'edubin_pricing_header',
            [
                'label' => __( 'Header', 'edubin-core' ),
            ]
        );
        
            $this->add_control(
                'pricing_title',
                [
                    'label' => __( 'Title', 'edubin-core' ),
                    'type' => Controls_Manager::TEXT,
                    'placeholder' => __( 'Standard', 'edubin-core' ),
                    'default' => __( 'Standard', 'edubin-core' ),
                    'title' => __( 'Enter your service title', 'edubin-core' ),
                ]
            );

            $this->add_control(
                'edubin_ribon_pricing_table',
                [
                    'label'        => esc_html__( 'Ribon', 'edubin-core' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'pricing_table_ribon_background',
                    'label' => __( 'Ribon Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-pricing-panel',
                    'condition' => [
                        'edubin_ribon_pricing_table' => 'yes'
                    ]
                ]
            );

            $this->add_control(
                'pricing_table_ribon_image',
                [
                    'label' => __('Ribon image','edubin-core'),
                    'type'=>Controls_Manager::MEDIA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'default' => [
                        'url' => EDUBIN_ADDONS_PL_URL.'/assets/images/pricing/pricing-ribon.png',
                    ],
                    'condition' => [
                        'edubin_ribon_pricing_table' => 'yes'
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-ribon::before' => 'content: url( {{URL}} )',
                    ]
                ]
            );


            $this->add_control(
                'edubin_header_icon_type',
                [
                    'label' => __('Image or Icon','edubin-core'),
                    'type' =>Controls_Manager::CHOOSE,
                    'options' =>[
                        'img' =>[
                            'title' =>__('Image','edubin-core'),
                            'icon' =>'fa fa-picture-o',
                        ],
                        'icon' =>[
                            'title' =>__('Icon','edubin-core'),
                            'icon' =>'fa fa-info',
                        ]
                    ],
                    'default' => 'img',
                    'condition' => [
                        'edubin_pricing_style' => '2'
                    ]
                ]
            );

            $this->add_control(
                'headerimage',
                [
                    'label' => __('Image','edubin-core'),
                    'type'=>Controls_Manager::MEDIA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'default' => [
                        'url' => Utils::get_placeholder_image_src(),
                    ],
                    
                    'condition' => [
                        'edubin_pricing_style' => '2',
                        'edubin_header_icon_type' => 'img',
                    ]
                ]
            );

            $this->add_group_control(
                Group_Control_Image_Size::get_type(),
                [
                    'name' => 'headerimagesize',
                    'default' => 'large',
                    'separator' => 'none',
                    'condition' => [
                        'edubin_pricing_style' => '2',
                        'edubin_header_icon_type' => 'img',
                    ]
                ]
            );

            $this->add_control(
                'headericon',
                [
                    'label' =>esc_html__('Icon','edubin-core'),
                    'type'=>Controls_Manager::ICON,
                    'default' => 'fa fa-pencil',
                    'condition' => [
                        'edubin_pricing_style' => '2',
                        'edubin_header_icon_type' => 'icon',
                    ]
                ]
            );

        $this->end_controls_section(); // Header Fields tab end

        // Pricing Fields tab start
        $this->start_controls_section(
            'edubin_pricing_price',
            [
                'label' => __( 'Pricing', 'edubin-core' ),
            ]
        );
            $this->add_control(
                'edubin_currency_symbol',
                [
                    'label'   => __( 'Currency Symbol', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'options' => [
                        ''             => esc_html__( 'None', 'edubin-core' ),
                        'dollar'       => '&#36; ' . __( 'Dollar', 'edubin-core' ),
                        'euro'         => '&#128; ' . __( 'Euro', 'edubin-core' ),
                        'baht'         => '&#3647; ' . __( 'Baht', 'edubin-core' ),
                        'franc'        => '&#8355; ' . __( 'Franc', 'edubin-core' ),
                        'guilder'      => '&fnof; ' . __( 'Guilder', 'edubin-core' ),
                        'krona'        => 'kr ' . __( 'Krona', 'edubin-core' ),
                        'lira'         => '&#8356; ' . __( 'Lira', 'edubin-core' ),
                        'peseta'       => '&#8359 ' . __( 'Peseta', 'edubin-core' ),
                        'peso'         => '&#8369; ' . __( 'Peso', 'edubin-core' ),
                        'pound'        => '&#163; ' . __( 'Pound Sterling', 'edubin-core' ),
                        'real'         => 'R$ ' . __( 'Real', 'edubin-core' ),
                        'ruble'        => '&#8381; ' . __( 'Ruble', 'edubin-core' ),
                        'rupee'        => '&#8360; ' . __( 'Rupee', 'edubin-core' ),
                        'indian_rupee' => '&#8377; ' . __( 'Rupee (Indian)', 'edubin-core' ),
                        'shekel'       => '&#8362; ' . __( 'Shekel', 'edubin-core' ),
                        'yen'          => '&#165; ' . __( 'Yen/Yuan', 'edubin-core' ),
                        'won'          => '&#8361; ' . __( 'Won', 'edubin-core' ),
                        'custom'       => __( 'Custom', 'edubin-core' ),
                    ],
                    'default' => 'dollar',
                ]
            );

            $this->add_control(
                'edubin_currency_symbol_custom',
                [
                    'label'     => __( 'Custom Symbol', 'edubin-core' ),
                    'type'      => Controls_Manager::TEXT,
                    'condition' => [
                        'edubin_currency_symbol' => 'custom',
                    ],
                ]
            );

            $this->add_control(
                'edubin_price',
                [
                    'label'   => esc_html__( 'Price', 'edubin-core' ),
                    'type'    => Controls_Manager::TEXT,
                    'default' => '35.50',
                ]
            );

            $this->add_control(
                'edubin_offer_price',
                [
                    'label'        => esc_html__( 'Offer', 'edubin-core' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                ]
            );

            $this->add_control(
                'edubin_original_price',
                [
                    'label'     => esc_html__( 'Original Price', 'edubin-core' ),
                    'type'      => Controls_Manager::NUMBER,
                    'default'   => '49',
                    'condition' => [
                        'edubin_offer_price' => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'edubin_period',
                [
                    'label'   => esc_html__( 'Period', 'edubin-core' ),
                    'type'    => Controls_Manager::TEXT,
                    'default' => esc_html__( 'Monthly', 'edubin-core' ),
                ]
            );

        $this->end_controls_section(); // Pricing Fields tab end

        // Features tab start
        $this->start_controls_section(
            'edubin_pricing_features',
            [
                'label' => __( 'Features', 'edubin-core' ),
            ]
        );

            $repeater = new Repeater();

            $repeater->add_control(
                'edubin_features_title',
                [
                    'label'   => esc_html__( 'Title', 'edubin-core' ),
                    'type'    => Controls_Manager::TEXT,
                    'default' => esc_html__( 'Features Tilte', 'edubin-core' ),
                ]
            );

            $repeater->add_control(
                'edubin_old_features',
                [
                    'label'        => esc_html__( 'Old Features', 'edubin-core' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                ]
            );

            $repeater->add_control(
                'edubin_features_icon',
                [
                    'label'   => esc_html__( 'Icon', 'edubin-core' ),
                    'type'    => Controls_Manager::ICON,
                    'default' => 'fa fa-angle-double-right',
                ]
            );

            $repeater->add_control(
                'edubin_features_icon_color',
                [
                    'label'     => esc_html__( 'Icon Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-panel {{CURRENT_ITEM}} i' => 'color: {{VALUE}}',
                    ],
                    'condition' => [
                        'edubin_features_icon!' => '',
                    ]
                ]
            );

            $this->add_control(
                'edubin_features_list',
                [
                    'type'    => Controls_Manager::REPEATER,
                    'fields'  => array_values( $repeater->get_controls() ),
                    'default' => [
                        [
                            'edubin_features_title' => esc_html__( 'Features Title One', 'edubin-core' ),
                            'edubin_features_icon' => 'fa fa-angle-double-right',
                        ],

                        [
                            'edubin_features_title' => esc_html__( 'Features Title Two', 'edubin-core' ),
                            'edubin_features_icon' => 'fa fa-angle-double-right',
                        ],

                        [
                            'edubin_features_title' => esc_html__( 'Features Title Three', 'edubin-core' ),
                            'edubin_features_icon' => 'fa fa-angle-double-right',
                        ],
                    ],
                    'title_field' => '{{{ edubin_features_title }}}',
                ]
            );


        $this->end_controls_section(); // Features Fields tab end

        // Footer tab start
        $this->start_controls_section(
            'edubin_pricing_footer',
            [
                'label' => __( 'Footer', 'edubin-core' ),
            ]
        );
            
            $this->add_control(
                'edubin_button_text',
                [
                    'label'   => esc_html__( 'Button Text', 'edubin-core' ),
                    'type'    => Controls_Manager::TEXT,
                    'default' => esc_html__( 'Sign Up', 'edubin-core' ),
                ]
            );

            $this->add_control(
                'edubin_button_link',
                [
                    'label'       => __( 'Link', 'edubin-core' ),
                    'type'        => Controls_Manager::URL,
                    'placeholder' => 'http://your-link.com',
                    'default'     => [
                        'url' => '#',
                    ],
                ]
            );

        $this->end_controls_section(); // Footer Fields tab end

        // Style tab section start
        $this->start_controls_section(
            'edubin_pricing_style_section',
            [
                'label' => __( 'Style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_control(
                'edubin_heighlight_pricing_table',
                [
                    'label'        => esc_html__( 'High Light Pricing Table', 'edubin-core' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'pricing_table_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-pricing-panel',
                ]
            );

            $this->add_group_control(
                Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'pricing_table_box_shadow',
                    'label' => __( 'Box Shadow', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-pricing-panel',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'pricing_table_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-pricing-panel',
                ]
            );

            $this->add_responsive_control(
                'pricing_table_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-panel' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'pricing_table_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-panel' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'pricing_table_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-panel' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

        $this->end_controls_section(); // Style tab section end 

        // Header style tab start
        $this->start_controls_section(
            'edubin_header_style',
            [
                'label'     => __( 'Header', 'edubin-core' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_responsive_control(
                'pricing_header_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
            );

            $this->add_responsive_control(
                'pricing_header_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'pricing_header_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-pricing-heading',
                ]
            );

            $this->add_control(
                'pricing_header_heading_title',
                [
                    'label'     => __( 'Title', 'edubin-core' ),
                    'type'      => Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'pricing_header_title_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-heading .title h2' => 'color: {{VALUE}}',
                    ]
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name'     => 'pricing_header_title_typography',
                    'selector' => '{{WRAPPER}} .edubin-pricing-heading .title h2',
                    'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
                ]
            );

            $this->add_control(
                'pricing_header_heading_price',
                [
                    'label'     => __( 'Price', 'edubin-core' ),
                    'type'      => Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'pricing_header_price_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-heading .price h4' => 'color: {{VALUE}}',
                    ]
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name'     => 'pricing_header_price_typography',
                    'selector' => '{{WRAPPER}} .edubin-pricing-heading .price h4',
                    'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'pricing_header_price_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-pricing-heading .price',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'pricing_header_price_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin-pricing-heading .price',
                ]
            );

            $this->add_responsive_control(
                'pricing_header_price_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-heading .price' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

        $this->end_controls_section(); // Header style tab end


        // Features style tab start
        $this->start_controls_section(
            'edubin_features_style',
            [
                'label'     => __( 'Features', 'edubin-core' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'pricing_features_area_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin-pricing-body',
                ]
            );

            $this->add_control(
                'pricing_features_item_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-body ul li' => 'color: {{VALUE}}',
                    ]
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name'     => 'pricing_features_item_typography',
                    'selector' => '{{WRAPPER}} .edubin-pricing-body ul li',
                    'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
                ]
            );

            $this->add_responsive_control(
                'pricing_features_item_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-body ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
            );

            $this->add_responsive_control(
                'pricing_features_item_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-body ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
            );

        $this->end_controls_section(); // Features style tab end

        // Footer style tab start
        $this->start_controls_section(
            'edubin_pricing_footer_style',
            [
                'label'     => __( 'Footer', 'edubin-core' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs( 'pricing_footer_style_tabs');

                // Pricing Normal tab start
                $this->start_controls_tab(
                    'style_pricing_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'pricing_footer_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-pricing-footer a.price_btn',
                        ]
                    );

                    $this->add_control(
                        'pricing_footer_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-pricing-footer a.price_btn' => 'color: {{VALUE}}',
                            ]
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name'     => 'pricing_footer_typography',
                            'selector' => '{{WRAPPER}} .edubin-pricing-footer a.price_btn',
                            'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
                        ]
                    );

                    $this->add_responsive_control(
                        'pricing_footer_padding',
                        [
                            'label' => __( 'Padding', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-pricing-footer a.price_btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                        ]
                    );

                    $this->add_responsive_control(
                        'pricing_footer_margin',
                        [
                            'label' => __( 'Margin', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-pricing-footer a.price_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'pricing_footer_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-pricing-footer a.price_btn',
                        ]
                    );

                    $this->add_responsive_control(
                        'pricing_footer_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-pricing-footer a.price_btn' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Pricing Normal tab end

                // Pricing Hover tab start
                $this->start_controls_tab(
                    'style_pricing_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'pricing_footer_hover_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-pricing-footer a.price_btn:hover',
                        ]
                    );

                    $this->add_control(
                        'pricing_footer_hover_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-pricing-footer a.price_btn:hover' => 'color: {{VALUE}}',
                            ]
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'pricing_footer_hover_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-pricing-footer a.price_btn:hover',
                        ]
                    );

                    $this->add_responsive_control(
                        'pricing_footer_hover_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-pricing-footer a.price_btn:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Pricing Hover tab end

            $this->end_controls_tabs();

        $this->end_controls_section(); // Footer style tab end

    }

    private function get_currency_symbol( $symbol_name ) {
        $symbols = [
            'dollar'       => '&#36;',
            'baht'         => '&#3647;',
            'euro'         => '&#128;',
            'franc'        => '&#8355;',
            'guilder'      => '&fnof;',
            'indian_rupee' => '&#8377;',
            'krona'        => 'kr',
            'lira'         => '&#8356;',
            'peseta'       => '&#8359',
            'peso'         => '&#8369;',
            'pound'        => '&#163;',
            'real'         => 'R$',
            'ruble'        => '&#8381;',
            'rupee'        => '&#8360;',
            'shekel'       => '&#8362;',
            'won'          => '&#8361;',
            'yen'          => '&#165;',
        ];
        return isset( $symbols[ $symbol_name ] ) ? $symbols[ $symbol_name ] : '';
    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();

        if ( ! empty( $settings['edubin_button_link']['url'] ) ) {
            
            $this->add_render_attribute( 'url', 'class', 'price_btn' );
            $this->add_render_attribute( 'url', 'href', $settings['edubin_button_link']['url'] );

            if ( $settings['edubin_button_link']['is_external'] ) {
                $this->add_render_attribute( 'url', 'target', '_blank' );
            }

            if ( ! empty( $settings['edubin_button_link']['nofollow'] ) ) {
                $this->add_render_attribute( 'url', 'rel', 'nofollow' );
            }
        }

        // Currency symbol
        $currencysymbol = '';
        if ( ! empty( $settings['edubin_currency_symbol'] ) ) {
            if ( $settings['edubin_currency_symbol'] != 'custom' ) {
                $currencysymbol = '<sub>'.$this->get_currency_symbol( $settings['edubin_currency_symbol'] ).'</sub>';
            } else {
                $currencysymbol = '<sub>'.$settings['edubin_currency_symbol_custom'].'</sub>';
            }
        }

        $this->add_render_attribute( 'pricing_area_attr', 'class', 'edubin-pricing-panel' );
        $this->add_render_attribute( 'pricing_area_attr', 'class', 'edubin-pricing-style-'.$settings['edubin_pricing_style'] );

        if( $settings['edubin_heighlight_pricing_table'] == 'yes' ){
            $this->add_render_attribute( 'pricing_area_attr', 'class', 'edubin-pricing-heighlight' );
        }

        if( $settings['edubin_ribon_pricing_table'] == 'yes' ){
            $this->add_render_attribute( 'pricing_area_attr', 'class', 'edubin-pricing-ribon' );
        }
       
        ?>
            <div <?php echo $this->get_render_attribute_string( 'pricing_area_attr' ); ?> >

                <?php if( $settings['edubin_pricing_style'] == 2 ):?>
                    <div class="edubin-pricing-heading">
                        <div class="icon">
                            <?php
                                if( $settings['edubin_header_icon_type'] == 'img' ){  
                                    echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'headerimagesize', 'headerimage' );
                                }else{
                                    echo '<i class="'.$settings['headericon'].'"></i>';
                                }
                            ?>
                        </div>
                        <?php
                            if( !empty($settings['pricing_title']) ){
                                echo '<div class="title"><h2>'.esc_attr__( $settings['pricing_title'],'edubin-core' ).'</h2></div>';
                            }
                        ?>
                        <div class="price">
                            <?php
                                if( $settings['edubin_offer_price'] == 'yes' && !empty( $settings['edubin_original_price'] ) ){
                                    echo '<h4><span class="pricing_old">'.$currencysymbol.'<del>'.esc_attr__( $settings['edubin_original_price'],'edubin-core' ).'</del></span><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span><span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                }else{
                                    if( !empty($settings['edubin_price']) ){
                                        echo '<h4><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span><span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <?php if( $settings['edubin_features_list'] ): ?>
                        <div class="edubin-pricing-body">
                            <ul class="edubin-features">
                                <?php foreach ( $settings['edubin_features_list'] as $features ) :?>
                                    <li class="<?php if( $features['edubin_old_features'] == 'yes' ){ echo 'off'; }?> elementor-repeater-item-<?php echo $features['_id']; ?>" >
                                        <?php
                                            if( !empty( $features['edubin_features_icon'] ) ){
                                                echo '<i class=" '.$features['edubin_features_icon'].' "></i>';
                                            }
                                            echo esc_html__( $features['edubin_features_title'], 'edubin-core' );
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>
                    <?php
                        if( !empty($settings['edubin_button_text']) ){
                            echo '<div class="edubin-pricing-footer">'.sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $settings['edubin_button_text'] ).'</div>';
                        }
                    ?>

                <?php elseif( $settings['edubin_pricing_style'] == 3 ): ?>
                    <div class="edubin-pricing-heading">
                        <div class="price">
                            <?php
                                if( $settings['edubin_offer_price'] == 'yes' && !empty( $settings['edubin_original_price'] ) ){
                                    echo '<h4><span class="pricing_old">'.$currencysymbol.'<del>'.esc_attr__( $settings['edubin_original_price'],'edubin-core' ).'</del></span><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span class="separator">/</span> <span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                }else{
                                    if( !empty($settings['edubin_price']) ){
                                        echo '<h4><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span class="separator">/</span> <span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                    }
                                }
                            ?>
                        </div>
                         <?php
                            if( !empty($settings['pricing_title']) ){
                                echo '<div class="title"><h2>'.esc_attr__( $settings['pricing_title'],'edubin-core' ).'</h2></div>';
                            }
                        ?>
                    </div>

                    <?php if( $settings['edubin_features_list'] ): ?>
                        <div class="edubin-pricing-body">
                            <ul class="edubin-features">
                                <?php foreach ( $settings['edubin_features_list'] as $features ) :?>
                                    <li class="<?php if( $features['edubin_old_features'] == 'yes' ){ echo 'off'; }?> elementor-repeater-item-<?php echo $features['_id']; ?>" > 
                                        <?php
                                            if( !empty( $features['edubin_features_icon'] ) ){
                                                echo '<i class=" '.$features['edubin_features_icon'].' "></i>';
                                            }
                                            echo esc_html__( $features['edubin_features_title'], 'edubin-core' );
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>
                    <?php
                        if( !empty($settings['edubin_button_text']) ){
                            echo '<div class="edubin-pricing-footer">'.sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $settings['edubin_button_text'] ).'</div>';
                        }
                    ?>

                <?php elseif( $settings['edubin_pricing_style'] == 4 ): ?>
                    <div class="edubin-pricing-heading">
                         <?php
                            if( !empty($settings['pricing_title']) ){
                                echo '<div class="title"><h2>'.esc_attr__( $settings['pricing_title'],'edubin-core' ).'</h2></div>';
                            }
                        ?>
                        <div class="price">
                            <?php
                                if( $settings['edubin_offer_price'] == 'yes' && !empty( $settings['edubin_original_price'] ) ){
                                    echo '<h4><span class="pricing_old">'.$currencysymbol.'<del>'.esc_attr__( $settings['edubin_original_price'],'edubin-core' ).'</del></span><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                }else{
                                    if( !empty($settings['edubin_price']) ){
                                        echo '<h4><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                    }
                                }
                            ?>
                        </div>
                    </div>

                    <?php if( $settings['edubin_features_list'] ): ?>
                        <div class="edubin-pricing-body">
                            <ul class="edubin-features">
                                <?php foreach ( $settings['edubin_features_list'] as $features ) :?>
                                    <li class="<?php if( $features['edubin_old_features'] == 'yes' ){ echo 'off'; }?> elementor-repeater-item-<?php echo $features['_id']; ?>" >
                                        <?php
                                            if( !empty( $features['edubin_features_icon'] ) ){
                                                echo '<i class=" '.$features['edubin_features_icon'].' "></i>';
                                            }
                                            echo esc_html__( $features['edubin_features_title'], 'edubin-core' );
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php
                        if( !empty($settings['edubin_button_text']) ){
                            echo '<div class="edubin-pricing-footer">'.sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $settings['edubin_button_text'] ).'</div>';
                        }
                    ?>

                <?php elseif( $settings['edubin_pricing_style'] == 5 ): ?>
                    <div class="edubin-pricing-heading">
                        <?php
                            if( !empty($settings['pricing_title']) ){
                                echo '<div class="title"><h2>'.esc_attr__( $settings['pricing_title'],'edubin-core' ).'</h2></div>';
                            }
                        ?>
                        <div class="price">
                            <?php
                                if( $settings['edubin_offer_price'] == 'yes' && !empty( $settings['edubin_original_price'] ) ){
                                    echo '<h4><span class="pricing_old">'.$currencysymbol.'<del>'.esc_attr__( $settings['edubin_original_price'],'edubin-core' ).'</del></span><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                }else{
                                    if( !empty($settings['edubin_price']) ){
                                        echo '<h4><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="edubin-pricing-body">
                        <?php if( $settings['edubin_features_list'] ): ?>
                            <ul class="edubin-features">
                                <?php foreach ( $settings['edubin_features_list'] as $features ) :?>
                                    <li class="<?php if( $features['edubin_old_features'] == 'yes' ){ echo 'off'; }?> elementor-repeater-item-<?php echo $features['_id']; ?>" >
                                        <?php
                                            if( !empty( $features['edubin_features_icon'] ) ){
                                                echo '<i class=" '.$features['edubin_features_icon'].' "></i>';
                                            }
                                            echo esc_html__( $features['edubin_features_title'], 'edubin-core' );
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif;
                            if( !empty($settings['edubin_button_text']) ){
                                echo sprintf( '<a %1$s><span>%2$s</span></a>', $this->get_render_attribute_string( 'url' ), $settings['edubin_button_text'] );
                            }
                        ?>
                    </div>

                <?php elseif( $settings['edubin_pricing_style'] == 6 ): ?>
                    <div class="edubin-pricing-heading">
                        <?php
                            if( !empty($settings['pricing_title']) ){
                                echo '<div class="title"><h2>'.esc_attr__( $settings['pricing_title'],'edubin-core' ).'</h2></div>';
                            }
                        ?>
                        <div class="price">
                            <?php
                                if( $settings['edubin_offer_price'] == 'yes' && !empty( $settings['edubin_original_price'] ) ){
                                    echo '<h4><span class="pricing_old">'.$currencysymbol.'<del>'.esc_attr__( $settings['edubin_original_price'],'edubin-core' ).'</del></span><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span class="separator">/</span> <span class="period-txt">'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                }else{
                                    if( !empty($settings['edubin_price']) ){
                                        echo '<h4><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span class="separator">/</span> <span class="period-txt">'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <?php if( $settings['edubin_features_list'] ): ?>
                        <div class="edubin-pricing-body">
                            <ul class="edubin-features">
                                <?php foreach ( $settings['edubin_features_list'] as $features ) :?>
                                    <li class="<?php if( $features['edubin_old_features'] == 'yes' ){ echo 'off'; }?> elementor-repeater-item-<?php echo $features['_id']; ?>" > 
                                        <?php
                                            if( !empty( $features['edubin_features_icon'] ) ){
                                                echo '<i class=" '.$features['edubin_features_icon'].' "></i>';
                                            }
                                            echo esc_html__( $features['edubin_features_title'], 'edubin-core' );
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>
                    <?php
                        if( !empty($settings['edubin_button_text']) ){
                            echo '<div class="edubin-pricing-footer">'.sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $settings['edubin_button_text'] ).'</div>';
                        }
                    ?>

                <?php elseif( $settings['edubin_pricing_style'] == 7 ): ?>
                    <div class="edubin-pricing-heading">
                        <div class="price">
                            <?php
                                if( $settings['edubin_offer_price'] == 'yes' && !empty( $settings['edubin_original_price'] ) ){
                                    echo '<h4><span class="pricing_old">'.$currencysymbol.'<del>'.esc_attr__( $settings['edubin_original_price'],'edubin-core' ).'</del></span><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span class="separator">/</span> <span class="period-txt">'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                }else{
                                    if( !empty($settings['edubin_price']) ){
                                        echo '<h4><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span class="separator">/</span> <span class="period-txt">'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                    }
                                }
                            ?>
                        </div>
                        <?php
                            if( !empty($settings['pricing_title']) ){
                                echo '<div class="title"><h2>'.esc_attr__( $settings['pricing_title'],'edubin-core' ).'</h2></div>';
                            }
                        ?>
                    </div>
                    <?php if( $settings['edubin_features_list'] ): ?>
                        <div class="edubin-pricing-body">
                            <ul class="edubin-features">
                                <?php foreach ( $settings['edubin_features_list'] as $features ) :?>
                                    <li class="<?php if( $features['edubin_old_features'] == 'yes' ){ echo 'off'; }?> elementor-repeater-item-<?php echo $features['_id']; ?>" > 
                                        <?php
                                            if( !empty( $features['edubin_features_icon'] ) ){
                                                echo '<i class=" '.$features['edubin_features_icon'].' "></i>';
                                            }
                                            echo esc_html__( $features['edubin_features_title'], 'edubin-core' );
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>
                    <?php
                        if( !empty($settings['edubin_button_text']) ){
                            echo '<div class="edubin-pricing-footer">'.sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $settings['edubin_button_text'] ).'</div>';
                        }
                    ?>

                <?php else:?>
                    <div class="edubin-pricing-heading">
                        <?php
                            if( !empty($settings['pricing_title']) ){
                                echo '<div class="title"><h2>'.esc_attr__( $settings['pricing_title'],'edubin-core' ).'</h2></div>';
                            }
                        ?>
                        <div class="price">
                            <?php
                                if( $settings['edubin_offer_price'] == 'yes' && !empty( $settings['edubin_original_price'] ) ){
                                    echo '<h4><span class="pricing_old">'.$currencysymbol.'<del>'.esc_attr__( $settings['edubin_original_price'],'edubin-core' ).'</del></span><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span class="separator">/</span> <span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                }else{
                                    if( !empty($settings['edubin_price']) ){
                                        echo '<h4><span class="pricing_new">'.$currencysymbol.esc_attr__( $settings['edubin_price'],'edubin-core' ).'</span> <span class="separator">/</span> <span>'.esc_attr__( $settings['edubin_period'],'edubin-core' ).'</span></h4>';
                                    }
                                }
                            ?>
                        </div>
                    </div>

                    <?php if( $settings['edubin_features_list'] ): ?>
                        <div class="edubin-pricing-body">
                            <ul class="edubin-features">
                                <?php foreach ( $settings['edubin_features_list'] as $features ) :?>
                                    <li class="<?php if( $features['edubin_old_features'] == 'yes' ){ echo 'off'; }?> elementor-repeater-item-<?php echo $features['_id']; ?>" > 
                                        <?php
                                            if( !empty( $features['edubin_features_icon'] ) ){
                                                echo '<i class=" '.$features['edubin_features_icon'].' "></i>';
                                            }
                                            echo esc_html__( $features['edubin_features_title'], 'edubin-core' );
                                        ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php
                        if( !empty($settings['edubin_button_text']) ){
                            echo '<div class="edubin-pricing-footer">'.sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $settings['edubin_button_text'] ).'</div>';
                        }
                    ?>

                <?php endif; ?>
            </div>
        <?php
    }
}

