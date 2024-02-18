
$(document).ready(function () {
    
  $('.recommendSlide').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 1000,
    items: 1,
    autoplayHoverPause: true,
    autoHeight: true,
  })
    $(".menuSection .menu").hover(function () {
        if (window.matchMedia('(min-width: 992px)').matches) {
            $(".menu").removeClass("show");
            $(this).addClass("show");
        }
    })
    $(".search").click(function () {
        $(".searchArea").addClass("show");
    })
    $(".close").click(function () {
        $(".searchArea").removeClass("show");
    })
    $("body").click(function (event) {
        if (!$(event.target).closest('.menu').length && !$(event.target).closest('.submenu ').length) {
            $(".menu").removeClass('show');
        }
        if (!$(event.target).closest('.search').length && !$(event.target).closest('.searchArea ').length) {
            $(".searchArea").removeClass('show');
        }
    });


    // header menu fix
    var elementPosition = $('header .menuSection').offset();
    $(window).scroll(function () {
        if ($(window).scrollTop() > elementPosition.top) {
            $('header .menuSection').css('position', 'fixed').css('top', '0').css('width', '100%');
            $(".logoIcon").css('display','block')
        } else {
            $('header .menuSection').css('position', 'relative');
            $(".logoIcon").css('display','none')
        }
    });

    // first modal open on load
    $(window).on('load', function() {
        $('#firstAdModal').modal('show');
    });
});


