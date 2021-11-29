<?php $DOMAIN = 'http://localhost/CPP_WebProgramming_Assignment/SourceMVC/client' ?>

<div class="banner">
    <!-- slide -->
    <div class="banner-slide">
        <div class="slides">
            <div class="slide" style="background-image: url('<?php echo $DOMAIN ?>/public/images/banner1.jpg')"></div>
            <div class="slide" style="background-image: url('<?php echo $DOMAIN ?>/public/images/banner2.jpg')"></div>
            <div class="slide" style="background-image: url('<?php echo $DOMAIN ?>/public/images/banner3.jpg')"></div>
            <div class="slide" style="background-image: url('<?php echo $DOMAIN ?>/public/images/bg.jpg')"></div>
        </div>
        <div class="navigation">
            <div id="1" class="bar checked"></div>
            <div id="2" class="bar"></div>
            <div id="3" class="bar"></div>
            <div id="4" class="bar"></div>
        </div>
    </div>
    <!-- slide end-->
    <div class="banner-left">
        <div class="banner2"></div>
        <div class="banner3"></div>
    </div>
</div>

<!-- banner end -->
<div class="categories">
    <?php foreach ($data['category_list'] as $key => $value) { ?>
        <div class="scroll-menu"><?php echo $value['category']['name'] ?></div>
    <?php } ?>
</div>
<div class="menu mx-auto">
    <?php foreach ($data['category_list'] as $key => $value) { ?>
        <div class="category mx-auto" id="<?php echo "menu" . $value['category']['id'] ?>">
            <div class="title">
                <h1><?php echo $value['category']['name'] ?></h1>
            </div>
            <div class="list-item">
                <div class="d-flex justify-content-start flex-wrap">
                    <?php foreach ($value['items'] as $key => $item) {
                        if ($key <= 3) { ?>
                            <div class="item">
                                <?php include "DetailItemModal.php" ?>
                                <div type="button" data-bs-toggle="modal" data-bs-target="#detail<?php echo $item['id'] ?>">
                                    <img src="http://localhost/CPP_WebProgramming_Assignment/SourceMVC/images/<?php echo $item['image'] ?>" alt="  " />
                                </div>
                                <div class="name"><?php echo $item['name'] ?></div>
                                <div class="price"><?php echo $item['price'] ?> $</div>
                                <div class="buy-now item<?php echo $item['id'] ?>">Buy Now</div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <a href="<?php echo $DOMAIN ?>/Category/getCategory/<?php echo $value['category']['id'] . "/" .  $value['category']['name']?>" class="read-more">Read more</a>
        </div>
    <?php }
    ?>
</div>
<script src="<?php echo $DOMAIN ?>/public/js/home.js">

</script>