<?php
class OrderModel extends Database
{
    function doOrder($orderDate, $tableNumber, $totalPrice, $username)
    {
        $sql = "INSERT INTO `order`(orderDate,tableNumber,totalPrice,stateID,username) values ('$orderDate','$tableNumber','$totalPrice','1','$username')";
        $this->query($sql);
    }
    function getOrderHistory($username)
    {
        $sql = "SELECT `order`.`orderID`, `order`.`orderDate`,`order`.`tableNumber`,`order`.`totalPrice`,state.stateName FROM `order`INNER JOIN state on `order`.`stateID` = state.stateID where username ='$username' ";
        return $this->get_list($sql);
    }
}
