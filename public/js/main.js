'use strict';

$(document).ready(function () {
    function handleDropdown() {
        if (window.innerWidth >= 992) {
            // Desktop: hover
            $('.dropdown').hover(
                function () {
                    $(this).addClass('show');
                    $(this).find('.dropdown-toggle').attr('aria-expanded', 'true');
                    $(this).find('.dropdown-menu').addClass('show');
                },
                function () {
                    $(this).removeClass('show');
                    $(this).find('.dropdown-toggle').attr('aria-expanded', 'false');
                    $(this).find('.dropdown-menu').removeClass('show');
                }
            );
        } else {
            // Mobile: reset any hover and allow toggle
            $('.dropdown').off('mouseenter mouseleave');
            $('.dropdown-toggle').off('click').on('click', function (e) {
                var $menu = $(this).next('.dropdown-menu');
                var isVisible = $menu.hasClass('show');

                $('.dropdown-menu').removeClass('show');
                $('.dropdown').removeClass('show');
                $('.dropdown-toggle').attr('aria-expanded', 'false');

                if (!isVisible) {
                    $(this).closest('.dropdown').addClass('show');
                    $(this).attr('aria-expanded', 'true');
                    $menu.addClass('show');
                }

                return false; // Prevent default
            });

            // Close when clicking outside
            $(document).on('click touchstart', function (e) {
                if (!$(e.target).closest('.dropdown').length) {
                    $('.dropdown-menu').removeClass('show');
                    $('.dropdown').removeClass('show');
                }
            });
        }
    }

    handleDropdown();

    // Re-run on window resize
    $(window).on('resize', function () {
        handleDropdown();
    });
});




$('.home-industry').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

$('.testimonials').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})


document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.parentElement;
        const isOpen = faqItem.classList.contains('active');

        // Close all
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
            item.querySelector('.faq-answer').style.display = 'none';
        });

        // Open if it wasn't already open
        if (!isOpen) {
            faqItem.classList.add('active');
            faqItem.querySelector('.faq-answer').style.display = 'block';
        }
    });
});

// AOS Init
$(document).ready(function() {
	AOS.init({
		duration: 1000,
	  });
  });

// Initialize Swiper
// Cube effect
var swiper = new Swiper(".mySwiper", {
	effect: "cube",
	grabCursor: true,
	pauseOnMouseEnter: true,
    speed: 2000,
	loop: true,
	autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
	cubeEffect: {
		shadow: false,
		slideShadows: true,
		shadowOffset: 20,
		shadowScale: 0.94,
	},
	pagination: {
		el: ".swiper-pagination",
	},
});
// Initialize Swiper
// Flip effect
var swiper = new Swiper(".flipSwiper", {
	effect: "flip",
	grabCursor: true,
	pauseOnMouseEnter: true,
    speed: 2000,
	loop: true,
	autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
	pagination: {
		el: ".swiper-pagination",
	},
	navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


document.addEventListener('DOMContentLoaded', function () {
    // Counter values
    const counters = {
        installedCapacity: 500,
        windTurbines: 650,
        solarPanels: 100,
        projectsCompleted: 150
    };

    // Function to animate the counter
    function animateCounter(id, targetValue) {
        const counter = document.getElementById(id);
        let currentValue = 0;
        const increment = targetValue / 100; // Increment value for smooth animation
        const speed = 50; // Speed of increment

        const interval = setInterval(function () {
            currentValue += increment;
            if (currentValue >= targetValue) {
                currentValue = targetValue;
                clearInterval(interval); // Stop the animation when the target is reached
            }
            counter.innerText = Math.round(currentValue);
        }, speed);
    }

    // Start the counter animation
    animateCounter('installedCapacity', counters.installedCapacity);
    animateCounter('windTurbines', counters.windTurbines);
    animateCounter('solarPanels', counters.solarPanels);
    animateCounter('projectsCompleted', counters.projectsCompleted);
});

 /*Gallery js main */
 
 
$(document).ready(function() {
    // Initialize Fancybox for images
    $(".fancybox").fancybox({
        openEffect: "none",  // No animation for opening
        closeEffect: "none",  // No animation for closing
    });

    // Hover effect for zooming the image
    $(".zoom").hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});


//////// Sticky Navbar
$(window).scroll(function() {
	if ($(document).scrollTop() > 200	) {
		$(".navbar").addClass("customNav");
	} else {
		$(".navbar").removeClass("customNav");
	}
});

// Add class active
$(document).ready(function() {
	var url = window.location.href;
	$('.myNav-nav a[href="url"]').parent().addClass('active');
	$('.myNav-nav a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
});



// Toggle menu function
$(document).ready(function() {
    $('.menu-toggle').click(function() {
        $('.nav-container').toggleClass('mob-container');
    });
});