<?php
/**
 * Title: Team — 3 Column Grid
 * Slug: ajrwebdesign/team-grid
 * Categories: featured
 * Description: Three column team member grid with photo, name, and role.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Meet the Team', 'ajrwebdesign-theme' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php esc_html_e( 'Team Member Name', 'ajrwebdesign-theme' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Job Title', 'ajrwebdesign-theme' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php esc_html_e( 'Team Member Name', 'ajrwebdesign-theme' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Job Title', 'ajrwebdesign-theme' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php esc_html_e( 'Team Member Name', 'ajrwebdesign-theme' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Job Title', 'ajrwebdesign-theme' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
