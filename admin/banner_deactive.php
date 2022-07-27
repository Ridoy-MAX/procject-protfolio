<?php
include_once ('db.php');
// print_r($_GET);
 $id = $_GET['banner_id'];

$update_query = "UPDATE banners SET active_status=2  WHERE id='$id'";
mysqli_query($db_connect,$update_query);
header('location: banner.php')

 ?>
