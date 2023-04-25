--TEST--
Check for get_gc property handler
--FILE--
<?php
class x {
	public $t = null;

	public function __construct() {
		$eventClass = EVENT_NS . '\\Event';
		$eventBaseClass = EVENT_NS . '\\EventBase';

		$b = new $eventBaseClass();
		$this->t = $eventClass::timer($b, function () { });
		$this->t->free();
	}
}


echo "1";
new x();
gc_collect_cycles();
echo "2"; // we had segfault here
?>
--EXPECT--
12
