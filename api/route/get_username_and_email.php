<?php
    require 'session_isset.php';

    if(isset($_SESSION)){
        $user_id = $_SESSION['user_value'];
        $post = new Post($dbconn);
        $getUsernameAndEmail = $post->getUsernameAndEmail($user_id);
        $username = $getUsernameAndEmail['username'];
        $email = $getUsernameAndEmail['email'];
        echo json_encode([
            "username"=>$username,
            "email"=>$email
        ]);
    }else{
        echo json_encode(["message"=> 'not set']);
    }
?>