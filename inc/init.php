<?php

// load required files in initialization

// load enqueued css and js

require_once( get_parent_theme_file_path('/inc/functions/load-css-js.php') );

// load theme css

require_once( get_parent_theme_file_path('/inc/functions/theme-styles.php') );

// load features

require_once( get_parent_theme_file_path('/inc/functions/features.php') );

// load shortcodes

require_once( get_parent_theme_file_path('/inc/functions/shortcode.php') );

// load woocommerce customizations

require_once( get_parent_theme_file_path('/inc/functions/woo-customizations.php') );

// load redux framework and demo import

if( class_exists( 'Redux_Framework_Plugin' ) ) {
	require_once( get_parent_theme_file_path('/inc/addons/options-panel/repeater/class-redux-extension-repeater.php') );
	require_once( get_parent_theme_file_path('/inc/addons/options-panel/repeater/repeater/class-redux-repeater.php') );
	
	require_once( get_parent_theme_file_path('/inc/addons/options-panel/config.php') );
}

// load bundled plugins

require_once( get_parent_theme_file_path('/inc/classes/class-tgm-plugin-activation.php') );
require_once( get_parent_theme_file_path('/inc/classes/wooe-tgm.php') );


// other functions

if( function_exists('acf') ) {
	require_once( get_parent_theme_file_path('/inc/addons/acf-data/acf-import.php') );
}

// load tinymce fonts

require_once( get_parent_theme_file_path('/inc/functions/tinymce-fonts.php') );