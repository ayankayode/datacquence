<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Events extends Widget_Base {

    public function get_name() {
        return 'edubin-events';
    }
    
    public function get_title() {
        return __( 'The Events Calender', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-archive-posts';
    }

    public function get_categories() {
        return [ 'edubin-core' ];
    }

    public function get_script_depends() {
        return [''];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'section_events',
            [
                'label' => __( 'Events', 'edubin-core' ),
            ]
        );
        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Number of Event', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
                'min' => 1,
                'max' => 15,
                'step' => 1,
            ]
        );
        $this->add_control(
            'order',
            [
                'label' => __('Order', 'edubin-core'),
                'type' => Controls_Manager::SELECT,
                'default' => 'ASC',
                'options' => [
                    'ASC' => __('Ascending', 'edubin-core'),
                    'DESC' => __('Descending', 'edubin-core'),
                ],
            ]
        );
        $this->add_control(
            'orderby',
            [
                'label' => __('Order By', 'edubin-core'),
                'type' => Controls_Manager::SELECT,
                'options' => array(
                    'none' => __('No order', 'edubin-core'),
                    'ID' => __('Post ID', 'edubin-core'),
                    'author' => __('Author', 'edubin-core'),
                    'title' => __('Title', 'edubin-core'),
                    'date' => __('Published date', 'edubin-core'),
                    'modified' => __('Modified date', 'edubin-core'),
                    'parent' => __('By parent', 'edubin-core'),
                    'rand' => __('Random order', 'edubin-core'),
                    'comment_count' => __('Comment count', 'edubin-core'),
                    'menu_order' => __('Menu order', 'edubin-core'),
                    'post__in' => __('By include order', 'edubin-core'),
                ),
                'default' => 'date',
            ]
        );
        $this->add_control(
            'events_heading',
            [
                'label'   => __( 'Events Heading', 'edubin-core' ),
                'type'    => Controls_Manager::TEXT,
                'default' => 'Upcoming events',
                'placeholder' => __('Upcoming events','edubin-core'),
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_title',
            [
                'label' => __( 'Title', 'edubin-core' ),
            ]
        );
        $this->add_control(
            'title_word',
            [
                'label' => __('Number of Title Word', 'edubin-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 4,
                'min' => 1,
                'max' => 25,
                'step' => 1,
            ]
        );
        $this->end_controls_section();  
              
        $this->start_controls_section(
            'section_meta',
            [
                'label' => __( 'Meta', 'edubin-core' ),
            ]
        );
        $this->add_control(
            'show_event_date',
            [
                'label' => __( 'Event Date', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __( 'Show', 'edubin-core' ),
                'label_off' => __( 'Hide', 'edubin-core' ),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'show_event_time',
            [
                'label' => __( 'Event Time', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __( 'Show', 'edubin-core' ),
                'label_off' => __( 'Hide', 'edubin-core' ),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'show_event_vanue',
            [
                'label' => __( 'Event Vanue', 'edubin-core' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __( 'Show', 'edubin-core' ),
                'label_off' => __( 'Hide', 'edubin-core' ),
                'return_value' => 'yes',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_event_style',
            [
                'label' => __( 'Events', 'edubin-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'headign_color',
            [
                'label'     => __( 'Heading', 'edubin-core' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .edubin-event .event-title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'eading_typography',
                'selector' => '{{WRAPPER}} .edubin-event .event-title h3',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            ]
        );
        $this->add_responsive_control(
            'heading_padding',
            [
                'label' => __( 'Heading Padding', 'edubin-core' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-event .event-title h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'background_color',
            [
                'label'     => __( 'Background', 'edubin-core' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .edubin-event' => 'background-color: {{VALUE}};',
                ],
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'body_padding',
            [
                'label' => __( 'Padding', 'edubin-core' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-event' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'body_box_shadow',
                'selector' => '{{WRAPPER}} .edubin-event',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => __( 'Title', 'edubin-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs( 'tabs_title_style' );

        $this->start_controls_tab(
            'tab_title_normal',
            [
                'label' => __( 'Normal', 'edubin-core' ),
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => __( 'Title Color', 'edubin-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .edubin-event ul li .edubin-single-event a h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();      

        $this->start_controls_tab(
            'tab_title_hover',
            [
                'label' => __( 'Hover', 'edubin-core' ),
            ]
        );

        $this->add_control(
            'title_hover_color',
            [
                'label'     => __( 'Title Hover Color', 'edubin-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .edubin-event ul li .edubin-single-event a:hover h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .edubin-event ul li .edubin-single-event a h4',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            ]
        );
        $this->add_responsive_control(
            'title_padding',
            [
                'label' => __( 'Title Padding', 'edubin-core' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .edubin-event ul li .edubin-single-event a h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_meta',
            [
                'label' => __( 'Meta', 'edubin-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'meta_color',
            [
                'label'     => __( 'Color', 'edubin-core' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .edubin-event ul li .edubin-single-event span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'meta_typography',
                'selector' => '{{WRAPPER}} .edubin-event ul li .edubin-single-event span',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            ]
        );
        $this->add_control(
            'meta_icon_color',
            [
                'label'     => __( 'Icon Color', 'edubin-core' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .edubin-event ul li .edubin-single-event span i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

    } // End options

    protected function render( $instance = [] ) {
        
            $settings = $this->get_settings();
            
            $events_heading = $settings['events_heading'];
            $number_of_post = $settings['posts_per_page'];
            $order = $settings['order'];
            $orderby = $settings['orderby'];
            $title_word = $settings['title_word'];
            $show_event_date = $settings['show_event_date'];
            $show_event_time = $settings['show_event_time'];
            $show_event_vanue = $settings['show_event_vanue'];

            $args = array(
                'post_type' => 'tribe_events',
                'posts_per_page' => $number_of_post,
                'orderby' => $orderby,
                'order' => $order,
            ); 
        ?>

        <div id="edubin-event" class="edubin-event mt-50">
            <?php if(!empty($events_heading)) : ?>
            <div class="event-title">
                <h3><?php echo $events_heading; ?></h3>
            </div> <!-- event heading -->
            <?php endif; ?>
            <ul>
        <?php

        $query = new \WP_Query($args);

        if($query->have_posts() and class_exists( 'Tribe__Events__Main' ) ):
            while($query->have_posts()):
                $query->the_post(); ?>
                 <?php 
                    $event_id = get_the_ID();
                    $start_date = tribe_get_start_time ( $event_id, 'd. F');
                    $start_date = tribe_get_start_date( null, false );
                    $end_date = tribe_get_end_time ( $event_id, 'd. F');

                    $start_time = tribe_get_start_date( null, false, 'g:i A' );
                    $end_time = tribe_get_end_date( null, false, 'g:i A' );
                    $event_vanue = tribe_get_venue();

                ?>
                <li>
                    <div class="edubin-single-event">

                        <?php if($show_event_date == 'yes') : ?>
                        <?php if(!empty($start_date || $end_date)) : ?>
                        <span><i class="fa fa-calendar"></i> <?php echo $start_date; ?> <?php if($end_date) : ?> <?php _e('to', 'edubin-core'); ?> <?php echo $end_date; ?> <?php endif; ?></span>
                        <?php endif; ?>
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>"><h4><?php echo wp_trim_words(get_the_title(), $title_word, ''); ?></h4></a>

                        <?php if(!empty($show_event_time == 'yes')) : ?>
                        <span><i class="fa fa-clock-o"></i> <?php echo $start_time; ?> <?php if($end_time) : ?> <?php _e('to', 'edubin-core'); ?> <?php echo $end_time; ?> <?php endif; ?></span>
                        <?php endif; ?>

                        <?php if(!empty($event_vanue and $show_event_vanue == 'yes')) : ?>
                            <span><i class="fa fa-map-marker"></i> <?php echo $event_vanue; ?></span>
                        <?php endif; ?>
                    </div>
                </li>
            <?php
                endwhile; wp_reset_postdata();
              else: ?>
                <p> <?php _e( 'Sorry no post found', 'edubin-core' ); ?> </p>
           <?php endif; ?>
            </ul> 
        </div>

<?php

    }

}

