<?php
    include '../includes/class-autoload.inc.php';
    Session::init();
    Session::isAuthorized();

    AdminHeader::getAdminHeader();

    $clientId = $_GET['client'];

    $messageObj = new MessageView();
    $messageObj->showMessage($clientId);
    
    Footer::getFooter();
?>