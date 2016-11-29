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
        autoplay: 1500,
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
    $('.search-form').slideToggle();
    $('.search-form input').focus();
    $('.hide-body').toggleClass('show');
  });

  $('.hide-body').click(function(){
    $(this).removeClass('show');
    $('.search-form').slideUp();
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

});//end of document ready

