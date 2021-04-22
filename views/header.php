<?php
// Connexion a la DB
require '../model/connect.php';
// Requete
$sql = 'SELECT * FROM editor';

try {
    // On envoi la requete 
    $statement = $pdo->query($sql);
    // Fetch pour tout recup
    $editor = $statement->fetchAll(PDO::FETCH_ASSOC);

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
                <!-- Faudra mettre une condition pour que la redirection change selon si on est dans une view ou pas, 
        vu que le chemin dit ../ pour revenir 
        sur la page d'acceuil ca plante si on le fait DEPUIS la page d'acceuil -->
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
                                // On verifie si le fetch nous renvoi quelque chose
                                if ($editor) {
                                    // On ecrit chaque truc qu'on veut depuis le fetch
                                    foreach ($editor as $editor) {
                                ?>
                                        <li><a class="dropdown-item" href="<?php echo $editor['link'] ?>"> <img class="iconNavBar" src="<?= $editor['photo'] ?>"> <?= $editor['Name'] ?> </a></li>

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