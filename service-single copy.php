<?php
$service = $_GET['service'] ?? 'financial';

/* ================= SERVICES DATA ================= */
$services = [

    "financial" => [
        "title" => "Financial Services",
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
        "title" => "Business Setup",
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
        "title" => "Golden Visa Assistance",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Get long-term UAE residency with our complete Golden Visa support services.",
        "points" => [
            "Eligibility Assessment",
            "Documentation",
            "Application Processing",
            "Family Sponsorship"
        ]
    ]

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