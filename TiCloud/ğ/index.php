<center>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" value="Yükle">
    </form>
</center>
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
    echo '<i>Dosya yüklediğiniz de aşağıda listelenicektir...</i>';
    $dosya = scandir("indirilenqaqalar");
    for ($asdas = 2; $asdas < count($dosya); $asdas++)

{    
    ?><hr>
    
    <p>
        
        <?php 
        echo $dosya[$asdas];
        ?><br>

        <a href="indirilenqaqalar/<?php 
            echo $dosya[$asdas]; 
        ?>" download="<?php echo $dosya[$asdas]; ?>">
            İndir
        </a>&nbsp;

        <a href="delete.php?name=indirilenqaqalar/<?php 
            echo $dosya[$asdas]; 
        ?>">
            Sil
        </a>
    </p>
    <?php
}

?>
