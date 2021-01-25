<?php
require("./db.php");
$id = $_GET["id"];

$query = $db->prepare("SELECT * FROM dosyalar WHERE id = :id");
$query->execute(array("id" => $id));
$result = $query->fetch(PDO::FETCH_ASSOC);
if ($query->rowCount() > 0):
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
<h4 style="text-align: center;">
    <p>Dosya Adı: <?= $result["dosya_adi"]?> </p>
    <p>Dosya Boyutu: <?= $result["boyut"] ?></p>
    <p>Yüklenme Tarihi: <?= $result["tarih"] ?></p>
    <p><a href="download.php?id=<?= $result["id"] ?>" download="<?= $result["dosya_adi"] ?>">İNDİR</a></p>
</h4>

	
<?php
else:
    echo "404";
endif;
