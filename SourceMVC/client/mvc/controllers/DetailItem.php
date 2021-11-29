<?php
class DetailItem extends Controller
{
    function getDetailItem($item_id)
    {
        $item = $this->model("ItemModel");
        $data['page'] = 'DetailItem';
        $data['item'] = $item->get_item_info($item_id);
        return ($this->view("Home", $data));
    }
}