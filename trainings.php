<?php
$service = isset($_GET['service']) ? strtolower($_GET['service']) : 'dgr';

/* ================= REGULATORY COMPLIANCE SERVICES ================= */
$services = [

    "dgr" => [
        "title" => "DGR (Dangerous Goods Regulations)",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide complete support for Dangerous Goods Regulations (DGR), ensuring safe handling, storage, and transportation of hazardous materials in compliance with international standards."
    ],

    "gwdp" => [
        "title" => "GWDP (Good Warehousing and Distribution Practices)",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Our GWDP services ensure proper warehousing, storage, and distribution of pharmaceutical and regulated products while maintaining quality and compliance."
    ],

    "registration" => [
        "title" => "Pharmaceutical Product Registration",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We assist in registering pharmaceutical products with regulatory authorities, ensuring full compliance with documentation and approval requirements."
    ],

    "classification" => [
        "title" => "Pharmaceutical Product Classification",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide expert guidance on proper classification of pharmaceutical products based on regulatory frameworks and compliance standards."
    ],

    "importexport" => [
        "title" => "Import / Export Permits Approval",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We facilitate import and export permits approval for regulated goods, ensuring smooth cross-border trade and compliance."
    ],

    "hse" => [
        "title" => "HSE (Health, Safety, and Environment)",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Our HSE services ensure workplace safety, environmental protection, and compliance with health and safety regulations."
    ],

    "fanr" => [
        "title" => "FANR (Federal Authority for Nuclear Regulation)",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We assist with FANR compliance, ensuring adherence to nuclear safety and radiation protection regulations."
    ],

    "ccm" => [
        "title" => "CCM (Cold Chain Management)",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide Cold Chain Management solutions to maintain temperature-sensitive products throughout storage and transportation."
    ],

    "cccm" => [
        "title" => "CCCM (Certified Cold Chain Management)",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Our CCCM services ensure certified cold chain compliance for pharmaceuticals and healthcare products."
    ],

    "drap" => [
        "title" => "DRAP Registration",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We assist with DRAP registration for pharmaceutical products, ensuring compliance with Pakistan regulatory standards."
    ],

];

$current = $services[$service] ?? $services['dgr'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- HEADER -->
<div style="background:url('<?php echo $current['image']; ?>') center/cover no-repeat; padding:80px 0; text-align:center; color:#fff; position:relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5);"></div>

    <h1 style="position:relative; z-index:1; font-size:36px;">
        Regulatory Compliance Services
    </h1>
</div>

<!-- CONTENT -->
<div style="padding:60px 0; background:#f9f9f9;">
    <div style="width:90%; max-width:1200px; margin:auto; display:flex; gap:30px; flex-wrap:wrap;">

        <!-- MAIN -->
        <div style="flex:3; min-width:300px;">

            <img src="<?php echo $current['image']; ?>" style="width:100%; border-radius:10px; margin-bottom:20px;">

            <h2><?php echo $current['title']; ?></h2>

            <!-- MAIN DESCRIPTION -->
            <p style="color:#666; line-height:1.8;">
                Swift Sign Business Management provides expert regulatory compliance services across UAE and international markets. We ensure smooth approvals, documentation, and adherence to industry standards, enabling businesses to operate efficiently and legally.
            </p>

            <!-- CURRENT SERVICE -->
            <p style="color:#444; line-height:1.8; margin-top:15px;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- FULL LIST -->
            <ul style="margin-top:25px; line-height:1.8;">
                <li>DGR (Dangerous Goods Regulations)</li>
                <li>GWDP (Good Warehousing and Distribution Practices)</li>
                <li>Pharmaceutical Product Registration</li>
                <li>Pharmaceutical Product Classification</li>
                <li>Import / Export Permits Approval</li>
                <li>HSE (Health, Safety, and Environment)</li>
                <li>FANR (Federal Authority for Nuclear Regulation)</li>
                <li>CCM (Cold Chain Management)</li>
                <li>CCCM (Certified Cold Chain Management)</li>
                <li>DRAP Registration (Drug Regulatory Authority of Pakistan)</li>
            </ul>

            <a href="contact.php" style="display:inline-block; margin-top:25px; padding:12px 25px; background:#0077b5; color:#fff; border-radius:25px; text-decoration:none;">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3>Regulatory Services</h3>

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