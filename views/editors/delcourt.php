<!-- Include pour avoir le header et evité de devoir changer les liens partout -->
<?php include('../header.php');
$editor = 'Delcourt'; ?>


<div class="container p-0">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-light text-center m-3">DELCOURT</h1>
            <p class="text-light p-3">Le groupe Delcourt est une maison d'édition française de bande dessinée, de comics et de mangas.</p>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="row">
        <div class="col-md-2 d-flex mx-auto">
            <button type="button" class="btn btn-link"><a href="delcourtActu.php">Actualité</a></button>
            <div class="container-fluid p-0 fixed-bottom">
            </div>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="row">
        <?php include('../../controllers/cardMangaEditorController.php') ?>
    </div>
</div>


<!-- La meme que pour le header, c'est au cas ou on mettrait des liens 
et/ou des boutons dedans plus tard, ca evitera de devoir le changer a chaque page -->
<?php include('../footer.php') ?>