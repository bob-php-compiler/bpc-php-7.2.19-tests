--TEST--
hash_copy() errors
--FILE--
<?php

$r = hash_init("md5");
var_dump(hash_copy($r));

echo "Done\n";
?>
--EXPECTF--
object(HashContext)#%d (0) {
}
Done
