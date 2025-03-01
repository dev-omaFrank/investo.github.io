<?php
class Session {
  private $session_val;

  public function __construct($session_val = null) {
    $this->session_val = $session_val;
  }

  public function create_session() {
      session_start();
      $_SESSION["user_value"] = $this->session_val; // Set the session value
  }

  public function check_session($conn, $name){
    session_start();
    if (isset($_SESSION["user_value"])) {
      $status = true;
      $user_id = $_SESSION['user_value'];
      $post = new Post($conn);
      $getAccountDetails = $post->getAccountDetails($user_id);
      $getUsernameAndEmail = $post->getUsernameAndEmail($user_id);
      $totalDeposit = $getAccountDetails['deposit_amount'];
      $name = $getUsernameAndEmail['username'];
      
      //acct bal is withdraw minus deposit
      return json_encode([
        "status" => $status,
        "name"=>$name,
        "total_deposit"=>$totalDeposit
      ]) . PHP_EOL;
    }else {
      return json_encode(["status" => false, "url" => "./login.html", "message"=>"You must be logged in to use this service."]) . PHP_EOL;
    }
  }
  public function logout() {
    session_start();
    if (isset($_SESSION["user_value"])) {
        $_SESSION = [];
        session_destroy();
        return json_encode(["status" => true, "url" => "../login.html"]);
    } else {
        return json_encode(["status" => false, "message" => "No active session."]);
    }
  }
}
?>
