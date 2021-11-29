<?php
$DOMAIN = 'http://localhost/CPP_Assignment_CNPM/SourceMVC/admin';

?>
<div class="task-name">Edit Item</div>
<div class="form">
    <form action="" onsubmit="return false" id="form_add">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-upload" style="background: url('<?php echo 'http://localhost/CPP_Assignment_CNPM/SourceMVC/images/' . $data['item_info']['image'] ?>')"></div>
                <label for="upload-photo" class="btn btn-success" id="label-upload">Update Image</label>
                <input type="file" name="photo" id="upload-photo" <?php if (!empty($data['item_info']['image'])) echo ('class="item_image' . $data['item_info']['image'] . '"') ?> />
            </div>
            <div class="col-lg-8">
                <div>
                    <label for="input-category" class="form-label">Category:</label>
                    <select name="input-category" id="input-category" class="form-select">
                        <?php foreach ($data['category'] as $key => $value) { ?>
                            <option <?php echo $value['id'] == $data['item_info']['category_id'] ? 'selected' : '' ?> value="<?php echo $value['id'] ?>"> <?php echo ($key + 1) . " - " . $value['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="input-name" class="form-label mt-2">Item Name: </label>
                    <input type="text" class="form-control input-name" value="<?php echo $data['item_info']['name'] ?>" />
                </div>
                <div>
                    <label for="input-price" class="form-label mt-2">Price: </label>
                    <input type="number" min="0" class="form-control input-price" value="<?php echo $data['item_info']['price'] ?>" />
                </div>
                <div>
                    <label for="input-description" class="form-label mt-2">Description: </label>
                    <input type="text-area" class="form-control input-description" value="<?php echo $data['item_info']['description'] ?>" />
                </div>
                <div>
                    <label for="input-name" class="form-label mt-2">Calories </label>
                    <input type="number" min="0" class="form-control input-calories" value="<?php echo $data['item_info']['calories'] ?>" />
                </div>
            </div>
        </div>
        <div class="contain-button">
            <a href="<?php echo $DOMAIN . '\/Home\/Category\/' . $data['item_info']['category_id'] ?>" class="btn btn-success mt-3">Back</a>
            <button class="btn btn-danger button-edit mt-3 ms-4" id="item_edit<?php echo $data['item_info']['id'] ?>">Edit Item</button>
        </div>
        <div class="alert alert-add mt-4 mb-4">
            <strong class="alert-add-text"></strong>
        </div>
    </form>
</div>
<script>

</script>