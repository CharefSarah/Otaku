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
$getEditorInfo = 'SELECT * FROM editor WHERE ID =' . $idToFetch;
$getEditorInfoPDO = $pdo->query($getEditorInfo);
$editorInfo = $getEditorInfoPDO->fetch();

?>

<div class="container p-0">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-light text-center m-3"><?= $editorInfo['Name'] ?></h1>
            <p class="text-light p-3"><?= $editorInfo['description'] ?></p>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="row">
        <div class="col-md-2 d-flex mx-auto">
            <button type="button" class="btn btn-link"><a href="<?= $editorInfo['feedLink'] ?>">Actualité</a></button>
            <div class="container-fluid p-0 fixed-bottom">
            </div>
        </div>
    </div>
</div>

<hr>

<div class="container p-0">
    <div class="row">
        <?php include('../controllers/cardMangaEditorController.php') ?>
    </div>
</div>




<?php include('footer.php');
