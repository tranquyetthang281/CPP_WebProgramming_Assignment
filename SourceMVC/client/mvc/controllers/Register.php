<?php
class Register extends Controller
{
    function registerPage()
    {
        $this->view("Home", $data = array(
            'page' => 'Register'
        ));
    }
    function handleRegister()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['fullName'];
        $account = $this->model("AccountModel");
        if ($account->checkAccount($username)) {
            echo 'That username is taken. Try another.';
        } else {
            $account->addAccount($username, $password, $name);
            echo 'valid';
        }
    }
}
