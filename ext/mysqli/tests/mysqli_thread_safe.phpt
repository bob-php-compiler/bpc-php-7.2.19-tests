--TEST--
mysqli_thread_safe()
--FILE--
<?php
	if (!is_bool($tmp = mysqli_thread_safe()))
		printf("[001] Expecting boolean/any, got %s/%s.\n", gettype($tmp), $tmp);

	print "done!";
?>
--EXPECTF--
done!
