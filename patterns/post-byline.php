<?php
/**
 * Title: Post Byline
 * Slug: ajrwebdesign/post-byline
 * Categories: featured
 * Inserter: no
 * Description: Author avatar, name, and category row under the post title.
 *
 * @package AJRWebDesign_Theme
 */

/*
 * The avatar attachment ID is stable because local and live share the same
 * database lineage; the URL is resolved at render time for the current host.
 * Filter ajrwebdesign_theme_byline_avatar_id to repoint it.
 */
$ajrwebdesign_theme_avatar_id  = (int) apply_filters( 'ajrwebdesign_theme_byline_avatar_id', 772 );
$ajrwebdesign_theme_avatar_url = wp_get_attachment_image_url( $ajrwebdesign_theme_avatar_id, 'thumbnail' );
?>
<!-- wp:group {"className":"has-link-color","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"textColor":"muted","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-link-color has-muted-color has-text-color"><?php if ( $ajrwebdesign_theme_avatar_url ) : ?><!-- wp:group {"layout":{"type":"constrained","contentSize":"50px"}} -->
<div class="wp-block-group"><!-- wp:image {"id":<?php echo (int) $ajrwebdesign_theme_avatar_id; ?>,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-thumbnail is-style-rounded"><img src="<?php echo esc_url( $ajrwebdesign_theme_avatar_url ); ?>" alt="<?php echo esc_attr( get_post_meta( $ajrwebdesign_theme_avatar_id, '_wp_attachment_image_alt', true ) ); ?>" class="wp-image-<?php echo (int) $ajrwebdesign_theme_avatar_id; ?>" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>
<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark","fontSize":"sm"} -->
<p class="has-dark-color has-text-color has-link-color has-sm-font-size"><?php echo esc_html_x( 'by', 'post byline', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"dark","fontSize":"sm"} /-->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php echo esc_html_x( 'in', 'post byline', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"300"}},"fontSize":"sm"} /--></div>
<!-- /wp:group -->
