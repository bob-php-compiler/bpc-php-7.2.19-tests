--TEST--
Scalar type nullability
--FILE--
<?php

$errnames = array(
    E_NOTICE => 'E_NOTICE',
    E_WARNING => 'E_WARNING',
    E_RECOVERABLE_ERROR => 'E_RECOVERABLE_ERROR'
);
set_error_handler(function (int $errno, string $errmsg, string $file, int $line) {
    global $errnames;
    echo "$errnames[$errno]: $errmsg on line $line\n";
    return true;
});

function int_nullable(int $i = NULL) { return $i; }
function float_nullable (float $f = NULL) { return $f; }
function string_nullable (string $s = NULL) { return $s; }
function bool_nullable (bool $b = NULL) { return $b; }

$functions = array(
    'int' => function (int $i) { return $i; },
    'float' => function (float $f) { return $f; },
    'string' => function (string $s) { return $s; },
    'bool' => function (bool $b) { return $b; },
    'int nullable' => 'int_nullable',
    'float nullable' => 'float_nullable',
    'string nullable' => 'string_nullable',
    'bool nullable' => 'bool_nullable'
);

foreach ($functions as $type => $function) {
    echo "Testing $type:", PHP_EOL;
    try {
        var_dump($function(null));
    } catch (TypeError $e) {
        echo "*** Caught " . $e->getMessage() . PHP_EOL;
    }
}

echo PHP_EOL . "Done";
?>
--EXPECTF--
Testing int:
*** Caught Argument 1 passed to {closure}() must be of the type integer, null given, called in %s on line %d and defined
Testing float:
*** Caught Argument 1 passed to {closure}() must be of the type float, null given, called in %s on line %d and defined
Testing string:
*** Caught Argument 1 passed to {closure}() must be of the type string, null given, called in %s on line %d and defined
Testing bool:
*** Caught Argument 1 passed to {closure}() must be of the type boolean, null given, called in %s on line %d and defined
Testing int nullable:
NULL
Testing float nullable:
NULL
Testing string nullable:
NULL
Testing bool nullable:
NULL

Done
