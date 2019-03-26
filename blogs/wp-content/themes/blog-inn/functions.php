<?php
/**
 * Blog Inn functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blog_Inn
 */

/**
 * Enqueue scripts and styles.
 */

function blog_inn_scripts() {

	wp_enqueue_style( 'blog-inn-parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'blog_inn_scripts' );

function blog_way_get_default_theme_options() {

	$defaults = array();

	//Header
	$defaults['site_identity'] 			= 'title-text';
	$defaults['sticky'] 				= 0;
	$defaults['overlay'] 				= 1;

	// colors
    $defaults['body_color'] 			= '#6a6c6f';
	$defaults['site_title_color'] 		= '#ff8c8c';
	$defaults['site_description_color'] = '#818181';
	$defaults['button_color']			= '#ff8c8c';
	$defaults['scrollup_color']			= '#ff8c8c';
	$defaults['header_bg_color'] 		= '#ffffff';
	$defaults['menu_color'] 			= '#3a3b3d';
	$defaults['menu_hover_color'] 		= '#ff8c8c';
	$defaults['headings_color'] 		= '#ff8c8c';
	$defaults['meta_color'] 		    = '#ff8c8c';
	$defaults['anchor_color'] 		    = '#ff8c8c';
	$defaults['footer_bg_color'] 		= '#f9f9f9';
	$defaults['footer_text_color'] 	    = '#6a6c6f';

	$defaults['reset_colors']           = false;

	// Blog
	$defaults['global_layout']  		= 'right-sidebar';
	$defaults['excerpt_length'] 		= 60;
    $defaults['category_meta']          = 1;
    $defaults['author_meta']            = 1;
    $defaults['date_meta']              = 1;
    $defaults['archive_prefix']         = 0;
    $defaults['read_more']              = esc_html__('Read More', 'blog-inn');

    //single post
    $defaults['featured_img_meta']      = 1;
    $defaults['single_category_meta']   = 1;
    $defaults['single_author_meta']     = 1;
    $defaults['single_date_meta']       = 1;
    $defaults['single_tags_meta']       = 1;
    $defaults['show_post_nav']          = 1;
    $defaults['show_author_info']       = 1;
    $defaults['show_related_posts']     = 1;
    $defaults['related_posts_text']     = esc_html__('Related Posts', 'blog-inn');
	

	// Footer.
	$defaults['copyright'] 				= esc_html__( 'Copyright &copy; All rights reserved.', 'blog-inn' );

	//Scroll Up
	$defaults['enable_scrollup'] 		= 0;

	return $defaults;
}

function blog_way_get_default_color_options() {

    $defaults = array();

    $defaults['background_color']       = 'ffffff';
    $defaults['body_color'] 			= '#6a6c6f';
	$defaults['site_title_color'] 		= '#ff8c8c';
	$defaults['site_description_color'] = '#818181';
	$defaults['button_color']			= '#ff8c8c';
	$defaults['scrollup_color']			= '#ff8c8c';
	$defaults['header_bg_color'] 		= '#ffffff';
	$defaults['menu_color'] 			= '#3a3b3d';
	$defaults['menu_hover_color'] 		= '#ff8c8c';
	$defaults['headings_color'] 		= '#ff8c8c';
	$defaults['meta_color'] 		    = '#ff8c8c';
	$defaults['anchor_color'] 		    = '#ff8c8c';
	$defaults['footer_bg_color'] 		= '#f9f9f9';
	$defaults['footer_text_color'] 	    = '#6a6c6f';

    $defaults['reset_colors']           = false;

    return $defaults;
}

function blog_way_reset_colors( $data ) {

        $reset_colors = blog_way_get_option( 'reset_colors' );

        if ( true == $reset_colors ) {

            $options = blog_way_get_options();

            $options['reset_colors'] 		= false;

            $color_settings = blog_way_get_default_color_options();

            if ( ! empty( $color_settings ) ) {

                foreach ( $color_settings as $key => $val ) {

                    $options[ $key ] = $val;

                }
            }

            update_option( 'theme_mods_blog-inn', $options );

        }

}


function blog_inn_setup() {

	remove_image_size('blog-way-common');

}

add_action( 'after_setup_theme', 'blog_inn_setup' );

//=============================================================
// Function to change default excerpt
//=============================================================
if ( ! function_exists( 'blog_inn_implement_excerpt_length' ) ) :

	/**
	 * Implement excerpt length.
	 *
	 * @since 1.0.0
	 *
	 * @param int $length The number of words.
	 * @return int Excerpt length.
	 */
	function blog_inn_implement_excerpt_length( $length ) {

		$excerpt_length = blog_way_get_option( 'excerpt_length' );
		if ( absint( $excerpt_length ) > 0 ) {
			$length = absint( $excerpt_length );
		}
		return $length;

	}
endif;


if ( ! function_exists( 'blog_inn_implement_read_more' ) ) :

	/**
	 * Implement read more in excerpt.
	 *
	 * @since 1.0.0
	 *
	 * @param string $more The string shown within the more link.
	 * @return string The excerpt.
	 */
	function blog_inn_implement_read_more( $more ) {

		$output = $more;

		$read_more_text = esc_html__('Read More', 'blog-inn');

		if ( ! empty( $read_more_text ) ) {

			$output = '&hellip;<p><a href="' . esc_url( get_permalink() ) . '" class="btn-continue">' . esc_html( $read_more_text ) . '<span class="arrow-continue"> &rarr;</span></a></p>';

		}

		return $output;

	}
endif;

if ( ! function_exists( 'blog_inn_hook_read_more_filters' ) ) :

	/**
	 * Hook read more and excerpt length filters.
	 *
	 * @since 1.0.0
	 */
	function blog_inn_hook_read_more_filters() {
		
		add_filter( 'excerpt_length', 'blog_inn_implement_excerpt_length', 999 );
		add_filter( 'excerpt_more', 'blog_inn_implement_read_more' );
		
	}
endif;
add_action( 'wp', 'blog_inn_hook_read_more_filters' );

function blog_way_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'cyrillic,cyrillic-ext,latin-ext,vietnamese';

	/* translators: If there are characters in your language that are not supported by Droid Serif, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Lora: on or off', 'blog-inn' ) ) {
		$fonts[] = 'Lora:400,400i,700,700i';
	}				

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

function blog_way_credit_action(){ 
    ?> 
    <div class="col-md-6 col-sm-6">     
        <div class="credit-text">             
            <?php 
            /* translators: 1: name of theme, 2: Link of theme author */
            printf( esc_html__( '%1$s by %2$s', 'blog-inn' ), 'Blog Inn', '<a href="https://maneshpro.com" rel="designer" target="_blank">mProThemes</a>' ); 
            ?>
        </div>
    </div>
    <?php
}

function blog_way_before_primary_action(){

    // Add class for sidebar layout.
    $global_layout  = blog_way_get_option( 'global_layout' );

    if('no-sidebar' === $global_layout){
        $col_class      = 'col-sm-12 layout-' . esc_attr( $global_layout );
    } else{
        $col_class      = 'col-md-8 col-sm-12 layout-' . esc_attr( $global_layout );
    }
    ?><div class="<?php echo $col_class; ?>"><div id="primary" class="content-area"><main id="main" class="site-main" role="main"><?php

    get_template_part( 'template-parts/breadcrumbs' ); 
}

// Load dynamic style file.
require_once trailingslashit( get_stylesheet_directory() ) . '/dynamic-styles.php';

