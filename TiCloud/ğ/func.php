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

function re_name ($str) {
    $allow = "0123456789abcçdefgğhıijklmnoöprsştuüvyzABCÇDEFGĞHIİJKLMNOÖPRSŞTUÜVYZ";
    $len = strlen($str);
    $eski = array();
    $yeni = array();
    for ($i = 0; $i < $len; $i++) {
        if (strpos($allow, $str[$i]) === false) {
            array_push($eski, $str[$i]);
            array_push($yeni, "");
        }
    }
    $renamed = str_replace($eski, $yeni, $str);
    return $renamed;
}

function random ($uzunluk) {
    $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ._-';
    $cikti = '';
    for ($i = 0; $i < $uzunluk; $i++) {
        $cikti .= $str[rand(0, strlen($str)) - 1];
    }
    return $cikti;
}

#echo random(5);
?>
