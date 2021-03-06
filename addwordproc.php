<?php
session_start();
session_regenerate_id();
if(!isset($_SESSION['user']))      // if there is no valid session
{
  header("Location: auth.php");     // send to sign in
}

if (!empty($_POST)) {

  require_once("dbInfo.php");        // get database info
  $mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);
  if ($mysqli->connect_errno) {       // check connection
     echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  }
  else {                              // get query string organized..
    $word = $_POST["word"];
    $wordType = $_POST["type"]; 
    $command = "INSERT INTO ". $wordType . " (" . $wordType . ") VALUES ('" . $word ."')";
    echo $command . "<br/>";
    
    if (!$mysqli->query($command)) {   // check for success
      die('Error:' . $mysqli->error);
    }
    header("Location: success.php");   // Send to success page
  }
}
?>
