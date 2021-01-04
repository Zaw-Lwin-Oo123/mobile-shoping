<!-- Shopping cart section -->
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['delete-cart-submit'])){
        $deleterecord = $Cart->deleteCart($_POST['item_id'],'wishlist');
    }

    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'],'cart','wishlist');
    }

}
?>
<section id="cart" class="py-3 mb-5">
    <div class="container">
        <h5 class="font-baloo font-size-20">Wishlist</h5>

        <!-- Shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('wishlist') as $item):
                    $cart = $product->getProduct($item['item_id']);
                    $subtotal[] = array_map(function($item){
                        ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?= $item['item_image']??"./assets/products/1.png" ?>" alt="cart" style="height:120px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?= $item['item_name'] ?? "Unknow"; ?></h5>
                                <small><?= $item['item_brand'] ?? "Brand"; ?></small>
                                <!-- product ratings -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-14 mx-2">20, 534 ratings</a>
                                </div>
                                <!-- !product ratings -->

                                <!-- product qty -->
                                <div class="qty d-flex pt-2">
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?= $item['item_id']??0; ?>">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger" style="padding-left: 0;padding-right: 3;">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?= $item['item_id']??0; ?>">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger px-3">Add to cart</button>
                                    </form>

                                </div>
                                <!-- !product qty -->

                            </div>
                            <div class="col-sm-2" style="text-align:right;">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span class="product_price" data-id="<?= $item['item_id'] ?? '0'; ?>"><?= $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item -->
                        <?php
                        return $item['item_price'];
                    },$cart);
                endforeach;
                ?>
            </div>
        </div>
        <!-- !Shopping cart items -->

    </div>
</section>
<!-- !Shopping cart section -->
