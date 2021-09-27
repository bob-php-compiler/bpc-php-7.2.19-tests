--TEST--
assigning tests
--FILE--
<?php

$a = array('');

echo "==postcrement==\n";

try {
    $a[0][0][]->p++;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p--;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==precrement==\n";

try {
    ++$a[0][0][]->p;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    --$a[0][0][]->p;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==assigning-string-cat==\n";

try {
    $a[0][0][]->p .= 'A';
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==assigning-arithmetic-op==\n";

try {
    $a[0][0][]->p += 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p -= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p *= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p /= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p %= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p **= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p <<= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p |= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p ^= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][0][]->p &= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECTF--
==postcrement==
Cannot use string offset as an array
Cannot use string offset as an array
==precrement==
Cannot use string offset as an array
Cannot use string offset as an array
==assigning-string-cat==
Cannot use string offset as an array
==assigning-arithmetic-op==
Cannot use string offset as an array
Cannot use string offset as an array
Cannot use string offset as an array
Cannot use string offset as an array
Cannot use string offset as an array
Cannot use string offset as an array
Cannot use string offset as an array
Cannot use string offset as an array
Cannot use string offset as an array
Cannot use string offset as an array
