<?php

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles');
function salient_child_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'));

    if ( is_rtl() )
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
}

/******VIDEO MUTE*******/
add_action('wp_enqueue_scripts', 'videoMute');

function videoMute(){
    wp_enqueue_script('videoMute', get_stylesheet_directory_uri().'/js/videoMute.js', array('jquery'), '1', true);
}

function registerWoocommerceCss(){
    $src = "/css/woocommerce.css";
    $handle = "woocommerceCSS";
    wp_register_script($handle, $src);
    wp_enqueue_style($handle, get_stylesheet_directory_uri().$src, false, false);
}

add_action('admin_head', 'registerWoocommerceCss');

add_action( 'admin_enqueue_scripts', 'woocommerceScript' );

function woocommerceScript() {
    wp_enqueue_script('custom_woo_script',get_stylesheet_directory_uri().'/js/woocommerce.js', array('jquery'), null, true);
}

?>
