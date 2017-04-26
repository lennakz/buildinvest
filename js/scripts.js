$(document).ready(function(){

  // Stick the navbar after scroll below header
  $(window).scroll(function() {
    var scrolledNumber = $(".front-page").css("height").replace(/[^-\d\.]/g, '');
      if ($(this).scrollTop() > scrolledNumber) {
        $(".navbar").addClass("navbar-fixed");
      } else {
        $(".navbar").removeClass("navbar-fixed");
      }
    });

  $('#front-page-button').click(function(){
		$('html, body').animate({scrollTop : $(window).height()}, 800);
		return false;
	});

  // After small scroll page scroll front-page part down to Navigation
  // $(function() {
  //   $.scrollify({
  //     section : ".content",
  //   });
  // });

  // Scroll to top
  $(window).scroll(function(){
		if ($(this).scrollTop() > 1000) {
			$('.scroll-to-top').fadeIn();
		} else {
			$('.scroll-to-top').fadeOut();
		}
	});

  $('.scroll-to-top').click(function(){
		$('html, body').animate({
        scrollTop : $('.page2').offset().top - 70
      }, 800);
		return false;
	});

  // Scroll animation for navbar clicks
  $('.nav a').click(function(){
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 70
      }, 800);
    return false;
  });
  $('.about-us-button a').click(function(){
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 800);
    return false;
  });

  // Gallery popup
  $('#project1-button').click(function(e) {
    e.preventDefault();
    $('#project1').bPopup();
  });
  $('#project2-button').click(function(e) {
    e.preventDefault();
    $('#project2').bPopup();
  });

});
