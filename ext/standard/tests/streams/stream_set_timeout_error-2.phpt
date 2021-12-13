--TEST--
Test stream_set_timeout() function : error conditions
--FILE--
<?php
/* Prototype  : proto bool stream_set_timeout(resource stream, int seconds, int microseconds)
 * Description: Set timeout on stream read to seconds + microseonds
 * Source code: ext/standard/streamsfuncs.c
 * Alias to functions: socket_set_timeout
 */

echo "*** Testing stream_set_timeout() : error conditions ***\n";

for ($i=0; $i<100; $i++) {
  $port = rand(10000, 65000);
  /* Setup socket server */
  $server = @stream_socket_server("tcp://127.0.0.1:$port");
  if ($server) {
    break;
  }
}
/* Connect to it */
$client = fsockopen("tcp://127.0.0.1:$port");

// Testing stream_set_timeout with one less than the expected number of arguments
echo "\n-- Testing stream_set_timeout() function with less than expected no. of arguments --\n";

var_dump( stream_set_timeout($client) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function stream_set_timeout(): 2 required, 1 provided in %s on line %d
 -- compile-error
