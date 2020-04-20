<fieldset>
    <div class="form-group">
        <label for="f_name">product name</label>
          <input type="text" name="name" value="<?php  echo htmlspecialchars($edit ? $product['name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Name" class="form-control" required="required" id = "name">
    </div> 
     <div class="form-group">
        <label for="f_name">product desc</label>
          <input type="text" name="desc" value="<?php  echo htmlspecialchars($edit ? $product['desc'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" desc" class="form-control" required="required" id = "desc">
    </div> 
     <div class="form-group">
        <label for="f_name">product price</label>
          <input type="number" name="price" value="<?php  echo htmlspecialchars($edit ? $product['price'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" price" class="form-control" required="required" id = "price">
    </div> 

    <div class="form-group">
        <label for="f_name">product qty</label>
          <input type="number" name="qty" value="<?php  echo htmlspecialchars($edit ? $product['qty'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" qty" class="form-control" required="required" id = "qty">
    </div> 
    <div class="form-group">
        <label for="f_name">brand image</label>
          <input type="file" name="image"  class="form-control"  <?php echo  ($edit)? "" :"required='required'"; ?>  >
    </div> 

       <div class="form-group">
        <label for="f_name">brand</label>
        <select  class="form-control"   name="brand_id">
  <?php  

foreach ($brand as $value) {
    $selected = "";
    if($edit){
       $selected = ($value['id'] == $product['brand_id']) ? "selected":"";
    }
   echo "<option ".$selected." value='".$value['id']."'>".$value['name']."</option>";
}

  ?>
        </select>
    </div> 
<?php

if($edit){
    ?>
<input type="hidden" name="_image" value="<?= $product['image'] ?>">
    <?php
}
?>
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
