<?php
/*
Plugin Name: Private Messages Add-on for UserPro
Plugin URI: http://codecanyon.net/user/DeluxeThemes/portfolio?ref=DeluxeThemes
Description: Allow users to send a message to each other, view/manage messages, and block users.
Version: 4.0
Author: Deluxe Themes
Author URI: http://codecanyon.net/user/DeluxeThemes/portfolio?ref=DeluxeThemes
*/

define('userpro_msg_url',plugin_dir_url(__FILE__ ));
define('userpro_msg_path',plugin_dir_path(__FILE__ ));
require_once userpro_msg_path . 'functions/shortcode-pop-message.php';

	/* init */
	function userpro_msg_init() {
		load_plugin_textdomain('userpro-msg', false, dirname(plugin_basename(__FILE__)) . '/languages');
		

	}
	add_action('init', 'userpro_msg_init');
	
	if (!function_exists('autolink')) {
		require_once userpro_msg_path . 'lib/autolink.php';
	}

	/* functions */
	foreach (glob(userpro_msg_path . 'functions/*.php') as $filename) { require_once $filename; }

	/* administration */
	if (is_admin()){
		foreach (glob(userpro_msg_path . 'admin/*.php') as $filename) { include $filename; }
	
		$envato_code_display = userpro_msg_get_option('userpro_msg_envato_code');
		if($envato_code_display != false){
		new userpro_msg_updater($envato_code_display, plugin_basename(__FILE__) );
	}
	
	}

