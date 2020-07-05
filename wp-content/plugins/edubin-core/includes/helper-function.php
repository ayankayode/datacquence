<?php

/*
 * Elementor category
 */
function edubin_elementor_init(){
    \Elementor\Plugin::instance()->elements_manager->add_category(
        'edubin-core',
        [
            'title'  => 'Edubin Addons',
            'icon' => 'font'
        ],
        1
    );
}
add_action('elementor/init','edubin_elementor_init');

/*
 * Plugisn Options value
 * return on/off
 */
function edubin_core_get_option( $option, $section, $default = '' ){

    $options = get_option( $section );
    if ( isset( $options[$option] ) ) {
        return $options[$option];
    }
    return $default;
}

/*
 * Elementor Templates List
 * return array
 */
function edubin_elementor_template() {
    $templates = \Elementor\Plugin::instance()->templates_manager->get_source( 'local' )->get_items();
    $types = array();
    if ( empty( $templates ) ) {
        $template_lists = [ '0' => __( 'Do not Saved Templates.', 'edubin-core' ) ];
    } else {
        $template_lists = [ '0' => __( 'Select Template', 'edubin-core' ) ];
        foreach ( $templates as $template ) {
            $template_lists[ $template['template_id'] ] = $template['title'] . ' (' . $template['type'] . ')';
        }
    }
    return $template_lists;
}

/*
 * Sidebar Widgets List
 * return array
 */
function edubin_sidebar_options() {
    global $wp_registered_sidebars;
    $sidebar_options = array();

    if ( ! $wp_registered_sidebars ) {
        $sidebar_options['0'] = __( 'No sidebars were found', 'edubin-core' );
    } else {
        $sidebar_options['0'] = __( 'Select Sidebar', 'edubin-core' );
        foreach ( $wp_registered_sidebars as $sidebar_id => $sidebar ) {
            $sidebar_options[ $sidebar_id ] = $sidebar['name'];
        }
    }
    return $sidebar_options;
}

/*
 * Get Taxonomy
 * return array
 */
function edubin_get_taxonomies( $edubin_texonomy = 'category' ){
    $terms = get_terms( array(
        'taxonomy' => $edubin_texonomy,
        'hide_empty' => true,
    ));
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
        foreach ( $terms as $term ) {
            $options[ $term->slug ] = $term->name;
        }
        return $options;
    }
}

/*
 * Get Post Type
 * return array
 */
function edubin_get_post_types( $args = [] ) {
   
    $post_type_args = [
        'show_in_nav_menus' => true,
    ];
    if ( ! empty( $args['post_type'] ) ) {
        $post_type_args['name'] = $args['post_type'];
    }
    $_post_types = get_post_types( $post_type_args , 'objects' );

    $post_types  = [];
    foreach ( $_post_types as $post_type => $object ) {
        $post_types[ $post_type ] = $object->label;
    }
    return $post_types;
}

/*
 * HTML Tag list
 * return array
 */
function edubin_html_tag_lists() {
    $html_tag_list = [
        'h1'   => __( 'H1', 'edubin-core' ),
        'h2'   => __( 'H2', 'edubin-core' ),
        'h3'   => __( 'H3', 'edubin-core' ),
        'h4'   => __( 'H4', 'edubin-core' ),
        'h5'   => __( 'H5', 'edubin-core' ),
        'h6'   => __( 'H6', 'edubin-core' ),
        'p'    => __( 'p', 'edubin-core' ),
        'div'  => __( 'div', 'edubin-core' ),
        'span' => __( 'span', 'edubin-core' ),
    ];
    return $html_tag_list;
}

/*
 * Contact form list
 * return array
 */
function edubin_contact_form_seven(){
    $countactform = array();
    $edubin_forms_args = array( 'posts_per_page' => -1, 'post_type'=> 'wpcf7_contact_form' );
    $edubin_forms = get_posts( $edubin_forms_args );

    if( $edubin_forms ){
        foreach ( $edubin_forms as $edubin_form ){
            $countactform[$edubin_form->ID] = $edubin_form->post_title;
        }
    }else{
        $countactform[ esc_html__( 'No contact form found', 'edubin-core' ) ] = 0;
    }
    return $countactform;
}


/*
 * All Post Name
 * return array
 */
function edubin_post_name ( $post_type = 'post' ){
    $options = array();
    $options = ['0' => esc_html__( 'None', 'edubin-core' )];
    $wh_post = array( 'posts_per_page' => -1, 'post_type'=> $post_type );
    $wh_post_terms = get_posts( $wh_post );
    if ( ! empty( $wh_post_terms ) && ! is_wp_error( $wh_post_terms ) ){
        foreach ( $wh_post_terms as $term ) {
            $options[ $term->ID ] = $term->post_title;
        }
        return $options;
    }
}

/*
 * Caldera Form
 * @return array
 */
function edubin_caldera_forms_options() {
    if ( class_exists( 'Caldera_Forms' ) ) {
        $caldera_forms = Caldera_Forms_Forms::get_forms( true, true );
        $form_options  = ['0' => esc_html__( 'Select Form', 'edubin-core' )];
        $form          = array();
        if ( ! empty( $caldera_forms ) && ! is_wp_error( $caldera_forms ) ) {
            foreach ( $caldera_forms as $form ) {
                if ( isset($form['ID']) and isset($form['name'])) {
                    $form_options[$form['ID']] = $form['name'];
                }   
            }
        }
    } else {
        $form_options = ['0' => esc_html__( 'Form Not Found!', 'edubin-core' ) ];
    }
    return $form_options;
}

/*
 * Check user Login and call this function
 */
global $user;
if ( empty( $user->ID ) ) {
    add_action('elementor/init', 'edubin_ajax_login_init' );
}

/*
 * wp_ajax_nopriv Function
 */
function edubin_ajax_login_init() {
    add_action( 'wp_ajax_nopriv_edubin_ajax_login', 'edubin_ajax_login' );
}

/*
 * ajax login
 */
function edubin_ajax_login(){
    check_ajax_referer( 'ajax-login-nonce', 'security' );
    $user_data = array();
    $user_data['user_login'] = !empty( $_POST['username'] ) ? $_POST['username']: "";
    $user_data['user_password'] = !empty( $_POST['password'] ) ? $_POST['password']: "";
    $user_data['remember'] = true;
    $user_signon = wp_signon( $user_data, false );

    if ( is_wp_error($user_signon) ){
        echo json_encode( [ 'loggeauth'=>false, 'message'=> esc_html__('Invalid username or password!', 'edubin-core') ] );
    } else {
        echo json_encode( [ 'loggeauth'=>true, 'message'=> esc_html__('Login successfully, Redirecting...', 'edubin-core') ] );
    }
    die();
}

/*
 * Redirect 404 page select from plugins options
 */
function edubin_redirect_404() {
    $errorpage_id = edubin_core_get_option( 'errorpage','edubin_general_tabs' );
    if ( is_404() && !empty ( $errorpage_id ) ) {
        wp_redirect( esc_url( get_page_link( $errorpage_id ) ) ); die();
    }
}
add_action('template_redirect','edubin_redirect_404');

/*=============================================
Post views
=============================================*/
// function to display number of posts.
function edubinGetPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        esc_html_e('0', 'edubin');
    }
    echo esc_html($count . '');
}
 
// function to count views.
function edubinSetPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


/*=============================================
=  Disable Tribe Select2 on non-tribe admin pages   =
=============================================*/
if (is_admin()) {
    if (!function_exists('edubin_theme_disable_tribe_select2')) {
        function edubin_theme_disable_tribe_select2(){
            $screen = get_current_screen();
            if ('tribe_events' === $screen->id) {
                return;
            }
            $tribe_post_types = array(
                'tribe_events',
                'tribe_venue',
            );
            if (in_array($screen->post_type, $tribe_post_types)) {
                return;
            }
            wp_deregister_script('tribe-select2');
        }
        add_action('admin_enqueue_scripts', 'edubin_theme_disable_tribe_select2', 99);
    }
}

/*=============================================
=  * Get Taxonomy for learnpress lms * return array   =
=============================================*/
if( !function_exists('edubin_learpress_get_taxonomies') ){
    function edubin_learpress_get_taxonomies( $lp_course_category = 'course_category' ){
        $terms = get_terms( array(
            'taxonomy' => $lp_course_category,
            'hide_empty' => false,
        ));
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            foreach ( $terms as $term ) {
                $options[ $term->slug ] = $term->name;
            }
            return $options;
        }
    }
}
/*=============================================
=  * Get Taxonomy for learndash lms * return array   =
=============================================*/
if( !function_exists('edubin_learndash_get_taxonomies') ){

    function edubin_learndash_get_taxonomies( $ld_course_category = 'ld_course_category' ){
        $terms = get_terms( array(
            'taxonomy' => $ld_course_category,
            'hide_empty' => false,
        ));
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            foreach ( $terms as $term ) {
                $options[ $term->slug ] = $term->name;
            }
            return $options;
        }
    }
}
/*=============================================
=  * Get Taxonomy for tutor lms * return array   =
=============================================*/
if( !function_exists('edubin_tutor_get_taxonomies') ){
    function edubin_tutor_get_taxonomies( $tutor_course_category = 'course-category' ){
        $terms = get_terms( array(
            'taxonomy' => $tutor_course_category,
            'hide_empty' => false,
        ));
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            foreach ( $terms as $term ) {
                $options[ $term->slug ] = $term->name;
            }
            return $options;
        }
    }
}
/*=============================================
=  * Get Tag for tutor lms * return array   =
=============================================*/
if( !function_exists('edubin_tutor_get_tag') ){
    function edubin_tutor_get_tag( $tutor_course_tag = 'course-tag' ){
        $terms = get_terms( array(
            'taxonomy' => $tutor_course_tag,
            'hide_empty' => false,
        ));
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            foreach ( $terms as $term ) {
                $options[ $term->slug ] = $term->name;
            }
            return $options;
        }
    }
}