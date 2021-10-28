<?php
/**
 * The template for displaying all pages
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); 
include_once get_template_directory() . '/inc/ipstack.php';
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/assets/css/splide.min.css">
<section id="header" class="my-5 py-4">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 order-lg-last">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/handy-anim.gif" alt=""
          class="img-fluid" />
      </div>
      <div class="col-lg-7 order-lg-first">
        <h1 class="display-4 fw-600">The Handy - The ultimate automatic masturbator</h1>
        <ul class="list-unstyled">
          <li>Proudly designed in Norway by experts in engineering.</li>
          <li>30 days money-back guarantee</li>
          <li>1 year warranty</li>
        </ul>
        <p><a class="btn btn-lg add-to-cart" href="#">Buy The Handy</a></p>
      </div>
    </div>
  </div>
</section>
<div class="options mt-3">
  <div class="container border-top-g">
    <div class="splide">
      <div class="splide__track">
        <div class="splide__list">
          <p class="splide__slide text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/wifi.svg" alt="" />
            WiFi & Bluetooth smart control
          </p>
          <p class="splide__slide text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/sync.svg" alt="" />
            Syncs with flat & VR video
          </p>
          <p class="splide__slide text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/fits.svg" alt="" />
            Fits all sizes and shapes
          </p>
          <p class="splide__slide text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/clean.svg" alt="" />
            Ultra simple cleaning
          </p>
          <p class="splide__slide text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/cable.svg" alt="" />
            Mains powered - never lose charge
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="proof" class="carousel py-5">
  <h2 class="text-center">4.4/5 based on 132 reviews</h2>
  <div class="splide">
    <div class="splide__track">
      <div class="splide__list text-center">
        <div class="splide__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/cs.png" alt="Cara Sutra Logo" class="mt-3 img-fluid">
          <h2 class="mt-5">
            "The Handy will turn you into the laziest wanker ever: 10/10"
          </h2>
        </div>
        <div class="splide__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/or.png" alt="Obsession Rouge Logo" class="mt-3 img-fluid">
          <h2 class="mt-5">The Handy has no equal</h2>
        </div>
        <div class="splide__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/sa.png" alt="Sexual Alpha logo" class="mt-3 img-fluid">
          <h2 class="mt-5">
            One of the best automatic masturbators out there"
          </h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="handy-in-action">
  <div class="container py-5">
   <h2 class="text-center">Watch the Handy in action</h2>
    <h3 class="text-center">Enjoy the power both online and offline</h3>
    <div class="row justify-content-center">
      <div class="col-md-5 mt-5">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/buttons-chart.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-md-7 embed-responsive embed-responsive-16by9 mt-5">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Im_HeKTvAQ0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</section>
<section id="advanced-features">
  <div class="container py-5">
    <h2 class="text-lw text-center">The Future of Sextech is here</h2>
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/c4ef544cbbe85d962a4d4783a90eb74c.png" alt="">
      </div>
      <div class="col-md-6 text-lw">
        <div class="row">
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/fv.svg" height="64">
            <h3 class="text-lw">Flawless video syncing</h3>
            <p>Excellent motor control gives the motion perfect timing</p>
          </div>
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/rc.svg" height="64">
            <h3 class="text-lw">Remote control</h3>
            <p>Give control over to a partner for intimate long-distance sessions.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/cp.svg" height="64">
            <h3 class="text-lw">Content partners</h3>
            <p>We have a growing list of partners with ready-to-sync videos on HandyFeeling.com</p>
          </div>
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/od.svg" height="64">
            <h3 class="text-lw">Open API for developers</h3>
            <p>Be part of the innovation. Make Handy apps & software for free</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/fu.svg" height="64">
            <h3 class="text-lw">Firmware updates</h3>
            <p>New features and improved performance at no extra cost</p>
          </div>
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/ac.svg" height="64">
            <h3 class="text-lw">Active community</h3>
            <p>Share your ideas with the Handy team and join other sextech enthusiasts on Discord!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/splide.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/home.js"></script>


<?php
get_footer();