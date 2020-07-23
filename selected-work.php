<?php
    include 'includes/class-autoload.inc.php';

    Header::getHeader("Selected Work");
?>

    <div class="container">
        <div class="links">
            <div onclick="location.href='minimal.php';" class="link link1"><a href="minimal.php">Minimal</a></div>
            <div onclick="location.href='graphic.php';" class="link link2"><a href="graphic.php">Graphic</a></div>
            <div onclick="location.href='mini-realism.php';" class="link link3"><a href="mini-realism.php">Mini Realism</a></div>
        </div>
    </div>

<?php
    Footer::getFooter();
?>