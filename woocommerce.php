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
    <!-- Reviews -->
    <?php if (is_product()): ?>
        <div class="reviews-background">
            <div class="reviews">
                <div class="top">
                <h2 class="text-white">Reviews</h2>

                <button>Leave a review</button>
                </div>

                <div class="comment">
                <div class="first-row">
                    <h5 class="text-white">Ray Donovan</h5>
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

                <hr>
                </div>

                <div class="comment">
                <div class="first-row">
                    <h5 class="text-white">An anonymous user</h5>
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
                <hr>

                <div class="comment">
                <div class="first-row">
                    <h5 class="text-white">Ray Donovan</h5>
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
                <hr>

                <div class="comment">
                <div class="first-row">
                    <h5 class="text-white">An anonymous user</h5>
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
                    I've recently purchased Handy and I'm very happy that I did. It took
                    me a few uses to figure out how to position the sleeve (how tight
                    and at what height attach the strap) to get the best experience. It
                    is worth a note that sleeve can stretch A LOT, which is a really
                    good thing. I've also tried reverting the sleeve which gave me a
                    completely different, soft sensation (I usually prefer very soft
                    sleeves). It feels like getting a very soft blowjob and allows me to
                    have longer "Handy" sessions. I've also recently ordered a new soft
                    open-ended sleeve, which looks very promising. I'm definately
                    waiting for some...
                </p>
                </div>

                <button>Read More</button>
                <hr>
            </div>
        </div>
    <?php endif ?>
<?php
// get_sidebar();
get_footer();
