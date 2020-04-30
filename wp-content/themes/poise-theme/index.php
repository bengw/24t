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
	<section class="section section--full-no-col row" style="padding: 0;">
<?php
if ( have_posts() ) {
	$i = 0;
	while ( have_posts() ) {
		$i++;
		the_post();
?>
		<article class="text text--tile cols sm-12 lrg-4 post--<?php the_ID(); ?>">
			<div class="text__inner">
				<div class="text__content">
					<h3><a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<?php if ( the_excerpt() ) { ?>
					<p><?php the_excerpt(); ?></p>
					<?php } ?>
					<p><?php get_the_category(); ?></p>
					<time datetime="<?php echo get_the_date( 'Y/m/d' ); ?>"><?php echo get_the_date('jS F Y'); ?></time>
				</div>
			</div>
		</article>
<?php

	}
}
?>
	</section><?php //.row; ?>
	<section class="section section--full-bg section--grey">
		<div class="row">
			<div class="col">
				<div class="text text--narrow t24-component aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
					<div class="text__inner">
						<div class="text__content">
							<h2 style="text-align: center;">Start a project</h2>
							<p style="text-align: center;">Let us know how we can contribute to your project</p>
							<p style="text-align: center;"><a class="button" href="#">Start</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section--full section--no-colour">
		<div class="row">
			<div class="col">
				<figure class="image image--tv t24-component aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="500">
					<img src="/wp-content/uploads/2020/02/opt-_0007_photo-of-people-using-laptop-3194521.jpg" class="lazy" title="opt-_0007_photo-of-people-using-laptop-3194521">
				</figure>
			</div>
		</div>
	</section>
</main>

<?php

get_footer(); 