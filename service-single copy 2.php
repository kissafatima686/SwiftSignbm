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

    "pro" => [
        "title" => "PRO Services",
        "image" => "assets/images/service/s3.jpg",
        "desc"  => "We handle all government-related documentation and approvals for your business.",
        "points" => [
            "Visa Processing",
            "Document Clearing",
            "License Renewal",
            "Government Approvals"
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

    /* ================= NEWLY ADDED SERVICES ================= */

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
            "Storage services",

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
            "desc"  => "Swift Sign Business Management provides expert assistance in navigating the UAE’s regulatory landscape. We ensure seamless approvals, compliance, and documentation with local authorities, enabling businesses to operate in accordance with national regulation.",
            
            "points" => [
                "DED – Mainland (Department of Economic Development)",
                "DED – Free Zones (Department of Economic Development)",
                "MOHRE (Ministry of Human Resources & Emiratisation)",
                "MOHAP (Ministry of Health & Prevention)",
                "DOH (Department of Health – Abu Dhabi)",
                "FANR (Federal Authority for Nuclear Regulation)",
                "ESMA (Emirates Authority for Standardization and Metrology)",
                "MOI (Ministry of Interior)",
                "DCD (Dubai Civil Defense)",
                "DCD – DGR (Dangerous Goods Regulation)",
                "DRAP (Drug Regulatory Authority of Pakistan)",
                "PPC (Pakistan Pharmacy Council)"
            ]
        ],


        "talent" => [
            "title" => "Talent & Development",
            "image" => "assets/images/service/talent.jpg",
            "desc"  => "Swift Sign Business Management delivers specialized training and professional development programs designed to enhance workforce capabilities and ensure regulatory compliance across key industries.",
            
            "points" => [
                "DGR (Dangerous Goods Regulations)",
                "GWDP (Good Warehousing and Distribution Practices)",
                "Pharmaceutical Product Registration",
                "Pharmaceutical Product Classification",
                "Import / Export Permits Approval",
                "HSE (Health, Safety, and Environment)",
                "FANR (Federal Authority for Nuclear Regulation)",
                "CCM (Cold Chain Management)",
                "CCCM (Certified Cold Chain Management)",
                "DRAP Registration (Drug Regulatory Authority of Pakistan)"
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
        "Business Strategy & Growth Planning",
        "Corporate Training & Capacity Building",
        "Digital Transformation Solutions",
        "UAE Business Support Services",
        "Project Management & Execution",
        "Market Research & Feasibility Studies",
        "Human Resource Consultancy"
    ],

    "details" => [

        "Financial Consultancy & Advisory" =>
        "Strategic financial planning, investment advisory, cash flow management, fundraising support, and profitability optimization.",

        "Capital Budgeting & Investment Appraisal" =>
        "NPV, IRR, DCF modeling, capital allocation, risk-adjusted return analysis, and investment decision support.",

        "Cost & Benefit Analysis" =>
        "Comprehensive evaluation of costs, benefits, break-even analysis, and financial impact assessment for projects and business decisions.",

        "Business Coaching & Mentorship" =>
        "End-to-end support from idea validation, business planning, financial setup, registration, launch, and growth mentoring.",

        "Audit, Compliance & Risk Management" =>
        "Internal audits, regulatory compliance, governance frameworks, AML/KYC advisory, and enterprise risk management.",

        "Business Strategy & Growth Planning" =>
        "Market entry strategies, competitive analysis, KPI systems, expansion planning, and M&A advisory.",

        "Corporate Training & Capacity Building" =>
        "Finance training, leadership development, operational efficiency workshops, and customized staff training programs.",

        "Digital Transformation Solutions" =>
        "ERP systems, cloud adoption, automation, system integration, and digital strategy implementation.",

        "UAE Business Support Services" =>
        "Company setup, PRO services, licensing, banking support, and regulatory compliance in UAE.",

        "Project Management & Execution" =>
        "Planning, scheduling, execution, monitoring, stakeholder coordination, and delivery management.",

        "Market Research & Feasibility Studies" =>
        "Market analysis, demand forecasting, ROI modeling, and investment feasibility evaluation.",

        "Human Resource Consultancy" =>
        "HR policies, recruitment strategy, performance systems, compliance audits, and workforce management."
    ]
],

"academic" => [
    "title" => "Research & Academic Solutions",
    "image" => "assets/images/service/academic.jpg",

    "desc" => "Tailored for PhD and MS researchers, students, universities, institutions, and academic professionals worldwide — covering every stage of the research lifecycle from proposal to publication.",

    "points" => [
        "Research Consultancy & Mentorship",
        "Thesis Coaching, Writing & Formatting",
        "Thesis & Manuscript Revision",
        "Journal Publication Management",
        "Data Analysis & Statistical Interpretation",
        "Data Collection & Research Services",
        "Research Proposal Development",
        "Literature Review & Methodology",
        "Academic Proofreading & Formatting",
        "Curriculum Development & Guest Lecturing",
        "Statistical Training & Software Workshops"
    ],

    "details" => [

        "Research Consultancy & Mentorship" =>
        "End-to-end PhD/MS research guidance, topic selection, conceptual framework design, and expert mentorship support.",

        "Thesis Coaching, Writing & Formatting" =>
        "Chapter-by-chapter thesis writing, literature review, methodology development, and full formatting compliance (APA, MLA, Harvard).",

        "Thesis & Manuscript Revision" =>
        "Reviewer comment handling, structured revisions, response-to-reviewers, and journal-ready manuscript improvements.",

        "Journal Publication Management" =>
        "Journal selection (Scopus, WOS, HEC), manuscript formatting, submission handling, and editorial communication.",

        "Data Analysis & Statistical Interpretation" =>
        "Advanced analysis using SPSS, Stata, R, Python, SEM (AMOS/SmartPLS), regression, and econometric modeling.",

        "Data Collection & Research Services" =>
        "Primary surveys, interviews, and secondary data extraction from Bloomberg, WRDS, Refinitiv, and global databases.",

        "Research Proposal Development" =>
        "PhD/MS proposals, grant proposals (HEC, PSF), methodology design, and funding documentation.",

        "Literature Review & Methodology" =>
        "Systematic reviews (PRISMA/SLR), hypothesis development, sampling design, and instrument validation.",

        "Academic Proofreading & Formatting" =>
        "Grammar correction, plagiarism review, referencing styles, and journal-ready formatting.",

        "Curriculum Development & Guest Lecturing" =>
        "Course design, workshops, guest lectures, and academic training for institutions.",

        "Statistical Training & Software Workshops" =>
        "Hands-on training in SPSS, R, Python, SmartPLS, NVivo, Tableau, and Excel."
    ]
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

<!-- PAGE HEADER -->
<div style="
    background: url('<?php echo $banner; ?>') center/cover no-repeat;
    padding: 80px 0;
    text-align: center;
    color: #fff;
    position: relative;
">
    
    <!-- dark overlay for readability -->
    <div style="
        position:absolute;
        top:0; left:0;
        width:100%; height:100%;
        background:rgba(0,0,0,0.5);
    "></div>

    <h1 style="
    margin:0;
    font-size:36px;
    color:#fff;
    position:relative;
    z-index:1;
">
    <?php echo $current['title']; ?>
</h1>

</div>

<!-- CONTENT -->
<div style="padding:60px 0; background:#f9f9f9;">
    <div style="width:90%; max-width:1200px; margin:auto; display:flex; flex-wrap:wrap; gap:30px;">

        <!-- MAIN CONTENT -->
        <div style="flex:3; min-width:300px;">

            <!-- IMAGE -->
            <img src="<?php echo $current['image']; ?>" 
                 alt="<?php echo $current['title']; ?>"
                 style="width:100%; border-radius:10px; margin-bottom:25px;">

            <!-- TITLE -->
            <h2 style="font-size:28px; margin-bottom:15px;">
                <?php echo $current['title']; ?>
            </h2>

            <!-- DESCRIPTION -->
            <p style="color:#666; line-height:1.7;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- POINTS -->
            <ul style="margin-top:20px; padding-left:0; list-style:none;">
                <?php foreach($current['points'] as $point): ?>
                    <li style="margin-bottom:10px;">✔ <?php echo $point; ?></li>
                <?php endforeach; ?>

                <?php if(!empty($current['details'])): ?>
                <div style="margin-top:30px;">
                    <?php foreach($current['details'] as $title => $text): ?>
                        <div style="margin-bottom:20px;">
                            <h4 style="margin-bottom:8px;"><?php echo $title; ?></h4>
                            <p style="color:#666; line-height:1.6;"><?php echo $text; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            </ul>

            <!-- BUTTON -->
            <a href="contact.php"
               style="display:inline-block; margin-top:25px; padding:12px 25px; background:#0077b5; color:#fff; text-decoration:none; border-radius:25px;">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3 style="margin-bottom:15px; font-size:20px;">Our Services</h3>

                <ul style="list-style:none; padding:0; margin:0;">

                    <?php foreach($services as $key => $item): ?>

                        <li style="margin-bottom:10px;">

                            <a href="service-single.php?service=<?php echo $key; ?>"
                               style="display:block;
                                      padding:10px 15px;
                                      border-radius:6px;
                                      text-decoration:none;
                                      font-size:14px;
                                      background:<?php echo ($service == $key) ? '#0077b5' : '#f5f5f5'; ?>;
                                      color:<?php echo ($service == $key) ? '#fff' : '#333'; ?>;
                                      font-weight:<?php echo ($service == $key) ? '600' : '400'; ?>;">
                                
                                <?php echo $item['title']; ?>

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