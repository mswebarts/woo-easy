<?php
Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'General Settings', 'woo-easy' ),
    'desc'             => esc_html__( 'General Theme settings live here', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-cog',
    'fields'           => array(
        array(
            'id'          => 'wooe-enable-classic-widget',
            'type'        => 'switch',
            'title'       => esc_html__('Enable Classic Widget', 'woo-easy'), 
            'subtitle'    => esc_html__('Turn on to enable the classic widget editor', 'woo-easy'),
            'default'     => false,
        ),
    ),
) );
Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'Info Fields', 'woo-easy' ),
    'desc'             => esc_html__( 'Add additional information here', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-info-circle',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'          => 'wooe-general-info',
            'type'        => 'repeater',
            'title'       => esc_html__('General Info Fields', 'woo-easy'), 
            'subtitle'    => esc_html__('Add multiple general info. This can be enabled in header, footer and other configured areas', 'woo-easy'),
            'item_name'    => 'Info',
            'group_values' => true,
            'bind_title'   => false,
            'sortable'     => false,
            'fields'       => array(
                array(
                    'id'       => 'wooe-general-info-icon',
                    'type'     => 'text', 
                    'title'    => __('Info Icon', 'woo-easy'),
                    'desc'     => __('Add a font awesome 5 icon class to display as icon i.e. "fas fa-truck"', 'woo-easy'),
                    'subtitle' => __('', 'woo-easy'),
                    'default'  => "fas fa-check-circle"
                ),
                array(
                    'id'       => 'wooe-general-info-text',
                    'type'     => 'text', 
                    'title'    => __('Info Text', 'woo-easy'),
                    'desc'     => __('Add the info you want to add. Allowed HTML tags are "b,i,u,del"', 'woo-easy'),
                    'subtitle' => __('', 'woo-easy'),
                    'default'  => "i.e. Free returns",
                ),
            )
        ),
        array(
            'id'             => 'wooe-general-info-padding',
            'type'           => 'spacing',
            'output'         => array('.wooe-general-info'),
            'mode'           => 'padding',
            'units'          => array('em', 'px'),
            'units_extended' => 'false',
            'title'          => __('General Info area padding', 'woo-easy'),
            'subtitle'       => __('Add padding to the general info area', 'woo-easy'),
            'left'  => false,
            'right'  => false,
            'default'            => array(
                'padding-top'     => '15',
                'padding-bottom'  => '15',
                'units'          => 'px', 
            )
        ),
        array(
            'id'       => 'wooe-general-info-alignment',
            'type'     => 'select',
            'title'    => __('Select Option', 'woo-easy'), 
            'subtitle' => __('Select how the info should be aligned', 'woo-easy'),
            'desc'     => __('This is the description field, again good for additional info.', 'woo-easy'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right'
            ),
            'default'  => 'center',
        ),
        array(
            'id'            => 'wooe-general-info-fontsize',
            'type'          => 'slider',
            'title'         => esc_html__( 'Font size', 'woo-easy' ),
            'desc'          => esc_html__( 'Select the font size for this section in pixel', 'woo-easy' ),
            'default'       => 14,
            'min'           => 1,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'text',
        ),
    )
));
Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'CSS/Scripts Related', 'woo-easy' ),
    'subsection'       => true,
    'desc'             => esc_html__( 'Custom CSS/JS and other scripts can be added here', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-css'
) );
Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'Accent Colors', 'woo-easy' ),
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

Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'Header Colors', 'woo-easy' ),
    'desc'             => esc_html__( 'Header settings live here', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-asterisk',
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
Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'Footer Colors', 'woo-easy' ),
    'desc'             => esc_html__( 'Configure the footer related colors here', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-braille',
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

Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'Header', 'woo-easy' ),
    'id'               => 'header-settings',
    'desc'             => esc_html__( 'Header settings live here', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-headphones',
    'fields'           => array(
        array(
            'id'             => 'wooe-logo-bar-padding',
            'type'           => 'spacing',
            'output'         => array('.wooe-header-mid'),
            'mode'           => 'padding',
            'units'          => array('em', 'px'),
            'units_extended' => 'false',
            'title'          => __('Logo bar padding', 'woo-easy'),
            'subtitle'       => __('Add padding to the header logo bar', 'woo-easy'),
            'default'            => array(
                'padding-top'     => '15',
                'padding-bottom'  => '15',
                'padding-left'    => '0',
                'padding-right'   => '0',
                'units'           => 'px', 
            )
        ),
        array(
            'id'       => 'wooe-show-header-search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Show Search field', 'woo-easy' ),
            'compiler' => 'true',
            'desc'     => esc_html__( 'Choose whether you wanna show search field in the header bar or not', 'woo-easy' ),
            'default'  => true,
        ),
        array(
            'id'            => 'wooe-header-search-height',
            'type'          => 'slider',
            'title'         => esc_html__( 'Header search height', 'woo-easy' ),
            'desc'          => esc_html__( 'Specify header search input height in px', 'woo-easy' ),
            'default'       => 40,
            'min'           => 1,
            'step'          => 1,
            'max'           => 100,
            'display_value' => 'text',
            'required' => array( 'wooe-show-header-search', '=', '1' ),
        ),
        array(
            'id'       => 'wooe-header-show-general-info',
            'type'     => 'switch', 
            'title'    => __('Show General Info', 'woo-easy'),
            'subtitle' => __('Turn on to show General Info from General tab below the header', 'woo-easy'),
            'on'       => __('On', 'woo-easy'),
            'off'      => __('Off', 'woo-easy'),
            'default'  => true,
        ),
    )
) );

Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'Footer', 'woo-easy' ),
    'desc'             => esc_html__( 'You can find all the general footer related settings here', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-down',
    'fields'           => array(
        array(
            'id'       => 'wooe-footer-show-general-info',
            'type'     => 'switch', 
            'title'    => __('Show General Info', 'woo-easy'),
            'subtitle' => __('Turn on to show General Info from General tab above the footer', 'woo-easy'),
            'on'       => __('On', 'woo-easy'),
            'off'      => __('Off', 'woo-easy'),
            'default'  => true,
        ),
        array(
            'id'       => 'enable-footer-menu',
            'type'     => 'switch', 
            'title'    => __('Enable Footer Menu', 'woo-easy'),
            'subtitle' => __('Turn on to enable the footer menu area in the frontend', 'woo-easy'),
            'default'  => true,
        ),
        array(
            'id'             => 'wooe-footer-menu-padding',
            'type'           => 'spacing',
            'output'         => array('.wooe-footer-nav-container'),
            'mode'           => 'padding',
            'units'          => array('em', 'px'),
            'units_extended' => 'false',
            'title'          => __('Footer menu bar padding', 'woo-easy'),
            'subtitle'       => __('Add padding to the footer menu bar area.', 'woo-easy'),
            'required'       => array( 'enable-footer-menu', '=', '1' ),
            'default'            => array(
                'padding-top'     => '15', 
                'padding-right'   => '15', 
                'padding-bottom'  => '15', 
                'padding-left'    => '15',
                'units'          => 'px', 
            )
        ),
        array(
            'id'            => 'wooe-footer-menu-space-between',
            'type'          => 'slider',
            'title'         => esc_html__( 'Footer menu item spacing', 'woo-easy' ),
            'desc'          => esc_html__( 'Specify the spacing between footer menu items in px', 'woo-easy' ),
            'default'       => 20,
            'min'           => 1,
            'step'          => 1,
            'max'           => 500,
            'display_value' => 'text',
            'required' => array( 'enable-footer-menu', '=', '1' ),
        ),
        array(
            'id'       => 'enable-footer-menu-pay-icon-separator',
            'type'     => 'switch', 
            'title'    => __('Footer Menu & Payment Icon Separator', 'woo-easy'),
            'subtitle' => __('Turn on to add a separator between the Footer Menu and the Payment Icon area', 'woo-easy'),
            'default'  => true,
        ),
        array(
            'id'               => 'wooe-copyright-text',
            'type'             => 'editor',
            'title'            => __('Footer Copyright Text', 'woo-easy'), 
            'subtitle'         => __('Add text for the footer copyright area', 'woo-easy'),
            'default'          => '©2021 MS Web Arts',
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
    )
) );

Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'Widget Area', 'woo-easy' ),
    'desc'             => esc_html__( 'You can find all the settings related to footer widget area here', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-wrench-alt',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'       => 'enable-widget-area',
            'type'     => 'switch', 
            'title'    => __('Enable Widget Area', 'woo-easy'),
            'subtitle' => __('Turn on to enable the widget area', 'woo-easy'),
            'default'  => true,
        ),
        array(
            'id'       => 'wooe-footer-widget-width',
            'type'     => 'switch', 
            'title'    => __('Widget area width', 'woo-easy'),
            'subtitle' => __('Select what should be the width of the footer widget area content', 'woo-easy'),
            'on'       => __('Full width', 'woo-easy'),
            'off'      => __('Boxed width', 'woo-easy'),
            'required' => array( 'enable-widget-area', '=', '1' ),
            'default'  => false,
        ),
        array(
            'id'       => 'widget-area-layout',
            'type'     => 'image_select',
            'required' => array( 'enable-widget-area', 'equals', '1' ),
            'title'    => __('Widget Area Layout', 'woo-easy'),
            'subtitle' => __('Select the layout for the widget area', 'woo-easy'),
            'required' => array( 'enable-widget-area', '=', '1' ),
            'options'  => array(
                '6x6'      => array(
                    'alt'   => '6x6 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/6-6.jpg'
                ),
                '3x3x3x3'      => array(
                    'alt'   => '3x3x3x3 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/3-3-3-3.jpg'
                ),
                '4x4x4'      => array(
                    'alt'   => '4x4x4 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/4-4-4.jpg'
                ),
                '4x2x2x4'      => array(
                    'alt'   => '4x2x2x4 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/4-2-2-4.jpg'
                ),
                '6x3x3'      => array(
                    'alt'   => '6x3x3 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/6-3-3.jpg'
                ),
                '3x3x6'      => array(
                    'alt'   => '3x3x6 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/3-3-6.jpg'
                ),
                '3x6x3'      => array(
                    'alt'   => '3x6x3 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/3-6-3.jpg'
                ),
                '4x8'      => array(
                    'alt'   => '4x8 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/4-8.jpg'
                ),
                '8x4'      => array(
                    'alt'   => '8x4 Columns', 
                    'img'   => get_template_directory_uri() . '/inc/admin/assets/images/footer/8-4.jpg'
                ),
            ),
            'default'  => '3x3x3x3',
        ),
        array(
            'id'             => 'wooe-footer-widget-area-padding',
            'type'           => 'spacing',
            'output'         => array('.wooe-footer-widget-area'),
            'mode'           => 'padding',
            'units'          => array('em', 'px'),
            'units_extended' => 'false',
            'title'          => __('Widget area padding', 'woo-easy'),
            'subtitle'       => __('Add padding to the footer widget area.', 'woo-easy'),
            'required'       => array( 'enable-widget-area', '=', '1' ),
            'default'            => array(
                'padding-top'     => '50', 
                'padding-right'   => '0', 
                'padding-bottom'  => '50', 
                'padding-left'    => '0',
                'units'          => 'px', 
            )
        ),
        array(
            'id'            => 'wooe-footer-widget-font-size',
            'type'          => 'slider',
            'title'         => esc_html__( 'Widget area font size', 'woo-easy' ),
            'desc'          => esc_html__( 'Select the default font size for the widget area', 'woo-easy' ),
            'default'       => 14,
            'min'           => 1,
            'step'          => 1,
            'max'           => 500,
            'display_value' => 'text',
            'required' => array( 'enable-widget-area', '=', '1' ),
        ),
        array(
            'id'            => 'wooe-footer-widget-spacing',
            'type'          => 'slider',
            'title'         => esc_html__( 'Spacing between widgets', 'woo-easy' ),
            'desc'          => esc_html__( 'Specify the spacing between widgets in the footer in pixel unit', 'woo-easy' ),
            'default'       => 30,
            'min'           => 1,
            'step'          => 1,
            'max'           => 500,
            'display_value' => 'text',
            'required' => array( 'enable-widget-area', '=', '1' ),
        ),
    ),
));

Redux::set_section( $opt_name, array(
    'title'            => esc_html__( 'Payments Icons', 'woo-easy' ),
    'desc'             => esc_html__( 'Testing repeater extension', 'woo-easy' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-path',
    'subsection'       => true,
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
            'subtitle'     => __( 'Add or remove payment icons in the footer area. Click on Plus icons to expand', 'woo-easy' ),
            'desc'         => __( '', 'woo-easy' ),
            'item_name'    => 'Payment Icon',
            'group_values' => true,
            'bind_title'   => false,
            'sortable'     => false,
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
                        'url'=> get_template_directory_uri() . '/inc/admin/assets/images/footer/visa.png'
                    ),
                ),
            )
        ),
        array(
            'id'       => 'wooe-payment-icon-dimension',
            'type'     => 'dimensions',
            'output'   => array('.wooe-footer-payment-icons img'),
            'units'    => array( 'em','px' ),
            'width'    => false,
            'title'    => __('Payment Icon Height', 'woo-easy'),
            'subtitle' => __('Set height for the icons', 'woo-easy'),
            'desc'     => __( 'The width of the icon will be set to \'auto\' to keep the proportion of the icon', 'woo-easy' ),
            'required' => array( 'enable-payment-icons', 'equals', 1 ),
            'default'  => array(
                'height'  => '40',
                'units'   => 'px', 
            ),
        ),
        array(
            'id'             => 'wooe-payment-area-padding',
            'type'           => 'spacing',
            'output'         => array('.wooe-footer-payment-icons'),
            'mode'           => 'padding',
            'units'          => array('em', 'px'),
            'units_extended' => 'false',
            'title'          => __('Payment Icon bar Padding', 'woo-easy'),
            'subtitle'       => __('Add paddding to the payment icon bar area', 'woo-easy'),
            'required' => array( 'enable-payment-icons', 'equals', 1 ),
            'default'            => array(
                'padding-top'     => '15', 
                'padding-right'   => '15', 
                'padding-bottom'  => '15', 
                'padding-left'    => '15',
                'units'          => 'px', 
            )
        ),
        array(
            'id'       => 'wooe-payment-icon-spacing',
            'type'     => 'text',
            'title'    => __('Spacing Between Icons', 'woo-easy'),
            'subtitle' => __('Specify spaces between the icons', 'woo-easy'),
            'validate' => 'numeric',
            'msg'      => 'Please enter a valid number',
            'default'  => '20'
        ),
        array(
            'id'       => 'wooe-payment-icon-alignment',
            'type'     => 'select',
            'title'    => __('Icon Alignment', 'woo-easy'),
            'subtitle' => __('Select how the icons should be aligned', 'woo-easy'),
            'msg'      => 'Please enter a valid number',
            'options'  => array(
                'left'   => 'Left',
                'center' => 'Center',
                'right'  => 'Right'
            ),
            'default'  => 'center'
        ),
    )
) );