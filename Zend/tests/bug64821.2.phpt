--TEST--
Bug #64821 Custom Exceptions crash when internal properties overridden (variation 2)
--FILE--
<?php

class a extends exception {
	public function __construct() {
		$this->line = array();
	}
}

throw new a;

?>
--EXPECTF--
Fatal error: a::line should be a simple php type, array given in %s on line %d
