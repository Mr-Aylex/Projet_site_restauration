<?php
require 'class/class_profil.php';
try {
  $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8','root','');
}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
//On attribue les variables
$mail = $_POST["mail"];
$mdp = $_POST["mdp"];
$req = $bdd->prepare('SELECT * FROM  compt WHERE mail=:mail and mdp=:mot_de_passe');
$req->execute(array('mail'=>$mail,'mot_de_passe'=>$mdp));
$connexion = $req->fetch();
if($connexion == true){
  //On lance la sesssion
    session_start();
    $profil = new profil($connexion);
    $_SESSION['profil'] = serialize($profil);
    var_dump($connexion);
    //on redirige vers le menu

  header("Location: ../index.php");
}

else{
  //on redirige vers le formulaire
  header("Location: ../vu/inscription_connexion/connexion.php");
}
?>
