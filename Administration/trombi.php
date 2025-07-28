<?php
session_start();

require_once('../data/databaseconnect.php');
?>

<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Trombinoscope</title>
        <link href="../styles/style.css" rel="stylesheet" media="screen">
        <link href="../styles/stylePartition.css" rel="stylesheet" media="screen">
    </head>

    <body class="trombi">
        <header>
            <?php require_once('../header.php'); ?>
        </header>

        <h2>Vos visages d'anges seront bientôt ici... Souriez !</h2>

        <a href="./liste_choristes.pdf">liste choristes 2024-2025</a>

    </body>
</html>