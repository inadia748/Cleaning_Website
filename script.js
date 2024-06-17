// Toggle Navbar Menu on Mobile
$(document).ready(function() {
    $('.menu-toggle').click(function() {
        $('.nav-links').toggleClass('active');
    });
});

// Initialize Owl Carousel for Services and Testimonials
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});
