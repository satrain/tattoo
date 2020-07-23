<?php
    include 'includes/class-autoload.inc.php';

    SelectedWorkHeader::getHeader('Selected Work / Graphic', 'graphic');
?>

<div class="container3">
    <?php
        $catImgObj = new ImagesView();
        $catImgObj->showImagesByCategory("graphic");
    ?>
</div>

<?php
    Footer::getFooter();
?>