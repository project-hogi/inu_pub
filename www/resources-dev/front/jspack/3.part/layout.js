"use strict";

(function($) {

	$(document).on("appinit", function() {

		$(".lnb").eachReadyScope(function() {
			var $lnb = $(this);
			var firstOn = true;
			var $body = $("body");
			var overOnDelayTime = 400;
			var $overPanelContainer = $("#header .over-panel .container");

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
				}, overOnDelayTime));
			});

			if (firstOn && !$lnb.find(">ul>li.active").size()) {
				deepFirstOn($lnb);
			}

			$lnb.find("li.active").addClass("over-on");

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

				var maxHeight = 0;
				var $currentPoint = $lnb.find(">ul>li.over-on>ul");

				while (true) {
					$currentPoint = $currentPoint.find(">li.over-on>ul");

					if (!$currentPoint.size())
						break;

					var height = $currentPoint.height();

					console.log(height);
					if (maxHeight < height)
						maxHeight = height;
				}
				console.log("sssssssss");

				$overPanelContainer.height(maxHeight);

				initLnbShowClass(depth);
			}

			function childrenOn($li) {
				if (!$li || !$li.size()) {
					depthCheck();

					return;
				}

				var $childrenLi = $li.find(">ul>li");

				if (!$childrenLi.size()) {
					depthCheck();

					return;
				}

				if (!$childrenLi.filter(".over-on").size()) {
					var $firstChildLi = $childrenLi.first().addClass("over-on");
				}

				childrenOn($firstChildLi);
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

	});

})(jQuery);