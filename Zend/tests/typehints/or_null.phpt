--TEST--
Test "or null"/"or be null" in type-checking errors for userland functions
--FILE--
<?php

class XXX {}

function unloadedClass(?XXX $param) {}

try {
    unloadedClass(new StdClass);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}

class RealClass {}
interface RealInterface {}

function loadedClass(?RealClass $param) {}
function loadedInterface(?RealInterface $param) {}

try {
    loadedClass(new StdClass);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}

try {
    loadedInterface(new StdClass);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}

try {
    unloadedClass(1);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}

try {
    loadedClass(1);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}

try {
    loadedInterface(1);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}

function callableF(?callable $param) {}

try {
    callableF(1);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}
/*
function iterableF(iterable $param) {}

try {
    iterableF(1);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}
*/
function intF(?int $param) {}

try {
    intF(new StdClass);
} catch (TypeError $e) {
    echo $e, PHP_EOL;
}

?>
--EXPECTF--
TypeError: Argument 1 passed to unloadedclass() must be an instance of XXX or null, instance of stdClass given, called in %s on line 8 and defined in %s:5
Stack trace:
#0 %s(8): unloadedclass(Object(stdClass))
#1 {main}
TypeError: Argument 1 passed to loadedclass() must be an instance of RealClass or null, instance of stdClass given, called in %s on line 20 and defined in %s:16
Stack trace:
#0 %s(20): loadedclass(Object(stdClass))
#1 {main}
TypeError: Argument 1 passed to loadedinterface() must implement interface RealInterface or be null, instance of stdClass given, called in %s on line 26 and defined in %s:17
Stack trace:
#0 %s(26): loadedinterface(Object(stdClass))
#1 {main}
TypeError: Argument 1 passed to unloadedclass() must be an instance of XXX or null, integer given, called in %s on line 32 and defined in %s:5
Stack trace:
#0 %s(32): unloadedclass(1)
#1 {main}
TypeError: Argument 1 passed to loadedclass() must be an instance of RealClass or null, integer given, called in %s on line 38 and defined in %s:16
Stack trace:
#0 %s(38): loadedclass(1)
#1 {main}
TypeError: Argument 1 passed to loadedinterface() must implement interface RealInterface or be null, integer given, called in %s on line 44 and defined in %s:17
Stack trace:
#0 %s(44): loadedinterface(1)
#1 {main}
TypeError: Argument 1 passed to callablef() must be callable or null, integer given, called in %s on line 52 and defined in %s:49
Stack trace:
#0 %s(52): callablef(1)
#1 {main}
TypeError: Argument 1 passed to intf() must be of the type integer or null, object given, called in %s on line 68 and defined in %s:65
Stack trace:
#0 %s(68): intf(Object(stdClass))
#1 {main}
