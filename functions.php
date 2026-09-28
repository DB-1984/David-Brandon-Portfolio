<?php
function david_brandon_enqueue_styles() {
    wp_enqueue_style(
        'david-brandon-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'david_brandon_enqueue_styles' );

function portfolio_enqueue_fonts() {
	wp_enqueue_style(
		'portfolio-silkscreen',
		'https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap',
		[],
		null
	);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_fonts');

function portfolio_assets() {

	wp_enqueue_style(
		'aos',
		get_theme_file_uri('/assets/css/aos.css'),
		[],
		'2.3.4'
	);

	wp_enqueue_script(
		'aos',
		get_theme_file_uri('/assets/js/aos.js'),
		[],
		'2.3.4',
		true
	);

	wp_enqueue_script(
		'portfolio',
		get_theme_file_uri('/assets/js/main.js'),
		['aos'],
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('wp_enqueue_scripts', 'portfolio_assets');

add_action('init', function () {
    add_post_type_support('page', 'excerpt');
});

add_action('init', function () {
    register_taxonomy_for_object_type('post_tag', 'page');
});

add_action( 'pre_get_posts', function( $query ) {
    if ( ! is_admin() && $query->is_main_query() && is_tag() ) {
        $query->set( 'post_type', array( 'post', 'page' ) );
    }
});