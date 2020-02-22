<?php
require 'model/panier.php';
session_start();
if (empty($_SESSION['panier']))
{
    $panier = new panier();
    $_SESSION['panier'] = serialize($panier);
}
$manager = new panier_manager();
$manager->ajout_panier($_SESSION, $_GET['prix'], $_GET['plat']);
?>