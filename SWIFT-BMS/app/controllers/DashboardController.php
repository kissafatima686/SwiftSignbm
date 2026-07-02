<?php
require_once '../app/core/Auth.php';

class DashboardController {
    public function index() {
        session_start();
        if(!Auth::check()){
            header("Location: /public/");
            exit;
        }
        require '../app/views/dashboard/index.php';
    }
}
