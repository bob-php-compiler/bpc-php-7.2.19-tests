--TEST--
Bug #53885 (ZipArchive segfault with FL_UNCHANGED on empty archive)
--FILE--
<?php
$fname = "test53885.zip";
if(file_exists($fname)) unlink($fname);
touch($fname);
$nx=new ZipArchive();
$nx->open($fname);
$nx->locateName("a",ZIPARCHIVE::FL_UNCHANGED);
$nx->statName("a",ZIPARCHIVE::FL_UNCHANGED);
?>
==DONE==
--CLEAN--
<?php
$fname = "test53885.zip";
unlink($fname);
?>
--EXPECTF--
==DONE==
