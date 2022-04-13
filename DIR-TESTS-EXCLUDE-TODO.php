<?php

if ($argc != 2) {
    echo "Usage: php DIR-TESTS-EXCLUDE-TODO.php dir\n";
    exit;
}

$dir  = new RecursiveDirectoryIterator($argv[1], FilesystemIterator::SKIP_DOTS);
$itit = new RecursiveIteratorIterator($dir);

$phptList = array();
foreach ($itit as $file) {
    if (strcasecmp($file->getExtension(), 'phpt') === 0) {
        $phptList[] = $file->getPathname();
    }
}

$TODOList = file('TODO.phpt.list', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$tmpfile = tempnam('/tmp', 'phpt-list-');
file_put_contents($tmpfile, implode("\n", array_diff($phptList, $TODOList)));
echo $tmpfile;
