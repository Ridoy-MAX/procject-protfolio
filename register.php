<?php
session_start();

?>


<?php
include_once 'header.php';

// include 'header.php';

?>







  <form action="result.php" method="post" class="card col-md-5 m-auto mt-5">

    <div class="col-md-10 m-auto p-3">

    <div class="card bg-black d-flex bg-primary container">
      <div class="row">
      <div class="col-md-6">
            <h3 class="text-white" >Register</h3>
    </div>

      <div class="col-md-6 text-end">
     <a class="text-wrap " style="font-size:25px" href="login.php" >Login</a>
    </div>
      </div>



    </div>
       <?php
         if (isset($_SESSION['err_msg'])){

        ?>

        <div class="alert alert-danger" role="alert">
          <?php
          echo $_SESSION['err_msg'];
          unset($_SESSION['err_msg']);
          ?>

        </div>


        <?php
         }
       ?>





       <?php
         if (isset($_SESSION['success_msg'])){
        ?>
        <div class="alert alert-success" role="alert">
          <?php
          echo $_SESSION['success_msg'];
          unset($_SESSION['success_msg']);
          ?>
        </div>

        <?php
         }
       ?>







      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Your Name</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="user_name">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Your Email</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Your Phone</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Your password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <!-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
      <button type="submit" class="btn btn-primary">Register</button>


    </div>
  </form>

  <?php

  // require_once('contact.php');
  ?>

  <?php

  require_once('footer.php');
  ?>
