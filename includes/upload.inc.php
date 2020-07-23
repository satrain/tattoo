<?php
include 'class-autoload.inc.php';
$directory = "references/";

if(isset($_POST['send'])) {
    $firstName = $_POST['client_firstname'];
    $lastName = $_POST['client_lastname'];
    $phone = $_POST['client_number'];
    $email = $_POST['client_email'];
    $adult = $_POST['client_adult'];
    $designIdea = $_POST['client_design_idea'];
    $placement = $_POST['client_placement'];
    $size = $_POST['client_size'];
    $preferableDate = $_POST['client_preferable_date'];
    $clientReferences = 'client_references';


    $errors = array();
    $fileName = $_FILES[$clientReferences]['name'];
    $fileSize = $_FILES[$clientReferences]['size'];
    $fileTmp = $_FILES[$clientReferences]['tmp_name'];
    $fileType = $_FILES[$clientReferences]['type'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $extensions = array("jpeg", "jpg", "png", "");

    if(in_array($fileExt, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if($fileSize > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if(empty($errors) == true) {
        if($fileName == "") {
            $filePath = "Not specified";
        }
        else {
            $filePath = $directory . $fileName;
        }
        move_uploaded_file($fileTmp, "../" . $directory . $fileName);
        
        $inboxObj = new MessageContr();
        $inboxObj->sendMessage($firstName, $lastName, $phone, $email, $adult, $designIdea, $placement, $size, $preferableDate, $filePath);
    
    }
    else {
        print_r($errors);
    }
    
}