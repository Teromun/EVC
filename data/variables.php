<?php

// Récupération des infos utilisateurs
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement -> execute();
$users = $usersStatement -> fetchAll();

$today = date("F j, Y");

?>