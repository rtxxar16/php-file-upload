<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cloud";

try {    
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->query("CREATE TABLE IF NOT EXISTS  `$db_name`.`dosyalar` ( `id` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' ,  `dosya_adi` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' ,  `boyut` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL DEFAULT '' ,  `tarih` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' ,  `ip_addr` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' ) ENGINE = InnoDB;");
    $db->query("ALTER TABLE `dosyalar` ADD UNIQUE IF NOT EXISTS ( `id`);");
    
} catch(PDOException $e) {
    die("hata: " . $e->getMessage());
}

?>
