<?php
/*
* Template Name: Support
*/
  get_header(); 
?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.8/dist/alpine.js" defer></script>
<section id="s-header" class="my-5">
  <div class="container">
    <h2 class="border-bottom-b">Support</h2>
    <div class="row mt-5">
      <div class="col-lg-5">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/support/hero.png" alt=""
          class="img-fluid float-right">
      </div>
      <div class="col-lg-7 pl-5">
        <p class="fw-600">Frequently Asked Questions</p>
        <p>Got questions? We’ve rounded up the most common queries our users ask and provided simple, easy-to-follow
          answers. Find your answers to questions on shipping, connections or even the technical bits!</p>
        <p class="mt-3"><a href="#s-faq" class="btn btn-primary">Get Answers</a></p>
        <p class="mt-5 fw-600">The Handy Setup</p>
        <p>Need some guidance to help you connect your Handy to Wi-Fi, or maybe you want to learn more on how you can
          care about your device? We have some notes on Handys Firmware Updates.</p>
        <p class="mt-3"><a href="https://www.handysetup.com/en/" class="btn btn-primary">Go to Handy Setup</a></p>
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
      <div class="col-md-3 d-none d-sm-block">
        <ul class="list-unstyled mt-4">
          <li><a href="#faq-general">General</a></li>
          <li><a href="#faq-shipping">Shipping</a></li>
          <li><a href="#faq-conn">Connections</a></li>
          <li><a href="#faq-tech">Technical</a></li>
        </ul>
      </div>
      <div class="col-md-9">
        <div id="faq-general">
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
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What will appear on my credit card bill?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>On your bank account / credit card statement it says both Handy™ and “SweetTech”, which is the
                  company behind the Handy™.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What if I regret my purchase after I ordered my Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>We are all allowed to regret, and we will do our best in order to assist if you for some reason do
                  not want the Handy™ you’ve ordered.</p>

                <p>If you regret your purchase after completing the order, please send us an e mail to
                  contact@thehandy.com. If the product has not shipped, we will arrange for a cancellation.</p>

                <p>If the product has shipped we can arrange for a return. The shipping cost both ways must be covered
                  by
                  you.</p>

                <p>We do also offer a 14 days Satisfaction Guarantee for all customers. If you by any chance do not like
                  Handy™, we will accept for you to return the product. However, the freight costs and VAT will have to
                  be covered by you as a customer. Please have a look at the above link for further details.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the "Satisfaction Guarantee"?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>For the Handy™ Machine – 14-Days return policy – “Satisfaction guarantee”</p>
                <p>The 14 days trial start from the moment the Handy™ shipment is received by the customer.</p>
                <p>A refund will be given to the same card that the Customer used in the original purchase, less the
                  cost of actual shipping costs, customs/duties clearance and handling.</p>
                <p>In any case, the Customer forfeits the right to cancel the order for the Handy™ in question should
                  the Seller, at his own discretion uncover any of the following:</p>
                <p>that the returned Product, and/or its packaging is not intact;<br> that the returned Product is
                  without its original external and/or internal packaging;<br> that the returned Product is missing
                  components included in the delivery</p>
                <p><strong>Please send an e-mail to returns@thehandy.com in order to proceed with this
                    guarantee.</strong></p>
                <p>Note! It is very important that you set the invoice amount to 10 EUR/USD. The machine is not usable
                  again and we will only use this for demonstration purposes – hence the low value to avoid double
                  taxation.</p>
                <p><strong>Questionnaire</strong></p>
                <p>To help us become better at what we do, we would like you to briefly answer the questions on the
                  questionnaire. This will be used to improve the product in the future.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">In addition to use the Handy™ out of the box, what other features are
                  available today?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Besides using the device “stand alone”, there are several online functions for you to try to get the
                  best out of your Handy™.</p>
                <p><strong>Remote Control</strong></p>
                <p>This function allows your partner to control the movements of your Handy™ from anywhere in the world
                  using a smart phone, computer, tablet etc that is connected to Wi-Fi.<br> Follow this guide on how to
                  use the remote function: https://www.handysetup.com/use-remote-function.html</p>
                <p><strong>Videos</strong><br> On our web page Handyfeeling.com we have a selection of free scripted
                  adult movies that can be watched in sync with your Handy™. Visit https://handyfeeling.com/videos<br>
                  To be able to watch the video content, be sure that your Handy™ is connected to Wi-Fi and also that
                  you have connected your Handy™ using your Connection Key.<br> We are constantly working on expanding
                  our video library, so we kindly ask you to be patient.</p>
                <p><strong>Local Video</strong><br> On our web page Handyfeeling.com you are able to play videos – that
                  are scripted for use with Handy™ – and watch it while in sync with your Handy™.<br> Visit
                  https://handyfeeling.com/local-video to upload a script and video URL. It is explained in our page how
                  to find scripts.</p>
                <p><strong>Virtual Reality</strong><br> Our partner SexLikeReal has implemented Handy™ for users to
                  watch high quality VR adult videos while synced with Handy™. Simply subscribe&nbsp; at
                  https://www.sexlikereal.com/<br> Remember to have your Handy™ connected to Wi-Fi and thereafter go to
                  the settings menu on SLR and press “Connect To Handy”. It is adviseable to make sure that the content
                  you want to watch is integrated with Handy™, as they haven’t included their whole library for for
                  Handy™ users.</p>
                <p><strong>OPEN API</strong><br> Open API (Application Programming Interface) is a software intermediary
                  that allows two applications to talk to each other. In other words; it’s a solution that makes it
                  possible for third parties to make apps or software to control the Handy™.</p>
                <p>For all of you who wants to check out our open API please visit:
                  https://app.swaggerhub.com/apis/alexandera/handy-api/1.0.0</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Do you have a retailer in USA?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Unfortunately, we don’t have a retailer in USA at the moment. We are still working on getting the
                  product to USA retailers.</p>
                <p>Are you a retailer? Please check here https://www.thehandy.com/us-retailer/</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can I buy Handy™ in physical stores?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Yes! in some parts of the world you can. If you are in Norway you can visit a Kondomeriet-store close
                  to you to check out the Handy™. Otherwise, check out the online store Kondomeriet.no</p>
                <p>If you are located in EU, Handy™ can be purchased in various stores through the wholesale player
                  Orion.</p>
                <p>We are constantly working on getting the Handy™ sold in additional physical stores worldwide,
                  starting with the US.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can I buy Handy™ from Amazon?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>No, we don`t sell Handy™ through Amazon. We have a separate independent warehouse in LA, which makes
                  no need of Amazons services.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Does the unit come with a warranty?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>YES! Of course!<br> The Handy™ is built to last and our test machines in our office/lab has run for
                  over 1500 kilometers / 1000 miles (and still running). The machine is supposed to give hours of
                  pleasure in addition to the future firmware updates that will “make the product new” with additional
                  features and optimization. So be prepared to have your Handy™ for a long time!<br> The Handy™
                  therefore comes with a one (1) year warranty on the motor, gear and electronics. The warranty period
                  starts from the day of purchase and covers defects due to manufacturing errors or faulty parts. The
                  warranty does not cover the sleeve or the TrueGrip band.<br> Please do not open or tamper with the
                  Handy™ if broken, as the warranty will be waived if tampered with. Contact us as soon as possible if
                  the product is broken and we will sort it out right away.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the SLR + Handy™ combo?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>SexLikeReal now has Handy™ integration, meaning that you can watch thousands of high-quality 6K VR
                  adult videos perfectly synced to Handy™.<br> Simply sign up for a SLR membership and enjoy the fun. If
                  you want a special discount then you can use this link <a
                    href="https://www.sexlikereal.com/?a=5f2ab5869736fe24d6685bc2">here</a>.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What will I get when I recieve the Handy™ package?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The Handy™ comes with 1 TrueGrip sleeve, 1 TrueGrip band and a power supply.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is it OK to use a lubricant?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Using lube gives a unique sensational feeling! We recommend you use only water-based lubricants that
                  do not affect the sleeve material.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is Handy™ truly one size fits all?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The Handy™ was buildt to fit all proportions. The soft and pliable Handy™ sleeve attached to the
                  Handy™ TrueGrip-system ensures a snug fit – one size truly fits all!</p>
              </div>
            </div>
          </div>
        </div>
        <div id="faq-shipping">
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
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">When will I receive a tracking number?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>It depends on where you are based. Generally North American and European customers will receive their
                  orders immediately when shipped.</p>
                <p>Other customers will receive their tracking information 1-3 days after shipping, as these customers
                  are handled by our China warehouse. But don’t worry! Even though you have not received a tracking
                  number, we can assure you that it has been processed the next business day after the order is placed.
                </p>
                <p>Send us an e-mail if you are concerned about your delivery; contact@thehandy.com.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How fast will it be shipped?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>All orders will be handled when they are received. Hence, it will be shipped same day or the next,
                  depending on the time zone you are in. If you order during the weekend, it will be processed early
                  Monday morning.</p>
                <p>You can choose regular shipping or express shipping, but the exact shipping time depends on your
                  location.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is shipping included?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>When bying the Handy™, we offer free shipping to Europe and the US. For the rest of the world a small
                  additional fee will be added to your order.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the estimated delivery time?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>This depends on where you are based, however as a general rule the following shipping time applies;
                </p>
                <p>Regular shipping (7-14 days)<br> Express shipping (3-7 days)</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is express shipping?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>When ordering your product(s) you have (in some regions) an option to choose express shipping. For an
                  extra additional fee you can have your Handy™ delivered within just a few days depending on your
                  location.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Does the Handy™ fit a PO box?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The Handy™ shipping box is too large to fit within a regular PO box, so an alternative address or
                  pick-up location is advised. However, some carriers offer pick up and/or other options for larger
                  boxes. Wonder what carrier is being used for your specific country, and if they accept PO box
                  delivery? please contact us at contact@thehandy.com.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can the shipping description be changed?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>We can change the description as “Handy tool” or “machine”. Please put a note to change the
                  description when you place the order..</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can you deliver to Brazil or Malaysia?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Unfortunately it is not possible at this time to buy it due to import restrictions.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can you deliver to Russia?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Unfortunately, it is not possible at this time to buy it in Russia due to import restrictions.
                  However, retailers that purchase from Orion Wholesales will have it as soon as they operate in Russia.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the delivery option to UK?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>We use FedEx as carrier in the UK.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the delivery option to US?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>We currently use FedEx as carrier in the US.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is shipping method to Canada?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>We use UPS to deliver the package.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is VAT included?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>VAT is included in most countries where the shipment is DDP (Delivered Duty Paid). This implies that
                  VAT is being covered by us. You as a customer should feel comfortable that the price you pay gives you
                  the product to your home without additional costs.<br> If your country is not included in the below
                  list, we can ship to you at your own risk.<br> Countries currently offering DDP shipments:</p>
                <p>ALBANIA</p>
                <p>ALGERIA</p>
                <p>ANDORRA</p>
                <p>ANGOLA</p>
                <p>ANGUILLA</p>
                <p>ANTIGUA</p>
                <p>ARGENTINA</p>
                <p>ARUBA</p>
                <p>AUSTRALIA</p>
                <p>AUSTRIA</p>
                <p>BAHAMAS</p>
                <p>BAHRAIN</p>
                <p>BANGLADESH</p>
                <p>BARBADOS</p>
                <p>BELGIUM</p>
                <p>BELIZE</p>
                <p>BENIN</p>
                <p>BERMUDA</p>
                <p>BHUTAN</p>
                <p>BOLIVIA</p>
                <p>BONAIRE</p>
                <p>BOSNIA AND HERZEGOVINA</p>
                <p>BOTSWANA</p>
                <p>BRAZIL</p>
                <p>BRUNEI</p>
                <p>BULGARIA</p>
                <p>BURKINA FASO</p>
                <p>BURUNDI</p>
                <p>CAMBODIA</p>
                <p>CANADA</p>
                <p>CANARY ISLANDS, THE</p>
                <p>CAYMAN ISLANDS</p>
                <p>CHAD</p>
                <p>CHILE</p>
                <p>CHINA, PEOPLES REPUBLIC</p>
                <p>COLOMBIA</p>
                <p>CONGO</p>
                <p>CONGO, THE DEMOCRATIC REPUBLIC OF</p>
                <p>COSTA RICA</p>
                <p>CROATIA</p>
                <p>CURACAO</p>
                <p>CYPRUS</p>
                <p>CZECH REPUBLIC, THE</p>
                <p>DENMARK</p>
                <p>DOMINICA</p>
                <p>DOMINICAN REPUBLIC</p>
                <p>ECUADOR</p>
                <p>EGYPT</p>
                <p>EL SALVADOR</p>
                <p>ERITREA</p>
                <p>ESTONIA</p>
                <p>ETHIOPIA</p>
                <p>FIJI</p>
                <p>FINLAND</p>
                <p>FRANCE</p>
                <p>FRENCH GUYANA</p>
                <p>GABON</p>
                <p>GAMBIA</p>
                <p>GERMANY</p>
                <p>GHANA</p>
                <p>GIBRALTAR</p>
                <p>GREECE</p>
                <p>GRENADA</p>
                <p>GUADELOUPE</p>
                <p>GUATEMALA</p>
                <p>GUERNSEY</p>
                <p>GUINEA-EQUATORIAL</p>
                <p>GUYANA (BRITISH)</p>
                <p>HAITI</p>
                <p>HONDURAS</p>
                <p>HONG KONG</p>
                <p>HUNGARY</p>
                <p>ICELAND</p>
                <p>INDIA</p>
                <p>INDONESIA</p>
                <p>IRELAND, REPUBLIC OF</p>
                <p>ISRAEL</p>
                <p>ITALY</p>
                <p>JAMAICA</p>
                <p>JAPAN</p>
                <p>JERSEY</p>
                <p>JORDAN</p>
                <p>KENYA</p>
                <p>KOREA, REPUBLIC OF (SOUTH K.)</p>
                <p>KUWAIT</p>
                <p>LAO PEOPLES DEMOCRATIC REPUBLIC</p>
                <p>LATVIA</p>
                <p>LEBANON</p>
                <p>LESOTHO</p>
                <p>LIBERIA</p>
                <p>LIBYA</p>
                <p>LIECHTENSTEIN</p>
                <p>LITHUANIA</p>
                <p>LUXEMBOURG</p>
                <p>MACAU</p>
                <p>MADAGASCAR</p>
                <p>MALAWI</p>
                <p>MALAYSIA</p>
                <p>MALDIVES</p>
                <p>MALI</p>
                <p>MALTA</p>
                <p>MARTINIQUE</p>
                <p>MAURITIUS</p>
                <p>MAYOTTE</p>
                <p>MEXICO</p>
                <p>MONACO</p>
                <p>MONGOLIA</p>
                <p>MONTENEGRO, REPUBLIC OF</p>
                <p>MONTSERRAT</p>
                <p>MOROCCO</p>
                <p>MOZAMBIQUE</p>
                <p>MYANMAR</p>
                <p>NAMIBIA</p>
                <p>NETHERLANDS, THE</p>
                <p>NEVIS</p>
                <p>NEW CALEDONIA</p>
                <p>NEW ZEALAND</p>
                <p>NICARAGUA</p>
                <p>NIGER</p>
                <p>NIGERIA</p>
                <p>NORWAY</p>
                <p>OMAN</p>
                <p>PAKISTAN</p>
                <p>PANAMA</p>
                <p>PAPUA NEW GUINEA</p>
                <p>PARAGUAY</p>
                <p>PERU</p>
                <p>PHILIPPINES, THE</p>
                <p>POLAND</p>
                <p>PORTUGAL</p>
                <p>PUERTO RICO</p>
                <p>QATAR</p>
                <p>REUNION, ISLAND OF</p>
                <p>ROMANIA</p>
                <p>RWANDA</p>
                <p>SAN MARINO</p>
                <p>SAUDI ARABIA</p>
                <p>SENEGAL</p>
                <p>SERBIA, REPUBLIC OF</p>
                <p>SEYCHELLES</p>
                <p>SINGAPORE</p>
                <p>SLOVAKIA</p>
                <p>SLOVENIA</p>
                <p>SOUTH AFRICA</p>
                <p>SOUTH SUDAN</p>
                <p>SPAIN</p>
                <p>SRI LANKA</p>
                <p>SUDAN</p>
                <p>SWAZILAND</p>
                <p>SWEDEN</p>
                <p>SWITZERLAND</p>
                <p>TAHITI</p>
                <p>TAIWAN</p>
                <p>TANZANIA</p>
                <p>THAILAND</p>
                <p>TIMOR LESTE</p>
                <p>TOGO</p>
                <p>TRINIDAD AND TOBAGO</p>
                <p>TURKEY</p>
                <p>TURKS AND CAICOS ISLANDS</p>
                <p>UGANDA</p>
                <p>UNITED ARAB EMIRATES</p>
                <p>UNITED KINGDOM</p>
                <p>UNITED STATES OF AMERICA</p>
                <p>URUGUAY</p>
                <p>VANUATU</p>
                <p>VENEZUELA</p>
                <p>VIETNAM</p>
                <p>VIRGIN ISLANDS (BRITISH)</p>
                <p>VIRGIN ISLANDS (US)</p>
                <p>ZAMBIA</p>
                <p>ZIMBABWE</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can I rely on your discretion regarding invoicing, packaging and
                  shipment?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Definitely! Your Handy™ is packed discretely and the invoicing and shipping documents simply state
                  “Massager”.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the delivery time to US?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>If you choose express shipping, it will take 3 – 6 days after you place the order and 6 – 12 days for
                  regular shipping.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What do I do if my tracking number does not work?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The tracking number should be active within 24 hours of receipt of the email notification. If not,
                  feel free to contact us at contact@thehandy.com</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">If I want to return the product, where should I send it?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>If you want to use the Satisfaction Guarantee and return the Handy™ within 14 days, we need you to
                  send an e-mail to returns@thehandy.com. The return shipping address depends on where you are based and
                  you will get further information when you reach out.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is Toll included in the total price?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>In most cases, the VAT and TOLL is included in the price you receive.<br> However, there are some
                  countries where it might be challenging to estimate what customs will charge in tolls and other costs.
                  If you live in one of the following countries, you will be contacted by one of our team members to
                  assure that you want us to ship the order to you at your own risk.</p>
                <p>Countries where we ship at the customers’ own risk;</p>
                <p>AFGHANISTAN</p>
                <p>ARMENIA</p>
                <p>AZERBAIJAN</p>
                <p>BANGLADESH</p>
                <p>BOLIVIA</p>
                <p>BELARUS</p>
                <p>CHILE</p>
                <p>COSTA RICA</p>
                <p>CUBA</p>
                <p>ALGERIA</p>
                <p>ECUADOR</p>
                <p>EGYPT</p>
                <p>GEORGIA</p>
                <p>GUATEMALA</p>
                <p>HONDURAS</p>
                <p>INDONESIA</p>
                <p>INDIA</p>
                <p>IRAQ</p>
                <p>IRAN (ISLAMIC REPUBLIC OF)</p>
                <p>KYRGYZSTAN</p>
                <p>KOREA, THE D.P.R OF (NORTH K.)</p>
                <p>KUWAIT</p>
                <p>KAZAKHSTAN</p>
                <p>LEBANON</p>
                <p>LIBYA</p>
                <p>MOROCCO</p>
                <p>MOLDOVA, REPUBLIC OF</p>
                <p>MYANMAR</p>
                <p>NICARAGUA</p>
                <p>PERU</p>
                <p>PAKISTAN</p>
                <p>QATAR</p>
                <p>RUSSIAN FEDERATION, THE</p>
                <p>SUDAN</p>
                <p>SAN MARINO</p>
                <p>SOMALIA</p>
                <p>SOUTH SUDAN</p>
                <p>EL SALVADOR</p>
                <p>SYRIA</p>
                <p>TAJIKISTAN</p>
                <p>TUNISIA</p>
                <p>TURKEY</p>
                <p>UKRAINE</p>
                <p>UZBEKISTAN</p>
                <p>VIETNAM</p>
                <p>SOMALILAND, REP OF (NORTH SOMALIA)</p>
                <p>YEMEN, REPUBLIC OF</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Will I recieve a customs clearance fee on top of my payment?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>NO! If that happens it might be a scam and you should contact us at contact@thehandy.com</p>
              </div>
            </div>
          </div>
        </div>
        <div id="faq-conn">
          <h3 class="border-bottom-b">Connections</h3>
          <div class="accordion">
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How do I connect my Handy™ to Wi-Fi?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Follow this guide:<br> <a
                    href="https://www.handysetup.com/en/docs/getting-started/connect-handy-to-wifi/">https://www.handysetup.com/en/docs/getting-started/connect-handy-to-wifi/</a>
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can the Handy™ work on open guest networks such as hotels?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>No, that will not work. Our suggestion is to use Handy™ with a hotspot on your phone or PC. Some
                  newer models have dual channel Wi-Fi that can make the Handy™ connect to the hotel network through
                  your PC/smartphone.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How do I reach the Handy™ setup screen if it doesn't appear
                  automatically?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>“Open a web browser on your device that is connected to the handy setup Wi-Fi. Then go to the url
                  http://192.168.1.1</p>
                <p>This will force open the Handy™ setup screen.”</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How to set up Handy™ when the Wi-Fi network doesn't show up when setting
                  it up?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Try the setup process again from scratch.</p>
                <p>If it still doesn’t work you can you do this:</p>
                <ol>
                  <li>When you are in the Wi-Fi setup process click on another Wi-Fi network name.</li>
                  <li>Then change the name to your networks name</li>
                  <li>Set the password of your network.</li>
                </ol>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Do I need an Internet connection to use the Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>No! Handy™ works just as well without an Internet connection. In fact, the basic design is offline
                  performance (Wi-Fi is default off). However, you need to connect the device in order to update the
                  firmware if you would like to improve your Handy™ when new firmware is released. You also need Wi-Fi
                  for online services such as video sync and remote control.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Do I need a computer to use the Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>No, you do not need an external device to use Handy™. To use the machine in offline mode you don’t
                  need anything else.</p>
                <p>If you want to use the online services (video sync and remote control) you will need a PC, Mac,
                  smartphone or tablet to configure your Handy™.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Do I need a specific device to setup Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>You can use almost all devices with Wi-Fi to setup your Handy™. We recommend using a PC, Mac,
                  smartphone, tablet or an Ipad for the setup.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is there a Bluetooth connection on the Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>With the release of the latest Handy firmware, the Handy now uses Bluetooth and the Handy Connect app
                  (for <a href="https://apps.apple.com/cg/app/handy-connect/id1547972409">iOS</a> and <a
                    href="https://play.google.com/store/apps/details?id=com.handy.ui">Android</a>) to configure Wi-Fi.
                  However, no local Bluetooth Handy&nbsp; controls are available at this moment.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can the Handy™ be used for long distance relationships?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Yes, it can. Handy™ has Wi-Fi and can be remote controlled through the internet! Simply give your
                  Connection Key to your partner, then he or she can go to our website and control your Handy™!</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How do I connect to remote control?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>You will have to give your Connection Key to your partner. Simply go to <a
                    href="https://handyfeeling.com/remote">Handyfeeling.com/remote</a> and follow the instructions on
                  the screen.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How do I sync Handy™ to video?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>You can go to <a
                    href="https://handyfeeling.com/synchronization">https://handyfeeling.com/synchronization</a> and
                  connect your Handy to check synchronization.</p>
                <p>You can also explore our video partners and the associated offers and discounts at <a
                    href="https://handyfeeling.com/partners">https://handyfeeling.com/partners</a>.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How do I script my favourite videos for Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Scripting videos to sync with Handy™ can be done in many ways. We recommend downloading the OneTouch
                  Scripter which allows you to create scripts without any programming knowledge.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What's the Handy™ API and how can I use it?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Open API (Application Programming Interface) is a software intermediary that allows two applications
                  to talk to each other. In other words; it’s a solution that makes it possible for third parties to
                  make apps or software to control the Handy™. Our partner SexLikeReal is an example of a provider who
                  uses our API as they have integrated the Handy™ in their platform allowing their users to watch their
                  content while the Handy™ is synced to the movements in the videos.</p>
                <p>For all of you who wants to check out our open API please visit:
                  https://app.swaggerhub.com/apis/alexandera/handy-api/1.0.0</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Where can I find scripts for my Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>There are available scripts via third party providers such as https://discuss.eroscripts.com/. We are
                  currently preparing a guide on handyfeeling.com where you can find new scripts and also a subreddit
                  for the same purpose.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How do I use the SLR app with Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Buy scripts for any of the current Interactive scenes <a
                    href="https://www.sexlikereal.com/tags/interactive-sex-toys-vr?a=5e0ec5a29736fe3a0e639e72">here</a>:
                </p>
                <ul>
                  <li>No proxy app or phone is required for Handy™ like for other toys. It works directly with the SLR
                    app.</li>
                  <li>Press the Wi-Fi button on your Handy</li>
                  <li>Launch the SLR app or DeoVR</li>
                  <li>Click Settings</li>
                  <li>Enter your Handy™ security key</li>
                  <li>Press “”Connect””</li>
                  <li>The Handy™ device should stay highlighted “”light blue”” (not flashing) and the SLR app will say
                    connected!</li>
                  <li>Open a video that has a matching script in the SLR app either streaming or local playback</li>
                </ul>
                <p><strong>For local video playback</strong></p>
                <ul>
                  <li>The script and the video file need to be renamed exactly the same and in the exact same folder
                    e.g. = VR/InteractiveVideo.mp4 and VR/InteractiveVideo.funscript</li>
                </ul>
                <p>There’s also /Interactive folder in root on Android devices and /Documents on Windows where you can
                  put the script separate from the video that also supports DLNA.)</p>
                <p><strong>For Streaming Video with a local script</strong></p>
                <ul>
                  <li>Please put a script into /Interactive folder with video ID in filename like 15447.funscript for
                    https://www.sexlikereal.com/scenes/hard-sell-15447 (also shown in player panel in SLR app) “</li>
                </ul>
                <p>Once the video is playing, If the app can see the funscript file, then there will be a “BLUE Sex toy
                  icon” in the video player menu UI<br> If you do not get a notification saying that the ‘funscript is
                  being sent to the SLR servers” , then toggle the “BLUE sex toy icon” to OFF, then back to ON until it
                  says the script is being sent to the servers.<br> Wait up to 10 seconds to ensure the script is loaded
                  onto the device by looking for the “successful” notification<br> Now play the video and watch your toy
                  move with the video!</p>
                <p>-TIPS: Set your “Script Video Delay” to (-50 ms) in the player UI settings at the bottom of the menu
                  for best experience</p>
                <p>-TIPS: Once the video is playing – tap the UP arrow up to 4 times to Maximize stroke depth/length for
                  best experience, and decrease to your liking on the fly as the video is playing</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can I use any VR headsets?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Yes, all headsets, including phone based headsets will work, but it will not necessarily give you the
                  best experience. If you are looking for the “real deal” then we recommend buying Oculus Quest 2.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Does the Handy™ only work with VR video, or can it be controlled by PC VR
                  apps like 3dxchat or Virtamate?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Currently only video. But we are working with some game developers to incorporate Handy™ into their
                  VR games:-) Follow us on reddit, as we are announcing such news there.</p>
                <p>If any of these games wants to support Handy™ we have an open and very simple API. Integration should
                  be easy.</p>
              </div>
            </div>
          </div>
        </div>
        <div id="faq-tech">
          <h3 class="border-bottom-b">Technical</h3>
          <div class="accordion">
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What should I do when the Handy™ is not working?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <ol>
                  <li>Make sure you have the latest firmware</li>
                  <li>Unpower the Handy™</li>
                  <li>Move the slider (the part where you attach the sleeve) to around center of the machine</li>
                  <li>Power the machine</li>
                  <li>If this doesn’t work please contact us at contact@thehandy.com</li>
                </ol>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Does Handy™ run on batteries?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>No. We designed Handy™ with a quiet and powerful brushless motor to meet power and control
                  requirements. Including a battery pack in the housing would both increase weight and ruin the
                  ergonomics. And imagine the disappointment if you run out of power just before….</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the weight of the Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Around 2.8 pounds.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the stroke length of the Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Stroke length is 0 – 4.3 inches.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the demensions on the package?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The dimensions for the Handy™ shipping box is 11.4 x 7.8 x 4.3 inches.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the Handy™ power supply voltage?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Voltage input for Handy™ is 100-240V and accept 50 and 60Hz.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How long is the power cord?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The cable from the power adapter to Handy™ is 59 inches, and from the power adapter to the socket the
                  cable is ~39 inches. So a total of 98 inches from socket to the machine.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is it ok to use an extension cord?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The cable from the power adapter to the socket is a regular C7 power cable that you can get in all
                  lengths. Very easy to find online if you want a longer option.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the decible level of the Handy™?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Unfortunately we don’t have decibel measurement at the moment. We can tell you that it is not silent,
                  but makes less noise than our competitors. At lower speed it is almost silent, but at max speed it
                  makes noise.</p>
                <p>Here is a video with some sound (not completely accurate, but you will get the idea):
                  https://youtu.be/g3p_K5u7mwU</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the sleeve size?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Our Handy™ sleeve is extremely flexible, which makes it fit all sizes! Dimensions: lenght ≈ 4.5
                  inches, diameter bottom end ≈ 2 inches, diameter top end ≈ 1.65 inches, diameter hole ≈ 1.18 inches.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">What is the sleeve made of?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The sleeve is made by soft TPE.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is the sleeve closed or open ended?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>The sleeve that ships with the Handy is a closed sleeve. We also have an open sleeve available in our
                  store.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How do I clean the sleeve?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>You can clean the sleeve simply with water, or you can use a specialized cleaning solution for
                  similar toys that we also sell in our website (pjur AQUA lube).</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Can the Handy™ be used with other sleeves?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Yes, you can use your own sleeves. Check out our blogpost:
                  https://www.thehandy.com/want-to-make-your-manual-stroker-automatic/</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Are there more sleeves coming soon?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Not in near future, but we are constantly working on developing and expanding our Handy™ range and
                  additional sleeves are on the drawing board. We will be sure to announce any product news and updates
                  through our channels!</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How can I safely warm up the sleeve?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>As the TrueGrip sleeve material doesn’t withstand high temperatures and easily melts, warming up the
                  sleeve is at users own risk.</p>
                <p>The best way to warm it up is by putting the sleeve in a bowl of warm water.</p>

              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Will I be able to buy new sleeves separately if they go into
                  production?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Yes! When we launch additional sleeves – and other products to add to your Handy™- you will be able
                  to purchase them separately.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">When will the new Velcro bands come in stores and what are new about
                  them?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>Our new bands are in stores now, and you will also get them if you buy it from our webstore today.
                  The bands are made of higher quality which makes them more durable and they are also easier to clean.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Do you have an instruction for the band?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>
                <p>Please follow this <a
                    href="https://www.handysetup.com/other/Installation%20guide%20-%20band.pdf">instruction</a>.</p>
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Do you sell a Fleshlight adapter?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>If you have access to a 3D printer you can download our drawings for free now and print your own:
                  https://www.thehandy.com/fleshlight-mount-for-handy/</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">How well does the Handy™ work with a full sized fleshlight?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>So far only the smallest Fleshlights can be attached. You can make your custom locking to get it to
                  fit, but no official guide on that. We will however make an add-on to make most Fleshlights fit to
                  Handy™. The add-on can be attached to the current version of Handy™.</p>
                <p>Please note that our sleeve is designed for automatic movements and scored higher in user test then
                  the Fleshlight.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button aria-expanded="false">
                <span class="accordion-title">Is the Handy™ water resistant / waterproof?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>No! Handy is NOT waterproof. Using Handy in a wet environment is a health hazard and can result in
                  fatal electric shock.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();