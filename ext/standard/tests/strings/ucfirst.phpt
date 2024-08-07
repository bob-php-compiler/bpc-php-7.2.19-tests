--TEST--
"ucfirst()" function
--INI--
precision=14
--FILE--
<?php
/* Make a string's first character uppercase */

echo "#### Basic and Various operations ####\n";
$str_array = array(
		    "testing ucfirst.",
 		    "1.testing ucfirst",
		    "hELLO wORLD",
		    'hELLO wORLD',
                    "\0",		// Null
                    "\x00",		// Hex Null
                    "\x000",
                    "abcd",		// double quoted string
                    'xyz',		// single quoted string
                    somestring,	// without quotes
                    "-3",
                    -3,
                    '-3.344',
                    -3.344,
                    NULL,
                    "NULL",
                    "0",
                    0,
                    TRUE,		// bool type
                    "TRUE",
                    "1",
                    1,
                    1.234444,
                    FALSE,
                    "FALSE",
                    " ",
                    "     ",
                    'b',		// single char
                    '\t',		// escape sequences
                    "\t",
                    "12",
                    "12twelve",		// int + string
	     	  );
/* loop to test working of ucfirst with different values */
foreach ($str_array as $string) {
  var_dump( ucfirst($string) );
}



echo "\n#### Testing Miscelleneous inputs ####\n";

echo "--- Testing arrays ---";
$str_arr = array("hello", "?world", "!$%**()%**[][[[&@#~!", array());
var_dump( ucfirst($str_arr) );

echo "\n--- Testing objects ---\n";
/* we get "Recoverable fatal error: saying Object of class could not be converted
        to string" by default when an object is passed instead of string:
The error can be  avoided by choosing the __toString magix method as follows: */

class xstringable {
  function __toString() {
    return "hello, world";
  }
}
$obj_string = new xstringable;

var_dump(ucfirst("$obj_string"));


echo "\n--- Testing Resources ---\n";
$filename1 = "dummy.txt";
$file1 = fopen($filename1, "w");                // creating new file

/* getting resource type for file handle */
$string1 = get_resource_type($file1);
$string2 = (int)get_resource_type($file1);      // converting stream type to int

/* $string1 is of "stream" type */
var_dump(ucfirst($string1));

/* $string2 holds a value of "int(0)" */
var_dump(ucfirst($string2));

fclose($file1);                                 // closing the file "dummy.txt"
unlink("$filename1");                           // deletes "dummy.txt"


echo "\n--- Testing a longer and heredoc string ---\n";
$string = <<<EOD
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
@#$%^&**&^%$#@!~:())))((((&&&**%$###@@@!!!~~~~@###$%^&*
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
EOD;
var_dump(ucfirst($string));

echo "\n--- Testing a heredoc null string ---\n";
$str = <<<EOD
EOD;
var_dump(ucfirst($str));


echo "\n--- Testing simple and complex syntax strings ---\n";
$str = 'world';

/* Simple syntax */
var_dump(ucfirst("$str"));
var_dump(ucfirst("$str'S"));
var_dump(ucfirst("$strS"));

/* String with curly braces, complex syntax */
var_dump(ucfirst("${str}S"));
var_dump(ucfirst("{$str}S"));

echo "\n--- Nested ucfirst() ---\n";
var_dump(ucfirst(ucfirst("hello")));

echo "Done\n";
?>
--EXPECTF--
#### Basic and Various operations ####

Warning: Use of undefined constant somestring - assumed 'somestring' (this will throw an Error in a future version of PHP) in %s on line %d
string(16) "Testing ucfirst."
string(17) "1.testing ucfirst"
string(11) "HELLO wORLD"
string(11) "HELLO wORLD"
string(1) " "
string(1) " "
string(2) " 0"
string(4) "Abcd"
string(3) "Xyz"
string(10) "Somestring"
string(2) "-3"
string(2) "-3"
string(6) "-3.344"
string(6) "-3.344"
string(0) ""
string(4) "NULL"
string(1) "0"
string(1) "0"
string(1) "1"
string(4) "TRUE"
string(1) "1"
string(1) "1"
string(8) "1.234444"
string(0) ""
string(5) "FALSE"
string(1) " "
string(5) "     "
string(1) "B"
string(2) "\t"
string(1) "	"
string(2) "12"
string(8) "12twelve"

#### Testing Miscelleneous inputs ####
--- Testing arrays ---
Warning: ucfirst() expects parameter 1 to be string, array given in %s on line %d
NULL

--- Testing objects ---
string(12) "Hello, world"

--- Testing Resources ---
string(6) "Stream"
string(1) "0"

--- Testing a longer and heredoc string ---
string(639) "Abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
@#$%^&**&^%$#@!~:())))((((&&&**%$###@@@!!!~~~~@###$%^&*
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789"

--- Testing a heredoc null string ---
string(0) ""

--- Testing simple and complex syntax strings ---
string(5) "World"
string(7) "World'S"
string(0) ""
string(6) "WorldS"
string(6) "WorldS"

--- Nested ucfirst() ---
string(5) "Hello"
Done
