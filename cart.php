<?php
ob_start();
//include header
include('header.php');
?>
<?php

/* include cart items if it's not empty */
count($product->getData('cart')) ?  include ('Template/_cart-template.php') : include ('Template/notFound/_cart-notFound.php');
/* !include cart items if it's not empty */

/* include wishlist items if it's not empty */
count($product->getData('wishlist')) ?  include ('Template/_wishlist-template.php') : include ('Template/notFound/_wishlist-notFound.php');
/* !include wishlist items if it's not empty */


/* include new phones section */
include ('Template/_new-phones.php');
/* !include new phones section */

?>

<?php
//include footer
include('footer.php');
?>

