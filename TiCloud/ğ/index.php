<?php
require "./func.php";
?>
<center>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" value="Yükle">
    </form>
</center>
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
    echo '<i>Dosya yüklediğiniz de aşağıda listelenecektir...</i>';
    $dosya = scandir("cloud");
    for ($asdas = 2; $asdas < count($dosya); $asdas++)

{    
    ?><hr>
    
    <p>
        
        <?php
        echo $dosya[$asdas]." (".bytesto(filesize('./cloud/'.$dosya[$asdas])).")";
        ?><br>

        <a href="cloud/<?php 
            echo $dosya[$asdas]; 
        ?>" download="<?php echo $dosya[$asdas]; ?>">
            İndir
        </a>&nbsp;

        <a href="delete.php?name=cloud/<?php 
            echo $dosya[$asdas]; 
        ?>">
            Sil
        </a>
    </p>
    <?php
}

?>
