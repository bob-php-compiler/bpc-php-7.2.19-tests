--TEST--
assigning tests
--FILE--
<?php

$a = array('');

echo "==postcrement==\n";

try {
    $a[0][]->p++;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p--;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==precrement==\n";

try {
    ++$a[0][]->p;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    --$a[0][]->p;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==assigning-string-cat==\n";

try {
    $a[0][]->p .= 'A';
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

echo "==assigning-arithmetic-op==\n";

try {
    $a[0][]->p += 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p -= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p *= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p /= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p %= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p **= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p <<= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p |= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p ^= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    $a[0][]->p &= 2;
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECTF--
==postcrement==
[] operator not supported for strings
[] operator not supported for strings
==precrement==
[] operator not supported for strings
[] operator not supported for strings
==assigning-string-cat==
[] operator not supported for strings
==assigning-arithmetic-op==
[] operator not supported for strings
[] operator not supported for strings
[] operator not supported for strings
[] operator not supported for strings
[] operator not supported for strings
[] operator not supported for strings
[] operator not supported for strings
[] operator not supported for strings
[] operator not supported for strings
[] operator not supported for strings
