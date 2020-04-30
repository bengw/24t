<?php
/**
 *  WordPress Footer
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$gtm = get_field( 'gtm_id', 'options' );

// Just the stuff we're going to edit.
get_template_part( '../release-theme/custom/footer' );

?>

	</div>
<?php // close .site;

// Include the schema template part.
get_schema();

// Custom footer scripts.
get_template_part( '../release-theme/custom/site-footer-scripts' );

// WordPress footer scripts.
wp_footer();

?>

<?php if ( ! empty($gtm) ) { ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo wp_kses_post( $gtm ); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php } ?>

</body>
</html>