<?php
// add basic theme supports
add_action( "after_setup_theme", "woo_add_theme_supports" );
function woo_add_theme_supports() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
}

// register menus
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

//register widget areas
function wooe_widget_area_generator($name, $id, $description ){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}

function wooe_widget_area_registration(){
    wooe_widget_area_generator( 'Footer widget 1', 'footer-sidebar-1', 'Widgets in this area will be displayed in the Footer Widget Area 1' );
    wooe_widget_area_generator( 'Footer widget 2', 'footer-sidebar-2', 'Widgets in this area will be displayed in the Footer Widget Area 2' );
    wooe_widget_area_generator( 'Footer widget 3', 'footer-sidebar-3', 'Widgets in this area will be displayed in the Footer Widget Area 3' );
    wooe_widget_area_generator( 'Footer widget 4', 'footer-sidebar-4', 'Widgets in this area will be displayed in the Footer Widget Area 4' );
}
add_action('widgets_init', 'wooe_widget_area_registration');

// disable widget block editor
/*
add_action( 'after_setup_theme', 'wooe_enable_classic_widget_editor' );
function wooe_enable_classic_widget_editor() {
	global $wooe_options;
	if( $wooe_options['wooe-enable-classic-widget'] ) {
		remove_theme_support( 'widgets-block-editor' );
	}
}*/

function wooe_enable_classic_widget_editor( $use_widgets_block_editor ) {
    global $wooe_options;
	if( $wooe_options['wooe-enable-classic-widget'] ) {
		return false;
	}
    return $use_widgets_block_editor;
}
add_filter( 'use_widgets_block_editor', 'wooe_enable_classic_widget_editor' );