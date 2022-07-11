--TEST--
Bug #68825 (Exception in DirectoryIterator::getLinkTarget())
--FILE--
<?php
$dir = getcwd() . '/bug68825.tmp';
mkdir($dir);
symlink(getcwd() . '/bug68825.php', "$dir/foo");

$di = new DirectoryIterator($dir);
foreach ($di as $entry) {
    if ('foo' === $entry->getFilename()) {
        var_dump($entry->getLinkTarget());
    }
}
?>
===DONE===
--EXPECTF--
string(%d) "%s%eext%espl%etests%ebug68825.php"
===DONE===
--CLEAN--
<?php
$dir = getcwd() . '/bug68825.tmp';
unlink("$dir/foo");
rmdir($dir);
?>
