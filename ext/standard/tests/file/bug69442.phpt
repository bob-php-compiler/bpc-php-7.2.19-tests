--TEST--
proc_open with PTY closes incorrect file descriptor
--FILE--
<?php
$cmd = '(echo "foo" ; exit 42;) 3>/dev/null; code=$?; echo $code >&3; exit $code';
$descriptors = array(array("pty"), array("pty"), array("pty"), array("pipe", "w"));
$pipes = array();

$process = proc_open($cmd, $descriptors, $pipes);

foreach ($pipes as $type => $pipe) {
    $data = fread($pipe, 999);
    echo 'type ' . $type . ' ';
    var_dump($data);
    fclose($pipe);
}
proc_close($process);
--EXPECT--
type 0 string(5) "foo
"
type 1 string(0) ""
type 2 string(0) ""
type 3 string(3) "42
"
