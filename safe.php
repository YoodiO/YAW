<?php
function magicEncrypt($string){
    return(hash("sha512",hash("sha256",$string)));
}

function sqlCheck($string){
    $str=$string;
    $str=addslashes((sprintf("%s",$str)));
    $str=substr($str,0,255);
    return $str;
}
?>