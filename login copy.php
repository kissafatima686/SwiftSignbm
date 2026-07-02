<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modern Login</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    height:100vh;
    display:flex;
    background:linear-gradient(135deg,#667eea,#764ba2);
}

/* LEFT SIDE */
.left{
    flex:1;
    color:#fff;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    padding:40px;
}

.left h1{
    font-size:40px;
    margin-bottom:15px;
}

.left p{
    max-width:400px;
    text-align:center;
    opacity:0.9;
}

/* RIGHT SIDE */
.right{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

/* GLASS CARD */
.login-card{
    width:100%;
    max-width:380px;
    padding:30px;
    border-radius:20px;
    backdrop-filter:blur(15px);
    background:rgba(255,255,255,0.1);
    border:1px solid rgba(255,255,255,0.2);
    color:#fff;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
    animation:fadeIn 0.8s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}

.login-card h2{
    text-align:center;
    margin-bottom:20px;
}

/* INPUT */
.input-group{
    margin-bottom:18px;
}

.input-group input{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    outline:none;
    background:rgba(255,255,255,0.2);
    color:#fff;
}

.input-group input::placeholder{
    color:#ddd;
}

/* BUTTON */
.btn{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    background:#fff;
    color:#333;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    transform:translateY(-2px);
    background:#f1f1f1;
}

/* EXTRA */
.extra{
    text-align:center;
    margin-top:15px;
    font-size:14px;
}

.extra a{
    color:#fff;
    text-decoration:underline;
}

/* RESPONSIVE */
@media(max-width:900px){
    body{
        flex-direction:column;
    }
    .left{
        display:none;
    }
}
</style>
</head>

<body>

<div class="left">
    <h1>Welcome Back 👋</h1>
    <p>Login to access your dashboard, manage projects, and control your system easily.</p>
</div>

<div class="right">
    <div class="login-card">
        <h2>Login</h2>

        <form action="login.php" method="POST">
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button class="btn">Sign In</button>
        </form>

        <div class="extra">
            <p>Forgot Password? <a href="#">Reset</a></p>
        </div>
    </div>
</div>

</body>
</html>