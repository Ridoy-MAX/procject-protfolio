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

    <div class=" card w-100 col-md-8 m-auto">
      <div class="card-header bg-warning d-flex justify-content-between m-2">
        <h3 class="text-white">Profile edit from</h3>

      </div>

      <div class="card-body p-3">

          <form action="profile_edit_post.php" method="post" class="card col">

            <div class="col-md-10 m-auto p-3">


               <?php
                 if (isset($_SESSION['profile_err'])){

                ?>

                <div class="alert alert-danger" role="alert">
                  <?php
                  echo $_SESSION['profile_err'];
                  unset($_SESSION['profile_err']);
                  ?>

                </div>


                <?php
                 }
               ?>












              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                <input type="text" class="form-control" value="<?= $after_assoc['user_name'] ?> " name="user_name">
                <input type="hidden" class="form-control" value="<?= $after_assoc['email'] ?> " name="email">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Your Phone</label>
                <input type="text" class="form-control" value="<?=$after_assoc['phone'] ?> " name="phone">
              </div>

              <!-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
              <button type="submit" class="btn btn-primary">Update</button>


            </div>
          </form>


      </div>


    </div>

  </div>
</div>







<?php

require_once('../footer.php');
?>
