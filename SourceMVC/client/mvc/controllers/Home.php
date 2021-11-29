<?php

class Home extends Controller
{

    public $data = array();
    protected $itemModel, $categoryModel;

    public function __construct()
    {
        $this->itemModel = $this->model("ItemModel");
        $this->categoryModel = $this->model("CategoryModel");

        $all_category = $this->categoryModel->get_category();
        $this->data = array(
            'page' => 'HomePage'
        );
        foreach ($all_category as $category) {
            $this->data['category_list'][] = array(
                'category' => $category,
                'items' => $this->getItemsCategory($category['id'])
            );
        }
    }

    function Show()
    {
        $this->view("Home", $this->data);
    }

    function getItemsCategory($id = 1)
    {
        $Items = $this->itemModel->get_item_category($id);
        return $Items;
    }
}
