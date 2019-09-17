<?php
  session_start();
  $error = false;

  if (empty($_SESSION["prod"])){
    $error = "invalid information"; 
  }else{
    session_unset();
    session_destroy();
  }

  if ($error){
    $_SESSION["error_message"] = $error;
  }

  header("location:index.php");
  die;
