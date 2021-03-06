<!-- Product -->
<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item):
    if($item['item_id']==$item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="<?= $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo d-flex">
                    <div class="col px-2">
                        <button type="submit" class="btn btn-danger form-control">Proced to Buy</button>
                    </div>
                    <div class="col">
                        <?php
                        if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ??[])){
                            echo '<button type="submit" class="btn btn-success font-size-16 form-control">In the cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?= $item['item_name'] ?? "Unknow"; ?></h5>
                <small>by <?= $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-size-14 font-rale">20.534 rating | 1000*answer questions</a>
                </div>
                <hr class="m-0">

                <!-- product price -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>$162.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">$<span><?= $item['item_price'] ?? 0; ?><small class="text-dark font-size-12">&emsp;Inclusive of all taxes</small></span></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You save:</td>
                        <td class="font-size-16 text-danger">$<span><?= $item['item_price'] ?? 0; ?></span></td>
                    </tr>
                </table>
                <!-- !product price -->

                <!-- Policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-3">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days<br>Repleacement</a>
                        </div>
                        <div class="return text-center mx-3">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Daily Tution<br>Delivered</a>
                        </div>
                        <div class="return text-center mx-3">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 year<br>Warning</a>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- !Policy -->

                <!-- order details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Mar 29 -Apr 1</small>
                    <small>Sold by <a href="#">Daily Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&emsp;Deliver to customer - 424201</small>
                </div>
                <!-- !order details -->

                <div class="row">
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex my-3">
                            <h6 class="font-baloo">Qty:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" palceholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->

            </div>
            <div class="col-12">
                <h6 class="font-rubik">Production Description</h6>
                <hr>
                <p class="font-rale font-size-14">Mobile shopping allows for a customer to purchase a product from a mobile device, using an application such as Amazon, or over a web app. ... This is typically done through a secure, dedicated app provided by the banking institution.</p>
                <p class="font-rale font-size-14">Mobile shopping allows for a customer to purchase a product from a mobile device, using an application such as Amazon, or over a web app. ... This is typically done through a secure, dedicated app provided by the banking institution.</p>
            </div>
        </div>
    </div>
</section>
<?php
endif;
endforeach;
?>
<!-- !Product -->
