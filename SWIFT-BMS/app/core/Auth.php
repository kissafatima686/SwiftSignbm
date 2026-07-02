<?php
class Auth {
    public static function check() {
        return isset($_SESSION['user_id']);
    }
    public static function login($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['role'] = $user['role_id'];
        $_SESSION['company_id'] = $user['company_id'];
    }
    public static function logout() {
        session_unset();
        session_destroy();
    }
}
