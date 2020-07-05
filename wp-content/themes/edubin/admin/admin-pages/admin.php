<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
global $pagenow;
function edubin_welcome_page(){
    require_once 'edubin-welcome.php';
}

function edubin_admin_menu(){
    if ( current_user_can( 'edit_theme_options' ) ) {
        add_menu_page( 'Edubin', 'Edubin', 'administrator', 'edubin-admin-menu', 'edubin_welcome_page', 'data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAMAAABl5a5YAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACVVBMVEX/xgD/zgD/ywD6yRSkon+cqLSFodeXqMSZpK+GlqiVpLMAEzudqriWpLN9j6KbqbecqriYprWksb6ImalJY34AAi12iZ2Lm6yPnq6Gl6h0iJuxvMhedIyeq7l8jqGElaeDlKaAkaSns8HGzdaVo7N5jJ+msr+rt8OKmqt7jqF7jaCAkqSMnKx1iZx5jJ56jaCHmKl/kaSKmqqJmqqCk6WBkqWUo7OOna6SoLGMm62frbqOnq6TorKdqrl4ip6Gl6mPn6+cqbierLr/xgD/xgD/xgD/xgD/xgD/xgD/xgD/xgD/xgD/xgD/xgD/xgD/xgD/xgD/zwD/1wD/xAD/yQD/4wDarwyNfBpOVCtVWCmmjhVUWjcAFldYebuiuO1QaKEAD0cAIk6zvcbt9v+oueC7yOOQm60AEToFKEyvuMS4wsyrt8SjsL2RoLCyvsiWorIAIUawu8Z+j6KXprXO1t2ns7+suMSns7+6xM6ksL3h5elwg5h4i5/l6OytuMWjr7y2wMu9xs+wu8edqridq7mdq7mir72WpbTq7fDU2uCcqbe7xM64wc2irrzb4OXp6++NnK2JmqvT2eDm6e3u8PPy9Pby8/bw8vTp7O/c4eaRoLCdq7nq7PCmsr+5w83J0diHmKmbqbfu8fP2+PmqtcL/xgD/wwD/3AD/2gD/0AD/xwD/2QDpxgeTgBbLpwPyvwD/ywD3wwDPqAKZhRO4yPDS2uT49dz//9/8+df589ja4Oe3x+61yvr+/f3////s7/H7+/zs7vH2+Pn+/v79/f38/P0AAADNV650AAAApXRSTlMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAO6Dy9aZAJoPd4Ygrdfrsbmfm+JQd6vQIW18i/ROfsEf3YnBCqcZOi1w7BmtQBFEhOllEdGNTQ94CCONPQomST0Bsa08y7dUlAQIgzvM8Isfh3fn53uDQKkLjTpenBj7u+1CRY1XWAAAAAWJLR0TG+gJ6zQAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+MFEQIyLzlkwUAAAAEkSURBVBjTY2AAAWcXVzd3DwYo8PTyXgoGPr5+QK5/wFIEWBYYxBAcsnz5ipWrli1bunL1itA1YQyMTOERa9etX7ph46bNkVHRMQzMLLFxW7Zu275j567de+ITEhlY2ZL27tu3LzklFUimpWcwsHNk7s/Kzsnl5Mo7sC+fu4CBh7fwYBEfv4CgkHDxoRIRUaBA6b4yMXEBCUmp8n0V0jIMsryV+6qq5eQVFGtq99UpKTPIqtQf3tegKicn17jvSJOaOoO8RvPRfftaNLVagba0aesw6LZ37NvX2dXd09u3b1//BD0GuYmT9u2bPGXqtOkz9u2bOUufQcHAcPacfWDQMdfI2ITBVNzM3GIeiD9/gaWVtTZQwMbW1m7hosVL7B0cncy1AbHkd8eQeLjjAAAAAElFTkSuQmCC', 4 );
        add_submenu_page( 'edubin-admin-menu', 'edubin', esc_html__('Welcome','edubin'), 'administrator', 'edubin-admin-menu', 'edubin_welcome_page' );
        add_submenu_page('edubin-admin-menu', '', 'Theme Options', 'manage_options', 'customize.php' );
        if (class_exists('OCDI_Plugin')):
           add_submenu_page( 'edubin-admin-menu', esc_html__( 'Demo Import', 'edubin' ), esc_html__( 'Demo Import', 'edubin' ), 'administrator', 'demo_install', 'demo_install_function' );
       endif;


   }
}

add_action( 'admin_menu', 'edubin_admin_menu' );

function demo_install_function(){
    ?>
    <script>location.href='<?php echo esc_url(admin_url().'themes.php?page=pt-one-click-demo-import');?>';</script>
    <?php
}

if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {

	wp_redirect(admin_url("admin.php?page=edubin-admin-menu"));
	
}