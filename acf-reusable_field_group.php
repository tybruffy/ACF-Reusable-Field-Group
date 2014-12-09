<?php

/*
Plugin Name: Advanced Custom Fields: Reusable Field Group
Plugin URI: https://github.com/tybruffy/ACF-Reusable-Field-Group
Description: Include an existing ACF Field Group in the template for another Field Group
Version: 1.0.2
Author: Tyler Bruffy
Author URI: https://github.com/tybruffy/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-reusable_field_group', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_reusable_field_group( $version ) {

	include_once('acf-reusable_field_group-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_reusable_field_group');	




// 3. Include field type for ACF4
function register_fields_reusable_field_group() {
	
	include_once('acf-reusable_field_group-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_reusable_field_group');	



	
?>