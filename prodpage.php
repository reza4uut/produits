<?php
require_once "./Produit.class.php";
session_start();
$error= false;
if (!empty($_POST)){
  if (!empty($_POST["nomprod"])){
    if (Produit::verifieProd($_POST["nomprod"])){
      if ($prod = Produit::chargee($_POST["nomprod"], $_POST["categorie"])){
        $_SESSION["success_message"] = "information de produit";
        $_SESSION["prod"] = $prod;
      }
    }else{
      $error = "ce produi n'exist pas !";
    }
  }else{
    $error = "nom et categorie ne doit être pas vide !";
  }
}else{
  $error = "Impossible de chargée information";
}



if ($error){
  $_SESSION["error_message"] = $error;
}

header("location:index.php");
die;



 ?>
