<?php
require 'model/class_profil.php';
require 'manager/connexion_manager.php';
$connexion = save_connexion($_POST);
if($connexion== true){
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
