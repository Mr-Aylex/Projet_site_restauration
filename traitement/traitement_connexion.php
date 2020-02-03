<?php
require 'model/class_profil.php';
require 'manager/profil_manager.php';
$manager = new profil_manager();
$connexion = $manager->save_connexion($_POST);
if($connexion== true){
  //On lance la sesssion
    session_start();
    $profil = new profil($connexion);


    $_SESSION['profil'] = serialize($profil);
    //on redirige vers le menu

  header("Location: ../index.php");
}

else{
  //on redirige vers le formulaire
  header("Location: ../vu/inscription_connexion/connexion.php");
}
?>
