<?php
/**
 * Title: Pricing Tiers
 * Slug: ajrwebdesign/pricing-tiers
 * Categories: text
 * Description: Support-plan pricing: three plan cards on a tinted band (maintenance, performance/SEO, ads) with featured middle card, plus a full-width dark tailored-plan CTA strip echoing the home bento ads band.
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
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"pricing-strip pricing-strip\u002d\u002ddark","gradient":"hero-dark","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group pricing-strip pricing-strip--dark has-hero-dark-gradient-background has-background" style="margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"560px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"dark-lift","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-lift-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"card-ico card-ico\u002d\u002dcog","layout":{"type":"default"}} -->
<div class="wp-block-group card-ico card-ico--cog"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|bg"}}}},"textColor":"bg"} -->
<h3 class="wp-block-heading has-text-align-left has-bg-color has-text-color has-link-color">Fully Tailored</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|muted-light"}}}},"textColor":"muted-light","fontSize":"sm"} -->
<p class="has-muted-light-color has-text-color has-link-color has-sm-font-size">Need more than a set plan? E-commerce &amp; WooCommerce, multilingual sites, development hours included — a package built entirely around your site and your goals.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","gradient":"button-green","className":"is-style-fill","fontSize":"xs"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-button-green-gradient-background has-background has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="https://calendly.com/ajrwebdesign/discussion-call">Find Out More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
