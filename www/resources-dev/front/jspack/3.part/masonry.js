$(function(){
    $(document).on("appinit", function() {
        $('.board-job-list > ul').masonry({
            columnWidth: 0,
            itemSelector: '.grid-item'
        });
    });
});

