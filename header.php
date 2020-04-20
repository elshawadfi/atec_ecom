<?php 
session_start();
 require_once  'admin/config/config.php';
// session_start();
$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

$count = count($_SESSION['cart']);

?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/eliza-preview/eliza/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2020 22:51:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>souqzagcom</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/line-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/themify.css">

    <!-- othres CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="main-wrapper wrapper-2">
        <header class="header-area sticky-bar section-padding-1">
            <div class="main-header-wrap">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8s">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="angle-shape"><a href="index.php">Home </a>
                                        
                                        </li>

                                        <?php

$db_h = getDbInstance();
$category_h = $db_h->get('category');

foreach($category_h as $cat_h){

    $db_h->where('category_id' , $cat_h['id']);
    $brand_h = $db_h->get('brand');

?>
   <li class="angle-shape"><a href="category.php?id=<?= $cat_h['id'] ?>"> <?= $cat_h['name'] ?></a>
<?php  if(count($brand_h) > 0 ) {  ?>
                                            <ul class="submenu">
<?php foreach ($brand_h as $b_h) {
 
?>
 <li><a href="brand.php?id=<?= $b_h['id'] ?>"><?= $b_h['name'] ?></a></li>

<?php 

}  ?>
                                        
                                            </ul>

                                            <?php   } ?>
                                        </li>

<?php
}

                                        ?>
                                          
                                        </li>
                                   
                                        <li><a href="contact.php"> Contact </a></li>
                             
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="header-right-wrap">
                                <div class="same-style cart-wrap">
                                    <a href="cart.php" class="cart-active">
                                        <i class="la la-shopping-cart"></i>
                                        <span class="count-style"><?= $count ?></span>
                                    </a>
                                </div>
                                <div class="same-style header-search ml-15">
                                    <a class="search-active" href="#"><i class="la la-search"></i></a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-mobile">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="assets/images/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">
                                <div class="same-style cart-wrap">
                                    <a href="cart.php" class="cart-active">
                                        <i class="la la-shopping-cart"></i>
                                        <span class="count-style"><?= $count ?></span>
                                    </a>
                                </div>
                                <div class="same-style mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class="la la-navicon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="la la-close"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="la la-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.php">Home</a>
                                    
                                </li>
                          <?php


foreach($category_h as $cat_h){

    $db_h->where('category_id' , $cat_h['id']);
    $brand_h = $db_h->get('brand');

?>
   <li class="angle-shape"><a href="category.php?id=<?= $cat_h['id'] ?>"> <?= $cat_h['name'] ?></a>
<?php  if(count($brand_h) > 0 ) {  ?>
                                            <ul class="submenu">
<?php foreach ($brand_h as $b_h) {
 
?>
 <li><a href="brand.php?id=<?= $b_h['id'] ?>"><?= $b_h['name'] ?></a></li>

<?php 

}  ?>
                                        
                                            </ul>

                                            <?php   } ?>
                                        </li>

<?php
}

                                        ?>

                                                  
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>
               
                <div class="quick-info">
                    <ul>
                        <li><i class="la la-phone"></i> +012 456 789</li>
                        <li> <i class="la la-envelope"></i> <a href="#">INFO@EXAMPLE.COM</a></li>
                        <li> <i class="la la-clock-o"></i> MON-SAT:8AM TO 9PM</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search start -->
        <div class="search-content-wrap main-search-active">
            <a class="search-close"><i class="la la-close"></i></a>
            <div class="search-content">
                <p>Start typing and press Enter to search</p>
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class="la la-search"></i></button>
                </form>
            </div>
        </div>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="la la-close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>

                        <?php

$item_cart_ = $_SESSION['cart'];
$total_price_ = 0 ;
foreach ($item_cart_ as  $value):


    $db_h->where('id', $value['pr_id']);
    $product_ = $db_h->getOne('products');
$total_price_ += $product_['price'] * $value['quantity'] ;
?>
<li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="admin/uploads/<?= $product_['image']  ?>" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#"> <?= $product_['name']  ?></a></h4>
                                <span><?= $value['quantity'] ?>× $<?= $product_['price'] ?></span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>

<?php

endforeach;
   ?>
                      
                      
                    </ul>
                    <div class="cart-total">
                     <?= $total_price_ ?>
                    </div>
                    <div class="cart-checkout-btn btn-hover default-btn">
                        <a class="btn-size-md btn-bg-black btn-color" href="cart.php">view cart</a>
                        <!-- <a class="no-mrg btn-size-md btn-bg-black btn-color" href="checkout.html">checkout</a> -->
                    </div>
                <div class="deal-area pt-100 pb-100 bg-img" style="background-image:url(assets/images/bg/564.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="deal-content text-center">
                           <!--  <h3>Sale 30%</h3> -->
                            <h2>Big Weekend Sale</h2>
                          <!--   <div class="timer"> -->
                                  <h2>Big Weekend Sale</h2>
                            <!-- </div> -->
                            <div class="deal-btn default-btn btn-hover">
                              <!--   <a class="btn-size-xs btn-bg-theme btn-color black-color" href="#">View More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>