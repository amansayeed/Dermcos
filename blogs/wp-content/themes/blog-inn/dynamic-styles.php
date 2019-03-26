<?php
/**
 * Blog Inn dynamic styles.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blog_Inn
 */

function blog_inn_dynamic_styles(){

	$body_color  		=  esc_attr( blog_way_get_option( 'body_color' ) );
	$footer_bg_color  	=  esc_attr( blog_way_get_option( 'footer_bg_color' ) );
	$footer_text_color  =  esc_attr( blog_way_get_option( 'footer_text_color' ) );
	$anchor_color  	 	=  esc_attr( blog_way_get_option( 'anchor_color' ) );
	$header_bg_color  	=  esc_attr( blog_way_get_option( 'header_bg_color' ) );
	$menu_color         =  esc_attr( blog_way_get_option( 'menu_color' ) );
	$menu_hover_color   =  esc_attr( blog_way_get_option( 'menu_hover_color' ) );
	
	$custom_css = "
	        #primary h2.entry-title,
			#primary h2.entry-title a,
			.page-header .page-title,
			ul.products li a h2,
			h1.product_title,
			.woocommerce div.product p.price, 
			.woocommerce div.product span.price, 
			.woocommerce ul.products li.product .price,
			.woocommerce div.product .woocommerce-tabs ul.tabs li.active a{
	            color: {$body_color};
	        }";

	$custom_css .= "
	        .footer-social .social-menu-wrap .menu{
	            background: {$footer_bg_color};
	        }";

	$custom_css .= "
	        #footer-widgets .widget ul li{
	            border-top: 1px dotted {$footer_text_color};
	        }

	        #footer-widgets .widget ul li a, 
	        #footer-widgets .widget .textwidget, 
	        #footer-widgets .widget p{
	        	color: {$footer_text_color};
	    	}

	    	.footer-social .social-menu-wrap:before{
	    		background: {$footer_text_color};
	    	}";

	$custom_css .= "
	        .social-menu-wrap .menu a{
	            background: {$anchor_color};
	            border: 1px solid {$anchor_color};
	        }";

	$custom_css .= "
	        .main-navigation ul ul{
	            background: {$header_bg_color};
	        }";

	$custom_css .= "
			.main-navigation li.menu-item-has-children > a::after, 
			.main-navigation ul li li.menu-item-has-children > a::after, 
			.main-navigation ul li li.page_item_has_children > a::after{
	            color: {$menu_color};
	        }";

	$custom_css .= "
			.main-navigation li.menu-item-has-children:hover > a::after, 
			.main-navigation ul li li.menu-item-has-children:hover > a::after, 
			.main-navigation ul li li.page_item_has_children:hover > a::after{
	            color: {$menu_hover_color};
	        }";

	$custom_css .= "
	        .woocommerce div.product .woocommerce-tabs ul.tabs::before {
	            border-bottom: 1px solid {$body_color};
	        }

	        .woocommerce div.product .woocommerce-tabs ul.tabs li {
	            border: 1px solid {$body_color};
	            background-color: {$body_color};
	        }

	        .woocommerce span.onsale,
	        #add_payment_method .wc-proceed-to-checkout a.checkout-button, 
	        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
	        .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button, 
	        .woocommerce .cart .button, 
	        .woocommerce .cart input.button, 
	        .woocommerce a.button, 
	        .woocommerce #payment #place_order, 
	        .woocommerce-page #payment #place_order, 
	        .woocommerce #respond input#submit.alt, 
	        .woocommerce a.button.alt, 
	        .woocommerce button.button.alt, 
	        .woocommerce input.button.alt, 
	        .woocommerce #review_form #respond .form-submit input, 
	        .woocommerce .single_add_to_cart_button, 
	        .woocommerce button.button.alt.disabled,
	        .woocommerce nav.woocommerce-pagination li span, 
	        .woocommerce nav.woocommerce-pagination li a{
	        	background-color: {$anchor_color};
	        	border: 1px solid {$anchor_color};
	    	}

	    	.woocommerce .star-rating span::before,
	    	#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover, 
	    	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
	    	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover, 
	    	.woocommerce .cart .button:hover, 
	    	.woocommerce .cart input.button:hover, 
	    	.woocommerce a.button:hover, 
	    	.woocommerce #payment #place_order:hover, 
	    	.woocommerce-page #payment #place_order:hover, 
	    	.woocommerce #review_form #respond .form-submit input:hover, 
	    	.woocommerce button.button.alt.disabled:hover,
	    	.woocommerce nav.woocommerce-pagination ul li a:focus, 
	    	.woocommerce nav.woocommerce-pagination ul li a:hover, 
	    	.woocommerce nav.woocommerce-pagination ul li span.current,
	    	.pagination .page-numbers:hover, 
	    	.pagination .page-numbers.next:hover, 
	    	.pagination .page-numbers.previous:hover, 
	    	.pagination .page-numbers.current,
	    	#add_payment_method #payment ul.payment_methods li, 
	    	.woocommerce-cart #payment ul.payment_methods li, 
	    	.woocommerce-checkout #payment ul.payment_methods li,
	    	.woocommerce-message::before, 
	    	.woocommerce-info::before{
	    		color: {$anchor_color}!important;
	    	}

	    	.woocommerce-message, .woocommerce-info{
	    	    border-top-color: {$anchor_color};
	    	}";
    
	wp_add_inline_style( 'blog-inn-parent-style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'blog_inn_dynamic_styles' );