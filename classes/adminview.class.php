<?php

class AdminView extends Admin {

    public function validateAdmin($email, $pass) {
        $result = $this->getAdmin($email);
        $adminEmail = $result[0]['admin_email'];
        $adminPass = $result[0]['admin_password'];
        if($email == $adminEmail) {
            if(password_verify($pass, $adminPass)) {
                Session::set('admin_email', $email);
                header("location: ../admin/admin.php");
            }
            else {
                echo "Wrong credentials";
            }
        }
        else {
            echo "Wrong credentials";
        }
    }

}