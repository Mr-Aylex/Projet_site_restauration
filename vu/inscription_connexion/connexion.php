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
        <div class="form-group">
          <div class="row">
            <label for="">Mail</label>
            <input class="form-control" type="text" name="mail" value="">
          </div>
          <div class="row">
            <label for="">Mot de passe</label>
            <input class="form-control" type="password" name="mdp" value="">
          </div>
          <div class="row">
            <input class="btn btn-primary" type="submit" name="" value="Envoyer">
              <a class="btn btn-secondary" href="inscription.php">Inscription</a>
          </div>

        </div>
    </form>
  </body>
</html>
