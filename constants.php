<?php
/**
 * Alias constants
 *
 * @package Alias
 * @subpackage App_Package
 */

// Stop if the system is not loaded.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Debug mode.
if ( ! defined( 'WP_DEBUG' ) && defined( 'APP_DEBUG' ) ) {
	define( 'WP_DEBUG', APP_DEBUG );
}

// Installing.
if ( ! defined( 'WP_INSTALLING' ) && defined( 'APP_INSTALLING' ) ) {
	define( 'WP_INSTALLING', APP_INSTALLING );
}