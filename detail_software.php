<?php
$service = isset($_GET['service']) ? strtolower($_GET['service']) : 'content';

/* ================= BUSINESS MANAGEMENT SERVICES ================= */
$services = [

    "content" => [
        "title" => "Content Creation",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide professional content creation services including branding content, marketing copy, and business communication materials designed to strengthen your digital presence."
    ],

    "ads" => [
        "title" => "Advertisements",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We design and manage impactful advertising campaigns across digital and traditional platforms to maximize reach, engagement, and conversions."
    ],

    "static" => [
        "title" => "Static Web Platform Development",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We develop responsive and modern static websites that are fast, secure, and optimized for performance and SEO."
    ],

    "dynamic" => [
        "title" => "Dynamic Web Platform Development",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We build dynamic web platforms with advanced functionality, database integration, and scalable architecture for growing businesses."
    ],

    "dashboard" => [
        "title" => "Insight Dashboard Creation",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We create powerful business intelligence dashboards that transform raw data into actionable insights for better decision-making."
    ],

    "mobile" => [
        "title" => "Mobile App Development",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We design and develop high-performance mobile applications for Android and iOS with modern UI/UX and scalable architecture."
    ],

    "software" => [
        "title" => "Business Management Software Development",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We develop customized business management software integrating finance, HR, CRM, inventory, and reporting systems tailored to your business needs."
    ],

    "operations" => [
        "title" => "End-to-End Operation Management",
        "image" => "assets/images/service/s2.jpg",
        "desc"  => "We provide complete operational management services including workflow optimization, automation, monitoring, and performance improvement."
    ],

];

$current = $services[$service] ?? $services['content'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- HEADER -->
<div style="background:url('<?php echo $current['image']; ?>') center/cover no-repeat; padding:80px 0; text-align:center; color:#fff; position:relative;">
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.5);"></div>

    <h1 style="position:relative; z-index:1; font-size:36px;">
        Business Management System
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
                Swift Sign Business Management provides innovative and scalable business management solutions designed to enhance efficiency, streamline operations, and support sustainable growth. Our integrated approach combines advanced software development with strategic operational support.
            </p>

            <!-- SERVICE DESCRIPTION -->
            <p style="color:#444; line-height:1.8; margin-top:15px;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- FULL LIST -->
            <ul style="margin-top:25px; line-height:1.8;">
                <li><strong>Content Creation:</strong> Branding, marketing, and business content solutions.</li>
                <li><strong>Advertisements:</strong> Digital and traditional advertising campaigns.</li>
                <li><strong>Static Web Platform:</strong> Fast and SEO-optimized website development.</li>
                <li><strong>Dynamic Web Platform:</strong> Advanced web applications with backend systems.</li>
                <li><strong>Insight Dashboard:</strong> Data analytics and reporting dashboards.</li>
                <li><strong>Mobile App Development:</strong> Android and iOS application solutions.</li>
                <li><strong>Business Management Software:</strong> CRM, HR, finance, and inventory systems.</li>
                <li><strong>Operations Management:</strong> End-to-end workflow and process optimization.</li>
            </ul>

            <a href="contact.php" style="display:inline-block; margin-top:25px; padding:12px 25px; background:#0077b5; color:#fff; border-radius:25px; text-decoration:none;">
                Get Started
            </a>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:260px;">

            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3>Digital Services</h3>

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