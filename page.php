<?php
/**
 * The template for displaying all pages
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
<div id="content" class="site-content">
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
</div>
<?php
get_footer();
