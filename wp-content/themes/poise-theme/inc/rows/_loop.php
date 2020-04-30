<?php
/**
 *  Builder row loop
 *
 *  @package poise-theme
 *  @author T24
 *  @version 1.0.0
 */

$single_col_row = 'inc/rows/1-column-layout';
$two_col_row    = 'inc/rows/2-column-layout';
$three_col_row  = 'inc/rows/3-column-layout';

if ( have_rows( 'page_builder' ) ) {

	while ( have_rows( 'page_builder' ) ) {

		the_row();

		get_template_part( $single_col_row );
		get_template_part( $two_col_row );
		get_template_part( $three_col_row );

	}

}