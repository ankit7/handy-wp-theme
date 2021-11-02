<?php
  get_header(); 
?>
<style>
  .card-img-top {
    max-height: 276px;
  }
</style>
<div class="header-wrapper">
  <div class="header">
    <div class="container text-lw">
      <div class="row">
        <div class="col-lg-6">
          <div class="border-bottom mb-3">
            <h2 class="text-lw">The Handy Journal</h2>
            <p>Stories of sex, life, and pleasure</p>
          </div>
          <?php
            /* Build query */
            $args = array(
              'category_name' => 'journal', 
              'posts_per_page' => 1,
            );
            // The Query
            $get_journal_post = new WP_Query( $args );
          ?>
          <div class="card bg-transparent border-bottom mt-5 mb-5">
            <?php
              while ( $get_journal_post->have_posts() ) :
              $get_journal_post->the_post();
            ?>
              <a href="<?php the_title(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url($post_id, 'thumbnail'); ?>" alt=""
                class="card-img-top">
              </a>
              <div class="card-body p-0">
                <h5 class="card-title"><a class="text-lw" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="card-text"><small class="text-muted"><?php wp_bootstrap_starter_posted_on(); ?></small></p>
                <p class="card-text"><?php the_excerpt(); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          <?php
            // Reset Post Data.
            wp_reset_postdata();
          ?>
        </div>
        <div class="col-lg-6">
        <div class="border-bottom mb-3">
          <h2 class="text-lw">The Handy News</h2>
          <p>Interesting company and industry news</p>
        </div>
        <?php
            /* Build query */
            $args = array(
              'category_name' => 'technical', 
              'posts_per_page' => 1,
            );
            // The Query
            $get_tech_post = new WP_Query( $args );
          ?>
          <div class="card bg-transparent border-bottom mt-5 mb-5">
            <?php
              while ( $get_tech_post->have_posts() ) :
              $get_tech_post->the_post();
            ?>
              <a href="<?php the_title(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url($post_id, 'thumbnail'); ?>" alt=""
                class="card-img-top">
              </a>
              <div class="card-body p-0">
                <h5 class="card-title"><a class="text-lw" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="card-text"><small class="text-muted"><?php wp_bootstrap_starter_posted_on(); ?></small></p>
                <p class="card-text"><?php the_excerpt(); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          <?php
            // Reset Post Data.
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="journal-content">
  <div class="container">
    <div class="row mb-4">
      <div class="col-lg-4 mb-3">
        <a href="/category/all/" class="btn btn-light btn-block">All Articles</a>
      </div>
      <div class="col-lg-4 mb-3">
        <a href="/category/journal/" class="btn btn-primary btn-block">The Handy Diary articles</a>
      </div>
      <div class="col-lg-4 mb-3">
        <a href="/category/technical/" class="btn btn-primary btn-block">The Handy News articles</a>
      </div>
    </div>
    <div class="row">
      <?php
        /* Build query */
        $args = array(
          'category_name' => 'journal', 
          'posts_per_page' => 6,
        );
        // The Query
        $get_journal_post = new WP_Query( $args );
        while ( $get_journal_post->have_posts() ) :
          $get_journal_post->the_post();
      ?>
      <div class="col-lg-6">
        <div class="card bg-transparent border-0 mt-5">
          <a href="<?php the_title(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url($post_id, 'thumbnail'); ?>" alt=""
                class="card-img-top">
          </a>
          <div class="card-body p-0">
            <h5 class="card-title"><a class="text-lw" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p class="card-text"><small class="text-muted"><?php wp_bootstrap_starter_posted_on(); ?></small></p>
            <p class="card-text"><?php the_excerpt(); ?></p>
          </div>
        </div>
      </div>
      <?php endwhile; 
      // Reset Post Data 
      wp_reset_postdata();
      ?>
    </div>
    <div class="row justify-content-center mt-5">
      <a href="/category/journal/" class="btn btn-primary">Load more articles</a>
    </div>
  </div>
</div>

<?php
get_footer();