--TEST--
Test is_callable() function : usage variations - anonymous class method
--FILE--
<?php

class A {
    function __construct() {
        $fname = null;
        if (is_callable(array($this, 'f'), false, $fname)) {
            call_user_func(array($this, 'f'));
        } else {
            echo "dang\n";
        }
    }
    function f() {
        echo "nice\n";
    }
}

new A;

?>
--EXPECT--
nice
