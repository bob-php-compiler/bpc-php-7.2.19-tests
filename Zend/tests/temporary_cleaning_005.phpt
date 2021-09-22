--TEST--
Temporary leak with foreach
--FILE--
<?php

function ops() {
    throw new Exception();
}

$a = array(new stdClass, new stdClass);
foreach (array($a, array(new stdClass)) as $b) {
	switch ($b[0]) {
		case false:
		break;
		default:
			try {
				$x = 2;
				$y = new stdClass;
				while ($x-- && new stdClass) {
					$r = array($x) + ($y ? ((array) $x) + array(2) : ops());
					$y = (array) $y;
				}
			} catch (Exception $e) {
			}
	}
}

foreach (array($a, array(new stdClass)) as $b) {
	try {
		switch ($b[0]) {
			case false:
			break;
			default:
				$x = 2;
				$y = new stdClass;
				while ($x-- && new stdClass) {
					$r = array($x) + ($y ? ((array) $x) + array(2) : ops());
					$y = (array) $y;
				}
		}
	} catch (Exception $e) {
	}
}

?>
==DONE==
--EXPECT--
==DONE==
