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

$e1 = new $eventClass($base, -1, $eventClass::TIMEOUT, function() {
	echo "2\n";
});
$e1->addTimer(0.10);
$e2 = new $eventClass($base, -1, $eventClass::TIMEOUT, function() {
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
--EXPECT--
start
1
2
3
4
end
