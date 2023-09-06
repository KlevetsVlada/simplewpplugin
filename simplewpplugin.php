<?php
/*
Plugin Name:  Simple Plugin for WP
Plugin URI:   https://www.test.com
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area.
Version:      1.0.0
Author:       Andrii Ozhytchuk
Author URI:   https://www.test.com
*/

if ( ! is_admin() ) {
	add_action(
		'init',
		function () {
			echo 'hello';
			die();
		}
	);
}


