<?php
function bytesto ($bytes) {
    if ($bytes >= 1024) {
        $kb = $bytes / 1024;
        if ($kb >= 1024) {
            $mb = $kb / 1024;
            return "$mb mb";
        }
        else {
            return "$kb kb";
        }
    }
    else {
        return "$bytes b";
    }
    

}

#echo bytesto(846517890);

function random ($uzunluk) {
    $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $cikti = '';
    for ($i = 0; $i < $uzunluk; $i++) {
        $cikti .= $str[rand(0, strlen($str)) - 1];
    }
    return $cikti;
}

#echo random(5);
?>
