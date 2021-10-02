<?php

// add fonts to tinyMCE editor

/**
 * Add the "font family" button.
 */
add_filter( 'mce_buttons_2', 'fb_mce_editor_buttons' );

function fb_mce_editor_buttons( $buttons ) {

    array_unshift( $buttons, 'fontselect' );
    return $buttons;
}

/**
 * Add fonts to the "Font Family" drop-down.
 */ 
add_filter( 'tiny_mce_before_init', 'fb_mce_before_init' );

function fb_mce_before_init( $settings ) {

    $font_formats = 'Andale Mono=andale mono,times;'
    . 'Arial=arial,helvetica,sans-serif;'
    . 'Arial Black=arial black,avant garde;'
    . 'Book Antiqua=book antiqua,palatino;'
    . 'Comic Sans MS=comic sans ms,sans-serif;'
    . 'Courier New=courier new,courier;'
    . 'Georgia=georgia,palatino;'
    . 'Helvetica=helvetica;'
    . 'Impact=impact,chicago;'
    . 'Symbol=symbol;'
    . 'Tahoma=tahoma,arial,helvetica,sans-serif;'
    . 'Terminal=terminal,monaco;'
    . 'Times New Roman=times new roman,times;'
    . 'Trebuchet MS=trebuchet ms,geneva;'
    . 'Verdana=verdana,geneva;'
    . 'Webdings=webdings;'
    . 'Wingdings=wingdings,zapf dingbats;'
    . 'Kalam=Kalam,sans-serif;'
    . 'TREAI=TREAI,sans-serif;'
    . 'MyriadPro=MyriadPro, sans-serif;';
    $settings[ 'font_formats' ] = $font_formats;

    return $settings;

}