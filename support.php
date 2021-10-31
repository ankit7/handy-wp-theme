<?php
/*
* Template Name: Support
*/
  get_header(); 
?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.8/dist/alpine.js" defer></script>
<section id="s-header" class="my-5 py-4">
  <div class="container">
    <h2 class="border-bottom-b">Support</h2>
    <div class="row mt-5">
      <div class="col-lg-5">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/support/hero.png" alt=""
          class="img-fluid float-right">
      </div>
      <div class="col-lg-7 pl-5">
        <p class="fw-600">Frequently Asked Questions </p>
        <p>Got questions? We’ve rounded up the most common queries our users ask and provided simple, easy-to-follow
          answers. Find your answers to questions on shipping, connections or even the technical bits!</p>
        <p class="mt-3"><a href="#" class="btn btn-primary">Ger Answers</a></p>
        <p class="mt-5 fw-600">The Handy Setup</p>
        <p>Need some guidance to help you connect your Handy to Wi-Fi, or maybe you want to learn more on how you can
          care about your device? We have some notes on Handys Firmware Updates.</p>
        <p class="mt-3"><a href="#" class="btn btn-primary">Get Set Up</a></p>
        <p class="mt-5 fw-600">Still Have Questions?</p>
        <p>If you haven't found an answer to your question, please contact us at: <a
            href="mailto:contact@handy.com">contact@handy.com</a> A member of our friendly team will be with you as soon
          as possible.</p>
      </div>
    </div>
  </div>
</section>
<section id="s-faq">
  <div class="container">
    <h2 class="border-bottom-b">Frequently Asked Questions</h2>
    <div class="row justify-content-center">
      <div class="col-md-3">
        <ul class="list-ustyled">
          <li><a href="#faq-general">General</a></li>
          <li><a href="#faq-shipping">Shipping</a></li>
          <li><a href="#faq-conn">Connections</a></li>
          <li><a href="#faq-tech">Technical</a></li>
        </ul>
      </div>
      <div class="col-md-9">
        <h3 class="border-bottom-b">General</h3>
        <div class="accordion">
          <div class="accordion-item">
            <button aria-expanded="false">
              <span class="accordion-title">What are the Handy™ payment methods?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>We are currently using Stripe and Paypal.</p>
            </div>
          </div>
        </div>
        <h3 class="border-bottom-b">Shipping</h3>
        <div class="accordion">
          <div class="accordion-item">
            <button aria-expanded="false">
              <span class="accordion-title">What are the Handy™ payment methods?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>We are currently using Stripe and Paypal.</p>
            </div>
          </div>
        </div>
        <h3 class="border-bottom-b">Connection</h3>
        <div class="accordion">
          <div class="accordion-item">
            <button aria-expanded="false">
              <span class="accordion-title">What are the Handy™ payment methods?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>We are currently using Stripe and Paypal.</p>
            </div>
          </div>
        </div>
        <h3 class="border-bottom-b">Technical</h3>
        <div class="accordion">
          <div class="accordion-item">
            <button aria-expanded="false">
              <span class="accordion-title">What are the Handy™ payment methods?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>We are currently using Stripe and Paypal.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();