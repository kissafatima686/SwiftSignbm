<?php
require_once '../app/core/Auth.php';
if(!Auth::check()) {
    header("Location: /public/");
    exit;
}
