<?php
/**
 * Title: Case Study Testimonials
 * Slug: ajrwebdesign/case-study-testimonials
 * Categories: featured
 * Description: White band with the featured client testimonials, closing the single case-study page's proof chain before the CTA.
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Client Testimonials"},"align":"full","backgroundColor":"bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","className":"is-i18n","textColor":"accent-dark","fontSize":"sm","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"1px","textTransform":"uppercase"}}} -->
<p class="has-text-align-center is-i18n has-accent-dark-color has-text-color has-sm-font-size" style="font-style:normal;font-weight:600;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Proven results across WordPress projects', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What clients say about working with me', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:ajrwebdesign-core/testimonials-slider {"count":2,"perView":2,"tags":["featured"],"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} /--></section>
<!-- /wp:group -->
