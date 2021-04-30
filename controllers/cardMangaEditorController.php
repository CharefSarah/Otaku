<div class="Container m-0 p-0 ">
    <div class="row p-4 ">
        <?php

        try {

            $queryMangaForeachEditor = 'SELECT manga.ID as mangaID, manga.Name AS manganame, manga.Author AS mangaauthor, manga.releaseDate, manga.Synopsis, manga.photo AS mangaphoto, editor.Name, editor.link from manga LEFT JOIN editor ON ID_Editor = editor.ID WHERE editor.ID =' . $idToFetch;
            $getMangas = $pdo->query($queryMangaForeachEditor);
            $mangas = $getMangas->fetchAll(PDO::FETCH_ASSOC);

            // On verifie si le fetch nous renvoi quelque chose
            if ($mangas) {
                // On ecrit chaque truc qu'on veut depuis le fetch
                foreach ($mangas as $mangas) {
        ?>
                    <div class="col-12 mx-auto p-0  m-0">
                        <div class="card movie_card">
                        <div class="ribbon ribbon-top-left"><span>ribbon</span></div>
                            <a href="viewManga.php?<?= $mangas['mangaID'] ?>">
                                <img src="<?= '../' . $mangas['mangaphoto'] ?>" class="card-img-top">
                                <h5 class="card-title m-2 cardMangaEditorTitle"><?= $mangas['manganame'] ?> </h5>
                            </a>
                            <span class="movie_info m-2"><?= $mangas['mangaauthor'] ?></span>
                            <span class="movie_info float-right "><i class="fas fa-star"></i> 9 / 10</span>

                        </div>
                    </div>




        <?php
                }
            }
        } catch (\PDOException $e) {
            die($e->getMessage());
        }

        ?>
    </div>
</div>