<?php
class Edit extends Controller
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
            'render' => 'edit',
            'category_type' => 1
        );
    }
    function EditPage()
    {
        $item = $this->model('Item');
        $item_id = $_POST['edit_item'];
        $item_info = $item->get_item_info($item_id);
        $this->data['category_type'] = $item_info['category_id'];
        $this->data['item_info'] = $item_info;
        $this->view('layout', $this->data);
    }
    function DoEdit()
    {
        if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['calories'])) {
            echo 'failed';
        } else {
            $item = $this->model('Item');
            $check = $item->do_edit_item($_POST['item_id'], $_POST['category'], $_POST['name'], $_POST['price'], $_POST['description'], $_POST['calories'], $_POST['image']);
            echo $check;
        }
    }
}
