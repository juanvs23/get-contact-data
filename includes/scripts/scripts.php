<?php

if (!function_exists('coltman_get_contact_scripts_fn')) {

    function coltman_get_contact_scripts_fn() {
        
        wp_enqueue_script('coltman_get_contact', COLTMAN_GET_CONTACT_URL.'assets/frontend/js/main.js', array('jquery'), COLTMAN_GET_CONTACT_VERSION, true);
        wp_localize_script('coltman_get_contact', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));

        wp_enqueue_style('coltman_get_contact', COLTMAN_GET_CONTACT_URL.'assets/frontend/css/main.css', array(), COLTMAN_GET_CONTACT_VERSION);
        

    };
    add_action('wp_enqueue_scripts', 'coltman_get_contact_scripts_fn');
}