<?php

    class SelectedWorkHeader {

        public static $sWHeader;

        public static function getHeader($title, $category) {
            self::$sWHeader = "
                <html>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$title</title>

                        <link rel='stylesheet' href='assets/css/style.css'>
                    </head>
                    <body>
                        <header>
                            <div class='sw-header-mid-line'></div>
                            <nav class='sw-nav'>
                                <ul>
                                    <li><a href='selected-work.php'>selected work</a> / $category</li>
                                </ul>
                            </nav>
                            <div class='sw-header-mid-line'></div>
                        </header>
            ";
            echo self::$sWHeader;
        }

    }