<?php
Redux::set_section( $opt_name, array(
        'title'            => esc_html__( 'General Settings', 'woo-easy' ),
        'id'               => 'general-settings',
        'desc'             => esc_html__( 'General Theme settings live here', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-cog'
    ) );
    Redux::set_section( $opt_name, array(
        'title'            => esc_html__( 'CSS/Scripts Related', 'woo-easy' ),
        'id'               => 'css-scripts-settings',
        'subsection'       => true,
        'desc'             => esc_html__( 'Custom CSS/JS and other scripts can be added here', 'woo-easy' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-cog'
    ) );
    Redux::set_section( $opt_name, array(
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

    
    Redux::set_section( $opt_name, array(
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
    Redux::set_section( $opt_name, array(
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

    Redux::set_section( $opt_name, array(
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
    
    Redux::set_section( $opt_name, array(
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
                'bind_title'   => false,
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