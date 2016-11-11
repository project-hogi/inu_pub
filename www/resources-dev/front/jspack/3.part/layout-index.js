"use strict";

(function($) {

	$(document).on("appinit", function() {
		$("body.layout-index").each(function() {
			$(".visual").each(function() {
				var $visual = $(this);
				var $cycle = $(".visual-content", $visual);
				var options = {
					slides : ">div",
					timeout : 2400,
					fx : "fade",
					easing : "easeInOutExpo",
					speed : 1200,
					log : false,
					pauseOnHover : false,
					pagerActiveClass : "active"
				};
				var $prev = $(".visual-prev").each(function() {
					options.prev = this;
				});
				var $next = $(".visual-next").each(function() {
					options.next = this;
				});

				setTimeout(function() {
					$next.trigger("click");
				}, 800);

				var $pager = $(".visual-pager", $visual).each(function() {
					options.pager = this;
					options.pagerTemplate = "<a href=\"#{{slideNum}}\"><span><span class=\"sr-only\">{{slideNum}}</span></span></a>";
					options.pagerEvent = "mouseover";
				}).on("click", "a", function(event) {
					event.preventDefault();
				});
				var $pause = $(".visual-pause", $visual).on("click", function(event) {
					event.preventDefault();

					var $this = $(this);

					if ($this.hasClass("active")) {
						$this.removeClass("active");
						$cycle.cycle("resume");
					} else {
						$this.addClass("active");
						$cycle.cycle("pause");
					}
				});
				var $nav = $(".visual-nav", $visual);
				var $navControls = $nav.find("a");

				$nav.on("click", "a", function(event) {
					event.preventDefault();

					var index = $navControls.index(this);

					$pager.find("a").eq(index).trigger("mouseover");
				});
				$cycle.on("cycle-before", function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
					var index = $cycle.find(">div").index(incomingSlideEl) - 1;

					$navControls.parent().removeClass("active").eq(index).addClass("active");
				});

				$cycle.cycle(options);

				$(document).one("appDestroy", function() {
					$cycle.cycle("destroy");
				});
			});
			$(".articles").each(function() {
				var $articles = $(this);
				var $cycle = $(".articles-content .eq-0", $articles);
				var $cycle2 = $(".articles-content .eq-1", $articles);
				var $cycle3 = $(".articles-content .eq-2", $articles);
				var options = {
					slides : ">a",
					timeout : 2400,
					fx : "scrollHorz",
					easing : "easeInOutExpo",
					speed : 1200,
					log : false,
					pauseOnHover : false,
					pagerActiveClass : "active"
				};
				var options2 = {
					slides : ">a",
					timeout : 2400,
					fx : "scrollHorz",
					easing : "easeInOutExpo",
					speed : 1200,
					log : false,
					pauseOnHover : false,
					pagerActiveClass : "active",
					paused : true
				};
				var $prev = $(".articles-prev").each(function() {
					options.prev = this;
				});
				var $next = $(".articles-next").each(function() {
					options.next = this;
				});

				setTimeout(function() {
					$next.trigger("click");
				}, 800);

				var $pager = $(".articles-pager", $articles).each(function() {
					options.pager = this;
					options.pagerTemplate = "";
					options.pagerEvent = "mouseover";
				}).on("click", "a", function(event) {
					event.preventDefault();
				});
				$articles.on("mouseenter", function() {
					$cycle.cycle("pause");
				});
				$articles.on("mouseleave", function() {
					$cycle.cycle("resume");
				});

				var cycle2TimeoutId = null;
				var cycle3TimeoutId = null;

				$cycle.on("cycle-before", function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
					var index = $cycle.find(">a").index(incomingSlideEl) - 1;

					if (cycle2TimeoutId != null)
						clearTimeout(cycle2TimeoutId);

					cycle2TimeoutId = setTimeout(function() {
						$cycle2.cycle('goto', index);

						if (cycle3TimeoutId != null)
							clearTimeout(cycle3TimeoutId);

						cycle3TimeoutId = setTimeout(function() {
							$cycle3.cycle('goto', index);
						}, 120);
					}, 120);
				});

				$cycle.cycle(options);
				$cycle2.cycle(options2);
				$cycle3.cycle(options2);

				$(document).one("appDestroy", function() {
					$cycle.cycle("destroy");
				});
			});
			$(".section-news").each(function() {
				var $news = $(this);
				var $cycle = $(".section-news-content>li:eq(0)>ul", $news);
				var $cycle2 = $(".section-news-content>li:eq(1)>ul", $news);
				var $cycle3 = $(".section-news-content>li:eq(2)>ul", $news);
				var $cycle4 = $(".section-news-content>li:eq(3)>ul", $news);

				var options = {
					slides : ">li",
					timeout : 2400,
					fx : "scrollVert",
					easing : "easeInOutExpo",
					speed : 1200,
					log : false,
					pauseOnHover : false,
					pagerActiveClass : "active"
				};
				var options2 = {
					slides : ">li",
					timeout : 2400,
					fx : "scrollVert",
					easing : "easeInOutExpo",
					speed : 1200,
					log : false,
					pauseOnHover : false,
					pagerActiveClass : "active",
					paused : true
				};

				setTimeout(function() {
					$cycle.cycle("next");
				}, 800);

				var $pager = $(".section-news-pager", $news).each(function() {
					options.pager = this;
					options.pagerTemplate = "<a href=\"#{{slideNum}}\"><span><span class=\"sr-only\">{{slideNum}}</span></span></a>";
					options.pagerEvent = "mouseover";
				}).on("click", "a", function(event) {
					event.preventDefault();
				});
				$news.on("mouseenter", function() {
					$cycle.cycle("pause");
				});
				$news.on("mouseleave", function() {
					$cycle.cycle("resume");
				});

				var cycle2TimeoutId = null;
				var cycle3TimeoutId = null;
				var cycle4TimeoutId = null;

				$cycle.on("cycle-before", function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
					var index = $cycle.find(">li").index(incomingSlideEl) - 1;

					if (cycle2TimeoutId != null)
						clearTimeout(cycle2TimeoutId);

					cycle2TimeoutId = setTimeout(function() {
						$cycle2.cycle('goto', index);

						if (cycle3TimeoutId != null)
							clearTimeout(cycle3TimeoutId);

						cycle3TimeoutId = setTimeout(function() {
							$cycle3.cycle('goto', index);

							if (cycle4TimeoutId != null)
								clearTimeout(cycle3TimeoutId);

							cycle4TimeoutId = setTimeout(function() {
								$cycle4.cycle('goto', index);
							}, 120);
						}, 120);
					}, 120);
				});

				$cycle.cycle(options);
				$cycle2.cycle(options2);
				$cycle3.cycle(options2);
				$cycle4.cycle(options2);

				$(document).one("appDestroy", function() {
					$cycle.cycle("destroy");
				});
			});
		});
		$('#layer_pop').draggable();
	});

})(jQuery);