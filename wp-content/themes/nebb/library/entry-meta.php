<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		echo '<p class="byline author"><time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( '%1$s', 'foundationpress' ), get_the_date(), get_the_time() ) . '</time> ';
		//	echo '' . __( '//', 'foundationpress' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a>';
		// New Comments
		//echo comments_popup_link( __( ' // Keine Kommentare', 'foundationpress' ), __( ' // 1 Kommentar', 'foundationpress' ), __( ' // % Kommentare', 'foundationpress' ) );
		echo '</p>';
	}
endif;
