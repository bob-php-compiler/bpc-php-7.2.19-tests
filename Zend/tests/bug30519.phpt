--TEST--
Bug #30519 (Interface not existing says Class not found)
--FILE--
<?php
class test implements a {
}
?>
--EXPECT--
Error: problem running command 'bigloo', exit status 255
Rerunning with -v[234] may provide more information.
