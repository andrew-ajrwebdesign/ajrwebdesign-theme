<?php
/**
 * Title: Testimonial — Single Centered
 * Slug: ajrwebdesign/testimonial
 * Categories: testimonials
 * Description: Single centered testimonial quote with author name and role.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">"<?php esc_html_e( 'This is where your customer\'s testimonial goes. Make it specific and results-focused — vague praise is less convincing than a concrete outcome.', 'ajrwebdesign-theme' ); ?>"</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
	<p class="has-text-align-center"><strong><?php esc_html_e( 'Customer Name', 'ajrwebdesign-theme' ); ?></strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Job Title, Company', 'ajrwebdesign-theme' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
