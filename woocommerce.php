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
			<div class="row">
				<section id="primary" class="content-area col-12">
					<div id="main" class="site-main" role="main">
					<?php woocommerce_content(); ?>
					</div><!-- #main -->
				</section><!-- #primary -->
			</div>
		</div>
	</div>
    <?php if(is_shop()): ?>
        <div class="our-why">
            <h2 class="text-white">Our Why</h2>
            <p>
                "We have reinvented masturbation. We're proud of a product that offers
                all kinds of men the pleasure of onanism coupled with the latest
                technologies. The Handy is a revolution."
            </p>
            <p class="ceo">Jens Petter Wilhelmsen - Cofounder &amp; CEO</p>
        </div>
    <?php endif; ?>
<?php
// get_sidebar();
get_footer();
