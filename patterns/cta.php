<?php
/**
 * Title: Call to Action — Centered
 * Slug: ajrwebdesign/cta
 * Categories: call-to-action
 * Description: Full-width centered call to action with heading, text, and button.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background">

	<!-- wp:heading {"textAlign":"center","level":2,"textColor":"background"} -->
	<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Ready to Get Started?', 'ajrwebdesign-theme' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Join hundreds of customers who are already benefiting. No commitment required.', 'ajrwebdesign-theme' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"background","textColor":"primary"} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button has-primary-color has-background-background-color has-text-color has-background" href="#"><?php esc_html_e( 'Get Started Today', 'ajrwebdesign-theme' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
