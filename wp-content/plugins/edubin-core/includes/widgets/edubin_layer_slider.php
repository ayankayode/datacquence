<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Edubin_Elementor_Widget_Layer_Slider extends Widget_Base {

    public function get_name() {
        return 'edubin-layerslider-addons';
    }
    
    public function get_title() {
        return __( 'LayerSlider', 'edubin-core' );
    }

    public function get_icon() {
        return 'edubin-icon eicon-slideshow';
    }

    public function get_categories() {
        return [ 'edubin-core' ];
    }

    public function edubin_get_layer_slider_list() {
        if(shortcode_exists("layerslider")){
            $output = '';
            $sliders = \LS_Sliders::find(array('limit' => 100));
            foreach($sliders as $item) {
                $name = empty($item['name']) ? 'Unnamed' : htmlspecialchars($item['name']);
                $output[$item['id']] = $name;
            }
            return $output;
        }
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'layer_slider_content',
            [
                'label' => __( 'LayerSlider', 'edubin-core' ),
            ]
        );

            $this->add_control(
                'slider_name',
                [
                    'label'     => esc_html__( 'Select Slider', 'edubin-core' ),
                    'type'      => Controls_Manager::SELECT,
                    'options'   => $this->edubin_get_layer_slider_list(),
                ]
            );

            $this->add_control(
                'first_slide',
                [
                    'label'       => esc_html__( 'First Slide Number', 'edubin-core' ),
                    'type'        => Controls_Manager::NUMBER,
                    'default'     => 1,
                ]
            );
            
        $this->end_controls_section();

    }

    protected function render( $instance = [] ) {

        $settings   = $this->get_settings_for_display();

        $slider_attributes = [
            'id'         => $settings['slider_name'],
            'firstslide' => $settings['first_slide'],
        ];

        $this->add_render_attribute( 'shortcode', $slider_attributes );
        echo do_shortcode( sprintf( '[layerslider %s]', $this->get_render_attribute_string( 'shortcode' ) ) );

    }

}

