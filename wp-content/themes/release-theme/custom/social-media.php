<?php
/**
 *  Social Media Icons
 *
 *  @package release-theme
 *  @author benwelsby
 *  @version 1.0.0
 */

$instagram = get_field('instagram', 'options');
$facebook  = get_field('facebook', 'options');
$twitter   = get_field('twitter', 'options');
$linkedin  = get_field('linkedin', 'options');

?>

<div class="social-media">
	<?php if (!empty($instagram)) { ?>
	<a href="<?php echo esc_url( $instagram ); ?>" class="social-media__instagram" target="_blank" title="Instagram" rel="noopener">
		<?php include TEMPLATEPATH . '/assets/svg/instagram.svg'; ?>
	</a>
	<?php } if (!empty($twitter)) { ?>
	<a href="<?php echo esc_url( $twitter ); ?>" class="social-media__twitter" target="_blank" title="Twitter" rel="noopener">
		<?php include TEMPLATEPATH . '/assets/svg/twitter.svg'; ?>
	</a>
	<?php } if (!empty($facebook)) { ?>
	<a href="<?php echo esc_url( $facebook ); ?>" class="social-media__facebook" target="_blank" title="Facebook" rel="noopener">
		<?php include TEMPLATEPATH . '/assets/svg/facebook.svg'; ?>
	</a>
	<?php } if (!empty($linkedin)) { ?>
	<a href="<?php echo esc_url( $linkedin ); ?>" class="social-media__linkedin" target="_blank" title="Facebook" rel="noopener">
		<?php include TEMPLATEPATH . '/assets/svg/linkedin.svg'; ?>
	</a>
	<?php } ?>
</div>