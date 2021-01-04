<!-- Shopping cart section -->
<section id="cart" class="py-3 mb-5">
    <div class="container">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- Shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <!-- Empty Cart -->
                <div class="row border-top py-3 mt-3">
                    <div class="text-center py-2">
                        <img src="./assets/blog/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 200px;">
                        <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
                    </div>
                </div>
                <!-- .Empty Cart -->
            </div>
            <!-- subtotal -->
            <div class="col-sm-3">
                <div class="sub-total border mt-2 text-center">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Your order is eligible for FREE Delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal(<?php echo isset($subtotal)?count($subtotal) :0; ?>item):&nbsp;<span class="text-danger">$<span class="text-dagner" id="deal-price"><?= isset($subtotal)? $Cart->getSum($subtotal) : 0; ?></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- !subtotal -->
        </div>
        <!-- !Shopping cart items -->

    </div>
</section>
<!-- !Shopping cart section -->
