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
                    <a class="nav-link" href="#">Nouveautés</a>
                    <a class="nav-link" href="#">Mangathèque</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Editions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                            // Connection a la DB
                            require 'model/connect.php';
                            // Requete
                            $sql = 'SELECT * FROM editor';

                            try {
                                // On envoi la requete 
                                $statement = $pdo->query($sql);
                                // Fetch pour tout recup
                                $editorName = $statement->fetchAll(PDO::FETCH_ASSOC);

                                // On verifie si le fetch nous renvoi quelque chose
                                if ($editorName) {
                                    // On ecrit chaque truc qu'on veut depuis le fetch
                                    foreach ($editorName as $editorName) {
                                        ?>
                                           <li><a class="dropdown-item" href="<?php echo '/views/' . $editorName['link'] ?>"> <img class="iconNavBar" src="<?= $editorName['photo'] ?>"> <?=$editorName['Name']?> </a></li>

                                        <?php
                                    }
                                }
                            } catch (\PDOException $e) {
                                die($e->getMessage());
                            }
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
    <div class="container-fluid p-0 fixed-bottom">
        <div class="row m-0 p-0">
            <footer class="footer  bg-dark ">
                <p class=" text-white text-center  p-3"> Sarah Charef © 2021 OTAKU おたく </p>
            </footer>
        </div>
    </div>

    <script src="" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>