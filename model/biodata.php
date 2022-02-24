<?php
    require_once('../config/siswa.php');
    $db = new Siswa();
    $table = 'biodata';
    $data = [
        "id_register"   => htmlspecialchars($_POST['admin']),
        "namalengkap"   => htmlspecialchars($_POST['namalengkap']),
        "nik"           => htmlspecialchars($_POST['nik']),
        "gender"        => htmlspecialchars($_POST['gender']),
        "tempatlahir"   => htmlspecialchars($_POST['tempatlahir']),
        "tanggallahir"  => htmlspecialchars($_POST['tanggallahir']),
        "akte"          => htmlspecialchars($_POST['akte']),
        "status"        => htmlspecialchars($_POST['status']),
        "anakke"        => htmlspecialchars($_POST['anakke']),
        "jsk"           => htmlspecialchars($_POST['jsk']),
        "hobi"          => htmlspecialchars($_POST['hobi']),
        "cita"          => htmlspecialchars($_POST['cita']),
        "tinggal"       => htmlspecialchars($_POST['tinggal']),
        "kendaraan"     => htmlspecialchars($_POST['kendaraan']),
        "hp"            => htmlspecialchars($_POST['hp']),
        "alamat"	    => htmlspecialchars($_POST['alamat'])
    ];
    $db->setData($table, $data);
?>