<?php
try {
    $mysqlClient = new PDO(
        'mysql:host=127.0.0.1;dbname=evdc;charset=utf8;port=3306',
        'chorale',
        'UcWCYws2Ic8Ei-JV',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    ); }
    catch (Exception $e) {
        die('Erreur : ' . $e -> getMessage());
    }