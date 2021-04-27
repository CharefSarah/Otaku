<?php
// Condition pour voir si on est dans l'index ou dans le header des views, 
// le lien vers le model n'est pas le meme selon la ou on est.
if ($index == true) {
    $required = 'model/connect.php';
} else {
    $required = '../model/connect.php';
}

require $required;

// Requete SQL 
$sqlEditor = 'SELECT * FROM editor';
$statementEditor = $pdo->query($sqlEditor);
$editor = $statementEditor->fetchAll(PDO::FETCH_ASSOC);

try {

    if ($editor) {
        foreach ($editor as $editor) {

?>

            <li>
                <a class="dropdown-item" href="<?php echo '/views/editorPage.php?' . $editor['ID'] ?>">
                    <img class="iconNavBar" src="<?= '../' . $editor['photo'] ?>"> <?= $editor['Name'] ?>
                </a>
            </li>

<?php }

    }
} catch (\PDOException $e) {

    die($e->getMessage());

}
