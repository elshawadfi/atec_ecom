
<?php


require "header.php";

$item_cart = $_SESSION['cart'];


  $db = getDbInstance();


// if(isset($_GET['pr_id'])){

//  $new =array(
// 'pr_id'=>$_GET['pr_id'],
// 'qty'=>1
//  );
// array_push( $new , $_SESSION['cart']);

// }

// print_r($_SESSION['cart']);

// die();

?>
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
                        <h2>cart page</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">cart </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php
$total_price = 0 ;
foreach ($item_cart as  $value):


    $db->where('id', $value['pr_id']);
    $product = $db->getOne('products');
$total_price += $product['price'] * $value['quantity'] ;

   ?>

   <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="admin/uploads/<?= $product['image'] ?>" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?= $product['name']  ?></a></td>
                                            <td class="product-price-cart"><span class="amount">$<?=  $product['price']?></span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input id="pr_id_<?= $value['pr_id'] ?>" class="cart-plus-minus-box" type="text" name="qtybutton" value="<?= $value['quantity']  ?>">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$ <?=  $product['price'] * $value['quantity']  ?></td>
                                            <td class="product-remove">
                                                <a href="#" onclick="update_cart(<?= $product['id'] ?>)"><i class="la la-pencil"></i></a>
                                                <a href="remove_cart.php?id=<?= $product['id'] ?>"><i class="la la-close"></i></a>
                                            </td>
                                        </tr>


   <?php


endforeach;


?>

                                     
                                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>Update Shopping Cart</button>
                                            <a href="#">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">procced to your order </h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>.</p>
                                        <div class="tax-select-wrapper">

<form action="add_order.php" method="POST">
                                            <div class="tax-select">
                                                <label>
                                                    * name
                                                </label>
                                                <input type="text" name="name" >
                                            </div>
                                             <div class="tax-select">
                                                <label>
                                                    * email
                                                </label>
                                                <input type="text" name="email" >
                                            </div>
                                             <div class="tax-select">
                                                <label>
                                                    * address
                                                </label>
                                                <input type="text" name="address" >
                                            </div>
                                             <div class="tax-select">
                                                <label>
                                                    * phone
                                                </label>
                                                <input type="text" name="phone" >
                                            </div>
                                       
                                            <div class="tax-select">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text" name="zipcode">
                                            </div>
                                             <div class="tax-select">
                                                <label>
                                                    cash on delivery 
                                                </label>
                                               
                                            </div>


                                            <button class="cart-btn-2" type="submit">check-out order</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>


                                    
                                    <h5>Total products <span>$<?=  $total_price ?></span></h5>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
function update_cart(id){
    // alert(id);
var quantity = $('#pr_id_'+id).val();

 window.location.href = "update_quantity.php?id=" + id + "&quantity=" + quantity;
// alert(bla);

}

</script>
        <?php 

        require "footer.php";