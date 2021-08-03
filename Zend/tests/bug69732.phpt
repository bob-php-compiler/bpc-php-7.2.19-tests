--TEST--
Bug #69732 (can induce segmentation fault with basic php code)
--FILE--
<?php
class wpq {
    private $unreferenced;

    public function __get($name) {
        return $this->$name . "XXX";
    }
}

function ret_assoc() {
	$x = "XXX";
    return array('foo' => 'bar', $x);
}

$wpq = new wpq;
$wpq->interesting =& ret_assoc();
$x = $wpq->interesting;
printf("%s\n", $x);
--EXPECTF--
Parse error: Only variables should be assigned by reference in %s on line 16
