<?php
$lines = file('../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    $line = trim($line);
    if ($line === '' || strpos($line, '#') === 0) continue;

    [$key, $value] = explode('=', $line, 2);
    putenv(trim($key) . '=' . trim($value));
}


//define('SERVEUR_WEB', getenv('SERVEUR_WEB'));
//define('USER_BD', getenv('USER_BD'));
//define('PASS_BD', getenv('PASS_BD'));
//define('NOM_BD', getenv('NOM_BD'));


$nom_serveur   = getenv(name: 'HOST');
$nom_user      = getenv('LOGIN_BD');
$pwd_user      = getenv('MDP_BD');
$nom_database  = getenv('NOM_BD');

echo "Serveur: $nom_serveur\n";
echo "Utilisateur: $nom_user\n";
echo "Mot de passe: $pwd_user\n";
echo "Base de données: $nom_database\n";



$conn = mysqli_connect ($nom_serveur , $nom_user , $pwd_user , $nom_database);

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