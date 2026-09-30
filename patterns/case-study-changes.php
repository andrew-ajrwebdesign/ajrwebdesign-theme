<?php
/**
 * Title: Case Study Changes
 * Slug: ajrwebdesign/case-study-changes
 * Categories: featured
 * Description: Surface band for the single case-study template: what the work changed, as improvements with before and after bars. Only a case study that has those fields shows it.
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

// An OPTIONAL band. The block inside prints the case study's "what changed" rows, or nothing
// (an audit, or a site build with none filled in). The class `cs-optional-band` tells the site
// plugin to drop the whole section when the block printed nothing (CaseStudies\OptionalBand);
// with the plugin off, global.css hides it.
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"What Changed"},"align":"full","className":"cs-optional-band","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull cs-optional-band has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:ajrwebdesign-core/case-study-card {"variant":"changes"} /--></section>
<!-- /wp:group -->
