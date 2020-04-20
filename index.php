<?php

require "header.php";


// session_start();
 require_once  'admin/config/config.php';
require_once  'admin/lib/category/category.php';
$category = new category();
$order_by	= filter_input(INPUT_GET, 'order_by');
$order_dir	= filter_input(INPUT_GET, 'order_dir');
$search_str	= filter_input(INPUT_GET, 'search_str');
// Per page limit for pagination
$pagelimit = 15;

// Get current page
$page = filter_input(INPUT_GET, 'page');
if (!$page) {
	$page = 1;
}

// If filter types are not selected we show latest added data first
if (!$order_by) {
	$order_by = 'id';
}
if (!$order_dir) {
	$order_dir = 'Desc';
}

// Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();
$select = array('id', 'name', 'image');

// Start building query according to input parameters
// If search string
// if ($search_str
// 	$db->where('f_name', '%' . $search_str . '%', 'like');
// 	$db->orwhere('l_name', '%' . $search_str . '%', 'like');
// }
// If order direction option selected
if ($order_dir) {
	$db->orderBy($order_by, $order_dir);
}

// Set pagination limit
$db->pageLimit = $pagelimit;

// Get result of the query
$rows = $db->arraybuilder()->paginate('category', $page, $select);
$total_pages = $db->totalPages;

$products = $db->get('products');



?>
     <div class="deal-area pt-100 pb-100 bg-img" style="background-image:url(assets/images/bg/882.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="deal-content text-center">
                           <!--  <h3>Sale 30%</h3> -->
                            <h2>souq zag.com</h2>
                          <!--   <div class="timer"> -->
                                 <!--  <h2>zag</h2> -->
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
        <div class="banner-area pt-20 pb-70 padding-10-row-col">
            <div class="container-fluid">
                <div class="row">
                    <?php

foreach ($rows as  $val):
	// ($order_by === $opt_value) ? $selected = 'selected' : $selected = '';
	// echo ' <option value="' . $opt_value . '" ' . $selected . '>' . $opt_name . '</option>';
// endforeach;
?>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap mb-30">
                            <a href="category.php?cat_id=<?= $val['id'] ?>"><img class="animated" src="admin/uploads/<?= $val['image']  ?>" alt=""></a>
                            <div class="banner-content banner-position-1">
                                <h2><?=  $val['name'] ?></h2>
                                    <div class="banner-btn">
                                        <a href="category.php?cat_id=<?= $val['id'] ?>">Shop Now</a>
                                    </div>
                            </div>
                        </div>
                    </div>
<?php  endforeach; ?>
                    <!-- <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap mb-30">
                            <a href="i2.html"><img class="animated" src="assets/images/banner/333.png" alt=""></a>
                            <div class="banner-content banner-position-1">
                                <h2>Restaurant <br>brands</h2>
                                    <div class="banner-btn">
                                        <a href="product-details.html">Shop Now</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap mb-30">
                            <a href="i3.html"><img class="animated" src="assets/images/banner/444.png" alt=""></a>
                            <div class="banner-content banner-position-1">
                                <h2>Electronics <br>brands</h2>
                                    <div class="banner-btn">
                                        <a href="product-details.html">Shop Now</a>
                                    </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="product-area pb-70">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <h2>افضل العروض</h2>
                  <!--   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                </div>
                <div class="product-tab-list nav pb-50 text-center">
                    <a class="active"  href="#product-1" data-toggle="tab">
                        <h4>New Arrivals </h4>
                    </a>
                    <a href="#product-2" data-toggle="tab">
                        <h4>Best Sellers </h4>
                    </a>
                    <a href="#product-3" data-toggle="tab">
                        <h4>Sale Items</h4>
                    </a>
                </div>
                <div class="tab-content jump">
                    <div id="product-1" class="tab-pane">
                        <div class="row">

<?php

$count = 0 ;
foreach($products as $pro):
if($count == 20 ){
    break;
}

$count ++

?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-1 mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="admin/uploads/<?= $pro['image'] ?>" alt="product"></a>
                                        <span class="product-badge"></span>
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                            <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                            <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding text-center">
                                        <h4><a href="product-details.html"><?= $pro['name'] ?>/a></h4>
                                        <div class="product-rating">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </div>
                                        <div class="product-price">
                                            <span>$<?= $pro['price'] ?></span>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>



<?php endforeach ?>


                        
                        </div>
                    </div>
                 
                </div>
            </div>
       
      <!--  <!- --------------------ebrahim tarak-------------------------> -->
        </div>


<?php
require "footer.php";