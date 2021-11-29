<?php
class Account extends Controller
{
    public $data = array();
    function __construct()
    {
        $category = $this->model('Category');
        //get all items from model
        //get all category from model
        $list_category = $category->get_category();
        $this->data = array(
            'category' => $list_category,
            'render' => 'account',
            'category_type' => -1
        );
    }
    function AccountPage()
    {
        $account = $this->model("AccountModel");
        $account = $account->getAllAccount();
        $this->data['accountList'] = $account;
        $this->view('layout', $this->data);
    }
    function LockAccount($username)
    {
        $account = $this->model("AccountModel");
        $accountInfo = $account->getAccount($username);
        $state = (int)$accountInfo['state'];
        $state = $state == 1 ? 2 : 1;
        $account->LockAccount($username, $state);
        header("Location: http://localhost/CPP_WebProgramming_Assignment/SourceMVC/admin/Account/AccountPage");
    }
}
