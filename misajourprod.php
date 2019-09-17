<?php
  require_once "produit.class.php";
  session_start();
  $error = false;

  $prodexist = !empty($_SESSION["prod"]);

  if ($prodexist){
    if ($_SESSION["prod"]->misajour($_POST["nomprod"], $_POST["categorie"], $_POST["prix"], $_POST["comment"])){
      $_SESSION["success_message"] = "produit bien modifie";
    }else{
      $error = "produit est déjà exist";
    }
  }
  else{
    $error = "vous n'avez pas encore entre information sur produit !";
  }

  if ($error){
    $_SESSION["error_message"] = $error;
  }

  header("location:index.php");
  die;
