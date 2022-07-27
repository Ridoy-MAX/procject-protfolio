<?php
session_start();
// require_once('index.php');
// include_once ('../header.php');
// include_once ('navbar.php');
include_once ('db.php');



// print_r($_POST);

$social_link = $_POST['social_link'];
$social_icon = $_POST['social_icon'];


$insert_query ="INSERT INTO social_medias (social_link,social_icon) VALUES('$social_link','$social_icon')";


mysqli_query($db_connect,$insert_query);

header('location:social_media.php');




?>












<?php

// require_once('../footer.php');
?>
