--TEST--
Bug #61173: Unable to detect error from finfo constructor
--SKIPIF--
<?php
if (!class_exists('finfo'))
	die('skip no fileinfo extension');
--FILE--
<?php

try {
    $finfo = new finfo(1, '', false);
    var_dump($finfo);
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
--EXPECTF--
object(finfo)#%d (0) {
}
