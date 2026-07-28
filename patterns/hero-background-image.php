<?php
/**
 * Title: Hero — Background Image
 * Slug: ajrwebdesign/hero-background-image
 * Categories: banner, featured
 * Description: Full-width hero with a background image, overlay, and centered text.
 */
?>
<!-- wp:cover {"dimRatio":50,"overlayColor":"foreground","minHeight":600,"minHeightUnit":"px","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Your Headline Here', 'ajrwebdesign-theme' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'A short supporting sentence that gives context and encourages the visitor to take action.', 'ajrwebdesign-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get Started', 'ajrwebdesign-theme' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
</div>
<!-- /wp:cover -->
