<?php include 'include/header.php'; ?> 
<?php include 'include/navbar-advisory.php'; ?>

<?php
$banner = "assets/images/service/advisory.jpg";
?>

<style>
body{
    background:#f5f7fb;
    font-family:'Segoe UI', sans-serif;
}

/* HERO */
.advisory-hero{
    background:url('<?php echo $banner; ?>') center center/cover no-repeat;
    position:relative;
    padding:120px 0;
    text-align:center;
}

.advisory-hero::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(135deg,rgba(0,0,0,0.75),rgba(0,119,181,0.75));
}

.advisory-hero-content{position:relative;z-index:2;}

.advisory-hero h1{
    color:#fff;
    font-size:52px;
    font-weight:700;
}

.advisory-hero p{
    color:#eee;
    font-size:18px;
    max-width:850px;
    margin:auto;
}

/* WRAPPER */
.advisory-wrapper{
    width:90%;
    max-width:1250px;
    margin:auto;
    padding:80px 0;
}

/* GRID */
.services-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:30px;
}

/* CARD */
.service-card{
    background:#fff;
    padding:35px;
    border-radius:18px;
    box-shadow:0 8px 25px rgba(0,0,0,0.05);
    border:1px solid #eee;
    position:relative;
}

.service-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:5px;
    background:#0077b5;
}

.service-card h3{
    font-size:22px;
    margin-bottom:15px;
}

.service-card ul{
    padding-left:18px;
    color:#444;
    line-height:1.7;
    list-style-type: disc !important;
}
.service-card ul li::marker {
    color: #0077b5;
}
</style>

<!-- HERO -->
<section class="advisory-hero">
    <div class="advisory-hero-content">
        <h1>Business & Corporate Solutions</h1>
        <p>Strategic financial, operational, and digital transformation consultancy for modern businesses.</p>
    </div>
</section>

<div class="advisory-wrapper">

    <div class="services-grid">

        <div class="service-card">
            <h3>Financial Consultancy</h3>
            <ul>
                <li>Financial planning & forecasting</li>
                <li>Investment advisory</li>
                <li>Cash flow optimization</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Capital Budgeting</h3>
            <ul>
                <li>NPV & IRR analysis</li>
                <li>DCF modeling</li>
                <li>Feasibility studies</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Business Coaching</h3>
            <ul>
                <li>Startup consultancy</li>
                <li>Growth strategy</li>
                <li>Entrepreneur mentoring</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Audit & Risk</h3>
            <ul>
                <li>Internal audits</li>
                <li>Compliance advisory</li>
                <li>Risk assessment</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Digital Transformation</h3>
            <ul>
                <li>ERP systems</li>
                <li>Cloud solutions</li>
                <li>Automation tools</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>UAE Business Support</h3>
            <ul>
                <li>Company formation</li>
                <li>Trade licensing</li>
                <li>PRO services</li>
            </ul>
        </div>

    </div>
</div>

<?php include 'include/footer-advisory.php'; ?>
<?php include 'include/whatsapp-widget.php'; ?>
<?php include 'include/bottom.php'; ?>