<?php


$file = $_FILES["file"];
$filename = str_replace(array(" ", "[", "]", "{", "}", "+", "-", "*", "\\", "/"), array("", "", "", "", "", "", "", "", "", ""), $file["name"]);
if (file_exists("./cloud/$filename")) {
    move_uploaded_file($file["tmp_name"], "./cloud/yeni_$filename");
}
else {
    move_uploaded_file($file["tmp_name"], "./cloud/$filename");
}



header("Location: " . $_SERVER["HTTP_REFERER"]);

?>
