--TEST--
Bug #60860 (session.save_handler=user without defined function core dumps)
--INI--
session.save_handler=user
display_errors=off
--FILE--
<?php

session_start();
echo "ok\n";

?>
--EXPECTF--
Cannot set 'user' save handler by ini_set() or session_module_name()
invalid config value user for ini entry session.save_handler
ok
