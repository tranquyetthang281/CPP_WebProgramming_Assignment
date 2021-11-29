    <!--Detail-->
    <div class="modal fade" id="detail<?php echo $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content proper">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title " id="title"><?php echo $item['name'] ?></h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6" style="display: flex; justify-content: center;">
                                <img id="img-detail" style="" src="http://localhost/CPP_Assignment_CNPM/SourceMVC/images/<?php echo $item['image'] ?>" alt="  " />
                            </div>
                            <div class="col-md-6">
                                <div class="disc-detail">
                                    <p><?php echo $item['name'] ?></p>
                                </div>
                                <div class="calories-detail">
                                    <div class="row  row1 ">
                                        <p style="margin: 0 auto"><?php echo $item['calories'] ?> Calories</p>
                                    </div>
                                    <div class="row row2">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <p><?php echo $item['description'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <!-- <div class="col-md-9">
                                        <label for="buttons-added-detail"><b>Số lượng:</b></label><br>
                                        <div class="buttons-added-detail">
                                            <input class="minus is-form-detail" type="button" value="-" onclick=" decPrice()">
                                            <input aria-label="quantity" class="input-qty-detail" max="10" min="0" name="soluong" type="number" value="0">
                                            <input class="plus is-form-detail" type="button" value="+" onclick=" incPrice()">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12 d-flex justify-content-left align-items-left">
                                        <span id="price-detail"> Price: <?php echo $item['price'] ?>$</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="button" class="add-to-cart btn btn-danger id<?php echo $item['id'] ?> ?>" id="hahaha">Add to card</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>