<?php
session_start();
// require_once('index.php');
?>


<?php
include_once ('header.php');


if (isset($_SESSION['user_status'])){
  header('location: admin/dashbord.php');
  // code...
}
// include 'header.php';

?>







  <form action="login_result.php" method="post" class="card col-md-5 m-auto mt-5">

    <div class="col-md-10 m-auto p-3">

            <div class="card bg-black d-flex bg-primary container">
            <div class="row">
                    <div class="col-md-6">
                            <h3 class="text-white" >Login</h3>
                    </div>

                    <div class="col-md-6 text-end">
                        <a class="text-wrap " style="font-size:25px" href="register.php" >Register</a>
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














      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Your Email</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="email">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Your password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>

      <button type="submit" class="btn btn-primary">Login</button>


    </div>
  </form>



  <?php

  require_once('footer.php');
  ?>
