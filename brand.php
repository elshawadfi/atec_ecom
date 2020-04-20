<?php 


require "header.php";



if(isset($_GET['br_id'])){
    $cat_id = $_GET['br_id'];
    $db = getDbInstance();
      $db->where('id', $cat_id);

$brand_page = $db->getOne('brands');

      $db->where('brand_id', $cat_id);
    // Get data to pre-populate the form.
      $products = $db->get('products');

 $db->where('id', $cat_id);
    // Get data to pre-populate the form.
      $brand = $db->get('products');




}else{
    header("LOCATION: index.php");
}
?>
  <div class="breadcrumb-area pt-180 pb-100 bg-img" style="background-image:url(assets/images/bg/2.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
<!--                         <h1>towen teem</h1>
 -->                    </div>
                    <ul>
                     <!--    <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">shop grid no sidebar </li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="shop-area pt-95 pb-100">
            <div class="container">
               <!--  <div class="row"> -->
                <!--     <div class="col-lg-12"> -->
                      <!--   <h2>ملابس رجالي</h2> -->
                        <div class="shop-top-bar">
                            <!--   <div class="container">
                                <h3>hima</h3>
 -->
                          <!--   <div class="select-shoing-wrap">
                                  <div class="container">
                                    <select>
                                        <p>hima</p>
                                        <option value="">Sort by newness</option>
                                        <option value="">A to Z</option>
                                        <option value=""> Z to A</option>
                                        <option value="">In stock</option>
                                    </select>
                                </div> -->
                                 <div class="container">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
                           <!-- <h2> تاون تيم ( ملابس رجالي) </h2> -->
                    <h2>  <?= $brand_page['desc'] ?></h2>
                    
                            </div>

                            <div class="shop-tab nav">
                                <a class="active" href="#shop-1" data-toggle="tab">
                                    <i class="la la-th-large"></i>
                                </a>
                                <a href="#shop-2" data-toggle="tab">
                                    <i class="la la-reorder"></i>
                                </a>
                            </div>
                        </div>

     <div class="shop-bottom-area mt-35">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
<?php

if(count($products) == 0){
	echo "<center>No product found</center>";
}else{
foreach($products as $pr){
?>


   <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="product-wrap product-border-1 mb-30">
                                                <div class="product-img">
                                                    <a href="product.php?id=<?= $pr['id'] ?>"><img src="admin/uploads/<?= $pr['image'] ?>" alt="product"></a>
                                                    <!-- <span class="product-badge">-30%</span> -->
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                        <a title="Add To Cart" href="add_cart.php?pr_id=<?= $pr['id'] ?>"><i class="la la-shopping-cart"></i></a>
                                                        <!-- <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a> -->
                                                    </div>
                                                </div>
                                                <div class="product-content product-content-padding text-center">
                                                    <h4><a href="product-details.html"><?= $pr['name'] ?></a></h4>
                                                    <div class="product-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$<?= $pr['price'] ?></span>
                                                        <!-- <span class="old">£230.00</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


<?php
}

}



?>
                                     
                                      
                                    </div>
                                </div>
                          
                            </div>
                              </div>

                    </div>
                </div>
            </div>
        </div>

<?php
require "footer.php";