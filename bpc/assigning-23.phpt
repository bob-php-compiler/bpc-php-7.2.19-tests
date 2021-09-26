--TEST--
assigning tests
--FILE--
<?php

$a = '';

echo "==postcrement==\n";

try {
    $a[0]->p++;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p--;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==precrement==\n";

try {
    ++$a[0]->p;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    --$a[0]->p;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==assigning-string-cat==\n";

try {
    $a[0]->p .= 'A';
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==assigning-arithmetic-op==\n";

try {
    $a[0]->p += 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p -= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p *= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p /= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p %= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p **= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p <<= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p |= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p ^= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0]->p &= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECTF--
==postcrement==
Cannot increment/decrement string offsets
Cannot increment/decrement string offsets
==precrement==
Cannot increment/decrement string offsets
Cannot increment/decrement string offsets
==assigning-string-cat==
Cannot use string offset as an object
==assigning-arithmetic-op==
Cannot use string offset as an object
Cannot use string offset as an object
Cannot use string offset as an object
Cannot use string offset as an object
Cannot use string offset as an object
Cannot use string offset as an object
Cannot use string offset as an object
Cannot use string offset as an object
Cannot use string offset as an object
Cannot use string offset as an object
