<?php
// Variable $index pour determiner si on est dans l'index ou dans le header des autres views et pour adapté les liens en fonctions.
$index = false;
// Require du controller, le Require du model est dedans.
require '../controllers/dropdownNavbarController.php';
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> OTAKU | おたく</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">OTAKU | おたく</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Nouveautés</a>
                    <a class="nav-link" href="#">Mangathèque</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Editions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                            // $editor est declaré dans le controller, 
                            // ca renvoi un tableau avec les colonnes de la DB en index, ex : $editor['link']
                            if ($editor) {
                                foreach ($editor as $editor) {
                            ?>
                                    <li><a class="dropdown-item" href="<?php echo '/views/' . $editor['link'] ?>"> <img class="iconNavBar" src="<?= $editor['photo'] ?>"> <?= $editor['Name'] ?> </a></li>
                            <?php }
                            } ?>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>