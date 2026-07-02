<?php
$service = isset($_GET['service']) ? strtolower($_GET['service']) : 'bank';

/* ================= OTHER SERVICES ================= */
$services = [

    "bank" => [
        "title" => "Bank Account Opening",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide complete assistance in opening corporate and personal bank accounts in the UAE. Our team ensures smooth documentation, bank coordination, and quick approvals."
    ],

    "cctv" => [
        "title" => "CCTV & Biometric Solutions",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Enhance your business security and operational control with our advanced CCTV and biometric solutions, tailored to meet regulatory and safety requirements."
    ],

    "audit" => [
        "title" => "Company Auditing",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Ensure financial transparency and regulatory compliance with our professional auditing services designed for businesses across various sectors."
    ],

];

$current = $services[$service] ?? $services['bank'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- HEADER -->
<div style="background:url('<?php echo $current['image']; ?>') center/cover no-repeat; padding:80px 0; text-align:center; color:#fff; position:relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5);"></div>

    <h1 style="position:relative; z-index:1; font-size:36px;">
        Other Services
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
                Swift Sign Business Management offers a range of value-added support services designed to enhance operational efficiency, strengthen security, and ensure financial transparency.
            </p>

            <!-- CURRENT SERVICE -->
            <p style="color:#444; line-height:1.8; margin-top:15px;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- FULL LIST -->
            <ul style="margin-top:25px; line-height:1.8;">
                <li><strong>Bank Account Opening:</strong> Assistance for corporate and personal accounts in UAE.</li>
                <li><strong>CCTV & Biometric Solutions:</strong> Advanced systems for security and monitoring.</li>
                <li><strong>Company Auditing:</strong> Ensure compliance and financial integrity.</li>
            </ul>

            <a href="contact.php" style="display:inline-block; margin-top:25px; padding:12px 25px; background:#0077b5; color:#fff; border-radius:25px; text-decoration:none;">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3>Other Services</h3>

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