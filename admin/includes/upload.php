<?php 

class Upload_dash{


public 
function upload($target_dir){
	$name = $_FILES['image']['name'];
  // $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension

  if( in_array($imageFileType,$extensions_arr) ){  
  	$newname = md5(date('d-m-Y H:i:s')).".".$imageFileType;
     move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$newname);
     return $newname;

  }else{
  	return false; // file type is not in array 
  }
}


}