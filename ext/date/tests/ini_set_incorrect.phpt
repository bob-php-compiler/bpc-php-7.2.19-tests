--TEST--
Test invalid time zone passed to ini_set
--FILE--
<?php

ini_set("date.timezone", "Incorrect/Zone");

?>
--EXPECTF--
Warning: Timezone ID 'Incorrect/Zone' is invalid in %sini_set_incorrect.php on line %d
