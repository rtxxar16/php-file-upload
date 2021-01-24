<?php
require("./func.php");
require("./db.php");

if (!file_exists("./cloud")) mkdir("./cloud");
?>
<center>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="file" required><br>
        <input type="submit" value="Yükle">
    </form>
</center>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/yükleniyor.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

