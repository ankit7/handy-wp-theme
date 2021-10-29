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
          class="img-fluid mxh-400" />
      </div>
      <div class="col-lg-7 order-lg-first">
        <h1 class="display-4 fw-600">The Handy - The ultimate automatic masturbator</h1>
        <ul class="list-unstyled">
          <li>Proudly designed in Norway by experts in engineering.</li>
          <li>30 days money-back guarantee</li>
          <li>1 year warranty</li>
        </ul>
        <p><a class="btn btn-primary" href="#">Buy The Handy</a></p>
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
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/cs.png" alt="Cara Sutra Logo"
            class="mt-3 img-fluid">
          <h2 class="mt-5">
            "The Handy will turn you into the laziest wanker ever: 10/10"
          </h2>
        </div>
        <div class="splide__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/or.png" alt="Obsession Rouge Logo"
            class="mt-3 img-fluid">
          <h2 class="mt-5">"The Handy has no equal"</h2>
        </div>
        <div class="splide__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/sa.png" alt="Sexual Alpha logo"
            class="mt-3 img-fluid">
          <h2 class="mt-5">
            "One of the best automatic masturbators out there"
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
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/buttons-chart.jpg" alt=""
          class="img-fluid">
      </div>
      <div class="col-md-7 embed-responsive embed-responsive-16by9 mt-5">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Im_HeKTvAQ0"
          title="YouTube video player"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen="" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</section>
<section id="advanced-features">
  <div class="container py-2">
    <h2 class="text-lw text-center mb-3">The Future of Sextech is here</h2>
    <div class="row">
      <div class="col-sm-6 py-5">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/c4ef544cbbe85d962a4d4783a90eb74c.png"
          alt="">
      </div>
      <div class="col-md-6 text-lw mt-3 mt-sm-0">
        <div class="row mb-3">
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/fv.svg" class="img-fluid h-64">
            <h3 class="text-lw">Flawless video syncing</h3>
            <p>Excellent motor control gives the motion perfect timing</p>
          </div>
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/rc.svg" class="img-fluid h-64">
            <h3 class="text-lw">Remote control</h3>
            <p>Give control over to a partner for intimate long-distance sessions.</p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/cp.svg" class="img-fluid h-64">
            <h3 class="text-lw">Content partners</h3>
            <p>We have a growing list of partners with ready-to-sync videos on HandyFeeling.com</p>
          </div>
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/od.svg" class="img-fluid h-64">
            <h3 class="text-lw">Open API for developers</h3>
            <p>Be part of the innovation. Make Handy apps & software for free</p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/fu.svg" class="img-fluid h-64">
            <h3 class="text-lw">Firmware updates</h3>
            <p>New features and improved performance at no extra cost</p>
          </div>
          <div class="col-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/ac.svg" class="img-fluid h-64">
            <h3 class="text-lw">Active community</h3>
            <p>Share your ideas with the Handy team and join other sextech enthusiasts on Discord!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="home-accessories">
  <div class="container py-3">
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
    </div>
  </div>

</section>
<section id="home-faq">
  <div class="container py-5">
    <h2 class="text-center">Frequently asked questions</h2>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <details class="border-bottom-lb border-top-lb py-3">
          <summary>
            <h3>How does the Handy sync up with video?</h3>
          </summary>
          <p>The Handy can sync up with any video which has an accompanying script file that allows the Handy to
            recreate the movements on screen. There are free scripts available made by other users in the Handy
            community, but we also have a growing list of content partners that provide thousands of high-quality
            sync-ready videos, including SexLikeReal, Czech VR, Feel X Videos and The Jerk Off Games. The Handy can sync
            up with any video which has an accompanying script file that allows the Handy to recreate the movements on
            screen. There are free scripts available made by other users in the Handy community, but we also have a
            growing list of content partners that provide thousands of high-quality sync-ready videos, including
            SexLikeReal, Czech VR, Feel X Videos and The Jerk Off Games.</p>
        </details>
        <details class="border-bottom-lb border-top-lb py-3">
          <summary>
            <h3>What does the Handy warranty cover?</h3>
          </summary>
          <p>The Handy™ comes with a one (1) year warranty on the motor, gear and electronics. The warranty period
            starts from the day of purchase and covers defects due to manufacturing errors or faulty parts. The warranty
            does not cover the sleeve or the TrueGrip band.</p>
        </details>
        <details class="border-bottom-lb border-top-lb py-3">
          <summary>
            <h3>How discreet is the packaging?</h3>
          </summary>
          <p>The Handy is packaged in a plain brown box with no logos on the outside. The inner box is branded, but only
            viewable upon opening the package.</p>
          <p>Does NOT apply to EU and US customers:</p>
          <p>
            For packages sent over country borders, there must be a description of goods. By default, this is “massager”
            on invoicing and shipping documents. However it is possible to change the description to something else eg.
            “Handy tool” or “machine”. Please put a note to change the description when you place the order. </p>
        </details>
        <details class="border-bottom-lb border-top-lb py-3">

          <summary>
            <h3>How fast is shipping?</h3>
          </summary>
          <p>All orders will be handled when they are received. Hence, it will be shipped same day or the next,
            depending on the time zone you are in. If you order during the weekend, it will be processed early Monday
            morning.</p>
          <p>You can choose regular shipping or express shipping, but the exact shipping time depends on your
            location.</p>
          <p>In terms of estimated delivery time, this depends on where you are based, however as a general rule the
            following shipping times apply:</p>

          <p>Regular shipping (7-14 days), Express shipping (3-7 days)</p>

          <p>For the US and EU, delivery will be on the shorter end because of where our warehouses are located. </p>

        </details>
        <details class="border-bottom-lb border-top-lb py-3">
          <summary>
            <h3>Is it simple to return the Handy if I decide it’s not for me?</h3>
          </summary>
          <p>Yes! Simply contact us on returns@thehandy.com within the 30 day trial period (starts from the day you
            receive your Handy) to organise your return and refund. The Handy must be returned in the original box.
          </p>
          <p>Please return the product along with the complete box, including all the content except for the sleeve.
            The refund only covers the Handy and not any additional items that were purchased in the shop.</p>
          <p> We will issue a refund as soon as we have received the Handy. The refund will go to the same card that
            you
            used to purchase the Handy, minus the shipping costs, customs/duties clearance and handling. Please note
            that this cost is approximately $25 for the US, but will differ depending on your country.</p>

        </details>
        <details class="border-bottom-lb border-top-lb py-3">
          <summary>
            <h3>What happens to returned Handy machines?</h3>
          </summary>
          <p>Returned Handy machines are not resold and will most likely be used for testing and in future demos. </p>
        </details>
        <details class="border-bottom-lb border-top-lb py-3">
          <summary>
            <h3>I have some other questions that haven’t been answered here. Can I contact you? </h3>
          </summary>
          <p>Yes of course! Send us an email at contact@thehandy.com and we’ll try to answer any questions you may
            have about the Handy. Otherwise, we are also on Reddit r/theHandy.</p>

        </details>
      </div>
    </div>
  </div>
  </div>
</section>
<script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/splide.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/home.js"></script>


<?php
get_footer();