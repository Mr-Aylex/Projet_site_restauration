<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="../../traitement/traitement_inscription.php" method="post">
      <div class="">
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="nom" value="">
        <p id="nom_mess"></p>
      </div>
      <div class="">
        <label for="prenom">Prenom</label>
        <input id="prenom" type="text" name="prenom" value="">
        <p id="prenom_mess"></p>
      </div>
      <div class="">
        <label for="adresse">Adresse</label>
        <input id="adresse" type="text" name="adresse" value="">
        <p id="adresse_mess"></p>
      </div>
      <div class="">
        <label for="mail">Mail</label>
        <input id="mail" type="text" name="mail" value="">
        <p id="mail_mess"></p>
      </div>
      <div class="">
        <label for="num">Numero de téléphone</label>
        <input id="num" type="text" name="numero" value="">
        <p id="num_mess"></p>
      </div>
      <div class="">
        <label for="mdp">Mot de passe</label>
        <input id="mdp" type="password" name="mdp" value="">
        <p id="mdp_mess"></p>
      </div>
      <div class="">
        <input id="" type="submit" name="" value="Envoyer" onclick="">
      </div>
    </form>
    <a href="connexion.php">Connexion</a>
  </body>
  <script src="\Projet_site_restauration\js\require.js" charset="utf-8"></script>
  <script type="text/javascript">
  var mysql = require(['mysql']);
  var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "projet_restaurant"
  });
  document.getElementById("mail").addEventListener("blur", function (e) {
  var mail = e.target.value;
  var existe = "";
  var adresse_valide = "";
  if (mail.indexOf("@")=== -1) {
    adresse_valide = "Adresse invalide";
  }
  if (mail.length===false){
    adresse_valide = "Merci de remplir le champ";
  }
  document.getElementById("mail_mess").textContent = adresse_valide;
  var existe = "Mail déjà utiliser";
  });
  document.getElementById("nom").addEventListener("blur",function(e){
    var nom = e.target.value;
    var nom_prenom = "";
    document.getElementById("prenom").addEventListener("blur",function(f){
      var prenom = f.target.value;
      var sql = 'SELECT nom, prenom FROM compt WHERE name = ? OR prenom = ?';
      con.query(sql, [nom, prenom], function (err, result) {
        if (err) throw err;
      if (result ===false) {
        var nom_prenom = "nom et prenom déjà utiliser";
      }
      document.getElementById("nom_mess").textContent = nom_prenom;
      });
    });
  });
  </script>
</html>
