"use strict";

(function($) {

	$(document).on("appinit", function() {
		$("body.layout-page").each(function() {
			var $body = $("body");
			var $lnb = $(".lnb");
			var bodyClassList = $body.attr("class").split(/\s+/);
			var pageClassList = new Array();

			for ( var i in bodyClassList) {
				var className = bodyClassList[i];

				if (className.indexOf("page") !== 0)
					continue;

				pageClassList.push(className.replace("page-", "nav-"));
			}

			$lnb.find("li").removeClass("active");

			for ( var i in pageClassList) {
				$lnb.find("li." + pageClassList[i]).addClass("active");
			}
		});

		$(".qnb").eachReadyScope(function() {
			var itemsSelector = "a";
			var $items = $(this).find(itemsSelector);

			$(this).on("mouseover focus", itemsSelector, function() {
				$items.parent().removeClass("active");
				$(this).parent().addClass("active");
			});
		});

		$(".snb").eachReadyScope(function() {
			var $snb = $(this);

			$snb.find(".container>ul>li:not(.home)").each(function() {
				var $item = $(this);

				$item.on("mouseenter", function() {
					$item.addClass("active");
				}).on("mouseleave", function() {
					$item.removeClass("active");
				}).on("click", ">a", function(event) {
					event.preventDefault();
				}).on("focus", "a", function() {
					$item.addClass("active");
				}).on("blur", "a", function() {
					$item.removeClass("active");
				});
			});
		});

		$(".familysite").eachReadyScope(function() {
			var $familysite = $(this);

			$familysite.on("mouseenter", function() {
				$familysite.addClass("active");
			}).on("mouseleave", function() {
				$familysite.removeClass("active");
			}).on("click", ">a", function(event) {
				event.preventDefault();
			}).on("focus", "a", function() {
				$familysite.addClass("active");
			}).on("blur", "a", function() {
				$familysite.removeClass("active");
			});
		});

	});


})(jQuery);