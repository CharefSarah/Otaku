<?php include('header.php');

try {
    $queryOPAllCover = 'SELECT * FROM volume WHERE ID_Manga = 17 ORDER BY releaseDate DESC';
    $getCovers = $pdo->query($queryOPAllCover);
    $covers = $getCovers->fetchAll(PDO::FETCH_ASSOC);
    // On verifie si le fetch nous renvoi quelque chose
    if ($covers) {
        // On ecrit chaque truc qu'on veut depuis le fetch
        foreach ($covers as $covers) {
?>

            <a href="https://developer.mozilla.org/">
                < <img style="width : 26%;margin : 10px;" src="<?= $covers['cover'] ?>">>
            </a>


            <img style="width : 26%;margin : 10px;" src="<?= $covers['cover'] ?>">

<?php
        }
    }
} catch (\PDOException $e) {
    die($e->getMessage());
}

include('footer.php');
?>