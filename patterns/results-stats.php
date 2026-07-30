<?php
/**
 * Title: Results Stats
 * Slug: ajrwebdesign/results-stats
 * Categories: featured
 * Description: Proven-results intro with a row of case study mini cards and a See More Results button.
 *
 * @package AJRWebDesign_Theme
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"className":"has-accent-dark-color has-text-color has-link-color","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'PROVEN RESULTS', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Performance and SEO improvements you can actually measure', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-muted-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}},"typography":{"lineHeight":"1.7","textAlign":"center"}},"textColor":"muted"} -->
<p class="has-text-align-center has-muted-color has-text-color has-link-color" style="line-height:1.7">I don’t just make vague recommendations. My work focuses on practical WordPress improvements that can be measured across speed, Core Web Vitals, SEO health, and overall site performance.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:ajrwebdesign-core/case-study-mini-card {"caseStudyId":1520} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:ajrwebdesign-core/case-study-mini-card {"caseStudyId":1521} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"400px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"bg","textColor":"accent-dark","width":100,"className":"is-style-outline","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}},"typography":{"textAlign":"center"}},"fontSize":"xs","borderColor":"accent-dark"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-accent-dark-color has-bg-background-color has-text-color has-background has-link-color has-border-color has-accent-dark-border-color has-text-align-center has-xs-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/results/' ) ); ?>" style="border-width:2px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e( 'See More Results', 'ajrwebdesign-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
