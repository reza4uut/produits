<?php
require_once "connection.class.php";
class Produit{
private $nomprod;
private $categorie;
private $prix;
private $comment;
private $id;

public function __construct( $nomprod=null, $categorie=null, $prix=null, $comment=null, $id=null){
  $this->setNomprod($nomprod);
  $this->setCategorie($categorie);
  $this->setPrix($prix);
  $this->setComment($comment);
  $this->setId($id);
}
public static function chargee($nomprod){
  $mondb= Connexion::get();
  $resultat=$mondb->query("SELECT * FROM prods WHERE nomprod='$nomprod'");
  if($produit=$resultat->fetch()){
    return new Produit($produit['nomprod'],$produit['categorie'],$produit['prix'],$produit['comment'], $produit['id']);
  }
  return FALSE;
}
public function supprime($nomprod,$categorie,$prix,$comment){
if(!$this->getId()){
  throw new Exception("produit n'est pas trouve !");
}
if($nomprod!= $this->getNomprod()){
  if(self::verifieProd($nomprod)){
    throw new Exception("ce requête est déjà exist!!!");
  }
}
$mondb= connexion::get();
try{
  $prepare=$mondb->prepare("DELETE from prods where nomprod='{$this->getNomprod()}' and categorie='{$this->getCategorie()}' and id={$this->getId()}");
  $prepare->execute($this->toArray());
}catch (PDOExecption $e){
  return false;
}
return true;
}
public function enregister(){
  $mondb = Connexion::get();
  if (!self::verifieProd($this->getNomprod())){
    if(empty($this->getId())){
      try{
        $command = $mondb->prepare("INSERT INTO prods (nomprod, categorie, prix, comment) VALUE (:nomprod, :categorie, :prix, :comment)");
        $applique = $command->execute($this->toArray());
        $this->setId($mondb->lastInsertId());
      }catch(PDOExecption $e){
        return FALSE;
      }
    }else{
      throw new exception('ne utilisez pas ce methode autant que mise à jour');
    }
    return true;
  }
  return false;
}
public static function verifieProd($nomprod){
  $mondb = Connexion::get();
  $resultat = $mondb->query("SELECT * FROM prods WHERE nomprod='$nomprod'");
  return $resultat->fetch();

}
public function toArray(){
  return array(
    'nomprod' => $this->getNomprod(),
    'categorie' => $this->getCategorie(),
    'prix' => $this->getPrix(),
    'comment' => $this->getComment()

);
}
public function misajour($nomprod,$categorie,$prix,$comment){
  if(!$this->getId()){
    throw new Exception("Impossible de mis à jour produit que n'est pas encore enregister");
  }
  $prodTmp= $this->getNomprod();
  if($nomprod!= $this->getNomprod()){
    if(self::verifieProd($nomprod)){
      throw new Exception("ce requête est déjà exist!!!");
    }
  }
  $this->setNomprod($nomprod);
  $this->setCategorie($categorie);
  $this->setPrix($prix);
  $this->setComment($comment);
  $mondb= connexion::get();
  try{
    $prepare=$mondb->prepare("UPDATE prods SET nomprod=:nomprod, categorie=:categorie, prix=:prix, comment=:comment where id={$this->getId()}");
    $prepare->execute($this->toArray());
  }catch (PDOExecption $e){
    return false;
  }
  return true;
}
public function setNomprod($nomprod){
  $this->nomprod=$nomprod;
}
public function setCategorie($categorie){
  $this->categorie=$categorie;
}
public function setPrix($prix){
  $this->prix=$prix;
}
public function setComment($comment){
  $this->comment = $comment;
}
public function getNomprod(){
  return $this->nomprod;
}
public function getCategorie(){
  return $this->categorie;
}
public function getPrix(){
  return $this->prix;
}
public function getComment(){
  return $this->comment;
}
public function setId($id){
  $this->id = $id;
}
public function getId(){
  return $this->id;
}
}




?>
