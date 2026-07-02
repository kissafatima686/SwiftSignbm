<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php session_start(); ?>
<div class="d-flex">
<div class="bg-dark text-white p-3" style="width:250px;height:100vh;">
<h4>BMS</h4>
<a href="/public/dashboard" class="text-white d-block">Dashboard</a>
<a href="/public/auth/logout" class="text-danger d-block mt-3">Logout</a>
</div>
<div class="p-4 w-100">
<h2>Welcome, <?= $_SESSION['name']; ?></h2>
</div>
</div>
</body>
</html>
