<?php
class Item extends Database
{

    function get_all_item()
    {
        $sql = "SELECT * from item ";
        return $this->get_list($sql);
    }
    function get_item_category($id_category)
    {
        $sql = "SELECT * FROM item WHERE category_id = $id_category";
        return $this->get_list($sql);
    }
    function do_add_item($category_id, $name, $price, $description, $calories, $image)
    {
        $sql = " INSERT INTO item(category_id,name,price,description,calories,image) VALUES ('$category_id','$name','$price','$description','$calories','$image')";
        return $this->query($sql);
    }
    function do_edit_item($id, $category_id, $name, $price, $description, $calories, $image)
    {
        $sql = "UPDATE item SET category_id = '$category_id',name = '$name',price = '$price',description = '$description',calories = '$calories',image = '$image' WHERE id = '$id'";
        return $this->query($sql);
    }

    function do_delete_item($id)
    {
        $sql = "DELETE FROM item WHERE id = $id";
        return $this->query($sql);
    }
    function get_item_info($id)
    {
        $sql = "SELECT * FROM item where id=$id";
        return $this->get_one($sql);
    }
}
