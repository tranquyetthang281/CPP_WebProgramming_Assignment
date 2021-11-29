<?php $DOMAIN = 'http://localhost/CPP_Assignment_CNPM/SourceMVC/admin'; ?>
<div class="content list-item">
    <div class="row justify-content-center">
        <?php foreach ($data['item'] as $key => $value) { ?>
            <div class="col-lg-3 col-md-6 item" id="item<?php echo $value['id'] ?>">
                <div class="contain-item">
                    <img src="http://localhost/CPP_Assignment_CNPM/SourceMVC/images/<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" />
                    <div class="item-name"><?php echo $value['name'] ?></div>
                    <div class="bottom">
                        <form action="<?php echo $DOMAIN ?>/Edit/EditPage" method="POST">
                            <button class="edit-text">Edit Item</button>
                            <input type="hidden" name="edit_item" value="<?php echo $value['id'] ?>">
                        </form>
                        <div class="button-plus">
                            <div class="contain-icon">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="post" action="<?php echo $DOMAIN ?>/Home/Category/<?php echo $value['category_id'] ?>" onsubmit="return confirm('Do you want to delete this item')">
                    <input type="hidden" name="delete_item" value="<?php echo $value['id'] ?>">
                    <button type="submit" class="delete-button">
                        <span title="Delete">
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </span>

                    </button>

                </form>

            </div>
        <?php } ?>

    </div>
</div>