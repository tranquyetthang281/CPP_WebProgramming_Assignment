<?php

class AccountModel extends Database
{
    function getAllAccount()
    {
        $sql = "SELECT * FROM account where `level` = '2'";
        return $this->get_list($sql);
    }
    function getAccount($username)
    {
        $sql = "SELECT * FROM account WHERE username = '$username'";
        return $this->get_one($sql);
    }
    function LockAccount($username, $state)
    {
        $sql = "UPDATE account SET state ='$state' WHERE username = '$username' ";
        $this->query($sql);
    }
}
