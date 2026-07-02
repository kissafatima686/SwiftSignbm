<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BMS Login</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
body {
    height: 100vh;
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', sans-serif;
}

/* Glass Card */
.login-card {
    width: 380px;
    padding: 30px;
    border-radius: 15px;
    backdrop-filter: blur(15px);
    background: rgba(255, 255, 255, 0.08);
    box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    color: #fff;
}

/* Title */
.login-title {
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
}

/* Input Group */
.input-group-text {
    background: transparent;
    border-right: 0;
    color: #ccc;
}

.form-control {
    background: transparent;
    border-left: 0;
    color: #fff;
}

.form-control::placeholder {
    color: #bbb;
}

.form-control:focus {
    box-shadow: none;
    border-color: #4facfe;
}

/* Button */
.btn-login {
    background: linear-gradient(45deg, #4facfe, #00f2fe);
    border: none;
    font-weight: 600;
    transition: 0.3s;
}

.btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 242, 254, 0.4);
}

/* Footer */
.login-footer {
    text-align: center;
    margin-top: 15px;
    font-size: 13px;
    color: #ccc;
}
</style>

</head>
<body>

<div class="login-card">

    <h3 class="login-title">Swift BMS Login</h3>

    <?php if(isset($_SESSION['error'])): ?>
        <div class="alert alert-danger text-center py-2">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="/public/auth/authenticate">

        <!-- Email -->
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
        </div>

        <!-- Password -->
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
        </div>

        <!-- Remember -->
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label text-light" for="remember">
                Remember Me
            </label>
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-login w-100">Login</button>

    </form>

    <div class="login-footer">
        © <?= date('Y'); ?> Swift BMS
    </div>

</div>

</body>
</html>