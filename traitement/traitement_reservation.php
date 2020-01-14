<?php
session_start();
$profil = unserialize($_SESSION['profil']);
require 'class/class_reservation.php';
if (empty($_POST['nb_place']) || empty($_POST['heure']))
{
  header('Location: ../vu/reservation.php');
}
else {
  var_dump($profil);
  var_dump($_POST);
  echo $profil->Get_nom();
  $res = new reservation($_POST['nb_place'],$_POST['heure'],'nom');
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
        header('Location: ../vu/reser_valider.php');
      }
    }
 ?>
