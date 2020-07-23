<?php
    include '../includes/class-autoload.inc.php';
    Session::init();
    Session::isAuthorized();    

    AdminHeader::getAdminHeader();
?>
<div class="container" style="display: block;">
    <form action="../includes/setimage.inc.php" method="post" enctype="multipart/form-data">
        <select name="imageCategory">
            <option value="available-designs">Available designs</option>
            <option value="minimal">Minimal</option>
            <option value="graphic">Graphic</option>
            <option value="mini-realism">Mini realism</option>
        </select>
        <br>
        <br>
        <input type="file" name="imageToUpload">

        <input type="submit" name="uploadImage" value="Upload">
    </form>


    <div>

        <?php  
            $getImagesObj = new ImagesView();
            $getImagesObj->showImages();
        ?>

    </div>

    <a href="admin.php">Admin Dashboard</a>
</div>

<?php

Footer::getFooter();

?>