<?php
include 'class-autoload.inc.php';
Session::init();

if(isset($_POST['admin_login'])) {
    $adminEmail = $_POST['admin_email'];
    $adminPass = $_POST['admin_password'];

    $getAdminObj = new AdminView();
    $getAdminObj->validateAdmin($adminEmail, $adminPass);
}