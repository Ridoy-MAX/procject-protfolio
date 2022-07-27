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
$get_query = "SELECT * FROM guest_messages";
$from_db = mysqli_query($db_connect,$get_query);
?>



<div class="container mt-5">
  <div class="row ">
    <div class=" w-100 mt-5">
      <h3>All users</h3>
    </div>
    <div class=" w-100">
      <form class="" action="delete_marked_message.php" method="post">


    <table class="table  table-hover mt-1 p-2">
        <thead>
          <tr>
            <th >Serial</th>
            <th >Guest Name</th>
            <th >Guest Email</th>
            <th >Message</th>
            <th >Action</th>
          </tr>
        </thead>
        <tbody>



       <?php
       foreach ($from_db as $key => $messages) {

        ?>



          <tr class=" <?php
                  if ($messages['read_status'] == 2) {
                    echo "bg-info text-white";
                    // code...
                  }
                  else {
                      echo "text-dark";
                    // code...
                  }
              ?>

          ">
           <!-- <th scope="row">1</th> -->
            <td><?=$key +1 ?> <input type="checkbox" name="check" class="ms-2"> </td>
           <td><?=$messages['guest_name']?></td>
           <td><?=$messages['guest_email']?></td>
           <td><?=$messages['guest_message']?></td>
           <td>

             <?php
                if  ($messages['read_status'] == 2):
             ?>
             <a href="message_status.php?message_id=<?=$messages['id']?>" class="btn btn-sm btn-warning text-white">Mark as read</a>
             <?php
                  else :
              ?>
                     <button value="guest_message_delete.php?message_id=<?=$messages['id']?>" type="button" class="del-btn btn btn-warning"> Delete</button>
             <?php
                endif
              ?>
         </td>

         </tr>




      <?php
       }
        ?>



















        </tbody>
        <tfoot>
           <tr>
             <td>
                 <button type="submit" class="btn btn sm">Delete mark all</button>
             </td>
           </tr>
        </tfoot>
      </table>
    </div>

       </form>

  </div>
</div>

<script>
$('.del-btn').click(function(){
   var link= $(this).val();

   Swal.fire({
     title: 'Are you sure?',
     text: "You won't be able to revert this!",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
     if (result.isConfirmed) {
       // Swal.fire(
       //   'Deleted!',
       //   'Your file has been deleted.',
       //   'success'
       // )
       window.location.herf - link
       // alert(link)
    }
   })



});

</script>



<?php

require_once('../footer.php');
?>
