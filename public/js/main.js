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

// BILL BUTTON SELECT
document.querySelectorAll(".bill-btn").forEach(btn => {

    btn.addEventListener("click", function () {

        document.querySelectorAll(".bill-btn").forEach(b => b.classList.remove("active"));

        this.classList.add("active");

        document.getElementById("monthly_bill").value = this.dataset.value;

    });

});


// OPTION BUTTON SELECT
document.querySelectorAll(".option-btn").forEach(btn => {

    btn.addEventListener("click", function () {

        let name = this.dataset.name;
        let value = this.dataset.value;

        document.querySelectorAll('[data-name="'+name+'"]').forEach(b=>{
            b.classList.remove("active");
        });

        this.classList.add("active");

        let input = document.querySelector('input[name="'+name+'"]');

        if(input){
            input.value = value;
        }

    });

});


// STEP 1 → STEP 2
document.getElementById("next1").addEventListener("click", function(){

    let name = document.querySelector('[name="name"]').value.trim();
    let phone = document.querySelector('[name="phone"]').value.trim();
    let bill = document.getElementById("monthly_bill").value;

    if(name === "" || phone === "" || bill === ""){
        alert("Please fill all details");
        return;
    }

    document.getElementById("step0").classList.remove("active");
    document.getElementById("step1").classList.add("active");

});


// STEP 2 → STEP 3
document.getElementById("next2").addEventListener("click", function(){

    let roof = document.querySelector('[name="roof_owner"]').value;
    let constructed = document.querySelector('[name="constructed"]').value;
    let type = document.querySelector('[name="roof_type"]').value;

    if(roof === "" || constructed === "" || type === ""){
        alert("Please answer all questions");
        return;
    }

    document.getElementById("step1").classList.remove("active");
    document.getElementById("step2").classList.add("active");

});


// STEP 3 → STEP 4
document.getElementById("next3").addEventListener("click", function(){

    document.getElementById("step2").classList.remove("active");
    document.getElementById("step3").classList.add("active");

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


const tabs = document.querySelectorAll(".tab");
const forms = document.querySelectorAll(".form-section");

tabs.forEach(tab => {
    tab.addEventListener("click", () => {

        tabs.forEach(btn => btn.classList.remove("active"));
        forms.forEach(form => form.classList.remove("active"));

        tab.classList.add("active");

        const target = tab.getAttribute("data-tab");
        document.getElementById(target).classList.add("active");
    });
});


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