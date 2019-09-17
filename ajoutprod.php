<?php
require_once "produit.class.php";
session_start();

$error=false;
if(!empty($_POST)){
  $besoin= array("nomprod", "categorie", "prix");
  foreach ($besoin as $champ) {
    if(empty($_POST[$champ])){
      $error .= "Veuillez vous remplire champ $champ s'il vous plaît <br />";
    }
  }
  if(!$error){
    if(!Produit::verifieProd($_POST["nomprod"])){
      $nprod= new Produit($_POST["nomprod"],$_POST["categorie"],$_POST["prix"],$_POST["comment"]);
      $nprod->enregister();
      $_SESSION["success_message"] = "Produit bien enregister sur notre BdD";


    }else {
      $error = " produit est déjà exist !";
    }
  }


}else{
  $error="les champ ne doit être pas vide !";
}
if($error){
  $_SESSION["error_message"] = $error;
}
header("location:index.php");
die;
 ?>
