<?php
    include '../includes/class-autoload.inc.php';
    Session::init();
    Session::isSetAdmin();
?>

<form action="../includes/admin-login.inc.php" method="post">
        <label>Email</label><br>
        <input type="email" name="admin_email"><br>
        <label>Password</label><br>
        <input type="password" name="admin_password"><br>
        <input type="submit" name="admin_login" value="Login">
</form>