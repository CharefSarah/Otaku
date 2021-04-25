<?php include('header.php');

require '../model/connect.php';

try {
    $queryOPCover1 = 'SELECT * FROM volume WHERE Number=1 AND ID_Manga=4';
    $getCoverOP1 = $pdo->query($queryOPCover1);
    $row = $getCoverOP1->fetch();
} catch (\PDOException $e) {
    die($e->getMessage());
}
?>

<div>
    <img style="width:50%" src="<?= $row['cover'] ?>">
    <h3 style="color : white"> TOME <?= $row['Number'] ?> </h3>
    <p style="color:white"><?=  $row['Name']; ?></p>
</div>


<?php include('footer.php'); ?>