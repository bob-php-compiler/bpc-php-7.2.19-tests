--TEST--
Test timezone_offset_get() function : usage variation - Passing unexpected values to first argument $object.
--FILE--
<?php
/* Prototype  : int timezone_offset_get  ( DateTimeZone $object  , DateTime $datetime  )
 * Description: Returns the timezone offset from GMT
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTimeZone::getOffset()
 */

echo "*** Testing timezone_offset_get() : usage variation -  unexpected values to first argument \$object***\n";

//Set the default time zone
date_default_timezone_set("Europe/London");

set_error_handler('handler');

function handler($errno, $errstr) {
	if ($errno === E_RECOVERABLE_ERROR) {
		echo $errstr . "\n";
	}
}

//get an unset variable
$unset_var = 10;
unset ($unset_var);

// define some classes
class classWithToString
{
	public function __toString() {
		return "Class A object";
	}
}

class classWithoutToString
{
}

// heredoc string
$heredoc = <<<EOT
hello world
EOT;

// add arrays
$index_array = array (1, 2, 3);
$assoc_array = array ('one' => 1, 'two' => 2);

// resource
$file_handle = fopen('/proc/self/comm', 'r');

//array of values to iterate over
$inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -12345,

      // float data
      'float 10.5' => 10.5,
      'float -10.5' => -10.5,
      'float .5' => .5,

      // array data
      'empty array' => array(),
      'int indexed array' => $index_array,
      'associative array' => $assoc_array,
      'nested arrays' => array('foo', $index_array, $assoc_array),

      // null data
      'uppercase NULL' => NULL,
      'lowercase null' => null,

      // boolean data
      'lowercase true' => true,
      'lowercase false' =>false,
      'uppercase TRUE' =>TRUE,
      'uppercase FALSE' =>FALSE,

      // empty data
      'empty string DQ' => "",
      'empty string SQ' => '',

      // string data
      'string DQ' => "string",
      'string SQ' => 'string',
      'mixed case string' => "sTrInG",
      'heredoc' => $heredoc,

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,

      // resource
      'resource' => $file_handle
);

$datetime = new DateTime("2009-01-31 15:14:10");

foreach($inputs as $variation =>$object) {
    echo "\n-- $variation --\n";
	try {
		var_dump( timezone_offset_get($object, $datetime) );
	} catch (Error $ex) {
		echo $ex->getMessage()."\n";
	}
};

// closing the resource
fclose( $file_handle );

?>
===DONE===
--EXPECTF--
*** Testing timezone_offset_get() : usage variation -  unexpected values to first argument $object***

-- int 0 --
timezone_offset_get() expects parameter 1 to be DateTimeZone, integer given

-- int 1 --
timezone_offset_get() expects parameter 1 to be DateTimeZone, integer given

-- int 12345 --
timezone_offset_get() expects parameter 1 to be DateTimeZone, integer given

-- int -12345 --
timezone_offset_get() expects parameter 1 to be DateTimeZone, integer given

-- float 10.5 --
timezone_offset_get() expects parameter 1 to be DateTimeZone, float given

-- float -10.5 --
timezone_offset_get() expects parameter 1 to be DateTimeZone, float given

-- float .5 --
timezone_offset_get() expects parameter 1 to be DateTimeZone, float given

-- empty array --
timezone_offset_get() expects parameter 1 to be DateTimeZone, array given

-- int indexed array --
timezone_offset_get() expects parameter 1 to be DateTimeZone, array given

-- associative array --
timezone_offset_get() expects parameter 1 to be DateTimeZone, array given

-- nested arrays --
timezone_offset_get() expects parameter 1 to be DateTimeZone, array given

-- uppercase NULL --
timezone_offset_get() expects parameter 1 to be DateTimeZone, null given

-- lowercase null --
timezone_offset_get() expects parameter 1 to be DateTimeZone, null given

-- lowercase true --
timezone_offset_get() expects parameter 1 to be DateTimeZone, boolean given

-- lowercase false --
timezone_offset_get() expects parameter 1 to be DateTimeZone, boolean given

-- uppercase TRUE --
timezone_offset_get() expects parameter 1 to be DateTimeZone, boolean given

-- uppercase FALSE --
timezone_offset_get() expects parameter 1 to be DateTimeZone, boolean given

-- empty string DQ --
timezone_offset_get() expects parameter 1 to be DateTimeZone, string given

-- empty string SQ --
timezone_offset_get() expects parameter 1 to be DateTimeZone, string given

-- string DQ --
timezone_offset_get() expects parameter 1 to be DateTimeZone, string given

-- string SQ --
timezone_offset_get() expects parameter 1 to be DateTimeZone, string given

-- mixed case string --
timezone_offset_get() expects parameter 1 to be DateTimeZone, string given

-- heredoc --
timezone_offset_get() expects parameter 1 to be DateTimeZone, string given

-- instance of classWithToString --
timezone_offset_get() expects parameter 1 to be DateTimeZone, classWithToString given

-- instance of classWithoutToString --
timezone_offset_get() expects parameter 1 to be DateTimeZone, classWithoutToString given

-- undefined var --
timezone_offset_get() expects parameter 1 to be DateTimeZone, null given

-- unset var --
timezone_offset_get() expects parameter 1 to be DateTimeZone, null given

-- resource --
timezone_offset_get() expects parameter 1 to be DateTimeZone, resource given
===DONE===
