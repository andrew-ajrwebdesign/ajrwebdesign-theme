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
				'Main Nav',
				'Services',
				'Get in Touch',
				'© 2026 ajrwebdesign. All rights reserved.',
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
			'core/button'     => 'button',
			'core/navigation' => 'navigation',
			'core/search'     => 'search',
			'core/comments'   => 'comments',
			'core/list'       => 'list',
			'core/group'      => 'group',
		);

		foreach ( $block_styles as $block => $file ) {
			$path = "/assets/css/blocks/core/{$file}.css";

			wp_enqueue_block_style(
				$block,
				array(
					'handle' => "ajrwebdesign-theme-{$file}",
					'src'    => get_theme_file_uri( $path ),
					'path'   => get_theme_file_path( $path ),
					'ver'    => wp_get_theme()->get( 'Version' ),
				)
			);
		}
	}
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
			wp_get_theme()->get( 'Version' )
		);
	}
);
