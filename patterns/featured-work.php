<?php
/**
 * Title: Featured Work
 * Slug: ajrwebdesign/featured-work
 * Categories: featured
 * Description: The case studies tagged "featured", as cards: the first one wide, the rest two to a row. A list only, with no heading or band of its own, so it sits inside a section that already introduces the work. A query, so it fills itself as case studies are tagged.
 *
 * @package AJRWebDesign_Theme
 */

// The list is a Query Loop filtered to the `featured` case-study tag, so tagging a case study
// puts it here and untagging takes it out; nothing on the page is edited. Each item is the
// site plugin's case-study-card block, which draws a site build with its screenshots and
// scores and an audit with its before and after numbers.
//
// ⚠️ `case_study_tag` has no public pages, and WordPress silently ignores a Query Loop filter
// on such a taxonomy (the list would show EVERY case study). AJR Core's "Query Loop: filter by
// private taxonomies" module restores it: switch it on in AJR Core → Modules and list the
// taxonomy in AJR Core → Blocks. The site plugin warns in wp-admin when this is missing.
//
// A Query Loop stores the term's ID, which differs between sites, so it is looked up here by
// slug. Before the tag exists the filter is left out and the three newest case studies show.
$ajrwd_fw_term  = taxonomy_exists( 'case_study_tag' ) ? get_term_by( 'slug', 'featured', 'case_study_tag' ) : false;
$ajrwd_fw_query = array(
	'perPage'  => 3,
	'pages'    => 0,
	'offset'   => 0,
	'postType' => 'ajr_case_study',
	'order'    => 'desc',
	'orderBy'  => 'date',
	'inherit'  => false,
);
if ( $ajrwd_fw_term instanceof WP_Term ) {
	$ajrwd_fw_query['taxQuery'] = array(
		'include' => array( 'case_study_tag' => array( (int) $ajrwd_fw_term->term_id ) ),
	);
}
?>
<!-- wp:query <?php echo serialize_block_attributes( array( 'query' => $ajrwd_fw_query ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() escapes for the block-comment context. ?> -->
<div class="wp-block-query"><!-- wp:post-template {"className":"featured-work__list","layout":{"type":"default"}} -->
<!-- wp:ajrwebdesign-core/case-study-card /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
