--TEST--
"lcfirst()" function
--INI--
precision=14
--FILE--
<?php
/* Make a string's first character uppercase */

echo "#### Basic and Various operations ####\n";
$str_array = array(
		    "TesTing lcfirst.",
 		    "1.testing lcfirst",
		    "HELLO wORLD",
		    'HELLO wORLD',
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
/* loop to test working of lcfirst with different values */
foreach ($str_array as $string) {
  var_dump( lcfirst($string) );
}



echo "\n#### Testing Miscelleneous inputs ####\n";

echo "--- Testing arrays ---";
$str_arr = array("Hello", "?world", "!$%**()%**[][[[&@#~!", array());
var_dump( lcfirst($str_arr) );

echo "\n--- Testing lowercamelcase action call example ---\n";
class Setter {

    protected $vars = array('partnerName' => false);

    public function __call($m, $v) {
        if (stristr($m, 'set')) {
            $action = lcfirst(substr($m, 3));
            $this->$action = $v[0];
        }
    }

    public function __set($key, $value) {
        if (array_key_exists($key, $this->vars)) {
            $this->vars[$key] = $value;
        }
    }

    public function __get($key) {
        if (array_key_exists($key, $this->vars)) {
            return $this->vars[$key];
        }
    }
}

$class = new Setter();
$class->setPartnerName('partnerName');
var_dump($class->partnerName);

echo "\n--- Testing objects ---\n";
/* we get "Recoverable fatal error: saying Object of class could not be converted
        to string" by default when an object is passed instead of string:
The error can be  avoided by choosing the __toString magix method as follows: */

class stringObject {
  function __toString() {
    return "Hello world";
  }
}
$obj_string = new stringObject;

var_dump(lcfirst("$obj_string"));


echo "\n--- Testing Resources ---\n";
$filename1 = "dummy.txt";
$file1 = fopen($filename1, "w");                // creating new file

/* getting resource type for file handle */
$string1 = get_resource_type($file1);
$string2 = (int)get_resource_type($file1);      // converting stream type to int

/* $string1 is of "stream" type */
var_dump(lcfirst($string1));

/* $string2 holds a value of "int(0)" */
var_dump(lcfirst($string2));

fclose($file1);                                 // closing the file "dummy.txt"
unlink("$filename1");                           // deletes "dummy.txt"


echo "\n--- Testing a longer and heredoc string ---\n";
$string = <<<EOD
Abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
@#$%^&**&^%$#@!~:())))((((&&&**%$###@@@!!!~~~~@###$%^&*
abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
EOD;
var_dump(lcfirst($string));

echo "\n--- Testing a heredoc null string ---\n";
$str = <<<EOD
EOD;
var_dump(lcfirst($str));


echo "\n--- Testing simple and complex syntax strings ---\n";
$str = 'world';

/* Simple syntax */
var_dump(lcfirst("$str"));
var_dump(lcfirst("$str'S"));
var_dump(lcfirst("$strS"));

/* String with curly braces, complex syntax */
var_dump(lcfirst("${str}S"));
var_dump(lcfirst("{$str}S"));

echo "\n--- Nested lcfirst() ---\n";
var_dump(lcfirst(lcfirst("hello")));

echo "Done\n";
?>
--EXPECTF--
#### Basic and Various operations ####

Warning: Use of undefined constant somestring - assumed 'somestring' (this will throw an Error in a future version of PHP) in %s on line %d
string(16) "tesTing lcfirst."
string(17) "1.testing lcfirst"
string(11) "hELLO wORLD"
string(11) "hELLO wORLD"
string(1) " "
string(1) " "
string(2) " 0"
string(4) "abcd"
string(3) "xyz"
string(10) "somestring"
string(2) "-3"
string(2) "-3"
string(6) "-3.344"
string(6) "-3.344"
string(0) ""
string(4) "nULL"
string(1) "0"
string(1) "0"
string(1) "1"
string(4) "tRUE"
string(1) "1"
string(1) "1"
string(8) "1.234444"
string(0) ""
string(5) "fALSE"
string(1) " "
string(5) "     "
string(1) "b"
string(2) "\t"
string(1) "	"
string(2) "12"
string(8) "12twelve"

#### Testing Miscelleneous inputs ####
--- Testing arrays ---
Warning: lcfirst() expects parameter 1 to be string, array given in %s on line %d
NULL

--- Testing lowercamelcase action call example ---
string(%d) "partnerName"

--- Testing objects ---
string(11) "hello world"

--- Testing Resources ---
string(6) "stream"
string(1) "0"

--- Testing a longer and heredoc string ---
string(639) "abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz0123456789
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
string(5) "world"
string(7) "world'S"
string(0) ""
string(6) "worldS"
string(6) "worldS"

--- Nested lcfirst() ---
string(5) "hello"
Done
