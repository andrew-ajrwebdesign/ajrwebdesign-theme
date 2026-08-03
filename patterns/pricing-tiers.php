<?php
/**
 * Title: Pricing Tiers
 * Slug: ajrwebdesign/pricing-tiers
 * Categories: text
 * Description: Support-plan pricing: three plan cards on a tinted band, featured middle card with pill and filled CTA.
 *
 * @package AJRWebDesign_Theme
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Services"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"shadow":"none"},"layout":{"type":"constrained"},"backgroundColor":"accent-tint","align":"full"} -->
<section class="wp-block-group alignfull has-accent-tint-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);box-shadow:none"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'SUPPORT PLANS', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Flexible WordPress support for different website needs', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"pricing-cards","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns pricing-cards"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"pricing-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"shadow":"var:preset|shadow|soft"},"backgroundColor":"bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group pricing-card has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:paragraph {"className":"pricing-card__name"} -->
<p class="pricing-card__name">Essential</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price">€149<small>/ month</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">Reliable support for smaller WordPress websites.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark-list pricing-card__feats"} -->
<ul class="wp-block-list is-style-checkmark-list pricing-card__feats"><!-- wp:list-item -->
<li>Core Updates</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Security Monitoring</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Backups</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Uptime Monitoring</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","textColor":"accent-dark","width":100,"className":"is-style-outline","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"fontSize":"xs","borderColor":"accent-dark"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-accent-dark-color has-text-color has-link-color has-border-color has-accent-dark-border-color has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="https://calendly.com/ajrwebdesign/discussion-call" style="border-width:2px">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"pricing-card pricing-cardu002du002dfeatured","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"shadow":"var:preset|shadow|soft"},"backgroundColor":"bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group pricing-card pricing-card--featured has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:paragraph {"className":"pricing-card__pill"} -->
<p class="pricing-card__pill">Most Popular</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__name"} -->
<p class="pricing-card__name">Growth</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price">€249<small>/ month</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">Hands-on support for active business websites.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark-list pricing-card__feats"} -->
<ul class="wp-block-list is-style-checkmark-list pricing-card__feats"><!-- wp:list-item -->
<li>Everything in Essential</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Performance Checks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Small Content Edits</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Priority Support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Monthly Report</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","gradient":"button-green","width":100,"fontSize":"xs"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-button-green-gradient-background has-background has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="https://calendly.com/ajrwebdesign/discussion-call">Choose Growth</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"pricing-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"shadow":"var:preset|shadow|soft"},"backgroundColor":"bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group pricing-card has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:paragraph {"className":"pricing-card__name"} -->
<p class="pricing-card__name">Pro Support</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price">€339<small>/ month</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">Advanced support for larger or more complex websites.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark-list pricing-card__feats"} -->
<ul class="wp-block-list is-style-checkmark-list pricing-card__feats"><!-- wp:list-item -->
<li>Everything in Growth</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>WooCommerce Support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Technical Guidance</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","textColor":"accent-dark","width":100,"className":"is-style-outline","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"fontSize":"xs","borderColor":"accent-dark"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-accent-dark-color has-text-color has-link-color has-border-color has-accent-dark-border-color has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="https://calendly.com/ajrwebdesign/discussion-call" style="border-width:2px">Talk About Pro Support</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
