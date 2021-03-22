<?php
/**
 * Plugin Name:     Sample Plugin
 * Plugin URI:      https://github.com/toiee-kameda/sample-plugin/
 * Description:     これは、アップデートの自動化の練習用です
 * Author:          toiee Lab Kameda
 * Author URI:      https://toiee.jp
 * Text Domain:     sample-plugin
 * Domain Path:     /languages
 * Version:         0.1.1
 *
 * @package         Sample_Plugin
 */

// Your code starts here.

require 'inc/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/toiee-kameda/sample-plugin/',
	__FILE__,
	'sample-plugin'
);



function hogheoge(){
	return ;
}
