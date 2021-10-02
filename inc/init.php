<?php

// load required files in initialization

// load enqueued css and js

require_once( get_parent_theme_file_uri('/inc/functions/load-css-js.php') );

// load theme css

require_once( get_parent_theme_file_uri('/inc/functions/theme-styles.php') );

// load features

require_once( get_parent_theme_file_uri('/inc/functions/features.php') );

// load shortcodes

require_once( get_parent_theme_file_uri('/inc/functions/shortcode.php') );

// load woocommerce customizations

require_once( get_parent_theme_file_uri('/inc/functions/woo-customizations.php') );

// load redux framework and demo import

//require_once(get_parent_theme_file_uri('/addons/options-panel/ReduxCore/framework.php'));
if( class_exists( 'Redux_Framework_Plugin' ) ) {
	require_once( get_parent_theme_file_uri('/inc/addons/options-panel/config.php') );
}

// load bundled plugins

require_once( get_parent_theme_file_uri('/inc/classes/class-tgm-plugin-activation.php') );
require_once( get_parent_theme_file_uri('/inc/classes/wooe-tgm.php') );


// other functions

if( function_exists('acf') ) {
	require_once( get_parent_theme_file_uri('/inc/addons/acf-data/acf-import.php') );
}

// load tinymce fonts

require_once( get_parent_theme_file_uri('/inc/functions/tinymce-fonts.php') );