<?php
class reservation_manager
{
  public function save_res($object)
  {

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8', 'root', '');
    } catch (Exception $e) {
      die('Erreur:' . $e->getMessage());
    }
    $req = $bdd->prepare('SELECT nom FROM reservation WHERE nom=:nom');
    $req->execute(array(// on lit les donnée de la base de donnée
        'nom' => $object->Getnom()));
    $donne = $req->fetch();
    var_dump($donne);
    if ($donne == true) {
      echo "nom";
      header('Location: ..\vu\reservation.php');
    } else {
      $req = $bdd->prepare('INSERT INTO reservation(nom, nb_place, heure) VALUES(:nom, :nb_place, :heure)');
      $req->execute(array(// on insert les donnée dans la base de donnée
          'nom' => $object->Getnom(),
          'nb_place' => $object->Getnb_pers(),
          'heure' => $object->Getheure()));
      echo $object->Getnom() . " ";
      echo $object->Getheure() . " ";
      echo $object->Getnb_pers();

    }
  }

  public function suppr_res($nom)
  {
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8', 'root', '');
    } catch (Exception $e) {
      die('Erreur:' . $e->getMessage());
    }
    $req = $bdd->prepare('DELETE FROM reservation WHERE nom=:nom');
    $req->execute(array(// on lit les donnée de la base de donnée
        'nom' => $nom));
  }
}
 ?>
