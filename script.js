// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
//
//                   PLEASE  NOTE 

$(document).ready(function(){

  // ++++++++++++++++++++
  // Slider (On Home page)
  // ++++++++++++++++++++

  //Home page product images Slider
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        autoplay: 2400,
        loop: true,
        effect: 'fade'
    });

  var swiper = new Swiper('.swiper-container-2', {
        slidesPerView: 7,
        spaceBetween: 50,
        nextButton: '.swiper-button-next-2',
        prevButton: '.swiper-button-prev-2',
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });

  $('.show-search').click(function(){
    $('.toggle-form').slideToggle();
    $('.toggle-form input').focus();
    $('.hide-body').toggleClass('show');
  });

  $('.hide-body').click(function(){
    $(this).removeClass('show');
    $('.toggle-form').slideUp();
  });

  $(window).bind("load", function(){
    $('.hide-body').removeClass('show-loader');
  });

// ++++++++++++++++++++
// Header fixed, reduce size
// ++++++++++++++++++++
$(window).scroll(function(){
  var scroll = $(window).scrollTop();

  if (scroll >= 200){
      $('body').addClass('on-scrolled');
  } else {
    $('body').removeClass('on-scrolled');
  }
});

// ++++++++++++++++++++
// Accordian
// ++++++++++++++++++++

$('h2.button').click(function(){
  $('+ .accordian-content', this).slideToggle();
  $(this).toggleClass('show');
});

// ++++++++++++++++++++
// Scroll to top
// ++++++++++++++++++++
  $("#scroll-top").click(function(){
    $('html, body').animate({
            scrollTop: $("body").offset().top - 100
        }, 1000);
  });
  // ++++++++++++++++++++
  // Menu Button
  // ++++++++++++++++++++
  $('.menu-button').click(function(){
    $(this).toggleClass('show');
    $('.responsive-menu').toggleClass('show');
    $('.responsive-menu li').toggleClass('show');
    $('.hide-body').toggleClass('show');
  });
  $('.hide-body').click(function(){
    $('.menu-button').removeClass('show');
    $('.responsive-menu').removeClass('show');
    $('.responsive-menu li').removeClass('show');
  });

});//end of document ready

function schoolValidation(){
  $('.school-login-form-wrapper').slideUp();
  $('.school-login-form-wrapper').remove();
}

