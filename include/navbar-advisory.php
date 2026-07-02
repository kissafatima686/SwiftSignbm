<!-- Header 
    ============================================= -->
    <style>
        /* Fixed header for advisory pages */
body {
    padding-top: 90px;
}

nav.navbar.bootsnav.navbar-fixed {
    background: #fff;
    margin-bottom: 0;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
}

    </style>
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border active-border small-pad navbar-fixed bootsnav">

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
                    <a class="navbar-brand" href="aliyan_services.php">
                        <img src="assets/images/logo/aliyan-swiftedge-logo.svg" class="logo" alt="Aliyan Swiftedge Advisory Logo" style="height: 50px; max-height: 50px; width: auto; object-fit: contain;">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="aliyan_services.php#home">Aliyan Swiftedge Advisory</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Expertise</a>
                            <ul class="dropdown-menu">
                                <li><a href="business-solutions.php">Business & Corporate Solutions</a></li>
                                <li><a href="academic-solutions.php">Research & Academic Solutions</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="aliyan_services.php#team">Our Team</a>
                        </li>
                        <li>
                            <a href="contact.php?from=advisory">Contact Us</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fas fa-times"></i></a>
                <div class="widget">
                    <img src="assets/images/logo/aliyan-swiftedge-logo.svg" alt="Aliyan Swiftedge Advisory Logo" style="max-width: 220px; margin-bottom: 15px;">
                    <p>
                        Empowering Innovation & Academic Excellence
                    </p>
                </div>
                <div class="widget contact address">
                    <div>
                        <ul>
                            <li>
                                <div class="content"><p>ADDRESS</p>
                                    <strong>Dubai: Business Village Block-B, 3rd Floor, Office 301, Dubai, UAE</strong><br>
                                    <strong>Pakistan: Office 22, 4th Floor, Pakland City Center, I-8 Markaz, Islamabad, Pakistan</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content"><p>EMAIL</p><strong>Aliyan@swiftsignbm.com</strong></div>
                            </li>
                            <li>
                                <div class="content"><p>PHONE</p><strong>+971 52 763 3023</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget contact newsletter">
                    <h4 class="title">Subscribe for Insights!</h4>
                    <form action="contact_submited.php" method="POST">
                        <input type="hidden" name="name" value="Newsletter Subscription">
                        <input type="hidden" name="comments" value="Side menu newsletter subscription">
                        <input type="hidden" name="from_page" value="advisory">
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
                        <li><a href="https://www.facebook.com/itandcybersolutions/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/checkpoint/challengesV3/AQEk691qZc8gVgAAAZ8dhZhVDnwho6IPs-6EGx9eQbEuL9hR2MyKhqNeIKc6STljlpRQ5NjadSI6ZA_BMLSnf9z80oQ7jQ" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.instagram.com/ssitandcybersolutions" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
