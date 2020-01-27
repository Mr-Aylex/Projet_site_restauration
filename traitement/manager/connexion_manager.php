<?php
function save_connexion($array)
{
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
  $req = $bdd->prepare('SELECT * FROM  compt WHERE mail=:mail and mdp=:mot_de_passe');
  $req->execute(array('mail'=>$array["mail"],'mot_de_passe'=>$array["mdp"]));
  $connexion = $req->fetch();
  return $connexion;
}
 ?>
