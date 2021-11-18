$(function(){
    var header = $("#header");
    var introH = $("#intro").innerHeight();
    var scrollOffst = $(window).scrollTop();
    checkScroll(scrollOffst);

    $(window).on("scroll",function(){
    scrollOffst = $(this).scrollTop();
        checkScroll(scrollOffst);
    });
    function checkScroll(scrollOffst){
        if(scrollOffst>=introH)
                header.addClass("fixed");
        else
             header.removeClass("fixed");
    }
    $("[data-scroll]").on("click", function(event){
        event.preventDefault();
        var blockId = $(this).data('scroll');
        var blockOffset = $(blockId).offset().top;
        $("#nav a").removeClass("active");
        $(this).addClass("active");
        $("html,body").animate({
            scrollTop: blockOffset
        });
    });

});


$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
      loop: true,
      dots: true,
      margin:10,
  });
});
