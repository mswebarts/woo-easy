            <?php
			global $wooe_options;
			$footer_width = ( $wooe_options["wooe-footer-widget-width"] ) ? "container-fluid" : "container";
			?>			
			<div class="wooe-space-above-footer"></div>
			<hr>
            <?php
				if( $wooe_options['wooe-header-show-general-info'] ) {
					?>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<?php get_template_part( "/template-parts/templates/general", "info" ); ?>
							</div>
						</div>
					</div>

					<?php
				}
			?>

			<footer class="footer wooe-footer-one">
				<div class="wooe-footer-widget-area">
					<div class="<?php echo esc_attr( $footer_width ); ?>">
						<div class="row">
							<?php 
							if( $wooe_options['enable-widget-area'] ) {
								$layout = $wooe_options['widget-area-layout'];

								switch( $layout ) {
									case '6x6':
										get_template_part("/template-parts/footer/widget-layout-6", "6" );
										break;
									case '3x3x3x3':
										get_template_part("/template-parts/footer/widget-layout-3-3-3", "3" );
										break;
									case '4x4x4':
										get_template_part("/template-parts/footer/widget-layout-4-4", "4" );
										break;
									case '4x2x2x4':
										get_template_part("/template-parts/footer/widget-layout-4-2-2", "4" );
										break;
									case '6x3x3':
										get_template_part("/template-parts/footer/widget-layout-6-3", "3" );
										break;
									case '3x3x6':
										get_template_part("/template-parts/footer/widget-layout-3-3", "6" );
										break;
									case '3x6x3':
										get_template_part("/template-parts/footer/widget-layout-3-6", "3" );
										break;
									case '4x8':
										get_template_part("/template-parts/footer/widget-layout-4", "8" );
										break;
									case '8x4':
										get_template_part("/template-parts/footer/widget-layout-8", "4" );
										break;
									default :
										get_template_part("/template-parts/footer/widget-layout-3-3-3", "3" );
										break;
								}
							}
							?>
						</div>
					</div>
				</div>

				<?php 
					if( ( $wooe_options["enable-payment-icons"] == true ) && isset( $wooe_options['wooe-payment-icons'] ) ) {
						get_template_part( "/template-parts/footer/payment", "icons" );
					}
				?>

				<?php if( $wooe_options["enable-footer-menu-pay-icon-separator"] ) : ?>
					<hr />
				<?php endif; ?>

				<?php if( $wooe_options["enable-footer-menu"] ) : ?>
					<div class="wooe-footer-nav-container">
						<?php
							$args = array(
								"theme_location" => "footer-menu",
								"container"      => false,
								"menu_class"     => "wooe-footer-nav",
								"fallback_cb"    => false
							);
							wp_nav_menu( $args );
						?>
						<div class="wooe-copyright-text d-inline-block">
							<?php echo esc_html_e( $wooe_options['wooe-copyright-text'], "woo-easy" ); ?>
						</div>
					</div>
				<?php endif; ?>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
