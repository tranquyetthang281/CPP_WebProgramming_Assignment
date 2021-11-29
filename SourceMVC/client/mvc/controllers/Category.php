<?php
class Category extends Controller
{
    function getCategory($category_id, $category_name)
    {
        $item = $this->model("ItemModel");
        $data['page'] = 'Category';
        $data['category'] = $category_name;
        $data['items_category'] = $item->get_item_category($category_id);
        return ($this->view("Home", $data));
    }
}
