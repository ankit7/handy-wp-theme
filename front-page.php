<?php
/**
 * The template for displaying all pages
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); 
include_once get_template_directory() . '/inc/ipstack.php';
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/assets/css/splide.min.css">
<div class="header my-5 py-4">
  <div class="container-fluid p-0">
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-last m-3 m-lg-0">
        <div class="hero-wrapper">
          <img class="img-fit" src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/top-hero.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 order-lg-first mt-4 mt-sm-0 first-col">
        <p class="fw-600">Say hi to The Handy™</p>
        <h2 class="display-4 fw-600">Pleasure, revolutionised </h2>
        <p>The interactive automatic stroker. Proudly designed in Norway using state-of-the-art technology to bring you
          the most technically advanced machine of its kind on the market. Choose your own pleasure path: play with
          partners, sync with videos, connect with VR and more.</p>
        <p class="h5 fw-600 text-blg"><span class="product-price"><?= $handy_geo['price'] ?></span> + <span class="product-shipping"><?= $handy_geo['shipping'] ?></span></p>
        <a class="btn add-to-cart product-link btn-lg" href="/cart/?add-to-cart=<?= $handy_geo['id'] ?>">Treat
          yourself</a>
      </div>
    </div>
  </div>
</div>
<div class="options mt-3">
  <div class="container border-top-g">
    <div class="splide">
    <div class="splide__track">
      <div class="splide__list">
        <p class="splide__slide text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/wifi.svg" alt="" />
          Wifi & Bluetooth smart control
        </p>
        <p class="splide__slide text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/sync.svg" alt="" />
          Sync with adult movies
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
          No batteries - Lasts forever
        </p>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="carousel">
  <div class="splide">
    <div class="splide__track">
      <div class="splide__list text-center">
        <div class="splide__slide">
          <h3>One of the best automatic masturbators out there</h3>
          <p>Sexual Alpha</p>
          <p>
            "If you’re looking for one of the best automatic masturbators out there, then the Handy is a good bet. It’s not cheap, but it’s worth the investment. The interactive options are improving with every update, and the variety of strokers you can use it with is unparalleled."
          </p>
        </div>
        <div class="splide__slide">
          <h3>The Handy has no equal </h3>
          <p>Obsession Rouge</p>
          <p>
            "The Handy has no equal as far as I’m concerned. It is an amazing sex toy and has set the bar high for other smart sex toys. The thing I like most about The Handy is how good it would be for a long distance relationship. Using this toy would be a really great way to keep the spice in a relationship going, even if you’re in a different part of the world to one another."
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="first-time-wrapper">
  <div class="container text-lw p-4">
    <h2 class="text-lw border-bottom-lw">Hardware: Adaptable, Pleasurable, Powerful</h2>
    <div class="row">
      <div class="col-sm-4 mb-3">
        <h4 class="text-lw mb-0">Choose your speed</h4>
        <p>Go as fast or as slow as you like, with speeds up to 10 strokes per second.</p>
        <h4 class="text-lw">Control the stroke length and zone</h4>
        <p>Experience stroke lengths ranging from 0 to an incredible 110mm (0-4,3”). Find your exact sweet spot.</p>
        <h4 class="text-lw mb-0">Adjust the grip</h4>
        <p>Because Handy™ fits all sizes, pleasure is guaranteed. Adjust the unique TrueGrip system to feel a firm grip,
          a soft touch, or to whatever feels right for you.</p>
        <p><a class="btn add-to-cart" href="/cart/?add-to-cart=<?= $handy_geo['id'] ?>">Buy Now &#8211; <?= $handy_geo['price'] ?></a></p>
      </div>
      <div class="col-sm-8 ps-5 mt-0 mt-sm-3 embed-responsive embed-responsive-16by9 mb-3">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Im_HeKTvAQ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<div class="best-materials-wrapper">
  <div class="container p-4">
    <h2 class="border-bottom-b">Software: Easily accessible next-generation pleasure</h2>
    <div class="row mt-4">
      <div class="col-sm-6">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/c4ef544cbbe85d962a4d4783a90eb74c.png" alt="">
      </div>
      <div class="col-sm-6 mt-4 mt-sm-0 py-5">
        <p class="fw-600 mt-0 mb-0">Video Synchronisation</p>
        <p class="mb-4">Handy turns your fantasies into reality. Connect with both flat and VR video to synchronise movements with the action on screen - what you see is what you feel.</p>
        <p class="fw-600 mb-0">Open API for developers</p>
        <p class="mb-4">
          Be a part of the innovation. Our open API enables third parties to create software, apps and web services for the Handy for free.
        </p>
        <p class="fw-600 mb-0">Firmware Updates</p>
        <p class="mb-4">
          We are constantly working to upgrade the Handy, so we provide ongoing firmware updates to provide new features and improved performance at no extra cost to you.
        </p>
        <!--<p class="fw-600 mb-0">Fantasies made real</p>-->
        <!--<p class="mb-4">-->
        <!--  It's hard to believe one stroker can do so many things! Handy turns your fantasies into reality. You can Sync to adult movies, VR and operate your Handy  remotely by your loved one from any part of the World!-->
        <!--</p>-->
        <a class="btn add-to-cart product-link btn-lg" href="https://www.thehandy.com/cart/?add-to-cart=83780">Buy Now - <span class="product-price">$169</span></a>
      </div>
    </div>
        
    <h2 class="border-bottom-b">Got more questions? We have answers.</h2>
    <div class="row pb-5">
      <div class="col-sm-6">
        <h4 class="">Kickstart your journey</h4>
        <p>You bought your first Handy, or maybe you just want to know it all before the purchase? Either way we’ve got you covered.</p>
        <a class="btn btn-secondary mt-3 btn-lg" href="/start-here/">Get Started</a>
      </div>
      <div class="col-sm-6">
        <h4 class="">Frequently Asked Questions</h4>
        <p>We've put together the most common questions and solutions in this FAQ section. Take a look at it and if the issue you have is not covered, feel free to reach out to us!</p>
        <a class="btn btn-faq mt-3" href="/faq/">Find your answers</a>
      </div>
    </div>

  </div>
</div>
<div id="newsletter">
  <div class="container px-5">
    <div class="row gx-5 justify-content-center">
      <div class="col-xl-7 text-center px-3">
        <h2>Want to see how the Handy evolves?</h2>
        <p>Our newsletter is perfect for you! You’ll also get 7% off your first purchase, how cool is that?<br> Sign up for our newsletter and get a 7% discount code (Does not apply to sales items)</p>
        <form action="https://b23c3e9e.sibforms.com/serve/MUIEACf8fFNOo7-iiFbqCtzYXJeDKhwU5zaXkZ7VpFDFaGDNo4g1cuJuixgVKEBa-ecH4gC3vsJb6ouYtJzbGy0AzskjFss0TMV1lPqADVOMM8W2aJmK_ZDKyG7TQK6sCnR6l6nvIbQIZbw_2fQscNB-zAdVCExswqYAy6ws819Mjw9bgBA9ppssfQdVtVWbVJcPogiudLRg0fhq" method="POST" class="mb-4 form-inline justify-content-center">
			<input placeholder="Your email address " type="email" name="EMAIL" class="form-control">
			<button type="submit" class="btn btn-primary ml-3 py-2 px-4 mt-2 mt-sm-0">Subscribe</button>
			<input type="hidden" name="locale" value="en">
		</form>
      </div>
    </div>
  </div>
</div>
<div class="our-why">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8 text-center">
        <h2 class="text-white">Our Story</h2>
      <p>
        With the Handy, we want to kickstart the sextech evolution.</p>
        <p>It all started with the simple question of “can we make an automated stroker that actually works and does the job well?” Now, we are have our sights set on exploring what technology can make possible for sexual experiences and intimate connections. </p>
        <p>We are passionate about opening up the conversation on sexual self-discovery without shame - that’s the key to the most innovative ideas and to better sex!
</p>
      </div>
    </div>
  </div>
</div>
<div class="community-wrapper py-5">
  <div class="container px-4 px-sm-0">
    <h2 class="border-bottom-b">Explore the Handyverse</h2>
    <div class="row mt-4">
      <div class="col-sm-6 py-5">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/j-p.jpg" alt="">
      </div>
      <div class="col-sm-6">
        <h2>
        Join us on The Handy Feeling platform - the Gateway to the Handyverse, and explore endless online possibilities for enhancing your pleasure.
        </h2>
        <h4 class="mb-0">Handy synchronisation</h4>
        <p>We've built a still-growing library together with several amazing content providers to deliver Handy synchronization with their video collections. There are freebies to kick-start you on your exploration journey and some cool deals if you are hungry for more.<a href="https://handyfeeling.com/partners" class="d-block text-lb">handyfeeling.com/partners</a>
        </p>
        <h4 class="mb-0">Local Video Player</h4>
        <p>
        Do you have your videos and Handy-compatible scripts? Or maybe you don't want to log in to our partner's sites? No worries, you can synchronize your videos with the Handy locally. <a href="https://handyfeeling.com/local-video" class="d-block text-lb">handyfeeling.com/local-video</a>
        </p>
        <h4 class="mb-0">Remote control</h4>
        <p>A long-distance relationship is not a problem now. This remote app gives you or a partner full motion control over the Handy. Put your Handy into your luggage and play whenever and with whoever you like. <a href="https://handyfeeling.com/remote" class="d-block text-lb">handyfeeling.com/remote</a>
        </p>
        <h4 class="mb-0">Active, supportive, creative community</h4>
        <p>The cherry on top - our incredible community plays a big part of shaping the Handyverse. You can explore the works of other members, contribute your own, or get in touch to share your ideas. Whether you’re just curious or an active user looking for more - come join us! <a href="https://www.handyfeeling.com/community" class="d-block text-lb">handyfeeling.com/community</a></p>
        <div class="row align-items-center">
          <div class="col-sm-6">
            <a class="btn visit btn-lg px-sm-4" href="https://handyfeeling.com">
              <img alt="" src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/C6CC7BC6-81C2-44C7-93ED-88FA2765ADE9@3x.png" width="12" class="mr-2">Visit Handy Feeling
            </a>
          </div>
          <div class="col-sm-6">
            <a class="btn btn-lg add-to-cart" href="/cart/?add-to-cart=<?= $handy_geo['id'] ?>">Buy Now - <?= $handy_geo['price'] ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="diary-wrapper">
  <div class="diary py-4">
    <p>The Handy Diary</p>
    <!--<h2 class="m-0">Sample text here</h2>-->
    <a class="btn btn-outline-primary text-lb mb-5" href="/blog/">Access the journal</a>
    <div class="images">
      <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/C8C49FF1-D4D3-4646-B910-701E3C67D9B5@3x.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/0ED5E4A3-A8E5-4B97-BE82-73A008AF8452@3x.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/E50F4051-85DD-47E8-A208-E570A5A05E6C@3x.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/825360BC-E949-47A3-9FFF-204E13284152@3x.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/555DE840-2FC8-4AEA-97DB-836082B7C989@3x.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/front/91C86CE4-3B2A-4990-AD78-DB83AF91852C@3x.png" alt="">
    </div>
  </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/splide.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/assets/js/home.js"></script>

<?php
get_footer();