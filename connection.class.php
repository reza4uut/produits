<?php
class Connexion{
private static $db;
public static function get(){
  if(empty(self::$db)){
    self::$db = new PDO('mysql:dbname=fadaei1u_phptd6;host=localhost',"reza","test");

  }
  return self::$db;
}

}


?>
