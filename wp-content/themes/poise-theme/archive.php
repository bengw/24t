<?php
/**
 *  WordPress Index
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

// $query 		= new WP_Query();
$rows 		= 'inc/rows/_loop';
$lead 		= 'inc/lede';

get_header();

?>
<?php get_template_part( $lead ); ?>
<main class="main">
	<section class="section row">
<?php
if ( have_posts() ) {
	$i = 0;
	while ( have_posts() ) {
		$i++;
		the_post();
?>
		<article class="text text--card cols sm-12 lrg-4 post--<?php the_ID(); ?>">
			<div class="text__inner">
				<div class="text__content">
					<h3><a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<?php if ( the_content() ) { ?>
					<p><?php the_excerpt(); ?></p>
					<p><?php echo get_the_category(); ?></p>
					<?php } ?>
					<time datetime="<?php echo get_the_date( 'Y/m/d' ); ?>"><?php echo get_the_date('jS F Y'); ?></time>
				</div>
			</div>
		</article>
<?php

	}
}
?>
	</section><?php //.row; ?>
	<?php get_template_part( $rows ); ?>
</main>

<?php

get_footer(); 