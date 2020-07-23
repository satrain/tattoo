<?php
include '../includes/class-autoload.inc.php';
Session::init();
Session::isAuthorized();
AdminHeader::getAdminHeader();
?>

<div class="container">
    <div class="links">
        <div onclick="location.href='images.php';" class="link link1">
            <a href="images.php">Images</a>
        </div>
        <div onclick="location.href='inbox.php';" class="link link2">
            <a href="inbox.php">Inbox</a>
        </div>
        <div onclick="location.href='setadmin.php';" class="link link3">
            <a href="setadmin.php">Register Admin</a>
        </div>
    </div>
</div>

<?php
Footer::getFooter();
/* GET IP OF USER

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}*/
?>