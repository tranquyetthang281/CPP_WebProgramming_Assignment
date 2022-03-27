<?php
class OrderModel extends Database
{
    function doOrder($id, $orderDate, $tableNumber, $totalPrice, $username)
    {
        $sql = "INSERT INTO `order`(orderID, orderDate,tableNumber,totalPrice,stateID,username) values ('$id','$orderDate','$tableNumber','$totalPrice','1','$username')";
        $this->query($sql);
    }
    function getOrderHistory($username)
    {
        $sql = "SELECT `order`.`orderID`, `order`.`orderDate`,`order`.`tableNumber`,`order`.`totalPrice`,state.stateName FROM `order`INNER JOIN state on `order`.`stateID` = state.stateID where username ='$username' ";
        return $this->get_list($sql);
    }
}
