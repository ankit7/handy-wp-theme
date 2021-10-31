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
	<div class="accordions">
		<div class="accordion">
			<div class="accordion-item">
				<button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">Specifications</span><span
						class="icon" aria-hidden="true"></span></button>
				<div class="accordion-content">
					<p class="mb-0"><strong>Length 11-12cm</strong></p>
					<p>*do to the material traites the size might slightlly differ from sleeve to sleeve.</p>
					<p class="mb-0"><strong>Entrance diameter 15-80mm</strong></p>
					<p>*do to the material traites the sleeve is extremlly flexible and can strech extensivelly. Note that the
						Open-Ended Collection sleeves have a wider diameter inside than the entrance one.</p>
				</div>
			</div>
			<div class="accordion-item">
				<button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Patterns</span><span
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
			<div class="accordion-item">
				<button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Longevity</span><span
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
			<div class="accordion-item">
				<button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Care</span><span
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
	</div>
	<?php endif; ?>
	<!-- Handy Specifics USPs & Specs -->
	<?php if (is_product() && has_term( 'Handy', 'product_cat' )): ?>
	<ul class="usp my-3 list-unstyled">
		<li class="mb-2">
			<img src="/wp-content/themes/handy/inc/assets/img/product/return-date.svg" alt="" width="20"
				class="img-fluid mr-2 mb-2">14 days no questions asked return policy on the Handy
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