<?php

define('SERVEUR_WEB', getenv('SERVEUR_WEB'));
define('USER_BD', getenv('USER_BD'));
define('PASS_BD', getenv('PASS_BD'));
define('NOM_BD', getenv('NOM_BD'));

$conn = mysqli_connect ("SERVEUR_WEB" , "USER_BD" , "PASS_BD" , "NOM_BD");

//Connexion au serveur de bases de données
if (mysqli_connect_errno()) {
    echo 'Désolé, connexion au serveur ' . "mariadb" . ' impossible, '. mysqli_connect_error(), "\n";
    exit();
}
// Sélection de la base de données
mysqli_select_db($conn, "info411");
if (mysqli_connect_errno()) {
    echo 'Désolé, accès à la base ' . "info411" . ' impossible, '. mysqli_connect_error(), "\n";
    exit();
}
// Spécification de l'encodage UTF-8 pour dialoguer avec la BD
if (!mysqli_set_charset($conn, 'UTF8')) {
    echo 'Erreur au chargement de l\'encodage UTF-8 : ', mysqli_connect_error(), "\n";
}


mysqli_set_charset($conn, "utf8");
?>