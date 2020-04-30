<?php 
/**
 *  Lede Element between Header Banner and main content
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$variation 		  = get_field( 'lede_variation' );
$height 		  = get_field( 'variation_s' ); 

$heading    	  = get_field( 'heading' );
$subheading 	  = get_field( 'subheading' );
$text 			  = get_field( 'text' );
$lede_button 	  = get_field( 'lead_button' );
$background_image = get_field( 'background_image' );

$heading_video     = get_field( 'heading_video' );
$subheading_video  = get_field( 'subheading_video' );
$text_video 	   = get_field( 'text_video' );
$lede_button_video = get_field( 'lead_button_video' );
$video 	    	   = get_field( 'video' );
$poster	    	   = get_field( 'video_poster' );
?>

<?php if ( $variation == 'lede' ) { ?>

<header class="lede lede--default <?php echo wp_kses_post( $height ); ?> t24-component" id="lede">
		<div class="lede__content">
			<?php if ( ! empty ( $heading ) ) { ?>
			<h1 class="lede__title" data-aos="fade-right" data-aos-duration="500" data-aos-delay="1000"><?php echo wp_kses_post( $heading ); ?></h1>
			<?php } ?>
			<?php if ( ! empty( $subheading ) ) { ?>
			<h2 class="lede__subtitle" data-aos="fade-right" data-aos-duration="500" data-aos-delay="1250"><?php echo wp_kses_post( $subheading ); ?></h2>
			<?php } ?>
			<?php if ( ! empty( $text ) ) { ?>
			<p class="lede__text" data-aos="fade-right" data-aos-duration="500" data-aos-delay="1500">
				<?php echo wp_kses_post( $text ); ?>
			</p>
			<?php } ?>

			<?php

			if ( $lede_button ) {
				$lede_button_url    = $lede_button['url'];
				$lede_button_title  = $lede_button['title'];
				$lede_button_target = $lede_button['target'];
				?>
			<a class="button lede__button"
				href="<?php echo esc_url( $lede_button_url ); ?>"
				<?php if ( ! empty( $lede_button_target ) ) { ?>
				target="<?php echo esc_attr( $lede_button_target ); ?>"
				<?php } ?>
				role="button"
				rel="noopener"
				data-aos="fade-right" data-aos-duration="500" data-aos-delay="1750"
			>		
				<?php echo wp_kses_post( $lede_button_title ); ?>
			</a>
			<?php } ?>
		</div>
		<?php if ( ! empty( $background_image ) ) { ?>
			<div class="lede__background-wrap">
				<figure class="lede__background" style="background-image: url(<?php echo esc_url( $background_image ); ?>);" data-aos="fade-left" data-aos-duration="500" data-aos-delay="1750"></figure>
			</div>
		<?php } ?>
</header>

<?php } if ( $variation == 'lede--video' ) { ?>

<header class="lede lede--video <?php echo wp_kses_post( $height ); ?> t24-component" id="lede">
	<div class="lede__content">
			<?php if ( ! empty ( $heading_video ) ) { ?>
			<h1 class="lede__title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1250"><?php echo wp_kses_post( $heading_video ); ?></h1>
			<?php } ?>
			<?php if ( ! empty( $subheading_video ) ) { ?>
			<h2 class="lede__subtitle" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1500"><?php echo wp_kses_post( $subheading_video ); ?></h2>
			<?php } ?>
			<?php if ( ! empty( $text_video ) ) { ?>
			<p class="lede__text">
				<?php echo wp_kses_post( $text_video ); ?>
			</p>
			<?php } if ( $lede_button_video ) {

				$lede_button_url    = $lede_button_video['url'];
				$lede_button_title  = $lede_button_video['title'];
				$lede_button_target = $lede_button_video['target'];
			?>
			<a class="button lede__button"
				href="<?php echo esc_url( $lede_button_url ); ?>"
				<?php if ( ! empty( $lede_button_target ) ) { ?>
				target="<?php echo esc_attr( $lede_button_target ); ?>"
				<?php } ?>
				role="button"
				rel="noopener"
			>		
				<?php echo wp_kses_post( $lede_button_title ); ?>
			</a>
			<?php } ?>
	</div>
	<?php if ( ! empty( $video ) ) { ?>
	<div class="lede__video-wrap" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1000">
		<video class="lede__video" id="lede__video" width="100%" height="auto" muted autoplay loop poster="<?php echo esc_url( $poster ); ?>">
			<source src="<?php echo esc_url( $video ); ?>" type="video/mp4">
		</video>
		</div>
	<?php } ?>
</header>

<?php } ?>