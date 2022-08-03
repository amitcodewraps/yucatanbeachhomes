<?php
/**
 * Settings updates for 2.1.11
 *
 * @package EPL
 * @subpackage updates
 * @since 2.1.11
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$epl_settings = epl_settings();

$new_fields_defaults = array(
	'label_sold' => __( 'Sold', 'easy-property-listings' ),
);


foreach ( $new_fields_defaults as $key    => $value ) {
	if ( ! isset( $epl_settings[ $key ] ) ) {
		// sure upgrade, fields are not set lets set them for very first time.
		$epl_settings[ $key ] = $value;
	}
}
update_option( 'epl_settings', $epl_settings );
