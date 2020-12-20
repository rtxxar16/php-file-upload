<?php

if (file_exists("./".$_GET["name"])) {
    unlink("./".$_GET["name"]);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}




?>
