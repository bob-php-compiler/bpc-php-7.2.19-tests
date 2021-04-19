--TEST--
date_add() return false with wrong params
--CREDITS--
"Anna Filina" <afilina@phpquebec.org>
#PHPTestFest2009 2009-05-02
--INI--
date.timezone=UTC
display_errors=false
--FILE--
<?php
var_dump(date_add()); // invalid parameters
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_add(): 2 required, 0 provided in %s on line %d
 -- compile-error
