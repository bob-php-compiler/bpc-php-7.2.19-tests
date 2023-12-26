--TEST--
implement DateTimeInterface
--FILE--
<?php

interface CarbonInterface extends DateTimeInterface
{}

class Carbon extends DateTime implements CarbonInterface
{}

echo "ok";
?>
--EXPECT--
ok
