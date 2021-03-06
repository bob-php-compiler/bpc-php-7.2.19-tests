--TEST--
Test fprintf() function (variation - 4)
--SKIPIF--
<?php
$data_file = 'dump.txt';
if (!($fp = fopen($data_file, 'w'))) {
  die('skip File dump.txt could not be created');
}
?>
--FILE--
<?php

$char_variation = array( 'a', "a", 67, -67, 99 );

/* creating dumping file */
$data_file = 'dump.txt';
if (!($fp = fopen($data_file, 'wt')))
   return;

/* char type variations */
fprintf($fp, "\n*** Testing fprintf() for chars ***\n");
foreach( $char_variation as $char ) {
  fprintf( $fp, "\n");
  fprintf( $fp,"%c", $char );
}

fclose($fp);

print_r(file_get_contents($data_file));
echo "\nDone";

unlink($data_file);

?>
--EXPECTF--
*** Testing fprintf() for chars ***

 
 
C
%s
c
Done
