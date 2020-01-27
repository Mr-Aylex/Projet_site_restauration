<?php
function save($object)
{
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
    'nom'=>$object->Get_nom(),
    'prenom'=>$object->Get_prenom()));
    $donne=$req->fetch();
    if ($donne==true)
    {
      header(dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . 'C:\wamp64\www\Projet_site_restauration\vu\inscription_connexion\inscription.php');
    }
    else
    {
      $req = $bdd->prepare('SELECT numero FROM compt WHERE numero=:numero');
      $req->execute(array(// on lit les donnée de la base de donnée
      'numero'=>$object->Get_numero()));
      $donne=$req->fetch();
      if ($donne==true)
      {
        header(dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . 'C:\wamp64\www\Projet_site_restauration\vu\inscription_connexion\inscription.php');

      }
      else
      {
        $req = $bdd->prepare('SELECT mail FROM compt WHERE mail=:mail');
        $req->execute(array(// on lit les donnée de la base de donnée
        'mail'=>$object->Get_mail()));
        $donne=$req->fetch();
        if ($donne==true)
        {
          header(dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . 'C:\wamp64\www\Projet_site_restauration\vu\inscription_connexion\inscription.php');
        }
        else
        {
          $req = $bdd->prepare('INSERT INTO compt (nom, prenom, mail, adresse, numero ,mdp)
          VALUES(:nom, :prenom, :mail, :adresse, :numero, :mdp) ');
          $req->execute(array(
          'nom'=>$object->Get_nom(),
          'prenom'=>$object->Get_prenom(),
          'mail'=>$object->Get_mail(),
          'adresse'=>$object->Get_adresse(),
          'numero'=>$object->Get_numero(),
          'mdp'=>$object->Get_mdp()));
        }
      }
    }
  }

 ?>
