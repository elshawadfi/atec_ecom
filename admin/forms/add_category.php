<fieldset>
    <div class="form-group">
        <label for="f_name">Category name</label>
          <input type="text" name="name" value="<?php  echo htmlspecialchars($edit ? $category['name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder=" Name" class="form-control" required="required" id = "f_name">
    </div> 

    <div class="form-group">
        <label for="f_name">Category image</label>
          <input type="file" name="image"  placeholder="image  Name" class="form-control" required="required" >
    </div> 
<?php

if($edit){
    ?>
<input type="hidden" name="_image" value="<?= $category['image'] ?>">
    <?php
}
?>
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
