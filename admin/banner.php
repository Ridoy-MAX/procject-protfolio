<?php
session_start();
// require_once('index.php');
include_once ('../header.php');
include_once ('navbar.php');
include_once ('db.php');
// print_r($_POST);
//db information


// if (!isset($_SESSION['user_status'])){
//   header('location: ../login.php');
//   // code...
// }
$get_query = "SELECT * FROM banners";
$from_db = mysqli_query($db_connect,$get_query);
?>




<section class="mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-3">


         <div class="card">
           <div class="card-header">

             <h5>Banner add from</h5>
           </div>
           <div class="card-body">
                          <form action="banner_post.php" method="post" class="card " enctype="multipart/form-data">

                                       <div class="mb-3 mt-4">
                                         <label for="exampleInputPassword1" class="form-label">Banner sub title</label>
                                         <input type="text" class="form-control" id="exampleInputPassword1" name="banner_sub_title">
                                       </div>
                                       <div class="mb-3">
                                         <label for="exampleInputPassword1" class="form-label">Banner title</label>
                                         <input type="text" class="form-control" id="exampleInputPassword1" name="banner_title">
                                       </div>
                                       <div class="mb-3">
                                         <label for="exampleInputPassword1" class="form-label">Banner details</label>
                                         <input type="text" class="form-control" id="exampleInputPassword1" name="banner_detail">
                                       </div>
                                       <div class="mb-3">
                                         <label  class="form-label">Banner image</label>
                                         <input type="file" class="form-control"  name="banner_image">
                                       </div>

                                        <button type="submit" class="btn btn-primary">Update</button>


                          </from>
           </div>

         </div>


      </div>
      <div class="col-md-7">


        <div class="container mt-5">
          <div class="row ">
            <div class=" w-100 mt-5">
              <h3>Banner List</h3>
            </div>
            <div class=" w-100">
            <table class="table  table-hover mt-1 p-2">
                <thead>
                  <tr>
                    <th >Number</th>
                    <th >Banner sub title</th>
                    <th >Banner title</th>
                    <th >Banner details</th>
                    <th >Banner image</th>
                    <th >Active status</th>
                    <th >Action</th>
                  </tr>
                </thead>
                <tbody>



               <?php
               foreach ($from_db as $key => $banner):

                ?>



                  <tr class="">
                   <!-- <th scope="row">1</th> -->
                       <td><?=$key+1?></td>
                       <td><?=$banner['banner_sub_title']?></td>
                       <td><?=$banner['banner_title']?></td>
                       <td><?=$banner['banner_detail']?></td>
                       <td>
                           <img src="<?= $banner['image_location'] ?>" alt="" width="150px">

                      </td>
                      <td>
                          <?php
                                  if ($banner['active_status']==1):
                           ?>
                          <a href="#" class="btn btn-success"> Active</a>
                          <?php
                          else:
                           ?>
                             <a href="#" class="btn btn-warning"> Deactive</a>
                          <?php
                            endif
                           ?>
                      </td>

                      <td>




                        <?php
                                if ($banner['active_status']==1):
                         ?>
                         <a href="banner_deactive.php?banner_id=<?=$banner['id']?>" class="btn btn-warning">Make Deactive</a>
                        <?php
                        else:
                         ?>
                           <a href="banner_active.php?banner_id=<?=$banner['id']?>" class="btn btn-success">Make Active</a>

                        <?php
                          endif
                         ?>






                          <a href="banner-edit.php?banner_id=<?=$banner['id']?>" class="btn btn-info"> Edit</a>
                          <a href="banner-delete.php?banner_id=<?=$banner['id']?>" class="btn btn-warning"> Delete</a>
                      </td>

                 </tr>




              <?php
                  endforeach
              ?>



















                </tbody>
              </table>
            </div>

          </div>
        </div>



      </div>

    </div>

  </div>
</section>














<?php

require_once('../footer.php');
?>
