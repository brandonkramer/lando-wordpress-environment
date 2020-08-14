<?php
/**
 * Add single blue bg
 */
add_action( 'generate_inside_container', function () {
    if ( is_single() )
        echo '<div class="single-post-top-bg"></div>';
} );

/**
 * Add single post meta
 */
add_action( 'generate_after_entry_title', function () {
    if ( is_single() ):
        get_template_part( 'template-parts/post-meta' );
    endif;
} );

/**
 * Add author box to single post
 */
add_action( 'generate_after_main_content', function () {
    if ( function_exists( 'wpsabox_author_box' ) && is_single() ) {
        $html = '<div class="post-author-box">';
        $html .= '<div class="post-author-box__inner">';
        $html .= '<div class="post-author-box__label">' . __( 'Writer' ) . '</div>';
        $html .= wpsabox_author_box();
        $html .= '</div>';
        $html .= '</div>';
        echo $html;
    }
} );

/**
 * Add related posts and table of contents TOC to single post
 */
add_action( 'generate_before_footer', function () {
    if ( is_single() ) :
        get_template_part( 'template-parts/related-posts' );
        $toc = '<div class="container">';
        $toc .= '<div class="dd-post-toc">';
        $toc .= '</div>';
        $toc .= '</div>';
        echo $toc;
    endif;
} );

