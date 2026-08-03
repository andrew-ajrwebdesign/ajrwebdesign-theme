<?php
/**
 * Title: FAQ Accordion
 * Slug: ajrwebdesign/faq-accordion
 * Categories: text
 * Description: FAQ section, option-C split: sticky eyebrow/heading/intro column beside divider-style accordion question/answer items. Surface band.
 *
 * @package AJRWebDesign_Theme
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"faq-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|70"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull faq-section has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} --><div class="wp-block-columns"><!-- wp:column {"width":"41.66%"} --><div class="wp-block-column" style="flex-basis:41.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800","letterSpacing":"0.3px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"xs"} -->
<p class="has-text-align-left has-accent-dark-color has-text-color has-link-color has-xs-font-size" style="font-style:normal;font-weight:800;letter-spacing:0.3px;text-transform:uppercase"><?php esc_html_e( 'FAQ', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Common questions before booking', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}}},"textColor":"muted"} -->
<p class="has-text-align-left has-muted-color has-text-color has-link-color">Everything you need to know about the SEO Analysis, what’s included, and what to expect after booking.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div><!-- /wp:column -->

<!-- wp:column {"width":"58.33%"} --><div class="wp-block-column" style="flex-basis:58.33%"><!-- wp:accordion -->
<div role="group" class="wp-block-accordion"><!-- wp:accordion-item --><div class="wp-block-accordion-item"><!-- wp:accordion-heading {"fontSize":"base"} --><h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">Is this only for WordPress websites?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel --><div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p>Yes — this analysis is tailored specifically for WordPress sites.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item --><div class="wp-block-accordion-item"><!-- wp:accordion-heading {"fontSize":"base"} --><h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">What exactly is included?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel --><div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p>A full review of technical SEO, on-page optimisation, structure, and performance.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item --><div class="wp-block-accordion-item"><!-- wp:accordion-heading {"fontSize":"base"} --><h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">Will you implement the changes?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel --><div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p>No — you receive a detailed action plan you or your developer can follow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item --><div class="wp-block-accordion-item"><!-- wp:accordion-heading {"fontSize":"base"} --><h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">How will I receive it?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel --><div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p>As a structured written report with clear recommendations.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item --><div class="wp-block-accordion-item"><!-- wp:accordion-heading {"fontSize":"base"} --><h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">Is this for me if I’m unsure what’s wrong?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel --><div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
<p>Yes — this is exactly for identifying unknown issues.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item --></div>
<!-- /wp:accordion --></div><!-- /wp:column --></div><!-- /wp:columns --></section>
<!-- /wp:group -->
