<?php

/**
 * Plugin Name: Gado
 * Plugin URI: https://blog.drizzersilverberg.com
 * Version: 0.1.0
 * Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 * License: GPLv2 or later
 * Text Domain: gado
 */

/*
 * Login Page Action and Filter Hooks
 *
 * file: wp-login.php
 */

/* add html block for login header */
add_action('login_header', 'hello_world'); 
function hello_world() {
    echo 'Hello world!';
}

/* add html block for login header */
add_filter('login_headerurl', 'gado_login_change_header_url');
function gado_login_change_header_url($url){
    $url = 'https://blog.drizzersilverberg.com';
    return $url;
}

/* load custom stylesheet on login page */
add_action('login_enqueue_scripts', 'gado_login_stylesheet');
function gado_login_stylesheet(){
    // load stylesheet
    wp_enqueue_style('gado-custom-stylesheet', plugin_dir_url(__FILE__) . 'styles/login-styles.css');
}

/* returns a custom login error message */
add_filter('login_errors', 'gado_login_error_message');
function gado_login_error_message(){
    return __('Failed the login? You can\'t be serious...');
}

/* remove login page shake */
add_action('login_head', 'gado_login_remove_shake');
function gado_login_remove_shake(){
    remove_action('login_head', 'wp_shake_js', 12);
}