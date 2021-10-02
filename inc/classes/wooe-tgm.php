<?php

require_once get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'wooe_register_required_plugins' );

function wooe_register_required_plugins() {

	$plugins = array(

		array(
			'name'               => 'Advanced Custom Fields Pro',
			'slug'               => 'advanced-custom-fields-pro',
			'source'             => 'https://ftp.mswebarts.com/advanced-custom-fields-pro.zip',
			'required'           => true,
			'version'            => '1.0.0',
			'force_activation'   => false,
			'force_deactivation' => false,
		),
		array(
			'name'               => 'Redux Framework',
			'slug'               => 'redux-framework',
			'required'           => true,
			'version'            => '4.1.29',
			'force_activation'   => false,
			'force_deactivation' => false,
		),
		array(
			'name'               => 'Visual Composer',
			'slug'               => 'js_composer',
			'source'             => 'https://ftp.mswebarts.com/js_composer.zip',
			'required'           => true,
			'version'            => '1.0.0',
			'force_activation'   => false,
			'force_deactivation' => false,
		),
		array(
			'name'               => 'Layer Slider',
			'slug'               => 'LayerSlider',
			'source'             => 'https://ftp.mswebarts.com/LayerSlider.zip',
			'required'           => false,
			'version'            => '1.0.0',
			'force_activation'   => false,
			'force_deactivation' => false,
		),
		array(
			'name'               => 'Revolution Slider',
			'slug'               => 'revslider',
			'source'             => 'https://ftp.mswebarts.com/revslider.zip',
			'required'           => false,
			'version'            => '1.0.0',
			'force_activation'   => false,
			'force_deactivation' => false,
		),
		array(
			'name'               => 'Envato Theme Check',
			'slug'               => 'envato-theme-check-master',
			'source'             => 'https://github.com/envato/envato-theme-check/archive/refs/heads/master.zip',
			'required'           => false,
			'version'            => '1.0.0',
			'force_activation'   => false,
			'force_deactivation' => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'woo-easy',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'woo-easy' ),
			'menu_title'                      => __( 'Install Plugins', 'woo-easy' ),
			'installing'                      => __( 'Installing Plugin: %s', 'woo-easy' ),
			'updating'                        => __( 'Updating Plugin: %s', 'woo-easy' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'woo-easy' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'woo-easy'
			),
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'woo-easy'
			),
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'woo-easy'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'woo-easy'
			),
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'woo-easy'
			),
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'woo-easy'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'woo-easy'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'woo-easy'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'woo-easy'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'woo-easy' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'woo-easy' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'woo-easy' ),
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'woo-easy' ),
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'woo-easy' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'woo-easy' ),
			'dismiss'                         => __( 'Dismiss this notice', 'woo-easy' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'woo-easy' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'woo-easy' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
	);

	tgmpa( $plugins, $config );
}
