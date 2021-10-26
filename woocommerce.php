<?php
/**
 * The template for displaying Woocommerce Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row justify-content-center">
                <section id="primary" class="content-area col-12">
                    <div id="main" class="site-main" role="main">
                    <?php woocommerce_content(); ?>
                    </div><!-- #main -->
                </section><!-- #primary -->
            </div>
            <?php if(is_shop()): ?>
                <section class="shop-pleasure">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Everyday pleasure</h2>
                            <p>You're not a sprinter and love to take your time? No worries, we got you covered! The handy operates on a power adapter, so you won't ever slow down or stop at the height of your pleasure. You're not a sprinter and love to take your time? No worries, we got you covered!</p>
                            <p><strong>Jens Petter Wilhelmsen</strong> - Cofounder & CEO</p>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
		</div>
	</div>

<?php
get_footer();
