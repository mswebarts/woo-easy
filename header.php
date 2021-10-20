<?php global $wooe_options; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(" "); ?>>
		<?php wp_body_open(); ?>
		<div class="wooe-page" id="wooe-page">
			<header class="wooe-header wooe-header-one">
				<div class="wooe-header-mid wooe-header-mid-text-light" id="wooe-header-mid">
					<div class="container">
						<div class="row align-items-center justify-content-between">
							<div class="col-6 col-sm-6 col-md-3 col-lg-3 order-0 order-sm-0 order-md-0 order-lg-0">

								<?php if( $wooe_options['wooe-show-header-search'] == false ) : ?>
									<a href="#wooe-header-nav-mbl" class="wooe-mobile-hamburger mburger mburger--spin d-inline-block d-sm-inline-block d-md-none d-lg-none">
										<b></b>
										<b></b>
										<b></b>
									</a>
								<?php endif; ?>

								<a href="<?php echo esc_url(home_url()); ?>" class="wooe-logo">
									<?php
										if ( has_custom_logo() ) {
											$custom_logo_id = get_theme_mod( 'custom_logo' );
											$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
											?>
												<img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo sprintf( __( '%1$s', 'woo-easy' ), get_bloginfo('name') ); ?>">
											<?php
										}
									?>
								</a>
							</div>

							<?php if( $wooe_options['wooe-show-header-search'] == true ) : ?>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-2 order-sm-2 order-md-1 order-lg-1 mt-2 mt-sm-2 mt-md-0 mt-lg-0">
									<div class="d-flex flex-nowrap">
										<a href="#wooe-header-nav-mbl" class="wooe-mobile-hamburger mburger mburger--spin d-block d-sm-block d-md-none d-lg-none">
											<b></b>
											<b></b>
											<b></b>
										</a>
										<div class="wooe-header-search w-100">
											<div class="input-group w-100">
												<input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2" />
												<button class="btn wooe-header-search-submit" type="button">
													<i class="far fa-search"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<div class="col-6 col-sm-6 col-md-3 col-lg-3 order-1 order-sm-1 order-md-2 order-lg-2">
								<div class="wooe-header-mid-right">
									<ul class="wooe-header-action-buttons list-group list-group-horizontal justify-content-end">
										<li class="list-group-item">
											<i class="fal fa-heart"></i>
										</li>
										<li class="list-group-item">
											<i class="fal fa-shopping-cart"></i>
										</li>
										<li class="list-group-item">
											<i class="fal fa-user"></i>
											<i class="fal fa-chevron-down"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wooe-header-mid wooe-header-mid-stuck wooe-header-mid-text-light" id="wooe-header-mid-stuck">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-6 col-sm-6 col-md-3 col-lg-3 order-0 order-sm-0 order-md-0 order-lg-0">
								<a href="<?php echo esc_url(home_url()); ?>" class="wooe-logo">
									<?php
										if ( has_custom_logo() ) {
											$custom_logo_id = get_theme_mod( 'custom_logo' );
											$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
											?>
												<img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo sprintf( __( '%1$s', 'woo-easy' ), get_bloginfo('name') ); ?>">
											<?php
										}
									?>
								</a>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-2 order-sm-2 order-md-1 order-lg-1 mt-2 mt-sm-2 mt-md-0 mt-lg-0">
								<div class="d-flex flex-nowrap">
									<a href="#wooe-header-nav-mbl" class="wooe-mobile-hamburger mburger mburger--spin d-block d-sm-block d-md-none d-lg-none">
										<b></b>
										<b></b>
										<b></b>
									</a>
									<div class="wooe-header-search w-100">
										<div class="input-group w-100">
											<input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2" />
											<button class="btn wooe-header-search-submit" type="button">
												<i class="far fa-search"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-3 order-1 order-sm-1 order-md-2 order-lg-2">
								<div class="wooe-header-mid-right">
									<ul class="wooe-header-action-buttons list-group list-group-horizontal justify-content-end">
										<li class="list-group-item">
											<i class="fal fa-heart"></i>
										</li>
										<li class="list-group-item">
											<i class="fal fa-shopping-cart"></i>
										</li>
										<li class="list-group-item">
											<i class="fal fa-user"></i>
											<i class="fal fa-chevron-down"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="wooe-header-nav d-sm-none d-none d-md-block d-lg-block">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="wooe-header-nav-left wooe-primary-nav-wrapper" id="wooe-primary-nav-wrapper">
									<?php
										$args = array(
											"theme_location" => "primary-menu",
											"container"      => false,
											"menu_class"     => "wooe-primary-nav",
											"menu_id"        => "wooe-primary-nav",
											"fallback_cb"    => "wooe_primary_menu_fallback"
										);
										wp_nav_menu( $args );
									?>

									<ul id="wooe-primary-more-nav">
										<li>
											<a href="javascript:void(0);">More <i class="far fa-chevron-down"></i></a>
											<ul class="wooe-primary-nav-subfilter"></ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="wooe-header-nav-right">
									<?php
										$args = array(
											"theme_location" => "header-right-menu",
											"container"      => false,
											"menu_class"     => "wooe-secondary-nav",
											"depth"          => 1,
											"fallback_cb"    => false
										);
										wp_nav_menu( $args );
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<nav class="wooe-header-nav-mbl" id="wooe-header-nav-mbl">
					<?php
						$args = array(
							"theme_location" => "mobile-menu",
							"container"      => false,
							"menu_class"     => "wooe-primary-nav-mbl",
							"menu_id"        => "wooe-primary-nav-mbl",
							"fallback_cb"    => "wooe_mobile_menu_fallback"
						);
						wp_nav_menu( $args );
					?>
				</nav>

				<div class="wooe-header-bottom-info">
					<div class="wooe-header-bottom-info-item">
						<i class="fas fa-truck"></i>
						<b>Free</b> delivery in NL
					</div>
					<div class="wooe-header-bottom-info-item">
						<i class="fas fa-check-circle"></i>
						Ordered before <b>23:59PM</b>, delivered <b>tomorrow</b>
					</div>
					<div class="wooe-header-bottom-info-item">
						<i class="fas fa-check-circle"></i>
						<b>Free</b> returns
					</div>
				</div>
			</header>