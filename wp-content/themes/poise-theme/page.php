<?php
/**
 *  WordPress Template for Pages
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

get_header();

$rows 		= 'inc/rows/_loop';
$lead 		= 'inc/lede';

?>

<article id="article" class="article article--<?php the_ID(); ?>">

	<?php get_template_part( $lead ); ?>

	<main class="main" id="main">

		<?php get_template_part( $rows ); ?>

	</main>

</article>

<?php

get_footer();