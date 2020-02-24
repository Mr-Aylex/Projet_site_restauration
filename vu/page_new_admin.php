<html>

<head>
    <?php include '../include/head.php' ?>
    <title></title>
</head>
<?php include '../include/header.php'; ?>
<body>
    <section class="form-group col-4" style="padding-top: 170px">
        <form action="../traitement/new_admin.php" method="post">
            <div>
                <label for="entrer_nom">Nom</label>
                <input class="form-control" type="text" id="entrer_nom" name="nom">
            </div>
            <div>
                <label for="entrer_prenom">Prenom</label>
                <input class="form-control" type="text"id="entrer_prenom" name="prenom">
            </div>
            <div>
                <label for="entrer_mail">Mail de l'admin</label>
                <input class="form-control" type="text" id="entrer_mail" name="mail">
            </div>
            <div>
                <label for="entrer_mdp">Mot de passe</label>
                <input class="form-control" type="password" id="entrer_mdp" name="mdp">
            </div>
            <input class="btn btn-primary" type="submit">
        </form>
    </section>

</body>
<?php include '../include/footer.php' ?>
</html>