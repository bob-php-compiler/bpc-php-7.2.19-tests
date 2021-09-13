--TEST--
Behavior of failing compound assignment
--INI--
opcache.optimization_level=0
--FILE--
<?php

set_error_handler(function($type, $msg) { throw new Exception($msg); });

try {
	$a = array();
	$a .= "foo";
} catch (Throwable $e) { var_dump($a); }

try {
	$a = "foo";
	$a .= array();
} catch (Throwable $e) { var_dump($a); }

$x = new stdClass;
try { $x += 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x += new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x -= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x -= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x *= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x *= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x /= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x /= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x %= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x %= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x **= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x **= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x ^= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x ^= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x &= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x &= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x |= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x |= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x <<= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x <<= new stdClass; }
catch (Exception $e) {}
var_dump($x);

$x = new stdClass;
try { $x >>= 1; }
catch (Exception $e) {}
var_dump($x);

$x = 1;
try { $x >>= new stdClass; }
catch (Exception $e) {}
var_dump($x);
?>
--EXPECTF--
array(0) {
}
string(3) "foo"
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
object(stdClass)#%d (0) {
}
int(1)
