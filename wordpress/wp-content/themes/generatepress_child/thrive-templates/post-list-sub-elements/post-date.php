<?php
/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package thrive-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Silence is golden!
}

$date = $data['date'];

if ( empty( $data['link'] ) ) {
    echo $date;
} else {

    $attrs = array(
        'title'    => $date,
        'data-css' => empty( $data['css'] ) ? '' : $data['css'],
    );

    if ( ! empty( $data['target'] ) && ( $data['target'] === '1' ) ) {
        $attrs['target'] = '_blank';
    }

    if ( ! empty( $data['rel'] ) && ( $data['rel'] === '1' ) ) {
        $attrs['rel'] = 'nofollow';
    }
    echo TCB_Utils::wrap_content( $date, 'div', '', '', $attrs );
}
