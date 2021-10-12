<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "wooe_options";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Woo Easy', 'woo-easy' ),
        'page_title'           => __( 'Woo Easy Options Panel', 'woo-easy' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 4,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'wooe-options',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'woo-easy' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'woo-easy' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'woo-easy' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'woo-easy' ), $v );
    } else {
        $args['intro_text'] = __( '', 'woo-easy' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '', 'woo-easy' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'woo-easy' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'woo-easy' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'woo-easy' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'woo-easy' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'woo-easy' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General Settings', 'woo-easy' ),
        'id'               => 'general-settings',
        'desc'             => esc_html__( 'General Theme settings live here', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-cog'
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'CSS/Scripts Related', 'woo-easy' ),
        'id'               => 'css-scripts-settings',
        'subsection'       => true,
        'desc'             => esc_html__( 'Custom CSS/JS and other scripts can be added here', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-cog'
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Accent Colors', 'woo-easy' ),
        'id'               => 'color-settings',
        'desc'             => esc_html__( 'All the theme colors can be configured here', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-brush',
        'fields'           => array(
            array(
                'id'          => 'wooe-primary-color',
                'type'        => 'color',
                'title'       => esc_html__('Primary Color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a primary color for the site (default: #4285f4).', 'woo-easy'),
                'default'     => '#4285f4',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-secondary-color',
                'type'        => 'color',
                'title'       => esc_html__('Secondary Color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a secondary color for the site (default: #02a95b).', 'woo-easy'),
                'default'     => '#02a95b',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-highlight-color',
                'type'        => 'color',
                'title'       => esc_html__('Highlight Color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a highlight color for the site (default: #ff4e00).', 'woo-easy'),
                'default'     => '#ff4e00',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-light-color',
                'type'        => 'color',
                'title'       => esc_html__('Light Color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a light color for the site (default: #ffffff).', 'woo-easy'),
                'default'     => '#ffffff',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-dark-color',
                'type'        => 'color',
                'title'       => esc_html__('Dark Color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a dark color for the site (default: #333333).', 'woo-easy'),
                'default'     => '#333333',
                'transparent' => false,
                'validate'    => 'color',
            ),
        ),
    ) );

    
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header Colors', 'woo-easy' ),
        'id'               => 'color-header-settings',
        'desc'             => esc_html__( 'Header settings live here', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-lines',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'          => 'wooe-header-mid-bg',
                'type'        => 'color',
                'title'       => esc_html__('Header mid bar', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a color for the header mid bar or the logo bar (default: #273444).', 'woo-easy'),
                'default'     => '#273444',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-header-search-bg',
                'type'        => 'color',
                'title'       => esc_html__('Header search background color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a background color for the header search field (default: #ffffff).', 'woo-easy'),
                'default'     => '#ffffff',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id' => 'section-start',
                'type' => 'section',
                'title' => esc_html__('Menu colors', 'woo-easy'),
                'subtitle' => esc_html__('Configure the header menu colors', 'woo-easy'),
                'indent' => false 
            ),
            array(
                'id'          => 'wooe-menu-bar-bg',
                'type'        => 'color',
                'title'       => esc_html__('Menu bar background color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a background color for the menu bar (default: #ffffff).', 'woo-easy'),
                'default'     => '#ffffff',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-primary-menu-color',
                'type'        => 'color',
                'title'       => esc_html__('Primary menu color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a color for the primary menu items (default: #4285f4).', 'woo-easy'),
                'default'     => '#4285f4',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-primary-menu-highlight-color',
                'type'        => 'color',
                'title'       => esc_html__('Primary menu highlight color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a hover or active color for the primary menu items (default: #ff4e00).', 'woo-easy'),
                'default'     => '#ff4e00',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-dropdown-menu-bg-color',
                'type'        => 'color',
                'title'       => esc_html__('Primary menu dropdown background', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a background color for dropdown menus (default: #ffffff).', 'woo-easy'),
                'default'     => '#ffffff',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-dropdown-menu-color-hover',
                'type'        => 'select',
                'title'       => esc_html__('Menu dropdown hover color', 'woo-easy'), 
                'subtitle'    => esc_html__('Select hover color for the dropdown menus (default: #ffffff).', 'woo-easy'),
                'options'  => array(
                    'light' => 'Light',
                    'dark' => 'Dark'
                ),
                'default'     => 'light',
            ),
            array(
                'id'          => 'wooe-secondary-menu-color',
                'type'        => 'color',
                'title'       => esc_html__('Header right menu color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a color for the header right menu items (default: #888888).', 'woo-easy'),
                'default'     => '#888888',
                'transparent' => false,
                'validate'    => 'color',
            ),

            array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false,
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Colors', 'woo-easy' ),
        'id'               => 'color-footer-settings',
        'desc'             => esc_html__( 'Configure the footer related colors here', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-lines',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'          => 'wooe-footer-widget-bg',
                'type'        => 'color',
                'title'       => esc_html__('Widget area background color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a background color for the widget area in the footer area (default: #f2f8ff).', 'woo-easy'),
                'default'     => '#f2f8ff',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-footer-payment-bg',
                'type'        => 'color',
                'title'       => esc_html__('Footer payment bar background', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a background color for the footer payment bar (default: #ffffff).', 'woo-easy'),
                'default'     => '#ffffff',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-footer-menu-bg',
                'type'        => 'color',
                'title'       => esc_html__('Footer menu background color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a background color for the footer menu (default: #ffffff).', 'woo-easy'),
                'default'     => '#ffffff',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-footer-menu-color',
                'type'        => 'color',
                'title'       => esc_html__('Footer menu color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a color for the footer menu links (default: #333333).', 'woo-easy'),
                'default'     => '#333333',
                'transparent' => false,
                'validate'    => 'color',
            ),
            array(
                'id'          => 'wooe-footer-menu-color-hover',
                'type'        => 'color',
                'title'       => esc_html__('Footer menu hover color', 'woo-easy'), 
                'subtitle'    => esc_html__('Pick a color for the hover state of the footer menu links (default: #555555).', 'woo-easy'),
                'default'     => '#555555',
                'transparent' => false,
                'validate'    => 'color',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header', 'woo-easy' ),
        'id'               => 'header-settings',
        'desc'             => esc_html__( 'Header settings live here', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-lines',
        'fields'           => array(
            array(
                'id'       => 'wooe-show-header-search',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Search field', 'woo-easy' ),
                'compiler' => 'true',
                'desc'     => esc_html__( 'Choose whether you wanna show search field in the header bar or not', 'woo-easy' ),
                'default'  => true,
            ),
            array(
                'id'            => 'wooe-header-bar-height',
                'type'          => 'slider',
                'title'         => esc_html__( 'Header bar height', 'woo-easy' ),
                'desc'          => esc_html__( 'Specify header bar height in px', 'woo-easy' ),
                'default'       => 50,
                'min'           => 1,
                'step'          => 1,
                'max'           => 500,
                'display_value' => 'label',
                'required' => array( 'wooe-show-header-search', '=', '1' ),
            ),
        )
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer', 'woo-easy' ),
        'id'               => 'footer-settings',
        'desc'             => esc_html__( 'Testing repeater extension', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-lines',
        'fields'           => array(
            array(
                'id'       => 'enable-payment-icons',
                'type'     => 'switch', 
                'title'    => __('Enable Payment Icons', 'woo-easy'),
                'subtitle' => __('Turn on to enable the payment icons', 'woo-easy'),
                'default'  => true,
            ),
            array(
                'id'           => 'wooe-payment-icons',
                'type'         => 'repeater',
                'title'        => __( 'Payment Icons', 'woo-easy' ),
                'subtitle'     => __( 'Add or remove payment icons in the footer area. You can sort them by dragging', 'woo-easy' ),
                'desc'         => __( '', 'woo-easy' ),
                'item_name'    => 'Payment Icon',
                'group_values' => true,
                //'bind_title'   => true,
                'sortable'     => true,
                'required'     => array( 'enable-payment-icons', 'equals', 1 ),
                'fields'       => array(
                    array(
                        'id'       => 'wooe-payment-icon',
                        'type'     => 'media', 
                        'url'      => false,
                        'title'    => __('Payment Icon', 'woo-easy'),
                        'desc'     => __('Upload the icon or image. Transparent image in PNG format is recommended.', 'woo-easy'),
                        'subtitle' => __('', 'woo-easy'),
                        'default'  => array(
                            'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                        ),
                    ),
                )
            )
        )
    ) );
    


    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'woo-easy' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'woo-easy' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }