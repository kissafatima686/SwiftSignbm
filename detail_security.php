<?php
$service = isset($_GET['service']) ? strtolower($_GET['service']) : 'auth';

/* ================= SYSTEM SECURITY SERVICES ================= */
$services = [

    "auth" => [
        "title" => "Two-Factor Authentication (2FA)",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We implement multiple authentication methods to securely verify user identity and prevent unauthorized access to systems and applications."
    ],

    "cloud" => [
        "title" => "Secure Cloud Storage & Backup",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide secure cloud storage solutions with automated backup systems to ensure data safety, integrity, and quick recovery in case of failure."
    ],

    "vulnerability" => [
        "title" => "Vulnerability Prevention",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We proactively identify and eliminate system vulnerabilities through advanced security assessments, monitoring, and preventive controls."
    ],

    "systemsecurity" => [
        "title" => "System Security",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Swift Sign Business Management provides advanced system security solutions designed to safeguard digital assets, ensure business continuity, and protect organizations from evolving cyber threats."
    ],

];

$current = $services[$service] ?? $services['auth'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- HEADER -->
<div style="background:url('<?php echo $current['image']; ?>') center/cover no-repeat; padding:80px 0; text-align:center; color:#fff; position:relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5);"></div>

    <h1 style="position:relative; z-index:1; font-size:36px;">
        System Security
    </h1>
</div>

<!-- CONTENT -->
<div style="padding:60px 0; background:#f9f9f9;">
    <div style="width:90%; max-width:1200px; margin:auto; display:flex; gap:30px; flex-wrap:wrap;">

        <!-- MAIN -->
        <div style="flex:3; min-width:300px;">

            <img src="<?php echo $current['image']; ?>" style="width:100%; border-radius:10px; margin-bottom:20px;">

            <h2><?php echo $current['title']; ?></h2>

            <!-- INTRO -->
            <p style="color:#666; line-height:1.8;">
                Swift Sign Business Management provides advanced system security solutions designed to safeguard digital assets, ensure business continuity, and protect organizations from evolving cyber threats.
            </p>

            <!-- SERVICE DESCRIPTION -->
            <p style="color:#444; line-height:1.8; margin-top:15px;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- FULL LIST -->
            <ul style="margin-top:25px; line-height:1.8;">
                <li><strong>Multi-Factor Authentication (2FA):</strong> Secure login with multiple identity verification methods.</li>
                <li><strong>Secure Cloud Storage:</strong> Encrypted backup and cloud-based data protection systems.</li>
                <li><strong>System Security:</strong> Protection against cyber threats, malware, and unauthorized access.</li>
                <li><strong>Vulnerability Prevention:</strong> Continuous monitoring and proactive security risk mitigation.</li>
            </ul>

            <a href="contact.php" style="display:inline-block; margin-top:25px; padding:12px 25px; background:#0077b5; color:#fff; border-radius:25px; text-decoration:none;">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3>Security Services</h3>

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