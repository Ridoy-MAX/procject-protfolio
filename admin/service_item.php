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
$get_query = "SELECT * FROM service_items";
$from_db = mysqli_query($db_connect,$get_query);
// $adter_assoc = mysqli_fetch_assoc($from_db);
?>




<section class="mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-3">


         <div class="card">
           <div class="card-header">

             <h5>Service item add from</h5>
           </div>
           <div class="card-body">
                          <form action="service_item_post.php" method="post" class="card " enctype="multipart/form-data">

                                       <div class="mb-3 mt-4">
                                         <label  class="form-label"> Heading</label>
                                         <input type="text" class="form-control"  name="service_item_head">
                                       </div>
                                       <div class="mb-3">
                                         <label  class="form-label">Detail</label>
                                         <input type="text" class="form-control"  name="service_item_deatil">
                                       </div>
                                       <div class="mb-3">
                                         <label class="form-label">Image</label>
                                         <input type="file" class="form-control"  name="service_item_image">
                                       </div>


                                        <button type="submit" class="btn btn-primary">Add</button>


                          </from>
           </div>

         </div>


      </div>
      <div class="col-md-7">


        <div class="container ">
          <div class="row ">
            <div class=" w-100 ">
              <h3>Item List</h3>
            </div>
            <div class=" w-100">
            <table class="table  table-hover  p-2">
                <thead>
                  <tr>
                    <th >Number</th>
                    <th >item_head</th>
                    <th >item_deatil</th>


                    <th >Action</th>
                  </tr>
                </thead>
                <tbody>

                    <?php
                       foreach ($from_db as $key => $service):
                     ?>





                  <tr >
                   <!-- <th scope="row">1</th> -->
                           <td><?=$key+1?></td>
                       <td><?=$service['service_item_head']?></td>
                       <td><?=$service['service_item_deatil']?></td>


                       <td>   <img src="<?= $service['image_location'] ?>" alt="" width="150px"> </td>

                      <td>
                          <!-- <a href="banner-edit.php?banner_id=<?=$banner['id']?>" class="btn btn-info"> Edit</a> -->
                          <a href="service_item_delete.php?service_items=<?=$service['id']?>" class="btn btn-warning"> Delete</a>
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
