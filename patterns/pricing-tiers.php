<?php
/**
 * Title: Pricing Tiers
 * Slug: ajrwebdesign/pricing-tiers
 * Categories: text
 * Description: Support-plan pricing: four plan cards on a tinted band (maintenance, performance/SEO, ads, tailored), featured second card with pill and filled CTA.
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
<p class="pricing-card__name">Essential Care</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price">€149<small>/ month</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">Keep your WordPress site updated, secure, and backed up.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark-list pricing-card__feats"} -->
<ul class="wp-block-list is-style-checkmark-list pricing-card__feats"><!-- wp:list-item -->
<li>Plugin, theme &amp; core updates</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Daily offsite backups &amp; 1-click restore</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Malware scanning &amp; firewall</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Uptime monitoring</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Monthly report</li>
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
<p class="pricing-card__name">Performance &amp; SEO</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price">€249<small>/ month</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">Maintenance plus ongoing speed and search work.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark-list pricing-card__feats"} -->
<ul class="wp-block-list is-style-checkmark-list pricing-card__feats"><!-- wp:list-item -->
<li>Everything in Essential Care</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Performance monitoring &amp; optimisation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Monthly SEO analysis</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keyword &amp; on-page tweaks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Priority support</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","gradient":"button-green","width":100,"fontSize":"xs"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-button-green-gradient-background has-background has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="https://calendly.com/ajrwebdesign/discussion-call">Choose This Plan</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"pricing-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"shadow":"var:preset|shadow|soft"},"backgroundColor":"bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group pricing-card has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:paragraph {"className":"pricing-card__name"} -->
<p class="pricing-card__name">Growth &amp; Ads</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price">€449<small>/ month</small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">For businesses that want managed growth, not just upkeep.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark-list pricing-card__feats"} -->
<ul class="wp-block-list is-style-checkmark-list pricing-card__feats"><!-- wp:list-item -->
<li>Everything in Performance &amp; SEO</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Google Ads campaign creation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ongoing campaign management</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Conversion tracking &amp; reporting</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","textColor":"accent-dark","width":100,"className":"is-style-outline","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"fontSize":"xs","borderColor":"accent-dark"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-accent-dark-color has-text-color has-link-color has-border-color has-accent-dark-border-color has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="https://calendly.com/ajrwebdesign/discussion-call" style="border-width:2px">Start Growing</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"pricing-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"shadow":"var:preset|shadow|soft"},"backgroundColor":"bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group pricing-card has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:paragraph {"className":"pricing-card__name"} -->
<p class="pricing-card__name">Fully Tailored</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price">Custom</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">A plan built entirely around your site and your goals.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark-list pricing-card__feats"} -->
<ul class="wp-block-list is-style-checkmark-list pricing-card__feats"><!-- wp:list-item -->
<li>E-commerce &amp; WooCommerce support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Multilingual sites</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Development hours included</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Built around your goals</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","textColor":"accent-dark","width":100,"className":"is-style-outline","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"fontSize":"xs","borderColor":"accent-dark"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-accent-dark-color has-text-color has-link-color has-border-color has-accent-dark-border-color has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="https://calendly.com/ajrwebdesign/discussion-call" style="border-width:2px">Find Out More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
