--TEST--
dns_check_record() segfault with empty host
--FILE--
<?php
var_dump(dns_check_record(''));
?>
--EXPECTF--
Warning: checkdnsrr(): Host cannot be empty in %s on line %d
bool(false)
