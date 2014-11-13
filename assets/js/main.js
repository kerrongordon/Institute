(function($) {
   
	$('.menu-toggle').on('click', function(){
        $('.menu-main-menu-container').toggleClass('showmenu fadeInDown animated');
    });

      $(window).scroll(function() {

    var windowScroll = $(this).scrollTop();

    $('').css({
      'top': '-' + windowScroll + 'px'
    });

  });

})(jQuery);



