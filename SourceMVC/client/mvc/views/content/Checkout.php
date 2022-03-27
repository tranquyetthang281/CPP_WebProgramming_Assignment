<?php $DOMAIN = "http://localhost/CPP_WebProgramming_Assignment/SourceMVC";
$items = $_SESSION;
$total = 0;
?>
<div class='ck-container'>
    <div class='window'>
        <div class='order-info'>
            <div class='order-info-content'>
                <h2>Order Summary</h2>
                <?php if ($items) {
                    foreach ($items as $key => $value) {
                        if ($key == 'token_user') {
                            continue;
                        } else { ?>
                            <div class='line'></div>
                            <table class='order-table'>
                                <tr>
                                    <td><img src='<?php echo $DOMAIN ?>/images/<?php echo $value['image'] ?>' class='full-width'></img>
                                    </td>
                                    <td>
                                        <br> <span class='thin'> <?php echo ($key)  ?></span>
                                        <br> Số lượng: <?php echo $value['val'] ?>
                                        <br>
                                        <span> Đơn giá: <?php $total += (int)$value['total_price'];
                                                        echo $value['total_price'] ?>$
                                            <br>
                                            <br>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                <?php }
                    }
                } ?>
                <div class='line'></div>

            </div>
            <div class='total'>
                <span style='float:left;'> TOTAL </span>
                <span style='float:right; text-align:right;' id="price"> <?php echo $total ?>$</span>
            </div>
        </div>
        <div class='credit-info'>
            <div class='credit-info-content'>
                <table class='half-input-table'>
                    <tr>
                        <td>Please select your card: </td>
                        <td>
                            <div class='dropdown' id='card-dropdown'>
                                <div class='dropdown-btn' id='current-card'>Momo</div>
                               
                            </div>
                        </td>
                    </tr>
                </table>
                <img src='<?php echo $DOMAIN ?>/images/momo.jpg' height='80' class='credit-card-image' id='credit-card-image'></img>
                <span id='frame-0'>Delivery Address</span>
                <input type="text"  id="tableNum" class='input-field form-control get-input'></input>
                                </table>
                <button type="submit" class='pay-btn'>Checkout</button>
                <div class="text-danger"><strong class="err"></strong></div>
                <div class="text-success"><strong class="succ"></strong></div>
            </div>
        </div>
        <span id="id"><?php echo uniqid("DH1") ?></span>
    </div>
</div>
<script src="<?php echo $DOMAIN ?>/client/public/js/checkout.js"></script>
<script>

</script>