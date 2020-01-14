<?php
require 'class/class_profil.php';
if (isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['adresse']) || isset($_POST['numero']) || isset($_POST['mdp']))
{
  $res = new profil($_POST);
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
    'nom'=>$res->Get_nom(),
    'prenom'=>$res->Get_prenom()));
    $donne=$req->fetch();
    if ($donne==true)
    {
      //header("Location:")
    }
    else
    {
      $req = $bdd->prepare('SELECT numero FROM compt WHERE numero=:numero');
      $req->execute(array(// on lit les donnée de la base de donnée
        'numero'=>$res->Get_numero()));
        $donne=$req->fetch();
        if ($donne==true)
        {
          //header("Location: ...")
        }
        else
        {
          $req = $bdd->prepare('SELECT mail FROM compt WHERE mail=:mail');
          $req->execute(array(// on lit les donnée de la base de donnée
            'mail'=>$res->Get_mail()));
            $donne=$req->fetch();
            if ($donne==true)
            {
              //header("Location: ...")
            }
            else
            {
              $req = $bdd->prepare('INSERT INTO compt (nom, prenom, mail, adresse, numero ,mdp)
              VALUES(:nom, :prenom, :mail, :adresse, :numero, :mdp) ');
              $req->execute(array(
                'nom'=>$res->Get_nom(),
                'prenom'=>$res->Get_prenom(),
                'mail'=>$res->Get_mail(),
                'adresse'=>$res->Get_adresse(),
                'numero'=>$res->Get_numero(),
                'mdp'=>$res->Get_mdp()));
              }
            }
          }
        }
        else
        {
          header('Location: ../vu/inscription.php');
        }

 ?>
