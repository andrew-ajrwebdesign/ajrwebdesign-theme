<?php
/**
 * Title: Case Studies: Client Sites
 * Slug: ajrwebdesign/case-studies-builds
 * Categories: featured
 * Description: For the Case Studies page: an intro, then every case study tagged "site-build" or "site-care" as a card with its screenshots and scores. The first runs the full width, the rest two to a row. A query, so a new one appears by itself.
 *
 * @package AJRWebDesign_Theme
 */

// The list is a Query Loop filtered to two case-study tags: `site-build` (a site built from
// scratch) and, since 1.15.0, `site-care` (a site somebody else built, made faster and looked
// after: the site plugin shows it the same way, with screenshots and a scorecard). See
// featured-work.php for why a term is looked up by slug, and for the site-plugin class the
// filter depends on. Before either tag exists the filter is left out and every case study shows.
// The tags come from ajrwd_case_study_list_terms() (functions.php), which the second list
// excludes too.
//
// ⚠️ The list shows the 12 newest and has no second page: a 13th site build drops the oldest
// off this page. Raise perPage, or add pagination, before there are 13.
$ajrwd_csb_terms = ajrwd_case_study_list_terms();
$ajrwd_csb_query = array(
	'perPage'  => 12,
	'pages'    => 0,
	'offset'   => 0,
	'postType' => 'ajr_case_study',
	'order'    => 'desc',
	'orderBy'  => 'date',
	'inherit'  => false,
);
if ( array() !== $ajrwd_csb_terms ) {
	$ajrwd_csb_query['taxQuery'] = array(
		'include' => array( 'case_study_tag' => $ajrwd_csb_terms ),
	);
}

// The intro's measure comes from theme.json (settings.custom.width.intro), not a typed width.
$ajrwd_csb_intro = array(
	'style'  => array( 'spacing' => array( 'blockGap' => 'var:preset|spacing|50' ) ),
	'layout' => array(
		'type'        => 'constrained',
		'contentSize' => 'var(--wp--custom--width--intro)',
	),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Client Sites"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group <?php echo serialize_block_attributes( $ajrwd_csb_intro ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() escapes for the block-comment context. ?> -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'CLIENT SITES', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Sites built, and sites looked after', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}},"typography":{"lineHeight":"1.7"}},"textColor":"muted"} -->
<p class="has-text-align-center has-muted-color has-text-color has-link-color" style="line-height:1.7"><?php esc_html_e( 'Custom WordPress block themes designed and built for the client, and existing sites made faster and kept that way. Each one is measured with Google’s own test.', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query <?php echo serialize_block_attributes( array( 'query' => $ajrwd_csb_query ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() escapes for the block-comment context. ?> -->
<div class="wp-block-query"><!-- wp:post-template {"className":"featured-work__list","layout":{"type":"default"}} -->
<!-- wp:ajrwebdesign-core/case-study-card /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
