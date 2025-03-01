<?php
  class Post{
    private $dbconn;
    private $users_table = 'users';
    private $deposit_table = 'deposit';

    public function __construct($dbconn){
      $this->dbconn = $dbconn;
    }


    public function log_in($param1, $param2){
      $sql = "SELECT * FROM " . $this->users_table . " WHERE username = ? AND user_password = ?";
      $sql_check = $this->dbconn->prepare($sql);
      $sql_check->bind_param("ss", $param1, $param2);
      if($sql_check->execute()){
        $result = $sql_check->get_result();
      }
      if ($result->num_rows > 0) {
        echo json_encode(["status"=>true, "message"=>"Login Successful.", "url"=>"./dashboard.php"]);
        $session_val = $param1;
        $session = new Session($session_val);
        $session->create_session();
        return true;
      }else {return false;
      }
      }

    public function update($param1,$param2, $param3){
      $sql = "UPDATE " . $this->users_table . " SET username = ?, password = ? AND oldpassword = ?";
      $sql_check = $this->dbconn->prepare($sql);
      $sql_check->bind_param("sso", $param1, $param2, $param3);
      $sql_check->execute();
        if ($sql_check->execute()) {
          echo json_encode(["message"=>"Record updated successfully"]);
      } else {
          echo json_encode(["message"=>"Error updating record: " . $this->dbconn->error]);
      }
    }

    public function deposit_funds($param1,$param2,$param3,$param4,$param5){
      //plan amount payer_acc trans_id username
     $sql = "SELECT * FROM " . $this->deposit_table . " WHERE depositors_transaction_id = ?";
     $sql_check = $this->dbconn->prepare($sql);
     $sql_check->bind_param("s", $param3);
     $sql_check->execute();
     $result = $sql_check->get_result();

     if ($result->num_rows > 0) {
       echo json_encode(value: ["message"=>"This transaction id has been used already."]);
       exit;
     }  else {
      $sql = "INSERT INTO " . $this->deposit_table . " (depositors_plan, deposit_amount, depositors_payer_acc, depositors_transaction_id, depositors_username, transaction_status) VALUES (?, ?, ?, ?, ?, ?)";
       $transaction_status = 'false';
       $sql_insert = $this->dbconn->prepare($sql);
       $sql_insert->bind_param("ssssss", $param1,$param2,$param3,$param4,$param5,$transaction_status);
       if ($sql_insert->execute()) {
         return true;
       } else {
         echo 'Error inserting data: ' . $sql_insert->error;
         return false;
       }
     }
   }

   public function getUsernameAndEmail($param1){
    $sql = "SELECT * FROM " . $this->users_table . " WHERE username = ?";
    $sql_check = $this->dbconn->prepare($sql);
    $sql_check->bind_param('s', $param1);
    $sql_check->execute();
    $result = $sql_check->get_result();
    $data = $result->fetch_assoc();
    return $data;
  }

  public function getAccountDetails($param1){
    $sql = "SELECT * FROM " . $this->deposit_table . " WHERE depositors_username = ?";
    $sql_check = $this->dbconn->prepare($sql);
    $sql_check->bind_param('s', $param1);
    $sql_check->execute();
    $result = $sql_check->get_result();
    $data = $result->fetch_assoc();
    return $data;
  }

  public function getDepositData(){
    $sql = "SELECT * FROM " . $this->deposit_table;
    $sql_check = $this->dbconn->prepare($sql);
    $sql_check->execute();
    $result = $sql_check->get_result();
    $data = $result->fetch_assoc();
    return $data;
  }

    public function sign_up($param1,$param2,$param3,$param4,$param5){
      $sql = "SELECT * FROM " . $this->users_table . " WHERE email = ? OR username = ?";
      $sql_check = $this->dbconn->prepare($sql);
      $sql_check->bind_param("ss", $param3, $param4);
      $sql_check->execute();
      $result = $sql_check->get_result();

      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          if ($row['email'] === $param3) {
              echo json_encode(["status" => false, "message" => "This email has been used to sign up previously."]);
              exit;
          } elseif ($row['username'] === $param4) {
              echo json_encode(["status" => false, "message" => "This username has been used to sign up previously."]);
              exit;
          }
      } else {
          $sql = "INSERT INTO " . $this->users_table . " (fullname, user_password, email, username, verified_status) VALUES (?, ?, ?, ?, ?)";
          $sql_insert = $this->dbconn->prepare($sql);
          $sql_insert->bind_param("sssss", $param1, $param2,$param3,$param4,$param5);
            if ($sql_insert->execute()) {
              echo json_encode(["status"=>true,"url"=>"./login.html", "message"=>"You have successfully created an account.". PHP_EOL ."Proceed your inbox to verify your email address."]);
              return true;
            } else {
              echo 'Error inserting data: ' . $sql_insert->error;
              return false;
            }
        }
    }
  }
  // }
?>