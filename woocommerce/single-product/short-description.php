<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>
<div class="woocommerce-product-details__short-description border-bottom-lb">
	<?php echo $short_description; // WPCS: XSS ok. ?>
	<!-- Sleeves Specific USPs & Specs -->
	<?php if (is_product() && has_term( 'Sleeve', 'product_cat' )): ?>
	<ul class="usp my-3 list-unstyled">
		<li class="mb-2">
			<img src="/wp-content/themes/handy/inc/assets/img/product/clean.svg" alt="" width="20"
				class="img-fluid mr-2 mb-2">For water based lubricant only!
		</li>
		<li class="mb-2">
			<img src="/wp-content/themes/handy/inc/assets/img/product/safe.svg" alt="" width="20" class="mr-2 mb-2">100% Safe
			and Anonymous
		</li>
		<li class="mb-2">
			<img src="/wp-content/themes/handy/inc/assets/img/product/rating.svg" alt="" width="20" class="mr-2 mb-2">4.5
			Customer Rating
		</li>
	</ul>
	<?php endif; ?>
	<!-- Sleeve specifics accordions -->
	<?php if (is_product() && has_term( 'soft', 'product_tag' )): ?>
		<div class="accordion">
			<div class="accordion-item">
				<button id="accordion-button-5" aria-expanded="false">
					<span class="accordion-title">Features</span><span class="icon" aria-hidden="true"></span></button>
				<div class="accordion-content">
					<ul class="features">
						<li>Inner patterns mimic the sensation of the vagina. </li>
						<li>One end of the soft sleeve has a different “bobble” pattern. When placed at the base on your penis, it
							gives a
							little squeeze which can help you last longer.</li>
						<li>Placing this bobble pattern near the top of your penis brushes against the glans, for a different
							sensation.
						</li>
						<li>This sleeve is recommended for those looking for a softer, stretchier feeling.</li>
					</ul>
				</div>
			</div>
			<div class="accordion-item">
				<button aria-expanded="false"><span class="accordion-title">Care</span><span class="icon"
						aria-hidden="true"></span></button>
				<div class="accordion-content">
					<ul class="care">
						<li>Clean your sleeve directly after use.</li>
						<li>Use soap and water when you clean the sleeve.</li>
						<li>You can turn the sleeve inside out for a deeper clean.</li>
						<li>Dry with a towel or leave it on a clean surface to dry naturally.</li>
					</ul>
				</div>
			</div>
			<div class="accordion-item">
				<button aria-expanded="false">
					<span class="accordion-title">Specifications</span><span class="icon" aria-hidden="true"></span></button>
				<div class="accordion-content">
					<ul class="specs">
						<li>Material: TPE</li>
						<li>Length: 120 - 130mm (4.7” - 5.1”)</li>
						<li>Diameter: 15 – 80mm (0.59” - 3.14”)</li>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (is_product() && has_term( 'medium', 'product_tag' )): ?>
		<div class="accordion">
			<div class="accordion-item">
				<button id="accordion-button-5" aria-expanded="false">
					<span class="accordion-title">Features</span><span class="icon" aria-hidden="true"></span></button>
				<div class="accordion-content">
					<ul class="features">
						<li>Different inner patterns create a snug and secured sensation from one end.</li>
						<li>Using it from another end, the wavey patterns stimulates the frenulum and glans of the penis.</li>
						<li>This sleeve is recommended for those looking for a moderately snug feeling. 
						</li>
					</ul>
				</div>
			</div>
			<div class="accordion-item">
				<button aria-expanded="false">
					<span class="accordion-title">Care</span>
					<span class="icon"
						aria-hidden="true">
					</span>
				</button>
				<div class="accordion-content">
					<ul class="care">
						<li>Clean your sleeve directly after use.</li>
						<li>Use soap and water when you clean the sleeve.</li>
						<li>You can turn the sleeve inside out for a deeper clean.</li>
						<li>Dry with a towel or leave it on a clean surface to dry naturally.</li>
					</ul>
				</div>
			</div>
			<div class="accordion-item">
				<button aria-expanded="false">
					<span class="accordion-title">Specifications</span><span class="icon" aria-hidden="true"></span></button>
				<div class="accordion-content">
					<ul class="specs">
						<li>Material: TPE</li>
						<li>Length: 120 - 130mm (4.7” - 5.1”)</li>
						<li>Diameter: 13 – 60mm (0.51” - 2.36”)</li>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (is_product() && has_term( 'hard', 'product_tag' )): ?>
		<div class="accordion">
			<div class="accordion-item">
				<button id="accordion-button-5" aria-expanded="false">
					<span class="accordion-title">Features</span><span class="icon" aria-hidden="true"></span></button>
				<div class="accordion-content">
					<ul class="features">
						<li>Feel the extreme, the firm tight squeeze of the hard version. The firmness of this sleeve makes it the least stretchy and adaptable to your body of the Open-Ended Collection, so we recommend this firmness only for fans of a very snug experience.</li>
						<li>Criss-crossed inner patterns on one end mimics a licking sensation and you will feel it more on your frenulum.</li>
						<li>Using it from the other end with the bobbly bumps may provide a sensation that mimics that of an anal experience.</li>
						<li>This sleeve is highly recommended for those looking for a super snug, super tight feeling. <b>Using a lubricant is highly recommended.</b></li>
					</ul>
				</div>
			</div>
			<div class="accordion-item">
				<button aria-expanded="false">
					<span class="accordion-title">Care</span>
					<span class="icon"
						aria-hidden="true">
					</span>
				</button>
				<div class="accordion-content">
					<ul class="care">
						<li>Clean your sleeve directly after use.</li>
						<li>Use soap and water when you clean the sleeve.</li>
						<li>You can turn the sleeve inside out for a deeper clean.</li>
						<li>Dry with a towel or leave it on a clean surface to dry naturally.</li>
						<li>Place sleeve back in the foil bag until your next use.</li>
					</ul>
				</div>
			</div>
			<div class="accordion-item">
				<button aria-expanded="false">
					<span class="accordion-title">Specifications</span><span class="icon" aria-hidden="true"></span></button>
				<div class="accordion-content">
					<ul class="specs">
						<li>Material: TPE</li>
						<li>Length: 120 - 130mm (4.7” - 5.1”)</li>
						<li>Diameter: 11 – 50mm (0.43” - 1.9”)</li>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (is_product() && has_term( 'true-grip', 'product_tag' )): ?>
		<div class="accordion">
			<div class="accordion-item">
				<button aria-expanded="false">
					<span class="accordion-title">Care</span>
					<span class="icon"
						aria-hidden="true">
					</span>
				</button>
				<div class="accordion-content">
					<ul class="care">
						<li>Clean your sleeve directly after use.</li>
						<li>Dry with a towel or leave it on a clean surface to dry naturally.</li>
						<li>Place sleeve back in the foil bag until your next use.</li>
					</ul>
				</div>
			</div>
			<div class="accordion-item">
				<button aria-expanded="false">
					<span class="accordion-title">Specifications</span><span class="icon" aria-hidden="true"></span></button>
				<div class="accordion-content">
					<ul class="specs">
						<li>Material: TPE</li>
						<li>Length: 120 - 130mm (4.7” - 5.1”)</li>
						<li>Diameter: 22 – 90mm (0.8” - 3.5”)</li>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<!-- Handy Specifics USPs & Specs -->
	<?php if (is_product() && has_term( 'handy', 'product_tag' )): ?>
	<ul class="usp my-3 list-unstyled">
		<li class="mb-2">
			<img src="/wp-content/themes/handy/inc/assets/img/product/return-date.svg" alt="" width="20"
				class="img-fluid mr-2 mb-2">30 days no questions asked return policy on the Handy
		</li>
		<li class="mb-2">
			<img src="/wp-content/themes/handy/inc/assets/img/product/safe.svg" alt="" width="20" class="mr-2 mb-2">100% Safe
			and Anonymous
		</li>
		<li class="mb-2">
			<img src="/wp-content/themes/handy/inc/assets/img/product/rating.svg" alt="" width="20" class="mr-2 mb-2">4.5
			Customer Rating
		</li>
	</ul>
	<div class="accordion">
		<div class="accordion-item">
			<button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Specifications</span><span
					class="icon" aria-hidden="true"></span></button>
			<div class="accordion-content">
				<ul class="Specifications">
					<li>Variable stroke length: 0-110mm (0-4.3")</li>
					<li>Max speed: 10 strokes per second
						<ul class="specifications-sub">
							<li><small>Theoretical max speed 1600mm/s</small></li>
							<li><small>Practical max speed ~600mm/s</small></li>
						</ul>
					</li>
					<li>Fits <u>all</u> penis sizes and shapes</li>
					<li>Brushless motor</li>
					<li>WiFi and Bluetooth 4.2</li>
					<li>Dual core processor</li>
					<li>TrueGrip sleeve system</li>
					<li>Video synchronization</li>
					<li>Ready for Virtual Reality video</li>
					<li>Remote controllable through internet</li>
					<li>10 sensors:
						<ul class="specifications-sub">
							<li><small>4x Hall sensors</small></li>
							<li><small>2x Temperature sensors</small></li>
							<li><small>2x Infrared sensors</small></li>
							<li><small>1x Lock detect sensor</small></li>
						</ul>
					</li>
					<li>Input power: 100-240V</li>
					<li>Length 230mm (10.5")</li>
					<li>Diameter 70mm (2.75")</li>
				</ul>
			</div>
		</div>
		<div class="accordion-item">
			<button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">Box contents</span><span
					class="icon" aria-hidden="true"></span></button>
			<div class="accordion-content">
				<ul class="specifications">
					<li>The Handy</li>
					<li>Power supply</li>
					<li>Power cable (socket for your country included)</li>
					<li>TrueGrip sleeve</li>
					<li>TrueGrip band</li>
					<li>Manual</li>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>