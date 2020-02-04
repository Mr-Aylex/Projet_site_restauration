<?php
require 'model/class_admin.php';
require 'manager/admin_manager.php';
$admin = new admin($_POST);
$manager = new admin_manager($admin);
?>