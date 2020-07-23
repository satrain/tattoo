<?php

class Dbh {
    
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "tattoo";

    protected function connect() {
        $dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName;
        $pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}