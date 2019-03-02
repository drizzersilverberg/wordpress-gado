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
 */

/* add html block for login header */
add_action('login_header', 'hello_world'); 
function hello_world() {
    echo 'Hello world!';
}

/* add html block for login header */
add_filter('login_headerurl', 'change_header_url');
function change_header_url($url){
    $url = 'https://blog.drizzersilverberg.com';
    return $url;
}

