<?php
/**
 * Title: Case Study Results
 * Slug: ajrwebdesign/case-study-results
 * Categories: featured
 * Description: White band with a centred heading and the full case-study card — the measured before/after proof for the single template.
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

// The heading and intro below are written for an audit (before and after). They carry the
// marker classes `cs-results-title` and `cs-results-intro` so the site plugin can swap their
// text on a site-build case study, which has no "before" (CaseStudies\BuildCopy). Pattern PHP
// runs at registration and cannot read the post being shown, so the swap happens at render.
// With the plugin off, or on an audit, this wording stands.
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Results at a Glance"},"align":"full","backgroundColor":"bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","className":"cs-results-title"} -->
<h2 class="wp-block-heading has-text-align-center cs-results-title"><?php esc_html_e( 'The results at a glance', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"cs-results-intro","textColor":"muted"} -->
<p class="has-text-align-center cs-results-intro has-muted-color has-text-color"><?php esc_html_e( 'Measured with Lighthouse before and after the engagement — same pages, same devices, same conditions.', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:ajrwebdesign-core/case-study-card {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} /--></section>
<!-- /wp:group -->
