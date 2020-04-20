<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';
// require_once BASE_PATH . '/includes/upload.php';

// Users class
// require_once BASE_PATH . '/lib/Users/Users.php';
// $users = new Users();
  $db = getDbInstance();
  $brand =  $db->get('brand');
  $edit = false;
// echo BASE_PATH;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  


        // Sanitize input post if we want
        $data_to_db = array_filter($_POST);

        // Check whether the user name already exists
        $db = getDbInstance();
        

       $u= new Upload_dash();
       $upload = $u->upload(BASE_PATH .'/uploads/');
 

       if($upload != false){
         $data_to_db['image'] = $upload;
         $data_to_db['brand_id'] = $_POST['brand_id'];
         $data_to_db['is_new'] = true;

        // $data_to_db['date'] = '1-1-1';
        $db = getDbInstance();
        $last_id = $db->insert('products', $data_to_db);
        if ($last_id) {
            $_SESSION['success'] = 'product user added successfully';
            header('location: products.php');
            exit;
        }else{
             $_SESSION['failure'] = 'data required';
        }




      
        }else{
          $_SESSION['failure'] = 'image is not supported!';
        }
    
}
?>
<?php include BASE_PATH . '/includes/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Add product</h2>
        </div>
    </div>
    <!-- Flash messages -->
    <?php include BASE_PATH . '/includes/flash_messages.php';?>
    <form class="form" action="" method="post" id="customer_form" enctype="multipart/form-data">
        <?php include BASE_PATH . '/forms/products.php';?>
    </form>
</div>
<script type="text/javascript">
$(document).ready(function(){
   $('#customer_form').validate({
       rules: {
            f_name: {
                required: true,
                minlength: 3
            },
            l_name: {
                required: true,
                minlength: 3
            },
        }
    });
});
</script>
<?php include BASE_PATH . '/includes/footer.php';?>
