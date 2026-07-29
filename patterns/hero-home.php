<?php
/**
 * Title: Hero — Home
 * Slug: ajrwebdesign/hero-home
 * Categories: banner, featured
 * Description: Home page hero with responsive image, eyebrow, H1, intro copy, and outline CTA button.
 *
 * @package AJRWebDesign_Theme
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero Section"},"align":"full","className":"hero-section","gradient":"hero-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hero-section has-hero-dark-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:ajrwebdesign-core/responsive-image {"desktopImageId":1535,"mobileImageId":1536,"alt":"Laptop displaying WordPress performance dashboard with Core Web Vitals and SEO optimisation metrics","breakpoint":781,"loading":"eager","fetchPriority":"high"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-accent-dark-color has-text-color has-link-color","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-left has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'WordPress Performance, SEO & Technical Support', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"left"}}} -->
<h1 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Make your WordPress website faster, cleaner, and easier to grow', 'ajrwebdesign-theme' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-muted-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}},"typography":{"lineHeight":"1.7","textAlign":"left"}},"textColor":"muted"} -->
<p class="has-text-align-left has-muted-color has-text-color has-link-color" style="line-height:1.7">I identify and fix the technical and performance issues holding WordPress websites back — with clear, practical solutions through focused <em><a href="<?php echo esc_url( home_url( '/seo-analysis/' ) ); ?>" data-type="page" data-id="82">SEO analysis</a></em> and <em><a href="<?php echo esc_url( home_url( '/performance-optimization-audit/' ) ); ?>" data-type="page" data-id="1227">performance audits</a></em>.<br></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"bg","textColor":"accent-dark","width":100,"className":"is-style-outline","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}},"typography":{"textAlign":"center"}},"fontSize":"xs","borderColor":"accent-dark"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-accent-dark-color has-bg-background-color has-text-color has-background has-link-color has-border-color has-accent-dark-border-color has-text-align-center has-xs-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/results/' ) ); ?>" style="border-width:2px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e( 'See Results', 'ajrwebdesign-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
