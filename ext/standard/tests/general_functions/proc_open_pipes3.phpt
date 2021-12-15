--TEST--
proc_open() with invalid pipes
--FILE--
<?php

for ($i = 3; $i<= 5; $i++) {
	$spec[$i] = array('pipe', 'w');
}

$spec[$i] = array('pi');
$proc = proc_open("sleep 1", $spec, $pipes);
if ($proc) {
    proc_close($proc);
}

$spec[$i] = 1;
$proc = proc_open("sleep 1", $spec, $pipes);
if ($proc) {
    proc_close($proc);
}

$spec[$i] = array('pipe', "test");
$proc = proc_open("sleep 1", $spec, $pipes);
if ($proc) {
    proc_close($proc);
}
var_dump($pipes);

$spec[$i] = array('file', "test", "z");
$proc = proc_open("sleep 1", $spec, $pipes);
if ($proc) {
    proc_close($proc);
}
var_dump($pipes);

echo "END\n";
?>
--EXPECTF--
Warning: proc_open(): pi is not a valid descriptor spec/mode in %s on line %d

Warning: proc_open(): Descriptor item must be either an array or a File-Handle in %s on line %d
array(4) {
  [3]=>
  resource(%d) of type (Unknown)
  [4]=>
  resource(%d) of type (Unknown)
  [5]=>
  resource(%d) of type (Unknown)
  [6]=>
  resource(%d) of type (Unknown)
}

Warning: proc_open(test): `z' is not a valid mode in %s on line %d
array(4) {
  [3]=>
  resource(%d) of type (Unknown)
  [4]=>
  resource(%d) of type (Unknown)
  [5]=>
  resource(%d) of type (Unknown)
  [6]=>
  resource(%d) of type (Unknown)
}
END
