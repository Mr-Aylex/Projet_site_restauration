<?php
require 'class/class_inscription.php';
if (isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['adresse']) || isset($_POST['numero']) || isset($_POST['mdp']))
{
  $res = new profil($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['numero'] $_POST['mdp']);
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
  $req = $bdd->prepare('SELECT nom, prenom FROM compt WHERE nom=:nom, prenom=:prenom');
  $req->execute(array(// on lit les donnée de la base de donnée
      'nom'=>$_POST['nom'],
      'prenom'=>$_POST['prenom']));
  $donne=$req->fetch();
  if ($donne==true)
  {
    header("Location: ...")
  }
  else
  {
    $req = $bdd->prepare('SELECT numero FROM compt WHERE numero=:numero');
    $req->execute(array(// on lit les donnée de la base de donnée
      'numero'=>$_POST['numero']));
      $donne=$req->fetch();
      if ($donne==true)
      {
        header("Location: ...")
      }
      else
      {
        $req = $bdd->prepare('SELECT mail FROM compt WHERE mail=:mail');
        $req->execute(array(// on lit les donnée de la base de donnée
          'mail'=>$_POST['mail']));
          $donne=$req->fetch();
          if ($donne==true)
          {
            header("Location: ...")
          }
          else
          {
            $req = $bdd->prepare('INSERT INTO compt (nom, prenom, adresse, numero ,mdp) VALUES(nom=:nom, prenom=:prenom, adresse=:adresse, numero=:numero, mdp=:mdp) ');
            $req->execute(array(// on lit les donnée de la base de donnée
              'nom'=>$_POST['nom'],
              'prenom'=>$_POST['prenom'],
              'adresse'=>$_POST['adresse'],
              'numero'=>$_POST['numero'],
              'mdp'=>$_POST['mdp']));
          }
      }

}
else
{
  header('Location: ../vu/inscription.php');
}

 ?>
