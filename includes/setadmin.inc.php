<?php
include 'class-autoload.inc.php';

if(isset($_POST['set_admin'])) {

    $fullName = $_POST['admin_fullname'];
    $username = $_POST['admin_username'];
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];
    $securityQuestion = $_POST['admin_security_question'];
    $encPass = password_hash($password, PASSWORD_DEFAULT);
    $encSecurityQuestion = password_hash($securityQuestion, PASSWORD_DEFAULT);
    

    $setAdminObj = new AdminContr();
    $setAdminObj->createAdmin($fullName, $username, $email, $encPass, $encSecurityQuestion);

}