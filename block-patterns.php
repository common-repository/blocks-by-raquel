<?php

/**
 * Plugin Name:       Blocks By Raquel
 * Plugin URI:        https://github.com/raquelocasio/blocksbyraquel
 * Description:       Adds some useful block patterns to your website. Enjoy!
 * Version:           1.0.0
 * Author:            Raquel Ocasio
 * Author URI:        https://raquelocasio.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

 // abort if this file is called directly
 if ( !defined('WPINC')){
    die;
 }

 // current plugin version
 define ('BBR_VERSION', '1.0.0');

 // plugin URL
 define('BBR_URL', plugin_dir_url(__FILE__));

 // enqueue stylesheet
 function bbr_add_styles(){
    wp_enqueue_style('bbr-styles', BBR_URL . 'inc/blocks-by-raquel-styles.css');
 }

 add_action('wp_enqueue_scripts', 'bbr_add_styles');

 // include custom categories
 require_once('inc/categories.php');

 //include patterns file
 require_once('inc/patterns.php');