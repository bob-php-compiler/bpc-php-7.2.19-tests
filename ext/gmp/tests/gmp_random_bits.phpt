--TEST--
gmp_random_bits() basic tests
--SKIPIF--
<?php if (!extension_loaded("gmp")) print "skip"; ?>
--FILE--
<?php

var_dump(gmp_random_bits(0));
var_dump(gmp_random_bits(-1));

// If these error the test fails.
gmp_random_bits(1);
gmp_random_bits(1024);

// 0.5 seconds to make sure the numbers stay in range
$start = microtime(true);
$limit = (2 ** 30) - 1;
while (1) {
    $breakWhile = false;
	for ($i = 0; $i < 5000; $i++) {
		$result = gmp_random_bits(30);
		if ($result < 0 || $result > $limit) {
			print "RANGE VIOLATION\n";
			var_dump($result);
			$breakWhile = true;
			break;
		}
	}
	if ($breakWhile) {
	    break;
	}

	if (microtime(true) - $start > 0.5) {
		break;
	}
}

echo "Done\n";
?>
--EXPECTF--
Warning: gmp_random_bits(): The number of bits must be positive in %s on line %d
bool(false)

Warning: gmp_random_bits(): The number of bits must be positive in %s on line %d
bool(false)
Done
