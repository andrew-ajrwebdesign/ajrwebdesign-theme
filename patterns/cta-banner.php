<?php
/**
 * Title: CTA Banner
 * Slug: ajrwebdesign/cta-banner
 * Categories: call-to-action, banner
 * Description: Closing call-to-action band with green background image, heading, supporting copy, and button.
 *
 * @package AJRWebDesign_Theme
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"CTA"},"align":"wide","className":"cta-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"shadow":"var:preset|shadow|soft","background":{"backgroundImage":{"url":"/wp-content/uploads/2026/04/CTA-green-bg.webp","id":454,"source":"file","title":"CTA-green-bg"},"backgroundSize":"cover"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignwide cta-section" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|bg"}}},"typography":{"textAlign":"center"}},"textColor":"bg"} -->
<h2 class="wp-block-heading has-text-align-center has-bg-color has-text-color has-link-color"><?php esc_html_e( 'Not sure what’s holding your WordPress website back?', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-surface-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|surface"}}},"typography":{"textAlign":"center"}},"textColor":"surface"} -->
<p class="has-text-align-center has-surface-color has-text-color has-link-color">Book a call and get clear, practical guidance on your site’s performance, SEO, technical setup, and next best steps.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"400px"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"gradient":"button-green","width":100,"className":"is-style-outline","style":{"border":{"width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"typography":{"textAlign":"center"}},"fontSize":"xs","borderColor":"bg"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-button-green-gradient-background has-background has-border-color has-bg-border-color has-text-align-center has-xs-font-size has-custom-font-size wp-element-button" href="https://calendly.com/ajrwebdesign/discussion-call" style="border-width:2px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Book a Call', 'ajrwebdesign-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
