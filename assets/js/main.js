(function ($) {
	// start menumore responsive nav

	function wooe_responsive_menu_more() {
		var menu = $("#wooe-primary-nav"),
			subMenu = $(".wooe-primary-nav-subfilter"),
			more = $("#wooe-primary-more-nav"),
			parent = $(".wooe-primary-nav-wrapper"),
			ww = $(window).width(),
			smw = more.outerWidth();

		menu.children("li").each(function () {
			var w = $(this).outerWidth();
			if (w > smw) smw = w + 20;
			return smw;
		});

		function contract() {
			var w = 0,
				outerWidth = parent.width() - smw - 0;
			for (i = 0; i < menu.children("li").size(); i++) {
				w += menu.children("li").eq(i).outerWidth();
				if (w > outerWidth) {
					menu.children("li")
						.eq(i - 1)
						.nextAll()
						.detach()
						.css("opacity", 0)
						.prependTo(".wooe-primary-nav-subfilter")
						.stop()
						.animate(
							{
								opacity: 1,
							},
							300,
						);
					break;
				}
			}
		}

		function expand() {
			var w = 0,
				outerWidth = parent.width() - smw - 0;
			menu.children("li").each(function () {
				w += $(this).outerWidth();
				return w;
			});
			for (i = 0; i < subMenu.children("li").size(); i++) {
				w += subMenu.children("li").eq(i).outerWidth();
				if (w > outerWidth) {
					var a = 0;
					while (a < i) {
						subMenu.children("li").eq(a).css("opacity", 0).detach().appendTo("#wooe-primary-nav").stop().animate(
							{
								opacity: 1,
							},
							300,
						);
						a++;
					}
					break;
				}
			}
		}
		contract();
		expand();

		//hide empty more button
		function wooe_hide_empty_more() {
			if (subMenu.children().length == 0) {
				more.addClass("wooe-empty-more");
			}
		}
		wooe_hide_empty_more();

		$(window).on("resize", function (e) {
			$(window).width() > ww ? expand() : contract();
			ww = $(window).width();
		});
	}
	wooe_responsive_menu_more();

	// end menumore responsive nav

	// mmenu initialization
	$("#wooe-header-nav-mbl").mmenu({
		extensions: ["fx-menu-slide"],
		navbars: [
			{
				position: "bottom",
				content: ["<a class='fa fa-envelope' href='#/' target='_blank'></a>", "<a class='fab fa-twitter' href='#/' target='_blank'></a>", "<a class='fab fa-facebook-f' href='#/' target='_blank'></a>"],
			},
		],
		navbar: {
			title: "Categories",
		},
	});
	// overriding the submenu default title
	$("#wooe-header-nav-mbl").find(".mm-navbar__title[href='#mm-0']").text("Categories");

	// initializing slick carousel

	$(".wooe-slick-carousel").slick({
		prevArrow: "<a href='#' class='wooe-slick-carousel-arrow wooe-slick-carousel-prev wooe-btn-icon'><i class='fas fa-chevron-left'></i></a>",
		nextArrow: "<a href='#' class='wooe-slick-carousel-arrow wooe-slick-carousel-next wooe-btn-icon'><i class='fas fa-chevron-right'></i></a>",
	});

	// dynamic space between slick carousel slides
	$("[data-space]").each(function () {
		var $this = $(this),
			$space = $this.attr("data-space");

		$(".slick-slide").css({
			marginLeft: $space + "px",
			marginRight: $space + "px",
		});

		$(".slick-list").css({
			marginLeft: -$space + "px",
			marginRight: -$space / 2 + "px",
		});
	});

	// sticky header

	function wooe_sticky_header() {
		var lastScrollTop = 0;
		$header_mid = $("#wooe-header-mid-stuck");

		$(window).scroll(function (event) {
			var scrollTop = $(this).scrollTop();
			if (scrollTop > lastScrollTop) {
				// downscroll code
				$header_mid.addClass("wooe-header-sticky");
			} else {
				// upscroll code
				if (scrollTop < 400) {
					$header_mid.removeClass("wooe-header-sticky");
					$header_mid.addClass("wooe-header-sticky-removed");
				}
			}
			lastScrollTop = scrollTop;
		});
	}
	wooe_sticky_header();
})(jQuery);
