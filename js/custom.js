
$(function() {
  $('.slick-homi').slick({
    prevArrow: ".le-prev",
    nextArrow: ".le-next"
  });
  $('.slick-faq').slick({
    prevArrow: ".el-prev",
    nextArrow: ".el-next",
    adaptiveHeight: true
  });
  // $('.selectpicker').selectpicker({
  //   style: 'form-control',
  //   size: 4
  // });
  $('.slick-faq').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.numbers').fadeOut('300');
  });
  $('.slick-faq').on('afterChange', function(event, slick, currentSlide, nextSlide){
    $('.numbers').fadeIn('300');
  });
  if ($('table').hasClass('table')) {
    
  }else{
    $(this).addClass('table');
  }

  // options = $.extend({
  //     scrollwheel: false,
  //     navigationControl: false,
  //     mapTypeControl: false,
  //     scaleControl: false,
  //     draggable: false,
  //     mapTypeId: google.maps.MapTypeId.ROADMAP
  // }, options);
});
$(document).ready(function(){
	$('body').on('click', '.btn-login', function(e){
		$('#LoginModal').modal('show');
		e.preventDefault();
	});
  if ($(window).width() < 768) {
    $('body').on('click', '.navbar-custom .nav li', function(e){
      $('.navbar-collapse.navbar-center.navbar-main-collapse.collapse').toggleClass('in');
    });
  }
});
