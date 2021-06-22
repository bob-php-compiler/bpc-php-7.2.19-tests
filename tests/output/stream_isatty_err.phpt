--TEST--
Test stream_isatty with redirected STDERR
--SKIPIF--
<?php
if (getenv("SKIP_IO_CAPTURE_TESTS")) {
	die("skip I/O capture test");
}
?>
--ARGS--
--bpc-include-file tests/output/stream_isatty.inc
--CAPTURE_STDIO--
STDERR
--FILE--
<?php
require dirname(__FILE__).'/stream_isatty.inc';
testToStdErr();
?>
--EXPECTF--
STDIN (constant): bool(true)
STDIN (fopen): bool(true)
STDIN (php://fd/0): bool(true)
STDOUT (constant): bool(false)
STDOUT (fopen): bool(false)
STDOUT (php://fd/1): bool(false)
STDERR (constant): bool(false)
STDERR (fopen): bool(false)
STDERR (php://fd/2): bool(false)
Not a stream: bool(false)
Invalid stream (php://input): bool(false)
File stream: bool(false)
