var lastScrollTop = 100;
$(window).scroll(function (event) {
    var st = $(this).scrollTop();
    var stx = $(this).scroll;
    if (st > lastScrollTop) {
        $('header').addClass('default-header');
        $('header').removeClass('fixedheader');
    } else {
        $('header').addClass('fixedheader');
        $('header').removeClass('default-header');
        lastScrollTop = 100;
    }
    if (st > lastScrollTop) {
        lastScrollTop = st;
    }
});



$(document).ready(function () { 
    var $videoSrc;
    $('.video-btn').click(function () {
        $videoSrc = $(this).data("src");
    }); 
     $('#myVideo').on('shown.bs.modal', function (e) { 
          $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    }); 

     $('#myVideo').on('hide.bs.modal', function (e) {
         $("#video").attr('src', $videoSrc);
    }); 
});