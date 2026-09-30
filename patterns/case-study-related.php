<?php
/**
 * Title: Case Study Related
 * Slug: ajrwebdesign/case-study-related
 * Categories: featured
 * Description: Surface band for the single case-study template: the next case study to read, and the link to all of them.
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

// An OPTIONAL band (see case-study-changes.php): it needs another case study to exist. It
// carries the page's link back to the list of case studies.
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"More Case Studies"},"align":"full","className":"cs-optional-band","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull cs-optional-band has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:ajrwebdesign-core/case-study-card {"variant":"related"} /--></section>
<!-- /wp:group -->
