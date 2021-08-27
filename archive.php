<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<div class="header-wrapper">
  <div class="header">
    <div class="container text-lw">
      <div class="row">
        <div class="col-lg-6">
          <div class="border-bottom mb-3">
            <h2 class="text-lw">The Handy Diary</h2>
            <p>We talk about sex, life and pleasure. Let's transform the sexual topics to cool opened talk.</p>
          </div>
          <div class="card bg-transparent border-bottom mt-5 mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/journal/journal1.jpg" alt="" class="card-img-top">
            <div class="card-body p-0">
              <h5 class="card-title text-lw">The big problem of the small aggressions </h5>
              <p class="card-text"><small class="text-muted">June 30, 2021</small></p>
              <p class="card-text">In the latest instalment of our mini series on inclusivity in the workplace, our Head of HR and Compliance Isabel Ros Ruiz writes...</p>
            </div>
          </div>
          <a href="#" class="btn btn-primary btn-xl">Read more from this section</a>
        </div>
        <div class="col-lg-6">
        <div class="border-bottom mb-3">
          <h2 class="text-lw">The Handy News</h2>
          <p>The Handy is alive and constantly evolves in front of your eyes. See whats new..</p>
        </div>
        <div class="card bg-transparent border-bottom mt-5 mb-5">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/journal/journal2.jpg" alt="" class="card-img-top">
          <div class="card-body p-0">
            <h5 class="card-title text-lw">New patch release: Firmware 3.1</h5>
            <p class="card-text"><small class="text-muted">July 29, 2021</small></p>
            <p class="card-text">Dear Handy Community, As you know, we’ve been in the process of gradually rolling out FW3. Unfortunately, there were some...</p>
          </div>
        </div>
        <a href="#" class="btn btn-secondary btn-xl">Read more from this section</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="journal-content">
	<div class="container">
    <div class="row mb-4">

			<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

		</div><!-- #main -->
	</div>
</div><!-- #primary -->

<?php
get_footer();
