<?php
/**
 * This file handles user login via POST requests.
 *
 * PHP version 7
 *
 * @category Authentication
 * @package  YourPackageName
 * @author   sayhellotodevops <sayhellotodevops@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://yourwebsite.com
 */
  $servername = 'localhost';
  $password = '';
  $username = 'root';
  $dbname = '';


  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }
  // echo 'connected</br>';

  $sql = "CREATE DATABASE IF NOT EXISTS investo";
  if($conn->query($sql) === TRUE) {
    // echo 'database created' . PHP_EOL;
    $dbname = 'investo';
  } else{
    echo 'database creation error: ' . $conn->error;
  }

  $dbconn = new mysqli($servername, $username, $password,$dbname);

  $sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30) NOT NULL,
    user_password VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    username VARCHAR(30),
    verified_status VARCHAR(30) NOT NULL,
    account_creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  if($dbconn->query($sql) === TRUE){
    // echo 'TABLE created';
    $dbname = 'investo';
  }else{
    echo 'table creation error: ' . $dbconn->error;
  }
  if ($dbconn->connect_error) {
   die('Connection failed: ' . $dbconn->connect_error);
  }

  $sql = "CREATE TABLE IF NOT EXISTS deposit (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    depositors_username VARCHAR(30) NOT NULL,
    deposit_amount VARCHAR(30) NOT NULL,
    depositors_payer_acc VARCHAR(30) NOT NULL,
    depositors_transaction_id VARCHAR(30),  
    depositors_plan VARCHAR(30) NOT NULL,
    transaction_status VARCHAR(30) NOT NULL,
    deposit_transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  if($dbconn->query($sql) === TRUE){
    // echo 'TABLE created';
    $dbname = 'investo';
  }else{
    echo 'table creation error: ' . $dbconn->error;
  }
  if ($dbconn->connect_error) {
   die('Connection failed: ' . $dbconn->connect_error);
  }
  //create a config class
  // create db
  // create table
?>