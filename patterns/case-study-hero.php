<?php
/**
 * Title: Case Study Hero
 * Slug: ajrwebdesign/case-study-hero
 * Categories: featured
 * Description: Dark full-bleed hero for the single case-study template — service chips, title, summary and CTAs left, a live-data float cluster right. All per-post values render through the case-study-card block's hero variant.
 * Inserter: no
 *
 * @package AJRWebDesign_Theme
 */

$ajrwd_cs_archive = get_post_type_archive_link( 'ajr_case_study' );
$ajrwd_cs_archive = $ajrwd_cs_archive ? $ajrwd_cs_archive : home_url( '/case-studies/' );

// serialize_block_attributes() is the canonical attrs builder: it JSON-encodes
// AND escapes --, < and >, so a translated label can never break the comment
// delimiter or the JSON — hand-splicing i18n into attrs cannot promise that.
$ajrwd_cs_hero_attrs = serialize_block_attributes(
	array(
		'variant'           => 'hero',
		'ctaUrl'            => 'https://calendly.com/ajrwebdesign/discussion-call',
		'ctaLabel'          => __( 'Get results like these', 'ajrwebdesign-theme' ),
		'ctaSecondaryUrl'   => esc_url_raw( $ajrwd_cs_archive ),
		'ctaSecondaryLabel' => __( 'View all case studies', 'ajrwebdesign-theme' ),
	)
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Case Study Hero"},"align":"full","className":"hero-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"gradient":"hero-dark","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hero-section has-hero-dark-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:ajrwebdesign-core/case-study-card <?php echo $ajrwd_cs_hero_attrs; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() escapes for the block-comment context. ?> /--></section>
<!-- /wp:group -->
