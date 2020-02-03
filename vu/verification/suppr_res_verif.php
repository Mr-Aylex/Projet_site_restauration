<?php
$nom = $_GET['nom'];
?>
<html>
<head>
    <?php include '../../include/head.php' ?>

</head>
<?php include '../../include/header.php'; ?>
<body>
<div id="formulaire">
    <h2>Êtes vous sûr de vouloir supprimer cette reservation</h2>
    <a href="../reservation.php">Non</a>
    <a href="\Projet_site_restauration\traitement\suppression_reservation.php?nom=<?php echo $nom?>">Oui</a>
</div>

</body>
</html>
