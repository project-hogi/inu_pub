"use strict";

(function($) {

	$(document).on("appinit", function() {

		$(".lnb").eachReadyScope(function() {
			var $lnb = $(this);
			var firstOn = true;
			var $body = $("body");
			var overOnDelayTime = 400;
			var $header = $("#header");
			var $overPanel = $header.find(".over-panel");
			var $overPanelContainer = $overPanel.find(".container");
			var $headerOverPanelBg = $(".header-over-panel-bg");

			$lnb.on("mouseover", "li", function() {
				var $currentLi = $(this);
				var $ul = $currentLi.parent("ul");
				var $li = $ul.find(">li");

				if ($ul.parent(".lnb").size())
					$li = $ul.parent(".lnb").find(">ul>li");

				$li.removeClass("focus");
				$currentLi.addClass("focus");
				$li.removeClass("over-on");
				$currentLi.addClass("over-on");
				timeoutClear($ul);
				childrenOn($currentLi);

				$lnb.addClass("active");
				$overPanel.addClass("active");
				$headerOverPanelBg.addClass("active");
				depthCheck();
				heightInit();
			});

			$lnb.on("mouseout", "li", function() {
				var $currentLi = $(this);
				var $ul = $currentLi.parent("ul");
				var $li = $ul.find(">li");

				$li.removeClass("focus");

				$ul.data("timeout", setTimeout(function() {
					var $liOn = $li.removeClass("over-on");
					$li.filter(".active").addClass("over-on");
					childrenOn($liOn);
					depthCheck();
					heightInit();
				}, overOnDelayTime));
			});

			if (firstOn && !$lnb.find(">ul>li.active").size()) {
				deepFirstOn($lnb);
			}

			depthCheck();

			function deepFirstOn($nav) {
				var $firstLi = $nav.find(">ul>li:first-child").addClass("active");

				if ($firstLi.find(">ul").size())
					deepFirstOn($firstLi);
			}

			function depthCheck() {
				var depth = 0;
				var $currentPoint = $lnb;

				while (true) {
					$currentPoint = $currentPoint.find(">ul>li.over-on");

					if (!$currentPoint.size())
						break;

					depth++;
				}

				initLnbShowClass(depth);
			}

			function heightInit() {
				var maxHeight = 0;
				var $currentPoint = $lnb.find(">ul");

				while (true) {
					$currentPoint = $currentPoint.find(">li.over-on>ul");

					if (!$currentPoint.size())
						break;

					var height = $currentPoint.outerHeight();

					if (maxHeight < height)
						maxHeight = height;
				}

				$overPanelContainer.height(maxHeight);
			}

			function childrenOn($li) {
				if (!$li || !$li.size()) {
					return;
				}

				var $childrenLi = $li.find(">ul>li");

				if (!$childrenLi.size()) {
					return;
				}

				if (!$childrenLi.filter(".over-on").size()) {
					var $firstChildLi = $childrenLi.first().addClass("over-on");

					childrenOn($firstChildLi);
				}
			}

			function timeoutClear($ul) {
				if ($ul.size()) {
					clearTimeout($ul.data("timeout"));

					timeoutClear($ul.parent("li").parent("ul"));
				}
			}

			function initLnbShowClass(depth) {
				var bodyClassList = $body.attr("class").split(/\s+/);
				var newBodyClassList = new Array();

				for ( var i in bodyClassList) {
					var className = bodyClassList[i];

					if (className.indexOf("lnb-show-depth") === 0)
						continue;

					newBodyClassList.push(className);
				}

				$body.attr("class", newBodyClassList.join(" ")).addClass("lnb-show-depth-" + depth);
			}
		});

		$("#header").eachReadyScope(function() {
			var $header = $(this);
			var $lnb = $(".lnb");
			var $overPanel = $header.find(".over-panel");
			var $overPanelContainer = $overPanel.find(".container");
			var $headerOverPanelBg = $(".header-over-panel-bg");
			var $overPanelClose = $overPanel.find(".close-panel");

			$header.on("close.header", function() {
				$lnb.removeClass("active");
				$overPanel.removeClass("active");
				$headerOverPanelBg.removeClass("active");
			});
			$headerOverPanelBg.on("mouseover", function() {
				$header.trigger("close.header");
			});
			$overPanelClose.on("click", function(event) {
				event.preventDefault();

				$header.trigger("close.header");
			});
		});

		$(".sitemap").eachReadyScope(function() {
			var $sitemap = $(this);
			var $sitemapCont = $sitemap.find(".cont");
			var timeoutId = null;
			var $topBannerArea = $('#top-banner-area');

			$("a.open-sitemap").on("click", function(event) {
				event.preventDefault();
				$topBannerArea.removeClass('active');

				open();
			});
			$sitemap.find(">.bg").on("click", function() {
				close();
			});
			$sitemap.find("a.close-sitemap").on("click", function(event) {
				event.preventDefault();

				close();
			});
			$sitemap.on("click", "ul a", function(event) {
				$sitemap.find("li").removeClass("active");
				$(this).parents("li").addClass("active");
				close();
			});

			$(window).on("resized.sitemap", function() {
				$sitemapCont.height($sitemap.height());
			}).triggerHandler("resized.sitemap");

			function open() {
				if ($sitemap.hasClass("active"))
					return;

				clearTimeout(timeoutId);
				$.scrollLock();
				$sitemap.show();

				timeoutId = setTimeout(function() {
					$sitemap.addClass("active");
				}, 10);
			}
			function close() {
				if (!$sitemap.hasClass("active"))
					return;

				clearTimeout(timeoutId);
				$sitemap.removeClass("active");

				timeoutId = setTimeout(function() {
					$sitemap.hide();
					$.scrollLock("unlock");
				}, 300);
			}

			$(document).on("esc", function() {
				close();
			});
		});

		$('#top-banner-area').eachReadyScope(function() {
			var $topBanner = $(this);
			var $topBannerClose = $('.top-banner-close',$topBanner);
			$topBannerClose.on('click',function(){
				$topBanner.removeClass('active');
			});
		});

		$('body.page-index').each(function(){
			topBannerArea()
			function topBannerArea(){
				var $topBannerArea = $('#top-banner-area');
				$topBannerArea.delay(3000).addClass('active');
			}
		});

		$('#top-banner-area .mobile').each(function() {
			var $topBannerArea = $(this);
			var $topBannerContent = $('.rolling-mobile-content', $topBannerArea);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'on'
			};
			var $pager = $('.top-banner-pager', $topBannerArea).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$topBannerContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$topBannerContent.cycle('destroy');
			});
		});
		$('#top-banner-area .desktop').each(function() {
			var $topBannerArea = $(this);
			var $topBannerContent = $('.rolling-mobile-content', $topBannerArea);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'on'
			};
			var $pager = $('.top-banner-pager', $topBannerArea).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$topBannerContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$topBannerContent.cycle('destroy');
			});
		});
	});

})(jQuery);

