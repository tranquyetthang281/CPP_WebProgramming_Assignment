<?php
class Home extends Controller
{
    public $data = array();

    function __construct()
    {
        $item = $this->model('Item');
        $category = $this->model('Category');
        //get all items from model

        $all_item = $item->get_item_category(1);
        //get all category from model
        $list_category = $category->get_category();
        $this->data = array(
            'category' => $list_category,
            'item' => $all_item,
            'render' => 'list',
            'category_type' => 1
        );
    }
    function HomePage()
    {
        $this->view('layout', $this->data);
    }
    function Category($a = 1)
    {
        //cal model
        $item = $this->model('Item');
        //check is delete
        if (isset($_POST['delete_item'])) {
            $item->do_delete_item((int)$_POST['delete_item']);
        }
        //get all item from category which has id a
        $all_item = $item->get_item_category($a);

        $this->data['item'] = $all_item;
        $this->data['category_type'] = $a;
        $this->view('layout', $this->data);

        //call views
    }
}
