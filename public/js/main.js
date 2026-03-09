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

// AOS Init
$(document).ready(function() {
	AOS.init({
		duration: 1000,
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

// For Calculator

document.querySelectorAll(".tab").forEach(tab => {

    tab.addEventListener("click", function(){

        // remove active class from all tabs
        document.querySelectorAll(".tab").forEach(btn=>{
            btn.classList.remove("active");
        });

        this.classList.add("active");

        // hide all forms
        document.querySelectorAll(".calculator-form-container form").forEach(form=>{
            form.style.display = "none";
        });

        // show selected form
        let tabName = this.getAttribute("data-tab");
        document.getElementById(tabName).style.display = "block";

    });

});


// STEP 1 → STEP 2
document.getElementById("next1").addEventListener("click", function(){

    let name = document.querySelector('[name="name"]').value.trim();
    let phone = document.querySelector('[name="phone"]').value.trim();
    let pincode = document.querySelector('[name="pincode"]').value.trim();
    let bill = document.getElementById("monthly_bill").value;
    let agree = document.querySelector('[name="agree"]').checked;

    if(name === "" || phone === "" || pincode === "" || bill === ""){
        alert("Please fill all details");
        return;
    }

    if(!agree){
        alert("Please accept terms & privacy policy");
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

document.querySelectorAll(".designation-btn").forEach(btn => {

btn.addEventListener("click", function(){

document.querySelectorAll(".designation-btn").forEach(b => b.classList.remove("active"));

this.classList.add("active");

document.querySelector('input[name="designation"]').value = this.dataset.value;

});

});