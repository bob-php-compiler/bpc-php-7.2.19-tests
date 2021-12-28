--TEST--
register_shutdown_function() & __call
--FILE--
<?php
class test {
        function _foo() {
                throw new Exception('test');
        }
        function __call($name=null, $args=null) {
                return test::_foo();
        }
}

try {
	var_dump(register_shutdown_function(array("test","__call")));
} catch (Error $e) {
	echo "\nException: " . $e->getMessage() . "\n";
}

echo "Done\n";
?>
--EXPECTF--
Warning: register_shutdown_function(): Invalid shutdown callback 'test::__call' passed in %s on line %d
bool(false)
Done
