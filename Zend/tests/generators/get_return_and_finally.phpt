--TEST--
Test interaction of Generator::getReturn() and finally
--FILE--
<?php

function gen1() {
    try {
        throw new Exception("gen1() throw");
    } finally {
        return 42;
    }
    yield;
}

$gen = gen1();

// BPC: return in finally not suppress Exception from try-body
try {
    var_dump($gen->getReturn());
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

function gen2() {
    try {
        return 42;
    } finally {
        throw new Exception("gen2() throw");
    }
    yield;
}

$gen = gen2();
try {
    // This will throw an exception (from the finally)
    // during auto-priming, so fails
    var_dump($gen->getReturn());
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
try {
    // This fails, because the return value was discarded
    var_dump($gen->getReturn());
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECT--
gen1() throw
gen2() throw
Cannot get return value of a generator that hasn't returned
