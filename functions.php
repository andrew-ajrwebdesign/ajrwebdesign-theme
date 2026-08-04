<?php
/**
 * Theme setup and block style registration.
 *
 * Keep this file minimal. theme.json handles design tokens and block styles.
 * Only register things here that theme.json cannot express.
 *
 * @package AJRWebDesign_Theme
 * @since   1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Theme setup.
 */
add_action(
	'after_setup_theme',
	function () {
		load_theme_textdomain( 'ajrwebdesign-theme', get_template_directory() . '/languages' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/global.css' );

		// Remove remote patterns from the WordPress.org pattern directory.
		remove_theme_support( 'core-block-patterns' );

		// ajrwebdesign-core contracts: the theme styles the card blocks and
		// declares its interface strings for Polylang translation.
		add_theme_support( 'ajrwebdesign-core-cards' );
		add_theme_support(
			'ajrwebdesign-core-i18n',
			array(
				// Footer.
				'Main Nav',
				'Services',
				'Get in Touch',
				'© 2026 ajrwebdesign. All rights reserved.',
				// Blog home template (renders the DE Ressourcen page too).
				'WordPress Performance & SEO Resources',
				'Practical guides for faster, cleaner WordPress websites',
				'Clear, practical articles for improving WordPress performance, technical SEO, Core Web Vitals, site structure, and long-term maintainability. These resources are written for business owners, marketing teams, and website managers who want to understand what is holding their site back — without getting buried in technical noise.',
				'Start here',
				'Helpful guides for improving your WordPress website',
				'These articles focus on the technical issues that often affect WordPress websites the most: slow loading pages, weak SEO foundations, poor site structure, plugin bloat, and confusing performance reports.',
				'Explore the Guides',
				'Book a Call',
			)
		);
	}
);

/**
 * Unregister patterns outside this site's namespaces so the inserter shows
 * only ajrwebdesign/* (theme) and ajrwebdesign-core/* (plugin) patterns.
 */
add_action(
	'init',
	function () {
		$registry  = WP_Block_Patterns_Registry::get_instance();
		$whitelist = array( 'ajrwebdesign/', 'ajrwebdesign-core/' );

		foreach ( $registry->get_all_registered() as $pattern ) {
			$keep = false;
			foreach ( $whitelist as $prefix ) {
				if ( str_starts_with( $pattern['name'], $prefix ) ) {
					$keep = true;
					break;
				}
			}
			if ( ! $keep ) {
				unregister_block_pattern( $pattern['name'] );
			}
		}
	},
	20 // Run after core and plugins register their patterns.
);

/**
 * Block style variations (CSS lives in the per-block stylesheets below).
 */
add_action(
	'init',
	function () {
		register_block_style(
			'core/list',
			array(
				'name'  => 'checkmark-list',
				'label' => __( 'Checkmark list', 'ajrwebdesign-theme' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'service-card',
				'label' => __( 'Service card', 'ajrwebdesign-theme' ),
			)
		);
	}
);

/**
 * Asset version for cache-busting.
 *
 * Production uses the theme version (bumped per release). Everywhere else
 * the file's mtime is used, so every local CSS edit busts browser and
 * page caches immediately — stale-stylesheet layouts (fixed-header offset
 * missing, visible skip link) cannot recur in dev.
 *
 * @param string $relative_path Theme-relative asset path.
 * @return string Version string for wp_enqueue_style().
 */
function ajrwd_asset_version( $relative_path ) {
	if ( 'production' === wp_get_environment_type() ) {
		return wp_get_theme()->get( 'Version' );
	}

	$file = get_theme_file_path( $relative_path );

	return file_exists( $file ) ? (string) filemtime( $file ) : wp_get_theme()->get( 'Version' );
}

/**
 * Register per-block stylesheets.
 *
 * Loaded only when the block is present on the page — better performance
 * than a single monolithic stylesheet. Add a new entry for each block
 * that needs styles beyond what theme.json can express (transitions,
 * focus rings, pseudo-elements).
 */
add_action(
	'init',
	function () {
		$block_styles = array(
			'core/button'            => 'core/button',
			'core/navigation'        => 'core/navigation',
			'core/search'            => 'core/search',
			'core/comments'          => 'core/comments',
			'core/list'              => 'core/list',
			'core/accordion-item'  => 'core/accordion',
			'core/group'             => 'core/group',
			'wpforms/form-selector'  => 'wpforms',
		);

		foreach ( $block_styles as $block => $file ) {
			$path = "/assets/css/blocks/{$file}.css";

			wp_enqueue_block_style(
				$block,
				array(
					'handle' => 'ajrwebdesign-theme-' . str_replace( '/', '-', $file ),
					'src'    => get_theme_file_uri( $path ),
					'path'   => get_theme_file_path( $path ),
					'ver'    => ajrwd_asset_version( $path ),
				)
			);
		}
	}
);

/**
 * Preload the two self-hosted variable fonts. Text (and the Complianz
 * banner) renders in the final faces on first paint — without this the
 * font swap reflows the banner and costs CLS on mobile.
 */
add_action(
	'wp_head',
	function () {
		foreach ( array( 'Lora-wght.woff2', 'NotoSans-wght.woff2' ) as $font ) {
			printf(
				'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "
",
				esc_url( get_theme_file_uri( 'assets/fonts/' . $font ) )
			);
		}
	},
	2
);

/**
 * Enqueue the global stylesheet.
 *
 * global.css covers only what theme.json cannot: the fixed header, resets,
 * focus rings, and responsive helpers. Block-specific styles load on demand
 * via wp_enqueue_block_style() above. No theme JS is shipped — interactive
 * behaviour belongs to blocks (which carry their own viewScript).
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'ajrwebdesign-theme-global',
			get_theme_file_uri( 'assets/css/global.css' ),
			array(),
			ajrwd_asset_version( 'assets/css/global.css' )
		);
	}
);

/**
 * Give the header logo explicit dimensions — the only image core outputs
 * without them. 140×24 is the SVG's intrinsic size; CSS still controls the
 * rendered size, the attributes just reserve the box before paint.
 */
add_filter(
	'get_custom_logo_image_attributes',
	function ( array $attrs ): array {
		$attrs['width']  = 140;
		$attrs['height'] = 24;
		return $attrs;
	}
);

/**
 * Every hero is the ajrwebdesign-core responsive-image block, which sets
 * its own loading=eager + fetchpriority=high — so core's default of
 * exempting the first THREE content images from lazy-loading only leaves
 * below-fold dashboard boards eager. One exempt slot is enough.
 */
add_filter(
	'wp_omit_loading_attr_threshold',
	function (): int {
		return 1;
	}
);
