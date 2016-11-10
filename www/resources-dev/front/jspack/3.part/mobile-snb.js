"use strict";

(function($) {
    $(document).on("appinit", function() {

        $('.snb').each(function(){
            var $snb = $(this);
            $('.eq-3', $snb).each(function(){
                var $eq3 = $(this);
                var $eq3ul = $('>ul', $eq3);
                var $eq3li = $('>li', $eq3ul);
                var $containerWidth = 0;
                $eq3.addClass('swiper-container');
                $eq3ul.addClass('swiper-wrapper');
                $eq3li.addClass('slide');


                $eq3ul.find(">*").each(function() {
                    $containerWidth += $(this).outerWidth(true);
                });



                $eq3ul.bxSlider({
                    slideWidth: auto,
                    minSlides: 1,
                    maxSlides: 1,
                    slideMargin: 10
                });


            });

        });


    });
})(jQuery);