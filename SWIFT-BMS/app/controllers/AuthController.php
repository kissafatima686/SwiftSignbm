<?php
require_once '../app/config/database.php';
require_once '../app/core/Auth.php';

class AuthController {

    public function login() {
        require '../app/views/auth/login.php';
    }

    public function authenticate() {
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $db = new Database();
        $stmt = $db->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user['password'])) {
            Auth::login($user);
            header("Location: /public/dashboard");
            exit;
        } else {
            $_SESSION['error'] = "Invalid Email or Password";
            header("Location: /public/");
        }
    }

    public function logout() {
        session_start();
        Auth::logout();
        header("Location: /public/");
    }
}
