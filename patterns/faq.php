<?php
/**
 * Title: FAQ — Stacked
 * Slug: ajrwebdesign/faq
 * Categories: featured
 * Description: Stacked FAQ section with heading and question/answer pairs.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Frequently Asked Questions', 'ajrwebdesign-theme' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}}} -->
	<p class="has-text-align-center"><?php esc_html_e( 'Everything you need to know. Can\'t find what you\'re looking for? Get in touch.', 'ajrwebdesign-theme' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'What is your refund policy?', 'ajrwebdesign-theme' ); ?></summary>
	<!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
	<p><?php esc_html_e( 'We offer a full refund within 30 days of purchase, no questions asked. Simply contact our support team and we\'ll process it promptly.', 'ajrwebdesign-theme' ); ?></p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'How do I get started?', 'ajrwebdesign-theme' ); ?></summary>
	<!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
	<p><?php esc_html_e( 'Sign up for an account, choose your plan, and you\'ll be up and running in minutes. No credit card required to start your free trial.', 'ajrwebdesign-theme' ); ?></p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'Can I change my plan later?', 'ajrwebdesign-theme' ); ?></summary>
	<!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
	<p><?php esc_html_e( 'Yes, you can upgrade or downgrade your plan at any time from your account settings. Changes take effect immediately.', 'ajrwebdesign-theme' ); ?></p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'Do you offer support?', 'ajrwebdesign-theme' ); ?></summary>
	<!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
	<p><?php esc_html_e( 'Yes. All plans include email support. Pro and Enterprise plans include priority support with guaranteed response times.', 'ajrwebdesign-theme' ); ?></p>
	<!-- /wp:paragraph --></details>
	<!-- /wp:details -->

</div>
<!-- /wp:group -->
