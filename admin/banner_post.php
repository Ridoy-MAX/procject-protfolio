<?php


session_start();

include_once ('db.php');
// print_r($_POST);
//db information


// if (!isset($_SESSION['user_status'])){
//   header('location: ../login.php');

//
// print_r($_FILES['banner_image']);
$banner_sub_title = $_POST['banner_sub_title'];
$banner_title = $_POST['banner_title'];
$banner_detail = $_POST['banner_detail'];


 $uploaded_image_original_name =$_FILES['banner_image']['name'];
 $uploaded_image_original_size =$_FILES['banner_image']['size'];

if ($uploaded_image_original_size <= 2000000){
    $after_explode = explode('.', $uploaded_image_original_name);
    $image_extention = end($after_explode);
    $allow_extenstion = array('jpg','JPG','jpeg','JPEG','png','PNG');
    // print_r($image_extention);
    if (in_array($image_extention,$allow_extenstion)){
      $insert_query = "INSERT INTO banners (banner_sub_title,banner_title,banner_detail,image_location) VALUES ('$banner_sub_title','$banner_title','$banner_detail','primary location')";

      mysqli_query($db_connect, $insert_query);

      $id_from_bd = mysqli_insert_id($db_connect);
      $image_new_name =  $id_from_bd . "." .   $image_extention;

    $save_location = "img/" .$image_new_name;
    move_uploaded_file($_FILES['banner_image']['tmp_name'],$save_location);
      // echo "done";
    $image_location = "img/" .$image_new_name;

  $update_query = "UPDATE banners SET image_location='$image_location'  WHERE id=$id_from_bd";
    mysqli_query($db_connect,$update_query);
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

 ?>
