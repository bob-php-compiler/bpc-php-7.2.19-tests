--TEST--
Check for event destructor depending on the data property value
--FILE--
<?php
$eventClass = EVENT_NS . '\\Event';
$eventBaseClass = EVENT_NS . '\\EventBase';

class _Indicator {
	public $i;
	public function __construct($i) {
		$this->i = $i;
	}
	public function __destruct() {
		echo "" . $this->i . "\n";
	}
}

$base = new $eventBaseClass();

$e1 = new $eventClass($base, -1, $eventClass::TIMEOUT, function($fd, $what, $arg) {
	echo "2\n";
});
$e1->addTimer(0.10);
$e2 = new $eventClass($base, -1, $eventClass::TIMEOUT, function($fd, $what, $arg) {
	echo "3\n";
});
$e2->addTimer(0.11);

// obj
$i1 = new _Indicator(1);
$e1->data = &$i1;

// obj by ref
$i2 = new _Indicator(4);
$e2->data = $i2;

echo "start\n";
$i1 = null;
$i2 = null;

$base->loop();

$e1 = null;
$e2 = null;
echo "end\n";
?>
--EXPECTF--
Warning: in %s line 10: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

start
2
3
end
1
4
