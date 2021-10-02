<?php

// load required files in initialization

// load enqueued css and js

require_once( dirname(__FILE__) . '/functions/load-css-js.php');

// load theme css

require_once(dirname(__FILE__) .'/functions/theme-styles.php');

// load features

require_once(dirname(__FILE__) .'/functions/features.php');

// load shortcodes

require_once(dirname(__FILE__) .'/functions/shortcode.php');

// load woocommerce customizations

require_once(dirname(__FILE__) .'/functions/woo-customizations.php');

// load redux framework and demo import

//require_once(dirname(__FILE__) .'/addons/options-panel/ReduxCore/framework.php');
if( class_exists( 'Redux_Framework_Plugin' ) ) {
	require_once(dirname(__FILE__) .'/addons/options-panel/config.php');
}

// load bundled plugins

require_once(dirname(__FILE__) .'/classes/class-tgm-plugin-activation.php');
require_once(dirname(__FILE__) .'/classes/wooe-tgm.php');


// other functions

if( function_exists('acf') ) {
	require_once(dirname(__FILE__) .'/addons/acf-data/acf-import.php');
}

// load tinymce fonts

require_once(dirname(__FILE__) .'/functions/tinymce-fonts.php');