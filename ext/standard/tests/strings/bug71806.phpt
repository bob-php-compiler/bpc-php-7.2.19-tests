--TEST--
Bug #71806 (php_strip_whitespace() fails on some numerical values)
--SKIPIF--
skip no highlight_file() highlight_string() php_strip_whitespace()
--FILE--
<?php

echo php_strip_whitespace(__DIR__ . '/bug71806.dat');

?>
--EXPECT--
<?php
 echo 098 ;
