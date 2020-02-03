<?php
require 'manager/reservation_manager.php';
$manager = new reservation_manager();
$manager->suppr_res($_GET['nom']);
header('Location: ../vu/admin.php');
 ?>