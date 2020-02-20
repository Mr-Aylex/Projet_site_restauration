<?php
require 'model/class_admin.php';
require 'manager/admin_manager.php';
var_dump($_POST);
$admin = new admin($_POST);
$manager = new admin_manager();
$manager->enregistrer_dans_base($admin);
?>