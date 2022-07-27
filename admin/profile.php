<?php
session_start();
// require_once('index.php');
include_once ('../header.php');
include_once ('navbar.php');
// print_r($_POST);
//db information


if (!isset($_SESSION['user_status'])){
  header('location: ../login.php');
  // code...
}

$db_host_name = 'localhost';
$db_user_name = 'root';
$db_password = '';
$db_name = 'from_table';
//databse connect=========
$db_connect = mysqli_connect($db_host_name, $db_user_name, $db_password, $db_name);



//databse connect=========
$login_email =  $_SESSION['email'];
$get_query = "SELECT user_name,email,phone FROM users WHERE email='$login_email'";
$db_result = mysqli_query($db_connect,$get_query);
$after_assoc =mysqli_fetch_assoc($db_result);
?>

<div class="container mt-5">
  <div class="row ">
    <div class=" w-100 mt-5">

    </div>
    <div class=" card w-100 ">
      <div class="card-header bg-primary d-flex justify-content-between">
        <h3 class="text-white">Profile information</h3>
        <a href="profile_edit.php" class="btn btn-sm btn-warning text-dark">Edit</a>
      </div>

      <div class="card-body p-3">

          <h6><span class="text-primary"> Name :</span> <?= $after_assoc['user_name'] ?> </h6>
            <h6><span class="text-primary"> Email :</span>  <?=$after_assoc['email'] ?> </h6>
              <h6><span class="text-primary">Number : </span>  <?=$after_assoc['phone'] ?> </h6>


      </div>


    </div>

  </div>
</div>







<?php

require_once('../footer.php');
?>
