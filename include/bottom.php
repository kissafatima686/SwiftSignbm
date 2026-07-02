<!-- ================= CSS ================= -->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<!-- ================= CORE JS ================= -->

<!-- ✅ ONLY ONE JQUERY (IMPORTANT FOR YOUR TEMPLATE) -->
<script src="assets/js/jquery-1.12.4.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Owl Carousel (LOAD ONLY ONCE) -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Plugins -->
<script src="assets/js/equal-height.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/progress-bar.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script src="assets/js/bootsnav.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>


<!-- ================= SERVICE CAROUSEL ================= -->
<script>
$('.service-carousel2').owlCarousel({
    loop: true,
    margin: 25,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3500,

    navText: ["", ""],   /* no text arrows */

    responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 }
    }
});
</script>


<!-- ================= PORTFOLIO + BLOG ================= -->
<script>
$('.portfolio-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 700,
    navText: ["", ""],
    responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 }
    }
});

$('.blog-items').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpeed: 800,
    navText: ["", ""],
    responsive: {
        0: { items: 1 },
        768: { items: 2 },
        1000: { items: 3 }
    }
});
</script>


<!-- ================= TESTIMONIAL ================= -->
<script>
$('.testimonial-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
        0: { items: 1 },
        768: { items: 2 },
        1000: { items: 2 }
    }
});
</script>


<!-- ================= POPUP ================= -->
<script>
$('.popup-link').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});
</script>

</body>
</html>