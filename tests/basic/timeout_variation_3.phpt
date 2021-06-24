--TEST--
Timeout within eval
--SKIPIF--
<?php
	if (getenv("SKIP_SLOW_TESTS")) die("skip slow test");
?>
--ARGS--
--bpc-include-file tests/basic/timeout_config.inc --bpc-lib-path /tmp/timeout
--FILE--
<?php

include dirname(__FILE__) . DIRECTORY_SEPARATOR . "timeout_config.inc";

set_time_limit($t);

function hello ($t) {
	echo "call", PHP_EOL;
	busy_wait($t*2);
}

bpc_eval('/tmp/timeout', 'php-timeout-variation-3', 'hello($t);');
?>
never reached here
--EXPECTF--
call

Fatal error: Maximum execution time of 3 seconds exceeded in %s on line %d
