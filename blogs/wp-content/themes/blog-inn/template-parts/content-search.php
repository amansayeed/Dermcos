<?php
/**
 * Template part for displaying search result page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blog_Inn
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

		$cat_meta = blog_way_get_option( 'category_meta' );

		if ( ( 'post' === get_post_type() ) && ( 1 !== absint( $cat_meta ) ) ) {

			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'blog-inn' ) );

			if ( $categories_list && blog_way_categorized_blog() ) {
				printf( '<span class="cat-links">%s</span>', $categories_list ); // WPCS: XSS OK.
			}

		}

		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<?php 
	if ( !is_single() && has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) { ?>
		<div class="entry-img">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
       </div>
       <?php
    } 
	?>

	<footer class="entry-footer">
		<span class="author vcard"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span>
		<span class="separator"><?php echo esc_html__( ' / ', 'blog-inn' ); ?></span>
		<span class="posted-on"><?php echo esc_html( get_the_date() ); ?></span>
	</footer><!-- .entry-footer -->

	<div class="detail-wrap">
		
		<div class="entry-content entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
	</div>

</article><!-- #post-## -->