<?php
/**
 * Title: Not Found Actions
 * Slug: ajrwebdesign/not-found-actions
 * Categories: text
 * Description: The 404 page's way back: a button to the homepage in the visitor's language. A static template cannot call home_url(), so this lives in a PHP pattern (preflight "root-relative links").
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

?>
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
    <!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( function_exists( 'pll_home_url' ) ? pll_home_url() : home_url( '/' ) ); ?>">Back to Homepage</a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->
