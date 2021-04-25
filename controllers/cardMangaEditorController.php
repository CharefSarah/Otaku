<?php

try {
    $queryMangaForeachEditor = 'SELECT manga.Name AS manganame, manga.Author, manga.releaseDate, manga.Synopsis, manga.photo AS mangaphoto, editor.Name, editor.link from manga LEFT JOIN editor ON ID_Editor = editor.ID WHERE editor.Name =\''.$editor.'\'';
    $getMangas = $pdo->query($queryMangaForeachEditor);
    $mangas = $getMangas->fetchAll(PDO::FETCH_ASSOC);
    // On verifie si le fetch nous renvoi quelque chose

} catch (\PDOException $e) {
    die($e->getMessage());
}

?>
