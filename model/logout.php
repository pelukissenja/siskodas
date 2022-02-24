<?php
    require_once('../config/login.php');
    $db = new login();
    $db->logout();
    header('location: ../pages/login.php');
?>