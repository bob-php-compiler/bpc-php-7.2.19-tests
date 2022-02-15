--TEST--
Bug #60282 (Segfault when using ob_gzhandler() with open buffers)
--SKIPIF--
<?php if (!function_exists("ob_gzhandler")) print "skip require ob_gzhandler"; ?>
--FILE--
<?php
ob_start();
ob_start();
ob_start('ob_gzhandler');
echo "done";
--EXPECT--
done
