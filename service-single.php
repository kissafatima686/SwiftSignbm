<?php
$service = $_GET['service'] ?? 'financial';

/* ================= SERVICES DATA ================= */
$services = [

    "financial" => [
        "title" => "Financial Services in UAE",
        "image" => "assets/images/service/s3.jpg",
        "desc"  => "We provide complete financial solutions including accounting, auditing, VAT, and tax consultancy to ensure compliance and business growth.",
        "points" => [
            "Accounting & Bookkeeping",
            "VAT Registration & Filing",
            "Audit & Assurance",
            "Tax Planning & Compliance"
        ]
    ],

    "business" => [
        "title" => "NEW Business Setup",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Start your company in UAE with our complete business setup solutions including mainland and freezone company formation.",
        "points" => [
            "Company Formation",
            "Trade License",
            "Freezone & Mainland Setup",
            "Legal Documentation"
        ]
    ],

    "it" => [
        "title" => "IT Solutions",
        "image" => "assets/images/service/s4.jpg",
        "desc"  => "Modern IT services to enhance your business through digital transformation and automation.",
        "points" => [
            "Website Development",
            "Software Solutions",
            "Cybersecurity",
            "IT Support & Maintenance"
        ]
    ],

    "visa" => [
        "title" => "VISA Services in UAE",
        "image" => "assets/images/service/ss2.jpg",

        "desc"  => "Swift Sign Business Management provides comprehensive PRO & VISA Services in the UAE, ensuring seamless interaction with government authorities and full compliance with immigration and labor regulations.",

        "points" => [
            "New Visa",
            "Renewal of Visa",
            "Residence Visa",
            "Family Visa",
            "Partner Visa"
        ],

        "details" => [
            "New Visa" => "We facilitate new visas for investors, employees, and dependents.",
            "Renewal of Visa" => "Our visa renewal services ensure legal residency and business continuity.",
            "Residence Visa" => "We provide support for obtaining UAE residence visas.",
            "Family Visa" => "Our Family Visa services allow residents to sponsor their loved ones with ease.",
            "Partner Visa" => "We offer guidance in securing Partner Visas for business owners and investors in the UAE."
        ]
    ],

    "foodstuff" => [
        "title" => "Foodstuff Trading",
        "image" => "assets/images/service/fooda.png",
        "desc"  => "Providing services on the products labelling, halal certifications, import, export, storage and distribution",
        "points" => [
            "Import & Export Services",
            "Dairy Products(Desi Ghee) Trading",
            "Pure Honey",
            "Coconut trading"
        ]
    ],

    "tire" => [
        "title" => "Tyre Trading",
        "image" => "assets/images/service/images.jpg",
        "desc"  => "Handling import, export, and storage services across UAE and Globally",
        "points" => [
            "Import & Export services",
            "Storage services"
        ]
    ],

    "business-coach" => [
        "title" => "Business Coach Service",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Professional coaching to help startups and companies grow strategically and sustainably.",
        "points" => [
            "Startup Guidance",
            "Business Strategy",
            "Growth Planning",
            "Market Analysis"
        ]
    ],

    "regulatory" => [
        "title" => "Regulatory Services in UAE & Pakistan",
        "image" => "assets/images/service/regulatory.jpg",
        "desc"  => "Swift Sign Business Management provides expert assistance in navigating the UAE’s regulatory landscape.",

        "points" => [
            "DED – Mainland",
            "MOHRE",
            "MOHAP",
            "DOH",
            "FANR",
            "DRAP"
        ]
    ],

    "talent" => [
        "title" => "Talent & Development",
        "image" => "assets/images/service/talent.jpg",
        "desc"  => "Professional training and workforce development programs.",

        "points" => [
            "DGR",
            "GWDP",
            "HSE",
            "Cold Chain Management",
            "DRAP Registration"
        ]
    ],

    "corporate" => [

        "title" => "Business & Corporate Solutions",

        "image" => "assets/images/service/corporate.jpg",

        "desc" => "Designed for companies, start-ups, entrepreneurs, investors, and global business clients seeking professional financial, operational, strategic, and compliance-driven guidance.",

        "points" => [
            "Financial Consultancy & Advisory",
            "Capital Budgeting & Investment Appraisal",
            "Cost & Benefit Analysis",
            "Business Coaching & Mentorship",
            "Audit, Compliance & Risk Management",
            "Business Strategy & Growth Planning"
        ],

        "details" => [

            "Financial Consultancy & Advisory" =>
            "Strategic financial planning, investment advisory, cash flow management, fundraising support, and profitability optimization.",

            "Capital Budgeting & Investment Appraisal" =>
            "NPV, IRR, DCF modeling, capital allocation, and investment decision support.",

            "Cost & Benefit Analysis" =>
            "Comprehensive evaluation of costs, benefits, and financial impact assessment.",

            "Business Coaching & Mentorship" =>
            "Business planning, setup guidance, launch strategy, and mentoring.",

            "Audit, Compliance & Risk Management" =>
            "Internal audits, compliance systems, and enterprise risk management.",

            "Business Strategy & Growth Planning" =>
            "Market entry strategies, KPI systems, and expansion planning."
        ]
    ],

    "academic" => [

        "title" => "Research & Academic Solutions",

        "image" => "assets/images/service/academic.jpg",

        "desc" => "Tailored for PhD and MS researchers, students, universities, institutions, and academic professionals worldwide.",

        "points" => [
            "Research Consultancy & Mentorship",
            "Thesis Coaching & Writing",
            "Journal Publication Management",
            "Data Analysis & Statistical Interpretation",
            "Research Proposal Development"
        ],

        "details" => [

            "Research Consultancy & Mentorship" =>
            "End-to-end PhD/MS research guidance and expert mentorship support.",

            "Thesis Coaching & Writing" =>
            "Complete thesis writing, formatting, and methodology development.",

            "Journal Publication Management" =>
            "Journal selection, manuscript formatting, and submission support.",

            "Data Analysis & Statistical Interpretation" =>
            "SPSS, Stata, R, Python, SmartPLS, and econometric modeling.",

            "Research Proposal Development" =>
            "Proposal writing, methodology design, and funding documentation."
        ]
    ],

    /* ================= NEW SERVICE ================= */

   "aliyan-swiftedge-advisory" => [
    "title" => "Aliyan Swiftedge Advisory",
    "image" => "assets/images/service/advisory.jpg",
    "desc"  => "Aliyan Swiftedge Advisory provides strategic consulting, corporate advisory, business solutions, and academic consultancy services for startups, enterprises, professionals, researchers, and institutions worldwide.",
    "points" => [
        [
            "title" => "Business & Corporate Solutions",
            "section" => "business-corporate"
        ],
        [
            "title" => "Research & Academic Solutions",
            "section" => "research-academic"
        ]
    ],
],

];

$current = $services[$service] ?? $services['financial'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- PAGE HEADER -->
<?php
$banner = $current['image'] ?? 'assets/images/service/s3.jpg';
?>

<div style="
    background: url('<?php echo $banner; ?>') center/cover no-repeat;
    padding: 80px 0;
    text-align: center;
    color: #fff;
    position: relative;
">

    <div style="
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.5);
    "></div>

    <h1 style="
        margin:0;
        font-size:36px;
        color:#fff;
        position:relative;
        z-index:1;
    ">
        <?php echo htmlspecialchars($current['title']); ?>
    </h1>

</div>

<!-- CONTENT -->
<div style="padding:60px 0; background:#f9f9f9;">

    <div style="
        width:90%;
        max-width:1200px;
        margin:auto;
        display:flex;
        flex-wrap:wrap;
        gap:30px;
    ">

        <!-- MAIN CONTENT -->
        <div style="flex:3; min-width:300px;">

            <!-- IMAGE -->
            <img src="<?php echo htmlspecialchars($current['image']); ?>"
                 alt="<?php echo htmlspecialchars($current['title']); ?>"
                 style="width:100%; border-radius:10px; margin-bottom:25px;">

            <!-- TITLE -->
            <h2 style="font-size:28px; margin-bottom:15px;">
                <?php echo htmlspecialchars($current['title']); ?>
            </h2>

            <!-- DESCRIPTION -->
            <p style="color:#666; line-height:1.7;">
                <?php echo htmlspecialchars($current['desc']); ?>
            </p>

            <!-- POINTS -->
      <!-- POINTS (BUTTON STYLE - LINK ONLY) -->

                <ul style="margin-top:20px; padding-left:0; list-style:none; display:flex; flex-direction:column; gap:12px;">

                    <li>
                        <a href="business-solutions.php"
                        style="
                                display:inline-block;
                                padding:10px 16px;
                                border-radius:8px;
                                background:#f1f6ff;
                                border:1px solid #cfe2ff;
                                color:#0077b5;
                                font-weight:600;
                                text-decoration:none;
                                transition:all 0.2s ease;
                        "
                        onmouseover="this.style.background='#0077b5'; this.style.color='#fff';"
                        onmouseout="this.style.background='#f1f6ff'; this.style.color='#0077b5';">

                            Business & Corporate Solutions

                        </a>
                    </li>

                    <li>
                        <a href="academic-solutions.php"
                        style="
                                display:inline-block;
                                padding:10px 16px;
                                border-radius:8px;
                                background:#f1f6ff;
                                border:1px solid #cfe2ff;
                                color:#0077b5;
                                font-weight:600;
                                text-decoration:none;
                                transition:all 0.2s ease;
                        "
                        onmouseover="this.style.background='#0077b5'; this.style.color='#fff';"
                        onmouseout="this.style.background='#f1f6ff'; this.style.color='#0077b5';">

                            Research & Academic Solutions

                        </a>
                    </li>

                </ul>

            <!-- DETAILS -->
            <?php if(!empty($current['details'])): ?>

                <div style="margin-top:35px;">

                    <?php foreach($current['details'] as $title => $text): ?>

                        <div style="margin-bottom:25px;">

                            <h4 style="margin-bottom:10px;">

                                <?php if($title == 'Business & Corporate Solutions'): ?>

                                    <a href="service-single.php?service=corporate"
                                       style="color:#0077b5; text-decoration:none;">

                                        <?php echo htmlspecialchars($title); ?>

                                    </a>

                                <?php elseif($title == 'Research & Academic Solutions'): ?>

                                    <a href="service-single.php?service=academic"
                                       style="color:#0077b5; text-decoration:none;">

                                        <?php echo htmlspecialchars($title); ?>

                                    </a>

                                <?php else: ?>

                                    <?php echo htmlspecialchars($title); ?>

                                <?php endif; ?>

                            </h4>

                            <p style="color:#666; line-height:1.7;">

                                <?php echo htmlspecialchars($text); ?>

                            </p>

                        </div>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

            <!-- BUTTON -->
            <a href="contact.php"
               style="
                    display:inline-block;
                    margin-top:25px;
                    padding:12px 25px;
                    background:#0077b5;
                    color:#fff;
                    text-decoration:none;
                    border-radius:25px;
               ">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="
                background:#fff;
                padding:20px;
                border-radius:10px;
                box-shadow:0 5px 20px rgba(0,0,0,0.05);
            ">

                <h3 style="margin-bottom:15px; font-size:20px;">
                    Our Services
                </h3>

                <ul style="list-style:none; padding:0; margin:0;">

                    <?php foreach($services as $key => $item): ?>

                        <li style="margin-bottom:10px;">

                            <a href="service-single.php?service=<?php echo urlencode($key); ?>"
                               style="
                                    display:block;
                                    padding:10px 15px;
                                    border-radius:6px;
                                    text-decoration:none;
                                    font-size:14px;
                                    background:<?php echo ($service == $key) ? '#0077b5' : '#f5f5f5'; ?>;
                                    color:<?php echo ($service == $key) ? '#fff' : '#333'; ?>;
                                    font-weight:<?php echo ($service == $key) ? '600' : '400'; ?>;
                               ">

                                <?php echo htmlspecialchars($item['title']); ?>

                            </a>

                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>

        </div>
    </div>

</div>

<?php include 'include/footer.php'; ?>


<?php include 'include/bottom.php'; ?>