--TEST--
statcache corruption
--FILE--
<?php
$a = stat('statcache-corruption.php');
is_link('statcache-corruption.php');
$b = stat('statcache-corruption.php');
print_r(array_diff($a, $b));
?>
--EXPECT--
Array
(
)
