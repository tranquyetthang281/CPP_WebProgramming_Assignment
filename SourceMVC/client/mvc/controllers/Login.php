<?php
class Login extends Controller
{
    function loginPage()
    {
        $data = array(
            'page' => 'login'
        );
        $this->view("Home", $data);
    }
    function handleLogin()
    {
        $account = $this->model("AccountModel");
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (!$account->checkAccount($username)) {
            echo 'notvalid';
        } else if ($password != $account->checkAccount($username)['password']) {
            echo 'error';
        } else if ((int)$account->checkAccount($username)['state'] == 2) {
            echo 'banned';
        } else {
            $user = array(
                'username' => $username,
                'level' => (int)$account->checkAccount($username)['level']
            );
            set_logged($user);
            if (is_admin()) {
                echo 'admin';
            } else {
                $this->get_item_cart();
                echo 'user';
            }
        }
    }
    function Logout()
    {
        $this->update_item_cart();
        doLogout();
        header("Location: http://localhost/CPP_Assignment_CNPM/SourceMVC/client/");
    }
    function accountPage()
    {

        if (is_logged()) {
            $account = $this->model("AccountModel");
            $account = $account->checkAccount(is_logged()['username']);
            $data = array(
                'page' => 'AccountInfo',
                'userInfo' => $account
            );
            $this->view("Home", $data);
        } else echo 'ERROR';
    }
    function changePass()
    {
        if (is_logged()) {
            $oldPass = $_POST['oldPass'];
            $newPass = $_POST['newPass'];
            $account = $this->model("AccountModel");
            $user = $account->checkAccount(is_logged()['username']);
            if ($oldPass != $user['password']) {
                echo 'Wrong Password. Please try again';
            } else {
                $account->changePass($user['username'], $newPass);
                echo 'valid';
            }
        } else echo 'ERROR';
    }
    function changeProfile()
    {
        if (is_logged()) {
            $name = $_POST['name'];
            $phoneNum = $_POST['phoneNum'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $account = $this->model("AccountModel");
            $user = $account->checkAccount(is_logged()['username']);
            $account->changeProfile($user['username'], $name, $phoneNum, $email, $address);
            echo 'valid';
        } else echo 'ERROR';
    }
    function get_item_cart()
    {
        $userInfo = is_logged();
        if ($userInfo) {
            //get cart from db
            $item = $this->model("ItemModel");
            $item = $item->get_item_cart($userInfo['username']);
            var_dump($item);
            foreach ($item as $key => $val) {
                ss_set($val['name'], array(
                    'id' => (int)$val['item_id'],
                    'image' => $val['image'],
                    'total_price' => (int)$val['total_price'],
                    'val' => (int)$val['val']
                ));
            }
        } else echo 'ERROR';
    }
    function update_item_cart()
    {
        $item = $this->model("ItemModel");
        $userInfo = is_logged();
        $data = $_SESSION;
        if ($userInfo) {

            foreach ($_SESSION as $key => $val) {
                if ($key == 'token_user') {
                    continue;
                } else {
                    ss_delete($key);
                }
            }
            $item->set_item_cart($userInfo['username'], $data);
        } else echo 'ERROR';
    }
}
