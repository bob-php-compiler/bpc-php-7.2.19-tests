--TEST--
gmp_setbit() with large index
--SKIPIF--
<?php if (getenv("TRAVIS") === "true") die("skip not suitable for Travis-CI"); ?>
<?php if (!extension_loaded("gmp")) print "skip"; ?>
<?php if (PHP_INT_SIZE != 8) die("skip this test is for 64bit platform only"); ?>
<?php if (getenv("SKIP_SLOW_TESTS")) die("skip slow test"); ?>
<?php
	/* This test requires about 8G RAM which likely not to be present on an arbitrary CI. */
	if (!file_exists("/proc/meminfo")) {
		die("skip cannot determine free memory amount.");
	}
	$s = file_get_contents("/proc/meminfo");
	$free = 0;
	if (preg_match(",MemFree:\s+(\d+)\s+kB,", $s, $m)) {
		/* Got amount in kb. */
		$free = $m[1]/1024/1024;
	}
	if ($free < 8) {
		die("skip not enough free RAM.");
	}
?>
--FILE--
<?php

ini_set('memory_limit', '-1');

$n = gmp_init("227200");
for($a = 1<<30; $a > 0 && $a < 0x8000000000; $a <<= 2) {
	$i = $a - 1;
    printf("%X\n", $i);
    gmp_setbit($n, $i, 1);
}
echo "Done\n";
?>
--EXPECTF--
3FFFFFFF
FFFFFFFF
3FFFFFFFF
FFFFFFFFF
3FFFFFFFFF

Warning: gmp_setbit(): Index must be less than %d * %d in %s/gmp_setbit_long.php on line %d
Done
