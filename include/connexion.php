<?php
$conn = mysqli_connect ("localhost" , "root" , "" , "info411");

//Connexion au serveur de bases de données
if (mysqli_connect_errno()) {
    echo 'Désolé, connexion au serveur ' . "localhost" . ' impossible, '. mysqli_connect_error(), "\n";
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