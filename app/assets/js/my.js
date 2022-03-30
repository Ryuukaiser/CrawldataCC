var transparent = true;

var fixedTop = false;

var navbar_initialized = false;

var scroll;

scroll = ( 2500 - $(window).width() ) / $(window).width();

var window_height;
var window_width;

var content_opacity = 0;
var content_transition = 0;
var no_touch_screen = false;

var burger_menu;

var scroll_distance = 500;

    $(window).on('scroll',function(){

gaia.checkScrollForTransparentNavbar();


if(window_width > 992){
    gaia.checkScrollForParallax();
}

if(content_opacity == 1 ){
    gaia.checkScrollForContentTransitions();
}

})

$('a[data-scroll="true"]').click(function(e){
var scroll_target = $(this).data('id');
var scroll_trigger = $(this).data('scroll');

if(scroll_trigger == true && scroll_target !== undefined){
    e.preventDefault();

    $('html, body').animate({
         scrollTop: $(scroll_target).offset().top - 50
    }, 1000);
}

});

gaia = {
    misc:{
        navbar_menu_visible: 0
    },
    checkScrollForTransparentNavbar: debounce(function() {
            if($(document).scrollTop() > scroll_distance ) {
                if(transparent) {
                    transparent = false;
                    $navbar.removeClass('navbar-transparent');
                }
            } else {
                if( !transparent ) {
                    transparent = true;
                    $navbar.addClass('navbar-transparent');
                }
            }
    }, 17),

    checkScrollForParallax: debounce(function() {
        	$('.parallax').each(function() {
        	    var $elem = $(this);

        	    if(isElementInViewport($elem)){
                  var parent_top = $elem.offset().top;
                  var window_bottom = $(window).scrollTop();
                  var $image = $elem.children('.image');

            	  oVal = ((window_bottom - parent_top) / 3);
                  $image.css('transform','translate3d(0px, ' + oVal + 'px, 0px)');
        	    }
            });

    }, 6),

    checkScrollForContentTransitions: debounce(function() {
         $('.content-with-opacity').each(function() {
             var $content = $(this);

             if(isElementInViewport($content)){
                  var window_top = $(window).scrollTop();
            	  opacityVal = 1 - (window_top / 230);

                  if(opacityVal < 0){
                      opacityVal = 0;
                      return;
                  } else {
                    $content.css('opacity',opacityVal);
                  }

        	    }
         });
    }, 6)
    }