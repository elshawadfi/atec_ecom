<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

// Sanitize if you want
$product_id = filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation', FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;
$db = getDbInstance();

// Handle update request. As the form's action attribute is set to the same script, but 'POST' method, 
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{

    // Get customer id form query string parameter.
    $product_id = filter_input(INPUT_GET, 'product_id', FILTER_SANITIZE_STRING);

    // Get input data
    $data_to_db = filter_input_array(INPUT_POST);

// $_FILES['image']
if(empty($_FILES['image']['name'])){

$data_to_db['image']=$_POST['_image'];
}
else{
     $u= new Upload_dash();
       $upload = $u->upload(BASE_PATH .'/uploads/');
       if($upload != false){
        $data_to_db['image'] = $upload;
       
       }
}

    
    // Insert user and timestamp
    // $data_to_db['updated_by'] = $_SESSION['user_id'];
    // $data_to_db['updated_at'] = date('Y-m-d H:i:s');

    // $db = getDbInstance();
    // $db->where('id', $brand_id);
    // $stat = $db->update('brand', $data_to_db);
unset($data_to_db['_image']);
 $data_to_db['is_new'] = true;
 $db->where('id', $product_id);
        $stat = $db->update('products', $data_to_db);

    if ($stat)
    {
        $_SESSION['success'] = 'brand updated successfully!';
        // Redirect to the listing page
        header('Location: products.php');
        // Important! Don't execute the rest put the exit/die.
        exit();
    }
}

// If edit variable is set, we are performing the update operation.
if ($edit)
{
    $db->where('id', $product_id);
    // Get data to pre-populate the form.
    $product = $db->getOne('products');

}
 $brand =  $db->get('brand');
?>
<?php include BASE_PATH.'/includes/header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Update product</h2>
        </div>
    </div>
    <!-- Flash messages -->
    <?php include BASE_PATH.'/includes/flash_messages.php'; ?>
    <form class="form" action="" method="post" id="customer_form" enctype="multipart/form-data">
        <?php include BASE_PATH.'/forms/products.php'; ?>
    </form>
</div>
<?php include BASE_PATH.'/includes/footer.php'; ?>
