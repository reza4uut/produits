<?php
  require_once "produit.class.php";
  require_once "monSmarty.class.php";
  session_start();


  $prod = null;
  $prodexist = !empty($_SESSION["prod"]);
  if ($prodexist){
    $prod = $_SESSION["prod"]->toArray();
  }

  $classError = !empty($_SESSION["error_message"]) ? "show" : "hide";
  $errorMessage = !empty($_SESSION["error_message"]) ? $_SESSION["error_message"] : false;


  $classSuccess = !empty($_SESSION["success_message"]) ? "show" : "hide";
  $successMessage = !empty($_SESSION["success_message"]) ? $_SESSION["success_message"] : false;


  if ($errorMessage){ unset($_SESSION["error_message"]); }
  if ($successMessage){ unset($_SESSION["success_message"]); }

//chargement de layout
  $smarty = new monSmarty();
    $smarty->assign("classSuccess", $classSuccess);
    $smarty->assign("successMessage", $successMessage);
    $smarty->assign("classError", $classError);
    $smarty->assign("errorMessage", $errorMessage);
    $smarty->assign("prodexist", $prodexist);
    $smarty->assign("prod", $prod);
  $smarty->display("layout.tpl");
