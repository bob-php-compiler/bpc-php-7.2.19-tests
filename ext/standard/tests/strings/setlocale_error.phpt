--TEST--
Test setlocale() function : error condition
--INI--
error_reporting=32767
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) == 'WIN') {
    die('skip Not valid for windows');
}
?>
--FILE--
<?php
// E_ALL = 32767
/* Prototype  : string setlocale (int $category , string $locale [,string $..] )
              : string setlocale(int $category , array $locale);
 * Description: Sets locale information.Returns the new current locale , or FALSE if locale functionality is not implemented in this platform.
 * Source code: ext/standard/string.c
*/

echo "*** Testing setlocale() : error conditions ***\n";

echo "\n-- Testing setlocale() function with invalid locale array, 'category' = LC_ALL --\n";
//Invalid array of locales
$invalid_locales = array("en_US.invalid", "en_AU.invalid", "ko_KR.invalid");
var_dump( setlocale(LC_ALL,$invalid_locales) );

echo "\n-- Testing setlocale() function with invalid multiple locales, 'category' = LC_ALL --\n";
//Invalid array of locales
var_dump( setlocale(LC_ALL,"en_US.invalid", "en_AU.invalid", "ko_KR.invalid") );

echo "\n-- Testing setlocale() function with locale name too long, 'category' = LC_ALL --";
//Invalid locale - locale name too long
var_dump(setlocale(LC_ALL,str_pad('',255,'A')));

echo "\nDone";
?>
--EXPECTF--
*** Testing setlocale() : error conditions ***

-- Testing setlocale() function with invalid locale array, 'category' = LC_ALL --
bool(false)

-- Testing setlocale() function with invalid multiple locales, 'category' = LC_ALL --
bool(false)

-- Testing setlocale() function with locale name too long, 'category' = LC_ALL --
Warning: setlocale(): Specified locale name is too long in %s on line %d
bool(false)

Done
