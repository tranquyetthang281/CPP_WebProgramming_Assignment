<?php
class Checkout extends Controller
{
    function getContent()
    {
        $data['page'] = 'Checkout';
        echo ($this->view('Home', $data));
    }
    function doCheckout()
    {
        $tableNum = (int)$_POST['tableNumber'];
        $total = 0;
        foreach ($_SESSION as $key => $val) {
            if ($key == 'user_token') {
                continue;
            } else
                $total += (int)$val['total_price'];
        }
        $order = $this->model("OrderModel");
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $orderDate = date("Y-m-d h:i:s");
        $username = 'NONE';
        if (is_logged()) {
            $username = is_logged()['username'];
        }
        $order->doOrder($orderDate, $tableNum, $total, $username);
        require_once "Cart.php";
        $cart = new Cart();
        $cart->RemoveAll();
        echo 'success';
    }
}
