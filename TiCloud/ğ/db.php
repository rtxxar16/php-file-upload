<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=kursadte_cloud;charset=utf8", "root", "31");
}
catch (PDOException $e) {
    print $e->getMessage();
}
?>
