<?php $DOMAIN = 'http://localhost/CPP_Assignment_CNPM/SourceMVC/client' ?>


<!--Detail-->
<h5 class="modal-title" id="title" style="font-size: 40px;"><?php echo $data['item']['name'] ?></h5>
<div class="modal-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"><img class="img-detail" src="http://localhost/CPP_Assignment_CNPM/SourceMVC/images/<?php echo $data['item']['image'] ?>" alt="  " /></div>
            <div class="col-md-6">
                <div class="disc-detail" style="color: white; font-size: 30px;">
                    <p><?php echo $data['item']['name'] ?></p>
                </div>
                <div class="calories-detail">
                    <div class="row  row1 ">
                        <p style="margin: 0 auto"><?php echo $data['item']['calories'] ?> Calories</p>
                    </div>
                    <div class="row row2">
                        <div class="col-md-12">
                            <div class="row" style="background-color: white;">
                                <p><?php echo $data['item']['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12 d-flex justify-content-left align-items-left">
                        <span id="price-detail"> Price: <?php echo $data['item']['price'] ?>$</span>
                    </div>
                </div>
                <div class="row">
                    <button type="button" class="add-to-cart btn btn-danger id<?php echo $data['item']['id'] ?>" id="hahaha">Add to card</button>
                </div>
            </div>
        </div>
    </div>
</div>