<?php
/**
 * Breadcrumbs.
 *
 * @package Blog_Inn
 */

// Bail if front page.
if ( is_front_page() || is_home() ) {
	return;
}



if ( ! function_exists( 'breadcrumb_trail' ) ) {
	require_once trailingslashit( get_stylesheet_directory() ) . 'vendor/breadcrumbs/breadcrumbs.php';
}
?>

<div id="breadcrumb">
	
	<?php
	$breadcrumb_args = array(
		'container'   => 'div',
		'show_browse' => false,
	);
	breadcrumb_trail( $breadcrumb_args );
	?>
	
</div><!-- #breadcrumb -->