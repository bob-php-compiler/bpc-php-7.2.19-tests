--TEST--
Bug #72598.2 (Reference is lost after array_slice())
--FILE--
<?php
function ref(&$ref) {
	var_dump($ref);
	$ref = 1;
}

class A {
        function __construct() {
		$b = 0;
                $args = array(&$b);
		unset($b);
                for ($i = 0; $i < 2; $i++) {
                        $a = array_slice($args, 0, 1);
                        call_user_func_array('ref', $a);
                }
        }
}

new A;
?>
--EXPECTF--
int(0)
int(1)
