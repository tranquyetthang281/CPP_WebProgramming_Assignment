<?php
class Order extends Controller
{
    public $data = array();
    function __construct()
    {
        $category = $this->model('Category');
        $list_category = $category->get_category();
        $this->data = array(
            'category' => $list_category,
            'render' => 'order',
            'category_type' => -1
        );
    }
    function OrderPage()
    {
        $orderModel = $this->model('OrderModel');
        $orders = $orderModel->get_all_order();
        $this->data['orderList'] = $orders;
        $this->view('layout', $this->data);
    }
    function changeState($orderID)
    {
        $orderModel = $this->model('OrderModel');
        $orderModel->update_state($orderID);
        header("Location: http://localhost/CPP_Assignment_CNPM/SourceMVC/admin/Order/OrderPage");
    }
    function deleteOrder($orderID)
    {
        $orderModel = $this->model('OrderModel');
        $orderModel->remove_order($orderID);
        header("Location: http://localhost/CPP_Assignment_CNPM/SourceMVC/admin/Order/OrderPage");
    }
    function removeAll()
    {
        $orderModel = $this->model('OrderModel');
        $orderModel->remove_all();
        header("Location: http://localhost/CPP_Assignment_CNPM/SourceMVC/admin/Order/OrderPage");
    }
    function searchOrder()
    {
        $keyword = $_POST['keyword'];
        $orderModel = $this->model('OrderModel');
        $orders = $orderModel->searchOrder($keyword);
        $this->data['orderList'] = $orders;
        echo $this->view('orderSearch', $this->data);
    }
}
