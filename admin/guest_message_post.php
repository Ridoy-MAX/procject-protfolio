
<?php
session_start();
// require_once('index.php');
// include_once ('../header.php');
// include_once ('navbar.php');
include_once ('db.php');



// print_r($_POST);

$guest_name = $_POST['guest_name'];
$guest_email = $_POST['guest_email'];
$guest_message = $_POST['guest_message'];

$insert_query ="INSERT INTO guest_messages (guest_name,guest_email,guest_message) VALUES('$guest_name','$guest_email','$guest_message')";


mysqli_query($db_connect,$insert_query);

header('location:../frontend/index.php');




?>












<?php

// require_once('../footer.php');
?>
