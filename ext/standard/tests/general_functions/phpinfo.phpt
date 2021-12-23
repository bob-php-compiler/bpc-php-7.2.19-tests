--TEST--
phpinfo()
--FILE--
<?php
var_dump(phpinfo());

echo "--\n";
var_dump(phpinfo(array()));

echo "--\n";
var_dump(phpinfo(0));

?>
--EXPECTF--
phpinfo()
PHP Version => %s

System => %s
Build Date => %s%a
Debug Build => %s
IPv6 Support => %s
Supported Stream Socket Transports => %s


 _______________________________________________________________________


Configuration
%A
runtime
%A
Environment
%A
PHP Variables
%A
bool(true)
--

Warning: phpinfo() expects parameter 1 to be integer, array given in %sphpinfo.php on line 5
NULL
--
phpinfo()
bool(true)
