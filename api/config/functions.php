<?php
  function check_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function data_matches($data, $data1, $data_var){
    if ($data == $data1) {
      return true;
    }else {
      echo json_encode(["status"=>"false","url"=>"./signup.html","message"=> $data_var . " do not match"]);
      exit;
    }
  }

  function send_activation_email(){
    $to = 'gibipo@teleg.eu';
    $subject = 'Test email from localhost';
    $message = 'This is a test email sent from localhost using Sendmail.';
    $headers = 'From: testme8910@gmail.com';
      if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        $error = error_get_last();
        if ($error) {
            $errorMessage = 'Error sending email: ' . $error['message'];
        } else {
            $errorMessage = 'Error sending email: Unknown error occurred.';
        }
        // Log the error or throw an exception
        error_log($errorMessage);
        // or
        throw new Exception($errorMessage);
    }
  }

  function calculateInvestment($id, $amount, $id_arr, $f_type, $f_for, $f_id_for) {
    if (!in_array($id, $id_arr)) {
    return json_encode(["error"=>"some data not found in array"]);
    }

    $daily_profit_rate = 0;
    $response = '';

    switch ($id) {
        case 1: // 1-year investment
          if ($amount <= 100) {
              $daily_profit_rate = (2.20 / 100) / 365; // Convert percentage to decimal
          } elseif ($amount > 100 && $amount <= 1000) {
              $daily_profit_rate = (2.30 / 100) / 365; // Convert percentage to decimal
          } elseif ($amount > 1000) {
              $daily_profit_rate = (2.40 / 100) / 365; // Convert percentage to decimal
          }
          
          $total_interest = $daily_profit_rate * $amount * 360; // Calculate total interest
          $roi = $amount + $total_interest; $roi = round($roi, 2);// Calculate ROI
          
      
          $response = json_encode([
              "amount" => $amount,
              "interest" => $total_interest,
              "roi" => (int)$roi, // Cast to int for consistency
              "form_for" => $f_for,
              "url" => "./plan_details.html",
              "plan_duration" => "360 days",
              "form_type" => $f_type
          ]);
          break;

        case 2: // 6 months investment
          if ($amount > 10 && $amount <= 180) {
              $daily_profit_rate = 3.20 / 100; // Convert percentage to decimal
          } elseif ($amount > 100 && $amount <= 1000) {
              $daily_profit_rate = 3.30 / 180; // Convert percentage to decimal
          } elseif ($amount > 1000) {
              $daily_profit_rate = 3.40 / 180; // Convert percentage to decimal
          }
      
          $total_interest = $daily_profit_rate * $amount * 180; // Calculate total interest for 100 days
          $roi = $amount + $total_interest;$roi = round($roi, 2); // Calculate ROI
      
          $response = json_encode([
              "amount" => $amount,
              "interest" => $total_interest,
              "roi" => (int)$roi, // Cast to int for consistency
              "form_for" => $f_for,
              "form_id_for" => $f_id_for,
              "url" => "./plan_details.html",
              "plan_duration" => "180 days",
              "form_type" => $f_type
          ]);
          break;
        case 3: // 90 days investment
          if ($amount > 100 && $amount <= 1000) {
              $daily_profit_rate = 10 / 100; // Convert percentage to decimal
          } elseif ($amount > 1000 && $amount <= 10000) {
              $daily_profit_rate = 20 / 100; // Convert percentage to decimal
          } elseif ($amount > 10000) {
              $daily_profit_rate = 50 / 100; // Convert percentage to decimal
          }
      
          $total_interest = $daily_profit_rate * $amount * 90; // Calculate total interest for 30 days
          $total_interest = round($total_interest, 2); // Round total interest to 2 decimal places
          $roi = $amount + $total_interest; // Calculate ROI
          $roi = round($roi, 2); // Round ROI to 2 decimal places if needed
      
          $response = json_encode([
              "amount" => $amount,
              "interest" => $total_interest,
              "roi" => (int)$roi, // Cast to int for consistency, consider if you want to keep decimal
              "form_for" => $f_for,
              "plan_duration" => "90 days",
              "form_id_for" => $f_id_for,
              "url" => "./plan_details.html",
              "form_type" => $f_type
          ]);
          break;
        default:
            $response = json_encode(["error" => "Invalid investment type"]);
            break;
    }

    return $response;
  }

  function form_for($array){
    foreach ($array as $key => $value) {
      return json_encode(["form_for"=>$value]);
    }
  }
?>
