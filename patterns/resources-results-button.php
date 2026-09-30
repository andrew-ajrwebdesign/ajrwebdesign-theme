<?php
/**
 * Title: Resources Results Button
 * Slug: ajrwebdesign/resources-results-button
 * Categories: text
 * Description: The Resources page's button to the Case Studies page, in the visitor's language. A static template cannot call home_url(), so this lives in a PHP pattern (preflight "root-relative links").
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

// The Case Studies page in the visitor's language: Polylang's translation when there is one.
// It was the Results page until 1.14.0, so a site that has not been moved yet is still found.
$ajrwd_results     = get_page_by_path( 'case-studies' );
$ajrwd_results     = $ajrwd_results ? $ajrwd_results : get_page_by_path( 'results' );
$ajrwd_results_id  = $ajrwd_results ? (int) $ajrwd_results->ID : 0;
$ajrwd_translation = ( $ajrwd_results_id && function_exists( 'pll_get_post' ) ) ? (int) pll_get_post( $ajrwd_results_id ) : 0;
$ajrwd_results_id  = $ajrwd_translation ? $ajrwd_translation : $ajrwd_results_id;
$ajrwd_results_url = $ajrwd_results_id ? get_permalink( $ajrwd_results_id ) : home_url( '/case-studies/' );
?>
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"bg","textColor":"accent-dark","width":100,"className":"is-style-outline","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"fontSize":"xs","borderColor":"accent-dark"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-accent-dark-color has-bg-background-color has-text-color has-background has-link-color has-border-color has-accent-dark-border-color has-xs-font-size has-text-align-center has-custom-font-size wp-element-button" href="<?php echo esc_url( $ajrwd_results_url ); ?>" style="border-width:2px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">Explore the Guides</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
