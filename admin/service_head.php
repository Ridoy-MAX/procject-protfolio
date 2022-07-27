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
$get_query = "SELECT * FROM service_heads";
$from_db = mysqli_query($db_connect,$get_query);
$adter_assoc = mysqli_fetch_assoc($from_db);
?>




<section class="mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-3">


         <div class="card">
           <div class="card-header">

             <h5>Service add from</h5>
           </div>
           <div class="card-body">
                          <form action="service_head_post.php" method="post" class="card " >

                                       <div class="mb-3 mt-4">
                                         <label  class="form-label">White heading</label>
                                         <input type="text" class="form-control"  name="black_head">
                                       </div>
                                       <div class="mb-3">
                                         <label  class="form-label">Green heading</label>
                                         <input type="text" class="form-control"  name="green_head">
                                       </div>
                                       <div class="mb-3">
                                         <label class="form-label">Sub heading</label>
                                         <input type="text" class="form-control"  name="service_sub_head">
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
              <h3> List</h3>
            </div>
            <div class=" w-100">
            <table class="table  table-hover  p-2">
                <thead>
                  <tr>
                    <th >Number</th>
                    <th >White heading</th>
                    <th >Green heading</th>
                    <th >Sub heading</th>

                    <th >Action</th>
                  </tr>
                </thead>
                <tbody>







                  <tr class="">
                   <!-- <th scope="row">1</th> -->

                       <td><?=$adter_assoc['black_head']?></td>
                       <td><?=$adter_assoc['green_head']?></td>
                       <td><?=$adter_assoc['service_sub_head']?></td>

                      <td>


                      </td>

                      <td>











                          <a href="banner-edit.php?banner_id=<?=$banner['id']?>" class="btn btn-info"> Edit</a>
                          <a href="banner-delete.php?banner_id=<?=$banner['id']?>" class="btn btn-warning"> Delete</a>
                      </td>

                 </tr>
























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
