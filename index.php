<?php
session_start();
// Variable $index pour determiner si on est dans l'index ou dans le header des autres views et pour adapté les liens en fonctions.
$index = true;
// Require du controller, le Require du model est dedans.
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
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">OTAKU | おたく</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/views/newRelease.php">Nouveautés</a>
                    <a class="nav-link" href="#">Mangathèque</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Editions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                            require 'controllers/dropdownNavbarController.php';
                            ?>

                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Include du footer pour la facilité -->
    <?php include('views/footer.php') ?>