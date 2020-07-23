<?php

class AdminHeader {

    public static $adminHeader;

    public static function getAdminHeader() {
        self::$adminHeader = "
        <html>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Admin Dashboard</title>

            <link rel='stylesheet' href='../assets/css/style.css'>
        </head>
        <body>
            <header>
                <div class='header-mid-line'></div>
                <nav>
                    <ul>
                        <li><a href='#'>Admin Dashboard</a></li>
                    </ul>
                </nav>
                <div class='header-mid-line'></div>
            </header>
        ";
        echo self::$adminHeader;
    }

}