--TEST--
Break out of while loop that is followed by a return statement and inside a foreach loop
--FILE--
<?php

$a = [42];
foreach ($a as $b) {
    $break = false;
    while (1) {
        $break = true;
        break;
    }
    if ($break) {
        break;
    }
    return;
}
?>
===DONE===
--EXPECT--
===DONE===
