<?php
class Order extends Controller
{
    public $data = array();
    function __construct()
    {
        $this->data['page'] = 'PaymentHistory';
    }
    function historyPage()
    {
        $orderList = $this->model("OrderModel");
        $orderList = $orderList->getOrderHistory(is_logged()['username']);
        $this->data['orderList'] = $orderList;
        $this->view("Home", $this->data);
    }
}
