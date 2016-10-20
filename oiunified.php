<?php
/*
  Plugin Name: OI Unified
  Version: 2.0.9
  Plugin URI: https://www.onlineimage.com
  Author: The Dev Team
  Author URI: https://www.onlineimage.com/
  Description: Plugin that requires for activation
 */

add_action( 'init', 'activate_au' );
function activate_au()
{
	require_once ( 'updater.php' );
	// this must match the plugin header version number
	$plugin_current_version = '2.0.9';
	$plugin_remote_path = 'http://clientstaging.onlineimagedev.com/update.php';
	$plugin_slug = plugin_basename( __FILE__ );
	new WP_AutoUpdate ( $plugin_current_version, $plugin_remote_path, $plugin_slug );
}

 // Block direct requests
if ( !defined('ABSPATH') )
    die('-1');
require_once dirname ( __FILE__ ) . '/license_enc.php';	