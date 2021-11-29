<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Name</th>
            <th scope="col">PhoneNumber</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>

        </tr>
    </thead>
    <tbody>
        <?php if ($data['accountList']) {
            foreach ($data['accountList'] as $key => $value) { ?>
                <tr>
                    <td> <?php echo $value['username'] ?> </td>
                    <td> <?php echo $value['name'] ?> </td>
                    <td> <?php echo $value['phoneNumber'] ?> </td>
                    <td> <?php echo $value['email'] ?> </td>
                    <td> <?php echo $value['address'] ?> </td>
                    <td class="text-primary ">
                        <a href="<?php echo $DOMAIN ?>/Account/LockAccount/<?php echo $value['username'] ?>">
                            
                            <button type="button" class="btn btn-<?php echo $value['state'] == 1 ? 'secondary' : 'danger' ?>">
                                <?php echo $value['state'] == 1 ? 'Nomal' : 'Locked' ?></button>
                        </a>
                    </td>

                </tr>
        <?php  }
        } ?>
    </tbody>
</table>