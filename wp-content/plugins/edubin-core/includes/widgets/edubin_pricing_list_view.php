<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Pricing_List_View extends Widget_Base {

    public function get_name() {
        return 'edubin-pricinglistview-addons';
    }
    
    public function get_title() {
        return __( 'Pricing List View', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-table';
    }

    public function get_categories() {
        return [ 'edubin-core' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'datatable_layout',
            [
                'label' => __( 'Layout', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'datatable_style',
                [
                    'label' => __( 'Layout', 'edubin-core' ),
                    'type' => Controls_Manager::SELECT,
                    'default' => '1',
                    'options' => [
                        '1'   => __( 'Layout One', 'edubin-core' ),
                        '2'   => __( 'Layout Two', 'edubin-core' ),
                        '3'   => __( 'Layout Three', 'edubin-core' ),
                    ],
                ]
            );

        $this->end_controls_section();

        // List Pricing
        $this->start_controls_section(
            'list_content',
            [
                'label' => __( 'Content', 'edubin-core' ),
                'condition'=>[
                    'datatable_style'=>'3'
                ]
            ]
        );

            $repeater_two = new Repeater();

            $repeater_two->add_control(
                'list_name',
                [
                    'label'   => __( 'Name', 'edubin-core' ),
                    'type'    => Controls_Manager::TEXT,
                    'default' => __( 'WordPress Plugin', 'edubin-core' ),
                ]
            );

            $repeater_two->add_control(
                'list_price',
                [
                    'label'   => __( 'Price', 'edubin-core' ),
                    'type'    => Controls_Manager::TEXT,
                    'default' => __( '$56', 'edubin-core' ),
                ]
            );

            $repeater_two->add_control(
                'list_cart_icon',
                [
                    'label'   => __( 'Icon', 'edubin-core' ),
                    'type'    => Controls_Manager::ICON,
                    'default' => __( 'fa fa-shopping-basket', 'edubin-core' ),
                ]
            );

            $repeater_two->add_control(
                'list_cart_link',
                [
                    'label' => __( 'Link', 'edubin-core' ),
                    'type' => Controls_Manager::URL,
                    'placeholder' => __( 'https://your-link.com', 'edubin-core' ),
                    'show_external' => true,
                    'default' => [
                        'url' => '',
                        'is_external' => false,
                        'nofollow' => false,
                    ]
                ]
            );

            $this->add_control(
                'pricing_list',
                [
                    'type'    => Controls_Manager::REPEATER,
                    'fields'  => array_values( $repeater_two->get_controls() ),
                    'default' => [
                        [
                            'list_name' => __( 'WordPress Plugin', 'edubin-core' ),
                            'list_price' => __( '$52', 'edubin-core' ),
                            'list_cart_icon' => __( 'fa fa-shopping-basket', 'edubin-core' ),
                        ],

                        [
                            'list_name' => __( 'PSD Template', 'edubin-core' ),
                            'list_price' => __( '$48', 'edubin-core' ),
                            'list_cart_icon' => __( 'fa fa-shopping-basket', 'edubin-core' ),
                        ],

                        [
                            'list_name' => __( 'Joomla Template', 'edubin-core' ),
                            'list_price' => __( '$46', 'edubin-core' ),
                            'list_cart_icon' => __( 'fa fa-shopping-basket', 'edubin-core' ),
                        ],

                        [
                            'list_name' => __( 'Html Template', 'edubin-core' ),
                            'list_price' => __( '$42', 'edubin-core' ),
                            'list_cart_icon' => __( 'fa fa-shopping-basket', 'edubin-core' ),
                        ]

                    ],
                    'title_field' => '{{{ list_name }}}',
                ]
            );

        $this->end_controls_section();

        // Table Header
        $this->start_controls_section(
            'datatable_header',
            [
                'label' => __( 'Table Header', 'edubin-core' ),
                'condition'=>[
                    'datatable_style!'=>'3'
                ]
            ]
        );

            $repeater = new Repeater();

            $repeater->add_control(
                'column_name',
                [
                    'label'   => __( 'Column Name', 'edubin-core' ),
                    'type'    => Controls_Manager::TEXT,
                    'default' => __( 'No', 'edubin-core' ),
                ]
            );

            $this->add_control(
                'header_column_list',
                [
                    'type'    => Controls_Manager::REPEATER,
                    'fields'  => array_values( $repeater->get_controls() ),
                    'default' => [
                        [
                            'column_name' => __( 'No', 'edubin-core' ),
                        ],

                        [
                            'column_name' => __( 'Name', 'edubin-core' ),
                        ],

                        [
                            'column_name' => __( 'Designation', 'edubin-core' ),
                        ],

                        [
                            'column_name' => __( 'Email', 'edubin-core' ),
                        ]

                    ],
                    'title_field' => '{{{ column_name }}}',
                ]
            );
            
        $this->end_controls_section();

        // Table Content
        $this->start_controls_section(
            'datatable_content',
            [
                'label' => __( 'Table Content', 'edubin-core' ),
                'condition'=>[
                    'datatable_style!'=>'3'
                ]
            ]
        );

            $repeater_one = new Repeater();

            $repeater_one->add_control(
                'field_type',
                [
                    'label' => __( 'Fild Type', 'edubin-core' ),
                    'type' => Controls_Manager::SELECT,
                    'default' => 'row',
                    'options' => [
                        'row'   => __( 'Row', 'edubin-core' ),
                        'col'   => __( 'Column', 'edubin-core' ),
                    ],
                ]
            );

            $repeater_one->add_control(
                'content_type',
                [
                    'label' => esc_html__('Content Type','edubin-core'),
                    'type' =>Controls_Manager::CHOOSE,
                    'default'=>'text',
                    'options' =>[
                        'text' =>[
                            'title' =>__('Text','edubin-core'),
                            'icon' =>'fa fa-text-width',
                        ],
                        'icon' =>[
                            'title' =>__('Icon','edubin-core'),
                            'icon' =>'fa fa-info',
                        ]
                    ],
                    'condition'=>[
                        'field_type'=>'col',
                    ]
                ]
            );

            $repeater_one->add_control(
                'cell_text',
                [
                    'label'   => __( 'Cell Content', 'edubin-core' ),
                    'type'    => Controls_Manager::TEXT,
                    'default' => __( 'Louis Hudson', 'edubin-core' ),
                    'condition'=>[
                        'field_type'=>'col',
                        'content_type'=>'text',
                    ]
                ]
            );

            $repeater_one->add_control(
                'cell_icon',
                [
                    'label' => __( 'Icons', 'edubin-core' ),
                    'type' => Controls_Manager::ICON,
                    'default'=>'fa fa-facebook',
                    'condition'=>[
                        'field_type'=>'col',
                        'content_type'=>'icon',
                    ]
                ]
            );

            $repeater_one->add_control(
                'row_colspan',
                [
                    'label' => __( 'Colspan', 'edubin-core' ),
                    'type' => Controls_Manager::NUMBER,
                    'min' => 1,
                    'step' => 1,
                    'default' => 1,
                    'condition'=>[
                        'field_type'=>'col',
                    ]
                ]
            );

            $repeater_one->add_control(
                'content_link',
                [
                    'label' => __( 'Link', 'edubin-core' ),
                    'type' => Controls_Manager::URL,
                    'placeholder' => __( 'https://your-link.com', 'edubin-core' ),
                    'show_external' => true,
                    'default' => [
                        'url' => '',
                        'is_external' => false,
                        'nofollow' => false,
                    ],
                    'condition'=>[
                        'field_type'=>'col',
                    ]
                ]
            );

            $this->add_control(
                'content_list',
                [
                    'type'    => Controls_Manager::REPEATER,
                    'fields'  => array_values( $repeater_one->get_controls() ),
                    'default' => [
                        [
                            'field_type' => __( 'row', 'edubin-core' ),
                        ],

                        [
                            'field_type' => __( 'col', 'edubin-core' ),
                            'cell_text' => __( '1', 'edubin-core' ),
                            'row_colspan' => __( '1', 'edubin-core' ),
                        ],

                        [
                            'field_type' => __( 'col', 'edubin-core' ),
                            'cell_text' => __( 'Louis Hudson', 'edubin-core' ),
                            'row_colspan' => __( '1', 'edubin-core' ),
                        ],

                        [
                            'field_type' => __( 'col', 'edubin-core' ),
                            'cell_text' => __( 'Developer', 'edubin-core' ),
                            'row_colspan' => __( '1', 'edubin-core' ),
                        ],


                        [
                            'field_type' => __( 'col', 'edubin-core' ),
                            'cell_text' => __( 'louishudson@gmail.com', 'edubin-core' ),
                            'row_colspan' => __( '1', 'edubin-core' ),
                        ]

                    ],
                    'title_field' => '{{{field_type}}}',
                ]
            );
            
        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'edubin_table_style_section',
            [
                'label' => __( 'Table', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'datatable_style!'=>'3',
                ]
            ]
        );

            $this->add_control(
                'datatable_bg_color',
                [
                    'label' => esc_html__( 'Background Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style' => 'background-color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'datatable_padding',
                [
                    'label' => esc_html__( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                            '{{WRAPPER}} .edubin-table-style' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'datatable_margin',
                [
                    'label' => esc_html__( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                            '{{WRAPPER}} .edubin-table-style' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                    [
                        'name' => 'datatable_border',
                        'label' => esc_html__( 'Border', 'edubin-core' ),
                        'selector' => '{{WRAPPER}} .edubin-table-style',
                    ]
            );

            $this->add_responsive_control(
                'datatable_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );
            
        $this->end_controls_section();

        // Table Header Style tab section
        $this->start_controls_section(
            'edubin_table_header_style_section',
            [
                'label' => __( 'Table Header', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'datatable_style!'=>'3',
                ]
            ]
        );

            $this->add_control(
                'datatable_header_bg_color',
                [
                    'label' => esc_html__( 'Background Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style thead tr th' => 'background-color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'datatable_header_text_color',
                [
                    'label' => esc_html__( 'Text Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style thead tr th' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'datatable_header_typography',
                    'label' => __( 'Typography', 'edubin-core' ),
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-table-style thead tr th',
                ]
            );

            $this->add_responsive_control(
                'datatable_header_padding',
                [
                    'label' => esc_html__( 'Table Header Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                            '{{WRAPPER}} .edubin-table-style thead tr th' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                    [
                        'name' => 'datatable_header_border',
                        'label' => esc_html__( 'Border', 'edubin-core' ),
                        'selector' => '{{WRAPPER}} .edubin-table-style thead tr th',
                    ]
            );

            $this->add_responsive_control(
                'datatable_header_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style thead tr th' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'datatable_header_align',
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
                        '{{WRAPPER}} .edubin-table-style thead tr th' => 'text-align: {{VALUE}};',
                    ],
                    'default' => '',
                    'separator' =>'before',
                ]
            );

        $this->end_controls_section();

        // Table Body Style tab section
        $this->start_controls_section(
            'edubin_table_body_style_section',
            [
                'label' => __( 'Table Body', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'datatable_style!'=>'3',
                ]
            ]
        );

            $this->add_control(
                'datatable_body_bg_color',
                [
                    'label' => esc_html__( 'Background Color ( Event )', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style tbody tr:nth-child(even)' => 'background-color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'datatable_body_odd_bg_color',
                [
                    'label' => esc_html__( 'Background Color ( Odd )', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style tbody tr' => 'background-color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'datatable_body_text_color',
                [
                    'label' => esc_html__( 'Text Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style tbody tr td' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'datatable_body_typography',
                    'label' => __( 'Typography', 'edubin-core' ),
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-table-style tbody tr td',
                ]
            );

            $this->add_responsive_control(
                'datatable_body_padding',
                [
                    'label' => esc_html__( 'Table Body Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                            '{{WRAPPER}} .edubin-table-style tbody tr td' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                    [
                        'name' => 'datatable_body_border',
                        'label' => esc_html__( 'Border', 'edubin-core' ),
                        'selector' => '{{WRAPPER}} .edubin-table-style tbody tr td',
                    ]
            );

            $this->add_responsive_control(
                'datatable_body_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin-table-style tbody tr td' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->add_responsive_control(
                'datatable_body_align',
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
                        '{{WRAPPER}} .edubin-table-style tbody tr td' => 'text-align: {{VALUE}};',
                    ],
                    'default' => '',
                    'separator' =>'before',
                ]
            );

        $this->end_controls_section();

        // Price List Style tab section
        $this->start_controls_section(
            'price_list_title_style_section',
            [
                'label' => __( 'Title', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'datatable_style'=>'3',
                ]
            ]
        );

            $this->add_control(
                'price_list_title_text_color',
                [
                    'label' => esc_html__( 'Text Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-table-style-3 ul li a .price-list-text span' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'price_list_title_typography',
                    'label' => __( 'Typography', 'edubin-core' ),
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-pricing-table-style-3 ul li a .price-list-text span',
                ]
            );

        $this->end_controls_section();

        // Price List Style tab section
        $this->start_controls_section(
            'price_list_price_style_section',
            [
                'label' => __( 'Price', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'datatable_style'=>'3',
                ]
            ]
        );

            $this->add_control(
                'price_list_price_text_color',
                [
                    'label' => esc_html__( 'Text Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-table-style-3 ul li a .price-text-right span.price' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'price_list_price_bg_color',
                [
                    'label' => esc_html__( 'Background Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-table-style-3 ul li a .price-text-right span.price' => 'background-color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'price_list_price_typography',
                    'label' => __( 'Typography', 'edubin-core' ),
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .edubin-pricing-table-style-3 ul li a .price-text-right span.price',
                ]
            );

        $this->end_controls_section();

        // Price List Style tab section
        $this->start_controls_section(
            'price_list_icon_style_section',
            [
                'label' => __( 'Icon', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition'=>[
                    'datatable_style'=>'3',
                ]
            ]
        );

            $this->add_control(
                'price_list_price_icon_color',
                [
                    'label' => esc_html__( 'Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-table-style-3 ul li a .price-text-right span.basket' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'price_list_price_icon_bg_color',
                [
                    'label' => esc_html__( 'Background Color', 'edubin-core' ),
                    'type' => Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin-pricing-table-style-3 ul li a .price-text-right span.basket' => 'background-color: {{VALUE}};',
                    ],
                ]
            );

        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();
        $id = $this->get_id();

        $this->add_render_attribute( 'datatable_attr', 'class', 'table-responsive edubin-pricing-list-view edubin-pricing-table-style-'.$settings['datatable_style'] );

        $table_tr = array();
        $table_td = array();

        if( isset( $settings['content_list'] ) ){
            foreach( $settings['content_list'] as $content_row ) {

                $row_id = rand(10, 1000);
                if( $content_row['field_type'] == 'row' ) {
                    $table_tr[] = [
                        'id' => $row_id,
                        'type' => $content_row['field_type'],
                    ];
                }
                if( $content_row['field_type'] == 'col' ) {

                    $target = $content_row['content_link']['is_external'] ? 'target="_blank"' : '';
                    $nofollow = $content_row['content_link']['nofollow'] ? 'rel="nofollow"' : '';

                    $table_tr_keys = array_keys( $table_tr );
                    $last_key = end( $table_tr_keys );

                    $table_td[] = [
                        'row_id' => $table_tr[$last_key]['id'],
                        'title' => $content_row['cell_text'],
                        'colspan' => $content_row['row_colspan'],
                        'contenttype' => $content_row['content_type'],
                        'icon' => isset( $content_row['cell_icon'] ) ? $content_row['cell_icon'] : '',
                        'link_url' => $content_row['content_link']['url'],
                        'link_target' => $target,
                        'nofollow' => $nofollow,
                    ];
                }

            }
        }
        
       
        ?>
        <div <?php echo $this->get_render_attribute_string( 'datatable_attr' ); ?>>

            <?php if( $settings['datatable_style'] == 3 ): ?>
                <ul>
                    <?php
                    if( isset( $settings['pricing_list'] ) ){ 
                        foreach ( $settings['pricing_list'] as $pricinglist ):
                            $target_one = $pricinglist['list_cart_link']['is_external'] ? 'target="_blank"' : '';
                            $nofollow_one = $pricinglist['list_cart_link']['nofollow'] ? 'rel="nofollow"' : '';
                    ?>
                        <li>
                            <a href="<?php echo esc_url( $pricinglist['list_cart_link']['url'] ); ?>" <?php echo $target_one; ?> <?php echo $nofollow_one; ?> >
                                <div class="price-list-text">
                                    <?php 
                                        if( !empty( $pricinglist['list_name'] ) ){
                                            echo '<span>'.esc_html__( $pricinglist['list_name'],'edubin-core' ).'</span><span class="separator"></span>';
                                        }
                                    ?>
                                </div>
                                <div class="price-text-right">
                                    <?php
                                        if( !empty( $pricinglist['list_price'] ) ){
                                            echo '<span class="price">'.esc_html__( $pricinglist['list_price'], 'edubin-core' ).'</span>';
                                        }
                                        if( !empty( $pricinglist['list_cart_icon'] ) ){
                                            echo '<span class="basket"><i class=" '.esc_attr__( $pricinglist['list_cart_icon'], 'edubin-core').' "></i></span>';
                                        }
                                    ?>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; } ?>
                </ul>
            <?php else:?>
                <table class="table">
                    <?php if( $settings['header_column_list'] ): ?>
                        <thead>
                            <tr>
                                <?php

                                    foreach ( $settings['header_column_list'] as $headeritem ) {
                                        if( $settings['datatable_style'] == 2 && !empty( $headeritem['column_name'] )){
                                            echo '<th><span>'.esc_html__( $headeritem['column_name'],'edubin-core' ).'</span></th>';
                                        }else{
                                            echo '<th>'.esc_html__( $headeritem['column_name'],'edubin-core' ).'</th>';
                                        }
                                    }
                                ?>
                            </tr>
                        </thead>
                    <?php endif;?>
                    <tbody>
                        <?php for( $i = 0; $i < count( $table_tr ); $i++ ) : ?>
                            <tr>
                                <?php
                                    for( $j = 0; $j < count( $table_td ); $j++ ):
                                        if( $table_tr[$i]['id'] == $table_td[$j]['row_id'] ):
                                ?>
                                    <td<?php echo $table_td[$j]['colspan'] > 1 ? ' colspan="'.$table_td[$j]['colspan'].'"' : ''; ?>>
                                        <?php
                                            if( $settings['datatable_style'] == 2 ){
                                                if( $table_td[$j]['contenttype'] == 'icon' && !empty($table_td[$j]['icon'])){
                                                    
                                                    if( !empty( $table_td[$j]['link_url'] ) ){
                                                        echo '<a href=" '.esc_url( $table_td[$j]['link_url'] ).' " '.$table_td[$j]['link_target'].$table_td[$j]['nofollow'].'><span><i class=" '.esc_attr__( $table_td[$j]['icon'],'edubin-core' ).' "></i></span></a>';
                                                    }else{
                                                        echo '<span><i class=" '.esc_attr__( $table_td[$j]['icon'],'edubin-core' ).' "></i></span>';
                                                    }

                                                }else{
                                                    if( !empty( $table_td[$j]['title'] ) ){
                                                        if( !empty( $table_td[$j]['link_url'] ) ){
                                                            echo '<a href=" '.esc_url( $table_td[$j]['link_url'] ).' " '.$table_td[$j]['link_target'].$table_td[$j]['nofollow'].'><span>'.$table_td[$j]['title'].'</span></a>';
                                                        }else{
                                                            echo '<span>'.$table_td[$j]['title'].'</span>';
                                                        }
                                                    }
                                                }
                                            }else{
                                                if( $table_td[$j]['contenttype'] == 'icon' ){
                                                    if( !empty( $table_td[$j]['link_url'] ) ){
                                                        echo '<a href=" '.esc_url( $table_td[$j]['link_url'] ).' " '.$table_td[$j]['link_target'].$table_td[$j]['nofollow'].'><i class=" '.esc_attr__( $table_td[$j]['icon'],'edubin-core' ).' "></i></a>';
                                                    }else{
                                                        echo '<i class=" '.esc_attr__( $table_td[$j]['icon'],'edubin-core' ).' "></i>';
                                                    }
                                                }else{
                                                    if( !empty( $table_td[$j]['link_url'] ) ){
                                                        echo '<a href=" '.esc_url( $table_td[$j]['link_url'] ).' " '.$table_td[$j]['link_target'].$table_td[$j]['nofollow'].'>'.$table_td[$j]['title'].'</a>'; 
                                                    }else{
                                                        echo $table_td[$j]['title'];
                                                    }
                                                }
                                            }
                                            
                                        ?>
                                    </td>
                                <?php endif; endfor; ?>
                            </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            <?php endif;?>
        </div>

        <?php

    }

}

