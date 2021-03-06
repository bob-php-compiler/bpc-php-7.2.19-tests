--TEST--
Test return type and value for expected input atanh()
--ARGS--
--bpc-include-file ext/standard/tests/math/allowed_rounding_error.inc \
--INI--
precision = 14
--FILE--
<?php
/*
 * proto float atanh(float number)
 * Function is implemented in ext/standard/math.c
*/

$file_path = dirname(__FILE__);
require($file_path."/allowed_rounding_error.inc");

echo "atanh  0.46211715726001 = ";
var_dump(atanh(0.46211715726001));
if (allowed_rounding_error(atanh(0.46211715726001), 0.5))
{
	echo "Pass\n";
}
else {
	echo "Fail\n";
}

echo "atanh  0.99505475368673 = ";
var_dump(atanh(0.99505475368673));
if (allowed_rounding_error(atanh(0.99505475368673), 3.0))
{
	echo "Pass\n";
}
else {
	echo "Fail\n";
}


?>
--EXPECTF--
atanh  0.46211715726001 = float(%f)
Pass
atanh  0.99505475368673 = float(%f)
Pass
