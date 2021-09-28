--TEST--
Exceptions thrown in operand cleaning must cause leak of return value
--FILE--
<?php

class C1
{
    function __toString() { return "a"; }
    function __destruct() { throw new Exception; }
}

class C2
{
    function __destruct() { throw new Exception; }
}

class C5
{
    function __get($x) { return array(0); }
    function __set($x, $y) {}
}

class C6
{
    public $bar = array(0);
    function __get($x) { return $this->bar; }
}

class C7 implements ArrayAccess
{
    function offsetGet($x) { return array(0); }
    function offsetSet($x, $y) {}
    function offsetExists($x) { return true; }
    function offsetUnset($x) {}
}

class C8 implements ArrayAccess
{
    public $foo = array(0);
    function offsetGet($x) { return $this->foo; }
    function offsetSet($x, $y) {}
    function offsetExists($x) { return true; }
    function offsetUnset($x) {}
}

class C9 {
    function __construct() { $this->foo = new stdClass; }
    function __destruct() { throw new Exception; }
}

class C10
{
    function __get($x) { return new stdClass; }
    function __set($x, $y) {}
    function __destruct() { throw new Exception; }
}

class C11
{
    function __construct() { $this->bar = new stdClass; }
    function __get($x) { return $this->bar; }
    function __destruct() { throw new Exception; }
}

class C15 implements ArrayAccess
{
    function offsetGet($x) { return array(new stdClass); }
    function offsetSet($x, $y) {}
    function offsetExists($x) { return true; }
    function offsetUnset($x) {}
    function __destruct() { throw new Exception; }
}

class C26
{
    function __get($x) {}
    function __set($x, $y) { throw new Exception; }
}

class C27 implements ArrayAccess
{
    function offsetGet($x) {}
    function offsetSet($x, $y) { throw new Exception; }
    function offsetExists($x) { return true; }
    function offsetUnset($x) {}
}

class C29
{
    function __toString() { return "a"; }
    function __destruct() { throw new Exception; }
}

class C31
{
    function __toString() { $x = "Z"; return ++$x; }
    function __destruct() { throw new Exception; }
}

class C32
{
    function __clone() { throw new Exception; }
}

try {
	var_dump(new C1 . "foo");
} catch (Exception $e) { print "caught Exception 1\n"; }

try {
	var_dump(array(0) + array(new C2));
} catch (Exception $e) { print "caught Exception 2\n"; }

try {
	$foo = array(0);
	var_dump($foo += array(new C2));
} catch (Exception $e) { print "caught Exception 3\n"; }

try {
	$foo = (object)array("foo" => array(0));
	var_dump($foo->foo += array(new C2));
} catch (Exception $e) { print "caught Exception 4\n"; }

try {
	$foo = new C5;
	var_dump($foo->foo += array(new C2));
} catch (Exception $e) { print "caught Exception 5\n"; }

try {
	$foo = new C6;
	var_dump($foo->foo += array(new C2));
} catch (Exception $e) { print "caught Exception 6\n"; }

try {
	$foo = new C7;
	var_dump($foo[0] += array(new C2));
} catch (Exception $e) { print "caught Exception 7\n"; }

try {
	$foo = new C8;
	var_dump($foo[0] += array(new C2));
} catch (Exception $e) { print "caught Exception 8\n"; }

try {
	var_dump((function() { return new C9; })()->foo++);
} catch (Exception $e) { print "caught Exception 9\n"; }

try {
	var_dump((function() { return new C10; })()->foo++);
} catch (Exception $e) { print "caught Exception 10\n"; }

try {
	var_dump((function() { return new C11; })()->foo++);
} catch (Exception $e) { print "caught Exception 11\n"; }

try {
	var_dump(++(function() { return new C9; })()->foo);
} catch (Exception $e) { print "caught Exception 12\n"; }

try {
	var_dump(++(function() { return new C10; })()->foo);
} catch (Exception $e) { print "caught Exception 13\n"; }

try {
	var_dump(++(function() { return new C11; })()->foo);
} catch (Exception $e) { print "caught Exception 14\n"; }

try {
	var_dump((function() { return new C15; })()[0]++);
} catch (Exception $e) { print "caught Exception 15\n"; }

try {
	var_dump(++(function() { return new C15; })()[0]);
} catch (Exception $e) { print "caught Exception 16\n"; }

try {
	var_dump((new C9)->foo);
} catch (Exception $e) { print "caught Exception 17\n"; }

try {
	var_dump((new C10)->foo);
} catch (Exception $e) { print "caught Exception 18\n"; }

try {
	var_dump((new C15)[0]);
} catch (Exception $e) { print "caught Exception 19\n"; }

try {
	var_dump(isset((new C9)->foo->bar));
} catch (Exception $e) { print "caught Exception 20\n"; }

try {
	var_dump(isset((new C10)->foo->bar));
} catch (Exception $e) { print "caught Exception 21\n"; }

try {
	var_dump(isset((new C15)[0]->bar));
} catch (Exception $e) { print "caught Exception 22\n"; }

try {
	$foo = new C2;
	var_dump($foo = new stdClass);
} catch (Exception $e) { print "caught Exception 23\n"; }

try {
	$foo = array(new C2);
	var_dump($foo[0] = new stdClass);
} catch (Exception $e) { print "caught Exception 24\n"; }

try {
	$foo = (object) array("foo" => new C2);
	var_dump($foo->foo = new stdClass);
} catch (Exception $e) { print "caught Exception 25\n"; }

try {
	$foo = new C26;
	var_dump($foo->foo = new stdClass);
} catch (Exception $e) { print "caught Exception 26\n"; }

try {
	$foo = new C27;
	var_dump($foo[0] = new stdClass);
} catch (Exception $e) { print "caught Exception 27\n"; }

try {
	$foo = new C2;
	$bar = new stdClass;
	var_dump($foo = &$bar);
} catch (Exception $e) { print "caught Exception 28\n"; }

try {
	$f = function() {
		return new C29;
	};
	var_dump("{$f()}foo");
} catch (Exception $e) { print "caught Exception 29\n"; }

try {
	$f = function() {
		return new C29;
	};
	var_dump("bar{$f()}foo");
} catch (Exception $e) { print "caught Exception 30\n"; }

try {
	var_dump((string) new C31);
} catch (Exception $e) { print "caught Exception 31\n"; }

try {
	var_dump(clone (new C32));
} catch (Exception $e) { print "caught Exception 32\n"; }

?>
--EXPECTF--
Warning: in %s line 6: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 11: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 45: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 52: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 59: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 68: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 88: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

Warning: in %s line 94: Current implementation of class __destruct is very ugly!!! __destruct will never be called until program end!!! class objects memory will never be freed until program end!!!

string(4) "afoo"
array(1) {
  [0]=>
  int(0)
}
array(1) {
  [0]=>
  int(0)
}
array(1) {
  [0]=>
  int(0)
}
array(1) {
  [0]=>
  int(0)
}
array(1) {
  [0]=>
  int(0)
}
array(1) {
  [0]=>
  int(0)
}
array(1) {
  [0]=>
  int(0)
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}

Notice: Indirect modification of overloaded element of C15 has no effect in %s on line %d
array(1) {
  [0]=>
  object(stdClass)#%d (0) {
  }
}

Notice: Indirect modification of overloaded element of C15 has no effect in %s on line %d
array(1) {
  [0]=>
  object(stdClass)#%d (0) {
  }
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
array(1) {
  [0]=>
  object(stdClass)#%d (0) {
  }
}
bool(false)
bool(false)
bool(false)
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
object(stdClass)#%d (0) {
}
caught Exception 26
caught Exception 27
object(stdClass)#%d (0) {
}
string(4) "afoo"
string(7) "barafoo"
string(2) "AA"
caught Exception 32

Fatal error: Uncaught Exception in %stemporary_cleaning_013.php:6
Stack trace:
#0 %stemporary_cleaning_013.php(247): C1->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:45
Stack trace:
#0 %stemporary_cleaning_013.php(247): C9->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:52
Stack trace:
#0 %stemporary_cleaning_013.php(247): C10->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:59
Stack trace:
#0 %stemporary_cleaning_013.php(247): C11->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:45
Stack trace:
#0 %stemporary_cleaning_013.php(247): C9->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:52
Stack trace:
#0 %stemporary_cleaning_013.php(247): C10->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:59
Stack trace:
#0 %stemporary_cleaning_013.php(247): C11->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:68
Stack trace:
#0 %stemporary_cleaning_013.php(247): C15->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:68
Stack trace:
#0 %stemporary_cleaning_013.php(247): C15->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:45
Stack trace:
#0 %stemporary_cleaning_013.php(247): C9->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:52
Stack trace:
#0 %stemporary_cleaning_013.php(247): C10->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:68
Stack trace:
#0 %stemporary_cleaning_013.php(247): C15->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:45
Stack trace:
#0 %stemporary_cleaning_013.php(247): C9->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:52
Stack trace:
#0 %stemporary_cleaning_013.php(247): C10->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:68
Stack trace:
#0 %stemporary_cleaning_013.php(247): C15->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:11
Stack trace:
#0 %stemporary_cleaning_013.php(247): C2->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:88
Stack trace:
#0 %stemporary_cleaning_013.php(247): C29->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:88
Stack trace:
#0 %stemporary_cleaning_013.php(247): C29->__destruct()
#1 {main}

Next Exception in %stemporary_cleaning_013.php:94
Stack trace:
#0 %stemporary_cleaning_013.php(247): C31->__destruct()
#1 {main}
  thrown in %stemporary_cleaning_013.php on line 247
