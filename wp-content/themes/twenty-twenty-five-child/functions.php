<?php

// Load Composer autoloader (mounted at /var/www/html/vendor in the container)
if ( file_exists( ABSPATH . '../vendor/autoload.php' ) ) {
    require_once ABSPATH . '../vendor/autoload.php';
} elseif ( file_exists( dirname( __DIR__, 3 ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __DIR__, 3 ) . '/vendor/autoload.php';
}

// Disable plugin and theme updates/installs via WP Admin (managed by Composer)
define( 'DISALLOW_FILE_MODS', true );
