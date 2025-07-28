<?php if (!isset($_SESSION['LOGGED_USER'])) : ?> <!-- Si l'utilisateur n'est pas connecté, alors ...-->

    <form class="connexion" method="POST" action="./logs/submit_login.php"> <!-- Afficher le formulaire de création de compte -->
        <?php if (isset($_SESSION['LOGIN_ERROR_MESSAGE'])) : ?>
            <?php echo $_SESSION['LOGIN_ERROR_MESSAGE']; 
            unset($_SESSION['LOGIN_ERROR_MESSAGE']); ?>
        <?php endif; ?>

        <div>
           <label for="identifiant">Identifiant : </label>
            <input name="identifiant">
        </div>
        <div>
           <label for="mdp">Mot de passe : </label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit">Envoyer</button>
    </form>

<?php else : ?> <!-- Si l'utilisateur est bien connecté, alors... -->
    <div class="connection-success">
        Bonjour cher <?php echo $_SESSION['LOGGED_USER']['identifiant']; ?> !
        <div class="box-deco">
            <a href="./logs/logout.php">Déconnexion</a> 
        </div>
    </div>

<?php endif ; ?>