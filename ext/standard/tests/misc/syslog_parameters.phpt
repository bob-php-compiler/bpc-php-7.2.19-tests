--TEST--
Syslog parameter parsing test
--FILE--
<?php
openlog(NULL, 'string', 0);

syslog('Wrong parameter order', LOG_WARNING);

?>
--EXPECTF--
Warning: openlog() expects parameter 2 to be integer, string given in %s on line %d

Warning: syslog() expects parameter 1 to be integer, string given in %s on line %d
