<?php
// On va créer une connexion à la base de données avec PDO
// $db = new PDO('mysql:host=localhost;dbname=netflix2', 'root', '');
// $db = new PDO('mysql:host=mysql.docker;port=3306;dbname=netflix2', 'root', 'root');
// A remplacer par vos accès
// Permet de définir des constantes (Des variables qui ne varient pas)
define('DB_HOST', 'localhost');
define('DB_NAME', 'netflix2');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
// On peut utiliser le bloc try catch pour attraper une erreur (exception) si elle se produit
try {
    $db = new PDO('mysql:host='.DB_HOST.';port=3306;dbname='.DB_NAME, DB_USER, DB_PASSWORD);
} catch (Exception $e) {
    echo '<span style="color: red">'.$e->getMessage().'</span>';
    echo '<p>Qu\'est-ce que tu as foutu à la ligne '.$e->getTrace()[0]['line'].' ?</p>';
    echo '<img src="travolta.gif" />';
    // header('Location: https://www.google.fr/search?q='.$e->getMessage());
}
//slide 54 à 56 
// écrire la requête permettant de récupèrer tous les films
$query=$db->query('SELECT * FROM movie');
$results = $query->fetchAll();
var_dump($results);

// écrire la requête permettant de récupèrer tous les acteurs
$query=$db->query('SELECT * FROM actor');
$results = $query->fetchAll();
var_dump($results);

// écrire la requête permettant de récupèrer le film Heat 

$query=$db->query('SELECT * FROM movie WHERE  id = 4  ');
$results = $query->fetch() ;
var_dump($results);
