--TEST--
Bug #30519 (Interface not existing says Class not found)
--FILE--
<?php
class test implements a {
}
?>
--EXPECTF--
%aUnbound variable -- *CLASS-a*%a
