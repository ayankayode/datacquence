<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_LD_Course_Carousel extends Widget_Base {

    public function get_name() {
        return 'edubin-ldcourse-addons';
    }
    
    public function get_title() {
        return __( 'LearnDash LMS Courses', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-gallery-grid';
    }

    public function get_categories() {
        return [ 'edubin-core' ];
    }

    public function get_script_depends() {
        return [
            // 'slick',
            'edubin-widgets-scripts',
        ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'learnpress_courses',
            [
                'label' => __( 'Courses', 'edubin-core' ),
            ]
        );

        $this->add_control(
            'course_style',
            [
                'label' => __( 'Style', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => __( 'Style 1', 'edubin-core' ),
                    '2'   => __( 'Style 2', 'edubin-core' ),
                    '3'   => __( 'Style 3', 'edubin-core' ),
                    '4'   => __( 'Style 4', 'edubin-core' ),
                ],
            ]
        );
        $this->add_control(
            'posts_column',
            [
                'label' => __('Items Column', 'edubin-core'),
                'type' => Controls_Manager::SELECT,
                'default' => '4',
                'options' => [
                    '2' => __('6 Column', 'edubin-core'),
                    '3' => __('4 Column', 'edubin-core'),
                    '4' => __('3 Column', 'edubin-core'),
                    '6' => __('2 Column', 'edubin-core'),
                    '12' => __('1 Column', 'edubin-core'),
                ],
                'condition'=>[
                    'carousel_on_off!'=> 'yes',
                ]
            ]
        );

        $this->add_control(
            'carusel_items_column',
            [
                'label' => esc_html__( 'Items Column', 'edubin-core' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 20,
                'step' => 1,
                'default' => 3,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );
        $this->add_control(
            'post_limit',
            [
                'label' => __('Number of Course', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 6,
            ]
        );
        $this->add_control(
            'learndash_course_categories',
            [
                'label' => __('Select Category', 'edubin-core'),
                'type' => Controls_Manager::SELECT2,
                'options' => edubin_learndash_get_taxonomies(),
                'multiple' => true,
            ]
        );
        $this->add_control(
            'custom_order',
            [
                'label' => esc_html__( 'Custom order', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'postorder',
            [
                'label' => esc_html__( 'Order', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'DESC'  => esc_html__('Descending','edubin-core'),
                    'ASC'   => esc_html__('Ascending','edubin-core'),
                ],
                'condition' => [
                    'custom_order!' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'orderby',
            [
                'label' => esc_html__( 'Orderby', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'          => esc_html__('None','edubin-core'),
                    'ID'            => esc_html__('ID','edubin-core'),
                    'date'          => esc_html__('Date','edubin-core'),
                    'name'          => esc_html__('Name','edubin-core'),
                    'title'         => esc_html__('Title','edubin-core'),
                    'comment_count' => esc_html__('Comment count','edubin-core'),
                    'rand'          => esc_html__('Random','edubin-core'),
                ],
                'condition' => [
                    'custom_order' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'carousel_on_off',
            [
                'label' => esc_html__( 'Carousel', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => '',
                'separator'=>'before',
            ]
        );
        $this->add_control(
            'title_length',
            [
                'label' => __( 'Title Length', 'edubin-core' ),
                'type' => Controls_Manager::NUMBER,
                'step' => 1,
                'default' => 15,
                'separator'=>'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'image',
                'default' => 'large',
                'separator' => 'none',
            ]
        );
        $this->end_controls_section();

        // Carousel setting
        $this->start_controls_section(
            'carousel_option',
            [
                'label' => esc_html__( 'Carousel Option', 'edubin-core' ),
                 'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slarrows',
            [
                'label' => esc_html__( 'Nav Arrow', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
                 'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'nav_arrow_style',
            [
                'label' => __( 'Nav Style', 'edubin-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1'   => __( 'Style 1', 'edubin-core' ),
                    '2'   => __( 'Style 2', 'edubin-core' ),
                ],
                'condition' => [
                     'slarrows'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slprevicon',
            [
                'label' => __( 'Previous icon', 'edubin-core' ),
                'type' => Controls_Manager::ICON,
                'default' => 'fa fa-angle-left',
                'condition' => [
                    'slarrows' => 'yes',
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slnexticon',
            [
                'label' => __( 'Next icon', 'edubin-core' ),
                'type' => Controls_Manager::ICON,
                'default' => 'fa fa-angle-right',
                'condition' => [
                    'slarrows' => 'yes',
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'sldots',
            [
                'label' => esc_html__( 'Dots', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no',
                 'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slpause_on_hover',
            [
                'type' => Controls_Manager::SWITCHER,
                'label_off' => __('No', 'edubin-core'),
                'label_on' => __('Yes', 'edubin-core'),
                'return_value' => 'yes',
                'default' => 'yes',
                'label' => __('Pause on Hover?', 'edubin-core'),
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );
        $this->add_control(
            'slautolay',
            [
                'label' => esc_html__( 'Auto play', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'separator' => 'before',
                'default' => 'no',
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slautoplay_speed',
            [
                'label' => __('Autoplay speed', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3000,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );


        $this->add_control(
            'slanimation_speed',
            [
                'label' => __('Autoplay animation speed', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 300,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slscroll_columns',
            [
                'label' => __('Slider item to scroll', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 10,
                'step' => 1,
                'default' => 1,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'heading_tablet',
            [
                'label' => __( 'Tablet', 'edubin-core' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after',
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'sltablet_display_columns',
            [
                'label' => __('Slider Items', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 8,
                'step' => 1,
                'default' => 1,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'sltablet_scroll_columns',
            [
                'label' => __('Slider item to scroll', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 8,
                'step' => 1,
                'default' => 1,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'sltablet_width',
            [
                'label' => __('Tablet Resolution', 'edubin-core'),
                'description' => __('The resolution to tablet.', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 769,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'heading_mobile',
            [
                'label' => __( 'Mobile Phone', 'edubin-core' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after',
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slmobile_display_columns',
            [
                'label' => __('Slider Items', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 4,
                'step' => 1,
                'default' => 1,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slmobile_scroll_columns',
            [
                'label' => __('Slider item to scroll', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 4,
                'step' => 1,
                'default' => 1,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->add_control(
            'slmobile_width',
            [
                'label' => __('Mobile Resolution', 'edubin-core'),
                'description' => __('The resolution to mobile.', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 480,
                'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );

        $this->end_controls_section(); // Option end

        $this->start_controls_section(
            'course_meta_option',
            [
                'label' => __( 'Meta', 'edubin-core' ),
            ]
        );
        $this->add_control(
            'show_price',
            [
                'label' => esc_html__( 'Price', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );     

        $this->add_control(
            'show_views',
            [
                'label' => esc_html__( 'Views', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'show_comments',
            [
                'label' => esc_html__( 'Comments', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'show_see_more',
            [
                'label' => esc_html__( 'See More Button', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->end_controls_section(); // Option End

        // Style Title tab section
        $this->start_controls_section(
            'lp_course_title_style_section',
            [
                'label' => __( 'Title', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            
            $this->start_controls_tabs('title_style_tabs');

                $this->start_controls_tab(
                    'title_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );

                    $this->add_control(
                        'title_color',
                        [
                            'label' => __( 'Color', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'default'=>'',
                            'selectors' => [
                                '{{WRAPPER}} .edubin-single-course-1 .course-content .course-title a' => 'color: {{VALUE}}',
                                '{{WRAPPER}} .edubin-single-course-2 .content .course-title a' => 'color: {{VALUE}}',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Typography', 'edubin-core' ),
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .edubin-single-course-1 .course-content .course-title a, .edubin-single-course-2 .content .course-title a',
                        ]
                    );

                    $this->add_responsive_control(
                        'title_padding',
                        [
                            'label' => __( 'Padding', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-single-course-1 .course-content .course-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .edubin-single-course-2 .content .course-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Normal Tab end

                $this->start_controls_tab(
                    'title_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );
                $this->add_control(
                    'title_hover_color',
                    [
                        'label' => __( 'Color', 'edubin-core' ),
                        'type' => Controls_Manager::COLOR,
                        'default'=>'',
                        'selectors' => [
                            '{{WRAPPER}} .edubin-single-course-1 .course-content .course-title a:hover' => 'color: {{VALUE}}',
                            '{{WRAPPER}} .edubin-single-course-2 .content .course-title:hover a' => 'color: {{VALUE}}',
                        ],
                    ]
                );

                $this->end_controls_tab(); // Hover Tab end

            $this->end_controls_tabs();

        $this->end_controls_section();

        // Style Meta tab section
        $this->start_controls_section(
            'post_meta_style_section',
            [
                'label' => __( 'Meta', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'default'=>'',
                'selectors' => [
                    '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .course-meta li i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'meta_color',
            [
                'label' => __( 'Text Color', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'default'=>'',
                'separator' => 'after',
                'selectors' => [
                    '{{WRAPPER}} .edubin-single-course-1.ld-course .course-content ul li' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-1.ld-course .course-content ul li>i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-1.ld-course .course-content ul li a' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-2.ld-course .course-meta ul li' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-2.ld-course .course-meta ul li>i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-2.ld-course .course-meta ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'price_typography',
                'label' => __( 'Price Typography', 'edubin-core' ),
                'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .edubin-single-course-1 .thum .edubin-course-price-1 span, .edubin-single-course-1 .thum .edubin-course-price-2 span, .edubin-single-course-1 .thum .edubin-course-price-3 span, .edubin-single-course-2 > .thum .edubin-course-price-4 span',
            ]
        );
        $this->add_control(
            'price_color',
            [
                'label' => __( 'Price Color', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'default'=>'',
                'selectors' => [
                    '{{WRAPPER}} .edubin-single-course-1 .thum .edubin-course-price-1 span' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-1 .thum .edubin-course-price-2 span' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-1 .thum .edubin-course-price-3 span' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-2 > .thum .edubin-course-price-4 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'price_bg_color',
            [
                'label' => __( 'Price Background', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'default'=>'',
                'separator' => 'after',
                'selectors' => [
                    '{{WRAPPER}} .edubin-single-course-1 .thum .edubin-course-price-1 span' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-1 .thum .edubin-course-price-2 span' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-1 .thum .edubin-course-price-3 span' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-2 > .thum .edubin-course-price-4 span' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();


        // Style Slider arrow style start
        $this->start_controls_section(
            'lp_course_arrow_style',
            [
                'label'     => __( 'Arrow', 'edubin-core' ),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' =>[
                    'slarrows'  => 'yes',
                    'carousel_on_off'=>'yes',
                ],

            ]
        );
        
            $this->start_controls_tabs( 'lp_course_arrow_style_tabs' );

                // Normal tab Start
                $this->start_controls_tab(
                    'lp_course_arrow_style_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );

                    $this->add_control(
                        'arrow_color',
                        [
                            'label' => __( 'Icon Color', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .edubin-carousel-activation button.slick-arrow' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .edubin-lp-courses-addons.edubin-nav-button-2 .edubin-carousel-activation button.slick-arrow' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_responsive_control(
                        'arrow_position',
                        [
                            'label' => __( 'Position', 'edubin-core' ),
                            'type' => Controls_Manager::SLIDER,
                            'size_units' => [ 'px'],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 200,
                                    'step' => 1,
                                ]
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-lp-courses-addons.edubin-nav-button-1 .edubin-carousel-activation button.slick-arrow' => 'top: -{{SIZE}}{{UNIT}};',
                            ],
                        ]
                    );
                    $this->add_control(
                        'arrow_bg_color',
                        [
                            'label' => __( 'Background', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .edubin-carousel-activation button.slick-arrow' => 'background-color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'course_arrow_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-carousel-activation button.slick-arrow',
                        ]
                    );

                    $this->add_responsive_control(
                        'course_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-carousel-activation button.slick-arrow' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Normal tab end

                // Hover tab Start
                $this->start_controls_tab(
                    'lp_course_arrow_style_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );

                    $this->add_control(
                        'slider_arrow_hover_color',
                        [
                            'label' => __( 'Color', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .edubin-carousel-activation button.slick-arrow:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'slider_arrow_hover_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-carousel-activation button.slick-arrow:hover',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'slider_arrow_hover_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-carousel-activation button.slick-arrow:hover',
                        ]
                    );

                    $this->add_responsive_control(
                        'slider_arrow_hover_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-carousel-activation button.slick-arrow:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Hover tab end

            $this->end_controls_tabs();

        $this->end_controls_section(); // Style arrow style end

        // Style Dot section
        $this->start_controls_section(
            'course_dot_style_section',
            [
                'label' => __( 'Dot', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
                 'condition'=>[
                    'carousel_on_off'=>'yes',
                ]
            ]
        );
        $this->add_control(
            'dot_color',
            [
                'label' => __( 'Dot Color', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .edubin-carousel-activation .slick-dots li button' => 'border-color: {{VALUE}};',
                    '{{WRAPPER}} .edubin-carousel-activation .slick-dots li.slick-active button' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dot_size',
            [
                'label' => __( 'Dot Size', 'edubin-core' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-carousel-activation .slick-dots li button' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dot_position',
            [
                'label' => __( 'Position', 'edubin-core' ),
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
                'selectors' => [
                    '{{WRAPPER}} .edubin-carousel-activation .slick-dots li' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'dot_space_between',
            [
                'label' => __( 'Space Between', 'edubin-core' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-carousel-activation .slick-dots li' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
  // Submit Button
        $this->start_controls_section(
            'ld_course_button',
            [
                'label' => __( 'Button', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            // Button Tabs Start
            $this->start_controls_tabs('ld_course_tabs');

                // Start Normal Submit button tab
                $this->start_controls_tab(
                    'ld_course_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );
                    
                    $this->add_control(
                        'ld_course_button_text_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a'   => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'ld_course_button_typography',
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'ld_course_button_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a',
                        ]
                    );

                    $this->add_responsive_control(
                        'ld_course_button_padding',
                        [
                            'label' => __( 'Padding', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'ld_course_button_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a',
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'ld_course_button_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Normal submit Button tab end

                // Start Hover Submit button tab
                $this->start_controls_tab(
                    'ld_course_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );
                    
                    $this->add_control(
                        'ld_course_button_hover_text_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a:hover'   => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'ld_course_button_hover_background',
                            'label' => __( 'Background', 'edubin-core' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a:hover',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border::get_type(),
                        [
                            'name' => 'ld_course_button_hover_border',
                            'label' => __( 'Border', 'edubin-core' ),
                            'selector' => '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a:hover',
                            'separator' =>'before',
                        ]
                    );

                    $this->add_responsive_control(
                        'ld_course_button_hover_border_radius',
                        [
                            'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .edubin-single-course-1.ld-course .course-bottom .see-more-btn a:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );

                $this->end_controls_tab(); // Hover Submit Button tab End

            $this->end_controls_tabs(); // Button Tabs End

        $this->end_controls_section();
        // Course body style
        $this->start_controls_section(
            'course_style_section',
            [
                'label' => __( 'Style', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs('body_box_tabs');

                $this->start_controls_tab(
                    'body_box_normal_tab',
                    [
                        'label' => __( 'Normal', 'edubin-core' ),
                    ]
                );

                $this->add_group_control(
                    Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'box_shadow',
                        'selector' => '{{WRAPPER}} .edubin-single-course-1, .edubin-single-course-2',
                    ]
                );

                $this->end_controls_tab(); // Normal Tab end

                $this->start_controls_tab(
                    'body_box_hover_tab',
                    [
                        'label' => __( 'Hover', 'edubin-core' ),
                    ]
                );

                $this->add_group_control(
                    Group_Control_Box_Shadow::get_type(),
                    [   'label' => __( 'Box Shadow Hover', 'edubin-core' ),
                        'name' => 'box_shadow_hover',
                        'selector' => '{{WRAPPER}} .edubin-single-course-1:hover, .edubin-single-course-2:hover',
                    ]
                );

                $this->end_controls_tab(); // Hover Tab end

            $this->end_controls_tabs();
            
         $this->add_control(
            'course_bg_color',
            [
                'label' => __( 'Background', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'default'=>'',
                'selectors' => [
                    '{{WRAPPER}} .edubin-single-course-1 .course-content' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .edubin-single-course-2' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();

        $custom_order_ck    = $this->get_settings_for_display('custom_order');
        $orderby            = $this->get_settings_for_display('orderby');
        $postorder          = $this->get_settings_for_display('postorder');

        // Course Column
        $this->add_render_attribute( 'edubin_posts_column', 'class', 'col-sm-'.$settings['slmobile_display_columns'].' col-md-'.$settings['sltablet_display_columns'].' col-lg-'.$settings['posts_column'] );

        // Button style
        $this->add_render_attribute( 'edubin_carousel_btn_style', [ 'id' => 'edubin-lp-courses-addons', 'class' => 'edubin-lp-courses-addons edubin-nav-button-'.$settings['nav_arrow_style'] ] );

        // Price style
        $this->add_render_attribute( 'edubin_price_style', 'class', 'edubin-course-price-'.$settings['course_style'] );

        // Carusel options
        $this->add_render_attribute( 'edubin_course_carousel_attr', 'class',  ($settings['carousel_on_off'] ? 'edubin-carousel-activation' : 'row') );

            $slider_settings = [
                'arrows' => ('yes' === $settings['slarrows']),
                'arrow_prev_txt' => $settings['slprevicon'],
                'arrow_next_txt' => $settings['slnexticon'],
                'dots' => ('yes' === $settings['sldots']),
                'autoplay' => ('yes' === $settings['slautolay']),
                'autoplay_speed' => absint($settings['slautoplay_speed']),
                'animation_speed' => absint($settings['slanimation_speed']),
                'pause_on_hover' => ('yes' === $settings['slpause_on_hover']),
            ];

            $slider_responsive_settings = [
                'display_columns' => $settings['carusel_items_column'],
                'scroll_columns' => $settings['slscroll_columns'],
                'tablet_width' => $settings['sltablet_width'],
                'tablet_display_columns' => $settings['sltablet_display_columns'],
                'tablet_scroll_columns' => $settings['sltablet_scroll_columns'],
                'mobile_width' => $settings['slmobile_width'],
                'mobile_display_columns' => $settings['slmobile_display_columns'],
                'mobile_scroll_columns' => $settings['slmobile_scroll_columns'],

            ];

            $slider_settings = array_merge( $slider_settings, $slider_responsive_settings );

            $this->add_render_attribute( 'edubin_course_carousel_attr', 'data-settings', wp_json_encode( $slider_settings ) );
       

        // Query
        $args = array(
            'post_type'             => 'sfwd-courses',
            'post_status'           => 'publish',
            'ignore_sticky_posts'   => 1,
            'posts_per_page'        => !empty( $settings['post_limit'] ) ? $settings['post_limit'] : 3,
            'order'                 => $postorder
        );

        // Custom Order
        if( $custom_order_ck == 'yes' ){
            $args['orderby']    = $orderby;
        }
        
        if( !empty($settings['learndash_course_categories']) ){
            $get_categories = $settings['learndash_course_categories'];
        }else{
           $get_categories = $settings['learndash_course_categories'];
        }

        $carousel_cats = str_replace(' ', '', $get_categories);

        if (  !empty( $get_categories ) ) {
            if( is_array($carousel_cats) && count($carousel_cats) > 0 ){
                $field_name = is_numeric( $carousel_cats[0] ) ? 'term_id' : 'slug';
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'ld_course_category',
                        'terms' => $carousel_cats,
                        'field' => $field_name,
                        'include_children' => false
                    )
                );
            }
        }

        $carousel_post = new \WP_Query( $args );
       
        ?>
            <div <?php echo $this->get_render_attribute_string( 'edubin_carousel_btn_style' ); ?>>
                <div <?php echo $this->get_render_attribute_string( 'edubin_course_carousel_attr' ); ?>>
                    
                    <?php
                        if( $carousel_post->have_posts() ):
                        while( $carousel_post->have_posts() ): $carousel_post->the_post();
                     ?>
            <?php 

                global $post; $post_id = $post->ID;
                $course_id = $post_id;
                $user_id   = get_current_user_id();
                $current_id = $post->ID;

                $enable_video = get_post_meta( $post->ID, '_learndash_course_grid_enable_video_preview', true );
                $embed_code   = get_post_meta( $post->ID, '_learndash_course_grid_video_embed_code', true );
                $button_text  = get_post_meta( $post->ID, '_learndash_course_grid_custom_button_text', true );

                // Retrieve oembed HTML if URL provided
                if ( preg_match( '/^http/', $embed_code ) ) {
                    $embed_code = wp_oembed_get( $embed_code, array( 'height' => 600, 'width' => 400 ) );
                }

                $button_text = isset( $button_text ) && ! empty( $button_text ) ? $button_text : __( 'See more...', 'edubin-core' );

                $button_text = apply_filters( 'learndash_course_grid_custom_button_text', $button_text, $post_id );

                $options = get_option('sfwd_cpt_options');
                $currency = null;

                if ( ! is_null( $options ) ) {
                    if ( isset($options['modules'] ) && isset( $options['modules']['sfwd-courses_options'] ) && isset( $options['modules']['sfwd-courses_options']['sfwd-courses_paypal_currency'] ) )
                    $currency = $options['modules']['sfwd-courses_options']['sfwd-courses_paypal_currency'];
                }

                if( is_null( $currency ) )
                    $currency = 'USD';

                $course_options = get_post_meta($post_id, "_sfwd-courses", true);
                $price = $course_options && isset($course_options['sfwd-courses_course_price']) ? $course_options['sfwd-courses_course_price'] : __( 'Free', 'edubin-core' );
                $short_description = @$course_options['sfwd-courses_course_short_description'];

                $has_access   = sfwd_lms_has_access( $course_id, $user_id );
                $is_completed = learndash_course_completed( $user_id, $course_id );

                if( $price == '' )
                    $price .= __( 'Free', 'edubin-core' );

                if ( is_numeric( $price ) ) {
                    if ( $currency == "USD" )
                        $price = '$' . $price;
                    else
                        $price .= ' ' . $currency;
                }

                $class       = '';
                $ribbon_text = '';

                if ( $has_access && ! $is_completed ) {
                    $class = 'ld_course_grid_price ribbon-enrolled';
                    $ribbon_text = __( 'Enrolled', 'edubin-core' );
                } elseif ( $has_access && $is_completed ) {
                    $class = 'ld_course_grid_price';
                    $ribbon_text = __( 'Completed', 'edubin-core' );
                } else {
                    $class = ! empty( $course_options['sfwd-courses_course_price'] ) ? 'ld_course_grid_price price_' . $currency : 'ld_course_grid_price free';
                    $ribbon_text = $price;
                }

             ?>
                    <?php if(!$settings['carousel_on_off'] == 'yes' ): ?>
                        <div <?php echo $this->get_render_attribute_string( 'edubin_posts_column' ); ?> >
                    <?php endif; ?>

                    <?php if ($settings['course_style'] == '1' || $settings['course_style'] == '2' || $settings['course_style'] == '3') : ?>

                        <div <?php echo $this->get_render_attribute_string( 'edubin_post_slider_item_attr' ); ?> >
                            <div class="edubin-single-course-1 mb-30 ld-course">
                                <div class="thum">
                                    <?php if ( has_post_thumbnail() ):?>
                                        <figure class="image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail($settings['image_size']);?>
                                            </a>
                                        </figure>
                                    <?php endif; ?>
                                    <?php if($settings['show_price'] == 'yes') : ?>
                                        
                                        <div <?php echo $this->get_render_attribute_string( 'edubin_price_style' ); ?>>
                                            <?php if ( $price) : ?>
                                                <?php if ($settings['course_style'] == 2 || $settings['course_style'] == 3) : ?>
                                                 <span><?php echo $price; ?></span>
                                                <?php else : ?>
                                                    <span><?php $price = str_replace('.00', '', $price); echo $price; ?></span>
                                                <?php endif; ?> 

                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="course-content">

                                     <h4 class="course-title"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), $settings['title_length'], '' ); ?></a></h4>

                                    <?php if($settings['show_views'] == 'yes' || $settings['show_see_more'] || $settings['show_comments']) : ?>  
                                        <div class="course-bottom">
                                            <div class="course-meta">
                                                <ul>
                                                    <?php if($settings['show_views'] == 'yes') : ?>  
                                                        <li><i class="glyph-icon flaticon-binoculars-1"></i> <?php echo edubinGetPostViews(get_the_ID()); ?></li>
                                                    <?php endif; ?>
                                                    <?php if($settings['show_comments'] == 'yes') : ?>  
                                                        <li><i class="fa fa-comments"></i><a href="<?php get_comments_link();?>"> <?php echo get_comments_number(); ?></a></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        <?php if($settings['show_see_more'] == 'yes') : ?>  
                                            <div class="see-more-btn">
                                                <a href="<?php the_permalink(); ?>"><?php echo $button_text ; ?></a>
                                            </div>
                                        <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div> 
                        </div>

                    <?php elseif ($settings['course_style'] == '4') : ?>
                        <div <?php echo $this->get_render_attribute_string( 'edubin_post_slider_item_attr' ); ?> >
                            <div class="edubin-single-course-2 ld-course">
                                <div class="thum">
                                    <?php if ( has_post_thumbnail() ):?>
                                        <figure class="image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail($settings['image_size']);?>
                                            </a>
                                        </figure>
                                    <?php endif; ?>

                                    <?php if($settings['show_price'] == 'yes') : ?>
                                        
                                            <div <?php echo $this->get_render_attribute_string( 'edubin_price_style' ); ?>>
                                            <?php if ( $price) : ?>
                                                <?php if ($settings['course_style'] == 2 || $settings['course_style'] == 3) : ?>
                                                 <span><?php echo $price; ?></span>
                                                <?php else : ?>
                                                    <span><?php $price = str_replace('.00', '', $price); echo $price; ?></span>
                                                <?php endif; ?> 
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($settings['show_views'] == 'yes' || $settings['show_see_more'] || $settings['show_comments']) : ?>  
                                    <div class="course-meta-area">
                                    <?php if($settings['show_see_more'] == 'yes') : ?>  
                                        <div class="see-more-btn">
                                            <a href="<?php the_permalink(); ?>"><?php echo $button_text ; ?></a>
                                        </div>
                                    <?php endif; ?>

                                        <div class="course-meta">
                                            <ul>
                                            <?php if($settings['show_views'] == 'yes') : ?>  
                                                <li><i class="glyph-icon flaticon-binoculars-1"></i> <?php echo edubinGetPostViews(get_the_ID()); ?></li>
                                            <?php endif; ?>
                                            <?php if($settings['show_comments'] == 'yes') : ?>  
                                                <li><i class="fa fa-comments"></i><a href="<?php get_comments_link();?>"> <?php echo get_comments_number(); ?></a></li>
                                            <?php endif; ?>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="content">
                                  <h4 class="course-title"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), $settings['title_length'], '' ); ?></a></h4>
                                </div>
                            </div> 
                        </div>
                    <?php endif; ?>

            <?php if(!$settings['carousel_on_off'] == 'yes' ): ?>
                </div>
            <?php endif; ?>

            <?php endwhile; wp_reset_postdata(); wp_reset_query(); endif; ?>

            </div>
        </div>


<?php

    }

}

