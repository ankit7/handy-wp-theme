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
	<div id="accordion" class="p-accordion w-100">
		<div class="card">
			<div class="card-header p-0" id="headingOne">
				<p class="mb-0">
					<button class="d-flex align-items-center justify-content-between btn btn-link collapsed"
						data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><br>
						Specifications<br>
						<i class="fa" aria-hidden="true"></i><br>
					</button><br>
				</p>
			</div>
			<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body p-0">
					<ul class="specifications">
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
		</div>
		<div class="card">
			<div class="card-header p-0" id="headingTwo">
				<p class="mb-0">
					<button class="d-flex align-items-center justify-content-between btn btn-link collapsed"
						data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><br>
						Box contents<br>
						<i class="fa" aria-hidden="true"></i><br>
					</button><br>
				</p>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body p-0">
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
</div>