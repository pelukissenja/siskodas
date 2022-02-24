<?php
    require_once('../config/login.php');
    $db = new login();

    $email = htmlspecialchars($_POST['email']);
    $ps = $_POST['password'];
    $db->login($email, $ps);
?>