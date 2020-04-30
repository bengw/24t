<?php 
/**
 *  Buttons Element
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$buttons_variation = get_sub_field( 'buttons_variation' );

if ( have_rows( 'buttons_rep' ) ) {

	?>

<div class="buttons <?php echo wp_kses_post( $buttons_variation ); ?> t24-component">

	<?php

	while ( have_rows( 'buttons_rep' ) ) { the_row();

		$buttons_button 	   = get_sub_field( 'buttons__button' );
		$buttons_button_url    = $buttons_button['url'];
		$buttons_button_title  = $buttons_button['title'];
		$buttons_button_target = $buttons_button['target'];

	?>

	<a class="button buttons__button"
		<?php if ( $buttons_button_url ) { ?>
		href="<?php echo esc_url( $buttons_button_url ); ?>"
		<?php } ?>
		<?php if ( $buttons_button_target ) { ?>
		target="<?php echo esc_attr( $buttons_button_target ); ?>"
		<?php } ?>
		<?php if ( $buttons_variation == 'buttons--left' || $buttons_variation == 'buttons--centre' ) { ?>
		role="button"
		<?php } ?>
		rel="noopener"
	>
		<?php echo wp_kses_post( $buttons_button_title ); ?>
	</a>

<?php

	}

?>

</div>

<?php

}