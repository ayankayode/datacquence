<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Course_Category_Custom extends Widget_Base {

    public function get_name() {
        return 'edubin-course-category-custom-addons';
    }
    
    public function get_title() {
        return __( 'Course Category', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-posts-carousel';
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
            'section_image',
            [
                'label' => __( 'Image', 'edubin-core' ),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Background Image', 'edubin-core' ),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'image', 
                'label' => __( 'Image Size', 'edubin-core' ),
                'default' => 'large',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'lp_catogories_bg_color',
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .edubin-course-category .single-items .items-image::before',
            ]
        );
        $this->add_control(
            'course_cat_name',
            [
                'label'   => __( 'Course Category', 'edubin-core' ),
                'type'    => Controls_Manager::TEXT,
                'placeholder' => __('Technology','edubin-core'),
                'default' => 'Technology',
            ]
        );
        $this->add_control(
            'total_course',
            [
                'label'   => __( 'Total Course', 'edubin-core' ),
                'type'    => Controls_Manager::TEXT,
                'placeholder' => __('15','edubin-core'),
                'default' => '15',
            ]
        );
        $this->add_control(
            'cat_link',
            [
                'label' => __( 'Category Link', 'edubin-core' ),
                'type' => Controls_Manager::URL,
                'dynamic' => [
                    'active' => true,
                ],
                'placeholder' => __( 'https://your-link.com', 'edubin-core' ),
                'default' => [
                    'url' => '#',
                ],
                'separator' => 'before',
            ]
        );

        
    $this->add_responsive_control(
            'image_fixed_height',
            [
                'label' => __( 'Height', 'edubin-core' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 900,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-course-category .single-items .items-image' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .edubin-course-category .single-items .items-image img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'show_hide_course_cat',
            [
                'label' => __( 'Total Courses', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __( 'Show', 'edubin-core' ),
                'label_off' => __( 'Hide', 'edubin-core' ),
                'return_value' => 'yes',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'title_section_style',
                [
                    'label' => __( 'Style', 'edubin-core' ),
                    'tab'   => Controls_Manager::TAB_STYLE,
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
                            'label' => __( 'Category Color', 'edubin-core' ),
                            'type' => Controls_Manager::COLOR,
                            'default'=>'',
                            'selectors' => [
                                '{{WRAPPER}} .edubin-course-category .single-items .items-cont .course-cat' => 'color: {{VALUE}}',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'title_typography',
                            'label' => __( 'Category Typography', 'edubin-core' ),
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .edubin-course-category .single-items .items-cont .course-cat',
                        ]
                    );

                $this->end_controls_tab();

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
                            '{{WRAPPER}} .edubin-course-category .single-items .items-cont .course-cat:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );

                $this->end_controls_tab(); // Hover Tab end

            $this->end_controls_tabs();

        $this->add_responsive_control(
            'space_between',
            [
                'label' => __( 'Space Between', 'edubin-core' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 900,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-course-category .single-items .items-cont .course-cat' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

       $this->add_responsive_control(
            'space_top',
            [
                'label' => __( 'Top Space', 'edubin-core' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 200,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-course-category .single-items .items-cont' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'total_courses_color',
            [
                'label' => __( 'Total Courses Color', 'edubin-core' ),
                'type' => Controls_Manager::COLOR,
                'default'=>'',
                'separator'=>'before',
                'selectors' => [
                    '{{WRAPPER}} .edubin-course-category .single-items .items-cont .total-course' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'total_courses_typography',
                'label' => __( 'Total Courses Typography', 'edubin-core' ),
                'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .edubin-course-category .single-items .items-cont .total-course',
            ]
        );
    $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings = $this->get_settings();

        if ( empty( $settings['image']['url'] ) ) {
            return;
        }

        $this->add_render_attribute( 'wrapper', 'class', 'elementor-image' );

        $show_hide_course_cat = $settings['show_hide_course_cat']; 
        $course_cat_name = $settings['course_cat_name'];
        $total_course = $settings['total_course'];
        $cat_link = $settings['cat_link'];
        ?>


            <div class="edubin-course-category">
                <div class="single-items text-center">
                    <div class="items-image">
                        <?php echo Group_Control_Image_Size::get_attachment_image_html( $settings ); ?>
                    </div>
                    <div class="items-cont">
                        <?php if(!empty($cat_link['url'])) : ?>
                        <a href="<?php echo esc_url($cat_link['url']); ?>">
                         <?php endif ?>
                            <h5 class="course-cat"><?php echo esc_html($course_cat_name); ?></h5>
                        <?php if(!empty($cat_link['url'])) : ?>
                        </a>
                        <?php endif ?>
                        <?php if ($show_hide_course_cat): ?>   
                            <p class="total-course"><?php esc_html_e($total_course.' Courses', 'edubin-core') ; ?></p>
                        <?php endif ?>
                    </div>
                </div> 
            </div>
<?php
    }

}

