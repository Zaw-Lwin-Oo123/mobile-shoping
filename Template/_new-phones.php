<!-- new phones -->
<?php
shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD'] == "POST" ){
    if(isset($_POST['new_phones_submit'])){
        //call method addToCart
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
}
?>
<section id="new-phones">
    <div class="container py-4">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>
        <!-- owl-carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item){?>
                <div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?= $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center pt-3">
                            <h6> <?= $item['item_name'] ?? "Unknow"; ?> </h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span> <?= $item['item_price'] ?? "0"; ?> </span>
                            </div>
                            <form method="POST">
                                <input type="hidden" name="user_id" value="<?= 1; ?>">
                                <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? '1'; ?>">
                                <?php
                                if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ??[])){
                                    echo '<button type="submit" class="btn btn-success font-size-12">In the cart</button>';
                                }else{
                                    echo '<button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- !owl-carousel -->
    </div>
</section>
<!-- !new phones -->