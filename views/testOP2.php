<?php include('header.php');

try {
    $queryOPAllCover = 'SELECT * FROM volume WHERE ID_Manga = 4';
    $getCovers = $pdo->query($queryOPAllCover);
    $covers = $getCovers->fetchAll(PDO::FETCH_ASSOC);
    // On verifie si le fetch nous renvoi quelque chose
    if ($covers) {
        // On ecrit chaque truc qu'on veut depuis le fetch
        foreach ($covers as $covers) {
?>
            <img style="width : 33%" src="<?= $covers['cover'] ?>">

<?php
        }
    }
} catch (\PDOException $e) {
    die($e->getMessage());
}
?>