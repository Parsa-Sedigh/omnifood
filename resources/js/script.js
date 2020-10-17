'use strict';

$(document).ready(() => {

    /* 
    $('h1').click(() => {
    
         this keyword here, is pointing towards 'h1' element. 
         Remember: When you use arrow functions, the value of this keyword doesn't change.So here if you want to point 
        towards 'h1' you must use a normal function for callback of .click(), if you want when use this keyword in the callback
        it points towards 'h1'. But in this case we used arrow function, so again we use 'h1' instead of this keyword inside
        of callback of .click()
         $('h1').css('background-color', '#000');
     });
    */

    /* We use direction parameter to detect if the user is scrolling down the web page or is scrolling up and we will make
    * decision based on direction parameter.
    * When we use the offset extension, we specify a px or % or ... to say we want the code that is in the first arg of
    * .waypoint() function executes 60px earlier we get to or pass from '.js--section-features' . (Remember: In this case the remove
    * and add a class is happening in one place not 2 places with 2 different offsets.)   */
    /* Important: By default, the animation is triggered when the element you are animating reaches the top of the viewport.
    * 'offset: 30%' triggers the animation when the element is 30% from the top of the window. */

    /* For the sticky navigation */
    $('.js--section-features').waypoint((direction) => {

        if (direction === 'down') {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '60px'
    });

    $('.js--scroll-to-plans').click(() => {
        /* In order to make an animated scroll, we need to select html and body together(next to each other) */
        $('html, body').animate({

            /* We scroll to the top of '.js--section-plans' with duration of one second */
            scrollTop: $('.js--section-plans').offset().top
        }, 1000);
    });

    $('.js--scroll-to-start').click(() => {
        $('html, body').animate({
            scrollTop: $('.js--section-features').offset().top
        }, 1000);
    });

    /* First select the the <a> element which it's href attr starts with # symbol(* is for start values) */
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
                &&
                location.hostname === this.hostname
            ) {
                // Figure out element to scroll to
                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        let $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                    });
                }
            }
        });

    /* Animation on scroll:
    * We won't use the direction parameter in these situations.Because in these cases, it doesn't matter you are scrolling from
    * which direction to the first selected element('.js--wp-1') and another reason is: This animation only happens once. */
    $('.js--wp-1').waypoint((direction) => {
        $('.js--wp-1').addClass('animated fadeInLeft');
    }, {
        offset: '100%'
    });

    $('.js--wp-2').waypoint((direction) => {
        $('.js--wp-2').addClass('animated fadeInRight');
    }, {
        offset: '100%'
    });

    $('.js--wp-3').waypoint((direction) => {

        /* We need to make the element invisible before triggering the animation.So otherwise it's impossible for that element
        * for fades in.Because it's already visible.So we can declare some classes in our style.css that are specially for animations.
        * For declaring these classes we can select our new classes for elements that are used in our js codes, in this case
        * this class is 'js--wp-1' which is used in our js code so we can declare some style for that element using this class in
        * style.css */
        /* Also we must define an offset to say when the animated class must be add to the first selected element(.js--wp-1).
        * Because if we don't do this, when we EXACTLY hit or arrive at the beginning of the selected element, we see the animation,
        * or in other words the animated class will add to the selected element.But we want see this animation earlier so we must use
        * offset.So for using offset we can pass another arg to .waypoint() method and this arg must be after the callback function for
        * .waypoint() (callback is the second arg).The second arg is an object which we can put offset there.
        * In offset, 50% would be half of the page. */
        $('.js--wp-3').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.js--wp-4').waypoint((direction) => {
        $('.js--wp-4').addClass('animated fadeInUp');
    }, {
        offset: '50%'
    });

    $('.js--wp-5').waypoint((direction) => {
        $('.js--wp-5').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.js--wp-6').waypoint((direction) => {
        $('.js--wp-6').addClass('animated bounceIn');
    }, {
        offset: '10%'
    });

    /* Mobile navigation: */
    $('.js--nav-icon').click(() => {

        /* We have to use this '.js--main-nav' class many times and we don't want to repeat selecting it with jQuery, so we assign
        * it to a variable.
        * Remember: .slideToggle() method opens and closes a box with some animation. */
        const nav = $('.js--main-nav');
        const icon = $('.js--nav-icon ion-icon');

        /* Toggle the menu */
        nav.slideToggle(250);

        /* Toggle the icon with changing the name attribute of <ion-icon> */
        if (icon.attr('name') === 'menu-outline') {
            icon.attr('name', 'close-outline');
        } else {
            icon.attr('name', 'menu-outline');
        }

    });

});