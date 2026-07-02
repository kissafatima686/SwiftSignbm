<?php
$service = isset($_GET['service']) ? strtolower($_GET['service']) : 'newvisa';

/* ================= VISA SERVICES ================= */
$services = [

    "newvisa" => [
        "title" => "New Visa",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Swift Sign Business Management provides comprehensive PRO and Visa Services in the UAE, ensuring seamless interaction with government authorities and full compliance with immigration and labor regulations.

We facilitate new visas for investors, employees, and dependents."
    ],

    "renewal" => [
        "title" => "Renewal of Visa",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Our visa renewal services ensure legal residency and uninterrupted business operations. We handle documentation and approvals efficiently."
    ],

    "residence" => [
        "title" => "Residence Visa",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide complete support for obtaining UAE residence visas, ensuring smooth processing and compliance."
    ],

    "family" => [
        "title" => "Family Visa",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "Our Family Visa services allow UAE residents to sponsor their loved ones with ease and full legal compliance."
    ],

    "partner" => [
        "title" => "Partner Visa",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide expert guidance in securing Partner Visas for investors and business partners in the UAE."
    ],

];

$current = $services[$service] ?? $services['newvisa'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- HEADER -->
<div style="background:url('<?php echo $current['image']; ?>') center/cover no-repeat; padding:80px 0; text-align:center; color:#fff; position:relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5);"></div>

    <h1 style="position:relative; z-index:1; font-size:36px;">
        PRO & VISA Services
    </h1>
</div>

<!-- CONTENT -->
<div style="padding:60px 0; background:#f9f9f9;">
    <div style="width:90%; max-width:1200px; margin:auto; display:flex; gap:30px; flex-wrap:wrap;">

        <!-- MAIN CONTENT -->
        <div style="flex:3; min-width:300px;">

            <img src="<?php echo $current['image']; ?>" style="width:100%; border-radius:10px; margin-bottom:20px;">

            <h2><?php echo $current['title']; ?></h2>

            <p style="color:#666; line-height:1.8; white-space:pre-line;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- STATIC LIST (FULL SERVICES INFO) -->
            <ul style="margin-top:25px; line-height:1.8;">
                <li><strong>New Visa:</strong> We facilitate visas for investors, employees, and dependents.</li>
                <li><strong>Renewal of Visa:</strong> Ensuring continuous legal residency.</li>
                <li><strong>Residence Visa:</strong> Full support for UAE residency.</li>
                <li><strong>Family Visa:</strong> Sponsor your family easily.</li>
                <li><strong>Partner Visa:</strong> For investors and business partners.</li>
            </ul>

            <a href="contact.php" style="display:inline-block; margin-top:25px; padding:12px 25px; background:#0077b5; color:#fff; border-radius:25px; text-decoration:none;">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3>VISA Services</h3>

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