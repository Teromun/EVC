<?php 
session_start();
?>

<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Ensemble Vocal du Castelas</title>
        <link href="./styles/style.css" rel="stylesheet" media="screen">
    </head>

    <body>
        <header>
            <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                <section class="header">
                    <div class="list ABC">
                        <a href="./classeur/ABC.php">A B C</a>
                    </div>
                    <div class="list DEF">
                        <a href="./classeur/DEF.php">D E F</a>
                        </div>
                    <div class="list GHI">
                        <a href="./classeur/GHI.php">G H I</a>
                    </div>
                    <div class="list JKL">
                        <a href="./classeur/JKL.php">J K L</a>
                    </div>
                    <div class="list MNO">
                        <a href="./classeur/MNO.php">M N O</a>
                    </div>
                    <div class="list PQR">
                        <a href="./classeur/PQR.php">P Q R</a>
                    </div>
                    <div class="list STU">
                        <a href="./classeur/STU.php">S T U</a>
                    </div>
                    <div class="list VWX">
                        <a href="./classeur/VWX.php">V W X</a>
                    </div>
                    <div class="list YZ">
                        <a href="./classeur/YZ.php">Y Z ...</a>
                    </div>
                </section>
                <?php endif ; ?>
        </header>

        <main>
            <section class="bienvenue">
                <h1>Bienvenue</h1>
                <h2>dans le répertoire de l'Ensemble Vocal du Castelas</h2>
            </section>
                
            <p><?php require_once('./logs/login.php'); ?></p>

            <?php if (isset($_SESSION['LOGGED_USER'])) : ?> <!-- Affichage de la page si connecté -->

                <section class="administratif">
                    <div><a href="./Administratif/CR.php">Comptes Rendus</a></div>
                    <div><a href="./Administratif/trombi.php">Trombinoscope</a></div>
                    <?php if ($_SESSION['LOGGED_USER']['admin']='1') : ?>
                        <div><a href="./Administratif/administration.php">Administration</a></div>
                    <?php endif ; ?>
                </section>

                <section class="actuel">
                    <p>Les chants du moment :</p>
                    <div class="listeConcert">
                    <?php require_once('./programme.php');?>
                    </div>
                </section>
            <?php endif; ?>
        </main>

        <footer>
        </footer>
    </body>
</html>