<?php
/**
 * Plugin Name: Coltman Get Contact
 * Plugin URI: https://github.com/coltman/coltman-get-contact
 * Description: Coltman Get Contact
 * Version: 1.0.0
 * Author: Juan Carlos Avila Pérez
 * Author URI: https://github.com/juanvs23
 * Text Domain: coltman-get-contact
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//constants
define( 'COLTMAN_GET_CONTACT_VERSION', '1.0.0' );
define( 'COLTMAN_GET_CONTACT_PATH', __DIR__ );
define( 'COLTMAN_GET_CONTACT_TEMPLATE', __DIR__ .'/templates' );
define( 'COLTMAN_GET_CONTACT_URL', plugin_dir_url( __FILE__ ) );


require COLTMAN_GET_CONTACT_PATH . '/vendor/autoload.php';
require COLTMAN_GET_CONTACT_PATH . '/includes/includes.php';