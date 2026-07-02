<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border active-border small-pad navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <form action="search.php" method="GET" style="margin: 0; width: 100%;">
                        <div class="input-group">
                            <span class="input-group-addon" style="cursor: pointer;" onclick="this.closest('form').submit();"><i class="fa fa-search"></i></span>
                            <input type="text" name="q" class="form-control" placeholder="Type here and press enter to search..." required>
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/images/logo/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                       <li>
                            <a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a>
                        </li>
                        <li>
                            <a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">ABOUT US</a>
                        </li>
                        <li class="<?= ($current_page == 'services.php') ? 'active' : '' ?>">
                            <a href="services.php">OUR SERVICES</a>
                        </li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grid Colum</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-grid-2-colum.html">Gallery Two Colum</a></li>
                                        <li><a href="gallery-grid-3-colum.html">Gallery Three Colum</a></li>
                                        <li><a href="gallery-grid-4-colum.html">Gallery Four Colum</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Masonary Colum</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-2-colum.html">Gallery Two Colum</a></li>
                                        <li><a href="gallery-3-colum.html">Gallery Three Colum</a></li>
                                        <li><a href="gallery-4-colum.html">Gallery Four Colum</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                <li><a href="gallery-single.html">Gallery Single</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Other Business Setup
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="aliyan_services.php" target="_blank">Aliyan Swiftedge Advisory</a></li>
                                <li><a href="https://www.swiftsignshippingllc.com" target="_blank">Shipping & Logistics Division</a></li>
                                <li><a href="https://it.swiftsignbm.com" target="_blank">IT & Digital Solutions Division</a></li>
                                <li><a href="https://organicfood.swiftsigngeneraltrading.com" target="_blank">General Trading Division</a></li>
                                <!-- <li><a href="https://clothandcosmetics.swiftsignbm.com" target="_blank">Fashion & Cosmetics Division</a></li> -->
                                <li><a href="https://lailahijabs.com/" target="_blank">Hijabs & Modest Fashion Division</a></li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team</a>
                            <ul class="dropdown-menu">
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-single.html">Team Single</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single Standard</a></li>
                                <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a>
                        </li>
                        <!-- <li>
                        <a href="login.php" class="<?= ($current_page == 'login.php') ? 'active' : '' ?>">Login</a>
                     </li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fas fa-times"></i></a>
                <div class="widget">
                    <img src="assets/images/logo/logo.png" alt="Logo">
                    <p>
                        At Swift Sign, we empower businesses with seamless solutions that drive growth and build lasting value
                    </p>
                </div>
                <div class="widget contact address">
                    <div>
                        <ul>
                            <li>
                                <div class="content"><p>ADDRESS</p><strong>Offices: Business Village Block-B, 3rd Floor, Office 301, Dubai, UAE</strong></div>
                            </li>
                            <li>
                                <div class="content"><p>EMAIL</p><strong> info@swiftsignbm.com</strong></div>
                            </li>
                            <li>
                                <div class="content"><p>PHONE</p><strong>+971 52 763 3023</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget contact newsletter">
                    <h4 class="title">Get Subscribed!</h4>
                    <form action="#">
                        <div class="input-group stylish-input-group">
                            <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </button>  
                            </span>
                        </div>
                    </form>
                </div>
                <div class="widget social">
                    <ul class="link">
                        <li><a href="https://www.facebook.com/swiftsigngroupofcompanies"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.instagram.com/swiftsignbm.ae"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->