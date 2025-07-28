<?php
session_start();
try {
$mysqlClient = new PDO(
    'mysql:host=127.0.0.1;dbname=evdc;charset=utf8;port=3306',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
); }
catch (Exception $e) {
    die('Erreur : ' . $e -> getMessage());
}

require_once('../data/functions.php');
require_once('../data/variables.php');


$postData = $_POST ;

if (isset($postData['identifiant']) && isset($postData['password'])) {
    foreach ($users as $user) {
        if ($user['user_id'] === $postData['identifiant'] && $user['password'] === $postData['password']) {
            $_SESSION['LOGGED_USER'] = ['identifiant' => $user['user_id'], 'password' => $user['password'], 'admin' => $user['admin']];
        }
        else {
            sprintf('Les identifiants sont erronés. Veuillez vous rapprocher de l\'administrateur.');
        }
    }

    if (!isset($_SESSION['LOGGED_USER'])) {
        $_SESSION['LOGIN_ERROR-MESSAGE'] = sprintf('Les informations envoyées ne permettent pas de vous identifier.');
    }
}

redirect('../index.php');
setcookie(
    'LOGGED_USER', $_SESSION['LOGGED_USER']['password'], ['expires' => time() + 365*24*3600, 'secure' => true, 'httponly' => true,]
);
?>