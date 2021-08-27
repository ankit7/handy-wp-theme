<?php
/*
* Template Name: Support
*/
  get_header(); 
?>
<section id="s-header" class="my-5 py-4">
  <div class="container">
  <h2 class="border-bottom-b">We are here to help you</h2>
    <div class="row mt-5">
      <div class="col-lg-5">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/support/hero.png" alt="" class="img-fluid float-right">
      </div>
      <div class="col-lg-7 pl-5">
        <p class="fw-600">FAQ</p>
        <p>The most common questions our users ask and the simple answareds to them. General ones, questions on shipping, connections or even the technicals, we got you covered here.</p>
        <p class="mt-3"><a href="#" class="btn btn-lg btn-primary">Frequently Asked Questions</a></p>
        <p class="mt-5 fw-600">The Handy Setup</p>
        <p>Need some guidance to help you connect your Handy to Wi-Fi, or maybe you want to learn more on how you can care about your device? We have some notes on Handys Firmware Updates.</p>
        <p class="mt-3"><a href="#" class="btn btn-lg btn-primary">The Handy Setup</a></p>
        <p class="mt-5 fw-600">Need more guidanece?</p>
        <p>If you havent found an answere to your question feel free to contact us at: <br><a href="mailto:contact@handy.com">contact@handy.com</a></p>
      </div>
    </div>
  </div>
</section>
<section id="s-faq">
  <div class="container">
    <div class="row">
      <section id="primary" class="content-area col-12">
        <div id="main" class="site-main" role="main">
          <?php
          while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

          endwhile; // End of the loop.
          ?>

        </div><!-- #main -->
      </section><!-- #primary -->
    </div>
  </div>
</section>


<?php
get_footer();