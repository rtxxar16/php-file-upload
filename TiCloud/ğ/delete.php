<?php
require("./db.php");
$id = $_GET["id"];
try {
    $query = $db->prepare("SELECT * FROM dosyalar WHERE id = :id");
    $query->execute(array("id" => $id));
    $result = $query->fetchAll()[0];
    $fname = $id."-".$result["dosya_adi"];
    unlink("./cloud/$fname");
    
    $delete = $db->prepare("DELETE FROM dosyalar WHERE id = :id");
    $delete->execute(array("id" => $id));
    header("Location: index.php");
}
catch (Exception $e) {
    echo $e;
    header("Location: index.php");
}



?>
