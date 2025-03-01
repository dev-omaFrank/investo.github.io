<?php
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: *');
  require '../core/initialize.php';


    $username = isset($_POST['username']) ? check_input($_POST['username']) : null;
    $password = isset($_POST['password']) ? check_input($_POST['password']) : null;
    if (empty($username) || empty($password)) {
        echo json_encode(["status" => false, "message" => "Field(s) cannot be empty"]);
        exit;
    } else {
        $post = new Post($dbconn);
        $result = $post->log_in($username, $password);

        if ($result) {
            return true;
        } else {
            echo json_encode(
                ["status" => false,
                "message" => "Invalid username or password"]
            );
        }
    }

?>