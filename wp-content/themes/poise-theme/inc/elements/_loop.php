<?php 
/**
 *  Builder Element Loop
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$buttons	  = 'wp-content/themes/poise-theme/inc/elements/buttons.php';
$text 		  = 'wp-content/themes/poise-theme/inc/elements/text.php';
$details	  = 'wp-content/themes/poise-theme/inc/elements/details.php';
$image 		  = 'wp-content/themes/poise-theme/inc/elements/image.php';
$slider_text  = 'wp-content/themes/poise-theme/inc/elements/slider-text.php';
$slider_image = 'wp-content/themes/poise-theme/inc/elements/slider-image.php';

include $image;
include $text;

if ( get_row_layout() == "buttons" ) {

	include $buttons;

} elseif ( get_row_layout() == "details" ) {

	include $details;

} elseif ( get_row_layout() == "text_slider" ) {

	include $slider_text;

} elseif ( get_row_layout() == "image_slider" ) {

	include $slider_image;

}