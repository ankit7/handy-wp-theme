<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php 
      // WordPress 5.2 wp_body_open implementation
      if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
      } else {
        do_action( 'wp_body_open' );
      }
    ?>
    <div id="page" class="site">
      <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
      <nav class="navbar navbar-expand-lg border-bottom-g2">
        <div class="container">
          <a class="navbar-brand pl-0" href="/">
            <img class="logo" alt="Handy Logo"
              src="<?php echo get_template_directory_uri(); ?><?php echo is_home() || is_category() || is_single() && !is_product() ? "/inc/assets/img/logo/1.svg" : "/inc/assets/img/logo/2.svg" ; ?>" alt="" width="30" height="24">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNav"
            aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="<?php echo get_template_directory_uri(); ?><?php echo is_home()|| is_category() || is_single() ? "/inc/assets/img/hb-light.svg" : "/inc/assets/img/hb-dark.svg" ; ?>" alt="">
          </button>
          <div class="navbar-collapse collapse" id="topNav">
            <?php
              wp_nav_menu(array(
              'theme_location'    => 'primary',
              'container'       => false,
              'container_id'    => false,
              'container_class' => false,
              'menu_id'         => false,
              'menu_class'      => 'navbar-nav mr-auto ml-lg-6',
              'depth'           => 3,
              'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
              'walker'          => new wp_bootstrap_navwalker()
              ));
            ?>
            <ul class="list-unstyled d-block d-sm-none text-center">
              <li class="mt-2"><a class="nav-link" href="/start-here/">New Owner? Start here</a></li>
              <li class="mt-2"><a href="/?p=83780" class="nav-link product-link">Buy Handy</a></li>
            </ul>
            <div class="d-none d-sm-flex ms-auto pr-2 desk-top"> 
              <a class="btn btn-secondary text-white mr-3 px-4 small"
                href="/start-here/">New Owner? Start here</a> 
                <a href="/?p=83780"
                class="btn shop-button text-white mr-3 product-link px-4 small">Buy Handy</a> 
                <a
                class="d-flex align-items-center" href="/cart/"><img
                  src="<?php echo get_template_directory_uri(); ?><?php echo is_home()|| is_category() || is_single() ? "/inc/assets/img/cart-w.svg" : "/inc/assets/img/cart.svg" ; ?>" alt=""></a></div>
          </div>
        </div>
      </nav>
      <?php endif; ?>