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
</div>
<ul class="usp border-bottom-lb my-3 list-unstyled">
  <li class="mb-2">
    <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/product/return-date.svg" alt="" width="20" class="img-fluid mr-2 mb-2">
    14 days no questions asked return policy on the Handy
  </li>
  <li class="mb-2">
    <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/product/safe.svg" alt="" width="20" class="mr-2 mb-2">
    100% Safe and Anonymous
  </li>
  <li class="mb-2">
    <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/img/product/rating.svg" alt="" width="20" class="mr-2 mb-2">
    4.5 Customer Rating
  </li>
</ul>