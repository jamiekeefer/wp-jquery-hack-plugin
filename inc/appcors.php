<?php
	
if ( ! is_admin() ) {
	add_action( 'send_headers', 'app_cors_header' );
}
function app_cors_header() {
	
	if( class_exists( 'AppPresser' ) && AppPresser::is_min_ver( 2 ) ) {

		header("Access-Control-Allow-Origin: *");
		
		// The lines below may need to be uncommented if there are still issues
		//header("X-Frame-Options: GOFORIT");
		header("Content-Security-Policy: frame-src *");
		// If you have issues displaying the checkout page in AppWoo, you may need to uncomment this line.
		// remove_action( 'template_redirect', 'wc_send_frame_options_header' );
	}
}