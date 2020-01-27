<?php
require 'model/class_profil.php';
require 'manager/profil_manager.php';
if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adresse']) || empty($_POST['numero']) || empty($_POST['mdp']))
{
  header('Location: ../vu/inscription.php');
}
else
{
  $profil = new profil($_POST);
  save($profil);
  header('Location: ../vu/inscription_connexion/connexion.php');
}
 ?>
