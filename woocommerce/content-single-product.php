<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
  <div class="row">
    <div class="col-sm-6">
      <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
      ?>
    </div>
    <div class="col-sm-5 offset-sm-1">
      <div class="summary entry-summary">
        <?php
          /**
           * Hook: woocommerce_single_product_summary.
           *
           * @hooked woocommerce_template_single_title - 5
           * @hooked woocommerce_template_single_rating - 10
           * @hooked woocommerce_template_single_price - 10
           * @hooked woocommerce_template_single_excerpt - 20
           * @hooked woocommerce_template_single_add_to_cart - 30
           * @hooked woocommerce_template_single_meta - 40
           * @hooked woocommerce_template_single_sharing - 50
           * @hooked WC_Structured_Data::generate_product_data() - 60
           */
          do_action( 'woocommerce_single_product_summary' );
          ?>
      </div>
    </div>

  </div>
  <!-- Sleeves -->
  <?php if (is_product() && has_term( 'Sleeve', 'product_cat' )): ?>
    <?php get_template_part('template-parts/content', 'sleeve-compare'); ?>
  <?php endif; ?>
  <!-- Video Summary -->
  <?php if (is_product() && has_term( 'handy', 'product_tag' )): ?>
    <div class="row py-4">
      <div class="embed-responsive embed-responsive-16by9">
        <video class="embed-responsive-item pl-4" controls="" autoplay="" muted loop="" poster="https://staging.thehandy.com/wp-content/themes/handy/inc/assets/img/handy-motion-intro.jpg">
          <source src="/wp-content/themes/handy/inc/assets/vid/handy-motion.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  <?php endif; ?>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );

	?>
</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>