<?php

// require MySQL connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require cart Class
require ('database/Cart.php');

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$Cart = new Cart($db);


