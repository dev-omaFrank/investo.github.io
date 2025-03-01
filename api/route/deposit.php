<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include '../core/initialize.php';
$session = new Session();
$session_isset = $session->check_session($dbconn,$username);

$form_for = $form_id = $h_id = $amount = $form_type = '';
$form_type_arr = ['process_1000', 'process_1001', 'process_1003'];
$form_for_arr = ['deposit'];
$h_id_arr = [1,2,3];
$form_id_arr = ['453434343454'];
$response=[];
// submit plan details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['form_id'], $_POST['form_for'], $_POST['h_id'], $_POST['amount'], $_POST['form_type'])){
    $form_id =  check_input($_POST['form_id']);
    $form_for = check_input($_POST['form_for']);
    $h_id = check_input($_POST['h_id']);
    $amount = check_input($_POST['amount']);
    $form_type = check_input($_POST['form_type']);
  
    if($amount <= 49){
      echo json_encode([
        "status"=>false, 
        "message"=> 'You must enter an amount of at least $50'
      ]);
      exit;
    }

    if(in_array($form_for, $form_for_arr)){
      $response = calculateInvestment($h_id, $amount, $h_id_arr, $form_type, $form_for,  $form_id);
      $_SESSION['response'] = json_decode($response);
      echo $response;
    }
  }
 
}

// fetch and display plan details
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET)) {
  if (isset($_SESSION['response'])) {
    $response = json_encode($_SESSION['response']);
    (int)$rand_id = 45673 + mt_rand(400, 4500);
    $_SESSION['rand_id'] = $rand_id;
    echo $response;
    return;
  } else {
    echo json_encode(["message" => "No data available"]);
  }
}

// validate crypto transaction
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['trans_id'])){
  // convert $sesion[response] to array and at this point update db with the corresponding array values
  $payer_acc =  check_input($_POST['payer_acc']);
  $trans_id = check_input($_POST['trans_id']);
  $username = $_SESSION['user_value'];
  $post = new Post($dbconn);
  $getAccountDetails = $post->getAccountDetails($username);

  if (empty($payer_acc) && empty($trans_id)) {
    echo json_encode(["status"=>false, 
    "message"=>"Payer account and transaction id can't be empty"
    ]);
    exit;
  }
  if($trans_id === $getAccountDetails['depositors_transaction_id']){
    echo json_encode(["status"=>false, 
    "message"=>"This id has been used to validate a different transaction."
    ]);
    exit;
  }
  $isValidPayerAcc = preg_match("/^0x[a-fA-F0-9]{40}$/", $payer_acc) || 
                   preg_match("/^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$/", $payer_acc) || 
                   preg_match("/^T[a-zA-Z0-9]{33}$/", $payer_acc);

  if (!$isValidPayerAcc) {
      echo json_encode(["status" => false, 
        "message" => "Enter a valid payer account address. Use either ERC-20, TRC-20 or Bitcoin wallet address"
        ]);
      exit;
  }

  $isValidTransId = preg_match("/^[a-fA-F0-9]{64}$/", $trans_id) || 
                    preg_match("/^0x[a-fA-F0-9]{64}$/", $trans_id) || 
                    preg_match("/^[a-zA-Z0-9]{64}$/", $trans_id);

  if (!$isValidTransId) {
      echo json_encode(["status" => false, 
        "message" => "Enter a valid transaction id. Use either ERC-20, TRC-20 or Bitcoin wallet address"
        ]);
      exit;
  }

  if($isValidPayerAcc && $isValidTransId){
    $post = new Post($dbconn);
    $deposit = $post->deposit_funds($_SESSION['response']->plan_duration, $_SESSION['response']->amount, $trans_id, $payer_acc, $username);
    echo json_encode(["status"=>true, 
    "message"=>"You have successfully funded your account, 
    you will be notified on the status of your transaction."]);
  }
}

//create a copy to clipboard button for the wallet addresses
?>