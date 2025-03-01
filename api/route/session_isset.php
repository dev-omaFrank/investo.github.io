<?php
  include '../core/initialize.php';
  $session = new Session('');
  
  echo $session_isset = $session->check_session(
    $dbconn, 
    $username
  ); 
  
?>