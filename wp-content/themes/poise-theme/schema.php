<?php
/**
 *  Schema / Structured Data
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$address_line_one  = get_field( 'address_line_1', 'option' );
$address_line_two  = get_field( 'address_line_2', 'option' );
$address_post_code = get_field( 'post_code', 'option' );
$address_town_city = get_field( 'towncity', 'option' );
$email             = get_field( 'email_address', 'option' );
$telephone         = get_field( 'phone_number', 'option' );
$map          	   = get_field( 'map_url', 'option' );
$latitude          = get_field( 'latitude', 'option' );
$longitude         = get_field( 'longitude', 'option' );
$logo	           = get_field( 'logo', 'option' );
$twitter	       = get_field( 'twitter', 'option' );
$facebook	       = get_field( 'facebook', 'option' );
$instagram	       = get_field( 'instagram', 'option' );
$linkedin	       = get_field( 'linkedin', 'option' );
$type    	       = get_field( 'schema_type', 'option' );

if ( ! empty( $type ) ) {

?>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "<?php echo wp_kses_post( $type ); ?>",
	<?php if ( ! empty( $address_line_one && $address_post_code ) ) { ?>
	"address": {
		"@type": "PostalAddress",
		<?php if ( ! empty( $address_line_two ) ) { ?>
		"addressLocality": "<?php echo wp_kses_post( $address_line_two ); ?>",
		<?php } ?>
		"addressRegion": "<?php echo wp_kses_post( $address_town_city ); ?>",
		"postalCode": "<?php echo wp_kses_post( $address_post_code ); ?>",
		"streetAddress": "<?php echo wp_kses_post( $address_line_one ); ?>"
	},
	<?php } ?>
	"name": "<?php echo get_bloginfo( 'name' ); ?>",
	<?php if ( ! empty( $email ) ) { ?>
	"email": "<?php echo wp_kses_post( $email ); ?>",
	<?php } ?>
	"url": "<?php echo get_bloginfo( 'url' ); ?>",
	<?php if ( ! empty( $telephone ) ) { ?>
	"telephone": "<?php echo wp_kses_post( $telephone ); ?>",
	<?php } ?>
	<?php if ( ! empty( $logo ) ) { ?>
	"logo": "<?php echo esc_url( $logo ); ?>",
	<?php } ?>
	<?php if ( ! empty( $logo ) ) { ?>
	"image": "<?php echo esc_url( $logo ); ?>",
	<?php } ?>
	<?php if ( ! empty( $latitude && $longitude ) ) { ?>
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": "<?php echo wp_kses_post( $latitude ); ?>",
		"longitude": "<?php echo wp_kses_post( $longitude ); ?>"
	},
	<?php if ( ! empty( $map ) ) { ?>
	"hasMap": "<?php echo esc_url( $map ); ?>",
	<?php } ?>

	<?php } ?>
	<?php if ( ! empty( $facebook || $twitter || $instagram || $linkedin ) ) { ?>
	"sameAs": [
	<?php if ( ! empty( $facebook ) ) { ?>
		"<?php echo esc_url( $facebook ); ?>"<?php if ( ! empty( $twitter ) ) { ?>,<?php } ?>
	<?php } if ( ! empty( $twitter ) ) { ?>
		"<?php echo esc_url( $twitter ); ?>"<?php if ( ! empty( $instagram ) ) { ?>,<?php } ?>
	<?php } if ( ! empty( $instagram ) ) { ?>
		"<?php echo esc_url( $instagram ); ?>"<?php if ( ! empty( $linkedin ) ) { ?>,<?php } ?>
	<?php } if ( ! empty( $linkedin ) ) { ?>
		"<?php echo esc_url( $linkedin ); ?>"
	<?php } ?>
	]<?php } ?>

}
</script>

<?php

}