<?php

class AdminContr extends Admin {

    public $dateCreated;

    public function createAdmin($fullName, $username, $email, $password, $securityQuestion) {
        $this->dateCreated = date('Y-d-m');
        $this->setAdmin($fullName, $username, $email, $password, $securityQuestion, $this->dateCreated);    
    }

}