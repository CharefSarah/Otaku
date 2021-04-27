<?php include('header.php');

/* ---------------- Ces trois lignes la servent a lire l'URL ---------------- */
$url = "http://";
$url .= $_SERVER['HTTP_HOST'];
$url .= $_SERVER['REQUEST_URI'];

/* ------------ Ces deux la c'est pour decouper l'URL et la lire ----------- */
$arr = parse_url($url);
/* ------- "query" dans l'url ca se refere avec ce qui est aprés un ? ------- */
/* ------- C'est pour ca que c'est un ? que j'ai utilisé dans le href ------- */
$idToFetch = $arr['query'];

/* ------ On fait la query avec la variable qu'on a préparer au dessus ------ */
$getMangaInfo = 'SELECT * FROM manga WHERE ID =' . $idToFetch;
$getMangaInfoPDO = $pdo->query($getMangaInfo);
$mangaInfo = $getMangaInfoPDO->fetch();
?>


<h1 style="color:white;"><?= $mangaInfo['Name'] ?></h1>
<img src="<?= '../' . $mangaInfo['photo'] ?>">
<p style="color:white"><?= $mangaInfo['Synopsis'] ?></p>

<?php

try {
    $getvolume = 'SELECT * FROM volume WHERE ID_Manga=' . $idToFetch;
    $getvolumePDO = $pdo->query($getvolume);
    $volumes = $getvolumePDO->fetchAll(PDO::FETCH_ASSOC);
    if ($volumes) {
        foreach ($volumes as $volumes) {
?>

            <img style="width : 150px;" src="<?= '../' . $volumes['cover']; ?>">

<?php
        }
    }
} catch (\PDOException $e) {
    die($e->getMessage());
}


include('footer.php'); ?>