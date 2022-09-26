--TEST--
zip_open() error conditions
--CREDITS--
Birgitte Kvarme <bitta@redpill-linpro.com>
#PHPTestFest2009 Norway 2009-06-09 \o/
--FILE--
<?php
echo "Test case 2:";
$zip = zip_open("i_dont_care_about_this_parameter", "this_is_one_to_many");

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function zip_open(): 1 at most, 2 provided in %s on line %d
 -- compile-error
