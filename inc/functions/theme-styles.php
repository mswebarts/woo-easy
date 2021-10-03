<?php
function wooe_dynamic_css() {
	global $wooe_options;
	?>
	<style type="text/css">
		:root {
			--wooe-light-color: <?php echo esc_html( $wooe_options['wooe-light-color'] ) ?>;
			--wooe-dark-color: <?php echo esc_html( $wooe_options['wooe-dark-color'] ) ?>;
			--wooe-primary-color: <?php echo esc_html( $wooe_options['wooe-primary-color'] ) ?>;
			--wooe-secondary-color: <?php echo esc_html( $wooe_options['wooe-secondary-color'] ) ?>;
			--wooe-highlight-color: <?php echo esc_html( $wooe_options['wooe-highlight-color'] ) ?>;
			--wooe-header-search-bg: <?php echo esc_html( $wooe_options['wooe-header-search-bg'] ) ?>;

			--wooe-primary-menu-color: <?php echo esc_html( $wooe_options['wooe-primary-menu-color'] ) ?>;
			--wooe-primary-menu-highlight-color: <?php echo esc_html( $wooe_options['wooe-primary-menu-highlight-color'] ) ?>;
			--wooe-nav-drop-bg: <?php echo esc_html( $wooe_options['wooe-dropdown-menu-bg-color'] ) ?>;
			--wooe-secondary-menu-color: <?php echo esc_html( $wooe_options['wooe-secondary-menu-color'] ) ?>;

			--wooe-header-search-height: 40px;
			--wooe-nav-drop-width: 180px;
			--wooe-nav-drop-item-pad: 5px 15px;
			--wooe-nav-more-drop-item-pad: 5px 15px 5px 20px;

			/* product card*/
			--wooe-product-card-title-color: #4285f4;

			/*footer*/
			--wooe-footer-widget-bg: <?php echo esc_html( $wooe_options['wooe-footer-widget-bg'] ) ?>;

			--wooe-footer-menu-color: <?php echo esc_html( $wooe_options['wooe-footer-menu-color'] ) ?>;
			--wooe-footer-menu-hover-color: <?php echo esc_html( $wooe_options['wooe-footer-menu-color-hover'] ) ?>;
		}
		/*********************
			header styles
		**********************/

		.wooe-header .wooe-logo img {
			height: 40px;
		}
		.wooe-header-mid {
			background-color: <?php echo esc_html( $wooe_options['wooe-header-mid-bg'] ) ?>;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		.wooe-header-action-buttons li i {
			font-size: 25px;
		}
		.wooe-header-action-buttons li i[class*="down"] {
			font-size: 14px;
		}
		.wooe-header-action-buttons li {
			color: var(--wooe-light-color);
		}
		/* header bottom */
		.wooe-header-bottom-info {
			font-size: 14px;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.wooe-header-bottom-info .wooe-header-bottom-info-item {
			padding: 0 10px;
			width: auto;
		}

		/* default section heading */

		.wooe-section-heading {
			margin-top: 15px;
			margin-bottom: 15px;
			font-size: 20px;
			font-weight: 700;
			font-family: BeVietnamPro, sans-serif;
		}

		/*************************************
					Footer
		*************************************/
		.wooe-space-above-footer {
			display: block;
			height: 40px;
		}
		.wooe-footer-widget-area {
			padding-top: 50px;
			padding-right: 0;
			padding-bottom: 50px;
			padding-left: 0;
			font-size: 14px;
		}
		.footer .widgettitle {
			font-size: 18px;
			font-weight: 600;
		}
		.wooe-footer-widget-area a {
			color: #000000;
		}
		.wooe-footer-widget-area a:hover {
			opacity: 0.8;
		}

		.wooe-footer-payment-icons ul li {
			margin-right: 20px; /*space between icons*/
		}
		.wooe-footer-payment-icons img {
			width: 40px;
			height: auto;
		}

		/* footer menu */

		.wooe-footer-nav-container {
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.wooe-footer-nav li {
			margin-right: 20px; /*space between menus*/
		}
	</style>
<?php }
add_action( 'wp_head', 'wooe_dynamic_css' );