<?php
// On simule le chargement du fichier .env (si vous n'utilisez pas de bibliothèque externe)
if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2);
        $_ENV[$name] = $value;
    }
}

// Récupération des informations depuis les variables d'environnement
$host     = $_ENV['DB_HOST'] ?? '';
$port     = $_ENV['DB_PORT'] ?? '';
$dbname   = $_ENV['DB_NAME'] ?? '';
$user     = $_ENV['DB_USER'] ?? '';
$password = $_ENV['DB_PASS'] ?? '';


try {
    // Construction du DSN (Data Source Name)
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    
    // Options de configuration PDO
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,       // Retourne les données sous forme de tableau associatif
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Utilise les vraies requêtes préparées
    ];

    // Création de l'instance PDO
    $pdo = new PDO($dsn, $user, $password, $options);

    // Décommenter la ligne suivante pour tester la connexion (à retirer en production)
    //echo "Connexion réussie au Pokédex !";

} catch (PDOException $e) {
    // En cas d'erreur, on arrête le script et on affiche le message
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}