<?php
class OrderModel extends Database
{
    function get_all_order()
    {
        $sql = "SELECT `order`.`orderID`, `order`.`orderDate`,`order`.`tableNumber`,`order`.`totalPrice`,state.stateName,username FROM `order` INNER JOIN state where `order`.`stateID` = state.stateID order BY `orderID`DESC";
        return $this->get_list($sql);
    }
    function update_state($orderID)
    {

        $state = (int) $this->get_order($orderID)['stateID'];
        if ($state == 3) {
            $state = 1;
        } else {
            $state += 1;
        }
        $sql = "UPDATE `order` SET stateID = '$state' where orderID = '$orderID'";
        $this->query($sql);
    }
    function get_order($orderID)
    {
        $sql = "SELECT * FROM `order` WHERE orderID = '$orderID' ";
        return $this->get_one($sql);
    }
    function remove_order($orderID)
    {
        $sql = "DELETE FROM `order` WHERE orderID = '$orderID'";
        $this->query($sql);
    }
    function remove_all()
    {
        $sql = "DELETE FROM `order`";
        $this->query($sql);
    }
    function searchOrder($keyword)
    {
        $sql = "SELECT `order`.`orderID`, `order`.`orderDate`,`order`.`tableNumber`,`order`.`totalPrice`,state.stateName,username FROM `order`  INNER JOIN state on `order`.`stateID` = state.stateID   where `order`.`orderID` LIKE '%$keyword%' order BY `orderID`DESC";
        return $this->get_list($sql);
    }
}
