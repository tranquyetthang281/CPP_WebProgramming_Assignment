<?php $DOMAIN = "http://localhost/CPP_Assignment_CNPM/SourceMVC";
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
                <span style='float:right; text-align:right;'> <?php echo $total ?>$</span>
            </div>
        </div>
        <div class='credit-info'>
            <div class='credit-info-content'>
                <table class='half-input-table'>
                    <tr>
                        <td>Please select your card: </td>
                        <td>
                            <div class='dropdown' id='card-dropdown'>
                                <div class='dropdown-btn' id='current-card'>Visa</div>
                                <div class='dropdown-select'>
                                    <ul>
                                        <li>Zalo Pay</li>
                                        <li>Momo</li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <img src='<?php echo $DOMAIN ?>/images/visa.png' height='80' class='credit-card-image' id='credit-card-image'></img>
                <span id='frame-0'>Your Table Number</span>
                <input type="number" min=1 id="tableNum" class='input-field form-control get-input'></input>
                <span id='frame-1'>Card Number</span>
                <input class='input-field form-control get-input'></input>
                <span id='frame-2'>Card Holder</span>
                <input class='input-field form-control'></input>
                <table class='half-input-table'>
                    <tr>
                        <td> <span id='frame-3'>Expires</span>
                            <input class='input-field form-control'></input>
                        </td>
                        <td><span id='frame-4'>CVC</span>
                            <input class='input-field form-control'></input>
                        </td>
                    </tr>
                </table>
                <button type="submit" class='pay-btn'>Checkout</button>
                <div class="text-danger"><strong class="err"></strong></div>
                <div class="text-success"><strong class="succ"></strong></div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $DOMAIN ?>/client/public/js/checkout.js"></script>
<script>

</script>