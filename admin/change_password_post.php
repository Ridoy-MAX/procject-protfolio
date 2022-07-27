<?php
session_start();

// require_once('index.php');



$db_host_name = 'localhost';
$db_user_name = 'root';
$db_password = '';
$db_name = 'from_table';
//databse connect=========
$db_connect = mysqli_connect($db_host_name, $db_user_name, $db_password, $db_name);







$login_email =  $_SESSION['email'];



if($_POST['old_password'] == NULL || $_POST['new_password'] == NULL || $_POST['confirm_password'] == NULL){

  $_SESSION['profile_err'] = "All field required !";
  header('location: password_change.php');
}


  else {

              if   (strlen($_POST['old_password']) > 5 && strlen($_POST['new_password']) > 5 && strlen($_POST['confirm_password']) > 5)  {
                $password = $_POST['new_password'];
               //password rule
                $pass_cap = preg_match('@[A-Z]@', $password);
                $pass_small = preg_match('@[a-z]@', $password);
                $pass_num = preg_match('@[0-9]@', $password);
                $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
                $pass_char = preg_match($pattern, $password);



                    if (   $pass_cap == 1 &&   $pass_small == 1 &&  $pass_num == 1 && $pass_char  == 1 ) {

                              if ($_POST['new_password'] == $_POST['confirm_password'] ) {


                                        if ($_POST['new_password'] != $_POST['old_password'] ) {

                                          $encripted_old_pass = md5($_POST['old_password']);

                                          $checking_query = "SELECT COUNT(*) as total_users FROM  users WHERE email='$login_email' AND password ='$encripted_old_pass'";

                                          $db_result = mysqli_query($db_connect,$checking_query);
                                          $after_assoc = mysqli_fetch_assoc($db_result);

                                                if ($after_assoc['total_user'] == 1) {
                                                      $encripted_new_pass = md5($_POST['new_password']);
                                                      $update_query ="UPDATE users SET password='$encripted_new_pass' WHERE email='$login_email'";
                                                      mysqli_query($db_connect,$update_query);

                                                      $_SESSION['proces_com'] = "Password change successfully ";
                                                      header('location: password_change.php');
                                                  // code...
                                                }
                                                else {
                                                  $_SESSION['profile_err'] = "old password did not match !";
                                                  header('location: password_change.php');
                                                }

                                        }

                                        else {
                                          $_SESSION['profile_err'] = "you enterd same password !";
                                          header('location: password_change.php');
                                        }

                                // $_SESSION['proces_com'] = "Process completed ";
                                // header('location: password_change.php');

                              }
                              else {
                                $_SESSION['profile_err'] = "Confirm and new password did not match !";
                                header('location: password_change.php');
                                // code...
                              }
                       }


                    else {
                      $_SESSION['profile_err'] = " password must be in 6 chars , 1cap , 1 small, 1 num and 1 special chars also";
                     header('location: password_change.php');
                    }


                // code...
              }

              else {
                $_SESSION['profile_err'] = "All field must 6 chars !";
                header('location: password_change.php');
              }



    // $user_name = $_POST['user_name'];
    // $phone = $_POST['phone'];
    // $email = $_POST['email'];
    //
    //
    // $update_query = "UPDATE users SET user_name='$user_name', phone='$phone' WHERE email='$email'";
    // mysqli_query($db_connect,$update_query);
    //   header('location: profile.php');
  }



// Rridoy123$





?>
