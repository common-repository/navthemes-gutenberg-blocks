<?php
/**
 * Blocks Initializer
 *
 * Enqueue CSS/JS of all the blocks.
 *
 * @since   1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue Gutenberg block assets for both frontend + backend.
 *
 * @uses {wp-editor} for WP editor styles.
 * @since 1.0.0
 */
function navthemes_blocks_block_assets() { // phpcs:ignore
	// Styles.
	wp_enqueue_style(
		'navthemes_blocks-style-css', // Handle.
		plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ), // Block style CSS.
		array( 'wp-editor' ) // Dependency to include the CSS after it.
		// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.style.build.css' ) // Version: File modification time.
	);
}

// Hook: Frontend assets.
add_action( 'enqueue_block_assets', 'navthemes_blocks_block_assets' );

/**
 * Enqueue Gutenberg block assets for backend editor.
 *
 * @uses {wp-blocks} for block type registration & related functions.
 * @uses {wp-element} for WP Element abstraction — structure of blocks.
 * @uses {wp-i18n} to internationalize the block's text.
 * @uses {wp-editor} for WP editor styles.
 * @since 1.0.0
 */
function navthemes_blocks_editor_assets() { // phpcs:ignore
	// Scripts.
	wp_enqueue_script(
		'navthemes_blocks-block-js', // Handle.
		plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ), // Block.build.js: We register the block here. Built with Webpack.
		array( 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-api', 'wp-editor' ), // Dependencies, defined above.
		filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.build.js' ), // Version: File modification time.
		true // Enqueue the script in the footer.
	);

	// Styles.
	wp_enqueue_style(
		'navthemes_blocks-block-editor-css', // Handle.
		plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ), // Block editor CSS.
		array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
		// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.editor.build.css' ) // Version: File modification time.
	);
}

// Hook: Editor assets.
add_action( 'enqueue_block_editor_assets', 'navthemes_blocks_editor_assets' );



/**
 * Register Settings for Google Maps Block
 * 
 * @access  public
 */
add_action( 'init', 'nt_google_map_set' );
function nt_google_map_set() {
	register_setting(
		'navthemes_google_map_block_api_key',
		'navthemes_google_map_block_api_key',
		array(
			'type'              => 'string',
			'description'       => __( 'Google Map API key for the Google Maps Gutenberg Block.', 'textdomain' ),
			'sanitize_callback' => 'sanitize_text_field',
			'show_in_rest'      => true,
			'default'           => ''
		)
	);
}

add_filter( 'block_categories', function( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'navthemes-blocks',
				'title' => __( 'Navthemes Blocks', 'navthemes-blocks' ),
			),
		)
	);
}, 10, 2 );
$attributes = array();
add_action('filterpost','render_callback');
	/**
	 * The render callback passed to the `register_block_type` function.
	 *
	 * @return string
	 */
	$attributes = array();
	 function render_callback( $attributes ) {
		// give a chance to our themes to overwrite the template of blocks
		return apply_filters( 'navthemes_gutenberg_block_template_{$this->block_slug}', $this->render( $attributes ) );
	}