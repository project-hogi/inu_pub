"use strict";

(function($) {
    $(document).on("appinit", function() {
        $('.calendar').each(function(){
            var $calendar = $(this);
            var $calendarStyle = $('#calendar-style', $calendar);
            var $styleType = $('>.style-type', $calendar);
            var $calendarMenu = $('>.calendar-menu', $calendar);
            var $calendarMenuLi = $('li', $calendarMenu);
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
            $('.calendar-menu', $calendar).each(function(){
                var $calendarMenu = $(this);
                var $calendarUl = $('>ul', $calendarMenu);
                var $calendarLi = $('>li', $calendarUl);


                $calendarLi.on('click', 'a', function(e){
                    e.preventDefault();
                    var $calendarA = $(this);
                    var $calendarAhref = $calendarA.attr('href');
                    $calendarLi.removeClass('active');
                    $calendarA.parent().addClass('active');

                    $styleType.removeClass('active');
                    $($calendarAhref).addClass('active');
                });
            });

            $(window).resize(function(){
                if($(window).width() < 1024){
                    $calendar.addClass('mobile');
                    $styleType.removeClass('active')
                }else{
                    $calendar.removeClass('mobile');
                    $calendarStyle.addClass('active');
                    $calendarMenuLi.removeClass('active');
                    $calendarMenuLi.eq(0).addClass('active');
                }
            }).resize();

        });
    });
})(jQuery);