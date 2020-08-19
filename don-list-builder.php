<?php

/*
Plugin Name: Dons List Builder
Plugin URI: https://myseoplugin/plugins/dons-list-builder
Description: The is an email list building plugin for WordPress.  Tutorial by Joel Funk
Version: 0.1.12
Author: Don Svederus
Author URI: https://svederus.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dons-list-builder
*/


// 0.1.12 Setting up WordPress Plugin Headers
// 0.1.13 Building a Custom Shortcode


/* !0. TABLE OF CONTENTS */

/*
	
	1. HOOKS
		1.1 - registers all our custom shortcodes
	
	2. SHORTCODES
		2.1 - dons_register_shortcodes()
		2.2 - dons_form_shortcode()
		
	3. FILTERS
		
	4. EXTERNAL SCRIPTS
		
	5. ACTIONS
		
	6. HELPERS
		
	7. CUSTOM POST TYPES
	
	8. ADMIN PAGES
	
	9. SETTINGS
	
	10. MISCELLANEOUS 

*/




/* !1. HOOKS */

// 1.1
// registers all our custom shortcodes in init
add_action('init', 'dons_register_shortcodes' );



/* !2. SHORTCODES */

// 2.1
// registers all our custom shortcodes
function dons_register_shortcodes(){
	
	add_shortcode('dons_form', 'dons_form_shortcode' );
	
}

// 2.2
// returns a html string for a email capture form
function dons_form_shortcode( $args, $content=""){
	
	// setup our output variable - the form html
	$output = '
	
	<div class="dons">
		<form id="dons_form" name="dons_form" class="dons-form" method="POST">
		
			<p class="dons-input-container">
			
				<label>Your Name </lable>
				<input type="text" name="dons_fname" placeholder="First Name" />
				<input type="text" name="dons_lname" placeholder="Last Name" />
			
			</p>
			
			<p class="dons-input-container">
			
				<label>Email Address </label>
				<input type="email" name="dons_email" placeholder="ex. your@email.com" />
			
			</p>';
			
			// including content in our form html if content is passed into the function
			if( strlen($content) ):
				
				$output .= '<div class="dons-content">'. wpautop($content) .'</div>';
				
			endif;
			
			// completing our form html
			$output .= '<p class="dons-input-container">
			
				<input type="submit" name="dons_submit" value="Sign Me Up!" />
				
			</p>			
		
		</form>
	</div>
	
	';
	
	// return our results/html
	return $output;
	
}


/* !3. FILTERS */




/* !4. EXTERNAL SCRIPTS */




/* !5. ACTIONS */




/* !6. HELPERS */




/* !7. CUSTOM POST TYPES */




/* !8. ADMIN PAGES */




/* !9. SETTINGS */




/* !10. MISCELLANEOUS */
