<?php
require "./db.php";
$filename = $_GET["name"];
if ($_GET) {
    if (file_exists("./cloud/$filename")) {
        unlink("./cloud/$filename");
        $query = $db->prepare("DELETE FROM dosyalar WHERE dosya_adi = :dosya_adi");
        $delete = $query->execute(array('dosya_adi' => $filename));
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
    else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}



?>
