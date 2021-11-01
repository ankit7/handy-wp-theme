<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<style>
	.attachment-post-thumbnail.size-post-thumbnail.wp-post-image {
  position: relative;
  top: -100px;
  max-height: 400px;
}
</style>
<div class="header-wrapper">
	<div class="container text-lw">
		<div class="row justify-content-center pt-5">
			<div class="col-lg-8 text-center">
				<h1 class="text-lw"><?php the_title() ; ?></h1>
				<span class="entry-date"><?php echo get_the_date(); ?></span>
			</div>
		</div>
	</div>
</div>
<div id="journal-content pt-0">
  <div class="container">
    <div class="row justify-content-center mb-4">
			<section id="primary" class="content-area col-12 col-lg-8">
				<div id="main" class="site-main" role="main">
					<?php the_post_thumbnail(); ?>
					<?php
					while ( have_posts() ) : the_post();

						if ( is_single() ) :
							the_content();
						else :
								the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'handy' ) );
						endif;

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
</div>

<?php
get_footer();
