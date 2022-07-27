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
$get_query = "SELECT user_name,email,phone FROM users";
$from_db = mysqli_query($db_connect,$get_query);


?>














<div class="container mt-5">
  <div class="row ">
    <div class=" w-100 mt-5">
      <h3>All users</h3>
    </div>
    <div class=" w-100">
    <table class="table  table-hover mt-1 p-2">
        <thead>
          <tr>

            <th >Name</th>
            <th >Email</th>
            <th >Phone</th>
          </tr>
        </thead>
        <tbody>



       <?php
       foreach ($from_db as $user) {

        ?>


        <tr>
           <!-- <th scope="row">1</th> -->

           <td><?=$user['user_name']?></td>
           <td><?=$user['email']?></td>
           <td><?=$user['phone']?></td>

         </tr>




      <?php
       }
        ?>



















        </tbody>
      </table>
    </div>

  </div>
</div>




    <?php

require_once('../footer.php');
?>
