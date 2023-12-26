--TEST--
implement DateTimeInterface
--FILE--
<?php

interface CarbonInterface extends DateTimeInterface
{}

class Carbon implements CarbonInterface
{}

echo "ok";
?>
--EXPECTF--
Fatal error: DateTimeInterface can't be implemented by user classes in %s on line %d
