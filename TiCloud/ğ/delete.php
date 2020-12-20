<?php

if (file_exists("./cloud/".$_GET["name"])) {
    unlink("./cloud/".$_GET["name"]);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}




?>
