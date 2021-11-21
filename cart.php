<?php
ob_start();
// include header.php file
include ('header.php');

     /*  include cart items if it is not empty */ 
     count($product->getData('cart')) ? include('Template/_cart-template.php'): include('Template/notfound/_cart_notfound.php');
     /*  include cart items if it is not empty */ 

    /*  include wishlist items if it is not empty */ 
    count($product->getData('wishlist')) ? include('Template/_wishlist_template.php'): include('Template/notfound/_wishlist_notfound.php');
    /*  include wishlist items if it is not empty */ 

    /*  include Top-sale section start */ 
    include('Template/_new-sneakers.php');
    /*  include Top-sale section end */ 

// include footer.php file
include ('footer.php');
