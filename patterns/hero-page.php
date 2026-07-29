<?php
/**
 * Title: Hero — Interior Page
 * Slug: ajrwebdesign/hero-page
 * Categories: banner
 * Description: Interior page hero with responsive image, eyebrow, H1, intro paragraph, and CTA button.
 *
 * @package AJRWebDesign_Theme
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hero-section","gradient":"hero-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hero-section has-hero-dark-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:ajrwebdesign-core/responsive-image {"desktopImageId":1402,"mobileImageId":1403,"alt":"Graphic representing WordPress Custom Development","breakpoint":781,"loading":"eager","fetchPriority":"high"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-left has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'WordPress Development', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Custom WordPress development built for long-term growth', 'ajrwebdesign-theme' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}},"typography":{"lineHeight":"1.7"}},"textColor":"muted"} -->
<p class="has-text-align-left has-muted-color has-text-color has-link-color" style="line-height:1.7">Custom WordPress solutions focused on performance, scalability, usability, and maintainable long-term development.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","textColor":"accent-dark","width":100,"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}},"border":{"width":"2px"}},"fontSize":"xs","borderColor":"accent-dark"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-accent-dark-color has-text-color has-link-color has-border-color has-accent-dark-border-color has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="border-width:2px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e( 'Discuss Your Project', 'ajrwebdesign-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
