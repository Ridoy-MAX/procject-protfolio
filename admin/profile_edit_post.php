<?php
session_start();
// print_r($_POST);




$db_host_name = 'localhost';
$db_user_name = 'root';
$db_password = '';
$db_name = 'from_table';
//databse connect=========
$db_connect = mysqli_connect($db_host_name, $db_user_name, $db_password, $db_name);









if($_POST['user_name'] == NULL || $_POST['phone'] == NULL){
  $_SESSION['profile_err'] = "All field required !";
  header('location: profile_edit.php');
}
else {
  $user_name = $_POST['user_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];


  $update_query = "UPDATE users SET user_name='$user_name', phone='$phone' WHERE email='$email'";
  mysqli_query($db_connect,$update_query);
    header('location: profile.php');
}
 ?>
