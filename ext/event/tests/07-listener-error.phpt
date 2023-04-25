--TEST--
Check for EventListener error behaviour
--SKIPIF--
<?php
if (!class_exists(EVENT_NS . "\\EventListener")) die("skip Event extra functions are disabled");
if (substr(PHP_OS, 0, 3) == "WIN") die('skip Not for Windows');
?>
--FILE--
<?php
$eventBaseClass = EVENT_NS . '\\EventBase';
$eventListenerClass = EVENT_NS . '\\EventListener';

$base = new $eventBaseClass();

$sock_paths = array (
	"unix:/tmp/".mt_rand().".sock" => TRUE,
	"UNIX:/tmp/".mt_rand().".sock" => TRUE,
	":/tmp/".mt_rand().".sock"     => FALSE,
	"/tmp/".mt_rand().".sock"      => FALSE,
);

if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
	foreach ($sock_paths as $path => $expect) {
		$res = true;

		try {
			$listener = @new $eventListenerClass($base, function() {}, NULL, 0, -1, $path);
		} catch (Exception $e) {
			$res = false;
		}

		if (file_exists($path)) {
			unlink($path);
		}

		var_dump($expect == $res);
	}
} else { // PHP5
	foreach ($sock_paths as $path => $expect) {
		$listener = @new $eventListenerClass($base, function() {}, NULL, 0, -1, $path);

		if (file_exists($path)) {
			unlink($path);
		}

		var_dump(is_null($listener) != $expect);
	}
}
?>
--EXPECTF--
bool(true)
bool(true)
bool(true)
bool(true)
