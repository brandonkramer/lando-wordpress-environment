<?php
/**
 * Get related posts
 *
 * @param $total
 * @return WP_Query
 */
function dd_get_related_posts ( $total )
{
    $post_id    = get_the_ID();
    $cat_ids    = array();
    $categories = get_the_category( $post_id );
    if ( !empty( $categories ) && is_wp_error( $categories ) ):
        foreach ( $categories as $category ):
            array_push( $cat_ids, $category->term_id );
        endforeach;
    endif;
    $current_post_type = get_post_type( $post_id );
    $query_args        = [
        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post_not_in'    => [ $post_id ],
        'posts_per_page' => $total,
        'orderby'        => 'rand',
    ];
    return new WP_Query( $query_args );
}