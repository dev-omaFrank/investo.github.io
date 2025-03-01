<?php
session_start();
include '../core/initialize.php';
    $post = new Post($dbconn);
    if($_SESSION){
        $user_id = $_SESSION['user_value'];
        $getAccountDetails = $post->getAccountDetails($user_id);
        
        echo json_encode([
            "status"=>true,
            "value"=>$getAccountDetails
        ]);
    }
    
   
   
?>