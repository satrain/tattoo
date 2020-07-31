<?php

class Admin extends Dbh {

    protected function getAdmin($email) {
        $sql = "SELECT * FROM admin WHERE admin_email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $result = $stmt->fetchAll();

        if($stmt->rowCount() == 0) {
            die("Wrong credentials.");
        }
     
        return $result;
    }

    protected function setAdmin($fullName, $username, $email, $password, $securityQuestion, $dateCreated) {
        $sql = "INSERT INTO admin(admin_fullname, admin_username, admin_email, admin_password, admin_security_question, admin_date_created) VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$fullName, $username, $email, $password, $securityQuestion, $dateCreated]);
        if($result) {
            echo "Successfully registered.";
            Session::set('admin_email', $email);
        }
        else {
            echo "Error trying to register.";
        }
    }

}