<?php
/**
 * Title: Case Studies: Audits and Fixes
 * Slug: ajrwebdesign/case-studies-audits
 * Categories: featured
 * Description: For the Case Studies page: an intro on a grey band, then every case study the band above does not list (not tagged "site-build" or "site-care") as a compact before-and-after card, two to a row. A query, so a new audit appears by itself.
 *
 * @package AJRWebDesign_Theme
 */

// Every case study except the ones tagged `site-build` or `site-care`, which the band above this one lists
// (both patterns take the tags from ajrwd_case_study_list_terms() in functions.php)
// (see featured-work.php for why the term is looked up by slug, and for the site-plugin class
// the filter depends on). Before the tag exists nothing is excluded.
//
// ⚠️ The list shows the 12 newest and has no second page: a 13th audit drops the oldest off
// this page. Raise perPage, or add pagination, before there are 13.
$ajrwd_csa_terms = ajrwd_case_study_list_terms();
$ajrwd_csa_query = array(
	'perPage'  => 12,
	'pages'    => 0,
	'offset'   => 0,
	'postType' => 'ajr_case_study',
	'order'    => 'desc',
	'orderBy'  => 'date',
	'inherit'  => false,
);
if ( array() !== $ajrwd_csa_terms ) {
	$ajrwd_csa_query['taxQuery'] = array(
		'exclude' => array( 'case_study_tag' => $ajrwd_csa_terms ),
	);
}

// The intro's measure comes from theme.json (settings.custom.width.intro), not a typed width.
$ajrwd_csa_intro = array(
	'style'  => array( 'spacing' => array( 'blockGap' => 'var:preset|spacing|50' ) ),
	'layout' => array(
		'type'        => 'constrained',
		'contentSize' => 'var(--wp--custom--width--intro)',
	),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Audits and Fixes"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group <?php echo serialize_block_attributes( $ajrwd_csa_intro ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() escapes for the block-comment context. ?> -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'AUDITS AND FIXES', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Measurable improvements, not just good intentions', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}},"typography":{"lineHeight":"1.7"}},"textColor":"muted"} -->
<p class="has-text-align-center has-muted-color has-text-color has-link-color" style="line-height:1.7"><?php esc_html_e( 'Every result below comes from focused WordPress performance, SEO, and technical improvements — showing the difference that cleaner code, faster load times, and better site foundations can make.', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query <?php echo serialize_block_attributes( array( 'query' => $ajrwd_csa_query ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() escapes for the block-comment context. ?> -->
<div class="wp-block-query"><!-- wp:post-template {"className":"case-studies__audits","layout":{"type":"default"}} -->
<!-- wp:ajrwebdesign-core/case-study-mini-card /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
