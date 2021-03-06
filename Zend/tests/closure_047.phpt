--TEST--
Closure 047: Use in preg_replace_callback() using variables by reference
--SKIPIF--
skip closure no use
--FILE--
<?php

function replace_variables($text, $params) {

	preg_replace_callback( '/(\?)/', function($matches) use (&$params, &$text) {

		$text = preg_replace( '/(\?)/', array_shift( $params ), $text, 1 );

	}, $text );

	return $text;
}

echo replace_variables('a=?', array('0')) . "\n";
echo replace_variables('a=?, b=?', array('0', '1')) . "\n";
echo replace_variables('a=?, b=?, c=?', array('0', '1', '2')) . "\n";
echo "Done\n";
?>
--EXPECT--
a=0
a=0, b=1
a=0, b=1, c=2
Done
