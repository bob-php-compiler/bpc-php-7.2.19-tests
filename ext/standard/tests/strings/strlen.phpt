--TEST--
strlen() function
--INI--
precision = 12
--FILE--
<?php
/* returns the length of a given string */

echo "#### Basic operations and  variations ####\n";
$strings = array( "Hello, World",
		  'Hello, World',
		  '!!Hello, World',
		  "??Hello, World",
		  "$@#%^&*!~,.:;?",
		  "123",
		  123,
		  "-1.2345",
		  -1.2344,
		  NULL,
		  "",
		  " ",
		  "\0",
		  "\x000",					// len = 2
		  "\xABC",					// len = 2
		  "\0000",					// len = 2
		  "0",
		  0,
		  "\t", 					// len = 1
		  '\t', 					// len = 2
		  TRUE,
		  FALSE,
		  "Hello, World\0",
		  "Hello\0World",
		  'Hello, World\0',
		  "Hello, World\n",
		  "Hello, World\r",
		  "Hello, World\t",
		  "Hello, World\\",
		  "              ",
		  chr(128).chr(234).chr(65).chr(255).chr(256),

		  "abcdefghijklmnopqrstuvwxyz0123456789~!@#$%^&*()_+=|?><-;:$
                   []{}{{{}}}[[[[]][]]]***&&&^^%$###@@!!@#$%&^&**/////|\\\\\\
                   abcdefghijklmnopqrstuvwxyz0123456789~!@#$%^&*()_+=|?><-;:$
                   []{}{{{}}}[[[[]][]]]***&&&^^%$###@@!!@#$%&^&**/////|\\\\\\
                   abcdefghijklmnopqrstuvwxyz0123456789~!@#$%^&*()_+=|?><-;:$
                   []{}{{{}}}[[[[]][]]]***&&&^^%$###@@!!@#$%&^&**/////|\\\\\\
                   abcdefghijklmnopqrstuvwxyz0123456789"
		);

/* loop through to find the length of each string */
for($i=0; $i<count($strings); $i++) {
  echo "String length of '$strings[$i]' is => ";
  var_dump( strlen($strings[$i]) );
}



echo "\n#### Testing Miscelleneous inputs ####\n";

echo "--- Testing objects ---\n";
/* we get "Recoverable fatal error: saying Object of class could not be converted
	to string" by default when an object is passed instead of string:
The error can be  avoided by choosing the __toString magix method as follows: */

class xstringable {
  function __toString() {
    return "Hello, world";
  }
}
$obj_string = new xstringable;

var_dump(strlen("$obj_string"));


echo "\n--- Testing arrays ---\n";
$str_arr = array("hello", "?world", "!$%**()%**[][[[&@#~!", array());
var_dump(strlen($str_arr));
var_dump(strlen("$str_arr[1]"));
var_dump(strlen("$str_arr[2]"));

echo "\n--- Testing Resources ---\n";
$filename1 = "dummy.txt";
$file1 = fopen($filename1, "w");                // creating new file

/* getting resource type for file handle */
$string1 = get_resource_type($file1);
$string2 = (int)get_resource_type($file1);	// converting stream type to int

/* $string1 is of "stream" type */
var_dump(strlen($string1));            		// int(6)

/* $string2 holds a value of "int(0)" */
var_dump(strlen($string2));           		// int(1)

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
var_dump(strlen($string));

echo "\n--- Testing a heredoc null string ---\n";
$str = <<<EOD
EOD;
var_dump(strlen($str));


echo "\n--- Testing simple and complex syntax strings ---\n";
$str = 'world';

/* Simple syntax */
var_dump(strlen("$str"));
var_dump(strlen("$str'S"));
var_dump(strlen("$strS"));

/* String with curly braces, complex syntax */
var_dump(strlen("${str}S"));
var_dump(strlen("{$str}S"));

echo "\n--- strlen for long float values ---\n";
/* Here two different outputs, which depends on the rounding value
   before converting to string. Here Precision = 12  */
var_dump(strlen(10.55555555555555555555555555));   		// len = 13
var_dump(strlen(10.55555555595555555555555555));    		// len = 12

echo "\n--- Nested strlen() ---\n";
var_dump(strlen(strlen("Hello"))); 				// len=1

echo "Done\n";
?>
--EXPECTF--
Warning: truncate literal float '10.55555555555555555555555555' to '10.555555555555555', use string may avoid truncate
Warning: truncate literal float '10.55555555595555555555555555' to '10.555555555955555', use string may avoid truncate
#### Basic operations and  variations ####
String length of 'Hello, World' is => int(12)
String length of 'Hello, World' is => int(12)
String length of '!!Hello, World' is => int(14)
String length of '??Hello, World' is => int(14)
String length of '$@#%^&*!~,.:;?' is => int(14)
String length of '123' is => int(3)
String length of '123' is => int(3)
String length of '-1.2345' is => int(7)
String length of '-1.2344' is => int(7)
String length of '' is => int(0)
String length of '' is => int(0)
String length of ' ' is => int(1)
String length of ' ' is => int(1)
String length of ' 0' is => int(2)
String length of '�C' is => int(2)
String length of ' 0' is => int(2)
String length of '0' is => int(1)
String length of '0' is => int(1)
String length of '	' is => int(1)
String length of '\t' is => int(2)
String length of '1' is => int(1)
String length of '' is => int(0)
String length of 'Hello, World ' is => int(13)
String length of 'Hello World' is => int(11)
String length of 'Hello, World\0' is => int(14)
String length of 'Hello, World
' is => int(13)
String length of 'Hello, World' is => int(13)
String length of 'Hello, World	' is => int(13)
String length of 'Hello, World\' is => int(13)
String length of '              ' is => int(14)
String length of '��A� ' is => int(5)
String length of 'abcdefghijklmnopqrstuvwxyz0123456789~!@#$%^&*()_+=|?><-;:$
                   []{}{{{}}}[[[[]][]]]***&&&^^%$###@@!!@#$%&^&**/////|\\\
                   abcdefghijklmnopqrstuvwxyz0123456789~!@#$%^&*()_+=|?><-;:$
                   []{}{{{}}}[[[[]][]]]***&&&^^%$###@@!!@#$%&^&**/////|\\\
                   abcdefghijklmnopqrstuvwxyz0123456789~!@#$%^&*()_+=|?><-;:$
                   []{}{{{}}}[[[[]][]]]***&&&^^%$###@@!!@#$%&^&**/////|\\\
                   abcdefghijklmnopqrstuvwxyz0123456789' is => int(495)

#### Testing Miscelleneous inputs ####
--- Testing objects ---
int(12)

--- Testing arrays ---

Warning: strlen() expects parameter 1 to be string, array given in %s on line %d
NULL
int(6)
int(20)

--- Testing Resources ---
int(6)
int(1)

--- Testing a longer and heredoc string ---
int(639)

--- Testing a heredoc null string ---
int(0)

--- Testing simple and complex syntax strings ---
int(5)
int(7)
int(0)
int(6)
int(6)

--- strlen for long float values ---
int(13)
int(12)

--- Nested strlen() ---
int(1)
Done
