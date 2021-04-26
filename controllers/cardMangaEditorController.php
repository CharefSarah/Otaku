<?php

try {
    $queryMangaForeachEditor = 'SELECT manga.Name AS manganame, manga.Author, manga.releaseDate, manga.Synopsis, manga.photo AS mangaphoto, editor.Name, editor.link from manga LEFT JOIN editor ON ID_Editor = editor.ID WHERE editor.Name =\'' . $editor . '\'';
    $getMangas = $pdo->query($queryMangaForeachEditor);
    $mangas = $getMangas->fetchAll(PDO::FETCH_ASSOC);
    // On verifie si le fetch nous renvoi quelque chose
    if ($mangas) {
        // On ecrit chaque truc qu'on veut depuis le fetch
        foreach ($mangas as $mangas) {
?>

            <div class="card cardMangaEditor">
                <img src="<?= '../' . $mangas['mangaphoto'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title cardMangaEditorTitle" ><?= $mangas['manganame'] ?> </h5>
                    <p class="card-text cardMangaEditorText" ><?= $mangas['Synopsis'] ?> </p>
                </div>
            </div>
<?php
        }
    }
} catch (\PDOException $e) {
    die($e->getMessage());
}

?>