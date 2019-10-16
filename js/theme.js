;(function($) {
    "use strict";
	
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
    counterUp2 ();
    mainNavbar ();
    preloader ();
    
})(jQuery);
function t(){
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
}

var main = function() {
    setInterval(function() {
            t();
        },3000);
    

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