<?php
/*
  Plugin Name: OI Unified
  Version: 2.0.5
  Plugin URI: https://www.onlineimage.com
  Author: The Dev Team
  Author URI: https://www.onlineimage.com/
  Description: Plugin that requires for activation
 */
 // 2.0.1 Added millcreek ut to zipcode database 
 // 2.0.2 Version update check 
 // 2.0.3 See readme.txt for version updates

require_once( 'updater.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( __FILE__, 'OnlineImage', "php55-encrypted" );
}

 // Block direct requests
if ( !defined('ABSPATH') )
    die('-1');
require_once dirname ( __FILE__ ) . '/license_enc.php';	