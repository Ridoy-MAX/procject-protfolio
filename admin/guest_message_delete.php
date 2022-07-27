<?php
// session_start();

require_once 'db.php';
// print_r($_GET);
 $id = $_GET['message_id'];

// $get_banner_location_query ="SELECT image_location FROM guest_messages WHERE id=$id";
// $from_db =mysqli_query($db_connect,$get_banner_location_query);
// $after_assoc = mysqli_fetch_assoc($from_db);
//
// unlink("img/".$after_assoc['image_location']);


$delete_query ="DELETE FROM guest_messages WHERE id=$id";
mysqli_query($db_connect,$delete_query);

header('location:guest_message.php');














?>
