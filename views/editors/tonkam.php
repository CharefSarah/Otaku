<!-- Include pour avoir le header et evité de devoir changer les liens partout -->
<?php include('../header.php') ?>

<?php $editor = 'Tonkam'; ?>


<div class="container p-0">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-light text-center m-3">DELCOURT/TONKAM</h1>
            <p class="text-light p-3"> Delcourt/Tonkam est une collection manga publiée par les éditions Delcourt. </p>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="row">
        <div class="col-md-2 d-flex mx-auto">
            <button type="button" class="btn btn-link"><a href="tonkamActu.php">Actualité</a></button>
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