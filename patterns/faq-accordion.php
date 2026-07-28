<?php
/**
 * Title: FAQ Accordion
 * Slug: ajrwebdesign/faq-accordion
 * Categories: text
 * Description: FAQ section with eyebrow, heading, intro, and accordion question/answer items.
 *
 * @package AJRWebDesign_Theme
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800","letterSpacing":"0.3px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"xs"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color has-link-color has-xs-font-size" style="font-style:normal;font-weight:800;letter-spacing:0.3px;text-transform:uppercase"><?php esc_html_e( 'FAQ', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Common questions before booking', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}}},"textColor":"muted"} -->
<p class="has-text-align-center has-muted-color has-text-color has-link-color">Everything you need to know about the SEO Analysis, what’s included, and what to expect after booking.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:accordion -->
<div role="group" class="wp-block-accordion"><!-- wp:accordion-item {"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"blockGap":"0"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"surface"} -->
<div class="wp-block-accordion-item has-surface-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:accordion-heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"fontSize":"base"} -->
<h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Is this only for WordPress websites?', 'ajrwebdesign-theme' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p>Yes — this analysis is tailored specifically for WordPress sites.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"blockGap":"0"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"surface"} -->
<div class="wp-block-accordion-item has-surface-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:accordion-heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"fontSize":"base"} -->
<h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'What exactly is included?', 'ajrwebdesign-theme' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p>A full review of technical SEO, on-page optimisation, structure, and performance.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"blockGap":"0"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"surface"} -->
<div class="wp-block-accordion-item has-surface-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:accordion-heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"fontSize":"base"} -->
<h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Will you implement the changes?', 'ajrwebdesign-theme' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p>No — you receive a detailed action plan you or your developer can follow.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"blockGap":"0"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"surface"} -->
<div class="wp-block-accordion-item has-surface-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:accordion-heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"fontSize":"base"} -->
<h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'How will I receive it?', 'ajrwebdesign-theme' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p>As a structured written report with clear recommendations.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"blockGap":"0"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"surface"} -->
<div class="wp-block-accordion-item has-surface-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:accordion-heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"fontSize":"base"} -->
<h3 class="wp-block-accordion-heading has-base-font-size"><button type="button" class="wp-block-accordion-heading__toggle" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Is this for me if I’m unsure what’s wrong?', 'ajrwebdesign-theme' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p>Yes — this is exactly for identifying unknown issues.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item --></div>
<!-- /wp:accordion --></div>
<!-- /wp:group -->
