<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- Page Banner -->
<div class="page-title-area shadow dark bg-fixed text-center text-light"
     style="background-image: url(assets/images/banner/5.jpg); padding: 100px 0;">
    <div class="container">
        <h1> Our Services</h1>
    </div>
</div>

<!-- START SERVICES -->
<section class="services-style-two" style="padding:80px 0; background:#f9f9f9;">
    <div class="auto-container">

        <!-- Section Heading -->
        <div class="section-title centered" style="text-align:center; margin-bottom:40px;">
            <span class="title" style="display:inline-block; font-size:14px; color:#0077b5; font-weight:600; letter-spacing:1px;">
                Our Core Services
            </span>

            <h2 style="font-size:34px; font-weight:700; margin:10px 0;">
                Empowering Your Business Growth
            </h2>

            <div class="text" style="max-width:700px; margin:0 auto; color:#666; font-size:15px; line-height:1.6;">
                End-to-end professional solutions designed to support every stage of your business journey.
            </div>
        </div>

        <!-- FIXED FLEX ROW (IMPORTANT CHANGE) -->
        <div class="row"
             style="margin-left:-15px; margin-right:-15px; display:flex; flex-wrap:wrap; justify-content:center;">

        <?php
        $services = [

        ["Financial Services UAE","s3.jpg","financial",
        "Accounting, auditing, VAT and tax solutions for complete financial compliance and growth."],

        ["NEW Business Setup","s2.jpg","business",
        "Complete company formation services across UAE mainland and free zones."],

        ["IT Solutions","s4.jpg","it",
        "Modern software, automation, and IT infrastructure solutions for digital transformation."],

        ["VISA Services in UAE","ss2.jpg","visa",
        "Swift Sign Business Management provides comprehensive PRO & VISA Services in the UAE"],

        ["Foodstuff Trading","fooda.png","foodstuff",
        "Products labelling, halal certifications, import, export, storage and distribution"],

        ["Tyre Trading","images.jpg","tire",
        "Handling import, export, and storage services across UAE and Globally"],

        ["Business Coach Service","s2.jpg","business-coach",
        "Professional coaching to help startups and companies grow strategically and sustainably."],

        ["Regulatory Services in UAE & Pakistan","regulatory.jpg","regulatory",
        "Expert assistance in navigating UAE regulatory landscape"],

        ["Talent and Development","talent.jpg","talent",
        "Training and professional development programs"],

        ["Business & Corporate Solutions","corporate.jpg","corporate",
        "Financial, operational, strategic and compliance-driven guidance"],

        ["Research & Academic Solutions","academic.jpg","academic",
        "Support for PhD/MS researchers from proposal to publication"]

        ];

        foreach($services as $s){ ?>

        <!-- RESPONSIVE COLUMN -->
        <div class="col-lg-4 col-md-6 col-sm-6"
             style="padding:15px; display:flex;">

            <!-- CARD -->
            <div class="service-block2"
                 style="background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0,0.06); width:100%; display:flex; flex-direction:column;">

                <div class="image-box">
                    <img src="assets/images/service/<?php echo $s[1]; ?>"
                         style="width:100%; height:220px; object-fit:cover; display:block;">
                </div>

                <div class="content" style="padding:20px; flex:1;">
                    <h4 style="font-size:18px; margin-bottom:10px;">
                        <?php echo $s[0]; ?>
                    </h4>

                    <p style="font-size:14px; color:#666; line-height:1.6;">
                        <?php echo $s[3]; ?>
                    </p>

                    <a href="service-single.php?service=<?php echo $s[2]; ?>"
                       style="color:#0077b5; font-weight:600;">
                        Learn More →
                    </a>
                </div>

            </div>

        </div>

        <?php } ?>

        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>
<?php include 'include/bottom.php'; ?>