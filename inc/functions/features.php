<?php
add_action( "after_setup_theme", "woo_add_theme_supports" );
function woo_add_theme_supports() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
}

add_action( 'init', 'wooe_register_nav_menus' );
function wooe_register_nav_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu', 'woo-easy' ),
			'header-right-menu' => __( 'Header Right Menu', 'woo-easy' ),
			'mobile-menu' => __( 'Mobile Menu', 'woo-easy' ),
			'footer-menu' => __( 'Footer Menu', 'woo-easy' )
		)
	);
}

// fallback for primary menu location
function wooe_primary_menu_fallback() {
	?>
	<ul class="wooe-primary-nav" id="wooe-primary-nav">
		<li class="menu-item">
			<a href="<?php esc_url(home_url()); ?>">
				<?php echo esc_html_e( "Home", "woo-easy" ); ?>
			</a>
		</li>
		<?php
		if( current_user_can( 'administrator' ) ){
			?>
				<li class="menu-item">
					<a href="<?php echo esc_url( home_url() . '/wp-admin/nav-menus.php' ); ?>">
						<?php echo esc_html_e( "Set primary menu", "woo-easy" ); ?>
					</a>
				</li>
			<?php
		}
		?>
	</ul>
	<?php
}

// fallback for mobile menu location
function wooe_mobile_menu_fallback() {
	?>
	<ul class="wooe-primary-nav-mbl" id="wooe-primary-nav-mbl">
		<li class="menu-item">
			<a href="<?php esc_url(home_url()); ?>">
				<?php echo esc_html_e( "Home", "woo-easy" ); ?>
			</a>
		</li>
		<?php
		if( current_user_can( 'administrator' ) ){
			?>
				<li class="menu-item">
					<a href="<?php echo esc_url( home_url() . '/wp-admin/nav-menus.php' ); ?>">
						<?php echo esc_html_e( "Set mobile menu", "woo-easy" ); ?>
					</a>
				</li>
			<?php
		}
		?>
	</ul>
	<?php
}