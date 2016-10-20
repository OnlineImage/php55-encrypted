<?php
/*
  Plugin Name: OI Unified
  Version: 2.0.8
  Plugin URI: https://www.onlineimage.com
  Author: The Dev Team
  Author URI: https://www.onlineimage.com/
  Description: Plugin that requires for activation
 */
 // 2.0.1 Added millcreek ut to zipcode database 
 // 2.0.2 Version update check 
 // 2.0.3 See readme.txt for version updates
// 2.0.8 new updater version
add_action( 'init', 'activate_au' );
function activate_au()
{
	require_once ( 'updater.php' );
	$plugin_current_version = '1.0';
	$plugin_remote_path = 'http://clientstaging.onlineimagedev.com/update.php';
	$plugin_slug = plugin_basename( __FILE__ );
	new WP_AutoUpdate ( $plugin_current_version, $plugin_remote_path, $plugin_slug );
}

 // Block direct requests
if ( !defined('ABSPATH') )
    die('-1');
require_once dirname ( __FILE__ ) . '/license_enc.php';	