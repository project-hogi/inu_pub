"use strict";

(function($) {

	$(document).on("appinit", function() {

		$(".policy-form").eachReadyScope(function() {
			$(this).on("submit", function() {
				var $checkboxies = $(this).find(":checkbox");
				var checked = true;

				$checkboxies.each(function() {
					if (checked && !$(this).prop("checked"))
						checked = false;
				});

				if (!checked){
					alert("약관에 동의하셔야 회원가입을 할 수 있습니다.");
					
					return false;
				}
			});
		});
	});

})(jQuery);
