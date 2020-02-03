<?php
require dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . 'www/Projet_site_restauration/traitement/model/class_profil.php';
require 'model/class_reservation.php';
require 'manager/reservation_manager.php';
$manager = new reservation_manager();
session_start();
$profil = unserialize($_SESSION['profil']);
if (empty($_POST['nb_place']) || empty($_POST['heure']))
{
  header('Location: ../vu/reservation.php');
}
else {
  $res = new reservation($_POST['nb_place'],$_POST['heure'],$profil->Get_nom());
  $manager->save_res($res);
  header('Location: ../index.php');
    }
 ?>
