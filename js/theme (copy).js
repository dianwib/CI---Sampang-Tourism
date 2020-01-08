;(function($) {
    "use strict";



function ganti_warna_header(){
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".header_aera").addClass("active_scroll_header");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header_aera").removeClass("active_scroll_header");
        }
    });
};

function berita(){
 
       if ( $('.news-slider11').length ){
            $('.news-slider11').owlCarousel({
                loop:true,
                items:4,
                margin:110,
                autoplay:true,
                response:true,
                responsive:{
                    300:{
                        items:1, 
                        margin:0,
                    },
                    500:{
                        items:2, 
                    },
                    700:{
                        items:3, 
                    },
                    800:{
                        items:4,
                        margin:40,
                    },
                     
                }
            });
        };
    };

function createSlick(){  

    $(".slider").not('.slick-initialized').slick({
        centerMode: true,
        autoplay: true,
        dots: true,
    
        slidesToShow: 1,
        responsive: [{ 
            breakpoint: 768,
            settings: {
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1
            } 
        }]
    }); 

};
    //* mainNavbar
    function mainNavbar(){
        if ( $('#main_navbar').length ){ 
             $('#main_navbar').affix({
                offset: {
                    top: 10,
                    bottom: function () {
                        return (this.bottom = $('.footer').outerHeight(true))
                    }
                }
            }); 
        };
    };
    
	 //* nav_searchFrom
    function searchFrom(){
        if ( $('.nav_searchFrom').length ){  
             $('.nav_searchFrom').on('click',function(){
                $('.searchForm').toggleClass('show');
                return false
            });
            $('.form_hide').on('click',function(){
                $('.searchForm').removeClass('show')
            });
        };
    };
    
    //*  Main slider js 
    function home_main_slider(){
        if ( $('.slider_inner').length ){
            $('.slider_inner').camera({
                loader: true,
                navigation: true,
                autoPlay:false,
                time: 4000,
                playPause: false,
                pagination: false,
                thumbnails: false,
                overlayer: true,
                hover: false,  
                minHeight: '500px',
            }); 
        }
    }
    
    //* Isotope Js
    function portfolio_isotope(){
        if ( $('.portfolio_item, .portfolio_2 .portfolio_filter ul li').length ){
            // Activate isotope in container
            $(".portfolio_item").imagesLoaded( function() {
                $(".portfolio_item").isotope({
                    itemSelector: ".single_facilities",
                    layoutMode: 'masonry',
                    percentPosition:true,
                    masonry: {
                        columnWidth: ".grid-sizer, .grid-sizer-2"  
                    }            
                }); 
            }); 
            
            // Activate isotope in container
            $(".portfolio_2").imagesLoaded( function() {
                $(".portfolio_2").isotope({
                    itemSelector: ".single_facilities",
                    layoutMode: 'fitRows',
                }); 
            });
            // Add isotope click function
            $(".portfolio_filter ul li").on('click',function(){
                $(".portfolio_filter ul li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $(".portfolio_item, .portfolio_2").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });
        }
    };
    
    //* Stellar 
    $(function(){
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 40
        });
    });
    
     //* counterUp JS
    function counterUp(){
        if ( $('.counter').length ){ 
            $('.counter').counterUp({
                delay: 10,
                time: 900,
            });
        } 
    }; 
    
    //* Testimonial Carosel
    function testimonialsCarosel(){
        if ( $('.testimonial_carosel').length ){
            $('.testimonial_carosel').owlCarousel({
                loop:true,
                items:1,
                autoplay:false,
            });
        };
    };
    //* Testimonial Carosel
    function partnersCarosel(){
        if ( $('.partners').length ){
            $('.partners').owlCarousel({
                loop:true,
                items:5,
                margin:110,
                autoplay:true,
                response:true,
                responsive:{
                    300:{
                        items:1, 
                        margin:0,
                    },
                    500:{
                        items:3, 
                    },
                    700:{
                        items:3, 
                    },
                    800:{
                        items:4,
                        margin:40,
                    },
                    1000:{
                        items:5,
                    },  
                }
            });
        };
    };
    
    //* waypoint JS
    function ourSkrill(){
         if ( $('.our_skill_inner').length ){
             $(".our_skill_inner").each(function() {
                $(this).waypoint(function() {
                    var progressBar = $(".progress-bar");
                    progressBar.each(function(indx){
                        $(this).css("width", $(this).attr("aria-valuenow") + "%")
                    })
                }, 
                {
                    triggerOnce: true,
                    offset: 'bottom-in-view'

                });
            });
         }
    };
    
     //* counterUp 2 JS
    function counterUp2(){
        if ( $('.counter2').length ){ 
            $('.counter2').counterUp({
                delay: 10,
                time: 200,
            });
        } 
    }; 
    
    //* Hide Loading Box (Preloader)
     function preloader(){
        if ( $('.preloader').length ){ 
             $(window).load(function() {
                $('.preloader').delay(500).fadeOut('slow');
                $('body').delay(500).css({'overflow':'visible'});
            });
        } 
    }; 
    /*Function Calls*/ 
    searchFrom ();
    new WOW().init();
	home_main_slider();
    testimonialsCarosel ();
    portfolio_isotope ();
    counterUp ();  
    partnersCarosel ();

    ourSkrill ();
    
    ganti_warna_header();
    createSlick();
    counterUp2 ();
    mainNavbar ();
    berita();
 preloader ();


    
})(jQuery);

var main = function() {
    

  $('.dot').click(function(){
    var newSlideNo = $(this).data('slide-control');
    var currentSlideNo = $('.active-dot').data('slide-control');

//console.log(newSlideNo,currentSlideNo);
    
$('.slide[data-slide-no="'+ currentSlideNo +'"]').fadeOut(600).removeClass('active-slide');
    
$('.slide[data-slide-no="'+ newSlideNo +'"]').fadeIn(600).addClass('active-slide');
    $('.active-dot').removeClass('active-dot');
    $(this).addClass('active-dot');
    
  });
};

$('.arrow-next').click(function() {
    var currentSlide = $('.active-slide');
    var nextSlide = currentSlide.next();

    var currentDot = $('.active-dot');
    var nextDot = currentDot.next();
    //console.log(nextSlide.length);
    console.log(nextSlide.hasClass('slide'));
    if(nextSlide.length === 0 || nextSlide.hasClass('slide') === false) {
      nextSlide = $('.slide').first();
      nextDot = $('.dot').first();
    }
    
    currentSlide.fadeOut(600).removeClass('active-slide');
    nextSlide.fadeIn(600).addClass('active-slide');

    currentDot.removeClass('active-dot');
    nextDot.addClass('active-dot');
  });


  $('.arrow-prev').click(function() {
    var currentSlide = $('.active-slide');
    var prevSlide = currentSlide.prev();

    var currentDot = $('.active-dot');
    var prevDot = currentDot.prev();

    if(prevSlide.length === 0) {
      prevSlide = $('.slide').last();
      prevDot = $('.dot').last();
    }
    
    currentSlide.fadeOut(600).removeClass('active-slide');
    prevSlide.fadeIn(600).addClass('active-slide');

    currentDot.removeClass('active-dot');
    prevDot.addClass('active-dot');
  });
$(document).ready(main);

















// IMAGE SLIDES & CIRCLES ARRAYS, & COUNTER
var imageSlides = document.getElementsByClassName('imageSlides');
var circles = document.getElementsByClassName('circle');
var leftArrow = document.getElementById('leftArrow');
var rightArrow = document.getElementById('rightArrow');
var counter = 0;

// HIDE ALL IMAGES FUNCTION
function hideImages() {
  for (var i = 0; i < imageSlides.length; i++) {
    imageSlides[i].classList.remove('visible');
  }
}

// REMOVE ALL DOTS FUNCTION
function removeDots() {
  for (var i = 0; i < imageSlides.length; i++) {
    circles[i].classList.remove('dot');
  }
}

// SINGLE IMAGE LOOP/CIRCLES FUNCTION
function imageLoop() {
  var currentImage = imageSlides[counter];
  var currentDot = circles[counter];
  currentImage.classList.add('visible');
  removeDots();
  currentDot.classList.add('dot');
  counter++;
}

// LEFT & RIGHT ARROW FUNCTION & CLICK EVENT LISTENERS
function arrowClick(e) {
  var target = e.target;
  if (target == leftArrow) {
    clearInterval(imageSlideshowInterval);
    hideImages();
    removeDots();
    if (counter == 1) {
      counter = (imageSlides.length - 1);
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 10000);
    } else {
      counter--;
      counter--;
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 10000);
    }
  } 
  else if (target == rightArrow) {
    clearInterval(imageSlideshowInterval);
    hideImages();
    removeDots();
    if (counter == imageSlides.length) {
      counter = 0;
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 10000);
    } else {
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 10000);
    }
  }
}

leftArrow.addEventListener('click', arrowClick);
rightArrow.addEventListener('click', arrowClick);


// IMAGE SLIDE FUNCTION
function slideshow() {
  if (counter < imageSlides.length) {
    imageLoop();
  } else {
    counter = 0;
    hideImages();
    imageLoop();
  }
}

// SHOW FIRST IMAGE, & THEN SET & CALL SLIDE INTERVAL
setTimeout(slideshow, 1000);
var imageSlideshowInterval = setInterval(slideshow, 10000);



    