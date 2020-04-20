
<?php 

require "header.php";
 require_once  'admin/config/config.php';

if(isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
    $db = getDbInstance();
      $db->where('category_id', $cat_id);
    // Get data to pre-populate the form.
      $brand = $db->get('brand');



}else{
    header("LOCATION: index.php");
}

?>
               <div class="deal-area pt-100 pb-100 bg-img" style="background-image:url(assets/images/bg/564.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="deal-content text-center">
                           <!--  <h3>Sale 30%</h3> -->
                            <h2>Fashion</h2>
                          <!--   <div class="timer"> -->
                                  <h2>brands zag</h2>
                            <!-- </div> -->
                            <div class="deal-btn default-btn btn-hover">
                              <!--   <a class="btn-size-xs btn-bg-theme btn-color black-color" href="#">View More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <-----------ebrahim tara--------------> <!-- --> 
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

if(count($brand)  == 0){
    echo "<center>there is no any brands here</center>";
}else{

foreach ($brand as $br) {
  ?>

 <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap mb-30">
                            <a href="brand.php?br_id=<?= $br['id'] ?>"><img class="animated" src="admin/uploads/<?= $br['image'] ?>" alt=""></a>
                            <div class="banner-content banner-position-1">
                                <h2> <?= $br['name'] ?></h2>
                                    <div class="banner-btn">
                                        <a href="brand.php?br_id=<?= $br['id'] ?>">view products</a>
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
     

        <?php
require "footer.php";

        ?>