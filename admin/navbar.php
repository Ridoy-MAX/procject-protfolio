<?php
session_start();
// require_once('index.php');
include_once ('../header.php');
// print_r($_POST);
//db information


// if (!isset($_SESSION['user_status'])){
//   header('location: ../login.php');
//   // code...
// }

$db_host_name = 'localhost';
$db_user_name = 'root';
$db_password = '';
$db_name = 'from_table';
//databse connect=========
$db_connec
 ?>













<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href="dashbord.php"><i class="icon ion-android-star-outline"></i> starlight</a></div>
<div class="sl-sideleft">
  <div class="input-group input-group-search">
    <input type="search" name="search" class="form-control" placeholder="Search">
    <span class="input-group-btn">
      <button class="btn"><i class="fa fa-search"></i></button>
    </span><!-- input-group-btn -->
  </div><!-- input-group -->

  <label class="sidebar-label">Navigation</label>
  <div class="sl-sideleft-menu">
    <a href="index.html" class="sl-menu-link ">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class=""><a href="../frontend/index.php" class="menu-item-label">Visit Website</a></span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <a href="widgets.html" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">
          <a href="banner.php">
          Banner
        </a>
       </span>
      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <a href="mailbox.html" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
        <span class="menu-item-label">  <a href="guest_message.php">
                <?php
                include_once ('db.php');
                $get_message_notification_query ="SELECT COUNT(*) AS message_notification FROM guest_messages WHERE read_status=2";

                $from_db = mysqli_query($db_connect,  $get_message_notification_query);
                $after_assoc = mysqli_fetch_assoc($from_db);
                 ?>
            Guest message    <span class="badge bg-warning ms-1"><?= $after_assoc['message_notification'] ?></span></a>    </span>
      </div><!-- menu-item -->
    </a>
    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
        <a class="menu-item-label" href="service_head.php">
            Service
         </a>

      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->

    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
        <a class="menu-item-label" href="service_item.php">Service items</a>

      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->

    <a href="#" class="sl-menu-link">
      <div class="sl-menu-item">
        <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
        <a class="menu-item-label" href="social_media.php">Social media</a>


      </div><!-- menu-item -->
    </a><!-- sl-menu-link -->






  </div><!-- sl-sideleft-menu -->

  <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
  <div class="sl-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
  </div><!-- sl-header-left -->
  <div class="sl-header-right">
    <nav class="nav">
      <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name btn ">

            <?php
              if (isset($_SESSION['email'])){
             ?>

               <?php
               echo $_SESSION['email'];
               // unset($_SESSION['login_msg']);
               ?>


             <?php
              }
            ?>
            <span class="hidden-md-down"> </span></span>
          <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-200">
          <ul class="list-unstyled user-profile-nav">
            <li><a href="profile.php"><i class="icon ion-ios-person-outline"></i>  Profile</a></li>
            <li><a href="password_change.php"><i class="icon ion-ios-gear-outline"></i> Password change</a></li>

            <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
            <li><a href="../logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
          </ul>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </nav>
    <div class="navicon-right">
      <a id="btnRightMenu" href="" class="pos-relative">
        <i class="icon ion-ios-bell-outline"></i>
        <!-- start: if statement -->
        <span class="square-8 bg-danger"></span>
        <!-- end: if statement -->
      </a>
    </div><!-- navicon-right -->
  </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->


<?php

require_once('../footer.php');
?>
