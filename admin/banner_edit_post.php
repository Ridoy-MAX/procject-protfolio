<?php
print_r($_POST);
require_once 'db.php';

$id = $_POST['id'];
$banner_sub_title = $_POST['banner_sub_title'];
$banner_title = $_POST['banner_title'];
$banner_detail = $_POST['banner_detail'];

$update_query ="UPDATE banners SET banner_sub_title='$banner_sub_title', banner_title='$banner_title',banner_detail='$banner_detail' WHERE id=$id";

mysqli_query($db_connect,$update_query);
// print_r($_FILES);
if ($_FILES['banner_image']['name']) {
  $uploaded_image_original_name =$_FILES['banner_image']['name'];
  $uploaded_image_original_size =$_FILES['banner_image']['size'];




  if ($uploaded_image_original_size <= 2000000){
      $after_explode = explode('.', $uploaded_image_original_name);
      $image_extention = end($after_explode);
      $allow_extenstion = array('jpg','JPG','jpeg','JPEG','png','PNG');
      // print_r($image_extention);
      if (in_array($image_extention,$allow_extenstion)){

     $get_image_location_query = "SELECT image_location FROM banners WHERE id =$id";
        //
      $image_location_from_db =  mysqli_query($db_connect, $insert_query);
      $after_assoc_image_location = mysqli_fetch_assoc($image_location_from_db);
      unlink("img/".$after_assoc_image_location['image_location']);
      // echo $after_assoc_image_location['image_location'];

        //
        // $id_from_bd = mysqli_insert_id($db_connect);
        $image_new_name =  $id_from_bd . "." .   $image_extention;
      //
      $save_location = "img/" .$image_new_name;
      move_uploaded_file($_FILES['banner_image']['tmp_name'],$save_location);
        // echo "done";
      $image_location = "img/" .$image_new_name;
    //
    $update_image_query = "UPDATE banners SET image_location='$image_location'  WHERE id=$id";
      mysqli_query($db_connect,$update_image_query);
      header('location:banner.php');

      }
      else {
        echo "ni";
      }

    // code...
  }
  else {
    echo "upload kora jabe na mothercod";
  }



}

else {
    header('location:banner.php');
}
 ?>
