			<?php
			global $wooe_options;
			
			?>			
			<div class="wooe-space-above-footer"></div>
			<footer class="footer wooe-footer-one">
				<div class="wooe-footer-widget-area">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="widget wooe-widget-logo">
									<img src="assets/img/logo.png" alt="Logo" />
								</div>
								<div class="widget wooe-widget-social-media">
									<ul>
										<li>
											<a href="#"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="fab fa-facebook"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-2">
								<div class="widget widget-navigation">
									<h3 class="widgettitle">Customer service</h3>
									<ul>
										<li>
											<a href="#">Menu item one</a>
										</li>
										<li>
											<a href="#">Menu item one</a>
										</li>
										<li>
											<a href="#">Menu item one</a>
										</li>
										<li>
											<a href="#">Menu item one</a>
										</li>
										<li>
											<a href="#">Menu item one</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-2">
								<div class="widget widget-navigation">
									<h3 class="widgettitle">About us</h3>
									<ul>
										<li>
											<a href="#">Menu item one</a>
										</li>
										<li>
											<a href="#">Menu item one</a>
										</li>
										<li>
											<a href="#">Menu item one</a>
										</li>
										<li>
											<a href="#">Menu item one</a>
										</li>
										<li>
											<a href="#">Menu item one</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4">
								<div class="widget wooe-widget-logo">
									<img src="assets/img/logo.png" alt="Logo" />
								</div>
								<div class="widget wooe-widget-social-media">
									<ul>
										<li>
											<a href="#"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="fab fa-facebook"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php 
					if( ( $wooe_options["enable-payment-icons"] == true ) && isset( $wooe_options['wooe-payment-icons'] ) ) {
						get_template_part( "/template-parts/footer/payment", "icons" );
					}
				?>
				
				<hr />
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
					<span class="wooe-copyright-text">©2021 MS Web Arts</span>
				</div>
			</footer>
		</div>

		<?php wp_footer(); ?>
	</body>
</html>
