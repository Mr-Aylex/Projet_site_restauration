<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include '../../include/head.php' ?>
    <title></title>
  </head>
  <?php  include '../../include/header.php';?>
  <body>
    <form id="formulaire"class="" action="../../traitement/traitement_inscription.php" method="post">
      <div class="champ">
        <label for="nom">Nom</label>
        <input id="nom" class="entrer_formulaire"type="text" name="nom" value="">
        <p id="nom_mess"class="message"></p>
      </div>
      <div class="champ">
        <label for="prenom">Prenom</label>
        <input id="prenom" class="entrer_formulaire"type="text" name="prenom" value="">
        <p id="prenom_mess"class="message"></p>
      </div>
      <div class="champ">
        <label for="adresse">Adresse</label>
        <input id="adresse" class="entrer_formulaire"type="text" name="adresse" value="">
        <p id="adresse_mess"class="message"></p>
      </div>
      <div class="champ">
        <label for="mail">Mail</label>
        <input id="mail" class="entrer_formulaire"type="text" name="mail" value="">
        <p id="mail_mess"class="message"></p>
      </div>
      <div class="champ">
        <label for="num">Numero de téléphone</label>
        <input id="num" class="entrer_formulaire"type="text" name="numero" value="">
        <p id="num_mess"class="message"></p>
      </div>
      <div class="champ">
        <label for="mdp">Mot de passe</label>
        <input id="mdp" class="entrer_formulaire"type="password" name="mdp" value="">
        <p id="mdp_mess"class="message"></p>
      </div>
      <div class="champ">
        <input id="submit"class="boutton" type="submit" name="" value="Envoyer" onclick=""disabled>
      </div>
      <a href="connexion.php">Connexion</a>
    </form>
  </body>
  <script src="\Projet_site_restauration\js\require.js" charset="utf-8"></script>
  <script type="text/javascript">
  var sub;
  document.getElementById("mail").addEventListener("blur", function (e) {
    var mail = e.target.value;
    var adresse_valide = "";
    if (mail.indexOf("@")=== -1) {
      adresse_valide = "Adresse mail invalide";
      document.getElementById("submit").disabled = true;
    }
    else {
      document.getElementById("submit").disabled = false;
    }
    document.getElementById("mail_mess").textContent = adresse_valide;
  });

  document.getElementById("nom").addEventListener("blur",function(e){
    var nom = e.target.value;
    if (nom.length===0) {
      var nom_court = "Merci de remplir le champ nom";
      document.getElementById("submit").disabled = true;
    }
    else {
      document.getElementById("submit").disabled = false;
    }
    document.getElementById("nom_mess").textContent = nom_court;
  });

  document.getElementById("prenom").addEventListener("blur",function(e){
    var prenom = e.target.value;
    if (prenom.length===0) {
      var prenom_court = "Merci de remplir le champ prenom";
      document.getElementById("submit").disabled = true;
    }
    else {
      document.getElementById("submit").disabled = false;
    }
    document.getElementById("prenom_mess").textContent = prenom_court;
  });

  document.getElementById("adresse").addEventListener("blur",function(e){
    var adresse = e.target.value;
    if (adresse.length===0) {
      var adresse_court = "Merci de remplir l'adresse";
      document.getElementById("submit").disabled = true;
    }
    else {
      document.getElementById("submit").disabled = false;
    }
    document.getElementById("adresse_mess").textContent = adresse_court;
  });

  document.getElementById("num").addEventListener("blur",function(e){
    var num = e.target.value;
    if (num.length===0) {
      var numero_court = "Merci d'entrez votre numero de téléphone";
      document.getElementById("submit").disabled = true;
    }
    else {
      document.getElementById("submit").disabled = false;
    }
    document.getElementById("num_mess").textContent = numero_court;
  });

  document.getElementById("mdp").addEventListener("blur",function(e){
    var mdp = e.target.value;
    if (mdp.length<6) {
      var mdp_court = "mot de passe trop court";
      document.getElementById("submit").disabled = true;
    }
    else {
      document.getElementById("submit").disabled = false;
    }
    document.getElementById("mdp_mess").textContent = mdp_court;
  });


  </script>
</html>
