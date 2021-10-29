--TEST--
Test setlocale() function : error condition
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip Not valid for windows');
}
?>
--FILE--
<?php
/* Prototype  : string setlocale (int $category , string $locale [,string $..] )
              : string setlocale(int $category , array $locale);
 * Description: Sets locale information.Returns the new current locale , or FALSE if locale functionality is not implemented in this platform.
 * Source code: ext/standard/string.c
*/

echo "*** Testing setlocale() : error conditions ***\n";

// Zero argument
echo "\n-- Testing setlocale() function with Zero arguments --";
var_dump( setlocale());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function setlocale(): 2 required, 0 provided in %s on line %d
 -- compile-error
