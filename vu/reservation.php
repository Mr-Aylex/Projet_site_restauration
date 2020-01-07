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
  <section>
    <form class="" action="../traitement/traitement_reservation.php" method="post">
      <div class="">
        <label for="">Nom</label>
        <input type="text" name="nom" value="">
      </div>
      <div class="">
        <label for="">Place(s) à reserver</label>
        <input type="number" name="nb_place" value="" max="50" min="1">
      </div>
      <div class="">
        <label for="">Heure</label>
        <input type="time" name="heure" value=""min="11:30" max="22:30">
      </div>
      <input type="submit" name="" value="Envoyer">
    </form>
  </section>

  <?php include '../include/footer.php' ?>

</body>
</html>
