<?php
$blog = $_GET['blog'] ?? 'growth';

/* ================= BLOG DATA ================= */
$blogs = [

    "growth" => [
        "title" => "Top Strategies for Business Growth in UAE",
        "image" => "assets/img/blog/33.jpg",
        "category" => "UAE Business Insights",
        "desc" => "Scaling a business in the UAE requires strategic planning, compliance, and smart financial management.",
        "content" => "
            <p>The UAE is one of the fastest-growing business hubs in the world. To succeed, companies must adopt modern strategies that align with market trends.</p>

            <p><strong>Key Growth Strategies:</strong></p>
            <ul>
                <li>Strong financial planning and budgeting</li>
                <li>Market expansion and diversification</li>
                <li>Compliance with UAE regulations</li>
                <li>Digital transformation and automation</li>
            </ul>

            <p>By focusing on these areas, businesses can achieve sustainable growth and long-term success.</p>
        "
    ],

    "setup" => [
        "title" => "Simplifying Business Setup in UAE",
        "image" => "assets/img/blog/11.jpg",
        "category" => "Company Formation Guide",
        "desc" => "Starting a business in UAE is easier when you understand the process and choose the right structure.",
        "content" => "
            <p>Setting up a business in UAE involves several key steps, including choosing between mainland and freezone options.</p>

            <p><strong>Main Steps:</strong></p>
            <ul>
                <li>Select business activity</li>
                <li>Choose company structure</li>
                <li>Register trade name</li>
                <li>Obtain license</li>
            </ul>

            <p>With expert guidance, the entire process becomes smooth and hassle-free.</p>
        "
    ],

    "itpro" => [
        "title" => "Optimizing IT & PRO Services for Businesses",
        "image" => "assets/img/blog/22.jpg",
        "category" => "Digital & PRO Solutions",
        "desc" => "Efficient IT infrastructure and PRO services are essential for smooth business operations.",
        "content" => "
            <p>Businesses in UAE rely heavily on IT and PRO services for efficiency and compliance.</p>

            <p><strong>Key Benefits:</strong></p>
            <ul>
                <li>Automated workflows</li>
                <li>Faster government approvals</li>
                <li>Secure IT systems</li>
                <li>Reduced operational costs</li>
            </ul>

            <p>Combining IT and PRO services ensures seamless business management.</p>
        "
    ]

];

/* ================= CURRENT BLOG ================= */
$current = $blogs[$blog] ?? $blogs['growth'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/topbar.php'; ?>
<?php include 'include/navbar.php'; ?>

<!-- PAGE HEADER -->
<?php
$banner = $current['image'] ?? 'assets/img/blog/default.jpg';
?>

<!-- PAGE HEADER -->
<div style="
    background: url('<?php echo $banner; ?>') center/cover no-repeat;
    padding: 90px 0;
    text-align: center;
    color: #fff;
    position: relative;
">

    <!-- overlay -->
    <div style="
        position:absolute;
        top:0; left:0;
        width:100%; height:100%;
        background:rgba(0,0,0,0.55);
    "></div>

    <!-- TITLE -->
    <h1 style="
        margin:0;
        font-size:34px;
        color:#fff;
        position:relative;
        z-index:1;
        text-shadow:0 2px 8px rgba(0,0,0,0.6);
    ">
        <?php echo $current['title']; ?>
    </h1>

    <!-- CATEGORY -->
    <p style="
        margin-top:10px;
        color:#fff;
        position:relative;
        z-index:1;
        font-size:16px;
        opacity:0.9;
    ">
        <?php echo $current['category']; ?>
    </p>

</div>

<!-- MAIN CONTENT -->
<div style="padding:60px 0; background:#f9f9f9;">
    <div style="width:90%; max-width:1200px; margin:auto; display:flex; gap:40px; flex-wrap:wrap;">

        <!-- BLOG CONTENT -->
        <div style="flex:2; min-width:300px;">

            <!-- IMAGE -->
            <img src="<?php echo $current['image']; ?>" 
                 style="width:100%; border-radius:10px; margin-bottom:20px;">

            <!-- DESCRIPTION -->
            <p style="font-size:16px; color:#444; line-height:1.8;">
                <?php echo $current['desc']; ?>
            </p>

            <!-- FULL CONTENT -->
            <div style="margin-top:20px; color:#666; line-height:1.8;">
                <?php echo $current['content']; ?>
            </div>

        </div>

        <!-- SIDEBAR -->
        <div style="flex:1; min-width:250px;">

            <!-- LATEST BLOGS -->
            <div style="background:#fff; padding:20px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">

                <h3 style="margin-bottom:15px;">Latest Blogs</h3>

                <ul style="list-style:none; padding:0; margin:0;">

                    <?php foreach($blogs as $key => $item): ?>
                        <li style="margin-bottom:15px; border-bottom:1px solid #eee; padding-bottom:10px;">

                            <a href="blog-single.php?blog=<?php echo $key; ?>" 
                               style="text-decoration:none; color:#0077b5; font-weight:600;">
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