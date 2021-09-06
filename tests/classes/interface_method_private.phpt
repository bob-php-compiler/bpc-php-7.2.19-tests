--TEST--
ZE2 An interface method cannot be private
--FILE--
<?php

interface if_a {
	private function err();
}

?>
--EXPECTF--
Fatal error: Access type for interface method if_a::err() must be omitted in %s on line %d
