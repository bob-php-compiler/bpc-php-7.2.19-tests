--TEST--
SPL: SplFileInfo test getGroup
--CREDITS--
Cesare D'Amico <cesare.damico@gruppovolta.it>
Andrea Giorgini <agiorg@gmail.com>
Filippo De Santis <fd@ideato.it>
Daniel Londero <daniel.londero@gmail.com>
Francesco Trucchia <ft@ideato.it>
Jacopo Romei <jacopo@sviluppoagile.it>
#Test Fest Cesena (Italy) on 2009-06-20
--FILE--
<?php
$filename = "SplFileInfo_getGroup_basic.tmp";
touch($filename);
$fileInfo = new SplFileInfo($filename);
$expected = filegroup($filename);
$actual = $fileInfo->getGroup();
var_dump($expected == $actual);
?>
--CLEAN--
<?php
$filename = "/SplFileInfo_getGroup_basic.tmp";
unlink($filename);
?>
--EXPECTF--
bool(true)
