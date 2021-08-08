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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
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
        <div class="navbar">
          <div class="navbar-content">
            <div>
              <a href="/">
                <img class="logo" alt="Logo" src="">
              </a>
            </div>
            <?php
              wp_nav_menu(array(
              'theme_location'    => 'primary',
              'container'       => 'div',
              'container_id'    => false,
              'container_class' => false,
              'menu_id'         => false,
              'menu_class'      => 'nav-links',
              'depth'           => 3,
              'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
              'walker'          => new wp_bootstrap_navwalker()
              ));
            ?>
            <div class="cart-shop">
              <button class="shop-now-button">Shop now</button>
              <a href="/cart">Cart(0)</a>
            </div>
          </div>

          <div class="navbar-mobile">
            <div class="nav">
              <a href="/">
                <img class="logo" alt="Logo" src="">
              </a>
              <div id="hamburger" class="hamburger">
                <div></div>
                <div></div>
              </div>
            </div>
          </div>
          <!-- <div class="nav-links-mobile" style="display: none;">
            <ul class="nav-links">
              <li><a href="/shop">Shop</a></li>
              <li><a href="/journal">Journal</a></li>
              <li><a href="/connect">Connect</a></li>
              <li><a href="/support">Support</a></li>
            </ul>
          </div> -->
          <?php
              wp_nav_menu(array(
              'theme_location'    => 'primary',
              'container'       => 'div',
              'container_id'    => false,
              'container_class' => 'nav-links-mobile',
              'menu_id'         => false,
              'menu_class'      => 'nav-links',
              'depth'           => 3,
              'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
              'walker'          => new wp_bootstrap_navwalker()
              ));
            ?>
        </div>
        <div id="content" class="site-content">
          <div class="container">
            <div class="row">
      <?php endif; ?>