<?php
/**
 * Title: Case Study Delivered
 * Slug: ajrwebdesign/case-study-delivered
 * Categories: featured
 * Description: Tinted band for the single case-study template: a checklist of what was delivered. Only a case study that has the list shows it.
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

// An OPTIONAL band (see case-study-changes.php). It is the tint, not white or grey, because
// its neighbours change: after "What changed" (grey) on a rebuild, straight after the results
// band (white) on a new site, and always before the story (grey). The tint sits between any
// two of them without two neighbours sharing a background.
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"What Was Delivered"},"align":"full","className":"cs-optional-band","backgroundColor":"accent-tint","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull cs-optional-band has-accent-tint-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:ajrwebdesign-core/case-study-card {"variant":"delivered"} /--></section>
<!-- /wp:group -->
