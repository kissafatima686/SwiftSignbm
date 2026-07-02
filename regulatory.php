<?php
$service = isset($_GET['service']) ? strtolower($_GET['service']) : 'dedmainland';

/* ================= REGULATORY SERVICES ================= */
$services = [

    "dedmainland" => [
        "title" => "DED – Mainland",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Department of Economic Development (DED – Mainland) handles business licensing and regulatory approvals for companies operating within the UAE mainland."
    ],

    "dedfreezone" => [
        "title" => "DED – Free Zones",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "DED – Free Zones supports company registration and licensing within UAE free zones, offering business-friendly regulations and benefits."
    ],

    "mohre" => [
        "title" => "MOHRE",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Ministry of Human Resources & Emiratisation (MOHRE) governs labor laws, employment regulations, and workforce management in the UAE."
    ],

    "mohap" => [
        "title" => "MOHAP",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Ministry of Health & Prevention (MOHAP) regulates healthcare services, medical licensing, and pharmaceutical approvals in the UAE."
    ],

    "doh" => [
        "title" => "DOH",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Department of Health – Abu Dhabi (DOH) oversees healthcare licensing, compliance, and regulations within Abu Dhabi."
    ],

    "fanr" => [
        "title" => "FANR",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Federal Authority for Nuclear Regulation (FANR) supervises nuclear safety, radiation protection, and regulatory compliance."
    ],

    "esma" => [
        "title" => "ESMA",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Emirates Authority for Standardization and Metrology (ESMA) sets product standards, quality assurance, and certification regulations."
    ],

    "moi" => [
        "title" => "MOI",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Ministry of Interior (MOI) handles security regulations, civil services, and internal affairs compliance."
    ],

    "dcd" => [
        "title" => "DCD",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Dubai Civil Defense (DCD) ensures fire safety compliance, risk management, and safety approvals."
    ],

    "dgr" => [
        "title" => "DCD – DGR",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Dangerous Goods Regulation (DGR) ensures safe handling, storage, and transportation of hazardous materials."
    ],

    "drap" => [
        "title" => "DRAP",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Drug Regulatory Authority of Pakistan (DRAP) regulates pharmaceutical products, licensing, and compliance in Pakistan."
    ],

    "ppc" => [
        "title" => "PPC",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Pakistan Pharmacy Council (PPC) oversees pharmacy education, licensing, and professional standards."
    ],

];

$current = $services[$service] ?? $services['dedmainland'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- HEADER -->
<div style="background:url('<?php echo $current['image']; ?>') center/cover no-repeat; padding:80px 0; text-align:center; color:#fff; position:relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5);"></div>

    <h1 style="position:relative; z-index:1; font-size:36px;">
        Regulatory Services
    </h1>
</div>

<!-- CONTENT -->
<div style="padding:60px 0; background:#f9f9f9;">
    <div style="width:90%; max-width:1200px; margin:auto; display:flex; gap:30px; flex-wrap:wrap;">

        <!-- MAIN CONTENT -->
        <div style="flex:3; min-width:300px;">

            <img src="<?php echo $current['image']; ?>" style="width:100%; border-radius:10px; margin-bottom:20px;">

            <h2><?php echo $current['title']; ?></h2>

            <!-- MAIN DESCRIPTION -->
            <p style="color:#666; line-height:1.8;">
                Swift Sign Business Management provides expert assistance in navigating the UAE’s regulatory landscape. We ensure seamless approvals, compliance, and documentation with local authorities, enabling businesses to operate in accordance with national regulations.
            </p>

            <!-- CURRENT SERVICE DESC -->
            <p style="color:#444; line-height:1.8; margin-top:15px;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- FULL LIST -->
            <ul style="margin-top:25px; line-height:1.8;">
                <li>DED – Mainland (Department of Economic Development)</li>
                <li>DED – Free Zones (Department of Economic Development)</li>
                <li>MOHRE (Ministry of Human Resources & Emiratisation)</li>
                <li>MOHAP (Ministry of Health & Prevention)</li>
                <li>DOH (Department of Health – Abu Dhabi)</li>
                <li>FANR (Federal Authority for Nuclear Regulation)</li>
                <li>ESMA (Emirates Authority for Standardization and Metrology)</li>
                <li>MOI (Ministry of Interior)</li>
                <li>DCD (Dubai Civil Defense)</li>
                <li>DCD – DGR (Dangerous Goods Regulation)</li>
                <li>DRAP (Drug Regulatory Authority of Pakistan)</li>
                <li>PPC (Pakistan Pharmacy Council)</li>
            </ul>

            <a href="contact.php" style="display:inline-block; margin-top:25px; padding:12px 25px; background:#0077b5; color:#fff; border-radius:25px; text-decoration:none;">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3>Local Regulatory Services</h3>

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