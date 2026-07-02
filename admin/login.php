<?php
session_start();
include 'config/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM admins WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($query) > 0){

        $_SESSION['admin'] = $email;

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Invalid Login Credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="assets/css/style.css">
<style>
body{
font-family:Arial;
background:#f5f5f5;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}
.login-box{
width:400px;
background:#fff;
padding:30px;
border-radius:10px;
box-shadow:0 0 20px rgba(0,0,0,0.1);
}
input{
width:100%;
padding:12px;
margin-bottom:15px;
}
button{
width:100%;
padding:12px;
background:#0077b5;
color:#fff;
border:none;
}
</style>
</head>
<body>

<div class="login-box">

<h2>Admin Login</h2>

<?php if(isset($error)){ ?>
<p style="color:red;"><?php echo $error; ?></p>
<?php } ?>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>
