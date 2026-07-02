<?php include 'include/header.php'; ?> 
<?php include 'include/navbar-advisory.php'; ?>

<?php
$banner = "assets/images/service/academic.jpg";
?>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#f5f7fb;
    font-family:'Segoe UI', sans-serif;
    overflow-x:hidden;
}

/* HERO */
.advisory-hero{
    background:url('<?php echo $banner; ?>') center center/cover no-repeat;
    position:relative;
    padding:120px 20px;
    text-align:center;
}

.advisory-hero::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(
        135deg,
        rgba(0,0,0,0.75),
        rgba(255,122,0,0.70)
    );
}

.advisory-hero-content{
    position:relative;
    z-index:2;
    width:100%;
    max-width:900px;
    margin:auto;
}

.advisory-hero h1{
    color:#fff;
    font-size:52px;
    font-weight:700;
    margin-bottom:18px;
    line-height:1.2;
}

.advisory-hero p{
    color:#eee;
    font-size:18px;
    max-width:850px;
    margin:auto;
    line-height:1.8;
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
    overflow:hidden;
    transition:0.3s ease;
    height:100%;
}

.service-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:5px;
    background:#ff7a00;
}

.service-card:hover{
    transform:translateY(-6px);
    box-shadow:0 15px 35px rgba(0,0,0,0.10);
}

.service-card h3{
    font-size:22px;
    margin-bottom:18px;
    color:#111;
    line-height:1.4;
}

.service-card ul{
    padding-left:20px;
    color:#444;
    line-height:1.8;
    margin:0;
    list-style-type: disc !important;
}
.service-card ul li::marker {
    color: #ff7a00;
}

.service-card ul li{
    margin-bottom:10px;
    word-break:break-word;
}

/* LARGE TABLETS */
@media(max-width:992px){

    .advisory-hero{
        padding:100px 20px;
    }

    .advisory-hero h1{
        font-size:44px;
    }

    .services-grid{
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    }
}

/* TABLETS */
@media(max-width:768px){

    .advisory-hero{
        padding:90px 20px;
    }

    .advisory-hero h1{
        font-size:36px;
    }

    .advisory-hero p{
        font-size:16px;
        line-height:1.7;
    }

    .advisory-wrapper{
        width:92%;
        padding:60px 0;
    }

    .services-grid{
        grid-template-columns:1fr;
        gap:25px;
    }

    .service-card{
        padding:28px;
    }

    .service-card h3{
        font-size:20px;
    }
}

/* MOBILE */
@media(max-width:576px){

    .advisory-hero{
        padding:80px 15px;
    }

    .advisory-hero h1{
        font-size:30px;
    }

    .advisory-hero p{
        font-size:15px;
    }

    .advisory-wrapper{
        width:94%;
        padding:50px 0;
    }

    .service-card{
        padding:24px 20px;
        border-radius:15px;
    }

    .service-card h3{
        font-size:19px;
    }

    .service-card ul{
        padding-left:18px;
    }

    .service-card ul li{
        font-size:15px;
        line-height:1.7;
    }
}

</style>

<!-- HERO -->
<section class="advisory-hero">

    <div class="advisory-hero-content">

        <h1>Research & Academic Solutions</h1>

        <p>
            Professional research support, thesis writing,
            data analysis, and publication assistance.
        </p>

    </div>

</section>

<!-- CONTENT -->
<div class="advisory-wrapper">

    <div class="services-grid">

        <div class="service-card">
            <h3>Research Consultancy</h3>

            <ul>
                <li>PhD / MS guidance</li>
                <li>Research methodology</li>
                <li>Framework design</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Thesis Writing</h3>

            <ul>
                <li>Editing & formatting</li>
                <li>APA / MLA styles</li>
                <li>Final submission support</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Journal Publication</h3>

            <ul>
                <li>Journal selection</li>
                <li>Submission support</li>
                <li>Reviewer response</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Data Analysis</h3>

            <ul>
                <li>SPSS / Stata / R</li>
                <li>Regression analysis</li>
                <li>Data visualization</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Literature Review</h3>

            <ul>
                <li>Systematic review</li>
                <li>Research gap analysis</li>
                <li>Bibliometric study</li>
            </ul>
        </div>

        <div class="service-card">
            <h3>Statistical Training</h3>

            <ul>
                <li>SPSS / AMOS</li>
                <li>SmartPLS</li>
                <li>Research analytics</li>
            </ul>
        </div>

    </div>

</div>

<?php include 'include/footer-advisory.php'; ?>
<?php include 'include/whatsapp-widget.php'; ?>
<?php include 'include/bottom.php'; ?>