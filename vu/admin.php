<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include '../include/head.php' ?>
    <title></title>
  </head>
  <?php include '../include/header.php'; ?>
  <body>
    <?php if ($profil->Get_admin()=='root') { ?>
      <section>

      </section>
    <?php } ?>
    <?php if ($profil->Get_admin()=='root' or 'oui') { ?>
      <section>
        <table>
          <tr>
            <th>Nom</th>
            <th>Heure</th>
            <th>Nombre de personnes</th>
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
            </tr>
          <?php } ?>
        </table>
      </section>
    <?php } ?>
  </body>
</html>
