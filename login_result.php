<?php

session_start();
// print_r($_POST);
//db information
$db_host_name = 'localhost';
$db_user_name = 'root';
$db_password = '';
$db_name = 'from_table';





$email = $_POST['email'];
$password = md5($_POST['password']) ;


//databse connect=========
$db_connect = mysqli_connect($db_host_name, $db_user_name, $db_password, $db_name);
$checking_query = "SELECT COUNT(*) AS total_users FROM users WHERE email ='$email' AND password='$password'";
$from_db = mysqli_query($db_connect,$checking_query);
$after_assoc =mysqli_fetch_assoc($from_db);
// print_r($after_assoc);

if ($after_assoc['total_users']==1) {
  $_SESSION['email'] = $email;
  $_SESSION['user_status'] = 'yes';
  header('location: admin/dashbord.php');

}
else {
  $_SESSION['err_msg'] = "Your credentials are wrong register";
  header('location: login.php');


}
//information from form==========














?>
