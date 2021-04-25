<?php
// Condition pour voir si on est dans l'index ou dans le header des views, 
// le lien vers le model n'est pas le meme selon la ou on est.
if($index == true) {
    $required = 'model/connect.php';
} else {
    $required = '../../model/connect.php' ;
}

require $required;

// Requete SQL 
$sqlEditor = 'SELECT * FROM editor';

try {

    // On utilise la requete qu'on a enregistré avant via la commande pdo. 
    $statementEditor = $pdo->query($sqlEditor);
    // On fait un fetch all pour avoir tout ce qu'on a demandé, FETCH_ASSOC est une methode 
    // de base de PHP pour renvoyer un tableau associatif, du coup ca va donner $editor['NomDeLacolonne'].
    $editor = $statementEditor->fetchAll(PDO::FETCH_ASSOC);

} catch (\PDOException $e) {

    die($e->getMessage());
    
}
