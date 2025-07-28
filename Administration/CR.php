<?php
session_start();

require_once('../data/databaseconnect.php');
?>

<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Comptes-Rendus</title>
        <link href="../styles/style.css" rel="stylesheet" media="screen">
        <link href="../styles/stylePartition.css" rel="stylesheet" media="screen">
        <link href="../styles/styleAdmin.css" rel="stylesheet" media="screen">
    </head>

    <body>
        <header>
            <?php require_once('../header.php'); ?>
        </header>


        <h1>Comptes Rendus</h1>

        <section class="admin">
            <?php
                    $readingAG = $mysqlClient->prepare('SELECT * FROM administratif WHERE categorie = "AG" ORDER BY date');
                    $readingAG -> execute();
                    $AG = $readingAG->fetchAll();

                    $readingCA = $mysqlClient->prepare('SELECT * FROM administratif WHERE categorie = "CA" ORDER BY date');
                    $readingCA -> execute();
                    $CA = $readingCA->fetchAll();
            ?>

            <div class="AG">
                <h2>Assemblées Générales</h2>
                <?php foreach ($AG as $AGs) : ?>
                    <a href="./CR/<?php echo $AGs['name']; ?>.pdf">Assemblée Générale du <?php echo $AGs['date']; ?></a>
                <?php endforeach; ?>
                </div>

            <div class="CA">
                <h2>Réunions du Bureau</h2>
                <?php foreach ($CA as $CAs) : ?>
                    <a href="./CR/<?php echo $CAs['name']; ?>.pdf">Conseil Administratif du <?php echo $CAs['date']; ?></a>
                <?php endforeach; ?>
            </div>
        </section>
    </body>
</html>