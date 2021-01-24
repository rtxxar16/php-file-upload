<?php
require("./func.php");
require("./db.php");

$ip = $_SERVER["REMOTE_ADDR"];
date_default_timezone_set('Europe/Istanbul');

$file = $_FILES["file"];
$filename = re_name($file["name"]);
    
if (isset($file)) {
    $id = random(rand(4, 7));
    
    if (file_exists("./cloud/$id-$filename")) {
        $id = random(rand(4, 7));
        move_uploaded_file($file["tmp_name"], "./cloud/$id-$filename");
    }
    else {
        move_uploaded_file($file["tmp_name"], "./cloud/$id-$filename");
    }
    
    
    if ($filename != "") {
        $query = $db->prepare("INSERT INTO dosyalar SET
        id = ?,
        dosya_adi = ?,
        ip_addr = ?,
        tarih = ?,
        boyut = ?");
        $insert = $query->execute(array($id, $filename, $ip, date('H:i:s  d.m.Y'), bytesto(filesize("./cloud/$id-$filename"))));
        if ($insert) {
            $last_id = $db->lastInsertId();
            echo "http://".$_SERVER["SERVER_NAME"]."/".$id;
        }
    }
}
else {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}


?>
