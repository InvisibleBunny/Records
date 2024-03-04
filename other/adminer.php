<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.8.1
*/function
adminer_errors($Ac,$Cc){return!!preg_match('~^(Trying to access array offset on value of type null|Undefined array key)~',$Cc);}error_reporting(6135);set_error_handler('adminer_errors',E_WARNING);$Yc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Yc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Fi=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Fi)$$X=$Fi;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
version(){global$ia;return$ia;}function
idf_unescape($v){if(!preg_match('~^[`\'"]~',$v))return$v;$ne=substr($v,-1);return
str_replace($ne.$ne,$ne,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
number_type(){return'((?<!o)int(?!er)|numeric|real|float|double|decimal|money)';}function
remove_slashes($qg,$Yc=false){if(function_exists("get_magic_quotes_gpc")&&get_magic_quotes_gpc()){while(list($z,$X)=each($qg)){foreach($X
as$fe=>$W){unset($qg[$z][$fe]);if(is_array($W)){$qg[$z][stripslashes($fe)]=$W;$qg[]=&$qg[$z][stripslashes($fe)];}else$qg[$z][stripslashes($fe)]=($Yc?$W:stripslashes($W));}}}}function
bracket_escape($v,$Ma=false){static$ri=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($v,($Ma?array_flip($ri):$ri));}function
min_version($Wi,$Ae="",$h=null){global$g;if(!$h)$h=$g;$kh=$h->server_info;if($Ae&&preg_match('~([\d.]+)-MariaDB~',$kh,$C)){$kh=$C[1];$Wi=$Ae;}return(version_compare($kh,$Wi)>=0);}function
charset($g){return(min_version("5.5.3",0,$g)?"utf8mb4":"utf8");}function
script($vh,$qi="\n"){return"<script".nonce().">$vh</script>$qi";}function
script_src($Ki){return"<script src='".h($Ki)."'".nonce()."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
target_blank(){return' target="_blank" rel="noreferrer noopener"';}function
h($P){return
str_replace("\0","&#0;",htmlspecialchars($P,ENT_QUOTES,'utf-8'));}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($D,$Y,$cb,$ke="",$rf="",$gb="",$le=""){$I="<input type='checkbox' name='$D' value='".h($Y)."'".($cb?" checked":"").($le?" aria-labelledby='$le'":"").">".($rf?script("qsl('input').onclick = function () { $rf };",""):"");return($ke!=""||$gb?"<label".($gb?" class='$gb'":"").">$I".h($ke)."</label>":$I);}function
optionlist($xf,$dh=null,$Oi=false){$I="";foreach($xf
as$fe=>$W){$yf=array($fe=>$W);if(is_array($W)){$I.='<optgroup label="'.h($fe).'">';$yf=$W;}foreach($yf
as$z=>$X)$I.='<option'.($Oi||is_string($z)?' value="'.h($z).'"':'').(($Oi||is_string($z)?(string)$z:$X)===$dh?' selected':'').'>'.h($X);if(is_array($W))$I.='</optgroup>';}return$I;}function
html_select($D,$xf,$Y="",$qf=true,$le=""){if($qf)return"<select name='".h($D)."'".($le?" aria-labelledby='$le'":"").">".optionlist($xf,$Y)."</select>".(is_string($qf)?script("qsl('select').onchange = function () { $qf };",""):"");$I="";foreach($xf
as$z=>$X)$I.="<label><input type='radio' name='".h($D)."' value='".h($z)."'".($z==$Y?" checked":"").">".h($X)."</label>";return$I;}function
select_input($Ha,$xf,$Y="",$qf="",$cg=""){$Vh=($xf?"select":"input");return"<$Vh$Ha".($xf?"><option value=''>$cg".optionlist($xf,$Y,true)."</select>":" size='10' value='".h($Y)."' placeholder='$cg'>").($qf?script("qsl('$Vh').onchange = $qf;",""):"");}function
confirm($Ke="",$eh="qsl('input')"){return
script("$eh.onclick = function () { return confirm('".($Ke?js_escape($Ke):'Are you sure?')."'); };","");}function
print_fieldset($u,$se,$Zi=false){echo"<fieldset><legend>","<a href='#fieldset-$u'>$se</a>",script("qsl('a').onclick = partial(toggle, 'fieldset-$u');",""),"</legend>","<div id='fieldset-$u'".($Zi?"":" class='hidden'").">\n";}function
bold($Ta,$gb=""){return($Ta?" class='active $gb'":($gb?" class='$gb'":""));}function
odd($I=' class="odd"'){static$t=0;if(!$I)$t=-1;return($t++%2?$I:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($z,$X=null){static$Zc=true;if($Zc)echo"{";if($z!=""){echo($Zc?"":",")."\n\t\"".addcslashes($z,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Zc=false;}else{echo"\n}\n";$Zc=true;}}function
ini_bool($Sd){$X=ini_get($Sd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
set_password($Vi,$M,$V,$F){$_SESSION["pwds"][$Vi][$M][$V]=($_COOKIE["adminer_key"]&&is_string($F)?array(encrypt_string($F,$_COOKIE["adminer_key"])):$F);}function
get_password(){$I=get_session("pwds");if(is_array($I))$I=($_COOKIE["adminer_key"]?decrypt_string($I[0],$_COOKIE["adminer_key"]):false);return$I;}function
q($P){global$g;return$g->quote($P);}function
get_vals($G,$e=0){global$g;$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$e];}return$I;}function
get_key_vals($G,$h=null,$nh=true){global$g;if(!is_object($h))$h=$g;$I=array();$H=$h->query($G);if(is_object($H)){while($J=$H->fetch_row()){if($nh)$I[$J[0]]=$J[1];else$I[]=$J[0];}}return$I;}function
get_rows($G,$h=null,$n="<p class='error'>"){global$g;$wb=(is_object($h)?$h:$g);$I=array();$H=$wb->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$I;}function
unique_array($J,$x){foreach($x
as$w){if(preg_match("~PRIMARY|UNIQUE~",$w["type"])){$I=array();foreach($w["columns"]as$z){if(!isset($J[$z]))continue
2;$I[$z]=$J[$z];}return$I;}}}function
escape_key($z){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$z,$C))return$C[1].idf_escape(idf_unescape($C[2])).$C[3];return
idf_escape($z);}function
where($Z,$p=array()){global$g,$y;$I=array();foreach((array)$Z["where"]as$z=>$X){$z=bracket_escape($z,1);$e=escape_key($z);$I[]=$e.($y=="sql"&&is_numeric($X)&&preg_match('~\.~',$X)?" LIKE ".q($X):($y=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$z],q($X))));if($y=="sql"&&preg_match('~char|text~',$p[$z]["type"])&&preg_match("~[^ -@]~",$X))$I[]="$e = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$z)$I[]=escape_key($z)." IS NULL";return
implode(" AND ",$I);}function
where_check($X,$p=array()){parse_str($X,$ab);remove_slashes(array(&$ab));return
where($ab,$p);}function
where_link($t,$e,$Y,$tf="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($e)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$tf:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$L=array()){$I="";foreach($f
as$z=>$X){if($L&&!in_array(idf_escape($z),$L))continue;$Fa=convert_field($p[$z]);if($Fa)$I.=", $Fa AS ".idf_escape($z);}return$I;}function
cookie($D,$Y,$ve=2592000){global$ba;return
header("Set-Cookie: $D=".urlencode($Y).($ve?"; expires=".gmdate("D, d M Y H:i:s",time()+$ve)." GMT":"")."; path=".preg_replace('~\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session($ed=false){$Ni=ini_bool("session.use_cookies");if(!$Ni||$ed){session_write_close();if($Ni&&@ini_set("session.use_cookies",false)===false)session_start();}}function&get_session($z){return$_SESSION[$z][DRIVER][SERVER][$_GET["username"]];}function
set_session($z,$X){$_SESSION[$z][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Vi,$M,$V,$l=null){global$ic;preg_match('~([^?]*)\??(.*)~',remove_from_uri(implode("|",array_keys($ic))."|username|".($l!==null?"db|":"").session_name()),$C);return"$C[1]?".(sid()?SID."&":"").($Vi!="server"||$M!=""?urlencode($Vi)."=".urlencode($M)."&":"")."username=".urlencode($V).($l!=""?"&db=".urlencode($l):"").($C[2]?"&$C[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($B,$Ke=null){if($Ke!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($B!==null?$B:$_SERVER["REQUEST_URI"]))][]=$Ke;}if($B!==null){if($B=="")$B=".";header("Location: $B");exit;}}function
query_redirect($G,$B,$Ke,$Ag=true,$Hc=true,$Rc=false,$di=""){global$g,$n,$b;if($Hc){$Ch=microtime(true);$Rc=!$g->query($G);$di=format_time($Ch);}$yh="";if($G)$yh=$b->messageQuery($G,$di,$Rc);if($Rc){$n=error().$yh.script("messagesPrint();");return
false;}if($Ag)redirect($B,$Ke.$yh);return
true;}function
queries($G){global$g;static$vg=array();static$Ch;if(!$Ch)$Ch=microtime(true);if($G===null)return
array(implode("\n",$vg),format_time($Ch));$vg[]=(preg_match('~;$~',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G).";";return$g->query($G);}function
apply_queries($G,$S,$Dc='table'){foreach($S
as$Q){if(!queries("$G ".$Dc($Q)))return
false;}return
true;}function
queries_redirect($B,$Ke,$Ag){list($vg,$di)=queries(null);return
query_redirect($vg,$B,$Ke,$Ag,false,!$Ag,$di);}function
format_time($Ch){return
sprintf('%.3f s',max(0,microtime(true)-$Ch));}function
relative_uri(){return
str_replace(":","%3a",preg_replace('~^[^?]*/([^?]*)~','\1',$_SERVER["REQUEST_URI"]));}function
remove_from_uri($Nf=""){return
substr(preg_replace("~(?<=[?&])($Nf".(SID?"":"|".session_name()).")=[^&]*&~",'',relative_uri()."&"),0,-1);}function
pagination($E,$Nb){return" ".($E==$Nb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($z,$Vb=false){$Xc=$_FILES[$z];if(!$Xc)return
null;foreach($Xc
as$z=>$X)$Xc[$z]=(array)$X;$I='';foreach($Xc["error"]as$z=>$n){if($n)return$n;$D=$Xc["name"][$z];$li=$Xc["tmp_name"][$z];$Bb=file_get_contents($Vb&&preg_match('~\.gz$~',$D)?"compress.zlib://$li":$li);if($Vb){$Ch=substr($Bb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Ch,$Gg))$Bb=iconv("utf-16","utf-8",$Bb);elseif($Ch=="\xEF\xBB\xBF")$Bb=substr($Bb,3);$I.=$Bb."\n\n";}else$I.=$Bb;}return$I;}function
upload_error($n){$He=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?'Unable to upload a file.'.($He?" ".sprintf('Maximum allowed file size is %sB.',$He):""):'File does not exist.');}function
repeat_pattern($Zf,$te){return
str_repeat("$Zf{0,65535}",$te/65535)."$Zf{0,".($te%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\0-\x8\xB\xC\xE-\x1F]~',$X));}function
shorten_utf8($P,$te=80,$Jh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$te).")($)?)u",$P,$C))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$te).")($)?)",$P,$C);return
h($C[1]).$Jh.(isset($C[2])?"":"<i>Ã¢â‚¬Â¦</i>");}function
format_number($X){return
strtr(number_format($X,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($qg,$Hd=array(),$ig=''){$I=false;foreach($qg
as$z=>$X){if(!in_array($z,$Hd)){if(is_array($X))hidden_fields($X,array(),$z);else{$I=true;echo'<input type="hidden" name="'.h($ig?$ig."[$z]":$z).'" value="'.h($X).'">';}}}return$I;}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Sc=false){$I=table_status($Q,$Sc);return($I?$I:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$I=array();foreach($b->foreignKeys($Q)as$r){foreach($r["source"]as$X)$I[$X][]=$r;}return$I;}function
enum_input($T,$Ha,$o,$Y,$xc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$Ce);$I=($xc!==null?"<label><input type='$T'$Ha value='$xc'".((is_array($Y)?in_array($xc,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($Ce[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$cb=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$I.=" <label><input type='$T'$Ha value='".($t+1)."'".($cb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$I;}function
input($o,$Y,$s){global$U,$b,$y;$D=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$s){$Da=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Da[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Da);$s="json";}$Kg=($y=="mssql"&&$o["auto_increment"]);if($Kg&&!$_POST["save"])$s=null;$nd=(isset($_GET["select"])||$Kg?array("orig"=>'original'):array())+$b->editFunctions($o);$Ha=" name='fields[$D]'";if($o["type"]=="enum")echo
h($nd[""])."<td>".$b->editInput($_GET["edit"],$o,$Ha,$Y);else{$xd=(in_array($s,$nd)||isset($nd[$s]));echo(count($nd)>1?"<select name='function[$D]'>".optionlist($nd,$s===null||$xd?$s:"")."</select>".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).script("qsl('select').onchange = functionChange;",""):h(reset($nd))).'<td>';$Ud=$b->editInput($_GET["edit"],$o,$Ha,$Y);if($Ud!="")echo$Ud;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ha value='0'>"."<input type='checkbox'".(preg_match('~^(1|t|true|y|yes|on)$~i',$Y)?" checked='checked'":"")."$Ha value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$Ce);foreach($Ce[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$cb=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$t]' value='".(1<<$t)."'".($cb?' checked':'').">".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'>";elseif(($bi=preg_match('~text|lob|memo~i',$o["type"]))||preg_match("~\n~",$Y)){if($bi&&$y!="sqlite")$Ha.=" cols='50' rows='12'";else{$K=min(12,substr_count($Y,"\n")+1);$Ha.=" cols='30' rows='$K'".($K==1?" style='height: 1.2em;'":"");}echo"<textarea$Ha>".h($Y).'</textarea>';}elseif($s=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ha cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$Je=(!preg_match('~int~',$o["type"])&&preg_match('~^(\d+)(,(\d+))?$~',$o["length"],$C)?((preg_match("~binary~",$o["type"])?2:1)*$C[1]+($C[3]?1:0)+($C[2]&&!$o["unsigned"]?1:0)):($U[$o["type"]]?$U[$o["type"]]+($o["unsigned"]?0:1):0));if($y=='sql'&&min_version(5.6)&&preg_match('~time~',$o["type"]))$Je+=7;echo"<input".((!$xd||$s==="")&&preg_match('~(?<!o)int(?!er)~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($Je?" data-maxlength='$Je'":"").(preg_match('~char|binary~',$o["type"])&&$Je>20?" size='40'":"")."$Ha>";}echo$b->editHint($_GET["edit"],$o,$Y);$Zc=0;foreach($nd
as$z=>$X){if($z===""||!$X)break;$Zc++;}if($Zc)echo
script("mixin(qsl('td'), {onchange: partial(skipOriginal, $Zc), oninput: function () { this.onchange(); }});");}}function
process_input($o){global$b,$m;$v=bracket_escape($o["field"]);$s=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($s=="orig")return(preg_match('~^CURRENT_TIMESTAMP~i',$o["on_update"])?idf_escape($o["field"]):false);if($s=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($s=="json"){$s="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Xc=get_file("fields-$v");if(!is_string($Xc))return
false;return$m->quoteBinary($Xc);}return$b->processInput($o,$Y,$s);}function
fields_from_edit(){global$m;$I=array();foreach((array)$_POST["field_keys"]as$z=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$z];$_POST["fields"][$X]=$_POST["field_vals"][$z];}}foreach((array)$_POST["fields"]as$z=>$X){$D=bracket_escape($z,1);$I[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($z==$m->primary),);}return$I;}function
search_tables(){global$b,$g;$_GET["where"][0]["val"]=$_POST["query"];$gh="<ul>\n";foreach(table_status('',true)as$Q=>$R){$D=$b->tableName($R);if(isset($R["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$H=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$H||$H->fetch_row()){$mg="<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>";echo"$gh<li>".($H?$mg:"<p class='error'>$mg: ".error())."\n";$gh="";}}}echo($gh?"<p class='message'>".'No tables.':"</ul>")."\n";}function
dump_headers($Fd,$Se=false){global$b;$I=$b->dumpHeaders($Fd,$Se);$Jf=$_POST["output"];if($Jf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Fd).".$I".($Jf!="file"&&preg_match('~^[0-9a-z]+$~',$Jf)?".$Jf":""));session_write_close();ob_flush();flush();return$I;}function
dump_csv($J){foreach($J
as$z=>$X){if(preg_match('~["\n,;\t]|^0|\.\d*0$~',$X)||$X==="")$J[$z]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($s,$e){return($s?($s=="unixepoch"?"DATETIME($e, '$s')":($s=="count distinct"?"COUNT(DISTINCT ":strtoupper("$s("))."$e)"):$e);}function
get_temp_dir(){$I=ini_get("upload_tmp_dir");if(!$I){if(function_exists('sys_get_temp_dir'))$I=sys_get_temp_dir();else{$q=@tempnam("","");if(!$q)return
false;$I=dirname($q);unlink($q);}}return$I;}function
file_open_lock($q){$ld=@fopen($q,"r+");if(!$ld){$ld=@fopen($q,"w");if(!$ld)return;chmod($q,0660);}flock($ld,LOCK_EX);return$ld;}function
file_write_unlock($ld,$Pb){rewind($ld);fwrite($ld,$Pb);ftruncate($ld,strlen($Pb));flock($ld,LOCK_UN);fclose($ld);}function
password_file($i){$q=get_temp_dir()."/adminer.key";$I=@file_get_contents($q);if($I||!$i)return$I;$ld=@fopen($q,"w");if($ld){chmod($q,0660);$I=rand_string();fwrite($ld,$I);fclose($ld);}return$I;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$A,$o,$ci){global$b;if(is_array($X)){$I="";foreach($X
as$fe=>$W)$I.="<tr>".($X!=array_values($X)?"<th>".h($fe):"")."<td>".select_value($W,$A,$o,$ci);return"<table cellspacing='0'>$I</table>";}if(!$A)$A=$b->selectLink($X,$o);if($A===null){if(is_mail($X))$A="mailto:$X";if(is_url($X))$A=$X;}$I=$b->editVal($X,$o);if($I!==null){if(!is_utf8($I))$I="\0";elseif($ci!=""&&is_shortable($o))$I=shorten_utf8($I,max(0,+$ci));else$I=h($I);}return$b->selectVal($I,$A,$o,$X);}function
is_mail($uc){$Ga='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$hc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Zf="$Ga+(\\.$Ga+)*@($hc?\\.)+$hc";return
is_string($uc)&&preg_match("(^$Zf(,\\s*$Zf)*\$)i",$uc);}function
is_url($P){$hc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return
preg_match("~^(https?)://($hc?\\.)+$hc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P);}function
is_shortable($o){return
preg_match('~char|text|json|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($Q,$Z,$ae,$qd){global$y;$G=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($ae&&($y=="sql"||count($qd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$qd).")$G":"SELECT COUNT(*)".($ae?" FROM (SELECT 1$G GROUP BY ".implode(", ",$qd).") x":$G));}function
slow_query($G){global$b,$ni,$m;$l=$b->database();$ei=$b->queryTimeout();$sh=$m->slowQuery($G,$ei);if(!$sh&&support("kill")&&is_object($h=connect())&&($l==""||$h->select_db($l))){$ie=$h->result(connection_id());echo'<script',nonce(),'>
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'kill=',$ie,'&token=',$ni,'\');
}, ',1000*$ei,');
</script>
';}else$h=null;ob_flush();flush();$I=@get_key_vals(($sh?$sh:$G),$h,false);if($h){echo
script("clearTimeout(timeout);");ob_flush();flush();}return$I;}function
get_token(){$yg=rand(1,1e6);return($yg^$_SESSION["token"]).":$yg";}function
verify_token(){list($ni,$yg)=explode(":",$_POST["token"]);return($yg^$_SESSION["token"])==$ni;}function
lzw_decompress($Qa){$ec=256;$Ra=8;$ib=array();$Mg=0;$Ng=0;for($t=0;$t<strlen($Qa);$t++){$Mg=($Mg<<8)+ord($Qa[$t]);$Ng+=8;if($Ng>=$Ra){$Ng-=$Ra;$ib[]=$Mg>>$Ng;$Mg&=(1<<$Ng)-1;$ec++;if($ec>>$Ra)$Ra++;}}$dc=range("\0","\xFF");$I="";foreach($ib
as$t=>$hb){$tc=$dc[$hb];if(!isset($tc))$tc=$kj.$kj[0];$I.=$tc;if($t)$dc[]=$kj.$tc[0];$kj=$tc;}return$I;}function
on_help($pb,$ph=0){return
script("mixin(qsl('select, input'), {onmouseover: function (event) { helpMouseover.call(this, event, $pb, $ph) }, onmouseout: helpMouseout});","");}function
edit_form($Q,$p,$J,$Ii){global$b,$y,$ni,$n;$Oh=$b->tableName(table_status1($Q,true));page_header(($Ii?'Edit':'Insert'),$n,array("select"=>array($Q,$Oh)),$Oh);$b->editRowPrint($Q,$p,$J,$Ii);if($J===false)echo"<p class='error'>".'No rows.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' class='layout'>".script("qsl('table').onkeydown = editingKeydown;");foreach($p
as$D=>$o){echo"<tr><th>".$b->fieldName($o);$Wb=$_GET["set"][bracket_escape($D)];if($Wb===null){$Wb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Wb,$Gg))$Wb=$Gg[1];}$Y=($J!==null?($J[$D]!=""&&$y=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($J[$D])?array_sum($J[$D]):+$J[$D]):(is_bool($J[$D])?+$J[$D]:$J[$D])):(!$Ii&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Wb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$s=($_POST["save"]?(string)$_POST["function"][$D]:($Ii&&preg_match('~^CURRENT_TIMESTAMP~i',$o["on_update"])?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(!$_POST&&!$Ii&&$Y==$o["default"]&&preg_match('~^[\w.]+\(~',$Y))$s="SQL";if(preg_match("~time~",$o["type"])&&preg_match('~^CURRENT_TIMESTAMP~i',$Y)){$Y="";$s="now";}input($o,$Y,$s);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]'>".script("qsl('input').oninput = fieldChange;")."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Ii?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n",($Ii?script("qsl('input').onclick = function () { return !ajaxForm(this.form, '".'Saving'."Ã¢â‚¬Â¦', this); };"):"");}}echo($Ii?"<input type='submit' name='delete' value='".'Delete'."'>".confirm()."\n":($_POST||!$p?"":script("focus(qsa('td', qs('#form'))[1].firstChild);")));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ni,'">
</form>
';}if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0â€ž\0\n @\0Â´Câ€žÃ¨\"\0`EÃ£QÂ¸Ã Ã¿â€¡?Ã€tvM'â€JdÃd\\Å’b0\0Ã„\"â„¢Ã€fÃ“Ë†Â¤Ã®s5â€ºÃÃ§Ã‘AÂXPaJâ€œ0â€žÂ¥â€˜8â€ž#RÅ TÂ©â€˜z`Ë†#.Â©Ã‡cÃ­XÃƒÃ¾Ãˆâ‚¬?Ã€-\0Â¡Im? .Â«MÂ¶â‚¬\0ÃˆÂ¯(ÃŒâ€°Ã½Ã€/(%Å’\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃŒâ€¡â€œÃ™Å’Ãžl7Å“â€¡B1â€ž4vb0ËœÃfsâ€˜Â¼Ãªn2BÃŒÃ‘Â±Ã™ËœÃžn:â€¡#(Â¼b.\rDc)ÃˆÃˆa7Eâ€žâ€˜Â¤Ã‚lÂ¦ÃƒÂ±â€Ã¨i1ÃŒÅ½sËœÂ´Ã§-4â„¢â€¡fÃ“	ÃˆÃŽi7â€ Â³Â¹Â¤Ãˆt4â€¦Â¦Ã“yÃ¨Zf4ÂÂ°iâ€“ATÂ«V V
ÂÃ©f:ÃÂ¦,:1Â¦QÃÂ¼Ã±b2`Ã‡#Ã¾>:7GÃ¯â€”1Ã‘Ã˜Ã’sÂ°â„¢Lâ€”XD*bv<ÃœÅ’#Â£e@Ã–:4Ã§Â§!foÂÂ·Ã†t:<Â¥ÃœÃ¥â€™Â¾â„¢oÃ¢Ãœ\niÃƒÃ…Ã°',Ã©Â»a_Â¤:Â¹iÃ¯â€¦Â´ÃBvÃ¸|NÃ»4.5NfÂiÂ¢vpÃhÂ¸Â°lÂ¨ÃªÂ¡Ã–Å¡ÃœOÂ¦Ââ€°Ã®= Â£OFQÃÃ„k\$Â¥Ã“iÃµâ„¢Ã€Ã‚d2TÃ£Â¡pÃ ÃŠ6â€žâ€¹Ã¾â€¡Â¡-Ã˜Zâ‚¬Å½Æ’ Ãž6Â½Â£â‚¬Ã°h:Â¬aÃŒ,Å½Â£Ã«Ã®2Â#8ÃÂÂ±#â€™Ëœ6 nÃ¢Ã®â€ Ã±JË†Â¢hÂ«tâ€¦Å’Â±Å Ã¤4O42Ã´Â½okÃžÂ¾*r Â©â‚¬@p@â€ !Ã„Â¾ÃÃƒÃ´Ã¾?Ã6Ã€â€°r[ÂÃ°LÃÃ°â€¹:2BË†jÂ§!HbÃ³ÃƒPÃ¤=!1Vâ€°\"Ë†Â²0â€¦Â¿\nSÃ†Ã†ÃD7ÃƒÃ¬DÃšâ€ºÃƒC!â€ !â€ºÃ Â¦GÃŠÅ’Â§ Ãˆ+â€™=tCÃ¦Â©.CÂ¤Ã€:+ÃˆÃŠ=ÂªÂªÂºÂ²Â¡Â±Ã¥%ÂªcÃ­1MR/â€EÃˆâ€™4â€žÂ© 2Â°Ã¤Â± Ã£`Ã‚8(Ã¡Ã“Â¹[W
Ã¤Ã‘=â€°ySÂbÂ°=Ã–-ÃœÂ¹BS+
Ã‰Â¯ÃˆÃœÃ½Â¥Ã¸@pL4YdÃ£â€žqÅ Ã¸Ã£Â¦Ã°ÃªÂ¢6Â£3Ã„Â¬Â¯Â¸AcÃœÅ’Ã¨ÃŽÂ¨Å’kâ€š[&>Ã¶â€¢Â¨ZÃpkm]â€”u-c:Ã˜Â¸Ë†NtÃ¦ÃŽÂ´pÃ’ÂÅ’Å 8Ã¨=Â¿#ËœÃ¡[.Ã°ÃœÃžÂ¯Â~ ÂÂmÃ‹yâ€¡PPÃ¡|IÃ–â€ºÃ¹Ã€Ã¬ QÂª9v[â€“Qâ€¢â€ž\nâ€“Ã™rÃ´'gâ€¡+ÂÃ¡TÃ‘2â€¦Â­VÃÃµzÃ¤4ÂÂ£8Ã·Â(	Â¾Ey*#jÂ¬2]Â­â€¢RÃ’Ãâ€˜Â¥)Æ’Ã€[NÂ­R\$Å <>:Ã³Â­>\$;â€“> ÃŒ\rÂ»â€žÃŽHÃÃƒTÃˆ\n wÂ¡N Ã¥wÃ˜Â£Â¦Ã¬<Ã¯Ã‹GwÃ Ã¶Ã¶Â¹\\YÃ³_ Rt^Å’>Å½\r}Å’Ã™S\rzÃ©4=Âµ\nLâ€%JÃ£â€¹\",Z 8Â¸Å¾â„¢ÂiÃ·0uÂ©?Â¨Ã»Ã‘Ã´Â¡s3#Â¨Ã™â€° :Ã³Â¦Ã»ÂÃ£Â½â€“ÃˆÃžE]xÃÃ’Âs^8Å½Â£K^Ã‰Ã·*0Ã‘ÃžwÃžÃ ÃˆÃž~ÂÃ£Ã¶:Ã­Ã‘iÃ˜Ã¾Âv2wÂ½Ã¿Â± Ã»^7ÂÃ£Ã²7Â£cÃÃ‘u+U%Å½{PÃœ*4ÃŒÂ¼Ã©LX./!Â¼â€°1CÃ…ÃŸqx!HÂ¹Ã£FdÃ¹Â­LÂ¨Â¤Â¨Ã„ Ã`6Ã«Ã¨ 5Â®â„¢fâ‚¬Â¸Ã„â€ Â¨= HÃ¸l Å’V1â€œâ€º\0a2Ã—;ÂÃ”6â€ Ã Ã¶Ã¾_Ã™â€¡Ã„\0&Ã´ZÃœS d)KE'â€™â‚¬nÂµÂ[
XÂ©Â³\0ZÃ‰Å Ã”F[Pâ€˜ÃžËœ@Ã ÃŸ!â€°Ã±YÃ‚,`Ã‰\"ÃšÂ·ÂÃ‚0Ee9
yF>Ã‹Ã”9bÂºâ€“Å’Ã¦F5:Ã¼Ë†â€\0}Ã„Â´Å â€¡(\$Å¾Ã“â€¡Ã«â‚¬37HÃ¶Â£Ã¨ MÂ¾AÂ°Â²6Râ€¢Ãº{MqÃ7G ÃšCâ„¢CÃªm2Â¢(Å’Ct>[Ã¬-tÃ€/&Câ€º]ÃªetGÃ´ÃŒÂ¬4@r>Ã‡Ã‚Ã¥<Å¡Sqâ€¢/Ã¥Ãºâ€QÃ«ÂhmÂÅ¡Ã€ÃÃ†Ã´Ã£Ã´ÂLÃ€Ãœ#Ã¨Ã´KÃ‹|Â®â„¢â€ž6fKPÃ\r%tÃ”Ã“V=\" SH\$Â} Â¸Â)wÂ¡,W\0FÂ³Âªu@Ã˜b
Â¦9â€š\rrÂ°2Ãƒ#Â¬DÅ’â€XÆ’Â³ÃšyOIÃ¹>Â»â€¦n
Ââ€ Ã‡Â¢%Ã£Ã¹Â'â€¹Ã_Ãâ‚¬t\rÃâ€žzÃ„\\1ËœhlÂ¼]Q5Mp6kâ€ ÃÃ„qhÃƒ\$Â£H~Ã|Ã’Ã!*4Å’Ã±Ã²Ã›`SÃ«Ã½Â²S tÃ­PP\\gÂ±Ã¨7â€¡\n- Å :Ã¨Â¢ÂªpÂ´â€¢â€Ë†lâ€¹BÅ¾Â¦Ã®â€7Ã“Â¨cÆ’(wO0\\: â€¢Ãwâ€ÃÂp4Ë†â€œÃ²{TÃšÃºjOÂ¤6HÃƒÅ Â¶rÃ•Â¥Âq \nÂ¦Ã‰%%Â¶y']\$â€šâ€aâ€˜ZÃ“.fcÃ•q*-ÃªFWÂºÃºkÂâ€žzÆ’Â°Âµjâ€˜Å½Â°lgÃ¡Å’:â€¡\$\"ÃžNÂ¼\r#Ã‰dÃ¢Ãƒâ€šÃ‚Ã¿ÃscÃ¡Â¬ÃŒ â€žÆ’\"jÂª\rÃ€Â¶â€“Â¦Ë†Ã•â€™Â¼Phâ€¹1/â€šÅ“DA) Â²Ã[Ã€knÃp76ÃYÂ´â€°R{Ã¡MÂ¤PÃ»Â°Ã²@\n-Â¸aÂ·6Ã¾ÃŸ[Â»zJH,â€“dl BÂ£hÂoÂ³ÂÃ¬Ã²Â¬+â€¡#Dr^Âµ^ÂµÃ™eÅ¡Â¼EÂ½Â½â€“ Ã„Å“aPâ€°Ã´ÃµJGÂ£zÃ Ã±tÃ± 2Ã‡XÃ™Â¢Â´ÃÂ¿VÂ¶Ã—ÃŸÃ ÃžÃˆÂ³â€°Ã‘B_%K=EÂ©Â¸bÃ¥Â¼Â¾ÃŸÃ‚Â§kU(.! ÃœÂ®8Â¸Å“Ã¼Ã‰I.@Å½KÃxnÃ¾Â¬Ã¼:ÃƒPÃ³3 2Â«â€mÃ­H		C*Ã¬:vÃ¢TÃ…\nRÂ¹Æ’â€¢Âµâ€¹
0uÃ‚Ã­Æ’Ã¦Ã®Ã’Â§]ÃŽÂ¯ËœÅ â€P
/ÂµJQdÂ¥{Lâ€“ÃžÂ³:YÃÂ2bÂ¼Å“T Ã±ÂÃŠ3Ã“4â€ â€”Ã¤cÃªÂ¥V=ÂÂ¿â€ L4ÃŽÃrÃ„!ÃŸBÃ°YÂ³6ÃÂ­MeL  Å ÂªÃœÃ§Å“Ã¶Ã¹iÃ€oÃ9< Gâ€Â¤Ã†â€¢Ãâ„¢Mhm^Â¯UÃ›NÃ€Å’Â·
Ã²Tr
5HiMâ€/Â¬nÆ’Ã­ÂÂ³T Â[-<__Ã®3/Xr(<â€¡Â¯Å â€ Â®Ã‰Ã´â€œÃŒuÃ’â€“GNX20Ã¥\r\$^â€¡Â:'9Ã¨Â¶Oâ€¦Ã­;Ã—kÂÂ¼â€ Âµf â€“N'aÂ¶â€Ã‡Â­bÃ…,Ã‹VÂ¤Ã´â€¦Â«1ÂµÃ¯HI!%6@ÃºÃ\$Ã’EGÃšÅ“Â¬1Â(mUÂªÃ¥â€¦rÃ•Â½Ã¯ÃŸÃ¥`Â¡ÃiN+ÃƒÅ“Ã±)Å¡Å“Ã¤0lÃ˜Ã’f0ÃƒÂ½[UÃ¢Ã¸VÃŠÃ¨-:I^ Ëœ\$Ã˜sÂ«b\reâ€¡â€˜ugÃ‰hÂª~9Ã›ÃŸË†ÂbËœÂµÃ´Ã‚ÃˆfÃ¤+0Â¬Ã” hXrÃÂ¬Â©!\$â€”e,Â±w+â€žÃ·Å’Ã«Å’3â€ ÃŒ_Ã¢Aâ€¦kÅ¡Ã¹\nkÃƒrÃµÃŠâ€ºcuWdYÃ¿\\Ã—={.Ã³Ã„ÂËœÂÂ¢gÂ»â€°p8Å“t\rRZÂ¿vÂJ:Â²>Ã¾Â£Y|+Ã…@Ã€â€¡Æ’Ã›CÂt\râ‚¬ÂjtÂÂ½6Â²Ã°
%Ã‚?Ã Ã´Ã‡Å½Ã±â€™>Ã¹/
Â¥ÃÃ‡Ã°ÃŽ9F`Ã—â€¢Ã¤Ã²v~KÂ¤ÂÃ¡Ã¶Ã‘RÃWâ€¹Ã°zâ€˜ÃªlmÂªwLÃ‡9Yâ€¢*qÂ¬xÃ„zÃ±Ã¨SeÂ®Ãâ€ºÂ³Ã¨Ã·Â£~Å¡DÃ ÃÃ¡â€“Ã·ÂxËœÂ¾Ã«Ã‰Å¸i7â€¢2Ã„Ã¸Ã‘OÃÂ» â€™Ã»_{Ã±Ãº53Ã¢ÃºtÂËœâ€º_Å¸ÃµzÃ”3Ã¹d)â€¹CÂ¯Ã‚\$?KÃ“ÂªPÂ%ÃÃT&Ã¾Ëœ&\0PÃ—NAÅ½^Â­~Â¢Æ’ p Ã† Ã¶ÃÅ“â€œÃ”Ãµ\r\$ÃžÃ¯ÃÃ–Ã¬b*+D6ÃªÂ¶Â¦ÃË†ÃžÃ­J\$(ÃˆolÃžÃh&â€Ã¬KBS>Â¸â€¹Ã¶;zÂ¶Â¦xÃ…oz>Ã­Å“ÃšoÃ„ZÃ°\nÃŠâ€¹[ÃvÃµâ€šÃ‹ÃˆÅ“ÂµÂ°2ÃµOxÃ™ÂVÃ¸0fÃ»â‚¬ÃºÂ¯Ãž2BlÃ‰bkÃ6ZkÂµhXcdÃª0*Ã‚KTÃ¢Â¯H=Â­â€¢ Ãâ‚¬â€˜p0Å lVÃ©Ãµ
Ã¨Ã¢\rÂ¼Å’Â¥nÅ½mÂ¦Ã¯)(Â(Ã´:#Â¦ÂÃ¢Ã²Eâ€°Ãœ:CÂ¨CÃ Ãš
Ã¢\rÂ¨G\rÃƒÂ©0Ã·â€¦iÃ¦ÃšÂ°Ã¾:`Z1Q\n:â‚¬Ã \r\0Ã 
Ã§ÃˆqÂ±Â°Ã¼:`Â¿-ÃˆM#}1;Ã¨Ã¾Â¹â€¹qâ€˜#|Ã±Sâ‚¬Â¾Â¢hlâ„¢DÃ„\0fiDpÃ«L Â``â„¢Â°Ã§Ã‘0yâ‚¬ÃŸ1â€¦â‚¬Ãª\rÃ±=â€˜MQ\\Â¤Â³%oqâ€“Â­\0Ã˜
Ã±Â£1Â¨21Â¬1Â°Â­ Â¿Â±Â§Ã‘Å“bi:â€œÃ­\rÂ±/Ã‘Â¢â€º ` )Å¡Ã„0Ã¹â€˜@Â¾Ã‚â€ºÂ±ÃƒI1Â«NÃ CÃ˜Ã Å ÂµÃ±OÂ±Â¢ZÃ±Ã£1ÂÂ±Ã¯q1 Ã²Ã‘Ã¼Ã ,Ã¥\rdIÂÃ‡Â¦vÃ¤jÃ­â€š1 tÃšBÃ¸â€œÂ°Ã¢Ââ€™0:â€¦0Ã°Ã°â€œ1 A2Vâ€žÃ±Ã¢0 Ã©Ã±Â%Â²fi3!&QÂ·Rc%Ã’q&w%Ã‘Ã¬\rÂÃ VÃˆ#ÃŠÃ¸â„¢Qw`â€¹% Â¾â€žÃ’m*râ€¦Ã’y&iÃŸ+r{*Â²Â»(rg(Â±#(2Â­(Ã°Ã¥)R@iâ€º- Â Ë†Å¾â€¢1\"\0Ã›Â²RÂÃªÃ¿.e.rÃ«Ã„,Â¡ry(2ÂªCÃ Ã¨Â²bÃ¬!BÃžÂ3%Ã’Âµ,RÂ¿1Â²Ã†&Ã¨Ã¾tâ‚¬Ã¤bÃ¨a\rLâ€œÂ³-3Ã¡ Ã– Ã³\0Ã¦
Ã³Bpâ€”1Ã±94Â³O'RÂ°3*Â²Â³=\$Ã [Â£^iI;/3iÂ©5Ã’
&â€™}17Â²# Ã‘Â¹8 Â¿\"ÃŸ7Ã‘Ã¥8Ã±9*Ã’23â„¢!Ã³Â!1\\\0Ã8â€œÂ­rk9Â±;Sâ€¦23Â¶
Ã Ãšâ€œ*Ã“:q]5S<Â³Ã#3Â83Ã#eÃ‘=Â¹>~9SÃ¨Å¾Â³â€˜rÃ•)â‚¬Å’T*aÅ¸@Ã‘â€“Ã™besÃ™Ã”Â£:-Ã³â‚¬ÂÃ©Ã‡*;, Ã˜â„¢3!iÂ´â€ºâ€˜LÃ’Â²Ã°#1 Â+nÃ€ Â«*Â²Ã£@Â³3i7Â´1Â©Å¾Â´_â€¢Fâ€˜S;3ÃFÂ±\rAÂ¯Ã©3Ãµ>Â´x:Æ’ \rÂ³0ÃŽÃ”@â€™-Ã”/Â¬Ã“wÃ“Ã›7Ã±â€žÃ“Sâ€˜J3â€º Ã§.FÃ©\$OÂ¤Bâ€™Â±â€”%4Â©+tÃƒ'gÃ³Lq\rJtâ€¡JÃ´Ã‹M2\rÃ´Ã7Ã±Ã†T@â€œÂ£Â¾)Ã¢â€œÂ£dÂÃ‰2â‚¬P>ÃŽÂ°â‚¬ÂFiÃ Â²Â´Ã¾\nr\0Å¾Â¸bÃ§k(Â´DÂ¶Â¿Ã£KQÆ’Â¤Â´Ã£1Ã£\"2tâ€Ã´Ã´ÂºPÃ¨\rÃƒÃ€,\$KCtÃ²5Ã´Ã¶#Ã´Ãº)Â¢Ã¡P#Pi.ÃŽU2ÂµCÃ¦~Ãž\"Ã¤");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:â€ºÅ’gCIÂ¼Ãœ\n8Å“Ã… 3)Â°Ã‹7Å“â€¦â€ 81ÃÃŠx:\nOg#)ÃÃªr7\n\"â€ Ã¨Â´`Ã¸|2ÃŒgSiâ€“H)NÂ¦Sâ€˜Ã¤Â§\râ€¡Â\"0Â¹Ã„@Ã¤)Å¸`(\$s6O!Ã“Ã¨Å“V/=ÂÅ’' T4Ã¦=â€žËœiSËœÂ6IO G#Ã’XÂ·VCÂÃ†sÂ¡ Z1.Ãhp8,Â³[Â¦HÃ¤Âµ
~CzÂ§Ã‰Ã¥2Â¹lÂ¾c3Å¡ÃÃ©sÂ£â€˜Ã™Iâ€ bÃ¢4\nÃ©F8TÃ â€ IËœÃÂ©U*fzÂ¹Ã¤r0Å¾EÃ†ÂÃ€Ã˜yÅ½Â¸Ã±fÅ½Y.:Ã¦Æ’IÅ’ÃŠ(Ã˜cÂ·Ã¡ÃŽâ€¹!Â_lâ„¢Ã­^Â·^(Â¶Å¡N{Sâ€“â€œ)rÃ‹qÃYâ€œâ€“lÃ™Â¦3Å 3Ãš\nËœ+GÂ¥Ã“ÃªyÂºÃ­â€ Ã‹iÂ¶Ã‚Ã®xV3wÂ³uhÃ£^rÃ˜Ã€ÂºÂ´aÃ›â€ÃºÂ¹ÂcÃ˜Ã¨\râ€œÂ¨Ã«(.Ã‚Ë†ÂºÂChÃ’<\r)Ã¨Ã‘Â£Â¡`Ã¦7Â£Ã­Ã²43'm5Å’Â£Ãˆ\nÂPÃœ:2Â£PÂ»ÂªÅ½â€¹q Ã²Ã¿Ã…Câ€œ}Ã„Â«Ë†ÃºÃŠÃÃª38â€¹BÃ˜0Å½hRâ€°Ãˆr(Å“0Â¥Â¡b\\0Å’Hr44Å’ÃBÂ!Â¡pÃ‡\$Å½rZZÃ‹2Ãœâ€°.Ã‰Æ’(\\Å½5Ãƒ
|\nC(ÃŽ\"Ââ‚¬Pâ€¦Ã°Ã¸.
ÂÃNÃŒRTÃŠÃŽâ€œÃ€Ã¦>ÂHNâ€¦Â8HPÃ¡\\Â¬7Jp~â€žÃœÃ»2%Â¡ÃOCÂ¨1Ã£.Æ’Â§C8ÃŽâ€¡HÃˆÃ²*Ë†jÂ°â€¦Ã¡Ã·S(Â¹/Â¡Ã¬Â¬6KUÅ“ÃŠâ€¡Â¡<2â€°pOIâ€žÃ´Ã•`ÂÃ”Ã¤Ã¢Â³Ë†dOÂH Ãž5Â-Ã¼Ã†4Å’Ã£pX25-Ã’Â¢Ã²Ã›Ë†Â°z7Â£Â¸\"(Â°P \\32:]UÃšÃ¨Ã­Ã¢ÃŸâ€¦!]Â¸<Â·AÃ›Ã›Â¤â€™ÃÃŸiÃšÂ°â€¹l\rÃ”\0vÂ²ÃŽ#J8Â«ÃwmÅ¾Ã­Ã‰Â¤Â¨<Å Ã‰ Ã¦Ã¼%m;p#Ã£`XÂDÅ’Ã¸Ã·iZÂÃ¸N0Å’Ââ€¢Ãˆ9
Ã¸Â¨Ã¥Â ÃÃ¨`â€¦Å½wJÂDÂ¿Â¾2Ã’9tÅ’Â¢*Ã¸ÃŽyÃ¬Ã‹NiIh\\9Ã†Ã•Ã¨Ã:Æ’â‚¬Ã¦Ã¡xÃ¯Â­Âµyl*Å¡ÃˆË†ÃŽÃ¦Y Ãœâ€¡Ã¸Ãª8â€™WÂ³Ã¢?ÂµÅ½ÂÃžâ€º3Ã™Ã°ÃŠ!\"6Ã¥â€ºn[Â¬ÃŠ\rÂ­*\$Â¶Ã†Â§Â¾nzxÃ†9\rÃ¬|*3Ã—Â£pÃžÃ¯Â»Â¶Å¾:(p\\;Ã”Ã‹mzÂ¢Ã¼Â§9Ã³ÃÃ‘Ã‚Å’Ã¼8Nâ€¦ÃÂj2ÂÂ½Â«ÃŽ\rÃ‰HÃ®H&Å’Â²(Ãƒzâ€žÃ7iÃ›kÂ£ â€¹Å Â¤â€šcÂ¤â€¹eÃ²Å¾Ã½Â§tÅ“ÃŒÃŒ2:SHÃ³Ãˆ Ãƒ/)â€“xÃž@Ã©Ã¥tâ€°ri9Â¥Â½ÃµÃ«Å“8ÃÃ€Ã‹Ã¯yÃ’Â·Â½Â°Å½VÃ„+^WÃšÂ¦Â­Â¬kZÃ¦Yâ€”lÂ·ÃŠÂ£ÂÂÅ’4Ã–ÃˆÃ†â€¹ÂªÂ¶Ã€Â¬â€šÃ°\\EÃˆ{Ã®7\0Â¹pâ€ â‚¬â€¢Dâ‚¬â€žiâ€-TÃ¦Ã¾ÃšÃ»0lÂ°%=Ã ÃÃ‹Æ’9(â€ž5Ã°\n\nâ‚¬n,4â€¡\0Ã¨a} ÃœÆ’.Â°Ã¶RsÃ¯â€šÂª\02B\\Ã›b1Å¸SÂ±\0003,Ã”XPHJspÃ¥dâ€œKÆ’ CA!Â°2*WÅ¸Ã”Ã±Ãš2\$Ã¤+Ã‚f^\nâ€ž1Å’ÂÂ´Ã²zEÆ’ IvÂ¤\\Ã¤Å“2Ã‰ .*AÂ°â„¢â€E(d Â±Ã¡Â°ÃƒbÃªÃ‚Ãœâ€žÂÃ†9â€¡â€šÃ¢â‚¬ÃDhÂ&Â­Âª?Ã„HÂ°sÂQËœ2â€™x~nÃƒÂJâ€¹T2Ã¹&Ã£Ã e RÅ“Â½â„¢GÃ’QÅ½ÂTwÃªÃâ€˜Â»ÃµPË†Ã¢Ã£\\ )6Â¦Ã´Ã¢Å“Ã‚Ã²sh\\3Â¨\0R	Ã€'\r+*;RÃ°HÃ .â€œ!Ã‘[Ã'~Â­%t< Ã§pÃœK#Ã‚â€˜Ã¦!Ã±lÃŸÃŒÃ°LeÅ’Â³Å“Ã™,Ã„Ã€Â®&Ã¡\$	ÃÂ½`â€â€“CXÅ¡â€°Ã“â€ 0Ã–Â­Ã¥Â¼Ã» Â³Ã„:MÃ©h	Ã§ÃšÅ“GÃ¤Ã‘!&3 DÂ<!Ã¨Â23â€žÃƒ?hÂ¤JÂ©e  ÃšÃ°hÃ¡\rÂ¡mâ€¢ËœÃ°NiÂ¸Â£Â´Å½â€™â€ ÃŠNÃ˜Hl7Â¡Â®vâ€šÃªWIÃ¥.
Â´Ã-Ã“5Ã–Â§ey Â\rEJ\ni*
Â¼\$ @ÃšRU0,\$UÂ¿Eâ€ Â¦Ã”Ã”Ã‚Âªu)@(tÃŽSJkÃ¡p!â‚¬~Â­â€šÃ d`ÃŒ>Â¯â€¢\n
Ãƒ;#\rp9â€ jÃ‰Â¹Ãœ]&Nc(râ‚¬Ë†â€¢TQUÂªÂ½SÂ·Ãš\08n`Â«â€”yâ€¢bÂ¤Ã…Å¾LÃœO5â€šÃ®,Â¤Ã²Å¾â€˜>Å½â€šâ€ xÃ¢Ã¢Â±fÃ¤Â´â€™Ã¢Ã˜Â+Ââ€“\"Ã‘Iâ‚¬{kMÃˆ[\r%Ã†[	Â¤e
Ã´aÃ”1! Ã¨Ã¿Ã­Â³Ã”Â®Â©F@Â«b)RÅ¸Â£72Ë†Ã®0Â¡\nWÂ¨â„¢Â±LÂ²ÃœÅ“Ã’Â®tdÃ•+ÂÃ­Ãœ 0wglÃ¸0n@Ã²ÃªÃ‰Â¢Ã•iÃ­MÂ«Æ’\nAÂ§M5nÃ¬\$EÂ³Ã—Â±NÃ›Ã¡lÂ©ÃÅ¸Ã—Ã¬%Âª1 AÃœÃ»ÂºÃºÃ·ÃkÃ±rÃ®iFBÃ·ÃÃ¹ol,muNx-Ã_ Ã–Â¤C( ÂÂfÃ©l\r1p[9x(iÂ´BÃ’â€“Â²Ã›zQlÃ¼Âº8CÃ”	Â´Â©XU TbÂ£ÃIÃ`â€¢p+V\0Ã®â€¹Ã‘;â€¹CbÃŽÃ€XÃ±+Ãâ€™ÂsÃ¯Ã¼]HÃ·Ã’[Ã¡kâ€¹xÂ¬G*Ã´â€ Â]Â·awnÃº!Ã…6â€šÃ²Ã¢Ã›ÃmSÃ­Â¾â€œIÃžÃKÃ‹~/ÂÃ“Â¥7ÃžÃ¹eeNÃ‰Ã²ÂÂªSÂ«/;dÃ¥Aâ€ >}l~Å¾ÃÃª Â¨%^Â´fÃ§Ã˜Â¢pÃšÅ“DEÃ®ÃƒaÂ·â€št\nx=ÃƒkÃÅ½â€ž*dÂºÃªÃ°Tâ€”ÂºÃ¼Ã»j2Å¸Ã‰jÅ“Â\nâ€˜ Ã‰ ,Ëœe=â€˜â€ M84Ã´Ã»Ã”aâ€¢j@Ã®TÃƒsÂÃ”Ã¤nfÂ©Ã\nÃ®6Âª\rdÅ“Â¼0ÃžÃ­Ã´YÅ '%Ã”â€œÃ­Ãž~	ÂÃ’Â¨â€ <Ã–Ã‹
â€“AÃ®â€¹â€“HÂ¿Gâ€šÂ8Ã±Â¿ÂÃŽÆ’\$zÂ«Ã°{Â¶Â»Â²u2*â€ Ã aâ€“Ã€>Â»(wÅ’K.bPâ€š{â€¦Æ’oÃ½â€Ã‚Â´Â«zÂµ#Ã«2Ã¶8=Ã‰
8>ÂªÂ¤Â³A,Â°eÂ°Ã€â€¦+Ã¬CÃ¨Â§xÃµ*ÃƒÃ¡Ã’-b=mâ€¡â„¢Å¸,â€¹aâ€™ÃƒlzkÂÂÃ¯\$WÃµ,ÂmÂJiÃ¦ÃŠÂ§Ã¡Ã·Â+â€¹Ã¨Ã½0Â°[
Â¯Ã¿.RÃŠsKÃ¹Ã‡Ã¤XÃ§ÃZ
LÃ‹Ã§2Â`ÃŒ(Ã¯CÃ vZÂ¡ÃœÃÃ€Â¶Ã¨\$ÂÃ—Â¹,Ã¥D?HÂ±Ã–NxXÃ´Ã³)â€™Ã®Å½MÂ¨â€°\$Ã³,ÂÃ*\nÃ‘Â£\$<qÃ¿Ã…Å¸h!Â¿Â¹Sâ€œÃ¢Æ’Ã€Å¸xsA!Ëœ:Â´KÂ¥Ã}ÃÂ²â€œÃ¹Â¬Â£Å“RÃ¾Å¡A2kÂ·XÅ½p\n<Ã· Ã¾Â¦Ã½Ã«lÃ¬Â§Ã™3Â¯Ã¸Â¦Ãˆâ€¢VVÂ¬}Â£g&YÃÂ!â€ +Ã³;<Â¸YÃ‡Ã³Å¸YE3rÂ³Ã™Å½Ã±â€ºCÃ­o5Â¦Ã…Ã¹Â¢Ã•Â³ÃkkÃ¾â€¦Ã¸Â°Ã–Ã›Â£Â«ÃtÃ·â€™UÃ¸â€¦Â­)Ã»[Ã½ÃŸÃÃ®}Ã¯Ã˜uÂ´Â«lÃ§Â¢:DÅ¸Ã¸+ÃÂ _oÃ£Ã¤h140Ã–Ã¡ÃŠ0Ã¸Â¯bÃ¤KËœÃ£Â¬â€™ Ã¶Ã¾Ã©Â»lGÂªâ€ž#ÂªÅ¡Â©ÃªÅ½â€ Â¦Â©Ã¬|UdÃ¦Â¶IKÂ«ÃªÃ‚7Ã ^Ã¬Ã Â¸@ÂºÂ®O\0HÃ…Ã°HiÅ 6\râ€¡Ã›Â©Ãœ\\cg\0Ã¶Ã£Ã«2Å½BÃ„*eÃ Â\nâ‚¬Å¡	â€¦zrÂ!ÂnWz&Â {Hâ€“Ã°'\$X  w@Ã’8Ã«DGr*Ã«Ã„ÃHÃ¥'p#Å½Ã„Â®â‚¬Â¦Ã”\ndÃ¼â‚¬Ã·
,Ã´Â¥â€”
,Ã¼;g~Â¯\0Ã#â‚¬ÃŒÅ½Â²EÂÃ‚\rÃ–I`Å“Ã®'Æ’Ã°%EÃ’. ]`ÃŠÃâ€ºâ€¦Ã®%&ÃÃ®mÂ°Ã½\rÃ¢Ãž%4Sâ€žvÃ°#\n Å¾fH\$%Ã«-Ã‚#Â­Ã†Ã‘qBÃ¢Ã­Ã¦ Ã€Ã‚Q-Ã´c2Å Â§â€š&Ã‚Ã€ÃŒ]Ã â„¢ Ã¨qh\rÃ±l]Ã Â®s Ã Ã‘hÃ¤
7Â±n#Â±â€šâ€šÃš-Ã jEÂ¯FrÃ§Â¤l&dÃ€Ã˜Ã™Ã¥zÃ¬F6Â¸ÂË†Ã\" Å¾â€œ|Â¿Â§Â¢s@ÃŸÂ±Â®Ã¥z)0rpÃšÂ\0â€šX\0Â¤Ã™Ã¨|DL<!Â°Ã´oâ€ž*â€¡DÂ¶{.B<EÂªâ€¹â€¹0nB(Ã¯ Å½|\r\nÃ¬^Â©ÂÃ Â hÂ³!â€šÃ–Ãªr\$Â§â€™(^Âª~ÂÃ¨ÃžÃ‚/pÂqÂ²ÃŒBÂ¨Ã…OÅ¡ Ë†Ã°Ãº,\\ÂµÂ¨#RRÃŽÂ%Ã«Ã¤ÃdÃHjÃ„
`Ã‚ Ã´
Â®ÃŒÂ­ VÃ¥ bSâ€™dÂ§iÅ½Eâ€šÃ¸Ã¯ohÂ´r<i/k\$-Å¸\$oâ€Â¼+Ã†Ã…â€¹ÃŽÃºlÃ’ÃžOÂ³&evÃ†â€™Â¼iÃ’jMPA'u'Å½ÃŽâ€™( M(h/+Â«Ã²WDÂ¾SoÂ·.
nÂ·.Ã°nÂ¸Ã¬Ãª(Å“(\"Â­Ã€Â§hÃ¶&pâ€ Â¨/Ã‹/1DÃŒÅ Ã§jÃ¥Â¨Â¸EÃ¨Ãž&Ã¢Â¦â‚¬Â,'l\$/.,Ã„dÂ¨â€¦â€šWâ‚¬bbO3Ã³BÂ³sH :J`!â€œ.â‚¬Âªâ€šâ€¡Ã€Ã»Â¥ Â,FÃ€Ã‘7(â€¡ÃˆÃ”Â¿Â³

Ã»1Å lÃ¥s Ã–Ã’Å½â€˜Â²â€”Ã…Â¢qÂ¢X\rÃ€Å¡Â®Æ’~RÃ©Â°Â±`Â®Ã’Å¾Ã³Â®Y*Ã¤:RÂ¨Ã¹rJÂ´Â·%LÃ+nÂ¸\"Ë†Ã¸\rÂ¦ÃŽÃâ€¡H!qbÂ¾2Ã¢LiÂ±%Ã“ÃžÃŽÂ¨Wj#9Ã“Ã”ObE.I:â€¦6Ã7\0Ã‹6+Â¤%Â°.Ãˆâ€¦ÃžÂ³a7E8VSÃ¥? (DGÂ¨Ã“Â³BÃ«%;Ã²Â¬Ã¹Ã”/<â€™Â´ÃºÂ¥Ã€\r Ã¬ Â´>Ã»MÃ€Â°@Â¶Â¾â‚¬H  D
sÃ
Â°Z[tHÂ£Enx(Ã°Å’Â©R xÃ±ÂÃ»@Â¯Ã¾GkjWâ€>ÃŒÃ‚Ãš#T/8Â®c8Ã©Q0Ã‹Ã¨_Ã”IIGIIâ€™!Â¥Ã°Å YEdÃ‹EÂ´^ÂtdÃ©thÃ‚`DV!CÃ¦8Å½Â¥\rÂ­Â´Å¸bâ€œ3Â©!3Ã¢@Ã™33N}Ã¢ZBÃ³3	Ã3Ã¤30ÃšÃœM(Ãª>â€šÃŠ}Ã¤\\Ã‘tÃªâ€šf fÅ’Ã‹Ã¢I\rÂ®â‚¬Ã³337 XÃ”\"tdÃŽ,\nbtNO`PÃ¢;Â­Ãœâ€¢Ã’Â­Ã€Ã”Â¯\$\nâ€šÅ¾ÃŸÃ¤ZÃ‘Â­5U5WUÂµ^hoÃ½Ã Ã¦tÃ™PM/5K4Ej Â³KQ&53GXâ€œXx)Ã’<5Dâ€¦Â\rÃ»VÃ´\nÃŸrÂ¢5bÃœâ‚¬\\J\">Â§Ã¨1S\r[-Â¦ÃŠD
uÃ€\rÃ’Ã¢Â§Ãƒ)00Ã³YÃµÃˆÃ‹Â¢Â·k{\nÂµÃ„#ÂµÃž\rÂ³^Â·â€¹|Ã¨uÃœÂ»UÃ¥_nÃ¯U4Ã‰UÅ ~YtÃ“\rIÅ¡Ãƒ@Ã¤ÂÂ³â„¢R Ã³3:Ã’uePMSÃ¨0TÂµwWÂ¯XÃˆÃ²Ã²DÂ¨Ã²Â¤KOUÃœÃ â€¢â€¡;UÃµ\n OYÂÃ©YÃQ,M[\0Ã·_ÂªDÅ¡ÃÃˆW Â¾J*Ã¬\rg(]Ã Â¨\r\"ZCâ€°Â©6uÃªÂ+ÂµYÃ³Ë†Y6ÃƒÂ´Â0ÂªqÃµ(Ã™Ã³8}ÂÃ³3AX3T  h9jÂ¶jÃ f ÃµMtÃ¥PJbqMP5>ÂÃ°ÃˆÃ¸Â¶Â©Yâ€¡k%&\\â€š1dÂ¢Ã˜E4Ã€ ÂµYnÂÃŠÃ­\$<Â¥U]Ã“â€°1â€°mbÃ–Â¶Â^Ã’ÃµÅ¡ Ãª\"NVÃ©ÃŸpÂ¶Ã«pÃµÂ±eMÃšÃžÃ—WÃ©ÃœÂ¢Ã®\\Ã¤)\n Ã‹\nf7\nÃ— 2
Â´Ãµr8â€¹â€”=Ek7tVÅ¡â€¡ÂµÅ¾7PÂ¦Â¶ LÃ‰Ã­a6Ã²Ã²v@'â€š6iÃ Ã¯j&>Â±Ã¢;Â­Ã£`Ã’Ã¿a	\0pÃšÂ¨(ÂµJÃ‘Ã«)Â«\\Â¿ÂªnÃ»Ã²Ã„Â¬m\0Â¼Â¨2â‚¬Ã´eqJÃ¶Â­PÂÃ´tÅ’Ã«Â±f
jÃ¼Ã‚\"[\0Â¨Â·â€  Â¢X,<\\Å’Ã®Â¶Ã—Ã¢Ã·Ã¦Â·+mdâ€ Ã¥~ Ã¢Ã Å¡â€¦Ã‘s%oÂ°Â´mnÃ—),Ã—â€žÃ¦Ã”â€¡Â²\r4Â¶Ã‚8\rÂ±ÃŽÂ¸Ã—mEâ€šH]â€šÂ¦ËœÃ¼Ã–HWÂ­M0DÃ¯ÃŸâ‚¬â€”Ã¥~ÂÃ‹ÂËœKËœ
Ã®E}Ã¸Â¸Â´Ã |fÃ˜^â€œÃœÃ—\r>Ã”-z]2sâ€šxDËœd[sâ€¡tÅ½SÂ¢Â¶\0Qf- K`Â­Â¢â€štÃ Ã˜â€žwTÂ¯9â‚¬Ã¦Zâ‚¬Ã 	Ã¸\nBÂ£9 Nbâ€“Ã£<ÃšBÃ¾I5o Ã—oJÃ±pÃ€ÃJNdÃ¥Ã‹\rÂhÃžÂÃƒÂ2Â\"Ã xÃ¦ HCÃ ÃÂâ€“:ÂÃ¸Ã½9Yn16Ã†Ã´zr+zÂ±Ã¹Ã¾\\â€™Ã·â€¢Å“Ã´m ÃžÂ±T Ã¶Ã² Ã·@Y2lQ<2O+Â¥%â€œÃ.Ã“Æ’hÃ¹0AÃžÃ±Â¸Å ÃƒZâ€¹Â2RÂ¦Ã€1Â£Å /Â¯hH\rÂ¨Xâ€¦ÃˆaNB&Â§ Ã„M@Ã–[xÅ’â€¡ÃŠÂ®Â¥Ãªâ€“Ã¢8&LÃšVÃÅ“vÃ Â±*Å¡jÂ¤Ã›Å¡GH Ã¥Ãˆ\\Ã™Â®	â„¢Â²Â¶&sÃ›\0QÅ¡ \\\"Ã¨b Â°	Ã Ã„\rBsâ€ºÃ‰wÂâ€š	ÂÃ™Ã¡Å¾BN`Å¡7Â§Co(Ã™Ãƒ Ã Â¨\nÃƒÂ¨Ââ€œÂ¨1Å¡9ÃŒ*EËœ Ã±Sâ€¦Ã“UÂ0UÂº tÅ¡'|â€mâ„¢Â°Ãž?h[Â¢\$.#Ã‰5	 Ã¥	pâ€žÃ yBÃ @RÃ´]Â£â€¦Ãª@|â€žÂ§{â„¢Ã€ÃŠP\0xÃ´/Â¦ wÂ¢%Â¤EsBdÂ¿Â§Å¡CUÅ¡~OÃ—Â·Ã PÃ @XÃ¢]Ã”â€¦ÂÂ¨Z3Â¨Â¥1Â¦Â¥{Â©eLYâ€°Â¡Å’ÃšÂÂ¢\\â€™(*R` 	Ã Â¦\nâ€¦Å Ã Å½ÂºÃŒQCFÃˆ*Å½Â¹Â¹ÂÃ Ã©Å“Â¬Ãšpâ€ X|`NÂ¨â€šÂ¾\$â‚¬[â€ â€°â€™@ÃUÂ¢Ã Ã°Â¦Â¶Ã ZÂ¥`Zd\"\\\"â€¦â€šÂ¢Â£)Â«â€¡IË†:Ã¨tÅ¡Ã¬oDÃ¦
\0[Â²Â¨Ã Â±â€š-Â©â€œ gÃ­Â³â€°â„¢Â®*`hu%Â£,â‚¬â€Â¬Ã£IÂµ7Ã„Â«Â²HÃ³ÂµmÂ¤6Ãž}Â®ÂºNÃ–ÃÂ³\$Â»MÂµUYf&1Ã¹Å½Ã€â€ºe]pzÂ¥Â§ÃšIÂ¤Ã…mÂ¶G/Â£ Âºw Ãœ!â€¢\\#5Â¥4IÂ¥dÂ¹EÃ‚hqâ‚¬Ã¥Â¦Ã·Ã‘Â¬kÃ§x|ÃškÂ¥qDÅ¡bâ€¦z?Â§Âºâ€°>ÃºÆ’Â¾:â€ â€œ[Ã¨LÃ’Ã†Â¬ZÂ°XÅ¡Â®:Å¾Â¹â€žÂ·ÃšÂÃ‡jÃŸw5	Â¶YÂÂ¾0 Â©Ã‚â€œÂ­Â¯\$\0CÂ¢â€ dSgÂ¸Ã«â€š {Â@â€\n`Å¾	Ã€ÃƒÃ¼C Â¢Â·Â»MÂºÂµÃ¢Â»Â²# t}xÃŽNâ€žÃ·Âºâ€¡{ÂºÃ›Â°)ÃªÃ»CÆ’ÃŠFKZÃžjâ„¢Ã‚\0PFYâ€BÃ¤pFkâ€“â€º0<Ãš>ÃŠD<JEâ„¢Å¡g\rÃµ.â€œ2â€“Ã¼8Ã©U@*ÃŽ5fkÂªÃŒJDÃ¬ÃˆÃ‰4Ââ€¢TDU76Ã‰/Â´Ã¨Â¯@Â·â€šK+â€žÃƒÃ¶JÂ®ÂºÃƒÃ‚Ã­@Ã“=Å’ÃœWIODÂ³85 MÅ¡ÂNÂº\$RÃ´\0Ã¸5 Â¨\rÃ Ã¹_Ã°ÂªÅ“Ã¬EÅ“Ã±ÃIÂ«ÃÂ³NÃ§lÂ£Ã’Ã¥y\\Ã´â€˜Ë†Ã‡qUâ‚¬ÃQÃ» Âª\n@â€™Â¨â‚¬Ã›ÂºÃƒpÅ¡Â¬Â¨PÃ›Â±Â«7Ã”Â½N\rÃ½R{*ÂqmÃ\$\0Râ€Ã—Ã”â€œÅ Ã…Ã¥qÃÃƒË†+U@ÃžBÂ¤Ã§Of*â€ CÃ‹Â¬ÂºMCÅ½Ã¤`_
 Ã¨Ã¼Ã²Â½Ã‹ÂµNÃªÃ¦TÃ¢5Ã™Â¦CÃ—Â»Â© Â¸ Ã \\WÃƒe&_XÅ’_Ã˜ÂhÃ¥â€”Ã‚Ã†BÅ“3Ã€Å’Ã›%ÃœFWÂ£Ã»Â|â„¢GÃžâ€º'Ã…[Â¯Ã…â€šÃ€Â°Ã™Ã•V Ã#^\rÃ§Â¦GRâ‚¬Â¾Ëœâ‚¬PÂ±ÃFgÂÂ¢Ã»Ã®Â¯Ã€Yi Ã»Â¥Ã‡z\n Ã¢Â¨Ãž+ÃŸ^/â€œÂ¨â‚¬â€šÂ¼Â¥Â½\\â€¢6Ã¨ÃŸb Â¼dmhÃ—Ã¢@qÃ­ÂÃ•AhÃ–),JÂ­Ã—Wâ€“Ã‡cmÃ·em]Å½Ã“ÂeÃkZb0ÃŸÃ¥Ã¾Å¾ÂYÃ±]ymÅ Ã¨â€¡fÃ˜eÂ¹B;Â¹Ã“ÃªOÃ‰Ã€wÅ¸apDWÃ»Å’Ã‰ÃœÃ“{â€º\0ËœÃ€-2/bNÂ¬sÃ–Â½ÃžÂ¾Raâ€œÃÂ®h&qt\n\"Ã•iÃ¶RmÃ¼hzÃeÃ¸ â€ Ã ÃœFS7ÂµÃPPÃ²Ã¤â€“Â¤Ã¢Ãœ:BÂ§Ë†Ã¢Ã•smÂ¶Â­Y dÃ¼ÃžÃ²7}3?*â€štÃºÃ²Ã©ÃlTÃš}Ëœ~â‚¬â€žÂâ‚¬Ã¤=cÅ¾Ã½Â¬Ã–ÃžÃ‡	Å¾Ãš3â€¦;TÂ²L Ãž5*	Ã±~#ÂµAâ€¢Â¾Æ’â€˜sÅ½x-7Ã·Å½f5`Ã˜#\"NÃ“bÃ·Â¯GËœÅ¸â€¹Ãµ@ÃœeÃ¼[Ã¯Ã¸ÂÂ¤ÃŒsâ€˜Ëœâ‚¬Â¸-Â§ËœM6Â§Â£qqÅ¡ hâ‚¬e5â€¦\0Ã’Â¢Ã€Â±Ãº*Ã bÃ¸ISÃœÃ‰ÃœFÃŽÂ®9}Ã½pÃ“-Ã¸Ã½`{Ã½Â±Ã‰â€“kPËœ0T<â€žÂ©Z9Ã¤0<Ã•Å¡\rÂ­â‚¬;!ÃƒË†gÂº\r\nKÃ”
\nâ€¢â€¡\0ÃÂ°*Â½\nb7(Ã€_Â¸@,Ã®e2\rÃ€]â€“Kâ€¦+\0Ã‰Ã¿p C\\Ã‘Â¢,0Â¬^Ã®MÃÂ§Å¡ÂºÂ©â€œ@Å ;X\râ€¢Ã°?\$\râ€¡jâ€™+Ã¶/Â´Â¬BÃ¶Ã¦P Â½â€°Ã¹Â¨J{\"aÃ6ËœÃ¤â€°Å“Â¹|Ã¥Â£\n\0Â»Ã \\5â€œÂÃ	
156Ã¿â€  .Ã[Ã‚U
Ã˜Â¯\0dÃ¨Â²8YÃ§:!Ã‘Â²â€˜=ÂºÃ€X.Â²uCÂªÅ Å’Ã¶!SÂºÂ¸â€¡oâ€¦pÃ“BÃÃ¼Ã›7Â¸Â­Ã…Â¯Â¡RhÂ­\\hâ€¹E=Ãºy:< :uÂ³Ã³2Âµ80â€œsiÂ¦Å¸TsBÃ›@\$ ÃÃ©@Ã‡u	ÃˆQÂºÂÂ¦.Ã´â€šT0 M\\/Ãªâ‚¬d+Ã†Æ’\nâ€˜Â¡=Ã”Â°dÅ’Ã…Ã«AÂ¢Â¸Â¢)\r@@Ã‚h3â‚¬â€“Ã™8.eZa|.Ã¢7ÂYkÃcÃ€ËœÃ±â€“'D#â€¡Â¨YÃ²@XÂqâ€“=MÂ¡Ã¯44Å¡B AMÂ¤Â¯dU\"â€¹Hw4Ã®(>â€šÂ¬8 Â¨Â²ÃƒCÂ¸?e_`ÃÃ…X:Ã„A9ÃƒÂ¸â„¢ÂÃ´pÂ«GÃÃ¤â€¡Gy6Â½ÃƒFâ€œXrâ€°Â¡lÃ·1Â¡Â½Ã˜Â»ÂBÂ¢Ãƒâ€¦9RzÂ©ÃµhBâ€ž{ÂÅ¾â‚¬â„¢\0Ã«Ã¥^â€šÃƒ-Ã¢0Â©%DÅ“5F\"\"Ã ÃšÃœÃŠÃ‚â„¢ÃºiÃ„`Ã‹Ã™nAfÂ¨ \"tDZ\"_Ã V\$Å¸Âª!/â€¦Dâ‚¬Ã¡Å¡â€ Ã°Â¿Âµâ€¹Â´Ë†Ã™Â¦Â¡ÃŒâ‚¬F,25Ã‰jâ€ºTÃ«Ã¡â€”y\0â€¦NÂ¼x\rÃ§YlÂ¦Â#â€˜Ã†Eq\nÃÃˆB2Å“\nÃ¬Ã 6Â·â€¦Ã„4Ã“Ã—â€!/Ã‚\nÃ³Æ’â€°QÂ¸Â½*Â®;)bRÂ¸Z0\0Ã„CDoÅ’
Ã‹Å¾Å½48Ã€â€¢Â´Âµâ€¡Ãeâ€˜\nÃ£Â¦S%\\ÃºPIkÂâ€¡(0ÃÅ’u/â„¢â€¹GÂ²Ã†Â¹Å Å’Â¼\\Ã‹} 4Fpâ€˜Å¾GÃ»_Ã·G?)gÃˆotÂÂº[vÅ¾Ã–\0Â°Â¸?bÃ€;ÂªÃ‹`(â€¢Ã›Å’Ã Â¶NS)\nÃ£x=Ã¨Ã+@ÃªÃœ7Æ’ÂjÃº0Ââ€”,Ã°1Ãƒâ€¦zâ„¢â€œÂ­Â>0Ë†â€°GcÃ°Ã£Lâ€¦VX
Ã´Æ’Â±Ã›Ã°ÃŠ%Ã€â€¦Ãâ€žQ+Ã¸Å½Ã©oÃ†FÃµÃˆÃ©ÃœÂ¶Ã>Q-Ã£câ€˜ÃšÃ‡lâ€°Â¡Â³Â¤wÃ ÃŒz5Gâ€˜Ãªâ€š@(hâ€˜cÃ“HÃµÃ‡r?Ë†Å¡NbÃ¾@Ã‰Â¨Ã¶Ã‡Ã¸Â°Ã®lx3â€¹U`â€žrwÂªÂ©Ã”UÃƒÃ”Ã´tÃ˜8 Ã”=Ã€l#Ã²ÃµÂlÃ¿Ã¤Â¨â€°8Â¥E\"Å’Æ’Ëœâ„¢O6\nËœÃ‚1eÂ£`\\hKfâ€”V/ÃÂ·PaYKÃ§OÃŒÃ½ Ã©ÂÃ xâ€˜	â€°Ojâ€žÃ³Âr7Â¥F;Â´ÃªÂBÂ»â€˜ÃªÂ£Ã­ÃŒâ€™â€¡Â¼>Ã¦ÃÂ¦Â²V\rÃ„â€“ Ã„|Â©'JÂµzÂ«Â¼Å¡â€#â€™PBÃ¤â€™Y5\0NCÂ¤^\n~LrRâ€™Ã”[ÃŒÅ¸RÃƒÂ¬Ã±gÃ€eZ\0xâ€º^Â»i<QÃ£/)Ã“%@ÃŠÂâ€™â„¢fBÂ²HfÃŠ{%PÃ \"\"Â½ÂÃ¸@ÂªÃ¾Â)Ã²â€™â€˜â€œDE(iM2â€šSâ€™*Æ’yÃ²SÃ\"Ã¢Ã±ÃŠeÃŒâ€™1Å’Â«Ã—Ëœ\n4`ÃŠÂ©>Â¦ÂQ*Â¦ÃœyÂ°nâ€â€™Å¾Â¥TÃ¤uÃ”ÂÃ¢Ã¤â€Ã‘~%Â+WÂÂ²XKâ€¹Å’Â£QÂ¡[ÃŠâ€Å¾Ã lÂPYy#DÃ™Â¬D<Â«FLÃºÂ³Ã•@Ã6']Ã†â€¹â€¡Ã»\rFÃ„`Â±!â€¢%\nÂ0ÂcÃÃ´Ã€Ã‹Â©%c8WrpGÆ’.TÅ“DoÂ¾UL2Ã˜*Ã©|\$Â¬:Ã§ÂXt5Ã†XYÃ¢IË†p#Ã± Â²^\nÃª â€ž:â€š#DÃº@Ã–1\r*ÃˆK7Ã @D\0Å½Â¸Câ€™CÂ£xBhÃ‰EnKÃ¨,1\"Ãµ*y[Ã¡#!Ã³Ã—â„¢Ã¢Ã™â„¢Â©ÃŠÂ°l_Â¢/â‚¬Ã¶xÃ‹\0Ã Ã‰Ãš5ÃZÃ‡Ã¿4\0005JÃ†h\"2
Ë†Å’â€¡%Yâ€¦ÂÂ¦aÂ®a1SÃ»OÂ4Ë†ÃŠ%niÃ¸Å¡PÅ’Ã ÃŸÂ´qÃ®_
ÃŠÂ½6Â¤Å¡â€¢~Å ÃˆI\\Â¾Å¡â€˜dÂâ€°ÃºdÃ‘Ã¸ÂÅ’Â®â€”DÃœÃˆâ€â‚¬Âµ3g^Ã£Ã¼@^6Ã•â€ž
Ã®Ã¥_Ã€HDÂ·.ksLÂ´Ã”@Ã‚Ã¹Ã‰Ë†Ã¦nÂ­IÂ¦Ã„Ã‘~Ã„\râ€œb @Â¸Ã“â‚¬â€¢NÅ¾t\0sÂÃ©Ã‚]:uÃ°ÃŽXâ‚¬b@^Â°1\0Â½Â©Â¥2?Ã¨TÃ€Ã³6dLNeÃ‰â€º+Ãª\0Ã‡:Â©ÃÂÂ²lÂ¡Æ’z 6q=ÃŒÂºxâ€œÂ§Ã§N6 ÃœO,%@sâ€º0\nÃ¦\\)Ã’L<Ã²CÃŠ|Â·Å¾Â¦PÂÂ¶bÂ¢ËœÂ¼ÃŽA>Iâ€¹â€¦Ã¡\"	Å’Ãœ^K4Ã¼â€¹g
IXÂi@Pâ€¦jEÂ©&/1@Ã¦fÃœ	Ã”NÃ¡Âºx0
coaÃŸÂ§ÃÂªâ€°Ã³,C'Ãœy#6F@Â¡Ã â€°ÂH0Ã‡ {z3tâ€“|cXMJ.*BÃ)ZDQÃ°Ã¥Â\0Â°Ã±â€œT-vÂ¥XÅ¾a*â€Ã,*Ãƒ<bÃâ€¢Ã‹#xÃ‘ËœÃdâ‚¬PÃ†Ã²KG8â€”Ã† yâ€œK	\\#=Ã¨)Ã­gÃˆâ€˜hÅ’ &Ãˆ8])Â½CÃ…\nÃƒÂ´Ã±Ã€9Â¼zË†W\\â€™gÃ¾M 7Å Ë†!ÃŠâ€¢Â¡Ã³
Ã†Å â€“Â¬,Ã…Ã²9Ã±Â²Å Â©Â©\$T\"Â£,Å Â¨%.F!Ã‹Å¡ AÂ»-Ã Ã©â€Ã¸Â¹-Ã gÂ¨ Ã¢Å \0002R>KEË†'Ã˜UÃ™_IÃÃ·Ã¬Â³9Â³Ã‹Â¼Â¡j(ÂQÂ°Â@Ã‹@Ã²4/Â¬7Ã´Ëœâ€œ'J.Ã¢â€¡RTâ€¦\0]KSÂ¹DÂâ€¡â€“Ap5Â¼\rÃ‚H 0!Ã¤â€ºÃ‚Â´e	d@RÃ’ÂÃ’Ã Â¸Â´ÃŠ9Â¢SÂ©;7Å¾Hâ€˜BÃ€bxÃ³JÃ¨Ã–_Å¾viÃ‘U`@Ë†Âµ ÃƒSAMâ€¦Â¯XÃ‹ÃGÃ˜XiÃ™Ã“U*Â¬ÃšÃ¶â‚¬ÃŠÃµÃ»Ã'Ã¸Ã:VÃ²WJvÂ£DÂ¾ÂÃ¿N'\$Ã¬zh\$d_yÂ§Å“â€œZ]â€¢â„¢Â­Ã³YÃŠÂ°Â³8Ã˜â€Ã¾Â¡Ã¦]Â¨PÃ¬Å“*hÂÅ¾Ã”Ã–Â§e;â‚¬ÂºpeÃ»Â¢\$kÃ¦wÂ§Ã¬*7NÂ²DTx_Ã”Ã”Â§Â½GiÃ´&PÃ¿Ã”â€ Å¾tÃâ€ Â¨bÃ¨\\EÃ†H\$iÂE\"crÂ½Ã¥0lâ€°?>ÃÃ±Å’â€˜C(Å W@3ÃˆÃâ€¢22aÂ´Ââ€œIÃÃ Â¹Ã•Â¡{Â¥B`ÃœÃšÂ³iÃ…Â¸Go^6E\rÂ¡ÂºGËœMÂ¤p1iÃ™IÂ¼Â¤XÂª\0003Å½2Ã‡KÃ¼Â§Ã“Ã´Ãzl&Ã–â€ â€°'ILÃ–\\ÃŽ\"â€™7Â¤>Â¬j(>Ã£jÃ´FG_Ã¢Ã¤& 10IÃ†A31= h q\0Ã†FÅ Â«â€“â€žÃ„Â·Å Ã_Ã‚ JÂªÅ’â€žÃ”Â³VÃŽâ€“Âºâ€¡Ãœâ€ qÃ™Ã•Å¡Â¢Ã™	Ã‚Ã (/Â¾dOCÂ_smÂ§<gËœx\0â€™Â°\"ÂÃ°\n@EkH\0Â¡JË†Â­Â®8â‚¬(Â¬Â¨Â¯km[â€°â€˜Ã¬Â¿ÃS4Ã°\nY40â€ºÂ«+L
\nÅ Â¦Ã€â€œâ€˜Ã¬#BÃ“Â«bÃ§Ã€%RÃ–â€“Â°ÂµÃ—Â­â€˜Ã€R:Ã†<\$!Ã›Â¥rÂ;Å“â€¦Ã‡	%|ÃŠÂ¨Ã¡(â‚¬|Â«Hâ€¡\0Ã Ã°â€˜ÃÃÅ’Â°â€¦]Ã‚cÃ’Â¡=
0Â¯Ã­ZÃ¡Â¨\"\"=Ã–Xâ€¢Ëœ)Â½fÃ«NÅ¸Â6V}FÃ•Ãš=[Ã‰Å¾ÂÃ Â§Â¢huÃ´-Ã¸Â±\0tÂ¥Ã¥bW~ÂºÃµQâ€¢Ã•iJÅ Ã¶â€”LÃ±5Ã—Â­q#kbÅ¾ ÃWnÂ«Â«ÃQÃ¸TÆ’!Ã«ÂÃ‚eÃµncÂSÃ‘[+Ã–Â´EÂ¯<-â€¡â€“a]Ã…Æ’Ë†Ã¬YbÃ“\n\nJ~Ã¤|JÃ‰Æ’8Â® Ã¬LpÅ¸â„¢ÃÃ¦oÃ± â‚¬NÃ¤Â©ÃœÂ¨â€¦J.Ã¹ÂÃ…Æ’SÃˆÂ¡2c9ÃƒjÂ©yÅ¸-`a\0Ã„Ã¶*Ã¬Ã–Ë†@\0+Â´Ã˜mgÃ‰Ãš6Â°1Â¤Ã”Me\0ÂªÃ‹Q â€°_â€ž}!IÃ¶ â€™GLâ‚¬f)ÃƒXÃ±o
,â€œShxÃ‚\0000\"hÃ°+LÂ¥MÃ”Ã‰ ÂªÃ‘ËœÂ±ÃŠZ	jâ€”\0Â¶ Âµ/ËœÂ\$â€™Â¨>u*â€”Z9â€Ã®ZÃ¥Â®eÃµÂ« +JÅ“â€°â„¢Â¸tzÂÃˆÃ‹Ã»ÃˆÃ¾RÂ¨KÃ”Â¯ÃÃ‘Ã¢DyÅ½ÃžÃ™qÃ¡0Câ€”-fÂ¢Ã…mâ€šÂ¶Â¹ÂªBIÃ­|â€™Â¹HBâ€°Å“sQlÃ€X Â°Æ’.ÃÃ…Ã¶Ã”|Â¸cË†ÂªÃ€[â€“Ã³ZhZÃ¥ÃƒlËœÂ¨Ã›xÃ‚@'Âµ mlÂ²KrQÂ¶26Â½â€¢]Â¯Ã’Â·nÂ§d[ÃÃ¶Ã±Å½Â©â€¡dÃ¾â‚¬â€˜\"GJ9uÃ²Ã»BÆ’oâ€œÂ©ZÃŸâ€“Ã•aÂ¥Â²n@ÃÂªnÂ°lW|*gXÂ´ \nn2Ã¥FÂ¬|x`Dkâ€ºâ€žuPPÂ!Q\rrâ€¹â„¢` W/Â¹Å’Å¸	1Ã¦[-o,71bUsËœÂ¢Â©Ã§NÂ¸7Â²Ã‹Ã‰Ã›GqÂ¸.\\Q\"CCT\"Ã¦â€˜Ã â€“Ã„Ã’*?uÂ¨tsÂ¶â€°â€Â°Ã‡]Ã¡Ã™Â©Pz[Â¥[YFÃÂ¹Â¢â€ºFD3Â¤\"Ââ€“ÂºÃ‡]ÂuÃ›Â)w
zÂ­:#Â¶ÃÃIiwÅ ÃªÂp
Ã‰â€ºÂ»Ã±{Â¯oÃ–0nÃ°Â¶Ã›;Ã•Ã¢\\Ã©xÂ¸Â°Ã˜\0qÂ·ÂmÃ¥Ã£Ã­Âª&Ã˜~Ã‚Ã®Ã®â€”â€7Â²Ã¸Ã€Â¹9
[Â¤HÃ©qdLâ€¢OÂº2Â´vÂ|BÂ¯tÂÃ¦Å \\Ã†Â¤â€°HdÂ¦Ã«Ã¢Hâ€˜\" Ã²Ã¬N\n\0
Â·Â©GÃ…gÃŽF Â¸FË†}\"Ã¬Â­&QEKÂ¾â€˜{}\ryÃ‡Å½Â¾ËœrÃ—â€ºtâ€ºÃ€ÂÅ¾â€žÃ¯â€ 7Ã”NuÃƒÂ³[AÃ¸gh;SÂ¥.Ã’ â€šÅ¡Â±Ã‚Â¥
|yÃ¹Ã[Ã•â€ _bÃ²ÃˆÂ¨Â¬!+RÃ±Ã¨ZXÃ¹@0NÃ©Ã©Ã¾ÃPâ‚¬ÃžÃ¬%Â¡jDÂ£Ã‚Â¯z	Ã¾Ã â€”[Ã¸U\"Â¶{eâ€™8Ã´Å¸>â€EL4JÃÂ½â€¦0â€ºÂ¡Â¦Ã¨7 â‚¬Â´ dÂ·Â¬ 
Ã€Q^`0`Å“Ââ€¢ÂÂ¯]cÃ°<g @Å½Â²hy8ËœÃ­p.ef\nÃ³ÃŽehâ€¡Æ’aXÂÃšÃƒÃ¸mSÃŸÃŸjBÃšËœQ\"â€¡\rÃ«Ã—Ã‡K3â€ =>Ã‡ÂªAXâ€[,,\"'< Âµâ€ºâ€“%Â¶aâ‚¬Â«Ã“Â´ÃƒÂµ.\$Ã±\0Ã§%\0Ã¡ÂsVÂ¤Ã®Ã‹p M\$Â¼@jÃ¡Ã—Ã°>Â¤Â­Â}VeÃ„\$@â€”Ãâ€ž
#Â§ÂªÃ(3:Ã¸`â€šUÃ°Å¡YÃŒÂ¶uÃ¦Â¨Ã»Ë†ÃÃ¢ÃŽ@Ã„V#Eâ€°G/Â¸Ã¼XD\$Ë†hÂµÆ’avâ€“Â¼ xS\"]k18aÂ¯Ã‘ÂÂ9dJROÃ“Å sâ€˜`EJÂ°Â½Â§Ã¸UoÂ³m{lÂ¹B8Â¥Ë†Ã(\n}eiÂ±bÃ¼ Ã¸, Â; Nâ€ÂªÃâ€¡Ã¸QÃ˜\\Ã¨Ã‡Â¸I5yRÂ¼\$!>\\ÃŠâ€°Å’gÃ‚uj*?nÂ°MÃ“ÃžÂ²hÃÃ¸\r%ÃÂ³Ã U(dâ‚¬Â¦NÂµd#}Å¡p A:Â¬Â¨Ã½â€¢-\\Ã¨
AÂ»*Ã„4â‚¬2Iâ‚¬Â®Ã¨\rÂÃ–Â£Â»â€¦ 0h@\\Ã”ÂµÃ‰Ã€8Ã°3â€šrq]ÂÃ²Ã¹d8\"Ã°Q Å’Ã¿Ã®Ã†â„¢:cÃ†Ã yÃ‡4	ÃÃ¡â€˜Å¡daÃ‚â‚¬â€¡ÃŽ 6>UÃ›AÃšÂÃ‘Â:Â½Â@Ëœ2â€¹Ã›Ã¿\$Ã²eh2ÂÂ´Ã»FÂ»Â§Ã‰â„¢NÃ¡+â€™Å’Å¸\rÃ¾Ã”â‚¬(Ã®Arâ€šÂ°d*Ã¼\0[Â®#cjÂÅ Ã»Â´>!(ÂSÃ°ÃˆÃ©LË†eÃ½TÃ‰Ã†M	9\0W:â„¢BDÃ½Ã¸â€š3JÅ’Â¬Ã•_@sÃ‡Ã¡Ârueâ€¡Ã¸Â¦ Ã°Â»ÂÃ½Â¬ +Âº'BÂ«Ã‰}\"B\"Ã¼z2Å½Ã®â€¹rÂÃ«lÂ»xF[Ã¨LÃ™Ã‹Â²Ea9 ÃŠcdbÂ½Â¾^,Ã”UC=/2Â»Ã—Ã²Â¼Ã¸Ã¬/\$ÂCÃ†#ÃšÃ·8Â¡}DÃ€Ã›Ã—6Ã
`^;6B0U7Ã³Â·_=	,Âª1Ã¢j1V[Â¨.	H9(1Ã¯Â±Ã†Â±Ã’ÂLzÂ¢CÂ¸	Ã‡\$.AÃŠfhÃ£â€“Â«Â¾ÃÃ Ã¯D rY	Ã½HÃ˜e~oâ€”r19Ã¦â€”Ã™â€¦\\Å¡ÃŸâ€žPâ€™)\"ÃƒQÂ¹Â´,Ã‘eÃ²Ã¶LÂ¾â€w0Ã\0Â§â€”Å¡â€“ÂÃ;wÃ¬
XÂ³Ã‡ÂÂ¨â€°Ã§qoÂ¹Ã¯Â¾~Å¸Â«Ã¶Ã§Ã¸>9Ã´>}Â²Ã²ÂºdcÂ¿\0Ã¥ÃŠgÂ¾Â¶fÃŽÃ¹qâ€“&9â€”ÂÂ¹-Ã½J#Â¤Å Â¸Âª3^4m/ÃŒâ„¢Â¯\0\0006Ã€Â¦n8Â£Â·>Ã¤Ë†Â´.Ã“â€”Ã©â€™cphÂ±Ã‹Ã™Ã¹â€¢â€ºâ€ºÂº_A@[â€°â€¢7Â«|9\$pMh >â€°Å’Ã5Â°KÂ¥ÃºÃƒE=hÃ¾Å¡AÃ’tÅ ^Ã¢VÃ—	Â©\"Â	cÂ£B;Â¤Ã¶Ãžiâ€¦Ã•QÃ’ tÂ¬â€ºÃ²Ã©@,\nÃ˜)Â­Ã³Ë†sÃ“`Å¸â„¢Â°Â°;Ã‘4Â´â€”â€šâ€žIÃ­Â£Â©â€˜Ã­Ã¹Ã¨yâ‚¬ -Â¤0yeÃŠÂ¨â€”Uâ€šâ€BÃ®Â©vÂ³Â¥3Hâ„¢PÃ‡GÃ‹5ÃªÃ¯â€™s|Â·Âº\rÃ°ÂÅ¾Ã\$0Ã£Ã¨Ã²â€¢Ã²1Â½Â©l3â‚¬Ã©(*oF~PKÂ´Âª.Ã½,'Â·J/ÂÃ“Â²ÂtÃ°Ââ€¹dÂ:Å¡â€”nÂ§\nÂ©Ã°jâ€ ÂYÂ«zÃª(Ã†Ã³â€™Ã¼â€œwÂ°Ã ZÃ¬#ZÃŠ	Ioâ€¢@1Ã†ÃŽÂ»\$Ã¯Ã²Â±Â¦=VWzâ€¢	nÅ½BÃ¸aÃºâ€ºÂAÂ»ÂµqÂª@â„¢Â´Iâ‚¬p	@Ã‘5Ã“â€“ÂlH{UÂºÃœoXÃµÂ¿fÃ°Å½Ã“Â¿\\zÂµÃ—.Â§Å¡Â²,-\\Ãšâ€”^y n^Ã…Ã—ÃŠBqÂ·Ã¾â€¦Â¤ zXÃ£â€°Â¡Æ’\$Â¨*J72Ã•D4.â€ Ã•Ââ€¦!Â¤M0Â¶Ã³DÃ«Ã¬FÅ Ã Ã³Ã£ GÂ¡ÃLË†mÃ˜c*mÃ¯cIÂ£Ã¥5Ã‰Å’Â»^â€”tÂ¿Âªâ€™jlÅ’7Ã¦â€ºÂ¿SÂ¶Q Â¢.iâ€™Ã©Ã–Ã”hÂ¨ÃµLÃÃšÂ±B6Ã”â€žhËœ&Ã¯J â€¦l\\â€°Ã°WeÂªcÃŽf%kjâ„¢Ã Â¦pÃƒR=Å’Ã¤iâ€™@.ÃµÂ¥(Ã¤2ÂklHUW\"â„¢oÂ¥jÂ½Â§â€™p!S5Ã†Ã¨Â­pL'`\0Â¤O *Â¦Q3XÃ‚â€œâ€°ÃžlJ\08\nâ€¦\rÂ·Â²Â¸*â‚¬aÃ±Ã¼Ã«â€“Å¾Â¼Ã»râ„¢`<Â¤&ÃšXBhÃ–8!xÅ¡Â®&Ã¤BhtÂ¥\$Ã¿â€¡Ã¾]Ã‰nÃŸâ€ Ã©Ã³Ã‰cLâ‚¬â‚¬[Ã†ÂµÂ©dÂ¸Ã¡<`Å“ÂÂ®\0Å“â‚¬Â¢Ãâ€šÃžawÃ¦O%;â€˜ÂÃµBCÂ»â€¦Qâ€™\rÃŒÂ­Ã“Ã¬Å’Ã¬â‚¬ÂpÅ Â¤Â«Ã˜PQÂ¶Zâ€™Â¸ÃºZÃAu=N&Ãia\nÃ‘mK6I}Ã‘Ã—n	Å¡Ã…t\nd)Ã­Â®ÃÃˆÃ·bpÃŽâ‚¬\"Å¾Ã°g'Â¦0Å“7ÃƒuÃˆ&@Ã¢
7Ã¥8X NÂÃ€xÃ„Ã¡ÂÃ¶Â­Ãº\$BÃ¹ÃŸZB/Â¶MÂ¯gBÂ»iÂ¦Ã–Ã‘Â§Â¶\\Ã¢mÆ’mIÃŒÃ„â‚¬ÃŠÃ§Â;5=#&4ËœÃŒÃ§Ã¾PÂÃ•Ââ€°Â½Ã©Ã°qÃ­â€™Aâ„¢Ã¤â€º\\â€¦,qÂ¤cÃžÅ¸\ncÃ¢Bâ€“â€šÂ¾Ã—Ãºw\0BgjDâ€¹@;Â=0mâ€œkÂ®Ã„\rÃ„Â²â€¹`
Ã€Â¤'5Â¤â€¢Â¶k-Å’{Â¢â€°\0Â¯_â€ºMuÃ®Ã¸Æ’Â2â€œÃ’Ã—â€ Â§Â»Â£Ã€qÃ¸â€°Â¬Ã°>)9ÃˆW\nÃ¤d+â€¦Ã”Ã”Â§Ã€G\rÃ½Ãƒn4â€žâ€¹Ã¤OÃ˜:5Ã¶â€ Ãž8ÂÂ»1Âµ:ÃŽÅ¡?Â¥â€¡(yGgWKÂ
\rÃ7Â­Â²â€œâ€”m5.Å“â€šeÅ’HÃ™hJÂ«Ak#Â»Ã“LÂ¶..â€º\\ÃŽ=Ã•Ã±UÃ™Ãâ€žÂËœÆ’Ã“:Ã>7ÂºW+^yDâ€šâ€œÅ“bÂ­Ã¼GÂ¡â€˜OZÃ4Ã¯Å rÂ(|xÂµÃ†Ã½PrÂ¸Â£,yÅ½Â©Ã8qaÃœÂ©O2ÂµÂkÂªnËœÅ #p2Â¾Ã»Ã‡Ë†ÂºÃ˜â€.Â¼Â£câ€™â€“Uâ€”câ€Ã¶Ã¤Ã«Ã…â€šjÃ³\$Ã´Ã­8Ã„Â¬~ÂÅ¡7ZR:Ã°Ã—â€ 8Â­9ÃŽÂ¨w(aâ€LÂ¤%Â­-,Ã”ÃˆÃ¬Â¿Å’#Ã´fÆ’%8Ã¾Ã‰|Ãžcâ€¡â€˜Â¬Å“ÃšÃ—%Xâ€˜WÃ‚\n}6â€™â€˜HÃ¬Ã¿Ã±Ã¦Ã‹Å¾Â¤Â¡#Â¹&J,'zâ€œMÃ¼Mâ€¦Â¢â€°Å’Ã Ã Âºâ€˜Ãœâ€ Â² â€˜ËœÂ®/y6YQÂ¯â€˜Ã¬Â¶ÃšÂºdÃ“â„¢dÃÃžÃ³Ã:ÃµÃ£Ã´Â£EÆ’Å’p2gÅ¸gÃ/Ã®,Ã’Ã‹Ã¤ÃšÃ•Ë†'8Ã¬^;Â´UWNâ€¦Ã‘Ã…ÃžÃ•{Ã‰OCÃ²â€¦Ã‘Â¤Ã´Â¢zÃ‰iKXÂ¢â€™Ãšâ€NÅ’dGÂ£RCJYÃµâ€™Ââ€˜iÂ²â€™Ã—y#>zSÂ²MUcÂ£ÃµÆ’Â¨Ã»Ã¿ÃªRORÃ”Â¾Â¡0Â)Ã˜0ÃŠÃº]:=ÃÅ¾â„¢tÆ’â€˜ÃÃ«Ã©'\$â„¢sÃ’rFÅ½Ã¶Ã™67	
=\$BÃ„Ã“!qs	1\"Ã¼ÂÂ¬vÃ†Ã·%â€˜Å’Iâ€¢l<ÃŠb!Ã›Â®6(Cd-ÃŠ^<H`~2Â¹KÃ¬ÃzKÃÃ™Å“â‚¬Ã”Â±Â­Ã™Ã•y,qAÃ¡*Âº\0}â€šÃCÂ¨pbâ‚¬\\Ã“SÃ¥5ÃÃŸÃ¹Ãš'(â€ºÃ¡Ã“Ã­|Â»MÃ«Ã°â€žÃ€WÃšÃ€5;\$5
ÂµT|ÂºÃ² ;kÃµÃ±ÃˆtÂÃ®Ã±@Ã²â€˜Ã¢;9Â³)Â½Ã²;iÂ.Ã›;â€ºÂ·Ã­_Â¥ÃªÃ—ÃŒFÂ¶=Ã±ÂÅ“DÃ¤Â¥M`HÃžâ€œÆ’\0Ë†	 N @Â°%wâ€¡ÂªdÂÃ¨PbÃ°\$H|kÃ†[Â¾ÃœdCI!:lÃ…Ã¼,Â§Â¨Ã½<Ã·â€uÃ²tâ€Ã´Â¼NeÃÂW^Â¡wÃ¨'6â€¢ÂÅ’DÂ¿Ã¡fÃ½u Â¬ihIÃ·Z:Å¸Ã‘~Ã½Ã·ÃÂ£ÂrÂ¾â€¦ÃˆzÃ„3Ãµ+Â¯uoCÂ·s2Ã•bÃ†uaâ€XÂÃ°wWKÂ£	HÃ”Â¶27>Ã¢WÃÃÃyÃƒÂ£Â¬ÃMÃ«JÂÂ£rpTÂ¼â€LÃ°â€°|`fâ„¢â€¦:ÃŠÃµÅ¡AÂ²tÃ¤Å d|iÂ½Â³[wÃ¼Ã¨jÂâ€žÅ WËœ 7â€˜Â¤Â£auâ€¹Â© ÃºÃ«e Ã²â€¢Å¡A5Â­Q' ÃŠÂ\0Ãˆ 3â€¹Ã’Â¾\$Ã‚Ã§Ã½Å’\rk)Âa; Ã³Ã¦H=Ã¹â„¢Ã–Â~Ã³IGÅ IÃ¦Â°<Ã¹Â´â€¢\"Ã¹Â¬Ã‰I1'Ã¨ â„¢Â¢Gcm\0P\nÃ¯wÃ¨Ã¼#Ã>Å’Â½Ã›xB\"Ã±Ã’Em|â€¦Ã¹2Å \$}<3PÂYXÂgoÂ£dÃŸÂ¶â‚¬<ÂÃ”Ã¾Â£Â¿qE\"`Ã—ÃºÃˆ4Ã¡gÂ«8rÂ£]\nË†Â¡â€”Ãµ:Ã¸â€ºqVbÂTÃ¬Â£Ã’mÂ°â€¢â€¦9K&Ã’â€œÃ„Â¤ÃƒmÃ”7)@Â¨Ã€Qzâ€ºÃƒÃ“=Â¢Â½ÃŸÂµÃ…Â±Ã­Å¸H\nÃ”Ã«Ã¶}OÃ§i}Â»\rÃ™Â£.Â¢Â¹vâ€¹Â®pÂ¾JW&ÃŸuÃ—55Â0	Ã”5Ã€Ã®PÃ‹IÅ’Ã\nÂ½Ã›Ã­Â¸Â³Ã†Ã¦Â­l\0O5*=ÃžÃº	â€¦P-Â¢Ã©ÃŠH
\0Ã³fÃ—%ÂÃŒtÃ£ÂÂº*Â¥S:Â±tÃâ€º â‚¬â‚¬?Ã¸Ãˆâ€šHÃ¢Ã±Ã·Âºq4Ë†ÃKÃâ€Â§@â‚¬Ã”Â¬Â»Ãœâ€š.O(Â±Ã«Ã¼ ZÂ¡\$ÃÃŠÃ“]Â¼â€šÃ…oÂ¿â‚¬nâ€¹zÂ«AÂ±!â‚¬t85<WÃ±R2[â€ž8Ã²â€šÂ¶Ã¹Ân5\$IÃÂµÃ¦Âµâ€¢ZÂ¤ Ã€Ã©Ã³]'}ET\nÅ¸Ãºâ€ Å Ã¤.ËœÃ­Â¤&Ã¤7Â¦ÃVÃ‹@Â¤_Ã€Dâ€oÃˆÃ½&J6Â°ÃŸ4iÃƒj\$ÃˆÃ’ELÂ¢Ã¤Ã¾uâ€œÃœtÂ¢â€°Ã‹Ã¤+IÂ¡ÃÂ¢Â¢Å¡Ã»Ã˜Â£~Ã¼SÂ±SZTXÃ’ Â¾PYzÂ½Ã…\"\$VÃ‡_]Ã¿M(Â§Ã£7Ã²Æ’ÂºÃ¼Â·ÃšÃŒÃ¡ÃƒÃ€â€¡t _ÂÂ´Sâ€°Ã³Ë†ÂÃƒÃª/Â­ÃŸtâ€¦Â½â€œÃ„â€šÃ¼Â¿Ã¢mHÃ¤:\0Â»5Ã - _Z'#Ã¶Â¥Ã1â€¡PÂ¿Ã©Â´,Â}(Å¸Â°~Â¸ \0Ã¬â€¹Ã¾!Ã’â€“`-Ã¾P\neÃ¹y ( Â¿ÃŠË†  `9OÃ‹Ãº!ÂÃ;5â€°\nÂ½\$ Ãª{ÃºÅ¸Â¯Ã¾Ã°Ã¬UAÃ¼Â¨7Ã¹Ã¡!Â¿Ã§Ã²â‚¬[Ã½ Â¸YÃ½Â¿Ã…FÂÃ¦Â¿Â´Ã¿Æ’Ã½Â¯Ã°>Ã¨8&â‚¬â€ºÃžÃ¿!CLÃ Â¦Ã¿Hâ‚¬Â¯ÃµÂ(â€\0'Ã‡Â2Ã»Ã¬d\r%â€š;Ã kÃ¦Å Â4Ã»Ã€_OÃ>Ã¾5Â³Ã¶Ã @DÃ½Ã’Â¼ÃÃž\0VÃƒAâ‚¬6' AYÂ¬Â¢Â¶Ã½ÂSÂ°Â¿â€šÂ£Â£rÃ”Â¾Â´4Å¡+h@bÃ¿Ã£ÃµÂ­Â¾Â´Ã¾â€šOÃ¡â€M\0Ã€Ã¥ËœÃ€rÃŒâ€ºÃº@Ã¿\rJÃ¹Ã“m0\08Ã¹OÃ²â‚¬Ã¬Ã¿;kÂÃ“ ÃŠÃ«Ã¾A(6Â£|	`8 ÃŸ\0Ë†Â°&Â¿Â²EÃVÃÃ¥\0VÃ¾Ã£Ã±ÃÃ¯â‚¬wkâ€¦NÃ€Â°KÃ¹Ãâ€”Â¡xdpÃ€Ã’Ã¿sÃ¬ALÂ§Ã¢Â«AÂ¾XÃ«kÂÃ¿â€˜u\0Å’Ã¯Ã¾â€žÃt Ã€Ã”Â¢Ã².â€°>(Nâ€™Ã…K'flÃ¯Â¢ÂªdÃºAÅ â€šÃ¢?++ÂÃ°Nâ€œÅ’~â€š Ã¿Â²ËœÃºkÃ¦â‚¬Â¾Â²â‚¬ÂªPR\0Ã¨ÃºxÂÂ¡Ã˜Ã£Ã»Ã¨ÃŠâ€˜Ã´â€â€¹BK]Â¦bUÃƒÃ‘\\ÃŒâ€ºÂ¸â‚¬â€žd\0S@Â¿Ã¤Â«QÃ€Ã¯Ãâ€°Å¡bâ„¢\0\0bâ€žâ€žÃ–\0_\\Â¡@\nNâ€”Ã® Ã¤OÃŽAÂ
â€žPfÃÂâ€žâ‚¬ Å’Â¶Ã´Ã”ÂAj Â¨Ã‚M4<Â¤9â€œÂ°Ãš+Ã§ÂÃ€Â¿Â¨Å¸`Sâ€°â€¹ Ã¬Ã¼â€Ãˆw3TÃ° Â¬â€ž7Ã¢XÂ»Ã‚â€ T!\0eÃ¯PAIÃˆb 1!\0â‚¬Å¾4Â³Ã¥Ã 'Â¹ @ ! 8\0â€™Ã‹/Ã¯Ë† Âº!:Kâ€¢,
Ã˜CASÃ°Xâ€˜fÂ®eÂ©ÃŽMÃ¹Ã½.:ËœÂ¼:Ã²Ã†tÅ¸Â»Â¡Ã ÃƒÃŒ._Âºdâ€žÃ¿â€¹Â°81v`ÂB\"Ã¤â€šÃ…!.^Ãš*Ã¥Ã¡N.^â€¡Å¡\nâ€ž&\r(Å¸Å¡.ÃÂ©Â§Ã®
O0Å Â«@Ã·Ã™PÅ Â¹njÃ’Ã Å½Ãšâ€”#Â¡Â¼Ã®Ã¤Ã“Ã¥&Â¹â€šrHÃ˜<Â¨â€   Â¢!Ã â€™3Â¶Ãœ(i @ÃœAaÃÃ… {Ãµ Ã‚Â¬#Ã‰SÂ©Â½â€ 6 Ã°Â¨ËœÂ¶F@Â©ÂÃ”Â¦Ã£Y[OÅ“ Æ’(Â .â€¡Â¬/â€žBÃ¼Ã‹Ã±Ã‡Ã³ )
L02BÃ˜Ë†ÃŒ-ÃÃ†â‚¬Ã˜Ã¹qpÂ¹â€¹J<Â¤.Ãâ€˜\0\nÃ§ Ã¯\0ÃÃ”/@8CÂ¤4PÃ€Ã‡\r	PÃ‚â€¢Â°)Ã¼Ã°FÂÃ¢Ã¥\$q.]Â¬\"B#â€¹Ã…	Å“#\\Â£Ã‚84\$Ãƒs:.(*Oi>â„¢|#T'`â€”BuÂ«a/Ë†â‚¬Ã£CÃ€Ã‚TÃ˜KaÃªX8ÃŽ`p Â¸ÃšÃ•Ã\0`ÃŠ\0");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0Å“ÂFÂ£Â©ÃŒÃ==ËœÃŽFS	ÃÃŠ_6MÃ†Â³ËœÃ¨Ã¨r:â„¢Eâ€¡CIÂ´ÃŠo:Â Câ€žâ€Xcâ€šÂ\rÃ¦Ã˜â€žJ(:=Å¸Eâ€ ÂÂ¦a28Â¡xÃ°Â¸?Ã„'Æ’iÂ°SANNâ€˜Ã¹Ã°xsâ€¦N BÃ¡ÃŒVl0â€ºÅ’Ã§S	Å“Ã‹UlÂ(D|Ã’â€žÃ§ÃŠPÂ¦Ã€>Å¡Eâ€ Ã£Â©Â¶yH
chÃ¤Ã‚-3Ebâ€œÃ¥ Â¸bÂ½ÃŸpEÃpÃ¿9.Å ÂËœÃŒ~\nÅ½?KbÂ±iw|Ãˆ`Ã‡Ã·d.Â¼x8ENÂ¦Ã£!â€Ã2â„¢â€¡3Â©Ë†Ã¡\râ€¡ÂÃ‘YÅ½ÃŒÃ¨y6GFmYÅ½8o7\n\rÂ³0Â¤Ã·\0ÂDbcÃ“!Â¾Q7ÃÂ¨d8â€¹ÃÃ¬~â€˜Â¬N)Ã¹EÃÂ³`Ã´NsÃŸÃ°`Ã†S)ÃOÃ©â€”
Â·Ã§/Âº<ÂxÃ†9Å½oÂ»Ã”Ã¥ÂµÃÃ¬3 nÂ«Â®2Â»!rÂ¼:;Ã£+Ã‚9Ë†CÃˆÂ¨Â®â€°Ãƒ\n<Ã±Â`ÃˆÃ³Â¯bÃ¨\\Å¡?Â`â€ 4\r#`Ãˆ<Â¯BeÃ£B#Â¤N ÃœÃ£\r.D`Â¬Â«jÃª4Ã¿Å½Å½pÃ©arÂ°Ã¸
Ã£Â¢ÂºÃ·>Ã²8Ã“\$Ã‰c Â¾1Ã‰cÅ“ Â¡c ÃªÃÃª{n7Ã€Ãƒ Â¡Æ’AÃ°NÃŠRLi\r1Ã€Â¾Ã¸!Â£(Ã¦
jÃ‚Â´Â®+Ã‚Ãª62Ã€XÃŠ8+ÃŠÃ¢Ã Ã¤.\rÃÃŽÃ´Æ’ÃŽ!xÂ¼Ã¥Æ’hÃ¹'Ã£Ã¢Ë†6SÃ°\0RÃ¯Ã”Ã´Ã±OÃ’\nÂ¼â€¦1(W0â€¦Ã£Å“Ã‡7 qÅ“Ã«:NÃƒE:68n+Å½Ã¤Ã•Â´5_(Â®s \rÃ£â€Ãªâ€°/mÂ6PÃ”@ÃƒEQÂÃ Ã„9\nÂ¨V-â€¹ÃÃ³\"Â¦.:Ã¥JÂÃ8weÃŽqÂ½|Ã˜â€¡Â³XÃ]ÂµÃY XÃeÃ¥zWÃ¢Ã¼ Å½7Ã¢Ã»Z1ÂÃ­hQfÃ™Ã£uÂ£jÃ‘4Z{p\\AUÃ‹J<Ãµâ€ kÃ¡Ã@Â¼Ã‰ÂÃƒÃ @â€ž}&â€žÂË†L7UÂ°wuYhÂÃ”2Â¸Ãˆ@Ã»u  PÃ 7Ã‹Aâ€ hÃ¨ÃŒÃ²Â°Ãž3Ãƒâ€ºÃªÃ§XEÃâ€¦ZË†]Â­lÃ¡@Mp lvÃ‚)Ã¦ Ã ÃHWâ€˜â€˜Ã”y>ÂYÂ-Ã¸YÅ¸Ã¨/Â«Ââ€ºÂªÃÃ® hC [*â€¹Ã»FÃ£Â­#~â€ !Ã`Ã´\r#0PÃ¯CÃ‹Ââ€”f Â·Â¶
Â¡Ã®Ãƒ\\Ã®â€ºÂ¶â€¡Ã‰Â^Ãƒ%B<Â\\Â½fË†ÃžÂ±Ã…Ã¡ÃÃÃ£&/Â¦Oâ€šÃ°L\\jFÂÂ¨jZÂ£1Â«\\:Ã†Â´>ÂNÂ¹Â¯XaFÃƒAÃ€Â³Â²Ã°ÃƒÃ˜Ãfâ€¦h{\"s\nÃ—64â€¡ÃœÃ¸Ã’â€¦Â¼?Ã„8Ãœ^pÂ\"Ã«ÂÂ°Ã±ÃˆÂ¸\\Ãše(Â¸PÆ’NÂµÃ¬q[gÂ¸ÃrÃ¿&Ã‚}PhÃŠÃ Â¡Ã€WÃ™Ã­*ÃžÃ­r_sÃ‹Pâ€¡hÃ Â¼Ã Ã\nÃ›Ã‹ÃƒomÃµÂ¿Â¥ÃƒÃªâ€”Ã“#ÂÂ§Â¡.Ã\0@Ã©pdW Â²\$Ã’ÂºÂ°QÃ›Â½Tl0â€  Â¾ÃƒHdHÃ«)Å¡â€¡Ã›ÂÃ™Ã€)PÃ“ÃœÃ˜HÂgÃ Ã½ UÃ¾â€žÂÂªBÃ¨e\râ€ t:â€¡Ã•\0)\"Ã…tÃ´,Â´Å“â€™Ã›Ã‡[Â(DÃ¸O\nR8!â€ Ã†Â¬Ã–Å¡Ã°ÃœlAÃ¼Vâ€¦Â¨4 hÃ Â£Sq<Å¾Ã @}ÃƒÃ«ÃŠgKÂ±]Â®Ã Ã¨]Ã¢=90Â°Â'â‚¬Ã¥Ã¢Ã¸wA<â€šÆ’ÃÃ‘aÃ~â‚¬Ã²WÅ¡Ã¦Æ’D|AÂ´â€ â€ 2Ã“XÃ™U2Ã Ã©y Ã…Å ÂÅ =Â¡p)Â«\0P	Ëœsâ‚¬Âµnâ€¦3Ã®Ârâ€žf\0Â¢Fâ€¦Â·ÂºvÃ’ÃŒGÂ®ÃI@Ã©%Â¤â€Å¸+Ã€Ã¶_I`Â¶ÃŒÃ´Ã…\r.Æ’ NÂ²ÂºÃ‹KIâ€¦[â€ÃŠâ€“SJÃ²Â©Â¾aUfâ€ºSzÃ»Æ’Â«MÂ§Ã´â€ž
%Â¬Â·\"Q|9â‚¬Â¨BcÂ§aÃq\0Â©8Å¸#Ã’<aâ€žÂ³:z1UfÂªÂ·>Ã®ZÂ¹lâ€°â€°Â¹ÂÃ“Ã€e5#U@iUGÃ‚â€šâ„¢Â©nÂ¨%Ã’Â°sÂ¦â€žÃ‹;gxL Â´pPÅ¡?BÃ§Å’ÃŠQÂ\\â€”bâ€žÃ¿Ã©Â¾â€™Qâ€ž=7Â:Â¸Â¯ÃÂ¡QÂº\r:Æ’tÃ¬Â¥:y(Ã… Ã—\nÃ›d)Â¹ ÃÃ’\nÃX; â€¹Ã¬Å½ÃªCaAÂ¬\rÃ¡ÃÃ±Å¸PÂ¨GHÃ¹!Â¡ Â¢@Ãˆ9\n\nAl~H ÃºÂªV\nsÂªÃ‰Ã•Â«ÂÃ†Â¯Ã•bBrÂ£ÂªÃ¶â€žâ€™Â­Â²ÃŸÃ»3Æ’\rÅ¾PÂ¿%
Â¢Ã‘â€ž\r}b/â€°ÃŽâ€˜\$â€œ5Â§PÃ«CÃ¤\"wÃŒB_Ã§Å½Ã‰UÃ•gAtÃ«Â¤Ã´â€¦Ã¥Â¤â€¦Ã©^QÃ„Ã¥UÃ‰Ã„Ã–jâ„¢ÃÃ­ BvhÃ¬Â¡â€ž4â€¡)Â¹Ã£+Âª)<â€“j^Â<LÃ³Ã 4U* ÃµÂBg Ã«ÃÃ¦Ã¨*nÂÃŠâ€“Ã¨-Ã¿ÃœÃµÃ“	9
O\$Â´â€°Ã˜Â·zyMâ„¢3â€ž\\9ÃœÃ¨Ëœ.oÅ Â¶Å¡ÃŒÃ«Â¸E(iÃ¥ Ã Å¾
Å“Ã„Ã“7	tÃŸÅ¡Ã©Â-&Â¢\nj!\rÂÃ€yÅ“yÃ D1gÃ°Ã’Ã¶]Â«ÃœyRÃ”7\"Ã°Ã¦Â§Â·Æ’Ë†~Ã€Ã­Ã Ãœ )TZ0E9MÃ¥YZt
Xe!Ãfâ€ @Ã§{ÃˆÂ¬yl	8â€¡;ÂÂ¦Æ’R{â€žÃ«8â€¡ Ã„Â®ÃeÃ˜+ULÃ±'â€šFÂ²1Ã½Ã¸Ã¦8PE5-	Ã_!Ã”7â€¦Ã³ [2â€°JÃ‹Ã;â€¡HRÂ²Ã©Ã‡Â¹â‚¬8pÃ§â€”Â²Ãâ€¡@â„¢Â£0,Ã•Â®psK0\rÂ¿4â€Â¢\$sJÂ¾ÂÃƒ4Ã‰DZÂ©Ã•IÂ¢â„¢'\$cLâ€RÂâ€“MpY&Ã¼Â½ÂÃiÃ§z3GÃzÃ’Å¡J%ÃÃŒPÃœ-â€žÂ[Ã‰/xÃ§Â³TÂ¾{pÂ¶Â§zâ€¹CÃ–vÂµÂ¥Ã“:Æ’V'Â\\â€“â€™KJaÂ¨ÃƒMÆ’&ÂºÂ°Â£Ã“Â¾\"Ã Â²eÂo^Q+h^Ã¢ÃiTÂÃ°1ÂªORÃ¤lÂ«,5[ÃËœ\$Â¹Â·)Â¬Ã´jLÃ†ÂU`Â£SÃ‹`Z^Ã°|â‚¬â€¡rÂ½=ÃÃ·nÃ§â„¢Â»â€“ËœTU	1Hykâ€ºÃ‡t+\0vÃ¡DÂ¿\r	<Å“Ã Ã†â„¢Ã¬Ã±j Gâ€Å¾Â­tÃ†*3%kâ€ºY
ÃœÂ²T*Ã|\"CÅ Ã¼l  hEÂ§(Ãˆ\rÃƒ8râ€¡Ã—{ÃœÃ±0Ã¥Â²Ã—Ã¾Ã™DÃœ_Å’â€¡.6ÃÂ¸Ã¨;Ã£Ã¼â€¡â€žrBjÆ’O'Ã›Å“Â¥Â¥Ã>\$Â¤Ã”`^6â„¢ÃŒ9â€˜#Â¸Â¨Â§Ã¦4XÃ¾Â¥mh8:ÃªÃ»câ€¹Ã¾0Ã¸Ã—;Ã˜/Ã”â€°Â·Â¿Â¹Ã˜;Ã¤\\'( Ã®â€žtÃº'+
Ââ„¢Ã²Ã½Â¯ÃŒÂ·Â°^
Â]Â­Â±NÃ‘vÂ¹Ã§#Ã‡,Ã«vÃ°Ã—ÃƒOÃiÂÃâ€“Â©>Â·Ãž<SÃ¯A\\â‚¬\\Ã®ÂµÃ¼!Ã˜3*tl`Ã·uÂ\0p'Ã¨7â€¦PÃ 9Â·bsÅ“{Ã€vÂ®{Â·Ã¼7Ë†\"{Ã›Ã†rÃ®aÃ–(Â¿^Ã¦Â¼ÃEÃ·ÃºÃ¿Ã«Â¹gÃ’Ãœ/Â¡Ã¸Å¾UÃ„9gÂ¶Ã®Ã·/ÃˆÃ”`Ã„\nL\nÂ) Ã€â€ â€š(AÃºaÃ°\" Å¾Ã§Ã˜	Ã&â€žPÃ¸Ã‚@O\nÃ¥Â¸Â«0â€ (M&Â©FJ'Ãš! â€¦0Å <Ã¯HÃ«Ã®Ã‚Ã§Ã†Ã¹Â¥*ÃŒ|Ã¬Ã†*Ã§OZÃ­m*n/bÃ®/ÂÃ¶Â®ÂÃ”Ë†Â¹.Ã¬Ã¢Â©o\0ÃŽÃŠdnÃŽ)ÂÃ¹ÂÅ½iÂ:RÅ½ÃŽÃ«P2ÃªmÂµ\0/vÃ¬OXÃ·Ã°Ã¸FÃŠÂ³ÃË†Ã®Å’Ã¨Â®\"Ã±Â®ÃªÃ¶Ã®Â¸Ã·0Ãµ0Ã¶â€šÂ¬Â©Ã­0bÃ‹ÃgjÃ°Ã°\$Ã±nÃ©0}Â°	Ã®@Ã¸
=MÃ†â€š
0nÃ®PÅ¸/pÃ¦otÃ¬â‚¬Ã·Â°Â¨Ã°.ÃŒÃŒÂ½
Âg\0Ã) oâ€”\n0ÃˆÃ·â€°\rFÂ¶Ã©
â‚¬  bÂ¾iÂ¶Ãƒo}\nÂ°ÃŒÂ¯â€¦	NQ
Â°'
Ã°xÃ²FaÃJÃ®ÃŽÃ´ÂLÃµÃ©Ã°ÃÃ Ã†\rÃ€Ã\râ‚¬Ã–Ã¶â€˜0Ã… Ã±'Ã°Â¬Ã‰d
	oepÃÂ°4DÃÃœÃŠÂÂ¦q(~Ã€ÃŒ Ãª\râ€šEÂ°Ã›prÃ¹QVFHÅ“lÂ£â€šKjÂ¦Â¿Ã¤N&Â­j!ÃH`â€š_bh\r1Å½ Âº
n!ÃÃ‰Å½Â­zâ„¢Â°Â¡Ã°Â¥Ã\\Â«Â¬\rÅ  Ã­Å Ãƒ`V_kÃšÃƒ\"\\Ã—â€š'VË†Â«\0ÃŠÂ¾`ACÃºÃ€Â±Ãâ€¦Â¦VÃ†`\r%Â¢â€™Ã‚Ã…Ã¬Â¦\rÃ±Ã¢Æ’â€šk@NÃ€Â°Ã¼ÂBÃ±Ã­Å¡â„¢Â¯ Â·!Ãˆ\nâ€™\0Zâ„¢6Â°\$d Å’,%Ã %laÃ­HÃ—\nâ€¹#Â¢S\$!\$@Â¶Ã2Â±Ââ€žI\$râ‚¬{!Â±Â°Jâ€¡2HÃ ZM\\Ã‰Ã‡hb,â€¡
'||cj~gÃrâ€¦`Â¼Ã„Â¼Âº\$ÂºÃ„Ã‚+ÃªA1Ã°Å“Eâ‚¬Ã‡Ã€Ã™ <ÃŠLÂ¨Ã‘\$Ã¢Y%-FDÂªÅ dâ‚¬LÃ§â€žÂ³ Âª\n@â€™bVfÃ¨Â¾;2_(Ã«Ã´LÃ„ÃÂ¿Ã‚Â²<%@ÃšÅ“ ,\"ÃªdÃ„Ã€Nâ€šerÃ´\0Ã¦Æ’`Ã„Â¤Zâ‚¬Â¾4Ã…'ld9-Ã²#`Ã¤Ã³Ã…â€“â€¦Ã Â¶Ã–Ã£j6Ã«Ã†Â£Ã£v  Â¶Ã NÃ•ÃÂf Ã–@Ãœâ€ â€œ&â€™B\$
Ã¥Â¶(Ã°Z&â€žÃŸÃ³278I Ã Â¿Ã P\rk\\ÂÂ§â€”2`Â¶\rdLb@EÃ¶Æ’2`P( B'Ã£
â‚¬Â¶â‚¬Âº0Â²& Ã´{Ã‚Ââ€¢â€œÂ§:Â®ÂªdBÃ¥1Ã²^Ã˜â€°*\r\0c<KÂ|Ã5sZÂ¾`ÂºÃ€Ã€O3Ãª5=@Ã¥5Ã€C>@Ã‚W*	=\0N<gÂ¿6s67Sm7u?	{<&LÃ‚.3~DÃ„Ãª\rÃ…Å¡Â¯xÂ¹Ã­),rÃ®inÃ…/ Ã¥O\0o{0kÃŽ]3>mâ€¹â€1\0â€I@Ã”9T34+Ã”â„¢@eâ€GFMCÃ‰\rE3Ã‹Etm!Ã›#1ÃD @â€šH(â€˜Ã“n ÃƒÃ†<g,V`R]@ÃºÃ‚Ã‡Ã‰3Cr7s~Ã…GIÃ³i@\0vÃ‚Ã“5\rVÃŸ'Â¬ Â¤ ÃŽÂ£PÃ€Ã”\rÃ¢\$<bÃ%(â€¡DdÆ’â€¹PWÃ„Ã®ÃÃŒbÃ˜fO Ã¦x\0Ã¨} Ãœ
Ã¢â€lb &â€°vj4ÂµLSÂ¼Â¨Ã–Â´Ã”Â¶5&d sF MÃ³4ÃŒÃ“\".HÃ‹M0Ã³1uLÂ³\"Ã‚Ã‚/J`Ã²{Ã‡Ã¾Â§â‚¬ÃŠxÃ‡ÂYu*\"U.I53QÂ­3QÃ´Â»Jâ€žâ€g â€™5â€¦sÃ ÃºÅ½&jÃ‘Å’â€™Ã•uâ€šÃ™Â­ÃÂªGQ
MTmGBÆ’t
l-cÃ¹*Â±Ã¾\rÅ Â«Z7Ã”ÃµÃ³*hs/RUVÂ·Ã°Ã´ÂªBÅ¸NÃ‹Ë†Â¸ÃƒÃ³Ã£ÃªÃ”Å Ã iÂ¨LkÃ·.Â©Â´Ã„tÃ¬ Ã©Â¾Â©â€¦rYiâ€Ã•Ã©-SÂµÆ’3Ã\\Å¡TÃ«OM^Â­G>â€˜ZQjÃ” â€¡â„¢\"Â¤Å½Â¬iâ€Ã–MsSÃ£S\$Ib	fÂ²Ã¢Ã‘uÃ¦Â¦Â´â„¢Ã¥:ÃªSB|iÂ¢ YÃ‚Â¦Æ’Ã 8	v ÃŠ#Ã©â€DÂª4`â€¡â€ .â‚¬Ã‹^Ã³HÃ…Mâ€°_Ã•Â¼Å uÃ€â„¢UÃŠz`ZÂJ	eÃ§ÂºÃ@CeÃ­Ã«aâ€°\"mÃ³bâ€ž6Ã”Â¯JRÃ‚Ã–â€˜TÂ?Ã”Â£XMZÃœÃÃâ€ ÃÃ²pÃ¨Ã’Â¶ÂªQvÂ¯jÃ¿jVÂ¶{Â¶Â¼Ã…CÅ“\rÂµÃ•7â€°TÃŠÅ¾Âª ÃºÃ­5{PÃ¶Â¿]â€™\rÃ“?QÃ AAÃ€Ã¨ Å½â€¹â€™Ã2Ã±Â¾ â€œV)JiÂ£Ãœ-N99fâ€“l JmÃÃ²;uÂ¨@â€š<FÃ¾Ã‘ Â¾eâ€ jâ‚¬Ã’Ã„Â¦ÂIâ€°<+CW@Ã°ÂÃ§Ã€Â¿Zâ€˜lÃ‘1Ã‰<2Ã…iFÃ½7`KGËœ~L&+NÂÃ YtWHÃ©Â£â€˜w	Ã–â€¢Æ’Ã²lâ‚¬Ã’s'gÃ‰Ã£q+LÃ©zbizÂ«Ã†ÃŠÃ…Â¢Ã.ÃÅ Ã‡zWÂ²Ã‡ Ã¹zdâ€¢WÂ¦Ã›Ã·Â¹(Ây)vÃE4,\0Ã”\"dÂ¢Â¤\$BÃ£{Â²Å½!)1Uâ€ 5bp#Ã…}m=Ã—Ãˆ@Ë†wÃ„	P\0Ã¤\rÃ¬Â¢Â·â€˜â‚¬`O|Ã«Ã†Ã¶	Å“Ã‰ÂÃ¼Ã…ÃµÃ»YÃ´Ã¦JÃ•â€šÃ¶EÃ—Ã™OuÅ¾_Â§\n`F`Ãˆ }MÃ‚.#1Ã¡â€šÂ¬fÃ¬*Â´Ã•Â¡ÂµÂ§  Â¿zÃ ucÃ»â‚¬â€”Â³ xfÃ“8kZRÂ¯s2ÃŠâ€š-â€ â€™Â§Z2Â­+Å½ÃŠÂ·Â¯(Ã¥sU ÃµcDÃ²Ã‘Â·ÃŠ
Ã¬ËœÃX!Ã ÃuÃ¸&-vPÃÃ˜Â±\0'LÃ¯Å’X Ã¸LÃƒÂ¹Å’Ë†o	
Ã
Ã´>Â¸Ã•Å½Ã“\r@Ã™PÃµ\rxFÃ—Ã¼Eâ‚¬ÃŒÃˆÂ­Ã¯%Ã€
Ã£Ã¬Â®Ã¼=5NÃ–Å“Æ’Â¸?â€ž7Ã¹NÃ‹Ãƒâ€¦Â©wÅ `Ã˜hXÂ«98 ÃŒÂÂÃ¸Â¯qÂ¬Â£zÃ£Ãd%6ÃŒâ€štÃ/â€¦â€¢ËœÃ¤Â¬Ã«ÂLÃºÃlÂ¾ÃŠ,ÃœKaâ€¢N~ÃÃ€Ã›Ã¬Ãº,Ã¿'Ã­Ã‡â‚¬M\rf9Â£wÂËœ!xÂÃ·x[Ë†Ãâ€˜Ã˜Gâ€™8;â€žxAËœÃ¹-IÃŒ&5\$â€“D\$Ã¶Â¼Â³%â€¦Ã˜xÃ‘Â¬Ãâ€ÃˆÃ‚Â´Ã€Ã‚Å’]â€ºÂ¤Ãµâ€¡&oâ€°-3Â9Ã–LÃ¹Â½zÂÃ¼Â§y6Â¹;uÂ¹zZ Ã¨Ã‘8Ã¿_â€¢Ã‰Âx\0D?Å¡X7â€ â„¢Â«â€™yÂ±OY.#3Å¸8 â„¢Ã‡â‚¬Ëœeâ€QÂ¨=Ã˜â‚¬*Ëœâ„¢GÅ’wm Â³Ãšâ€žYâ€˜Ã¹
 Ã€Ãš]YOYÂ¨FÂ¨Ã­Å¡Ã™)â€žz#\$eÅ Å¡)â€ /Å’z?Â£z;â„¢â€”Ã™Â¬^Ã›ÃºFÃ’ZgÂ¤Ã¹â€¢ ÃŒÃ·Â¥â„¢Â§Æ’Å¡`^ÃšeÂ¡Â­Â¦Âº#Â§ â€œÃ˜Ã±â€Â©Å½Ãº?Å“Â¸eÂ£â‚¬MÂ£Ãš3uÃŒÃ¥ÂÆ’0Â¹>ÃŠ\"?Å¸Ã¶@Ã—â€”Xvâ€¢\"Ã§â€Å’Â¹Â¬Â¦*Ã”Â¢\r6v~â€¡ÃƒOV~Â&Ã—Â¨Â^gÃ¼ Å¡Ã„â€˜Ã™Å¾â€¡'ÃŽâ‚¬f6:-Z~Â¹Å¡O6;zxÂÂ²;&!Ã›+{9MÂ³Ã™Â³dÂ¬ \r,9Ã–Ã­Â°Ã¤Â·WÃ‚Ã†ÃÂ­:Ãª\rÃºÃ™Å“Ã¹Ã£Â@Ã§Ââ€š+Â¢Â·]Å“ÃŒ-Å¾[gÅ¾â„¢Ã›â€¡[sÂ¶[iÅ¾Ã™iÃˆqâ€ºâ€ºyâ€ºÃ©xÃ©+â€œ|7Ã{7Ã‹|wÂ³}â€žÂ¢â€ºÂ£Eâ€“Ã»WÂ°â‚¬WkÂ¸|JÃ˜ÂÂ¶Ã¥â€°xmË†Â¸q xwyjÅ¸Â»Ëœ#Â³ËœeÂ¼Ã¸(Â²Â©â€°Â¸ÂÂÃ€ÃŸÅ¾ÃƒÂ¾â„¢â€ Ã²Â³ {Ã¨ÃŸÃšÂ yâ€œ Â»MÂ»Â¸Â´@Â«Ã¦Ã‰â€šâ€œÂ°YÂ(gÃÅ¡-Ã¿Â©ÂºÂ©Ã¤Ã­Â¡Å¡Â¡Ã˜J(Â¥Ã¼Â@Ã³â€¦
;â€¦yÃ‚#SÂ¼â€¡ÂµYâ€žÃˆp@Ã%Ã¨sÅ¾ÃºoÅ¸9;Â°ÃªÂ¿Ã´ÃµÂ¤Â¹+Â¯Ãš	Â¥;Â«ÃÃºË†ZNÃ™Â¯Ã‚ÂºÂ§â€žÅ¡ kÂ¼VÂ§Â·uâ€°[Ã±Â¼xÂâ€¦|qâ€™Â¤ON?â‚¬Ã‰Ã•	â€¦`uÅ“ Â¡6Â|Â­|X
Â¹Â¤Â­â€”Ã˜Â³|OÃ¬x!Ã«:Â Â¨Å“Ãâ€”Y]â€“Â¬Â¹Å½â„¢câ€¢Â¬Ã€\rÂ¹hÃ9nÃŽÃÂ¬Â¬Ã«Ââ‚¬Ã8'â€”Ã¹â€šÃªÃ  Ã†\r S.1Â¿Â¢USÃˆÂ¸â€¦Â¼Xâ€°Ã‰+Ã‹Ã‰z]Ã‰Âµ ÃŠÂ¤?Å“Â©ÃŠÃ€CÃ‹\rÃ—Ã‹\\
ÂºÂ­Â¹Ã¸\$Ã`Ã¹ÃŒ)UÃŒ|Ã‹Â¤|Ã‘Â¨x'Ã•Å“Ã˜ÃŒÃ¤ÃŠ<Ã ÃŒâ„¢eÃŽ|ÃªÃÂ³Ã§â€”Ã¢â€™ÃŒÃ©â€”LÃ¯ÃÃMÃŽyâ‚¬(Ã›Â§ÃlÂÃÂºÂ¤O]{Ã‘Â¾Ã—FDÂ®Ã•Ã™}Â¡yuâ€¹Ã‘Ã„â€™ÃŸ,XL\\Ã†xÃ†Ãˆ;UÃ—Ã‰Wtâ‚¬vÅ¸Ã„\\OxWJ9Ãˆâ€™Ã—R5Â·WiMi[â€¡KË† â‚¬f(\0Ã¦Â¾dÃ„Å¡Ã’Ã¨Â¿Â©Â´\rÃ¬MÃ„Ã¡ÃˆÃ™7Â¿;ÃˆÃƒÃ†Ã³Ã’Ã±Ã§Ã“6â€°KÃŠÂ¦IÂª\rÃ„ÃœÃƒxv\rÂ²V3Ã•Ã›ÃŸÃ‰Â±.ÃŒÃ RÃ¹Ã‚Ã¾Ã‰ÂÃ¡|Å¸Ã¡Â¾^2â€°^0ÃŸÂ¾\$ QÃÃ¤[Ã£Â¿DÃ·Ã¡ÃœÂ£Ã¥>1'^X
~tÂ1\"6LÂÃ¾â€º+Ã¾Â¾AÃ Å¾eÃ¡â€œÃ¦ÃžÃ¥Iâ€˜Ã§~Å¸Ã¥Ã¢Â³Ã¢Â³@ÃŸÃ•Â­ÃµpM>Ã“m<Â´Ã’SKÃŠÃ§-HÃ‰Ã€Â¼T76Ã™SMfgÂ¨=Â»Ã…GPÃŠÂ°â€ºPÃ–\rÂ¸Ã©>ÃÃ¶Â¾Â¡Â¥2Sb\$â€¢C[Ã˜Ã—Ã¯(Ã„)Å¾Ãž%Q#G`uÃ°Â°Ã‡Gwp\rkÃžKeâ€”zhjÃ“â€œzi(Ã´Ã¨rOÂ«Ã³Ã„ÃžÃ“Ã¾Ã˜T=Â·7Â³Ã²Ã®~Ã¿4\"efâ€º~
Ã­dâ„¢Ã´Ã­VÃ¿Zâ€°Å¡Ã·Uâ€¢-Ã«b'VÂµJÂ¹Z7Ã›Ã¶Ã‚)Tâ€˜Â£8.<Â¿RMÃ¿\$â€°Å¾Ã´Ã›Ã˜'ÃŸbyÃ¯\n5Ã¸Æ’ÃÃµ_Å½Ã wÃ±ÃŽÂ°Ã­UÃ°â€™`eiÃžÂ¿Jâ€bÂ©gÃ°uÂSÃÃ«?ÃÃ¥`Ã¶Ã¡Å¾Ã¬+Â¾ÃÃ¯ MÃ¯gÃ¨7`Ã¹Ã¯Ã­\0Â¢_Ã”-Ã»Å¸Ãµ_Ã·â€“?ÃµFÂ°\0â€œÃµÂÂ¸Xâ€šÃ¥Â´â€™[Â²Â¯JÅ“8&~D#ÃÃ¶{Pâ€¢Ã˜Ã´4Ãœâ€”Â½Ã¹\"â€º\0ÃŒÃ€â‚¬â€¹Ã½Â§ÂÃ½@Ã’â€œâ€“Â¥\0F ?*Â ^Ã±Ã¯ÂÂ¹Ã¥Â¯wÃ«ÃÅ¾:Ã°ÂÂ¾uÃ Ã3xKÃ^Ã³wâ€œÂ¼Â¨ÃŸÂ¯â€°y[Ã”Å¾(Å¾Ã¦â€“Âµ#Â¦/zr_â€gÂ·Ã¦?Â¾\0?â‚¬1wMR &MÂ¿â€ Ã¹?Â¬Stâ‚¬T]ÃÂ´GÃµ:IÂ·Ã Â¢Ã·Ë†)â€¡Â©BÃ¯Ë†â€¹
 vÃ´Â§â€™Â½1Ã§<Ã´tÃˆÃ¢6Â½:ÂW{Ã€Å Ã´x:=ÃˆÃ®â€˜Æ’Å’ÃžÅ¡Ã³Ã¸:Ã‚!!\0xâ€ºÃ•ËœÂ£Ã·q&Ã¡Ã¨0}z\"]Ã„Ãžoâ€¢zÂ¥â„¢Ã’jÃƒwÃ—ÃŸÃŠÃšÃ6Â¸Ã’JÂ¢PÃ›Å¾[\\ }Ã»Âª`Sâ„¢\0Ã Â¤qHMÃ«/7Bâ€™â‚¬PÂ°Ã‚Ã„]FTÃ£â€¢8S5Â±
/IÃ‘\rÅ’\n ÂÃ®OÂ¯0aQ\n >Ãƒ2Â­jâ€¦;=ÃšÂ¬Ã›dA=Â­pÂ£VL)XÃµ\nÃ‚Â¦`e\$ËœTÃ†Â¦QJÂÃŽkÂ´7Âª*OÃ«Â .â€°Ë†â€¦Ã²Ã„Â¡Â\rÃ¶ÂµÅ¡\$#pÃWT>!ÂªÂªv|Â¿Â¢}Ã«Ã— .%ËœÃ,;Â¨Ãªâ€ºÃ¥â€¦Â­Ãš
f*?Â«Ã§â€žËœÃ¯Ã´â€ž\0Â¸Ã„pDâ€ºÂ¸! Â¶Ãµ#:MRcÃºÃ¨B/06Â©Â­Â®	7@
\0VÂ¹vgâ‚¬ Ã˜Ã„hZ\nR\"@Â®ÃˆF	â€˜ÃŠÃ¤Â¼+ÃŠÅ¡Â°EÅ¸IÃž\n8&2Ã’bXÃ¾PÃ„Â¬â‚¬ÃÂ¤=h[Â§Â¥Ã¦+Ã•ÃŠâ€°\r:Ã„ÃFÃ»\0:*Ã¥Ãž\r}#ÃºË†!\"Â¤c
;hÃ…Â¦/0Æ’Â·Ãžâ€™Ã²EjÂ®Ã­Ãâ€šÃŽ]Ã±Zâ€™Å½Ë†â€˜â€”\0Ãš@iW_â€“â€Â®hâ€º;Å’VÂÂRbÂ°ÃšP%!Â­Ã¬
b]SBÅ¡Æ’â€™ÃµUl	Ã¥Ã¢Â³Ã©rË†Ãœ\rÃ€-\0 Ã€\"ÂQ=Ã€IhÃ’Ãâ‚¬Â´	 Fâ€˜Ã¹Ã¾LÃ¨ÃŽFxRâ€šÃ‘Â@Å“\0*Ã†j5ÂÅ’Ã¼k\0Ã0'Â	@Elâ‚¬OËœÃšÃ†H CxÃœ@\"G41Ã„`ÃÂ¼P(G91Â«Å½\0â€žÃ°\"f:QÃŠÂÂ¸
@Â¨`'Â>7Ã‘ÃˆÅ½Ã¤dÃ€Â¨Ë†Ã­Ã‡R41Ã§>ÃŒrIÂHÃµGt\nâ‚¬RÂH	Ã€Ã„bÃ’Ââ‚¬Â¶71Â»ÂÃ¬fÃ£h)DÂªâ€ž8 B`Ã€â€ Â°(ÂV<QÂ§8c? 2â‚¬Â´â‚¬EÅ½4j\0Å“9 ÂÂ¼\râ€šÃÂÃ¿@â€¹\0'FÃºDÅ¡Â¢,Ã…!Ã“Ã¿HÂ=Ã’* Ë†EÃ­(Ã—Ã†Ã†?Ã‘Âª&xd_HÃ·Ã‡Â¢EÂ²6Ã„~Â£uÃˆÃŸG\0RÂXÃ½Ã€Z~P'U=Ã‡ÃŸ @Å¾Ã¨ÃÃˆl+AÂ­\nâ€žhÂ£IiÃ†â€Ã¼Â±Å¸PGâ‚¬Z`\$ÃˆPâ€¡Ã¾â€˜Ã€Â¤Ã™.Ãž;Ã€EÃ€\0â€š}â‚¬ Â§Â¸QÂ±Â¤â€œÃ¤Ã“%Ã¨Ã‘Ã‰jAâ€™Wâ€™Ã˜Â¥\$Â»!Ã½Ã‰3r1â€˜ {Ã“â€°%i=IfKâ€!Å’e\$Ã Å¾Ã©8ÃŠ0!Ã¼h#\\Â¹HF|Å’i8Âtl\$Æ’Ã°ÃŠlÃ€ÂÂÃ¬lÃ¤i*(Ã¯GÂ¸Ã±Ã§L	  ÃŸ\$â‚¬â€”xÃ˜.Ã¨q\"ÂWzs{8d`&Ã°WÃ´Â©\0&EÂ´Â¯ÃÃ¬15ÂjWÃ¤bÂ¬Ã¶Ã„â€¡ÃŠÃžVÂ©Râ€žÂ³â„¢Â¿-#{\0Å XiÂ¤Â²Ã„g*Ã·Å¡7Ã’VF3â€¹`Ã¥Â¦ÂÂ©p@ÃµÃ…#7Â°	Ã¥â€ 0â‚¬Ã¦[Ã’Â®â€“Â¬Â¸[Ã¸ÃƒÂ©hÃ‹â€“\\Ã¡o{ÃˆÃ¡ÃžTÂ­ÃŠÃ’]Â²Ã¯â€”Å’Â¼Ã…Â¦Ã¡â€˜â‚¬8l`f@â€”rehÂ·Â¥\nÃŠÃžW2Ã…*@\0â‚¬`K(Â©Lâ€¢ÃŒÂ·\0vTÆ’Ã‹\0Ã¥c'LÂ¯Å ÂÃ€:â€žâ€ 0ËœÂ¼@L1Ã—T0bÂ¢Ã hÃ¾WÃŒ|\\Ã‰-Ã¨Ã¯ÃDNâ€¡Ã³Å¾â‚¬\ns3Ã€Ãš\"Â°â‚¬Â¥Â°`Ã‡Â¢Ã¹Ã¨â€šâ€™Â2ÂªÃ¥â‚¬&Â¾Ë†\rÅ“U+â„¢^ÃŒÃ¨Râ€°eSâ€¹nâ€ºi0Ã™uÃ‹Å¡b	JËœâ€™â‚¬Â¹2sÂ¹ÃpÆ’s^n<Â¸Â¥Ã²Ã¢â„¢Â±ÂFlÂ°aÃ˜\0Â¸Å¡Â´\0â€™mA2â€º`|Ã˜Å¸6	â€¡Â¦nrÃâ€ºÂ¨\0DÃ™Â¼ÃÃ¬7Ã‹&mÃœÃŸÂ§-)Â¸ÃŠÃš\\Â©Ã†Ã¤ÃÅ’\n=Ã¢Â¤â€“Ã ;* â€šÃžbÂâ€žÃ¨â€œË†Ã„T
â€œâ€šy7cÃºÂ|o /â€“Ã”ÃŸÃŸ:Ââ€¹Ã®tÂ¡PÂ<Ã™Ã€Y: Å¾KÂ¸&C
Â´Ã¬'G/Ã…@ÃŽÃ Q *â€º8
Ã§vâ€™/â€¡Ã€&Â¼Ã¼Ã²WÃ­6p.\0Âªu3Â«Å¾Å’Ã±Bq:(eOP Ã¡p	â€Ã©Â§Â²Ã¼Ã™Ã£\rÅ“â€¹Ã¡0Å¾(ac>ÂºNÃ¶|Â£Âº	â€œt Â¹Ã“\n6vÃ€_â€žÃ®eÃ;yÃ•ÃŽÃ¨6fÂÂÃ¼gQ;yÃºÃŽÂ²[SÃ¸	Ã¤Ã«gÃ¶Ã‡Â°Ã¨Oâ€™udÂ¡dH
â‚¬HÃ°= Z\rÃ¦'ÃšÃŠÃ¹qC*â‚¬) Å¾Å“Ã®gÃ‚Ã‡EÃªOâ€™â‚¬ \" Ã°Â¨!kÃ('â‚¬`Å¸\nkhTÃ¹Ã„*Ã¶sË†Ã„5RÂ¤EÃ¶a\n#Ã–!1Â¡Å“Â¿â€°Ã—\0Â¡;Ã†Ã‡SÃ‚iÃˆÂ¼@(Ã lÂ¦ÃÂ¸IÃ— ÃŒv\rÅ“nj~Ã˜Ã§Å 63ÂÂ¿ÃŽË†Ã´I:hÂ°Ã”Ã‚Æ’\n.â€°Â«2plÃ„9BtÃ¢0\$bÂºâ€ p+â€Ã‡â‚¬*â€¹tJÂ¢Ã°ÃŒÂ¾sâ€ JQ8;4P(Ã½â€ Ã’Â§Ã‘Â¶!â€™â‚¬.Ppk@Â©)6Â¶5Ã½â€!Âµ(Ã¸â€œ\n+Â¦Ã˜{`=Â£Â¸H,Ã‰Â\\Ã‘Â´â‚¬4Æ’\"[Â²CÃ¸Â»Âº1â€œÂ´Å’-ÂÃ¨ÃŒluoÂµÃ¤Â¸4â€¢[â„¢Â±Ã¢â€¦EÃŠ%â€¡\"â€¹Ã´w] Ã™(Ã£ ÃŠÂTeÂ¢Â)ÃªKÂ´Aâ€œE={ \nÂ·`;?ÃÃ´Å“-Ã€GÅ 5IÂ¡Ã­Â­Ã’.%ÃÂ¥Â²Ã¾Ã©q%EÅ¸â€”Ã½sÂ¢Ã©Â©gFË†Â¹s	â€°Â¦Â¸Å¾Å KÂºGÃ‘Ã¸n4i/,Â­i0Â·uÃ¨Âx)73Å’SzgÅ’Ã¢ÂÃV[Â¢Â¯hÃ£Dp'Ã‘L<TMÂ¤Ã¤jP*oÅ“Ã¢â€°Â´â€˜\nHÃŽ ÃšÃ…\n 4Â¨M-WÃ·NÃŠA/Ã®Ââ€ @Â¤8mHÂ¢â€šRpâ‚¬tÅ¾pâ€žVâ€=h*0ÂºÃ	Â¥1;\0uGâ€˜ÃŠT6â€™@sâ„¢\0)Ã´6Ã€â€“Ã†Â£TÂ\\â€¦(\"Å½Ã¨Ã…U,Ã²â€¢C:â€¹Â¥5iÃ‰KÅ¡lÂ«ÂÃ¬â€šÃ›Â§Â¡E*Å’\"ÃªrÂÃ Â¦Ã”ÃŽ.@jRÃ¢Jâ€“QÃ®Å’Ã•/Â¨Â½L@Ã“SZâ€â€˜Â¥PÃµ)(jjÅ¾JÂ¨Â«Â«Å½ÂªÃL*ÂªÂ¯Ã„\0Â§ÂªÃ›\rÂ¢-Ë†Ã±Q*â€žQÃšÅ“gÂªÂ9Ã©~P@â€¦Ã•Ã”HÂ³â€˜Â¬\n-eÂ»\0ÃªQw%^ ETÃ¸< 2HÃ¾@ÃžÂ´Ã®eÂ¥\0Ã° e#;Ã¶Ã–Iâ€šTâ€™lâ€œÂ¤Ã+A+C*â€™YÅ’Â¢Âªh/Ã¸ D\\Ã°Â£!Ã©Â¬Å¡8â€œÃ‚Â»3ÂAÃâ„¢Ã„ÃEÃ°ÃEÂ¦/}0tÂµJ|â„¢Ã€Ã1QmÂ«Ã˜n%(Â¬pÂ´Ã«!\nÃˆÃ‘Ã‚Â±UÃ‹)\rsEXÃºâ€šâ€™5u%B- Â´Ã€w]Â¡*â€¢Â»EÂ¢)<+Â¾Â¦qyVÂ¸@Â°mFH  Ã²Ã”Å¡BN#Ã½]ÃƒYQ1Â¸Ã–:Â¯Ã¬V#Ã¹\$â€œÃ¦ Ã¾ÂÃ´<&Ë†Xâ€žâ‚¬Â¡ÃºÃ¿â€¦xÂ« tÅ¡@]GÃ°Ã­Ã”Â¶ÂÂ¥j)-@â€”qÃË†L\ncÃ·IÂ°Y?qCÂ´\rÃ v(@Ã˜Ã‹X\0OvÂ£<Â¬RÃ¥3XÂ©ÂµÂ¬QÂ¾JÃ¤â€“Ã‰
Ã¼9Ã–9Ãˆlx CuÃ„Â«dÂ±Â± vTÂ²Zkl\rÃ“JÃ­ÂÃ€\\oâ€º&?â€o6EÃq Â°Â³ÂªÃ‰Ã\râ€“ Ã·Â«'3ÃºÃ‹Ã‰ÂªËœJÂ´6Ã«'Y@Ãˆ6Ã‰FZ 50â€¡VÃTÂ²yÅ Â¬ËœC`\0Ã¤ÃVS!Ã½Å¡â€¹&Ã›6â€6Ã‰Ã‘Â³rDÂ§f`Ãªâ€ºÂ¨Jvqzâ€žÂ¬Ã FÂ¿ Ã‚Ã‚Ã²Â´@Ã¨Â¸ÃÂµâ€¦Å¡Ã’â€¦Z.\$kXkJÃš\\Âª\"Ã‹\"Ã Ã–ÂiÂ°ÃªÂ«:Ã“EÃ¿ÂµÃŽ\roXÃ\0>Pâ€“Â¥PÃ°mi]\0ÂªÃ¶Ã¶â€œÂµaVÂ¨Â¸=Â¿ÂªÃˆI6Â¨Â´Â°ÃŽÃ“jK3ÃšÃ²Ã”ZÂµQÂ¦mâ€°EÃ„Ã¨ÂÃ°bÃ“0:Å¸32ÂºV4N6Â³Â´Ã â€˜!Ã·lÃ«^ÃšÂ¦Ã™@hÂµhUÂÃ>:Ãº	ËœÃEâ€º>jÃ¤Ã¨ÃÃºÂ0gÂ´\\|Â¡ShÃ¢7y Ã‚Ãžâ€žÂ\$â€¢â€ ,5aÃ„â€”7&Â¡Ã«Â°:[WX4ÃŠÃ˜qÃ– Ââ€¹Ã¬JÂ¹Ã†Ã¤Ã—â€šÃžc8!Â°HÂ¸Ã Ã˜VDÂ§Ã„Å½Â­+Ã­DÅ :â€˜Â¡Â¥Â°9,DUa!Â±X\$â€˜Ã•ÃÂ¯Ã€Ãšâ€¹GÃÃœÅ’Å BÅ t9-+oÃ›tâ€ÂLÃ·Â£}Ã„Â­ÃµqKâ€¹â€˜x6&Â¯Â¯%xâ€ÃtRÂÂ¿â€“Ã©Ã°\"Ã•Ãâ‚¬Ã¨Râ€šIWA`cÃ·Â°Ãˆ}l6â‚¬Ã‚~Ã„*Â¸0vkÃ½pÂ«ÂÃœ6Ã€Ã«â€º8z+Â¡qÃºXÃ¶Ã¤w*Â·EÆ’ÂªINâ€ºÂ¶ÂªÃ¥Â¶Ãª*qPKFO\0Ã,Å¾(Ãâ‚¬|Å“â€¢â€˜â€Â°k *YF5â€Ã¥Ã¥;â€œ<6Â´@Ã˜QUâ€”\"Ã—Ã°\rbÃ˜OAXÃƒÅ½vÃ¨Ã·vÂ¯)HÂ®Ã´o`STÃˆ
pb j1+Ã…â€¹Â¢eÂ²Ãâ„¢ ÃŠâ‚¬Qx8@
Â¡â€¡ÃÃˆÃ§5\\QÂ¦,Å’â€¡Â¸Ã„â€°NÃ«ÃÃžËœb#YÂ½HÂ¥Â¯p1â€ºÃ–ÃŠÃ¸kBÂ¨8NÃ¼oÃ»X3,#UÃšÂ©Ã¥'Ã„\"â€ Ã©â€â‚¬Ã‚eeH#zâ€ºÂ­q^rG[Â¸â€”:Â¿\rÂ¸mâ€¹ngÃ²ÃœÃŒÂ·5Â½Â¥VÂ]Â«Ã±-(ÃWÃ°Â¿0Ã¢Ã«Ã‘~kh\\Ëœâ€žZÅ Ã¥`Ã¯Ã©lÂ°ÃªÃ„Ãœk â€šoÃŠjÃµWÃ!â‚¬.Â¯hFÅ Ã”Ã¥[tÃ–Aâ€¡wÃªÂ¿eÂ¥MÃ Â«Â«Â¡Â3!Â¬ÂµÃÃ¦Â°nK_SFËœjÂ©Â¿Ã¾-Sâ€š[rÅ“ÃŒâ‚¬wÃ¤Â´Ã¸0^Ãhâ€žfÃ¼-Â´Â­Ã½Â°?â€šâ€ºÃ½XÃ¸5â€”/Â±Â©Å â‚¬Ã«Ã«IY Ã…V7Â²aâ‚¬d â€¡8Â°bqÂ·ÂµbÆ’n\n1YRÃ‡vTÂ±Ãµâ€¢,Æ’+!Ã˜Ã½Ã¼Â¶NÃ€TÂ£Ã®2IÃƒÃŸÂ·ÂÃ„Ã„Ã·â€žÃ‡Ã²Ã˜â€¡ÃµÂ©K`K\"Ã°Â½Ã´Â£Ã·O)\nYÂ­Ãš4!}KÂ¢^Â²ÃªÃ‚Ã D@Ã¡â€¦Ã·naË†\$@Â¦ Æ’Ã†\$AÅ â€jÃ‰Ã‹Ã‡Ã¸\\â€¹D[=Ã‹	bHpÃ¹SOAGâ€”ho!F@lâ€žUÃ‹Ã`Xn\$\\ËœÃË†_â€ Â¢Ã‹Ëœ`Â¶ÂÃ¢
HBÃ…Ã•]Âª2
Ã¼Â«Â¢\"z0i1â€¹\\â€ÃžÃ‡Ã‚Ã”wÃ¹.â€¦fy ÃžÂ»K)
Â£Ã®Ã­Ã‚Ââ€¡Â¸ pÃ€0Ã¤Â¸ÂÂXÃ‚S>1	*,]â€™Ã \r\"Ã¿Â¹Â<cQÂ±Ã±\$tâ€¹â€žqÂÅ“.â€¹Ã¼	<Ã°Â¬Ã±â„¢Å½+t,Â©]LÃ²!Ãˆ{â‚¬gÅ½Ã¼Ã£XÂ¤Â¶\$ÂÂ¤6 vâ€¦ÂËœÃ¹Ã‡ Â¡Å½Å¡ Â£%GÃœHÃµâ€“Ã„Ã˜
Å“ÃˆEÅ½Â Ã’XÃƒÃˆ*Ãâ€š0Ã›Å )qÂ¡
nCÃ˜)Iâ€ºÃ»Ã \"ÂµÃ¥ÃšÃ…ÃžÃ­Ë†Â³Â¬`â€žKFÃ§ÃÂâ€™@Ã¯dÂ»5Å’ÃªÂ»AÃˆÃ‰pâ‚¬{â€œ\\Ã¤Ã“ Ã€pÃ‰Â¾NÃ²rÃ¬'Â£S(+5Â®ÃÅ + \"Â´Ã„â‚¬Â£U0Ã†iÃ‹ÂÃœâ€ºÃºÃ¦!
nMË†Ã¹brKÃ€Ã°Ã¤6ÃƒÂºÂ¡râ€“Ã¬Â¥Ã¢Â¬|aÃ¼ÃŠÃ€Ë†@Ã†x|Â®Â²ka
Ã9WR4\"?Â5ÃŠÂ¬pÃ½Ã›â€œâ€¢Ã±kâ€žrÃ„ËœÂ«Â¸Â¨Ã½ÃŸâ€™Ã°Ã¦Â¼Â7Ã‚â€”Hpâ€ â€¹5ÂYpWÂ®Â¼Ã˜G#ÃrÃŠÂ¶AWD+`Â¬Ã¤=ÃŠ\"Ã¸}Ã@HÃ‘\\Å½pÂ°â€œÂÃâ‚¬Â©ÃŸâ€¹ÃŒ)C3Ã!Å½sO:)Ã™Ã¨_F/\r4Ã©Ã€Ã§<AÂ¦â€¦\nn /TÃ¦3f7P1Â«6Ã“Ã„Ã™Ã½OYÃÂ»ÃÂ²â€¡Â¢Ã³qÃ¬Ã—;Ã¬Ã˜ÂÃ€ÂÃ¦ÂaÃ½XtS<Ã£Â¼9Ã‚nwsÂ²x@1ÃŽÅ¾xsÃ‘?Â¬Ã¯3Ã…Å¾@Â¹â€¦Ã—54â€ž
Â®oÃœÃˆÆ’0Â»ÃžÃÃ¯pR\0Ã˜Ã Â¦
â€žâ€ ÃŽÃ¹Â·Ã³Ã¢yqÃŸ Ã•L&S^:Ã™Ã’QÃ°>\\4OInÂÆ’Zâ€œnÃ§Ã²vÃ 3
Â¸3Ã´+PÂ¨â€¦L(Ã·Ã„
â€Ã°â€¦Ã€Ã .x \$Ã Ã‚Â«CÃ¥â€¡Ã©CnÂªAÅ¾kÃ§c:LÃ™6Â¨ ÃÃ‚rÂ³wâ€ºÃ“ÃŒhÂ°Â½Ã™ÃˆnrÂ³ZÃªÃ£=Ã¨Â»=jÂÃ‘â€™ËœÂ³â€¡6}MÅ¸GÃ½u~Â3Ã¹Å¡Ã„bg4Ã…Ã¹Ã´s6sÃ³QÂÃ©Â±#:Â¡3g~v3ÂÂ¼Ã³â‚¬Â¿<Â¡+Ã<Ã´Â³Ã’a}ÃÂ§=ÃŽeÂ8Â£'n)Ã“Å¾cCÃ‡zÃ‘â€°4L =hÃ½Å’{iÂÂ´Â±ÂJÃ§^~Ã§Æ’Ã“wgâ€¹DÃ Â»jLÃ“Ã©Ã^Å¡Å“Ã’Ã=6ÃŽÂ§NÂÃ“â€ÃªÃ…ÃÂ¢\\Ã©Ã›DÃ³Ã†Ã‘Nâ€â€ ÃªEÃ½?hÃƒ:SÃ‚*>â€žÃ´+Â¡uÃºhhÃ’â€¦Â´Wâ€ºE1jâ€ xÂ²Å¸Ã´Ã­Â´Å tÃ–'ÃŽtÃ [ Ã®wSÂ²Â¸ÃªÂ·9Å¡Â¯TÃ¶Â®[Â«,Ã•jÃ’vâ€œÃ²Ã•Ã®Å¾tÂ£Â¬A #Tâ„¢Â¸Ã”Ã¦Å¾â€š9Ã¬Ã¨jâ€¹K-ÃµÃ’Ãž Â³Â¿Â¨YÃ¨iâ€¹Qe?Â®Â£4Ã“Å¾Ã“ÃÃ«_WzÃŸÃŽÃ©Ã³â€¹@JkWYÃªhÃŽÃ–puÂÂ®Â­Ã§j|z4Ã—ËœÃµ	Ã¨iËœÃ°mÂ¢	Ã O5Ã \0>Ã§|ÃŸ9Ã‰Ã—â€“Â«ÂµÃ¨Â½ Ã¶Ã«gVyÃ’Ã”uÂ´Â»Â¨=}gs_ÂºÃ£Ã”VÂ¹sÃ•Â®{Ã§kÂ¤@rÃ—^â€”ÃµÃš(ÃwÃÂâ€¦Ã¸H'Â°ÃaÃ¬=iÂ»Ã–NÃ…4ÂµÂ¨â€¹Ã«_{Ã6Ã‡tÃÂ¨ÃœÃ¶Ãâ€”e [Ãh-Â¢â€œUl?JÂÃ®Æ’0O\0^Ã›HlÃµ\0.Â±â€žZâ€šâ€™Å“Â¼Ã¢Ãšxuâ‚¬Ã¦Ã°\"<	 /7ÃÅ Â¨Ãš Ã»â€¹Ã¯i:ÂÃ’\nÃ‡ Â¡Â´Ã ;Ã­Ã‡!Ã€3ÃšÃˆÃ€_0Â`Å¾\0H`Å¾â‚¬Ã‚2\0â‚¬Å’HÃ²#hâ‚¬[Â¶P<Ã­Â¦â€ â€˜Ã—Â¢gÂ¶ÃœÂÂ§m@~Ã¯(Ã¾Ã•\0ÃŸÂµkÃ¢YÂ»vÃšÃ¦Ã¢#>Â¥Ã¹â€ž\nz\nËœ@ÃŒQÃ±\n(Ã GÂÃ\nÃ¶Ã¼Ã Å½'kÃ³Å¡Â¦Ã¨Âº5â€œnâ€5Ã›Â¨Ã˜@_`Ãâ€¡_lâ‚¬1ÃœÃ¾Ã¨wpÂ¿PÃ®â€ºwâ€ºÂªÃž\0â€¦Å½cÂµÃoEl{Ã…ÃÂ¾Ã©7â€œÂ»Â¼Â¶o0ÃÃ›Ã‚Ã´IbÃÂÃªnâ€¹zÃ›ÃŠÃžÃŽÃ¯Â·â€ºÂ¼ â€¹ÂÃ§{Ã‡ 8Ã¸wÅ½=Ã«Ã®Å¸| /yÃª3aÃ­ÃŸÂ¼#xqÅ¸Ã›Ã˜Ã²Â¿Â»@Ã¯Ã·kaÃ !Ã¿\08dÃ®mË†Ã¤R[wvÃ‡â€¹RGp8Ã¸Å¸ vÃ±\$ZÃ¼Â½Â¸mÃˆÃ»tÃœÃžÃÃ€Â¥Â·ÂÂ½Ã­Ã´ÂºÃœÃ»Â·Ã‡Â½ÂÃ”Ã®Ã»uâ‚¬oÃpÃ·`2Ã°Ã£m|;#xÂ»mÃ±nÃ§~;Ã‹Ã¡VÃ«EÂ£Ã‚Ã­Ã˜Ã°Ã„Ã¼3OÅ¸\rÂ¸,~oÂ¿w[Ã²Ã¡NÃªÃ¸}ÂºÃ¾ â€ºclyÃ¡Â¾Ã±Â¸OÃ„ÃÃžÃ±;â€¦Å“?Ã¡~Ã¬â‚¬^j\"Ã±WzÂ¼:ÃŸ'xWÃ‚Ãž.Ã±	Ãuâ€™(Â¸Ã…ÃƒÂÃ¤qâ€”â€¹<gÃ¢Ã§vÂ¿hWqÂ¿â€°\\;ÃŸÅ¸8Â¡Ãƒ)M\\Â³Å¡5vÃšÂ·x=hÂ¦iÂºb-ÂÃ€Ãž|bÃŽÃ°Ã pyÅ½DÃâ€¢Hh\rceÃ Ëœy7Â·pÂ®Ã®xÃ¾ÃœGâ‚¬@D=Ã° ÂÃ–Ã¹Â§1Å’Ã¿!4Ra\rÂ¥9â€!\0'ÃŠYÂÅ’Å¸Â¥@>iS>Ã¦â‚¬Ã–Â¦Å¸oÂ°Ã³oÃ²ÃŽfsO 9 .Ã­Ã¾Ã©Ã¢\"ÃFâ€šâ€¦lÂÃ³20Ã¥Ã°E!QÅ¡Ã¡Â¦Ã§Ã‹ÂD9dÃ‘BW4Æ’â€º\0Ã»â€šy`RoF>FÃ„aâ€žâ€°0â€˜Ã¹ÃŠÆ’Ã³0	Ã€2Ã§<â€šIÃP'Â\\Ã±Ã§ÃˆIÃŒ\0\$Å¸Å“\n R aUÃ.â€šsÃâ€žÂ«Ã¦\"Ã¹Å½Å¡1Ãâ€ â€¦eÂºYÃ§ Â¢â€žZÃªqÅ“Ã±1 |Ã‡Ã·#Â¯G!Â±Pâ€™P\0|â€°HÃ‡Fn p>WÃ¼:Â¢Å¾`YP%â€Ã„ÂÃ¢Å¸\nÃˆa8â€°ÃƒP>
â€˜ÃÃÃ¨â€“â„¢`]â€˜â€¹4Å“`<Ãr\0Ã¹ÃƒÅ½â€ºÂÃ§Â¨Ã»Â¡â€“zâ€“4Ã™â€¡Â¥Ã‹8Ââ‚¬Ã¹ÃŽÃ4Ã³Â`mÃ£h:Â¢ ÃŽÂªÂ¬HDÂªÃ£Ã€jÃ+p>*Ã¤â€¹ÃƒÃ„Ãª8Ã¤Å¸Ã• 0Â8â€”AÂ¸Ãˆ:â‚¬Ã€Â»Ã‘ÂÂ´]wÃªÃƒÂºÃ¹z>9\n+Â¯Ã§Ã§ÃÃ€Ã±Ã˜:Å½Ââ€”Â°iiâ€œPoG0Â°Ã–Ã¶1Ã¾Â¬)Ã¬Å ZÂ°Ãšâ€“Ã¨nÂ¤Ãˆâ€™Ã¬Ã—eRÃ–â€“ÃœÃ­â€¡gÂ£MÂ¢Ã â€Ã€Å’gsâ€°LCÂ½rÃ§8Ãâ‚¬Â!Â°â€ Ã€â€šÅ’3R)ÃŽÃº0Â³0Å’Ã´sÂ¨IÂÃ©JË†VPpK\n|9e[Ã¡â€¢Ã–Ã‡Ã‹â€˜Â²â€™D0Â¡Ã• Ã z4Ãâ€˜ÂªoÂ¥Ã”Ã©Ã¡Ã¨Ã Â´,N8nÃ¥Ã˜sÂµ#{Ã¨â€œÂ·z3Ã°> Â¸BSÃ½\";Ã€ e5VD0Â±Â¬Å¡[\$7z0Â¬ÂºÃ¸ÃƒÃ‹Ã£=8Ã¾	T 3Ã·Â»Â¨QÃ·'Râ€™Â±â€”â€™ÂÃ˜nÃˆÂ¼LÃyÃ…â€¹Ã¬Ã¶'Â£\0oÃ¤Ã›,Â»â€°\0:[}(â€™Â¢Æ’|Ã—Ãºâ€¡Xâ€ >xvqWÃ¡â€œ?tBÃ’E1wG;Ã³!Â®Ãâ€¹5ÃŽâ‚¬|Ã‡0Â¯Â»JI@Â¯Â¨#Â¢Ë†ÃžuÃ…â€ IÃ¡Å¾Ã¸\\p8Ã›!'â€š]ÃŸÂ®ÂÅ¡l-â‚¬lÃ¥SÃŸBÃ˜Ã°,Ã“â€”Â·Â»Ã²]Ã¨Ã±Â¬1â€¡Ã”â€¢HÃ¶Ã¿NÃ‚8 %%Â¤	ÂÃ…/Â;ÂFGSÃ´Ã²Ã´hÃ©\\Ã™â€žÃ“cÃ”tÂÂ²Â¡Ã¡2|Ã¹WÃš\$tÃ¸ÃŽ<Ã‹hÃOÅ Â¬+#Â¦BÃªaN1Ã¹Ã§{Ã˜ÃyÃŠwÂÃ²Å¡Â°2Â\\Z&)Â½dÂ°b'Å¾Â,XxmÃƒ~â€šHÆ’Ã§@:d	>=-Å¸Â¦
lKÂ¯Å’ÃœÂÃ¾JÃ­â‚¬\0Å¸ÂÃŒÃŒÂÃ³@â‚¬rÃÂ¥Â²@\"Å’(AÃÃ±Ã¯ÂªÃ½ZÂ¼7Ã…h>Â¥Ã·Â­Â½\\ÃÃ¦ÃºÂ¨#>Â¬ÃµÃ¸\0Â­Æ’XrÃ£â€”YÃ¸Ã¯YxÃ…ÂÃ¦q=:Å¾Å¡Ã”Â¹Ã³\rlÅ oÃ¦mâ€¡gbÃ¶Ã¶Ã€Â¿Ã€ËœÃ¯â€žD_Ã TxÂ·CÂ³ÂÃŸ0.Å Ã´yâ‚¬â€ R]Ãš_ÃÃ«Ã‡ZÃ±Ã‡Â»WÃ¶IÃ Ã«
GÃ”Ã¯	MÃ‰Âª(Â®Ã‰|@\0SOÂ¬ÃˆsÃž {Ã®Â£â€Ë†Ã¸@k}ÂÃ¤FXSÃ›b8Ã Ã¥=Â¾Ãˆ_Å Ã”
â€Â¹lÂ²\0Ã¥=ÃˆgÃÃŠ{ HÃ¿Ã‰yGÃ¼Ã•Ã¡Ã› sÅ“_Ã¾J\$hkÃºFÂ¼qâ€žÃ Å¸Ã·Â¢Ã‰d4Ãâ€°Ã¸Â»Ã¦Ã–'Ã¸Â½Â>vÃÂÂ¬ !_7Ã¹VqÂ­Ã“@1zÃ«Â¤uSeâ€¦ÃµjKdyuÃ«Ã›Ã‚SÂ©.â€š2Å’\"Â¯{ÃºÃŒKÃ¾Ã˜Ã‹?ËœsÂ·Ã¤Â¬Ã‹Â¦hâ€™ÃŸRÃ­dâ€š
Ã©`:yâ€”Ã™Ã¥Ã»GÃšÂ¾\nQÃ©
Ã½Â·Ã™ÃŸowâ€™â€ž'Ã¶Ã¯hSâ€”Ã®>ÂÃ±Â©Â¶â€°LÃ–X}Ã°Ë†eÂ·Â§Â¸GÂ¾Ã¢Â­@9Ã½Ã£Ã­Å¸Ë†Ã¼WÃ|Ã­Ã¸ÃÂ¹Ã»@â€¢_Ë†Ã·uZ=Â©â€¡,Â¸Ã¥ÃŒ!}Â¥ÃžÃ‚\0Ã¤I@Ë†Ã¤#Â·Â¶\"Â±'Ã£Y`Â¿Ã’\\?ÃŒÃŸpÃ³Â·Ãª,GÃºÂ¯ÂµÃ½Ã—Å“_Â®Â±'Ã¥GÃºÃ¿Â²Ã	Å¸Tâ€ â€š#Ã»oÅ¸ÃH\rÃ¾â€¡\"ÃŠÃ«ÃºoÃ£}Â§Ã²?Â¬Ã¾OÃ©Â¼â€7Ã§|'ÃŽÃÂ´=8Â³MÂ±Ã±Qâ€yÃ´aÃˆHâ‚¬?Â±â€¦ÃŸÂ®â€¡ Å¾Â³Ã¿\0Ã¿Â±Ã¶bUdÃ¨67Ã¾ÃÂ¾I OÃ¶Ã¤Ã¯Ã»\"-Â¤2_Ã¿0Â\r
Ãµ?Ã¸Ã¿Â«â€“ÂÃ¿ hOÃ—Â¿Â¶t\0\0002Â°~Ã¾Ã‚Â° 4Â²Â¢ÃŒK,â€œÃ–ohÂ¼ÃŽ	PcÂ£Æ’Â·z`@ÃšÃ€\"Ã®Å“Ã¢Å’Ã Ã‡H; ,=ÃŒ 
'Sâ€š.bÃ‹Ã‡Sâ€žÂ¾Ã¸Ã Ccâ€”Æ’ÃªÃ¬Å¡Å’Â¡R,~Æ’Ã±XÅ @ 'â€¦Å“8Z0â€ž&Ã­(np<pÃˆÂ£Ã°32(Ã¼Â«.@R3ÂºÃ@^\rÂ¸+Ã@ , Ã¶Ã²\$	ÃÅ¸Â¸â€žEâ€™Æ’Ã¨tÂ«B,Â²Â¯Â¤ Ã¢Âªâ‚¬ÃŠÂ°h\rÂ£><6]#Ã¸Â¥Æ’;â€šÃ­CÃ·.Ã’Å½â‚¬Â¢Ã‹Ã8Â»PÃ°3Ã¾Â°;@Ã¦ÂªL,+>Â½â€°Âp(#Ã-â€ f1Ã„zÂ°ÃÂª,8Â»ÃŸ ÂÃ†Ã†ÂPÃ :9Ã€Å’Ã¯Â·RÃ°Ã›Â³Â¯Æ’Â¹â€ )e\0ÃšÂ¢RÂ²Â°!Âµ\nr{Ã†Ã®eâ„¢Ã’Ã¸ÃŽGA@*Ã›ÃŠnÂDÃ¶Å 6ÃÅ½Â»Ã°Ã²Ã³Ã­ ÂNÂ¸\rÅ½Râ„¢Ã”Ã¸8QKÂ²0Â»Ã Ã©Â¢Â½Â®Ã€>PNÂ°Ãœ
Â©IQ=r<Ã¡;&Ã€Â°fÃNGJ;Ã°UAÅ¾ÃµÃœÂ¦Ã—Aâ€“Pâ‚¬&ÂÅ¾Ã¾ÃµÃ˜Ã£`Â©ÃÃ¼Ã€â‚¬);â€°Ã¸!Ãs\0Ã®Â£Ãpâ€ p\râ€¹Â¶Ã â€¹Â¾n(Ã¸â€¢@â€¦%&	SÂ²dYÂ«ÃžÃ¬Ã¯u CÃš,Â¥Âº8OËœ#ÃÃâ€žÃ³Ã²oÂªÅ¡ÃªRÃ¨Â¬v,â‚¬Â¯#Ã¨Â¯|7Ã™\"Cpâ€°Æ’ÂÂ¡BÃ´`Ã¬jÂ¦X3Â«~Ã¯Å â€žRÃ@Â¤Ã‚vÃ‚Ã¸Â¨Â£Ã€9B#Ëœ

Â¹ @\nÃ°
0â€”>TÃ­ÃµÃ¡â€˜Ã€-â‚¬5â€žË†/Â¡=Ã¨â‚¬ Â¾â€šÃEÂ¯Å¾â€”Ã‡\n
Ã§â€œÃ‚Ë†d\"!â€š;ÃžÃ„p*nÂ¬Â¼ZÂ²\08/Å’jXÂ°\rÂÂ¨>F	PÃÂe>Ã€â€¢OÅ¸Â¢LÃ„
Â¯Â¡Â¬O
0Â³\0Ã™
)ÂkÃ€Ã‚ÂºÃ£Â¦Æ’[	Ã€ÃˆÃÂ³Ã‚ÃªÅ“'Lâ‚¬Ã™	ÃƒÃ¥Ã±Æ’â€šÃ©â€º1 1\0Ã¸Â¡CÃ« 1T
Âº`Â©â€žÂ¾Ã¬RÃŠÂzÂ¼Ã„Å¡ÂÂ£Ã®Ã’pÂ®Â¢Â°ÃÃœÂ¶Ã¬Ã€< .Â£>Ã®Â¨5Å½Ã\0Ã¤Â»Â¹>Å¸ BnÃ‹Å <\"heâ€¢>ÃÂºÂºÃƒÂ®Â£Ã§sÃµ!ÂºHÃ½{ÃœÂâ€˜!\rÃ\rÃ€\"Â¬Ã¤| â€°>RÅ¡1dÃ Ã¶Ã·\"U@ÃˆD6ÃÃ¥ÃÂ¢3Â£Ã§Ã°Å¸>o\rÂ³Ã§Ã¡Â¿vÅ¾L:Kâ€ž2Ã¥+Ã†0Ã¬Â¾Ââ‚¬>Â°Ãˆ\0Ã¤Ã­ Â®â€šÂ·BÃ©{!r*HÂÃ®Â¹Â§â€™y;Â®`8\0ÃˆÃ‹Ã˜Â¯Ã´Â½dÃ¾Â³Ã»Ã©\rÃƒ0Ã¿ÃÃ€2AÃ¾Ã€Â£Ã®Â¼?Â°Ãµ+Ã»\0Ã›Ãƒâ€¦\0AÅ½Â¯Å½Æ’w
SÃ»â€¡lÃÂ²Â¿Â°\r[Ã”Â¡Âª6Ã´coÆ’=Â¶Ã¼Â¼Ë†0Â§z/J+ÂÃªâ€ Å’Ã¸W[Â·Â¬~C0â€¹Ã¹eÃ¼30HQPÃ·DPYâ€œ}â€¡4#YD Ã¶â€¦Âºp)	Âº|Ã»@ÂÅ½Â¥&Ã£-Ã€â€ /FËœ	Ã¡â€°TËœ	Â­Â«â€žÂ¦aH5â€˜#Æ’Ã«H.Æ’A>ÃÃ°0;.Â¬Â­Ã¾Yâ€œÃ„Â¡	Ãƒ*Ã»D2 =3Â·	pBnuDw\nâ‚¬!Ã„zÃ»CÂQ \0Ã˜ÃŒHQ4DÃ‹*Å½Ã±7\0â€¡JÃ„Ã±%Ã„Â±pÅ½uD (Ã´O=!Â°>Â®u,7Â»Ã¹1â€ Ã£TMÂÅ½+â€”3Ã¹1:\"PÂÂ¸Ã„Ã·â€RQ?Â¿â€œÃ¼PÂ°Å Â¼+Ã¹11= Å’M\$ZÃ„Ã—lT7Ã…,Nq%E!ÃŒSÂ±2Ã…&Ã¶Å’U*>GDS&Â¼ÂªÃ©Ã³â€ºozh8881\\:Ã‘Ã˜Z0hÅ ÃÃˆT â€¢C+#ÃŠÂ±A%Â¤Â¤D!\0Ã˜Ã¯Ã²Ã±ÃXDAÃ€3\0â€¢!\\Ã­#ÂhÂ¼ÂªÃ­9bÃâ€šTâ‚¬!dÂªâ€”Ë†ÃÃ„Yâ€˜j2Ã´ÂSÃ«ÃˆÃ…ÃŠ\nA+ÃÂ½Â¤Å¡HÃˆwD`Ã­Å (AB*Ã·Âª+%Ã•EÃ¯Â¬X.Ã‹ BÃ©#ÂºÆ’ÃˆÂ¿Å’
Â¸&Ã™Ã„Xeâ€žEoÅ¸\"Ã—Ã¨|Â©rÂ¼Âª8Ã„Wâ‚¬2â€˜@8DaÃ¯|Æ’â€šÃ¸Ã·â€˜Å â€NÃºhÃ´Â¥ÂÃŠJ8[Â¬Ã›Â³Ã¶Ã‚Ã¶Â®WÂzÃ˜{Z\"L\0Â¶\0Å¾â‚¬Ãˆâ€ 8Ã˜xÅ’Ã›Â¶X@â€Ã€ ÂEÂ£ÃÃ¯Ã«â€˜h;Â¿afËœÂ¼1Ã‚Ã¾;nÃƒÃŽhZ3Â¨Eâ„¢Ã‚Â«â€ 0|Â¼ Ã¬Ëœâ€˜Â­Ã¶AÃ â€™Â£tÂB,~Ã´Å WÂ£8^Â»Ã‡ Ã—Æ’â€šÃµ<2/	Âº8Â¢+Â´Â¨Ã›â€ÂÂâ€šO+ %P#ÃŽÂ®\n?Â»ÃŸâ€°?Â½Ã¾eÃ‹â€ÃO\\]Ã’7(#Ã»Â©DÃ›Â¾Â(!c) NÃ¶Ë†ÂºÃ‘MFâ€EÂ£#DXÃ®gÃ¯)Â¾0ÂAÂª\0â‚¬:ÃœrBÃ†Ã—``  ÃšÃ¨Qâ€™Â³H>!\rBâ€¡Â¨\0â‚¬â€°V%ceÂ¡HFHÃ—Ã±Â¤m2â‚¬BÂ¨2IÃªÂµÃ„Ã™Ã«`#ÃºËœÃ˜D>Â¬Ã¸Â³n\n:LÅ’Ã½Ã‰9CÃ±ÂÃŠËœ0Ã£Ã«\0Ââ€œx(ÃžÂÂ©(\nÃ¾â‚¬Â¦ÂºLÃ€\"GÅ \n@Ã©ÂÃ¸`[ÃƒÃ³â‚¬Å Ëœ\ni'\0Å“Ã°)Ë†Ã¹â‚¬â€šÂÂ¼y)&Â¤Å¸(p\0â‚¬NË†	Ã€\"â‚¬Â®N:8Â±Ã©.\r!ÂÂ'4|Ã—Å“~Â¬Ã§Â§ÃœÃ™ÃŠâ‚¬ÃªÂ´Â·\"â€¦cÃºÃ‡Dltâ€˜Ã“ Â¨Å¸0cÂ«Ã…5kQQÃ—Â¨+â€¹ZÂÅ½GkÃªÂ!Fâ‚¬â€žcÃ4Ë†Ã“Rx@Æ’&>z=Å½Â¹\$(?Ã³Å¸Ã¯ÂÃ‚(\nÃ¬â‚¬Â¨>Ã 	Ã«Ã’Âµâ€šÃ”Ã©CqÃ›Å’Â¼Å’t-}Ã‡G,tÃ²GW â€™xqÃ›HfÂ«b\0Å¾\0zÃ•Ã¬Æ’ÃT9zwÃâ€¦Â¢Dmn'Ã®ccb H\0zâ€¦â€°Ã±3Â¹!Â¼â‚¬Ã‘Ã”Ã… HÃ³ÃšHzÃ—â‚¬ÂIy\",Æ’- \0Ã›\"<â€ 2Ë†Ã® Ã'â€™#H`â€ d-Âµ#clÅ½j Ã„Å¾`Â³Â­i(Âº_ÂÂ¤ÃˆdgÃˆÅ½Ã­Ã‡â€š*Ã“j\rÂª\0Ã²>Ã‚ 6Â¶ÂºÃ 6Ã‰2Ã³kjÃ£Â·<ÃšCqâ€˜Ã9Ã Ã„Ââ€ Ã‰I\r\$Câ€™A I\$x\râ€™HÂ¶Ãˆ7ÃŠ8 Ãœâ‚¬ZÂ²pZrRÂ£Ã²Ã â€š_Â²U\0Ã¤l\râ€šÂ®IRÂXi\0<Â²Ã¤Ã„ÃŒrâ€¦~ÂxÃƒSÂ¬Ã©%â„¢Ã’^â€œ%j@^Ã†Ã´T3â€¦3Ã‰â‚¬GHÂ±zâ‚¬Ã±&\$Ëœ(â€¦Ã‰q\0Å’Å¡f&8+Ã…\rÃ‰â€”%Ã¬â€“2hCÃ¼xâ„¢Â¥Ã•IÂ½Å¡lbÃ‰â‚¬â€™(hÃ²SÆ’Y&ÂÃ BÂªÃ€ÂÅ’â€¢â€™`â€fâ€¢Ã²xÃ‰v n.L+Ã¾â€º/\"=I 0Â«dÂ¼\$4
Â¨7rÅ’Ã¦Â¼ÂAÂ£â€žÃµ(4 2gJ(DËœÃ¡=Fâ€žÂ¡Ã¢Â´ÃˆÃ¥(Â«â€šÃ»Â-'Ã„ Ã²XGÃ´2Â9Z=Ëœâ€™ÃŠ,ÃŠÃ€r` );x\"Ã‰Ã¤8;Â²â€“>Ã»&Ââ€¦Â¡â€žÃ³',â€”@Â¢Â¤2ÃƒplÂ²â€”Ã¤:0ÃƒlIÂ¡Â¨\rrÅ“JDÂË†Ã€ÃºÃŠÂ»Â°Â±â€™hAÃˆz22pÃŽ`O2hË†Â±8Hâ€šÂ´Ã„â€žwtËœBFÂ²ÂÅ’g`7Ã‰Ã‚Ã¤Â¥2{â€˜,KlÂ£Ã°â€ºÅ’ÃŸÂ°%C%ÃºomÃ»â‚¬Â¾Ã Ã€â€™Â´Æ’â€˜+XÂ£Ã­Ã»ÃŠ41Ã²Â¹Â¸Å½\nÃˆ2pÅ Ã’	ZB!Ã²=VÃ†ÃœÂ¨Ã¨Ãˆâ‚¬Ã˜+H6Â²ÃƒÃŠ*Ã¨Âª\0Ã¦kÃ•Ã â€”%<Â² Ã¸K',3Ã˜rÃ„I ;Â¥ 8\0ZÂ°+EÃœÂ­Ã’`ÃË†Â²Â½ÃŠÃ£+lÂ¯ÃˆÃÃ‹W+Â¨YÃ’Âµ-tÂ­ÂfÃ‹bÂ¡QÃ²Â·Ã‹_-Ã“â‚¬Ãžâ€¦Â§+â€žÂ· 95Å LjJ.GÃŠÂ©,\\Â·Ã²Ã”â€¦.\$Â¯2Ã˜JÃ¨\\â€ž- Ã€1Ã¿-cÂ¨Â²â€šÃ‹â€¡.lÂ·fÅ’xBqKÂ°,dÂ·Ã¨Ã‹â‚¬Ã¢8Ã¤AÂ¹Ko-Ã´Â¸Â²Ã®ÃƒÃ¦ÂÂ²Â°3KÃ†Â¯rÂ¾Â¸/|Â¬
ÃŠÃ‹Ã¥/\\Â¸rÂ¾Ã‹Ã±,Â¡ÂHÃÂ¤Â¸!Ã°YÃ€1Â¹0Â¤@Â­.Ã‚â€žÂ&|ËœÃ¿Ã‹Ã¢+Ã€Ã©J\0Ã§0P3JÃ-ZQÂ³	Â»\r&â€žâ€˜ÃƒÃ¡\nÃ’LÃ‘*Ã€Ã‹Ãžjâ€˜Ã„â€°|â€”Ã’Ã¥Ã‹Ã¦#Ã”Â¾Âª\"Ã‹Âºâ€œÂÂAÃŠÃ¯/Ã¤Â¹Ã²Ã»8Â)1#Ã¯7\$\"Ãˆ6\n>\nÃ´Â¢Ãƒ7LÂ1Ã â€¹Ã²h9ÃŽ\0ÂBâ‚¬ZÂ»dËœ#Â©b:\0+AÂ¹Â¾Â©22ÃÃ“'ÃŒâ€¢\nt â€™Ã„ÃŒÅ“Ã‰OÃ„Ã§2lÃŠÂ³.LÂ¢â€HC\0â„¢Ã©2 ÂÃ³+LÂ¢\\Â¼â„¢rÂ´Kk+Â¼Â¹Â³Ã‹Â³.ÃªÅ’â€™ÃªÂº;(DÃ†â‚¬Â¢ÃŠÃ¹1sâ‚¬Ã•ÃŒÃ²dÃs9ÃŒÃºâ€¢Â¼ P4ÃŠÃ¬Å’Å“ÃÃ³@â€¹.Ã¬Ã„Ã¡
A Ã¤Ã…nhJÃŸ1Â²3Ã³ KÃµ0â€žÃ‘3J\$\0Ã¬Ã’2Ã­Lk3Ã£Ë†Ã¡QÃ;3â€Ã‘n\0\0Ã„,Ã”sIÃ@Å’Ã»u/VAÃ…1Å“ÂµÂ³UMÃ¢<Ã†Le4DÃ–2Ã¾ÃVÂ¢% Â¨Ap\nÃˆÂ¬2Ã‰Ã35Ã˜Ã²ÃA-Â´â€œTÃu5Å¡3Ã²Ã›Â¹1+fL~Ã¤\nÃ´Â°Æ’	â€žÃµ->Â£Â° Ã–Ã’Â¡Mâ€”4XLÃ³Sâ€ ÃµdÃ™Â²Ã–ÃÅ¸*\\Ãš@ÃÂ¨â‚¬ËœYÃ“kÂ¤Å Â¤Ã›SDMÂ»5 XfÂ° Â¬ÂªDÂ³sÂ¤Ã¤Ã€Us%	Â«ÃŒÂ±p+KÃ©6Ã„Ãž/ÃÃ”Ã¼Ãâ€™Ã±8XÃ¤Ãžâ€š=KÂ»6pHÃ â€ â€™Ã±%Ã¨Â3Æ’ÃÂ«7lÃ˜IÂ£K0ÃºÂ¤Ã‰LÃ­ÃŽDÂ»Â³uÆ’ÃªÃµ`Â±Â½P\rÃ¼Ã™SOÃâ„¢&(;Â³L@Å’Â£ÃË†N>SÃ¼Â¸2â‚¬Ã‹8(Ã¼Â³Ã’`JÂ®EÂ°â‚¬rÂ­F	2Ã¼Ã¥SEâ€°â€Mâ€™â€ MÃˆÃ¡\$qÃŽEÂ¶Å¸\$Ã”ÃƒÂ£/I\$\\â€œÃ£Ã¡IDÃ¥\" â€ \nÃ¤Â±ÂºÂ½w.tÃS	â‚¬Ã¦â€žÃ‘â€™PÃ°Ã²#\nWÃ†Ãµ-\0CÃ’ÂµÃŽ :jÅ“RÃ­Ã^SÃ¼Ã­â€žÃ…8;dÃ¬`â€Â£Ã²5Ã”ÂªÂaÃŠâ€“Ã‡Ã´EÂÂ¹+(XrÃ¶MÃ«;Å’Ã¬3Â±;Â´â€¢Ã³Â¼B,Å’Ëœ*1 &Ã®â€œÃƒÃŽÃ‹2XÃ¥SÂ¼Ë†Ãµ)<Ã Â­L9;Ã²RSNÂ¼ÃžÂ£ÃgIs+ÃœÃ«Ã“Â°KÆ’<Â¬Ã±sÂµLY-Zâ€™:A<Ã¡Ã“Ã‚OO*Å“Ãµ2vÃW7Â¹Â¹+|Ã´ â‚¬Ã‹Â»<TÃ–Ã³Ã•9 hâ€™â€œÂ²Ãy\$<Ã´ÃŽ#ÃÂ;Ã”Ã¶Ã“Ã¡â€ºvÂ±\$Ã¶ÂOÃ©\0Â­ Â¬,Hk Ã²Ã¼
-Ã¤ÃµÃ ÃÅ¡\rÃœÃºÂ²Å¸ÃÂ£;â€žâ€Â¹Oâ€¢>Ã¬Ã¹â€œÂ·Ã‹7>Â´Â§3@O{.4Ã¶pOÂ½?TÃ¼bÃƒÃÃ‹.Ã«.~Oâ€¦4Ã´ÃSÃ¯ÃÃ¬>1SSâ‚¬Ã*4Â¶PÃˆÂ£Ã³>Ã¼Â·ÃÃÃ¯3Ã­\0Ã’WÃ>Â´Ã´2ÂÃ¥><Ã«Ã³ÃŸP?4 â‚¬Ã›@Å’Ã´t\nNÃ€Ã‡Ã¹ÂAÅ’xpÃœÃ»%=P
@Ã…Ã’CÃ@â€¦RÃ‡Ã‹Å¸?xÂ°Ã³\nËœÂ´Å’0NÃ²wÃO?Ã•TJC@ÃµÃŽ#â€ž	.dÃ¾â€œÂ·MÃªÃŒtÂ¯&=Â¹\\Ã¤4Ã¨Ã„AÃˆÃ¥:Lâ€œÂ¥â‚¬Ã­\$ÃœÃ©Ã’NÆ’Â­:Å’â€™\rÃŽÃ‰I'Ã…Â²â€“
AÃ•rÃ¡Å’Â;\r /â‚¬Ã±CÃ´ÃˆÃ¥BÃ¥Ã“Â®Å’i>LÃ¨Å Â7:9ÂÂ¡Â¡â‚¬Ã¶|Â©C\$ÃŠÃ‹)Ã‘Ã¹Â¡Â­Â¹z@Â´tlÃ‡:>â‚¬ÃºCÃª\nÂ²Bi0GÃšÂ,\0Â±FD%p)Âo\0Å Â°Â©Æ’\n>Ë†Ãº`)QZIÃ©KGÃš%M\0#\0ÂDÃ Â¦Q.HÃ '\$ÃE\n Â«\$ÃœÂ%4IÃ‘DÂ°3oÂ¢:LÃ€\$Â£ÃŽm Â±Æ’0Â¨	Ã”BÂ£\\(Å½Â«ÂÂ¨8Ã¼ÃƒÃ©â‚¬Å¡â€¦hÃŒÂ«DÂ½Ã”CÃ‘sDX4TKâ‚¬Â¦Å’{Ã¶Â£xÃ¬`\nâ‚¬,â€¦Â¼\nEÂ£Ãª:Ã’p\nÃ€'â‚¬â€“> ÃªÂ¡o\0Â¬â€œÃ½tIÂÃ†`
 -\0â€¹DÂ½Ã€/â‚¬Â®KPÃº`/Â¤ÃªÃ¸HÃ—\$\n=â€°â‚¬â€ >ÂÂ´UÃ·FP0Â£Ã«ÃˆUG}4B\$?EÃ½Ã›Ã‘Å¾%â€Tâ‚¬WD} *Â©H0Ã»Tâ€ž\0tÃµÂ´â€ â€šÃ‚Ã˜\"!o\0ÂEÃ¢7Â±Ã¯R.â€œâ‚¬ÃºtfRFu!Ã”ÂDÃ°\nÃ¯\0â€¡F-4Vâ‚¬QHÃ…%4â€žÃ‘0uN\0Å¸DÃµQRuEÃ 	)ÂÃI\n &Qâ€œmâ‚¬)Ã‡Å¡â€™m â€°#\\ÂËœ
â€œÃ’DÂ½Ã€(\$ÃŒâ€œx
4â‚¬â‚¬WFM&Ã”Å“R5HÃ¥%qÃ¥Ã’[Fâ€¦+ÃˆÃ¹Ã‘IF \nTÂ«R3DÂºLÃoÂ°Å’Â¼y4TQ/EÂÂ´[Ã‘Å¾<Â­t^Ã’Ã‹FÃ¼ )QË†Ã¥+4Â°Qâ€”IÃ•#Â´Â½â€°IFÂ'TiÃ‘ÂªXÃ¿Ã€!Ã‘Â±FÃ*Ã”nRÃŠ>Âª5Ã”pÃ‘Ã‡Km+Ã”sÃ‡Ãœ Ã»Â£Ã¯Ã’Ã¡IÃ¥Ã´Å¸RÂEÃ½+Ã”Â©Â¤Ã™M\0Ã»Ã€(RÂ°?Â+HÃ’â‚¬Â¥JÃ­\"TÃƒ
DË†ÂÂª\$ËœÅ’Ã 	4wQÃ }Tz\0â€¹GÂµ8|Ã’xÃ§ÃÂ©RÂ¢Ãµ6Ã€RÃ¦	4XR6\nÂµ4yÃ‘mNÃ´Ã£QÃ·NMÃ &RÃ“H&Ã‰2Q/Âª7#Ã¨Ã’â€ºÃœ{Â©'Ã’Ã’Â,|â€â€™Ã‡ÃŽ\nÂ°	.Â·\0Ëœ>Ã”{Ão#1Dâ€¦;Ã€Ã‚ÂÃ?UÃ´â€˜Ã’â€¢JÃ²9â‚¬*â‚¬Å¡ÂÂ¸jâ€Ã½â‚¬Â¯Fâ€™NÂ¨Ã’Ã‘â€°JÃµ #Ã‘~%-?CÃ´Ã‡ÃŸLÂ¨3Ã•@EPÂ´{`>QÃ†Ãˆâ€ÂµÃ”%OÃ­)4Ã¯R%IÅ @Ã”Ã´%,Â\"Ã•Ã“Ã¹IÃ•<â€˜Ã«Ã“ÃÃ¥\$Ã”â€°TP>Ã\nÂµ\0QP5DÃ¿Ã“kOFÃ•TYÂµ<ÃoÃ½Qâ€¦=Tâ€°\0Â¬â€œx	5Â©DÂ¥,Ã‚0?ÃiÃŽ?xÃ¾  ÂºmE}>ÃŽ|Â¤Ã€Å’Ã€[ÃˆÃ§\0Å¾Å½â‚¬â€¢&RLâ‚¬Ãºâ€HÂ«S9â€¢Gâ€ºIâ€ºÂ§1Ã¤â‚¬â€“Å½â€¦M4VÂ­HÃ¾oT-SÂ)QÃ£GÃ‡F [ÃƒÃ¹TQRjNÂ±Ã£#x]N(ÃŒUÂ8\nuU\n?5,TmÃ”Å¾?ÃÃ¿â€™Ãœ?â‚¬Ã¾@Ã‚U\nÂµu-â‚¬â€¹RÃª9Ã£Ã°U/S \nU3Â­IEStÂQYJu.ÂµQÃ’ÃµFÂ´o\$&Å’Ã€Ã»i	ÂÃœKPCÃ³6Ã‚>Ã¥5ÂµG\0uRâ‚¬Ã¿u)U'RÂ¨0â€Ãâ‚¬Â¡DuIUâ€¦J@	Ã”Ã·:Ã¥V8*Ã•Rf%&Âµ\\Â¿RÃˆÃµMU9RÃ¸Ã¼fUAU[TÂ°UQSe[Â¤Âµ\0ÂKeZUaâ€šÂ­UhÃºÂµmS<Â»Â®Ã€,RÃ¨ÂsÂ¨`&Tj@Ë†Ã§GÃ‡!\\xÃ´^Â£0>Â¨Ã¾\0&Ã€ÂpÃ¿ÃŽâ€šQÂ¿QÂ)TËœUÃ¥PsÂ®@%\0Å¸Wâ‚¬	`\$Ã”Ã²Â(1Ã©Q?Ã•\$CÃ¯Qp\nÂµOÃ”JÂ¹Ã±XÂ#Æ’Ã½V7XÂu;Ã–!YBÃ®Â°Ã“SÃ¥cÃ¾Ã‘+VÂ£ÃŽÃƒÃ±#MUÃ•Wâ€¢HÂÃUÃ½RÂ²Ã‡â€¦U-+Ã´Ã°VmY}\\Ãµâ‚¬ÃˆOKÂ¥MÆ’Ã¬\$Ã‰SÃ­eToVâ€žÅ’ÃHTÃ¹Ã‘!!<{Â´RÃ“ÃZA5Å“RÃ!=3Uâ„¢Â¤(â€™{@*Ratz\0)QÆ’P5HÃ˜ÂÃ’â€œÃŽÃ•Â°Â­N5+â€¢â€“ÃPÂ[Ã”Ã­9Ã³V%\"ÂµÂ²Ã–Ã˜\nÂ°Ã½Ã±Ã¤Gâ€¢SLâ€¢ÂµÂÃ”Ã²9â€Ã¹Ã‡ÃŒÃ«â€¢lÃ€Â£Ë†â€˜\rVË†Ã˜Â¤Ã[â€¢ouÂºUIYâ€¦R_TÂ©YÂ­p5OÃ–Â§\\Âq`Â«UÃ—[Ã•Bu'Uw\\mRUÃ‡Ã”Â­\\Es5Ã“K\\ÃºÆ’Ã¯VÃ‰\\Ã…Sâ€¢{Ã—AZ%OÃµÂ¼\$ÃœÂ¥FÂµÃ”Â¬>Ã½5EÃ—WVm`Ãµâ‚¬Wd]& \$Ã‘ÃŽÅ’Ã…â€¢Ã›Ã“!RÂ¥Z}Ã”â€¦]}v5Ã€â‚¬Â§ZUgÃ´Ã”Q^y` Ã‘!^=Fâ€¢Ã¡RÃ^Â¥vÃ«UÃ…Kex@+Â¤Ãžr5Ã€#Ã—@?=â€uÂÃŽâ€œs â€¢Â¤Ã—Â¥YÅ¡NÂµsS!^cÂ5Ã°\$.â€œu`ÂµÃœ\0Â«XE~1Ã¯9Ã’â€¦JÃ³UZÂ¢@Â²#1_[Â­4JÃ’2Ã \nÃ \$VIÂ²4nÂ»\0Ëœ?Ã²4aÂªRÃ§!U~)&Ã“Ã²B>tâ€™RÃŸIÃ•0Ã€Ã”
_EkTUSÃ˜Å“|ÂµÃ½Uk_Ã‚8â‚¬&â‚¬â€ºEÂ°Ã¼(Ã¢â‚¬Ëœ?Ã¢@ÃµÃ—Ã—JÃ’5Ã’ÂÂ½JUâ€ BQT}HVÃ–â€˜jâ‚¬Â¤Qx\neÃ–VsU=Æ’Ã”Ã½Vâ€˜NÂ¢4Ã•Â²Ã˜â€”\\xÃ¨Ã’Ã–Ã¯R34ÃGÂ¿D\":	KQÃ¾>Ëœ[Ã•\rÃ•Y_Ã¥#!Âª#][j<6Ã˜Â®X	Â¨Ã¬Ãcâ€°â€¢Ã˜#KL}>`'\0Å½Â¨5â€XÃ‘cUÂ[\0ÂÃµ(Ã”Ã™Ã‘Wt|tÃ´â‚¬ÂR]pÃ€/Â£]H2Iâ‚¬QOâ€¹Â­1Ã¢SÂ©Qjâ€¢Zâ‚¬Â¨Â¸Â´HÂºÂ´ÂmÂ¨ÃŒÃ™)dÂµ^SXCY\rÂtu@JÃ«pÃ¼Âµ%Ã“Ã¿MÂ¸
Ã¸â‚¬Â¨Ã³Âµâ€œÃ–?Ã™UQÂ°\nÃ¶=RÃ¥ar:Ã”Â¿EÃ­â€˜Ã€Â¥-Gâ‚¬\0\$Ã‘Ã‡dÂ½â€œÃ¶]Ã’meh*ÃƒÃ¬Qâ€°Wtâ€žÃ¶câ‚¬Â¡`â€¢ËœAÂªY=S\rÂ®Â¯Â«	m-Â´â€šÂ¤=MwÃ–HÂ£]JÃ¥\"Ã¤Â´ÂÃ„ 
ÃµÃ¾ÂÂ­fÃµ\"Â´{#9TeÅ“â€°Ã™ÃMÃ”cÂ¹Ã±NÃªIÂ£Ã²Ã™ÃŸDÂ¥Å“ÃµÃ™ÃœÃ§UÅ“6Ã™Ã±gÂÃ‘2Ã™Ã—ÃÂÂ¶eÆ’
aÂ­LÂ´â‚¬Q&&uTÃ¥XÂ51Y >ÂÂ£Ã³Ã»SÃ½Ã–Å Q#ÃªIÂµÂ¥Ã•jÂ\0Ã»Å“Â£Ã…W PÃ‘Ã¾?ub5FUÃ³LnÂ¶)V5RÂ¢@Ã£Ã«\$
!%oÂ¶Ã”PÃºÃ‰'â‚¬â€°EÂµUÃÃ”PÂ-â€ Â¶Å¡Â¤BÂp\nÂµF\$Å¸S4â€¦tÂ±UF|{â€“qÃ–Ãˆâ€œ0Ã»â€¢ÃŽUmjsÃŽÃƒÃ¼â‚¬Â²Ã¸Ã½\$Â´Ãšâ€ºjÂâ€¦cÃ«ÃšÂÂÃ¥Â¦Ã–Â«â‚¬Â¿aZI5Xâ‚¬Æ’jÂ26Â®Â¤&>vÅ½Ã‘\n\r)2Ã•_kÃ®GÂ¶Â®TJÃšÃeQ-cÃ®ZÃ±VMÂ­Ã–Â½Â£z>Ãµ]â€¢aÂ¹cÂ£Ã‹cÃ¬ÂÃŸ`tâ€žâ€HÃšÃ‘jÃ6Â¹Â£+kÅ Mâ€“\0Å’>Å’â€žâ‚¬##3l=Ã 'ÂÂ´Â¥^6Ã\0Â¨ÃƒÂ¨vÂ¦Z9SeÂ£â‚¬\"Ã—ÃŠÃªbÃŽÂ¡Ã”B>Â)â€¢/TÃ=Ã¶9\0Ã¹`PÃ \$\0Â¿]Ã­/0ÃšÂªâ€¢Â«Ã¤ÂµÂÂ½k-Å¡6ÃÃ›{kÃ¼Ã–Ã¡[ÂF\r|Â´SÃ‘Â¿JÂ¥ÃµMQÂ¿D=Ãµ/ÃˆWXÂ¢Ã¶Å“Vâ€”aÂ¬'Â¶Â¹Ã©aÂ¨toâ‚¬Â©lÃ¥â€ Â¶ÃXj}C@\"Ã€KPÃ›ÃŽÃ–Ãšomâ€™3\0#HVâ€Âµâ€¦vÃ·Ã‘~â€œ{Å¾Âµ Ã–?gx	n|[Ã˜?UÂ¶Ã¤Âµ[rÃªÂ½hÂ¶ÃžGÂ¸`
Ãµ3#Gk%LÂ£Ãª\0Â¿IÂ`CÃ¹DÃžÃªÂ¸	 \"\0Ë†Å’Ã…Â§Â¶Â°#cNÂ«6ÃŸÃšÂ¹fÂÃ‚Ã”zÃ›Å½ÃªÂº;Ã‘Â¤ÃƒeeFâ€“7Ã™/N\r:Ã´Ã¢QÃ±GÃ•9	\$Ã”Ã³IÃ¸Ã•Â¼ÂºÃŸ]Â£Â®TÃÃ˜WGsÂ«Ã”dWÃµMÃšIÃ£Ã¨Ã‘Ã™fâ€™BcÃªÃ›Â¤ÃªÃµÃ‚Ã·!#cnu&(ÃžSÃ£_Ã•wÂ£Ã¹SfÃ«&TÅ¡Z:Ââ€¦0CÃ³SÃ™LN`ÃœÂ³Yj=Â·Â¶>Ã…Â²ÃƒÃ±Z!=â‚¬rV]gÂÃ»	Ã“Â£rÂµ Ã‹XlÅ’Ã‰-.Â¹UÃ„'uJuJ\0Æ’sÂ­JÂ¶'W%Â·Â¶Â­\\>?Ã²BÃ¶Ã«VÂ­j4ÂµÂÃJ}I/-Ã’ÂrRLÂºSÃ¨3\0,RgqÃ“Â­Ã´Ã‡Tf>Ã1Ã•Ã¯\0Â¥_â€¢â€Ã‡\\V8
ÃµÂ¡ZÃ›tâ€¦ÃcÃ¨â‚¬â€ Ãº<^\\Ã¹llÂ´j\0Â¾ËœÃ¾TÂ¥]CÃÃ”wÃ—ÃŽâ€œzIÂ¶Ã™ZwNâ€¦Â¶Â¶pVWâ€¦jvÂ»YÂ¶>Â2Ã“	o\$|Uâ€¡WÃƒL%{toX3_ÃµÂ¶Ã²Râ€°J5~6\"Ã—Ã£Zl}Â´`Ã”kcÂ­Ã‘Ã®Ã›eR=^UÃ”Å½â€¢Â¥1Ã²Ã‘Â½w
7eÃ˜dÂµÃvÅ½Ã™bÂ=ÂÃ¡\0Ã¹f â‚¬,ÂÂ³mÃ¥Â)Ã•Ã©GpÃ»Ã•-Ã“Â¼Â½)9LÃ½â€œÅ¡>|Ã”Ã« \"ÃŒ@Ã¨Ã»Â¤5Â§`â€ :â€ºÃ´\0Ã©,â‚¬Ã±t@ÂºÃ„xÂºâ€œÃ²lÃƒJÃˆÅ½Â»bÂ¨6 Ã â€¦Â½â€°ÃaÅ½ÃžA\0Ã˜Â»ARÃ¬[AÂÂ»Ãƒ0\$qoâ€”AÃ ÃŠSÃ’Ã¼@ÃŒÃ¸Â¬<@Ã“yÃ„Ã\" as.Ã¢ÃŽÃ¤Ã·V^â€žâ€¢Ã¨Â®Â¥^Ãµâ€ºâ€¦â€”Å“\0ÃœÃˆHÂÃÂ·[H@â€™bKÂâ€”Â©Ãž)zÃ€\rÂ·Â¨Â¤Â¤=Ã©ÂÃ^Â¿zË†B\0ÂºÂ¿â€™Â¤Ã¤NÃ©o<ÃŒâ€¡t<ÂxÃ®Â£\0ÃšÂ¬0*R ÂºI{Â¥Ã­Â®Â´^Ã¦EÂµÃ®Â·Â¸:Â{KÃ•ÂÂ§1EË†0Â²Ã“YÂºâ€¢â€ºÃ /Ã•Ã‘cÃªÃ€\"\0â€žÃªÂ¸4Ã¸ÂÃ‰FÂ7'â‚¬â€ Ëœ\nÃ•0ÃÃ‰`UÂ£TÃ¹Â¤?MPÃ”Ã€Ã“ lÂµÃˆ4Å’Ã“r(	Â´ÃZÂ¿|Ââ€žâ‚¬&â€ Â©t\"IÂµÂ¿Ã–Ã›L w+Ã’m}â€¦Â§Ã·â‚¬Wi\r>Ã–U__uÃ…Ã·63ÃŸy[Â¢8ÂµT-Ã·Ã™VÃ}Â¤xÃ£Ã´_~Ã¨%Ã¸7Ã™ÃŸ{jMÃ¡o_Å¡EÃ¹Ã·Ã˜Ã“Ã«~]Ã´P\$ÃŸJÃµCaXGÅ 9â€ž\0007Ã…Æ’5Ã³A#Ã¡\0.â€¹Ã€Ã¤\rÃ‹Â´Å½Å¾_Ã–Â¢Ã¡Ã€ÃŸÃš%Ã¾Ã¡Ã€Ã€\nâ‚¬\r#<MÃ…xÃ˜JÃ‹Ã¹Â±|Â¸Ã˜2Ã°\0Â¨â€“;oÅ’^a+Fâ‚¬Ã­Â¸ÃŽÃ§Â¬â‚¬LkÃºÃ;Ã€_Ã›ÃÃª#â‚¬Â¾M\\â€œÂ¬â‚¬
Â¤pr@Ã¤â€œÃƒÂµÃ†Ã”Ã¸Ã‚Ã¾ORâ‚¬Â¿Ã±â€“~zÃ‡Ã»AÃNEÂ°YÃO	(1NÃ—â€°Ë†RÃ¸Â¨8Ã˜â‚¬CÂ¼Å½Â¦Ã«Â¨Ã‰n?O)Æ’Â¶1ÂAÃ§D o\0Ã¤\rÂ»Ã‡Â¢?Ã kJÃ¢Ã®â€˜â€œâ€ž\"Ã¢,Å½OFÃˆÃŒaâ€¦â€ºÃ¹Âª-bÃ 6]PSÃ¸)Ã†â„¢ 5xCÃ¢=@jÂÂ°â‚¬Ã‡LÂâ€ÃÃ¨ÃˆLÃ®Ëœ:\"Ã¨Æ’Â»ÃŽÅ Â¤l#Â¢Ã€Ã©BÃ¨kÂ£â€œË†â€ºÅ¾â‚¬Ã–Ã‹@ â€¢NÂÂº:Ãª>Ã¯|BÃ©Å¾Å½Â9Ã®	Â«ÃˆÃ®â€:NÃ½Ã±Â\$Ã¨Ã©SÂ¥ ÂCB:j6Ã®â€”ÃžÃ©â€¢Ã ÃŽâ€°Jkâ€â€ uKÃ°_ÂWâ€ºÃÂ¢ÃƒËœI =@TvÃ£Ã’\n0^oâ€¦\\Â¿Ã“ ?/Ãâ€¡&uÃª.ÃžÃ˜_ËœÃ¦\rÂ®Ã®Â¥CÃ¦Ã¬+ÃšÃ¸câ€ ~Â±JÂ¸bâ€ 6Ã“Ã¼Ã˜e\0ÃyÃ³Ã‘Â¡\0wxÃªhÃÂ8j%Sâ€ºÃ€â€“VH@N'Â\\Ã›Â¯â€¡Ã†NÂ¥`n\râ€¹Ã’uÃžnâ€°KÃ¨qUÃƒBÃ©+Ã­Ëœf>Gâ€¡Â°\rÂ¸Â»Ë†=@GÂ¤Ã…Ã¤
dÃ§â€šâ€ \nÃ£)Â¬ÃFOÃ… hÃŠÂ·â€ºâ€ ÃƒË†fCâ€¡Ã‰â€¦X|Ëœâ€¡Iâ€¦]Ã¦Ã°3auyÃ Ui^Ã¢9yÃ–\no^rt\r8ÂÃ€Ãâ€¡#Ã³Ã®Ã˜Ã¢N	VÃˆÃ¢Yâ€ ;ÃŠc*Ã¢%VÃ <â€ºâ€°#Ã˜h9r \rxcÃ¢v(\raÅ¸Ã¡Â¨Ã¦(xjaÂ¡ `gÂ¸0Ã§VÃŒÂ¼Â°Å’Â¿Qâ€ Â©x(Ã‡Ã«Æ’Ã€glÃ•Â°{â€”Ã†gh`sW<KjÂ°'Â¿;)Â°Gnq\$Â¨pÃ¦+ÃŽÃ‰Å’_Å Ã‰dÃ¸Â¶^& Â¯Å ËœDÃ‚xÃ !bÃ¨vÃž!EjPVÂ¤' Ã¢Ã¢Ã(â€=ÃbÃ‚\rË†\"â€“bÂ¦ÃLÂ¼\0â‚¬Â¿ÃŒbtÃ¡â€š\n>JÂ¬Ã”Ã£1;Ã¼Ã¹Â¼Ã–Ã®Ã›Ë†Â¿4^ sÂ¨QÃp`Ã–fr`7â€šË†Â«xÂªÂ»E<lÃ‘ÃÃ£	8sÃ¾Â¯'PTÂ°
Ã¸Ã–ÂºÃ¦Ã‹Æ’Â¸Â°z_ÃŠT[>Ãâ‚¬:ÃÃ³`Â³1.Ã®Â¾Â°;7Ã³@ÂÂ[Ã‘Ãž>ÂºÅ¾6!Â¡*\$`Â²â€¢\0Ã€â€žÃ¦`,â‚¬â€œÃ¸Ã‡Ã ÃÃ@Â°Ã Ã¡Ã¥?ÃŒmËœ>Æ’>\0ÃªLCÃ‡Â¸Ã±Ë†RÂ¸ÃŽnâ„¢Â°/+Â½`;CÅ Â£Ã•Ã¸\0ÃªÂ½*â‚¬<Fâ€œâ€žÃ¶+Ã«Æ’Ã¢â€žq
 MÅ’ÃÃ¾;1ÂºK\nÃ€:bÂ3j1â„¢Ã”lâ€“:c>Ã¡ÂYÂÃ¸ÂhÃ´Ã¬Å¾ÃžÅ½Â¾#Ã”;Ã£Â´Ãœ3Ã–Âºâ€8Ã 5Ã‡:Ã¯\\ÃžÃ¯Â¨\0XHÂ·Ã‚â€¦Â¶Â«aÃ¾Å½Â®Â¸â„¢M1Ã¤\\Ã¦L[YCâ€¦ Â£vNâ€™Â·\0+\0Ã”Ã¤t#Ã¸\$Â¬Ã†Ã˜Ã˜Ã !@*Â©lÂ¦â€ž	FÂ»dhdÃÃ½Ã¹Fâ€ºâ€˜Ã &ËœËœÃ†ËœfÃ³Â¹)=ËœÂ¦0Â¡ 4â€¦x\0004EDÂ6KÃÃ²Ã¤Â¢Â£Â±â€¦â€\0Ã²nNÂ¨];qÂº4sj-ÃŠ=-8Â½Ãªâ€ \0Ã¦sÃ‡Â¨Ã»Ë†Â¹D
Â§f5p4Å’Ã Ã©Â©JÃ¨^Ã–Ã­â€™'Ã“â€[ÃºÃ¹H^Â·NR FËœKwÂ¼zÂ¢Ã’ ÃœÃEâ€Âºâ€œÃ¡gF|!ÃˆcÂ©Ã´Ã¤oâ€¢dbÃÃªÃ¹ÂxÃŸ\0Ã¬-Ã¥Ã 6ÃŸ,EÃ­â€ž_â€ Ã­Ãª3uÃ¥p Ã‡Ã‚/Ã¥wzÂ¨( Ã˜exÅ¾RaÂºHÂ¼YÃ¹ceÅ Å¡5Ãª9d\0Ã³â€“0@2@Ã’ÂÃ–YÃ¹feyâ€“Å½YÃ™cMÃ—â€¢ÂºhÃ™Ãƒâ€¢Ã–[Â¹ez\rv\\0ÃeÆ’â€¢Ã¶\\Â¹cÃŠÆ’â€ Ã®[Ã™ueâ€œâ€”NY`â€¢Ã¥Ã›â€“ÃŽ]9hÃ¥Â§â€”~^YqeÂ±â€“Â¦]â„¢qe_|6!Å½ÃžÃ³uÃ¯`Å½f Ã•Ã®â„¢JÃ¦
{Ã¨7Â¸ÂºM{Â¶YÃ™â€¡Â©Ã¸jâ€šeÃ†ÃŒCÂ»Â¢S6\0DuasFL}Âº\$Ãˆâ€¡Ã (Ã¥â€Mbâ€¦ÃˆÃ Ã†Â¤,0BuÃŽÂ¯â€¦Ã¬Â¥Ã‘â€š2Ã¶gxFÃ‘â„¢{ÂaÂ¸n:i\rPjÃ½eÃÃ±ËœrÃˆrÃ˜ÃGÃ½BY Ë†M+qÃ¯
Ã§iYâ€dÃ‹â„¢Ã©Â`0Å½Ã€,>6Â®foÅ¡0Ã¹Â©â€ oâ„¢Ã³ Ã¦XfÂ¢ÂÃ¤Ã¹\0Ã€VÃL!â€œÂ«fâ€¦â€ lÃ¡Å“6Â Ã…/Ã«Ã¦Â£1eÆ’â€¢\0â€°>kbfÃ©\rËœ!Ã¯ufÃ²<%Ã¤(rÃ‹â€ºÃ¹a&	
Ã½â„¢Â¨Ã Yâ‚¬Ãž!Â¡Ã’Ã±â€“mBg=@Æ’Ã\rÃ§; \rÃž5phI 9bmâ€º\$BYÃ‹â€¹Ã¿Å¡Ã„gÂxÃ§#â€°@QEOÃ‡Ã¦m9â€“Â®Ã‹0\"â‚¬ÂºÃ§!ÂtÂ¨ËœÃªâ€ Ã‹â€°Â¸Â®Ãâ€¡Ã§O* Ã…Ã¥Ã¿\0Ã‚Ã>%Ã–\$Ã©oÃ®ÂrN&s9Â¿fÂ£Å¾4Ã§Ã¹â„¢gÅ Ã¤~jMÃ¹fâ€ºwyÃ¨gâ€ºyÃ­\\`X1y5xÃ¿Å’Ã¹Å¾^zÃ¯_,& kÃ‘Ã¦Â¢Ã©|Â¡â‚¬Ã€Â¦1xÃ§ÃAâ€˜6Ã° \nÃ®oÃ¨â€Â»Å’&xÃ™Ã¯ggâ„¢{râ€¦?Ã§Â·â€ºÃ¼-Â°Â½â€¦Â®|tÃ¤3Â±Å¡Ë†ÃˆÃ}gHgKÂ¢9Â¿Â¿Â¨ÃµJÃ€<C CÂ° 1â€žÃ®9Ã¾7â€¡ÂgÃ·Å¡â€šÃ¯h6!0HÃ¢Ã­â€ºcdyÂ´fÃ¿Â¡DA;Æ’â€š9â€¦TÃ¦Â¢Ã¿Â®0Â¬Ã„\0Ã†pÃ˜Ã Ã¹â€ Â!â€¡ 6^Ã£.Ã¸SÃ‚Â²?Ã†Ã˜Â¦E(PÂ­ÃŽË† .Ã¦Ã‚ 5â‚¬Ã„hÅ Ã©Ë†EPJvâ€° .â€¹â€¢Â¢+â€”\$Ã§5ÂÅ’>P+Âµ?~â€°Â¡gÅ’6\rÂ³Ã¶hÂ¢Â¼pÂ«z(Ã¨â€ WÃ™Ã„`Ã‚â€¢Â¨Â±\"yÂ¯Ã±Ã:ÃFadÃ…Â¬Â6:Ã¹Â¡fËœÃži\0Ã¬ËœÃÃ˜Ã A;Ã¡eÂ¢Â°Ã Ã¬Â¬Ã§^ÃŠÃ–wÂfâ€ž >yÃÅ½Å Ã‹Ãµ`-\rÅ Ãšâ€¦Ã¡\0Â­hr\rÃŽrÂ£8i\"_Ãš	ÂÂ£Â£Â¼9Â¡CIÂÂ¹fXÃ‹Ë†2Â¦â€°Å¡\"ÃÃ…Â¢â€°â€¦ Ã¸hÂ¢L~Å \"Ã¶â€¦Å¡%Vâ€¢:!%Å Å¾xyÃ¨izygâ€žvxÃš]â€šÅ¾Ã†}qgÂÅ¾Ã„ÃƒZ
iÅ’Ã¤|Å’Â`Ã‡+ _ÃºgÃ¨Ã²Ãºâ€ â„¢Ã™Â£Â¾ÃºÂªÃ‚Ã€Ã‚Ã¨Â­Å¾6PAâ‚¬ÃŠâ‚¬\$Â¶=Â9Â¢Å’Ã¹Ã Ãhâ€¹Â¢|pâ€™ Ã¿Â¢Ë†Ã©ËœÃ­Ã¨!Â¢Å½.Ã¸!â€Ã¾Â¶Å¾Ã¼iÃ§Â§^Å“Ã¸ÃšiÃ‹Â¢Å½8zVCÃŒÃ¹Ã¶Å’Z\"â‚¬Ã¦Ã¤Ã˜(Ã„Â¥â€ºÂ¹Â°9Ã¨U)Ã»Â¥!DgU\0ÃƒjÃ¿Ã£Â¿?`Ã‡Ã°4Ã£LTo@â€¢BÂÂ¤Â§ÃºNâ€ aÅ¡{ÃƒrÃ§:\nÃŒÅ¸â€œEâ€žÂ»8ÃƒÂ¦&=ÃªEÂ¨*Z:\n?ËœÂ¨gÂ¢ÂÃ¨ÃŒÅ Â£â€¹hÂ¢Ãµ.â€¢Ëœâ€™ NÃ¾5(Ë†SÆ’hÃ‘Ã´i2Ã–*câ€žfÃ½@â€¢â€œÃ‘Ãž7Â¦Å“z\"Ã¡Æ’|Ã–ÃºrPâ€ .Ã‡â‚¬ÃŠL8T'Â¿Â¸kÂ¢Ë†ÃŸ:(Â¹q2&Å“Ã†EDÂ±2~Å¾Ã¿Â¿Ã˜Â±Ã¾Å“Å’Â¬Ãƒ9
Ã»Ã’Ã‚vÂ£Â©Â¼8Ã¿Æ’ÂÂ©â€“ @ÃºÃ©^X=X`ÂªÂqZÂºÃQÂ«Ã–Â®`9jÃ¸5^Ë†Â¹Ã¥@Ã§Â«Â¸ÃŽnÂ¼qvÅ¾Â±Ã¡Â¨3Â±ÃšÃ‡Ã¨Å (I6Ã°ÂªjÅ¡dTÂ±ÃšÃ‚\\Å  â€šÅ¸3Â¢,â„¢ÃhÃ©kÂ¢3Ãº(Ã«3Â¬â€˜â€˜PÃ’uâ€¢VÃ|\0Ã¯Â§â€ UÃ¢k;Â¢ÃŒJQÂ¶Ã£ Ã©. Ãš	:J\rÅ½Å 1Å¸ÃªnÃ¬BI\r\0Ã‰Â¬h@ËœÂ¼?Ã’NÂ±\nshâ€”Â®Ã¥\"Ã«â€™Ã²;Â¦r~7OÂ§\$ Ãº(Ã£5Â¤RÃ…Ã¨Ã†	
Ã¨ÃŠÂ½jÃ‚Ã®Å¡Ã˜FYF Å¡Ãœâ€Â£Â«~â€°xÃžÂ¾Â©f Âº\"Ã£â€ vÃ›â€œoÅ¡Ã«Ã‹Â¨ÂºÂºÃ‚Âº#Å’ÃœaÃ’Ã¨Å ÃµÂ¶Â®Pâ€œâ€žÃ‹<Ã£Ã¡hÂ£-3Ã©ÂºÂ/GÂxÂ®ÃµÂ²ÂnÃ‡i@\"â€™Gâ€¦?ÂÃ³Â¤,Ã¯ZpÃ–xX`vÂ¦4XÃ†ÃµÃ³Ã Ã»â€ž[Æ’IÂ¶Å“7Å¾ÃƒÂ¥X
c	Ã®Ã…!Â¡bÃ§Â¢}ÃšjÅ’_Â¾Â¥9Ã¡5qtiÂ¦6fÂ»Å¾â€™Â°Â¸ÃÃ™Å¾5Ã¿Ã»Ã§ FÃ†Â¹Ã£iÃ‘Â±Â©pX'Ã¸2Â¡Å½rÆ’â€žÂ®0Ã†Ã†ÂºÃ©Â§D,#GÃ«U2â‚¬ÃŒÃ˜ÂÃ¢IÂÃ¨\rl(Â£â€” â‚¬Ã¬Â±Â£Â¦Â¨=ÃAÂ¸aâ‚¬Ã¬Â©Â³-8â€ºdbSÃ¾Ë†Ã»Ãµ4~â€šÃ´â€”H;Â°Ã‚Â­0Ã 6ÂÃ‡bÂÃ©{Âªâ€žÃžÂºRÃ¦Ã¨Ãƒs3zÃ«Â¯ÃƒÃ€ÂÃ¼NÃ°Ãžâ€žÂÅ½`Ã†Ã‹â€ +Ã²Â¦Â­ 4<Ã¸^aÆ’yÂ°Â¬â€	}rÂ°Ã‚Ã¢yÂ´ÃµÃ£Ã¡Ã»Â¸kÅ’&4@Ë†Ã?~Ã”Ã¤Ã…cEÂ´Ã‚ÃˆÂ­@Ë†LS@â‚¬Å’Ã©z^ÂqqNÂ¦Â°</Hâ€šj^sCÃ¢`Ã¨Ã¦sbgGyÂ¹ÂÂ¤Ã–^\nÃˆNÃ³\n:GÂ¶N}Â¼c\nÃ®ÃšÃ•Ã­Â¤ +Â£â€ Ã¯=â€ pÃ™1Âºâ€™NÂµTB[dÃ€Ã¿Â¶â€“Å¡Â¶Ãâ€¹Â¢Â¾ÃœÂ¹Ã±`Â³nÃšoj;Å¾jÃ„â€ºwhÃ˜ÃµÅ¾â‚¬c9Æ’â€špÃŒÂ¡[y4Â«Â¨Â¶05Å“Ãâ€¹NÃŸÃ+ÃŽÂ¿Â·Ã`XdaÃ¡ÂÃ¦/zn*Ã¶PÃ€â€¡ÃªÃÂ¸#tÃ­ Ã¨ÂµÂ¸~Ã 9WÃ®	Å¡VÃ¢Ã²~=Â¸#Ã™Ã¹n)Â¨Ã®Â´Ã®	2ÃœÃ‰;â€¦j:ÃµÂ°JÃ¡kâ€žCÂ¸!>xÃ®Ã¹5Å¡Â£==Â¦2Â»â€”â€š. 
Ã£|Â¿'Â¨Ã®Ã¤[â‚¬ÃŒ'â€”;Ã¼ÃšvÂ½Ã¹Â«â€“â€œÂ¸â€žÂ®Ã·ÃŽÃ«ÂÃŽ;:SA	Âº&Ã[Â£meâ€ ÃªÃ£nÂÂ±Ã«ÃºÃ»ÂªÃ®â„¢Â«Ã‹ÂµÂ¦Ã„â€¢<Å¸Âº6maâ€˜=Y.Ã§Â¥Å¾Ã€Ã…:gÂ¶Ã”Ã¾Ã‰Ã¨â€¦â‚¬Ã¹Â°Å¾Ã;Â«IÃŸÂ»xÃ…[â€Ã©IÂ¡J\0Ã·~Ã‚zaYÂÂ®Ã­ÂºÃ®Ã¼wT\\`â€“Ã­V\nÃ†~P)Ã©zJÂ¾ÂÂ©Ã¦Â½Ã¼Ã±Ã°Q@ÃÃ [Â¶{rÃŠâ€°ÂµDÃ®
Bâ€žvâ€”Ã¯|i-Â¹EÃ¦Ã¸KÅ’;^nÂ»{ÃªÃ³Â½Ã¥:Nh;â€“â€”Ãš2ÃÂ¨Ã†â‚¬pÃ§Ã‘Â´6â€œÃºÆ’Â»Ã§Â½Ëœ9Â§9Â¡Â¥Ã¶Ã–XÃ‚hQÅ“~â€”Ã›Ã›iAÅ¸@D Å¡jâ€¡Â¥Ã®}Ã‘ozLVÃ·Ã¯Ã§Ã‘Â³~Ã¹â€¢Å¾	8B?Ã¢#F}FÂ¾TdÂ­Ã«Â»Ã¡ÃeÂ±ÃƒzcÃ®Ã§Å¸FÃ…Ã€Å gâ€š7ÃŽâ€”Ã›ÃªÃ â‚¬ 6Ã½#.EÃ‚Â£Â¼Ã¡Ã€Ã–Ã‚Â£Â¥Ã°SÂ£.J3Â¥Ã¶5Â»Â¯KÃ‰Â¥Ã³Jâ„¢Â§Â¸;Â¤â€”â€žn5Â¾Â¾:ySÃ¯â€˜Ã€CÃ›voÃ•Â½.Ëœ{Ã±Ã°	d\\0Ã«?W\0!)Ã°'Å¡Ã»Â¼Ã¨EgÃ¡;Ã +Â»Â\0Ã¼
Y NtÅ½bp+Ã€â€ cÅ’Ã¸â€œÃ¾Â£\0Â©B=\" 
Ã¹câ€ TÃ±Â:BÅ“Â±ÃÅ¾Â¤ÃºcÃ°Ã¯Ë†Ã¾Ã®Ã†Ã¯Â¸Pâ€˜IÃœÃˆDÂ¸Ã‚V0ÃŠÃ‡!ROlâ€°OËœ
N~aFÃ¾|%Ã‰ÃŸÂºÂ³Â¸Â¬â€¦Ã²)OÃ¹Â¿	ÂWÃ¬oÂ´ÂÃ»â€¡QÃ°wÂ¨Ãˆ:Ã™Å¸lÃ©0h@:Æ’Â«Ã€Ã–â€¦8Ã®QÂ£&â„¢[Ã€nÃ§Â¹FÃ¯Ã›p,ÂÃƒÂ¦Ã¥@â€¡ÂºJTÃ¶wÂ°9Â½â€ž(Ã¾â€ Å“<Ã©{ÃƒÃ†ÂO\rÃ±	Â¥Ã Ã¹Ãšâ€š\$mâ€¦/HnP\$o^Â®UÂ¡ÃŒ\"Â»Â¿Ã£{Ã„â€“â€¦<.Ã®Ã§Â¡â€¹nÂ¥q8\rÃ•\0;Â³nÂ£Ã„ÃžÃ”Ã›Ã°Ã§Â¡Å¸Ë†+ÃŽÃžÂ³3Â¢Â¼n{ÃƒD\$7Â¬,Ez7\0â€¦â€œl!{ËœÃ©8Ã·Ã¡Â¶xÃ’â€šÂ°.s8â€¡PAÂ¹FxÃ›rÃ°Ã„Ã“Ã´QÃ›Â®â‚¬Â¹â€ 1ÃŒâ€¦Â¸p+@Ã˜dÃ”Ãž9OP5Â¼lKÃ‚/Â¾â€˜Â·Â¾Ëœ\\mÃ¦ÃºÂ¸Ã„sâ€¡qÂ» Ã®vÂºQÃ­/Â§Ã¿Ãœ	â€ž!Â»Â¶Ã¥zÂ¼7Â¾oÅ“Â¿EÃ‡â€ Ã’:qÃ V 5Ëœ?GÂ¡HOÂ®Ã¢Oâ€ \$Ã¼lÂ¾Å¡+ Ã¢Â,Ã²Å“\r;Ã£Ã§Â°Â¾Â¤â€™~ÃŽAÃ„ÂÃ©Å’Â³Ã©{Ãˆ`7|â€¡Ã¿Ã„â€šÃ„Ã Ã«r'â€°Â°Ji\rc+Â¢|â€”#+<&Ã’â€ºÂ¹<W,ÂÃƒ>Â¢Â»^Ã²PÃ°&nÃ‚JhÃeâ€¡%dÂ¶Ã¦Ã¬Ã¨ÃÃœCÆ’iÂ¶zXÃƒAÃ¿'DÃ>ÂÃ‰ÃŽË†Â¡EkÂ£ÃŠÂ¬@Â©BÃ²w(â‚¬.â€“Â¾\n99AÃªÂ¯hNÃ¦cÃ®kNÂ
Â¾d`Â£ÃÃ‚p`Ã‚Ã²Â°%2Ã¶Â¦Â½3Hâ€ Ã‹b2&Â¨< 9Â¤R(Ã²Ã€â€¡tÃ¡THÂ¬	Ã zâ€˜Ã–'Å“Ã— ÂoÃ²Ã€â€¹>4?Ã”\rZÃŒwÃŠÃ“â€šÃ¤Ã—4Æ’`ÂºÃˆÃâ€¡Ã©Ââ€ ÂµÂ³Nâ€¡Ã±Å¸Ã©Ã“â‚¬Ã®Å¾'-IÃµÃˆÃ¬â€ Ã·0(SÂ¨rÃ˜w,Ã¼Â¹ÃÃ¥Ã‹KÃŠrÃÃŒ'-2Hlo-ÃUÃ²Ã¡Ã‹Ã¢_â€™'W#'/Ã¼Ã‰HÃ–Å¸Â¤ÂÂ®j6â€œÃŒâ€°ÂÂ¡Â¡Ã‰Ã ÃˆÂ«ÂÂ¶\0Ã©â€ž<â€˜â€žÃšÃºÅ’Å½j1Â¤Eâ€™QÅ’TÃœTÂÂ­Ã†rÃBcmÃ­16Ã£ÃË†gÃ™Â«:w6ÃÂ¯â€ºh@1Ã…I:Â¤ÃƒÃâ€™Ã‰Ã¾2Ã³pÃ²â€™L/ÃŽÃÅ¸Ã‚ÂÅ¾wÃ¿:Ã²Ã…â€˜Ã“ÃŽÃ¸K<Ã°ÃŒE<â€šÃ¾JÂ­76Ã“â‚¬ÂsÃ—.ÃŒÂ²sZÃ³ÃŸ/\$Ã·AsEyÃÅ“Ã rÃšr:w?Ã•â€°â€!Ã?Â³Ã¡ÃªÃ‡â„¢ÃZâ€œÂMÃ9Â»Ã•Â\0ÃÃ1?ARÃÂ¦%Ã7>Ã–MÃ‡ARr}sÃ©â‚¬Ã±r)\\t-8=Â³Ã¶ÃÃ‹ÃÅ½UÃ½Ã‹,WOCsÃ•â€ â€žÃ#wÂ½5Â®Ã¡Â¯ERlM*Â¯DÂ³Ã§1Ã»Ã‘>]ÃÃ€gKÂ¤Â²VÂ¹\nÃœ\\Ã¨ÃœÃ“sË†Ãœâ€¡8ÃÂ¹seÃÂ§9ÂÂ­soÃŽ~â€ž Ã¬Ã³w4xÃ Å’ â€ â€™Ã±f@Ã—ÃÃœDÂ­Ã¶9â‚¬â€¡ÃŽÃŠ6Â¬Â\0	@.Â© Ã®ÂÂ²@Â´9\0Å C;KÃ´Ây+Ã“JÃ°â€œÃœÃ™Â¥Æ’Ãu<\\Ã»`Ã²c{Ã“â€¹Â¤EÂ£>Ã¿yÅ½ÃJ=lÅ’Ã¼Ã¯Ã¡/â€¦-â€”7ËœÃ¾â€ÃZ46Â¨uC5â„¢â€˜PÃ§ÃŽÂ©Â´RVÃÃ²Ã¦Â¡ÃœÃ¡ÃÃ½ÃŠÂ³lVÃ¸Ã’aNxÃ»`Ã•Â´?UÃ›7(HPâ€œ}jVÃ˜JÃ«zNQJÃ·Sâ€“Â¸ÂÂ±s-gQ!aÂ¥VÃ˜_SwRÃ½OÃµ3amâ€¡ZXwZÃoâ€°'ÃwaÂ­â€°Ã–OÃ˜oZÂµâ€œÃµ!Ã™[\n<Ã´Zâ‚¬ÂµOÂ¥Ã’Â¶'Ã‡Ã…OmoÃ·[Ã—Ã“aÂ=QÂºÃ¤>â€š:ÃµÂTÃ\nÂµÅ½Â¨Ã§\0Å =â‚¬Ã½mÃ—jÃºâ€“ATÃƒRÃ…bu(ÃˆIÃ—Â´Ã¨:Ã¥Ã—\$vÂ¾WÃµÃ—ÂµÃƒÃ°uÃ…SÂ¿\\V8Ã˜Ã§vÃ§\\Ãµâ€¢Ã—g!MÃÂ¶Â¦uÃ…Ã–_Âµ&Ã–isÂ¿\\CÃ¿RÂVMÂ¢]tXÂT7\\UoTÃ—Ã˜o_Ã”Â¯Ãâ€ºS?aÃ”lÃˆSÃ˜-LutZGeÃ‡Ã•Ã¡i`	}XZâ€¹i}Qâ€¢yW[iÂ­â€¦TÅ Ã¶YoÂÂ¦ (ZE\\Â¨}nÃ™Âiâ€”fâ€“â€˜Ãšâ€¹Ã™ÃWÃ—dÃ‘%TÃ½pu3uÃTÃ½f5)vË†Ã›]Ã•UR3VEY]Â¥XÂ¸\nÂ·^Â½Â§VqSÂ½SÃ½}XÃ©iGfâ€¢Ãšv>Â­SÃ½â€švÂ»JMQÂÅ¡vÃšâ€¢Å Ââ€¦Ã”Ã™\\â€¢g]Â´QYEâ€œÃŽÃÂµ#1VÃ¿l5UÃ˜EK]Ã•Ã‰\0Â³Ã˜ÃSÃ½ÂU?\\ÂºBwSâ€¢UÅ 7â€“Â´Ã•mZÂ½V5\\ÃµÂ¹WfÃ½Ã‚Ã•Â§[Â¥eUrÃµ{G \\ÂµÃ½UÂµÃš,â€žÂÃ‰Ã¶â€˜Wâ€¦[]xÃ¶â€ºVÃ—j5mTÃ¯VÃ—jÃ~u7Ã˜\0Ã»VÂ¦UÂµÃ˜'tÃ½Â°w?msÃÃ•Ã”Ã‰Ã›5VÃÃƒvÃÂq}Ã™Ã¶Ã¡Ãu-UqÃ•]Ãâ€”c]ÃšWÃÃ˜Ãµ]Tt:Ã­fÅ Mâ€kÂÂ¶â€œe]Ã®Â¹[-p}^Ã”I[Â©XDÃ£Ã©ÂºÃ¥YÂ¿Vâ€”dÃµÃ€Ã½O]	seNÃµÂ£ÃœÃŸZÂ¯WYÃš[Ã•tâ€¦ÃˆV?Ã²3ÃžÃ‡ÂµÃŸMâ€œÃ¶Ã±Ãâ„¢`ÃÃ»t^wÂ£dÂ²:qTÂLâ€¢@@>]Ãj\rFÃqvÂµÃ-LvÂ´GÂKwiÃ´LwIPMoâ€Ã¹Ã‡Â¹MgvÂ½Ã¿Ã¸[Â§ÂUssÂ¦Å½~	Ã¨Ãµâ€¦w:BÃ¢Aâ€˜Å¸Ã‘NEÃ¹{Ã¤!-Ã”ÃƒdÃ½Å¸Âo\0Â´â€™}&Ãž
Â­ÂÂhXÃ•ÃŽAÂâ€“5Âµ%Ã™Â£fzLÃ–HÃ™5dÂ­â€ Yâ€¦_%â€¦vÂ´Ã“â„¢!mÅ¡Ã’]Ã–Ã«â€¢Ã˜Ã’ÂÃŒ%Ã¼Ã±ÃŸÃ²â‚¬Ã¾Ã¥=BÂ©>E [#^}Ã¶hYFÃ›aÂ·ÃŸÃ†>{Â¡gSâ€¦Â¶Ã°p[Ã¬FÃ·Â¦ÃDaÃ«6nÂÃ¦Â´Ã€Â¶x9Â«Â¥8LÃªIÃ£Ë†Â«Nâ€“a=Ë†SÃŠ@ÃºbPkÂ¦.â„¢Ã¡NÃ²Ã¸HÃ¹â€l\0Ãºâ€ :Ã Ã°Ã¨â€“Ã®Å Âº2#Ã§ÃŽËœ;Â¼Ã­Â®vÃ¸O}â‚¬9ik]	&Â®{Ãµâ€° Ã¸Â«Ã•Å“Ã™2|aâ€”Â·&Ã³ Ã£Ã”Ã‡Ã¥Ã¿ÃžQÂ½Â¥ÂªÂ±ÃŒÃ®ÃŽÃ§Â¨)Ã‰Ã±ÂµoÃ™Ââ€œÃ‡Â¸:Ã©&.\0Â¶5q\0JÃLÂ½Ã©â€š64hyâ‚¬3Â®ÃžÂ¢Â«Â¹ËœaÂ®ÃžÆ’Ã¹â€šIzâ€ ÃOâ€šâ€”â€“Ã±â€žÃ¦Ã¯Â®Ë†\"Ã¡Â¶yBÂ»ÃŠÂ³{Âª3Ã†%Ëœ5r(mÃ˜ÃˆÃ Ã‚Ã¡Ã‡x.7rÃ’b%Ãâ€¡Ã¼^ eâ€ Mâ‚¬Â»Â¢2Â®\0xâ€”Â½!â€°b}.Â®Ã¢Y6\$qSâ€Ã\"^|xEâ€¦Ã¤ÃˆÃ¸aÃ£Ã¾â€˜Â¼Ã€â‚¬Ã«XÃ‡Â¡5â€š9â€ Å¾'Tâ€šR	Ãƒc9Ã„Ã£Ã¨WÂ¢1ÃŸÃ¡Ã‘AÃŽâ€PÃ­Â¦ÂÅ¸Ã˜Âh6'ÃžoÃ²-Ã Ã–Ã‹p
ÂµÂ¾T(\nn\rÃ‹Ã…Ââ€œÃ¥1Ã”Å½â€žRÃ¯RUgÃ›Ã©Æ’ÃˆÃ¾â„¢â€œÃ§xÂ¨â€¢Pe#Ã®Ã©*Â¤Ã¢kT<Å¸<Â>b;â€¹â€œ\0Ââ„¢ÂÃËœgLÂ½.Å½<kÂ©ZvÃ¡ÃŒâ€žÃ¸Â¯Ã³zÂ³Â¶Ã†8~Â¬Ã°y7â‚¬YÂ¸Ã¯ÃˆÂÃªÃœ7wÂ¨Ã¡O dnÃ’>Â¤<â‚¬Ãºâ€ºEÃ©3Ë†Â¦wSâ€Ã›â€ Å“@Â¾Â¡Ã«Â® oÃ´WÃ…1â€¦Ã±ÃºÃ±Â¾Ã’ÂºÂ¿zÃ£â€°eÃ­ÃžÂ½Ã¨Â±Ã¥1ÃË†zÃ·\0f=Ã˜Ã¹cÃ£Å Â¤gÂ¹Å¸{Ã©Ãž>nÅ’p\0Â±ÃÃ¨ÃŽâ€˜:HÃ©â€ BnÅ’6FÃ¨Ã†BÂ¯rÃ§W=Ã¶Ã£C>M.1~@3ÂºGÃ­9â€¡8Ã·q<SÃ´|Ã»Yâ€¢8QPÃ¢Ã»`L[Å¾Å¾Ã–qzÃ§ËœÃ›Â«PÃ‡Ã­Ã¨NÃ <{_-Ã™Â®Â¥dÂOÂ¸Ã¹d-Ã®NB7ÂÃ¤4ÃÃ®BÃ¹
NÃÃ­.VÂºÂ·Ã§9Ã†Â¨ÂQÃ¸3ÂºÅ¾{IcP\$Â§Â»ÂºhÃ»Â¾<R yyâ€¦Ã¬?ÃžÃ²ÂGÃ’Ã¾:nâ„¢Ã£â‚¬ÂµÃ´gÃÃÅ“Ã¿;Ah!Ã¥Ã”Ã¾Ã&Ã¥Â»+>Ã°Ã‹â‚¬Ã›;MÃÃ‹Å’Ãž	ÃÃ¾Ã¾ÃƒÃ¯Ã¿6SÃ¢Ã®Å Â·NÂÂ¸ÃšÅ’=#Ã±Ã«Ã«Ã±Â³Â±`Ã¼TÃ¼#+Ã¬nÃ»;â€¢Â·r,â€šÃ‡Â½Ã°Â¦ÃX|#Ã¯Ã„\rÃ¼# Ã¯Ãƒ?\nÃ¼D>Â¨|VÃ¼SÃ±Â¿Ã‚ÃšeÃâ€”~JÃ£m99â€¦Ã¡Â¾\nsÃ†{S|r],~Ã¿Ã‹Â¹Ã±Ã¸Ã©Â¿ ÂµqÃIÂ?\"|wÃ±Â¦Ã¸Ã¿%|Å’jâ€˜\0rEÃ²,kSnÃ¼Â¡Ã­Ã§Â¿Ã¸qÃ†â€¢Ãˆd8B.Ã»Ã±â€¡1Â«Ã‘Ã¼Â³\"â„¢ÃŸ/|Ã†Â´â‚¬Ã˜Æ’]Ã²Ã¼Ë†Â¸Â­â‚¬Â·EÃ¼ÃÅ“Ã¨NÂ²lÃ¼ÃŒÃ•Ã†xÃ–Ã‹IÂ°Ã·Ã IcÃ³Â¿Ã…Â¸.|\$8DÂ¹Å¸FÂ¨ÃÃŒâ€œâ€¦ËœPÃ•KÃ†Ã²â‚¬3Æ’Ã´\\jÂ¾Â¥xUÂÃC/Ã¤Ã£Â³Ã’â€”Â¿
A{Â¹Å½Ã€ÃÃ»Ã¾eÃ¼ÃšÆ’Ââ‚¬Ã¿Ã“Ã¦Ã—
Â¶Ã©ÃœÂ¾Ã¿Å Ã•Ã´Ã \rpÃ½U\nÃ§Ã•Å¸WloÃ‚Â­YÃ¢{Ã¿Ã´ËœÃ£`]'Ã–Ã¾Ã½sÅ¾â€ Ã•/|Â¼oÃ¯Ã¿Ã—Ã 3Ã§Å½Ã€rÅ¾Ã¼}â€¹Ã¶;ÃšÃ¿[ÃŠnÃŽÂ¹Ã»Ã¿ÂºÅ¾â€”Â¿OÃ­M7Â¯
Ã›Ã‰ÃŸÂ£Ã˜Â¼qÂ¾Âµq(ÃÃ_lÃ¢qÂsÂNÃ·â€œyÃ²Ã»Ã±Ã„Ã§Ã•;Å’iÃ€gÂ¿tâ€”â€¡Ã…ÃŽ:Ã¿Ã½Ã¥ÃˆÃ«Ã•â„¢Â§qk â€¡Â¿Ã­Ã´Ã¡{Ã·Å¸ÃŸ?zÃ½Â¿Ã·ÃÃžÃ»ÃªÃ±MÃˆâ€”ÃŸoÃ½Ã¬'Ã jËœÃºÃ¯Ã¡â€ Ã£cÃ¸yÃ±ÃŸâ€žÃ½Ã£Ã¸gÃŸâ€¡gkÅ’wÃ‰Ã¢f8Â¼VcÃ”7fAÃŒÂYâ€˜Â³Ã¥+KxÃ±â€¦=Å¾gKAkÃ¾T,95rdÃ£+Ã¹GÃ¥Ã€ÂºÃ­Ã™Â¯â€žâ€¦Ã±Ã¾[Ã’Ã %Ââ€¦AÃ…wÃ¦Å¸Å¾ÂµÃºâ€¦Â½Ã¥7Ã¹ÃŸÃ¥Ã Â¬â€¦Â£%Â· {Â½mÃ­Ãº8%_â€Ã¾mÃºâ€”qË†Ã VÃ‹Ã‹Â¨_ Ã¾â€œ%Â«!Ã¾EÆ’ÃºÂ¼iÃ¸~â€˜Ã¹Â²h Ãº~Â»Å¸CÂªÃŸÂ­~Â§Ã¹Â¨%Å½â€ â€žÂ­Âµâ€”Ã§_Â¨Ã¾Ã™ÃºÃ¥Ã¿Â·rLkDÂ«yÃŒÃºÅ’Ã°~Ã”?p1O!?Â¿ Â®vÃŒ\\Ã¯Ã¤Â±PmÂ©\"Â¸ÃŒ<Ã»Å’Â¯Ã¯Å¸Ã…ÃºEÂ©6â€¦ Ã¤EÅ¸ÂVÃ°Â³Ã¥ÃŽÃ±Å¡zkÃ®Ã‡ÃºÂ¦9Â³z Ã‰
ÂªÃŸÃ~ÃŠ/Ã¬Ã¤Ã•ÂºÂ¬Ã©!Qâ€¹>Ã¿ OÂ£Ã¥NmÃ¨Ã°3rË†Ã§ FÃºËœlâ€˜Ã’Ãºe;Â¤MÃ£ÃŸÂ·â€¦Å¸ÂºÃÂ½Å¾_a Â´!~CÂ»Â¼fâ‚¬ÃºÃ¥Â¼b}3Å“ KÂ¼fÃ¸ÃœÃ­. 	Ã™Ã¤}.Â©Ã¾Â»Æ’DX	i5Â¿|ÃºÅ’?Ã°Ã€=\0ÃµÂ±?Ã¯?Â»Ã¸?Â£Ãž@Ë†Ã¿Ãƒâ€¢Â£Â½fu~aÂ^â€™Ã˜nÃ»Ã¡ÂªyÂ±Q;Ã¯ qÂ¹ÃŒÃ Å’Ã¾)â‚¬sâ€™SÂ½,\"Gâ€ \nu%ÃŠÃ‡UÂ­YÃ¯AKl\nÃ“Ã«BÃ˜IÃŠ86VCcO\0Ã–`}.xÂ©Æ’Ã®â€ž,-NÃ¡â€¡@~ÂºÃ¨Å“TÃ¿Gâ€ºÃ§Ã¼â€“'Ã¼Ã„dÃ›JÆ’Ã·â€šÅ¸Ã†y1Æ’zlâ€¡Ã¡Â½ÃƒÂ¦fÃ·gÃµÂÂ·Ã¹AB aÃµ!Ã¾Å’M\\<Æ’gÃŠÆ’Ã½z4Ã†Â¿Ã¬Ãœ@/Â³ÃžCÃœÃƒâ€šÃ¬@Ãµ	Â¯QqÂÃ·Â)Â¤Ã»xÃ¤Ã/Ãƒ.7inDÂ±#=Ã€ÂÅ“ *79cÃ‚FÂ²Ã‹Ã‘d2(Â¶ .Ã€Vâ‚¬Ã€3ÂµÂ¿Ã¹Ãš\$g`Ë†AÃ¡Â§â€¹rl|Ã¸mËœÂ²ÂÂ¶bÂ§â€š/Â¯qEÂ²â€ºÃ•ÃƒÂ´ !ÂbU@Å“Â¿9iÃ¢;ppÃŠdÃ­Ã­Ã›Ã—Â¤=Ã°1Ã¹yâ€“xÂ°xÂ	â„¢=â‚¬v=Ã¸Â®(vÂ±Ã¯Â¬s_Å“Â³BoÃ²ÂÃ‰â€šÃ£Ã–Â#Ã K\r nÅ½Ã±Ã®Ãˆ\\â€”# Ã›fËœPXÃu-3&Â«	Â½â€ºJ&,FÃŠ(9Â¶ÂvÂ´0
Ã&@khZÃ²yÂ¶
gÃ®CÃ”â€¹â‚¬z Ãâ€ÃƒÂÃ£Â¦hi=Â¡s9TÃ±Ã‚ eT>gÅ’Ã‚3Ã«dÃžtFÃ»Ã¶2b&:Â¾Ã°\0ÃPÂ¡Ã·â‚¬Bâ€“Å¡-Â¹QÃ‹Âº8~Ã”LSÃ†MÃ Ë†â„¢ÃšÂ·cgÃÃŽÃ°Th'Ã²f(Ã‘Â³Ã\$Â¨.EÅ’Â«Â§VLÃ€Â°Â·Å“AÃ½IÂ¼Ã£ÃƒÃŸÅ’Ã±â€ Â¹Â¼rÃ¢Â¦ Ã£ÃªgÃ›\rÃœÃ™Ã£0Â§
Â¶Å“â€š Ã«TÃ«ÃŽ1P`1â€™dÃ”Ã¢Ã´Ã•Ã„\rÂ¦4Ã¢ÃÃš=6@FÃ¼ÃÂ¼Ãˆ FÂ±ÃŒÃ±Å“=Â¿Ã‰â€š6ÃAÂ¾ÂÃ‚>Ã¥NÂ¥AVÃŸ	Ã¨Ã™Ãš(\$ÃŽA/Â¦Â·Ã˜ÃšÃµÂ¦
; Â¦Â­Ã§Ãš?Â¾gÅ’f^	Â¬\nÃ¨&Ã°KOÂ³Ã†nâ€ž{]ÃµÃÂgÃ‹â€ºÃŽ8Ã¥cÂ¬Ã’Ã‘Å¾â€žâ€“Â²ÃÂ·ÃžÃ½Â³Ã¿â€š\nÂÃˆ7LÃÅ’Â¶â€št:Ã’Ã‘ Â³hFÂ°VO\rÂ³Ã¨JÃº)bÆ’(\"OBÃŒmÂ°	oÃ˜ÃŸ\$]Tâ€žSHÃŽZ^Â½ÃµKÅ’Ã¿Â©Ã¤wÃ°\\[A9('Ã’Ã™â€žcÃ›â€˜Ã¢Â­ÃœÃ b0â€šÃ˜Ã™Ã„ Kâ€™Ã Â£Ã¥Ã Â²srBâ„¢x\nÃ¨*BaÃ†z6oÆ’\ry&tX1p'â€ºÅ½Â^Æ’MÂ·Â¹<Ã¢CgÂ¹`ÃŒ4Ãƒ8GHÃµâ€œzd?gXâ€ºâ€ .@,â€¹7wÃƒÃ¯Ã›Å¾:+Æ’TiUX16Ã â€œLÂ¸Ãœsâ€™:Å¾\rÅ¡LÃ¨6â€¡ÂÃÂ±Æ’fâ€”r\r`Ã£tÃ Â67~gÂ°xË†gH9Ã£JÃ€Â¿O=- \$Ã°4?rÃ™Âª4Â½Æ’Â¨Â¡Oâ€ºÃ»Ã¨:ÂÅ½zÂ¦Â§{ÃˆÃ¾D`Ã³Â¨Ââ€¹Ã21ÂFÅ’ÃœÂµÂ£Ã(DÃ²MÃ“ÃŠ;Â¥ÂºÂ½Ã±&â€“Â¡ÂÃÃŒÂÂ©Ã”ÃšÂ­Â¾Æ’U>ÃŽIËœ6â€¹â„¢cÃÃ„Ã²â€ºÃŸÂ¸@\r/Å“/Â¸Â¶Ã”â€¢Ã½Ã³_ HÃ€Æ’\n7zÂÃ« Â¶Ã¼â‚¬â€œÅ“â€°7Ã²aÃ® Ã‰Â»[9DÂ¢'Ã¼â€žÂ¿Ã¬}BÃ¿â‚¬Oâ€ºRâ€¡Ã´ÃÅ¸Â¸B#sâ€œÂ¼]z!(DÃ€â€œÃ…@L^â€žÃ½	Ã»Â³xÂ£Ã@oÃ¡Â¿uâ€žOÃ¤Ã¯ÃÂ¥DÂ¸ÃÃœ!Å½e`\naÂ³k>Â´0`Ã¡â€žâ‚¬ÃŒ-*â„¢ Ë†8Eâ€¡Z6=fÃŒÃ©%Â¡â„¢ÃÃ—cÃ£â€ºÂ°â€K=Â£Ã²Â¤Fâ€¡\rÃŠâ€¦Ã‚ShÃ¨yNÃ²[v*vÃ¡\rÃÃ¤Ã¤@Å½#ÃŸÂ¸Ã­â€°ÂÂªAh*Ã£L\$Â°Ã€Â±AÃ€A\\â€Â¢â€šÃºÃ“%Ã*	Ã„Ã§pÅ \r*==8
Ã¬\$WÃ®\rÆ’ [Â±â€œJx0yÃ±Ã›ZÃƒ+&YÃ™HA~A\n,\\(Ã–Ã¬pÂ¤!FÂ¶ÂÃªÃš<6SÃ˜&IP`6XzÃ¼+Ã­Â£dfÃž\rÂ¾ÃJÃ‚Â£â‚¬ÃžÃŒiÃ«â€¢sÃ£+Ã’&5Â¼Ã¥Â/rEâ€¦Ã€Â£M^\$R(Râ€˜QÃŒÃ’Ew3â€°Ã´lH*m\0BqÂ¬aÅ’Â¯rÃ¨ÃªLBâ€œÅ½ÂªÂ¥QÂÂ¹z6~lÂÃ‹Ã¹BÅ½â€°\rIÃ‚Â®GÃ¸Ã¦XÃ™Â¸XVbsÂ¡mBÂ·HÂªÂÃ—Ã³â„¢Ã³cÃ®_KÃ§\$ pÃ¦-:8â€žâ€¢Nj:Ã‚Ã‘â€¦Å’Â¡-#Â¢FÃ¥	\0â€™aiBÃ†s\\Â)ÃŽ<.Â!Ã†Ã\\ÃŸâ€°Nâ€¹
Ã’bIw8Â§ÃÂ¹tâ€¦Ã¸ÂPjWÃ¤Â¨`ÂÂ¶â€šy\0Ã¬Ã&0Ëœi?Â¡Ë†ÃƒÃ’â€:Â«Ia)=â€™ÂCâ€ ,a&ÂºMËœapÃ†Æ’\$ÃIâ‚¬IFcÃ¦Â­Ã§\0!â€žÆ’Ëœ YÃ„xa)~Â¯C1â€ PÃ’ZL3TÂ¸jÃC\0yË†ÂÃ’Â¤`Â\\Ã†WÃ‚Ã¼\\t\$Â¤2Âµ\nÃ¦+aÂ¤\0aKbÃ¨Ã­ÃŽ\nâ€žËœ]Ã C@â€šÂº?I \rÃHÃ£Æ’Â®Ks%ÃNÂ©Ã°â€”Ã¡Ã‹^Â°ÃÃ”9CL/Å¡Å¾=%Ã›Â¨ÃµhÃ‰Ã†:?&PÃ¾Ã¬EYÃ’>5Â¢
Å½Ã­n[GÃ™â€™Ã—%VÃ Ã¡Â»*Ã´w<Â¥Ã¹Â­Ã•gJÂ¸]Âº*Ã©wdÂ®]ÃžBÅ¸5^Ã³Ã–Â¢â€™OQ>%Â­s{Â½Ã”â€¦
Ã§â€¢Â«;Ã¬WÃ¶Â³â€°Ã–zÃ‚GiÂ®Ã½Ã€*Â»Ã¹RnÃ¬Ã‘G9ÃEÂ°Å Â¢Ãž,(u*Â°Â±Ã•â€™Ãƒâ€”â‚¬Å XÃ•sÂ«Ã RÅ’Â¦Â¦:Âµ5Ã«;â€Ã¦)Â°RÂ¶Â¦ÃNÃºÅ ÃˆvK Ã˜(Å“RÂ³ÃMÂ¢Å“Ã‡bÃ°Ã®Ã”Ã©Â©_â€¡{Ã•F<<3Âª:%ÂºÃ™HVÃ«YS\nÃ¡%L+{â€o.>Z(Â´QkÂ¢Ã–Ã‚NÂ«!ÃƒÃ¬,â€°:rH}nRÃ’NkI		Âªâ€¡[Ã²Â´ÃŒÃ«â€™Ã“Â§gÃŽÃŽÃ–Â¤;mYÃ’Â³Âgâ„¢%Ã±
9V~-J_Â³Ã±gÂ²Â­â€¢Â©Ã‹\\â€“Ã‰Â®Â£Q\nÂ®â€“!ÃµtÂ«\\UY-tZnÂ¨Â¡d:BÂµÂ°ÃŠÂ½Ãœ*Ã­]')tâ€œÂ²Â¥wÃÃ¹â€“Ã‰Â«[BUm*Ãšr4â€ Ã˜â€“Ã•*yvÂ¢Â¶ÃvZÃ€Ã•Â¹+GHÃŽ Ã¥ZnÂ°PÃ‚Ãœâ€¦|\nTÂ¥ %#\\Â·AX\0}5b+wÂrÂ«XwÃœÂ²1uÃ¹Ã—%Cg=IÂ­Ã²v`ÂcrÅ¾eÃ‹0`..<Â·ÃªÃ°hâ€°+Å’HÃŒÂ^\\jÂ­yFÃ²Ã%ÃŠ]Â¹BÃŠ\0Å½Ã‰rÂÃ…+â‚¬> %ZxÂ¹Å¡ Ã¦%C.ÂªÃƒÃ¬Ã„`VnÂ­1KSÂ¾Â¥ÃŽk\rÆ’Ãµ Ã§X|Â´Ãµ[ÃŒ;Ãµ6H	U@Â©D:ÃžÂ»Mj	ÃŽâ€¢Ã›ÃŠ?Ã½Âª]ÃšÂ¤Ã˜Ë†bâ€œA+Ã”Ã…GÂ£\0thxbÃ¾Ã†L`â€Ã…Ã€64MÃžâ€ºÃ„Ã´Å Y#ÂºhfD=eâ‚¬Ã˜w=Â´cËœ+Hâ€¦Ã±Â¡Â¡:â€ž.%Ã¼Â^\$Ã²DZrAzjÃ¿fLlâ€º7â€™oÂ¬Å’Ã½Â°Ã›\0Â¨Â-Ã¤ÃœÂ³EdÃ¤Ãžâ€°yz'V Â­â€œÃ“Å¾Â¯WÂ´	ZÃ¶Â§KËœ+Â°d(AÃŒfyÃžP?â€¡xRÅ¡^hÃµâ€¦Â¸'â€¢Ã¦Ã A\0Ë†Å¾Â¯:p\râ€žd(V Â±Å’ÃœÂ½Å¡dÃ¶t	SÃ®FcHÃˆÅ¸ÂÂ¹]rÂ¢rÃŠCHY	X_Âº/fÆ’Å’ÃÃÂ½ 4 7eÃš6DÂ³{,Ã‘Ã¨Ã¾ÃªÃ˜<<Z^Â´Ãj\"	Ã©Âµ\n+Ã†â‚¬Mâ€¦Y9â€¦â€™Aâ€š(<PlÂ¤lp	â€œ,>Ãâ‚¬Â¤{E9Ãœ&Ã GhÅ¡h{(Ã½Â±ÂAgg8 (@ÃžjTÃ»nÃ‹gâ‚¬ZÃ£â€ Ã™Ã…Â°ÃJË†ÃÅ Â³xÂ¦ËœÅ’Ã¼Â¼@icÂ¶Ã Ã•â€¹Ã´(pÆ’'oJ0 MnÃ„â‚¬Ã­&ÃŠÂ§Â³\r'\0Ã•â€˜Ã¸â€ž\r qÃ‘F Ã¨4Â½Â°Å )Ã½Â½cLËœÂ§Ã¾_Ã€oJÃš}5Ã¯Ãšcâ€“oÂ¨Ã Ã |6â€žmÂ¾}QÂªÂ£Ã¡4QÃ«Ã‡bâ€žÂ·ÂÂµ[ÃºxÂ«m( Ã&Âµ@Ã¤;Ã‚+Ã²ËœÂ¥Â®ÃšÃ…f|IÃŽÃ Ãµâ€RÃ48â€¦ {	`Ã¸Ã¨Â®Ã§k`uÂ»r`ÂÃ¨WÃ£Â¸Â±`\"Â´Å½)fI\nÂ©Ã”;Ã²8ZjÃâ€¡â€“gÃ°~Â¡Å¡AÃŽË†Ã¨!jÂ¼Ã„%Ã„Ã¦T Ã‚E\\Â¯\r3Eâ€œjâ€šjÃªÂ¢FXZ	Ã¢ÃAyÃ¦kH Ã˜XdÃ°ÂgCQâ€œâ€“Â±Â´Ã¡ÃŽâ‚¬Ã¾0Ã°dâ€Ã¼Â²Â¨Â°Ã¯Ã»Â¡â€ ÃºtÂ¨	Å“Ã‡zkÃ€`@\0001\0nâ€Å’Ã¸Ã§HÂ¸Ã€\0â‚¬4\0g&.â‚¬ \0Ã€ÂÃº\0O(Â³ÃˆP@\rÂ¢Ã¨EÃ„\0l\0Ã Â°XÂ» \rÃ¢Ã¦EÃ¤â€¹Ã‡8Ã€xÂ»Â¥â€º@Ã…Ã”â€¹Ã–\0Ã€Â¤^ËœÂ»Â±z@EÃ°â€¹Ã¦\0Ãž.Â¤^Â¨Â¸Qq\"Ã©Ã…Ã â€¹Ã¦YÃ¤Ã‚D_p &Ã¢Ã¿â‚¬3\0mZ.PpÃ \râ‚¬EÃâ€¹Ã·ÂsË†Ã±v\"Ã©Ã…Ã¡â€¹Ã§0Â´`Ã¸Â¿wÃ¢Ã±Ã†,Ã³Ã¼Â¼_Â¼`\rcÃ…Ã¢Å’Ã¶/Ã”]xÂ¸qâ€šâ‚¬â‚¬3\0qÃŽ.pËœÃ‚qÅ Ã¢Ã°\0002Å’_Ã¬Â³iâ€žË†Ã„Ã‘Å Â¢Ã¢EÃ†\0aÃž1Ã¤bÃ€Ã‘wJ \0l\0ÃŽ1,`Ë†Âº1y\0â‚¬9#?0T^Ã˜Ã‡qâ€˜Â£\$F6Å’ÂÅ¾/\$dÂ¨Â¸â€˜â€šâ‚¬FDÅ’yJ0bËœÂ»\0	ÂªÃ†WÅ’Â¾\0Ã¦.Å“cÂ¸Ã‚â€˜{c EÃ˜\0sâ€ 3l]@\rbÃ¹FÅ’\"\0Ã‚2Ã´`ËœÃâ€˜â€™\"Ã±â‚¬7â€¹ÂµÃŽ/Ã \0Â±Å¡Â¢Ã¨Ã…Ã“a	^04eÂ¨ÂºQ{c<Ã…Ã‘Å’Ã‰j/_ËœÃÃ‘Âc\0001Å’Âµ*28BAÃ Ã£\0000Å’xÃ†â€iÃ˜Â¾1ËœÂ£F Â5Å¾0ljHÂ¸â€˜â„¢\"Ã©FÅ’30\\_Ë†Â¾qâ„¢\0Ã†fÅ’Â¡TÂ³l_0Ã‘â€šÂ£BEÃ„Å’#3Ã¬]Ã¸Ã’Ã±sâ‚¬Ã†Â½â€¹Ã“â€ 64_XÃ€1â€“\0Ã†Â½â€¹Ã±Ã â„¢d`Ã¸Ã—`\rÂ£SÃ†_JMV/fâ‚¬Â±Â­â‚¬1\0005I6tfâ‚¬ Â°Ã£4FÂªâ€¹ÃÂ¶34fÃ â€˜ Ã£F-â€¹ÃŸâ€™6Å’dâ€˜Â±\"Ã·â‚¬4ÂkÂ½â€ž\$hÂ¨Ã‚Â± #EÃ…ÃŒÅ’Ãº\0Ã–6Â¤_0 1â€”c@F
â€¹Ã¡Âª/d]XÃ—QÂ£#G\nâ€¹Ã·â€ 5Â¬gÂ¹qâ€˜Ã£EF\nÅ’m\\Ã‚DnËœÃ…qÂ½Â£YFvÂ1/4`Ã¸Ã qÂ½Ã£â‚¬4Â=Ã¢8bÃ—q|Ã€\0004â€¹â€°Å½3Ã„mXÃ1â€¹Â£eâ€˜Ã¶\0Ã…Ã®.Â¬\\Ã¨Ã Qâ€”cIÃ†	ÂÂ·.7Ã¼\\xÃ–`\"Ã­Ã†\0i^3Ã°(Ã§Â±â€™Ã€Ã†\"Å½Ev4l_ÃˆÃˆqÂ®Å’\$FÃ±â€¹Â±Ã Å“oÃˆÂ¾ \r#UEÃ¤ÂÂ©^9Ã¼tË†Ãâ€˜Â¹Â¢Ã¯Ã†.Å½\0Ãž3|rÃˆÃ„1Â¿\0Ã†Ã¶ÂÃ¹69l^xÂ¹Ã‘Â¼PF-Å½]\n0Ã”vË†Ã¢Qy\"Ã­Gâ€¹Â³2,sxÃQq#â„¢F+Å’\0Ã™/DiÃˆÃ«q}Â£Ã€Ã‡8Å½[6,jÃ¸Â»\0cmÃ‡oÂÃ—N5Â¼ehÃ QvÂ£Â«GLÂâ‚¬H<T_ÃQÂ®Â£?FÃ‰â€¹Ã‰..\$fÃ¸Ã›Ã‘yÃ£Å¡EÃ·Å’C2ÃœlÂ¨Ã›1s#Ã˜EÃ©Å’ DÂ³lohÃ™Ã‘Â²Â£j â€¹Â²Ã‚8Ã”eÂ¸Ã…Â±Ã”bÃ°F!ÂÃµÃ†9Ãœ`xÃ“qÂ¨Â£Â§â€“ÂCÃ†7Ã„hxÃ•Ã™Â£Ã†Ã…Å½Â»Ãº7Å“^xÃÃ±Ã°K<Ã‡hÂÆ’Ã¸	,uÃ˜Ã©Â±â€˜Ã£G)ÂÃš;luÃ Ã€#Ã®EÃŸÅ½Â¹Ã¾<Ã¼kÃ›Ã‘Ã­bÃ¾Ã†Ãœ\0sR.Â¬wÂ¸Ã–Â±Å¾#zÃ†~Å½wâ€™2|x(ÃšÃ·Ã¢Ã°\0001Â'â€ :Ãœvâ€°\0001â€˜Ã£Â¢GÃ¦Å’Â¿Â¦?|`Ã¸Ã²â€˜Â£â€¡Ã†Ã³Å½Ã› .2Â¨XÃœÃ€#â€œGÂ¨Â8KÃ†@<zÂ¾1â€“Â£Ã†Â¹Å½\"9|jË†Ã’Ã‘ÃÃ£	GÂ¤Å½/Ã¦6ÃœqË†ÃžÃ‘Ã¶â‚¬GÃÂsÃ–7Ã¹/\0001â€¹bÃ¼Ã‡ÃŸÂÃ­Â¶:|Æ’8ÃšQÃš#~FÂ»ÂWâ€š4Ã©gËœÃŒÃ’#<F\rÂÂµ Å¡2Ã¼Æ’XÃQÃŒ#Ã¿FvÂkÃ®7Â´xÃ’1Ãš#ÃŽÃ…Ã†Å½â€ºÂ¦@Â¬rhÃœÃ‘Ã€Ã£ÃªFâ€ÂÃ­Z;Â¬fÃˆÃ¥rcÂ¿yâ€¹â€˜!\r	Ã¤_xÃ«1Â¿\"Ã¼H1ÂÃÂ¶0TwÃ¨Ã™Â²c\rFÂ1 \n8dÂXÂ»rÃ£ÃÃ†Ã”Å’Â§Ãž2DbÃ¨Ã½Â±{d4HË†Å’rA<~ÃˆÃ™1Â±dBHIÂ[J?Â¼ÂÂ¸Ã…Ã’Â£qÃ‡~ÂkÂº0Ã”tÃ˜Ã˜Ã’#â€žF\rÂ#Å¾0\\hÂ¨Ã®\rÂ¤GÃˆÅ½Ã­â€™EttÃ˜Ã¨â€˜Ã­c7ÃˆUÅ’Â¿!Ã–=D_Ë†Ã¨Ã²cNÃ‡\0â€˜yÃ–6aÃ™Ã±Ã«Â¤ FgÂÃ§!v1ÃŒqÃ˜Ãˆ1Ã˜Ã£KÃ‡â€¡ÂÂ»Ã¢@Ã¤eÃ¨Ã·Ã‘Â³cGoÂÃ³\n/Â¬Å’Ã¸Ã†Â²Ã£Ë†EÃ£â€¹Ã\"Å¾3t`Â©Ã±Ã¶#cHÅ½Âµâ€š<ÃœcÃ¸Ã“qÂÃ¢Ã¼FÃ®Â%â€ ?TbÃ¨Â¹Â±Â°d)Ã‡â€¹Â© r0â€šÃ¸ÃŒÃ±qcÂ¿EÃ¸Å½Ã£>3\$tyQÃ’Â£â€¦Ã‰Å½Eâ€™Cl`9)Â¤VFHÂMJ7â€fÃ¸Ã¶Ã„\$HHQÂÂ ;Ã¼riâ€™7#FÂ³Â-FÂ¤HÃ†QÃ·#\0GÂÂ·!â€š1Ã¤^ÃˆÃ¾&4Â¤vG&â€˜Ã»7Ã”gÃ¨Ã Â±Æ’\$\0GÅ½\rr/Ã„dÃ™RÂ¤(Ã†Ã£â€˜s6@Â¤â€œÃ™'RAÃ£ÂÃ‡Â¬Ââ€ºÃˆâ€Å’Ã¹&â€˜Â¢Â¤â€“Ã‡g\0k z=Â´|HÃ™Â±Ã‰Ã£â€¡Ã…Ã Å’Ã‰^JÂ´]Ã€Ã‘sdÂ¤Ã‡,Â \$â€™1â€ÂÂ¨Ã <cqÃ‡Â¦â€™Å¸ÃªJÅ“_Ã¸ÃÃbÃ§GË†Å½QvJÂ´ÂÂ¸Ã˜Â±ÃžÃ£H5Å’
Â¢FÃ´pÃœÃ€IcÂ¬Ãˆ[â€¹â€¹ÃŽ@Ã”rÃˆÃ Â¤vHÃ¥%Ã£Â¶3Dâ€Â¨Ã‡Ã²c<I\$Å½M.dâ€”Ã™r1c=FÅ¾Å½Ã·.4â€žcË†Ã•2bÃ©G.Å’Â!Â¦L|{XÃ—Ã‘Â³Â£{IÂÂ«NFÃ´dxÃ·qscÃžÃ†ÃÂÂ¿#Ã¾EÂ¼a)â€˜Ã‘#Â¹Gâ€ÂÆ’Å½JÂ¬mÂ¹.â€˜Ã»\$=Ghâ€™AN=Â¬sâ€°Ã‘Ã…Â¤EÃâ€˜GÃ¾G\\a1Ã²0Â¤Ã›HÂ¡â€˜ÃF.tg8Ãªâ€˜ÃƒÂ¤[ÃˆÃ²ÂÃ¿Â¦IdnÂ¸Ã¾Ã²8Ã£Fâ‚¬â€¹Ã™Ã–.Tâ€™Â¨Ã»Ã±Â·â‚¬F3â€˜EÂº6riqÂ¸Ã£sFÂ¼Å½
Ã–6Ã„xÂºrÃ£ÃšÃ†LÂ=nFTÅ¾Ã’od Ã‡>Â-Âª3Ã´|Â©2\$Ã½0â€žâ€˜= Ã¢:â€˜xcâ€™HÃ‹I\"NP\$bÂ¸Ã›QÃ±\$FÂÃ± Â®DÃ„â€šËœÃ¦Ã‘Ã¯Ã¤}FÃªÅ’ %Âª?Ã¤Å¸(Ã®Â£ÃªÃ‰Gâ€3\$â€šO\$^xÃ‚2TÂ¢Ã©Ã†Ã±Ã•Å½0Å’Â¡Ã°Râ€™â€¹ÃŒ#ÃˆDÅ’:â€žÃ²EÂ¤|i/2Å’Â£XGË†â€™â€â€™8Â¬â€¢Â¹-Ã¹\$HÃ‰vÂÂ¥Ã–=dÅ¡â€° Ã¨Â¤Ã‡`â€™Ã¹â€™:laxÃ¤Ã‘ÃºÂ¢Ã°IÂ¦ÂÂ¢:Ã¬â€”XÃ¢RJÂ¤Ã’Ã±â€Ã’RÃŒmxÃªâ€™J#\nGGâ€œ9!NÂÂ¨Ã¤{cIÃµâ€™Ã“&Ã¦IÂ¬ Ã©R=Â£â‚¬I\rÅ’Ã¹&j:Ã¤â€˜8ÃƒÃ’g#Â¸Hâ€¹Ã¡'3â€ž_xÂ¸Â²bÂ¤ÂH}â€Â£>7Æ’Ã¨Ã¨Ã±Å cÃŒÃ‡Ã™Â\"&K<xÃ˜ÃŠ2Â¡Ã£Ã§Hâ€ â€¹Â¥\"6@dbÃ¨Ã«Â±Â­e;Ã‰)Å’!â€“.Ã„]Ã¹/Ã²â€˜dâ€”ÃŠÅ½m*f6,vÂ©â€”Ã‰ÂªÃŠâ€¹Â£ÂªLÃ¤ÂÃ‰(qÂµÂ£AI8â€7dâ€ž9TtcÃ´ÃŠâ€™â€šULâ€¢XÃˆÃ²%HÂ¡â€I*z:ÃŒ|IXqsÃ¡Â¨Ã³-Ã‚BÃÃ…Ã¤q^(â€¢RÂ¼Â»aq(~e
Ã‘Ã±Â¯Â§ 9JÃ¨Uâ€¡+-eq*nTÃ Â­Ã>Â¡\$Ã•Ã‘Â«erâ€™ â€¢ÃŽÂ±Â¡p\nÃ…Ã•Â¼Ã‹\$es+Ã®VÂ£ÂIÅ¡ÂºÃ‡bÂ«Ã¸eq:ÃŸ#]â€¢ccÂ®7r\nÃ™f,gYÃ¸Â³TCÂ²%Å’Ã±	Ã”}Ã‹\0â€“Â²Â©\\*Ã¬EWPÃ¦aÃ¨:ÃEÂ¥,&WÃ²Ã†p)Ã…Â¦Ã‹xlÂ²MÃ¡Ã‚Ã„3\0t\0Â¦/IipÃ±D'\0	k\$TÂ¤Â¬Fâ€¡Â¤]fÂºÃdMÃ²Ãˆâ‚¬K\$â€Â¼Ã½H(@Ã®Ã‰â€â€¹Â»(â€“zÂµnWÃ’Â¤Ã™_Å MÃâ€*Âº\0Â¦eÃ™lFâ„¢^H	W*Bâ€“Ââ€“ZPeÂ½Ã…Ã–Ëœâ€¡Ã“R/ÂdRÃ‚â€”RÃŠâ€¦\0KuÂ£,yH)Â¶\"SÃŠXI'Â®Â¹ZÆ’=Ã§LÃ¸RÃ¥3Å½Ã¥Ã„Ã’\nÃ€'Å¡[kÃ°Â­Ã6@;}Râ€Ã­Ã½IÂ²Ã²Â³Ã´Â¬_Ã©) wÃªâ€š[Ã³Ã€ Ã»\nÃŸÂ´Ânâ€“ÂªÂ¼Å’ÃŠâ€œbBrÂ¸l,\$vÃ–Ã­ÃÃÃ”Â°â€¡Ë†Ã€Ã•HÂ©Ã â€¡â€¦\\Â¢â€¹Ã™s*Ãˆ ÂºÃ¥â€“
.Qtâ€™Bâ€¦ÂºdË†bâ€˜Â½â€”@Ã¯?3Â¼SÂ`a@Â¤KÂª\\.Â«Â´ÂÃ ~Ã‡fÂªÂÅ¾)Â¬Â«Â¨Ã¯,?|&Ã“Â¶KÃ€Â£â€¦Z9.ÃXÂ³+Sâ€˜Ã¢|Ã€Å“ÂÃ˜\0PÃŠÂ¼Â¢Å’Eâ€œÃ²Ã§eâ€š/ÃŠ\0VÃ«Ã–^KÃ„\0\n-	:Ã‹Ã‰SÃ˜Â²)Ã—ÂªÃ»0jâ€˜9TXâ€¢Ã¥Å¾BÃ°Æ’Â½K\"Ã¥Ã…Â¯Â±â€¢Ã‚Â²,2Ã†'â€¡2Ã‹Ã¥Ã–ËœP,Â¡xÅ Ã´Ã pÃ€ÃÃ¡KÃªâ€”ÂªÂ´Å¡â€ºÃµ\"ÃŠDÂ¢#TVÂ²Å“DÂ¿Ãµ1Ã±Ao;Ã˜â€¢Ã—/9TH%V`WJ<9ËœÂ¯aeÃŠÂ° K/V^/Â¨Qâ€ Â¤Ã˜\nBÃ±Z\"9Ã­Ã‹Ã†XÃ’Â¯M~\$Â°5â€žÅ ÃŸÃš\$0dÃ¨Â½Iâ‚¬Uâ€œÃÂ³2Â¼^X\nÂ¼*Ã£E7I\nV3Â«â€“â€¦+ÃŽaÅ’ÃƒIiÃ’Ã’NÃ‹KKËœg0â€™aÅ’Â°â€žz*â€œVÂÂ©Âº#bJyMÃ’Â¦eÃµÃ¢Zâ€“ â€¦V Â¢Â`â€™ÃÃ²ÃU1Ã‹CËœÅ¸.\rFÂ²Âª-jÃŽ&LUËœpÂ§9sâ€šÃ©Â¹Å +Q&1Â¨Ã¢RmÂ¥Ã•Ã“Â±gZÂªÂ²â€“	,.Xr
yZÃ¬Â²Â°0Â¨ÃÃœ3Â¬2ËœA1Â©Ã–â€šâ€™eâ€°NÃ»Â©Â¸ËœÃºÂ²(?Al ÃžÃŒ,NÃ¨ueÂ²Ã\$|rÃ¹Ã¡_%Â²Ã±E05E}Â³\$Â¡Ãœâ€¦X2Â«%ÃšZÂªe â‚¬\n\";<9aÂ¾h
Ã£Â¶Â¥Ã a]ÃºÃŠÃ¬â„¢8Â±ÂÃ *Ã©uÂ¯
Ã¥ÃÂªLÂ¥Â¦Â¶Â±dRÂ¿Ã°0Â«Â¸ÃÂª+ÃžQm.Ã¼,GÃ¹â€“Â«Â¦MÂ®Ã¯_Â±2Ã¥eÂdBÃªÃÃÂ¸,Â°Sâ€¦2ÃÂ²>UÃ•ÃªÃ«Ã”Â°Â»4vlÃ«~e2Â©Ã²2Â¤eÃ„ÂµÃ‹Yg2nfâ€™=Ã€Ã¾\$Â%Ã³ÃŒÃ™â€“Å¾FfaÃ¬Âµ)â€¹ÃªÂ§Ã¥â€ÃŒfTÃ†Â¶Ã¡GÂ¤ÃÃ—g2ÂºW,[â„¢Å¡Ã­ÃŠX>)tÃŠA]Å“Âºâ„¢R*Âº&ZÂ·Ã…6j2|â€˜Â¥\0 Â°(Â©p	Ãª9Ã— ÃŒÃ¹uÃ’ÂªÃ´?Ã´Ã`nÃ¥Å“-lZnÃ«!H9ÂÂ²Ã§Ã¦zLÃ°Å¡Â¢9VLÃÂ¹yÃ’ÃÃÂ¢ZÃ˜JhRâ€ºâ€°gâ€œEfLÂ©UÅ Â²~`4ÃYË†Ã§Ã¦x)\$BÂ±QR#Ãƒâ€¢SÃªâ€Â¥Ã‹Ã‹Ãµ,6i#Ã€YÂ¦â€œ,;CÂ±Å¡rÂ¬Ã¢iÃ™&Ã‡XÂªÃ»]Ã¨Ã\nw54Â­Kâ€°xÂ\n*&Å¾Â©TÅ¡Â£Ã®WÃ¼Ã“Ã¹Å â€œÂ¦Â©+SÃÂ»qNcÂ·yÂÃ³IWÃ¤Â¯Ã›\0W5cÃ”Ã’Ã‰Â«â€¹Ã°&+ÂÅ¡Â¶Ã°VrÃ¥)Â¬ÃªÃŽÂ£KgÅ¡ÂªÂ¾Ã”?â€° ÂµÅ â€œÂ¥|Â«gRÂ¦Â¯â€ hRÂ´%KÃ«Â¹Å“)Z#â€¹5Ã¤Å½,Ã–Âµâ€“kâ€¦Ã¦Â¼Â»`Å¡Ã¬l:Ã â€¢LsCâ€[Mâ€°UBÂ©6ldÃ‘Ã‘â€œJÂ¦Â°ÂªÅ¸â€¢Ã¯1nl:ÂºÃ¹â€¢jÂÂ¦Ã‹LÃŸâ€“Â¢\0Â®hÃ£Â¶ 
*)Â¥p/Â®Å¡ÃžÂ§5\\â€<9Â´Ã³VÂ¦â€¦/â€¹Å¡ÃžÂ«Â®hTÃ‡djÂµÃ¥rMbx\nË†]RÂ¹Ã§WÂªRâ€° MaUÂµ3=Ã—Âµ`0Â³oÃˆÃ‹,Zâ„¢Â¬Â³l
Ã€Ã…}ÃˆÃ³Â¦mÂ¨Ã¬â€ºâ€Ã­Â²lÃ´ÃŽÂ´Ã•mLÃ¥S6Ãª\\â€™tÃŽâ„¢Â¹Ã²ÂºÃ¨L â€”Ã®Ã‰\\Ã%â€˜JÂ¶â€Æ’KÃ¥â„¢Ã±7oÃ‘Â©Å¸Â¤efâ‚¬MÅ¡Â£â€™oCÂ»YÂ¡â€œvÃ¦â€¦Â­NVÃƒ4=RÃ‘Â¢sJÃÃ‰ÃÃ¶Â¬Â¶*hÃ”Ã•Ã©hnÃ¤Ã¦Â-mâ€ºÃ©4â€°ÃŸ4Ã yÂ¤Ã³HÃ±MÃ»â€º|Ã®ÃŠisÂ¬U=Æ’ÃÃšÃA\$ÃšÂ­Ã²iÂ¹Ãâ„¢Â¾â€œâ€¦ÂÃ¶Ã>â€“ÃªÃ®ÃŠpÃ¢Â¼pÃ»Ã³QfÃ¸Â«Ã®Å¡Ã€Â§Âªq,Ã”Ã•5sÅ ULÃ¹Å¡Â£8}ÃÂ¬Ã…Ã™Âªâ€œÅ’Ã·#ÃƒXHÂ±Ã™ÃÃ¬ÃŸIÂ«Â«Ã®Â§Â¼9UÂµ8Ã­c:Â³IÂ»Ã®Ã­fÂ´ÂªÃÂ±7Ã’klÃ¤5}ÃÃ·fÂ¹LYâ€¢Ã°Â¬Ã¡N2ÃžÂ°Ã³}&Â½	iÅ¡ÃªÂ®Ã±c,Ã¥IÂ¹3â€¹ÃšÃ„RÅ“Â©6rÃ¤Ã˜â€°ÃŒ3bÂ¦Ã»ÃÂÅ“Ã‡6>lXYÂ¿Ã»fÃ½L Å“)+Ã™S,Ã™â€°ÃŒ*Ã¹elÃÃ´â„¢U\"edÃ¦Âº\"ZÃ§ÂªÃšâ€“Â6â€™ZDÃŸE9Â°Ã¡%ÃˆÃŽâ€šâ€ºY9rmtÃ£EÃÃ³'.MÂ²[4Â¬â€š^â€žÃ¥Ã‰Â·Ã«;MÂ»wÃ™5â€¦Ã—Ã9Â¸Ã’Ã³ÂaÂ¬Â¦v+70lÃÃ‰Ã“Ã“d%Â£ÃŒ<Å“Ã¹3Å _<Ã©â€¢lNÂ²Â¦Å (â‚¬v+7YRlÃŽâ€¦Ã“Âª]â€¡.â€¢Ã•4Â©IÂ³Â®)Â¼Â³=Ã–Æ’NÂ®TÅ¡]Ã›Â¹'U^Ã“?Ã§SÂ«Â¼Â½7Â¾XCÂ®Ã…Â©Ã“Â¨Ã•1ÃuÂ¹9Â©EÂ´ÃŸâ„¢Â²kÃ§L;ÂÅ“Â¤NhÃŒÃ¬Ã€SÃqNXk;1[â€žÃ’ÃµÃ“LgpVÅ“BÃ®1_Â¤Ã¡Â¥ÃŽÃ…gsÂ¬ Å¡Â;Â­RlÃ®Ã•EË†Ã—ÃŸNÃ°TÃ‡8Ã¶w,Ã®Ã©Ã…sÂ¯â€¢1ÃPxrÃ«Å qâ€Ãªâ€°ÃŸ3ÂÂ¦Â¬(ÂªÂ;Ã±ZÃšÃ½	yÃ“Â¾'{O	_Â´Â¾ÃªrÃ¯â„¢ÃˆÂªMg|ÃŽIÂÃ³92eLÃ§ÃŠÃ³â€fÂ¼O\rYÅ ÂnkÃœÃ¥uÅ â„¢â€SNÃ‰v9VkÃ¢â€œ	Ã‹3Ã‡Â§.ÃŒâ€ºv 9zydÃ¦)Ã¡â€œÂ¦ÃˆNÃYÃ¬&s\$Ã¬Ã¹Ãjd'6Ãâ€Å“Q<ÃVÃœÃ§)Ã¨eÃ§+Ãâ€ºÂ§:Ã‘Ã˜Â¬ÃªYjtÂ¥Â¡Ãƒpâ€¡u<Â±ÃÃŠâ€“Ã‰ÃŸ3Â¢]qMÂ°Å¾Y:9XÃ£ÂµSÂ³Â¾gIÂ«ÃƒÂ*Â¿mÃ¤Ã†Ã„CÃ«Ã¹Ã½Å¾v GÃŸÃ¬ÃœR@Ã€Ã–Â¯Â¬jTâ€”=Â¨Â:Âe Ã›Ã€(\0_VnÂ©,?pÂ	3Ãž'ÃŽ â„¢Â¸Â¨â€˜Ã˜Ââ„¢Ã¯Ã’\rÂ¬â€ â€¢Â¼Ã¶|\"ÃžiÃ°ÂºgTâ€™nÂÃ¾PÃ§Å¡Â¤Â°\nÃ“â€Ã¥q,Ã›SfÂ¸.YÃÂµQ AÂÂ¼Aâ€¡,ZÃŠÃšeSÃ¥â€ºËœsEÃ€ÂÃ¬\rÃºâ€˜v
â€žTâ€¹Â¬QÅ¸ZÂ©\"pÃ³Â²IÃ³sÃ«UAÃâ€º\0Â¾Ã«vZÂ¸}Â®rÃ™Â¥KÅ¸tfÃ©P
Ã¤f9Ã§â€“Â®Â¸{Â¼Â¶^Jâ‚¬Ã§ÃŸÃâ€šÅ¸â€Â¿Å¡Ã¸Â©â€¢\n0%Â«â‚¬NGÃšÂ«*~lÃ¼D.Â»Â¦ÃŽKeÅ¸Â¹6Â¢[,Ã”%ÂÃ€Ë†Ã°OÃ•ËœÃ‰-â€ ~Ã¬Âµâ€¢â€“Ã³ÃºÂ¥jÂ®Å¸RO;ÃºÅ’@	Ã‹Â¨enâ€ºb_Â¾%sKÂ¿Ã…Å“Ã«â€šÃƒÃ¯YÃ¿Ã¦ÂºÃŽYÃ‘0Ã¼Â¥ÃƒLÃ‹WÂªÂ¦ÂjrÃŸÃ•ÂÃ³Ã¨Ãâ€  Ã«Â©!BÅ¡Ã™Ã±â€Ã¦â€žPvÂ´Â£fwÃšÂ«Ã‰Ã¸â‚¬Ã§Ã£MÃƒR2Â´2â‚¬zÅ’4rÃºh;Ã’#M@â€¦}â€¦\0â€°|Ã«Ã£Â¨ MÃƒ\0â€¦=ÃšÂ=Ã¥Â¡Ã fÂ-!Å¸6pÃŠ g[P4Ââ€šÂ´â€ ÂÃŒÃ¬Ã³CÃš[5:â€“â€š\rÂµCtÂ¨ÃÃƒ u@Ã½Ã›Âº<Ã©Å¸Ã¤ifâ€žÃNuÂ¼Ân[Ã±!u8j{&9Ku FQlRâ€œiÃ€(Ã‹C Ã‡AÂÃ¤Â®â„¢s4Ë†Ã«\0Y Ã;fÆ’B<Ã”{â€Ã¥ËœÂ¼R_IÅ¡~Å¡â€¦6Ã´Ã—|MWTAÃ­]4Ã·e@JÂ­eÃ‰P|[ÃºÂ¨â€“r5*ÃÃ¿â€”OÃŽ Ã­BtÂ½)Â¤ÃªÂ¯%Ã-\0PÂªjÂm	uÂsÃ¡Â§}ÃËœÅ¸â€œBi^Â©Ãš*Â¦ÂzÃ0YK.Ã¹`[Â¯YÃ»2Ã­Ã–ÃÂ«â€”|Â°XBÃ‘Ã…ÃÃ“Ã(?Ãâ€”Â±.\$â€œlÂ¼â€™Â³,Ã¦ÃŽXÂ¶DÃ§Ã\nÃªÃ«jÃ¦Â¡OD ->_<Â¼Â¥Ã•
Ã–Ââ€¡Ã™\0Å¡Â£Ã™Ã•Â¬Â¥ÃsÃ¸h\\Ââ€¦Â¡â€¢ea\\Ã“\0ÃŠÃ¶eÃ¤â€˜â„¢YÂµ`Â¼Â¥Â´7UÃ˜\"eÂ¡Ã‡CYTÃ¬Ã±Ã™zt:V9Pâ„¢_Å¡Â³â€¦aâ€šÃâ€¢FÃ”;Ãâ‚¬\0MÅ¸Â¢Â´â€ â€¦2â€œeÃºÃ«HCÃ©ÃÃ³Zâ€˜?Ã®VÃ²Â¼Ã¥Å“'Ã—Â¬Ã¥â€¡Ã¤Â³}cÂ¾YÃ¼aÃµÃ¨â€žÂ¬Ã¥Ã½?Qh8	Ã°Â´0â€¢
Qâ€¡CM`ÂºÅ¸Â«Ã³6Ã¦Ã¸,â€¹Å¸Â¢Jâ€˜eZÂ¾Z\"Gâ€”WÂªÂ¡uâ€ â€“u\rÃ•>49Ã¨ÂKÃ½â€”Ã°I%Lâ€“Â¹ÃÃV9ÃÃ¼ËœÃÃ–â€°Â´Ã¸ZÃ«{VEOÃ„X;Â©Ã¡Ã‘ÃÃoÃ agPÃ‚\$\nÂ²RX@}!-Siâ‚¬ Ã²RÂªÂ¾Â¢qzÃ–	Ã¶ÃªITH.Â¡Ã”Ã­\nk\nÃ¯Å¡ \ndÃÂ®ËœTÂÂºâ€°Â²>Ã\nÃ®Ã‚â€“ Â­?Â£Eâ€¦`Â²ÃŒ5D+fâ€™?#zÂ³â€¦IZÃ¼7T[Â¨â‚¬Qs#Ã¹DÂË†Å \$
Â«Ã•ÃPÃ¹Â¢Ã¬Iâ€ 	Ã»3Â¾Ã—*Â¼:Ã9YIÂ²Ã£Hâ€¹Â³Ã”HÂ®Â¬XÂ«0Ã¥DÅ !u7JÂ¸â€“mÂ® YB}EÂªÂ°Å Â³Â¿â€”Ã§Â®â‚¬Â¢Ã²râ€8Qâ€¢Ã¹\n}'PÃµSÃ¢Â²	QÂ±ÃÃµÃ¡ÃºÂ¨Å½â€˜Â°\$Â§Ã…`RÃ‡)^Ã¡Ãµ(Oâ‚¬P\0Â®aKÂ½ÂµÃµÃ´mÃ¨3Â¬Å \$H.â€žÃ¹Xâ€žÃ«Ã±Ã”Ã§)ÃVÂ®â„¢`â€Â­Ãš9 Â¨.Â®Yâ„¢â€˜18ÂÃ¢ÃšeUÃâ€™`XÃ§9Å½â€šÂ´	Å’Ã°Ã¤Ã§\\LcË†jÂ°IE NÃ©ÂÂ«ÂªÂ¦6â‚¬WÂ¡DÂ¦XBÃ˜	Zâ€¹:â€|ÃÂ¤:	E-P-Ãš&ÃŽÃÃ¨Â¿)Ãºâ€ Ã°Â§Ë†*Ã“ÃºÃ”lÃ€)PÃ‚uÅ’Ây|RÂ°ÂÂ³LhÃ¿.pÂ¤Â§Ã©_* QA â€ @ Â·?,Ã†Â§ÃªÂYÃªÃ–)tâ€šÃ‘â€¡Å“<Ã­ÃP*ÃªÃ¥Ãœjâ€™VuQÃ¾: 2\0ÂLÂ¸?JÃ«Ã§Ã¨Ã‘,TPHLÂ²ÃÃºE%â€“ÂÂ¬\0ÂªÂ¢yP(YÂJZÂ¥Ã®Â©ÃºTHÃ…X\r	â€¢Q4Å½hOÃ’;\\ÂvVÃµ#Ã¥Ã€TÂWwâ€¡Ã¯\\`Å½ÃµOÃ’Â¡Ã…Â«?Ã’JR2Â³Ã²â€™=ÃµFÃ³Ã¢]Â»ÃÅ¸ÂI5TMjIÃ«9Ã©,(Ã†Â¤Dv|tÃ‰)ÂÅ Wy-Â¦]zÂ¨Ãšeâ€šÅ’â€°a,pQ6\$Ã«I-g=%â€˜SÃ”W#Ã­TPÂ§ÃœÂÂ¤Ã‰)Â«T&]ÃžÃ‘ÃµX15jâ€ â€B8â€žâ€žÃ¦VÃÃ“Â¥\nÃ¬em yâ€œâ€Å½hâ€º*Ã¨Â¤Ã¼Â»Å½â€žÂ°dÃ§4Ãâ€šÂ·bd!0Â¤ÂgRâ€J\\Ã Ã–MtÆ’Ã€1R\n\nÂÃ¯Ã¢xÃ¨Â¡Ã¨ÃœÃÂª.Ã¶_Â¾Ã¼uÃ² +Ã†Â¼Ã‡;ÂÃ½â€¹*4Ë†ÃŽÂ¸)]Ã€\\Â¡lÃœ( m\"Ã±Å¾Æ’Qâ€ nTÂÂË†(*\0Â¬`Ã°1HÃ¬@2	6hÃ ÃªYÃ€cÅ¾ÂÅ¾H_
ÃŒÃšÃˆfÃ°?Â°ÃaÂ«â€“7=KKdeÃ‚tÃ·HÃ Ã€2\0/\0â€¦62@b~ÂÃ‹`Â·\0.â€â‚¬\0Â¼vÃ™) !~Âºâ‚¬JPÃ„ÂTâ€”ÃÂ½Ã´Â½â€™â€“â€¦ÂµÂ¥Ã³Ã‚â€”ÃšOÆ’{tÂ¾Â¾\0005Â¦ Â¾Ëœ/Ã Â¯â‚¬\rÂ©Æ’ÃJ^Ã°Â½0Ãša!Â¶)â‚¬8Â¦%KÃžËœPP 4Ã…Ã©~Ã“Hâ€™ËœÃ¡Ã·ÃÃ…Ã´Â¼ÃœÃ­\r+Â¦LbËœÂ¥/24)â€œÃ“Â¦GKÃªâ„¢e0Å eÃ‹Ã©â‚¬S1Â¦BÂ¨	-0jfÃ”Ã„Ã©Å¡SÂ¦wLÃŽâ„¢Ã„iÃªd â€¦Ã© Ã“Â¦LÂºÅ¡\r1ÂºhÃ´ÃˆÂ©Å“S Â¦â€”MJJÃŠhtÂ¾)Â¨Ã“+?LÂ¶Å¡e5nâ€Ã“Ã©|FHÅ’Ã‰MNâ€”Ãµ5ÃªjÃ”Ã‰Â©â„¢SHâ€œÃ•Lâ€“â€”Ã¥4Ã‰=TÃ˜Ã©Â´Ã“Dâ€œÃ•MnÅ¡Â½6Zm@I@S`Â¦)'Âªâ„¢Ã•7fÃ²zÂ©Å¸SzÂ¦x~OU1kâ€Â¿Â¤ÃµSFÂ¦Ã½MOU4ÂªpÃ´Ã™Â£2\0000Â¦Ã¬Â¾7â€¦6Å kÃ‘#xSlÂ§'KÃ¢7â€¦7\nlâ€ÃÃ£xSuÂ§ LR7â€¦7Å¡stÃŸÃ£xS}Â§GM7â€¦8*qtÃ“#xSâ€ Â§OM\"7â€¦8ÂªuÃ´Ã«)Ã†Ã“Â\0Â¿â€™Å¡â€¢9Ãºrâ„¢)Ã‹SrÂ¦â€°2Å¡Ã½; 
Ã´Ã°)ÃžÃ“7Â§ÂNjâ€ºm/Å xÃ§Â©Ã•Ã“Â¿Â¦sNÃšÅ¾:jy4Â¿Â©Ã SÂªÂ§gO:1Ã½=\ncTÃ¶Â©Â§SÃÂ§â€¢â€™Å“â€¢;Ãª{Ã±Â¥Â©Ã®SÃˆÂ§/ORH\r=ÃŠtTÃ´Ã©Å IÃÂ§Â¥OÅ¾ËœÂ¤\\zx4Ã·Â©SÃ²Â§â€¹MÃ¾Å¸â€¢>j|TÃ½iÂºSÂ¶â€˜Â³Oâ€ â„¢Â¼ÂÅ¡~Ã´Ã\$lÃ“ÃºÂ¨OÃ¶Å¾ÂÅ¡}tÃ¼ÃˆÃ™Â§ÃŸOÃ®ËœÂ¤ÂÅ¡zÃ”Ã»*Â%Â§]PPÃ¼ÂÅ¡vU\"ÃºÃ“ÃÂ§Â¯KÃ¢ Ã­@\noÃµ jÃ“HÂ¨;PÂ¡>Å¡Â1Â£Ã©Ã¿FdÂ¨P.5BÃ˜Â¸â€¢Âª\rÃ”Â¨3Å“uBÂ¹<Âµ
L#Ã”<Â¨QPEÂCÃŠÂu*\nÃ…Ã›Â¨yPNÂ¡Â´lÂªâ€šÃµ\râ€¹6Ã“Ã³Â¨?KÃºÂ¢mBZiâ€¢jÃ“HÂ¨â€ºO2Â¢}1Jâ€°ÂµÃ©â€ºÃ”MÂ¨_MÃ¾Â¢mDÅ Ë†â‚¬Ãª&Ã”KÂ¨Ã‡Q6Â¡Â­FzvÂ´Ã°â€¹6Ã“Â¹Â§Ã©QjÂÃ¥;jÂÂµj)Ã”*Â¨ÃžÂ¾Â£mEÃŠÅ’
Âª9FdÂ¨Ã…Qv5eGÃ˜Ã‰ÂµdÂ¤Ã”â€žÂ¨EM\0+Ã¥DÃªÆ’\"j)SDÂ©QÃ’Â¤pZfÂµÃ©Ã†â€šÂ§mR&Â¢Ã½HÅ â€™Uâ€™Ã›Â%Â§{Rv0m0zâ€Â¥Ã¤Â§Å¸LÃ†Â¥@Ãºâ€'Ã–Ã”Â©ERÂ¶?eJÃ·>Ã©Â¸Ã”ÂÂ¨ÃMâ€™Â¥ÂµIÃºâ€¢Â²ÂªYTÂ¦Å½Ã›RÃµ/Â¥BÃŠâ€¢.ÃªUTÂ»Â©YRÃŽÂ¡ÂL:â„¢jNÃ”â€¦Â©â€¢RÅ¡Â¡ÃLÃºËœ5ji&,Å½â€°OÃªÂ¦mJDÃŸ5,Ã£9Ã”Ã€Â©Â­QÂ¦Â©ÃÃ¨â€¢1ÃªhTfÂ©â€ºNÃˆËœÃ’Ã‘ÃžÂ¥Qâ‚¬'Â©ÃŽ7Â¾Â§LihÂ¸Â²\rcjÃ”ÂÅ’â€˜SzÂ§uÅ¡Å¸\0nÃ£Ã”ÂºÂ©gÂ¶Â§Ã˜ 9Ã•@cÃ•Å’\rTÂ§%LÃ…Ã•AÂªfTÂ­Å½MT9uQ\nÅ¸Ã•)Â¢Ã§UÂ©ÂµSÂºÂ¨uD:â€œÂ±â€”jË†U	Â©Â­Ã†Â¨â€¦PÃšâ€“qâ€°*â€šEÃšÂªKSbÂ¥l\\ÃšÂ¤ÂµFÂªâ€Ã”Ã…ÂªGTzÂ§gJÂ¤ÂµHÂªSFÂª	\"Â©Â½Q:Ëœ1â€˜Ãªâ€ºÃ•Â©;â€ Â©Â½RÃªÂ¦ÂµL*~EÃŸÂªoTÃ’Â¦\\z â€˜â€žÂªÂ¥Ã•:Â©Â­Ã¢Âª]SÃªâ€¢Â±Å¸ÂªÂ¥Ã•BÂªâ€œUÂ¨^JÂ©uR*kEÃµÂª	ÂªÃ½TÃªÅ“QtÃªÂ¯Ã•RÂ©g2ÂªÃ½UjÂ«ÂµV\$Ã…Ã•_ÂªÂ¹SË†Â³mPHÃ†U\\ÂªÂ±TÃ¼Å’[UÃŠÂ«5JhÃ™Âµ\\ÂªÂµUpÂªÃ™Â¢Â«â€¢VÃ°7a_*â‚¬Ã“Â«
Â¬=Râ€¡>\0I*Â¼Â¥Ã´â€VÂ«Ã­X:hU8jÃ‰TÃ¦KZâ€™Â¬\\:Æ’Ã•)jÃ‡TÂ·Â«8ËœÂ±	Ã¥WZÂ³Ubâ€™Ã²J8Â«
RÂ­=YÂ³UVÅ¾Uâ€“Â«RÂ¬Â¤\\:â„¢Ã•-jÃ‹Ã”Ã‘Â«iV.Â¦Â¥[zÂ´Â±Ã’ÂªÃ‚Ã‡-Â«{TÂ²Â­Ã…ZÂªÂuojÃ—UÂ»Â«3 Â¡Ã[ÂªÂ±Ã•>ÂªÃ˜ÃˆÂ«E Â­%\\ÂºÂ±Âµh#bÃ•â€¦â€¹Â©WZÂ®-\\ÂºÂ¸ÃµCÃªÃ¦Ã•Â«Â»W>Â¨Â­]ÃšÂºg4#Â¶Ã•Ã€Â«KTrÂ®Ã­ZÃŠÂ¤wjÃ£Ã•\$Â«â€ºzÂ¬-RjÂ½ÃµtjÃU*Â«ÃŸWÅ¡Â¬tp\nÂ¾4Ãµâ‚¬ÂÃ°'â€“Nâ€¢MÂºÂ´Â²ÂªxUÃ¾â„¢X32[xÃ²â€¢+Â®â€œÃ‹\$BÂ°US*Â½ÃµqÃªâ€ºUÃÂªqXZÂ®}SÃŠÃ‚Ã•xÃªÃÃ•@Â¬-W\n5ÃXZÂ¨Ã•â€¦ÂªÃ£Ã•JÂ«â€ºU2Â±=\\ÃºÂªâ€°Ã«F+Â«Ã±Vâ€š0]XXÃUÅ’ÂªÃ¬Ã–0Â«ÂÅ½Â¬-VJÂ¹Â² +Ã–/Â«Ã‰â€šÂ±ÃZÃŠÂ®5sjÂ¹Ã–DÂ«Å¸UÃžÂ²%bÃ˜Ã‰ÂµÂÂªÃÃ‡Ã·Â«
VÂ²%YÅ¡^u@dÂ¤Ã•Â¢â€™â€œWÃÃ¦â€žâ€Å¡Ã…Â²Rk&Å“Å’Ã±YRÂ¬Â\\Â¤Ã…â€™RkÃ–YÂ©cVÃ†O-\\Å¡â€”	kdÃ²Ã“Ã¡KoXÂ²Â¥KÃŠÃ/Ã«9Ã–]â€œÃ‹VÂªO-Uâ€°<Âµâ„¢@ÃÃ‰Ã¥Â¬Â¥VÃŽÂ³[Å¸Ãµâ€ºÂ«6UÂ¹Â­â€”ÂÃ‚=eÅ ÃÂµoÂ«4TÃÂ­YÃ¢0ÂeHÃ†Ã•Â¤Âª\rÃŠÃ9Â«Â¢â€¢Â¬6Ã (Ã³Â®Ââ€¢+Å¾Â7ÃŽybÃ“rI
 Â§|Ã„ \0â€”:FzÃ°Ã‰Ã¨\nâ€¦Â§|ÂªÅ“s<Â°RÂ½%JÃ“Ã‹  Ã”]Â¦ÃµFÃ¨Âµ3ÃµÂ­Å’â€°jÂ¢ÃŽÂ£Â¹YÂ®ÂµZâ€œÂ¾^ <5Å¾XÂ·IJÃ²Ã…M`Ã—nO\\Â£B&Â¶râ€œÃµÂsÃ…Ã§ÂQË†uzÂ¨Â¢xÂ¼Ã¥Â¹Ã¨	Â¬TË†Â®Â¤VwÃJ5Â¸g	Ã?vÂ¨qF4Ã¯â€¢9Â³Ã“ÂÂ·Â»Â­Ã•6ÂªzjÃ¹Ã¨Ã•â€¡OVâ€¢Â¿\rÃŽuÃŠ=Ã‚@ÃŠâ€™fTÃÅ¡Å“Ã°Ã¯Ã¶yÂ´Â³	â‚¬Ã–Â«pKaXU9Å¡mÂ²Â³â€¦Â­\nÂekMoâ€ºÃƒ5\nhTÃžâ€ ÃªÂ¦Â¦â€¦V Â®Â¬vâ‚¬â€šÃ½:
Â®Ã‘sÂ®ÂÅ¾\\p>ÃÃ’LÃ“:Â¦â€¹)Ã±Â­O=nk}jÂ¥SÃµÂ«&Â·Ã–Â®Å¾Âª~ÂµÅ Â¤yÂ©Ã eâ€Â¬ÃœÅ¡ÃŸZÃ–ÂµÃ±)jÃ˜Â®â€tÃ—VRÂ¢VÂµÂ½sÂµrÃŠ:+aÃoÂ­â€¹,!TÃ½lÅ UÃâ€¢Ãž*nÂ­â€º5Â¾Â¶\\Ã°UÃ·dv+â€™M\\Â®)]BÂ¶|Ã±JÃ«Â´Â¦l;4ËœÂ¯5Ã¶pLÃ–Ã¹Ã“ÂµÃ˜Â¦7LiÃ½[~bmtÃ‰Ã¦Seâ‚¬\"Â»Â°â€ºBÂºÂ½vÂ©Â´dâ€œÃ§@ÃÂ§SÃ4)Ã˜â€™â€”ZÃ¯Â¼Â»\$)Â®Ã±5ic!â„¢ÂµÂ´Â¢ÂÂ½ÃŽÅ’â€“ÃªÃ®\\RÃ¹*ÃŸSDÂ¦â€™ÃŽw\$â€º9Ã¦tSÃ\nÃ¡â€GfÃ²PÃ”â€ºÃ†Ã®ÃŠÂ¸Â´ÃŸÃšÃ£*Â¦	KÃÃ´Â­DÂ·VyÃ»Â¹5ÃuÃˆÂ¦JÃ—â€˜Å¡\\Å¡ÂµCÂ¹â€¢\$â€œÃ™W,Â¯M\\ÂºÂ»Ã´Ã¥ÃŠÃ¦5Â¬Ã«Ã“â€“Â®k^â€¢VÃ•sÅ Ã¨5Â®kÂ¡Ã–Â»Â¯M^ÃªÂµÃ½{Ã€uÂ°Â§ÃÂ¤wFQÃ ÃŸJÃ©HÃ»gWNÂ¡k8Ã¾ÂºÃÅ Ã´ÃŠâ€°+Â¸Â»Â§ËœÂ¥1brÃ„Ã­Ã¹Ã‹â€¢Ã˜Ã«Ã“VÃœXÂ]ÂdLÃ§jÃ­Â´YTâ„¢ÃŽvÂ®Ã§6â€“twyÃ‹â€¢ÃžkÃ²Ã—Ã«Â­Ã Â«vx=â€¦5Ã hÂ»Â²ÂÃ¯Â½Ã´8â€”]ÃŠÃâ€˜Ã±Ã‹Â·x\"c|ÃufUÃ¿Æ’Ã¾Ã˜\0ËœÃ’Â§5ÃžjÃˆÂ©}â€PknÃŒÅ¡RlÂ¾â€°fÃ™ÂªÃ +Ã²â€œÃ‘Ã›Â£â€šÂ¢>c4Ã†Ã—W+TÃ½DoÂ®Ã’Ã¯ â€™Ã‡Ã·qÃ®Â¯Ã‰â‚¬SXâ€™Â¨Ãb}}Ã…hnÂµ&<Ã?â„¢/3Âºâ€-ÃƒÂ¡hâ€ Â°Â©qnâ€°Ã½Â§	ÃµpÆ’%)SÃ‰yP\râ€¦Ã›ÃÂµÃ¿m-ÃfÂ5Â°Å Âº[â‚¬\\â€“=ÃŒTÃ }Ã¸y )Ã½Ã§ YdÃ§Â«Ã˜Â¤46#Y>Â¥3Ã”Å’Ã— Å¡mÂ©Ãº\n09h;Â²4ËœÂ°Ã‚0â€šÃƒ+ÃŸaÂe\nÃˆÆ’Ã„Â°ÃˆÅ¾!ÂÃŠÃ…Ã¼Ã‘)â€˜@Ã´xÂ¢x }â€¡\$Â¦Ã–ÃŸÃ½AFÅ’ÃºÃƒâ€˜Â²0NÃ¶ RÃ£	ÂºÂ°Ã¾Ã“â€žÃ¨iÃœÂ¥Ã¼Â¬UÂ¬?Â½Â¡â€”b5Ã­!+Ã—Â­\0GËœÃ½Ã˜w{Â¶Ã®Ã“Â¤â€”Ã¯lI Â£)â€™w-4;p8Ã‚ÃŽÃ˜Â¤;@\r\n \r
 Â­â€¦ÃšN5ÂÃ†â€¦F \\Ã“Â¹hgPE il0
Â¦Ã«XÂ¦%â€™)\nË†Ã˜LkÃˆÂ^â€šÂÃ†2Â¢Ã<5FÃ˜Ã¬dâ€°IÆ’<Ã±FÃ†jÂ³bMÂ¬d'Ã¡	Â¶Ã†Â²DÂ£Ã¢Ã®Å½ÂBmaÂ²ÃÃ’Ã¶â€¦Ã½OYÃ±XggÂ¼8Â¥Ã§ZVÃ˜%mfÂ¬Ã”%Ã¥â‚¬FÂ¡-Â¥,Ã‰\nÆ’â€˜Ã½aÃ¹Â¤FÃ‡wfÆ’Ã´sÂ¹Ã§Â¬ÃŠ0GÃ¤Â¹â€˜Ã˜ZÂ²\n	1â€ ;JÂÃ­â€“1Ã\"iPÃ±BÃˆyÂ´CÂ¬â€“ÃŒÃ»Â²tâ€”zÃ“â€°Ã£Ã‘Ã–;lâ€š4Ã¢ÃˆÃ’Â¡â€šÆ’Jâ€¡â€mLXÂ²+lÃ¡ËœÂªÃµ{Ã‚8Â¬\"Ã¢\nÃŒVÃÃ€Å¡Ã„Ã›(Ãš\$Y\0Ã­d\\Ãâ€ 6â€ºD9BÂ´HÂ±d%Â¦Ã“Ã®â€“1ÂÃ›ÃËœ6f Ã‘\"ÃŠTÂJÃ–Ãš`/Â²â€¡>ÃŠC=Ã„câ€œÃ¬Â¨Â±Â¼Â²?e!Ã½k*Â±3l~Æ’ÃƒÃ“iÃ¿Â«,
Ã—Aâ€šÂz/dÃ 
Â¨Â¦MoÃ¬Ã…Ã­Â´ÃšÂ²nÃ‘\"Ã‰Â½â€žÂÃÃ‚Ã«Ã†zTr}eÃ™Å’{MÃ€aCÃ”7â€˜fiTÂºÃµâ€”Ã‹/6WÂ¢Â©ÂPÂ²Ã¬Ã–ÃŒ8â€ Fa`ÃÃ¬Â¾ 5Â³Ã³Â©Â¹Mâ€¦f2V]Å“['}cn4]hÂ·Ã­Ã–eÂ«Â¦â€¹Zâ‚¬Ã…Â§\râ„¢â€¹2Ã‰ÃˆÂ½XllGa`(Â­â„¢â€”Ã›(â€šÅ Ã„Ã²\0Ã¨Ã„Ã½Å¡Ã_Ã¶lOËœÃ¹f&fÃ„1c8Ã¬D{Â¼QÃ¦Ãœ	S
6Ã¶p\0Ã¤YÃ‚ËœÃ¦Â¹Ëœâ„¢Ã®\0\rÃ¶qâ€¦3
m&*fÃŽ;ÃŒpÃ²6r^cÅ’ÃÂ³Â¨â€”`Ã‰Âµ&zâ‚¬n^ÃšÂ±Ã¹;DÃˆÃ¨SÃ£Â¤oj^Ã£=Â¿L'gâ€5Å“â€œÃ„&Æ’Ã¬Ã¤â€¡Ef&Ã±ÃžÃ|\nK 6?bX*Â¬.fÃË†EÆ’Ã»â€“~&9Ã™!ËœÃ§dÅ’k@â€°v\"FÂ¬GÅ¡x\\Ã©=Ã½EÅ 7Ã¯XP2[:ÃÂ¶\0Æ’Ã—Å½Ã Â¡ X~Â¦Â½7Â·ÃÃ¢X6â€ 4Â²Å“Ã‰(Ãƒ\";BÃ¬\nÃžÃ½XÃ—Ã‘hyÂ¹ÃŒ&â€ºDÃ–Ë†Ã›ZÂ¼l\nKCâ€“â€°Ã­Å¡Å¸â€ ÂpÃ˜â€™Ã„`mSÂ®	2ÃUÂ¢;GÃ â€¢â€˜8Â¶Â´{ â€™Ã‘-â€Â±WBmÃ¬Â¸\$Fâ‚¬Ã¸\rÃ l&Bâ€¡Y2\rÂ´Â¨mAÂÃ…â€˜Â°wÃ„ZÃ˜6Ã˜RÃâ€™Â¿Ã%dÂ´Å’ÃÃ‚Ãš_Â²Å“TÃ´5Â¦``BaÃÃ™GÂ´Ã•cÃ¡XKÃ¶\rÂ¶Ëœ\0Â­Ã˜gNÂ¼Ã¹\\â€˜Â´Â¾;NÃ Â¨Ã Ã„Ãšs^\nÅ’ÃŒuÂ§Ã¤Â¿Å¸Â­Ã‘Â²VwzÃ„U F\"\0T-Â±,^â€™ÃŽ\0â€¹ÃŽÃ¶â€”Ã¨2 /Ã¦â„¢ Ã³Ã‚ÃÃ EWÅ¾/\0Ã‚Â¼Ã²â€“Ã’Ã„Â¾Ã‹4;\"Ã¬K-NZÅ¡
Â½ÃMcÃŽÂ»RVNeÅ“ZÂ¦wjâ€“Ã‚Å 6Ã«Â¯aÂ¶Ã·yÃŒË†Ã™Ã§Â»â€¹KVÂ®lN?ÂÂ±Ãƒjt2Â­â€“Â¶T/[Ã­NÂ¤Ã»Â±j|0t% #Â°â€â‚¬Ã¢ÂÃ‘\0Ã´Ã“`Â£Ã¸5F<â€“Â´Æ’ X@\nÃ“Â¢ÃÃ­â€¢Ã‹ZF\\-mâ€ºÂ¼Â³cd2Ã„p5GÂºv'BÃŸ'Â¢7{kÅ *'ÂLÃœAÂªZ|IÂ±kÂ´\n-.CÂ¢6Â¼Â«Â¹
Ã‡kâ€¢-Â¯Ã—Å½Â©SÃšÃºÂ°Ã·kÃ‘]Â¯Ã‹_\$ â€¦ Ãš+GÃ²Ã— [^â€¡Â­Â­z
]kÃ‘Ã‘8â€º\\Ã¶Â¿F|Â§Â¢?BË†Ã˜Ã
^ÂÃBÂ¨â€°ÃŒÅ½|Ã±â„¢Ã«@Å Â­Ã‚Ã·BÂ¯Â¥zPÃ©Å¾W /R?[!bBâ€“Ã¡Â¹kÃ€â€°Ã‘ '	(Ã£e:xfÃ râ€š7\r_Ã­Ã¢qÂ¶ MaÃª\0#Â±Ã¤7|Ã©Q&\0Ã‰Â@)ÂµÃ´â€ Ã€1Ã²Ã«Â®â€ LA[PtÃ€\0Å“â„¢Ã½`â€¡6Ã•\\eâ€˜Å¸Â¶zxÃ’ÃšSÃâ‚¬vÃ•Ë†Ãâ‚¬U:Å¾ÃšÂ±Â¿TÂ¼Ãâ€¡Ë†Ãâ€”>fÃ›\nqâ€¹lâ‚¬Ã…+K(|Â¶\\Å½Â´Ã‘ GÂâ€ºUÃ˜â€¹Â³Ã†@(Ã°*Ã‰iSÂ%FÂ¨\rR\$Â©â€¢CÂ¶Â¶LÃÃÃ„Ã¶;Ã‰dÂµÃ¬Ã„Â¼gÃ«-\$m?Ã¶lhÃŠÂÂÅ 3?PÂªYÂ\0");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0Â\0001Ã®Ã®Ã®\0\0â‚¬â„¢â„¢â„¢\0\0\0!Ã¹\0\0\0,\0\0\0\0\0\0!â€žÂÂ©Ã‹Ã­MÃ±ÃŒ*)Â¾oÃºÂ¯) qâ€¢Â¡eË†ÂµÃ®#Ã„Ã²LÃ‹\0;";break;case"cross.gif":echo"GIF89a\0\0Â\0001Ã®Ã®Ã®\0\0â‚¬â„¢â„¢â„¢\0\0\0!Ã¹\0\0\0,\0\0\0\0\0\0#â€žÂÂ©Ã‹Ã­#\naÃ–Fo~yÃƒ.Â_waâ€Ã¡1Ã§Â±JÃ®
GÃ‚LÃ—6]\0\0;";break;case"up.gif":echo"GIF89a\0\0Â\0001Ã®Ã®Ã®\0\0â‚¬â„¢â„¢â„¢\0\0\0!Ã¹\0\0\0,\0\0\0\0\0\0 â€žÂÂ©Ã‹Ã­MQN\nÃ¯}Ã´Å¾a8Å yÅ¡aÃ…Â¶Â®\0Ã‡Ã²\0;";break;case"down.gif":echo"GIF89a\0\0Â\0001Ã®Ã®Ã®\0\0â‚¬â„¢â„¢â„¢\0\0\0!Ã¹\0\0\0,\0\0\0\0\0\0 â€žÂÂ©Ã‹Ã­MÃ±ÃŒ*)Â¾[WÃ¾\\Â¢Ã‡L&Ã™Å“Ã†Â¶â€¢\0Ã‡Ã²\0;";break;case"arrow.gif":echo"GIF89a\0\n\0â‚¬\0\0â‚¬â‚¬â‚¬Ã¿Ã¿Ã¿!Ã¹\0\0\0,\0\0\0\0\0\n\0\0â€šiâ€“Â±â€¹Å¾â€ÂªÃ“Â²ÃžÂ»\0\0;";break;}}exit;}if($_GET["script"]=="version"){$ld=file_open_lock(get_temp_dir()."/adminer.version");if($ld)file_write_unlock($ld,serialize(array("signature"=>$_POST["signature"],"version"=>$_POST["version"])));exit;}global$b,$g,$m,$ic,$qc,$_c,$n,$nd,$td,$ba,$Td,$y,$ca,$me,$pf,$bg,$Gh,$yd,$ni,$ti,$U,$Hi,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";if($_SERVER["HTTP_X_FORWARDED_PREFIX"])$_SERVER["REQUEST_URI"]=$_SERVER["HTTP_X_FORWARDED_PREFIX"].$_SERVER["REQUEST_URI"];$ba=($_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off"))||ini_bool("session.cookie_secure");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_cache_limiter("");session_name("adminer_sid");$Of=array(0,preg_replace('~\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Of[]=true;call_user_func_array('session_set_cookie_params',$Of);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Yc);if(function_exists("get_magic_quotes_runtime")&&get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",15);function
get_lang(){return'en';}function
lang($si,$ef=null){if(is_array($si)){$eg=($ef==1?0:1);$si=$si[$eg];}$si=str_replace("%d","%s",$si);$ef=format_number($ef);return
sprintf($si,$ef);}if(extension_loaded('pdo')){class
Min_PDO{var$_result,$server_info,$affected_rows,$errno,$error,$pdo;function
__construct(){global$b;$eg=array_search("SQL",$b->operators);if($eg!==false)unset($b->operators[$eg]);}function
dsn($nc,$V,$F,$xf=array()){$xf[PDO::ATTR_ERRMODE]=PDO::ERRMODE_SILENT;$xf[PDO::ATTR_STATEMENT_CLASS]=array('Min_PDOStatement');try{$this->pdo=new
PDO($nc,$V,$F,$xf);}catch(Exception$Fc){auth_error(h($Fc->getMessage()));}$this->server_info=@$this->pdo->getAttribute(PDO::ATTR_SERVER_VERSION);}function
quote($P){return$this->pdo->quote($P);}function
query($G,$Bi=false){$H=$this->pdo->query($G);$this->error="";if(!$H){list(,$this->errno,$this->error)=$this->pdo->errorInfo();if(!$this->error)$this->error='Unknown error.';return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;if(!$H)return
false;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(PDO::FETCH_ASSOC);}function
fetch_row(){return$this->fetch(PDO::FETCH_NUM);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$ic=array();function
add_driver($u,$D){global$ic;$ic[$u]=$D;}class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($Q,$L,$Z,$qd,$zf=array(),$_=1,$E=0,$mg=false){global$b,$y;$ae=(count($qd)<count($L));$G=$b->selectQueryBuild($L,$Z,$qd,$zf,$_,$E);if(!$G)$G="SELECT".limit(($_GET["page"]!="last"&&$_!=""&&$qd&&$ae&&$y=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$L)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($qd&&$ae?"\nGROUP BY ".implode(", ",$qd):"").($zf?"\nORDER BY ".implode(", ",$zf):""),($_!=""?+$_:null),($E?$_*$E:0),"\n");$Ch=microtime(true);$I=$this->_conn->query($G);if($mg)echo$b->selectQuery($G,$Ch,!$I);return$I;}function
delete($Q,$wg,$_=0){$G="FROM ".table($Q);return
queries("DELETE".($_?limit1($Q,$G,$wg):" $G$wg"));}function
update($Q,$N,$wg,$_=0,$hh="\n"){$Ti=array();foreach($N
as$z=>$X)$Ti[]="$z = $X";$G=table($Q)." SET$hh".implode(",$hh",$Ti);return
queries("UPDATE".($_?limit1($Q,$G,$wg,$hh):" $G$wg"));}function
insert($Q,$N){return
queries("INSERT INTO ".table($Q).($N?" (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$K,$kg){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}function
slowQuery($G,$ei){}function
convertSearch($v,$X,$o){return$v;}function
value($X,$o){return(method_exists($this->_conn,'value')?$this->_conn->value($X,$o):(is_resource($X)?stream_get_contents($X):$X));}function
quoteBinary($Xg){return
q($Xg);}function
warnings(){return'';}function
tableHelp($D){}}$ic["sqlite"]="SQLite 3";$ic["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($q){$this->_link=new
SQLite3($q);$Wi=$this->_link->version();$this->server_info=$Wi["versionString"];}function
query($G){$H=@$this->_link->query($G);$this->error="";if(!$H){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($H->numColumns())return
new
Min_Result($H);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetchArray();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$T=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$T,"charsetnr"=>($T==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($q){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($q);}function
query($G,$Bi=false){$Pe=($Bi?"unbufferedQuery":"query");$H=@$this->_link->$Pe($G,SQLITE_BOTH,$n);$this->error="";if(!$H){$this->error=$n;return
false;}elseif($H===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($H);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetch();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;if(method_exists($H,'numRows'))$this->num_rows=$H->numRows();}function
fetch_assoc(){$J=$this->_result->fetch(SQLITE_ASSOC);if(!$J)return
false;$I=array();foreach($J
as$z=>$X)$I[idf_unescape($z)]=$X;return$I;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$Zf='(\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Zf\\.)?$Zf\$~",$D,$C)){$Q=($C[3]!=""?$C[3]:idf_unescape($C[2]));$D=($C[5]!=""?$C[5]:idf_unescape($C[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($q){$this->dsn(DRIVER.":$q","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");$this->query("PRAGMA foreign_keys = 1");}function
select_db($q){if(is_readable($q)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$q)?$q:dirname($_SERVER["SCRIPT_FILENAME"])."/$q")." AS a")){parent::__construct($q);$this->query("PRAGMA foreign_keys = 1");$this->query("PRAGMA busy_timeout = 500");return
true;}return
false;}function
multi_query($G){return$this->_result=$this->query($G);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$K,$kg){$Ti=array();foreach($K
as$N)$Ti[]="(".implode(", ",$N).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($K))).") VALUES\n".implode(",\n",$Ti));}function
tableHelp($D){if($D=="sqlite_sequence")return"fileformat2.html#seqtab";if($D=="sqlite_master")return"fileformat2.html#$D";}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b;list(,,$F)=$b->credentials();if($F!="")return'Database does not support password.';return
new
Min_DB;}function
get_databases(){return
array();}function
limit($G,$Z,$_,$hf=0,$hh=" "){return" $G$Z".($_!==null?$hh."LIMIT $_".($hf?" OFFSET $hf":""):"");}function
limit1($Q,$G,$Z,$hh="\n"){global$g;return(preg_match('~^INTO~',$G)||$g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($G,$Z,1,0,$hh):" $G WHERE rowid = (SELECT rowid FROM ".table($Q).$Z.$hh."LIMIT 1)");}function
db_collation($l,$lb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name");}function
count_tables($k){return
array();}function
table_status($D=""){global$g;$I=array();foreach(get_rows("SELECT name AS Name, type AS Engine, 'rowid' AS Oid, '' AS Auto_increment FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$J){$J["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($J["Name"]));$I[$J["Name"]]=$J;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$J)$I[$J["name"]]["Auto_increment"]=$J["seq"];return($D!=""?$I[$D]:$I);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$g;$I=array();$kg="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$J){$D=$J["name"];$T=strtolower($J["type"]);$Wb=$J["dflt_value"];$I[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$T)?"integer":(preg_match('~char|clob|text~i',$T)?"text":(preg_match('~blob~i',$T)?"blob":(preg_match('~real|floa|doub~i',$T)?"real":"numeric")))),"full_type"=>$T,"default"=>(preg_match("~'(.*)'~",$Wb,$C)?str_replace("''","'",$C[1]):($Wb=="NULL"?null:$Wb)),"null"=>!$J["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$J["pk"],);if($J["pk"]){if($kg!="")$I[$kg]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$T))$I[$D]["auto_increment"]=true;$kg=$D;}}$yh=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$yh,$Ce,PREG_SET_ORDER);foreach($Ce
as$C){$D=str_replace('""','"',preg_replace('~^"|"$~','',$C[1]));if($I[$D])$I[$D]["collation"]=trim($C[3],"'");}return$I;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$I=array();$yh=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*"|`[^`]*`)++)~i',$yh,$C)){$I[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+|(?:`[^`]*+`)+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$C[1],$Ce,PREG_SET_ORDER);foreach($Ce
as$C){$I[""]["columns"][]=idf_unescape($C[2]).$C[4];$I[""]["descs"][]=(preg_match('~DESC~i',$C[5])?'1':null);}}if(!$I){foreach(fields($Q)as$D=>$o){if($o["primary"])$I[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$Ah=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$h);foreach(get_rows("PRAGMA index_list(".table($Q).")",$h)as$J){$D=$J["name"];$w=array("type"=>($J["unique"]?"UNIQUE":"INDEX"));$w["lengths"]=array();$w["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$h)as$Wg){$w["columns"][]=$Wg["name"];$w["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$Ah[$D],$Gg)){preg_match_all('/("[^"]*+")+( DESC)?/',$Gg[2],$Ce);foreach($Ce[2]as$z=>$X){if($X)$w["descs"][$z]='1';}}if(!$I[""]||$w["type"]!="UNIQUE"||$w["columns"]!=$I[""]["columns"]||$w["descs"]!=$I[""]["descs"]||!preg_match("~^sqlite_~",$D))$I[$D]=$w;}return$I;}function
foreign_keys($Q){$I=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$J){$r=&$I[$J["id"]];if(!$r)$r=$J;$r["source"][]=$J["from"];$r["target"][]=$J["to"];}return$I;}function
view($D){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($l){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($D){global$g;$Oc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Oc)\$~",$D)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Oc));return
false;}return
true;}function
create_database($l,$d){global$g;if(file_exists($l)){$g->error='File exists.';return
false;}if(!check_sqlite_name($l))return
false;try{$A=new
Min_SQLite($l);}catch(Exception$Fc){$g->error=$Fc->getMessage();return
false;}$A->query('PRAGMA encoding = "UTF-8"');$A->query('CREATE TABLE adminer (i)');$A->query('DROP TABLE adminer');return
true;}function
drop_databases($k){global$g;$g->__construct(":memory:");foreach($k
as$l){if(!@unlink($l)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($D,$d){global$g;if(!check_sqlite_name($D))return
false;$g->__construct(":memory:");$g->error='File exists.';return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$D,$p,$fd,$rb,$yc,$d,$Ka,$Tf){global$g;$Mi=($Q==""||$fd);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Mi=true;break;}}$c=array();$Hf=array();foreach($p
as$o){if($o[1]){$c[]=($Mi?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$Hf[$o[0]]=$o[1][0];}}if(!$Mi){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$D&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($Q,$D,$c,$Hf,$fd,$Ka))return
false;if($Ka){queries("BEGIN");queries("UPDATE sqlite_sequence SET seq = $Ka WHERE name = ".q($D));if(!$g->affected_rows)queries("INSERT INTO sqlite_sequence (name, seq) VALUES (".q($D).", $Ka)");queries("COMMIT");}return
true;}function
recreate_table($Q,$D,$p,$Hf,$fd,$Ka,$x=array()){global$g;if($Q!=""){if(!$p){foreach(fields($Q)as$z=>$o){if($x)$o["auto_increment"]=0;$p[]=process_field($o,$o);$Hf[$z]=idf_escape($z);}}$lg=false;foreach($p
as$o){if($o[6])$lg=true;}$lc=array();foreach($x
as$z=>$X){if($X[2]=="DROP"){$lc[$X[1]]=true;unset($x[$z]);}}foreach(indexes($Q)as$ge=>$w){$f=array();foreach($w["columns"]as$z=>$e){if(!$Hf[$e])continue
2;$f[]=$Hf[$e].($w["descs"][$z]?" DESC":"");}if(!$lc[$ge]){if($w["type"]!="PRIMARY"||!$lg)$x[]=array($w["type"],$ge,$f);}}foreach($x
as$z=>$X){if($X[0]=="PRIMARY"){unset($x[$z]);$fd[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$ge=>$r){foreach($r["source"]as$z=>$e){if(!$Hf[$e])continue
2;$r["source"][$z]=idf_unescape($Hf[$e]);}if(!isset($fd[" $ge"]))$fd[]=" ".format_foreign_key($r);}queries("BEGIN");}foreach($p
as$z=>$o)$p[$z]="  ".implode($o);$p=array_merge($p,array_filter($fd));$Yh=($Q==$D?"adminer_$D":$D);if(!queries("CREATE TABLE ".table($Yh)." (\n".implode(",\n",$p)."\n)"))return
false;if($Q!=""){if($Hf&&!queries("INSERT INTO ".table($Yh)." (".implode(", ",$Hf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Hf)))." FROM ".table($Q)))return
false;$zi=array();foreach(triggers($Q)as$xi=>$fi){$wi=trigger($xi);$zi[]="CREATE TRIGGER ".idf_escape($xi)." ".implode(" ",$fi)." ON ".table($D)."\n$wi[Statement]";}$Ka=$Ka?0:$g->result("SELECT seq FROM sqlite_sequence WHERE name = ".q($Q));if(!queries("DROP TABLE ".table($Q))||($Q==$D&&!queries("ALTER TABLE ".table($Yh)." RENAME TO ".table($D)))||!alter_indexes($D,$x))return
false;if($Ka)queries("UPDATE sqlite_sequence SET seq = $Ka WHERE name = ".q($D));foreach($zi
as$wi){if(!queries($wi))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$T,$D,$f){return"CREATE $T ".($T!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$kg){if($kg[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),0,$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Yi){return
apply_queries("DROP VIEW",$Yi);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Yi,$Wh){return
false;}function
trigger($D){global$g;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$v='(?:[^`"\s]+|`[^`]*`|"[^"]*")+';$yi=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$v\\s*(".implode("|",$yi["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($v))?\\s+ON\\s*$v\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$C);$gf=$C[3];return
array("Timing"=>strtoupper($C[1]),"Event"=>strtoupper($C[2]).($gf?" OF":""),"Of"=>idf_unescape($gf),"Trigger"=>$D,"Statement"=>$C[4],);}function
triggers($Q){$I=array();$yi=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$J){preg_match('~^CREATE\s+TRIGGER\s*(?:[^`"\s]+|`[^`]*`|"[^"]*")+\s*('.implode("|",$yi["Timing"]).')\s*(.*?)\s+ON\b~i',$J["sql"],$C);$I[$J["name"]]=array($C[1],$C[2]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$G){return$g->query("EXPLAIN QUERY PLAN $G");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ah){return
true;}function
create_sql($Q,$Ka,$Hh){global$g;$I=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$D=>$w){if($D=='')continue;$I.=";\n\n".index_sql($Q,$w['type'],$D,"(".implode(", ",array_map('idf_escape',$w['columns'])).")");}return$I;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($j){}function
trigger_sql($Q){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$g;$I=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$z)$I[$z]=$g->result("PRAGMA $z");return$I;}function
show_status(){$I=array();foreach(get_vals("PRAGMA compile_options")as$wf){list($z,$X)=explode("=",$wf,2);$I[$z]=$X;}return$I;}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Tc){return
preg_match('~^(columns|database|drop_col|dump|indexes|descidx|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Tc);}function
driver_config(){$U=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);return
array('possible_drivers'=>array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite"),'jush'=>"sqlite",'types'=>$U,'structured_types'=>array_keys($U),'unsigned'=>array(),'operators'=>array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL"),'functions'=>array("hex","length","lower","round","unixepoch","upper"),'grouping'=>array("avg","count","count distinct","group_concat","max","min","sum"),'edit_functions'=>array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",)),);}}$ic["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error,$timeout;function
_error($Ac,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($M,$V,$F){global$b;$l=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($F,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$l!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Wi=pg_version($this->_link);$this->server_info=$Wi["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
value($X,$o){return($o["type"]=="bytea"&&$X!==null?pg_unescape_bytea($X):$X);}function
quoteBinary($P){return"'".pg_escape_bytea($this->_link,$P)."'";}function
select_db($j){global$b;if($j==$b->database())return$this->_database;$I=@pg_connect("$this->_string dbname='".addcslashes($j,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($I)$this->_link=$I;return$I;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($G,$Bi=false){$H=@pg_query($this->_link,$G);$this->error="";if(!$H){$this->error=pg_last_error($this->_link);$I=false;}elseif(!pg_num_fields($H)){$this->affected_rows=pg_affected_rows($H);$I=true;}else$I=new
Min_Result($H);if($this->timeout){$this->timeout=0;$this->query("RESET statement_timeout");}return$I;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
pg_fetch_result($H->_result,0,$o);}function
warnings(){return
h(pg_last_notice($this->_link));}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;$this->num_rows=pg_num_rows($H);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$I=new
stdClass;if(function_exists('pg_field_table'))$I->orgtable=pg_field_table($this->_result,$e);$I->name=pg_field_name($this->_result,$e);$I->orgname=$I->name;$I->type=pg_field_type($this->_result,$e);$I->charsetnr=($I->type=="bytea"?63:0);return$I;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL",$timeout;function
connect($M,$V,$F){global$b;$l=$b->database();$this->dsn("pgsql:host='".str_replace(":","' port='",addcslashes($M,"'\\"))."' client_encoding=utf8 dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",$V,$F);return
true;}function
select_db($j){global$b;return($b->database()==$j);}function
quoteBinary($Xg){return
q($Xg);}function
query($G,$Bi=false){$I=parent::query($G,$Bi);if($this->timeout){$this->timeout=0;parent::query("RESET statement_timeout");}return$I;}function
warnings(){return'';}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$K,$kg){global$g;foreach($K
as$N){$Ii=array();$Z=array();foreach($N
as$z=>$X){$Ii[]="$z = $X";if(isset($kg[idf_unescape($z)]))$Z[]="$z = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Ii)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")")))return
false;}return
true;}function
slowQuery($G,$ei){$this->_conn->query("SET statement_timeout = ".(1000*$ei));$this->_conn->timeout=1000*$ei;return$G;}function
convertSearch($v,$X,$o){return(preg_match('~char|text'.(!preg_match('~LIKE~',$X["op"])?'|date|time(stamp)?|boolean|uuid|'.number_type():'').'~',$o["type"])?$v:"CAST($v AS text)");}function
quoteBinary($Xg){return$this->_conn->quoteBinary($Xg);}function
warnings(){return$this->_conn->warnings();}function
tableHelp($D){$we=array("information_schema"=>"infoschema","pg_catalog"=>"catalog",);$A=$we[$_GET["ns"]];if($A)return"$A-".str_replace("_","-",$D).".html";}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b,$U,$Gh;$g=new
Min_DB;$Kb=$b->credentials();if($g->connect($Kb[0],$Kb[1],$Kb[2])){if(min_version(9,0,$g)){$g->query("SET application_name = 'Adminer'");if(min_version(9.2,0,$g)){$Gh['Strings'][]="json";$U["json"]=4294967295;if(min_version(9.4,0,$g)){$Gh['Strings'][]="jsonb";$U["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($G,$Z,$_,$hf=0,$hh=" "){return" $G$Z".($_!==null?$hh."LIMIT $_".($hf?" OFFSET $hf":""):"");}function
limit1($Q,$G,$Z,$hh="\n"){return(preg_match('~^INTO~',$G)?limit($G,$Z,1,0,$hh):" $G".(is_view(table_status1($Q))?$Z:" WHERE ctid = (SELECT ctid FROM ".table($Q).$Z.$hh."LIMIT 1)"));}function
db_collation($l,$lb){global$g;return$g->result("SELECT datcollate FROM pg_database WHERE datname = ".q($l));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$G="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$G.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$G.="
ORDER BY 1";return
get_key_vals($G);}function
count_tables($k){return
array();}function
table_status($D=""){$I=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", ".(min_version(12)?"''":"CASE WHEN c.relhasoids THEN 'oid' ELSE '' END")." AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v', 'f', 'p')
".($D!=""?"AND relname = ".q($D):"ORDER BY relname"))as$J)$I[$J["Name"]]=$J;return($D!=""?$I[$D]:$I);}function
is_view($R){return
in_array($R["Engine"],array("view","materialized view"));}function
fk_support($R){return
true;}function
fields($Q){$I=array();$Ba=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, pg_get_expr(d.adbin, d.adrelid) AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment".(min_version(10)?", a.attidentity":"")."
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$J){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$J["full_type"],$C);list(,$T,$te,$J["length"],$wa,$Ea)=$C;$J["length"].=$Ea;$bb=$T.$wa;if(isset($Ba[$bb])){$J["type"]=$Ba[$bb];$J["full_type"]=$J["type"].$te.$Ea;}else{$J["type"]=$T;$J["full_type"]=$J["type"].$te.$wa.$Ea;}if(in_array($J['attidentity'],array('a','d')))$J['default']='GENERATED '.($J['attidentity']=='d'?'BY DEFAULT':'ALWAYS').' AS IDENTITY';$J["null"]=!$J["attnotnull"];$J["auto_increment"]=$J['attidentity']||preg_match('~^nextval\(~i',$J["default"]);$J["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^,)]+(.*)~',$J["default"],$C))$J["default"]=($C[1]=="NULL"?null:idf_unescape($C[1]).$C[2]);$I[$J["field"]]=$J;}return$I;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$I=array();$Ph=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ph AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption, (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $Ph AND ci.oid = i.indexrelid",$h)as$J){$Hg=$J["relname"];$I[$Hg]["type"]=($J["indispartial"]?"INDEX":($J["indisprimary"]?"PRIMARY":($J["indisunique"]?"UNIQUE":"INDEX")));$I[$Hg]["columns"]=array();foreach(explode(" ",$J["indkey"])as$Pd)$I[$Hg]["columns"][]=$f[$Pd];$I[$Hg]["descs"]=array();foreach(explode(" ",$J["indoption"])as$Qd)$I[$Hg]["descs"][]=($Qd&1?'1':null);$I[$Hg]["lengths"]=array();}return$I;}function
foreign_keys($Q){global$pf;$I=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$J){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$J['definition'],$C)){$J['source']=array_map('idf_unescape',array_map('trim',explode(',',$C[1])));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$C[2],$Be)){$J['ns']=idf_unescape($Be[2]);$J['table']=idf_unescape($Be[4]);}$J['target']=array_map('idf_unescape',array_map('trim',explode(',',$C[3])));$J['on_delete']=(preg_match("~ON DELETE ($pf)~",$C[4],$Be)?$Be[1]:'NO ACTION');$J['on_update']=(preg_match("~ON UPDATE ($pf)~",$C[4],$Be)?$Be[1]:'NO ACTION');$I[$J['conname']]=$J;}}return$I;}function
constraints($Q){global$pf;$I=array();foreach(get_rows("SELECT conname, consrc
FROM pg_catalog.pg_constraint
INNER JOIN pg_catalog.pg_namespace ON pg_constraint.connamespace = pg_namespace.oid
INNER JOIN pg_catalog.pg_class ON pg_constraint.conrelid = pg_class.oid AND pg_constraint.connamespace = pg_class.relnamespace
WHERE pg_constraint.contype = 'c'
AND conrelid != 0 -- handle only CONSTRAINTs here, not TYPES
AND nspname = current_schema()
AND relname = ".q($Q)."
ORDER BY connamespace, conname")as$J)$I[$J['conname']]=$J['consrc'];return$I;}function
view($D){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".$g->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($D)).")")));}function
collations(){return
array();}function
information_schema($l){return($l=="information_schema");}function
error(){global$g;$I=h($g->error);if(preg_match('~^(.*\n)?([^\n]*)\n( *)\^(\n.*)?$~s',$I,$C))$I=$C[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($C[3]).'})(.*)~','\1<b>\2</b>',$C[2]).$C[4];return
nl_br($I);}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($k){global$g;$g->close();return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($D,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($Q,$D,$p,$fd,$rb,$yc,$d,$Ka,$Tf){$c=array();$vg=array();if($Q!=""&&$Q!=$D)$vg[]="ALTER TABLE ".table($Q)." RENAME TO ".table($D);foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$Si=$X[5];unset($X[5]);if($o[0]==""){if(isset($X[6]))$X[1]=($X[1]==" bigint"?" big":($X[1]==" smallint"?" small":" "))."serial";$c[]=($Q!=""?"ADD ":"  ").implode($X);if(isset($X[6]))$c[]=($Q!=""?"ADD":" ")." PRIMARY KEY ($X[0])";}else{if($e!=$X[0])$vg[]="ALTER TABLE ".table($D)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Si!="")$vg[]="COMMENT ON COLUMN ".table($D).".$X[0] IS ".($Si!=""?substr($Si,9):"''");}}$c=array_merge($c,$fd);if($Q=="")array_unshift($vg,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($vg,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""||$rb!="")$vg[]="COMMENT ON TABLE ".table($D)." IS ".q($rb);if($Ka!=""){}foreach($vg
as$G){if(!queries($G))return
false;}return
true;}function
alter_indexes($Q,$c){$i=array();$jc=array();$vg=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$jc[]=idf_escape($X[1]);else$vg[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($i)array_unshift($vg,"ALTER TABLE ".table($Q).implode(",",$i));if($jc)array_unshift($vg,"DROP INDEX ".implode(", ",$jc));foreach($vg
as$G){if(!queries($G))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Yi){return
drop_tables($Yi);}function
drop_tables($S){foreach($S
as$Q){$O=table_status($Q);if(!queries("DROP ".strtoupper($O["Engine"])." ".table($Q)))return
false;}return
true;}function
move_tables($S,$Yi,$Wh){foreach(array_merge($S,$Yi)as$Q){$O=table_status($Q);if(!queries("ALTER ".strtoupper($O["Engine"])." ".table($Q)." SET SCHEMA ".idf_escape($Wh)))return
false;}return
true;}function
trigger($D,$Q){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$f=array();$Z="WHERE trigger_schema = current_schema() AND event_object_table = ".q($Q)." AND trigger_name = ".q($D);foreach(get_rows("SELECT * FROM information_schema.triggered_update_columns $Z")as$J)$f[]=$J["event_object_column"];$I=array();foreach(get_rows('SELECT trigger_name AS "Trigger", action_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers '."$Z ORDER BY event_manipulation DESC")as$J){if($f&&$J["Event"]=="UPDATE")$J["Event"].=" OF";$J["Of"]=implode(", ",$f);if($I)$J["Event"].=" OR $I[Event]";$I=$J;}return$I;}function
triggers($Q){$I=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE trigger_schema = current_schema() AND event_object_table = ".q($Q))as$J){$wi=trigger($J["trigger_name"],$Q);$I[$wi["Trigger"]]=array($wi["Timing"],$wi["Event"]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE","INSERT OR UPDATE","INSERT OR UPDATE OF","DELETE OR INSERT","DELETE OR UPDATE","DELETE OR UPDATE OF","DELETE OR INSERT OR UPDATE","DELETE OR INSERT OR UPDATE OF"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routine($D,$T){$K=get_rows('SELECT routine_definition AS definition, LOWER(external_language) AS language, *
FROM information_schema.routines
WHERE routine_schema = current_schema() AND specific_name = '.q($D));$I=$K[0];$I["returns"]=array("type"=>$I["type_udt_name"]);$I["fields"]=get_rows('SELECT parameter_name AS field, data_type AS type, character_maximum_length AS length, parameter_mode AS inout
FROM information_schema.parameters
WHERE specific_schema = current_schema() AND specific_name = '.q($D).'
ORDER BY ordinal_position');return$I;}function
routines(){return
get_rows('SELECT specific_name AS "SPECIFIC_NAME", routine_type AS "ROUTINE_TYPE", routine_name AS "ROUTINE_NAME", type_udt_name AS "DTD_IDENTIFIER"
FROM information_schema.routines
WHERE routine_schema = current_schema()
ORDER BY SPECIFIC_NAME');}function
routine_languages(){return
get_vals("SELECT LOWER(lanname) FROM pg_catalog.pg_language");}function
routine_id($D,$J){$I=array();foreach($J["fields"]as$o)$I[]=$o["type"];return
idf_escape($D)."(".implode(", ",$I).")";}function
last_id(){return
0;}function
explain($g,$G){return$g->query("EXPLAIN $G");}function
found_rows($R,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Gg))return$Gg[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Zg,$h=null){global$g,$U,$Gh;if(!$h)$h=$g;$I=$h->query("SET search_path TO ".idf_escape($Zg));foreach(types()as$T){if(!isset($U[$T])){$U[$T]=0;$Gh['User types'][]=$T;}}return$I;}function
foreign_keys_sql($Q){$I="";$O=table_status($Q);$cd=foreign_keys($Q);ksort($cd);foreach($cd
as$bd=>$ad)$I.="ALTER TABLE ONLY ".idf_escape($O['nspname']).".".idf_escape($O['Name'])." ADD CONSTRAINT ".idf_escape($bd)." $ad[definition] ".($ad['deferrable']?'DEFERRABLE':'NOT DEFERRABLE').";\n";return($I?"$I\n":$I);}function
create_sql($Q,$Ka,$Hh){global$g;$I='';$Pg=array();$jh=array();$O=table_status($Q);if(is_view($O)){$Xi=view($Q);return
rtrim("CREATE VIEW ".idf_escape($Q)." AS $Xi[select]",";");}$p=fields($Q);$x=indexes($Q);ksort($x);$Ab=constraints($Q);if(!$O||empty($p))return
false;$I="CREATE TABLE ".idf_escape($O['nspname']).".".idf_escape($O['Name'])." (\n    ";foreach($p
as$Vc=>$o){$Qf=idf_escape($o['field']).' '.$o['full_type'].default_value($o).($o['attnotnull']?" NOT NULL":"");$Pg[]=$Qf;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$Ce)){$ih=$Ce[1];$xh=reset(get_rows(min_version(10)?"SELECT *, cache_size AS cache_value FROM pg_sequences WHERE schemaname = current_schema() AND sequencename = ".q($ih):"SELECT * FROM $ih"));$jh[]=($Hh=="DROP+CREATE"?"DROP SEQUENCE IF EXISTS $ih;\n":"")."CREATE SEQUENCE $ih INCREMENT $xh[increment_by] MINVALUE $xh[min_value] MAXVALUE $xh[max_value]".($Ka&&$xh['last_value']?" START $xh[last_value]":"")." CACHE $xh[cache_value];";}}if(!empty($jh))$I=implode("\n\n",$jh)."\n\n$I";foreach($x
as$Kd=>$w){switch($w['type']){case'UNIQUE':$Pg[]="CONSTRAINT ".idf_escape($Kd)." UNIQUE (".implode(', ',array_map('idf_escape',$w['columns'])).")";break;case'PRIMARY':$Pg[]="CONSTRAINT ".idf_escape($Kd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$w['columns'])).")";break;}}foreach($Ab
as$xb=>$zb)$Pg[]="CONSTRAINT ".idf_escape($xb)." CHECK $zb";$I.=implode(",\n    ",$Pg)."\n) WITH (oids = ".($O['Oid']?'true':'false').");";foreach($x
as$Kd=>$w){if($w['type']=='INDEX'){$f=array();foreach($w['columns']as$z=>$X)$f[]=idf_escape($X).($w['descs'][$z]?" DESC":"");$I.="\n\nCREATE INDEX ".idf_escape($Kd)." ON ".idf_escape($O['nspname']).".".idf_escape($O['Name'])." USING btree (".implode(', ',$f).");";}}if($O['Comment'])$I.="\n\nCOMMENT ON TABLE ".idf_escape($O['nspname']).".".idf_escape($O['Name'])." IS ".q($O['Comment']).";";foreach($p
as$Vc=>$o){if($o['comment'])$I.="\n\nCOMMENT ON COLUMN ".idf_escape($O['nspname']).".".idf_escape($O['Name']).".".idf_escape($Vc)." IS ".q($o['comment']).";";}return
rtrim($I,';');}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
trigger_sql($Q){$O=table_status($Q);$I="";foreach(triggers($Q)as$vi=>$ui){$wi=trigger($vi,$O['Name']);$I.="\nCREATE TRIGGER ".idf_escape($wi['Trigger'])." $wi[Timing] $wi[Event] ON ".idf_escape($O["nspname"]).".".idf_escape($O['Name'])." $wi[Type] $wi[Statement];;\n";}return$I;}function
use_sql($j){return"\connect ".idf_escape($j);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".(min_version(9.2)?"pid":"procpid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Tc){return
preg_match('~^(database|table|columns|sql|indexes|descidx|comment|view|'.(min_version(9.3)?'materializedview|':'').'scheme|routine|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Tc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}function
driver_config(){$U=array();$Gh=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$z=>$X){$U+=$X;$Gh[$z]=array_keys($X);}return
array('possible_drivers'=>array("PgSQL","PDO_PgSQL"),'jush'=>"pgsql",'types'=>$U,'structured_types'=>$Gh,'unsigned'=>array(),'operators'=>array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL"),'functions'=>array("char_length","lower","round","to_hex","to_timestamp","upper"),'grouping'=>array("avg","count","count distinct","max","min","sum"),'edit_functions'=>array(array("char"=>"md5","date|time"=>"now",),array(number_type()=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",)),);}}$ic["oracle"]="Oracle (beta)";if(isset($_GET["oracle"])){define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;var$_current_db;function
_error($Ac,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($M,$V,$F){$this->_link=@oci_new_connect($V,$F,$M,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($j){$this->_current_db=$j;return
true;}function
query($G,$Bi=false){$H=oci_parse($this->_link,$G);$this->error="";if(!$H){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$I=@oci_execute($H);restore_error_handler();if($I){if(oci_num_fields($H))return
new
Min_Result($H);$this->affected_rows=oci_num_rows($H);oci_free_statement($H);}return$I;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=1){$H=$this->query($G);if(!is_object($H)||!oci_fetch($H->_result))return
false;return
oci_result($H->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$z=>$X){if(is_a($X,'OCI-Lob'))$J[$z]=$X->load();}return$J;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$I=new
stdClass;$I->name=oci_field_name($this->_result,$e);$I->orgname=$I->name;$I->type=oci_field_type($this->_result,$e);$I->charsetnr=(preg_match("~raw|blob|bfile~",$I->type)?63:0);return$I;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";var$_current_db;function
connect($M,$V,$F){$this->dsn("oci:dbname=//$M;charset=AL32UTF8",$V,$F);return
true;}function
select_db($j){$this->_current_db=$j;return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}function
insertUpdate($Q,$K,$kg){global$g;foreach($K
as$N){$Ii=array();$Z=array();foreach($N
as$z=>$X){$Ii[]="$z = $X";if(isset($kg[idf_unescape($z)]))$Z[]="$z = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Ii)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).")")))return
false;}return
true;}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b;$g=new
Min_DB;$Kb=$b->credentials();if($g->connect($Kb[0],$Kb[1],$Kb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces ORDER BY 1");}function
limit($G,$Z,$_,$hf=0,$hh=" "){return($hf?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $G$Z) t WHERE rownum <= ".($_+$hf).") WHERE rnum > $hf":($_!==null?" * FROM (SELECT $G$Z) WHERE rownum <= ".($_+$hf):" $G$Z"));}function
limit1($Q,$G,$Z,$hh="\n"){return" $G$Z";}function
db_collation($l,$lb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
get_current_db(){global$g;$l=$g->_current_db?$g->_current_db:DB;unset($g->_current_db);return$l;}function
where_owner($ig,$Kf="owner"){if(!$_GET["ns"])return'';return"$ig$Kf = sys_context('USERENV', 'CURRENT_SCHEMA')";}function
views_table($f){$Kf=where_owner('');return"(SELECT $f FROM all_views WHERE ".($Kf?$Kf:"rownum < 0").")";}function
tables_list(){$Xi=views_table("view_name");$Kf=where_owner(" AND ");return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."$Kf
UNION SELECT view_name, 'view' FROM $Xi
ORDER BY 1");}function
count_tables($k){global$g;$I=array();foreach($k
as$l)$I[$l]=$g->result("SELECT COUNT(*) FROM all_tables WHERE tablespace_name = ".q($l));return$I;}function
table_status($D=""){$I=array();$bh=q($D);$l=get_current_db();$Xi=views_table("view_name");$Kf=where_owner(" AND ");foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q($l).$Kf.($D!=""?" AND table_name = $bh":"")."
UNION SELECT view_name, 'view', 0, 0 FROM $Xi".($D!=""?" WHERE view_name = $bh":"")."
ORDER BY 1")as$J){if($D!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$I=array();$Kf=where_owner(" AND ");foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)."$Kf ORDER BY column_id")as$J){$T=$J["DATA_TYPE"];$te="$J[DATA_PRECISION],$J[DATA_SCALE]";if($te==",")$te=$J["CHAR_COL_DECL_LENGTH"];$I[$J["COLUMN_NAME"]]=array("field"=>$J["COLUMN_NAME"],"full_type"=>$T.($te?"($te)":""),"type"=>strtolower($T),"length"=>$te,"default"=>$J["DATA_DEFAULT"],"null"=>($J["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$I;}function
indexes($Q,$h=null){$I=array();$Kf=where_owner(" AND ","aic.table_owner");foreach(get_rows("SELECT aic.*, ac.constraint_type, atc.data_default
FROM all_ind_columns aic
LEFT JOIN all_constraints ac ON aic.index_name = ac.constraint_name AND aic.table_name = ac.table_name AND aic.index_owner = ac.owner
LEFT JOIN all_tab_cols atc ON aic.column_name = atc.column_name AND aic.table_name = atc.table_name AND aic.index_owner = atc.owner
WHERE aic.table_name = ".q($Q)."$Kf
ORDER BY ac.constraint_type, aic.column_position",$h)as$J){$Kd=$J["INDEX_NAME"];$ob=$J["DATA_DEFAULT"];$ob=($ob?trim($ob,'"'):$J["COLUMN_NAME"]);$I[$Kd]["type"]=($J["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($J["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$I[$Kd]["columns"][]=$ob;$I[$Kd]["lengths"][]=($J["CHAR_LENGTH"]&&$J["CHAR_LENGTH"]!=$J["COLUMN_LENGTH"]?$J["CHAR_LENGTH"]:null);$I[$Kd]["descs"][]=($J["DESCEND"]&&$J["DESCEND"]=="DESC"?'1':null);}return$I;}function
view($D){$Xi=views_table("view_name, text");$K=get_rows('SELECT text "select" FROM '.$Xi.' WHERE view_name = '.q($D));return
reset($K);}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$G){$g->query("EXPLAIN PLAN FOR $G");return$g->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
auto_increment(){return"";}function
alter_table($Q,$D,$p,$fd,$rb,$yc,$d,$Ka,$Tf){$c=$jc=array();$Ef=($Q?fields($Q):array());foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");$Df=$Ef[$o[0]];if($X&&$Df){$jf=process_field($Df,$Df);if($X[2]==$jf[2])$X[2]="";}if($X)$c[]=($Q!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$jc[]=idf_escape($o[0]);}if($Q=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$jc||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$jc).")"))&&($Q==$D||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($D)));}function
alter_indexes($Q,$c){$jc=array();$vg=array();foreach($c
as$X){if($X[0]!="INDEX"){$X[2]=preg_replace('~ DESC$~','',$X[2]);$i=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");array_unshift($vg,"ALTER TABLE ".table($Q).$i);}elseif($X[2]=="DROP")$jc[]=idf_escape($X[1]);else$vg[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($jc)array_unshift($vg,"DROP INDEX ".implode(", ",$jc));foreach($vg
as$G){if(!queries($G))return
false;}return
true;}function
foreign_keys($Q){$I=array();$G="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($Q);foreach(get_rows($G)as$J)$I[$J['NAME']]=array("db"=>$J['DEST_DB'],"table"=>$J['DEST_TABLE'],"source"=>array($J['SRC_COLUMN']),"target"=>array($J['DEST_COLUMN']),"on_delete"=>$J['ON_DELETE'],"on_update"=>null,);return$I;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yi){return
apply_queries("DROP VIEW",$Yi);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){$I=get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX')) ORDER BY 1");return($I?$I:get_vals("SELECT DISTINCT owner FROM all_tables WHERE tablespace_name = ".q(DB)." ORDER BY 1"));}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($ah,$h=null){global$g;if(!$h)$h=$g;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($ah));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$K=get_rows('SELECT * FROM v$instance');return
reset($K);}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Tc){return
preg_match('~^(columns|database|drop_col|indexes|descidx|processlist|scheme|sql|status|table|variables|view)$~',$Tc);}function
driver_config(){$U=array();$Gh=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$z=>$X){$U+=$X;$Gh[$z]=array_keys($X);}return
array('possible_drivers'=>array("OCI8","PDO_OCI"),'jush'=>"oracle",'types'=>$U,'structured_types'=>$Gh,'unsigned'=>array(),'operators'=>array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL"),'functions'=>array("length","lower","round","upper"),'grouping'=>array("avg","count","count distinct","max","min","sum"),'edit_functions'=>array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",)),);}}$ic["mssql"]="MS SQL (beta)";if(isset($_GET["mssql"])){define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($M,$V,$F){global$b;$l=$b->database();$yb=array("UID"=>$V,"PWD"=>$F,"CharacterSet"=>"UTF-8");if($l!="")$yb["Database"]=$l;$this->_link=@sqlsrv_connect(preg_replace('~:~',',',$M),$yb);if($this->_link){$Rd=sqlsrv_server_info($this->_link);$this->server_info=$Rd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($G,$Bi=false){$H=sqlsrv_query($this->_link,$G);$this->error="";if(!$H){$this->_get_error();return
false;}return$this->store_result($H);}function
multi_query($G){$this->_result=sqlsrv_query($this->_link,$G);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($H=null){if(!$H)$H=$this->_result;if(!$H)return
false;if(sqlsrv_field_metadata($H))return
new
Min_Result($H);$this->affected_rows=sqlsrv_rows_affected($H);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->fetch_row();return$J[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$z=>$X){if(is_a($X,'DateTime'))$J[$z]=$X->format("Y-m-d H:i:s");}return$J;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$I=new
stdClass;$I->name=$o["Name"];$I->orgname=$o["Name"];$I->type=($o["Type"]==1?254:0);return$I;}function
seek($hf){for($t=0;$t<$hf;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($M,$V,$F){$this->_link=@mssql_connect($M,$V,$F);if($this->_link){$H=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");if($H){$J=$H->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$J[0]] $J[1]";}}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($j){return
mssql_select_db($j);}function
query($G,$Bi=false){$H=@mssql_query($G,$this->_link);$this->error="";if(!$H){$this->error=mssql_get_last_message();return
false;}if($H===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($G,$o=0){$H=$this->query($G);if(!is_object($H))return
false;return
mssql_result($H->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($H){$this->_result=$H;$this->num_rows=mssql_num_rows($H);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$I=mssql_fetch_field($this->_result);$I->orgtable=$I->table;$I->orgname=$I->name;return$I;}function
seek($hf){mssql_data_seek($this->_result,$hf);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($M,$V,$F){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\d)~',';port=\1',$M)),$V,$F);return
true;}function
select_db($j){return$this->query("USE ".idf_escape($j));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$K,$kg){foreach($K
as$N){$Ii=array();$Z=array();foreach($N
as$z=>$X){$Ii[]="$z = $X";if(isset($kg[idf_unescape($z)]))$Z[]="$z = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$N).")) AS source (c".implode(", c",range(1,count($N))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Ii)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($N)).") VALUES (".implode(", ",$N).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($v){return"[".str_replace("]","]]",$v)."]";}function
table($v){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($v);}function
connect(){global$b;$g=new
Min_DB;$Kb=$b->credentials();if($g->connect($Kb[0],$Kb[1],$Kb[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($G,$Z,$_,$hf=0,$hh=" "){return($_!==null?" TOP (".($_+$hf).")":"")." $G$Z";}function
limit1($Q,$G,$Z,$hh="\n"){return
limit($G,$Z,1,0,$hh);}function
db_collation($l,$lb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name = ".q($l));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($k){global$g;$I=array();foreach($k
as$l){$g->select_db($l);$I[$l]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$I;}function
table_status($D=""){$I=array();foreach(get_rows("SELECT ao.name AS Name, ao.type_desc AS Engine, (SELECT value FROM fn_listextendedproperty(default, 'SCHEMA', schema_name(schema_id), 'TABLE', ao.name, null, null)) AS Comment FROM sys.all_objects AS ao WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$J){if($D!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$tb=get_key_vals("SELECT objname, cast(value as varchar(max)) FROM fn_listextendedproperty('MS_DESCRIPTION', 'schema', ".q(get_schema()).", 'table', ".q($Q).", 'column', NULL)");$I=array();foreach(get_rows("SELECT c.max_length, c.precision, c.scale, c.name, c.is_nullable, c.is_identity, c.collation_name, t.name type, CAST(d.definition as text) [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$J){$T=$J["type"];$te=(preg_match("~char|binary~",$T)?$J["max_length"]:($T=="decimal"?"$J[precision],$J[scale]":""));$I[$J["name"]]=array("field"=>$J["name"],"full_type"=>$T.($te?"($te)":""),"type"=>$T,"length"=>$te,"default"=>$J["default"],"null"=>$J["is_nullable"],"auto_increment"=>$J["is_identity"],"collation"=>$J["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$J["is_identity"],"comment"=>$tb[$J["name"]],);}return$I;}function
indexes($Q,$h=null){$I=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$h)as$J){$D=$J["name"];$I[$D]["type"]=($J["is_primary_key"]?"PRIMARY":($J["is_unique"]?"UNIQUE":"INDEX"));$I[$D]["lengths"]=array();$I[$D]["columns"][$J["key_ordinal"]]=$J["column_name"];$I[$D]["descs"][$J["key_ordinal"]]=($J["is_descending_key"]?'1':null);}return$I;}function
view($D){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\[[^]]*])*\s+AS\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$I=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$I[preg_replace('~_.*~','',$d)][]=$d;return$I;}function
information_schema($l){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\[[^]]*])+~m','',$g->error)));}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($k){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$k)));}function
rename_database($D,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$D,$p,$fd,$rb,$yc,$d,$Ka,$Tf){$c=array();$tb=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~",'\1\2',$X[1]);$tb[$o[0]]=$X[5];unset($X[5]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($fd[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$D)queries("EXEC sp_rename ".q(table($Q)).", ".q($D));if($fd)$c[""]=$fd;foreach($c
as$z=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $z".implode(",",$X)))return
false;}foreach($tb
as$z=>$X){$rb=substr($X,9);queries("EXEC sp_dropextendedproperty @name = N'MS_Description', @level0type = N'Schema', @level0name = ".q(get_schema()).", @level1type = N'Table', @level1name = ".q($D).", @level2type = N'Column', @level2name = ".q($z));queries("EXEC sp_addextendedproperty @name = N'MS_Description', @value = ".$rb.", @level0type = N'Schema', @level0name = ".q(get_schema()).", @level1type = N'Table', @level1name = ".q($D).", @level2type = N'Column', @level2name = ".q($z));}return
true;}function
alter_indexes($Q,$c){$w=array();$jc=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$jc[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$jc||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$jc)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$G){$g->query("SET SHOWPLAN_ALL ON");$I=$g->query($G);$g->query("SET SHOWPLAN_ALL OFF");return$I;}function
found_rows($R,$Z){}function
foreign_keys($Q){$I=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$J){$r=&$I[$J["FK_NAME"]];$r["db"]=$J["PKTABLE_QUALIFIER"];$r["table"]=$J["PKTABLE_NAME"];$r["source"][]=$J["FKCOLUMN_NAME"];$r["target"][]=$J["PKCOLUMN_NAME"];}return$I;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yi){return
queries("DROP VIEW ".implode(", ",array_map('table',$Yi)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Yi,$Wh){return
apply_queries("ALTER SCHEMA ".idf_escape($Wh)." TRANSFER",array_merge($S,$Yi));}function
trigger($D){if($D=="")return
array();$K=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$I=reset($K);if($I)$I["Statement"]=preg_replace('~^.+\s+AS\s+~isU','',$I["text"]);return$I;}function
triggers($Q){$I=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$J)$I[$J["name"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Zg){return
true;}function
use_sql($j){return"USE ".idf_escape($j);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
support($Tc){return
preg_match('~^(comment|columns|database|drop_col|indexes|descidx|scheme|sql|table|trigger|view|view_trigger)$~',$Tc);}function
driver_config(){$U=array();$Gh=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$z=>$X){$U+=$X;$Gh[$z]=array_keys($X);}return
array('possible_drivers'=>array("SQLSRV","MSSQL","PDO_DBLIB"),'jush'=>"mssql",'types'=>$U,'structured_types'=>$Gh,'unsigned'=>array(),'operators'=>array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL"),'functions'=>array("len","lower","round","upper"),'grouping'=>array("avg","count","count distinct","max","min","sum"),'edit_functions'=>array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",)),);}}$ic["mongo"]="MongoDB (alpha)";if(isset($_GET["mongo"])){define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$server_info=MongoClient::VERSION,$error,$last_id,$_link,$_db;function
connect($Ji,$xf){try{$this->_link=new
MongoClient($Ji,$xf);if($xf["password"]!=""){$xf["password"]="";try{new
MongoClient($Ji,$xf);$this->error='Database does not support password.';}catch(Exception$pc){}}}catch(Exception$pc){$this->error=$pc->getMessage();}}function
query($G){return
false;}function
select_db($j){try{$this->_db=$this->_link->selectDB($j);return
true;}catch(Exception$Fc){$this->error=$Fc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($H){foreach($H
as$de){$J=array();foreach($de
as$z=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$z]=63;$J[$z]=(is_a($X,'MongoId')?"ObjectId(\"$X\")":(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?"$X":(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$J;foreach($J
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$z=>$X)$I[$z]=$J[$z];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$he=array_keys($this->_rows[0]);$D=$he[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}class
Min_Driver
extends
Min_SQL{public$kg="_id";function
select($Q,$L,$Z,$qd,$zf=array(),$_=1,$E=0,$mg=false){$L=($L==array("*")?array():array_fill_keys($L,true));$uh=array();foreach($zf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Gb);$uh[$X]=($Gb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($Q)->find(array(),$L)->sort($uh)->limit($_!=""?+$_:0)->skip($E*$_));}function
insert($Q,$N){try{$I=$this->_conn->_db->selectCollection($Q)->insert($N);$this->_conn->errno=$I['code'];$this->_conn->error=$I['err'];$this->_conn->last_id=$N['_id'];return!$I['err'];}catch(Exception$Fc){$this->_conn->error=$Fc->getMessage();return
false;}}}function
get_databases($dd){global$g;$I=array();$Ub=$g->_link->listDBs();foreach($Ub['databases']as$l)$I[]=$l['name'];return$I;}function
count_tables($k){global$g;$I=array();foreach($k
as$l)$I[$l]=count($g->_link->selectDB($l)->getCollectionNames(true));return$I;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
drop_databases($k){global$g;foreach($k
as$l){$Lg=$g->_link->selectDB($l)->drop();if(!$Lg['ok'])return
false;}return
true;}function
indexes($Q,$h=null){global$g;$I=array();foreach($g->_db->selectCollection($Q)->getIndexInfo()as$w){$cc=array();foreach($w["key"]as$e=>$T)$cc[]=($T==-1?'1':null);$I[$w["name"]]=array("type"=>($w["name"]=="_id_"?"PRIMARY":($w["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($w["key"]),"lengths"=>array(),"descs"=>$cc,);}return$I;}function
fields($Q){return
fields_from_edit();}function
found_rows($R,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}$uf=array("=");}elseif(class_exists('MongoDB\Driver\Manager')){class
Min_DB{var$extension="MongoDB",$server_info=MONGODB_VERSION,$affected_rows,$error,$last_id;var$_link;var$_db,$_db_name;function
connect($Ji,$xf){$gb='MongoDB\Driver\Manager';$this->_link=new$gb($Ji,$xf);$this->executeCommand('admin',array('ping'=>1));}function
executeCommand($l,$pb){$gb='MongoDB\Driver\Command';try{return$this->_link->executeCommand($l,new$gb($pb));}catch(Exception$pc){$this->error=$pc->getMessage();return
array();}}function
executeBulkWrite($We,$Wa,$Hb){try{$Og=$this->_link->executeBulkWrite($We,$Wa);$this->affected_rows=$Og->$Hb();return
true;}catch(Exception$pc){$this->error=$pc->getMessage();return
false;}}function
query($G){return
false;}function
select_db($j){$this->_db_name=$j;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($H){foreach($H
as$de){$J=array();foreach($de
as$z=>$X){if(is_a($X,'MongoDB\BSON\Binary'))$this->_charset[$z]=63;$J[$z]=(is_a($X,'MongoDB\BSON\ObjectID')?'MongoDB\BSON\ObjectID("'."$X\")":(is_a($X,'MongoDB\BSON\UTCDatetime')?$X->toDateTime()->format('Y-m-d H:i:s'):(is_a($X,'MongoDB\BSON\Binary')?$X->getData():(is_a($X,'MongoDB\BSON\Regex')?"$X":(is_object($X)||is_array($X)?json_encode($X,256):$X)))));}$this->_rows[]=$J;foreach($J
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$z=>$X)$I[$z]=$J[$z];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$he=array_keys($this->_rows[0]);$D=$he[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}class
Min_Driver
extends
Min_SQL{public$kg="_id";function
select($Q,$L,$Z,$qd,$zf=array(),$_=1,$E=0,$mg=false){global$g;$L=($L==array("*")?array():array_fill_keys($L,1));if(count($L)&&!isset($L['_id']))$L['_id']=0;$Z=where_to_query($Z);$uh=array();foreach($zf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Gb);$uh[$X]=($Gb?-1:1);}if(isset($_GET['limit'])&&is_numeric($_GET['limit'])&&$_GET['limit']>0)$_=$_GET['limit'];$_=min(200,max(1,(int)$_));$rh=$E*$_;$gb='MongoDB\Driver\Query';try{return
new
Min_Result($g->_link->executeQuery("$g->_db_name.$Q",new$gb($Z,array('projection'=>$L,'limit'=>$_,'skip'=>$rh,'sort'=>$uh))));}catch(Exception$pc){$g->error=$pc->getMessage();return
false;}}function
update($Q,$N,$wg,$_=0,$hh="\n"){global$g;$l=$g->_db_name;$Z=sql_query_where_parser($wg);$gb='MongoDB\Driver\BulkWrite';$Wa=new$gb(array());if(isset($N['_id']))unset($N['_id']);$Ig=array();foreach($N
as$z=>$Y){if($Y=='NULL'){$Ig[$z]=1;unset($N[$z]);}}$Ii=array('$set'=>$N);if(count($Ig))$Ii['$unset']=$Ig;$Wa->update($Z,$Ii,array('upsert'=>false));return$g->executeBulkWrite("$l.$Q",$Wa,'getModifiedCount');}function
delete($Q,$wg,$_=0){global$g;$l=$g->_db_name;$Z=sql_query_where_parser($wg);$gb='MongoDB\Driver\BulkWrite';$Wa=new$gb(array());$Wa->delete($Z,array('limit'=>$_));return$g->executeBulkWrite("$l.$Q",$Wa,'getDeletedCount');}function
insert($Q,$N){global$g;$l=$g->_db_name;$gb='MongoDB\Driver\BulkWrite';$Wa=new$gb(array());if($N['_id']=='')unset($N['_id']);$Wa->insert($N);return$g->executeBulkWrite("$l.$Q",$Wa,'getInsertedCount');}}function
get_databases($dd){global$g;$I=array();foreach($g->executeCommand('admin',array('listDatabases'=>1))as$Ub){foreach($Ub->databases
as$l)$I[]=$l->name;}return$I;}function
count_tables($k){$I=array();return$I;}function
tables_list(){global$g;$mb=array();foreach($g->executeCommand($g->_db_name,array('listCollections'=>1))as$H)$mb[$H->name]='table';return$mb;}function
drop_databases($k){return
false;}function
indexes($Q,$h=null){global$g;$I=array();foreach($g->executeCommand($g->_db_name,array('listIndexes'=>$Q))as$w){$cc=array();$f=array();foreach(get_object_vars($w->key)as$e=>$T){$cc[]=($T==-1?'1':null);$f[]=$e;}$I[$w->name]=array("type"=>($w->name=="_id_"?"PRIMARY":(isset($w->unique)?"UNIQUE":"INDEX")),"columns"=>$f,"lengths"=>array(),"descs"=>$cc,);}return$I;}function
fields($Q){global$m;$p=fields_from_edit();if(!$p){$H=$m->select($Q,array("*"),null,null,array(),10);if($H){while($J=$H->fetch_assoc()){foreach($J
as$z=>$X){$J[$z]=null;$p[$z]=array("field"=>$z,"type"=>"string","null"=>($z!=$m->primary),"auto_increment"=>($z==$m->primary),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,),);}}}}return$p;}function
found_rows($R,$Z){global$g;$Z=where_to_query($Z);$mi=$g->executeCommand($g->_db_name,array('count'=>$R['Name'],'query'=>$Z))->toArray();return$mi[0]->n;}function
sql_query_where_parser($wg){$wg=preg_replace('~^\sWHERE \(?\(?(.+?)\)?\)?$~','\1',$wg);$ij=explode(' AND ',$wg);$jj=explode(') OR (',$wg);$Z=array();foreach($ij
as$gj)$Z[]=trim($gj);if(count($jj)==1)$jj=array();elseif(count($jj)>1)$Z=array();return
where_to_query($Z,$jj);}function
where_to_query($ej=array(),$fj=array()){global$b;$Pb=array();foreach(array('and'=>$ej,'or'=>$fj)as$T=>$Z){if(is_array($Z)){foreach($Z
as$Lc){list($jb,$sf,$X)=explode(" ",$Lc,3);if($jb=="_id"&&preg_match('~^(MongoDB\\\\BSON\\\\ObjectID)\("(.+)"\)$~',$X,$C)){list(,$gb,$X)=$C;$X=new$gb($X);}if(!in_array($sf,$b->operators))continue;if(preg_match('~^\(f\)(.+)~',$sf,$C)){$X=(float)$X;$sf=$C[1];}elseif(preg_match('~^\(date\)(.+)~',$sf,$C)){$Rb=new
DateTime($X);$gb='MongoDB\BSON\UTCDatetime';$X=new$gb($Rb->getTimestamp()*1000);$sf=$C[1];}switch($sf){case'=':$sf='$eq';break;case'!=':$sf='$ne';break;case'>':$sf='$gt';break;case'<':$sf='$lt';break;case'>=':$sf='$gte';break;case'<=':$sf='$lte';break;case'regex':$sf='$regex';break;default:continue
2;}if($T=='and')$Pb['$and'][]=array($jb=>array($sf=>$X));elseif($T=='or')$Pb['$or'][]=array($jb=>array($sf=>$X));}}}return$Pb;}$uf=array("=","!=",">","<",">=","<=","regex","(f)=","(f)!=","(f)>","(f)<","(f)>=","(f)<=","(date)=","(date)!=","(date)>","(date)<","(date)>=","(date)<=",);}function
table($v){return$v;}function
idf_escape($v){return$v;}function
table_status($D="",$Sc=false){$I=array();foreach(tables_list()as$Q=>$T){$I[$Q]=array("Name"=>$Q);if($D==$Q)return$I[$Q];}return$I;}function
create_database($l,$d){return
true;}function
last_id(){global$g;return$g->last_id;}function
error(){global$g;return
h($g->error);}function
collations(){return
array();}function
logged_user(){global$b;$Kb=$b->credentials();return$Kb[1];}function
connect(){global$b;$g=new
Min_DB;list($M,$V,$F)=$b->credentials();$xf=array();if($V.$F!=""){$xf["username"]=$V;$xf["password"]=$F;}$l=$b->database();if($l!="")$xf["db"]=$l;if(($Ja=getenv("MONGO_AUTH_SOURCE")))$xf["authSource"]=$Ja;$g->connect("mongodb://$M",$xf);if($g->error)return$g->error;return$g;}function
alter_indexes($Q,$c){global$g;foreach($c
as$X){list($T,$D,$N)=$X;if($N=="DROP")$I=$g->_db->command(array("deleteIndexes"=>$Q,"index"=>$D));else{$f=array();foreach($N
as$e){$e=preg_replace('~ DESC$~','',$e,1,$Gb);$f[$e]=($Gb?-1:1);}$I=$g->_db->selectCollection($Q)->ensureIndex($f,array("unique"=>($T=="UNIQUE"),"name"=>$D,));}if($I['errmsg']){$g->error=$I['errmsg'];return
false;}}return
true;}function
support($Tc){return
preg_match("~database|indexes|descidx~",$Tc);}function
db_collation($l,$lb){}function
information_schema(){}function
is_view($R){}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$D,$p,$fd,$rb,$yc,$d,$Ka,$Tf){global$g;if($Q==""){$g->_db->createCollection($D);return
true;}}function
drop_tables($S){global$g;foreach($S
as$Q){$Lg=$g->_db->selectCollection($Q)->drop();if(!$Lg['ok'])return
false;}return
true;}function
truncate_tables($S){global$g;foreach($S
as$Q){$Lg=$g->_db->selectCollection($Q)->remove();if(!$Lg['ok'])return
false;}return
true;}function
driver_config(){global$uf;return
array('possible_drivers'=>array("mongo","mongodb"),'jush'=>"mongo",'operators'=>$uf,'functions'=>array(),'grouping'=>array(),'edit_functions'=>array(array("json")),);}}$ic["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){define("DRIVER","elastic");if(function_exists('json_decode')&&ini_bool('allow_url_fopen')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url,$_db;function
rootQuery($Xf,$Bb=array(),$Pe='GET'){@ini_set('track_errors',1);$Xc=@file_get_contents("$this->_url/".ltrim($Xf,'/'),false,stream_context_create(array('http'=>array('method'=>$Pe,'content'=>$Bb===null?$Bb:json_encode($Bb),'header'=>'Content-Type: application/json','ignore_errors'=>1,))));if(!$Xc){$this->error=$php_errormsg;return$Xc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error='Invalid credentials.'." $http_response_header[0]";return
false;}$I=json_decode($Xc,true);if($I===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$_b=get_defined_constants(true);foreach($_b['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$I;}function
query($Xf,$Bb=array(),$Pe='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Xf,'/'),$Bb,$Pe);}function
connect($M,$V,$F){preg_match('~^(https?://)?(.*)~',$M,$C);$this->_url=($C[1]?$C[1]:"http://")."$V:$F@$C[2]";$I=$this->query('');if($I)$this->server_info=$I['version']['number'];return(bool)$I;}function
select_db($j){$this->_db=$j;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
__construct($K){$this->num_rows=count($K);$this->_rows=$K;reset($this->_rows);}function
fetch_assoc(){$I=current($this->_rows);next($this->_rows);return$I;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$L,$Z,$qd,$zf=array(),$_=1,$E=0,$mg=false){global$b;$Pb=array();$G="$Q/_search";if($L!=array("*"))$Pb["fields"]=$L;if($zf){$uh=array();foreach($zf
as$jb){$jb=preg_replace('~ DESC$~','',$jb,1,$Gb);$uh[]=($Gb?array($jb=>"desc"):$jb);}$Pb["sort"]=$uh;}if($_){$Pb["size"]=+$_;if($E)$Pb["from"]=($E*$_);}foreach($Z
as$X){list($jb,$sf,$X)=explode(" ",$X,3);if($jb=="_id")$Pb["query"]["ids"]["values"][]=$X;elseif($jb.$X!=""){$Zh=array("term"=>array(($jb!=""?$jb:"_all")=>$X));if($sf=="=")$Pb["query"]["filtered"]["filter"]["and"][]=$Zh;else$Pb["query"]["filtered"]["query"]["bool"]["must"][]=$Zh;}}if($Pb["query"]&&!$Pb["query"]["filtered"]["query"]&&!$Pb["query"]["ids"])$Pb["query"]["filtered"]["query"]=array("match_all"=>array());$Ch=microtime(true);$bh=$this->_conn->query($G,$Pb);if($mg)echo$b->selectQuery("$G: ".json_encode($Pb),$Ch,!$bh);if(!$bh)return
false;$I=array();foreach($bh['hits']['hits']as$Cd){$J=array();if($L==array("*"))$J["_id"]=$Cd["_id"];$p=$Cd['_source'];if($L!=array("*")){$p=array();foreach($L
as$z)$p[$z]=$Cd['fields'][$z];}foreach($p
as$z=>$X){if($Pb["fields"])$X=$X[0];$J[$z]=(is_array($X)?json_encode($X):$X);}$I[]=$J;}return
new
Min_Result($I);}function
update($T,$_g,$wg,$_=0,$hh="\n"){$Vf=preg_split('~ *= *~',$wg);if(count($Vf)==2){$u=trim($Vf[1]);$G="$T/$u";return$this->_conn->query($G,$_g,'POST');}return
false;}function
insert($T,$_g){$u="";$G="$T/$u";$Lg=$this->_conn->query($G,$_g,'POST');$this->_conn->last_id=$Lg['_id'];return$Lg['created'];}function
delete($T,$wg,$_=0){$Gd=array();if(is_array($_GET["where"])&&$_GET["where"]["_id"])$Gd[]=$_GET["where"]["_id"];if(is_array($_POST['check'])){foreach($_POST['check']as$ab){$Vf=preg_split('~ *= *~',$ab);if(count($Vf)==2)$Gd[]=trim($Vf[1]);}}$this->_conn->affected_rows=0;foreach($Gd
as$u){$G="{$T}/{$u}";$Lg=$this->_conn->query($G,'{}','DELETE');if(is_array($Lg)&&$Lg['found']==true)$this->_conn->affected_rows++;}return$this->_conn->affected_rows;}}function
connect(){global$b;$g=new
Min_DB;list($M,$V,$F)=$b->credentials();if($F!=""&&$g->connect($M,$V,""))return'Database does not support password.';if($g->connect($M,$V,$F))return$g;return$g->error;}function
support($Tc){return
preg_match("~database|table|columns~",$Tc);}function
logged_user(){global$b;$Kb=$b->credentials();return$Kb[1];}function
get_databases(){global$g;$I=$g->rootQuery('_aliases');if($I){$I=array_keys($I);sort($I,SORT_STRING);}return$I;}function
collations(){return
array();}function
db_collation($l,$lb){}function
engines(){return
array();}function
count_tables($k){global$g;$I=array();$H=$g->query('_stats');if($H&&$H['indices']){$Od=$H['indices'];foreach($Od
as$Nd=>$Dh){$Md=$Dh['total']['indexing'];$I[$Nd]=$Md['index_total'];}}return$I;}function
tables_list(){global$g;if(min_version(6))return
array('_doc'=>'table');$I=$g->query('_mapping');if($I)$I=array_fill_keys(array_keys($I[$g->_db]["mappings"]),'table');return$I;}function
table_status($D="",$Sc=false){global$g;$bh=$g->query("_search",array("size"=>0,"aggregations"=>array("count_by_type"=>array("terms"=>array("field"=>"_type")))),"POST");$I=array();if($bh){$S=$bh["aggregations"]["count_by_type"]["buckets"];foreach($S
as$Q){$I[$Q["key"]]=array("Name"=>$Q["key"],"Engine"=>"table","Rows"=>$Q["doc_count"],);if($D!=""&&$D==$Q["key"])return$I[$D];}}return$I;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$g;$ze=array();if(min_version(6)){$H=$g->query("_mapping");if($H)$ze=$H[$g->_db]['mappings']['properties'];}else{$H=$g->query("$Q/_mapping");if($H){$ze=$H[$Q]['properties'];if(!$ze)$ze=$H[$g->_db]['mappings'][$Q]['properties'];}}$I=array();if($ze){foreach($ze
as$D=>$o){$I[$D]=array("field"=>$D,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($I[$D]["privileges"]["insert"]);unset($I[$D]["privileges"]["update"]);}}}return$I;}function
foreign_keys($Q){return
array();}function
table($v){return$v;}function
idf_escape($v){return$v;}function
convert_field($o){}function
unconvert_field($o,$I){return$I;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($l){global$g;return$g->rootQuery(urlencode($l),null,'PUT');}function
drop_databases($k){global$g;return$g->rootQuery(urlencode(implode(',',$k)),array(),'DELETE');}function
alter_table($Q,$D,$p,$fd,$rb,$yc,$d,$Ka,$Tf){global$g;$sg=array();foreach($p
as$Qc){$Vc=trim($Qc[1][0]);$Wc=trim($Qc[1][1]?$Qc[1][1]:"text");$sg[$Vc]=array('type'=>$Wc);}if(!empty($sg))$sg=array('properties'=>$sg);return$g->query("_mapping/{$D}",$sg,'PUT');}function
drop_tables($S){global$g;$I=true;foreach($S
as$Q)$I=$I&&$g->query(urlencode($Q),array(),'DELETE');return$I;}function
last_id(){global$g;return$g->last_id;}function
driver_config(){$U=array();$Gh=array();foreach(array('Numbers'=>array("long"=>3,"integer"=>5,"short"=>8,"byte"=>10,"double"=>20,"float"=>66,"half_float"=>12,"scaled_float"=>21),'Date and time'=>array("date"=>10),'Strings'=>array("string"=>65535,"text"=>65535),'Binary'=>array("binary"=>255),)as$z=>$X){$U+=$X;$Gh[$z]=array_keys($X);}return
array('possible_drivers'=>array("json + allow_url_fopen"),'jush'=>"elastic",'operators'=>array("=","query"),'functions'=>array(),'grouping'=>array(),'edit_functions'=>array(array("json")),'types'=>$U,'structured_types'=>$Gh,);}}class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/'".target_blank()." id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
connectSsl(){}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
serverName($M){return
h($M);}function
database(){return
DB;}function
databases($dd=true){return
get_databases($dd);}function
schemas(){return
schemas();}function
queryTimeout(){return
2;}function
headers(){}function
csp(){return
csp();}function
head(){return
true;}function
css(){$I=array();$q="adminer.css";if(file_exists($q))$I[]="$q?v=".crc32(file_get_contents($q));return$I;}function
loginForm(){global$ic;echo"<table cellspacing='0' class='layout'>\n",$this->loginFormField('driver','<tr><th>'.'System'.'<td>',html_select("auth[driver]",$ic,DRIVER,"loginDriver(this);")."\n"),$this->loginFormField('server','<tr><th>'.'Server'.'<td>','<input name="auth[server]" value="'.h(SERVER).'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">'."\n"),$this->loginFormField('username','<tr><th>'.'Username'.'<td>','<input name="auth[username]" id="username" value="'.h($_GET["username"]).'" autocomplete="username" autocapitalize="off">'.script("focus(qs('#username')); qs('#username').form['auth[driver]'].onchange();")),$this->loginFormField('password','<tr><th>'.'Password'.'<td>','<input type="password" name="auth[password]" autocomplete="current-password">'."\n"),$this->loginFormField('db','<tr><th>'.'Database'.'<td>','<input name="auth[db]" value="'.h($_GET["db"]).'" autocapitalize="off">'."\n"),"</table>\n","<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
loginFormField($D,$_d,$Y){return$_d.$Y;}function
login($xe,$F){if($F=="")return
sprintf('Adminer does not support accessing a database without a password, <a href="https://www.adminer.org/en/password/"%s>more information</a>.',target_blank());return
true;}function
tableName($Nh){return
h($Nh["Name"]);}function
fieldName($o,$zf=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Nh,$N=""){global$y,$m;echo'<p class="links">';$we=array("select"=>'Select data');if(support("table")||support("indexes"))$we["table"]='Show structure';if(support("table")){if(is_view($Nh))$we["view"]='Alter view';else$we["create"]='Alter table';}if($N!==null)$we["edit"]='New item';$D=$Nh["Name"];foreach($we
as$z=>$X)echo" <a href='".h(ME)."$z=".urlencode($D).($z=="edit"?$N:"")."'".bold(isset($_GET[$z])).">$X</a>";echo
doc_link(array($y=>$m->tableHelp($D)),"?"),"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Mh){return
array();}function
backwardKeysPrint($Na,$J){}function
selectQuery($G,$Ch,$Rc=false){global$y,$m;$I="</p>\n";if(!$Rc&&($bj=$m->warnings())){$u="warnings";$I=", <a href='#$u'>".'Warnings'."</a>".script("qsl('a').onclick = partial(toggle, '$u');","")."$I<div id='$u' class='hidden'>\n$bj</div>\n";}return"<p><code class='jush-$y'>".h(str_replace("\n"," ",$G))."</code> <span class='time'>(".format_time($Ch).")</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($G)."'>".'Edit'."</a>":"").$I;}function
sqlCommandQuery($G){return
shorten_utf8(trim($G),1000);}function
rowDescription($Q){return"";}function
rowDescriptions($K,$gd){return$K;}function
selectLink($X,$o){}function
selectVal($X,$A,$o,$Gf){$I=($X===null?"<i>NULL</i>":(preg_match("~char|binary|boolean~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$I="<i>".lang(array('%d byte','%d bytes'),strlen($Gf))."</i>";if(preg_match('~json~',$o["type"]))$I="<code class='jush-js'>$I</code>";return($A?"<a href='".h($A)."'".(is_url($A)?target_blank():"").">$I</a>":$I);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<div class='scrollable'>\n","<table cellspacing='0' class='nowrap'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($o["default"])?" <span title='".'Default value'."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".h($o["comment"]):""),"\n";}echo"</table>\n","</div>\n";}function
tableIndexesPrint($x){echo"<table cellspacing='0'>\n";foreach($x
as$D=>$w){ksort($w["columns"]);$mg=array();foreach($w["columns"]as$z=>$X)$mg[]="<i>".h($X)."</i>".($w["lengths"][$z]?"(".$w["lengths"][$z].")":"").($w["descs"][$z]?" DESC":"");echo"<tr title='".h($D)."'><th>$w[type]<td>".implode(", ",$mg)."\n";}echo"</table>\n";}function
selectColumnsPrint($L,$f){global$nd,$td;print_fieldset("select",'Select',$L);$t=0;$L[""]=array();foreach($L
as$z=>$X){$X=$_GET["columns"][$z];$e=select_input(" name='columns[$t][col]'",$f,$X["col"],($z!==""?"selectFieldChange":"selectAddRow"));echo"<div>".($nd||$td?"<select name='columns[$t][fun]'>".optionlist(array(-1=>"")+array_filter(array('Functions'=>$nd,'Aggregation'=>$td)),$X["fun"])."</select>".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).script("qsl('select').onchange = function () { helpClose();".($z!==""?"":" qsl('select, input', this.parentNode).onchange();")." };","")."($e)":$e)."</div>\n";$t++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$x){print_fieldset("search",'Search',$Z);foreach($x
as$t=>$w){if($w["type"]=="FULLTEXT"){echo"<div>(<i>".implode("</i>, <i>",array_map('h',$w["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$t]' value='".h($_GET["fulltext"][$t])."'>",script("qsl('input').oninput = selectFieldChange;",""),checkbox("boolean[$t]",1,isset($_GET["boolean"][$t]),"BOOL"),"</div>\n";}}$Ya="this.parentNode.firstChild.onchange();";foreach(array_merge((array)$_GET["where"],array(array()))as$t=>$X){if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$t][col]'",$f,$X["col"],($X?"selectFieldChange":"selectAddRow"),"(".'anywhere'.")"),html_select("where[$t][op]",$this->operators,$X["op"],$Ya),"<input type='search' name='where[$t][val]' value='".h($X["val"])."'>",script("mixin(qsl('input'), {oninput: function () { $Ya }, onkeydown: selectSearchKeydown, onsearch: selectSearchSearch});",""),"</div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($zf,$f,$x){print_fieldset("sort",'Sort',$zf);$t=0;foreach((array)$_GET["order"]as$z=>$X){if($X!=""){echo"<div>".select_input(" name='order[$t]'",$f,$X,"selectFieldChange"),checkbox("desc[$t]",1,isset($_GET["desc"][$z]),'descending')."</div>\n";$t++;}}echo"<div>".select_input(" name='order[$t]'",$f,"","selectAddRow"),checkbox("desc[$t]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($_){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($_)."'>",script("qsl('input').oninput = selectFieldChange;",""),"</div></fieldset>\n";}function
selectLengthPrint($ci){if($ci!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($ci)."'>","</div></fieldset>\n";}}function
selectActionPrint($x){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script".nonce().">\n","var indexColumns = ";$f=array();foreach($x
as$w){$Ob=reset($w["columns"]);if($w["type"]!="FULLTEXT"&&$Ob)$f[$Ob]=1;}$f[""]=1;foreach($f
as$z=>$X)json_row($z);echo";\n","selectFieldChange.call(qs('#form')['select']);\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($vc,$f){}function
selectColumnsProcess($f,$x){global$nd,$td;$L=array();$qd=array();foreach((array)$_GET["columns"]as$z=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$nd)||in_array($X["fun"],$td)))){$L[$z]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$td))$qd[]=$L[$z];}}return
array($L,$qd);}function
selectSearchProcess($p,$x){global$g,$m;$I=array();foreach($x
as$t=>$w){if($w["type"]=="FULLTEXT"&&$_GET["fulltext"][$t]!="")$I[]="MATCH (".implode(", ",array_map('idf_escape',$w["columns"])).") AGAINST (".q($_GET["fulltext"][$t]).(isset($_GET["boolean"][$t])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$z=>$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$ig="";$ub=" $X[op]";if(preg_match('~IN$~',$X["op"])){$Jd=process_length($X["val"]);$ub.=" ".($Jd!=""?$Jd:"(NULL)");}elseif($X["op"]=="SQL")$ub=" $X[val]";elseif($X["op"]=="LIKE %%")$ub=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$ub=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="FIND_IN_SET"){$ig="$X[op](".q($X["val"]).", ";$ub=")";}elseif(!preg_match('~NULL$~',$X["op"]))$ub.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$I[]=$ig.$m->convertSearch(idf_escape($X["col"]),$X,$p[$X["col"]]).$ub;else{$nb=array();foreach($p
as$D=>$o){if((preg_match('~^[-\d.'.(preg_match('~IN$~',$X["op"])?',':'').']+$~',$X["val"])||!preg_match('~'.number_type().'|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||preg_match('~char|text|enum|set~',$o["type"]))&&(!preg_match('~date|timestamp~',$o["type"])||preg_match('~^\d+-\d+-\d+~',$X["val"])))$nb[]=$ig.$m->convertSearch(idf_escape($D),$X,$o).$ub;}$I[]=($nb?"(".implode(" OR ",$nb).")":"1 = 0");}}}return$I;}function
selectOrderProcess($p,$x){$I=array();foreach((array)$_GET["order"]as$z=>$X){if($X!="")$I[]=(preg_match('~^((COUNT\(DISTINCT |[A-Z0-9_]+\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\)|COUNT\(\*\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$z])?" DESC":"");}return$I;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$gd){return
false;}function
selectQueryBuild($L,$Z,$qd,$zf,$_,$E){return"";}function
messageQuery($G,$di,$Rc=false){global$y,$m;restart_session();$Ad=&get_session("queries");if(!$Ad[$_GET["db"]])$Ad[$_GET["db"]]=array();if(strlen($G)>1e6)$G=preg_replace('~[\x80-\xFF]+$~','',substr($G,0,1e6))."\nÃ¢â‚¬Â¦";$Ad[$_GET["db"]][]=array($G,time(),$di);$_h="sql-".count($Ad[$_GET["db"]]);$I="<a href='#$_h' class='toggle'>".'SQL command'."</a>\n";if(!$Rc&&($bj=$m->warnings())){$u="warnings-".count($Ad[$_GET["db"]]);$I="<a href='#$u' class='toggle'>".'Warnings'."</a>, $I<div id='$u' class='hidden'>\n$bj</div>\n";}return" <span class='time'>".@date("H:i:s")."</span>"." $I<div id='$_h' class='hidden'><pre><code class='jush-$y'>".shorten_utf8($G,1000)."</code></pre>".($di?" <span class='time'>($di)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Ad[$_GET["db"]])-1)).'">'.'Edit'.'</a>':'').'</div>';}function
editRowPrint($Q,$p,$J,$Ii){}function
editFunctions($o){global$qc;$I=($o["null"]?"NULL/":"");$Ii=isset($_GET["select"])||where($_GET);foreach($qc
as$z=>$nd){if(!$z||(!isset($_GET["call"])&&$Ii)){foreach($nd
as$Zf=>$X){if(!$Zf||preg_match("~$Zf~",$o["type"]))$I.="/$X";}}if($z&&!preg_match('~set|blob|bytea|raw|file|bool~',$o["type"]))$I.="/SQL";}if($o["auto_increment"]&&!$Ii)$I='Auto Increment';return
explode("/",$I);}function
editInput($Q,$o,$Ha,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ha value='-1' checked><i>".'original'."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ha value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ha,$o,$Y,0);return"";}function
editHint($Q,$o,$Y){return"";}function
processInput($o,$Y,$s=""){if($s=="SQL")return$Y;$D=$o["field"];$I=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$s))$I="$s()";elseif(preg_match('~^current_(date|timestamp)$~',$s))$I=$s;elseif(preg_match('~^([+-]|\|\|)$~',$s))$I=idf_escape($D)." $s $I";elseif(preg_match('~^[+-] interval$~',$s))$I=idf_escape($D)." $s ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+\$~i",$Y)?$Y:$I);elseif(preg_match('~^(addtime|subtime|concat)$~',$s))$I="$s(".idf_escape($D).", $I)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$s))$I="$s($I)";return
unconvert_field($o,$I);}function
dumpOutput(){$I=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$I['gz']='gzip';return$I;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($l){}function
dumpTable($Q,$Hh,$ce=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Hh)dump_csv(array_keys(fields($Q)));}else{if($ce==2){$p=array();foreach(fields($Q)as$D=>$o)$p[]=idf_escape($D)." $o[full_type]";$i="CREATE TABLE ".table($Q)." (".implode(", ",$p).")";}else$i=create_sql($Q,$_POST["auto_increment"],$Hh);set_utf8mb4($i);if($Hh&&$i){if($Hh=="DROP+CREATE"||$ce==1)echo"DROP ".($ce==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($ce==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($Q,$Hh,$G){global$g,$y;$Ee=($y=="sqlite"?0:1048576);if($Hh){if($_POST["format"]=="sql"){if($Hh=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$p=fields($Q);}$H=$g->query($G,1);if($H){$Vd="";$Va="";$he=array();$Jh="";$Uc=($Q!=''?'fetch_assoc':'fetch_row');while($J=$H->$Uc()){if(!$he){$Ti=array();foreach($J
as$X){$o=$H->fetch_field();$he[]=$o->name;$z=idf_escape($o->name);$Ti[]="$z = VALUES($z)";}$Jh=($Hh=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Ti):"").";\n";}if($_POST["format"]!="sql"){if($Hh=="table"){dump_csv($he);$Hh="INSERT";}dump_csv($J);}else{if(!$Vd)$Vd="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$he)).") VALUES";foreach($J
as$z=>$X){$o=$p[$z];$J[$z]=($X!==null?unconvert_field($o,preg_match(number_type(),$o["type"])&&!preg_match('~\[~',$o["full_type"])&&is_numeric($X)?$X:q(($X===false?0:$X))):"NULL");}$Xg=($Ee?"\n":" ")."(".implode(",\t",$J).")";if(!$Va)$Va=$Vd.$Xg;elseif(strlen($Va)+4+strlen($Xg)+strlen($Jh)<$Ee)$Va.=",$Xg";else{echo$Va.$Jh;$Va=$Vd.$Xg;}}}if($Va)echo$Va.$Jh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($Fd){return
friendly_url($Fd!=""?$Fd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Fd,$Se=false){$Jf=$_POST["output"];$Mc=(preg_match('~sql~',$_POST["format"])?"sql":($Se?"tar":"csv"));header("Content-Type: ".($Jf=="gz"?"application/x-gzip":($Mc=="tar"?"application/x-tar":($Mc=="sql"||$Jf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($Jf=="gz")ob_start('ob_gzencode',1e6);return$Mc;}function
importServerPath(){return"adminer.sql";}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($Re){global$ia,$y,$ic,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download"',target_blank(),' id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Re=="auth"){$Jf="";foreach((array)$_SESSION["pwds"]as$Vi=>$lh){foreach($lh
as$M=>$Qi){foreach($Qi
as$V=>$F){if($F!==null){$Ub=$_SESSION["db"][$Vi][$M][$V];foreach(($Ub?array_keys($Ub):array(""))as$l)$Jf.="<li><a href='".h(auth_url($Vi,$M,$V,$l))."'>($ic[$Vi]) ".h($V.($M!=""?"@".$this->serverName($M):"").($l!=""?" - $l":""))."</a>\n";}}}}if($Jf)echo"<ul id='logins'>\n$Jf</ul>\n".script("mixin(qs('#logins'), {onmouseover: menuOver, onmouseout: menuOut});");}else{$S=array();if($_GET["ns"]!==""&&!$Re&&DB!=""){$g->select_db(DB);$S=table_status('',true);}echo
script_src(preg_replace("~\\?.*~","",ME)."?file=jush.js&version=4.8.1");if(support("sql")){echo'<script',nonce(),'>
';if($S){$we=array();foreach($S
as$Q=>$T)$we[]=preg_quote($Q,'/');echo"var jushLinks = { $y: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$we).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$y;\n";}$kh=$g->server_info;echo'bodyLoad(\'',(is_object($g)?preg_replace('~^(\d\.?\d).*~s','\1',$kh):""),'\'',(preg_match('~MariaDB~',$kh)?", true":""),');
</script>
';}$this->databasesPrint($Re);if(DB==""||!$Re){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL command'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}if($_GET["ns"]!==""&&!$Re&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create table'."</a>\n";if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Re){global$b,$g;$k=$this->databases();if(DB&&$k&&!in_array(DB,$k))array_unshift($k,DB);echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Sb=script("mixin(qsl('select'), {onmousedown: dbMouseDown, onchange: dbChange});");echo"<span title='".'database'."'>".'DB'."</span>: ".($k?"<select name='db'>".optionlist(array(""=>"")+$k,DB)."</select>$Sb":"<input name='db' value='".h(DB)."' autocapitalize='off'>\n"),"<input type='submit' value='".'Use'."'".($k?" class='hidden'":"").">\n";if(support("scheme")){if($Re!="db"&&DB!=""&&$g->select_db(DB)){echo"<br>".'Schema'.": <select name='ns'>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>$Sb";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}foreach(array("import","sql","schema","dump","privileges")as$X){if(isset($_GET[$X])){echo"<input type='hidden' name='$X' value=''>";break;}}echo"</p></form>\n";}function
tablesPrint($S){echo"<ul id='tables'>".script("mixin(qs('#tables'), {onmouseover: menuOver, onmouseout: menuOut});");foreach($S
as$Q=>$O){$D=$this->tableName($O);if($D!=""){echo'<li><a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q,"select")." title='".'Select data'."'>".'select'."</a> ",(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($O)?"view":"structure"))." title='".'Show structure'."'>$D</a>":"<span>$D</span>")."\n";}}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);$ic=array("server"=>"MySQL")+$ic;if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($M="",$V="",$F="",$j=null,$dg=null,$th=null){global$b;mysqli_report(MYSQLI_REPORT_OFF);list($Dd,$dg)=explode(":",$M,2);$Bh=$b->connectSsl();if($Bh)$this->ssl_set($Bh['key'],$Bh['cert'],$Bh['ca'],'','');$I=@$this->real_connect(($M!=""?$Dd:ini_get("mysqli.default_host")),($M.$V!=""?$V:ini_get("mysqli.default_user")),($M.$V.$F!=""?$F:ini_get("mysqli.default_pw")),$j,(is_numeric($dg)?$dg:ini_get("mysqli.default_port")),(!is_numeric($dg)?$dg:$th),($Bh?64:0));$this->options(MYSQLI_OPT_LOCAL_INFILE,false);return$I;}function
set_charset($Za){if(parent::set_charset($Za))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Za");}function
result($G,$o=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$o];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!((ini_bool("sql.safe_mode")||ini_bool("mysql.allow_local_infile"))&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($M,$V,$F){if(ini_bool("mysql.allow_local_infile")){$this->error=sprintf('Disable %s or enable %s or %s extensions.',"'mysql.allow_local_infile'","MySQLi","PDO_MySQL");return
false;}$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$V"!=""?$V:ini_get("mysql.default_user")),("$M$V$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Za){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Za,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Za");}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($j){return
mysql_select_db($j,$this->_link);}function
query($G,$Bi=false){$H=@($Bi?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$o=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$V,$F){global$b;$xf=array(PDO::MYSQL_ATTR_LOCAL_INFILE=>false);$Bh=$b->connectSsl();if($Bh){if(!empty($Bh['key']))$xf[PDO::MYSQL_ATTR_SSL_KEY]=$Bh['key'];if(!empty($Bh['cert']))$xf[PDO::MYSQL_ATTR_SSL_CERT]=$Bh['cert'];if(!empty($Bh['ca']))$xf[PDO::MYSQL_ATTR_SSL_CA]=$Bh['ca'];}$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\d)~',';port=\1',$M)),$V,$F,$xf);return
true;}function
set_charset($Za){$this->query("SET NAMES $Za");}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($G,$Bi=false){$this->pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,!$Bi);return
parent::query($G,$Bi);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$N){return($N?parent::insert($Q,$N):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$K,$kg){$f=array_keys(reset($K));$ig="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Ti=array();foreach($f
as$z)$Ti[$z]="$z = VALUES($z)";$Jh="\nON DUPLICATE KEY UPDATE ".implode(", ",$Ti);$Ti=array();$te=0;foreach($K
as$N){$Y="(".implode(", ",$N).")";if($Ti&&(strlen($ig)+$te+strlen($Y)+strlen($Jh)>1e6)){if(!queries($ig.implode(",\n",$Ti).$Jh))return
false;$Ti=array();$te=0;}$Ti[]=$Y;$te+=strlen($Y)+2;}return
queries($ig.implode(",\n",$Ti).$Jh);}function
slowQuery($G,$ei){if(min_version('5.7.8','10.1.2')){if(preg_match('~MariaDB~',$this->_conn->server_info))return"SET STATEMENT max_statement_time=$ei FOR $G";elseif(preg_match('~^(SELECT\b)(.+)~is',$G,$C))return"$C[1] /*+ MAX_EXECUTION_TIME(".($ei*1000).") */ $C[2]";}}function
convertSearch($v,$X,$o){return(preg_match('~char|text|enum|set~',$o["type"])&&!preg_match("~^utf8~",$o["collation"])&&preg_match('~[\x80-\xFF]~',$X['val'])?"CONVERT($v USING ".charset($this->_conn).")":$v);}function
warnings(){$H=$this->_conn->query("SHOW WARNINGS");if($H&&$H->num_rows){ob_start();select($H);return
ob_get_clean();}}function
tableHelp($D){$_e=preg_match('~MariaDB~',$this->_conn->server_info);if(information_schema(DB))return
strtolower(($_e?"information-schema-$D-table/":str_replace("_","-",$D)."-table.html"));if(DB=="mysql")return($_e?"mysql$D-table/":"system-database.html");}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$b,$U,$Gh;$g=new
Min_DB;$Kb=$b->credentials();if($g->connect($Kb[0],$Kb[1],$Kb[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(min_version('5.7.8',10.2,$g)){$Gh['Strings'][]="json";$U["json"]=4294967295;}return$g;}$I=$g->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($Xg=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$Xg;return$I;}function
get_databases($dd){$I=get_session("dbs");if($I===null){$G=(min_version(5)?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA ORDER BY SCHEMA_NAME":"SHOW DATABASES");$I=($dd?slow_query($G):get_vals($G));restart_session();set_session("dbs",$I);stop_session();}return$I;}function
limit($G,$Z,$_,$hf=0,$hh=" "){return" $G$Z".($_!==null?$hh."LIMIT $_".($hf?" OFFSET $hf":""):"");}function
limit1($Q,$G,$Z,$hh="\n"){return
limit($G,$Z,1,0,$hh);}function
db_collation($l,$lb){global$g;$I=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($l),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$C))$I=$C[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$C))$I=$lb[$C[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(preg_match("~YES|DEFAULT~",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){return
get_key_vals(min_version(5)?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($k){$I=array();foreach($k
as$l)$I[$l]=count(get_vals("SHOW TABLES IN ".idf_escape($l)));return$I;}function
table_status($D="",$Sc=false){$I=array();foreach(get_rows($Sc&&min_version(5)?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\1',$J["Comment"]);if(!isset($J["Engine"]))$J["Comment"]="";if($D!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"])||(preg_match('~NDB~i',$R["Engine"])&&min_version(5.6));}function
fields($Q){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$J){preg_match('~^([^( ]+)(?:\((.+)\))?( unsigned)?( zerofill)?$~',$J["Type"],$C);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$C[1],"length"=>$C[2],"unsigned"=>ltrim($C[3].$C[4]),"default"=>($J["Default"]!=""||preg_match("~char|set~",$C[1])?(preg_match('~text~',$C[1])?stripslashes(preg_replace("~^'(.*)'\$~",'\1',$J["Default"])):$J["Default"]):null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$J["Extra"],$C)?$C[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(preg_split('~, *~',$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),"generated"=>preg_match('~^(VIRTUAL|PERSISTENT|STORED)~',$J["Extra"]),);}return$I;}function
indexes($Q,$h=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$J){$D=$J["Key_name"];$I[$D]["type"]=($D=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?($J["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$I[$D]["columns"][]=$J["Column_name"];$I[$D]["lengths"][]=($J["Index_type"]=="SPATIAL"?null:$J["Sub_part"]);$I[$D]["descs"][]=null;}return$I;}function
foreign_keys($Q){global$g,$pf;static$Zf='(?:`(?:[^`]|``)+`|"(?:[^"]|"")+")';$I=array();$Ib=$g->result("SHOW CREATE TABLE ".table($Q),1);if($Ib){preg_match_all("~CONSTRAINT ($Zf) FOREIGN KEY ?\\(((?:$Zf,? ?)+)\\) REFERENCES ($Zf)(?:\\.($Zf))? \\(((?:$Zf,? ?)+)\\)(?: ON DELETE ($pf))?(?: ON UPDATE ($pf))?~",$Ib,$Ce,PREG_SET_ORDER);foreach($Ce
as$C){preg_match_all("~$Zf~",$C[2],$vh);preg_match_all("~$Zf~",$C[5],$Wh);$I[idf_unescape($C[1])]=array("db"=>idf_unescape($C[4]!=""?$C[3]:$C[4]),"table"=>idf_unescape($C[4]!=""?$C[4]:$C[3]),"source"=>array_map('idf_unescape',$vh[0]),"target"=>array_map('idf_unescape',$Wh[0]),"on_delete"=>($C[6]?$C[6]:"RESTRICT"),"on_update"=>($C[7]?$C[7]:"RESTRICT"),);}}return$I;}function
view($D){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\s+AS\s+~isU','',$g->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$z=>$X)asort($I[$z]);return$I;}function
information_schema($l){return(min_version(5)&&$l=="information_schema")||(min_version(5.5)&&$l=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).($d?" COLLATE ".q($d):""));}function
drop_databases($k){$I=apply_queries("DROP DATABASE",$k,'idf_escape');restart_session();set_session("dbs",null);return$I;}function
rename_database($D,$d){$I=false;if(create_database($D,$d)){$S=array();$Yi=array();foreach(tables_list()as$Q=>$T){if($T=='VIEW')$Yi[]=$Q;else$S[]=$Q;}$I=(!$S&&!$Yi)||move_tables($S,$Yi,$D);drop_databases($I?array(DB):array());}return$I;}function
auto_increment(){$La=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$La="";break;}if($w["type"]=="PRIMARY")$La=" UNIQUE";}}return" AUTO_INCREMENT$La";}function
alter_table($Q,$D,$p,$fd,$rb,$yc,$d,$Ka,$Tf){$c=array();foreach($p
as$o)$c[]=($o[1]?($Q!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($Q!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$fd);$O=($rb!==null?" COMMENT=".q($rb):"").($yc?" ENGINE=".q($yc):"").($d?" COLLATE ".q($d):"").($Ka!=""?" AUTO_INCREMENT=$Ka":"");if($Q=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)$O$Tf");if($Q!=$D)$c[]="RENAME TO ".table($D);if($O)$c[]=ltrim($O);return($c||$Tf?queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c).$Tf):true);}function
alter_indexes($Q,$c){foreach($c
as$z=>$X)$c[$z]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yi){return
queries("DROP VIEW ".implode(", ",array_map('table',$Yi)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Yi,$Wh){global$g;$Jg=array();foreach($S
as$Q)$Jg[]=table($Q)." TO ".idf_escape($Wh).".".table($Q);if(!$Jg||queries("RENAME TABLE ".implode(", ",$Jg))){$Zb=array();foreach($Yi
as$Q)$Zb[table($Q)]=view($Q);$g->select_db($Wh);$l=idf_escape(DB);foreach($Zb
as$D=>$Xi){if(!queries("CREATE VIEW $D AS ".str_replace(" $l."," ",$Xi["select"]))||!queries("DROP VIEW $l.$D"))return
false;}return
true;}return
false;}function
copy_tables($S,$Yi,$Wh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$D=($Wh==DB?table("copy_$Q"):idf_escape($Wh).".".table($Q));if(($_POST["overwrite"]&&!queries("\nDROP TABLE IF EXISTS $D"))||!queries("CREATE TABLE $D LIKE ".table($Q))||!queries("INSERT INTO $D SELECT * FROM ".table($Q)))return
false;foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$J){$wi=$J["Trigger"];if(!queries("CREATE TRIGGER ".($Wh==DB?idf_escape("copy_$wi"):idf_escape($Wh).".".idf_escape($wi))." $J[Timing] $J[Event] ON $D FOR EACH ROW\n$J[Statement];"))return
false;}}foreach($Yi
as$Q){$D=($Wh==DB?table("copy_$Q"):idf_escape($Wh).".".table($Q));$Xi=view($Q);if(($_POST["overwrite"]&&!queries("DROP VIEW IF EXISTS $D"))||!queries("CREATE VIEW $D AS $Xi[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$T){global$g,$_c,$Td,$U;$Ba=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$wh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Ai="((".implode("|",array_merge(array_keys($U),$Ba)).")\\b(?:\\s*\\(((?:[^'\")]|$_c)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Zf="$wh*(".($T=="FUNCTION"?"":$Td).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ai";$i=$g->result("SHOW CREATE $T ".idf_escape($D),2);preg_match("~\\(((?:$Zf\\s*,?)*)\\)\\s*".($T=="FUNCTION"?"RETURNS\\s+$Ai\\s+":"")."(.*)~is",$i,$C);$p=array();preg_match_all("~$Zf\\s*,?~is",$C[1],$Ce,PREG_SET_ORDER);foreach($Ce
as$Nf)$p[]=array("field"=>str_replace("``","`",$Nf[2]).$Nf[3],"type"=>strtolower($Nf[5]),"length"=>preg_replace_callback("~$_c~s",'normalize_enum',$Nf[6]),"unsigned"=>strtolower(preg_replace('~\s+~',' ',trim("$Nf[8] $Nf[7]"))),"null"=>1,"full_type"=>$Nf[4],"inout"=>strtoupper($Nf[1]),"collation"=>strtolower($Nf[9]),);if($T!="FUNCTION")return
array("fields"=>$p,"definition"=>$C[11]);return
array("fields"=>$p,"returns"=>array("type"=>$C[12],"length"=>$C[13],"unsigned"=>$C[15],"collation"=>$C[16]),"definition"=>$C[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME AS SPECIFIC_NAME, ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
routine_id($D,$J){return
idf_escape($D);}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$G){return$g->query("EXPLAIN ".(min_version(5.1)&&!min_version(5.7)?"PARTITIONS ":"").$G);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Zg,$h=null){return
true;}function
create_sql($Q,$Ka,$Hh){global$g;$I=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ka)$I=preg_replace('~ AUTO_INCREMENT=\d+~','',$I);return$I;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($j){return"USE ".idf_escape($j);}function
trigger_sql($Q){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$J)$I.="\nCREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return(min_version(8)?"ST_":"")."AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$I){if(preg_match("~binary~",$o["type"]))$I="UNHEX($I)";if($o["type"]=="bit")$I="CONV($I, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$I=(min_version(8)?"ST_":"")."GeomFromText($I, SRID($o[field]))";return$I;}function
support($Tc){return!preg_match("~scheme|sequence|type|view_trigger|materializedview".(min_version(8)?"":"|descidx".(min_version(5.1)?"":"|event|partitioning".(min_version(5)?"":"|routine|trigger|view")))."~",$Tc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}function
driver_config(){$U=array();$Gh=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$z=>$X){$U+=$X;$Gh[$z]=array_keys($X);}return
array('possible_drivers'=>array("MySQLi","MySQL","PDO_MySQL"),'jush'=>"sql",'types'=>$U,'structured_types'=>$Gh,'unsigned'=>array("unsigned","zerofill","unsigned zerofill"),'operators'=>array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","FIND_IN_SET","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL"),'functions'=>array("char_length","date","from_unixtime","lower","round","floor","ceil","sec_to_time","time_to_sec","upper"),'grouping'=>array("avg","count","count distinct","group_concat","max","min","sum"),'edit_functions'=>array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array(number_type()=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",)),);}}$vb=driver_config();$hg=$vb['possible_drivers'];$y=$vb['jush'];$U=$vb['types'];$Gh=$vb['structured_types'];$Hi=$vb['unsigned'];$uf=$vb['operators'];$nd=$vb['functions'];$td=$vb['grouping'];$qc=$vb['edit_functions'];if($b->operators===null)$b->operators=$uf;define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~\?.*~','',relative_uri()).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.8.1";function
page_header($gi,$n="",$Ua=array(),$hi=""){global$ca,$ia,$b,$ic,$y;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$ii=$gi.($hi!=""?": $hi":"");$ji=strip_tags($ii.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>',$ji,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=4.8.1"),'">
',script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=4.8.1");if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.8.1"),'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.8.1"),'">
';foreach($b->css()as$Mb){echo'<link rel="stylesheet" type="text/css" href="',h($Mb),'">
';}}echo'
<body class="ltr nojs">
';$q=get_temp_dir()."/adminer.version";if(!$_COOKIE["adminer_version"]&&function_exists('openssl_verify')&&file_exists($q)&&filemtime($q)+86400>time()){$Wi=unserialize(file_get_contents($q));$tg="-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwqWOVuF5uw7/+Z70djoK
RlHIZFZPO0uYRezq90+7Amk+FDNd7KkL5eDve+vHRJBLAszF/7XKXe11xwliIsFs
DFWQlsABVZB3oisKCBEuI71J4kPH8dKGEWR9jDHFw3cWmoH3PmqImX6FISWbG3B8
h7FIx3jEaw5ckVPVTeo5JRm/1DZzJxjyDenXvBQ/6o9DgZKeNDgxwKzH+sw9/YCO
jHnq1cFpOIISzARlrHMa/43YfeNRAm/tsBXjSxembBPo7aQZLAWHmaj5+K19H10B
nCpz9Y++cipkVEiKRGih4ZEvjoFysEOdRLj6WiD/uUNky4xGeA6LaJqh5XpkFkcQ
fQIDAQAB
-----END PUBLIC KEY-----
";if(openssl_verify($Wi["version"],base64_decode($Wi["signature"]),$tg)==1)$_COOKIE["adminer_version"]=$Wi["version"];}echo'<script',nonce(),'>
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick',(isset($_COOKIE["adminer_version"])?"":", onload: partial(verifyVersion, '$ia', '".js_escape(ME)."', '".get_token()."')");?>});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('You are offline.'),'\';
var thousandsSeparator = \'',js_escape(','),'\';
</script>

<div id="help" class="jush-',$y,' jsonly hidden"></div>
',script("mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});"),'
<div id="content">
';if($Ua!==null){$A=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($A?$A:".").'">'.$ic[DRIVER].'</a> &raquo; ';$A=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$M=$b->serverName(SERVER);$M=($M!=""?$M:'Server');if($Ua===false)echo"$M\n";else{echo"<a href='".h($A)."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ua)))echo'<a href="'.h($A."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ua)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ua
as$z=>$X){$bc=(is_array($X)?$X[1]:h($X));if($bc!="")echo"<a href='".h(ME."$z=").urlencode(is_array($X)?$X[0]:$X)."'>$bc</a> &raquo; ";}}echo"$gi\n";}}echo"<h2>$ii</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$k=&get_session("dbs");if(DB!=""&&$k&&!in_array(DB,$k,true))$k=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach($b->csp()as$Lb){$zd=array();foreach($Lb
as$z=>$X)$zd[]="$z $X";header("Content-Security-Policy: ".implode("; ",$zd));}$b->headers();}function
csp(){return
array(array("script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","connect-src"=>"'self'","frame-src"=>"https://www.adminer.org","object-src"=>"'none'","base-uri"=>"'none'","form-action"=>"'self'",),);}function
get_nonce(){static$bf;if(!$bf)$bf=base64_encode(rand_string());return$bf;}function
page_messages($n){$Ji=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Oe=$_SESSION["messages"][$Ji];if($Oe){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Oe)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$Ji]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Re=""){global$b,$ni;echo'</div>

';if($Re!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$ni,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Re);echo'</div>
',script("setupSubmitHighlight(document);");}function
int32($Ue){while($Ue>=2147483648)$Ue-=4294967296;while($Ue<=-2147483649)$Ue+=4294967296;return(int)$Ue;}function
long2str($W,$aj){$Xg='';foreach($W
as$X)$Xg.=pack('V',$X);if($aj)return
substr($Xg,0,end($W));return$Xg;}function
str2long($Xg,$aj){$W=array_values(unpack('V*',str_pad($Xg,4*ceil(strlen($Xg)/4),"\0")));if($aj)$W[]=strlen($Xg);return$W;}function
xxtea_mx($mj,$lj,$Kh,$fe){return
int32((($mj>>5&0x7FFFFFF)^$lj<<2)+(($lj>>3&0x1FFFFFFF)^$mj<<4))^int32(($Kh^$lj)+($fe^$mj));}function
encrypt_string($Fh,$z){if($Fh=="")return"";$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($Fh,true);$Ue=count($W)-1;$mj=$W[$Ue];$lj=$W[0];$ug=floor(6+52/($Ue+1));$Kh=0;while($ug-->0){$Kh=int32($Kh+0x9E3779B9);$pc=$Kh>>2&3;for($Lf=0;$Lf<$Ue;$Lf++){$lj=$W[$Lf+1];$Te=xxtea_mx($mj,$lj,$Kh,$z[$Lf&3^$pc]);$mj=int32($W[$Lf]+$Te);$W[$Lf]=$mj;}$lj=$W[0];$Te=xxtea_mx($mj,$lj,$Kh,$z[$Lf&3^$pc]);$mj=int32($W[$Ue]+$Te);$W[$Ue]=$mj;}return
long2str($W,false);}function
decrypt_string($Fh,$z){if($Fh=="")return"";if(!$z)return
false;$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($Fh,false);$Ue=count($W)-1;$mj=$W[$Ue];$lj=$W[0];$ug=floor(6+52/($Ue+1));$Kh=int32($ug*0x9E3779B9);while($Kh){$pc=$Kh>>2&3;for($Lf=$Ue;$Lf>0;$Lf--){$mj=$W[$Lf-1];$Te=xxtea_mx($mj,$lj,$Kh,$z[$Lf&3^$pc]);$lj=int32($W[$Lf]-$Te);$W[$Lf]=$lj;}$mj=$W[$Ue];$Te=xxtea_mx($mj,$lj,$Kh,$z[$Lf&3^$pc]);$lj=int32($W[0]-$Te);$W[0]=$lj;$Kh=int32($Kh-0x9E3779B9);}return
long2str($W,true);}$g='';$yd=$_SESSION["token"];if(!$yd)$_SESSION["token"]=rand(1,1e6);$ni=get_token();$bg=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($z)=explode(":",$X);$bg[$z]=$X;}}function
add_invalid_login(){global$b;$ld=file_open_lock(get_temp_dir()."/adminer.invalid");if(!$ld)return;$Yd=unserialize(stream_get_contents($ld));$di=time();if($Yd){foreach($Yd
as$Zd=>$X){if($X[0]<$di)unset($Yd[$Zd]);}}$Xd=&$Yd[$b->bruteForceKey()];if(!$Xd)$Xd=array($di+30*60,0);$Xd[1]++;file_write_unlock($ld,serialize($Yd));}function
check_invalid_login(){global$b;$Yd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Xd=($Yd?$Yd[$b->bruteForceKey()]:array());$af=($Xd[1]>29?$Xd[0]-time():0);if($af>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($af/60)));}$Ia=$_POST["auth"];if($Ia){session_regenerate_id();$Vi=$Ia["driver"];$M=$Ia["server"];$V=$Ia["username"];$F=(string)$Ia["password"];$l=$Ia["db"];set_password($Vi,$M,$V,$F);$_SESSION["db"][$Vi][$M][$V][$l]=true;if($Ia["permanent"]){$z=base64_encode($Vi)."-".base64_encode($M)."-".base64_encode($V)."-".base64_encode($l);$ng=$b->permanentLogin(true);$bg[$z]="$z:".base64_encode($ng?encrypt_string($F,$ng):"");cookie("adminer_permanent",implode(" ",$bg));}if(count($_POST)==1||DRIVER!=$Vi||SERVER!=$M||$_GET["username"]!==$V||DB!=$l)redirect(auth_url($Vi,$M,$V,$l));}elseif($_POST["logout"]&&(!$yd||verify_token())){foreach(array("pwds","db","dbs","queries")as$z)set_session($z,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.'.' '.'Thanks for using Adminer, consider <a href="https://www.adminer.org/en/donation/">donating</a>.');}elseif($bg&&!$_SESSION["pwds"]){session_regenerate_id();$ng=$b->permanentLogin();foreach($bg
as$z=>$X){list(,$fb)=explode(":",$X);list($Vi,$M,$V,$l)=array_map('base64_decode',explode("-",$z));set_password($Vi,$M,$V,decrypt_string(base64_decode($fb),$ng));$_SESSION["db"][$Vi][$M][$V][$l]=true;}}function
unset_permanent(){global$bg;foreach($bg
as$z=>$X){list($Vi,$M,$V,$l)=array_map('base64_decode',explode("-",$z));if($Vi==DRIVER&&$M==SERVER&&$V==$_GET["username"]&&$l==DB)unset($bg[$z]);}cookie("adminer_permanent",implode(" ",$bg));}function
auth_error($n){global$b,$yd;$mh=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$mh]||$_GET[$mh])&&!$yd)$n='Session expired, please login again.';else{restart_session();add_invalid_login();$F=get_password();if($F!==null){if($F===false)$n.=($n?'<br>':'').sprintf('Master password expired. <a href="https://www.adminer.org/en/extension/"%s>Implement</a> %s method to make it permanent.',target_blank(),'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$mh]&&$_GET[$mh]&&ini_bool("session.use_only_cookies"))$n='Session support must be enabled.';$Of=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$Of["lifetime"]);page_header('Login',$n,null);echo"<form action='' method='post'>\n","<div>";if(hidden_fields($_POST,array("auth")))echo"<p class='message'>".'The action will be performed after successful login with the same credentials.'."\n";echo"</div>\n";$b->loginForm();echo"</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])&&!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$hg)),false);page_footer("auth");exit;}stop_session(true);if(isset($_GET["username"])&&is_string(get_password())){list($Dd,$dg)=explode(":",SERVER,2);if(preg_match('~^\s*([-+]?\d+)~',$dg,$C)&&($C[1]<1024||$C[1]>65535))auth_error('Connecting to privileged ports is not allowed.');check_invalid_login();$g=connect();$m=new
Min_Driver($g);}$xe=null;if(!is_object($g)||($xe=$b->login($_GET["username"],get_password()))!==true){$n=(is_string($g)?h($g):(is_string($xe)?$xe:'Invalid credentials.'));auth_error($n.(preg_match('~^ | $~',get_password())?'<br>'.'There is a space in the input password which might be the cause.':''));}if($_POST["logout"]&&$yd&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}if($Ia&&$_POST["token"])$_POST["token"]=$ni;$n='';if($_POST){if(!verify_token()){$Sd="max_input_vars";$Ie=ini_get($Sd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$z){$X=ini_get($z);if($X&&(!$Ie||$X<$Ie)){$Sd=$z;$Ie=$X;}}}$n=(!$_POST["token"]&&$Ie?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$Sd'"):'Invalid CSRF token. Send the form again.'.' '.'If you did not send this request from Adminer then close this page.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.'You can upload a big SQL file via FTP and import it from server.';}function
select($H,$h=null,$Bf=array(),$_=0){global$y;$we=array();$x=array();$f=array();$Sa=array();$U=array();$I=array();odd('');for($t=0;(!$_||$t<$_)&&($J=$H->fetch_row());$t++){if(!$t){echo"<div class='scrollable'>\n","<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($ee=0;$ee<count($J);$ee++){$o=$H->fetch_field();$D=$o->name;$Af=$o->orgtable;$_f=$o->orgname;$I[$o->table]=$Af;if($Bf&&$y=="sql")$we[$ee]=($D=="table"?"table=":($D=="possible_keys"?"indexes=":null));elseif($Af!=""){if(!isset($x[$Af])){$x[$Af]=array();foreach(indexes($Af,$h)as$w){if($w["type"]=="PRIMARY"){$x[$Af]=array_flip($w["columns"]);break;}}$f[$Af]=$x[$Af];}if(isset($f[$Af][$_f])){unset($f[$Af][$_f]);$x[$Af][$_f]=$ee;$we[$ee]=$Af;}}if($o->charsetnr==63)$Sa[$ee]=true;$U[$ee]=$o->type;echo"<th".($Af!=""||$o->name!=$_f?" title='".h(($Af!=""?"$Af.":"").$_f)."'":"").">".h($D).($Bf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($D),'mariadb'=>"explain/#the-columns-in-explain-select",)):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($J
as$z=>$X){$A="";if(isset($we[$z])&&!$f[$we[$z]]){if($Bf&&$y=="sql"){$Q=$J[array_search("table=",$we)];$A=ME.$we[$z].urlencode($Bf[$Q]!=""?$Bf[$Q]:$Q);}else{$A=ME."edit=".urlencode($we[$z]);foreach($x[$we[$z]]as$jb=>$ee)$A.="&where".urlencode("[".bracket_escape($jb)."]")."=".urlencode($J[$ee]);}}elseif(is_url($X))$A=$X;if($X===null)$X="<i>NULL</i>";elseif($Sa[$z]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";else{$X=h($X);if($U[$z]==254)$X="<code>$X</code>";}if($A)$X="<a href='".h($A)."'".(is_url($A)?target_blank():'').">$X</a>";echo"<td>$X";}}echo($t?"</table>\n</div>":"<p class='message'>".'No rows.')."\n";return$I;}function
referencable_primary($fh){$I=array();foreach(table_status('',true)as$Oh=>$Q){if($Oh!=$fh&&fk_support($Q)){foreach(fields($Oh)as$o){if($o["primary"]){if($I[$Oh]){unset($I[$Oh]);break;}$I[$Oh]=$o;}}}}return$I;}function
adminer_settings(){parse_str($_COOKIE["adminer_settings"],$oh);return$oh;}function
adminer_setting($z){$oh=adminer_settings();return$oh[$z];}function
set_adminer_settings($oh){return
cookie("adminer_settings",http_build_query($oh+adminer_settings()));}function
textarea($D,$Y,$K=10,$nb=80){global$y;echo"<textarea name='$D' rows='$K' cols='$nb' class='sqlarea jush-$y' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($z,$o,$lb,$hd=array(),$Pc=array()){global$Gh,$U,$Hi,$pf;$T=$o["type"];echo'<td><select name="',h($z),'[type]" class="type" aria-labelledby="label-type">';if($T&&!isset($U[$T])&&!isset($hd[$T])&&!in_array($T,$Pc))$Pc[]=$T;if($hd)$Gh['Foreign keys']=$hd;echo
optionlist(array_merge($Pc,$Gh),$T),'</select><td><input name="',h($z),'[length]" value="',h($o["length"]),'" size="3"',(!$o["length"]&&preg_match('~var(char|binary)$~',$T)?" class='required'":"");echo' aria-labelledby="label-length"><td class="options">',"<select name='".h($z)."[collation]'".(preg_match('~(char|text|enum|set)$~',$T)?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($lb,$o["collation"]).'</select>',($Hi?"<select name='".h($z)."[unsigned]'".(!$T||preg_match(number_type(),$T)?"":" class='hidden'").'><option>'.optionlist($Hi,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($z)."[on_update]'".(preg_match('~timestamp|datetime~',$T)?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),(preg_match('~^CURRENT_TIMESTAMP~i',$o["on_update"])?"CURRENT_TIMESTAMP":$o["on_update"])).'</select>':''),($hd?"<select name='".h($z)."[on_delete]'".(preg_match("~`~",$T)?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$pf),$o["on_delete"])."</select> ":" ");}function
process_length($te){global$_c;return(preg_match("~^\\s*\\(?\\s*$_c(?:\\s*,\\s*$_c)*+\\s*\\)?\\s*\$~",$te)&&preg_match_all("~$_c~",$te,$Ce)?"(".implode(",",$Ce[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$te)));}function
process_type($o,$kb="COLLATE"){global$Hi;return" $o[type]".process_length($o["length"]).(preg_match(number_type(),$o["type"])&&in_array($o["unsigned"],$Hi)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $kb ".q($o["collation"]):"");}function
process_field($o,$_i){return
array(idf_escape(trim($o["field"])),process_type($_i),($o["null"]?" NULL":" NOT NULL"),default_value($o),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
default_value($o){$Wb=$o["default"];return($Wb===null?"":" DEFAULT ".(preg_match('~char|binary|text|enum|set~',$o["type"])||preg_match('~^(?![a-z])~i',$Wb)?q($Wb):$Wb));}function
type_class($T){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$z=>$X){if(preg_match("~$z|$X~",$T))return" class='$z'";}}function
edit_fields($p,$lb,$T="TABLE",$hd=array()){global$Td;$p=array_values($p);$Xb=(($_POST?$_POST["defaults"]:adminer_setting("defaults"))?"":" class='hidden'");$sb=(($_POST?$_POST["comments"]:adminer_setting("comments"))?"":" class='hidden'");echo'<thead><tr>
';if($T=="PROCEDURE"){echo'<td>';}echo'<th id="label-name">',($T=="TABLE"?'Column name':'Parameter name'),'<td id="label-type">Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;"></textarea>',script("qs('#enum-edit').onblur = editingLengthBlur;"),'<td id="label-length">Length
<td>','Options';if($T=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'mariadb'=>"auto_increment/",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default"',$Xb,'>Default value
',(support("comment")?"<td id='label-comment'$sb>".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.8.1")."' alt='+' title='".'Add next'."'>".script("row_count = ".count($p).";"),'</thead>
<tbody>
',script("mixin(qsl('tbody'), {onclick: editingClick, onkeydown: editingKeydown, oninput: editingInput});");foreach($p
as$t=>$o){$t++;$Cf=$o[($_POST?"orig":"field")];$fc=(isset($_POST["add"][$t-1])||(isset($o["field"])&&!$_POST["drop_col"][$t]))&&(support("drop_col")||$Cf=="");echo'<tr',($fc?"":" style='display: none;'"),'>
',($T=="PROCEDURE"?"<td>".html_select("fields[$t][inout]",explode("|",$Td),$o["inout"]):""),'<th>';if($fc){echo'<input name="fields[',$t,'][field]" value="',h($o["field"]),'" data-maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'<input type="hidden" name="fields[',$t,'][orig]" value="',h($Cf),'">';edit_type("fields[$t]",$o,$lb,$hd);if($T=="TABLE"){echo'<td>',checkbox("fields[$t][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$t,'"';if($o["auto_increment"]){echo' checked';}echo' aria-labelledby="label-ai"></label><td',$Xb,'>',checkbox("fields[$t][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$t,'][default]" value="',h($o["default"]),'" aria-labelledby="label-default">',(support("comment")?"<td$sb><input name='fields[$t][comment]' value='".h($o["comment"])."' data-maxlength='".(min_version(5.5)?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$t]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.8.1")."' alt='+' title='".'Add next'."'> "."<input type='image' class='icon' name='up[$t]' src='".h(preg_replace("~\\?.*~","",ME)."?file=up.gif&version=4.8.1")."' alt='Ã¢â€ â€˜' title='".'Move up'."'> "."<input type='image' class='icon' name='down[$t]' src='".h(preg_replace("~\\?.*~","",ME)."?file=down.gif&version=4.8.1")."' alt='Ã¢â€ â€œ' title='".'Move down'."'> ":""),($Cf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$t]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.8.1")."' alt='x' title='".'Remove'."'>":"");}}function
process_fields(&$p){$hf=0;if($_POST["up"]){$ne=0;foreach($p
as$z=>$o){if(key($_POST["up"])==$z){unset($p[$z]);array_splice($p,$ne,0,array($o));break;}if(isset($o["field"]))$ne=$hf;$hf++;}}elseif($_POST["down"]){$jd=false;foreach($p
as$z=>$o){if(isset($o["field"])&&$jd){unset($p[key($_POST["down"])]);array_splice($p,$hf,0,array($jd));break;}if(key($_POST["down"])==$z)$jd=$o;$hf++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($C){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($C[0][0].$C[0][0],$C[0][0],substr($C[0],1,-1))),'\\'))."'";}function
grant($od,$pg,$f,$of){if(!$pg)return
true;if($pg==array("ALL PRIVILEGES","GRANT OPTION"))return($od=="GRANT"?queries("$od ALL PRIVILEGES$of WITH GRANT OPTION"):queries("$od ALL PRIVILEGES$of")&&queries("$od GRANT OPTION$of"));return
queries("$od ".preg_replace('~(GRANT OPTION)\([^)]*\)~','\1',implode("$f, ",$pg).$f).$of);}function
drop_create($jc,$i,$kc,$ai,$mc,$B,$Ne,$Le,$Me,$lf,$Ye){if($_POST["drop"])query_redirect($jc,$B,$Ne);elseif($lf=="")query_redirect($i,$B,$Me);elseif($lf!=$Ye){$Jb=queries($i);queries_redirect($B,$Le,$Jb&&queries($jc));if($Jb)queries($kc);}else
queries_redirect($B,$Le,queries($ai)&&queries($mc)&&queries($jc)&&queries($i));}function
create_trigger($of,$J){global$y;$fi=" $J[Timing] $J[Event]".(preg_match('~ OF~',$J["Event"])?" $J[Of]":"");return"CREATE TRIGGER ".idf_escape($J["Trigger"]).($y=="mssql"?$of.$fi:$fi.$of).rtrim(" $J[Type]\n$J[Statement]",";").";";}function
create_routine($Tg,$J){global$Td,$y;$N=array();$p=(array)$J["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$N[]=(preg_match("~^($Td)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}$Yb=rtrim("\n$J[definition]",";");return"CREATE $Tg ".idf_escape(trim($J["name"]))." (".implode(", ",$N).")".(isset($_GET["function"])?" RETURNS".process_type($J["returns"],"CHARACTER SET"):"").($J["language"]?" LANGUAGE $J[language]":"").($y=="pgsql"?" AS ".q($Yb):"$Yb;");}function
remove_definer($G){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\1)',logged_user()).'`~','\1',$G);}function
format_foreign_key($r){global$pf;$l=$r["db"];$cf=$r["ns"];return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$r["source"])).") REFERENCES ".($l!=""&&$l!=$_GET["db"]?idf_escape($l).".":"").($cf!=""&&$cf!=$_GET["ns"]?idf_escape($cf).".":"").table($r["table"])." (".implode(", ",array_map('idf_escape',$r["target"])).")".(preg_match("~^($pf)\$~",$r["on_delete"])?" ON DELETE $r[on_delete]":"").(preg_match("~^($pf)\$~",$r["on_update"])?" ON UPDATE $r[on_update]":"");}function
tar_file($q,$ki){$I=pack("a100a8a8a8a12a12",$q,644,0,0,decoct($ki->size),decoct(time()));$eb=8*32;for($t=0;$t<strlen($I);$t++)$eb+=ord($I[$t]);$I.=sprintf("%06o",$eb)."\0 ";echo$I,str_repeat("\0",512-strlen($I));$ki->send();echo
str_repeat("\0",511-($ki->size+511)%512);}function
ini_bytes($Sd){$X=ini_get($Sd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Yf,$bi="<sup>?</sup>"){global$y,$g;$kh=$g->server_info;$Wi=preg_replace('~^(\d\.?\d).*~s','\1',$kh);$Li=array('sql'=>"https://dev.mysql.com/doc/refman/$Wi/en/",'sqlite'=>"https://www.sqlite.org/",'pgsql'=>"https://www.postgresql.org/docs/$Wi/",'mssql'=>"https://msdn.microsoft.com/library/",'oracle'=>"https://www.oracle.com/pls/topic/lookup?ctx=db".preg_replace('~^.* (\d+)\.(\d+)\.\d+\.\d+\.\d+.*~s','\1\2',$kh)."&id=",);if(preg_match('~MariaDB~',$kh)){$Li['sql']="https://mariadb.com/kb/en/library/";$Yf['sql']=(isset($Yf['mariadb'])?$Yf['mariadb']:str_replace(".html","/",$Yf['sql']));}return($Yf[$y]?"<a href='".h($Li[$y].$Yf[$y])."'".target_blank().">$bi</a>":"");}function
ob_gzencode($P){return
gzencode($P);}function
db_size($l){global$g;if(!$g->select_db($l))return"?";$I=0;foreach(table_status()as$R)$I+=$R["Data_length"]+$R["Index_length"];return
format_number($I);}function
set_utf8mb4($i){global$g;static$N=false;if(!$N&&preg_match('~\butf8mb4~i',$i)){$N=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$ni,$n,$ic;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$n,false);echo"<p class='links'>\n";foreach(array('database'=>'Create database','privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$z=>$X){if(support($z))echo"<a href='".h(ME)."$z='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$ic[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$k=$b->databases();if($k){$ah=support("scheme");$lb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),"<thead><tr>".(support("database")?"<td>":"")."<th>".'Database'." - <a href='".h(ME)."refresh=1'>".'Refresh'."</a>"."<td>".'Collation'."<td>".'Tables'."<td>".'Size'." - <a href='".h(ME)."dbsize=1'>".'Compute'."</a>".script("qsl('a').onclick = partial(ajaxSetHtml, '".js_escape(ME)."script=connect');","")."</thead>\n";$k=($_GET["dbsize"]?count_tables($k):array_flip($k));foreach($k
as$l=>$S){$Sg=h(ME)."db=".urlencode($l);$u=h("Db-".$l);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$l,in_array($l,(array)$_POST["db"]),"","","",$u):""),"<th><a href='$Sg' id='$u'>".h($l)."</a>";$d=h(db_collation($l,$lb));echo"<td>".(support("database")?"<a href='$Sg".($ah?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>$d</a>":$d),"<td align='right'><a href='$Sg&amp;schema=' id='tables-".h($l)."' title='".'Database schema'."'>".($_GET["dbsize"]?$S:"?")."</a>","<td align='right' id='size-".h($l)."'>".($_GET["dbsize"]?db_size($l):"?"),"\n";}echo"</table>\n",(support("database")?"<div class='footer'><div>\n"."<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value=''>".script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^db/)); };")."<input type='submit' name='drop' value='".'Drop'."'>".confirm()."\n"."</div></fieldset>\n"."</div></div>\n":""),"<input type='hidden' name='token' value='$ni'>\n","</form>\n",script("tableCheck();");}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")){if(DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}}$pf="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($Cb){$this->size+=strlen($Cb);fwrite($this->handler,$Cb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$_c="'(?:''|[^'\\\\]|\\\\.)*'";$Td="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$L=array(idf_escape($_GET["field"]));$H=$m->select($a,$L,array(where($_GET,$p)),$L);$J=($H?$H->fetch_row():array());echo$m->value($J[0],$p[$_GET["field"]]);exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$R=table_status1($a,true);$D=$b->tableName($R);page_header(($p&&is_view($R)?$R['Engine']=='materialized view'?'Materialized view':'View':'Table').": ".($D!=""?$D:h($a)),$n);$b->selectLinks($R);$rb=$R["Comment"];if($rb!="")echo"<p class='nowrap'>".'Comment'.": ".h($rb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$x=indexes($a);if($x)$b->tableIndexesPrint($x);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$hd=foreign_keys($a);if($hd){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'."<td></thead>\n";foreach($hd
as$D=>$r){echo"<tr title='".h($D)."'>","<th><i>".implode("</i>, <i>",array_map('h',$r["source"]))."</i>","<td><a href='".h($r["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($r["db"]),ME):($r["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($r["ns"]),ME):ME))."table=".urlencode($r["table"])."'>".($r["db"]!=""?"<b>".h($r["db"])."</b>.":"").($r["ns"]!=""?"<b>".h($r["ns"])."</b>.":"").h($r["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$r["target"]))."</i>)","<td>".h($r["on_delete"])."\n","<td>".h($r["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($D)).'">'.'Alter'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$zi=triggers($a);if($zi){echo"<table cellspacing='0'>\n";foreach($zi
as$z=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($z)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($z))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Qh=array();$Rh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$Ce,PREG_SET_ORDER);foreach($Ce
as$t=>$C){$Qh[$C[1]]=array($C[2],$C[3]);$Rh[]="\n\t'".js_escape($C[1])."': [ $C[2], $C[3] ]";}$oi=0;$Pa=-1;$Zg=array();$Eg=array();$re=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$eg=0;$Zg[$Q]["fields"]=array();foreach(fields($Q)as$D=>$o){$eg+=1.25;$o["pos"]=$eg;$Zg[$Q]["fields"][$D]=$o;}$Zg[$Q]["pos"]=($Qh[$Q]?$Qh[$Q]:array($oi,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$pe=$Pa;if($Qh[$Q][1]||$Qh[$X["table"]][1])$pe=min(floatval($Qh[$Q][1]),floatval($Qh[$X["table"]][1]))-1;else$Pa-=.1;while($re[(string)$pe])$pe-=.0001;$Zg[$Q]["references"][$X["table"]][(string)$pe]=array($X["source"],$X["target"]);$Eg[$X["table"]][$Q][(string)$pe]=$X["target"];$re[(string)$pe]=true;}}$oi=max($oi,$Zg[$Q]["pos"][0]+2.5+$eg);}echo'<div id="schema" style="height: ',$oi,'em;">
<script',nonce(),'>
qs(\'#schema\').onselectstart = function () { return false; };
var tablePos = {',implode(",",$Rh)."\n",'};
var em = qs(\'#schema\').offsetHeight / ',$oi,';
document.onmousemove = schemaMousemove;
document.onmouseup = partialArg(schemaMouseup, \'',js_escape(DB),'\');
</script>
';foreach($Zg
as$D=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;'>",'<a href="'.h(ME).'table='.urlencode($D).'"><b>'.h($D)."</b></a>",script("qsl('div').onmousedown = schemaMousedown;");foreach($Q["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Xh=>$Fg){foreach($Fg
as$pe=>$Bg){$qe=$pe-$Qh[$D][1];$t=0;foreach($Bg[0]as$vh)echo"\n<div class='references' title='".h($Xh)."' id='refs$pe-".($t++)."' style='left: $qe"."em; top: ".$Q["fields"][$vh]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$qe)."em;'></div></div>";}}foreach((array)$Eg[$D]as$Xh=>$Fg){foreach($Fg
as$pe=>$f){$qe=$pe-$Qh[$D][1];$t=0;foreach($f
as$Wh)echo"\n<div class='references' title='".h($Xh)."' id='refd$pe-".($t++)."' style='left: $qe"."em; top: ".$Q["fields"][$Wh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME)."?file=arrow.gif) no-repeat right center;&version=4.8.1")."'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$qe)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Zg
as$D=>$Q){foreach((array)$Q["references"]as$Xh=>$Fg){foreach($Fg
as$pe=>$Bg){$Qe=$oi;$Ge=-10;foreach($Bg[0]as$z=>$vh){$fg=$Q["pos"][0]+$Q["fields"][$vh]["pos"];$gg=$Zg[$Xh]["pos"][0]+$Zg[$Xh]["fields"][$Bg[1][$z]]["pos"];$Qe=min($Qe,$fg,$gg);$Ge=max($Ge,$fg,$gg);}echo"<div class='references' id='refl$pe' style='left: $pe"."em; top: $Qe"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Ge-$Qe)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Fb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$z)$Fb.="&$z=".urlencode($_POST[$z]);cookie("adminer_export",substr($Fb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Mc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$be=preg_match('~sql~',$_POST["format"]);if($be){echo"-- Adminer $ia ".$ic[DRIVER]." ".str_replace("\n"," ",$g->server_info)." dump\n\n";if($y=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
".($_POST["data_style"]?"SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00'");$g->query("SET sql_mode = ''");}}$Hh=$_POST["db_style"];$k=array(DB);if(DB==""){$k=$_POST["databases"];if(is_string($k))$k=explode("\n",rtrim(str_replace("\r","",$k),"\n"));}foreach((array)$k
as$l){$b->dumpDatabase($l);if($g->select_db($l)){if($be&&preg_match('~CREATE~',$Hh)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($l),1))){set_utf8mb4($i);if($Hh=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($l).";\n";echo"$i;\n";}if($be){if($Hh)echo
use_sql($l).";\n\n";$If="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Tg){foreach(get_rows("SHOW $Tg STATUS WHERE Db = ".q($l),null,"-- ")as$J){$i=remove_definer($g->result("SHOW CREATE $Tg ".idf_escape($J["Name"]),2));set_utf8mb4($i);$If.=($Hh!='DROP+CREATE'?"DROP $Tg IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$J){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($J["Name"]),3));set_utf8mb4($i);$If.=($Hh!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$i;;\n\n";}}if($If)echo"DELIMITER ;;\n\n$If"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Yi=array();foreach(table_status('',true)as$D=>$R){$Q=(DB==""||in_array($D,(array)$_POST["tables"]));$Pb=(DB==""||in_array($D,(array)$_POST["data"]));if($Q||$Pb){if($Mc=="tar"){$ki=new
TmpFile;ob_start(array($ki,'write'),1e5);}$b->dumpTable($D,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Yi[]=$D;elseif($Pb){$p=fields($D);$b->dumpData($D,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($D));}if($be&&$_POST["triggers"]&&$Q&&($zi=trigger_sql($D)))echo"\nDELIMITER ;;\n$zi\nDELIMITER ;\n";if($Mc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$l/")."$D.csv",$ki);}elseif($be)echo"\n";}}if(function_exists('foreign_keys_sql')){foreach(table_status('',true)as$D=>$R){$Q=(DB==""||in_array($D,(array)$_POST["tables"]));if($Q&&!is_view($R))echo
foreign_keys_sql($D);}}foreach($Yi
as$Xi)$b->dumpTable($Xi,$_POST["table_style"],1);if($Mc=="tar")echo
pack("x512");}}}if($be)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0" class="layout">
';$Tb=array('','USE','DROP+CREATE','CREATE');$Sh=array('','DROP+CREATE','CREATE');$Qb=array('','TRUNCATE+INSERT','INSERT');if($y=="sql")$Qb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$J);if(!$J)$J=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($J["events"])){$J["routines"]=$J["events"]=($_GET["dump"]=="");$J["triggers"]=$J["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$J["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$J["format"],0)."\n";echo($y=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Tb,$J["db_style"]).(support("routine")?checkbox("routines",1,$J["routines"],'Routines'):"").(support("event")?checkbox("events",1,$J["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Sh,$J["table_style"]).checkbox("auto_increment",1,$J["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$J["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Qb,$J["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$ni,'">

<table cellspacing="0">
',script("qsl('table').onclick = dumpClick;");$jg=array();if(DB!=""){$cb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$cb>".'Tables'."</label>".script("qs('#check-tables').onclick = partial(formCheck, /^tables\\[/);",""),"<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$cb></label>".script("qs('#check-data').onclick = partial(formCheck, /^data\\[/);",""),"</thead>\n";$Yi="";$Th=tables_list();foreach($Th
as$D=>$T){$ig=preg_replace('~_.*~','',$D);$cb=($a==""||$a==(substr($a,-1)=="%"?"$ig%":$D));$mg="<tr><td>".checkbox("tables[]",$D,$cb,$D,"","block");if($T!==null&&!preg_match('~table~i',$T))$Yi.="$mg\n";else
echo"$mg<td align='right'><label class='block'><span id='Rows-".h($D)."'></span>".checkbox("data[]",$D,$cb)."</label>\n";$jg[$ig]++;}echo$Yi;if($Th)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}else{echo"<thead><tr><th style='text-align: left;'>","<label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"").">".'Database'."</label>",script("qs('#check-databases').onclick = partial(formCheck, /^databases\\[/);",""),"</thead>\n";$k=$b->databases();if($k){foreach($k
as$l){if(!information_schema($l)){$ig=preg_replace('~_.*~','',$l);echo"<tr><td>".checkbox("databases[]",$l,$a==""||$a=="$ig%",$l,"","block")."\n";$jg[$ig]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Zc=true;foreach($jg
as$z=>$X){if($z!=""&&$X>1){echo($Zc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$z%")."'>".h($z)."</a>";$Zc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');echo'<p class="links"><a href="'.h(ME).'user=">'.'Create user'."</a>";$H=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$od=$H;if(!$H)$H=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($od?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th></thead>\n";while($J=$H->fetch_assoc())echo'<tr'.odd().'><td>'.h($J["User"])."<td>".h($J["Host"]).'<td><a href="'.h(ME.'user='.urlencode($J["User"]).'&host='.urlencode($J["Host"])).'">'.'Edit'."</a>\n";if(!$od||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Bd=&get_session("queries");$Ad=&$Bd[DB];if(!$n&&$_POST["clear"]){$Ad=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL command'),$n);if(!$n&&$_POST){$ld=false;if(!isset($_GET["import"]))$G=$_POST["query"];elseif($_POST["webfile"]){$zh=$b->importServerPath();$ld=@fopen((file_exists($zh)?$zh:"compress.zlib://$zh.gz"),"rb");$G=($ld?fread($ld,1e6):false);}else$G=get_file("sql_file",true);if(is_string($G)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($G)+memory_get_usage()+8e6));if($G!=""&&strlen($G)<1e6){$ug=$G.(preg_match("~;[ \t\r\n]*\$~",$G)?"":";");if(!$Ad||reset(end($Ad))!=$ug){restart_session();$Ad[]=array($ug,time());set_session("queries",$Bd);stop_session();}}$wh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$ac=";";$hf=0;$xc=true;$h=connect();if(is_object($h)&&DB!=""){$h->select_db(DB);if($_GET["ns"]!="")set_schema($_GET["ns"],$h);}$qb=0;$Bc=array();$Pf='[\'"'.($y=="sql"?'`#':($y=="sqlite"?'`[':($y=="mssql"?'[':''))).']|/\*|-- |$'.($y=="pgsql"?'|\$[^$]*\$':'');$pi=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$oc=$b->dumpFormat();unset($oc["sql"]);while($G!=""){if(!$hf&&preg_match("~^$wh*+DELIMITER\\s+(\\S+)~i",$G,$C)){$ac=$C[1];$G=substr($G,strlen($C[0]));}else{preg_match('('.preg_quote($ac)."\\s*|$Pf)",$G,$C,PREG_OFFSET_CAPTURE,$hf);list($jd,$eg)=$C[0];if(!$jd&&$ld&&!feof($ld))$G.=fread($ld,1e5);else{if(!$jd&&rtrim($G)=="")break;$hf=$eg+strlen($jd);if($jd&&rtrim($jd)!=$ac){while(preg_match('('.($jd=='/*'?'\*/':($jd=='['?']':(preg_match('~^-- |^#~',$jd)?"\n":preg_quote($jd)."|\\\\."))).'|$)s',$G,$C,PREG_OFFSET_CAPTURE,$hf)){$Xg=$C[0][0];if(!$Xg&&$ld&&!feof($ld))$G.=fread($ld,1e5);else{$hf=$C[0][1]+strlen($Xg);if($Xg[0]!="\\")break;}}}else{$xc=false;$ug=substr($G,0,$eg);$qb++;$mg="<pre id='sql-$qb'><code class='jush-$y'>".$b->sqlCommandQuery($ug)."</code></pre>\n";if($y=="sqlite"&&preg_match("~^$wh*+ATTACH\\b~i",$ug,$C)){echo$mg,"<p class='error'>".'ATTACH queries are not supported.'."\n";$Bc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$mg;ob_flush();flush();}$Ch=microtime(true);if($g->multi_query($ug)&&is_object($h)&&preg_match("~^$wh*+USE\\b~i",$ug))$h->query($ug);do{$H=$g->store_result();if($g->error){echo($_POST["only_errors"]?$mg:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$Bc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break
2;}else{$di=" <span class='time'>(".format_time($Ch).")</span>".(strlen($ug)<1000?" <a href='".h(ME)."sql=".urlencode(trim($ug))."'>".'Edit'."</a>":"");$za=$g->affected_rows;$bj=($_POST["only_errors"]?"":$m->warnings());$cj="warnings-$qb";if($bj)$di.=", <a href='#$cj'>".'Warnings'."</a>".script("qsl('a').onclick = partial(toggle, '$cj');","");$Jc=null;$Kc="explain-$qb";if(is_object($H)){$_=$_POST["limit"];$Bf=select($H,$h,array(),$_);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$df=$H->num_rows;echo"<p>".($df?($_&&$df>$_?sprintf('%d / ',$_):"").lang(array('%d row','%d rows'),$df):""),$di;if($h&&preg_match("~^($wh|\\()*+SELECT\\b~i",$ug)&&($Jc=explain($h,$ug)))echo", <a href='#$Kc'>Explain</a>".script("qsl('a').onclick = partial(toggle, '$Kc');","");$u="export-$qb";echo", <a href='#$u'>".'Export'."</a>".script("qsl('a').onclick = partial(toggle, '$u');","")."<span id='$u' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$oc,$xa["format"])."<input type='hidden' name='query' value='".h($ug)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$ni'></span>\n"."</form>\n";}}else{if(preg_match("~^$wh*+(CREATE|DROP|ALTER)$wh++(DATABASE|SCHEMA)\\b~i",$ug)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$za)."$di\n";}echo($bj?"<div id='$cj' class='hidden'>\n$bj</div>\n":"");if($Jc){echo"<div id='$Kc' class='hidden'>\n";select($Jc,$h,$Bf);echo"</div>\n";}}$Ch=microtime(true);}while($g->next_result());}$G=substr($G,$hf);$hf=0;}}}}if($xc)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$qb-count($Bc))," <span class='time'>(".format_time($pi).")</span>\n";}elseif($Bc&&$qb>1)echo"<p class='error'>".'Error in query'.": ".implode("",$Bc)."\n";}else
echo"<p class='error'>".upload_error($G)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Hc="<input type='submit' value='".'Execute'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$ug=$_GET["sql"];if($_POST)$ug=$_POST["query"];elseif($_GET["history"]=="all")$ug=$Ad;elseif($_GET["history"]!="")$ug=$Ad[$_GET["history"]][0];echo"<p>";textarea("query",$ug,20);echo
script(($_POST?"":"qs('textarea').focus();\n")."qs('#form').onsubmit = partial(sqlSubmit, qs('#form'), '".js_escape(remove_from_uri("sql|limit|error_stops|only_errors|history"))."');"),"<p>$Hc\n",'Limit rows'.": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".'File upload'."</legend><div>";$ud=(extension_loaded("zlib")?"[.gz]":"");echo(ini_bool("file_uploads")?"SQL$ud (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Hc":'File uploads are disabled.'),"</div></fieldset>\n";$Id=$b->importServerPath();if($Id){echo"<fieldset><legend>".'From server'."</legend><div>",sprintf('Webserver file %s',"<code>".h($Id)."$ud</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n";}echo"<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])||$_GET["error_stops"]),'Stop on error')."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])||$_GET["only_errors"]),'Show only errors')."\n","<input type='hidden' name='token' value='$ni'>\n";if(!isset($_GET["import"])&&$Ad){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($Ad);$X;$X=prev($Ad)){$z=key($Ad);list($ug,$di,$sc)=$X;echo'<a href="'.h(ME."sql=&history=$z").'">'.'Edit'."</a>"." <span class='time' title='".@date('Y-m-d',$di)."'>".@date("H:i:s",$di)."</span>"." <code class='jush-$y'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$ug)))),80,"</code>").($sc?" <span class='time'>($sc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Ii=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$D=>$o){if(!isset($o["privileges"][$Ii?"update":"insert"])||$b->fieldName($o)==""||$o["generated"])unset($p[$D]);}if($_POST&&!$n&&!isset($_GET["select"])){$B=$_POST["referer"];if($_POST["insert"])$B=($Ii?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$B))$B=ME."select=".urlencode($a);$x=indexes($a);$Di=unique_array($_GET["where"],$x);$xg="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($B,'Item has been deleted.',$m->delete($a,$xg,!$Di));else{$N=array();foreach($p
as$D=>$o){$X=process_input($o);if($X!==false&&$X!==null)$N[idf_escape($D)]=$X;}if($Ii){if(!$N)redirect($B);queries_redirect($B,'Item has been updated.',$m->update($a,$N,$xg,!$Di));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$H=$m->insert($a,$N);$oe=($H?last_id():0);queries_redirect($B,sprintf('Item%s has been inserted.',($oe?" $oe":"")),$H);}}}$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($Z){$L=array();foreach($p
as$D=>$o){if(isset($o["privileges"]["select"])){$Fa=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Fa="''";if($y=="sql"&&preg_match("~enum|set~",$o["type"]))$Fa="1*".idf_escape($D);$L[]=($Fa?"$Fa AS ":"").idf_escape($D);}}$J=array();if(!support("table"))$L=array("*");if($L){$H=$m->select($a,$L,array($Z),$L,array(),(isset($_GET["select"])?2:1));if(!$H)$n=error();else{$J=$H->fetch_assoc();if(!$J)$J=false;}if(isset($_GET["select"])&&(!$J||$H->fetch_assoc()))$J=null;}}if(!support("table")&&!$p){if(!$Z){$H=$m->select($a,array("*"),$Z,array("*"));$J=($H?$H->fetch_assoc():false);if(!$J)$J=array($m->primary=>"");}if($J){foreach($J
as$z=>$X){if(!$Z)$J[$z]=null;$p[$z]=array("field"=>$z,"null"=>($z!=$m->primary),"auto_increment"=>($z==$m->primary));}}}edit_form($a,$p,$J,$Ii);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Rf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$z)$Rf[$z]=$z;$Dg=referencable_primary($a);$hd=array();foreach($Dg
as$Oh=>$o)$hd[str_replace("`","``",$Oh)."`".str_replace("`","``",$o["field"])]=$Oh;$Ef=array();$R=array();if($a!=""){$Ef=fields($a);$R=table_status($a);if(!$R)$n='No tables.';}$J=$_POST;$J["fields"]=(array)$J["fields"];if($J["auto_increment_col"])$J["fields"][$J["auto_increment_col"]]["auto_increment"]=true;if($_POST)set_adminer_settings(array("comments"=>$_POST["comments"],"defaults"=>$_POST["defaults"]));if($_POST&&!process_fields($J["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),'Table has been dropped.',drop_tables(array($a)));else{$p=array();$Ca=array();$Mi=false;$fd=array();$Df=reset($Ef);$Aa=" FIRST";foreach($J["fields"]as$z=>$o){$r=$hd[$o["type"]];$_i=($r!==null?$Dg[$r]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($z==$J["auto_increment_col"])$o["auto_increment"]=true;$rg=process_field($o,$_i);$Ca[]=array($o["orig"],$rg,$Aa);if(!$Df||$rg!=process_field($Df,$Df)){$p[]=array($o["orig"],$rg,$Aa);if($o["orig"]!=""||$Aa)$Mi=true;}if($r!==null)$fd[idf_escape($o["field"])]=($a!=""&&$y!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$hd[$o["type"]],'source'=>array($o["field"]),'target'=>array($_i["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Mi=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$Df=next($Ef);if(!$Df)$Aa="";}}$Tf="";if($Rf[$J["partition_by"]]){$Uf=array();if($J["partition_by"]=='RANGE'||$J["partition_by"]=='LIST'){foreach(array_filter($J["partition_names"])as$z=>$X){$Y=$J["partition_values"][$z];$Uf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($J["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Tf.="\nPARTITION BY $J[partition_by]($J[partition])".($Uf?" (".implode(",",$Uf)."\n)":($J["partitions"]?" PARTITIONS ".(+$J["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$Tf.="\nREMOVE PARTITIONING";$Ke='Table has been altered.';if($a==""){cookie("adminer_engine",$J["Engine"]);$Ke='Table has been created.';}$D=trim($J["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($D),$Ke,alter_table($a,$D,($y=="sqlite"&&($Mi||$fd)?$Ca:$p),$fd,($J["Comment"]!=$R["Comment"]?$J["Comment"]:null),($J["Engine"]&&$J["Engine"]!=$R["Engine"]?$J["Engine"]:""),($J["Collation"]&&$J["Collation"]!=$R["Collation"]?$J["Collation"]:""),($J["Auto_increment"]!=""?number($J["Auto_increment"]):""),$Tf));}}page_header(($a!=""?'Alter table':'Create table'),$n,array("table"=>$a),h($a));if(!$_POST){$J=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($U["int"])?"int":(isset($U["integer"])?"integer":"")),"on_update"=>"")),"partition_names"=>array(""),);if($a!=""){$J=$R;$J["name"]=$a;$J["fields"]=array();if(!$_GET["auto_increment"])$J["Auto_increment"]="";foreach($Ef
as$o){$o["has_default"]=isset($o["default"]);$J["fields"][]=$o;}if(support("partitioning")){$md="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$H=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $md ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($J["partition_by"],$J["partitions"],$J["partition"])=$H->fetch_row();$Uf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $md AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Uf[""]="";$J["partition_names"]=array_keys($Uf);$J["partition_values"]=array_values($Uf);}}}$lb=collations();$zc=engines();foreach($zc
as$yc){if(!strcasecmp($yc,$J["Engine"])){$J["Engine"]=$yc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'Table name: <input name="name" data-maxlength="64" value="',h($J["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST)echo
script("focus(qs('#form')['name']);");echo($zc?"<select name='Engine'>".optionlist(array(""=>"(".'engine'.")")+$zc,$J["Engine"])."</select>".on_help("getTarget(event).value",1).script("qsl('select').onchange = helpClose;"):""),' ',($lb&&!preg_match("~sqlite|mssql~",$y)?html_select("Collation",array(""=>"(".'collation'.")")+$lb,$J["Collation"]):""),' <input type="submit" value="Save">
';}echo'
';if(support("columns")){echo'<div class="scrollable">
<table cellspacing="0" id="edit-fields" class="nowrap">
';edit_fields($J["fields"],$lb,"TABLE",$hd);echo'</table>
',script("editFields();"),'</div>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($J["Auto_increment"]),'">
',checkbox("defaults",1,($_POST?$_POST["defaults"]:adminer_setting("defaults")),'Default values',"columnShow(this.checked, 5)","jsonly"),(support("comment")?checkbox("comments",1,($_POST?$_POST["comments"]:adminer_setting("comments")),'Comment',"editingCommentsClick(this, true);","jsonly").' <input name="Comment" value="'.h($J["Comment"]).'" data-maxlength="'.(min_version(5.5)?2048:60).'">':''),'<p>
<input type="submit" value="Save">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$a));}if(support("partitioning")){$Sf=preg_match('~RANGE|LIST~',$J["partition_by"]);print_fieldset("partition",'Partition by',$J["partition_by"]);echo'<p>
',"<select name='partition_by'>".optionlist(array(""=>"")+$Rf,$J["partition_by"])."</select>".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).script("qsl('select').onchange = partitionByChange;"),'(<input name="partition" value="',h($J["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size',($Sf||!$J["partition_by"]?" hidden":""),'" value="',h($J["partitions"]),'">
<table cellspacing="0" id="partition-table"',($Sf?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($J["partition_names"]as$z=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'" autocapitalize="off">',($z==count($J["partition_names"])-1?script("qsl('input').oninput = partitionNameChange;"):''),'<td><input name="partition_values[]" value="'.h($J["partition_values"][$z]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Ld=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.(min_version(5.6,'10.0.5')?'|InnoDB':'').'~i',$R["Engine"]))$Ld[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.(min_version(5.7,'10.2.2')?'|InnoDB':'').'~i',$R["Engine"]))$Ld[]="SPATIAL";$x=indexes($a);$kg=array();if($y=="mongo"){$kg=$x["_id_"];unset($Ld[0]);unset($x["_id_"]);}$J=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($J["indexes"]as$w){$D=$w["name"];if(in_array($w["type"],$Ld)){$f=array();$ue=array();$cc=array();$N=array();ksort($w["columns"]);foreach($w["columns"]as$z=>$e){if($e!=""){$te=$w["lengths"][$z];$bc=$w["descs"][$z];$N[]=idf_escape($e).($te?"(".(+$te).")":"").($bc?" DESC":"");$f[]=$e;$ue[]=($te?$te:null);$cc[]=$bc;}}if($f){$Ic=$x[$D];if($Ic){ksort($Ic["columns"]);ksort($Ic["lengths"]);ksort($Ic["descs"]);if($w["type"]==$Ic["type"]&&array_values($Ic["columns"])===$f&&(!$Ic["lengths"]||array_values($Ic["lengths"])===$ue)&&array_values($Ic["descs"])===$cc){unset($x[$D]);continue;}}$c[]=array($w["type"],$D,$N);}}}foreach($x
as$D=>$Ic)$c[]=array($Ic["type"],$D,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($J["indexes"]as$z=>$w){if($w["columns"][count($w["columns"])]!="")$J["indexes"][$z]["columns"][]="";}$w=end($J["indexes"]);if($w["type"]||array_filter($w["columns"],'strlen'))$J["indexes"][]=array("columns"=>array(1=>""));}if(!$J){foreach($x
as$z=>$w){$x[$z]["name"]=$z;$x[$z]["columns"][]="";}$x[]=array("columns"=>array(1=>""));$J["indexes"]=$x;}echo'
<form action="" method="post">
<div class="scrollable">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">Index Type
<th><input type="submit" class="wayoff">Column (length)
<th id="label-name">Name
<th><noscript>',"<input type='image' class='icon' name='add[0]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.8.1")."' alt='+' title='".'Add next'."'>",'</noscript>
</thead>
';if($kg){echo"<tr><td>PRIMARY<td>";foreach($kg["columns"]as$z=>$e){echo
select_input(" disabled",$p,$e),"<label><input disabled type='checkbox'>".'descending'."</label> ";}echo"<td><td>\n";}$ee=1;foreach($J["indexes"]as$w){if(!$_POST["drop_col"]||$ee!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$ee][type]",array(-1=>"")+$Ld,$w["type"],($ee==count($J["indexes"])?"indexesAddRow.call(this);":1),"label-type"),"<td>";ksort($w["columns"]);$t=1;foreach($w["columns"]as$z=>$e){echo"<span>".select_input(" name='indexes[$ee][columns][$t]' title='".'Column'."'",($p?array_combine($p,$p):$p),$e,"partial(".($t==count($w["columns"])?"indexesAddColumn":"indexesChangeColumn").", '".js_escape($y=="sql"?"":$_GET["indexes"]."_")."')"),($y=="sql"||$y=="mssql"?"<input type='number' name='indexes[$ee][lengths][$t]' class='size' value='".h($w["lengths"][$z])."' title='".'Length'."'>":""),(support("descidx")?checkbox("indexes[$ee][descs][$t]",1,$w["descs"][$z],'descending'):"")," </span>";$t++;}echo"<td><input name='indexes[$ee][name]' value='".h($w["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$ee]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.8.1")."' alt='x' title='".'Remove'."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'indexes\$1[type]');");}$ee++;}echo'</table>
</div>
<p>
<input type="submit" value="Save">
<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["database"])){$J=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$D=trim($J["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$D){if(DB!=""){$_GET["db"]=$D;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($D),'Database has been renamed.',rename_database($D,$J["collation"]));}else{$k=explode("\n",str_replace("\r","",$D));$Ih=true;$ne="";foreach($k
as$l){if(count($k)==1||$l!=""){if(!create_database($l,$J["collation"]))$Ih=false;$ne=$l;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($ne),'Database has been created.',$Ih);}}else{if(!$J["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($D).(preg_match('~^[a-z0-9_]+$~i',$J["collation"])?" COLLATE $J[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$n,array(),h(DB));$lb=collations();$D=DB;if($_POST)$D=$J["name"];elseif(DB!="")$J["collation"]=db_collation(DB,$lb);elseif($y=="sql"){foreach(get_vals("SHOW GRANTS")as$od){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\.\*)?~',$od,$C)&&$C[1]){$D=stripcslashes(idf_unescape("`$C[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($D,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($D).'</textarea><br>':'<input name="name" id="name" value="'.h($D).'" data-maxlength="64" autocapitalize="off">')."\n".($lb?html_select("collation",array(""=>"(".'collation'.")")+$lb,$J["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mariadb'=>"supported-character-sets-and-collations/",'mssql'=>"ms187963.aspx",)):""),script("focus(qs('#name'));"),'<input type="submit" value="Save">
';if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'>".confirm(sprintf('Drop %s?',DB))."\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.8.1")."' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["scheme"])){$J=$_POST;if($_POST&&!$n){$A=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$A,'Schema has been dropped.');else{$D=trim($J["name"]);$A.=urlencode($D);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($D),$A,'Schema has been created.');elseif($_GET["ns"]!=$D)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($D),$A,'Schema has been altered.');else
redirect($A);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$n);if(!$J)$J["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($J["name"]),'" autocapitalize="off">
',script("focus(qs('#name'));"),'<input type="submit" value="Save">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'>".confirm(sprintf('Drop %s?',$_GET["ns"]))."\n";echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["call"])){$da=($_GET["name"]?$_GET["name"]:$_GET["call"]);page_header('Call'.": ".h($da),$n);$Tg=routine($_GET["call"],(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Jd=array();$If=array();foreach($Tg["fields"]as$t=>$o){if(substr($o["inout"],-3)=="OUT")$If[$t]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$Jd[]=$t;}if(!$n&&$_POST){$Xa=array();foreach($Tg["fields"]as$z=>$o){if(in_array($z,$Jd)){$X=process_input($o);if($X===false)$X="''";if(isset($If[$z]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Xa[]=(isset($If[$z])?"@".idf_escape($o["field"]):$X);}$G=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Xa).")";$Ch=microtime(true);$H=$g->multi_query($G);$za=$g->affected_rows;echo$b->selectQuery($G,$Ch,!$H);if(!$H)echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$H=$g->store_result();if(is_object($H))select($H,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$za)." <span class='time'>".@date("H:i:s")."</span>\n";}while($g->next_result());if($If)select($g->query("SELECT ".implode(", ",$If)));}}echo'
<form action="" method="post">
';if($Jd){echo"<table cellspacing='0' class='layout'>\n";foreach($Jd
as$z){$o=$Tg["fields"][$z];$D=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$D];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$D]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$D=$_GET["name"];$J=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$Ke=($_POST["drop"]?'Foreign key has been dropped.':($D!=""?'Foreign key has been altered.':'Foreign key has been created.'));$B=ME."table=".urlencode($a);if(!$_POST["drop"]){$J["source"]=array_filter($J["source"],'strlen');ksort($J["source"]);$Wh=array();foreach($J["source"]as$z=>$X)$Wh[$z]=$J["target"][$z];$J["target"]=$Wh;}if($y=="sqlite")queries_redirect($B,$Ke,recreate_table($a,$a,array(),array(),array(" $D"=>($_POST["drop"]?"":" ".format_foreign_key($J)))));else{$c="ALTER TABLE ".table($a);$jc="\nDROP ".($y=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($D);if($_POST["drop"])query_redirect($c.$jc,$B,$Ke);else{query_redirect($c.($D!=""?"$jc,":"")."\nADD".format_foreign_key($J),$B,$Ke);$n='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$n";}}}page_header('Foreign key',$n,array("table"=>$a),h($a));if($_POST){ksort($J["source"]);if($_POST["add"])$J["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$J["target"]=array();}elseif($D!=""){$hd=foreign_keys($a);$J=$hd[$D];$J["source"][]="";}else{$J["table"]=$a;$J["source"]=array("");}echo'
<form action="" method="post">
';$vh=array_keys(fields($a));if($J["db"]!="")$g->select_db($J["db"]);if($J["ns"]!="")set_schema($J["ns"]);$Cg=array_keys(array_filter(table_status('',true),'fk_support'));$Wh=array_keys(fields(in_array($J["table"],$Cg)?$J["table"]:reset($Cg)));$qf="this.form['change-js'].value = '1'; this.form.submit();";echo"<p>".'Target table'.": ".html_select("table",$Cg,$J["table"],$qf)."\n";if($y=="pgsql")echo'Schema'.": ".html_select("ns",$b->schemas(),$J["ns"]!=""?$J["ns"]:$_GET["ns"],$qf);elseif($y!="sqlite"){$Ub=array();foreach($b->databases()as$l){if(!information_schema($l))$Ub[]=$l;}echo'DB'.": ".html_select("db",$Ub,$J["db"]!=""?$J["db"]:$_GET["db"],$qf);}echo'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">Source<th id="label-target">Target</thead>
';$ee=0;foreach($J["source"]as$z=>$X){echo"<tr>","<td>".html_select("source[".(+$z)."]",array(-1=>"")+$vh,$X,($ee==count($J["source"])-1?"foreignAddRow.call(this);":1),"label-source"),"<td>".html_select("target[".(+$z)."]",$Wh,$J["target"][$z],1,"label-target");$ee++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$pf),$J["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$pf),$J["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'mariadb'=>"foreign-keys/",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"https://docs.oracle.com/cd/B19306_01/server.102/b14200/clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';if($D!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$D));}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$J=$_POST;$Ff="VIEW";if($y=="pgsql"&&$a!=""){$O=table_status($a);$Ff=strtoupper($O["Engine"]);}if($_POST&&!$n){$D=trim($J["name"]);$Fa=" AS\n$J[select]";$B=ME."table=".urlencode($D);$Ke='View has been altered.';$T=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$D&&$y!="sqlite"&&$T=="VIEW"&&$Ff=="VIEW")query_redirect(($y=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($D).$Fa,$B,$Ke);else{$Yh=$D."_adminer_".uniqid();drop_create("DROP $Ff ".table($a),"CREATE $T ".table($D).$Fa,"DROP $T ".table($D),"CREATE $T ".table($Yh).$Fa,"DROP $T ".table($Yh),($_POST["drop"]?substr(ME,0,-1):$B),'View has been dropped.',$Ke,'View has been created.',$a,$D);}}if(!$_POST&&$a!=""){$J=view($a);$J["name"]=$a;$J["materialized"]=($Ff!="VIEW");if(!$n)$n=error();}page_header(($a!=""?'Alter view':'Create view'),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($J["name"]),'" data-maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$J["materialized"],'Materialized view'):""),'<p>';textarea("select",$J["select"]);echo'<p>
<input type="submit" value="Save">
';if($a!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$a));}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Wd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Eh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$J=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($J["INTERVAL_FIELD"],$Wd)&&isset($Eh[$J["STATUS"]])){$Yg="\nON SCHEDULE ".($J["INTERVAL_VALUE"]?"EVERY ".q($J["INTERVAL_VALUE"])." $J[INTERVAL_FIELD]".($J["STARTS"]?" STARTS ".q($J["STARTS"]):"").($J["ENDS"]?" ENDS ".q($J["ENDS"]):""):"AT ".q($J["STARTS"]))." ON COMPLETION".($J["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Yg.($aa!=$J["EVENT_NAME"]?"\nRENAME TO ".idf_escape($J["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($J["EVENT_NAME"]).$Yg)."\n".$Eh[$J["STATUS"]]." COMMENT ".q($J["EVENT_COMMENT"]).rtrim(" DO\n$J[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$n);if(!$J&&$aa!=""){$K=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$J=reset($K);}echo'
<form action="" method="post">
<table cellspacing="0" class="layout">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($J["EVENT_NAME"]),'" data-maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$J[EXECUTE_AT]$J[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($J["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($J["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Wd,$J["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Eh,$J["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($J["EVENT_COMMENT"]),'" data-maxlength="64">
<tr><th><td>',checkbox("ON_COMPLETION","PRESERVE",$J["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$J["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$aa));}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=($_GET["name"]?$_GET["name"]:$_GET["procedure"]);$Tg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$J=$_POST;$J["fields"]=(array)$J["fields"];if($_POST&&!process_fields($J["fields"])&&!$n){$Cf=routine($_GET["procedure"],$Tg);$Yh="$J[name]_adminer_".uniqid();drop_create("DROP $Tg ".routine_id($da,$Cf),create_routine($Tg,$J),"DROP $Tg ".routine_id($J["name"],$J),create_routine($Tg,array("name"=>$Yh)+$J),"DROP $Tg ".routine_id($Yh,$J),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$J["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$n);if(!$_POST&&$da!=""){$J=routine($_GET["procedure"],$Tg);$J["name"]=$da;}$lb=get_vals("SHOW CHARACTER SET");sort($lb);$Ug=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($J["name"]),'" data-maxlength="64" autocapitalize="off">
',($Ug?'Language'.": ".html_select("language",$Ug,$J["language"])."\n":""),'<input type="submit" value="Save">
<div class="scrollable">
<table cellspacing="0" class="nowrap">
';edit_fields($J["fields"],$lb,$Tg);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$J["returns"],$lb,array(),($y=="pgsql"?array("void","trigger"):array()));}echo'</table>
',script("editFields();"),'</div>
<p>';textarea("definition",$J["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$da));}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$J=$_POST;if($_POST&&!$n){$A=substr(ME,0,-1);$D=trim($J["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$A,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($D),$A,'Sequence has been created.');elseif($fa!=$D)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($D),$A,'Sequence has been altered.');else
redirect($A);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$n);if(!$J)$J["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($J["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'>".confirm(sprintf('Drop %s?',$fa))."\n";echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$J=$_POST;if($_POST&&!$n){$A=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$A,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($J["name"]))." $J[as]",$A,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$n);if(!$J)$J["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'>".confirm(sprintf('Drop %s?',$ga))."\n";else{echo"<input name='name' value='".h($J['name'])."' autocapitalize='off'>\n";textarea("as",$J["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$D=$_GET["name"];$yi=trigger_options();$J=(array)trigger($D,$a)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$yi["Timing"])&&in_array($_POST["Event"],$yi["Event"])&&in_array($_POST["Type"],$yi["Type"])){$of=" ON ".table($a);$jc="DROP TRIGGER ".idf_escape($D).($y=="pgsql"?$of:"");$B=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($jc,$B,'Trigger has been dropped.');else{if($D!="")queries($jc);queries_redirect($B,($D!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($of,$_POST)));if($D!="")queries(create_trigger($of,$J+array("Type"=>reset($yi["Type"]))));}}$J=$_POST;}page_header(($D!=""?'Alter trigger'.": ".h($D):'Create trigger'),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0" class="layout">
<tr><th>Time<td>',html_select("Timing",$yi["Timing"],$J["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>Event<td>',html_select("Event",$yi["Event"],$J["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$yi["Event"])?" <input name='Of' value='".h($J["Of"])."' class='hidden'>":""),'<tr><th>Type<td>',html_select("Type",$yi["Type"],$J["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($J["Trigger"]),'" data-maxlength="64" autocapitalize="off">
',script("qs('#form')['Timing'].onchange();"),'<p>';textarea("Statement",$J["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($D!=""){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',$D));}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$pg=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$J){foreach(explode(",",($J["Privilege"]=="Grant option"?"":$J["Context"]))as$Db)$pg[$Db][$J["Privilege"]]=$J["Comment"];}$pg["Server Admin"]+=$pg["File access on server"];$pg["Databases"]["Create routine"]=$pg["Procedures"]["Create routine"];unset($pg["Procedures"]["Create routine"]);$pg["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$pg["Columns"][$X]=$pg["Tables"][$X];unset($pg["Server Admin"]["Usage"]);foreach($pg["Tables"]as$z=>$X)unset($pg["Databases"][$z]);$Xe=array();if($_POST){foreach($_POST["objects"]as$z=>$X)$Xe[$X]=(array)$Xe[$X]+(array)$_POST["grants"][$z];}$pd=array();$mf="";if(isset($_GET["host"])&&($H=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($J=$H->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$J[0],$C)&&preg_match_all('~ *([^(,]*[^ ,(])( *\([^)]+\))?~',$C[1],$Ce,PREG_SET_ORDER)){foreach($Ce
as$X){if($X[1]!="USAGE")$pd["$C[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$J[0]))$pd["$C[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$J[0],$C))$mf=$C[1];}}if($_POST&&!$n){$nf=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $nf",ME."privileges=",'User has been dropped.');else{$Ze=q($_POST["user"])."@".q($_POST["host"]);$Wf=$_POST["pass"];if($Wf!=''&&!$_POST["hashed"]&&!min_version(8)){$Wf=$g->result("SELECT PASSWORD(".q($Wf).")");$n=!$Wf;}$Jb=false;if(!$n){if($nf!=$Ze){$Jb=queries((min_version(5)?"CREATE USER":"GRANT USAGE ON *.* TO")." $Ze IDENTIFIED BY ".(min_version(8)?"":"PASSWORD ").q($Wf));$n=!$Jb;}elseif($Wf!=$mf)queries("SET PASSWORD FOR $Ze = ".q($Wf));}if(!$n){$Qg=array();foreach($Xe
as$ff=>$od){if(isset($_GET["grant"]))$od=array_filter($od);$od=array_keys($od);if(isset($_GET["grant"]))$Qg=array_diff(array_keys(array_filter($Xe[$ff],'strlen')),$od);elseif($nf==$Ze){$kf=array_keys((array)$pd[$ff]);$Qg=array_diff($kf,$od);$od=array_diff($od,$kf);unset($pd[$ff]);}if(preg_match('~^(.+)\s*(\(.*\))?$~U',$ff,$C)&&(!grant("REVOKE",$Qg,$C[2]," ON $C[1] FROM $Ze")||!grant("GRANT",$od,$C[2]," ON $C[1] TO $Ze"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($nf!=$Ze)queries("DROP USER $nf");elseif(!isset($_GET["grant"])){foreach($pd
as$ff=>$Qg){if(preg_match('~^(.+)(\(.*\))?$~U',$ff,$C))grant("REVOKE",array_keys($Qg),$C[2]," ON $C[1] FROM $Ze");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$n);if($Jb)$g->query("DROP USER $Ze");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$n,array("privileges"=>array('','Privileges')));if($_POST){$J=$_POST;$pd=$Xe;}else{$J=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$J["pass"]=$mf;if($mf!="")$J["hashed"]=true;$pd[(DB==""||$pd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0" class="layout">
<tr><th>Server<td><input name="host" data-maxlength="60" value="',h($J["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" data-maxlength="80" value="',h($J["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($J["pass"]),'" autocomplete="new-password">
';if(!$J["hashed"])echo
script("typePassword(qs('#pass'));");echo(min_version(8)?"":checkbox("hashed",1,$J["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);")),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'Privileges'.doc_link(array('sql'=>"grant.html#priv_level"));$t=0;foreach($pd
as$ff=>$od){echo'<th>'.($ff!="*.*"?"<input name='objects[$t]' value='".h($ff)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$t]' value='*.*' size='10'>*.*");$t++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$Db=>$bc){foreach((array)$pg[$Db]as$og=>$rb){echo"<tr".odd()."><td".($bc?">$bc<td":" colspan='2'").' lang="en" title="'.h($rb).'">'.h($og);$t=0;foreach($pd
as$ff=>$od){$D="'grants[$t][".h(strtoupper($og))."]'";$Y=$od[strtoupper($og)];if($Db=="Server Admin"&&$ff!=(isset($pd["*.*"])?"*.*":".*"))echo"<td>";elseif(isset($_GET["grant"]))echo"<td><select name=$D><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else{echo"<td align='center'><label class='block'>","<input type='checkbox' name=$D value='1'".($Y?" checked":"").($og=="All privileges"?" id='grants-$t-all'>":">".($og=="Grant option"?"":script("qsl('input').onclick = function () { if (this.checked) formUncheck('grants-$t-all'); };"))),"</label>";}$t++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop">',confirm(sprintf('Drop %s?',"$ha@$_GET[host]"));}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")){if($_POST&&!$n){$je=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$je++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$je),$je||!$_POST["kill"]);}}page_header('Process list',$n);echo'
<form action="" method="post">
<div class="scrollable">
<table cellspacing="0" class="nowrap checkable">
',script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});");$t=-1;foreach(process_list()as$t=>$J){if(!$t){echo"<thead><tr lang='en'>".(support("kill")?"<th>":"");foreach($J
as$z=>$X)echo"<th>$z".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($z),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"REFRN30223",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$J[$y=="sql"?"Id":"pid"],0):"");foreach($J
as$z=>$X)echo"<td>".(($y=="sql"&&$z=="Info"&&preg_match("~Query|Killed~",$J["Command"])&&$X!="")||($y=="pgsql"&&$z=="current_query"&&$X!="<IDLE>")||($y=="oracle"&&$z=="sql_text"&&$X!="")?"<code class='jush-$y'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($J["db"]!=""?"db=".urlencode($J["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':h($X));echo"\n";}echo'</table>
</div>
<p>
';if(support("kill")){echo($t+1)."/".sprintf('%d in total',max_connections()),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$ni,'">
</form>
',script("tableCheck();");}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$x=indexes($a);$p=fields($a);$hd=column_foreign_keys($a);$if=$R["Oid"];parse_str($_COOKIE["adminer_import"],$ya);$Rg=array();$f=array();$ci=null;foreach($p
as$z=>$o){$D=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$D!=""){$f[$z]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($o))$ci=$b->selectLengthProcess();}$Rg+=$o["privileges"];}list($L,$qd)=$b->selectColumnsProcess($f,$x);$ae=count($qd)<count($L);$Z=$b->selectSearchProcess($p,$x);$zf=$b->selectOrderProcess($p,$x);$_=$b->selectLimitProcess();if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ei=>$J){$Fa=convert_field($p[key($J)]);$L=array($Fa?$Fa:idf_escape(key($J)));$Z[]=where_check($Ei,$p);$I=$m->select($a,$L,$Z,$L);if($I)echo
reset($I->fetch_row());}exit;}$kg=$Gi=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$kg=array_flip($w["columns"]);$Gi=($L?$kg:array());foreach($Gi
as$z=>$X){if(in_array(idf_escape($z),$L))unset($Gi[$z]);}break;}}if($if&&!$kg){$kg=$Gi=array($if=>0);$x[]=array("type"=>"PRIMARY","columns"=>array($if));}if($_POST&&!$n){$hj=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$db=array();foreach($_POST["check"]as$ab)$db[]=where_check($ab,$p);$hj[]="((".implode(") OR (",$db)."))";}$hj=($hj?"\nWHERE ".implode(" AND ",$hj):"");if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");$md=($L?implode(", ",$L):"*").convert_fields($f,$p,$L)."\nFROM ".table($a);$sd=($qd&&$ae?"\nGROUP BY ".implode(", ",$qd):"").($zf?"\nORDER BY ".implode(", ",$zf):"");if(!is_array($_POST["check"])||$kg)$G="SELECT $md$hj$sd";else{$Ci=array();foreach($_POST["check"]as$X)$Ci[]="(SELECT".limit($md,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$sd,1).")";$G=implode(" UNION ALL ",$Ci);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($Z,$hd)){if($_POST["save"]||$_POST["delete"]){$H=true;$za=0;$N=array();if(!$_POST["delete"]){foreach($f
as$D=>$X){$X=process_input($p[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$N[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$N){if($_POST["clone"])$G="INTO ".table($a)." (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a);if($_POST["all"]||($kg&&is_array($_POST["check"]))||$ae){$H=($_POST["delete"]?$m->delete($a,$hj):($_POST["clone"]?queries("INSERT $G$hj"):$m->update($a,$N,$hj)));$za=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$dj="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$H=($_POST["delete"]?$m->delete($a,$dj,1):($_POST["clone"]?queries("INSERT".limit1($a,$G,$dj)):$m->update($a,$N,$dj,1)));if(!$H)break;$za+=$g->affected_rows;}}}$Ke=lang(array('%d item has been affected.','%d items have been affected.'),$za);if($_POST["clone"]&&$H&&$za==1){$oe=last_id();if($oe)$Ke=sprintf('Item%s has been inserted.'," $oe");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Ke,$H);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n='Ctrl+click on a value to modify it.';else{$H=true;$za=0;foreach($_POST["val"]as$Ei=>$J){$N=array();foreach($J
as$z=>$X){$z=bracket_escape($z,1);$N[idf_escape($z)]=(preg_match('~char|text~',$p[$z]["type"])||$X!=""?$b->processInput($p[$z],$X):"NULL");}$H=$m->update($a,$N," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Ei,$p),!$ae&&!$kg," ");if(!$H)break;$za+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$za),$H);}}elseif(!is_string($Xc=get_file("csv_file",true)))$n=upload_error($Xc);elseif(!preg_match('~~u',$Xc))$n='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$H=true;$nb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\r\n]+)+~',$Xc,$Ce);$za=count($Ce[0]);$m->begin();$hh=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$K=array();foreach($Ce[0]as$z=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$hh]*)$hh~",$X.$hh,$De);if(!$z&&!array_diff($De[1],$nb)){$nb=$De[1];$za--;}else{$N=array();foreach($De[1]as$t=>$jb)$N[idf_escape($nb[$t])]=($jb==""&&$p[$nb[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$jb))));$K[]=$N;}}$H=(!$K||$m->insertUpdate($a,$K,$kg));if($H)$H=$m->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$za),$H);$m->rollback();}}}$Oh=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Oh",$n);$N=null;if(isset($Rg["insert"])||!support("table")){$N="";foreach((array)$_GET["where"]as$X){if($hd[$X["col"]]&&count($hd[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$N.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$N);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$f);$b->selectSearchPrint($Z,$f,$x);$b->selectOrderPrint($zf,$f,$x);$b->selectLimitPrint($_);$b->selectLengthPrint($ci);$b->selectActionPrint($x);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$kd=$g->result(count_rows($a,$Z,$ae,$qd));$E=floor(max(0,$kd-1)/$_);}$ch=$L;$rd=$qd;if(!$ch){$ch[]="*";$Eb=convert_fields($f,$p,$L);if($Eb)$ch[]=substr($Eb,2);}foreach($L
as$z=>$X){$o=$p[idf_unescape($X)];if($o&&($Fa=convert_field($o)))$ch[$z]="$Fa AS $X";}if(!$ae&&$Gi){foreach($Gi
as$z=>$X){$ch[]=idf_escape($z);if($rd)$rd[]=idf_escape($z);}}$H=$m->select($a,$ch,$Z,$rd,$zf,$_,$E,true);if(!$H)echo"<p class='error'>".error()."\n";else{if($y=="mssql"&&$E)$H->seek($_*$E);$wc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($E&&$y=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last"&&$_!=""&&$qd&&$ae&&$y=="sql")$kd=$g->result(" SELECT FOUND_ROWS()");if(!$K)echo"<p class='message'>".'No rows.'."\n";else{$Oa=$b->backwardKeys($a,$Oh);echo"<div class='scrollable'>","<table id='table' cellspacing='0' class='nowrap checkable'>",script("mixin(qs('#table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true), onkeydown: editingKeydown});"),"<thead><tr>".(!$qd&&$L?"":"<td><input type='checkbox' id='all-page' class='jsonly'>".script("qs('#all-page').onclick = partial(formCheck, /check/);","")." <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Ve=array();$nd=array();reset($L);$zg=1;foreach($K[0]as$z=>$X){if(!isset($Gi[$z])){$X=$_GET["columns"][key($L)];$o=$p[$L?($X?$X["col"]:current($L)):$z];$D=($o?$b->fieldName($o,$zg):($X["fun"]?"*":$z));if($D!=""){$zg++;$Ve[$z]=$D;$e=idf_escape($z);$Ed=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($z);$bc="&desc%5B0%5D=1";echo"<th id='th[".h(bracket_escape($z))."]'>".script("mixin(qsl('th'), {onmouseover: partial(columnMouse), onmouseout: partial(columnMouse, ' hidden')});",""),'<a href="'.h($Ed.($zf[0]==$e||$zf[0]==$z||(!$zf&&$ae&&$qd[0]==$e)?$bc:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($Ed.$bc)."' title='".'descending'."' class='text'> Ã¢â€ â€œ</a>";if(!$X["fun"]){echo'<a href="#fieldset-search" title="'.'Search'.'" class="text jsonly"> =</a>',script("qsl('a').onclick = partial(selectSearch, '".js_escape($z)."');");}echo"</span>";}$nd[$z]=$X["fun"];next($L);}}$ue=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$z=>$X)$ue[$z]=max($ue[$z],min(40,strlen(utf8_decode($X))));}}echo($Oa?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($_%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($K,$hd)as$Ue=>$J){$Di=unique_array($K[$Ue],$x);if(!$Di){$Di=array();foreach($K[$Ue]as$z=>$X){if(!preg_match('~^(COUNT\((\*|(DISTINCT )?`(?:[^`]|``)+`)\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\(`(?:[^`]|``)+`\))$~',$z))$Di[$z]=$X;}}$Ei="";foreach($Di
as$z=>$X){if(($y=="sql"||$y=="pgsql")&&preg_match('~char|text|enum|set~',$p[$z]["type"])&&strlen($X)>64){$z=(strpos($z,'(')?$z:idf_escape($z));$z="MD5(".($y!='sql'||preg_match("~^utf8~",$p[$z]["collation"])?$z:"CONVERT($z USING ".charset($g).")").")";$X=md5($X);}$Ei.="&".($X!==null?urlencode("where[".bracket_escape($z)."]")."=".urlencode($X):"null%5B%5D=".urlencode($z));}echo"<tr".odd().">".(!$qd&&$L?"":"<td>".checkbox("check[]",substr($Ei,1),in_array(substr($Ei,1),(array)$_POST["check"])).($ae||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Ei)."' class='edit'>".'edit'."</a>"));foreach($J
as$z=>$X){if(isset($Ve[$z])){$o=$p[$z];$X=$m->value($X,$o);if($X!=""&&(!isset($wc[$z])||$wc[$z]!=""))$wc[$z]=(is_mail($X)?$Ve[$z]:"");$A="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$A=ME.'download='.urlencode($a).'&field='.urlencode($z).$Ei;if(!$A&&$X!==null){foreach((array)$hd[$z]as$r){if(count($hd[$z])==1||end($r["source"])==$z){$A="";foreach($r["source"]as$t=>$vh)$A.=where_link($t,$r["target"][$t],$K[$Ue][$vh]);$A=($r["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\1'.urlencode($r["db"]),ME):ME).'select='.urlencode($r["table"]).$A;if($r["ns"])$A=preg_replace('~([?&]ns=)[^&]+~','\1'.urlencode($r["ns"]),$A);if(count($r["source"])==1)break;}}}if($z=="COUNT(*)"){$A=ME."select=".urlencode($a);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Di))$A.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($Di
as$fe=>$W)$A.=where_link($t++,$fe,$W);}$X=select_value($X,$A,$o,$ci);$u=h("val[$Ei][".bracket_escape($z)."]");$Y=$_POST["val"][$Ei][bracket_escape($z)];$rc=!is_array($J[$z])&&is_utf8($X)&&$K[$Ue][$z]==$J[$z]&&!$nd[$z];$bi=preg_match('~text|lob~',$o["type"]);echo"<td id='$u'";if(($_GET["modify"]&&$rc)||$Y!==null){$vd=h($Y!==null?$Y:$J[$z]);echo">".($bi?"<textarea name='$u' cols='30' rows='".(substr_count($J[$z],"\n")+1)."'>$vd</textarea>":"<input name='$u' value='$vd' size='$ue[$z]'>");}else{$ye=strpos($X,"<i>Ã¢â‚¬Â¦</i>");echo" data-text='".($ye?2:($bi?1:0))."'".($rc?"":" data-warning='".h('Use edit link to modify this value.')."'").">$X</td>";}}}if($Oa)echo"<td>";$b->backwardKeysPrint($Oa,$K[$Ue]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n","</div>\n";}if(!is_ajax()){if($K||$E){$Gc=true;if($_GET["page"]!="last"){if($_==""||(count($K)<$_&&($K||!$E)))$kd=($E?$E*$_:0)+count($K);elseif($y!="sql"||!$ae){$kd=($ae?false:found_rows($R,$Z));if($kd<max(1e4,2*($E+1)*$_))$kd=reset(slow_query(count_rows($a,$Z,$ae,$qd)));else$Gc=false;}}$Mf=($_!=""&&($kd===false||$kd>$_||$E));if($Mf){echo(($kd===false?count($K)+1:$kd-$E*$_)>$_?'<p><a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" class="loadmore">'.'Load more data'.'</a>'.script("qsl('a').onclick = partial(selectLoadMore, ".(+$_).", '".'Loading'."Ã¢â‚¬Â¦');",""):''),"\n";}}echo"<div class='footer'><div>\n";if($K||$E){if($Mf){$Fe=($kd===false?$E+(count($K)>=$_?2:1):floor(($kd-1)/$_));echo"<fieldset>";if($y!="simpledb"){echo"<legend><a href='".h(remove_from_uri("page"))."'>".'Page'."</a></legend>",script("qsl('a').onclick = function () { pageClick(this.href, +prompt('".'Page'."', '".($E+1)."')); return false; };"),pagination(0,$E).($E>5?" Ã¢â‚¬Â¦":"");for($t=max(1,$E-4);$t<min($Fe,$E+5);$t++)echo
pagination($t,$E);if($Fe>0){echo($E+5<$Fe?" Ã¢â‚¬Â¦":""),($Gc&&$kd!==false?pagination($Fe,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Fe'>".'last'."</a>");}}else{echo"<legend>".'Page'."</legend>",pagination(0,$E).($E>1?" Ã¢â‚¬Â¦":""),($E?pagination($E,$E):""),($Fe>$E?pagination($E+1,$E).($Fe>$E+1?" Ã¢â‚¬Â¦":""):"");}echo"</fieldset>\n";}echo"<fieldset>","<legend>".'Whole result'."</legend>";$gc=($Gc?"":"~ ").$kd;echo
checkbox("all",1,0,($kd!==false?($Gc?"":"~ ").lang(array('%d row','%d rows'),$kd):""),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$gc' : checked); selectCount('selected2', this.checked || !checked ? '$gc' : checked);")."\n","</fieldset>\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete">',confirm(),'</div></fieldset>
';}$id=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($id['sql']);break;}}if($id){print_fieldset("export",'Export'." <span id='selected2'></span>");$Jf=$b->dumpOutput();echo($Jf?html_select("output",$Jf,$ya["output"])." ":""),html_select("format",$id,$ya["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($wc,'strlen'),$f);}echo"</div></div>\n";if($b->selectImportPrint()){echo"<div>","<a href='#import'>".'Import'."</a>",script("qsl('a').onclick = partial(toggle, 'import');",""),"<span id='import' class='hidden'>: ","<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</span>","</div>";}echo"<input type='hidden' name='token' value='$ni'>\n","</form>\n",(!$qd&&$L?"":script("tableCheck();"));}}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$O=isset($_GET["status"]);page_header($O?'Status':'Variables');$Ui=($O?show_status():show_variables());if(!$Ui)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Ui
as$z=>$X){echo"<tr>","<th><code class='jush-".$y.($O?"status":"set")."'>".h($z)."</code>","<td>".h($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Lh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$D=>$R){json_row("Comment-$D",h($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$z)json_row("$z-$D",h($R[$z]));foreach($Lh+array("Auto_increment"=>0,"Rows"=>0)as$z=>$X){if($R[$z]!=""){$X=format_number($R[$z]);json_row("$z-$D",($z=="Rows"&&$X&&$R["Engine"]==($yh=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Lh[$z]))$Lh[$z]+=($R["Engine"]!="InnoDB"||$z!="Data_free"?$R[$z]:0);}elseif(array_key_exists($z,$R))json_row("$z-$D");}}}foreach($Lh
as$z=>$X)json_row("sum-$z",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$l=>$X){json_row("tables-$l",$X);json_row("size-$l",db_size($l));}json_row("");}exit;}else{$Uh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Uh&&!$n&&!$_POST["search"]){$H=true;$Ke="";if($y=="sql"&&$_POST["tables"]&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$H=truncate_tables($_POST["tables"]);$Ke='Tables have been truncated.';}elseif($_POST["move"]){$H=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ke='Tables have been moved.';}elseif($_POST["copy"]){$H=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ke='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$H=drop_views($_POST["views"]);if($H&&$_POST["tables"])$H=drop_tables($_POST["tables"]);$Ke='Tables have been dropped.';}elseif($y!="sql"){$H=($y=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$Ke='Tables have been optimized.';}elseif(!$_POST["tables"])$Ke='No tables.';elseif($H=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($J=$H->fetch_assoc())$Ke.="<b>".h($J["Table"])."</b>: ".h($J["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$Ke,$H);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$Th=tables_list();if(!$Th)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Search data in tables'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'>",script("qsl('input').onkeydown = partialArg(bodyKeydown, 'search');","")," <input type='submit' name='search' value='".'Search'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!=""){$_GET["where"][0]["op"]="LIKE %%";search_tables();}}echo"<div class='scrollable'>\n","<table cellspacing='0' class='nowrap checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),'<thead><tr class="wrap">','<td><input id="check-all" type="checkbox" class="jsonly">'.script("qs('#check-all').onclick = partial(formCheck, /^(tables|views)\[/);",""),'<th>'.'Table','<td>'.'Engine'.doc_link(array('sql'=>'storage-engines.html')),'<td>'.'Collation'.doc_link(array('sql'=>'charset-charsets.html','mariadb'=>'supported-character-sets-and-collations/')),'<td>'.'Data Length'.doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-admin.html#FUNCTIONS-ADMIN-DBOBJECT','oracle'=>'REFRN20286')),'<td>'.'Index Length'.doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-admin.html#FUNCTIONS-ADMIN-DBOBJECT')),'<td>'.'Data Free'.doc_link(array('sql'=>'show-table-status.html')),'<td>'.'Auto Increment'.doc_link(array('sql'=>'example-auto-increment.html','mariadb'=>'auto_increment/')),'<td>'.'Rows'.doc_link(array('sql'=>'show-table-status.html','pgsql'=>'catalog-pg-class.html#CATALOG-PG-CLASS','oracle'=>'REFRN20286')),(support("comment")?'<td>'.'Comment'.doc_link(array('sql'=>'show-table-status.html','pgsql'=>'functions-info.html#FUNCTIONS-INFO-COMMENT-TABLE')):''),"</thead>\n";$S=0;foreach($Th
as$D=>$T){$Xi=($T!==null&&!preg_match('~table|sequence~i',$T));$u=h("Table-".$D);echo'<tr'.odd().'><td>'.checkbox(($Xi?"views[]":"tables[]"),$D,in_array($D,$Uh,true),"","","",$u),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($D)."' title='".'Show structure'."' id='$u'>".h($D).'</a>':h($D));if($Xi){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($D).'" title="'.'Alter view'.'">'.(preg_match('~materialized~i',$T)?'Materialized view':'View').'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($D).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$z=>$A){$u=" id='$z-".h($D)."'";echo($A?"<td align='right'>".(support("table")||$z=="Rows"||(support("indexes")&&$z!="Data_length")?"<a href='".h(ME."$A[0]=").urlencode($D)."'$u title='$A[1]'>?</a>":"<span$u>?</span>"):"<td id='$z-".h($D)."'>");}$S++;}echo(support("comment")?"<td id='Comment-".h($D)."'>":"");}echo"<tr><td><th>".sprintf('%d in total',count($Th)),"<td>".h($y=="sql"?$g->result("SELECT @@default_storage_engine"):""),"<td>".h(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$z)echo"<td align='right' id='sum-$z'>";echo"</table>\n","</div>\n";if(!information_schema(DB)){echo"<div class='footer'><div>\n";$Ri="<input type='submit' value='".'Vacuum'."'> ".on_help("'VACUUM'");$vf="<input type='submit' name='optimize' value='".'Optimize'."'> ".on_help($y=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'");echo"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>".($y=="sqlite"?$Ri:($y=="pgsql"?$Ri.$vf:($y=="sql"?"<input type='submit' value='".'Analyze'."'> ".on_help("'ANALYZE TABLE'").$vf."<input type='submit' name='check' value='".'Check'."'> ".on_help("'CHECK TABLE'")."<input type='submit' name='repair' value='".'Repair'."'> ".on_help("'REPAIR TABLE'"):"")))."<input type='submit' name='truncate' value='".'Truncate'."'> ".on_help($y=="sqlite"?"'DELETE'":"'TRUNCATE".($y=="pgsql"?"'":" TABLE'")).confirm()."<input type='submit' name='drop' value='".'Drop'."'>".on_help("'DROP TABLE'").confirm()."\n";$k=(support("scheme")?$b->schemas():$b->databases());if(count($k)!=1&&$y!="sqlite"){$l=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($k?html_select("target",$k,$l):'<input name="target" value="'.h($l).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'> ".checkbox("overwrite",1,$_POST["overwrite"],'overwrite'):""),"\n";}echo"<input type='hidden' name='all' value=''>";echo
script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")." }"),"<input type='hidden' name='token' value='$ni'>\n","</div></fieldset>\n","</div></div>\n";}echo"</form>\n",script("tableCheck();");}echo'<p class="links"><a href="'.h(ME).'create=">'.'Create table'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'Create view'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$Vg=routines();if($Vg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td></thead>\n";odd('');foreach($Vg
as$J){$D=($J["SPECIFIC_NAME"]==$J["ROUTINE_NAME"]?"":"&name=".urlencode($J["ROUTINE_NAME"]));echo'<tr'.odd().'>','<th><a href="'.h(ME.($J["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($J["SPECIFIC_NAME"]).$D).'">'.h($J["ROUTINE_NAME"]).'</a>','<td>'.h($J["ROUTINE_TYPE"]),'<td>'.h($J["DTD_IDENTIFIER"]),'<td><a href="'.h(ME.($J["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($J["SPECIFIC_NAME"]).$D).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a>':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$jh=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($jh){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($jh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$Pi=types();if($Pi){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Pi
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$K=get_rows("SHOW EVENTS");if($K){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($K
as$J){echo"<tr>","<th>".h($J["Name"]),"<td>".($J["Execute at"]?'At given time'."<td>".$J["Execute at"]:'Every'." ".$J["Interval value"]." ".$J["Interval field"]."<td>$J[Starts]"),"<td>$J[Ends]",'<td><a href="'.h(ME).'event='.urlencode($J["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$Ec=$g->result("SELECT @@event_scheduler");if($Ec&&$Ec!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Ec)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($Th)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}}}page_footer();