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
              <a href="page_new_admin.php">Ajouter un administrateur</a>
          </div>
      </section>
    <?php } ?>
    <?php if ($profil->Get_admin()=='root' or 'oui') { ?>
      <section>
        <table>
          <tr>
            <th>Nom</th>
            <th>Heure</th>
            <th>Nombre de personnes</th>
            <th>Supprimer</th>
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
            <tr>
              <td><?php echo $value['nom']; ?></td>
              <td><?php echo $value['heure']; ?></td>
              <td><?php echo $value['nb_place']; ?></td>
              <td id="boutton_modifier">
                <form class="" action="verification/suppr_res_verif_admin.php" method="get">
                <input type="submit" name="nom" value="<?php echo $value['nom'] ?>">
              </form>
            </td>
            </tr>
          <?php } ?>
        </table>
      </section>
        <section>

        </section>
    <?php } ?>
  </section>
  </body>
  <script type="text/javascript">

  </script>
</html>
