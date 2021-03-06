--TEST--
Test each() function
--FILE--
<?php
/* Return the current key and value pair from an array
   and advance the array cursor */

echo "*** Testing each() : basic functionality ***\n";
$arrays = array (
	    array(0),
	    array(1),
	    array(-1),
	    array(1, 2, 3, 4, 5),
	    array(-1, -2, -3, 6, 7, 8),
 	    array("a", "ab", "abc", "abcd"),
	    array("1" => "one", "2" => "two", "3" => "three", "4" => "four"),
	    array("one" => 1, "two" => 2, 3 => "three", 4 => 4, "" => 5,
		  "  " => 6, "\x00" => "\x000", "\0" => "\0", "" => "",
		  TRUE => TRUE, FALSE => FALSE, NULL => NULL
		 ),
	    array("1.5" => "one.5", "-2.0" => "negative2.0"),
	    array(-5 => "negative5", -.05  => "negative.05")
	  );

/* loop through to check working of each() on different arrays */
$i = 0;
while( list( $key, $sub_array) = each($arrays) )  {
  echo "-- Iteration $i --\n";
  $c = count ($sub_array);
  $c++; 		// increment by one to create the situation
			// of accessing beyond array size
  while ( $c ) {
    var_dump( each($sub_array) );
    $c --;
  }
  /* assignment of an array to another variable resets the internal
     pointer of the array. check this and ensure that each returns
     the first element after the assignment */
  $new_array = $sub_array;
  var_dump( each($sub_array) );
  echo "\n";
  $i++;
}

echo "\n*** Testing each() : possible variations ***\n";
echo "-- Testing each() with reset() function --\n";
/* reset the $arrays and use each to get the first element */
var_dump( reset($arrays) );
var_dump( each($arrays) );  // first element
list($key, $sub_array) = each($arrays);  // now second element
var_dump( each($sub_array) );


echo "-- Testing each() with resources --\n";
$fp = fopen('/proc/self/comm', "r");
$dfp = opendir(".");

$resources = array (
  "file" => $fp,
  "dir" => $dfp
);

for( $i = 0; $i < count($resources); $i++) {
  var_dump( each($resources) );
}

echo "-- Testing each with objects --\n";

class each_class {
  private $var_private = 100;
  protected $var_protected = "string";
  public $var_public = array(0, 1, TRUE, NULL);
}
$each_obj = new each_class();
for( $i = 0; $i <= 2; $i++ ) {
  var_dump( each($each_obj) );
}

echo "-- Testing each() with null array --\n";
$null_array = array();
var_dump( each($null_array) );


echo "\n*** Testing error conditions ***\n";

/* unexpected argument type */
$var=1;
$str ="string";
$fl = "15.5";
var_dump( each($var) );
var_dump( each($str) );
var_dump( each($fl) );

// close resourses used
fclose($fp);
closedir($dfp);

echo "Done\n";
?>
--EXPECTF--
*** Testing each() : basic functionality ***

Deprecated: The each() function is deprecated. This message will be suppressed on further calls in %s on line %d
-- Iteration 0 --
array(4) {
  [1]=>
  int(0)
  ["value"]=>
  int(0)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
bool(false)
array(4) {
  [1]=>
  int(0)
  ["value"]=>
  int(0)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}

-- Iteration 1 --
array(4) {
  [1]=>
  int(1)
  ["value"]=>
  int(1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
bool(false)
array(4) {
  [1]=>
  int(1)
  ["value"]=>
  int(1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}

-- Iteration 2 --
array(4) {
  [1]=>
  int(-1)
  ["value"]=>
  int(-1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
bool(false)
array(4) {
  [1]=>
  int(-1)
  ["value"]=>
  int(-1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}

-- Iteration 3 --
array(4) {
  [1]=>
  int(1)
  ["value"]=>
  int(1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
array(4) {
  [1]=>
  int(2)
  ["value"]=>
  int(2)
  [0]=>
  int(1)
  ["key"]=>
  int(1)
}
array(4) {
  [1]=>
  int(3)
  ["value"]=>
  int(3)
  [0]=>
  int(2)
  ["key"]=>
  int(2)
}
array(4) {
  [1]=>
  int(4)
  ["value"]=>
  int(4)
  [0]=>
  int(3)
  ["key"]=>
  int(3)
}
array(4) {
  [1]=>
  int(5)
  ["value"]=>
  int(5)
  [0]=>
  int(4)
  ["key"]=>
  int(4)
}
bool(false)
array(4) {
  [1]=>
  int(1)
  ["value"]=>
  int(1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}

-- Iteration 4 --
array(4) {
  [1]=>
  int(-1)
  ["value"]=>
  int(-1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
array(4) {
  [1]=>
  int(-2)
  ["value"]=>
  int(-2)
  [0]=>
  int(1)
  ["key"]=>
  int(1)
}
array(4) {
  [1]=>
  int(-3)
  ["value"]=>
  int(-3)
  [0]=>
  int(2)
  ["key"]=>
  int(2)
}
array(4) {
  [1]=>
  int(6)
  ["value"]=>
  int(6)
  [0]=>
  int(3)
  ["key"]=>
  int(3)
}
array(4) {
  [1]=>
  int(7)
  ["value"]=>
  int(7)
  [0]=>
  int(4)
  ["key"]=>
  int(4)
}
array(4) {
  [1]=>
  int(8)
  ["value"]=>
  int(8)
  [0]=>
  int(5)
  ["key"]=>
  int(5)
}
bool(false)
array(4) {
  [1]=>
  int(-1)
  ["value"]=>
  int(-1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}

-- Iteration 5 --
array(4) {
  [1]=>
  string(1) "a"
  ["value"]=>
  string(1) "a"
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
array(4) {
  [1]=>
  string(2) "ab"
  ["value"]=>
  string(2) "ab"
  [0]=>
  int(1)
  ["key"]=>
  int(1)
}
array(4) {
  [1]=>
  string(3) "abc"
  ["value"]=>
  string(3) "abc"
  [0]=>
  int(2)
  ["key"]=>
  int(2)
}
array(4) {
  [1]=>
  string(4) "abcd"
  ["value"]=>
  string(4) "abcd"
  [0]=>
  int(3)
  ["key"]=>
  int(3)
}
bool(false)
array(4) {
  [1]=>
  string(1) "a"
  ["value"]=>
  string(1) "a"
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}

-- Iteration 6 --
array(4) {
  [1]=>
  string(3) "one"
  ["value"]=>
  string(3) "one"
  [0]=>
  int(1)
  ["key"]=>
  int(1)
}
array(4) {
  [1]=>
  string(3) "two"
  ["value"]=>
  string(3) "two"
  [0]=>
  int(2)
  ["key"]=>
  int(2)
}
array(4) {
  [1]=>
  string(5) "three"
  ["value"]=>
  string(5) "three"
  [0]=>
  int(3)
  ["key"]=>
  int(3)
}
array(4) {
  [1]=>
  string(4) "four"
  ["value"]=>
  string(4) "four"
  [0]=>
  int(4)
  ["key"]=>
  int(4)
}
bool(false)
array(4) {
  [1]=>
  string(3) "one"
  ["value"]=>
  string(3) "one"
  [0]=>
  int(1)
  ["key"]=>
  int(1)
}

-- Iteration 7 --
array(4) {
  [1]=>
  int(1)
  ["value"]=>
  int(1)
  [0]=>
  string(3) "one"
  ["key"]=>
  string(3) "one"
}
array(4) {
  [1]=>
  int(2)
  ["value"]=>
  int(2)
  [0]=>
  string(3) "two"
  ["key"]=>
  string(3) "two"
}
array(4) {
  [1]=>
  string(5) "three"
  ["value"]=>
  string(5) "three"
  [0]=>
  int(3)
  ["key"]=>
  int(3)
}
array(4) {
  [1]=>
  int(4)
  ["value"]=>
  int(4)
  [0]=>
  int(4)
  ["key"]=>
  int(4)
}
array(4) {
  [1]=>
  NULL
  ["value"]=>
  NULL
  [0]=>
  string(0) ""
  ["key"]=>
  string(0) ""
}
array(4) {
  [1]=>
  int(6)
  ["value"]=>
  int(6)
  [0]=>
  string(2) "  "
  ["key"]=>
  string(2) "  "
}
array(4) {
  [1]=>
  string(1) " "
  ["value"]=>
  string(1) " "
  [0]=>
  string(1) " "
  ["key"]=>
  string(1) " "
}
array(4) {
  [1]=>
  bool(true)
  ["value"]=>
  bool(true)
  [0]=>
  int(1)
  ["key"]=>
  int(1)
}
array(4) {
  [1]=>
  bool(false)
  ["value"]=>
  bool(false)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
bool(false)
array(4) {
  [1]=>
  int(1)
  ["value"]=>
  int(1)
  [0]=>
  string(3) "one"
  ["key"]=>
  string(3) "one"
}

-- Iteration 8 --
array(4) {
  [1]=>
  string(5) "one.5"
  ["value"]=>
  string(5) "one.5"
  [0]=>
  string(3) "1.5"
  ["key"]=>
  string(3) "1.5"
}
array(4) {
  [1]=>
  string(11) "negative2.0"
  ["value"]=>
  string(11) "negative2.0"
  [0]=>
  string(4) "-2.0"
  ["key"]=>
  string(4) "-2.0"
}
bool(false)
array(4) {
  [1]=>
  string(5) "one.5"
  ["value"]=>
  string(5) "one.5"
  [0]=>
  string(3) "1.5"
  ["key"]=>
  string(3) "1.5"
}

-- Iteration 9 --
array(4) {
  [1]=>
  string(9) "negative5"
  ["value"]=>
  string(9) "negative5"
  [0]=>
  int(-5)
  ["key"]=>
  int(-5)
}
array(4) {
  [1]=>
  string(11) "negative.05"
  ["value"]=>
  string(11) "negative.05"
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
bool(false)
array(4) {
  [1]=>
  string(9) "negative5"
  ["value"]=>
  string(9) "negative5"
  [0]=>
  int(-5)
  ["key"]=>
  int(-5)
}


*** Testing each() : possible variations ***
-- Testing each() with reset() function --
array(1) {
  [0]=>
  int(0)
}
array(4) {
  [1]=>
  array(1) {
    [0]=>
    int(0)
  }
  ["value"]=>
  array(1) {
    [0]=>
    int(0)
  }
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
array(4) {
  [1]=>
  int(1)
  ["value"]=>
  int(1)
  [0]=>
  int(0)
  ["key"]=>
  int(0)
}
-- Testing each() with resources --
array(4) {
  [1]=>
  resource(%d) of type (stream)
  ["value"]=>
  resource(%d) of type (stream)
  [0]=>
  string(4) "file"
  ["key"]=>
  string(4) "file"
}
array(4) {
  [1]=>
  resource(%d) of type (stream)
  ["value"]=>
  resource(%d) of type (stream)
  [0]=>
  string(3) "dir"
  ["key"]=>
  string(3) "dir"
}
-- Testing each with objects --
array(4) {
  [1]=>
  int(100)
  ["value"]=>
  int(100)
  [0]=>
  string(23) " each_class var_private"
  ["key"]=>
  string(23) " each_class var_private"
}
array(4) {
  [1]=>
  string(6) "string"
  ["value"]=>
  string(6) "string"
  [0]=>
  string(16) " * var_protected"
  ["key"]=>
  string(16) " * var_protected"
}
array(4) {
  [1]=>
  array(4) {
    [0]=>
    int(0)
    [1]=>
    int(1)
    [2]=>
    bool(true)
    [3]=>
    NULL
  }
  ["value"]=>
  array(4) {
    [0]=>
    int(0)
    [1]=>
    int(1)
    [2]=>
    bool(true)
    [3]=>
    NULL
  }
  [0]=>
  string(10) "var_public"
  ["key"]=>
  string(10) "var_public"
}
-- Testing each() with null array --
bool(false)

*** Testing error conditions ***

Warning: Variable passed to each() is not an array or object in %s on line %d
NULL

Warning: Variable passed to each() is not an array or object in %s on line %d
NULL

Warning: Variable passed to each() is not an array or object in %s on line %d
NULL
Done
