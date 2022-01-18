--TEST--
FileInfo - Calling the constructor twice
--SKIPIF--
skip invalid test, bpc will leak memory
--FILE--
<?php

$x = new finfo;
$x->finfo();

echo "done!\n";

?>
--EXPECTF--
done!
