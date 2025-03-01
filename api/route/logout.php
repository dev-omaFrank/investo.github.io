<?php
 include('../core/initialize.php');
 $session = new Session();
 echo $logout = $session->logout();
?>