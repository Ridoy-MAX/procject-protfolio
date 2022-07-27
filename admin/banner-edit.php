<?php
session_start();
// require_once('index.php');
include_once ('../header.php');

include_once ('navbar.php');
include_once ('db.php');

// include_once ('db.php');
// print_r($_POST);
//db information


if (!isset($_SESSION['user_status'])){
  header('location: ../login.php');
  // code...
}
  $id=$_GET['banner_id'];

$get_query = "SELECT * FROM banners WHERE id =$id";
$banner_from_db = mysqli_query($db_connect,$get_query);
$after_assoc =mysqli_fetch_assoc($banner_from_db);
?>




<section class="mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-6 m-auto">


         <div class="card">
           <div class="card-header ">

             <h5>Banner Edit from</h5>
           </div>
           <div class="card-body">
                          <form action="banner_edit_post.php" method="post" class="card " enctype="multipart/form-data">

                                       <div class="mb-3 mt-4">
                                         <label for="exampleInputPassword1" class="form-label">Banner sub title</label>
                                         <input type="text" class="form-control" id="exampleInputPassword1" name="banner_sub_title" value="<?=$after_assoc['banner_sub_title']?>">
                                       </div>
                                       <div class="mb-3">
                                         <label for="exampleInputPassword1" class="form-label">Banner title</label>
                                         <input type="text" class="form-control" id="exampleInputPassword1" name="banner_title" value="<?=$after_assoc['banner_title']?>">
                                       </div>
                                       <div class="mb-3">
                                         <label for="exampleInputPassword1" class="form-label">Banner details</label>
                                         <input type="text" class="form-control" id="exampleInputPassword1" name="banner_detail" value="<?=$after_assoc['banner_detail']?>">
                                       </div>
                                       <div class="mb-3">
                                         <label  class="form-label">Banner image</label>
                                         <input type="file" class="form-control"  name="banner_image">
                                       </div>
                                       <div class="mb-3">
                                         <img src="<?=$after_assoc['image_location']?>" alt="" style="width:200px">

                                       </div>

                                        <button type="submit" class="btn btn-primary">Update</button>


                          </from>
           </div>

         </div>


      </div>


    </div>

  </div>
</section>














<?php

require_once('../footer.php');
?>
