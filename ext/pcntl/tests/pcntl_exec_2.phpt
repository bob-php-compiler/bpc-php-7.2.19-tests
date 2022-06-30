--TEST--
pcntl_exec() 2
--FILE--
<?php
ob_implicit_flush();
if (getenv("PCNTL_EXEC_TEST_IS_CHILD")) {
	var_dump(getenv("FOO"));
	exit;
}
echo "ok\n";
pcntl_exec('./pcntl_exec_2', array('-n', __FILE__), array(
	"PCNTL_EXEC_TEST_IS_CHILD" => "1",
	"FOO" => "BAR",
	1 => "long")
);

echo "nok\n";
?>
--EXPECT--
ok
string(3) "BAR"
