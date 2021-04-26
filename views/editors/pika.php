<!-- Include pour avoir le header et evité de devoir changer les liens partout -->
<?php include('../header.php') ?>

<?php $editor = 'Pika'; ?>

<div class="container p-0">
    <div class="row">
        <div class="col-md-12">
            <div class="coverpika">
            </div>
        </div>
    </div>
</div>
<div class="container p-0">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-light text-center m-3">PIKA EDITION</h1>
            <p class="text-light p-3">Fondée en 2000, Pika Édition est une maison d’édition spécialisée en
                manga.
                Avec
                un large choix de séries telles que GTO,<br>
                Love Hina, Card Captor Sakura, Fairy Tail, L’Attaque des Titans ou encore L’Atelier des
                Sorciers,<br>
                Pika Édition est un des leaders du marché du manga en France.</p>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="row">
        <div class="col-md-2 d-flex mx-auto">
            <button type="button" class="btn btn-link"><a href="pikaActu.php">Actualité</a></button>
            <div class="container-fluid p-0 fixed-bottom">
            </div>
        </div>
    </div>
</div>


<hr>

<div class="container p-0">
    <div class="row">
       <?php include('../../controllers/cardMangaEditorController.php') ?>
    </div>
</div>

<!-- La meme que pour le header, c'est au cas ou on mettrait des liens 
et/ou des boutons dedans plus tard, ca evitera de devoir le changer a chaque page -->
<?php include('../footer.php') ?>