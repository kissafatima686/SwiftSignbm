<?php
$service = isset($_GET['service']) ? strtolower($_GET['service']) : 'business';

/* ================= SERVICES DATA ================= */
$services = [

    "business" => [
        "title" => "Company Formation",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "SSBM provides end-to-end services, from initial consultation to final approval of the license. Our team of specialists assists with amendments, renewals, and ensures full compliance with regulatory and industry standards.",
        "points" => [
            "Commercial Trade License",
            "Drug Store License",
            "Pharmacies License",
            "Industrial Trade License",
            "Warehousing License",
            "Professional Trade License",
            "Professional License",
            "Pharmacist Dataflow and License Process",
            "PSV Support (MOHP, DOH, SLE, Qatar Prometric)"
        ]
    ],

    "commercial" => [
        "title" => "Commercial Trade License",
        "image" => "assets/images/service/s4.jpg",
        "desc"  => "We assist businesses in obtaining commercial trade licenses in the UAE for trading activities.",
        "points" => ["License Approval", "Documentation", "Renewal Support"]
    ],

    "drug" => [
        "title" => "Drug Store License",
        "image" => "assets/images/service/s3.jpg",
        "desc"  => "We assist businesses in obtaining drug store and pharmacy licenses in the UAE with full regulatory compliance.",
        "points" => ["Drug Store Approval", "MOH Compliance", "Inspection Support"]
    ],

    "pharmacy" => [
        "title" => "Pharmacies License",
        "image" => "assets/images/service/s5.jpg",
        "desc"  => "Complete assistance for pharmacy licensing, approvals, and regulatory compliance.",
        "points" => ["Pharmacy Setup", "MOH Approval", "Compliance"]
    ],

    "industrial" => [
        "title" => "Industrial Trade License",
        "image" => "assets/images/service/s6.jpg",
        "desc"  => "Support for industrial license approvals including manufacturing and production units.",
        "points" => ["Factory Setup", "Industrial Approval"]
    ],

    "warehouse" => [
        "title" => "Warehousing License",
        "image" => "assets/images/service/s7.jpg",
        "desc"  => "Get approvals for warehouse operations including storage and logistics.",
        "points" => ["Storage License", "Logistics Approval"]
    ],

    "professional" => [
        "title" => "Professional Trade License",
        "image" => "assets/images/service/s8.jpg",
        "desc"  => "Professional licensing for service-based businesses and individuals.",
        "points" => ["Consultancy License", "Service License"]
    ],

    "pharmacist" => [
        "title" => "Pharmacist Dataflow and License Process",
        "image" => "assets/images/service/s9.jpg",
        "desc"  => "We provide dataflow verification and licensing support for pharmacists.",
        "points" => ["Dataflow", "Verification", "License Process"]
    ],

    "psv" => [
        "title" => "PSV Support (MOHP, DOH, SLE, Qatar Prometric)",
        "image" => "assets/images/service/s10.jpg",
        "desc"  => "Complete PSV support for healthcare professionals across UAE and Qatar.",
        "points" => ["MOHP", "DOH", "SLE", "Qatar Prometric"]
    ],
];

$current = $services[$service] ?? $services['business'];

/* ================= LINK MAP ================= */
$linkMap = [
    "Commercial Trade License" => "commercial",
    "Drug Store License" => "drug",
    "Pharmacies License" => "pharmacy",
    "Industrial Trade License" => "industrial",
    "Warehousing License" => "warehouse",
    "Professional Trade License" => "professional",
    "Professional License" => "professional",
    "Pharmacist Dataflow and License Process" => "pharmacist",
    "PSV Support (MOHP, DOH, SLE, Qatar Prometric)" => "psv"
];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- PAGE HEADER -->
<div style="background:url('<?php echo $current['image']; ?>') center/cover no-repeat; padding:80px 0; text-align:center; color:#fff; position:relative;">
    <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5);"></div>

    <h1 style="position:relative; z-index:1; font-size:36px;">
        <?php echo $current['title']; ?>
    </h1>
</div>

<!-- CONTENT -->
<div style="padding:60px 0; background:#f9f9f9;">
    <div style="width:90%; max-width:1200px; margin:auto; display:flex; gap:30px; flex-wrap:wrap;">

        <!-- MAIN -->
        <div style="flex:3; min-width:300px;">

            <img src="<?php echo $current['image']; ?>" style="width:100%; border-radius:10px; margin-bottom:20px;">

            <h2><?php echo $current['title']; ?></h2>

            <p style="color:#666; line-height:1.7;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- POINTS -->
            <ul style="list-style:none; padding:0; margin-top:20px;">
                <?php foreach($current['points'] as $point): 
                    $link = $linkMap[$point] ?? null;
                ?>
                    <li style="margin-bottom:10px;">
                        ✔
                        <?php if($link): ?>
                            <a href="?service=<?php echo $link; ?>" style="color:#0077b5; text-decoration:none;">
                                <?php echo $point; ?>
                            </a>
                        <?php else: ?>
                            <?php echo $point; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <a href="contact.php" style="display:inline-block; margin-top:20px; padding:12px 25px; background:#0077b5; color:#fff; border-radius:25px; text-decoration:none;">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3>Our Services</h3>

                <ul style="list-style:none; padding:0; margin-top:15px;">
                    <?php foreach($services as $key => $item): ?>
                        <li style="margin-bottom:10px;">
                            <a href="?service=<?php echo $key; ?>"
                               style="display:block; padding:10px; border-radius:6px;
                               background:<?php echo ($service == $key) ? '#0077b5' : '#f1f1f1'; ?>;
                               color:<?php echo ($service == $key) ? '#fff' : '#333'; ?>;
                               text-decoration:none;">
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