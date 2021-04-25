<!-- Include pour avoir le header et evité de devoir changer les liens partout -->
<?php include('../header.php') ?>

<?php $editor = 'Kaze';
include('../../controllers/cardMangaEditorController.php') ?>

<div class="container p-0">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-light text-center m-3">KAZÉ</h1>
            <p class="text-light p-3">Kazé est le nom d'un éditeur français spécialisé dans l'animation japonaise fondé par Cédric Littardi. C'est en 1994 que le premier label français d'animation japonaise commence son activité éditoriale en publiant Les Chroniques de la guerre de Lodoss en VHS.</p>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="row">
        <div class="col-md-2 d-flex mx-auto">
            <button type="button" class="btn btn-link"><a href="kazeActu.php">Actualité</a></button>
        </div>
    </div>
</div>

<hr>

<div class="container p-0">
    <div class="row">
       <?php
            if ($mangas) {
                // On ecrit chaque truc qu'on veut depuis le fetch
                foreach ($mangas as $mangas) {
        ?>
                    <div class="card" style="width: 8rem; height : 150px; margin : 6px;">
                        <img src="<?= '../' . $mangas['mangaphoto'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title" style="font-size:14px;"><?= $mangas['manganame'] ?> </h5>
                        <p class="card-text" style="font-size:8px;"><?= $mangas['Synopsis'] ?> </p>
                        </div>
                    </div>
        <?php
                }
            }
       ?>
    </div>
</div>

<!-- La meme que pour le header, c'est au cas ou on mettrait des liens 
et/ou des boutons dedans plus tard, ca evitera de devoir le changer a chaque page -->

<?php include('../footer.php') ?>