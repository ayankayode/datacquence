<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Bbpress extends Widget_Base {

    public function get_name() {
        return 'edubin-bbpress-addons';
    }
    
    public function get_title() {
        return __( 'Bbpress', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-form-horizontal';
    }
    public function get_categories() {
        return [ 'edubin-core' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'bbpress_content',
            [
                'label' => __( 'Bbpress', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'bbpress_layout',
                [
                    'label'   => __( 'Layout', 'edubin-core' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'forum-index',
                    'options' => [
                        'forum-index'  => __('Forum Index', 'edubin-core'),
                        'forum-form'   => __('Forum Form', 'edubin-core'),
                        'single-forum' => __('Single Forum', 'edubin-core'),
                        'topic-index'  => __('Topic Index', 'edubin-core'),
                        'topic-form'   => __('Topic Form', 'edubin-core'),
                        'single-topic' => __('Single Topic', 'edubin-core'),
                        'reply-form'   => __('Reply Form', 'edubin-core'),
                        'single-reply' => __('Single Reply', 'edubin-core'),
                        'topic-tags'   => __('Topic Tags', 'edubin-core'),
                        'single-tag'   => __('Single Tag', 'edubin-core'),
                        'single-view'  => __('Single View', 'edubin-core'),
                        'stats'        => __('Stats', 'edubin-core'),
                    ],
                ]
            );

            $this->add_control(
                'bbpress_id',
                [
                    'label'       => __( 'ID', 'edubin-core' ),
                    'type'        => Controls_Manager::TEXT,
                    'condition'   => [
                        'bbpress_layout' => array( 'single-forum', 'single-topic', 'single-reply', 'single-tag', 'single-view' )
                    ],
                ]
            );
            
        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();

        $layout = array( 'single-forum', 'single-topic', 'single-reply', 'single-tag', 'single-view' );
        $bbpress_attributes = array();

        if ( isset( $settings['bbpress_id'] ) ) {
            $bbpress_attributes = array( ' id' => $settings['bbpress_id'] );
        } elseif ( $settings['bbpress_layout'] == 'topic-form' && isset( $settings['bbpress_id'] )) {
            $bbpress_attributes = array( ' forum_id' => $settings['bbpress_id'] );
        }
        $this->add_render_attribute( 'shortcode', $bbpress_attributes );

        echo do_shortcode( sprintf( '[bbp-'.$settings['bbpress_layout'].'%s]', $this->get_render_attribute_string( 'shortcode' ) ));

    }

}

