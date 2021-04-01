--TEST--
Exceptions before fatal error
--FILE--
<?php
function exception_error_handler($code, $msg) {
    throw new Exception($msg);
}

set_error_handler("exception_error_handler");

try {
    $foo->a();
} catch(Throwable $e) {
    var_dump($e->getMessage());
}

try {
    new $foo();
} catch(Throwable $e) {
    var_dump($e->getMessage());
}

try {
    throw $foo;
} catch(Throwable $e) {
    var_dump($e->getMessage());
}

try {
    $foo();
} catch(Throwable $e) {
    var_dump($e->getMessage());
}
/*
TODO
try {
    $foo::b();
} catch(Throwable $e) {
    var_dump($e->getMessage());
}
*/

try {
    $b = clone $foo;
} catch(Throwable $e) {
    var_dump($e->getMessage());
}

class b {
}

try {
    b::$foo();
} catch(Throwable $e) {
    var_dump($e->getMessage());
}
?>
--EXPECT--
string(37) "Call to a member function a() on null"
string(45) "Class name must be a valid object or a string"
string(22) "Can only throw objects"
string(30) "Function name must be a string"
string(35) "__clone method called on non-object"
string(30) "Function name must be a string"
