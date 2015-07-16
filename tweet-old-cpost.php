<?php
/*
Plugin Name: Tweet Old Custom Post
Plugin URI: http://nytogroup.com/products/wordpress-plugins/tweet-old-custom-post/
Description: Wordpress Plugin that automatically tweets your old posts (including custom posts) in order to get more traffic and keep the old posts alive. It also helps you to promote your content. You can set time and number of tweets to post to drive more traffic. For questions, comments, or feature requests, contact us! <a href="http://nytogroup.com/contact/">NYTO Group</a>.
Author:  Dejan Markovic, NYTO Group
Version: 15.0.1
Author URI: http://www.dejanmarkovic.com/
*/
/*
 Plugin Name: Tweet old post
 Plugin URI: http://www.readythemes.com/tweet-old-post-lite/
 Description: Wordpress plugin that helps you to keeps your old posts alive by tweeting about them and driving more traffic to them from twitter. It also helps you to promote your content. You can set time and no of tweets to post to drive more traffic.For questions, comments, or feature requests, contact me! <a href="http://www.readythemes.com/?r=top">Ionut Neagu</a>.
 Author: ReadyThemes
 Version: 4.0.10
 Author URI: http://www.readythemes.com/
 */
include( 'lib/helpers.php' );
require_once( 'tocp-admin.php' );
require_once( 'tocp-core.php' );
require_once( 'tocp-excludepost.php' );
require_once( 'Include/tocp-oauth.php' );
require_once( 'xml.php' );
require_once( 'Include/tocp-debug.php' );
//update_option('tocp_enable_log', true);
//global $tocp_debug;
//tocp_is_debug_enabled();
//$tocp_debug->enable( true );
define ( 'tocp_opt_1_HOUR', 60 * 60 );
define ( 'tocp_opt_2_HOURS', 2 * tocp_opt_1_HOUR );
define ( 'tocp_opt_4_HOURS', 4 * tocp_opt_1_HOUR );
define ( 'tocp_opt_8_HOURS', 8 * tocp_opt_1_HOUR );
define ( 'tocp_opt_6_HOURS', 6 * tocp_opt_1_HOUR );
define ( 'tocp_opt_12_HOURS', 12 * tocp_opt_1_HOUR );
define ( 'tocp_opt_24_HOURS', 24 * tocp_opt_1_HOUR );
define ( 'tocp_opt_48_HOURS', 48 * tocp_opt_1_HOUR );
define ( 'tocp_opt_72_HOURS', 72 * tocp_opt_1_HOUR );
define ( 'tocp_opt_168_HOURS', 168 * tocp_opt_1_HOUR );
define ( 'tocp_opt_INTERVAL', 4 );
define ( 'tocp_opt_AGE_LIMIT', 30 ); // 120 days
define ( 'tocp_opt_MAX_AGE_LIMIT', 60 ); // 120 days
define ( 'tocp_opt_OMIT_CATS', "" );
define ( 'tocp_opt_OMIT_CUSTOM_CATS', "" );
define( 'tocp_opt_TWEET_PREFIX', "" );
define( 'tocp_opt_ADD_DATA', "false" );
define( 'tocp_opt_URL_SHORTENER', "is.gd" );
define( 'tocp_opt_HASHTAGS', "" );
define( 'tocp_opt_no_of_tweet', "1" );
define( 'tocp_opt_post_type', "post" );
function tocp_admin_actions() {
	add_menu_page( "Tweet Old Custom Post", "Tweet Old Custom Post", 'manage_options', "TweetOldCustomPost", "tocp_admin" );
	add_submenu_page( "TweetOldCustomPost", __( 'Exclude Posts', 'TweetOldCustomPost' ), __( 'Exclude Posts', 'TweetOldCustomPost' ), 'manage_options', __( 'ExcludePosts', 'TweetOldCustomPost' ), 'tocp_exclude' );
}

add_action( 'admin_menu', 'tocp_admin_actions' );
add_action( 'admin_head', 'tocp_opt_head_admin' );
add_action( 'init', 'tocp_tweet_old_post' );
add_action( 'admin_init', 'tocp_authorize', 1 );
function tocp_authorize() {
	if ( isset ( $_GET['page'] ) ) {
		if ( $_GET['page'] == 'TweetOldCustomPost' ) {
			if ( isset( $_REQUEST['oauth_token'] ) ) {
				$auth_url = str_replace( 'oauth_token', 'oauth_token1', tocp_currentPageURL() );
				//	echo 'current page url '. tocp_currentPageURL() . "<br/><br/>";
				//
				/*	$top_url  = get_option( 'tocp_opt_admin_url' ) . substr( $auth_url, strrpos( $auth_url, "page=TweetOldCustomPost" ) + strlen( "page=TweetOldCustomPost" ) );
					echo "REQUEST_URI " . $_SERVER["REQUEST_URI"] . '<br/>';
				echo "self " . $_SERVER["PHP_SELF"] . '<br/>'; */
				//echo 'admin url '	. tocp_adminURL() . $_SERVER["PHP_SELF"]. '<br/>';
				$top_url = tocp_adminURL() . $_SERVER["PHP_SELF"] . '?page=TweetOldCustomPost' . substr( $auth_url, strrpos( $auth_url, "page=TweetOldCustomPost" ) + strlen( "page=TweetOldCustomPost" ) );
				//	echo "auth_url " . $auth_url . '<br/>';
				//	echo "auth substr url " . substr( $auth_url, strrpos( $auth_url, "page=TweetOldCustomPost" )) . '<br/>';
				//echo "top_url " . $top_url . '<br/>';
				//die;
				echo '<script language="javascript">window.location.href="' . $top_url . '";</script>';
				die;
			}
		}
	}
}

add_filter( 'plugin_action_links', 'tocp_plugin_action_links', 10, 2 );
function tocp_plugin_action_links( $links, $file ) {
	static $this_plugin;
	if ( ! $this_plugin ) {
		$this_plugin = plugin_basename( __FILE__ );
	}
	if ( $file == $this_plugin ) {
		// The "page" query string value must be equal to the slug
		// of the Settings admin page we defined earlier, which in
		// this case equals "myplugin-settings".
		$settings_link = '<a href="' . get_bloginfo( 'wpurl' ) . '/wp-admin/admin.php?page=TweetOldCustomPost">Settings</a>';
		array_unshift( $links, $settings_link );
	}

	return $links;
}

?>