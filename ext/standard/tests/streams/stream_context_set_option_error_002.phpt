--TEST--
stream_context_set_option() function - error : missing argument
--CREDITS--
Jean-Marc Fontaine <jean-marc.fontaine@alterway.fr>
# Alter Way Contribution Day 2011
--FILE--
<?php
var_dump(stream_context_set_option());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function stream_context_set_option(): 2 required, 0 provided in %s on line %d
 -- compile-error
