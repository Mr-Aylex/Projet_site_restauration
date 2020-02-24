<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <?php include '../include/head.php' ?>
    <title></title>
  </head>
  <?php include '../include/header.php'; ?>
  <body>
  <section id="formulaire">
    <?php if ($profil->Get_admin()=='root') { ?>
      <section>
          <div>
              <a class="btn btn-dark" href="page_new_admin.php">Ajouter un administrateur</a>
          </div>
      </section>
    <?php } ?>
    <?php if ($profil->Get_admin()=='root' or 'oui') { ?>
      <section>
        <table class="table">
          <tr>
            <th class="col-1">Nom</th>
            <th class="col-1">Heure</th>
            <th class="col-3">Nombre de personnes</th>
            <th class="col"></th>
          </tr>
          <?php
          try
          {
            $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8','root','');
          }
          catch(Exception $e)
          {
            die('ERREUR:'.$e->getMessage());
          }
          $connexion = $bdd->query('SELECT * FROM  reservation');
          $req = $connexion->fetchall();
          foreach ($req as $key => $value) { ?>
            <tr class="">
              <td><?php echo $value['nom']; ?></td>
              <td><?php echo $value['heure']; ?></td>
              <td><?php echo $value['nb_place']; ?></td>
              <td id="boutton_modifier">
                <a class="btn-danger" href="verification/suppr_res_verif_admin.php?nom=<?php echo $value['nom'] ?>" method="get">Supprimer</a>
            </td>
            </tr>
          <?php } ?>
        </table>
      </section>
    <?php } ?>
  </section>
  </body>
  <?php include '../include/footer.php' ?>
  <script type="text/javascript">

  </script>
</html>
