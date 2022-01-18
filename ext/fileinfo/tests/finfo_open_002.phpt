--TEST--
FileInfo - Calling the constructor twice
--FILE--
<?php

$x = new finfo;
$x->finfo();

echo "done!\n";

?>
--EXPECTF--
done!
