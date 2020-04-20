<fieldset>
    <div class="form-group">
        <label for="f_name">brand name</label>
          <input type="text" name="name" value="<?php  echo htmlspecialchars($edit ? $brand['name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Name" class="form-control" required="required" id = "f_name">
    </div> 

     <div class="form-group">
        <label for="f_name">brand desc</label>
          <input type="text" name="desc" value="<?php  echo htmlspecialchars($edit ? $brand['desc'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" desc" class="form-control" required="required" id = "f_name">
    </div> 

    <div class="form-group">
        <label for="f_name">brand image</label>
          <input type="file" name="image"  placeholder="image  Name" class="form-control"<?php echo  ($edit)? "" :"required='required'"; ?>  >
    </div> 

       <div class="form-group">
        <label for="f_name">category</label>
        <select  class="form-control"   name="category_id">
  <?php  

foreach ($category as $value) {
    $selected = "";
    if($edit){
       $selected = ($value['id'] == $brand['category_id']) ? "selected":"";
    }
   echo "<option ".$selected." value='".$value['id']."'>".$value['name']."</option>";
}

  ?>
        </select>
    </div> 
<?php

if($edit){
    ?>
<input type="hidden" name="_image" value="<?= $brand['image'] ?>">
    <?php
}
?>
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
