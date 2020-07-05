<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Buddy_Press extends Widget_Base {

    public function get_name() {
        return 'edubin-buddypress-addons';
    }
    
    public function get_title() {
        return __( 'BuddyPress', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-person';
    }
    public function get_categories() {
        return [ 'edubin-core' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'buddypress_content',
            [
                'label' => __( 'BuddyPress', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'buddypress_type',
                [
                    'label'   => __( 'Type', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'member',
                    'options' => [
                        'member'    => __('Member', 'edubin-core'),
                        'group'     => __('Group', 'edubin-core'),
                    ],
                    'label_block'=>true,
                ]
            );

            $this->add_control(
                'content_type',
                [
                    'label'   => __( 'Content Type', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'newest',
                    'options' => [
                        'newest'  => __('Newest', 'edubin-core'),
                        'popular' => __('Popular', 'edubin-core'),
                        'active'  => __('Active', 'edubin-core'),
                    ],
                    'separator' =>'before',
                ]
            );

            $this->add_responsive_control(
                'max_items',
                [
                    'label'   => esc_html__( 'Max Item', 'edubin-core' ),
                    'type'    => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 5,
                    ],
                    'range' => [
                        'px' => [
                            'min'  => 1,
                            'max'  => 20,
                            'step' => 1,
                        ],
                    ],
                ]
            );

            $this->add_control(
                'avatar_size',
                [
                    'label'     => __( 'Size', 'edubin-core' ),
                    'type'      => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 80,
                    ],
                    'range' => [
                        'px' => [
                            'min'  => 5,
                            'max'  => 200,
                            'step' => 1,
                        ],
                    ],
                ]
            );

            $this->add_control(
                'show_content_meta',
                [
                    'label' => __( 'Show Meta Info', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'no',
                    'separator' =>'before',
                ]
            );

            $this->add_control(
                'show_active_time',
                [
                    'label' => __( 'Show Active Time', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                    'condition'=>[
                        'show_content_meta'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'show_register_time',
                [
                    'label' => __( 'Show Register Time', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                    'condition'=>[
                        'show_content_meta'=>'yes',
                    ]
                ]
            );

            $this->add_control(
                'show_friend_count',
                [
                    'label' => __( 'Show Friend Count', 'edubin-core' ),
                    'type' => Controls_Manager::SWITCHER,
                    'label_on' => __( 'Show', 'edubin-core' ),
                    'label_off' => __( 'Hide', 'edubin-core' ),
                    'return_value' => 'yes',
                    'default' => 'yes',
                    'condition'=>[
                        'show_content_meta'=>'yes',
                    ]
                ]
            );
            
        $this->end_controls_section();

        // Style tab section
        $this->start_controls_section(
            'buddypress_style_section',
            [
                'label' => __( 'Area', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'area_button_border',
                    'label' => __( 'Border', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin_buddypress_single',
                ]
            );

            $this->add_responsive_control(
                'area_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .edubin_buddypress_single' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'area_background',
                    'label' => __( 'Background', 'edubin-core' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edubin_buddypress_single',
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'area_box_shadow',
                    'label' => __( 'Box Shadow', 'edubin-core' ),
                    'selector' => '{{WRAPPER}} .edubin_buddypress_single',
                ]
            );

            $this->add_responsive_control(
                'area_padding',
                [
                    'label' => __( 'Padding', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin_buddypress_single' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );

            $this->add_responsive_control(
                'area_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .edubin_buddypress_single' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );

            $this->add_responsive_control(
                'area_align',
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
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .edubin_buddypress_single' => 'text-align: {{VALUE}};',
                        '{{WRAPPER}} .edubin_buddy_press_area' => 'text-align: {{VALUE}};',
                    ],
                ]
            );
            
        $this->end_controls_section();

        // Title style tab
        $this->start_controls_section(
            'buddypress_title_style',
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
                        'buddypress_title_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'=>'#000000',
                            'selectors' => [
                                '{{WRAPPER}} .buddypress_title a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'buddypress_title_typography',
                            'label' => __( 'Typography', 'edubin-core' ),
                            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                            'selector' => '{{WRAPPER}} .buddypress_title a',
                        ]
                    );

                    $this->add_responsive_control(
                        'buddypress_title_margin',
                        [
                            'label' => __( 'Margin', 'edubin-core' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .buddypress_title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
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
                        'buddypress_title_hover_color',
                        [
                            'label'     => __( 'Color', 'edubin-core' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .buddypress_title a:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

            $this->end_controls_tabs();

        $this->end_controls_section();


        // Meta Info style tab
        $this->start_controls_section(
            'buddypress_meta_info_style',
            [
                'label' => __( 'Meta Info', 'edubin-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'buddypress_meta_color',
                [
                    'label'     => __( 'Color', 'edubin-core' ),
                    'type'      => Controls_Manager::COLOR,
                    'default'=>'#000000',
                    'selectors' => [
                        '{{WRAPPER}} .buddy_press_meta span' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'buddypress_meta_typography',
                    'label' => __( 'Typography', 'edubin-core' ),
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .buddy_press_meta span',
                ]
            );

            $this->add_responsive_control(
                'buddypress_meta_margin',
                [
                    'label' => __( 'Margin', 'edubin-core' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .buddy_press_meta span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );

        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();

        // Member Query Args.
        if( $settings['buddypress_type'] == 'group' ){
            $groups_args = array(
                'user_id'  => 0,
                'type'     => esc_attr( $settings['content_type'] ),
                'per_page' => esc_attr( $settings['max_items']['size'] ),
                'max'      => esc_attr( $settings['max_items']['size'] ),
            );
        }else{
            $members_args = array(
                'user_id'         => 0,
                'type'            => esc_attr__( $settings['content_type'] ),
                'per_page'        => esc_attr__( $settings['max_items']['size'] ),
                'max'             => esc_attr__( $settings['max_items']['size'] ),
                'populate_extras' => true,
                'search_terms'    => false,
            );
            $avatar = array(
                'type'   => 'full',
                'width'  => esc_attr( $settings['avatar_size']['size'] ),
            );
        }

        ?>

        <div class="edubin_buddy_press_area">

            <?php if( $settings['buddypress_type'] == 'member' ): if ( bp_has_members( $members_args ) ): while ( bp_members() ) : bp_the_member(); ?>
                <div class="edubin_buddypress_single">
                    <div class="buddypress_thumbnails">
                        <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( $avatar ); ?></a>
                    </div>
                    <div class="buddypress_content">
                        <div class="buddypress_title">
                            <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
                            <?php if( $settings['show_content_meta'] == 'yes' ): ?>
                                <div class="buddy_press_meta">
                                    <?php
                                        if( $settings['show_active_time'] == 'yes' ){
                                            echo '<span class="buddy_press_active_time">'.esc_html__( bp_get_member_last_active() ).'</span>';
                                        }
                                        if( $settings['show_register_time'] == 'yes' ){
                                            echo '<span class="buddy_press_register_time">'.esc_html__( bp_get_member_registered() ).'</span>';
                                        }
                                        if( $settings['show_friend_count'] == 'yes' ){
                                            echo '<span class="buddy_press_friend_count">'.esc_html__( bp_get_member_total_friend_count() ).'</span>';
                                        }
                                    ?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; endif;?>

            <?php if( $settings['buddypress_type'] == 'group' ): if ( bp_is_active( 'groups' ) && bp_has_groups( $groups_args ) ) :
            while ( bp_groups() ) : bp_the_group(); ?>
                <div class="edubin_buddypress_single">
                    <div class="buddypress_thumbnails">
                        <a href="<?php bp_group_permalink() ?>"><?php bp_group_avatar_thumb() ?></a>
                    </div>
                    <div class="buddypress_content">
                        <div class="buddypress_title">
                            <?php bp_group_link(); ?>
                            <?php if( $settings['show_content_meta'] == 'yes' ): ?>
                                <div class="buddy_press_meta">
                                    <?php
                                        if( $settings['show_active_time'] == 'yes' ){
                                            echo '<span class="buddy_press_active_time">'.esc_html__( bp_get_group_last_active() ).'</span>';
                                        }
                                        if( $settings['show_register_time'] == 'yes' ){
                                            echo '<span class="buddy_press_register_time">'.esc_html__( bp_get_group_date_created() ).'</span>';
                                        }
                                        if( $settings['show_friend_count'] == 'yes' ){
                                            echo '<span class="buddy_press_friend_count">'.esc_html__( bp_get_group_member_count() ).'</span>';
                                        }
                                    ?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; endif;?>

        </div>

        <?php

    }

}

