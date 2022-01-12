--TEST--
for loop tests
--FILE--
<?php

for ($i = 0; $i < 3; $i++) {
    if ($i == 2) {
        break;
    }
}
var_dump($i);

?>
--EXPECT--
int(2)
