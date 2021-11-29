<?php
$cart = $_SESSION;
if ($cart) {

    foreach ($cart as $key => $value) {
        if ($key == 'token_user')
            continue;
        else { ?>
            <div class="item" id="cart-item<?php echo $value['id'] ?>">
                <img src="http://localhost/CPP_WebProgramming_Assignment/SourceMVC/images/<?php echo $value['image'] ?>" alt="" />
                <div class="name">
                    <?php echo ($key)  ?>
                </div>
                <div class="quantity">
                    <div class="decrease quantity-change">
                        <ion-icon name="remove-outline"></ion-icon>
                    </div>
                    <div class="quantity-num number"><?php echo $value['val'] ?></div>
                    <div class="increase quantity-change">
                        <ion-icon name="add-outline"></ion-icon>
                    </div>
                </div>
                <div class="price price-item-cart"><?php echo $value['total_price'] ?>$</div>
                <div class="remove-item text-danger">Remove</div>
            </div>
<?php }
    }
}
?>
<script src="http://localhost/CPP_WebProgramming_Assignment/SourceMVC/client/public/js/upDateCart.js">
</script>