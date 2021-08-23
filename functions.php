<?php
if ( ! function_exists( 'handy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function handy_setup() {
	load_theme_textdomain( 'handy', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'handy' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'handy_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'handy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function handy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'handy_content_width', 1170 );
}
add_action( 'after_setup_theme', 'handy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function handy_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'handy' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'handy' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'handy' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'handy' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'handy' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'handy' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'handy' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'handy' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'handy_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function handy_scripts() {
    wp_enqueue_style( 'handy-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.css' );
    wp_enqueue_style( 'handy-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
	// load bootstrap css
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'handy-style', get_stylesheet_uri() );
	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    wp_enqueue_script('handy-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
    wp_enqueue_script('handy-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    
    wp_enqueue_script('handy-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'handy-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'handy_scripts' );

function handy_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( home_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "handy" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "handy" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "handy" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'handy_password_form' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

/* remove review tab */
add_filter('woocommerce_product_tabs', 'delete_review_tab', 98);
function delete_review_tab($tabs) {
    // remove reviews from tabs array
    unset( $tabs['reviews'] );
    return $tabs;
}
/* Changes Related Product Heading */
add_filter('woocommerce_product_related_products_heading', 'change_related_title');
function change_related_title() {
    return 'You might also need';
}

/* Move Short description below add to cart */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 ); 
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 15 );

/* Hide SKUs */
add_filter( 'wc_product_sku_enabled', 'handy_remove_product_page_sku' );
function handy_remove_product_page_sku( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }
    return $enabled;
}


/* Hide coupon from Checkout */
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

/* remove company name from checkout */
add_filter( 'woocommerce_checkout_fields' , 'override_checkout_fields' );
function override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    return $fields;
}

// Show plus minus buttons
// add_action( 'woocommerce_after_quantity_input_field', 'handy_display_quantity_plus' );
//   function handy_display_quantity_plus() {
//    echo '<button type="button" class="qty-button plus" >+</button>';
// }

// add_action( 'woocommerce_before_quantity_input_field', 'handy_display_quantity_minus' );
// function handy_display_quantity_minus() {
//    echo '<button type="button" class="qty-button minus" >-</button>';
// }

// Trigger update quantity script
// add_action( 'wp_footer', 'handy_add_cart_quantity_plus_minus' );
// function handy_add_cart_quantity_plus_minus() {
//    if ( ! is_product() && ! is_cart() ) return;
    
//    wc_enqueue_js("     
//       $('form.cart,form.woocommerce-cart-form').on( 'click', 'button.plus, button.minus', function() {
  
//          var qty = $( this ).parent( '.quantity' ).find( '.qty' );
//          var val = parseFloat(qty.val());
//          var max = parseFloat(qty.attr( 'max' ));
//          var min = parseFloat(qty.attr( 'min' ));
//          var step = parseFloat(qty.attr( 'step' ));
 
//          if ( $( this ).is( '.plus' ) ) {
//             if ( max && ( max <= val ) ) {
//                qty.val( max );
//             } else {
//                qty.val( val + step );
//             }
//          } else {
//             if ( min && ( min >= val ) ) {
//                qty.val( min );
//             } else if ( val > 1 ) {
//                qty.val( val - step );
//             }
//          }
 
//       }); 
//    " );
// }
