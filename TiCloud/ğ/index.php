<?php
require "./func.php";
require "./db.php";
?>
<center>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="file" required><br>
        <input type="submit" value="Yükle">
    </form>
</center>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
    echo '<i>Dosya yüklediğinizde aşağıda listelenecektir...</i>';
    $query = $db->query("SELECT * FROM dosyalar", PDO::FETCH_ASSOC);
    if ($query->rowCount()) {
        foreach($query as $row) {
            
?>
    <hr>
    <p>
        <?= $row['dosya_adi']." <i>(".$row['boyut'].")</i>"; ?><br>
        <?= "<i><sup>{$row["tarih"]}</sup></i>"; ?><br>
        <a href="cloud/<?= $row['dosya_adi']; ?>" download="<?= $row['dosya_adi']; ?>">İndir</a>&nbsp;
        <a href="delete.php?name=<?= $row['dosya_adi']; ?>">Sil</a>
    </p>
    <?php
        }
    }

?>
