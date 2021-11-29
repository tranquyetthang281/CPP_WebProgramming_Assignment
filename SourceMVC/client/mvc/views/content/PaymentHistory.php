<table class="table table-striped table-dark table-hover mt-4" style="color:white">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Order ID</th>
            <th scope="col">Date</th>
            <th scope="col">Table Number</th>
            <th scope="col">Total Price</th>
            <th scope="col">Status</th>
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
                    <td>
                        <?php echo $value['stateName'] ?>
                    </td>

                </tr>

        <?php  }
        } ?>
    </tbody>
</table>