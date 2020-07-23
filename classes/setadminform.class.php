<?php

class SetAdminForm {

    public $adminForm;

    public function getForm () {
        $this->adminForm = "
            <form action='../includes/setadmin.inc.php' method='post'>
                <label>Full name</label><br>
                <input type='text' name='admin_fullname'><br>
                <label>Username</label><br>
                <input type='text' name='admin_username'><br>
                <label>Email</label><br>
                <input type='email' name='admin_email'><br>
                <label>Password</label><br>
                <input type='password' name='admin_password'><br>
                <label>Security Question</label><br>
                <input type='text' name='admin_security_question'><br><br>
                <input type='submit' name='set_admin' value='Register'>
            </form>
        ";
        echo $this->adminForm;
    }

}


?>

