<?php
class ItemModel extends Database
{

    function get_all_item()
    {
        $sql = "SELECT * from item ";
        return $this->get_list($sql);
    }
    function get_item_category($id_category)
    {
        $sql = "SELECT * FROM item WHERE category_id = $id_category";
        return $this->get_list($sql);
    }
    function get_item_info($id)
    {
        $sql = "SELECT * FROM item where id=$id";
        return $this->get_one($sql);
    }
    function get_item_search($keyword)
    {
        $sql = "SELECT * FROM item WHERE name LIKE '%$keyword%'";
        return $this->get_list($sql);
    }
    //get all item in cart
    function get_item_cart($username)
    {
        $sql = "SELECT * FROM item_in_cart WHERE username = '$username'";
        return $this->get_list($sql);
    }
    //remove all item in cart
    function remove_item_cart($username)
    {
        $sql = "DELETE FROM item_in_cart where username = '$username'";
        $this->query($sql);
    }
    //add item into item_in_cart
    function set_item_cart($username, $data)
    {
        $this->remove_item_cart($username);
        $sql = "INSERT INTO item_in_cart(item_id,name,image,total_price,val,username) values ";
        foreach ($data as $key => $value) {
            if ($key == 'token_user') {
                continue;
            } else {
                $sql .= "('" . $value['id'] . "',";
                $sql .= "'" . $key . "',";
                $sql .= "'" . $value['image'] . "',";
                $sql .= "'" . $value['total_price'] . "',";
                $sql .= "'" . $value['val'] . "',";
                $sql .= "'" . $username . "'),";
            }
        }
        $sql = substr($sql, 0, -1);
        $sql .= ";";
        $this->query($sql);
    }
}
