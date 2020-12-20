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
        return "$bytes bytes";
    }
    
    return $mb;
}


?>
