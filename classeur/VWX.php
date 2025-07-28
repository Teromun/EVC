<?php
session_start();

require_once('../data/databaseconnect.php');
?>

<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Classeur - VWX</title>
        <link href="../styles/style.css" rel="stylesheet" media="screen">
        <link href="../styles/stylePartition.css" rel="stylesheet" media="screen">
    </head>

    <body>
        <header>
            <?php require_once('../header.php'); ?>
        </header>

        <main class="VWX">
            <section>
                <h1>V W X</h1>
            </section>

            <section class="sheet_db">
                <?php
                $readingSheets = $mysqlClient->prepare('SELECT * FROM partitions WHERE categorie = "VWX" ORDER BY name_part');
                $readingSheets -> execute();
                $sheet = $readingSheets->fetchAll();


                require_once('../partitions.php'); ?>
                
            </section>
        </main>

        <footer>
        </footer>
    </body>
</html>