/*
* ----------------------------------------------------------------------------------------
    Template Name: Ration | Diet & Nutrition Html Template
    Template URI: https://spellbit.com/
    Description:
    Author: mahedi amin
    Author URI: https://mahediamin.com
    Version: 1.0.0

* ----------------------------------------------------------------------------------------
*/

(function ($) {
    'use strict';

    jQuery(document).on("ready", function () {




        /*
     ===================================================
         Owl Carosel Activation
     ===================================================
     */

        // text slider
        $('.text-slide-active').owlCarousel({
            loop: true,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: true,
            autoplayTimeout: 6000,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });

        // story text slide
        $('.active-story').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 6000,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });

        // exparts active
        $('.exparts-active').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 6000,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });

        // gallery poost active
        $('.pst-gallery-active').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });


        //text slider animation
        $(".text-slide-active").on("translate.owl.carousel", function () {
            $(".slide-content h1").removeClass("animated bounceIn").css("opacity", "0");
            $(".slide-content p").removeClass("animated flipInX").css("opacity", "0");
            $(".slide-content a.th-gradient").removeClass("animated slideInLeft").css("opacity", "0");
            $(".slide-content a.th-gradient2").removeClass("animated slideInRight").css("opacity", "0");
        });

        $(".text-slide-active").on("translated.owl.carousel", function () {
            $(".slide-content h1").addClass("animated bounceIn").css("opacity", "1");
            $(".slide-content p").addClass("animated flipInX").css("opacity", "1");
            $(".slide-content a.th-gradient").addClass("animated slideInLeft").css("opacity", "1");
            $(".slide-content a.th-gradient2").addClass("animated slideInRight").css("opacity", "1");
        });


        // healthy_recipe active
        $('.healty_recipe_active').owlCarousel({
            loop: true,
            margin: 15,
            mouseDrag: true,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 2
                },
                980: {
                    items: 2
                },
                1199: {
                    items: 3
                }
            }
        });


        // healthy_recipe active
        $('.related-services-active').owlCarousel({
            loop: true,
            margin: 15,
            mouseDrag: true,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 2
                },
                768: {
                    items: 2
                },
                980: {
                    items: 2
                },
                1199: {
                    items: 3
                }
            }
        });

        // healthy_recipe active
        $('.brands-active').owlCarousel({
            loop: true,
            margin: 15,
            mouseDrag: true,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 2
                },
                768: {
                    items: 2
                },
                980: {
                    items: 3
                },
                1199: {
                    items: 4
                }
            }
        });


        /*
         ===================================================
             Isotop Activation
         ===================================================
         */



        $('.grid').imagesLoaded(function () {
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: 1,
                }
            });
        });

        $('.grid2').imagesLoaded(function () {
            var $grid = $('.grid2').isotope({
                itemSelector: '.grid-item2',
                percentPosition: true,
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: 0,
                }
            });
        });



        //main filter activation
        $('.filter-list').on('click', 'li',
            function () {
                $('.filter-list li').removeClass(
                    'active');
                $(this).addClass('active');
                var filterValue = $(this).attr(
                    'data-filter');
                $('.grid2').isotope({
                    filter: filterValue
                });
                $(window).trigger('resize');
            });







        /*
     ===================================================
         Counter App Active
     ===================================================
     */

        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });


        /*
           ===================================================
               Sticcky Menu Activation
           ===================================================
           */

        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 200) {
                $(".navbar").removeClass("sticky fadeInDown animated");
            } else {
                $(".navbar").addClass("sticky fadeInDown animated");
            }
        });



        /*
         ===================================================
             Silck Tab slider active
         ===================================================
         */



        $('.review_text-active').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.client-minithumb-active'
        });
        $('.client-minithumb-active').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.review_text-active',
            dots: false,
            arrows: false,
            focusOnSelect: true,
            vertical: true,
            verticalSwiping: true,
            responsive: [
                {
                    breakpoint: 767.98,
                    settings: {
                        vertical: false,
                        verticalSwiping: false
                    }
                }
            ]
        });


        /*
     ===================================================
         Price Table Hover
     ===================================================
     */

        $(".rationSinglePrice").on("mouseover", function () {
            $(".rationSinglePrice").removeClass("active");
            $(this).addClass("active");

        })


        /*
         ===================================================
             Progress activation
         ===================================================
         */


        $(".progress").each(function () {
            var e = $(this).attr("data-percent"),
                t = $(this).prev(".progress-title"),
                a = $(this).children(".progress-title");
            t.length > 0 ? t.css("width", e) : a.length > 0 && a.css("width", e), $(this).appear(function () {
                $(this).find(".progress-bar").animate({
                    width: e
                }, 500)
            })
        });


        /*
      ===================================================
          MAGNIFIPOPUP ACTIVATION
      ===================================================
      */


        $('.img-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });



        $('.playVideo ').magnificPopup({
            type: 'iframe',
            removalDelay: 300,
            mainClass: 'mfp-fade'
        });

        /*
         ===================================================
             Scoll Up Activation
         ===================================================
         */


        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            animation: 'slide'

        });

        /*
         ===================================================
             Menu Active
         ===================================================
         */

        $(".menu-click").on("click", function () {

            $(".main-menu > ul").toggleClass('show');
            return false;
        });



        if ($(window).width() < 1199.98) {
            // for mobile menu

            $(".main-menu ul li.menu-item-has-children").on("click", function () {

                $(this).children("ul.sub-menu").slideToggle();
                $(this).toggleClass('change-icon');
                return false;

            });


        };



        $(".main-menu ul li, .main-menu ul ul li").on("click", function (p) {
            p.stopPropagation();
        });





        /*
        ===================================================
            Animation Active
        ===================================================
        */
        $(function () {

            function ckScrollInit(items, trigger) {
                items.each(function () {
                    var ckElement = $(this),
                        AnimationClass = ckElement.attr('data-animation'),
                        AnimationDelay = ckElement.attr('data-animation-delay');

                    ckElement.css({
                        '-webkit-animation-delay': AnimationDelay,
                        '-moz-animation-delay': AnimationDelay,
                        'animation-delay': AnimationDelay
                    });

                    var ckTrigger = (trigger) ? trigger : ckElement;

                    ckTrigger.waypoint(function () {
                        ckElement.addClass("animated").css("visibility", "visible");
                        ckElement.addClass('animated').addClass(AnimationClass);
                    }, {
                        triggerOnce: true,
                        offset: '90%'
                    });
                });
            }

            ckScrollInit($('.animation'));
            ckScrollInit($('.staggered-animation'), $('.staggered-animation-wrap'));

        });







    });

})(jQuery);
