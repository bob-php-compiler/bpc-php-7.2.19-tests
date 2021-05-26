--TEST--
ZE2 A static abstract methods
--FILE--
<?php

interface showable
{
	static function show();
}

class pass implements showable
{
	static function show() {
		echo "Call to function show()\n";
	}
}

pass::show();

?>
--EXPECT--
Call to function show()

