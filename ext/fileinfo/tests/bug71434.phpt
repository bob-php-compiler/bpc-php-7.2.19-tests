--TEST--
Bug #68735 fileinfo out-of-bounds memory access
--SKIPIF--
<?php if (LIBMAGIC_VERSION != 532) echo "skip only for libmagic 5.32"; ?>
--FILE--
<?php
$a='#!env python
# -*- coding:utf-8 -*-

from serial import Serial
from sys import exit
';
$finfo = new finfo(FILEINFO_MIME_TYPE);
echo $finfo->buffer($a) . "\n";
?>
--EXPECT--
text/x-python
