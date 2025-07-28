<?php 
session_start();

require_once('../data/functions.php');

session_unset();
session_destroy();
redirect('../index.php');
?>
