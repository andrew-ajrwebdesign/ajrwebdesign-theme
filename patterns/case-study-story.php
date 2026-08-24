<?php
/**
 * Title: Case Study Story
 * Slug: ajrwebdesign/case-study-story
 * Categories: featured
 * Description: Surface band with a sticky intro column and the case study's own narrative (post content) beside it — the FAQ split-layout language applied to prose.
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

// ⛔ Pattern PHP runs at REGISTRATION, not at page render — get_the_ID()/
// get_queried_object_id() see no post here (verified 2026-08-24), so a
// pattern can never be per-post dynamic. The intro paragraph below carries
// the marker class `cs-story-intro` and a generic fallback line; the core
// plugin's render_block filter swaps it for the engagement-type voice at
// render time. With the plugin deactivated the generic line simply stands.
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"How It Happened"},"align":"full","className":"cs-story","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull cs-story has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"41.66%","className":"cs-story__intro"} -->
<div class="wp-block-column cs-story__intro" style="flex-basis:41.66%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'How it happened', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"cs-story-intro","textColor":"muted"} -->
<p class="cs-story-intro has-muted-color has-text-color"><?php esc_html_e( 'Every engagement follows the same shape: find what is actually slow, fix it at the source, and prove the difference with numbers.', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58.33%","className":"cs-story__content"} -->
<div class="wp-block-column cs-story__content" style="flex-basis:58.33%"><!-- wp:group {"tagName":"article","layout":{"type":"constrained"}} -->
<article class="wp-block-group"><!-- wp:post-content {"layout":{"type":"constrained"}} /--></article>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
