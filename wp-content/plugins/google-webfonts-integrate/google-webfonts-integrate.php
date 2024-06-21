<?php
/*
Plugin Name: Google WebFonts Integrate
Plugin URI: http://wordpress.org/extend/plugins/google-webfonts-integrate/
Description: This plugin integrate Google WebFonts v2 to your website
Version: 1.5
Domain Path: /languages
Text Domain: gwi
Author: Serkan Algur
Author URI: http://www.kaisercrazy.com
License: GNU
*/

function multilingual_gwi() {
// Internationalization, first(!)
load_plugin_textdomain('gwi', false, dirname(plugin_basename( __FILE__ )).'/languages');
// Other init stuff, be sure to it after load_plugins_textdomain if it involves translated text(!)
}
add_action('init','multilingual_gwi');

//Defaults
$gwiopts = array(
	'use_gwi_fonts' => 'yes',
	'gwi_font' => 'Ubuntu',
	'gwi_script' => 'latin,latin-ext',
	'use_style_where' => '#content,.extry,',
	'gwi_sl1' => 'Ubuntu',
	'use_style_where2' => '#content,.entry-title',
	'gwi_prvw' => 'Hi Everyone',
	'gwi_sub' => 'latin,latin-extend',
	'gwi_my_font' => 'no',
	'gwi_own' => '',
	'gwi_own_font' => ''
);
//add 2 db
add_option('OPTIONS', $gwiopts);
//reload
$gwiopts = get_option('OPTIONS');


//Add Css into Header (Header Text Options (added with v0.2.6))
add_action('wp_head', 'use_gwi');
function use_gwi(){
$font1 = get_option('gwi_font');
$font2 = str_replace("+", " ", $font1);
$font3 = get_option('gwi_sl1');
$font4 = str_replace("+", " ", $font3);
$subss = get_option('gwi_sub');
$script1 ="latin,";
$where1 = get_option('use_style_where');
$where2 = get_option('use_style_where2');
$gwi_my_font = get_option('gwi_my_font');
$gwi_own = get_option('gwi_own');
$gwi_own_font = get_option ('gwi_own_font');

if ($gwi_my_font == 'yes') {
	    echo "$gwi_own" . "\n";
	    echo "<style>$where1 {font-family:$gwi_own_font}</style>" . "\n";
   }
    else {
	    echo "<link href='http://fonts.googleapis.com/css?family=$font1|$font3&subset=$script1$subss&v2' rel='stylesheet' type='text/css'>" . "\n";
            echo "<style>$where1 {font-family:$font2}</style>" . "\n";
            echo "<style>$where2 {font-family:$font4}</style>" . "\n";
         }
}

//Admin Area
include 'admin-area.php';


//Show Plugin Version into Admin Page
function plugin1_get_version() {
	if ( ! function_exists( 'get_plugins' ) )
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	$plugin_folder = get_plugins( '/' . plugin_basename( dirname( __FILE__ ) ) );
	$plugin_file = basename( ( __FILE__ ) );
	return $plugin_folder[$plugin_file]['Version'];
}
?>
