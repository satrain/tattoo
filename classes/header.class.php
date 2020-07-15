<?php

    class Header {

        public static $header;

        public static function getHeader($title) {
            self::$header = "
                <html>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$title</title>

                        <link rel='stylesheet' href='assets/css/style.css'>
                    </head>
                    <body>
                        <header>
                            <div class='header-mid-line'></div>
                            <nav>
                                <ul>
                                    <li><a href='#'>selected work</a></li>
                                    <li><a href='#'>available designs</a></li>
                                    <li><a href='#'>about</a></li>
                                    <li><a href='#'>news</a></li>
                                    <li><a href='#'>contact</a></li>
                                </ul>
                            </nav>
                            <div class='header-mid-line'></div>
                        </header>
            ";
            echo self::$header;
        }

    }