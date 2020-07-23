<?php
include 'class-autoload.inc.php';
Session::init();
//Session::isAuthorized();
$directory = "assets/img/uploads/";

if(isset($_POST['uploadImage'])) {

    $imgCategory = $_POST['imageCategory'];

    $directory .= $imgCategory . "/";
    $errors = array();
    $fileName = $_FILES['imageToUpload']['name'];
    $fileSize = $_FILES['imageToUpload']['size'];
    $fileTmp = $_FILES['imageToUpload']['tmp_name'];
    $fileType = $_FILES['imageToUpload']['type'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $extensions = array("jpeg", "jpg", "png");

    if(in_array($fileExt, $extensions) === false) {
        $errors[] .= " Extension not allowed, please choose a JPEG or PNG file.";
    }

    if($fileSize > 2097152) {
        $errors[] = "File size must be excately 2MB";
    }

    if(empty($errors) == true) {
        $filePath = $directory . $fileName;
        move_uploaded_file($fileTmp, "../" . $directory . $fileName);
        $imagesObj = new ImagesContr();
        $imagesObj->uploadImage($imgCategory, $filePath);
    }
}