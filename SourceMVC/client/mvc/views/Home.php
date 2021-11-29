<?php
$DOMAIN = 'http://localhost/CPP_WebProgramming_Assignment/SourceMVC/client';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/css/bootstrap5/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/css/font-awesome/css/font-awesome.min.css">
    <script src="<?php echo $DOMAIN ?>/public/css/bootstrap5/jquery.min.js"></script>
    <script src="<?php echo $DOMAIN ?>/public/css/bootstrap5/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/header.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/banner.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/footer.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/menu.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/cart.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/detail.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/checkout.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/profile.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/style.css" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/loginRegister.css" />

    <title>Pop Restaurant</title>
</head>

<body>
    <!-- header start -->


    <header>
        <div class="title">
            <a href="<?php echo $DOMAIN ?>" style="text-decoration: none;">
                <img src="http://localhost/CPP_WebProgramming_Assignment/SourceMVC/images/logo.png" height="100px">
            </a>
        </div>
        <div class="search-bar">
            <input type="text" class="form-control search-item" placeholder="Search..." />
            <ion-icon class="icon-search" name="search-outline"></ion-icon>
        </div>
        <div id="ac-us">
            <ul id="ac-us1">
            <li> <a href="<?php echo $DOMAIN ?>/About/Show"> About us </a></li>
            <li> <a href="<?php echo $DOMAIN ?>/Contact/Show"> Contact us </a></li>
            </ul>
        </div>
        
        <div class="user-action">
            <?php if (isset($_SESSION['token_user'])) { ?>
                <div class="dropdown" style="margin-top: -25px">
                    <i class="fa fa-user text-warning icon-profile" data-bs-toggle="dropdown" aria-hidden="true" ></i>
                    <ul class="dropdown-menu drop-menu-end">
                        <li><a class="dropdown-item" href="<?php echo $DOMAIN ?>/Login/accountPage">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="<?php echo $DOMAIN ?>/Order/historyPage">Payment History</a></li>
                        <li><a class="dropdown-item" href="<?php echo $DOMAIN ?>/Login/Logout">Logout</a></li>
                    </ul>
                </div>
            <?php } else { ?>
                <a href="<?php echo $DOMAIN ?>/Login/loginPage" class="lg-icon"><i class="fa fa-sign-in text-warning" aria-hidden="true"></i></a>
            <?php } ?>
        </div>
        <?php if ($data['page'] != 'Checkout') { ?>
            <div class="cart" data-bs-target="#my-cart" data-bs-toggle="offcanvas">
                <ion-icon name="cart-outline"></ion-icon>
                <span class="badge bg-danger count-item"></span>
            </div>
        <?php } ?>
        <div class="alert alert-success w-25 message-add">
            <strong>Item has been added to your cart!</strong>
        </div>
    </header>

    <!-- header  end -->
    <!-- searchbox -->
    <div class="search-box hidden">
    </div>

    <!-- searchbox-end -->
    <!-- contentstart -->
    <div class="container content">

        <?php require_once "content/" . $data['page'] . '.php' ?>

    </div>
    <!-- content end -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-end" id="my-cart">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">My Cart</h1>
        </div>
        <div class="offcanvas-body list-item-cart">
            <?php require_once "Cart.php" ?>
        </div>
        <div class="checkout">
            <div class="total">Total:</div>
            <a href="<?php echo $DOMAIN ?>/Checkout/getContent" class="checkout-button">Checkout</a>
            <div class="remove-all" onclick="removeAll()">Remove all</div>
        </div>
    </div>
    <!-- footer start -->
    <div class="footer">
        <div class="footer-static">
            <div class="container-955">
                <div class="footer-logo-wrap pt-50 pb-35">
                    <div class="row">
                        <!-- Block 1 -->
                        <div class="col-lg-4">
                            <div class="footer-block">
                                <h3 class="footer-block-title">About Our Restaurant</h3>
                                <p style="max-width:250px;">Breakfast buffet: Everyday | 6am – 10am (10:30am on Weekend)</p>
                                <p style="max-width:250px;">Chic Buffet Lunch: Wednesday – Sunday | 12pm – 2pm</p>
                                <ul class="social-link">
                                    <li class="list-inline-item">
                                        <a href="#" id="twitter">
                                            <ion-icon name="logo-twitter" size="large"></ion-icon>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" id="facebook">
                                            <ion-icon name="logo-facebook" size="large"></ion-icon>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" id="instagram">
                                            <ion-icon name="logo-instagram" size="large"></ion-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Block 2 -->
                        <div class="col-lg-4 col-md-4 col-sm">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Have a Questions?</h3>
                                <ul>
                                    <div>
                                        <i class="fa fa-map-marker"></i>
                                        <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
                                    </div>
                                    <div>
                                        <i class="fa fa-phone"></i>
                                        <p>+1.555.555.5555</p>
                                    </div>

                                    <div>
                                        <i class="fa fa-envelope"></i>
                                        <p><a href="#">support@company.com</a></p>
                                    </div>

                                </ul>
                            </div>
                        </div>
                        <!--Block 3 -->
                        <div class="col-lg-4 col-md-4 col-sm">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Enjoy By Yoursefl</h3>
                                <ul>
                                    <li><a href="<?php echo $DOMAIN ?>" style="text-decoration: none;">

                                            <img src="http://localhost/CPP_WebProgramming_Assignment/SourceMVC/images/logo.png" height="150px" style="margin-left: 100px;"></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- footer end -->
    <script>

    </script>
    <script src="<?php echo $DOMAIN ?>/public/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>

    </script>
</body>

</html>