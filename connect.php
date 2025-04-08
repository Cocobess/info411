<?php
// Chemin Docker correct pour .env (dans le même répertoire que le script)
$envPath = __DIR__ . '/.env';

if (!file_exists($envPath)) {
    die("Fichier .env introuvable à: $envPath");
}

$lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    $line = trim($line);
    if ($line === '' || strpos($line, '#') === 0) continue;

    [$key, $value] = explode('=', $line, 2);
    $_ENV[trim($key)] = trim($value);
}

// Récupération des variables
$nom_serveur = $_ENV['HOST'] ?? 'mariadb'; // Fallback Docker
$nom_user = $_ENV['LOGIN_BD'] ?? 'user';
$pwd_user = $_ENV['MDP_BD'] ?? 'user';
$nom_database = $_ENV['NOM_BD'] ?? 'info411';

// Debug (à supprimer en production)
error_log("Connexion à: host=$nom_serveur, user=$nom_user, db=$nom_database");

$conn = mysqli_connect($nom_serveur, $nom_user, $pwd_user, $nom_database);

if (mysqli_connect_errno()) {
    error_log("Erreur connexion MySQL: " . mysqli_connect_error());
    die("Erreur de connexion à la base de données");
}

mysqli_set_charset($conn, "utf8");
?>