<?php
require("./func.php");
require("./db.php");

$ip = $_SERVER["REMOTE_ADDR"];
date_default_timezone_set('Europe/Istanbul');

$file = $_FILES["file"];
$filename = str_replace(
    array(" ", "[", "]", "{", "}", "+", "-", "*", "\\", "/", "&", "%", "^", "'", "\"", "!", "<", ">", "|", "=", "ü", "ö", "ç", "ş", "ğ", "ı", "Ü", "Ö", "Ç", "Ş", "Ğ", "İ", "£", "#", "$", "½", "¨", "~", "`", "´", ";", ":", "@", "", "", "(", ")", ","), 
    array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "u", "o", "c", "s", "g", "i", "U", "O", "C", "S", "G", "I", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""), 
    $file["name"]
    );
    
if (isset($file)) {
    $id = random(10);
    
    if (file_exists("./cloud/$id-$filename")) {
        $id = random(10);
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
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
        else {
            echo "işlem başarısız oldu. lütfen tekrar deneyin. ana sayfaya yönlendiriliyorsunuz...";
            header("Refresh: 6; url={$_SERVER['HTTP_REFERER']}");
        }
    }
}
else {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}


?>
