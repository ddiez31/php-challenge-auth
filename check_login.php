<?php
//Check if credentials are valid
// include 'load.php';
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header("location:index.php");
} else {
    echo 'Erreur de connexion';
}

?>