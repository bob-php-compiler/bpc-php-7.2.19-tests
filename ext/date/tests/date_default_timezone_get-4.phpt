--TEST--
date_default_timezone_get() function [4]
--INI--
date.timezone=Incorrect/Zone
--FILE--
<?php
	echo date_default_timezone_get(), "\n";
?>
--EXPECTF--
Timezone ID 'Incorrect/Zone' is invalid
UTC
