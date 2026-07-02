<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ultimate Login</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
:root{
    --bg1:#667eea;
    --bg2:#764ba2;
    --card:rgba(255,255,255,0.15);
    --text:#fff;
}

body.dark{
    --bg1:#0f2027;
    --bg2:#203a43;
    --card:rgba(0,0,0,0.4);
    --text:#fff;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Inter',sans-serif;
}

body{
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,var(--bg1),var(--bg2));
    overflow:hidden;
}

/* BACKGROUND BLOBS */
body::before, body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    filter:blur(120px);
    z-index:0;
}
body::before{
    width:300px;height:300px;
    background:#ff6a88;
    top:10%;left:10%;
}
body::after{
    width:350px;height:350px;
    background:#00f2fe;
    bottom:10%;right:10%;
}

/* CARD */
.card{
    position:relative;
    z-index:1;
    width:360px;
    padding:30px;
    border-radius:20px;
    backdrop-filter:blur(20px);
    background:var(--card);
    border:1px solid rgba(255,255,255,0.2);
    box-shadow:0 10px 40px rgba(0,0,0,0.3);
    animation:fadeIn 0.8s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}

.card h2{
    text-align:center;
    color:var(--text);
    margin-bottom:20px;
}

/* INPUT */
.input-group{
    position:relative;
    margin-bottom:20px;
}

.input-group input{
    width:100%;
    padding:12px 40px;
    border:none;
    border-radius:10px;
    outline:none;
    background:rgba(255,255,255,0.2);
    color:#fff;
}

.input-group label{
    position:absolute;
    left:40px;
    top:50%;
    transform:translateY(-50%);
    font-size:14px;
    color:#ddd;
    transition:0.3s;
}

.input-group input:focus + label,
.input-group input:not(:placeholder-shown) + label{
    top:-8px;
    font-size:12px;
    color:#fff;
}

.input-group i{
    position:absolute;
    top:50%;
    left:12px;
    transform:translateY(-50%);
    color:#fff;
}

.toggle-pass{
    position:absolute;
    right:12px;
    top:50%;
    transform:translateY(-50%);
    cursor:pointer;
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
}

/* EXTRA */
.extra{
    text-align:center;
    margin-top:15px;
    color:#fff;
}

.extra a{
    color:#fff;
}

/* DARK TOGGLE */
.toggle-mode{
    position:absolute;
    top:20px;
    right:20px;
    cursor:pointer;
    color:#fff;
    font-size:18px;
}

</style>
</head>

<body>

<div class="toggle-mode" onclick="toggleMode()">
    <i class="fas fa-moon"></i>
</div>

<div class="card">
    <h2>Welcome Back</h2>

    <form id="loginForm" action="login.php" method="POST">

        <div class="input-group">
            <i class="fa fa-envelope"></i>
            <input type="email" id="email" name="email" required placeholder=" ">
            <label>Email</label>
        </div>

        <div class="input-group">
            <i class="fa fa-lock"></i>
            <input type="password" id="password" name="password" required placeholder=" ">
            <label>Password</label>
            <i class="fa fa-eye toggle-pass" onclick="togglePassword()"></i>
        </div>

        <button class="btn">Login</button>
    </form>

    <div class="extra">
        <p><a href="#">Forgot Password?</a></p>
    </div>
</div>

<script>
function togglePassword(){
    let p = document.getElementById("password");
    p.type = p.type === "password" ? "text" : "password";
}

function toggleMode(){
    document.body.classList.toggle("dark");
}

document.getElementById("loginForm").addEventListener("submit", function(e){
    let email = document.getElementById("email").value.trim();
    let pass = document.getElementById("password").value.trim();

    if(!email || !pass){
        e.preventDefault();
        alert("Fill all fields!");
    }
});
</script>

</body>
</html>