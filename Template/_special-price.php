<!-- Special Price -->
<?php
$brand = array_map(function($pro){return $pro['item_brand'];},$product_shuffle);
$unique = array_unique($brand);
sort($unique);
shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD'] == "POST" ){
    if(isset($_POST['special_price_submit'])){
        //call method addToCart
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
}
$in_cart = $Cart->getCartId($product->getData('cart'));
?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filter" class="button-group">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <?php
                array_map(function($barnd){
                    printf('<button class="btn" data-filter=".%s">%s</button>',$barnd,$barnd);
                },$unique);
            ?>
        </div>
        <div class="grid">
            <?php array_map(function($item) use($in_cart){?>
                <div class="grid-item border <?= $item['item_brand']?? 'Brand'; ?>">
                    <div class="item py-2" style="width:200px">
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?= $item['item_image'] ?? "./assets/products/4.png"; ?>" alt="product1" class="img-fluid"></a>
                            <div class="text-center pt-3">
                                <h6><?= $item['item_name'] ?? "Unknow"; ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span><?= $item['item_price'] ?? 0; ?></span>
                                </div>
                                <form method="POST">
                                    <input type="hidden" name="user_id" value="<?= 1; ?>">
                                    <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? '1'; ?>">
                                    <?php
                                    if(in_array($item['item_id'],$in_cart ??[])){
                                        echo '<button type="submit" class="btn btn-success font-size-12">In the cart</button>';
                                    }else{
                                        echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>
<!-- !Special Price -->