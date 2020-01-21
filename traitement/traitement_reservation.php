<?php
require dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . 'www/Projet_site_restauration/traitement/class/class_profil.php';
require 'class/class_reservation.php';
session_start();
$profil = unserialize($_SESSION['profil']);
if (empty($_POST['nb_place']) || empty($_POST['heure']))
{
  header('Location: ../vu/reservation.php');
}
else {
  var_dump($profil);
  var_dump($_POST);
  $res = new reservation($_POST['nb_place'],$_POST['heure'],$profil->Get_nom());
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
  $req = $bdd->prepare('SELECT nom FROM reservation WHERE nom=:nom');
  $req->execute(array(// on lit les donnée de la base de donnée
    'nom'=>$profil->Get_nom()));
    $donne=$req->fetch();
    var_dump($donne);
    if ($donne==true) {
      echo "nom";
      header('Location: ..\vu\reservation.php');
    }
    else {
      $req = $bdd->prepare('INSERT INTO reservation(nom, nb_place, heure) VALUES(:nom, :nb_place, :heure)');
      $req->execute(array(// on insert les donnée dans la base de donnée
        'nom'=>$res->Getnom(),
        'nb_place'=>$res->Getnb_pers(),
        'heure'=>$res->Getheure()));
        echo $res->Getnom()." ";
        echo $res->Getheure()." ";
        echo $res->Getnb_pers();
        //header('Location: ../vu/reser_valider.php');
        header('Location: ../index.php');
      }
    }
 ?>
