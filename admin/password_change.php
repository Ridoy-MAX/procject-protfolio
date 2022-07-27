<?php
session_start();
// require_once('index.php');
include_once ('../header.php');
include_once ('navbar.php');





if (!isset($_SESSION['user_status'])){
  header('location: ../login.php');
  // code...123aA$
}










?>




<div class="container mt-5">


    <form action="change_password_post.php" method="post" class="card col-md-9 m-auto mt-5">

      <div class="col-md-10 m-auto p-3">

      <div class="card bg-black d-flex bg-primary container">
        <div class="row">
        <div class="col-md-9">
              <h3 class="text-white" >Password change from</h3>
      </div>

        <div class="col-md-6 text-end">

      </div>
        </div>



      </div>


         <?php
           if (isset($_SESSION['profile_err'])){

          ?>

          <div class="alert alert-danger mt-1" role="alert">
            <?php
            echo $_SESSION['profile_err'];
            unset($_SESSION['profile_err']);
            ?>

          </div>


          <?php
           }
         ?>


         <?php
           if (isset($_SESSION['proces_com'])){
          ?>
          <div class="alert alert-success" role="alert">
            <?php
            echo $_SESSION['proces_com'];
            unset($_SESSION['proces_com']);
            ?>
          </div>

          <?php
           }
         ?>








        <div class="mb-3 mt-4">
          <label for="exampleInputPassword1" class="form-label">Old password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="old_password">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">New password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="new_password">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password">
        </div>
        <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
        <button type="submit" class="btn btn-primary">Update</button>


      </div>
    </form>

</div>






  <?php

  require_once('../footer.php');
  ?>
