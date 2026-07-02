<?php include 'include/header.php'; ?>
<?php include 'include/navbar-advisory.php'; ?>

<style>
html, body {
    scroll-behavior: smooth;
    scroll-padding-top: 90px;
    overflow-x: hidden !important;
}

section.flow-reveal,
div.flow-reveal {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.7s ease, transform 0.7s ease;
    will-change: opacity, transform;
}

section.flow-reveal.is-visible,
div.flow-reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
}

#page-preloader {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #ffffff 0%, #f4f6fb 55%, #eef2f8 100%);
    transition: opacity 0.5s ease, visibility 0.5s ease;
}

#page-preloader.is-hidden {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

.preloader-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 18px;
    padding: 28px 34px;
    border-radius: 22px;
    background: rgba(255, 255, 255, 0.88);
    box-shadow: 0 18px 55px rgba(15, 23, 42, 0.12);
    backdrop-filter: blur(10px);
}

.preloader-logo {
    width: 170px;
    max-width: 60vw;
    height: auto;
    display: block;
}

.preloader-spinner {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    border: 3px solid rgba(13, 110, 253, 0.14);
    border-top-color: #0d6efd;
    animation: preloader-spin 0.9s linear infinite;
}

.preloader-text {
    margin: 0;
    font-size: 14px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: #334155;
    font-weight: 600;
}

@keyframes preloader-spin {
    to {
        transform: rotate(360deg);
    }
}

/* Horizontal Slider Styling */
.banner-slider-wrapper {
    position: relative; 
    max-width: 380px; 
    margin: 0 auto;
    overflow: visible;
}
.banner-slider-viewport {
    width: 100%; 
    height: 600px; 
    overflow: hidden; 
    border-radius: 0; 
    position: relative;
}
.banner-slider-track {
    display: flex; 
    flex-direction: row; 
    width: 100%;
    height: 100%; 
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1); 
    will-change: transform;
}
.banner-slide {
    width: 100%;
    height: 100%; 
    flex-shrink: 0; 
    display: flex; 
    flex-direction: column;
}
.slide-image-container {
    height: 480px; 
    overflow: hidden; 
    border-radius: 0; 
    position: relative;
    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
}
.slide-image-container img {
    width: 100%; 
    height: 100%; 
    object-fit: cover;
}
.slide-content-container {
    padding: 15px 10px; 
    text-align: center; 
    color: #fff;
    height: 120px;
}
.slider-arrow {
    background: transparent;
    border: none;
    color: #fff;
    width: auto;
    height: auto;
    padding: 0;
    border-radius: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: transform 0.3s ease, color 0.3s ease;
    z-index: 12;
    box-shadow: none;
    backdrop-filter: none;
    -webkit-backdrop-filter: none;
}

.slider-arrow:hover {
    color: #f39c12; /* Change to any hover color you like */
    transform: translateY(-50%) scale(1.15);
}

.slider-arrow:active {
    transform: translateY(-50%) scale(0.95);
}
.banner-slider-dots {
    text-align: left; 
    margin-top: 10px; 
    display: flex; 
    justify-content: center; 
    gap: 8px;
}
.v-dot {
    width: 8px; 
    height: 8px; 
    border-radius: 50%; 
    background: rgba(255, 255, 255, 0.4); 
    display: inline-block; 
    cursor: pointer; 
    transition: all 0.3s ease;
}
.v-dot.active {
    background: #ff7a00; 
    transform: scale(1.3);
}
.banner-title {
    color: #fff;
    font-size: 52px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 5px;
}
.banner-tagline {
    font-size: 15px;
    color: #ff7a00;
    font-weight: 600;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}
@media (max-width: 767px) {
    .banner-slider-wrapper {
        padding: 0;
        max-width: 100%;
    }
    .banner-slider-viewport {
        height: 590px !important;
    }
    .slide-image-container {
        height: 470px !important;
    }
    .banner-title {
        font-size: 32px !important;
    }
    .banner-tagline {
        font-size: 13px !important;
        letter-spacing: 1px !important;
    }
}
@media (min-width: 992px) {
    .banner-slider-wrapper {
        margin: 0 30px 0 auto;
    }
    .banner-row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
}
</style>

<div id="page-preloader" aria-label="Loading Aliyan Swiftedge Advisory page" role="status">
    <div class="preloader-card">
        <img src="assets/images/logo/aliyan-swiftedge-logo.svg" alt="Aliyan Swiftedge Advisory Logo" class="preloader-logo">
        <div class="preloader-spinner"></div>
    </div>
</div>

<!-- Page Banner -->
<section class="breadcrumb-area" style="background:url('assets/images/service/corporate.jpg') center center/cover no-repeat; padding:50px 0 30px; position:relative; overflow:hidden;">
    <div style="background:rgba(0,0,0,0.65); position:absolute; inset:0;"></div>

    <div class="container" style="position:relative; z-index:2;">
        <div class="row banner-row">
            
            <!-- Left Column: Header Info -->
            <div class="col-md-7 col-sm-12" style="margin-bottom: 10px; text-align: left;">
                <h1 class="banner-title">
                    Aliyan Swiftedge Advisory
                </h1>
                <div class="banner-tagline">
                    Empowering Innovation & Academic Excellence
                </div>
                <p style="color: #eee; font-size: 16px; margin-bottom: 25px;margin-top:10px; line-height: 1.6;">
                    Empowering startups, enterprises, and academic researchers with premier corporate consulting, strategic insights, and thesis mentorship.
                </p>
            </div>
            
            <!-- Right Column: Horizontal Slider -->
            <div class="col-md-5 col-sm-12" style="margin-bottom: 10px;">
                <div class="banner-slider-wrapper">
                    
                    <!-- Left Arrow -->
                    <button class="slider-arrow left-arrow" style="position: absolute; left: 15px; top: 40%; transform: translateY(-50%); z-index:12;">
                        <i class="fas fa-chevron-left" style="font-size: 18px;"></i>
                    </button>
                    
                    <!-- Viewport -->
                    <div class="banner-slider-viewport">
                        <div class="banner-slider-track">
                            
                            <!-- Slide 1: Sir Ali -->
                            <div class="banner-slide">
                                <div class="slide-image-container">
                                    <img src="assets/images/A.banner/sir%20ali.jpg" alt="Sir Ali">
                                </div>
                                <div class="slide-content-container">
                                    <h4 style="margin: 0 0 5px 0; font-weight: 700; font-size: 20px; color: #ff7a00;">Sir Ali</h4>
                                    <p style="margin: 0; font-size: 14px; color: #eee; line-height: 1.5;">Advisory Board Director leading the strategic vision, corporate governance, and advisory direction of the group.</p>
                                </div>
                            </div>

                            <!-- Slide 2: Strategic Consulting -->
                            <div class="banner-slide">
                                <div class="slide-image-container">
                                    <img src="assets/images/A.banner/strategic%20consultance.jpg" alt="Strategic Consulting">
                                </div>
                                <div class="slide-content-container">
                                    <h4 style="margin: 0 0 5px 0; font-weight: 700; font-size: 20px; color: #ff7a00;">Strategic Consulting</h4>
                                    <p style="margin: 0; font-size: 14px; color: #eee; line-height: 1.5;">Innovative business strategy, corporate planning, organizational development, operational excellence, compliance support, and business transformation.</p>
                                </div>
                            </div>

                            <!-- Slide 3: Academic Consultancy -->
                            <div class="banner-slide">
                                <div class="slide-image-container">
                                    <img src="assets/images/A.banner/academic%20consultance.jpg" alt="Academic Consultancy">
                                </div>
                                <div class="slide-content-container">
                                    <h4 style="margin: 0 0 5px 0; font-weight: 700; font-size: 20px; color: #ff7a00;">Academic Consultancy</h4>
                                    <p style="margin: 0; font-size: 14px; color: #eee; line-height: 1.5;">Thesis/MS/PhD research mentorship, publication management, statistical data analysis, editing, and proofreading.</p>
                                </div>
                            </div>
                             <!-- Slide 4: Corporate Advisory -->
                             <div class="banner-slide">
                                <div class="slide-image-container">
                                    <img src="assets/images/A.banner/cooperate%20advisory.jpg" alt="Corporate Advisory">
                                </div>
                                <div class="slide-content-container">
                                    <h4 style="margin: 0 0 5px 0; font-weight: 700; font-size: 20px; color: #ff7a00;">Corporate Advisory</h4>
                                    <p style="margin: 0; font-size: 14px; color: #eee; line-height: 1.5;">Strategic guidance, business planning, and advisory services for corporate clients.</p>
                                </div>
                             </div>

                        </div>
                    </div>

                    <!-- Right Arrow -->
                    <button class="slider-arrow right-arrow" style="position: absolute; right: 15px; top: 40%; transform: translateY(-50%); z-index:12;">
                        <i class="fas fa-chevron-right" style="font-size: 18px;"></i>
                    </button>
                    
                    <!-- Dots -->
                    <div class="banner-slider-dots">
                        <span class="v-dot active" data-index="0"></span>
                        <span class="v-dot" data-index="1"></span>
                        <span class="v-dot" data-index="2"></span>
                        <span class="v-dot" data-index="3"></span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Custom JS for Horizontal Slider -->
<script>
window.addEventListener("load", function() {
    var preloader = document.getElementById("page-preloader");
    if (preloader) {
        preloader.classList.add("is-hidden");
        setTimeout(function() {
            if (preloader && preloader.parentNode) {
                preloader.parentNode.removeChild(preloader);
            }
        }, 600);
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var track = document.querySelector(".banner-slider-track");
    var slides = document.querySelectorAll(".banner-slide");
    var dots = document.querySelectorAll(".v-dot");
    var leftArrow = document.querySelector(".left-arrow");
    var rightArrow = document.querySelector(".right-arrow");
    var currentIndex = 0;
    var slideCount = slides.length;
    var autoplayInterval;

    function updateSlider(index) {
        if (index < 0) index = slideCount - 1;
        if (index >= slideCount) index = 0;
        currentIndex = index;

        // Slide horizontally using translateX
        track.style.transform = "translateX(-" + (currentIndex * 100) + "%)";

        // Update dots classes
        dots.forEach(function(dot, i) {
            if (i === currentIndex) {
                dot.classList.add("active");
            } else {
                dot.classList.remove("active");
            }
        });
    }

    function startAutoplay() {
        autoplayInterval = setInterval(function() {
            updateSlider(currentIndex + 1);
        }, 4000);
    }

    function resetAutoplay() {
        clearInterval(autoplayInterval);
        startAutoplay();
    }

    // Arrow events
    leftArrow.addEventListener("click", function() {
        updateSlider(currentIndex - 1);
        resetAutoplay();
    });

    rightArrow.addEventListener("click", function() {
        updateSlider(currentIndex + 1);
        resetAutoplay();
    });

    // Dot events
    dots.forEach(function(dot) {
        dot.addEventListener("click", function() {
            var index = parseInt(dot.getAttribute("data-index"));
            updateSlider(index);
            resetAutoplay();
        });
    });

    // Start autoplay
    startAutoplay();

    var revealItems = document.querySelectorAll("section, div.row.banner-row");
    revealItems.forEach(function(item) {
        item.classList.add("flow-reveal");
    });

    if ("IntersectionObserver" in window) {
        var revealObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: "0px 0px -40px 0px"
        });

        revealItems.forEach(function(item) {
            revealObserver.observe(item);
        });
    } else {
        revealItems.forEach(function(item) {
            item.classList.add("is-visible");
        });
    }
});
</script>

<!-- About -->
<section style="padding:80px 0;">
    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <img src="assets/images/service/corporate.jpg"
                     class="img-responsive"
                     style="border-radius:10px; width:100%;">
            </div>

            <div class="col-md-6">

                <h2 style="font-weight:700; margin-top:20px; margin-bottom:20px;">
                    Aliyan Swiftedge Advisory
                </h2>

                <p style="font-size:16px; line-height:1.8; color:#555;">

                    <strong>Aliyan Swiftedge Advisory</strong> provides strategic consulting,
                    corporate advisory, business solutions, and academic consultancy services
                    for startups, enterprises, professionals, researchers, and institutions worldwide.

                </p>

                <p style="font-size:16px; line-height:1.8; color:#555;">

                    Our experienced consultants work closely with businesses and educational
                    institutions to deliver innovative solutions, improve operational
                    performance, support research excellence, and achieve sustainable growth.

                </p>

                <a href="contact.php?from=advisory" class="btn btn-theme effect btn-md" style="margin-top:20px;">
                    Get Free Consultation
                </a>

            </div>

        </div>

    </div>
</section>

<!-- Services -->
<section style="background:#f8f9fa; padding:80px 0;">

<div class="container">

<div class="text-center" style="margin-bottom:50px;">
    <h4 style="color:#0d6efd;">Our Expertise</h4>
    <h2 style="font-weight:700;">Professional Advisory Services</h2>
</div>

<div class="row">

    <!-- Business -->
    <div class="col-md-6">

        <div style="background:#fff; padding:35px; border-radius:10px; box-shadow:0 10px 30px rgba(0,0,0,.08); margin-bottom:30px; height:100%;">

            <i class="fa fa-briefcase" style="font-size:45px; color:#0d6efd;"></i>

            <h3 style="margin-top:20px;">
                Business & Corporate Solutions
            </h3>

            <p style="color:#666; line-height:1.8; margin-bottom:25px;">
                We provide strategic business consulting, corporate planning,
                compliance support, organizational development, operational excellence,
                financial advisory, startup mentoring, investment readiness,
                and business transformation services.
            </p>

            <a href="business-solutions.php"
               class="btn btn-primary"
               style="border-radius:30px; padding:10px 25px;">
                Learn More
            </a>

        </div>

    </div>

    <!-- Academic -->
    <div class="col-md-6">

        <div style="background:#fff; padding:35px; border-radius:10px; box-shadow:0 10px 30px rgba(0,0,0,.08); height:100%;">

            <i class="fa fa-graduation-cap" style="font-size:45px; color:#0d6efd;"></i>

            <h3 style="margin-top:20px;">
                Research & Academic Solutions
            </h3>

            <p style="color:#666; line-height:1.8; margin-bottom:25px;">
                Supporting universities, researchers, PhD scholars, MS students,
                institutions, and professionals with research proposal development,
                data analysis, publication support, journal selection, thesis writing,
                editing, proofreading, and academic consultancy.
            </p>

            <a href="academic-solutions.php"
               class="btn btn-primary"
               style="border-radius:30px; padding:10px 25px;">
                Learn More
            </a>

        </div>

    </div>

</div>

</div>

</section>

<!-- Why Choose Us -->

<section style="padding:80px 0;">

<div class="container">

<div class="text-center" style="margin-bottom:50px;">

<h4 style="color:#0d6efd;">
Why Choose Us
</h4>

<h2>
Delivering Excellence Through Expertise
</h2>

</div>

<div class="row">

<div class="col-md-3 text-center">

<i class="fa fa-users" style="font-size:50px; color:#0d6efd;"></i>

<h4>Expert Consultants</h4>

<p>
Experienced professionals across multiple industries.
</p>

</div>

<div class="col-md-3 text-center">

<i class="fa fa-lightbulb" style="font-size:50px; color:#0d6efd;"></i>

<h4>Strategic Solutions</h4>

<p>
Innovative and practical business strategies.
</p>

</div>

<div class="col-md-3 text-center">

<i class="fa fa-globe" style="font-size:50px; color:#0d6efd;"></i>

<h4>Global Reach</h4>

<p>
Serving clients across UAE, Pakistan, and worldwide.
</p>

</div>

<div class="col-md-3 text-center">

<i class="fa fa-check-circle" style="font-size:50px; color:#0d6efd;"></i>

<h4>Reliable Results</h4>

<p>
Focused on measurable outcomes and long-term success.
</p>

</div>

</div>

</div>

</section>

<!-- CTA -->

<!-- =========================
     Advisory Team
========================= -->

<!-- =========================
     Meet Our Advisory Team
========================= -->

<section id="team" style="padding:80px 0;background:#f8f9fa;">

<div class="container">

<div class="text-center" style="margin-bottom:50px;">
    <h5 style="color:#0d6efd;font-weight:600;">OUR TEAM</h5>
    <h2 style="font-weight:700;">Meet Our Advisory Team</h2>
    <p style="max-width:650px;margin:15px auto;color:#666;">
        Our experienced professionals are committed to delivering innovative business and academic solutions.
    </p>
</div>

<div class="row">

    <!-- Team Member (Ijaz) -->
    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">

        <div style="background:#fff;border-radius:12px;padding:20px;
        text-align:center;
        box-shadow:0 8px 25px rgba(0,0,0,.08);
        transition:.3s;">

            <img src="assets/images/team/SirIjaaz.png"
                 alt="Ijaz Ali"
                 style="width:120px;height:120px;
                 border-radius:50%;
                 object-fit:cover;
                 border:4px solid #0d6efd;
                 margin-bottom:20px;">

            <h4 style="margin-bottom:5px;font-weight:700;">
                Ijaz Ali
            </h4>

            <span style="color:#0d6efd;font-weight:600;">
                Founder & CEO
            </span>

            <p style="margin-top:15px;color:#666;font-size:14px;line-height:1.7;">
                Leading the strategic vision, corporate governance, and advisory direction of the group.
            </p>

        </div>

    </div>

    <!-- Team Member (Iftikhar) -->
    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">

        <div style="background:#fff;border-radius:12px;padding:20px;
        text-align:center;
        box-shadow:0 8px 25px rgba(0,0,0,.08);
        transition:.3s;">

            <img src="assets/images/team/SirIftekhar.png"
                 alt="Iftikhar Ali"
                 style="width:120px;height:120px;
                 border-radius:50%;
                 object-fit:cover;
                 border:4px solid #0d6efd;
                 margin-bottom:20px;">

            <h4 style="margin-bottom:5px;font-weight:700;">
                Iftikhar Ali
            </h4>

            <span style="color:#0d6efd;font-weight:600;">
                Co-Founder & Executive Director
            </span>

            <p style="margin-top:15px;color:#666;font-size:14px;line-height:1.7;">
                Overseeing global corporate operations, business development, and general trading advisory.
            </p>

        </div>

    </div>

    <!-- Team Member (Tahir) -->
    <div class="col-lg-4 col-md-6" style="margin-bottom: 30px;">

        <div style="background:#fff;border-radius:12px;padding:20px;
        text-align:center;
        box-shadow:0 8px 25px rgba(0,0,0,.08);
        transition:.3s;">

            <img src="assets/images/team/TahirSir.png"
                 alt="Tahir Ali"
                 style="width:120px;height:120px;
                 border-radius:50%;
                 object-fit:cover;
                 border:4px solid #0d6efd;
                 margin-bottom:20px;">

            <h4 style="margin-bottom:5px;font-weight:700;">
                Tahir Ali
            </h4>

            <span style="color:#0d6efd;font-weight:600;">
                Co-Founder & IT Director
            </span>

            <p style="margin-top:15px;color:#666;font-size:14px;line-height:1.7;">
                Driving digital transformation, cloud architecture, and IT infrastructure security advisory.
            </p>

        </div>

    </div>

</div>

</div>

</section>

<?php include 'include/footer-advisory.php'; ?>
<?php include 'include/whatsapp-widget.php'; ?>
<?php include 'include/bottom.php'; ?>