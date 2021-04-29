<?php include('header.php') ?>

<?php

try {

    $getNews = 'SELECT * FROM volume ORDER BY releaseDate DESC';
    $getNewsQuery = $pdo->query($getNews);
    $news = $getNewsQuery->fetchAll(PDO::FETCH_ASSOC);

    if ($news) {
        foreach ($news as $news) {
?>
            <div class="card cardMangaEditor">

                    <img src="<?= '../' . $news['cover'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title cardMangaEditorTitle"><?= $news['ID_Manga'] ?> </h5>
                    </div>

            </div>
<?php
        }
    }
} catch (\PDOException $e) {
    die($e->getMessage());
}

?>

<?php include('footer.php') ?>