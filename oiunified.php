<?php
/*
  Plugin Name: OI Unified
  Version: 2.0.2
  Plugin URI: https://www.onlineimage.com
  Author: The Dev Team
  Author URI: https://www.onlineimage.com/
  Description: Plugin that requires for activation
 */
 // 2.0.1 Added millcreek ut to zipcode database 
 // 2.0.2 Version update check 
 if( ! class_exists( 'OIUnified_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new OIUnified_Updater( __FILE__ );
$updater->set_username( 'OnlineImage' );
$updater->set_repository( 'php55-encrypted' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize(); 
 // Block direct requests
if ( !defined('ABSPATH') )
    die('-1');
require_once dirname ( __FILE__ ) . '/license_enc.php';	