<?php
/**
 * Title: Case Studies: Site Builds
 * Slug: ajrwebdesign/case-studies-builds
 * Categories: featured
 * Description: For the Case Studies page: an intro, then every case study tagged "site-build" as a card with its screenshots and PageSpeed scores. The first runs the full width, the rest two to a row. A query, so a new site build appears by itself.
 *
 * @package AJRWebDesign_Theme
 */

// The list is a Query Loop filtered to the `site-build` case-study tag (see featured-work.php
// for why the term is looked up by slug, and for the AJR Core module the filter depends on).
// Before the tag exists the filter is left out and every case study shows.
//
// ⚠️ The list shows the 12 newest and has no second page: a 13th site build drops the oldest
// off this page. Raise perPage, or add pagination, before there are 13.
$ajrwd_csb_term  = taxonomy_exists( 'case_study_tag' ) ? get_term_by( 'slug', 'site-build', 'case_study_tag' ) : false;
$ajrwd_csb_query = array(
	'perPage'  => 12,
	'pages'    => 0,
	'offset'   => 0,
	'postType' => 'ajr_case_study',
	'order'    => 'desc',
	'orderBy'  => 'date',
	'inherit'  => false,
);
if ( $ajrwd_csb_term instanceof WP_Term ) {
	$ajrwd_csb_query['taxQuery'] = array(
		'include' => array( 'case_study_tag' => array( (int) $ajrwd_csb_term->term_id ) ),
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
<!-- wp:group {"tagName":"section","metadata":{"name":"Site Builds"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group <?php echo serialize_block_attributes( $ajrwd_csb_intro ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() escapes for the block-comment context. ?> -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'SITE BUILDS', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Sites built from scratch', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}},"typography":{"lineHeight":"1.7"}},"textColor":"muted"} -->
<p class="has-text-align-center has-muted-color has-text-color has-link-color" style="line-height:1.7"><?php esc_html_e( 'Custom WordPress block themes, designed and built for the client, then measured with Google’s own test once they were live.', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query <?php echo serialize_block_attributes( array( 'query' => $ajrwd_csb_query ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() escapes for the block-comment context. ?> -->
<div class="wp-block-query"><!-- wp:post-template {"className":"featured-work__list","layout":{"type":"default"}} -->
<!-- wp:ajrwebdesign-core/case-study-card /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
