<?php
    include 'includes/class-autoload.inc.php';

    SelectedWorkHeader::getHeader('Selected Work / Mini Realism', 'mini realism');
?>

<div class="container">

    <?php
        $catImgObj = new ImagesView();
        $catImgObj->showImagesByCategory("mini-realism");
    ?>

</div>

<?php
    Footer::getFooter();
?>