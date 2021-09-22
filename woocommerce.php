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
    <!-- Reviews -->
    <?php if (is_product()): ?>
        <div class="reviews-background">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center border-bottom-lw pt-4">
                    <h2 class="text-white">Reviews</h2>
                    <a href="/reviews/" class="btn btn-primary btn-outline-primary">Leave a review</a>
                </div>
                <div class="row justify-content-center text-lw">
                    <div class="col-lg-8 py-4">
                        <div class="comment mb-4 border-bottom-lw">
                            <div class="d-flex justify-content-between">
                                <p class="text-white">Ray Donovan</p>
                                <p>14.08.2020</p>
                            </div>
                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <p>
                                Thank you for such a wonderful product for male masturbation, can't
                                say enough about it!!! I've been using the handy for almost a year
                                now, &amp; I've experienced numerous powerful orgasms with it, thank you
                                so much!!!
                            </p>
                        </div>

                        <div class="comment mb-4 border-bottom-lw">
                            <div class="d-flex justify-content-between">
                                <p class="text-white">An anonymous user</p>
                                <p>14.08.2020</p>
                            </div>

                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>

                            <p>Amazing, worth every penny</p>
                        </div>

                        <div class="comment mb-4 border-bottom-lw">
                            <div class="d-flex justify-content-between">
                                <p class="text-white">Ray Donovan</p>
                                <p>14.08.2020</p>
                            </div>

                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>

                            <p>
                                Its new to me but it's not much better than anything else. At leat
                                it can somewhat handle a kinda big dick. Ive had no luck connection
                                to my wifi yet. Maybe a new phone will help. Maybe it will be
                                another masturbation machine I throw in the trash.
                            </p>
                        </div>
                        <div class="text-center mb-3">
                            <a href="/reviews/" class="btn btn-primary btn-lg">Read More Reviews</a>
                        </div>

                        <hr>
                    </div>
                </div>
            </div> 
        </div>
    <?php endif ?>
<?php
get_footer();
