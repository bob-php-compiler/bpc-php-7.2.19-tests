--TEST--
Test trim() function
--FILE--
<?php

/* Prototype: string trim( string str [,string charlist] )
 * Strip whitespace (or other characters) from the beginning and end of a string.
 */

/* trim with unset/null/boolean variable - retuns an empty string */
echo "\n";
$null_var = NULL;
var_dump( trim($null_var) );
$null_var = "";
var_dump( trim($null_var) );
$null_var = 0;
var_dump( trim($null_var) );
$bool_val = true;
var_dump( trim($null_var) );

/* second argument charlist as null - does not trim any white spaces */
var_dump( trim("\ttesting trim", "") );
var_dump( trim("  \ttesting trim  ", NULL) );
var_dump( trim("\ttesting trim  ", true) );

/* Use of class and objects */
echo "\n*** Testing with OBJECTS ***\n";
class string1
{
  public function __toString() {
    return "Object";
  }
}
$obj = new string1;
var_dump( trim($obj, "Ot") );

/* String with embedded NULL */
echo "\n*** Testing with String with embedded NULL ***\n";
var_dump( trim("\x0n1234\x0005678\x0000efgh\xijkl\x0n1", "\x0n1") );

/* heredoc string */
$str = <<<EOD
us
ing heredoc string
EOD;

echo "\n*** Testing with heredoc string ***\n";
var_dump( trim($str, "us\ning") );

echo "\nDone";
?>
--EXPECTF--
string(0) ""
string(0) ""
string(1) "0"
string(1) "0"
string(13) "	testing trim"
string(17) "  	testing trim  "
string(15) "	testing trim  "

*** Testing with OBJECTS ***
string(4) "bjec"

*** Testing with String with embedded NULL ***
string(22) "234 05678 00efgh\xijkl"

*** Testing with heredoc string ***
string(12) " heredoc str"

Done
