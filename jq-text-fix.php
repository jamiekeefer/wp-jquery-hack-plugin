<?php
/*
Plugin Name: iOS-Text-Fix
Plugin URI: http://KeeferMedia.com
Description: clear input fields on Focus to address Cordova iOS keyboard issue
Text Domain: iOS-text-fix
Domain Path: /languages
Version: 0.1
Author: Jamie Keefer
Author URI: http://keefermedia.com
License: GPLv2
*/

/*
 * Enqueue base scripts and styles
 */
function jq_text_fix_scripts() {
	
	//enqueue JS
    wp_enqueue_script( 'jqtextfixjs', plugins_url( '/jq-text-fix/js/jq-text-fix.js', array(), null, true ));
	
}
add_action( 'wp_enqueue_scripts', 'jq_text_fix_scripts' );

