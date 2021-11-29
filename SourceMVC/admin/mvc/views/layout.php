<?php
$DOMAIN = 'http://localhost/CPP_Assignment_CNPM/SourceMVC/admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/bootstrap5/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/font-awesome/css/font-awesome.min.css" />
    <script src="<?php echo $DOMAIN ?>/public/bootstrap5/jquery.min.js"></script>
    <script src="<?php echo $DOMAIN ?>/public/bootstrap5/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/style.css" />
    <script src="<?php echo $DOMAIN ?>/public/script.js"></script>

    <title>Admin</title>
</head>

<?php
if (!is_admin()) {
    header("Location: http://localhost/CPP_Assignment_CNPM/SourceMVC/client/");
}
?>

<body>
    <div class="header">
        <h1> <?php if( $data['render'] == 'order') echo 'Manage Orders'; else if($data['render'] == 'account') echo 'Manage Accounts'; else echo 'Manage Items' ?>
        </h1>
        <a style="position:absolute; right: 50px; top:10px;" href="http://localhost/CPP_Assignment_CNPM/SourceMVC/client/Login/Logout"><i class="fa fa-sign-out text-warning" style="font-size: 40px;" aria-hidden="true"></i></a>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-4 task">
                <div class="title">TASK</div>
                <div class="nav-list">
                    <button class="all-item bg-primary mt-2">List of all items</button>
                    <div class="categories">
                        <?php foreach ($data['category'] as $key => $value) { ?>
                            <form action="<?php echo $DOMAIN ?>/Home/Category/<?php echo $value['id'] ?>" method="get">
                                <button class="category<?php echo $value['id'] == $data['category_type'] ? ' category-checked ' : ' ' ?>mt-2"> <?php echo $value['name']  ?> </button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
                <form action="<?php echo $DOMAIN ?>/Add/AddPage">
                    <button class="add-item bg-secondary mt-2">Add new item</button>
                </form>
                <form action="<?php echo $DOMAIN ?>/Order/OrderPage">
                    <button class="order add-item bg-secondary mt-2">Manage Order</button>
                </form>
                <form action="<?php echo $DOMAIN ?>/Account/AccountPage">
                    <button class="account-manage add-item bg-secondary mt-2">Manage Account</button>
                </form>

            </div>
            <div class="col-lg-9 col-md-8 action">
                <?php require_once $data['render'] . '.php' ?>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>