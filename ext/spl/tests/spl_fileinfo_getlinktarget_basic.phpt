--TEST--
SPL: Spl File Info test getLinkTarget
--CREDITS--
Nataniel McHugh nat@fishtrap.co.uk
--FILE--
<?php
$link = 'test_link';
symlink('spl_fileinfo_getlinktarget_basic.php' , $link );
$fileInfo = new SplFileInfo($link);

if ($fileInfo->isLink()) {
	echo $fileInfo->getLinkTarget() == 'spl_fileinfo_getlinktarget_basic.php' ? 'same' : 'different',PHP_EOL;
}
var_dump(unlink($link));
?>
--EXPECT--
same
bool(true)
