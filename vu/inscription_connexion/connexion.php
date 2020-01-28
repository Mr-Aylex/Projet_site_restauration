<?php  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include '../../include/head.php' ?>
    <title></title>
  </head>
  <?php  include '../../include/header.php';?>
  <body>
    <form id="formulaire" class="" action="../../traitement/traitement_connexion.php" method="post">
      <div class="">
        <label for="">Mail</label>
        <input type="text" name="mail" value="">
      </div>
      <div class="">
        <label for="">Mot de passe</label>
        <input type="password" name="mdp" value="">
      </div>
      <div class="">
        <input type="submit" name="" value="Envoyer">
      </div>
      <a href="inscription.php">Inscription</a>
    </form>
  </body>
</html>
