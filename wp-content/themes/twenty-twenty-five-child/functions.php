<?php
/**
 * Twenty Twenty-Five Child Theme functions.
 *
 * @package Twenty_Twenty_Five_Child
 */

// Load Composer autoloader (mounted at /var/www/html/vendor in the container).
if ( file_exists( ABSPATH . '../vendor/autoload.php' ) ) {
	require_once ABSPATH . '../vendor/autoload.php';
} elseif ( file_exists( dirname( __DIR__, 3 ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __DIR__, 3 ) . '/vendor/autoload.php';
}

// Disable plugin and theme updates/installs via WP Admin (managed by Composer).
define( 'DISALLOW_FILE_MODS', true );

// Enqueue custom styles.
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'twenty-twenty-five-child-custom',
			get_stylesheet_directory_uri() . '/css/custom.css',
			array(),
			filemtime( get_stylesheet_directory() . '/css/custom.css' )
		);
	}
);

// Enqueue custom styles in the block editor.
add_action(
	'after_setup_theme',
	function () {
		add_editor_style( 'css/custom.css' );
	}
);
