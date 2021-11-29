--TEST--
Bug #35740 (memory leak when including a directory)
--FILE--
<?php

include (dirname(__FILE__));

echo "Done\n";
?>
--EXPECTF--
Warning: include(): Failed find '%s' for inclusion (include_path='%s') in %s on line %d
Done
