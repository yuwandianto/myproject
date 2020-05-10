// (function($) {
// 	"use strict";
	
//     //Left nav scroll
//     $(".nano").nanoScroller();

//     // Left menu collapse
//     $('.left-nav-toggle a').on('click', function (event) {
//         event.preventDefault();
//         $("body").toggleClass("nav-toggle");
//     });
	
// 	// Left menu collapse
//     $('.left-nav-collapsed a').on('click', function (event) {
//         event.preventDefault();
//         $("body").toggleClass("nav-collapsed");
//     });
	
// 	// Left menu collapse
//     $('.right-sidebar-toggle').on('click', function (event) {
//         event.preventDefault();
//         $("#right-sidebar-toggle").toggleClass("right-sidebar-toggle");
//     });
	
// 	//metis menu
//    $('#menu').metisMenu();
	
// 	//ace menuu
//     $("#respMenu").aceResponsiveMenu({
//         resizeWidth: '768', 
//         animationSpeed: 'fast',
//         accoridonExpAll: false
//    });
   
//     //slim scroll
//     $('.scrollDiv').slimScroll({
//         color: '#eee',
//         size: '5px',
//         height: '293px',
//         alwaysVisible: false
//     });
	
// 	//tooltip popover
//     $('[data-toggle="tooltip"]').tooltip();
//     $('[data-toggle="popover"]').popover();
  
// })(jQuery);



! function($) {
    "use strict";

    var KIPK = function() {};

    KIPK.prototype.initStickyMenu = function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
        
            if (scroll >= 50) {
                $(".sticky").addClass("nav-sticky");
            } else {
                $(".sticky").removeClass("nav-sticky");
            }
        });
    },

    KIPK.prototype.initSmoothLink = function() {
        $('.navbar-nav a').on('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 50
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    },

    KIPK.prototype.initScrollspy = function() {
        $("#navbarCollapse").scrollspy({
            offset: 50
        });
    },

    KIPK.prototype.initContact = function() {
        
        $('#contact-form').submit(function() {

            var action = $(this).attr('action');
        
            $("#message").slideUp(750, function() {
                $('#message').hide();
        
                $('#submit')
                    .before('')
                    .attr('disabled', 'disabled');
        
                $.post(action, {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        comments: $('#comments').val(),
                    },
                    function(data) {
                        document.getElementById('message').innerHTML = data;
                        $('#message').slideDown('slow');
                        $('#cform img.contact-loader').fadeOut('slow', function() {
                            $(this).remove()
                        });
                        $('#submit').removeAttr('disabled');
                        if (data.match('success') != null) $('#cform').slideUp('slow');
                    }
                );
        
            });
        
            return false;
        
        });
    },

    KIPK.prototype.initBacktoTop = function() {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        }); 
        $('.back-to-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });
    },


    KIPK.prototype.init = function() {
        this.initStickyMenu();
        this.initSmoothLink();
        this.initScrollspy();
        this.initContact();
        this.initBacktoTop();
    },
    //init
    $.KIPK = new KIPK, $.KIPK.Constructor = KIPK
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.KIPK.init();

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker
            .register('/kipk-sw.js')
            .then(function() { console.log('KIPK-Service Worker: Service Worker Registered'); });
    }
}(window.jQuery);