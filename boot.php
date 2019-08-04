<?php
/**
 * Factory Metaboxes
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>
 * @since         1.0.0
 * @package       factory-metaboxes
 * @copyright (c) 2018, Webcraftic Ltd
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// module provides function only for the admin area
if ( ! is_admin() ) {
	return;
}

if ( defined( 'FACTORY_METABOXES_000_LOADED' ) ) {
	return;
}

define( 'FACTORY_METABOXES_000_VERSION', '4.0.9' );

define( 'FACTORY_METABOXES_000_LOADED', true );

define( 'FACTORY_METABOXES_000_DIR', dirname( __FILE__ ) );
define( 'FACTORY_METABOXES_000_URL', plugins_url( null, __FILE__ ) );

#comp merge
require( FACTORY_METABOXES_000_DIR . '/metaboxes.php' );
require( FACTORY_METABOXES_000_DIR . '/metabox.class.php' );
require( FACTORY_METABOXES_000_DIR . '/includes/form-metabox.class.php' );
require( FACTORY_METABOXES_000_DIR . '/includes/publish-metabox.class.php' );
#endcomp