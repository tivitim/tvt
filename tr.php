<?php
$link = "http://yayin11.bunusanasoracagim.best:80/priv/b1111/playlist.m3u8";
$veri = file_get_contents($link);
preg_match('#m3u8(.*?)"#',$veri,$veritemp);
//echo $veritemp[1];
//print_r($veritemp[1]);
function go ($url, $time = 0){
        if ($time) header("Refresh: {$time}; url={$url}");
        else header("Location: {$url}");
    }

    go("http://yayin11.bunusanasoracagim.best:80/priv/b1111/playlist.m3u8$veritemp[1]");
?>





