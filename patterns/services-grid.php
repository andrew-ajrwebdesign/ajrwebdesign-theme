<?php
/**
 * Title: Services Grid
 * Slug: ajrwebdesign/services-grid
 * Categories: columns, featured
 * Description: 2x2 grid of bordered service cards with icon, heading, checkmark list, and link.
 *
 * @package AJRWebDesign_Theme
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Services"},"align":"full","className":"services-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull services-section has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-accent-dark-color has-text-color has-link-color","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'How I Can Help', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Practical services tailored to real business needs', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"shadow":"var:preset|shadow|soft","spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"1px"}},"borderColor":"border","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-border-color has-border-border-color" style="border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft);flex-basis:50%"><!-- wp:group {"className":"service-card-inner","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group service-card-inner"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"backgroundColor":"accent-tint","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-tint-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":358,"width":"30px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="/wp-content/uploads/2026/04/speedometer-1.png" alt="" class="wp-image-358" style="width:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"left"}}} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Performance Optimization Audit', 'ajrwebdesign-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"sm"} -->
<p class="has-accent-dark-color has-text-color has-link-color has-sm-font-size"><strong>Make your website faster and more efficient</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checkmark-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
<ul class="wp-block-list is-style-checkmark-list has-dark-color has-text-color has-link-color"><!-- wp:list-item -->
<li>Improve Core Web Vitals</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fix slow page builder setups</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Reduce load times and bloat</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator {"backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
<p class="has-text-align-left"><a href="<?php echo esc_url( home_url( '/seo-audit/' ) ); ?>" data-type="page" data-id="82"><strong></strong></a><strong><a href="<?php echo esc_url( home_url( '/performance-optimization-audit/' ) ); ?>" data-type="page" data-id="1227"><?php esc_html_e( 'View Performance Audit', 'ajrwebdesign-theme' ); ?></a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"shadow":"var:preset|shadow|soft","spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"1px"}},"borderColor":"border","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-border-color has-border-border-color" style="border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft);flex-basis:50%"><!-- wp:group {"className":"service-card-inner","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group service-card-inner"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"backgroundColor":"accent-tint","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-tint-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":372,"width":"30px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="/wp-content/uploads/2026/04/magnifying-glass.png" alt="Audit Icon" class="wp-image-372" style="width:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"left"}}} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'SEO Analysis', 'ajrwebdesign-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"sm"} -->
<p class="has-accent-dark-color has-text-color has-link-color has-sm-font-size"><strong>Find what’s holding your rankings back</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checkmark-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
<ul class="wp-block-list is-style-checkmark-list has-dark-color has-text-color has-link-color"><!-- wp:list-item -->
<li>Improve visibility in Google</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fix technical SEO issues</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Get a clear action plan</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator {"backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
<p class="has-text-align-left"><a href="<?php echo esc_url( home_url( '/seo-audit/' ) ); ?>" data-type="page" data-id="82"><strong><?php esc_html_e( 'View SEO Analysis', 'ajrwebdesign-theme' ); ?></strong></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"shadow":"var:preset|shadow|soft","spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"1px"}},"borderColor":"border","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-border-color has-border-border-color" style="border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft);flex-basis:50%"><!-- wp:group {"className":"service-card-inner","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group service-card-inner"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"backgroundColor":"accent-tint","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-tint-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":366,"width":"30px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="/wp-content/uploads/2026/04/code.png" alt="" class="wp-image-366" style="width:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"left"}}} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'WordPress Development', 'ajrwebdesign-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"sm"} -->
<p class="has-accent-dark-color has-text-color has-link-color has-sm-font-size"><strong>Build and improve your website with confidence</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checkmark-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
<ul class="wp-block-list is-style-checkmark-list has-dark-color has-text-color has-link-color"><!-- wp:list-item -->
<li>Custom features and functionality</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Performance-focused builds</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scalable WordPress solutions</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator {"backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
<p class="has-text-align-left"><a href="<?php echo esc_url( home_url( '/seo-audit/' ) ); ?>" data-type="page" data-id="82"></a><strong><a href="<?php echo esc_url( home_url( '/custom-development/' ) ); ?>" data-type="page" data-id="86"><?php esc_html_e( 'View Development Services', 'ajrwebdesign-theme' ); ?></a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"shadow":"var:preset|shadow|soft","spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"1px"}},"borderColor":"border","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-border-color has-border-border-color" style="border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);box-shadow:var(--wp--preset--shadow--soft);flex-basis:50%"><!-- wp:group {"className":"service-card-inner","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group service-card-inner"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"backgroundColor":"accent-tint","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-tint-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":373,"width":"30px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="/wp-content/uploads/2026/04/task-actions.png" alt="" class="wp-image-373" style="width:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"left"}}} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Ongoing Maintenance', 'ajrwebdesign-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"sm"} -->
<p class="has-accent-dark-color has-text-color has-link-color has-sm-font-size"><strong>Keep your website secure and running smoothly</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-checkmark-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
<ul class="wp-block-list is-style-checkmark-list has-dark-color has-text-color has-link-color"><!-- wp:list-item -->
<li>Updates, monitoring, backups</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Ongoing support when needed</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Prevent issues before they happen</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator {"backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
<p class="has-text-align-left"><a href="<?php echo esc_url( home_url( '/seo-audit/' ) ); ?>" data-type="page" data-id="82"><strong></strong></a><strong><a href="<?php echo esc_url( home_url( '/maintenance-plans/' ) ); ?>" data-type="page" data-id="84"><?php esc_html_e( 'View Maintenance Plans', 'ajrwebdesign-theme' ); ?></a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
