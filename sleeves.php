<?php
/*
* Template Name: Sleeves
*/
get_header(); 
?>
<style>

  @media screen and (max-width: 768px) {
    section.pickperfect .top {
      order: -1;
    }
    section.pickperfect .progress_section {
      margin-bottom: 60px;
    }
  }
  .hero-banner img {
    max-width: 100%;
  }
  .preview-card {
    background: #5b5e4d;
    color: #f6f5f3;
    padding: 1.8rem;
    display: none;
    position: relative;
  }
  .preview-card.active {
    display: block;
  }
  .preview-card h4 {
    font-size: 1.5rem;
    border-bottom: 1px solid #f6f5f3;
    line-height: 2;
    margin-bottom: 1rem;
  }
  .progress_section {
    position: relative;
  }
  .progress_section .progress {
    height: 2rem;
    border-radius: 0 1rem 1rem 0;
    background-color: transparent;
  }
  .progress_section .progress-bar {
    border-radius: 0 1rem 1rem 0;
  }
  .progress_section .verticle_scale {
    position: absolute;
    width: 10px;
    height: calc(100% + 15px);
    background-color: #c4c4c4;
    bottom: 0;
    left: 154px;
  }
  .progress-wrap .progress-content:nth-child(1) .progress-bar {
    background-color: #7a805f;
  }
  .progress-wrap .progress-content:nth-child(2) .progress-bar {
    background-color: #4d759d;
  }
  .progress-wrap .progress-content:nth-child(3) .progress-bar {
    background-color: #b0813c;
  }
  .progress-wrap .progress-content:nth-child(4) .progress-bar {
    background-color: #aa92ae;
  }
  .progress_section .horizontal_scale {
    position: absolute;
    width: 76%;
    height: 10px;
    background-color: #c4c4c4;
    bottom: 0;
    left: 154px;
    display: flex;
    justify-content: space-between;
  }
  .progress_section .horizontal_scale span {
    display: inline-block;
    margin-top: 20px;
    font-size: 14px;
    font-weight: 500;
  }
  .progress-wrap {
    padding-bottom: 1px;
  }
  .progress_section .progress-content .yaxis {
    width: 140px;
    text-align: right;
    cursor: pointer;
  }
  .progress_section .progress-content .yaxis p {
    font-size: 0.875rem;
    pointer-events: none;
  }
  .progress_section .progress-content .yaxis small {
    font-size: 12px;
    pointer-events: none;
  }
  .preview-card h4 {
    font-size: 1.5rem;
    border-bottom: 1px solid #f6f5f3;
    line-height: 2;
    margin-bottom: 1rem;
  }
</style>
<div class="hero-banner">
  <div class="container position-relative">
    <div class="top-content">
      <h3>
        Explore diferent<br>
        levels of self pleasure
      </h3>
      <p>
        The Handyverse is diversed and allows you to explore your pleasure
        in different ways. You can use them as stand alone little pleasure
        makers, or intensify the feeling with up to 600 strokes per minute
        with the Handy!
      </p>
    </div>
    <div class="row align-items-baseline mt-4">
      <div class="col col-lg-4">
        <div class="d-flex align-items-end">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/accessories/handy.png">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/accessories/truegrip.png">
        </div>
        <div class="banner-content py-3 my-4 c1">
          <h6>The True Grip Sleeve</h6>
          <p class="mb-5">
            The Handy comes with the True Grip Sleeve in the box. It is
            extremlly elastic and works for every shape and size!
          </p>
          <button type="button" class="btn btn-secondary">
            Learn more!
          </button>
        </div>
      </div>
      <div class="col">
        <div class="d-flex align-items-end justify-content-center">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/accessories/soft.png">
        </div>
        <div class="banner-content py-3 my-4 c2">
          <h6>Open Ended Soft</h6>
          <p class="mb-5">
            This one works for soft and smooth pleasure lovers.
          </p>
          <button type="button" class="btn btn-secondary">
            Learn more!
          </button>
        </div>
      </div>
      <div class="col">
        <div class="d-flex align-items-end justify-content-center">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/accessories/medium.png">
        </div>
        <div class="banner-content py-3 my-4 c3">
          <h6>Open Ended Medium</h6>
          <p class="mb-5">
            You need a tighter experiance? Try the medium one!
          </p>
          <button type="button" class="btn btn-secondary">
            Learn more!
          </button>
        </div>
      </div>
      <div class="col">
        <div class="d-flex align-items-end justify-content-center">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/accessories/hard.png">
        </div>
        <div class="banner-content py-3 my-4 c4">
          <h6>Open Ended Hard</h6>
          <p class="mb-5">
            You want it rough? The Hard sleeve will do the job!
          </p>
          <button type="button" class="btn btn-secondary">
            Learn more!
          </button>
        </div>
      </div>
      <div class="col">
        <div class="d-flex align-items-end justify-content-center">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/accessories/soon.png">
        </div>
        <div class="banner-content py-3 my-4 c5">
          <h6>New Designs Soon!</h6>
          <p class="mb-5">
            Stay in touch via Newsletter to be first to try New Designs!
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="newsletter bg-lgy">
  <?php get_template_part('template-parts/content', 'newsletter'); ?>
</section>
<section class="qpromotion py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="pe-md-5 pe-0">
          <h2 class="title bordered">You don’t own The Handy?</h2>
          <img class="img-fluid d-block d-sm-none" src="/wp-content/themes/handy/inc/assets/img/sh/hero.jpg">
          <p class="mt-3">
            <span class="weight-600 d-block">
              Do you need one to use sleeves?
            </span>
            Sleeves can be used by themselves as a standalone product, but
            imagine how much better they would fell with The Handy! The
            Handy just brings the sleeves to life!
          </p>
          <p>
            <span class="weight-600 d-block"> What are you missing? </span>
            To be honest? The whole world of interactive pleasure and mind
            blowing orgasms! There is so much The Handy can do! Close your
            eyes and imagine up to 600 strokes per minute, scripts following
            your favourite videos or being remotlly controlled by your
            partner. There is also a whole community that comes up with
            fresh and amazing ideas for new exciting ways to play around!
          </p>
          <div class="d-flex gap-md actions">
            <a class="btn btn-primary product-link" href="/?p=83780">
              Don’t have a Handy yet? Buy NOW
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-none d-sm-block">
        <img class="img-fluid" src="/wp-content/themes/handy/inc/assets/img/sh/hero.jpg">
      </div>
    </div>
  </div>
</section>
<section class="features py-5 theme-dark">
  <div class="container">
    <h2 class="title bordered mb-4">Sleeve Basics</h2>

    <div class="row">
      <div class="col-md-5">
        <img class="img-fluid" src="/wp-content/themes/handy/inc/assets/img/accessories/sleeves-veggies.jpg" alt="">
      </div>
      <div class="col-md-7">
        <div class="ps-md-5 ps-0">
          <p class="mt-4">
            <span class="weight-600 d-block"> Firmness &amp; Flexibility </span>
            Each sleeve type has a diferent firmness &amp; flexibility. The True
            Grip Sleeve that comes with the Handy is the most flexible and
            soft to ensure it’ll fit all the shapes and sizes. If you are
            looking for a slightlly diferent - thighter experiance check the
            open ended sleeve collection. Each of those gives you different
            sensation!
          </p>
          <p class="mt-4">
            <span class="weight-600 d-block"> Pattern</span>
            Every sleeve has a diferent pattern! You can also flipp them
            over to have a softer sensation, and with the open ended
            collection you can use them from either the top or bottom hole,
            for two different experiences! So many ways to play around!
          </p>
          <p class="mt-4">
            <span class="weight-600 d-block"> Care &amp; Longevity </span>
            We love conviniace and we know you love it too! The cleaning is
            a quick and easy job. Just rinse the sleeve with water after use
            – it’s that simple. Oh and when you take good care for your
            sleeves they will serve you for a longer period of time.
          </p>
          <div class="d-flex gap-md mt-4 actions">
            <button class="btn btn-primary">
              Learn more about the Manual Mode &amp; Care
            </button>
            <button class="btn btn-secondary">Shop Sleeves</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="py-5 pickperfect">
  <div class="container">
    <h2 class="title bordered mb-4">
      How to pick the perfect one for you?
    </h2>
    <div class="row">
      <div class="col-md-6">
        <p>
          To be completlly honest we do recomend you try each and every one
          out. Then you can be certain, and supply yourself with diferent
          ones for every occasion.
        </p>

        <p>
          If you want to test them one by one, check out the interactive
          graph we made and see how the pleasure works on diferent sizes!
          Pick your width and lenght on the upper part and see how intenive
          the feeling will be for you! No worries, we’re not saving this
          data anywhere ;).
        </p>

        <p>
          Note that the sleeves don’t last for ever, but with proper care
          you can extend their life extensively!
        </p>
      </div>
      <div class="col-md-6">
        <h5>Your size (cm)</h5>
        <figure>
          <img class="img-fluid" src="/assets/img/size-chart.png" alt="">
        </figure>
      </div>
    </div>
    <div class="row mt-4 preview-row">
      <div class="col-md-6">
        <div class="preview-card active" id="truegrip">
          <div class="card-content">
            <div class="row">
              <div class="col-md-5">
                <img class="img-fluid" src="/assets/img/truegrip.jpg" alt="">
              </div>
              <div class="col-md-7">
                <div data-id="truegrip" class="active preview-content">
                  <h4>Best choice for you</h4>
                  <h6>TrueGrip</h6>
                  <p>This one works for soft and smooth pleasure lovers.</p>
                  <button class="btn btn-shop">Shop now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="preview-card" id="soft">
          <div class="card-content">
            <div class="row">
              <div class="col-md-5">
                <img class="img-fluid" src="/assets/img/truegrip.jpg" alt="">
              </div>
              <div class="col-md-7">
                <div class="preview-content">
                  <h4>Best choice for you</h4>
                  <h6>Open ended soft</h6>
                  <p>This one works for soft and smooth pleasure lovers.</p>
                  <button class="btn btn-shop">Shop now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="preview-card" id="medium">
          <div class="card-content">
            <div class="row">
              <div class="col-md-5">
                <img class="img-fluid" src="/assets/img/truegrip.jpg" alt="">
              </div>
              <div class="col-md-7">
                <div class="preview-content">
                  <h4>Best choice for you</h4>
                  <h6>Open ended medium</h6>
                  <p>This one works for soft and smooth pleasure lovers.</p>
                  <button class="btn btn-shop">Shop now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="preview-card" id="hard">
          <div class="card-content">
            <div class="row">
              <div class="col-md-5">
                <img class="img-fluid" src="/assets/img/truegrip.jpg" alt="">
              </div>
              <div class="col-md-7">
                <div class="preview-content">
                  <h4>Best choice for you</h4>
                  <h6>Open ended hard</h6>
                  <p>This one works for soft and smooth pleasure lovers.</p>
                  <button class="btn btn-shop">Shop now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 top">
        <div class="progress_section">
          <div class="verticle_scale"></div>
          <div class="horizontal_scale">
            <span>Gentle</span>
            <span class="text-danger">Extreme</span>
          </div>
          <div class="progress-wrap">
            <div class="d-flex mb-3 progress-content">
              <div class="mr-4 yaxis" data-show="truegrip">
                <p class="mb-0">TrueGrip*</p>
                <small>*comes with the Handy</small>
              </div>
              <div class="progress flex-1">
                <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
            <div class="d-flex mb-3 progress-content">
              <div class="mr-4 yaxis" data-show="soft">
                <p class="mb-0">Soft</p>
                <small>Open Ended collection</small>
              </div>
              <div class="progress flex-1">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
            <div class="d-flex mb-3 progress-content">
              <div class="mr-4 yaxis" data-show="medium">
                <p class="mb-0">Medium</p>
                <small>Open Ended collection</small>
              </div>
              <div class="progress flex-1">
                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
            <div class="d-flex mb-3 progress-content">
              <div class="mr-4 yaxis" data-show="hard">
                <p class="mb-0">Hard</p>
                <small>Open Ended collection</small>
              </div>
              <div class="progress flex-1 progress-content">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-block d-sm-none text-center m-3">
    <button class="btn btn-secondary btn-block w-100">
      Check out other sleeves in the Shop
    </button>
  </div>
</section> -->
<?php get_template_part('template-parts/content', 'sleeve-compare'); ?>

<?php
get_footer();