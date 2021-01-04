<?php
    ob_start();
    //include header
    include('header.php');
?>
<?php
    /* include banner area */
        include ('Template/_banner-area.php');
    /* !include banner area */

    /* include top sale */
        include ('Template/_top-sale.php');
    /* !include top sale */

    /* include special price */
        include ('Template/_special-price.php');
    /* !include special price */

    /* include banner ads */
        include ('Template/_banner-ads.php');
    /* !include banner ads */

    /* include new phones */
        include ('Template/_new-phones.php');
    /* !include new phones */

    /* include bolg */
        include ('Template/_blogs.php');
    /* !include blog */

?>

<?php
//include footer
include('footer.php');
?>