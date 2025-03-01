<?php
  // header('Content-Type: application/json');
  // header('Access-Control-Allow-Origin: *');
  include '../core/initialize.php';

 
  $fullname = isset($_POST['fullname']) ? check_input($_POST['fullname']): 'Fullname not provided';
  $password = isset($_POST['password']) ? check_input($_POST['password']): 'Password not provided';
  $email = isset($_POST['email']) ? check_input($_POST['email']): 'Email not provided';   
  $email2 = isset($_POST['email2']) ? check_input($_POST['email2']): 'Confirm email not provided';
  $password2 = isset($_POST['password2']) ? check_input($_POST['password2']): 'Confirm password not provided';
  $username = isset($_POST['username']) ? check_input($_POST['username']): 'Username not provided';
  
 if (data_matches($email, $email2, 'Emails') && data_matches($password, $password2, 'Passwords')) {
    if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
      echo json_encode(["status" => false, "message" => "$email2 is not a valid email address"]);
      exit;
    }else{
      $post = new Post($dbconn);
      $verified_status = 0;
      $result = $post->sign_up($fullname, $password, $email2, $username, $verified_status);
    }
  }

?>