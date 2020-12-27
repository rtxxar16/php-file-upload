<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=dosyalar;charset=utf8", "root", "");
}
catch (PDOException $e) {
    print $e->getMessage();
}
?>
