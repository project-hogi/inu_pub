"use strict";

(function($) {
    $(document).on("appinit", function() {
        $('.calendar').each(function(){
            var $calendar = $(this);
            var $tableCalendarDetail = $('.table-calendar-detail', $calendar);
            $tableCalendarDetail.each(function(){
                var $ul = $('ul',$tableCalendarDetail);
                var $li = $('li',$ul);
                var $pres = $('.pre', $li);
                $('.pre', $li.eq(0)).show();
                $li.eq(0).addClass('active');

                $('>a', $li).on('click',function(e){
                    e.preventDefault();
                    var $a = $(this);
                    var $parentLi = $a.parent('li');
                    if($parentLi.hasClass('active')){
                        $pres.stop().slideUp(300);
                        $li.removeClass('active');
                    }else{
                        $pres.stop().slideUp(300);
                        $a.siblings('.pre').stop().slideDown(300);
                        $li.removeClass('active');
                        $a.parent('li').addClass('active');
                    }
                });

            });



        });


    });
})(jQuery);