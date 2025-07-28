<?php

if (!isset($_SESSION['LOGGED_USER'])) {
    echo('Il faut être connecté pour avoir accès au site.');
    exit;
}
?>