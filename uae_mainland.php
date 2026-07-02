<?php
$service = $_GET['service'] ?? 'business';

/* ================= SERVICES DATA ================= */
$services = [

    "business" => [
        "title" => "Company Formation",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide end-to-end company formation services in UAE including mainland, free zone, and offshore setups. Our experts handle trade name registration, legal documentation, licensing approvals, and government liaison. We ensure a seamless and compliant business setup process that supports long-term growth and expansion.",
        "points" => [
            "Company Formation",
            "UAE Mainland Company",
            "UAE Free Zone Company",
            "Offshore Company Setup",
            "Trade License & Approvals"
        ]
    ],

    "mainland" => [
        "title" => "UAE Mainland Company",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Set up your business in the UAE mainland with full flexibility to operate anywhere in the country. We handle licensing, approvals, and legal procedures to ensure a smooth and compliant setup process.",
        "points" => [
            "DED License Approval",
            "Local Sponsorship Assistance",
            "Office Setup Support",
            "Full UAE Market Access"
        ]
    ],

    "freezone" => [
        "title" => "UAE Free Zone Company",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Start your business in UAE free zones with 100% foreign ownership, tax advantages, and simplified procedures. We help you select the right free zone and complete the entire setup efficiently.",
        "points" => [
            "100% Foreign Ownership",
            "Tax Benefits",
            "Quick Company Registration",
            "Multiple Free Zone Options"
        ]
    ],

    "visa" => [
        "title" => "Visa Services",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide complete visa services in the UAE including employment visas, investor visas, and family sponsorship. Our team ensures fast processing and full compliance with immigration laws.",
        "points" => [
            "Employment Visa Processing",
            "Investor Visa Services",
            "Family Sponsorship",
            "Golden Visa Assistance"
        ]
    ],

    "drug" => [
        "title" => "Drug Store License",
        "image" => "assets/images/service/s3.jpg",
        "desc"  => "We assist businesses in obtaining drug store and pharmacy licenses in the UAE. Our experts manage approvals, documentation, and regulatory compliance with health authorities.",
        "points" => [
            "Drug Store License Approval",
            "Pharmacy Setup Guidance",
            "Regulatory Compliance",
            "Health Authority Documentation"
        ]
    ]

];

$current = $services[$service] ?? $services['business'];

/* ================= POINT LINK MAP ================= */
$linkMap = [
    "Company Formation" => "business",
    "UAE Mainland Company" => "mainland",
    "UAE Free Zone Company" => "freezone",
    "Offshore Company Setup" => "business",
    "Trade License & Approvals" => "business"
];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- PAGE HEADER -->
<?php $banner = $current['image']; ?>

<div style="
    background: url('<?php echo $banner; ?>') center/cover no-repeat;
    padding: 80px 0;
    text-align: center;
    color: #fff;
    position: relative;
">
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

            <img src="<?php echo $current['image']; ?>" 
                 alt="<?php echo $current['title']; ?>"
                 style="width:100%; border-radius:10px; margin-bottom:25px;">

            <h2 style="font-size:28px; margin-bottom:15px;">
                <?php echo $current['title']; ?>
            </h2>

            <p style="color:#666; line-height:1.7;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- CLICKABLE POINTS -->
            <ul style="margin-top:20px; padding-left:0; list-style:none;">

                <?php foreach($current['points'] as $point): 
                    $link = $linkMap[$point] ?? null;
                ?>

                    <li style="margin-bottom:10px;">
                        ✔ 
                        <?php if($link): ?>
                            <a href="?service=<?php echo $link; ?>"
                               style="text-decoration:none; color:#0077b5; font-weight:500;">
                                <?php echo $point; ?>
                            </a>
                        <?php else: ?>
                            <?php echo $point; ?>
                        <?php endif; ?>
                    </li>

                <?php endforeach; ?>

            </ul>

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

                            <a href="?service=<?php echo $key; ?>"
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