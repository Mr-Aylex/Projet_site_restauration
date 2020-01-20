<?php
require 'class/class_profil.php';
if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adresse']) || empty($_POST['numero']) || empty($_POST['mdp']))
{
  header('Location: ../vu/inscription.php');
}
else
{
  $profil = new profil($_POST);
  $profil->save();
}

 ?>
