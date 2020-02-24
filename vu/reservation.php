<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Luigi's</title>
  <?php include '../include/head.php' ?>

</head>
<body>

  <?php include '../include/header.php'; ?>

  <section class="bg-7 h-500x main-slider pos-relative">
    <div class="triangle-up pos-bottom"></div>
    <div class="container h-100">
      <div class="dplay-tbl">
        <div class="dplay-tbl-cell center-text color-white pt-90">
          <h3 class="mt-30 mb-15">Reservation</h3>
        </div><!-- dplay-tbl-cell -->
      </div><!-- dplay-tbl -->
    </div><!-- container -->
  </section>
  <section class="container">
    <form class="align-items-center" action="../traitement/traitement_reservation.php" method="post">
        <div class="form-group">
            <div class="row">
                <label for="">Place(s) à reserver</label>
                <input class="form-control col-2" type="number" name="nb_place" value="1" max="50" min="1">
            </div>
            <div class="row">
                <label for="">Heure</label>
                <input class="form-control col-2" type="time" name="heure" value="11:30"min="11:30" max="22:30">
            </div>
            <input class="col-1 form-control btn btn-primary" type="submit" name="" value="Envoyer">
        </div>
      <!--<div class="">
        <label for="">Nom</label>
        <input type="text" name="nom" value="">
      </div>-->

    </form>
  </section>
  <section class="container">
    <?php try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8','root','');
    }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
    $connexion = $bdd->prepare('SELECT * FROM  reservation WHERE nom=:nom');
    $connexion->execute(array('nom'=>$profil->Get_nom()));
    $req = $connexion->fetch();
    ?>

      <h3 class="row">Votre reservation</h3>
      <div class="col-8">
          <p>Heure: <?php echo $req['heure'];?></p>
          <p>Nombre de places réserver: <?php echo $req['nb_place']; ?></p>
          <a class="btn btn-primary" href="verification/suppr_res_verif.php?nom=<?php echo $profil->Get_nom() ?>">Supprimer</a>
      </div>


  </section>

  <?php include '../include/footer.php' ?>

</body>
</html>
