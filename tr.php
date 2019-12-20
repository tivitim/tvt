<?php
$link = "http://uygulama14.club/token/sinema/beinmoviespremier.php?idd=";
$veri = file_get_contents($link);
preg_match('#m3u8(.*?)"#',$veri,$veritemp);
//echo $veritemp[1];
//print_r($veritemp[1]);
function go ($url, $time = 0){
        if ($time) header("Refresh: {$time}; url={$url}");
        else header("Location: {$url}");
    }

    go("http://a.bylig3.com:8081/taraftartv4/beinmoviespremier/playlist.m3u8$veritemp[1]");
?>