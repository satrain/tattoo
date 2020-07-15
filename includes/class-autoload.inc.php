<?php

    spl_autoload_register("classAutoLoad");

    function classAutoLoad ($className) {
        $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    
        if(strpos($url, 'includes')) {
            $path = "../classes/";
        }
        else {
            $path = "classes/";
        }

        $extension = ".class.php";

        include $path . $className . $extension;
    }

?>