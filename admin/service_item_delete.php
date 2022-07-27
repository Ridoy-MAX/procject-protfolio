<?php
session_start();

include_once ('db.php');
$id =$_GET ['service_items'];
$get_banner_location_query ="SELECT image_location FROM service_items WHERE id=$id";
$from_db =mysqli_query($db_connect,$get_banner_location_query);
$after_assoc = mysqli_fetch_assoc($from_db);

unlink("service/".$after_assoc['image_location']);


$delete_query ="DELETE FROM service_items WHERE id=$id";
mysqli_query($db_connect,$delete_query);
header('location:service_item.php')

?>
