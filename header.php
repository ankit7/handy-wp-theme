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
      <nav class="navbar navbar-expand-md bg-light">
        <div class="container-xl">
          <a class="navbar-brand" href="/">
            <img class="logo" alt="Handy Logo" src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/logo/dark.svg" alt="" width="30" height="24">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
          </button>
          <div class="navbar-collapse collapse" id="topNav">
            <?php
              wp_nav_menu(array(
              'theme_location'    => 'primary',
              'container'       => false,
              'container_id'    => false,
              'container_class' => false,
              'menu_id'         => false,
              'menu_class'      => 'navbar-nav ms-auto',
              'depth'           => 3,
              'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
              'walker'          => new wp_bootstrap_navwalker()
              ));
            ?>
            <div class="d-flex ms-auto">
              <a href="">Shop Now</a>
              <a href="">Cart (0)</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- <div class="navbar">
        <div class="navbar-content">
          <div>
            <a href="/">
              <img class="logo" alt="Handy Logo"
                src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/logo/dark.svg">
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
            <a class="btn shop-now-button">Shop now</a>
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
      </div> -->
      <?php endif; ?>