<?php
class Add extends Controller
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
            'render' => 'add',
            'category_type' => -1
        );
    }
    function AddPage()
    {
        $this->view('layout', $this->data);
    }
    function DoAdd()
    {
        if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['calories'])) {
            echo 'failed';
        } else {
            $item = $this->model('Item');
            $check = $item->do_add_item($_POST['category'], $_POST['name'], $_POST['price'], $_POST['description'], $_POST['calories'], $_POST['image']);
            echo $check;
        }
    }
}
