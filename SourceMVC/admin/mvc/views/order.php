<div class="manage-order">
    <a class="text-danger" href="<?php echo $DOMAIN ?>/Order/removeAll">
        Delete All
    </a>
</div>
<div class="content-order">
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Order ID</th>
                <th scope="col">Date</th>
                <th scope="col">Table number</th>
                <th scope="col">Total Price</th>
                <th scope="col">Status</th>
                <th scope="col">Username</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php if ($data['orderList']) {
                foreach ($data['orderList'] as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td> <?php echo $value['orderID'] ?> </td>
                        <td><?php echo $value['orderDate'] ?></td>
                        <td><?php echo $value['tableNumber'] ?></td>
                        <td><?php echo $value['totalPrice'] ?></td>
                        <td class="text-primary ">
                            <a class="change-state" href="<?php echo $DOMAIN ?>/Order/changeState/<?php echo $value['orderID'] ?>">
                                <button type="button" class="btn btn-<?php if ($value['stateName'] == 'Confirmed') echo 'success';
                                                                        else if ($value['stateName'] == 'Waiting') echo 'secondary';
                                                                        else echo 'danger'; ?>"><?php echo $value['stateName'] ?></button>
                            </a>
                        </td>
                        <td><?php echo $value['username'] ?></td>
                        <td style="display:flex">
                            <a class="text-danger" href="<?php echo $DOMAIN ?>/Order/deleteOrder/<?php echo $value['orderID'] ?>">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>

                        </td>
                    </tr>

            <?php  }
            } ?>
        </tbody>
    </table>
</div>
</div>
<script>

</script>