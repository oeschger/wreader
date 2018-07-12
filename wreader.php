<?php
/*
Plugin Name: WReader
Plugin URI: https://github.com/oeschger/wreader
Description: Organizes your feeds and writes out a custom RSS
Version: 0.5
Author: Ian Oeschger and Jamie Pickett
Author URI: ian@brownhen.com
License: MIT
*/

$correct_php_version = version_compare( phpversion(), "5.3", ">=" );

if ( ! $correct_php_version ) {
	echo "WReader requires <strong>PHP 5.3</strong> or higher.<br>";
	echo "You are running PHP " . phpversion();
	exit;
}

require_once 'bootstrap/bootstrap.php';

require_once 'constants.php';
require_once 'lib/timer.php';
require_once 'lib/general.php';
require_once 'lib/parser.php';
require_once 'mfrsettings.php';

require_once 'plugin.php';
