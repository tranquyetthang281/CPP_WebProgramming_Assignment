<div class="task-name">Add Item</div>
<div class="form">
    <form action="" onsubmit="return false" id="form_add">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-upload"></div>
                <label for="upload-photo" class="btn btn-success" id="label-upload">Add Image</label>
                <input type="file" name="photo" id="upload-photo" />
            </div>
            <div class="col-lg-8">
                <div>
                    <label for="input-category" class="form-label">Category:</label>
                    <select name="input-category" id="input-category" class="form-select">
                        <?php foreach ($data['category'] as $key => $value) { ?>
                            <option value="<?php echo $value['id'] ?>"> <?php echo ($key + 1) . " - " . $value['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="input-name" class="form-label mt-2">Item Name: </label>
                    <input type="text" class="form-control input-name" />
                </div>
                <div>
                    <label for="input-price" class="form-label mt-2">Price: </label>
                    <input type="number" min="0" class="form-control input-price" />
                </div>
                <div>
                    <label for="input-description" class="form-label mt-2">Description: </label>
                    <input type="text-area" class="form-control input-description" />
                </div>
                <div>
                    <label for="input-name" class="form-label mt-2">Calories </label>
                    <input type="number" min="0" class="form-control input-calories" />
                </div>
            </div>
        </div>
        <div class="contain-button">
            <button class="btn btn-primary button-add mt-3">Add new</button>
            <button type="reset" class="btn btn-danger mt-3 ms-4 button-reset">Reset</button>
        </div>
        <div class="alert alert-add mt-4 mb-4">
            <strong class="alert-add-text"></strong>
        </div>
    </form>
</div>
<script>

</script>