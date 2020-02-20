<html>

<head>

</head>
<body>
    <section>
        <form action="../traitement/new_admin.php" method="post">
            <div>
                <label for="entrer_nom">Nom</label>
                <input type="text" id="entrer_nom" name="nom">
            </div>
            <div>
                <label for="entrer_prenom">Prenom</label>
                <input type="text"id="entrer_prenom" name="prenom">
            </div>
            <div>
                <label for="entrer_mail">Mail de l'admin</label>
                <input type="text" id="entrer_mail" name="mail">
            </div>
            <div>
                <label for="entrer_mdp">Mot de passe</label>
                <input type="password" id="entrer_mdp" name="mdp">
            </div>
            <input type="submit">
        </form>
    </section>

</body>
</html>