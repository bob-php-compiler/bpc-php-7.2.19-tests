--TEST--
Test parse_url() function : check values of URL related constants
--FILE--
<?php
/* Prototype  : proto mixed parse_url(string url, [int url_component])
 * Description: Parse a URL and return its components
 * Source code: ext/standard/url.c
 * Alias to functions:
 */

/*
 *  check values of URL related constants
 */
echo "PHP_URL_SCHEME: ", PHP_URL_SCHEME, PHP_EOL;
echo "PHP_URL_HOST: ", PHP_URL_HOST, PHP_EOL;
echo "PHP_URL_PORT: ", PHP_URL_PORT, PHP_EOL;
echo "PHP_URL_USER: ", PHP_URL_USER, PHP_EOL;
echo "PHP_URL_PASS: ", PHP_URL_PASS, PHP_EOL;
echo "PHP_URL_PATH: ", PHP_URL_PATH, PHP_EOL;
echo "PHP_URL_QUERY: ", PHP_URL_QUERY, PHP_EOL;
echo "PHP_URL_FRAGMENT: ", PHP_URL_FRAGMENT, PHP_EOL;

echo "Done";
?>
--EXPECTF--
PHP_URL_SCHEME: 0
PHP_URL_HOST: 1
PHP_URL_PORT: 2
PHP_URL_USER: 3
PHP_URL_PASS: 4
PHP_URL_PATH: 5
PHP_URL_QUERY: 6
PHP_URL_FRAGMENT: 7
Done
