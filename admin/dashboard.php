<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="assets/css/style.css">
<style>

body{
margin:0;
font-family:Arial;
background:#f4f6f9;
}

.sidebar{
width:250px;
height:100vh;
background:#1f2937;
position:fixed;
left:0;
top:0;
padding-top:20px;
}

.sidebar a{
display:block;
padding:15px 20px;
color:#fff;
text-decoration:none;
}

.sidebar a:hover{
background:#374151;
}

.main{
margin-left:250px;
padding:30px;
}

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:20px;
}

.card{
background:#fff;
padding:25px;
border-radius:10px;
box-shadow:0 0 15px rgba(0,0,0,0.08);
}

</style>
</head>

<body>

<div class="sidebar">

<h2 style="color:#fff; text-align:center;">Swift Sign</h2>

<a href="dashboard.php">Dashboard</a>
<a href="services/index.php">Services</a>
<a href="blogs/index.php">Blogs</a>
<a href="sliders/index.php">Sliders</a>
<a href="portfolio/index.php">Portfolio</a>
<a href="testimonials/index.php">Testimonials</a>
<a href="skills/index.php">Skills</a>
<a href="settings/index.php">Settings</a>
<a href="logout.php">Logout</a>

</div>

<div class="main">

<h1>Admin Dashboard</h1>

<div class="cards">

<div class="card">
<h3>Services</h3>
<p>Manage all services</p>
</div>

<div class="card">
<h3>Blogs</h3>
<p>Manage all blogs</p>
</div>

<div class="card">
<h3>Testimonials</h3>
<p>Manage testimonials</p>
</div>

<div class="card">
<h3>Portfolio</h3>
<p>Manage portfolio</p>
</div>

</div>

</div>

</body>
</html>
