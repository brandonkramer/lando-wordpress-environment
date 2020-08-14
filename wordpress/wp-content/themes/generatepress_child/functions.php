<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 *
 * Define default paths & variables
 */
define( 'DOGGIE_DESIGNER_ASSETS_VERSION', '1.0.4.5' );
define( 'DOGGIE_DESIGNER_URI', get_stylesheet_directory_uri() );
define( 'DOGGIE_DESIGNER_ROOT', get_stylesheet_directory() . DIRECTORY_SEPARATOR );
define( 'DOGGIE_DESIGNER_INCLUDES', DOGGIE_DESIGNER_ROOT . 'inc' . DIRECTORY_SEPARATOR );

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'doggie-designer-child-style',
        DOGGIE_DESIGNER_URI . '/assets/css/child-theme.css',
        [],
        DOGGIE_DESIGNER_ASSETS_VERSION
    );
    wp_enqueue_script(
        'coffee-channel-child-script',
        DOGGIE_DESIGNER_URI . '/assets/js/child-theme.js',
        [ 'jquery' ],
        DOGGIE_DESIGNER_ASSETS_VERSION,
        true );
} );

/**
 * Require theme includes
 */
foreach ( glob( DOGGIE_DESIGNER_INCLUDES . "*.php" ) as $file ) {
    require_once $file;
}

/**
 * Replace Thrive Templates with Custom Templates
 * @see tcb_template() for filter function
 * @see TCB_Post_List_Shortcodes::post_date() to see where this template is included
 *
 */
add_filter('tcb.template_path', function($path, $file, $data, $namespace) {
    if ( $file === 'post-list-sub-elements/post-date.php' ) {
        $path = DOGGIE_DESIGNER_ROOT . 'thrive-templates/post-list-sub-elements/post-date.php';
    }
    return $path;
}, 10, 4);

/**
 * @param $options
 * @return mixed
 */
function jetpackme_more_related_posts( $options ) {
    $options['size'] = 6;
    return $options;
}
add_filter( 'jetpack_relatedposts_filter_options', 'jetpackme_more_related_posts' );

add_filter('pre_get_posts', 'excludeCat');
function excludeCat($query) {
      if ( $query->is_home ) {
            $query->set('cat', '-37,-1,-34');
      }
      return $query;
}