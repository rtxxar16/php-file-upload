<?php


$file = $_FILES["file"];

move_uploaded_file($file["tmp_name"], "indirilenqaqalar/" . $file["name"]);


header("Location: " . $_SERVER["HTTP_REFERER"]);

?>