<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=kursadte_cloud;charset=utf8", "kursadte_root", "kursad12e45678");
}
catch (PDOException $e) {
    print $e->getMessage();
}
?>
