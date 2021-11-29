<?php
class Search extends Controller
{
    function searchItem()
    {
        $keyword = $_POST['keyword'];
        $item = $this->model("ItemModel");
        if (trim($keyword)) {
            echo ($this->view("Search", $item->get_item_search($keyword)));
        }
    }
}
